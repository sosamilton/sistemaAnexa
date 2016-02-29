<?PHP
namespace Anexa\Controller;
use \Exception;

use Anexa\APP;

class backendController {

	public function indexAction(){
		return $GLOBALS['twig']->render('backend/index.html.twig', array(
			'menu' => 'inicio',
		));
	}
 
 }