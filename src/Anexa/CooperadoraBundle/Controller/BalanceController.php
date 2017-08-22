<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Anexa\CooperadoraBundle\Entity\Pago;
use Anexa\CooperadoraBundle\Entity\Usuario;

class BalanceController extends Controller
{
    public function indexAction()
    {
    	$em = $this->getDoctrine()->getManager();
    	$desde = $this->getUser()->getFechaUltCierre();
    	$hasta = new \DateTime();
    	$hasta = $hasta->format('Y-m-d H:i:s');
        $cobros = $em->getRepository('AnexaCooperadoraBundle:Pago')->getCobrosDe($this->getUser(), $desde, $hasta);

        return $this->render('AnexaCooperadoraBundle:balance:index.html.twig', array(
        	'menu' => 'balance', 
        	'cobros' => $cobros
        ));
    }
}
