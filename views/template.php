<?php

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PRACTICA 04</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
        <meta content="Coderthemes" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="../assets/images/favicon.ico">

        <!-- App css -->
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/css/style.css" rel="stylesheet" type="text/css" />

        <script src="../assets/js/modernizr.min.js"></script>

    </head>


    <body>

        <!-- Begin page -->
        <div id="wrapper">

            <!-- ========== Left Sidebar Start ========== -->
            <div class="left side-menu">

                <div class="slimscroll-menu" id="remove-scroll">

                    <!-- LOGO -->
                    <div class="topbar-left">
                        <a href="index.html" class="logo">
                            <span>
                                <img src="../assets/images/logo.png" alt="" height="22">
                            </span>
                            <i>
                                <img src="../assets/images/logo_sm.png" alt="" height="28">
                            </i>
                        </a>
                    </div>

                    <!-- User box -->
                    <div class="user-box">
                        <div class="user-img">
                            <img src="../assets/images/users/avatar-1.jpg" alt="user-img" title="Mat Helme" class="rounded-circle img-fluid">
                        </div>
                        <h5><a href="#">Maxine Kennedy</a> </h5>
                        <p class="text-muted">Admin Head</p>
                    </div>

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">

                        <ul class="metismenu" id="side-menu">

                            <!--<li class="menu-title">Navigation</li>-->

                            <li>
                                <a href="index.html">
                                    <i class="fi-air-play"></i><span class="badge badge-danger badge-pill pull-right">7</span> <span> Dashboard </span>
                                </a>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layers"></i> <span> Alumnos </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="AgregarAlumnos.php">Agregar</a></li>
                                    <li><a href="AlumnosVer.php">Ver Alumnos</a></li>
                        
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-mail"></i><span> Maestros </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="AgregarMaestros.php">Agregar</a></li>
                                    <li><a href="MaestrosVer.php">Ver Maestros</a></li>
                                 </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-layout"></i><span> Grupos </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="AgregarGrupos.php">Agregar</a></li>
                                    <li><a href="GruposVer.php">Ver Grupos</a></li>
                        
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);"><i class="fi-briefcase"></i> <span> Padres </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                    <li><a href="AgregarPadres.php">Agregar</a></li>
                                    <li><a href="PadresVer.php">Ver Padres</a></li>
                        
                                </ul>
                            </li>

                            

                            <li>
                                <a href="javascript: void(0);"><i class="fi-bar-graph-2"></i><span> Usuarios </span> <span class="menu-arrow"></span></a>
                                <ul class="nav-second-level" aria-expanded="false">
                                <li><a href="AgregarUsuario.php">Agregar</a></li>
                                    <li><a href="UsuarioVer.php">Ver Usuarios</a></li>
                        
                                </ul>
                            </li>

                           
                       

                        </ul>

                    </div>
                    <!-- Sidebar -->

                </div>
                <!-- Sidebar -left -->

            </div>
            <!-- Left Sidebar End -->



            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->

            <div class="content-page">

              


                <!-- Start Page content -->
                <div class="content">
                    <div class="container-fluid">

                        <div class="row">
                            <div class="col-12">
                                <div class="card-box">
                                    <h4 class="header-title mb-4">Account Overview</h4>

                                    <div class="row">
                                      

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-center">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f9bc0b" value="92" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Sales Analytics</p>
                                                    <h3 class="">$97,511</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#f1556c" value="14" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Statistics</p>
                                                    <h3 class="">$954</h3>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="col-sm-6 col-lg-6 col-xl-3">
                                            <div class="card-box mb-0 widget-chart-two">
                                                <div class="float-right">
                                                    <input data-plugin="knob" data-width="80" data-height="80" data-linecap=round
                                                           data-fgColor="#2d7bf4" value="60" data-skin="tron" data-angleOffset="180"
                                                           data-readOnly=true data-thickness=".1"/>
                                                </div>
                                                <div class="widget-chart-two-content">
                                                    <p class="text-muted mb-0 mt-2">Total Revenue</p>
                                                    <h3 class="">$32,540</h3>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- end row -->
                                </div>
                            </div>
                        </div>
                        <!-- end row -->




                       

                        
<div class="row">
   
		<div class="col-lg-8 float-center " >
       
			<div class="card-box ">
				<h4 class="header-title m-t-0">Registro de Usuarios</h4>
			
				<form class="" action="POST">
                <div class="form-group">
						<label>No.</label>
						<div>
							<input data-parsley-type="number" type="text"
									class="form-control" required name="num"
									placeholder="Numero de empelado"/>
						</div>
					</div>
                    <div class="form-group">
						<label>Nombre</label>
						<div>
							<input data-parsley-type="alphanum" type="text"
									class="form-control" required
									placeholder="Nombre"/>
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
							<input type="password" class="form-control" name="confpass" required
									data-parsley-equalto="#pass2"
									placeholder="Re-Type Password"/>
						</div>
					</div>

					<div class="form-group">
						<label>Correo</label>
						<div>
							<input type="email" class="form-control" required
									parsley-type="email" placeholder="Enter a valid e-mail"/>
						</div>
					</div>
					
				
				
					
					<div class="form-group">
						<div>
							<button type="submit" class="btn btn-custom waves-effect waves-light">
								Agregar
							</button>
						
						</div>
					</div>
				</form>
			</div>
		</div>

</div>




                    </div> <!-- container -->

                </div> <!-- content -->

               
            </div>


            <!-- ============================================================== -->
            <!-- End Right content here -->
            <!-- ============================================================== -->


        </div>
        <!-- END wrapper -->



        <!-- jQuery  -->
        <script src="../assets/js/jquery.min.js"></script>
        <script src="../assets/js/popper.min.js"></script>
        <script src="../assets/js/bootstrap.min.js"></script>
        <script src="../assets/js/metisMenu.min.js"></script>
        <script src="../assets/js/waves.js"></script>
        <script src="../assets/js/jquery.slimscroll.js"></script>

        <!-- Flot chart -->
        <script src="../plugins/flot-chart/jquery.flot.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.time.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.tooltip.min.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.resize.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.pie.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.crosshair.js"></script>
        <script src="../plugins/flot-chart/curvedLines.js"></script>
        <script src="../plugins/flot-chart/jquery.flot.axislabels.js"></script>

        <!-- KNOB JS -->
        <!--[if IE]>
        <script type="text/javascript" src="../plugins/jquery-knob/excanvas.js"></script>
        <![endif]-->
        <!-- App favicon -->
        <link rel="shortcut icon" href="../../assets/images/favicon.ico">

         <!-- Parsley js -->
         <script type="text/javascript" src="../plugins/parsleyjs/parsley.min.js"></script>

        <script src="../plugins/jquery-knob/jquery.knob.js"></script>

        <!-- Dashboard Init -->
        <script src="../assets/pages/jquery.dashboard.init.js"></script>

        <!-- App js -->
        <script src="../assets/js/jquery.core.js"></script>
        <script src="../assets/js/jquery.app.js"></script>
        <script type="text/javascript">
            $(document).ready(function() {
                $('form').parsley();
            });
        </script>
    </body>
</html>