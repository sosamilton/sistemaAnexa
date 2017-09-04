<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Anexa\CooperadoraBundle\Entity\Pago;
use Anexa\CooperadoraBundle\Entity\Usuario;
use Anexa\CooperadoraBundle\Entity\Balance;

class BalanceController extends Controller
{
    public function indexAction(Request $request)
    {
    	$em = $this->getDoctrine()->getManager();
    	$desde = $this->getUser()->getFechaUltCierre();
    	$hasta = new \DateTime();
    	$hasta = $hasta->format('Y-m-d H:i:s');
        $cobros = $em->getRepository('AnexaCooperadoraBundle:Pago')->getCobrosDe($this->getUser(), $desde, $hasta);


         if (!empty($cobros)) {
            $datos['msj'] = "El usuario ".$this->getUser()." no tiene cobros registrados";
            $datos['cobros'] = $cobros;
            if ($request->isMethod('POST')) {
                $total = 0;
                $balance = new Balance();
                $balance->setFechaDesde($desde);
                $balance->setFechaHasta($hasta);
                $balance->setCobrador($this->getUser());
                foreach ($cobros as $cobro) {
                    $balance->addPago($cobro);
                    $total+=$cobro->getCuota()->getMonto();                
                }

                $balance->setTotal($total);
                $porcentaje = $this->getUser()->getTipo()->getComision();
                $balance->setComisionCobrada(($total*$porcentaje)/100);
                $this->getUser()->setFechaUltCierre((new \DateTime())->format('Y-m-d H:i:s'));
                $em->persist($balance);
                $em->persist($this->getUser());
                $em->flush();
                $datos['cierre'] = true;
            }

         }
         $datos['menu'] = 'balance';
         
        return $this->render('AnexaCooperadoraBundle:balance:index.html.twig', $datos);
    }

    public function cerrarAction() 
    {
        $em = $this->getDoctrine()->getManager();
        $desde = $this->getUser()->getFechaUltCierre();
        $hasta = new \DateTime();
        $hasta = $hasta->format('Y-m-d H:i:s');
        $cobros = $em->getRepository('AnexaCooperadoraBundle:Pago')->getCobrosDe($this->getUser(), $desde, $hasta);
        

        if (!empty($cobros)) {
            $total = 0;
            $balance = new Balance();
            $balance->setFechaDesde($desde);
            $balance->setFechaHasta($hasta);
            $balance->setCobrador($this->getUser());
            foreach ($cobros as $cobro) {
                $balance->addPago($cobro);
                $total+=$cobro->getCuota()->getMonto();                
            }

            $balance->setTotal($total);
            $porcentaje = $this->getUser()->getTipoCobrador()->getComision();
            $balance->setComisionCobrada(($total*$porcentaje)/100);
            $this->getUser()->setFechaUltCierre((new \DateTime())->format('Y-m-d H:i:s'));
            $em->persist($balance);
            $em->persist($this->getUser());
            $em->flush();

            $datos['menu'] = 'balance';
        } 
        return $this->render('AnexaCooperadoraBundle:balance:index.html.twig', $datos);

    }
}
