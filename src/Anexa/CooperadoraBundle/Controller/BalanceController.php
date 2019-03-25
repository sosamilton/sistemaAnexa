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
          $datos['cobros'] = $cobros;
          // if ($request->isMethod('POST')) {
          //     $total = 0;
          //     $balance = new Balance();
          //     $balance->setFechaDesde($desde);
          //     $balance->setFechaHasta($hasta);
          //     $balance->setCobrador($this->getUser());
          //     foreach ($cobros as $cobro) {
          //         $balance->addPago($cobro);
          //         $total+=$cobro->getCuota()->getMonto();
          //     }
          //
          //     $balance->setTotal($total);
          //     $porcentaje = $this->getUser()->getTipo()->getComision();
          //     $balance->setComisionCobrada(($total*$porcentaje)/100);
          //     $this->getUser()->setFechaUltCierre((new \DateTime())->format('Y-m-d H:i:s'));
          //     $em->persist($balance);
          //     $em->persist($this->getUser());
          //     $em->flush();
          //     $datos['cierre'] = true;
          // }
       }
         $datos['balances'] = $em->getRepository('AnexaCooperadoraBundle:Balance')->findByCobrador($this->getUser());
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
            $porcentaje = $this->getUser()->getTipo()->getComision();
            $balance->setComisionCobrada(($total*$porcentaje)/100);
            $this->getUser()->setFechaUltCierre((new \DateTime())->format('Y-m-d H:i:s'));
            $em->persist($balance);
            $em->persist($this->getUser());
            $em->flush();
            $datos['cierre'] = true;

            $datos['menu'] = 'balance';
            $datos['balances'] = $balance;
        }
        //return $this->render('AnexaCooperadoraBundle:balance:index.html.twig', $datos);
        return $this->redirectToRoute('balance_show', array('id' => $balance->getId()));
    }

    public function showAction(Balance $balance) {
      //$em = $this->getDoctrine()->getManager();
      $cobros = $balance->getPagos();
      var_dump('e');
      var_dump($balance->getCobrador());die;
      $cuotasCobradas = array();
      foreach ($cobros as $cobro) {
        if (array_key_exists($cobro->getCuota()->getId(), $cuotasCobradas)) {
            $cuotasCobradas[$cobro->getCuota()->getId()]++;
          }
          else {
            $cuotasCobradas[$cobro->getCuota()->getId()] = 1;
          }
      }
      var_dump($cuotasCobradas);die;

      return $this->render('AnexaCooperadoraBundle:balance:show.html.twig', array(
          'cobradas' => $cuotasCobradas,
          'menu' => 'balance'
      ));
    }

}
