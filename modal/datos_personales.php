<!-- Registrar producto -->

<div class="modal fade bd-datos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-content">
	      <div class="container">
	      	<form action="../modelo/datos_personales.php" method="POST" autocomplete="off">
	      		 <div class="wizard-container wizard-round col-md-12">
					<div class="wizard-header text-center"><br>
						<h3 class="wizard-title"><b>Datos</b>  Personales</h3>
					</div>
					<div class="card-body" data-select2-id="10">
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>DNI</label>
									<input name="dni" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Primer nombre</label>
									<input name="primer_nombre" type="text" class="form-control" required>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Segundo nombre</label>
									<input name="segundo_nombre" type="text" class="form-control" required>
								</div>

							</div>
						</div>
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Apellido paterno</label>
									<input name="apellido_paterno" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Apellido materno</label>
									<input name="apellido_materno" type="text" class="form-control" required>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Edad</label>
									<input name="edad" type="text" class="form-control" required>
								</div>

							</div>
						</div>
						<div class="row" data-select2-id="9">
							<div class="col-md-4">
								<div class="form-group">
								  <label for="defaultSelect">Estado Civil</label>
									<select class="form-control form-control" id="defaultSelect" name="estado_civil">
										<option>Seleccione</option>
										<option value="Soltero/a">Soltero/a</option>
										<option value="Casado/a">Casado/a</option>
										<option value="Separado/a">Separado/a</option>
										<option value="Divorciado/a">Divorciado/a</option>
										<option value="Viudo/a">Viudo/a</option>

									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  <label for="defaultSelect">Sexo</label>
									<select class="form-control form-control" id="defaultSelect" name="sexo">
										<option >Seleccione</option>
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
										<option value="Otro">Otro</option>

									</select>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Pais</label>
									<input name="pais" type="text" class="form-control" required>
								</div>

							</div>
						</div>
						<div class="row" data-select2-id="9">
							<div class="col-md-4">
								<div class="form-group">
								  <label for="defaultSelect">Ciudad</label>
									<select class="form-control form-control" id="defaultSelect" name="ciudad">
										<option>Seleccione</option>
										<option value="Cuenca">Cuenca</option>
										<option value="Guaranda">Guaranda</option>
										<option value="Azogues">Azogues</option>
										<option value="Tulcán">Tulcán</option>
										<option value="Riobamba">Riobamba</option>
										<option value="Latacunga">Latacunga</option>
										<option value="Machala">Machala</option>
										<option value="Esmeraldas">Esmeraldas</option>
										<option value="Puerto Baquerizo Moreno">Puerto Baquerizo Moreno</option>
										<option value="Guayaquil">Guayaquil</option>
										<option value="Ibarra">Ibarra</option>
										<option value="Loja">Loja</option>
										<option value="Babahoyo">Babahoyo</option>
										<option value="Portoviejo">Portoviejo</option>
										<option value="Macas">Macas</option>
										<option value="Tena">Tena</option>
										<option value="Puerto Francisco de Orellana">Puerto Francisco de Orellana</option>
										<option value="Puyo">Puyo</option>
										<option value="Quito">Quito</option>
										<option value="Santa Elena">Santa Elena</option>
										<option value="Santo Domingo de los Colorados">Santo Domingo de los Colorados</option>
										<option value="Nueva Loja">Nueva Loja</option>
										<option value="Ambato">Ambato</option>
										<option value="Zamora">Zamora</option>



									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Celular</label>
									<input name="celular" type="text" class="form-control" required>
								</div>
							</div>
						</div>
					</div>


					<div class="wizard-action">
						<div class="pull-left">
							  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						</div>
						<div class="pull-right">
							<input type="submit" class="btn btn-next btn-danger" name="next" value="Agregar">
						</div>
						<div class="clearfix"></div>
					</div><br>
				</div>
	      	</form>
	      </div>
	    </div>
    </div>
  </div>
</div>




<!-- Editar producto -->
<div class="modal fade bd-datos-editar" id="EditarDatos" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-content">
	      <div class="container">
	      	<form action="../modelo/datos_personales.php" method="POST" autocomplete="off">
	      		 <div class="wizard-container wizard-round col-md-12">
					<div class="wizard-header text-center"><br>
						<h3 class="wizard-title"><b>Editar </b> Datos  Personales</h3>
					</div>
					<div class="card-body" data-select2-id="10">
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>DNI</label>
									<input name="dni" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Primer nombre</label>
									<input name="primer_nombre" type="text" class="form-control" required>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Segundo nombre</label>
									<input name="segundo_nombre" type="text" class="form-control" required>
								</div>

							</div>
						</div>
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Apellido paterno</label>
									<input name="apellido_paterno" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Apellido materno</label>
									<input name="apellido_materno" type="text" class="form-control" required>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Edad</label>
									<input name="edad" type="text" class="form-control" required>
								</div>

							</div>
						</div>
						<div class="row" data-select2-id="9">
							<div class="col-md-4">
								<div class="form-group">
								  <label for="defaultSelect">Estado Civil</label>
									<select class="form-control form-control" id="defaultSelect" name="estado_civil">
										<option>Seleccione</option>
										<option value="Soltero/a">Soltero/a</option>
										<option value="Casado/a">Casado/a</option>
										<option value="Separado/a">Separado/a</option>
										<option value="Divorciado/a">Divorciado/a</option>
										<option value="Viudo/a">Viudo/a</option>

									</select>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
								  <label for="defaultSelect">Sexo</label>
									<select class="form-control form-control" id="defaultSelect" name="sexo">
										<option >Seleccione</option>
										<option value="Masculino">Masculino</option>
										<option value="Femenino">Femenino</option>
										<option value="Otro">Otro</option>

									</select>
								</div>
							</div>

							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Pais</label>
									<input name="pais" type="text" class="form-control" required>
								</div>

							</div>
						</div>
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Ciudad</label>
									<input name="ciudad" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Celular</label>
									<input name="celular" type="text" class="form-control" required>
								</div>
							</div>
						</div>
					</div>


					<div class="wizard-action">
						<div class="pull-left">
							  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
						</div>
						<div class="pull-right">
							<input type="submit" class="btn btn-next btn-danger" name="next" value="Agregar">
						</div>
						<div class="clearfix"></div>
					</div><br>
				</div>
	      	</form>
	      </div>
	    </div>
    </div>
  </div>
</div>

<!-- Eliminar producto -->

<div class="modal fade" id="EliminarDatos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Advertencia | Datos Personales</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Estas seguro que quieres eliminar?</label>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Eliminar</button>
      </div>
    </div>
  </div>
</div>