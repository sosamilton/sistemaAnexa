<?php
namespace Anexa\CooperadoraBundle\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Anexa\Model\Entity\Alumno;
use Anexa\Model\Entity\Cuota;
use Anexa\Model\Entity\Usuario;
use Anexa\Model\Entity\Responsable;
use ArrayObject;
use \Exception;


class listadoController {


	public function indexAction(){
		$coutasTodas = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findBy(array(
          'borrado' => false),
        array(
          'anio' => 'DESC',
          'mes' => 'DESC'
        ));
		$anios=array();
		$meses=array();
		$matriculas=array();
		foreach ($coutasTodas as $couta) {
			if ($couta->getTipo() == "matricula") {
				$matriculas[$couta->getAnio()]=$couta->getAnio();
			}
			$anios[$couta->getAnio()]=$couta->getAnio();
			$meses[$couta->getMes()]=$couta->getMes();
		}

		$datos['is_admin'] = false;
		$datos['is_gestion'] = false;
	    if (isset($_SESSION['rol'])) {
	        if ($_SESSION['rol'] == 'Administracion') {
	          	$usuarios = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findByBorrado(false);
	          	if (!empty($usuarios)) {
		            $es_gestion = array();
		            foreach ($usuarios as $user) {
		            	if ($user->getRol()->getNombre() == 'Gestion') {
			            	$es_gestion[] = $user;
			            }
		            }
	            	$datos['usuariosGestion'] =  $es_gestion;
	            	$datos['is_admin'] = true;
	          	}
	        } elseif ($_SESSION['rol'] == 'Gestion') {
	          $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
	          $datos['is_gestion'] = true;
	        }
	    }

		$datos['menu'] = 'listado';
		$datos['años_matricula'] = $matriculas;
		$datos['años'] = $anios;
		$datos['meses'] = $meses;
		return $GLOBALS['twig']->render('backend/listado/index.html.twig', $datos);
	} // fin index

	/* **********************MATRICULA****************************** */

	public function matriculaPagaAuxAction($request) {

		$matriculas = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findBy(
															array('tipo'=>'matricula','borrado'=>'false',
																  'anio'=>$request['anio'])
																			);
		$pagos = array();
		$alumnos = array();
		$datos['hayPagosMatricula'] = false;
		if (empty($matriculas)) {
			$datos['msj'] = "No existe la matrícula buscada";

		} else {
			$todosPagos = array();
			foreach ($matriculas as $matricula) {
				$pagos=$matricula->getPagos();
			}
			if (count($pagos) == 0) {
				$datos ['msj'] = 'No hay pagos de esta matrícula';
			}else{
				$datos['hayPagosMatricula'] = true;
				$iterator=$pagos->getIterator();
				$todosLosPagos=array();
	    		while($iterator->valid()){
			    	$todosLosPagos[$iterator->current()->getId()] = $iterator->current();
			    	$iterator->next();
				}
			}
		}
		if (isset($_SESSION['rol'])){
            if ($_SESSION['rol'] == 'Consulta') {
                $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
                $responsable = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Responsable")->findOneByUsuario($usuario);
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
		}

		if (count($pagos) > 0) {
			foreach ($pagos as $key => $pago) {
				$alumnos[$pago->getAlumno()->getId()]=array();
				$alumnos[$pago->getAlumno()->getId()]['data']=$pago->getAlumno();
				$alumnos[$pago->getAlumno()->getId()]['beca']=$pago;
				$alumnos[$pago->getAlumno()->getId()]['user']=$pago->getUsuario();
			}
			$datos['hayPagosMatricula'] = true;
		} else {
			$datos['msj'] = 'No hay alumnos que hayan pagado esta matrícula';
		}
		$datos['alumnos'] = $alumnos;

		$datos['menu'] = 'listado';
		$datos['anio'] = $request['anio'];
		$datos['info'] = 'Alumnos con matrícula paga del año '.$request['anio'];
		return $datos;
	} // fin aux

	public function matriculaPagaAction($request) {

		$datos = $this->matriculaPagaAuxAction($request);
		return $GLOBALS['twig']->render('backend/listado/matriculados.html.twig', $datos);
	} // fin matriculaPaga

	public function matriculasPagasPdfAction($request){

		$datos = $this->matriculaPagaAuxAction($request);
		$date=(new \DateTime())->format('Y-m-d H:i:s');
		header('Content-Type: application/pdf');
		header("Content-Type: application/force-download");
		header('Content-Disposition: attachment; filename="AlumnosConMatriculasPagasAl__'.$date.'.pdf"');
		$html= $GLOBALS['twig']->render('backend/listado/matriculadosPDF.html.twig', $datos);
		return $GLOBALS['pdf']->getOutputFromHtml($html);

	}

	/* *************************CUOTAS PAGAS ******************** */

	public function cuotasPagasAuxAction($request){

		$todos = false;
		$is_consulta = false;
		$datos['hayPagos'] = false;
		if (isset($request['userId'])) {
			if ($request['userId']) { //admin eligio un usuario de gestión
				$usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($request['userId']);
				$datos['gestionId'] = $request['userId'];
			} else { $todos = true;
					$datos['gestionId'] = 0;}
		}
		elseif (isset($_SESSION['rol'])){
			if ($_SESSION['rol'] == 'Consulta') {
				$is_consulta = true;
			}
			$usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
		}

		$cuota = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findOneBy(
					array('anio'=>$request['anio'],
						'mes' =>$request['mes'],
					'borrado'=>'false')
				);

		$alumnos = array();
		if (!empty($cuota)) {
			$pagos = $cuota->getPagos();
			if(count($pagos)>0) {
				$iterator=$pagos->getIterator();
				$todosLosPagos=array();
		    	while($iterator->valid()){
				    $todosLosPagos[$iterator->current()->getId()] = $iterator->current();
				    $iterator->next();
				}
				if ($is_consulta) {
			        $responsable = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Responsable")->findOneByUsuario($usuario);
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

					if (count($pagosAux) > 0) {
				        foreach ($pagosAux as $pago) {
							$alumnos[$pago->getAlumno()->getId()]=array();
							$alumnos[$pago->getAlumno()->getId()]['data']=$pago->getAlumno();
							$alumnos[$pago->getAlumno()->getId()]['beca']=$pago;
							$alumnos[$pago->getAlumno()->getId()]['user']=$pago->getUsuario();
						}
						$datos['info'] = 'Alumnos a cargo que pagaron la cuota del mes '.$request['mes'].' del año '.$request['anio'];
						$datos['hayPagos'] = true;

					} else {$datos['msj'] = 'No hay pagos registrados';}
				} else {
					foreach ($pagos as $pago) {
						if ( $todos or ($pago->getUsuario()->getUsername() == $usuario->getUsername())){
							$alumnos[$pago->getAlumno()->getId()]=array();
							$alumnos[$pago->getAlumno()->getId()]['data']=$pago->getAlumno();
							$alumnos[$pago->getAlumno()->getId()]['beca']=$pago;
							$alumnos[$pago->getAlumno()->getId()]['user']=$pago->getUsuario();
						}
					}
					if (count($alumnos) == 0) {
						$datos ['msj'] = 'El usuario '.$usuario->getUsername().' no registra pagos de esta cuota';
					}else {
						$datos['hayPagos'] = true;
						$datos['info'] = 'Alumnos que pagaron la cuota del mes '.$request['mes'].' del año '.$request['anio'];
					}
				} //fin usuario = gestion
			} else {
				$datos['hayPagos'] = false;
				$datos['msj'] = 'No alumnos que hayan pagado esta cuota';
			}
		} else {
			$datos['msj'] = 'La cuota del mes '.$request['mes'].' del año '.$request['anio'].' no existe.';
		}

		$datos['alumnos'] = $alumnos;
		$datos['menu'] = 'listado';
		$datos['anio'] = $request['anio'];
		$datos['mes'] = $request['mes'];

		return $datos;
	} // fin cuotas aux

	public function cuotasPagasAction($request){
		$datos = $this->cuotasPagasAuxAction($request);
		return $GLOBALS['twig']->render('backend/listado/cuotasPagas.html.twig', $datos);

	} // fin cuotas pagas

	public function cuotasPagasPdfAction($request){
		$datos = $this->cuotasPagasAuxAction($request);
		$date = (new \DateTime())->format('Y-m-d H:i:s');
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="AlumnosConCuotaPagaAl__'.$date.'.pdf"');
		$html= $GLOBALS['twig']->render('backend/listado/cuotasPagasPDF.html.twig', $datos);
		return $GLOBALS['pdf']->getOutputFromHtml($html);

	}

	/* ***************CUOTAS IMPAGAS ***************** */

	public function cuotasImpagasAuxAction($request) {

		function filtrarPorFecha($alumno,$anioCuota,$mesCuota) {
		      $fechaIngreso = $alumno->getFechaIngreso();
		      $anioIngreso = (int)($fechaIngreso->format('Y')); //obtengo el año
		      $mesIngreso = (int)($fechaIngreso->format('m')); //obtengo el mes

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
		    	$anioEgreso = (int)($fechaEgreso->format('Y'));
		    	$mesEgreso = (int)($fechaEgreso->format('m'));
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

		$alumnos = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findByBorrado('false');
		$cuota = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findOneBy(
					array('anio'=>$request['anio'],
						'mes' =>$request['mes'],
						'borrado'=>'false',)
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
				if (filtrarPorFecha($alumno,$request['anio'],$request['mes'])) {
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
				$datos['hayCuotasImpagas'] = false;
				$datos ['msj'] = 'Todos los alumnos pagaron la cuota indicada';
			} else {
				$datos['hayCuotasImpagas'] = true;
				$datos['alumnos'] = $alumnosNoPagaronPeroDeberian; //todos los alumnos que deberian pagar
				if (isset($_SESSION['rol'])){
		            if ($_SESSION['rol'] == 'Consulta') {
				        $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
				        $responsable = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Responsable")->findOneByUsuario($usuario);
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
							$datos['alumnos'] = $misAlumnosQueDebenPagar;
				        }
					}
				}
			}
		} else {
			$datos ['msj'] = 'No existe la cuota indicada';
		}

		$datos['menu'] = 'listado';
		$datos['anio'] = $request['anio'];
		$datos['mes'] = $request['mes'];
		$datos['info'] = 'Alumnos que no pagaron la cuota del mes '.$request['mes'].' del año '.$request['anio'];

		return $datos;
	} //fin cuotasImpagas

	public function cuotasImpagasAction($request) {
		$datos = $this->cuotasImpagasAuxAction($request);
		return $GLOBALS['twig']->render('backend/listado/cuotasImpagas.html.twig', $datos);
	}

	public function cuotasImpagasPdfAction($request){

		$datos = $this->cuotasImpagasAuxAction($request);
		$date = (new \DateTime())->format('Y-m-d H:i:s');
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="AlumnosConCuotaImpagaAl__'.$date.'.pdf"');
		$html= $GLOBALS['twig']->render('backend/listado/cuotasImpagasPDF.html.twig', $datos);
		return $GLOBALS['pdf']->getOutputFromHtml($html);

	}

	public function comisionCobradaAuxAction($request){

		if (isset($_SESSION['rol']) && $_SESSION['rol'] == 'Gestion') {
			$usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
		}

		$misPagos = $usuario->getPagos();
		if (count($misPagos)==0) {
			$datos['msj'] = 'No se registran cuotas cobradas';
			$datos['hayCuotasCobradas'] = false;

		} else {
			$cuotas = array();
			$total = 0;
			$datos['hayCuotasCobradas'] = true;
			$datos['info'] = 'Total de comisión cobrada por '.$usuario->getUsername();
			foreach ($misPagos as $key => $pago) {
						$cuotas[$pago->getCuota()->getId()]=array();
						$cuotas[$pago->getCuota()->getId()]['data']=$pago->getCuota();
						$valor = ($pago->getCuota()->getComisionCobrador() * $pago->getCuota()->getMonto())/100;
						$cuotas[$pago->getCuota()->getId()]['montoCobrado']=$valor;
						$total = $total + $valor;
					}
			$datos['cuotas'] = $cuotas;
		}
		$datos['id'] = $usuario->getId();
		$datos ['menu'] = 'listado';
		$datos['total'] = $total;
		return $datos;

	}//fin comision

	public function comisionCobradaAction($request){
		$datos = $this->comisionCobradaAuxAction($request);
		return $GLOBALS['twig']->render('backend/listado/comisionCobrada.html.twig', $datos);
	}

	public function comisionCobradaPdfAction($request){

		$datos = $this->comisionCobradaAuxAction($request);
		$date = (new \DateTime())->format('Y-m-d H:i:s');
		header('Content-Type: application/pdf');
		header('Content-Disposition: attachment; filename="ComisionCobradaAlDia__'.$date.'.pdf"');
		$html= $GLOBALS['twig']->render('backend/listado/comisionCobradaPDF.html.twig', $datos);
		return $GLOBALS['pdf']->getOutputFromHtml($html);

	}

} // fin controller
