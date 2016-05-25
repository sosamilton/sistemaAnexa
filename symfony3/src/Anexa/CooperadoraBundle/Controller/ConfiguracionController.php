<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Configuracion;
use Anexa\CooperadoraBundle\Form\ConfiguracionType;
use Symfony\Component\HttpFoundation\Response;


/**
 * Configuracion controller.
 *
 */
class ConfiguracionController extends Controller
{
    /**
     * Lists all Configuracion entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $configuracions = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findAll();

        return $this->render('configuracion/index.html.twig', array(
            'configuracions' => $configuracions,
        ));
    }

    /**
     * Creates a new Configuracion entity.
     *
     */
    public function newAction(Request $request)
    {
        $configuracion = new Configuracion();
        $form = $this->createForm('Anexa\CooperadoraBundle\Form\ConfiguracionType', $configuracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($configuracion);
            $em->flush();

            return $this->redirectToRoute('configuracion_show', array('id' => $configuracion->getId()));
        }

        return $this->render('configuracion/new.html.twig', array(
            'configuracion' => $configuracion,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Configuracion entity.
     *
     */
    public function showAction(Configuracion $configuracion)
    {
        $deleteForm = $this->createDeleteForm($configuracion);

        return $this->render('configuracion/show.html.twig', array(
            'configuracion' => $configuracion,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Configuracion entity.
     *
     */
    public function editAction(Request $request, Configuracion $configuracion)
    {
        $deleteForm = $this->createDeleteForm($configuracion);
        $editForm = $this->createForm('Anexa\CooperadoraBundle\Form\ConfiguracionType', $configuracion);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($configuracion);
            $em->flush();

            return $this->redirectToRoute('configuracion_edit', array('id' => $configuracion->getId()));
        }

        return $this->render('configuracion/edit.html.twig', array(
            'configuracion' => $configuracion,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Configuracion entity.
     *
     */
    public function deleteAction(Request $request, Configuracion $configuracion)
    {
        $form = $this->createDeleteForm($configuracion);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($configuracion);
            $em->flush();
        }

        return $this->redirectToRoute('configuracion_index');
    }

    /**
     * Creates a form to delete a Configuracion entity.
     *
     * @param Configuracion $configuracion The Configuracion entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Configuracion $configuracion)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('configuracion_delete', array('id' => $configuracion->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

    public function paginacionAction(){
        $em = $this->getDoctrine()->getManager();
        $configuracions = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findOneByClave('paginacion');
        if (count($configuracions) == 1 ) {
            $configuracions=$configuracions->getValorNumerico();
        }else{
            $configuracions=5;
        }
        return new Response($configuracions);
    }
}
