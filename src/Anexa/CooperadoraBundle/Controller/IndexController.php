<?PHP
namespace Anexa\CooperadoraBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Anexa\CooperadoraBundle\Entity\Couta;
use Anexa\CooperadoraBundle\Entity\Alumno;

class IndexController extends Controller{

	public function indexAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$config = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findAll();
		$data = array();
		$form = $this->createForm('Anexa\CooperadoraBundle\Form\ContactType', $data);
		$form->handleRequest($request);
		if ($form->isSubmitted() && $form->isValid() && $this->captchaverify($request->get('g-recaptcha-response'))) {
			$content = "Nombre:".$form['name']->getData() ."\n ";
			$content .= "Email:". $form['email']->getData()." \n\n";
			$content .= "Telefono:". $form['cel']->getData()." \n";
			$content .= "Mensaje:\n".$form['body']->getData()."\n";
			$subject = "Contacto de la WEB";
			$mail_to = "cooperadoraescuelaanexa@yahoo.com.ar";
			$headers = "From:". $form['name']->getData()." <".$form['email']->getData().">";
			$success = mail($mail_to, $subject, $content, $headers);
			if ($success) {
				$this->addFlash(
						'success',
						'El mensaje fue enviado correctamente.'
				);
			} else {
				$this->addFlash(
						'danger',
						'El mensaje no pudo ser enviado. Lo sentimos :('
				);
			}

		}

		return $this->render('AnexaCooperadoraBundle:frontend:index.html.twig', array(
			'data' => $config,
			'form' => $form->createView(),
		));
	}

	private function captchaverify($recaptcha){
			$url = "https://www.google.com/recaptcha/api/siteverify";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $url);
			curl_setopt($ch, CURLOPT_HEADER, 0);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, array(
					"secret"=>"6LcA5ZMUAAAAACncQVNg8PUF860FERTnfo3-KEYK","response"=>$recaptcha));
			$response = curl_exec($ch);
			curl_close($ch);
			$data = json_decode($response);

			return $data->success;
	}

	public function loginAction() {
       return $this->render('AnexaCooperadoraBundle:frontend:login.html.twig',array('error'=>false));
  }

		public function sendMailAction(){
			$to = "milton.sosa.22@gmail.com";
			$subject = "Cooperadora de Escuela Anexa";
			$txt = "Hello world!";
			$headers = "From: milton.sosa@info.unlp.edu.ar" . "\r\n";
			mail($to,$subject,$txt,$headers);
			return $this->indexAction();
		}

	public function consultaAction(Request $request){
		$em = $this->getDoctrine()->getManager();
		$respuesta=array();
		if ($request->isMethod('POST')) {
			$anio = $request->request->get('anio');
			$dni = $request->request->get('dni');
			$cuotasAlumno = $this->getPagosAlumno($anio, $dni);
			$respuesta['informacion']=$cuotasAlumno;
			$respuesta['dni']=$dni;
			$respuesta['anio']=$anio;
		}
		$respuesta['data'] = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findAll();
        return $this->render('AnexaCooperadoraBundle:consultas:index.html.twig', $respuesta);
	}

	protected function getPagosAlumno($anio, $alumno){
		$em = $this->getDoctrine()->getManager();
		$alumno = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findByDni($alumno);
		$cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findBy(array('anio'=>$anio, 'borrado'=>false)
				);

		$meses = array();
		$i = 0;
		foreach ($cuotas as $cuota) {
			$meses[$i] = $cuota->getMes();
			$i++;
		}

		$result = array();
		if ($alumno) {
			if ($cuotas) {
				$cuo = $em->getRepository('AnexaCooperadoraBundle:Cuota')->CuotasIngresoData($anio, $alumno);
				$cuotasAlumno = $em->getRepository('AnexaCooperadoraBundle:Cuota')->CuotasAlumnosPorAnio($anio, $alumno);
				array_unshift($cuotasAlumno, $cuo);

      	foreach (array_keys($meses) as $i) {
      		if (isset($cuotasAlumno[$i]['pago'])) {
      			$result[$i] = 'Si';
      		} else {
      			$result[$i] = 'No';
      		}

      	}
      	return array(
				'status' => true,
				'data' => $cuotasAlumno,
				'meses' => array_values($meses),
				'info' => 'Cuotas pagas del alumno: '.$alumno[0]->getApellido().", ".$alumno[0]->getNombre(),
				'pagos' => $result
			);
			} else {
				return array(
						'status' => false,
						'msj' => 'Ingrese un año válido!'
					);
			}
		} else {
			return array(
					'status' => false,
					'msj' => 'Ese número de DNI no se encuentra registrado. Por favor llená el formulario de contacto en la página principal con el número de DNI, el nombre del alumno, el curso y la división, así revisamos el problema. Gracias.'
				);
		}
	}

 }
