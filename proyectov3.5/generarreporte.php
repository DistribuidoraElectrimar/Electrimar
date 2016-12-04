<?php 
include_once('php/header.inc');
include_once('db/utilidades_sql.php');

		$fechaini=isset($_POST['fechainicial'])? $_POST['fechainicial']:'' ;
		$fechafin=isset($_POST['fechafinal'])? $_POST['fechafinal']:'' ;
 ?>

 <div class="container">

<table class="table table-striped">
			<tr>
				
				<th>Nombre</th>
				<th>Referencia</th>
				<th>Valor</th>
				<th>Existencia</th>
				<th>Fecha de Entrada</th>
				<th>Stock</th>
				<th>Categoría</th>
				<th>Estantería</th>
				<th>Fecha Salida</th>
				<th>Cantidad Salida</th>		
			</tr>

			<?php 
			
			$result = get_verreporte($fechaini, $fechafin);
			
			while ($reporte = $result -> fetch_assoc()) { 
														
				echo "<tr>
						
						<td>".$reporte['nombre']."</td>	
						<td>".$reporte['referencia']."</td>
						<td>".$reporte['valor']."</td>
						<td>".$reporte['existencia']."</td>
						<td>".$reporte['fechaentrada']."</td>
						<td>".$reporte['stock']."</td>
						<td>".$reporte['id_categoria']."</td>
						<td>".$reporte['cod_estanteria']."</td>
						<td>".$reporte['fecha']."</td>
						<td>".$reporte['cantidad']."</td>
					</tr>";
			}?>
	</table>
</div>