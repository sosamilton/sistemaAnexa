<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BackendController extends Controller
{
    public function indexAction()
    {
        return $this->render('AnexaCooperadoraBundle:backend:index.html.twig', array('menu' => 'inicio' ));
    }

}
