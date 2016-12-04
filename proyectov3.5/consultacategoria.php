<?php 
include_once('db/utilidades_sql.php');
 ?>

<table class="table table-striped">
			<tr>
				
				<th>#</th>
				<th>Nombre</th>
				<th>Descripcion</th>			
			</tr>

			<?php 
			
			$result = get_categorias();
			
			while ($categoria = $result -> fetch_assoc()) { 
														
				echo "<tr>					
						<td  class='edit'>".$categoria['id_categoria']."</td>	
						<td id='categoria' contentEditable='true'>".$categoria['nombre']."</td>
						<td contentEditable='true' >".$categoria['descripcion']."</td>
						</tr>";
						
			}?>
	</table>