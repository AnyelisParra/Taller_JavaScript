<?php

class queja_Control {   
    
    function __construct() {
        
    }
    function addQueja($arr){
        
        
        require_once ('modelo/queja.php');
        $queja = new Queja(); 

        require_once ('modelo/quejaModelo.php');
        $quejaMo=new quejaModelo();


        $queja->setqueja($arr["queja"]);		
        $queja->setid_ciudad($arr["id_ciudad"]);		
        $queja->setid_queja($arr["id_queja"]);	
      
        return $quejaMo->addQueja($queja);
    }

  
}