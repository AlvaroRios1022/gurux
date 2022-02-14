<div id="modal_registro" class="modal fade">
				<div class="modal-dialog modal-login">
					<div class="modal-content">
					
						<form action="#" method="post" id="registro_usuarios">
						<input type="hidden" id="tipo" name="tipo" value="registro">
						
							<div class="modal-header">				
								<h4 class="modal-title" >REGISTRO</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style=" color: #FEC705">&times;</button>
							</div>
							
							<div class="modal-body">	
								<div class="form-group" align="left">
									<label>Nombre</label>
									<input type="text" name="nombre" class="form-control" placeholder="Nombre" required="required">
								</div>
								<div class="form-group" align="left">
									<label>Apellido</label>
									<input type="text" name="apellido" class="form-control" placeholder="Apellido" required="required">
								</div>
								<div class="form-group" align="left">
									<label>Usuario</label>
									<input type="text" name="usuario" class="form-control" placeholder="Usuario" required="required">
								</div>
								<div class="form-group" align="left">
									<label>Correo</label>
									<input type="email" name="email" class="form-control" placeholder="Correo" required="required">
								</div>
								<div class="form-group" align="left">
									<label>Contraseña</label>
									<input type="password"  name="password" class="form-control" placeholder="Contraseña" required="required">
								</div>
								<div class="form-group" align="left">
									<label>Confirmar Contraseña</label>
									<input type="password" name="password2" class="form-control" placeholder="Confirmar Contraseña" required="required">
								</div>
							</div>

							<div class="alert alert-success " style=" display: none;" id="div_mensaje" role="alert">
  								<span id="mensaje_respuesta"></span>
							</div>

							<div class="modal-footer justify-content-between">
								<label class="form-check-label" style="color: #FEC705 "><input type="checkbox" required="required"> Aceptar Terminos y Condiciones</label>
								<input type="submit" name="registro" class="btn btn-primary" value="Registrar" id="registro_usuarios">
							</div>
						</form>
					</div>
				</div>
			</div> 