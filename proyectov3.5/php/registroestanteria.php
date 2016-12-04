<?php 
include_once ('../db/utilidades_sql.php');
include_once ('utilidades.inc');

if ($_POST){
	$cod_estanteria=isset($_POST['cod_estanteria'])? $_POST['cod_estanteria']:'' ;
	$descripcion=isset($_POST['descripcion'])? $_POST['descripcion']:'' ;
	$registro=set_estanteria($cod_estanteria,$descripcion);					
}
			
?>