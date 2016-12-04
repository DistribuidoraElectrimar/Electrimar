<?php 
include_once('db/utilidades_sql.php');
 ?>

<table class="table table-striped">
			<tr>
				<th>Código Estantería</th>
				<th>Descripción</th>
			</tr>

			<?php 
			
			$result = get_estanteria();

			while ($datoestanteria = $result -> fetch_assoc()) { 
														
				echo "<tr>
						
						<td>".$datoestanteria['cod_estanteria']."</td>	
						<td>".$datoestanteria['descripcion']."</td>
						</tr>";								
			}?>

	</table>