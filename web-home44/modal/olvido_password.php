<div id="password" class="modal fade">
				<div class="modal-dialog modal-login">
					<div class="modal-content">
						<form  action="#" method="post" id="recuperar_pass" name="recuperar_pass">
							<div class="modal-header">				
							<input type="hidden" id="tipo" name="tipo" value="recuperar_pass">
								<h4 class="modal-title" >¿Olvidó su contraseña?</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style=" color: #FEC705">&times;</button>
							</div>
							<div class="modal-body">				
								<div class="form-group" align="left">
									<label>Usuario</label>
									<input name="usuario_pass" type="text" class="form-control" required="required">
								</div>
							</div>

							<div class="alert alert-success " style=" display: none;" id="div_mensaje_pass" role="alert">
  								<span id="mensaje_pass"></span>
							</div>

							<div class="modal-footer justify-content-between">
								<input type="submit" name="entrar" id="recuperar_pass" value="Recuperar" class="btn btn-primary" >
							</div>
						</form>
					</div>
				</div>
</div>    