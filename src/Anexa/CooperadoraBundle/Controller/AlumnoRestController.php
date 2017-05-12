<?php
namespace Anexa\CooperadoraBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Anexa\CooperadoraBundle\Entity\Alumno;
use Anexa\CooperadoraBundle\Entity\Cuota;

class AlumnoRestController extends Controller
{

	public function getPagosAlumno($anio, $dni)
	{
		$em = $this->getDoctrine()->getManager();
		$alumno = $em->getRepository('AnexaCooperadoraBundle:Alumno')->findOneByDni($dni);
		if ($alumno) {
			$cuotasAlumno = $em->getRepository('AnexaCooperadoraBundle:Cuota')->CuotasAlumnosPorAnio($anio, $alumno); 
			return new View($cuotasAlumno, Response::HTTP_OK);
		} else {
			return new View('No existe el alumno', Response::HTTP_NOT_FOUND);
		}

	}

	public function indexAction(Request $request){
		$em = $this->getDoctrine()->getManager();

		if ($request->isMethod('POST')) {
			$anio = $request->request->get('anio');
			$dni = $request->request->get('dni');
			$data = $this->getPagosAlumno($anio, $dni);
		}

        return $this->render('AnexaCooperadoraBundle:consultas:index.html.twig', array(
        		'data' => (isset($data))?$data:null,
        		'dni' => (isset($dni))?$dni:null,
        		'anio' => (isset($anio))?$anio:null
        	));
	}

}