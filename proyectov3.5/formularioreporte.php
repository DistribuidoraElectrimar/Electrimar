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
							
?>
<div class="container registro">

	<h2>Nueva Reporte</h2>
	<div class="row contenedor">

		<form action="generarreporte.php" method="POST" class="form-horizontal">
		
 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Fecha Inicial:</label>
	   				<div class="col-sm-9">
	      				<input type="text" value="<?php echo date('Y/m/d') ?>" name="fechainicial" class="form-control">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Fecha Final:</label>
	   				<div class="col-sm-9">
	      				<input type="text" value="<?php echo date('Y/m/d') ?>" name="fechafinal" class="form-control">
	    			</div>
	 			</div>
 			</div>
 			

			<div class="botones">
				<div class="form-group">
			     	<button type="submit" class="btn btn-default">Generar Reporte</button>	
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container">
		<?php 
		include_once('generarreporte.php')
		 ?>
</div>
						
	<?php 
	include_once('php/footer.inc');
	?>