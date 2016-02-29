<?PHP
namespace Anexa\Controller;

use \Anexa\Model\Entity\Pago;
use \Anexa\Model\Entity\Cuota;
use \Exception;

use Anexa\APP;

class estadisticaController {

	public function indexAction() {

		$cuotas =$GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findBy(array(
          'borrado' => false), array(
          'anio' => 'DESC',
        )); 
        $anios = array();
        if (!empty($cuotas)) {
			foreach ($cuotas as $cuota) {
				$anios[$cuota->getAnio()]=$cuota->getAnio();		
			}
		}else {
			$datos['msj'] = 'No se encontraron cuotas cargadas en el sistema';
		}

		$datos['menu'] = 'estadistica';
		$datos['anios'] = $anios;
		return $GLOBALS['twig']->render('backend/estadistica/index.html.twig', $datos);
	} // fin index


	public function graficarAuxAction($request){

		$cuotasDelAnio = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findByAnio(array($request['anio']),array('mes'=>'DESC'));
		$meses = array(
			'1' => 0,
			'2' => 0,
			'3' => 0,
			'4' => 0,
			'5' => 0,
			'6' => 0,
			'7' => 0,
			'8' => 0,
			'9' => 0,
			'10' => 0,
			'11' => 0,
			'12' => 0
		);
		$pagos=array();
		$tipo = 'Line';
		foreach ($cuotasDelAnio as $cuota) {
			$total = $cuota->getMonto()*count($cuota->getPagos());
			if (!isset($pagos[$cuota->getAnio()])){
				$pagos[$cuota->getAnio()]=array(
					'mensual' => $meses,
					'matricula' => $meses);
			}
			$pagos[$cuota->getAnio()][$cuota->getTipo()][$cuota->getMes()]+=$total;
		}

		if ($request['grafico'] == 'barra' ) {
			$tipo = 'Bar';
		}
		$datos['menu'] = 'estadistica';
		$datos['datos'] = $pagos;
		$datos['tipo']=$tipo;
		return $datos;
	} //fin

	public function graficarAction($request) {
		$datos = $this->graficarAuxAction($request);
		return $GLOBALS['twig']->render('backend/estadistica/graficos.html.twig', $datos);
	}

	public function graficarPdfAction($request) {
		$datos = $this->graficarAuxAction($request);
		$date=(new \DateTime())->format('Y-m-d H:i:s');
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; Estadisticas__'.$date.'.pdf"');
		$html= $GLOBALS['twig']->render('backend/estadistica/graficoPDF.html.twig', $datos);
		$GLOBALS['pdf']->setTimeout(2000);
		return $GLOBALS['pdf']->getOutputFromHtml($html, array(
		    'orientation' => 'Landscape', 
            'lowquality' => false,
            'encoding' => 'utf-8',
            'images' => true,
            'enable-javascript' => true,
            'javascript-delay' => 500,
        ));	
	} //fin graficar
	
 }
