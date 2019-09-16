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
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Telefono</th>
				<th>Correo</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaPadre = new MvcController();
			$vistaPadre -> vistaPadreController();
			$vistaPadre -> borrarPadreController();

			?>

		</tbody>

	</table>

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambioooo"){

		echo "Cambio Exitoso";
	
	}

}

?>




