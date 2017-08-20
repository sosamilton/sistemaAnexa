<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Pago;
use Anexa\CooperadoraBundle\Entity\User;
use Anexa\CooperadoraBundle\Entity\Alumno;


/**
 * Pago controller.
 *
 */
class PagoController extends Controller
{
    /**
     * Lists all Pago entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $alumnos = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findByBorrado(false);

        return $this->render('AnexaCooperadoraBundle:pago:index.html.twig', array(
                                                                        'alumnos' => $alumnos,
                                                                        'menu' => 'pago')
                                                                    );
    }

    /**
     * Creates a new pago entity.
     *
     */
    public function newAction(Request $request)
    {
        $pago = new Pago();
        $form = $this->createForm('Anexa\CooperadoraBundle\Form\PagoType', $pago);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pago);
            $em->flush();

            return $this->redirectToRoute('pago_index'); //, array('id' => $pago->getId()));
        }

        return $this->render('AnexaCooperadoraBundle:pago:new.html.twig', array(
            'pago' => $pago,
            'menu' => 'pago',
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a pago entity.
     *
     */
    public function showAction(Pago $pago)
    {
        $deleteForm = $this->createDeleteForm($pago);

        return $this->render('AnexaCooperadoraBundle:pago:show.html.twig', array(
            'pago' => $pago,
            'menu' => 'pago',
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing pago entity.
     *
     */
    public function editAction(Request $request, Pago $pago)
    {
        $deleteForm = $this->createDeleteForm($pago);
        $editForm = $this->createForm('Anexa\CooperadoraBundle\Form\PagoType', $pago);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($pago);
            $em->flush();

            return $this->redirectToRoute('pago_index'); //, array('id' => $pago->getId()));
        }

        return $this->render('AnexaCooperadoraBundle:pago:edit.html.twig', array(
            'pago' => $pago,
            'menu' => 'pago',
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    } // fin edit
    

    public function verPagosAction(Alumno $alumno, $datos=array()) 
    {
        $em = $this->getDoctrine()->getManager();
        
        $pagos = $alumno->getPagos(); //pagos realizados por el alumno

        if (count($pagos) == 0) {
            $datos=array(
              'msj' => ' El alumno/a '.$alumno->getApellido().' no tiene pagos realizados',
              'success' => 0
            );
        }
      //todas las cuotas del sistema
        $todasCuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findBy(array(
              'borrado' => false),
            array(
              'anio' => 'DESC',
              'mes' => 'DESC'
            ));

        $cuotasPagas = array();
        $cuotasPagasAux = array();
        foreach ($pagos as $key => $pago) {        
            $cuotasPagasAux[$pago->getCuota()->getId()]=array();
            $cuotasPagasAux[$pago->getCuota()->getId()]['data']=$pago->getCuota();
            $cuotasPagasAux[$pago->getCuota()->getId()]['beca']=$pago->getBecado();
            $cuotasPagasAux[$pago->getCuota()->getId()]['cobrador']=$pago->getUser();
            $cuotasPagas[] = $pago->getCuota(); //obtengo la cuota asociada con cada pago para obtener mes, año de la cuota
        }

        $cuotasNoPagas = array_diff($todasCuotas, $cuotasPagas); //diferencia entre todas las cuotas existentes     
  
        if (count($cuotasNoPagas) == 0) {
          $datos['msjImpagas'] = 'El alumno '.$alumno->getApellido().' '.$alumno->getNombre().' no tiene cuotas impagas';
          $datos['success'] = 0;
          $datos['tieneCuotasImpagas'] = false;
        } else {
            $datos['cuotasImpagas'] = $cuotasNoPagas;
            $datos['tieneCuotasImpagas'] = true;
        }

        if (count($cuotasPagas) == 0) {
          $datos['tieneCuotasPagas'] = false;
          $datos['msjPagas'] = 'El alumno '.$alumno->getApellido().' '.$alumno->getNombre().' no tiene cuotas pagas';
        } else {
          $datos['cuotasPagas'] = $cuotasPagasAux;
          $datos['tieneCuotasPagas'] = true;
        }
        $datos['menu'] = 'pago';
        
        $datos['alumno'] = $alumno;
   
        return $this->render('AnexaCooperadoraBundle:pago:listarPagos.html.twig', $datos); 
    }// fin ver pagos


    public function pagoSeleccionadoAction(Request $request) 
    {
        $data= $request->request->all();

        $em = $this->getDoctrine()->getManager();
        if (isset($data['userId'])){
          $usuario = $em->getRepository('AnexaCooperadoraBundle:User')->findOneById($data['userId']);
        } 
        elseif ($this->get('security.authorization_checker')->isGranted('ROLE_COBRADOR')){
              $usuario = $this->getUser();
        }       

        if (isset($data['alumnoId'])){
            $alumno = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findOneById($data['alumnoId']);
            if (isset($data['coutas'])) {
              foreach ($data['coutas'] as $id) {
                $cuota = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findOneById($id);

                $this->setAction($cuota, $alumno, $usuario, false, new Pago);
              }
            }
            if (isset($data['becas'])) {
              foreach ($data['becas'] as $id) {
                $cuota = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findOneById($id);
                $this->setAction($cuota, $alumno, $usuario, true, new Pago);
              }
            }
            $datos=array(
              'msj' => ' Los pagos fueron efectuados correctamente',
              'success' => 1
            );
           
            return $this->verPagosAction($alumno, $datos);
        }else{
            return $this->indexAction();
        }
    } // fin pago seleccionado

    public function setAction($cuota, $alumno, $usuario, $beca, $pago) 
    {  
        $em = $this->getDoctrine()->getManager();
        $pagoEfectuado=$em->getRepository('AnexaCooperadoraBundle:Pago')->findBy(array('alumno' => $alumno, 'cuota' => $cuota ));
        if (count($pagoEfectuado) < 1){
          try {
              $pago->setAlumno($alumno);
              $pago->setCuota($cuota);  
              $pago->setUser($usuario);        
              $pago->setFecha(new \DateTime());
              $pago->setBecado($beca);
              $em->persist($pago);
              $em->flush();
              $cuota->addPago($pago);
              $alumno->addPago($pago);
              $usuario->addPago($pago);
              $em->persist($cuota);
              $em->persist($alumno);
              $em->persist($pago);
              $em->flush();
              return true;
           } catch (Exception $e) {
              return false;
           } 
        }else{
          $datos=array(
              'msj' => ' La cuota a pagar ya estaba pagada',
              'success' => 0,
              'menu' => 'pago'
          );
          return $this->indexAction($datos);
        }
    } //fin setAction

    public function deleteAction(Request $request)
    {
         $data= $request->request->all();

        $em = $this->getDoctrine()->getManager();
        if (isset($data['id'])) {
            $pago = $em->getRepository('AnexaCooperadoraBundle:Pago')->findOneById($data['id']);
            $alumno = $pago->getAlumno(); 
            $alumno->removePago($pago);
            $pago->toogle();
            $em->persist($alumno);
            $em->persist($pago);
            $em->flush();

            return $this->indexAction(array(
                'msj' => " El pago fue eliminado correctamente",
                'success' => 0
             ));
          }else{
                $datos=array(
                    'msj' => ' No puede eliminar un pago sin pasar su identificación!',
                    'success' => 0
               );
               return $this->verPagoAction($datos);
            }
    } //  delete

}
