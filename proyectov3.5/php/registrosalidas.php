<?php 
include_once ('../db/utilidades_sql.php');
include_once ('utilidades.inc');

if ($_POST){
	$numfactura=isset($_POST['numfactura'])? $_POST['numfactura']:'' ;
	$fecha=isset($_POST['fecha'])? $_POST['fecha']:'' ;
	$id_producto=isset($_POST['id_producto'])? $_POST['id_producto']:'';
	$cantidad=isset($_POST['cantidad'])? $_POST['cantidad']:'' ;

	$result = set_salida($numfactura,$fecha,$id_producto,$cantidad);
}

if ($_POST){
	$numfactura=isset($_POST['numfactura'])? $_POST['numfactura']:'' ;
	$fecha=isset($_POST['fecha'])? $_POST['fecha']:'' ;
	$id_producto=isset($_POST['id_producto'])? $_POST['id_producto']:'';
	$cantidad=isset($_POST['cantidad'])? $_POST['cantidad']:'' ;

	$result = get_vistasalida($numfactura,$fecha,$id_producto,$cantidad);
		
				ob_start(); //Inicia ciclo
						header ("refresh:0;url=../formulariosalidas.php");
						if (!$result){
							echo "<h5>Los datos se almacenaron correctamente</h5>";
						}else {
							echo "<h5>No se pudo almacenar los datos</h5>";
						}
				    ob_end_flush();
				    die();	
}
?>