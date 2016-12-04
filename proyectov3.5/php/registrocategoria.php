<?php 
include_once ('../db/utilidades_sql.php');
include_once ('utilidades.inc');

if ($_POST){
	$nombre=isset($_POST['nombre'])? $_POST['nombre']:'' ;
	$descripcion=isset($_POST['descripcion'])? $_POST['descripcion']:'' ;
	$result=set_registro_categoria ($nombre,$descripcion);
}

?>