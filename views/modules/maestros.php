<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>

<h1>MAESTROS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaMaestro = new MvcController();
			$vistaMaestro -> vistaMaestroController();
			$vistaMaestro -> borrarMaestroController();

			?>

		</tbody>

	</table>

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambiooo"){

		echo "Cambio Exitoso";
	
	}

}

?>




