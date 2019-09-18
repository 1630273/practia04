<?php

class MvcController{

	#LLAMADA A LA PLANTILLA
	#-------------------------------------

	public function pagina(){	
		
		include "views/modules/ingresar.php";
	
	}

	public function pagina2(){	
		
		include "views/template.php";
	
	}

	#ENLACES
	#-------------------------------------

	public function enlacesPaginasController(){

		if(isset( $_GET['action'])){
			
			$enlaces = $_GET['action'];
		
		}

		else{

			$enlaces = "index";
		}

		$respuesta = Paginas::enlacesPaginasModel($enlaces);

		include $respuesta;

	}

	#REGISTRO DE USUARIOS
	#------------------------------------
	public function registroUsuarioController(){

		if(isset($_POST["usuarioRegistro"])){

			$datosController = array( 
				"usuario"=>$_POST["usuarioRegistro"],

				"password"=>$_POST["passwordRegistro"],

				"email"=>$_POST["emailRegistro"],

				"nombre"=>$_POST["nombreRegistro"],

				"paterno"=>$_POST["paternoRegistro"],

				"materno"=>$_POST["maternoRegistro"],

				"no_perfil"=>$_POST["no_perfilRegistro"]);

			$respuesta = Datos::registroUsuarioModel($datosController, "usuarios");

			if($respuesta == "success"){

				header("location:index.php?action=ok");

			}

			else{

				header("location:index.php");
			}

		}

	}

	#Nombre DE USUARIO

	

	#INGRESO DE USUARIOS
	#------------------------------------
	public function ingresoUsuarioController(){

		if(isset($_POST["usuarioIngreso"])){

			$datosController = array( 
				"usuario"=>$_POST["usuarioIngreso"], 
								      
				"password"=>$_POST["passwordIngreso"]);

			$respuesta = Datos::ingresoUsuarioModel($datosController, "usuarios");

			if($respuesta["usuario"] == $_POST["usuarioIngreso"] && $respuesta["password"] == $_POST["passwordIngreso"]){
				
				$nombre["usuarioIngreso"]=$_POST["usuarioIngreso"];
				session_start();

				$_SESSION["validar"] = true;

				if ($respuesta["no_perfil"] == 1) {
					header("location:views/template.php?action=inicio");
				}else{
					header("location:views/templateApoyo.php?action=inicio");
				}

			}

			else{

				header("location:index.php?action=fallo");

			}

		}	

	}

	#VISTA DE USUARIOS
	#------------------------------------

	public function vistaUsuariosController(){

		$respuesta = Datos::vistaUsuariosModel("usuarios");


		foreach($respuesta as $row => $item){
		echo'<tr>
				<td>'.$item["nombre"].'</td>
				<td>'.$item["ape_paterno"].'</td>
				<td>'.$item["ape_materno"].'</td>
				<td>'.$item["usuario"].'</td>
				<td>'.$item["password"].'</td>
				<td>'.$item["email"].'</td>
				<td><a href="index.php?action=editar&no_usu='.$item["no_usu"].'" class="btn btn-sm btn-custom"><i class="fa fa-edit"></i></a></td>
				<td><a href="index.php?action=usuarios&no_usuBorrar='.$item["no_usu"].'"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
			</tr>';

		}

	}

	public function visualizarAlumnos(){


		if(isset($_POST["usuarioIngreso"])){



			 $padre=$_POST["usuarioIngreso"];

			$respuesta = Datos::visAlu("alumnos");

		}
		}
	#EDITAR USUARIO
	#------------------------------------

	public function editarUsuarioController(){

		$datosController = $_GET["no_usu"];
		$respuesta = Datos::editarUsuarioModel($datosController, "usuarios");

		echo'<input type="hidden" value="'.$respuesta["no_usu"].'" name="no_usuEditar">

			 <input text="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

			 <input text="text" value="'.$respuesta["ape_paterno"].'" name="paternoEditar" required>

			 <input text="text" value="'.$respuesta["ape_materno"].'" name="maternoEditar" required>

			 <input type="text" value="'.$respuesta["usuario"].'" name="usuarioEditar" required>

			 <input type="text" value="'.$respuesta["password"].'" name="passwordEditar" required>

			 <input type="email" value="'.$respuesta["email"].'" name="emailEditar" required>

			 <input type="submit" value="Actualizar">';

	}

	#ACTUALIZAR USUARIO
	#------------------------------------
	public function actualizarUsuarioController(){

		if(isset($_POST["usuarioEditar"])){

			$datosController = array( 
				"no_usu"=>$_POST["no_usuEditar"],

			"usuario"=>$_POST["usuarioEditar"],

			"password"=>$_POST["passwordEditar"],

			"email"=>$_POST["emailEditar"],

			"nombre"=>$_POST["nombreEditar"],

			"paterno"=>$_POST["paternoEditar"],

			"materno"=>$_POST["maternoEditar"]);
			
			$respuesta = Datos::actualizarUsuarioModel($datosController, "usuarios");

			if($respuesta == "success"){

				header("location:template.php?action=cambio");

			}

			else{

				echo "error";

			}

		}
	
	}

	#BORRAR USUARIO
	#------------------------------------
	public function borrarUsuarioController(){

		if(isset($_GET["no_usuBorrar"])){

			$datosController = $_GET["no_usuBorrar"];
			
			$respuesta = Datos::borrarUsuarioModel($datosController, "usuarios");

			if($respuesta == "success"){

				header("location:template.php?action=usuarios");
			
			}

		}

	}

















#---------------------------------------------------------------#














		#REGISTRO DE Maestros
	#------------------------------------
	public function registroMaestroController(){

		if(isset($_POST["nombreRegistro"])){

			$datosController = array( 
				"nombre"=>$_POST["nombreRegistro"],

				"paterno"=>$_POST["paternoRegistro"],

				"materno"=>$_POST["maternoRegistro"]);

			$respuesta = Datos::registroMaestroModel($datosController, "maestros");

			if($respuesta == "success"){

				header("location:template.php?action=okkk");

			}

			else{

				header("location:template.php");
			}

		}

	}


	// #VISTA DE Maestro
	// #------------------------------------

	 public function vistaMaestroController(){

	 	$respuesta = Datos::vistaMaestrosModel("maestros");


	 	foreach($respuesta as $row => $item){
	 	echo'<tr>
	 			<td>'.$item["nombre"].'</td>
	 			<td>'.$item["ape_paterno"].'</td>
	 			<td>'.$item["ape_materno"].'</td>
	 			<td><a href="index.php?action=maestroEditar&no_maestro='.$item["no_maestro"].'"class="btn btn-sm btn-custom"><i class="fa fa-edit"></i></a></td>
	 			<td><a href="index.php?action=maestros&no_maestroBorrar='.$item["no_maestro"].'"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
	 		</tr>';

	 	}

	 }

	// #EDITAR Maestro
	// #------------------------------------

	 public function editarMaestroController(){

	 	$datosController = $_GET["no_maestro"];
	 	$respuesta = Datos::editarMaestroModel($datosController, "maestros");

	 	echo'<input type="hidden" value="'.$respuesta["no_maestro"].'" name="no_maestroEditar">

	 		 <input text="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

	 		 <input text="text" value="'.$respuesta["ape_paterno"].'" name="paternoEditar" required>

	 		 <input text="text" value="'.$respuesta["ape_materno"].'" name="maternoEditar" required>

	 		 <input type="submit" value="Actualizar">';

	 }

	// #ACTUALIZAR Maestra
	// #------------------------------------
	 public function actualizarMaestroController(){

	 	if(isset($_POST["nombreEditar"])){

	 		$datosController = array( 
	 			"no_maestro"=>$_POST["no_maestroEditar"],

	 		"nombre"=>$_POST["nombreEditar"],

	 		"paterno"=>$_POST["paternoEditar"],

	 		"materno"=>$_POST["maternoEditar"]);
			
	 		$respuesta = Datos::actualizarMaestroModel($datosController, "maestros");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=cambiooo");

	 		}

	 		else{

	 			echo "error";

	 		}

	 	}
	
	 }

	// #BORRAR Maestra
	// #------------------------------------
	 public function borrarMaestroController(){

	 	if(isset($_GET["no_maestroBorrar"])){

	 		$datosController = $_GET["no_maestroBorrar"];
			
	 		$respuesta = Datos::borrarMaestroModel($datosController, "maestros");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=maestros");
			
	 		}

	 	}

	 }









#--------------------------------------------------------------#













	#REGISTRO DE Alumnos
	#------------------------------------
	public function registroAlumnoController(){

		if(isset($_POST["nombreRegistro"])){

			$datosController = array( 
				"nombre"=>$_POST["nombreRegistro"],

				"paterno"=>$_POST["paternoRegistro"],

				"materno"=>$_POST["maternoRegistro"],

				"edad" =>$_POST["edadRegistro"],

				"no_padre" =>$_POST["no_padreRegistro"]);

			$respuesta = Datos::registroAlumnoModel($datosController, "alumnos");

			if($respuesta == "success"){

				header("location:template.php?action=okk");

			}

			else{

				header("location:template.php");
			}

		}

	}


	// #VISTA DE ALUMNOS
	// #------------------------------------

	 public function vistaAlumnoController(){

	 	$respuesta = Datos::vistaAlumnosModel("alumnos");


	 	foreach($respuesta as $row => $item){
	 	echo'<tr>
	 			<td>'.$item["nombre"].'</td>
	 			<td>'.$item["ape_paterno"].'</td>
	 			<td>'.$item["ape_materno"].'</td>
	 			<td>'.$item["edad"].'</td>
	 			<td><a href="template.php?action=alumnoEditar&no_alu='.$item["no_alu"].'" class="btn btn-sm btn-custom"><i class="fa fa-edit"></i></a></td>
	 			<td><a href="template.php?action=alumnos&no_aluBorrar='.$item["no_alu"].'" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
	 		</tr>';

	 	}

	 }

	// #EDITAR Alumno
	// #------------------------------------

	 public function editarAlumnoController(){

	 	$datosController = $_GET["no_alu"];
	 	$respuesta = Datos::editarAlumnoModel($datosController, "alumnos");

	 	echo'<input type="hidden" value="'.$respuesta["no_alu"].'" name="no_aluEditar">

	 		 <input text="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

	 		 <input text="text" value="'.$respuesta["ape_paterno"].'" name="paternoEditar" required>

	 		 <input text="text" value="'.$respuesta["ape_materno"].'" name="maternoEditar" required>

	 		 <input type="number" value="'.$respuesta["edad"].'" name="edadEditar" required>

	 		 <input type="submit" value="Actualizar">';

	 }

	// #ACTUALIZAR Alumno
	// #------------------------------------
	 public function actualizarAlumnoController(){

	 	if(isset($_POST["nombreEditar"])){

	 		$datosController = array( 
	 			"no_alu"=>$_POST["no_aluEditar"],

	 		"nombre"=>$_POST["nombreEditar"],

	 		"paterno"=>$_POST["paternoEditar"],

	 		"materno"=>$_POST["maternoEditar"],

	 		"edad"=>$_POST["edadEditar"]);
			
	 		$respuesta = Datos::actualizarAlumnoModel($datosController, "alumnos");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=cambioo");

	 		}

	 		else{

	 			echo "error";

	 		}

	 	}
	
	 }

	// #BORRAR Alumno
	// #------------------------------------
	 public function borrarAlumnoController(){

	 	if(isset($_GET["no_aluBorrar"])){

	 		$datosController = $_GET["no_aluBorrar"];
			
	 		$respuesta = Datos::borrarAlumnoModel($datosController, "alumnos");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=alumnos");
			
	 		}

	 	}

	 }













#-----------------------------------------------------------#













	#REGISTRO DE PADRES
	#------------------------------------
	public function registroPadreController(){

		if(isset($_POST["nombreRegistro"])){

			$datosController = array( 
				"nombre"=>$_POST["nombreRegistro"],

				"paterno"=>$_POST["paternoRegistro"],

				"materno"=>$_POST["maternoRegistro"],

				"telefono" =>$_POST["telRegistro"],

				"email"=>$_POST["emailRegistro"]);

			$respuesta = Datos::registroPadreModel($datosController, "padres");

			if($respuesta == "success"){

				header("location:template.php?action=okkkk");

			}

			else{

				header("location:template.php");
			}

		}

	}


	// #VISTA DE PADRE
	// #------------------------------------

	 public function vistaPadreController(){

	 	$respuesta = Datos::vistaPadresModel("padres");


	 	foreach($respuesta as $row => $item){
	 	echo'<tr>
	 			<td>'.$item["nombre"].'</td>
	 			<td>'.$item["ape_paterno"].'</td>
	 			<td>'.$item["ape_materno"].'</td>
	 			<td>'.$item["telefono"].'</td>
	 			<td>'.$item["email"].'</td>
	 			<td><a href="template.php?action=padresEditar&no_padre='.$item["no_padre"].'"class="btn btn-sm btn-custom"><i class="fa fa-edit"></i></a></td>
	 			<td><a href="template.php?action=padres&no_padreBorrar='.$item["no_padre"].'"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
	 		</tr>';

	 	}

	 }

	// #EDITAR PADRE
	// #------------------------------------

	 public function editarPadreController(){

	 	$datosController = $_GET["no_padre"];
	 	$respuesta = Datos::editarPadreModel($datosController, "padres");

	 	echo'<input type="hidden" value="'.$respuesta["no_padre"].'" name="no_padreEditar">

	 		 <input text="text" value="'.$respuesta["nombre"].'" name="nombreEditar" required>

	 		 <input text="text" value="'.$respuesta["ape_paterno"].'" name="paternoEditar" required>

	 		 <input text="text" value="'.$respuesta["ape_materno"].'" name="maternoEditar" required>

	 		 <input type="number" value="'.$respuesta["telefono"].'" name="telEditar" required>

	 		 <input type="text" value="'.$respuesta["email"].'" name="emailEditar" required>

	 		 <input type="submit" value="Actualizar">';

	 }

	// #ACTUALIZAR PADRE
	// #------------------------------------
	 public function actualizarPadreController(){

	 	if(isset($_POST["nombreEditar"])){

	 		$datosController = array( 
	 			"no_padre"=>$_POST["no_padreEditar"],

	 		"nombre"=>$_POST["nombreEditar"],

	 		"paterno"=>$_POST["paternoEditar"],

	 		"materno"=>$_POST["maternoEditar"],

	 		"telefono"=>$_POST["telEditar"],

	 		"email"=>$_POST["emailEditar"]);
			
	 		$respuesta = Datos::actualizarPadreModel($datosController, "padres");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=cambioooo");

	 		}

	 		else{

	 			echo "error";

	 		}

	 	}
	
	 }

	// #BORRAR PADRE
	// #------------------------------------
	 public function borrarPadreController(){

	 	if(isset($_GET["no_padreBorrar"])){

	 		$datosController = $_GET["no_padreBorrar"];
			
	 		$respuesta = Datos::borrarPadreModel($datosController, "padres");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=padres");
			
	 		}

	 	}

	 }












#-------------------------------------------------------------#









	#REGISTRO DE PAGOS
	#------------------------------------
	public function registroPagoController(){

		if(isset($_POST["no_padreRegistro"])){

			$datosController = array( 
				"no_padre"=>$_POST["no_padreRegistro"],

				"no_usu"=>$_POST["no_usuRegistro"],

				"descripcion"=>$_POST["descripcionRegistro"],

				"monto" =>$_POST["montoRegistro"]);

			$respuesta = Datos::registroPagoModel($datosController, "pagos");

			if($respuesta == "success"){

				header("location:template.php?action=okkkkk");

			}

			else{

				header("location:template.php");
			}

		}

	}


	// #VISTA DE PAGOS
	// #------------------------------------

	 public function vistaPagoController(){

	 	$respuesta = Datos::vistaPagoModel("pagos");


	 	foreach($respuesta as $row => $item){
	 	echo'<tr>
	 			<td>'.$item["no_padre"].'</td>
	 			<td>'.$item["no_usu"].'</td>
	 			<td>'.$item["descripcion"].'</td>
	 			<td>'.$item["monto"].'</td>
	 			<td><a href="template.php?action=pagosEditar&no_pago='.$item["no_pago"].'"class="btn btn-sm btn-custom"><i class="fa fa-edit"></i></a></td>
	 			<td><a href="template.php?action=pagos&no_pagoBorrar='.$item["no_pago"].'"class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></a></td>
	 		</tr>';

	 	}

	 }

	// #EDITAR PAGO
	// #------------------------------------

	 public function editarPagoController(){

	 	$datosController = $_GET["no_pago"];
	 	$respuesta = Datos::editarPagoModel($datosController, "pagos");

	 	echo'<input type="hidden" value="'.$respuesta["no_pago"].'" name="no_pagoEditar">

	 		 <input text="text" value="'.$respuesta["no_padre"].'" name="no_padreEditar" required>

	 		 <input text="text" value="'.$respuesta["no_usu"].'" name="no_usuEditar" required>

	 		 <input text="text" value="'.$respuesta["descripcion"].'" name="descripcionEditar" required>

	 		 <input type="number" value="'.$respuesta["monto"].'" name="montoEditar" required>

	 		 <input type="submit" value="Actualizar">';

	 }

	// #ACTUALIZAR PAGO
	// #------------------------------------
	 public function actualizarPagoController(){

	 	if(isset($_POST["no_padreEditar"])){

	 		$datosController = array( 
	 			"no_pago"=>$_POST["no_pagoEditar"],

	 		"no_padre"=>$_POST["no_padreEditar"],

	 		"no_usu"=>$_POST["no_usuEditar"],

	 		"descripcion"=>$_POST["descripcionEditar"],

	 		"monto"=>$_POST["montoEditar"]);
			
	 		$respuesta = Datos::actualizarPagoModel($datosController, "pagos");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=cambiooooo");

	 		}

	 		else{

	 			echo "error";

	 		}

	 	}
	
	 }

	// #BORRAR PAGO
	// #------------------------------------
	 public function borrarPagoController(){

	 	if(isset($_GET["no_pagoBorrar"])){

	 		$datosController = $_GET["no_pagoBorrar"];
			
	 		$respuesta = Datos::borrarPagoModel($datosController, "pagos");

	 		if($respuesta == "success"){

	 			header("location:template.php?action=pagos");
			
	 		}

	 	}

	 }


}

?>