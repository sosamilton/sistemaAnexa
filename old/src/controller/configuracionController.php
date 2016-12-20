<?PHP
namespace Anexa\Controller;
use \Exception;
use Anexa\APP;

class configuracionController {
	public function indexAction($datos = array()){
		$config = $GLOBALS['em']->getRepository('Anexa\Model\Entity\Configuracion')->findAll();
        $datos['menu']='configuracion';
        $datos['data']=$config;
		return $GLOBALS['twig']->render('backend/configuracion/index.html.twig', $datos);
	}

	public function updateAction($request){
        $datos=array(
            'msj' => 'no puede actualizar la configuracion sin pasar algun valor',
            'success' => 0
        );
        if (!empty($request)){
            return $this->setAction($request);
        }else{
            return $this->indexAction($datos);
        }
    }

    public function setAction($request) {
        try {
        	$request=$request['dato'];

            $configuraciones=$GLOBALS['em']->getRepository('Anexa\Model\Entity\Configuracion')->findAll();
            foreach ($configuraciones as $key => $configuracion) {
            	if (isset($request[$key])) {
            		$configuracion->setValorNumerico((int)$request[$key]);
            		$configuracion->setValorTextual($request[$key]);
            		$GLOBALS['em']->persist($configuracion);
            	}
            }
            $GLOBALS['em']->flush();
            $msj = ' La configuración del sistema fue actualizada correctamente! :)';
            $success=true;         
        } catch (Exception $e) {
            $msj=" Hubo un error al actualizar la configuración :(";
            $success=false;         
        }
        $datos=array(
            'msj' => $msj,
            'success' => $success
        );
        return $this->indexAction($datos);
    }


	
 }