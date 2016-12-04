<?php

	include_once ('../db/utilidades_sql.php');
	include_once ('utilidades.inc');

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
?>