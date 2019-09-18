<?php

require_once "conexion.php";

class Datos extends Conexion{

	#REGISTRO DE USUARIOS
	#-------------------------------------
	public function registroUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, ape_paterno, ape_materno, usuario, password, email) VALUES (:nombre,:paterno,:materno, :usuario, :password, :email)");	
		
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
		$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}

	#INGRESO USUARIO
	#-------------------------------------
	public function ingresoUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT no_usu, usuario, password FROM $tabla WHERE usuario = :usuario");	

		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);

		$stmt->execute();
 
		return $stmt->fetch();

		$stmt->close();

	}

	public function visAlu($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT no_alu, nombre, ape_paterno,ape_materno FROM $tabla");	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}


	public function ObtenerPadres($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT no_padre, nombre, ape_paterno,ape_materno FROM $tabla");	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	public function ObtenerNombreU($tabla){
		$stmt = Conexion::conectar()->prepare("SELECT no_padre, nombre, ape_paterno,ape_materno FROM $tabla");	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	#VISTA USUARIOS
	#-------------------------------------

	public function vistaUsuariosModel($tabla){

		$stmt = Conexion::conectar()->prepare("SELECT no_usu, nombre, ape_paterno, ape_materno, usuario, password, email FROM $tabla");	
		$stmt->execute();

		return $stmt->fetchAll();

		$stmt->close();

	}

	#EDITAR USUARIO
	#-------------------------------------

	public function editarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("SELECT no_usu, nombre, ape_paterno, ape_materno, usuario, password, email FROM $tabla WHERE no_usu = :no_usu");

		$stmt->bindParam(":no_usu", $datosModel, PDO::PARAM_INT);	

		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();

	}

	#ACTUALIZAR USUARIO
	#-------------------------------------

	public function actualizarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, ape_paterno = :paterno, ape_materno = :materno, usuario = :usuario, password = :password, email = :email WHERE no_usu = :no_usu");

		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
		$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);
		$stmt->bindParam(":usuario", $datosModel["usuario"], PDO::PARAM_STR);
		$stmt->bindParam(":password", $datosModel["password"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":no_usu", $datosModel["no_usu"], PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


	#BORRAR USUARIO
	#------------------------------------
	public function borrarUsuarioModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE no_usu = :no_usuBorrar");
		$stmt->bindParam(":no_usuBorrar", $datosModel, PDO::PARAM_INT);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}
















#-------------------------------------------------------------#











		# Registro de Maestro


		public function registroMaestroModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, ape_paterno, ape_materno) VALUES (:nombre,:paterno,:materno)");	
		
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
		$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);

		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


	// #VISTA Maestros
	// #-------------------------------------

	 public function vistaMaestrosModel($tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_maestro, nombre, ape_paterno, ape_materno FROM $tabla");	
	 	$stmt->execute();

		return $stmt->fetchAll();

	 	$stmt->close();

	 }

	// #EDITAR Alumno
	// #-------------------------------------

	 public function editarMaestroModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_maestro, nombre, ape_paterno, ape_materno FROM $tabla WHERE no_maestro = :no_maestro");

	 	$stmt->bindParam(":no_maestro", $datosModel, PDO::PARAM_INT);	

	 	$stmt->execute();

	 	return $stmt->fetch();

	 	$stmt->close();

	 }

	// #ACTUALIZAR Alumno
	// #-------------------------------------

	 public function actualizarMaestroModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, ape_paterno = :paterno, ape_materno = :materno WHERE no_maestro = :no_maestro");

	 	$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
	 	$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
	 	$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);
	 	$stmt->bindParam(":no_maestro", $datosModel["no_maestro"], PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }


	// #BORRAR Alumno
	// #------------------------------------
	 public function borrarMaestroModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE no_maestro = :no_maestroBorrar");

	 	$stmt->bindParam(":no_maestroBorrar", $datosModel, PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }









#------------------------------------------------------#










	 # Registro de Alumno


		public function registroAlumnoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, ape_paterno, ape_materno, edad) VALUES (:nombre,:paterno,:materno, :edad)");	
		
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
		$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);
		$stmt->bindParam(":edad", $datosModel["edad"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


	// #VISTA Maestros
	// #-------------------------------------

	 public function vistaAlumnosModel($tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_alu, nombre, ape_paterno, ape_materno, edad FROM $tabla");	
	 	$stmt->execute();

		return $stmt->fetchAll();

	 	$stmt->close();

	 }

	// #EDITAR Alumno
	// #-------------------------------------

	 public function editarAlumnoModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_alu, nombre, ape_paterno, ape_materno, edad FROM $tabla WHERE no_alu = :no_alu");

	 	$stmt->bindParam(":no_alu", $datosModel, PDO::PARAM_INT);	

	 	$stmt->execute();

	 	return $stmt->fetch();

	 	$stmt->close();

	 }

	// #ACTUALIZAR Alumno
	// #-------------------------------------

	 public function actualizarAlumnoModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, ape_paterno = :paterno, ape_materno = :materno, edad = :edad WHERE no_alu = :no_alu");

	 	$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
	 	$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
	 	$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);
	 	$stmt->bindParam(":edad", $datosModel["edad"], PDO::PARAM_STR);
	 	$stmt->bindParam(":no_alu", $datosModel["no_alu"], PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }


	// #BORRAR Alumno
	// #------------------------------------
	 public function borrarAlumnoModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE no_alu = :no_aluBorrar");

	 	$stmt->bindParam(":no_aluBorrar", $datosModel, PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }
















#------------------------------------------------------#













	 # Registro de Padre


		public function registroPadreModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (nombre, ape_paterno, ape_materno, telefono, email, no_alu) VALUES (:nombre,:paterno,:materno, :telefono, :email, :no_alu)");	
		
		$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
		$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
		$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);
		$stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
		$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
		$stmt->bindParam(":no_alu", $datosModel["no_alu"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


	// #VISTA PADRE
	// #-------------------------------------

	 public function vistaPadresModel($tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_padre, nombre, ape_paterno, ape_materno, telefono, email FROM $tabla");	
	 	$stmt->execute();

		return $stmt->fetchAll();

	 	$stmt->close();

	 }

	// #EDITAR PADRE
	// #-------------------------------------

	 public function editarPadreModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_padre, nombre, ape_paterno, ape_materno, telefono, email FROM $tabla WHERE no_padre = :no_padre");

	 	$stmt->bindParam(":no_padre", $datosModel, PDO::PARAM_INT);	

	 	$stmt->execute();

	 	return $stmt->fetch();

	 	$stmt->close();

	 }

	// #ACTUALIZAR PADRE
	// #-------------------------------------

	 public function actualizarPadreModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET nombre = :nombre, ape_paterno = :paterno, ape_materno = :materno, telefono = :telefono, email = :email WHERE no_padre = :no_padre");

	 	$stmt->bindParam(":nombre", $datosModel["nombre"], PDO::PARAM_STR);
	 	$stmt->bindParam(":paterno", $datosModel["paterno"], PDO::PARAM_STR);
	 	$stmt->bindParam(":materno", $datosModel["materno"], PDO::PARAM_STR);
	 	$stmt->bindParam(":telefono", $datosModel["telefono"], PDO::PARAM_STR);
	 	$stmt->bindParam(":email", $datosModel["email"], PDO::PARAM_STR);
	 	$stmt->bindParam(":no_padre", $datosModel["no_padre"], PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }


	// #BORRAR PADRE
	// #------------------------------------
	 public function borrarPadreModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE no_padre = :no_padreBorrar");

	 	$stmt->bindParam(":no_padreBorrar", $datosModel, PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }












#-------------------------------------------------------#













	 # Registro de PAGOS


		public function registroPagoModel($datosModel, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (no_padre, no_usu, descripcion, monto) VALUES (:no_padre,:no_usu,:descripcion, :monto)");	
		
		$stmt->bindParam(":no_padre", $datosModel["no_padre"], PDO::PARAM_STR);
		$stmt->bindParam(":no_usu", $datosModel["no_usu"], PDO::PARAM_STR);
		$stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
		$stmt->bindParam(":monto", $datosModel["monto"], PDO::PARAM_STR);


		if($stmt->execute()){

			return "success";

		}

		else{

			return "error";

		}

		$stmt->close();

	}


	// #VISTA PAGOS
	// #-------------------------------------

	 public function vistaPagoModel($tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_pago, no_padre, no_usu, descripcion, monto FROM $tabla");	
	 	$stmt->execute();

		return $stmt->fetchAll();

	 	$stmt->close();

	 }

	// #EDITAR PAGO
	// #-------------------------------------

	 public function editarPagoModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("SELECT no_pago, no_padre, no_usu, descripcion, monto FROM $tabla WHERE no_pago = :no_pago");

	 	$stmt->bindParam(":no_pago", $datosModel, PDO::PARAM_INT);	

	 	$stmt->execute();

	 	return $stmt->fetch();

	 	$stmt->close();

	 }

	// #ACTUALIZAR PAGO
	// #-------------------------------------

	 public function actualizarPagoModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("UPDATE $tabla SET no_padre = :no_padre, no_usu = :no_usu, descripcion = :descripcion, monto = :monto WHERE no_pago = :no_pago");

	 	$stmt->bindParam(":no_padre", $datosModel["no_padre"], PDO::PARAM_STR);
	 	$stmt->bindParam(":no_usu", $datosModel["no_usu"], PDO::PARAM_STR);
	 	$stmt->bindParam(":descripcion", $datosModel["descripcion"], PDO::PARAM_STR);
	 	$stmt->bindParam(":monto", $datosModel["monto"], PDO::PARAM_STR);
	 	$stmt->bindParam(":no_pago", $datosModel["no_pago"], PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }


	// #BORRAR PAGO
	// #------------------------------------
	 public function borrarPagoModel($datosModel, $tabla){

	 	$stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE no_pago = :no_pagoBorrar");

	 	$stmt->bindParam(":no_pagoBorrar", $datosModel, PDO::PARAM_INT);

	 	if($stmt->execute()){

	 		return "success";

	 	}

	 	else{

	 		return "error";

	 	}

	 	$stmt->close();

	 }

}

?>