<?php





class Conexion{

	public function conectar(){

		$link = new PDO("mysql:host=localhost;dbname=practica03mvc","root","");
		return $link;

	}

}

?>