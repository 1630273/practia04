
<div class="row ">
   
   <div class="col-lg-6  " >
   
	   <div class="card-box  ">
		   <h3 class="header-title m-t-0">Editar de Pago</h3>
	   
		   <form method="POST" >
	
	<?php

	$editarMaestro = new MvcController();
	$editarMaestro -> editarPagoController();
	$editarMaestro -> actualizarPagoController();

	?>

</form>
	   </div>
   </div>

</div>


