<?php
namespace Anexa\CooperadoraBundle\Controller;

use Anexa\Model\Entity\Cuota;
use Anexa\Model\Entity\Pago;
use Anexa\Model\Entity\Alumno;
use Doctrine\Common\Collections\ArrayCollection;
use \Exception;



class pagoController {

	public function indexAction(){ //muestra los alumnos

    $alumnos = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findByBorrado(false);
    if (count($alumnos == 0)){
      $datos = array ('msj' => ' No hay alumnos cargados en el sistema');
    }

    $datos = array(
      'alumnos' => $alumnos,
      'menu' => 'pago',
    );

    return $GLOBALS['twig']->render('backend/pago/index.html.twig', $datos);
  }

	public function verPagosAction($request, $datos = array()){

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
    /* ************************************** FILTRAR ******************************* */

    $datos['is_admin'] = false;
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
        }
    }

		if (isset($request['id'])) {
      $alumno = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findOneById($request['id']);
      $pagos = $alumno->getPagos(); //pagos realizados por el alumno
      if (count($pagos) == 0) {
        $datos=array(
              'msj' => ' El alumno/a '.$alumno->getApellido().' no tiene pagos realizados',
              'success' => 0
          );
      }
      //todas las cuotas del sistema
      $todasCuotas = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findBy(array(
          'borrado' => false),
        array(
          'anio' => 'DESC',
          'mes' => 'DESC'
        ));
       $cuotasPagas = array();
       $cuotasPagasAux = array();
        foreach ($pagos as $key => $pago) {
          $cuotasPagasAux[$pago->getCuota()->getId()]=array();
          $cuotasPagasAux[$pago->getCuota()->getId()]['data']=$pago->getCuota();
          $cuotasPagasAux[$pago->getCuota()->getId()]['beca']=$pago->getBecado();
          $cuotasPagas[] = $pago->getCuota(); //obtengo la cuota asociada con cada pago para obtener mes, año de la cuota
        }

      $cuotasNoPagas = array_diff($todasCuotas, $cuotasPagas); //diferencia entre todas las cuotas existentes
      $cuotasImpagas = array();
      foreach ($cuotasNoPagas as $cuota) {
        if (filtrarPorFecha($alumno, $cuota->getAnio(), $cuota->getMes())) {
          $cuotasImpagas[] = $cuota;
        }
      }
    }

    if (count($cuotasImpagas) == 0) {
      $datos['msjImpagas'] = 'El alumno '.$alumno->getApellido().' '.$alumno->getNombre().' no tiene cuotas impagas';
      $datos['success'] = 0;
      $datos['tieneCuotasImpagas'] = false;
    } else {
        $datos['cuotasImpagas'] = $cuotasImpagas;
        $datos['tieneCuotasImpagas'] = true;
    }

    if (count($cuotasPagas) == 0) {
      $datos['tieneCuotasPagas'] = false;
      $datos['msjPagas'] = 'El alumno '.$alumno->getApellido().' '.$alumno->getNombre().' no tiene cuotas pagas';
    } else {
      $datos['cuotasPagas'] = $cuotasPagasAux;
      $datos['tieneCuotasPagas'] = true;
    }
    $datos['menu'] = 'pago';

    $datos['alumno'] = $alumno;

    return $GLOBALS['twig']->render('backend/pago/listarPagos.html.twig', $datos);
	}// fin ver pagos

	public function pagoSeleccionadoAction($request) {

    if (isset($request['userId'])){
      $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($request['userId']);
    }
    elseif (isset($_SESSION['rol'])) {
        if ($_SESSION['rol'] == 'Gestion') {
          $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
        }
    }


    if (isset($request['alumnoId'])){
        $alumno = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findOneById($request['alumnoId']);
        if (isset($request['coutas'])) {
          foreach ($request['coutas'] as $id) {
            $cuota = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findOneById($id);

            $this->setAction($cuota, $alumno, $usuario, false, new Pago);
          }
        }
        if (isset($request['becas'])) {
          foreach ($request['becas'] as $id) {
            $cuota = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findOneById($id);
            $this->setAction($cuota, $alumno, $usuario, true, new Pago);
          }
        }
        $datos=array(
          'msj' => ' Los pagos fueron efectuados correctamente',
          'success' => 1
        );
        return $this->verPagosAction(array('id'=>$alumno->getId()), $datos);
    }else{
        return $this->indexAction();
    }
  }

  public function setAction($cuota, $alumno, $usuario, $beca, $pago) {
    $pagoEfectuado=$GLOBALS['em']->getRepository('Anexa\Model\Entity\Pago')->findBy(array('alumno' => $alumno, 'cuota' => $cuota ));
    if (count($pagoEfectuado) < 1){
      try {
          $pago->setAlumno($alumno);
          $pago->setCuota($cuota);
          $pago->setUsuario($usuario);
          $pago->setFecha(new \DateTime());
          $pago->setFechaAlta(new \DateTime());
          $pago->setFechaActualizacion(new \DateTime());
          $pago->setBecado($beca);
          $GLOBALS['em']->persist($pago);
          $GLOBALS['em']->flush();
          $cuota->addPago($pago);
          $alumno->addPago($pago);
          $usuario->addPago($pago);
          $GLOBALS['em']->persist($cuota);
          $GLOBALS['em']->persist($alumno);
          $GLOBALS['em']->persist($pago);
          $GLOBALS['em']->flush();
          return true;
       } catch (Exception $e) {
          return false;
       }
    }else{
      $datos=array(
          'msj' => ' La cuota a pagar ya estaba pagada',
          'success' => 0,
          'menu' => 'pago'
      );
      return $this->indexAction($datos);
    }
	}

  public function deleteAction($request){
      if (isset($request['id'])) {
          $pago = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Pago')->findOneById($request['id']);
          $alumno = $pago->getAlumno();
          $alumno->removePago($pago);
          $pago->toogle();
          $GLOBALS['em']->persist($alumno);
          $GLOBALS['em']->persist($pago);
          $GLOBALS['em']->flush();

          return $this->indexAction(array(
              'msj' => " el pago fue eliminado correctamente",
              'success' => 0
          ));
      }else{
          $datos=array(
              'msj' => ' no puede eliminar un pago sin pasar su identificacion!',
              'success' => 0
          );
          return $this->verPagoAction($datos);
      }
  }
}// fin controller
