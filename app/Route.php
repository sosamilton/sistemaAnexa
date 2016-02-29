<?php
namespace Anexa\APP;

class Route {
    private $file = __DIR__.'/config/routing.yml'; 
    private $data;
    private $route;

    public function __construct($route) {
        $this->data = \Spyc::YAMLLoad($this->file);
		if (!isset($this->data[$route])) {
			$route='index';
		}
        $this->route=$route;
        return $this->data[$route];
    }

    public function getController($route){
        return $this->data[$route]['controller']."Controller.php";
    }

    public function getAction($route){
        return $this->data[$route]['action']."Action";
    }
    
    public function getHost($route){
        return $this->data['base'];
    }

    public function getRoute(){
        return $this->route;
    }
    
    public function getRol($route){
    	return $this->data[$route]['role'];
    }

    public function getData(){
    	return $this->data;
    }

}