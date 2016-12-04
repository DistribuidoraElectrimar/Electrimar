<?php 	

include_once ('php/utilidades.inc');
include_once('db/utilidades_sql.php');
include_once('php/header.inc');

		$nombre=isset($_POST['nombre'])? $_POST['nombre']:'' ;
		$referencia=isset($_POST['referencia'])? $_POST['referencia']:'' ;
?>
<div class="container">

<table class="table table-striped">
			<tr>
				<th>Ref.</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Valor</th>
				<th>Existencia</th>
				<th>Stock</th>
				<th>Categoría</th>
				<th>Estantería</th>
			</tr>

			<?php 	
			
			$result = get_verproductos($nombre, $referencia);

			while ($datoproducto = $result -> fetch_assoc()) { 
														
				echo "<tr>
						<td>".$datoproducto['referencia']."</td>
						<td>".$datoproducto['nombre']."</td>
						<td>".$datoproducto['descripcion']."</td>
						<td>$".number_format($datoproducto['valor'],2)."</td>	
						<td>".$datoproducto['existencia']."</td>	
						<td>".$datoproducto['stock']."</td>	
						<td>".$datoproducto['nombre']."</td>
						<td>".$datoproducto['cod_estanteria']."</td>
					  </tr>";
							
			}?>

	</table>
</div>