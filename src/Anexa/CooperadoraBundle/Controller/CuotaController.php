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

        $cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findByBorrado(false);

        return $this->render('AnexaCooperadoraBundle:cuota:index.html.twig', array(
            'cuotas' => $cuotas,
            'menu' => 'cuota'
        ));
    }

    /**
     * Creates a new Cuota entity.
     *
     */
    public function newAction(Request $request)
    {
        $cuota = new Cuota();
        $form = $this->createForm('Anexa\CooperadoraBundle\Form\CuotaType', $cuota);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cuota);
            $em->flush();

            return $this->redirectToRoute('cuota_index'); //, array('id' => $cuota->getId()));
        }

        return $this->render('AnexaCooperadoraBundle:cuota:new.html.twig', array(
            'cuota' => $cuota,
            'menu' => 'cuota',
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cuota entity.
     *
     */
    public function showAction(Cuota $cuota)
    {
        $deleteForm = $this->createDeleteForm($cuota);

        return $this->render('AnexaCooperadoraBundle:cuota:show.html.twig', array(
            'cuota' => $cuota,
            'menu' => 'cuota',
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cuota entity.
     *
     */
    public function editAction(Request $request, Cuota $cuota)
    {
        $deleteForm = $this->createDeleteForm($cuota);
        $editForm = $this->createForm('Anexa\CooperadoraBundle\Form\CuotaType', $cuota);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cuota);
            $em->flush();

            return $this->redirectToRoute('cuota_index'); //, array('id' => $cuota->getId()));
        }

        return $this->render('AnexaCooperadoraBundle:cuota:edit.html.twig', array(
            'cuota' => $cuota,
            'menu' => 'cuota',
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cuota entity.
     *
     */
    public function deleteAction(Request $request, Cuota $cuota)
    {
        $em = $this->getDoctrine()->getManager();
        $cuota->setBorrado(true);
        $em->flush();

        return $this->redirectToRoute('cuota_index');
    }

    /**
     * Creates a form to delete a Cuota entity.
     *
     * @param Cuota $cuota The Cuota entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cuota $cuota)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cuota_delete', array('id' => $cuota->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
