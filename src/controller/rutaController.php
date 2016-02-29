<?php
namespace Anexa\Controller;
use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Anexa\Model\Entity\Alumno;
use \Exception as error;
use Osrm\OsrmClient;
use Osrm\Coordinate;
use Osrm\Exception;

class rutaController{

    public function rutaAction($parametros = null){ 
        $client = new OsrmClient('http://router.project-osrm.org');
        $from = new Coordinate(50.142739, 9.122257);
        $to = new Coordinate(50.139631, 9.107151);
        $route = $client->getRoute($from, $to);
        die('PEPE');
    }


}
       