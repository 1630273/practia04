<?php 

class Paginas{
	
	public function enlacesPaginasModel($enlaces){


		if($enlaces == "ingresar" || $enlaces == "AgregarUsuario" || $enlaces == "editar" || $enlaces == "salir"){

			$module =  "../views/modules/".$enlaces.".php";
		
		}

		

		else{

			$module =  "../views/modules/inicio.php";

		}
		
		return $module;

	}

}

?>