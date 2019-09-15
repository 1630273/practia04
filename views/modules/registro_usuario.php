
<div class="row">
		<div class="col-lg-6">
			<div class="card-box">
				<h4 class="header-title m-t-0">Validation type</h4>
				<p class="text-muted font-14 m-b-20">
					Parsley is a javascript form validation library. It helps you provide your users with feedback on their form submission before sending it to your server.
				</p>

				<form class="" action="#">
					<div class="form-group">
						<label>Required</label>
						<input type="text" class="form-control" required
								placeholder="Type something"/>
					</div>

					<div class="form-group">
						<label>Equal To</label>
						<div>
							<input type="password" id="pass2" class="form-control" required
									placeholder="Password"/>
						</div>
						<div class="mt-2">
							<input type="password" class="form-control" required
									data-parsley-equalto="#pass2"
									placeholder="Re-Type Password"/>
						</div>
					</div>

					<div class="form-group">
						<label>E-Mail</label>
						<div>
							<input type="email" class="form-control" required
									parsley-type="email" placeholder="Enter a valid e-mail"/>
						</div>
					</div>
					
					<div class="form-group">
						<label>Number</label>
						<div>
							<input data-parsley-type="number" type="text"
									class="form-control" required
									placeholder="Enter only numbers"/>
						</div>
					</div>
					<div class="form-group">
						<label>Alphanumeric</label>
						<div>
							<input data-parsley-type="alphanum" type="text"
									class="form-control" required
									placeholder="Enter alphanumeric value"/>
						</div>
					</div>
					<div class="form-group">
						<label>Textarea</label>
						<div>
							<textarea required class="form-control"></textarea>
						</div>
					</div>
					<div class="form-group">
						<div>
							<button type="submit" class="btn btn-custom waves-effect waves-light">
								Submit
							</button>
							<button type="reset" class="btn btn-light waves-effect m-l-5">
								Cancel
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
	
	}

}

?>
