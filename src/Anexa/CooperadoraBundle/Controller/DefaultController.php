<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnexaCooperadoraBundle:backend:index.html.twig', array('menu' => 'inicio' ));
    }

    public function sendMailAction(){
      $to = "milton.sosa.22@gmail.com";
      $subject = "Cooperadora de Escuela Anexa";
      $txt = "Hello world!";
      $headers = "From: milton.sosa@info.unlp.edu.ar" . "\r\n";
      mail($to,$subject,$txt,$headers);
    }
}
