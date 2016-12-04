<?php
/* Para incluir librerías de base de datos y utilidades */
include_once ('php/utilidades.inc');
	if (isset ($_SESSION['email'])) {
		if ($_SESSION['rol'] == 'almacen'){
			header('location:index.php');
			die();
		}
	}
include_once('db/utilidades_sql.php');

include_once('php/header.inc');
				
				$result = get_productos();
							
?>
<div class="container registro">

	<h2>Nueva Salida</h2>
	<div class="row contenedor">

		<form action="php/registrosalidas.php" method="POST" class="form-horizontal">
		
 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">No. Factura:</label>
	   				<div class="col-sm-9">
	      				<input  type="text" class="form-control" name="numfactura" placeholder="No. Factura">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Fecha:</label>
	   				<div class="col-sm-9">
	      				<input  type="text" value="<?php echo date('y/m/d') ?>" class="form-control" name="fecha" placeholder="Fecha">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Producto:</label>
	   				<div class="col-sm-9">
	      				<select class="form-control" name="id_producto">
							<?php while ($datosproducto=$result->fetch_assoc()) { ?>
								<option value="<?php echo $datosproducto['nombre'] ?>"><?php echo $datosproducto['nombre'] ?>
								</option>
							<?php } ?>
						</select>
	    			</div>
	 			</div>
 			</div>

  			<div class="col-sm-6 padding">
				<div class="form-group">
					<label class="col-sm-3 control-label">Cantidad:</label>
					<div class="col-sm-9">
						<input type="number" class="form-control" name="cantidad" placeholder="Cantidad">
					</div>
				</div>
  			</div>	

			<div class="botones">
				<div class="form-group">
			     	<button type="submit" class="btn btn-default">Registrar Salida</button>	
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container">
<?php

	include_once('consultasalida.php');
	?>
			
</div>
						
	<?php 
	include_once('php/footer.inc');
	?>