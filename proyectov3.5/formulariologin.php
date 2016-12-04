<?php 	

include_once('php/header.inc');

?>

<div class="container login">

	<h2>Acceso Usuarios</h2>
	
		<form action="php/login.php" method="POST">
		  	<div class="form-group">
		    	<label for="usuario">Correo</label>
		    	<input type="text" class="form-control" name="email" placeholder="Correo">
		  	</div>
		  	<div class="form-group">
		    	<label for="contraseña">Contraseña</label>
		    	<input type="password" class="form-control" name="contrasena" placeholder="Contraseña">
		  	</div>
		 	 
			<button type="submit" class="btn btn-default">Ingresar</button>
		</form>
	</div>

<?php 
	include_once('php/footer.inc');
?>