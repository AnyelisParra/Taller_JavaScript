<html>
<body>

<div class="container">
		

	<form class="form-horizontal" action="index.php" method="post" style="margin: 0 auto;">
				<div class="form-group" >
					<label class="col-sm-5 control-label">Nombre Ciudad</label>
					<div class="col-sm-5">
						<input type="text" name="nombre_ciudad" class="form-control" placeholder="Nombre" required>
					</div>
				</div>

                <div class="row">
					<label class="col-sm-3 control-label">Departamento</label>
					<div class="col-sm-4">
					    <select name="usuario" class="form-control" >
						<?php
                            $arr=$usuario->listar($con->conectar());
							for($i=0;$i<count($arr);$i++){
							echo '<option value='.$arr[$i]['idusuario'].'>'.$arr[$i]['nombreusuario'].'</option>';
							}
							//session_destroy();
						?>
					  </select>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-5 control-label">&nbsp;</label>
					<div class="col-sm-5">
						<input type="submit" name="enviar" class="btn btn-sm btn-primary" value="Agregar">
					</div>
				</div>
                <input type="Hidden" name="controlador" value="ciudad_Control">
               <input type="Hidden" name="accion" value="addCiudad">   
               <input type="Hidden" name="vista1" value="Ciudad_Vista"> <!-- Vista1: Para saber de donde viene. -->
               
	</form>
</div>


</body>
</html>