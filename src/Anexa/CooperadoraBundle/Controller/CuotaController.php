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
     */
    public function indexAction($datos=array())
    {

        $em = $this->getDoctrine()->getManager();

        $cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findByBorrado(false);
        if (count($cuotas) == 0) {
            $datos['msj'] = 'No hay cuotas registradas aún';
            $datos['success'] = false;
        } else {
        $datos['cuotas'] = $cuotas;
        }
        $datos['menu'] = "cuota";
        return $this->render('AnexaCooperadoraBundle:cuota:index.html.twig', $datos);
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
            $datos['msj'] = ' La cuota se agregó correctamente!';
            $datos['success'] = 1;
            return $this->indexAction($datos); //, array('id' => $cuota->getId()));
        }

        return $this->render('AnexaCooperadoraBundle:cuota:new.html.twig', array(
            'cuota' => $cuota,
            'menu' => 'cuota',
            'form' => $form->createView(),
        ));
    }

    /**
    * Crea las cuotas automaticamente
    */

    public function addAction(Request $request)
    {
       return $this->render('AnexaCooperadoraBundle:cuota:add.html.twig', array(
            'menu' => 'cuota'));

    }

     public function createAction(Request $request)
    {
        var_dump($request->request->get('anio'));
        die;
        $em = $this->getDoctrine()->getManager();
        $array_cuotas = array("Matricula", "Enero");//, "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre");
        foreach ($array_cuotas as $key) {
            $cuota = new Cuota();
            $cuota->setMonto(500); //$cuota->setMonto($request->request->get('monto'));
            $cuota->setMes($key);
            $cuota->setAnio(2018); //$cuota->setAnio($request->request->get('anio'));
            $em->persist($cuota);
        }
        $em->flush();
        $datos['msj'] = ' Las cuotas se agregaron correctamente!';
        $datos['success'] = 1;
        return $this->indexAction($datos);
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

            return $this->redirectToRoute('cuota_index');
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
        $datos['msj'] = ' La cuota se eliminó correctamente!';
        $datos['success'] = 1;
        return $this->indexAction($datos);

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
