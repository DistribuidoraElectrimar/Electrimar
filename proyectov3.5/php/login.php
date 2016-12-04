<?php
include_once ('utilidades.inc');
include_once ("../db/utilidades_sql.php");
	if ($_POST){
		$email=isset($_POST['email'])? $_POST['email']:'' ;
		$contrasena=isset($_POST['contrasena'])? $_POST['contrasena']:'' ;
		$datosuser=get_user_byid($email);

		if (password_verify($contrasena,$datosuser['contrasena'])) {
		$_SESSION['email']=$email;
		$_SESSION['rol']=$datosuser['rol'];
				if ($datosuser ['rol']== 'almacen') {
				header('location:../verproductos.php');
				die();
				}else  {
		header('location:../index-admin.php');
		die();

				}
			}else {
			header('location:../index.php');
			die();
		}
	}
?>