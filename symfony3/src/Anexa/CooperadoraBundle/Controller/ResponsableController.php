<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Responsable;
use Anexa\CooperadoraBundle\Form\ResponsableType;

/**
 * Responsable controller.
 *
 */
class ResponsableController extends Controller
{
    /**
     * Lists all Responsable entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $responsables = $em->getRepository('AnexaCooperadoraBundle:Responsable')->findAll();

        return $this->render('responsable/index.html.twig', array(
            'responsables' => $responsables,
        ));
    }

    /**
     * Creates a new Responsable entity.
     *
     */
    public function newAction(Request $request)
    {
        $responsable = new Responsable();
        $form = $this->createForm('Anexa\CooperadoraBundle\Form\ResponsableType', $responsable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($responsable);
            $em->flush();

            return $this->redirectToRoute('responsable_show', array('id' => $responsable->getId()));
        }

        return $this->render('responsable/new.html.twig', array(
            'responsable' => $responsable,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Responsable entity.
     *
     */
    public function showAction(Responsable $responsable)
    {
        $deleteForm = $this->createDeleteForm($responsable);

        return $this->render('responsable/show.html.twig', array(
            'responsable' => $responsable,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Responsable entity.
     *
     */
    public function editAction(Request $request, Responsable $responsable)
    {
        $deleteForm = $this->createDeleteForm($responsable);
        $editForm = $this->createForm('Anexa\CooperadoraBundle\Form\ResponsableType', $responsable);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($responsable);
            $em->flush();

            return $this->redirectToRoute('responsable_edit', array('id' => $responsable->getId()));
        }

        return $this->render('responsable/edit.html.twig', array(
            'responsable' => $responsable,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Responsable entity.
     *
     */
    public function deleteAction(Request $request, Responsable $responsable)
    {
        $form = $this->createDeleteForm($responsable);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($responsable);
            $em->flush();
        }

        return $this->redirectToRoute('responsable_index');
    }

    /**
     * Creates a form to delete a Responsable entity.
     *
     * @param Responsable $responsable The Responsable entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Responsable $responsable)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('responsable_delete', array('id' => $responsable->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
