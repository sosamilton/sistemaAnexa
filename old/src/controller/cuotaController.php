<?php
namespace Anexa\Controller;
use Anexa\Model\Entity\Cuota;
use Anexa\Model\Entity\Pago;
use \Exception;
require_once('sanitizar.php');

class cuotaController {


	public function indexAction($parametros = null){ 
        $cuotas =$GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findBy(array(
          'borrado' => false),
        array(
          'anio' => 'DESC',
          'mes' => 'DESC'
        ));           
        if (count($cuotas) == 0){
            $datos = array ('msj' => 'No hay cuotas cargadas en el sistema');
        } 
        $datos=array(
            'cuotas' => $cuotas,
            'menu' => 'cuota'
        );

        if (!empty($parametros)) {
            $datos['msj'] = $parametros['msj'];
            $datos['success'] = $parametros['success'];
        }
        return $GLOBALS['twig']->render('backend/cuota/index.html.twig', $datos);
	}
	


	public function createAction($request) {
		if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, new Cuota, 'agregada');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            return $GLOBALS['twig']->render('backend/cuota/agregar.html.twig',array(
                'token' => $_SESSION['token'],
            ));
        }

    } //fin new 

    public function setAction($request,$cuota,$accion){
        $msj = ' La cuota  no fue '.$accion.'correctamente! :)';
                $success=false;
        try {

            $validar = array (
                            array(trim(strip_tags($request["anio"])),'integer'),
                            array(trim(strip_tags($request["mes"])), 'integer'),
                            array(trim(strip_tags($request["numero"])),'integer'), 
                            array(trim(strip_tags($request["monto"])),'float'),
                            array(trim(strip_tags($request["tipo"])), 'string'),
                            array(trim(strip_tags($request["comision"])),'float'),
                            array(trim(strip_tags(new \DateTime($request["fecha"]))),'date')
                );
            if (paramsValidator($validar)) {
                $cuota->setAnio((int)$request["anio"]);
                $cuota->setMes((int)$request["mes"]);
                $cuota->setNumero((int)$request["numero"]); 
                $cuota->setMonto((float)$request["monto"]);
                $cuota->setTipo(trim(strip_tags($request["tipo"])));
                $cuota->setComisionCobrador((float)$request["comision"]);
                $cuota->setFechaAlta(new \DateTime($request["fecha"]));
                $GLOBALS['em']->persist($cuota);
                $GLOBALS['em']->flush();

                $msj = ' La cuota fue '.$accion.'correctamente! :)';
                $success=true; 
            }
        } catch (Exception $e) {
            $msj=" Hubo un error al crear la cuota! :(";
            $success=false;         
        }
        $datos=array(
            'msj' => $msj,
            'success' => $success
        );
        return $this->indexAction($datos);
    } // fin set


    public function updateAction($request) {

    	if (isset($request['id'])) {
            $cuota = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findOneById($request['id']);
            unset($request['id']);
        }else{
            $datos=array(
                'msj' => ' No puede editar una cuota sin pasar su identificador!',
                'success' => false
            );
            return $this->indexAction($datos);
        }
        if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, $cuota, 'editado');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            return $GLOBALS['twig']->render('backend/cuota/editar.html.twig',array(
                'menu' => "cuota",
                'token' => $_SESSION['token'],
                'cuota' => $cuota
            ));
        }
    } // fin update

    public function deleteAction($request){
        if (isset($request['id'])) {
            $cuota = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Cuota')->findOneById($request['id']);
            $cuota->toogle(); // setea borrado = true
            $GLOBALS['em']->persist($cuota);
            $GLOBALS['em']->flush();
            return $this->indexAction(array(
                'msj' => " La cuota fue eliminada correctamente",
                'success' => 0
            ));
        }else{
            $datos=array(
                'msj' => ' No puede eliminar una cuota sin pasar su identificador!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    } //delete
	

}