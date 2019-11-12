<div class="table-responsive">
	<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-sm">
	    <div class="modal-content">
	      <div class="container">
	      	 <div class="wizard-container wizard-round col-md-12">
				<div class="wizard-header text-center"><br>
					<h3 class="wizard-title"><b>Registrar</b>  producto</h3>

				</div>
				<form  action="../modelo/registrar_producto.php" method="POST" autocomplete="off">
					<div class="wizard-body">

						<div class="tab-content">
							<div class="tab-pane active" id="about">
								<div class="row">

									<div class="col-md-12">
										<div class="form-group">
											<label>Nombre:</label>
											<input name="nombre_producto" type="text" class="form-control" required>
										</div>

										<div class="form-group">
											<label>Marca:</label>
											<input name="marca_producto" type="text" class="form-control" required>
										</div>
									</div>

									<div class="col-md-12">
										<div class="form-group">
											<label>Descripcion:</label>
											<input name="descripcion" type="text" class="form-control" required>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="wizard-action">
						<div class="pull-left">
							<input type="button" class="btn btn-previous btn-fill btn-default disabled" name="previous" value="Cancelar">
						</div>
						<div class="pull-right">
							<input type="submit" class="btn btn-next btn-danger" name="next" value="Registrar">
						</div>
						<div class="clearfix"></div>
					</div><br>
				</form>
			</div>
	      </div>
	    </div>
	  </div>
	</div>
</div>