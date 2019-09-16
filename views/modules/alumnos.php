<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>

<h1>ALUMNOS</h1>

	<table border="1">
		
		<thead>
			
			<tr>
				<th>Nombre</th>
				<th>Apellido Paterno</th>
				<th>Apellido Materno</th>
				<th>Edad</th>
				<th></th>
				<th></th>

			</tr>

		</thead>

		<tbody>
			
			<?php

			$vistaAlumno = new MvcController();
			$vistaAlumno -> vistaAlumnoController();
			$vistaAlumno -> borrarAlumnoController();

			?>

		</tbody>

	</table>

<?php

if(isset($_GET["action"])){

	if($_GET["action"] == "cambioo"){

		echo "Cambio Exitoso";
	
	}

}

?>




