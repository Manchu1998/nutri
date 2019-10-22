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
						<h4 class="page-title">General</h4>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="card-header">
									<h4 class="card-title">Datos personales</h4>
								</div><br>
								<div class="container">
								   <div class="row">
								   	  <div class="col">
								   	  	 <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Agregar persona</button>
								   	  </div>
								   </div>
								</div>

								<!--Modal para registrar producto-->


								<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" style="margin-top: 30px;">
								  <div class="modal-dialog modal-lg">
								    <div class="modal-content">
								      <div class="container-fluid">


								      	 <form  action="../modelo/inserta_datos.php" method="POST" autocomplete="off">
								      	   <div class="form-group">
										    <label for="formGroupExampleInput"><h3><strong>Formulario de registro</strong></h3></label>
										  </div>
										  <label for="inputState">N-* de cedula</label>
										  <div class="form-row">
												<div class=" form-group col-md-4">
													<input type="text" class="form-control input-full" id="inlineinput" placeholder="cedula" name="dni">
												</div>
											</div>
										  <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="inputState">* Primer nombre</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="primer nombre" name="nombre">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Segundo nombre</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="segundo nombre" name="nombre1">
										    </div>
										  </div>

										  <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="inputState">* Apellido paterno</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="apellido paterno" name="apellido">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Apellido materno</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="apellido materno" name="apellido1">
										    </div>
										  </div>

										  <div class="form-row">
										    <div class="form-group col-md-6">
										      <label for="inputState">* Edad</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="Edad de la persona" name="edad">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Estado civil</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="Estado civil" name="estado_civil">
										    </div>

										    <div class="form-group col-md-2">
										      <label for="inputZip">* Sexo</label>
										      <select type="text" name="sexo" class="form-control" id="inputCity">
										      	<option name="Masculino">Masculino</option>
										      	<option name="Femenino">Femenino</option>
										      	<option name="Otro">Otro</option>
										      </select>
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

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Provincia</label>
										      <select type="text" name="provincia" class="form-control" id="inputCity">
										      	<option name="a">Azuay</option>
										      	<option name="b">Bolívar</option>
										      	<option name="g">Cañar</option>
										      	<option name="g">Carchi</option>
										      	<option name="g">Chimborazo</option>
										      	<option name="g">Cotopaxi</option>
										      	<option name="g">El Oro</option>
										      	<option name="g">Esmeraldas</option>
										      	<option name="g">Galápagos,</option>
										      	<option name="g">Guayas</option>
										      	<option name="g">Imbabura</option>
										      	<option name="g">Loja</option>
										      	<option name="g">Los Ríos</option>
										      	<option name="g">Manabí</option>
										      	<option name="g">Morona Santiago</option>
										      	<option name="g">Napo</option>
										      	<option name="g">Orellana</option>
										      	<option name="g">Pastaza</option>
										      	<option name="g">Pichincha</option>
										      	<option name="g">Santa Elena</option>
										      </select>
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Ciudad</label>
										      <input type="text" name="ciudad" class="form-control" id="inputCity" placeholder="ciudad">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Ocupacion actual</label>
										      <select type="text" name="ocupacion" class="form-control" id="inputCity">
										      	<option name="g">Trabajo activo</option>
										      	<option name="g">Jubilado</option>
										      	<option name="g">En proceso</option>
										      </select>
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Direccion</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="Direccion" name="direccion">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Email</label>
										      <input type="email" name="email" class="form-control" id="inputCity" placeholder="email" name="email">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Telefono</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="telefono" name="telefono">
										    </div>

										    <div class="form-group col-md-6">
										      <label for="inputCity">* Celular</label>
										      <input type="text" class="form-control" id="inputCity" placeholder="celular" name="celular">
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


							  <div class="table-responsive">
								<div class="col-md-12">
									<div class="card-body">
										<div class="table-responsive">
											<table id="multi-filter-select" class="display table table-striped table-hover" >
												<thead>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</thead>
												<tfoot>
													<tr>
														<th>Name</th>
														<th>Position</th>
														<th>Office</th>
														<th>Age</th>
														<th>Start date</th>
														<th>Salary</th>
													</tr>
												</tfoot>
												<tbody>
													<tr>
														<td>Tiger Nixon</td>
														<td>System Architect</td>
														<td>Edinburgh</td>
														<td>61</td>
														<td>2011/04/25</td>
														<td>$320,800</td>
													</tr>
													<tr>
														<td>Garrett Winters</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>63</td>
														<td>2011/07/25</td>
														<td>$170,750</td>
													</tr>
													<tr>
														<td>Ashton Cox</td>
														<td>Junior Technical Author</td>
														<td>San Francisco</td>
														<td>66</td>
														<td>2009/01/12</td>
														<td>$86,000</td>
													</tr>
													<tr>
														<td>Cedric Kelly</td>
														<td>Senior Javascript Developer</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2012/03/29</td>
														<td>$433,060</td>
													</tr>
													<tr>
														<td>Airi Satou</td>
														<td>Accountant</td>
														<td>Tokyo</td>
														<td>33</td>
														<td>2008/11/28</td>
														<td>$162,700</td>
													</tr>
													<tr>
														<td>Brielle Williamson</td>
														<td>Integration Specialist</td>
														<td>New York</td>
														<td>61</td>
														<td>2012/12/02</td>
														<td>$372,000</td>
													</tr>
													<tr>
														<td>Herrod Chandler</td>
														<td>Sales Assistant</td>
														<td>San Francisco</td>
														<td>59</td>
														<td>2012/08/06</td>
														<td>$137,500</td>
													</tr>
													<tr>
														<td>Rhona Davidson</td>
														<td>Integration Specialist</td>
														<td>Tokyo</td>
														<td>55</td>
														<td>2010/10/14</td>
														<td>$327,900</td>
													</tr>
													<tr>
														<td>Colleen Hurst</td>
														<td>Javascript Developer</td>
														<td>San Francisco</td>
														<td>39</td>
														<td>2009/09/15</td>
														<td>$205,500</td>
													</tr>
													<tr>
														<td>Sonya Frost</td>
														<td>Software Engineer</td>
														<td>Edinburgh</td>
														<td>23</td>
														<td>2008/12/13</td>
														<td>$103,600</td>
													</tr>
													<tr>
														<td>Jena Gaines</td>
														<td>Office Manager</td>
														<td>London</td>
														<td>30</td>
														<td>2008/12/19</td>
														<td>$90,560</td>
													</tr>
													<tr>
														<td>Quinn Flynn</td>
														<td>Support Lead</td>
														<td>Edinburgh</td>
														<td>22</td>
														<td>2013/03/03</td>
														<td>$342,000</td>
													</tr>
													<tr>
														<td>Charde Marshall</td>
														<td>Regional Director</td>
														<td>San Francisco</td>
														<td>36</td>
														<td>2008/10/16</td>
														<td>$470,600</td>
													</tr>
													<tr>
														<td>Haley Kennedy</td>
														<td>Senior Marketing Designer</td>
														<td>London</td>
														<td>43</td>
														<td>2012/12/18</td>
														<td>$313,500</td>
													</tr>
													<tr>
														<td>Tatyana Fitzpatrick</td>
														<td>Regional Director</td>
														<td>London</td>
														<td>19</td>
														<td>2010/03/17</td>
														<td>$385,750</td>
													</tr>
													<tr>
														<td>Michael Silva</td>
														<td>Marketing Designer</td>
														<td>London</td>
														<td>66</td>
														<td>2012/11/27</td>
														<td>$198,500</td>
													</tr>
													<tr>
														<td>Paul Byrd</td>
														<td>Chief Financial Officer (CFO)</td>
														<td>New York</td>
														<td>64</td>
														<td>2010/06/09</td>
														<td>$725,000</td>
													</tr>
													<tr>
														<td>Gloria Little</td>
														<td>Systems Administrator</td>
														<td>New York</td>
														<td>59</td>
														<td>2009/04/10</td>
														<td>$237,500</td>
													</tr>
													<tr>
														<td>Bradley Greer</td>
														<td>Software Engineer</td>
														<td>London</td>
														<td>41</td>
														<td>2012/10/13</td>
														<td>$132,000</td>
													</tr>
													<tr>
														<td>Dai Rios</td>
														<td>Personnel Lead</td>
														<td>Edinburgh</td>
														<td>35</td>
														<td>2012/09/26</td>
														<td>$217,500</td>
													</tr>

													<tr>
														<td>Michael Bruce</td>
														<td>Javascript Developer</td>
														<td>Singapore</td>
														<td>29</td>
														<td>2011/06/27</td>
														<td>$183,000</td>
													</tr>
													<tr>
														<td>Donna Snider</td>
														<td>Customer Support</td>
														<td>New York</td>
														<td>27</td>
														<td>2011/01/25</td>
														<td>$112,000</td>
													</tr>
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