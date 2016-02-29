<?PHP
	require_once __DIR__ . "/../vendor/autoload.php";
	use Doctrine\ORM\Tools\Setup;
	use Doctrine\ORM\EntityManager;
	use Doctrine\ORM\Tools\SchemaTool;
	use Doctrine\Common\ClassLoader;

	$paths = array(__DIR__ . '/../src');
	$isDevMode = true;

	$file = __DIR__ . '/config/config.yml';
	$data = Spyc::YAMLLoad($file);

	$dbParams = array(
	    'driver'   => $data['driver'],
	    'user'     => $data['db_user'],
	    'password' => $data['db_pass'],
	    'dbname'   => $data['db_name'],
	);

	$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode);
	$GLOBALS['em'] = EntityManager::create($dbParams, $config);