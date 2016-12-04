<?php 
include_once('db/utilidades_sql.php');
 ?>

 
<table class="table table-striped">
			<tr>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Ref.</th>
				<th>Valor</th>
				<th>Existencia</th>
				<th>Stock</th>
				<th>Categoría</th>
				<th>Estantería</th>
			</tr>

			<?php 
			
			$result = get_productos();

			while ($datoproducto = $result -> fetch_assoc()) { 
														
				echo "<tr>
						
						<td>".$datoproducto['nombre']."</td>
						<td>".$datoproducto['descripcion']."</td>
						<td>".$datoproducto['referencia']."</td>		
						<td>$".number_format($datoproducto['valor'],2)."</td>	
						<td>".$datoproducto['existencia']."</td>	
						<td>".$datoproducto['stock']."</td>	
						<td>".$datoproducto['nombre']."</td>
						<td>".$datoproducto['cod_estanteria']."</td>
					  </tr>";						
			}?>
	</table>