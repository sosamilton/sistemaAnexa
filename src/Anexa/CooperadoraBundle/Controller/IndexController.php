<?PHP
namespace Anexa\CooperadoraBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Anexa\CooperadoraBundle\Entity\Couta;
use Anexa\CooperadoraBundle\Entity\Alumno;

class IndexController extends Controller{

	public function indexAction(){
		$em = $this->getDoctrine()->getManager();
		$config = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findAll();
		return $this->render('AnexaCooperadoraBundle:frontend:index.html.twig', array( 'data' => $config));
	}

	public function loginAction() {

       return $this->render('AnexaCooperadoraBundle:frontend:login.html.twig',array('error'=>false));
    }

    public function sendMailAction(){
    	return $this->render('AnexaCooperadoraBundle:frontend:login.html.twig',array());
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

		$cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findBy
				(array('borrado'=>'false',
					'anio'=>$anio 
					)
				);
		$meses = array();
		$anios = array();
		$i = 0;
		foreach ($cuotas as $cuota) {
			$meses[$i] = $cuota->getMes();
			$anios[$cuota->getAnio()] = $cuota->getAnio();
			$i++;
		}
		$result = array();
		if ($alumno) {
			if ($cuotas) {
				$cuotasAlumno = $em->getRepository('AnexaCooperadoraBundle:Cuota')->CuotasAlumnosPorAnio($anio, $alumno);        	
	        	
	        	foreach (array_keys($meses) as $i) {
	        		if ($cuotasAlumno[$i]['pago']) {
	        			$result[$i] = 'Si';
	        		} else {
	        			$result[$i] = 'No';
	        		}
	        	}
	        	//var_dump($result); die;
				return array(
						'status' => true,
						'data' => $cuotasAlumno,
						'meses' => array_values($meses),
						'info' => 'Cuotas pagas del alumno',
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
					'msj' => 'El alumno no existe!'
				);
		} 
	}

 }
