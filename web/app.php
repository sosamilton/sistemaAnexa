<?php
namespace Anexa\APP;
include(__DIR__."/../app/Autoloader.php");

$route=(isset($_SERVER["PATH_INFO"]))?$_SERVER["PATH_INFO"]:"/index";
$frontController = new Kernel(substr($route, 1), $_REQUEST) ;
$frontController->run();