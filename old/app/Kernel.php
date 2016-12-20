<?php
namespace Anexa\APP;

use Anexa;

class Kernel
{
    
    protected $controller    = "";
    protected $action        = "";
    protected $params        = array();
    protected $host          = "";
    protected $route         = "";
    protected $rol           = "";   
    
    public function __construct($route, array $options = array()) {
    	$ruta = new Route($route);
        $this -> setController($ruta->getController($ruta->getRoute()));
    	$this -> setAction($ruta->getAction($ruta->getRoute())); 
        if (empty($options)) {
    	   $this->setParams();
        }else{
           $this->params=$options;
        }     
    	$this -> setHost($ruta->getHost($ruta->getRoute())); 
        $this->setRoute($ruta->getRoute());  
        $this->setRol($ruta->getRol($ruta->getRoute()));  
        return $this;
    }
    
    protected function setParams() {
		$parameters = explode('?', $_SERVER['REQUEST_URI'], 2);
        if (isset($parameters[1])) {
		  $parameters= explode('&', $parameters[1]);
        }
        unset($parameters[0]);
        $this->params = $parameters;
        return $this;
    }
    
    public function setController($controller) {
        $controller= explode('.', $controller);
        unset($controller[1]);
        $this->controller = 'Anexa\Controller\\'.$controller[0];
        return $this;
    }

    public function setHost($host) {
        $this->host = $host;
        return $this;
    }

    public function getRoute() {
        return $this->route;
    }

    public function setRoute($route) {
        $this->route = $route;
        return $this;
    }

    public function setRol($rol) {
        $this->rol = $rol;
        return $this;
    }

    public function getRol() {
        return $this->rol; 
    }
    
    public function setAction($action) {
        $reflector = new \ReflectionClass($this->controller);
        if ($reflector->hasMethod($action)) {
            $this->action = $action;  
        }
        return $this;
    }

    public function getURL(){
        $parameters = "";
        foreach ($this->params as $key => $value) {
            $parameters.= "&".$key."=".$value;
        }
        return $this->host . $this->route . $parameters;
    }
    
    public function run() {

        $rol = $this->getRol();
        $control = true;
        if ($rol != 'notRegistered'){
            if (isset($_SESSION)){
                if (!isset($_SESSION['rol'])){
                    $ruta = "backend/salir";
                    $control = false;
                }else{
                    if (($rol == 'rolAdmin' && $_SESSION['rol'] != 'Administracion') || ($rol == 'rolGestion' && $_SESSION['rol'] == 'Consulta')){
                        $ruta = 'backend/index';
                        $control = false;
                    }
                }
            }else{
                $ruta = 'login';
                $control = false;
            }
        }

        if (!$control) {
            $inicio = new Kernel($ruta, $_REQUEST) ;
            return $inicio->callController();
        }else{
            return $this->callController();
        }
    }

    private function callController(){
        echo call_user_func_array(array(new $this->controller, $this->action), array('datos' => $this->params));
    }
}