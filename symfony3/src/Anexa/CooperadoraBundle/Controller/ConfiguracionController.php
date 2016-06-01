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
    public function indexAction($datos = array())
    {
        $em = $this->getDoctrine()->getManager();

        $configuraciones = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findAll();
        $datos['menu'] = 'configuracion';
        $datos['data'] = $configuraciones;

        return $this->render('AnexaCooperadoraBundle:configuracion:index.html.twig', $datos);
    }
   

    public function editAction (Request $request)
    {
        $data= $request->request->all();
       
        $em = $this->getDoctrine()->getManager();
        $configuraciones = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findAll();
      
        for ($i = 0; $i < sizeof($data['dato']); $i++) {      
            $configuraciones[$i]->setValorNumerico((int)$data['dato'][$i]);
            $configuraciones[$i]->setValorTextual($data['dato'][$i]); 
            $em->persist($configuraciones[$i]);   
        }
        $em->flush();
        
        $datos['menu']='configuracion';
        return $this->indexAction($datos);

    } // fin editar

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

    public function tituloAction() {
        $em = $this->getDoctrine()->getManager();
        $configuracions = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findOneByClave('titulo');
        if (!empty($configuracions)) {
            $configuracions=$configuracions->getValorTextual();
        } else {
            $configuracions= "Sistema Anexa";
        }
        return new Response($configuracions);
    }

    public function descripcionAction() {
        $em = $this->getDoctrine()->getManager();
        $configuracions = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findOneByClave('descripcion');
        if (!empty($configuracions)) {
            $configuracions=$configuracions->getValorTextual();
        } else {
            $configuracions= "Descripción de la Escuela Anexa";
        }
        return new Response($configuracions);
    }

    public function emailAction() {
        $em = $this->getDoctrine()->getManager();
        $configuracions = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findOneByClave('email');
        if (!empty($configuracions)) {
            $configuracions=$configuracions->getValorTextual();
        } else {
            $configuracions= "info@anexa.unlp.edu.ar";
        }
        return new Response($configuracions);
    }

    public function estadoSitioAction() {
        $em = $this->getDoctrine()->getManager();
        $configuracions = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findOneByClave('estado_sitio');
        if (!empty($configuracions)) {
            $configuracions=$configuracions->getValorTextual();
        } else {
            $configuracions= true; //está habilitados
        }
        return new Response($configuracions);
    }

    public function msjDeshabilitadoAction() {
        $em = $this->getDoctrine()->getManager();
        $configuracions = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findOneByClave('mensaje_deshabilitado');
        if (!empty($configuracions)) {
            $configuracions=$configuracions->getValorTextual();
        } else {
            $configuracions= "El sistemas se encuentra deshabilitado por el momento. Disculpe las molestias";
        }
        return new Response($configuracions);
    }
}
