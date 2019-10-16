<?php 
  if(isset($_GET['id'])){
  	$id = $_GET['id'];
  	$consulta = $pdo ->prepare("SELECT * FROM usuarios WHERE id_usua=:id");
  	$consulta->bindParam(":id", $id);
  	$consulta->execute();

  	if ($consulta-> rowCount()>=1) {
  		 $fila = $consulta->fech();
  		 echo "
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
  		 ";
  	} else {
  		echo "Fatal error!...Ocurrio un error";
  	}
  	

  }else{
    echo "Error al procesar la peticion!";
  }

 ?>