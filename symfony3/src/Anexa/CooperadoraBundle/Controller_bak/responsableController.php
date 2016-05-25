<?php
namespace Anexa\CooperadoraBundle\Controller;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Anexa\Model\Entity\Alumno;
use Anexa\Model\Entity\Usuario;
use Anexa\Model\Entity\Rol;
use Anexa\Model\Entity\Responsable;
use \Exception;
require_once('sanitizar.php');



class responsableController {

    public function indexAction($parametros = null){          
        $responsables = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Responsable")->findByBorrado(false);
        $datos = array(
            'menu' => "responsable",
            'responsables' => $responsables,
        );
        if (!empty($parametros)) {
            $datos['msj'] = $parametros['msj'];
            $datos['success'] = $parametros['success'];
        }
        return $GLOBALS['twig']->render('backend/responsable/index.html.twig', $datos);
    }


    public function createAction($request) {
        if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, new Responsable, 'creado');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            $roles = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Rol")->findAll();
            $alumnos = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Alumno")->findByBorrado(false);
            return $GLOBALS['twig']->render('backend/responsable/agregar.html.twig',array(
                'menu' => "responsable",
                'token' => $_SESSION['token'],
                'roles' => $roles,
                'allAlumnos'=>$alumnos
            ));
        }
    } 
    public function setAction($request, $responsable, $accion) {
        $msj = ' El Responsable'. $responsable->getNombre().' no pudo ser '.$accion.' correctamente! :)';
                $success=true; 
        try {

            $validar = array (
                        array(trim(strip_tags($request["dni"])),'integer'),
                        array(trim(strip_tags($request["tipoDNI"])),'string'),
                        array(trim(strip_tags($request["nombre"])),'string'),
                        array(trim(strip_tags($request["apellido"])),'string'),
                        array(trim(strip_tags($request["telefono"])),'string'),
                        array(trim(strip_tags($request["sexo"])),'string'),
                        array(trim(strip_tags($request["direccion"])),'string'),
                        array(trim(strip_tags($request["email"])),'email'),
                        array(trim(strip_tags($request["tipoResponsable"])),'string'),
                        //array(trim(strip_tags($request["fechaNac"])),'date'),
                );
            if (paramsValidator($validar)) {
                $responsable->setDni((int)$request["dni"]); 
                $responsable->setTipoDni(trim(strip_tags($request["tipoDNI"]))); 
                $responsable->setNombre(trim(strip_tags($request["nombre"])));
                $responsable->setApellido(trim(strip_tags($request["apellido"]))); 
                $responsable->setFechaNacimiento($request["fechaNac"]);
                $responsable->setTelefono($request["telefono"]);
                $responsable->setSexo(trim(strip_tags($request["sexo"])));
                $responsable->setDireccion(trim(strip_tags($request["direccion"])));
                $responsable->setEmail($request["email"]);
                $responsable->setTipoResponsable(trim(strip_tags($request["tipoResponsable"])));

                if (isset($request['username'])){
                    $rol = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Rol")->findOneBy(array("nombre"=>"Consulta"));
                    $user = new Usuario();
                    if ($accion=="editado" && $responsable->getUsuario() != null ) {
                        $user = $responsable->getUsuario();
                    }else{
                        $user->setRol($rol);
                    }
                    $user->setUsername($request["username"]);
                    $user->setPassword($request["password"]);                        
                    $GLOBALS['em']->persist($user);
                    $GLOBALS['em']->flush();
                    $responsable->setUsuario($user);
                }
                $GLOBALS['em']->persist($responsable);
                $GLOBALS['em']->flush();
                if (isset($request["alumnos"])) {
                    foreach ( $request["alumnos"] as $id) {
                        $alumno = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findOneById($id);
                        $alumno->addResponsable($responsable);
                        $GLOBALS['em']->persist($alumno);
                        $GLOBALS['em']->flush();
                        $responsable->addAlumnoACargo($alumno);
                    }
                }
                if (isset($request["alumnosRemove"])) {
                    foreach ( $request["alumnosRemove"] as $id) {
                        $alumno = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findOneById($id);
                        $alumno->removeResponsable($responsable);
                        $GLOBALS['em']->persist($alumno);
                        $GLOBALS['em']->flush();
                        $responsable->removeAlumnoACargo($alumno);
                    }
                }
          
                $GLOBALS['em']->persist($responsable);
                $GLOBALS['em']->flush();
                $msj = ' el Responsable '.$responsable->getNombre().' fue '.$accion.' correctamente! :)';
                $success=true;  
            }       
        } catch (Exception $e) {
            $msj=" Hubo un error al cargar el responsable! :(";
            $success=false;         
        }
        $datos=array(
            'msj' => $msj,
            'success' => $success
        );
        return $this->indexAction($datos);
    } //fin set

    public function updateAction($request){
        if (isset($request['id'])) {
            $responsable = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Responsable')->findOneById($request['id']);
            unset($request['id']);
        }else{
            $datos=array(
                'msj' => ' no puede editar un responsable sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
        if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, $responsable, 'editado');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            $alumnos = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findByBorrado(false);
            return $GLOBALS['twig']->render('backend/responsable/editar.html.twig',array(
                'menu' => "responsable",
                'responsable' => $responsable,
                'usuario' => $responsable->getUsuario(),
                'token' => $_SESSION['token'],
                'allAlumnos' => $alumnos,
                'alumnos' => $responsable->getAlumnosACargo(),
            ));
        }
    }

    public function deleteAction($request){
        if (isset($request['id'])) {
            $responsable = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Responsable')->findOneById($request['id']);
            $responsable->toogle();
            $usuario = $responsable->getUsuario();
            $usuario->toogleHabilitado();
            $GLOBALS['em']->persist($responsable);
            $GLOBALS['em']->persist($usuario);
            $GLOBALS['em']->flush();
            return $this->indexAction(array(
                'msj' => " el responsable ".$responsable->getNombre()." fue eliminado correctamente",
                'success' => 0
            ));
        }else{
            $datos=array(
                'msj' => ' no puede eliminar un responsable sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    }

    public function viewAction($request){
        if (isset($request['id'])) {
            $responsable = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Responsable')->findOneById($request['id']);
            return $GLOBALS['twig']->render('backend/responsable/ver.html.twig',array(
                'menu' => "responsable",
                'responsable' => $responsable,
                'alumnos' => $responsable->getAlumnosACargo(),
            ));
        }else{
            $datos=array(
                'msj' => ' no puede ver un responsable sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    } 

}