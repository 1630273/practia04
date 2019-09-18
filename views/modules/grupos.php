

<div style="background-color:white " >
	<table class="table ">
		
		<thead style="background-color:#53D3EE">
			
			<tr>
			
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Maestro</th>
				<th>Modificar</th>
				<th>Eliminar</th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaGrupo= new MvcController();
			$vistaGrupo -> vistaGruposController();
			$vistaGrupo -> borrarPagoController();

			?>

		</tbody>

	</table>

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambiooooo"){

		echo "Cambio Exitoso";
	
	}

}

?>




