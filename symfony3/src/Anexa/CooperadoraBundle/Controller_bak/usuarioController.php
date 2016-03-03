<?php
namespace Anexa\CooperadoraBundle\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Anexa\Model\Entity\Usuario;
use \Exception;

class usuarioController {

    public function indexAction($parametros=null) {
        $usuarios = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Usuario")->findByBorrado(false);
        $datos = array(
            'menu' => "usuario",
            'usuarios' => $usuarios,
        );
        if (!empty($parametros)) {
            $datos['msj'] = $parametros['msj'];
            $datos['success'] = $parametros['success'];
        }
        return $GLOBALS['twig']->render('backend/usuario/index.html.twig', $datos);
    }

    public function createAction($request) {
        if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, new Usuario, 'creado');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            $roles = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Rol')->findByBorrado(false);
            return $GLOBALS['twig']->render('backend/usuario/agregar.html.twig',array(
                'menu' => "usuario",
                'token' => $_SESSION['token'],
                'roles' => $roles
            ));
        }
    }

    public function setAction($request, $usuario, $accion) {
         $msj = ' El usuario '.$usuario->getUsername().' no pudo ser '.$accion.' correctamente! ';
                $success=false;
        try {

            $validar = array (
                array(trim(strip_tags($request["username"])),'string')
                );
            if (paramsValidator($validar)) {
                $usuario->setUsername(trim(strip_tags($request["username"])));
                if ($accion == "editado") {
                    if (!empty($request["pass"])) {
                        $usuario->setPassword($request["pass"]);
                    }
                }else{
                    $usuario->setPassword($request["pass"]);
                }
                $rol = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Rol')->findOneById($request["rol"]);
                $usuario->setRol($rol);
                $GLOBALS['em']->persist($usuario);
                $GLOBALS['em']->flush();
                $msj = ' El usuario '.$usuario->getUsername().' fue '.$accion.' correctamente! :)';
                $success=true;
            }
        } catch (Exception $e) {
            $msj=" Hubo un error al cargar el usuario! :(";
            $success=false;
        }
        $datos=array(
            'msj' => $msj,
            'success' => $success
        );
        return $this->indexAction($datos);
    }

    public function updateAction($request){
        if (isset($request['id'])) {
            $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($request['id']);
            unset($request['id']);
        }else{
            $datos=array(
                'msj' => ' no puede editar un usuario sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
        if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, $usuario, 'editado');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            $roles = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Rol')->findAll();
            return $GLOBALS['twig']->render('backend/usuario/editar.html.twig',array(
                'menu' => "usuario",
                'usuario' => $usuario,
                'token' => $_SESSION['token'],
                'roles' => $roles,
            ));
        }
    }

    public function viewAction($request){
        if (isset($request['id'])) {
            $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($request['id']);
            return $GLOBALS['twig']->render('backend/usuario/ver.html.twig',array(
                'menu' => "usuario",
                'usuario' => $usuario,
            ));
        }else{
            $datos=array(
                'msj' => ' no puede ver un alumno sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    }

    public function toogleAction($request){
        if (isset($request['id'])) {
            $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($request['id']);
            $usuario->toogleHabilitado();
            $GLOBALS['em']->persist($usuario);
            $GLOBALS['em']->flush();
            if ($usuario->getHabilitado()) {
                $estado = 'habilitado';
            }else{
                $estado = 'deshabilitado';
            }
            $datos=array( 'msj' => 'El usuario '.$usuario->getUsername().'se ha '.$estado. ' correctamente! ', 'success' => 1);
            return $this->indexAction($datos);
        }else{
            $datos=array(
                'msj' => ' no puede ver un alumno sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    }

    public function deleteAction($request){
        if (isset($request['id'])) {
            $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($request['id']);
            $usuario->borrar();
            $GLOBALS['em']->persist($usuario);
            $GLOBALS['em']->flush();
            $datos=array( 'msj' => 'El usuario '.$usuario->getUsername().'se ha borrado correctamente! ', 'success' => 1);
            return $this->indexAction($datos);
        }else{
            $datos=array(
                'msj' => ' no puede ver un alumno sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    }

    public function logoutAction(){
        session_destroy();
    }

	public function loginAction($params) {
        if (!empty($params)) {
            if (trim($params['user']) != "" && trim($params['pass']) != ""){
                $user = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Usuario")->findOneByUsername($params['user']);
                if (isset($user) && $user->getHabilitado() && !$user->getBorrado()) {

                    $pass=md5($params['pass']);

                    if ($pass == $user->getPassword()) {
                        if(!isset($_SESSION)){
                            session_start();
                        }else{
                            session_destroy();
                            session_start();
                        }
                        $_SESSION['username']=$user->getUsername();
                        $_SESSION['token']=md5(mt_rand());
                        $_SESSION['id']=$user->getId();
                        $_SESSION['rol']= $user->getRol()->getNombre();
                        return header('Location: https://grupo_57.proyecto2015.linti.unlp.edu.ar/web/app.php/backend/index');
                        //$ruta = new Kernel('backend/index', $_REQUEST) ;
                        //return $ruta->run();
                    }
                }
            }
        }
        return $GLOBALS['twig']->render('frontend/login.html.twig',array(
            'error' => "Usuario o Contraseña Incorrectos"
        ));
    }

}
