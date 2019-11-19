<div class="modal fade bd-indice" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
       <div class="modal-content">
	      <div class="container">
	      	<form action="../modelo/registrar_producto.php" method="POST" autocomplete="off">
	      		 <div class="wizard-container wizard-round col-md-12">
					<div class="wizard-header text-center"><br>
						<h3 class="wizard-title"><b>Registrar </b> el Indice de Masa Corporal</h3>
					</div>
					<div class="card-body" data-select2-id="10">
						<div class="row" data-select2-id="9">
							<div class="col-md-8" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Buscar persona</label>
									<input name="codigo_producto" type="text" class="form-control" required>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body" data-select2-id="10">
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Nombre</label>
									<input name="codigo_producto" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Apellido</label>
									<input name="nombre_producto" type="text" class="form-control" required>
								</div>

							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Fecha de atencion</label>
									<div class="input-group">
										<input type="date" class="form-control" id="date" name="datetime">
										<div class="input-group-append">
											<span class="input-group-text">
												<i class="fa fa-calendar"></i>
											</span>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="card-body" data-select2-id="10">
						<div class="row" data-select2-id="9">
							<div class="col-md-4" data-select2-id="8">
								<div class="form-group" data-select2-id="7">
									<label>Peso</label>
									<input name="codigo_producto" type="text" class="form-control" required>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group">
									<label>Indice de la Masa Corporal</label>
									<div class="input-group">
										<input type="text" class="form-control" id="text" name="datetime">
										<div class="input-group-append">
												<button class="btn btn-success">Calcular</button>

										</div>
									</div>
								</div>
							</div>
							<div class="col-md-4">
								<div class="form-group" data-select2-id="7">
									<label>Ciudad</label>
									<input name="nombre_producto" type="text" class="form-control" required>
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
