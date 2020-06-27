<?php

class ciudad_Control {   
    
    function __construct() {
        
    }
    function addCiudad($arr){
        
        
        require_once ('modelo/ciudad.php');
        $ciudad = new Ciudad(); 

        require_once ('modelo/ciudadModelo.php');
        $ciudadMo=new ciudadModelo();


        $ciudad->setnombre_ciudad($arr["nombre_ciudad"]);		
        $ciudad->setid_ciudad($arr["id_ciudad"]);		
        $ciudad->setid_departamento($arr["id_departamento"]);	
      
        return $ciudadMo->addCiudad($ciudad);
    }

    
  
}