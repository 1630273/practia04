<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>


<h1>REGISTRO DE MAESTRO</h1>

<form method="POST">

	<input type="text" placeholder="Nombre" name="nombreRegistro" required>

	<input type="text" placeholder="Apellido Paterno" name="paternoRegistro"  required>

	<input type="text" placeholder="Apellido Materno" name="maternoRegistro"  required>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroMaestroController();

if(isset($_GET["action"])){

	if($_GET["action"] == "okkk"){

		echo "Registro Exitoso";
	
	}

}

?>
