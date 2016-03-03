<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Cuota;
use Anexa\CooperadoraBundle\Form\CuotaType;

/**
 * Cuota controller.
 *
 */
class CuotaController extends Controller
{
    /**
     * Lists all Cuota entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findAll();

        return $this->render('cuota/index.html.twig', array(
            'cuotas' => $cuotas,
        ));
    }

    /**
     * Creates a new Cuota entity.
     *
     */
    public function newAction(Request $request)
    {
        $cuotum = new Cuota();
        $form = $this->createForm('Anexa\CooperadoraBundle\Form\CuotaType', $cuotum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cuotum);
            $em->flush();

            return $this->redirectToRoute('cuota_show', array('id' => $cuotum->getId()));
        }

        return $this->render('cuota/new.html.twig', array(
            'cuotum' => $cuotum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cuota entity.
     *
     */
    public function showAction(Cuota $cuotum)
    {
        $deleteForm = $this->createDeleteForm($cuotum);

        return $this->render('cuota/show.html.twig', array(
            'cuotum' => $cuotum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cuota entity.
     *
     */
    public function editAction(Request $request, Cuota $cuotum)
    {
        $deleteForm = $this->createDeleteForm($cuotum);
        $editForm = $this->createForm('Anexa\CooperadoraBundle\Form\CuotaType', $cuotum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cuotum);
            $em->flush();

            return $this->redirectToRoute('cuota_edit', array('id' => $cuotum->getId()));
        }

        return $this->render('cuota/edit.html.twig', array(
            'cuotum' => $cuotum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cuota entity.
     *
     */
    public function deleteAction(Request $request, Cuota $cuotum)
    {
        $form = $this->createDeleteForm($cuotum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cuotum);
            $em->flush();
        }

        return $this->redirectToRoute('cuota_index');
    }

    /**
     * Creates a form to delete a Cuota entity.
     *
     * @param Cuota $cuotum The Cuota entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cuota $cuotum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuota_delete', array('id' => $cuotum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
