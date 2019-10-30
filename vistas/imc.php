<?php  include('../controlador/seguridad.php'); ?>


<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Nutri' Am</title>

	<link rel="icon" href="../assets/img/Logotipo.png" type="image/x-icon"/>
	<script src="../assets/js/plugin/webfont/webfont.min.js"></script>
	<?php include_once('complemento/viewLoad.php'); ?>

	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/azzara.min.css">
	<link rel="stylesheet" href="../assets/css/demo.css">
	<link rel="stylesheet" href="../assets/css/calculadora.css">
	<script src="../assets/js/JsBarcode.all.min.js"></script>


</head>
<body>
	<div class="wrapper">
		<div class="main-header" data-background-color="purple">
			<div class="logo-header">
				<a href="inicio.php" class="logo">
					<img src="../assets/img/Logotipo.png" alt="navbar brand" class="navbar-brand" width="70px">
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon">
						<i class="fa fa-bars"></i>
					</span>
				</button>
				<button class="topbar-toggler more"><i class="fa fa-ellipsis-v"></i></button>
				<div class="navbar-minimize">
					<button class="btn btn-minimize btn-rounded">
						<i class="fa fa-bars"></i>
					</button>
				</div>
			</div>
			<!-- End Logo Header -->

			<!-- Navbar Header -->
			<nav class="navbar navbar-header navbar-expand-lg">

				<div class="container-fluid">
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">


						<li class="nav-item dropdown hidden-caret">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
								<div class="avatar-sm">
									<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
								</div>
							</a>
							<ul class="dropdown-menu dropdown-user animated fadeIn">
								<li>
									<div class="user-box">
										<div class="avatar-lg"><img src="../assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
										<div class="u-text">
											<h4>Datos personales</h4>
										</div>
									</div>
								</li>
								<li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><?php echo $_SESSION['cedula_usua']; ?></a>
									<a class="dropdown-item" href="#"><?php echo $_SESSION['nombre_usua']; ?></a>
									<a class="dropdown-item" href="#"><?php echo $_SESSION['apellido_usua']; ?></a>
									<a class="dropdown-item" href="#"><?php echo $_SESSION['email_usua']; ?></a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="../controlador/logout.php">Salir</a>
								</li>
							</ul>
						</li>

					</ul>
				</div>
			</nav>
			<!-- End Navbar -->
		</div>


		<!-- Sidebar -->
		<div class="sidebar">

			<div class="sidebar-background"></div>
			<div class="sidebar-wrapper scrollbar-inner">
				<div class="sidebar-content">
					<div class="user">
						<div class="avatar-sm float-left mr-2">
							<img src="../assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
						</div>
						<div class="info">
							<a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span> <?php echo $_SESSION['nombre_usua']; ?>	<span class="user-level">Administrador</span></span>
							</a>
							<div class="clearfix"></div>
						</div>
					</div>
					 <?php include_once('complemento/nabvar.php') ?>
				</div>
			</div>
		</div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">

				<div class="page-inner">
					<div class="page-header">
						<h5 class="page-title">Inicio</h5>
						<ul class="breadcrumbs">
							<li class="nav-home">
								<a href="#">
									<i class="flaticon-home"></i>
								</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Forms</a>
							</li>
							<li class="separator">
								<i class="flaticon-right-arrow"></i>
							</li>
							<li class="nav-item">
								<a href="#">Basic Form</a>
							</li>
						</ul>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Indice de Masa Corporal</h4>
								</div><br>
								<div class="container">
								   <div class="row">
								   	  <div class="col">
								   	  	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar indice</button>
								   	  </div>
								   </div>
								</div>

								<!--Modal para registrar producto-->


								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top: 30px;">
								  <div class="modal-dialog modal-lg">
								    <div class="modal-content">
								      <div class="container-fluid">


								      	 <form  action="#" method="POST" autocomplete="off">
								      	   <div class="form-group">
										    <label for="formGroupExampleInput"><h3><strong>Formulario de Indice de Masa Corporal</strong></h3></label>
										  </div>

										  <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="inputState">Nombre</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="Nombre" name="nombre">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">Apellido</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="Apellido" name="apellido" disabled>
										    </div>
										  </div>


										  <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="inputState">Fecha</label>
										      <input type="date" class="form-control" id="inputCity" name="fecha">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">Peso</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="Peso en Kg" name="peso">
										    </div>
										  </div>

										  <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="inputState">IMC de la persona</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="apellido paterno" name="apellido">
										    </div>

										    <div class="form-group col-md-6">
										    	 <label for="inputState">.</label><br>
										      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">Calcular</button>
										    </div>
										  </div>


										   <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="inputState">* Pais</label>
										       <select type="text" name="pais" class="form-control" id="inputCity">
										      	  <option value="Ecuador">Ecuador</option>
													<option value="Colombia">Colombia</option>
													<option value="Venezuela">Venezuela</option>
													<option value="Perú">Perú</option>
													<option value="Brazil">Brazil</option>
													<option value="Chile">Chile</option>
													<option value="Bolivia">Bolivia</option>
													<option value="Paraguay">Paraguay</option>
													<option value="Uruguay">Uruguay</option>
													<option value="Estados Unidos">Estados Unidos</option>
										      </select>
										    </div>
										  </div>


										  <div class="form-group">
										    <button type="submit" class="btn btn-primary">Guardar</button>
										  </div>
										</form>




								      </div>

								    </div>
								  </div>
								 </div>


								<div class="card-body">

                            <!-- Seccion para presentar los datos de la tabla de la Base de Dato-->
							  <div class="table-responsive">
								<div class="col-md-12">
									<div class="card-body">
										<div class="table-responsive">
											<table id="multi-filter-select" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>Cedula</th>
														<th>Primer nombre</th>
														<th>Segundo nombre</th>
														<th>Apellido paterno</th>
														<th>Apellido materno</th>
														<th>Edad</th>
														<th>Estado civil</th>
														<th>Genero</th>
														<th>Pais</th>
													</tr>
												</thead>

												<tbody>


												</tbody>
											</table>
										</div>
									</div>
								 </div>
				              </div>
			              </div>
		                </div>
	                 </div>
                  </div>
			 </div>
		   </div>
	   </div>
	</div>
</div>


	<!--Modal para hacer los calculos-->
	<div class="modal fade" style="background: #bdc3c7;background: -webkit-linear-gradient(to right, #2c3e50, #bdc3c7); background: linear-gradient(to right, #2c3e50, #bdc3c7);"  id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	  <div class="modal-dialog modal-dialog-centered" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="exampleModalLongTitle">Calculadora de <strong>Masa Corporal</strong></h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
              <div class="calculadora">
					<div class="pantalla">
						<div id="resultado">23245</div>
					</div>

				</div>
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-secondary">Aceptar</button>
	      </div>
	    </div>
	  </div>
	</div>




<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="../assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
<script src="../assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="../assets/js/plugin/moment/moment.min.js"></script>
<script src="../assets/js/plugin/chart.js/chart.min.js"></script>
<script src="../assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>
<script src="../assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="../assets/js/plugin/datatables/datatables.min.js"></script>
<script src="../assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>
<script src="../assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="../assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="../assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>
<script src="../assets/js/plugin/sweetalert/sweetalert.min.js"></script>
<script src="../assets/js/ready.min.js"></script>
<script src="../assets/js/setting-demo.js"></script>
<script src="../assets/js/demo.js"></script>




</body>
</html>