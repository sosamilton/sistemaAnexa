<?php
namespace Anexa\CooperadoraBundle\Controller;


function paramsValidator($parametros){
	$resultado = array();
      $result = TRUE;
      foreach ($parametros as $parametro) {
          switch ($parametro[1]) {
                case "string":
                    if(!filter_var($parametro[0], FILTER_SANITIZE_STRING)){
                        $result=FALSE;
                        
                    }                    
                    break;
                case "integer":
                    if(!filter_var($parametro[0], FILTER_VALIDATE_INT)){                    	
                        $result=FALSE;                       
                    }
                    break;
                case "float":
                    if(!filter_var($parametro[0], FILTER_VALIDATE_FLOAT)){                   	
                        $result=FALSE;
                    }
                    break;
                case "email":
                    if(!filter_var($parametro[0], FILTER_VALIDATE_EMAIL)){
                    	
                        $result=FALSE;
                        
                        ;
                    }
                    break;
                case "date":
                    $result = validateDate($parametro[0]);
                    $resu = 'false date//';
                    echo var_dump($resu);
                    
                    break;
            }
      }
      return $result;
  }
  
    /*$t = \DateTime::createFromFormat($format, $time);
    return $t && $t->format($format) == $time;
    } */
  
  function validateDate($date, $format = 'Y-m-d h:m'){
    $d = \DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) == $date;
    }