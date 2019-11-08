<?php session_start(); ?>

<!DOCTYPE html>
<html lang="es">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>IMC</title>
	<link rel="icon" href="../assets/img/Logotipo.png" type="image/x-icon"/>
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/azzara.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/calculo-fonts.css">
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
		<div class="row">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						<h4 class="card-title">Recuperar contraseña</h4>
					</div>
					<div class="card-body">
						<div class="container" >
							<div class="col-md-12">
								<form action="" method="POST">
									<div class="form-group">
									 <label>Ingrese su correo electronico</label>
										<div class="input-group">
											<input type="text" class="form-control" id="recuperar-password" name="recueperar-contrasena">
											<div class="input-group-append">
												<span class="recuperar-password"></span>
											</div>
										</div>
								   </div>
							   	    <a href="../index.php" class="btn btn-primary btn-link">Cancelar</a>
									<button class="btn btn-primary btn-xs">Enviar</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
	   </div>
	</div>


	<script src="../assets/js/core/jquery.3.2.1.min.js"></script>
	<script src="../assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
	<script src="../assets/js/core/popper.min.js"></script>
	<script src="../assets/js/core/bootstrap.min.js"></script>
	<script src="../assets/js/ready.js"></script>
</body>
</html>