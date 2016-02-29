<?PHP
namespace Anexa\Controller;
use \Exception;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Anexa\Model\Entity\Alumno;


class recorridoController {

	public function indexAction($parametros = null){
		if (isset($_SESSION['rol'])){
            if ($_SESSION['rol'] == 'Consulta') {
                $usuario = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Usuario')->findOneById($_SESSION['id']);
                $responsable = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Responsable")->findOneByUsuario($usuario);
                $alumnos = $responsable->getAlumnosACargo();
            }else{
                $alumnos = $GLOBALS['em']->getRepository("Anexa\Model\Entity\Alumno")->findByBorrado(false);
            } 
        }
        $datos = array(
            'menu' => "recorrido",
            'alumnos' => $alumnos,
        );
        if (!empty($parametros)) {
            $datos['msj'] = $parametros['msj'];
            $datos['success'] = $parametros['success'];
        }
        return $GLOBALS['twig']->render('backend/recorrido/index.html.twig', $datos);
	}
 
}