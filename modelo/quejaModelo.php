<?php

class quejaModelo{
	private $db;
	
	
	public function __construct(){
		require_once("Conectar.php");
		$this->db=conectar::conexion();
		
		
    }
    

    public function addQueja ($queja){
        $queja=$queja->getqueja();
        /* $nombre_departamento=$departamento->getnombre_departamento();
        $id_departamento=$departamento->getid_departamento(); */
        
      if($this->db->query("INSERT INTO queja(queja,nombre_departamento, id_departamento)VALUES('$queja','$nombre_departamento','$id_departamento')")){
         return true;
     } else{
        return false;
      }
    }
} 