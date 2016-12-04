<?php

	include_once ('../db/utilidades_sql.php');
	include_once ('utilidades.inc');
	include_once ('utilidades.php');
	if ($_POST){
		$contrasena=isset($_POST['contrasena'])? $_POST['contrasena']:'' ;
		$contrasenaver=isset($_POST['contrasenaver'])? $_POST['contrasenaver']:'' ;

		$resultado=validacion($contrasena,$contrasenaver);
		if ($resultado==1){
			$nombre=isset($_POST['nombre'])? $_POST['nombre']:'' ;
			$apellido=isset($_POST['apellido'])? $_POST['apellido']:'' ;
			$email=isset($_POST['email'])? $_POST['email']:'' ;
			$fec_nac=isset($_POST['fec_nac'])? $_POST['fec_nac']:'' ;
			$direccion=isset($_POST['direccion'])? $_POST['direccion']:'' ;
			$telefono=isset($_POST['telefono'])? $_POST['telefono']:'' ;
			$rol=isset($_POST['rol'])? $_POST['rol']:'' ; 
			$contrasena=password_hash($contrasena,PASSWORD_DEFAULT);

			$result=set_registro($nombre,$apellido,$email,$contrasena,$fec_nac,$direccion,$telefono,$rol); //set_registro metodo
		
						ob_start(); //Inicia ciclo
							header ("refresh:2;url=../formulariocrearcuenta.php");
							if ($result){
								echo "<h5>Los datos se almacenaron correctamente</h5>";
							}else {
						echo "<h5>No se pudo almacenar los datos</h5>";
							}
					    ob_end_flush();
					    die();
		}
		else{
			ob_start(); //Inicia ciclo
							header ("refresh:6;url=../formulariocrearcuenta.php");
							if ($result){
								echo "<h5>Los datos se almacenaron correctamente</h5>";
							}else {
								echo "<h5>Contraseña no valida</h5>";
							}
					    ob_end_flush();
					    die();
		}
}
?>