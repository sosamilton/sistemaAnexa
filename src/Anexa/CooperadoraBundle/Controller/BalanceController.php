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
              $cobro->setBalance($balance);
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
            $datos['success'] = true;
            $datos['msj'] = "El cierre se realizó exitosamente!";
            $datos['balance'] = $balance;
            $datos['id'] = $balance->getId();
        }
        //return $this->render('AnexaCooperadoraBundle:balance:index.html.twig', $datos);
        return $this->redirectToRoute('balance_show', $datos);
    }

    public function showAction(Balance $balance) {
      $cobros = $balance->getPagos();
      $cantCuotasCobradas = array();
      $cobradoXcuota = array();
      foreach ($cobros as $cobro) {
        if (array_key_exists($cobro->getCuota()->getMes()."-".$cobro->getCuota()->getAnio(), $cantCuotasCobradas)) {
            $cantCuotasCobradas[$cobro->getCuota()->getMes()."-".$cobro->getCuota()->getAnio()]++;
            $cobradoXcuota[$cobro->getCuota()->getMes()."-".$cobro->getCuota()->getAnio()] = $cobradoXcuota[$cobro->getCuota()->getMes()."-".$cobro->getCuota()->getAnio()] + $cobro->getMonto();
          }
          else {
            $cantCuotasCobradas[$cobro->getCuota()->getMes()."-".$cobro->getCuota()->getAnio()] = 1;
            $cobradoXcuota[$cobro->getCuota()->getMes()."-".$cobro->getCuota()->getAnio()] = $cobro->getMonto();
          }
      }
      return $this->render('AnexaCooperadoraBundle:balance:show.html.twig', array(
          'keys_cobradas' =>array_keys($cantCuotasCobradas),
          'cobradas' => $cantCuotasCobradas,
          'montosXcuota' => $cobradoXcuota,
          'balance' => $balance,
          'menu' => 'balance'
      ));
    }

}
