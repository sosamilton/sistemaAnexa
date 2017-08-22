<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session; 
use Symfony\Component\HttpFoundation\Response;

use Anexa\CooperadoraBundle\Entity\Alumno;
use Anexa\CooperadoraBundle\Entity\Cuota;
use Anexa\CooperadoraBundle\Entity\User;
use ArrayObject;

/**
* Listado Controller
*/

class ListadoController extends Controller
{
	/**
	*
	**/

	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
		$cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findBy(array(
			'borrado'=>false),
		array(
			'anio'=>'DESC',
			'mes'=>'ASC'
			));
		$anios = array();
		$meses = array();
		$matriculas = array();
		foreach ($cuotas as $cuota) {
			if ($cuota->getTipo() == 'matricula') {
				$matriculas[$cuota->getAnio()] = $cuota->getAnio();
			}
			$anios[$cuota->getAnio()] = $cuota->getAnio();
			$meses[$cuota->getMes()] = $cuota->getMes();
		}

		/* {
				Falta manejo de usuarios con los permisos correspondientes
		}
		*/
        return $this->render('AnexaCooperadoraBundle:listado:index.html.twig', array(
        	'anios' => $anios,
        	'meses' => $meses,
        	'anios_matriculas' => $matriculas,
        	'menu' => 'listado'
        	));
	} // end index

	public function matriculadosAction(Request $request)
	{
		
		$em = $this->getDoctrine()->getManager();
		$matriculas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findBy(
								array('borrado'=>'false','tipo'=>'matricula',
									'anio'=>$request->request->get('anio'))
								);
		$pagos =array();
		$alumnos = array();
		$datos['success'] = false;
		$datos['hayPagosMatricula'] = false;
		
		$todospagos = array();
		foreach ($matriculas as $matricula) {
			$pagos=$matricula->getPagos();
		}

		if (count($pagos) == 0) {
			$datos['msj'] = 'No hay pagos registrados de esta matrícula';
		} else {
			$datos['hayPagosMatricula'] = true;
			$datos['success'] = true;
			$iterator = $pagos->getIterator();
			$todosLosPagos = array();
			while ($iterator->valid()) {
				$todosLosPagos[$iterator->current()->getId()] = $iterator->current();
				$iterator->next();
			}
		}
		
		
		if (count($pagos) > 0) {
			foreach ($pagos as $key => $pago) {
				$alumnos[$pago->getAlumno()->getId()]=array();
				$alumnos[$pago->getAlumno()->getId()]['data']=$pago->getAlumno();
				$alumnos[$pago->getAlumno()->getId()]['beca']=$pago;
				$alumnos[$pago->getAlumno()->getId()]['user']=$pago->getUser()->getUsername();
				
			}
			$datos['hayPagosMatricula'] = true;
			$datos['success'] = true;
		} else {
			$datos['msj'] = 'No hay alumnos que hayan pagado esta matrícula';
		}
		$datos['alumnos'] = $alumnos;
		$datos['menu'] = 'listado';
		$datos['anio'] = $request;
		$datos['info'] = 'Alumnos con matrícula paga del año '.$request->request->get('anio');

		return $this->render('AnexaCooperadoraBundle:listado:matriculasPagas.html.twig',$datos);

	} # fin matriculados

	public function cuotasPagasAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		
		$fecha= $request->request->all();
		
		$cuota = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findOneBy
				(array('borrado'=>'false',
					'anio'=>$fecha['anio'], 
					'mes'=>$fecha['mes'])
				);		
		
		$alumnos=array();
		$datos['hayPagos'] = false;
		$datos['success'] = false;
		if (!empty($cuota)) {
			$pagos = $cuota->getPagos();
			if (count($pagos)>0){
				$iterator = $pagos->getIterator();
				$todosLosPagos = array();
				while ($iterator->valid()) {
					$todosLosPagos[$iterator->current()->getId()] = $iterator->current();
					$iterator->next();
				}
				
				foreach ($pagos as $pago) {
					
						$alumnos[$pago->getAlumno()->getId()]=array();
						$alumnos[$pago->getAlumno()->getId()]['data']=$pago->getAlumno();
						$alumnos[$pago->getAlumno()->getId()]['beca']=$pago;
						$alumnos[$pago->getAlumno()->getId()]['user']=$pago->getUser()->getUsername();
				}
				if (count($alumnos) == 0) {
					$datos['msj'] = 'El usuario '.$usuario->getUsername().' no registra cobros de esta cuota';
				} else {
					$datos['hayPagos'] = true;
					$datos['success'] = true;
					switch ($fecha['mes']) {
						case 'Matricula':
						    $datos['info'] = 'Alumnos que pagaron la matrícula del año '.$fecha['anio'];
						    break;
						default:
						    $datos['info'] = 'Alumnos que pagaron la cuota de '.$fecha['mes'].' del año '.$fecha['anio'];
						    break;
					}
				}
			} else {
			
			$datos['msj'] = 'No hay alumnos que hayan pagado esta cuota';
		}
	} else { 
			$datos['msj'] = 'La cuota no existe';
		}
	$datos['alumnos'] = $alumnos; 
	$datos['menu'] = 'listado'; 

	return $this->render('AnexaCooperadoraBundle:listado:cuotasPagasyBecadas.html.twig',$datos);

	} // end cuotasPagas

	public function cuotasNoPagasAction(Request $request) 
	{
		$em = $this->getDoctrine()->getManager();
		$datos['hayCuotasImpagas'] = false;
		$datos['success'] = false;
		
		$alumnos = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findByBorrado('false');
		$fecha= $request->request->all();
		
		$cuota = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findOneBy
				(array('borrado'=>'false',
					'anio'=>$fecha['anio'], 
					'mes'=>$fecha['mes'])
				);
		$alumnosPagaron = array();
		$deberianPagar = array();
		if (!empty($cuota)) {
			$pagos = $cuota->getPagos();
			if (count($pagos) > 0) {							
    			$iterator = $pagos->getIterator();
		        while($iterator->valid()){
				    $alumnosPagaron[$iterator->current()->getAlumno()->getId()] = $iterator->current()->getAlumno();
				    $iterator->next();
				}
			}

			if (count($alumnos) > 0) {			
				$arrayobject = new ArrayObject($alumnos);
				$iterator = $arrayobject->getIterator();
		        while($iterator->valid()){
				    $deberianPagar[$iterator->current()->getId()] = $iterator->current();
				    $iterator->next();
				}
			}
			$alumnosNoPagaronPeroDeberian = array_diff_key($deberianPagar, $alumnosPagaron);

			if (count($alumnosNoPagaronPeroDeberian) == 0) { 
				$datos ['msj'] = 'Todos los alumnos pagaron la cuota indicada';
			} else {
				$datos['hayCuotasImpagas'] = true;
				$datos['success'] = true;
				$datos['alumnos'] = $alumnosNoPagaronPeroDeberian; //todos los alumnos que deberian pagar	
			}	
		} else {
			$datos ['msj'] = 'No existe la cuota indicada';
		}			
							
		$datos['menu'] = 'listado';
		$datos['anio'] = $fecha['anio'];
		switch ($fecha['mes']) {
			case 'Matricula':
			    $datos['info'] = 'Alumnos que no pagaron la matrícula del año '.$fecha['anio'];
			    break;
			default:
			    $datos['info'] = 'Alumnos que no pagaron la cuota de '.$fecha['mes'].' del año '.$fecha['anio'];
			    break;
		}		

		return $this->render('AnexaCooperadoraBundle:listado:cuotasNoPagas.html.twig',$datos);
	} //fin cuotasImpagas

	public function todosPagosAlumnosAux($anio)
	{
		$em = $this->getDoctrine()->getManager();
		$alumnos = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findByBorrado(false);
		$cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findBy
				(array('borrado'=>'false',
					'anio'=>$anio 
					)
				);
		$meses = array();
		$i = 0;
		foreach ($cuotas as $cuota) {
			$meses[$i] = $cuota->getMes();
			$i++;
		}
		
		$result = array();

		foreach ($alumnos as $key => $alumno) 
		{
        	$result[$alumno->getDni()] = array();
        	$result[$alumno->getDni()]['alumno'] = $alumno;
        	$aux = $em->getRepository('AnexaCooperadoraBundle:Cuota')->CuotasAlumnosPorAnio($anio, $alumno);       	
          	$aux[]=$em->getRepository('AnexaCooperadoraBundle:Cuota')->cuotasIngresoData($anio, $alumno);      	
        	foreach (array_keys($meses) as $i) {
        		if (isset($aux[$i]['pago'])) {
        			$result[$alumno->getDni()]['mes'][$i] = 'Si';
        		} else {
        			$result[$alumno->getDni()]['mes'][$i] = 'No';
        		}
        	} 
		}	

        return $datos=array('pagos' =>$result, 'meses' => array_values($meses));

	} //fin todosPagosAlumnosAux

	public function todosPagosAlumnosAction(Request $request)
	{
		$datos = $this->todosPagosAlumnosAux($request->request->get('anio'));
		$datos['menu'] = 'listado';
		$datos['info'] = 'Listado de cuotas pagas del año '.$request->request->get('anio');
		$datos['anio'] = $request->request->get('anio');
		return $this->render('AnexaCooperadoraBundle:listado:listadoTotal.html.twig', $datos);

	}// fin todosPagosAlumnosAction

	public function todosPagosAlumnosPdfAction(Request $request){
		
		$datos = $this->todosPagosAlumnosAux($request->get('anio'));
		$datos['info'] = 'Listado de cuotas pagas del año '.$request->get('anio');
		$date = (new \DateTime())->format('Y-m-d');
		$snappy = $this->get('knp_snappy.pdf');

		$html = $this->renderView('AnexaCooperadoraBundle:listado:listadoTotalPdf.html.twig', $datos);
		$filename='ListadoTotalDePagosAl_"'.$date.'.pdf"';
		return new Response($snappy->getOutPutFromHtml($html, array('orientation'=>'Landscape')), 200,
			array(
				'Content-Type'	=> 'application/pdf',
				'Content-Disposition'	=>'inline; filename="'.$filename. '.pdf"')); 

	} // fin todospagosAlumnosAction

} //end listadoController