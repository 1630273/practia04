<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>

<h1>PADRES</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>No. Padre</th>
				<th>No. Usuario</th>
				<th>Descripción</th>
				<th>Monto</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaPadre = new MvcController();
			$vistaPadre -> vistaPagoController();
			$vistaPadre -> borrarPagoController();

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




