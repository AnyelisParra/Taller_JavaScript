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
        echo $arr["queja"];
        $queja->setid_ciudad($arr["lista2"]);	
        echo $arr["lista2"];
       
      
        return $quejaMo->addQueja($queja);
    }

    

   
  
}