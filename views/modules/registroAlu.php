<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>


<h1>REGISTRO DE ALUMNO</h1>

<form method="POST">

	<input type="text" placeholder="Nombre" name="nombreRegistro" required>

	<input type="text" placeholder="Apellido Paterno" name="paternoRegistro"  required>

	<input type="text" placeholder="Apellido Materno" name="maternoRegistro"  required>

	<input type="number" placeholder="Edad" name="edadRegistro"  required>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroAlumnoController();

if(isset($_GET["action"])){

	if($_GET["action"] == "okk"){

		echo "Registro Exitoso";
	
	}

}

?>
