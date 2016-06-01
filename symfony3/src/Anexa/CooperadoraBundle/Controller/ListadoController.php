<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Session\Session; 

use Anexa\CooperadoraBundle\Entity\Alumno;
use Anexa\CooperadoraBundle\Entity\Responsable;
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
			'mes'=>'DESC'
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
									'anio'=>$request)
								);
		$pagos =array();
		$alumnos = array();
		$datos['success'] = false;
		if (empty($matriculas)) {
			$datos['msj'] = 'No existe la matrícula buscada';
		} else {
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
		}

		if ($this->get('security.authorization_checker')->isGranted('ROLE_CONSULTA')) {
                $usuario = $em->getRepository('AnexaCooperadoraBundle:User')->findOneById($_SESSION['id']);
                $responsable = $em->getRepository("AnexaCooperadoraBundle:Responsable")->findOneByUser($usuario);
                $misAlumnos = $responsable->getAlumnosACargo();
    			$pagosMisAlumnos=array();
		        foreach ($misAlumnos as $alumno) {
		        	$iterator = $alumno->getPagos()->getIterator();
			    	while($iterator->valid()){
					    $pagosMisAlumnos[$iterator->current()->getId()] = $iterator->current();
						$iterator->next();
				  	}
		        }

				$pagosAux = array_intersect_key($pagosMisAlumnos, $todosLosPagos);
				$pagos = $pagosAux;             
		}
		
		if (count($pagos) > 0) {
			foreach ($pagos as $key => $pago) {
				$alumnos[$pago->getAlumno()->getId()]=array();
				$alumnos[$pago->getAlumno()->getId()]['data']=$pago->getAlumno();
				$alumnos[$pago->getAlumno()->getId()]['beca']=$pago;
				$alumnos[$pago->getAlumno()->getId()]['user']=$pago->getUsuario();
			}
			$datos['hayPagosMatricula'] = true;
			$datos['success'] = true;
		} else {
			$datos['msj'] = 'No hay alumnos que hayan pagado esta matrícula';
		}
		$datos['alumnos'] = $alumnos;
		$datos['menu'] = 'listado';
		$datos['anio'] = $request;
		$datos['info'] = 'Alumnos con matrícula paga del año '.$request;

		return $this->render('AnexaCooperadoraBundle:listado:matriculasPagas.html.twig',$datos);

	} # fin matriculados

	public function cuotasPagasAction(Request $request)
	{
		$em = $this->getDoctrine()->getManager();
		/* falta control de usuarios, ya sea de consulta (sólo listar los pagos de los alumnos a su cargo), admin (elige un usuario de gestión para ver las cuotas que cobro del año y mes seleccionados antes, esto es de la tercer entrega) o gestión (se asocia a si mismo con el cobro de la cuota ) */
		
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
				/* Un usuario de consulta sólo puede ver los pagos de los alumnos que tiene a cargo */
				if ($this->get('security.authorization_checker')->isGranted('ROLE_CONSULTA')) {
					$responsable = $em->getRepository('AnexaCooperadoraBundle:Responsable')->findOneByUsuario($_SESSION['id']);
					$misAlumnos = $responsable->getAlumnosACargo();

					$pagosMisAlumnos = array();
					foreach ($misAlumnos as $alumno) {
						$iterator = $alumno->getPagos()->getIterator();
						while ($iterator->valid()) {
							$pagosMisAlumnos[$iterator->current()->getId()] = $iterator->current();
							$iterator->next();
						}
					}
					$pagosAux = array_intersect_key($pagosMisAlumnos, $todosLosPagos);

					if (count($pagosAux) > 0) {
						foreach ($pagosAux as $pago) {
							$alumnos[$pago->getAlumno()->getId()] = array();
							$alumnos[$pago->getAlumno()->getId()]['data'] = $pago->getAlumno();
							$alumnos[$pago->getAlumno()->getId()]['beca'] =$pago;
							$alumnos[$pago->getAlumno()->getId()]['user'] = $pago->getUsuario();

						}
						$datos['info'] = 'Alumnos a cargo que pagaron la cuota del mes';
						$datos['hayPagos'] = true;
						$datos['success'] = true;
					} else { $datos['msj'] = 'No hay pagos registrados';}
				} else { #cuotas cobradas por el usuario de gestión logueado */
					foreach ($pagos as $pago) {
						if ( /*todos or */$pago->getUsuario()->getUsername() == $usuario->getUsername()) {
							$alumnos[$pago->getAlumno()->getId()]=array();
							$alumnos[$pago->getAlumno()->getId()]['data']=$pago->getAlumno();
							$alumnos[$pago->getAlumno()->getId()]['beca']=$pago;
							$alumnos[$pago->getAlumno()->getId()]['user']=$pago->getUsuario();
						}
					}
					if (count($alumnos) == 0) {
						$datos['msj'] = 'El usuario '.$usuario->getUsername().' no registra cobros de esta cuota';
					} else {
						$datos['hayPagos'] = true;
						$datos['success'] = true;
						$datos['info'] = 'Alumnos que pagaron la cuota del mes '.$_POST['mes'].' del año '.$_POST['anio'];
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

		function filtrarPorFecha($alumno,$anioCuota,$mesCuota) {
		    $fechaIngreso = $alumno->getFechaIngreso();
		    $anioIngreso= (int)(substr($fechaIngreso,0,4)); //obtengo el año
            $mesIngreso = (int)(substr($fechaIngreso,5,2)); //obtengo el mes

		    $fechaEgreso = $alumno->getFechaEgreso();	    
		    if ($fechaEgreso == null) {
		      	
		        if ( $anioCuota > $anioIngreso) {
		          return true;
		         }elseif ($anioCuota < $anioIngreso) {
		         	return false;
		        } elseif ($mesCuota >= $mesIngreso) {
		            return true;
		          } else {
		          	return false;}
		        
		    } else {
		    	$anioEgreso= (int)(substr($fechaEgreso,0,4));
                $mesEgreso= (int)(substr($fechaEgreso,5,2));
		    	if ($anioCuota < $anioEgreso) {
		        	if ($anioCuota > $anioIngreso) {
		        		return true;
		        	}
		        	elseif ($anioCuota < $anioIngreso) {
		        		return false;

		        	} elseif ($mesCuota >= $mesIngreso) {
		        		return true;
		        		} else {
		        			return false;
		        		}
		    	} elseif ($anioCuota > $anioEgreso){
		        	return false;
		        	}  elseif ($mesCuota <= $mesEgreso) {
		        		return true;
		        		} else {
		        			return false;
		        		}	
		    }	              
		              
		} // fin filtrar
		
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
			$deberianPagarAux = array();
			foreach ($alumnos as $alumno) {
				if (filtrarPorFecha($alumno,(int)$_POST['anio'],(int)$_POST['mes'])) {					
					$deberianPagarAux[$alumno->getId()] = $alumno;
				} 					
			}

			if (count($deberianPagarAux) > 0) {			
				$arrayobject = new ArrayObject($deberianPagarAux);
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
				if ($this->get('security.authorization_checker')->isGranted('ROLE_CONSULTA')) {
			        $usuario = $em->getRepository('AnexaCooperadoraBundle:User')->findOneById($_SESSION['id']);
			        $responsable = $em->getRepository("AnexaCooperadoraBundle:Responsable")->findOneByUsuario($usuario);
			        $misAlumnos = $responsable->getAlumnosACargo();
	    			$misAlumnosAux=array();
			        $iterator = $misAlumnos->getIterator();
			    	while($iterator->valid()){
					    $misAlumnosAux[$iterator->current()->getId()] = $iterator->current();
						$iterator->next();
				  	}
			        $misAlumnosQueDebenPagar =  array_intersect_key($misAlumnosAux, $alumnosNoPagaronPeroDeberian);
			        if (count($misAlumnosQueDebenPagar) > 0) {
			        	$datos['hayCuotasImpagas'] = true;
			        	$datos['success'] = true;
						$datos['alumnos'] = $misAlumnosQueDebenPagar;
			        }     
				}	
			}	
		} else {
			$datos ['msj'] = 'No existe la cuota indicada';
		}			
							
		$datos['menu'] = 'listado';
		$datos['anio'] = $_POST['anio'];
		$datos['mes'] = $_POST['mes'];
		$datos['info'] = 'Alumnos que no pagaron la cuota del mes '.$_POST['mes'].' del año '.$_POST['anio'];

		return $this->render('AnexaCooperadoraBundle:listado:cuotasNoPagas.html.twig',$datos);
	} //fin cuotasImpagas

} //end listadoController