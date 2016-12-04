<?php
include_once ('php/utilidades.inc');
	if (isset ($_SESSION['email'])) {
		if ($_SESSION['rol'] == 'almacen'){
			header('location:index.php');
			die();
		}
	}
include_once('db/utilidades_sql.php');
include_once('php/header.inc');		
?>

<div class="container registro">

	<h2>Registro Usuarios</h2>

	<div class="row contenedor">
			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Nombre:</label>
	   				<div class="col-sm-9">
	      				<input  type="text" class="form-control" id="nombre" placeholder="Nombre">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Apellido:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="apellido" placeholder="Apellido">
					</div>
				</div>
  			</div> 

  			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Email:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="email" placeholder="mail@example.com">
					</div>
				</div>
  			</div>

  			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Contraseña:</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="contrasena" placeholder="********">
						
					</div>
				</div>
  			</div>
  			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Conf. Contraseña:</label>
					<div class="col-sm-9">
						<input type="password" class="form-control" id="contrasenaver" placeholder="********">
						
					</div>
				</div>
  			</div>

  			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Fec. Nac.:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="fec_nac" placeholder="<?php echo date('Y/m/d') ?>">
					</div>
				</div>
  			</div>

  			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Dirección:</label>
					<div class="col-sm-9">
						<input type="text" class="form-control" id="direccion" placeholder="Direccion">
					</div>
				</div>
  			</div>

  			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Teléfono:</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" id="telefono" placeholder="Telefono">
					</div>
				</div>
  			</div>


  			<?php if (isset ($_SESSION['rol']) == 'admin') { ?>


  				<div class="col-sm-6 padding">
					<div class="form-group">
						<label class="col-sm-3 control-label">Rol:</label>
						<div class="col-sm-9">
							<select class="form-control" id="rol">
								<option value="almacen">Almacén</option>
								<option value="admin">Administrador</option>
							</select>
						</div>
					</div>
  				</div>
					
			<?php } ?>

			<div class="botones">
				<div class="form-group">
			     	<button class="btncuenta btn_crear"  id="btn_cuenta">Crear Cuenta</button>	
				</div>
			</div>

	</div>

	<div id="datoscuenta">
		
	</div>

</div>
						
	<?php 
	include_once('php/footer.inc');
	?>