<?php
/* Para incluir librerías de base de datos y utilidades */
include_once ('php/utilidades.inc');
	if (isset ($_SESSION['email'])) {
		if ($_SESSION['rol'] == 'almacen'){
			header('location:index.php');
			die();
		}
	}
include_once('db/utilidades_sql.php');
include_once('php/header.inc');
				
?>

<div class="container registro">
	<h2>Backups</h2>
	<div class="botones">
		<div class="form-group">
			<a href="php/backupcheck.php"><button class="btnbackup btn_crear"  id="btn_backup">Crear Backup</button></a>
		</div>
	</div>
</div>