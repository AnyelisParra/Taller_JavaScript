<?php

class quejaModelo{
	private $db;
	
	
	public function __construct(){
		require_once("Conectar.php");
		$this->db=conectar::conexion();
		
		
    }
    

    public function addQueja ($queja){
        $queja1 = $queja->getqueja();
        $id_ciudad = $queja->getid_ciudad();
        // $id_queja=$queja->getid_queja();
        // $id_departamento=$ciudad->getid_departamento();
        
      
        
      if($this->db->query("INSERT INTO queja(queja,id_ciudad)VALUES('$queja1','$id_ciudad')")){
         return true;
     } else{
        return false;
      }
    }

    
} 