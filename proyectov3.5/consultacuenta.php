<?php 
include_once('db/utilidades_sql.php');
 ?>

<table class="table table-striped">
			<tr>
				<th>#</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Fec. Nac.</th>
				<th>Dirección</th>
				<th>Teléfono</th>
			</tr>

			<?php 
			
			$result = get_usuarios();

			while ($datousuarios = $result -> fetch_assoc()) { 
														
				echo "<tr>
						
						<td>".$datousuarios['id']."</td>	
						<td>".$datousuarios['nombre']."</td>
						<td>".$datousuarios['apellido']."</td>
						<td>".$datousuarios['email']."</td>	
						<td>".$datousuarios['fec_nac']."</td>
						<td>".$datousuarios['direccion']."</td>
						<td>".$datousuarios['telefono']."</td>	
					  </tr>";
								
			}?>

	</table>