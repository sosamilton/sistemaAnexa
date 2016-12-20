<?PHP
namespace Anexa\APP\Autoloader;
use Knp\Snappy\Pdf;
define("DOMPDF_ENABLE_AUTOLOAD", false);
class Autoloader {
	public function register() {
		require_once(__DIR__ ."/../vendor/autoload.php");
		require_once(__DIR__ ."/LoaderDoctrine.php");
		require_once(__DIR__ ."/Route.php");
		require_once(__DIR__ ."/Kernel.php");
		foreach (glob(__DIR__ ."/../src/controller/*.php") as $filename) {
    		require_once($filename);
		}
		foreach (glob(__DIR__ ."/../src/model/*.php") as $filename) {
    		require_once($filename);
		}
	}
}

$autoloader = new Autoloader;
$autoloader->register();

$ruta= \Spyc::YAMLLoad(__DIR__.'/config/routing.yml');
$rutas=array();
$base=$ruta['base'];
$resource=$ruta['resource'];
unset($ruta['base']);
unset($ruta['resource']);
foreach ($ruta as $key => $value) {
    $rutas[str_replace('/', '_', $key)]=$base.$key;
}
if (isset($_SESSION) && empty($_SESSION)) {
	session_destroy();
}


session_start();

$snappy = new \Knp\Snappy\Pdf();
$snappy->setBinary(__DIR__.'/../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64');


if (!empty($_SERVER['HTTP_REFERER'])) {
	$url = $_SERVER['HTTP_REFERER'];
}else{
	$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
}
$paginacion=$GLOBALS['em']->getRepository('Anexa\Model\Entity\Configuracion')->findOneByClave('paginacion');
$loader = new \Twig_Loader_Filesystem(__DIR__ . '/../src/view');
$GLOBALS['twig'] = new \Twig_Environment($loader);
$GLOBALS['twig']->addGlobal("session", $_SESSION);
$GLOBALS['twig']->addGlobal("URL", $rutas);
$GLOBALS['twig']->addGlobal("volver", $url);
$GLOBALS['twig']->addGlobal("resource", $resource);
$GLOBALS['twig']->addGlobal("paginacion", $paginacion->getValorNumerico());
$GLOBALS['pdf'] = $snappy;
