<?PHP
namespace Anexa\Controller;
use \Exception;
use Anexa\APP;

class indexController {

	public function indexAction(){
        if (!empty($_SESSION)) {
            header('Location: http://'.$_SERVER['HTTP_HOST'].$_SERVER['SCRIPT_NAME']."/backend/inicio");
        }
		$config = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Configuracion')->findAll();

		return $GLOBALS['twig']->render('frontend/index.html.twig', array( 'data' => $config));
	}

	public function loginAction() {

       return $GLOBALS['twig']->render('frontend/login.html.twig',array());
    }

    public function sendMailAction(){
    	return $GLOBALS['twig']->render('frontend/login.html.twig',array());
    }
 
 }