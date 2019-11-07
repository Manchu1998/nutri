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