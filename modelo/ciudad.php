<?php

class Ciudad{
 private $nombre_ciudad;
 private $id_ciudad;
 private $id_departamento;

   function __construct() {
        
   }

   function getnombre_ciudad() {
     return $this->nombre_ciudad;
    }

    function getid_ciudad() {
        return $this->id_ciudad;
    }

    function getid_departamento() {
        return $this->id_departamento;
    }

    function setnombre_ciudad($nombre_ciudad){
     
        $this->nombre_ciudad = $nombre_ciudad;

    }
   
    function setid_ciudad($id_ciudad){
      
        $this->id_ciudad = $id_ciudad;

    }
    
    function setid_departamento($id_departamento){
      
        $this->id_departamento = $id_departamento;

    }


}


?>