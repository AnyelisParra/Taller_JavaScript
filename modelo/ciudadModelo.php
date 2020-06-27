<?php

class ciudadModelo{

    private $db;
   

    public function __construct(){

        require_once("Conectar.php");
		$this->db=conectar::conexion();
		
    }

    public function addCiudad ($ciudad){
        $nombre_ciudad=$ciudad->getnombre_ciudad();
        $id_ciudad=$ciudad->getid_ciudad();
        $id_departamento=$ciudad->getid_departamento();
        
        if($this->db->query("INSERT INTO ciudad(nombre_ciudad,id_departamento)VALUES('$nombre_ciudad','$id_departamento')")){
           
               return true;
   
        } else{
   
              return false;
        }
    }
    public function listar($lin){
		$sql = "SELECT * FROM departamento;";
		$result = $lin->query($sql);	
		$arr=array();
		while ($fila = $result->fetch_assoc()){
			$arr[]=$fila;
		}
		return($arr);
	}





}
