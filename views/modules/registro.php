

<div class="row">
   
   <div class="col-lg-8 float-center " >
  
	   <div class="card-box ">
		   <h4 class="header-title m-t-0">Registro de Usuarios</h4>
	   
		   <form method="POST">
		   <div class="form-group">
				   <label>No.</label>
				   <div>
					   <input data-parsley-type="number" type="text"
							   class="form-control" name="usuarioRegistro"
							   placeholder="Numero de empelado"/>
				   </div>
			   </div>
			   
			   <div class="form-group">
				   <label>Nombre</label>
				   <div>
					   <input data-parsley-type="alphanum" type="text"
							   class="form-control" name="nombreRegistro" required
							   placeholder=" Ingresa Nombre"/>
				   </div>
				</div>
				
				   
				<div class="form-group">
				   <label>Apellido Paterno</label>
				   <div>
					   <input  type="text"
							   class="form-control" name="paternoRegistro" required
							   placeholder="Ingresa Apellido"/>
				   </div>
				</div>

				<div class="form-group">
				   <label>Apellido Materno</label>
				   <div>
					   <input  type="text"
							   class="form-control" name="maternoRegistro" required
							   placeholder="Ingresa Apellido"/>
				   </div>
				</div>

			   <div class="form-group">
				   <label>Contraseña</label>
				   <div>
					   <input type="password" id="pass2" name="pass" class="form-control" required
							   placeholder="Password"/>
				   </div>
				   <label>Confirmar Contraseña</label>
				   <div class="mt-2">
					   <input type="password" class="form-control" name="passwordRegistro" required
							   data-parsley-equalto="#pass2"
							   placeholder="Re-Type Password"/>
				   </div>
			   </div>

			   <div class="form-group">
				   <label>Correo</label>
				   <div>
					   <input type="email"  name="emailRegistro"class="form-control" required
							   parsley-type="email" placeholder="Ingresar Correo"/>
				   </div>
			   </div>
			   
		   
		   
			   
			   <div class="form-group">
				   <div>
					   <button type="submit" value="Enviar" class="btn btn-custom waves-effect waves-light">
						   Agregar
					   </button>
				   
				   </div>
			   </div>
		   </form>
	   </div>
   </div>

</div>


<?php

$registro = new MvcController();
$registro -> registroUsuarioController();

if(isset($_GET["action"])){

	if($_GET["action"] == "ok"){

		echo "Registro Exitoso";
	
	}else{
		echo "Registro Fallido";
	}

}

?>
