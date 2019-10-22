<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Dain</title>
	<link rel="icon" href="assets/img/Logotipo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
	<script src="controlador/aditional/controlador_login.js"></script>
</head>

<body class="login">
	<div class="wrapper wrapper-login">
		<form action="controlador/login.php" method="POST" autocomplete="off" name="login">
			<div class="container container-login animated fadeIn">
				<h3 class="text-center">Nutri'Am</h3>
				<div class="login-form">

					<div class="form-group form-floating-label">
						<input id="username" name="usuario" type="text" class="form-control input-border-bottom" required>
						<label for="usuario" class="placeholder">Usuario</label>
						<span id="usuario"></span>
					</div>

					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Password</label>
						<span id="password"></span>
					</div>

					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme">
							<label class="custom-control-label" for="rememberme">Notifiqueme</label>
						</div>

						<a href="#" class="link float-right">Recuperar password?</a>
					</div>
					<div class="form-action mb-3">
						<input type="submit" id="acceder" class="btn btn-primary btn-rounded btn-login" value="Acceder">
					</div>
					<div class="login-account">
						<span class="msg">Aun no  tienes cuenta?</span>
						<a href="#" id="show-signup" class="link">Regisitrese</a>
					</div>
				</div>
			</div>
		</form>


		<form action="modelo/registrar.php" method="POST" autocomplete="off">
			<div class="container container-signup animated fadeIn">
				<h3 class="text-center">Crear cuenta</h3>
				<div class="login-form">
					<div class="form-group form-floating-label">
						<input  id="fullname" name="dni" type="text" class="form-control input-border-bottom" required>
						<label for="fullname" class="placeholder">DNI</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="fullname" name="nombre" type="text" class="form-control input-border-bottom" required>
						<label for="fullname" class="placeholder">Nombre</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="fullname" name="apellido" type="text" class="form-control input-border-bottom" required>
						<label for="fullname" class="placeholder">Apellido</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
						<label for="email" class="placeholder">Email</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="text" name="carrera" type="text" class="form-control input-border-bottom" required>
						<label for="text" class="placeholder">Carrera</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="text" name="usuario" type="text" class="form-control input-border-bottom" required>
						<label for="text" class="placeholder">Usuario</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="passwordsignin" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="passwordsignin" class="placeholder">Password</label>
						<div class="show-password">
							<i class="flaticon-interface"></i>
						</div>
					</div>

					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="agree" id="agree">
							<label class="custom-control-label" for="agree">Acepto las privacidades y condiciones</label>
						</div>
					</div>
					<div class="form-action">
						<a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
						<input type="submit" class="btn btn-primary btn-rounded btn-login" value="Enviar datos">
					</div>
				</div>
			</div>
		</form>
	</div>
	<script src="assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="assets/js/core/popper.min.js"></script>
	<script src="assets/js/core/bootstrap.min.js"></script>
	<script src="assets/js/ready.js"></script>
</body>
</html>