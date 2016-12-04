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
	if ($_POST) {	
		$cod_estanteria=isset($_POST['cod_estanteria'])? $_POST['cod_estanteria']:'' ;
		$descripcion=isset($_POST['descripcion'])? $_POST['descripcion']:'' ;

		$registro=set_estanteria($cod_estanteria,$descripcion);
	}

include_once ('php/header.inc');

?>

<div class="container registro">

	<h2>Nueva Estantería</h2>
	<div class="row contenedor">

		
			<div class="col-sm-6">
	  			<div class="form-group">
	    			<label class="col-sm-4 control-label">Código Estantería:</label>
	   				<div class="col-sm-8">
	      				<input type="text" class="form-control" id="cod_estanteria" placeholder="Codigo">
	    			</div>
	 			</div>
 			</div>
			<div class="col-sm-6">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Descripción:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
	    			</div>
	 			</div>
 			</div>
 			 		
			
			<div class="botones">
				<div class="form-group">
			     	<button class="btnestanteria btn_crear">Crear Estantería</button>	
				</div>
			</div>
		
	</div>

	<div id="datosestanteria">
			
	</div>

</div>
		
<?php 
	include_once('php/footer.inc');
?>