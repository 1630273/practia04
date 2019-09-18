<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "registroAlu" ||$enlaces == "registro"||$enlaces == "ingresar" ||$enlaces == "alumnos" || $enlaces == "inicio" || $enlaces == "usuarios" || $enlaces == "editar" ||  $enlaces == "registroAlu" || $enlaces == "registroMaestro"|| $enlaces == "maestroEditar" || $enlaces == "maestros" || $enlaces == "alumnos" ||$enlaces == "alumnoEditar" || $enlaces == "registroPadre" || $enlaces == "padres" || $enlaces == "padresEditar" || $enlaces == "registroPago" || $enlaces == "pagos"|| $enlaces == "registroGrupo" || $enlaces == "grupos" || $enlaces == "pagosEditar"){

			$module =  "../views/modules/".$enlaces.".php";
		
		}

		else if($enlaces == "index"){

			$module =  "views/modules/registro.php";
		
		}

		else if($enlaces == "ok"){

			$module =  "views/modules/registro.php";
		
		}

		else if ($enlaces == "okk") {
			$module = "views/modules/registroAlu.php";
		}

		else if ($enlaces == "okkk") {
			$module = "views/modules/registroMaestro.php";
		}

		else if ($enlaces == "okkkk") {
			$module = "views/modules/registroPadre.php";
		}

		else if ($enlaces == "okkkkk") {
			$module = "views/modules/registroPago.php";
		}

		else if($enlaces == "fallo"){

			$module =  "../views/modules/ingresar.php";
		
		}

		else if($enlaces == "cambio"){

			$module =  "views/modules/usuarios.php";
		
		}

		else if($enlaces == "cambioo"){

			$module =  "views/modules/alumnos.php";
		
		}

		else if($enlaces == "cambiooo"){

			$module =  "views/modules/maestros.php";
		
		}

		else if($enlaces == "cambioooo"){

			$module =  "views/modules/padres.php";
		
		}

		else if($enlaces == "cambiooooo"){

			$module =  "views/modules/pagos.php";
		
		}
		else if($enlaces == "salir"){

			$module =  "views/modules/salir.php";
		
		}

		else{

			$module =  "../views/modules/ingresar.php";

		}
		
		return $module;

	}

}

?>