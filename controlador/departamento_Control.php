<?php

class Departamento_Control {   
    
    function __construct() {
        
    }
    function addDepartamento($arr){
        
        
        require_once ('modelo/departamento.php');
        $departamento = new Departamento(); 

        require_once ('modelo/departamentoModelo.php');
        $departamentoMo=new departamentoModelo();


        $departamento->setnombre_departamento($arr["nombre_departamento"]);		
        $departamento->setid_departamento($arr["id_departamento"]);		
      
        return $departamentoMo->addDepartamento($departamento);
    }

  
}