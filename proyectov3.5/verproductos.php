<?php
/* Para incluir librerías de base de datos y utilidades */
include_once ('db/utilidades_sql.php');
include_once ('php/utilidades.inc');
	if (isset ($_SESSION['email'])) {
		if ($_SESSION['rol'] == 'cliente'){
			header('location:index.php');
			die();
		}
	}

include_once ('php/header.inc');
?>

<div class="container registro" id="ver">

	<h2>Ver Productos</h2>
	<div class="row contenedor">

		<form action="verproductos.php" method="POST" class="form-horizontal">
			<div class="col-sm-6">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Nombre:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" name="nombre" placeholder="Nombre">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Referencia:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" name="referencia" placeholder="Referencia">
	    			</div>
	 			</div>
 			</div>		

			<div class="botones">
				<div class="form-group">
			     	<button type="submit" class="btn btn-default">Buscar Producto</button>	
				</div>
			</div>
		</form>
	</div>
</div>

<div class="container">
		<?php 
			include_once('buscarproducto.php')
		 ?>
	</div>
<?php 
include_once('php/footer.inc')
?>