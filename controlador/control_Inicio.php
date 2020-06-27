<?php
class control_Inicio{
    function __construct(){}

    function funcion_Inicio($arr){
        if(isset($arr['btn_Creardep'])){
            require_once("vista/departamento_Vista.php");
        }
        if(isset($arr['btn_crearCiudad'])){
            require_once("vista/ciudad_Vista.php");
        }
        if(isset($arr['btn_queja'])){
            require_once("vista/queja_Vista.php");
        }
    }
}
?>