<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Symfony\Component\HttpFoundation\Response;

use Anexa\CooperadoraBundle\Entity\Alumno;
use Anexa\CooperadoraBundle\Entity\Configuracion;
use Anexa\CooperadoraBundle\Form\ConfiguracionType;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnexaCooperadoraBundle:backend:index.html.twig', array('menu' => 'inicio' ));
    }

    public function importDataAction()
    {
        return $this->render('AnexaCooperadoraBundle:importar:index.html.twig', array('menu' => 'importData' ));
    }

    public function loadDataAction(Request $request){
      $file = $request->files->get('upload');
      $name = $file->getFilename();
      $url =  $file->getRealPath();
      $em = $this->getDoctrine()->getManager();
      if ($file->isValid()) {
        $phpExcelObject = $this->get('phpexcel')->createPHPExcelObject($url);
        $phpExcelObject->setActiveSheetIndex(0);
        $activesheet = $phpExcelObject->getActiveSheet()->toArray();
        $j = 1;
        $alumnosNuevos = 0;
        $alumnosActualizados = 0;
        while (isset($activesheet[$j][0])) {
          $alumno = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findOneByDni($activesheet[$j][0]);
          if (!isset($alumno)) {
              $alumnosNuevos++;
              $alumno = new Alumno();
              $alumno->setNuevo(true);
          }else {
            $alumnosActualizados++;
          }
          $alumno->setDni($activesheet[$j][0]);
          $name = explode(",", $activesheet[$j][1]);
          $alumno->setApellido(ucfirst(strtolower($name[0])));
          $alumno->setNombre(ucfirst(strtolower($name[1])));
          $alumno->setCurso($activesheet[$j][2]);
          $alumno->setDivision($activesheet[$j][3]);
          $alumno->setNivel($activesheet[$j][4]);
          if (isset($activesheet[$j][5])) {
            $alumno->setTelefono($activesheet[$j][5]);
          }
          if (isset($activesheet[$j][6])) {
            $alumno->setFechaNacimiento($activesheet[$j][6]);
          }
          if (isset($activesheet[$j][7])) {
            $alumno->setEmail($activesheet[$j][7]);
          }
          if (isset($activesheet[$j][8])) {
            $alumno->setDireccion($activesheet[$j][8]);
          }
          if (isset($activesheet[$j][9])) {
            $alumno->setContacto($activesheet[$j][9]);
          }
          $em->persist($alumno);
          $j++;
        }
        $em->flush();
        return $this->render('AnexaCooperadoraBundle:importar:index.html.twig', array(
          'menu' => 'importData',
          'carga' => true,
          'alumnosNuevos' => $alumnosNuevos,
          'alumnosActualizados' => $alumnosActualizados
        ));

      }
    }
}
