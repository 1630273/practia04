
<div class="row ">
   
   <div class="col-lg-6  " >
   
	   <div class="card-box  ">
		   <h3 class="header-title m-t-0">Editar Alumno</h3>
		   <form method="POST" >
	
	<?php

$datosController = $_GET["no_alu"];
$respuesta = Datos::editarAlumnoModel($datosController, "alumnos");



	?>

		<div class="form-group">
				   <label>Nombre</label>
				   <div>
						<input type="hidden" value="<?php echo$respuesta["no_alu"]	?>" name="no_aluEditar">
						</div>
		</div>
	
	 <div class="form-group">
				   <label>Nombre</label>
				   <div>
						<input text="text" class="form-control" value="<?php echo$respuesta["nombre"]	?>" name="nombreEditar" required>
					</div>
				</div>
	 		
			 <div class="form-group">
				   <label>Apellido Paterno</label>
				   <div>
						<input text="text" class="form-control" value="<?php echo$respuesta["ape_paterno"]	?>" name="paternoEditar" required>
					</div>
				</div>
	 <div class="form-group">
				   <label>Apellido Materno</label>
				   <div>
						<input text="text" class="form-control" value="<?php echo $respuesta["ape_materno"]	?>" name="maternoEditar" required>
					</div>
				</div>

	 <div class="form-group">
						<label>Edad</label>
						<div>
							<input type="text" class="form-control" value="<?php echo$respuesta["edad"]	?>" name="edadEditar" required>
						</div>
					</div>
	<div class="form-group">
		<div>
			   <button type="submit" value="Actualizar" class="btn btn-block  btn-custom waves-effect waves-light">
				   Actualizar
			  </button>
				   
		 </div>
	   </div>
	

	</form>
	   </div>
   </div>

</div>