<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>IMC</title>
	<link rel="icon" href="assets/img/Logotipo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/azzara.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/calculo-fonts.css">
</head>

<body class="login">
	<div class="main-header" data-background-color="purple">
		<!-- Navbar Header -->
		<nav class="navbar navbar-header navbar-expand-lg">
			<div class="container-fluid">
                   <h3 class="title"><strong>SISTEMA PARA CONTROL DE INDICE DE LA MASA CORPORAL</strong></h3>

			</div>
		</nav>
	</div>


	<div class="wrapper wrapper-login">
		<form action="controlador/login.php" method="POST" autocomplete="off" name="login">
			<div class="container container-login animated fadeIn">
				<h3 class="text-center">Iniciar sesión</h3>
				<div class="login-form">

					<div class="form-group form-floating-label">
						<input id="username" name="usuario" type="text" class="form-control input-border-bottom" required>
						<label for="usuario" class="placeholder">Usuario</label>
						<span id="usuario"></span>
					</div>

					<div class="form-group form-floating-label">
						<input id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="password" class="placeholder">Contraseña</label>
						<span id="password"></span>
					</div>

					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" id="rememberme">
							<label class="custom-control-label" for="rememberme">Notifiqueme</label>
						</div>

						<a href="vistas/recueperar-contrasena.php" class="link float-right">Recuperar contraseña?</a>
					</div>
					<div class="form-action mb-3">
						<input type="submit" id="acceder" class="btn btn-primary btn-rounded btn-login" value="Acceder">
					</div>
					<div class="login-account">
						<span class="msg">Aún no  tienes cuenta?</span>
						<a href="#" id="show-signup" class="link">Regístrese</a>
					</div>
				</div>
			</div>
		</form>


		<form  action="modelo/registrar.php" id="registrar" method="POST" autocomplete="off" style="margin-top: 60px;">
			<div class="container container-signup animated fadeIn">
				<h3 class="text-center">Crear cuenta</h3>
				<div class="login-form">
					<div class="form-group form-floating-label">
						<input  id="dni" name="dni" type="text" class="form-control input-border-bottom" required>
						<label for="dni" class="placeholder">DNI</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="nombre" name="nombre" type="text" class="form-control input-border-bottom" required>
						<label for="nombre" class="placeholder">Nombre</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="apellido" name="apellido" type="text" class="form-control input-border-bottom" required>
						<label for="apellido" class="placeholder">Apellido</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="email" name="email" type="email" class="form-control input-border-bottom" required>
						<label for="email" class="placeholder">Email</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="carrera" name="carrera" type="text" class="form-control input-border-bottom" required>
						<label for="text" class="placeholder">Carrera</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="usuario" name="usuario" type="text" class="form-control input-border-bottom" required>
						<label for="text" class="placeholder">Usuario</label>
					</div>

					<div class="form-group form-floating-label">
						<input  id="password" name="password" type="password" class="form-control input-border-bottom" required>
						<label for="passwordsignin" class="placeholder">Contraseña</label>
					</div>

					<div class="row form-sub m-0">
						<div class="custom-control custom-checkbox">
							<input type="checkbox" class="custom-control-input" name="agree" id="agree">
							<label class="custom-control-label" for="agree">Acepto las privacidades y condiciones</label>
						</div>
					</div>
					<div class="form-action">
						<a href="#" id="show-signin" class="btn btn-danger btn-rounded btn-login mr-3">Cancel</a>
						<input type="submit" class="btn btn-primary btn-rounded btn-login" id="enviar" value="Enviar datos">
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