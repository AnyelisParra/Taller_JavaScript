<?php

class Departamento{
 private $nombre_departamento;
 private $id_departamento;

   function __construct() {
        
   }

   function getnombre_departamento() {
     return $this->nombre_departamento;
    }

    function getid_departamento() {
        return $this->id_departamento;
    }

    function setnombre_departamento($nombre_departamento){
     
        $this->nombre_departamento = $nombre_departamento;

    }
   
    function setid_departamento($id_departamento){
      
        $this->id_departamento = $id_departamento;


    }



}


?>