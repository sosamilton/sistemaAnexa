<?PHP
namespace Anexa\CooperadoraBundle\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller{

	public function indexAction(){
		$em = $this->getDoctrine()->getManager();
		$config = $em->getRepository('AnexaCooperadoraBundle:Configuracion')->findAll();
		return $this->render('AnexaCooperadoraBundle:frontend:index.html.twig', array( 'data' => $config));
	}

	public function loginAction() {

       return $this->render('AnexaCooperadoraBundle:frontend:login.html.twig',array('error'=>false));
    }

    public function sendMailAction(){
    	return $this->render('AnexaCooperadoraBundle:frontend:login.html.twig',array());
    }

 }
