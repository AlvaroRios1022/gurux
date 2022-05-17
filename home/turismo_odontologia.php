<?php
session_start();
if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/estilos.css" rel="stylesheet" type="text/css" />
	<link href="css/filtros_generales.css" rel="stylesheet" type="text/css" />
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css" />
	<link rel="stylesheet" href="css/jquery.mCustomScrollbar.css" type="text/css" />

	<script src="js/jquery-2.1.0.min.js"></script>
	<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

	<title>Gurus Center</title>
	<style type="text/css">
		body {
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
		}

		.mCS-rounded.mCSB_scrollTools .mCSB_dragger .mCSB_dragger_bar {
			background-color: #fff;
			margin-top: 60px;
			margin-left: -3px;
		}

		.mCS-rounded.mCSB_scrollTools .mCSB_draggerRail {
			margin-right: 10px;
			margin-top: 60px;
			width: 4px;
			background-color: #8ED8F8;
		}

		.mySlides {
			display: none;
		}

		.holder1::-webkit-input-placeholder {
			text-align: center;
			color: #452167;

		}

		input:focus,
		select:focus,
		select,
		input.form-control:focus {

			outline: none !important;

			outline-width: 0 !important;

			box-shadow: none;

			-moz-box-shadow: none;

			-webkit-box-shadow: none;

		}

		.caja_inline {
			display: inline-block;
			width: 100px;
		}


		.slide {
				position: relative;
				box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.64);
				margin-top: 26px;
			}

			.slide-inner {
				position: relative;
				overflow: hidden;
				width: 100%;
				height: calc( 300px + 3em);
			}

			.slide-open:checked + .slide-item {
				position: static;
				opacity: 100;
			}

			.slide-item {
				position: absolute;
				opacity: 0;
				-webkit-transition: opacity 0.6s ease-out;
				transition: opacity 0.6s ease-out;
			}

			.slide-item img {
				display: block;
				height: auto;
				max-width: 100%;
			}

			.slide-control {
				background: rgba(0, 0, 0, 0.28);
				border-radius: 50%;
				color: #fff;
				cursor: pointer;
				display: none;
				font-size: 40px;
				height: 40px;
				line-height: 35px;
				position: absolute;
				top: 50%;
				-webkit-transform: translate(0, -50%);
				cursor: pointer;
				-ms-transform: translate(0, -50%);
				transform: translate(0, -50%);
				text-align: center;
				width: 40px;
				z-index: 10;
			}

			.slide-control.prev {
				left: 2%;
			}

			.slide-control.next {
				right: 2%;
			}

			.slide-control:hover {
				background: rgba(0, 0, 0, 0.8);
				color: #aaaaaa;
			}

			#slide-1:checked ~ .control-1,
			#slide-2:checked ~ .control-2,
			#slide-3:checked ~ .control-3 {
				display: block;
			}

			.slide-indicador {
				list-style: none;
				margin: 0;
				padding: 0;
				position: absolute;
				bottom: 2%;
				left: 0;
				right: 0;
				text-align: center;
				z-index: 10;
			}

			.slide-indicador li {
				display: inline-block;
				margin: 0 5px;
			}

			.slide-circulo {
				color: #828282;
				cursor: pointer;
				display: block;
				font-size: 35px;
			}

			.slide-circulo:hover {
				color: #aaaaaa;
			}

			#slide-1:checked ~ .control-1 ~ .slide-indicador 
			 	li:nth-child(1) .slide-circulo,
			#slide-2:checked ~ .control-2 ~ .slide-indicador 
			 	 li:nth-child(2) .slide-circulo,
			#slide-3:checked ~ .control-3 ~ .slide-indicador 
			 	 li:nth-child(3) .slide-circulo {
				color: #428bca;
			}

			#titulo {
				width: 100%;
				position: absolute;
				padding: 0px;
				margin: 0px auto;
				text-align: center;
				font-size: 27px;
				color: rgba(255, 255, 255, 1);
				font-family: 'Open Sans', sans-serif;
				z-index: 9999;
				text-shadow: 0px 1px 2px rgba(0, 0, 0, 0.33), 
			 	    -1px 0px 2px rgba(255, 255, 255, 0);
			}

	</style>

</head>

<body class="cabecera">

	<?php
	if (empty($_SESSION['userlog'])) {
	?>
		<div id="container2">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%" alt="logo" /></a>
				<nav style=" margin-left:-20px; ">
					<ul>
						<li class="menuamarillo" style=" margin-top:-3px; margin-left:10px; width:120px; height:30px; background-color:transparent; ">
							<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>

							<ul style="margin-left:-35px; height:auto; max-width:130px;">

								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/guruxy.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/falabella.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/larebaja.svg"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/lopido.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="turismo_medico.php" style="font-size:14px; text-decoration:none; color:#1ebdde;">TURISMO MEDICO</a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/betplay.svg"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/synlab.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="cobru.php" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/cobru.svg"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/pasalapagina.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/smartfit.svg"></a> </li>
							</ul>
						</li>
				</nav>
			</div>
			<div class="menu">

				<div class="menusuperiorizquierdo" align="right" style="margin-left: 70px">
					<nav>
						<ul>
							<li class="menuamarillo" style=" width:150px; height:30px; background-color:transparent; ">
								<a class="menuamarillo" href="#" style="font-size: 15px;  text-decoration:none;">SOBRE NOSOTROS</a>
								<ul style="margin-left:-35px; height:auto; max-width:130px;">

									<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000;" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
									<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="politicas.pdf" download="politicas.pdf" style="font-size:10px; text-decoration:none; color:#000;">POLÍTICAS DE PRIVACIDAD</a></li>
									<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="terminos.pdf" download="terminos.pdf" style="font-size:10px; text-decoration:none; color:#000;">TÉRMINOS Y CONDICIONES</a></li>
									<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="datos.pdf" download="datos.pdf" style="font-size:10px; text-decoration:none; color:#000;">POLÍTICAS DE DATOS</a></li>
									<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000; " href="contacto.php">CONTÁCTENOS</a></li>
								</ul>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
							<li class="menuamarillo" style="margin-left:-20px;height:30px;width:250px;background-color:transparent">
								<a class="menuamarillo" href="https://www.guruxy.com" style="font-size: 15px; text-decoration:none;">TRABAJA CON NOSOTROS</a>
							</li>
							<li style="font-size: 15px; color: #FFF;margin-left:-20px;height:30px;width:3px;background-color:transparent">|</li>
							<li class="menuamarillo" style=" margin-left:-40px;height:30px;width:250px;background-color:transparent">
								<a href="como.php" class="menuamarillo" href="#" style="font-size: 15px; text-decoration:none;">¿CÓMO FUNCIONA?</a>
							</li>
						</ul>
					</nav>
					<!--<ul id="lista">
					<li class="itemlista">SOBRE NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">TRABAJA CON NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">¿CÓMO FUNCIONA?</li>
				</ul>-->
				</div>
				<input type="hidden" id="filtro" value="medicina">
				<?php
				if (!(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE)) {
				?>
					<div class="menusuperiocentro" style="margin-left: -30px">
						<a href="usuarios.php"> <img src="img/registros_.png" width="176px" height="30px" alt="registro" /></a>
						<a href="login.php"><img src="img/sesiones_.png" width="176px" height="30px" alt="sesion" /></a>
					</div>
				<?php
				} else {
				?>
					<div class="menusuperiocentro logout" style="">
						<a style=" color:#FFC808;  "><?php echo $_SESSION['nombre']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

						<a class="logout_btn" href="logout.php" style=" "> Cerrar Sesión</a>
					</div>
				<?php
				}
				?>
				<a href="cobru.php"><img src="img/logoheader.png" width="7%" alt="sesion" style="margin-top:10px" /></a>


				<div class="menusuperiorderecho" align="left" style="margin-left: -20px">
					<span class="itemlista">IDIOMA <a style="color:#FFC808"> ES </a> | EN</span>
				</div>

				<div class="menuinferior">
					<br>
					<nav>
						<ul align="right">
							<a href="medicos.php">
								<li class="azulmedicos">MÉDICOS</li>
							</a>
							<a href="medicina_alternativa.php">
								<li class="verdemedicos">MÉDICINA ALTERNATIVA</li>
							</a>
							<a href="preparacion.php">
								<li class="amarilloyoga">PREPARACIÓN FÍSICA</li>
							</a>
							<a href="psiquicos.php">
								<li class="moradosiquico">PSÍQUICOS</li>
							</a>
							<a href="religiosos.php">
								<li class="azulreligioso">RELIGIOSOS</li>
							</a>
							<a href="coaching.php">
								<li class="naranjacoaching">COACHING</li>
							</a>
							<a href="idiomas.php">
								<li class="azulidioma">IDIOMAS</li>
							</a>
							<a href="tutores.php">
								<li class="rosadotutores">TUTORES</li>
							</a>
							<a href="otros.php">
								<li class="verdeotros">OTROS PROFESIONALES</li>
							</a>
							<a href="construccion.php">
								<li class="amarillocontruccion">ESPECIALISTAS CONSTRUCCIÓN</li>
							</a>
						</ul>
					</nav>
				</div>
			</div>
			<div class="barra" style="margin-top:-6px; ">
				<ul id="lista1">
					<li style="margin-left:-90px;" class="itemlista1"><a id="current" href="medicos.php"> HOME MÉDICOS </a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="preguntas_medicos.php">PREGUNTAS FRECUENTES</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="cuidados_medicos_casa.php">CUIDADOS EN CASA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="presencial_medicos.php">CITA PRESENCIAL</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="#">LABORATORIOS MÉDICOS</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="#">FARMACIAS</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="historia_clinica.php">HISTORIA CLÍNICA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="turismo_medico.php" style="color:#fff; text-shadow: 1px 1px 1px black;">TURISMO MÉDICO</a> </li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="libreria.php">LIBRERÍA</a></li>
				</ul>
			</div>

			<div class="contenido">
				<div class="barraizquierda">


					<div class="input-group">
						<br><br>
						<input style="margin-left:10px" id="buscador" class="buscador" maxlength="128" placeholder="Buscar" size="15" type="text" />
						<button class="search">
							<i class="fa fa-search ">&nbsp;</i>
						</button>
					</div>

					<div>
						<table style="border: transparent !important;border-top: 0px !important ;color:transparent !important;border-radius: transparten;">

							<tbody id="myTable" class="especial">
								<tr>
									<td>
										<a href="">
											<li style="color: #333; " value="Alergólogo">Cirugías Cardiovasculares</li>
										</a>
									</td>
								</tr>
								<tr>
									<td><a href=" ">
											<li style="color: #333; " value="Angiólogo">Cirugías Bariátricos</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="">
											<li style="color: #333; " value="Cardiólogo">Cirugías Cardiovasculares</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="">
											<li style="color: #333; " value="Cardiólogo">Cirugías Ortopédicas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="turismo_cirugia_plastica.php ">
											<li style="color: #333; " value="Deportólogo">Cirugías Plásticas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="turismo_dermatologia.php">
											<li style="color: #333; " value="Dermatólogo">Dermatología</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="">
											<li style="color: #333; " value="Endocrinólogo">Ginecología</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="turismo_odontologia.php">
											<li style="color: #333; " value="Enfermero">Odontología</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="">
											<li style="color: #333; " value="Epidemiólogo">Oftalmología</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="">
											<li style="color: #333; " value="Epidemiólogo">Oncología</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="">
											<li style="color: #333; " value="Epidemiólogo">Urología</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="">
											<li style="color: #333; " value="Epidemiólogo">Otorrinolaringología</li>
										</a></td>
								</tr>
							</tbody>
						</table>
						<div> &nbsp;</div>
						<div> &nbsp;</div>
						<div> &nbsp;</div>
					</div>
				</div>



				<div class="blanco">

				</div>

			</div>

		</div>


	<?php
	}
	?>
	<?php

	if (isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
	?>
		<?php
		echo $_SESSION['userlog'];
		?>
	<?php
	}
	?>


	<div align="center" style="background-color:#fff;">
		<img style="width:84%; margin-top:142px; height:0.01px " src="img/barratop.png" alt="estres">

	</div>
	<div style="margin-left:17%">
	<iframe src="https://www.mauricioduran.com/" width="100%" height="2200px" allow="fullscreen"></iframe>
	
		</div>


	<!-- Gurus -->

	<div class="fondomedio">

		<!--Product Grid-->


		<div class="footer2" align="center">
			<div class="container2">
				<div align="right">
					<img style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/amedico.png" alt="kalita">
				</div>

				<div align="center">

					<img style="width:15%;" src="img/preffo1.png" alt="kalita">
					<img style="width:15%; margin-left:25px" src="img/preffo2.png" alt="kalita">
					<img style="width:15%; margin-left:25px" src="img/preffo3.png" alt="kalita">
					<img style="width:15%; margin-left:25px; margin-right:25px " src="img/preffo4.png" alt="kalita">
				</div>


				<div class="row">

				</div>
			</div>
		</div>
		<footer>
			<div class="container" style="margin-left:20%">
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<ul class="contact">
							<span style="color: #C93782">SOBRE NOSOTROS </span>


							<li>
								<a href="politicas.pdf" download="politicas.pdf">Política de Privacidad</a>
							</li>

							<li>
								<a href="terminos.pdf" download="terminos.pdf">Términos y Condiciones</a>
							</li>

							<li>
								<a href="terminos.pdf" download="terminos.pdf">Términos de Uso </a>
							</li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<ul class="contact">
							<span style="color: #C93782">ERES GURÚ?</span>
							<li>
								<a href="https://www.guruxy.com">Únete hoy a nosotros y conéctate a esta gran red de expertos.</a>
							</li>
						</ul>
					</div>

					<div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
						<ul class="social">
							<span style="color: #C93782">SÍGUENOS</span>
							<li>
								<a href="#"><i style="color: #FFFFFF" class="fa fa-facebook fa-2x"></i></a>
							</li>

							<li>
								<a href="#"><i style="color: #FFFFFF" class="fa fa-instagram fa-2x"></i></a>
							</li>
							<li>
								<a href="#"><i style="color: #FFFFFF" class="fa fa-linkedin fa-2x"></i></a>
							</li>

							<li>
								<a href="#"><i style="color: #FFFFFF" class="fa fa-youtube fa-2x"></i></a>
							</li>
							<a href="https://guruxy.com/home/index.php"><img src="images/logo.png" width="220" height="auto" style="margin-left: -30px" alt="" /></a>
						</ul>
					</div>


					<?php
					require("modal/registro.php");
					require("modal/inicio_sesion.php");
					require("modal/olvido_password.php");
					?>

				</div>
		</footer>

		<!-- SLIDER 1 -->

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				var dots = document.getElementsByClassName("dot");
				if (n > slides.length) {
					slideIndex = 1
				}
				if (n < 1) {
					slideIndex = slides.length
				}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
			}
		</script>
		<script>
			(function($) {
				$(window).on("load", function() {
					$(".barraizquierda").mCustomScrollbar({
						theme: "rounded"
					});
				});
			})(jQuery);
		</script>

		<script>
			var slideIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > x.length) {
					slideIndex = 1
				}
				x[slideIndex - 1].style.display = "block";
				setTimeout(carousel, 15000);
			}
		</script>

		<!-- SLIDER2 -->

		<script>
			var slideIndex = 1;
			showSlides(slideIndex);

			function plusSlides(n) {
				showSlides(slideIndex += n);
			}

			function currentSlide(n) {
				showSlides(slideIndex = n);
			}

			function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides2");
				var dots = document.getElementsByClassName("dot2");
				if (n > slides.length) {
					slideIndex = 1
				}
				if (n < 1) {
					slideIndex = slides.length
				}
				for (i = 0; i < slides.length; i++) {
					slides[i].style.display = "none";
				}
				for (i = 0; i < dots.length; i++) {
					dots[i].className = dots[i].className.replace(" active", "");
				}
				slides[slideIndex - 1].style.display = "block";
				dots[slideIndex - 1].className += " active";
			}
		</script>
		<script>
			(function($) {
				$(window).on("load", function() {
					$(".barraizquierda").mCustomScrollbar({
						theme: "rounded"
					});
				});
			})(jQuery);
		</script>

		<script>
			var slideIndex = 0;
			carousel();

			function carousel() {
				var i;
				var x = document.getElementsByClassName("mySlides2");
				for (i = 0; i < x.length; i++) {
					x[i].style.display = "none";
				}
				slideIndex++;
				if (slideIndex > x.length) {
					slideIndex = 1
				}
				x[slideIndex - 1].style.display = "block";
				setTimeout(carousel, 15000);
			}
		</script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
		<script src="js/consulta_gurus_especiales.js"></script>
		<script src="js/login.js"></script>
		<script src="js/jquery.rwdImageMaps.min.js"></script>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script>
			$(document).ready(function(e) {
				$('img[usemap]').rwdImageMaps();

				$('area').on('click', function() {
					alert($(this).attr('alt') + ' clicked');
				});
			});
		</script>

		

</body>

</html>