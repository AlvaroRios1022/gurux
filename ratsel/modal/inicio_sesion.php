<div id="sesion" class="modal fade">
				<div class="modal-dialog modal-login">
					<div class="modal-content">
						<form  action="#" method="post" id="Inicio_sesion" name="Inicio_sesion">
							<div class="modal-header">				
							<input type="hidden" id="tipo" name="tipo" value="inicio_sesion">
								<h4 class="modal-title" >INGRESO</h4>
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true" style=" color: #FEC705">&times;</button>
							</div>
							<div class="modal-body">				
								<div class="form-group" align="left">
									<label>Usuario</label>
									<input name="usuario" type="text" class="form-control" required="required">
								</div>
								<div class="form-group" align="left">
									<div class="clearfix">
										<label>Contraseña</label>



										<a  href="#password" data-dismiss="modal" aria-hidden="true" class="float-right text-muted" data-toggle="modal" >
										<small style="color: #4f2770" >Olvidaste la Contraseña?</small>
										</a>
									</div>

									<input type="password"  name="password" class="form-control" required="required">

								</div>
							</div>

							<div class="alert alert-success " style=" display: none;" id="div_mensaje_sesion" role="alert">
  								<span id="mensaje_sesion"></span>
							</div>

							<div class="modal-footer justify-content-between">
								<label class="form-check-label" style="color: #FEC705 "><input type="checkbox" > Recuerdame</label>
								<input type="submit" name="entrar" id="Inicio_sesion" value="entrar" class="btn btn-primary" >
							</div>
						</form>
					</div>
				</div>
</div>    