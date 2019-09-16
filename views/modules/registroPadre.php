<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>


<h1>REGISTRO DE PADRES</h1>

<form method="POST">

	<input type="text" placeholder="Nombre" name="nombreRegistro" required>

	<input type="text" placeholder="Apellido Paterno" name="paternoRegistro"  required>

	<input type="text" placeholder="Apellido Materno" name="maternoRegistro"  required>

	<input type="number" placeholder="Telefono" name="telRegistro"  required>

	<input type="email" placeholder="Correo" name="emailRegistro"  required>

	<input type="number" placeholder="No. Del Alumno" name="no_aluRegistro"  required>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroPadreController();

if(isset($_GET["action"])){

	if($_GET["action"] == "okkkk"){

		echo "Registro Exitoso";
	
	}

}

?>
