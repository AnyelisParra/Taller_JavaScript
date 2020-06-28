<html>
<body>

<div class="container">
		

	<form class="form-horizontal" action="index.php" method="post" style="margin: 0 auto;">
				<div class="form-group" >
					<label class="col-sm-5 control-label">Descripción de la Queja</label>
					<div class="col-sm-5">
						<input type="text" name="queja" class="form-control" placeholder="queja" required>
					</div>
				</div>

                <div class="row">
					<label class="col-sm-3 control-label">Departamento</label>
					<div class="col-sm-4">

					    <select name="departamento" id="lista1">
                        <option value="0"> Selecciona un Departamento </option>
						<?php
                             $ciudad_Control = new ciudad_Control;
							 $arr = $ciudad_Control->listardepartamento();  
							for($i=0;$i<count($arr);$i++){
							echo '<option value='.$arr[$i]['id_departamento'].'>'.$arr[$i]['nombre_departamento'].'</option>';
							}
							//session_destroy();
						?>
					  </select>
					</div>
				</div>
                <div class="row" id="select2lista">
					
				     
 
				</div>


				<div class="form-group">
					<label class="col-sm-5 control-label">&nbsp;</label>
					<div class="col-sm-5">
						<input type="submit" name="enviar" class="btn btn-sm btn-primary" value="Agregar">
					</div>
				</div>
                <input type="Hidden" name="controlador" value="queja_Control">
               <input type="Hidden" name="accion" value="addQueja">   
               <input type="Hidden" name="vista1" value="queja_Vista"> <!-- Vista1: Para saber de donde viene. -->
               
	</form>
</div>


</body>
</html>

<script type="text/javascript">
   $(document).ready(function(){
	//$('#lista1').val(2);
       recargarLista();

       $('#lista1').change(function(){
           recargarLista();
        });

   });

function recargarLista(){
    $.ajax({
        type:"POST",
        url:"http://localhost/taller_JavaScript/controlador/datos.php",
        data:"departamento="+ $('#lista1').val(),
        success : function(r){
            $('#select2lista').html(r);
        }

    });


}

</script>
