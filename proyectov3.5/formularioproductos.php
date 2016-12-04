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

	$result = get_categorias();
	$resultestanteria = get_estanteria();

		if ($_FILES) {
		$directorioimg='img/producto/';
		$ruta=$directorioimg.basename($_FILES['img']['name']);
		$move=move_uploaded_file($_FILES['img']['tmp_name'],$ruta);

		if ($_POST) {	
		$nombre=isset($_POST['nombre'])? $_POST['nombre']:'' ;
		$descripcion=isset($_POST['descripcion'])? $_POST['descripcion']:'' ;
		$img=$ruta;
		$referencia=isset($_POST['referencia'])? $_POST['referencia']:'' ;
		$peso=isset($_POST['peso'])? $_POST['peso']:'' ;
		$unidad=isset($_POST['unidad'])? $_POST['unidad']:'' ;
		$alto=isset($_POST['alto'])? $_POST['alto']:'' ;
		$ancho=isset($_POST['ancho'])? $_POST['ancho']:'' ;
		$valor=isset($_POST['valor'])? $_POST['valor']:'' ;
		$existencia=isset($_POST['existencia'])? $_POST['existencia']:'' ;
		$fechaentrada=isset($_POST['fechaentrada'])? $_POST['fechaentrada']:'' ;
		$stock=isset($_POST['stock'])? $_POST['stock']:'' ;
		$id_categoria=isset($_POST['id_categoria'])? $_POST['id_categoria']:'' ;
		$cod_estanteria=isset($_POST['cod_estanteria'])? $_POST['cod_estanteria']:'' ;

			$registro=set_producto($nombre,$descripcion,$img,$referencia,$peso,$unidad,$alto,$ancho,$valor,$existencia,$fechaentrada,$stock,$id_categoria,$cod_estanteria);
	}
		}

include_once ('php/header.inc');

?>

<div class="container registro">

	<h2>Registro Productos</h2>
	<div class="row contenedor">

			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Nombre:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="nombre" placeholder="Nombre">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Descripción:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="descripcion" placeholder="Descripcion">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Imagen:</label>
	   				<div class="col-sm-9">
	      				<input type="file" accept="image/*" id="img" >
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Referencia:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="referencia" placeholder="Referencia">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Peso:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="peso" placeholder="Peso">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Unidad:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="unidad" placeholder="Unidad">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Alto:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="alto" placeholder="Alto">
	    			</div>
	 			</div>
 			</div>

			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Ancho:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="ancho" placeholder="Ancho">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Valor:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="valor" placeholder="Valor">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Existencia:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="existencia" placeholder="Existencia">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Fecha Entrada:</label>
	   				<div class="col-sm-9">
	      				<input type="text" value="<?php echo date('Y/m/d') ?>" id="fechaentrada" class="form-control">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Stock Mínimo:</label>
	   				<div class="col-sm-9">
	      				<input type="text" class="form-control" id="stock" placeholder="Stock Minimo">
	    			</div>
	 			</div>
 			</div>

 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Categoría:</label>
	   				<div class="col-sm-9">
	      				<select class="form-control" id="id_categoria">
							<?php while ($datoscategoria=$result->fetch_assoc()) { ?>
								<option value="<?php echo $datoscategoria['id_categoria'] ?>"><?php echo $datoscategoria['nombre'] ?>
								</option>
							<?php } ?>
						</select>
	    			</div>
	 			</div>
 			</div>
			
 			<div class="col-sm-6 padding">
	  			<div class="form-group">
	    			<label class="col-sm-3 control-label">Estantería:</label>
	   				<div class="col-sm-9">
	      				<select class="form-control" id="cod_estanteria">
							<?php 

							

							while ($datosestanteria=$resultestanteria->fetch_assoc()) { ?>
								<option value="<?php echo $datosestanteria['cod_estanteria'] ?>"><?php echo $datosestanteria['cod_estanteria'] ?>
								</option>
							<?php } ?>
						</select>
	    			</div>
	 			</div>
 			</div>


 			<div class="botones">
				<div class="form-group">
			     	<button class="btnproducto btn_crear"  id="btn_producto">Crear Producto</button>	
				</div>
			</div>

	</div>
		
		<div id="datosproducto">
			
		</div>

</div>
	
<?php 
include_once('php/footer.inc')
?>