<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\TipoCobrador;
use Anexa\CooperadoraBundle\Form\TipoCobradorType;


/**
 * TipoCobrador controller.
 *
 */
class TipoCobradorController extends Controller
{
    /**
     * Lists all TipoCobrador entities.
     *
     */
    public function indexAction($datos=array())
    {

        $em = $this->getDoctrine()->getManager();

        $tipos = $em->getRepository('AnexaCooperadoraBundle:TipoCobrador')->findByBorrado(false);
        if (count($tipos) == 0) {
            $datos['msj'] = 'No hay ningún tipo de cobrador registrado aún';
            $datos['success'] = false;
        } else {
        $datos['tipos'] = $tipos;
        }
        $datos['menu'] = "tipos";
        return $this->render('AnexaCooperadoraBundle:tipoCobrador:index.html.twig', $datos);
    }


       /**
     * Creates a new TipoCobrador entity.
     *
     */
    public function newAction(Request $request)
    {
        $tipoCobrador = new TipoCobrador();
        $form = $this->createForm('Anexa\CooperadoraBundle\Form\TipoCobradorType', $tipoCobrador);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoCobrador);
            $em->flush();
        $datos['msj'] = ' El nuevo tipo de cobrador se agregó correctamente!';
         $datos['success'] = 1;
             return $this->indexAction($datos); 
        }

        return $this->render('AnexaCooperadoraBundle:tipoCobrador:new.html.twig', array(
            'tipoCobrador' => $tipoCobrador,
            'menu' => 'tipoCobrador',
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TipoCobrador entity.
     *
     */
    public function showAction(TipoCobrador $tipoCobrador)
    {
        $deleteForm = $this->createDeleteForm($tipoCobrador);

        return $this->render('AnexaCooperadoraBundle:tipoCobrador:show.html.twig', array(
            'tipoCobrador' => $tipoCobrador,
            'menu' => 'tipoCobrador',
            'delete_form' => $deleteForm->createView(),
        ));
    }


       /**
     * Displays a form to edit an existing TipoCobrador entity.
     *
     */
    public function editAction(Request $request, TipoCobrador $tipoCobrador)
    {
        $deleteForm = $this->createDeleteForm($tipoCobrador);
        $editForm = $this->createForm('Anexa\CooperadoraBundle\Form\TipoCobradorType', $tipoCobrador);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoCobrador);
            $em->flush();

            return $this->redirectToRoute('tipoCobrador_index'); 
        }

        return $this->render('AnexaCooperadoraBundle:tipoCobrador:edit.html.twig', array(
            'tipoCobrador' => $tipoCobrador,
            'menu' => 'tipoCobrador',
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TipoCobrador entity.
     *
     */
    public function deleteAction(Request $request, TipoCobrador $tipoCobrador)
    {
        $em = $this->getDoctrine()->getManager();
        $tipoCobrador->setBorrado(true);
        $em->flush();
        $datos['msj'] = ' El tipo de Cobrador se eliminó correctamente!';
        $datos['success'] = 1;
        return $this->indexAction($datos);

        return $this->redirectToRoute('tipoCobrador_index');
    }

    /**
     * Creates a form to delete a TipoCobrador entity.
     *
     * @param TipoCobrador $tipoCobrador The tipoCobrador entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TipoCobrador $tipoCobrador)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('tipoCobrador_delete', array('id' => $tipoCobrador->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}

