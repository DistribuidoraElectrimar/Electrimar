<?php 
include_once('db/utilidades_sql.php');
 ?>

<div class="container">
<table class="table table-striped">
			<tr>
				<th>Num. Factura</th>
				<th>Fecha</th>
				<th>Producto</th>
				<th>Cantidad</th>
			</tr>

			<?php 

			$result = get_productossalida();
			while ($datosalida = $result -> fetch_assoc()) { 
														
				echo "<tr>
						
						
						<td>".$datosalida ['numfactura']."</td>
						<td>".$datosalida ['fecha']."</td>	
						<td>".$datosalida ['id_producto']."</td>
						<td>".$datosalida ['cantidad']."</td>
					  </tr>";						
			}?>
	</table>
</div>