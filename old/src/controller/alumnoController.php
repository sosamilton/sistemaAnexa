<?php
namespace Anexa\Controller;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Anexa\Model\Entity\Alumno;
use \Exception as error;
use Osrm\OsrmClient;
use Osrm\Coordinate;
use Osrm\Exception;
require_once ('sanitizar.php');

class alumnoController{

    public function indexAction($parametros = null){ 
        if (isset($_SESSION['rol'])){
            if ($_SESSION['rol'] == 'Consulta') {
                $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
                $responsable = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Responsable")->findOneByUsuario($usuario);
                $alumnos = $responsable->getAlumnosACargo();
            }else{
                $alumnos = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Alumno")->findByBorrado(false);
            } 
        }
        $datos = array(
            'menu' => "alumno",
            'alumnos' => $alumnos,
        );
        if (!empty($parametros)) {
            $datos['msj'] = $parametros['msj'];
            $datos['success'] = $parametros['success'];
        }
        return $GLOBALS['twig']->render('backend/alumno/index.html.twig', $datos);
    }



    public function createAction($request) {
        if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, new Alumno, 'creado');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            $responsables = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Responsable')->findByBorrado(false);
            return $GLOBALS['twig']->render('backend/alumno/agregar.html.twig',array(
                'error' => "alumno",
                'token' => $_SESSION['token'],
                'allResponsables' => $responsables
            ));
        }
    } 

    public function setAction($request, $alumno, $accion) {
        try {           
            $validar = array (
                array(trim(strip_tags($request['nombre'])),'string'),
                array(trim(strip_tags($request['apellido'])),'string'),
                array(trim(strip_tags($request["dni"])), 'integer'),
                array(trim($request['telefono']),'integer'),
                array(trim(strip_tags($request['sexo'])),'string'),
                array(trim(strip_tags($request['pais'])),'string'),
                array(trim(strip_tags($request['provincia'])),'string'),
                array(trim(strip_tags($request['ciudad'])),'string'),
                array(trim($request['calle']),'string'),
                array(trim($request['numero']),'integer'),
                array(trim($request['codigoPostal']),'integer'),
                array(trim($request['email']),'email'),
                array(trim($request['lat']),'float'),
                array(trim($request['long']),'float'),
                //array(trim($fecha),'date'),
                //array(trim($request['fechaIngreso']),'date'),
                //array(trim($request['fechaEgreso']),'date'),
            );
            if (paramsValidator($validar)){           
                $alumno->setDni((int)$request["dni"]); 
                $alumno->setTipoDni($request["tipoDNI"]); 
                $alumno->setNombre(trim(strip_tags($request['nombre'])));
                $alumno->setApellido(trim(strip_tags($request['apellido']))); 
                $alumno->setFechaNacimiento(new \DateTime($request["fechaNac"]));
                $alumno->setTelefono($request["telefono"]);
                $alumno->setSexo((strip_tags($request['sexo'])));
                $alumno->setPais(trim(strip_tags($request['pais'])));
                $alumno->setProvincia(trim(strip_tags($request['provincia'])));
                $alumno->setCiudad(trim(strip_tags($request['ciudad'])));
                $alumno->setCalle($request["calle"]);
                $alumno->setNumero($request["numero"]);
                $alumno->setCodigoPostal($request["codigoPostal"]);
                $alumno->setEmail($request["email"]);
                $alumno->setLatitud($request["lat"]);
                $alumno->setLongitud($request["long"]);
                $alumno->setFechaIngreso(new \DateTime($request["fechaIngreso"]));
                //fecha egreso es opcional
                $alumno->setFechaEgreso(new \DateTime($request["fechaEgreso"]));
                $alumno->setFechaAlta(new \DateTime);
                $GLOBALS['em']->persist($alumno);
                $GLOBALS['em']->flush();
                if (isset($request["responsables"])) {
                    foreach ( $request["responsables"] as $id) {
                        $responsable = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Responsable')->findOneById($id);
                        $responsable->addAlumnoACargo($alumno);
                        $GLOBALS['em']->persist($responsable);
                        $GLOBALS['em']->flush();
                        $alumno->addResponsable($responsable);
                    }
                }
                if (isset($request["responsablesRemove"])) {
                    foreach ( $request["responsablesRemove"] as $id) {
                        $responsable = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Responsable')->findOneById($id);
                        $responsable->removeAlumnoACargo($alumno);
                        $GLOBALS['em']->persist($responsable);
                        $GLOBALS['em']->flush();
                        $alumno->removeResponsable($responsable);
                    }
                }
                $GLOBALS['em']->persist($alumno);
                $GLOBALS['em']->flush();
                $msj = ' El Alumno '.$alumno->getNombre().' fue '.$accion.' correctamente! :)';
                $success=true;         
            } // fin paramsValidator
        } catch (error $e) {
            $msj=" Hubo un error al cargar el alumno! :(";
            $success=false;         
        }
        $datos=array(
            'msj' => $msj,
            'success' => $success
        );
        return $this->indexAction($datos);
    } //fin create


    public function updateAction($request){
        if (isset($request['id'])) {
            $alumno = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findOneById($request['id']);
            unset($request['id']);
        }else{
            $datos=array(
                'msj' => ' no puede editar un alumno sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
        if (!empty($request)){
            if ($request['token'] == $_SESSION['token']) {
                return $this->setAction($request, $alumno, 'editado');
            }else{
                return $GLOBALS['twig']->render('error.html.twig',array(
                    'error' => "El Formulario es invalido, si no esta autenticado, identifiquese."
                ));
            }
        }else{
            $_SESSION['token']=md5(mt_rand());
            $responsables = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Responsable')->findByBorrado(false);
            return $GLOBALS['twig']->render('backend/alumno/editar.html.twig',array(
                'menu' => "alumno",
                'alumno' => $alumno,
                'token' => $_SESSION['token'],
                'allResponsables' => $responsables,
                'responsables' => $alumno->getResponsables(),
            ));
        }
    }

    public function deleteAction($request){
        if (isset($request['id'])) {
            $alumno = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findOneById($request['id']);
            $alumno->toogle(); // setea borrado = true
            $GLOBALS['em']->persist($alumno);
            $GLOBALS['em']->flush();
            return $this->indexAction(array(
                'msj' => " el alumno ".$alumno->getNombre()." fue eliminado correctamente",
                'success' => 0
            ));
        }else{
            $datos=array(
                'msj' => ' no puede eliminar un alumno sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    }

    public function viewAction($request){
        if (isset($request['id'])) {
            $alumno = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Alumno')->findOneById($request['id']);
            return $GLOBALS['twig']->render('backend/alumno/ver.html.twig',array(
                'menu' => "alumno",
                'alumno' => $alumno,
                'responsables' => $alumno->getResponsables(),
            ));
        }else{
            $datos=array(
                'msj' => ' no puede ver un alumno sin pasar su identificacion!',
                'success' => 0
            );
            return $this->indexAction($datos);
        }
    } 

}