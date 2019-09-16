<?php

session_start();

if(!$_SESSION["validar"]){

	header("location:index.php?action=ingresar");

	exit();

}

?>

<h1>EDITAR PADRE</h1>

<form method="post">
	
	<?php

	$editarPadre = new MvcController();
	$editarPadre -> editarPadreController();
	$editarPadre -> actualizarPadreController();

	?>

</form>



