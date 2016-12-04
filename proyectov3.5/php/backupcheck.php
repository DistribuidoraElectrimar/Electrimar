<?php  

$file = date("Y-m-d-H-i-s").".sql";
$backup="C:\wamp64\bin\mysql\mysql5.7.14\bin\mysqldump -uroot -psena12345 proyectoelectrimar > $file";
system($backup);
ob_start(); //Inicia ciclo
							header ("refresh:0;url=../backup.php");
							if ($backup){
								echo "<h5>Se ha creado la Copia de Seguridad satisfactoriamente</h5>";
							}else {
								echo "<h5>No se realizo la Copia de Seguridad</h5>";
							}
					    ob_end_flush();
					    die();
?>