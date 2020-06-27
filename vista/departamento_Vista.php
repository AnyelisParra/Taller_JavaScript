<html>
<body>

<div class="container">
		

	<form class="form-horizontal" action="index.php" method="post" style="margin: 0 auto;">
				<div class="form-group" >
					<label class="col-sm-5 control-label">Nombre Departamento</label>
					<div class="col-sm-5">
						<input type="text" name="nombre_departamento" class="form-control" placeholder="Nombre" required>
					</div>
				</div>

				<div class="form-group">
					<label class="col-sm-5 control-label">&nbsp;</label>
					<div class="col-sm-5">
						<input type="submit" name="enviar" class="btn btn-sm btn-primary" value="Agregar">
					</div>
				</div>
                <input type="Hidden" name="controlador" value="departamento_Control">
               <input type="Hidden" name="accion" value="addDepartamento">   
               <input type="Hidden" name="vista1" value="departamento_Vista"> <!-- Vista1: Para saber de donde viene. -->
               
	</form>
</div>


</body>
</html>
