<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Alumno;
use Anexa\CooperadoraBundle\Entity\Responsable;
use Anexa\CooperadoraBundle\Form\AlumnoType;

/**
 * Alumno controller.
 *
 */
class AlumnoController extends Controller
{
    /**
     * Lists all Alumno entities.
     *
     */
    public function indexAction($datos=array())
    {
        $em = $this->getDoctrine()->getManager();

        $alumnos = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findByBorrado(false);
        $datos['alumnos'] = $alumnos;
        $datos['menu'] = "alumno";
        return $this->render('AnexaCooperadoraBundle:alumno:index.html.twig', $datos);
    }

    /**
     * Creates a new Alumno entity.
     *
     */
    public function newAction(Request $request)
    {
        $alumno = new Alumno();
        $form = $this->createForm('Anexa\CooperadoraBundle\Form\AlumnoType', $alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();

            return $this->redirectToRoute('alumno_show', array('id' => $alumno->getId()));
        }

        //$allResponsables = $em->getRepository('AnexaCooperadoraBundle:Responsable')->findByBorrado(false);

        return $this->render('AnexaCooperadoraBundle:alumno:new.html.twig', array(
            'alumno' => $alumno,
            'form' => $form->createView(),
            "menu" => "alumno"
        ));
    }

    /**
     * Finds and displays a Alumno entity.
     *
     */
    public function showAction(Alumno $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);
        $em = $this->getDoctrine()->getManager();
        $misResponsables = $alumno->getResponsables();

        return $this->render('AnexaCooperadoraBundle:alumno:show.html.twig', array(
            'alumno' => $alumno,
            'delete_form' => $deleteForm->createView(),
            'responsables'=>$misResponsables,
            'menu' => 'alumno'
        ));
    }

    /**
     * Displays a form to edit an existing Alumno entity.
     *
     */
    public function editAction(Request $request, Alumno $alumno)
    {
        $deleteForm = $this->createDeleteForm($alumno);
        $editForm = $this->createForm('Anexa\CooperadoraBundle\Form\AlumnoType', $alumno);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($alumno);
            $em->flush();

            //return $this->redirectToRoute('alumno_edit', array('id' => $alumno->getId()));
            return $this->redirectToRoute('alumno_index');
        }

        $em = $this->getDoctrine()->getManager();
        return $this->render('AnexaCooperadoraBundle:alumno:edit.html.twig', array(
            'alumno' => $alumno,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'menu' => "alumno"
                ) //fin array
            ); //fin render
    }

    /**
     * Deletes a Alumno entity.
     *
     */
    public function deleteAction(Request $request, Alumno $alumno)
    {
        $em = $this->getDoctrine()->getManager();
        $alumno->setBorrado(true);
        $em->flush();
        $datos['msj'] = " El alumno ".$alumno->getApellido().' '.$alumno->getNombre().' fue eliminado correctamente!';
        $datos['success'] = 1;

        //return $this->redirectToRoute('alumno_index');
        return $this->indexAction($datos);
    }

    /**
     * Creates a form to delete a Alumno entity.
     *
     * @param Alumno $alumno The Alumno entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Alumno $alumno)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('alumno_delete', array('id' => $alumno->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
