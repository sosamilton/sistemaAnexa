<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Pago;
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
    }

    /**
     * Deletes a pago entity.
     *
     */
    public function deleteAction(Request $request, Pago $pago)
    {
        $em = $this->getDoctrine()->getManager();
        $pago->setBorrado(true);
        $em->flush();

        return $this->redirectToRoute('pago_index');
    }

    /**
     * Creates a form to delete a pago entity.
     *
     * @param Pago $pago The pago entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Pago $pago)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('pago_delete', array('id' => $pago->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
