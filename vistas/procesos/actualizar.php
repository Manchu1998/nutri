<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<title>Plataforma de los Desalloradores</title>

	<link rel="icon" href="../../assets/img/icon.ico" type="image/x-icon"/>		
	<link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../../assets/css/azzara.min.css">
	<link rel="stylesheet" href="../../assets/css/demo.css">
</head>
<body>
	 <!--Formulario para registrarse-->
		<div class="container container-signup animated fadeIn">
			<form action="modelo/registrar.php" method="POST" autocomplete="off">
				<h3 class="text-center">Actualizar Datos Personales</h3>
				<div class="login-form">
					<div class="form-group">
						<label for="fullname" class="placeholder"><b>Cedula</b></label>
						<input  id="fullname" name="dni" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="fullname" class="placeholder"><b>Nombre</b></label>
						<input  id="fullname" name="nombre" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="fullname" class="placeholder"><b>Apellido</b></label>
						<input  id="fullname" name="apellido" type="text" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="email" class="placeholder"><b>Email</b></label>
						<input  id="email" name="email" type="email" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="text" class="placeholder"><b>Usuario</b></label>
						<input  id="" name="usuario" type="text" class="form-control" required>
					</div>
				
					<div class="form-group">
						<label for="passwordsignin" class="placeholder"><b>Password</b></label>
						<div class="position-relative">
							<input  id="passwordsignin" name="password" type="password" class="form-control" required>
							<div class="show-password">
								<i class="flaticon-interface"></i>
							</div>
						</div>
					</div>
					
					<div class="row form-action">
						<div class="col-md-6">
							<a href="../inicio.php" id="show-signin" class="btn btn-danger btn-link w-100 fw-bold">Cancelar</a>
						</div>
						<div class="col-md-6">
							<input type="submit" class="btn btn-primary col-md-5 float-right mt-3 mt-sm-0 fw-bold" name="" value="Guardar Datos">
						</div>
					</div>
				</div>
			</form>
		</div>



	
	<!-- Google Maps Plugin -->
	<script src="../../assets/js/plugin/gmaps/gmaps.js"></script>

	<!-- Sweet Alert -->
	<script src="../../assets/js/plugin/sweetalert/sweetalert.min.js"></script>

	<!-- Azzara JS -->
	<script src="../../assets/js/ready.min.js"></script>

	<!-- Azzara DEMO methods, don't include it in your project! -->
	<script src="../../assets/js/setting-demo.js"></script>
	<script src="../../assets/js/demo.js"></script>
</body>
</html>