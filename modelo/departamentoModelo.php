<?php

class departamentoModelo{
	private $db;
	
	
	public function __construct(){
		require_once("Conectar.php");
		$this->db=conectar::conexion();
		
		
    }
    

    public function addDepartamento ($departamento){
        $nombre_departamento=$departamento->getnombre_departamento();
        $id_departamento=$departamento->getid_departamento();
        
      if($this->db->query("INSERT INTO departamento(nombre_departamento, id_departamento)VALUES('$nombre_departamento','$id_departamento')")){
         return true;
     } else{
        return false;
      }
    }
} 