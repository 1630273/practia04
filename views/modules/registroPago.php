<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>


<h1>REGISTRO DE PAGO</h1>

<form method="POST">

	<input type="number" placeholder="No. Padre" name="no_padreRegistro" required>

	<input type="number" placeholder="No. Usuario" name="no_usuRegistro" required>

	<input type="text" placeholder="Descripcion" name="descripcionRegistro"  required>

	<input type="number" placeholder="Monto" name="montoRegistro"  required>

	<input type="submit" value="Enviar">

</form>

<?php

$registro = new MvcController();
$registro -> registroPagoController();

if(isset($_GET["action"])){

	if($_GET["action"] == "okkkkk"){

		echo "Registro Exitoso";
	
	}

}

?>
