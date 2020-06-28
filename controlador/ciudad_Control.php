<?php

class ciudad_Control {   
    
    function __construct() {
        
    }
    function addCiudad($arr){
        
        
        require_once ('modelo/ciudad.php');
        $ciudad = new Ciudad(); 

        require_once ('modelo/ciudadModelo.php');
        $ciudadMo=new ciudadModelo();


        $ciudad->setnombre_ciudad($arr["nombre_ciudad"]);			
        $ciudad->setid_departamento($arr["departamento"]);	
      
        return $ciudadMo->addCiudad($ciudad);
    }

    function listardepartamento(){
        

        require_once ('modelo/ciudadModelo.php');
        $ciudadMo=new ciudadModelo();
        
        return $ciudadMo->listar();



    }

    function cargarCiudadesid($arr){

        $departamento=$arr['departamento'];
 

        require_once ('modelo/ciudadModelo.php');
        $ciudadMo=new ciudadModelo();

        $result=$ciudadMo->listarCiudades($departamento);

        $cadena="<label> SELECT 2 (ciudades)</label>
          <select id='lista2' name='lista2'>";

          foreach ($ver as &$result){
            
              $cadena=$cadena. '<option value='.$ver[0].'>'.utf8_encode($ver[2]).'</option>';


          }

          echo $cadena."</select>";


      
        
    }


  
}