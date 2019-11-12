<!-- Registrar producto -->

<div class="modal fade bd-imc" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-content">
	      <div class="container">
	      	<form action="../modelo/registrar_producto.php" method="POST" autocomplete="off">
	      		 <div class="wizard-container wizard-round col-md-12">
					<div class="wizard-header text-center"><br>
						<h3 class="wizard-title"><b>Registrar</b>  producto</h3>
					</div>
					<div class="card-body" data-select2-id="10">
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Código de producto</label>
									<input name="codigo_producto" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Nombre de producto</label>
									<input name="nombre_producto" type="text" class="form-control" required>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Descripción de producto</label>
									<input name="descripcion" type="text" class="form-control" required>
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

<div class="modal fade bd-example" id="Editarmodal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-content">
	      <div class="container">
	      	<form action="../modelo/registrar_producto.php" method="POST" autocomplete="off">
	      		 <div class="wizard-container wizard-round col-md-12">
					<div class="wizard-header text-center"><br>
						<h3 class="wizard-title"><b>Editar</b>  producto</h3>
					</div>
					<div class="card-body" data-select2-id="10">
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Código de producto</label>
									<input name="codigo_producto" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Nombre de producto</label>
									<input name="nombre_producto" type="text" class="form-control" required>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Descripción de producto</label>
									<input name="descripcion" type="text" class="form-control" required>
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

<div class="modal fade" id="Eliminarproducto" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Advertencia</h5>
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