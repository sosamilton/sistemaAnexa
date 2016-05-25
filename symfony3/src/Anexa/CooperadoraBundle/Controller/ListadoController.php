<?php

namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Alumno;
use Anexa\CooperadoraBundle\Entity\Responsable;
use Anexa\CooperadoraBundle\Entity\Cuota;
use Anexa\CooperadoraBundle\Entity\User;

/**
* Listado Controller
*/

class ListadoController extends Controller
{
	/**
	*
	**/

	public function indexAction()
	{
		$em = $this->getDoctrine()->getManager();
		$cuotas = $em->getRepository('AnexaCooperadoraBundle:Cuota')->findBy(array(
			'borrado'=>false),
		array(
			'anio'=>'DESC',
			'mes'=>'DESC'
			));
		$anios = array();
		$meses = array();
		$matriculas = array();
		foreach ($cuotas as $cuota) {
			if ($cuota->getTipo() == 'matricula') {
				$matriculas[$cuota->getAnio()] = $cuota->getAnio();
			}
			$anios[$cuota->getAnio()] = $cuota->getAnio();
			$meses[$cuota->getMes()] = $cuota->getMes();
		}

		/* {
				Falta manejo de usuarios con los permisos correspondientes
		}
		*/
        return $this->render('AnexaCooperadoraBundle:listado:index.html.twig', array(
        	'anios' => $anios,
        	'meses' => $meses,
        	'anios_matriculas' => $matriculas,
        	'menu' => 'listado'
        	));
	} // end index


} //end listadoController