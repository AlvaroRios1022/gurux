
<?php 
	session_start();
	require_once "../php/conexion.php";
	$conexion=conexion();

 ?>
 	
<div class="row">
	<div class="col-lg-12">
	<h2>Gurús por Aprobación de Tarjeta</h2>
		<table class="table table-hover table-condensed table-bordered">
		<caption>
			
		</caption>
			<tr align="center" >
				<td style="vertical-align: middle;">Numero</td>
				<td style="vertical-align: middle;">Nombre Apellido</td>
				<td style="vertical-align: middle;">Cédula o Id</td>
				<td style="vertical-align: middle;">Aprobar</td>
				<td style="vertical-align: middle;">Rechazar</td>
			</tr>

			<?php
				$sql="SELECT id, nombre, documento, telefono, url_cert_formacion, fecha,
							 estado_c, medicina, alternativa, preparacion, psiquico, religioso, 
							 coaching, idiomas, registro_x, registro_y, especialista, correo
					from guru where activo =0  ";
				$result=mysqli_query($conexion,$sql);
				while($ver=mysqli_fetch_row($result)){ 

					$datos=$ver[0]."||".
						   $ver[1]."||".
						   $ver[2]."||".
						   $ver[3]."||".
						   $ver[4]."||".
						   $ver[5]."||".
						   $ver[6]."||".
						   $ver[7]."||".
						   $ver[8]."||".
						   $ver[9]."||".
						   $ver[10]."||".
						   $ver[11]."||".
						   $ver[12]."||".
						   $ver[13]."||".
						   $ver[14]."||".
						   $ver[15]."||".
						   $ver[16]."||".
						   $ver[17];

						   $cumpleanos = new DateTime( strval ($ver[5]));
							$hoy = new DateTime();
							$annos = $hoy->diff($cumpleanos);
							$link=strval($ver[3]);
							
							$profesion = "";
							if ($ver[7] <> ""){
								$profesion = "Médicos";
							}
							else if ($ver[8] <> ""){
								$profesion = "Médicina Alternativa";
							}
							else if ($ver[9] <> ""){
								$profesion = "Preparación Física";
							}
							else if ($ver[10] <> ""){
								$profesion = "Psíquicos";
							}
							else if ($ver[11] <> ""){
								$profesion = "Religiosos";
							}
							else  if ($ver[12] <> ""){
								$profesion = "Coaching";
							}
							else if ($ver[13] <> ""){
								$profesion = "Idiomas";
							}
							else if ($ver[14] <> ""){
								$profesion = "Tutores";
							}
							else if ($ver[15] <> ""){
								$profesion = "Otras Profesiones";
							}
							else if ($ver[16] <> ""){
								$profesion = "Especialistas en la Construcción";
							}
							else {
								$profesion = "";
							}
			 ?>

			<tr>
				<td style="vertical-align: middle;"><?php echo $ver[0] ?></td>
				<td style="vertical-align: middle;"><?php echo $ver[1] ?></td>
				<td style="vertical-align: middle;"><?php echo $ver[2] ?></td>
				<td style="vertical-align: middle;"><?php echo $profesion ?></td>
				<td style="vertical-align: middle;"><?php echo "<a href=".$ver[4]." target='_blank'>". $ver[4]."</a>";?></td>	
				<td style="vertical-align: middle;"><?php echo $ver[5] ?></td>
				<td style="vertical-align: middle;"><?php echo $annos->y; ?></td>
				<td style="vertical-align: middle;"><?php echo $ver[6] ?></td>
				
				<td>
				<?php echo "<a href=aprobar.php?id=".$ver[0].">"?><button class="btn btn-success" style=" outline:none;">
						Aprobar 
						<span class="glyphicon glyphicon-ok"></span>
					</button>
				</td>
				<td>
				<?php echo "<a href=rechazar.php?id=".$ver[0].">"?><button class="btn btn-danger" style=" outline:none;">
						Rechazar 
						<span class="glyphicon glyphicon-remove"></span>
					</button>
				</td>
			</tr>
			<?php 
		}
			 ?>
		</table>
	</div>
	<?php 
/*	function mail(){ 
	// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
			$email_to = $email;
			$email_subject = "Bienvenido Gurú";
			$email_from = "noreply.guruxy.com";
			$email_message = "Hola " . $nombre . ", Bienvenido a nuestra familia, Gracias por querer ser parte de ella. \n\n";
			

			// Ahora se envía el e-mail usando la función mail() de PHP
			$headers = 'From: '.$email_from."\r\n".
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);
	}*/
		?>  
</div>