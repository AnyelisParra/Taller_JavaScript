<?php

       

        $departamento=$_POST['departamento'];
 

        require_once('C:\xampp\htdocs\taller_JavaScript\modelo\ciudadModelo.php');
        $ciudadMo=new ciudadModelo();

        $result=$ciudadMo->listarCiudades($departamento);

        $cadena="<label class='col-sm-3 control-label'> Ciudades </label>
          <select id='lista2' name='lista2'>";
          //var_dump($result);

          $count = count($result);
          //echo $count;
            for ($i = 0; $i < $count; $i++) {
                $cadena=$cadena. '<option value='.$result[$i]['id_ciudad'].'>'.utf8_encode($result[$i]['nombre_ciudad']).'</option>';
            }

          echo $cadena."</select>";


?>