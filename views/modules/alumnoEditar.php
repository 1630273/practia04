<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>

<h1>EDITAR Alumno</h1>

<form method="post">
	
	<?php

	$editarAlumno = new MvcController();
	$editarAlumno -> editarAlumnoController();
	$editarAlumno -> actualizarAlumnoController();

	?>

</form>



