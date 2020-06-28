<?php

class Queja{
 private $queja;
 private $id_ciudad;
 private $id_queja;


   function __construct() {
        
   }

   function getqueja() {
     return $this->queja;
    }

    function getid_ciudad() {
        return $this->id_ciudad;
    }

    function getid_queja() {
        return $this->id_queja;
    }

    function setqueja($queja){
     
        $this->queja = $queja;

    }
   
    function setid_ciudad($id_ciudad){
      
        $this->id_ciudad = $id_ciudad;

    }
    
    function setid_queja($id_queja){
      
        $this->id_queja = $id_queja;

    }


}


?>