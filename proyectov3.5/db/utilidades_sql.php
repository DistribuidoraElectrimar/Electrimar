<?php

require ('credenciales_db.php');

$mysqli =new mysqli(DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE);

mysqli_set_charset($mysqli,"utf8");
if ($mysqli-> connect_errno) {
echo "No se pudo establecer la conexión";
exit;
	}

else {

		}

function set_registro ($nombre,$apellido,$email,$contrasena,$fec_nac,$direccion,$telefono,$rol) {
	global $mysqli;
	$datosuser=get_user_byid($email);
	if (!$datosuser) {
		
		$sql="INSERT INTO cliente (nombre,apellido,email,fec_nac,direccion,telefono) VALUES ('{$nombre}','{$apellido}','{$email}','{$fec_nac}','{$direccion}','{$telefono}')";

		 $mysqli-> query ($sql);

		 if ($mysqli) {
		  $rol='almacen';
		  set_user($email,$contrasena,$rol);
		 }
	}
}

function get_usuarios() {
	global $mysqli;
	$sql="SELECT * FROM cliente ORDER BY id";
	return $mysqli-> query ($sql);
}

function set_user ($email,$contrasena,$rol) {
	global $mysqli;
	$sql="INSERT INTO user (email,contrasena,rol) VALUES ('{$email}','{$contrasena}','{$rol}')";
	$mysqli-> query ($sql);
	}

function get_user_byid($email) {
	global $mysqli;
	$sql="SELECT email,contrasena,rol FROM user WHERE email='{$email}'";
	$result=$mysqli-> query ($sql);
	return $result-> fetch_assoc();
}

function set_registro_categoria ($nombre,$descripcion) {
	global $mysqli;
	$sql="INSERT INTO categoria (nombre,descripcion) VALUES ('{$nombre}','{$descripcion}')";
	return $mysqli-> query ($sql);
}

function get_categorias() {
	global $mysqli;
	$sql="SELECT * FROM categoria ORDER BY id_categoria DESC";
	return $mysqli-> query ($sql);
}

function get_estanteria() {
	global $mysqli;
	$sql="SELECT * FROM estanteria ORDER BY cod_estanteria";
	return $mysqli-> query ($sql);
}

function set_producto ($nombre,$descripcion,$img,$referencia,$peso,$unidad,$alto,$ancho,$valor,$existencia,$fechaentrada,$stock,$id_categoria,$cod_estanteria) {
	global $mysqli;
	$sql="INSERT INTO producto (nombre,descripcion,img,referencia,peso,unidad,alto,ancho,valor,existencia,fechaentrada,stock,id_categoria,cod_estanteria) VALUES ('{$nombre}','{$descripcion}','{$img}','{$referencia}','{$peso}','{$unidad}','{$alto}','{$ancho}','{$valor}','{$existencia}','{$fechaentrada}','{$stock}','{$id_categoria}','{$cod_estanteria}')";
	 $mysqli-> query ($sql);
}

function get_productos() {
	global $mysqli;
	$sql="SELECT producto.nombre,producto.descripcion,producto.referencia,producto.valor,producto.existencia,producto.stock,estanteria.cod_estanteria,categoria.id_categoria FROM producto,estanteria,categoria WHERE producto.id_categoria = categoria.id_categoria AND producto.cod_estanteria = estanteria.cod_estanteria ORDER BY id_producto ASC   ";
	return $mysqli-> query ($sql);
}

function get_verproductos($nombre,$referencia){
	global $mysqli;
	
	if(!$referencia=='' AND !$nombre==''){
		$sql="SELECT * FROM producto WHERE nombre LIKE '%$nombre%' OR referencia LIKE '%$referencia%' ORDER BY nombre";
		return $mysqli-> query ($sql);
		
	} if ($referencia=='') {
		$sql="SELECT * FROM producto WHERE nombre LIKE '%$nombre%' ORDER BY nombre";
		return $mysqli-> query ($sql);
	}

	else {
		$sql="SELECT * FROM producto WHERE referencia LIKE '%$referencia%' ORDER BY nombre";
		return $mysqli-> query ($sql);
	}
}

function set_estanteria ($cod_estanteria,$descripcion)
{
	global $mysqli;
	$sql="INSERT INTO estanteria (cod_estanteria,descripcion) VALUES ('{$cod_estanteria}','{$descripcion}')";
	$mysqli-> query($sql);
}

function get_productossalida() {
	global $mysqli;
	$sql="SELECT * FROM salida ORDER BY CURRENT_DATE";
	return $mysqli-> query ($sql);
}

function set_salida ($numfactura,$fecha,$id_producto,$cantidad) {
	global $mysqli;
	$sql="UPDATE producto SET existencia=existencia-'{$cantidad}' WHERE nombre='{$id_producto}'";
	 $mysqli-> query ($sql);
}

function get_vistasalida ($numfactura,$fecha,$id_producto,$cantidad) {
	global $mysqli;
	$sql="INSERT INTO salida (numfactura,fecha,id_producto,cantidad) VALUES ('{$numfactura}','{$fecha}','{$id_producto}','{$cantidad}')";
	 $mysqli-> query ($sql);
}

function get_verreporte ($fechaini,$fechafin){
	global $mysqli;
	$sql="SELECT nombre,referencia,valor,existencia,fechaentrada,stock,id_categoria,cod_estanteria,fecha,cantidad FROM PRODUCTO,salida WHERE fechaentrada>='{$fechaini}' AND fecha<='{$fechafin}'";
	return $mysqli-> query ($sql);
	echo $sql;
}
?>