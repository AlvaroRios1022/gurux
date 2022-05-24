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
			background-color: #A665A9;
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


		.flex-container {
			display: flex;
			flex-wrap: nowrap;
			background-color: #EFEFEF;
		}

		.flex-container>div {
			background-color: #f1f1f1;
			width: 100px;
			margin-left: 6%;
			text-align: center;
			line-height: 75px;
			font-size: 30px;
		}

		.caja_inline {
			display: inline-block;
			width: 100px;
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
							<a href="servicios.php">
								<li class="rojoservicios" style="">	SERVICIOS</li>
							</a>

							<a href="medicos.php">
								<li class="azulmedicos" style="">MÉDICOS</li>
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
			<div class="barrapsiquicos" style="margin-top:-6px; ">
				<ul id="lista1">
					<li style="margin-left:-23px;" class="itemlista1"><a id="current" href="psiquicos.php"> HOME PSÍQUICOS </a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="preguntas_psiquicos.php">PREGUNTAS FRECUENTES</a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="horoscopo.php" style="color:#fff;text-shadow: 1px 1px 1px black;">HORÓSCOPO</a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="libreria_psiquicos.php">LIBRERÍA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="historia_psiquicos.php">MI CUENTA</a></li>
				</ul>
			</div>

			<div class="contenido">
				<div class="barraizquierdapsiquico">

					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" class="buscadorpsiquico" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchpsiquico">
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
					<div class="especialpsiquicos">
						<a href=" ">
							<li style="color: #333;" value="Acuario"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_1.png">Acuario</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Aries"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_2.png">Aries</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Cancer"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_3.png">Cáncer</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Capricornio"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_4.png">Capricornio</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Escorpion"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_5.png">Escorpión</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Géminis"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_6.png">Géminis</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Libra"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_7.png">Libra</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Leo"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_8.png">Leo</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Piscis"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_9.png">Piscis</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Sagitario"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_10.png">Sagitario</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Tauro"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_11.png">Tauro</li>
						</a><br>
						<a href=" ">
							<li style="color: #333;" value="Virgo"><img style="width:35px; height:35px; margin-right:25px;" src="img/horoscopo/signo_12.png">Virgo</li>
						</a><br>

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


	<div style="background-color:#EAD1E5">
		<img style="width:84%; margin-top:142px; height:0.000001px " src="img/barratop.png" alt="estres">
		<ul id="lista1" style="margin-left:15%;">
			<li class="itemlista1"><a href="" style=" color:#fff;text-shadow: 1px 1px 1px black;"> HOME HORÓSCOPO </a></li>
			<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li class="itemlista1"><a href="">MENSUAL</a></li>
			<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li class="itemlista1"><a href="">CHINO</a></li>
			<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li class="itemlista1"><a href="">DEL AMOR</a></li>
			<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
			<li class="itemlista1"><a href="">SIGNOS ZODIACALES</a></li>
		</ul>
	</div>

	<div class="slideshow-container2" style="margin-left:16%; margin-top:-17px">
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio1.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_psiquicos2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_psiquicos3.jpg" style="width:100%"></a>
		</div>

		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>

	<!-- Gurus -->

	<div class="fondomedio">

		<div style="margin-left:250px; margin-top:-2px; color: #6B6B6B;">

		</div>

		<br>
		<div style=" background-color: #efefef; height: 582px;">
			<div class="caja_inline" style=" vertical-align: top; width:35%; height: 400px; margin-left: 25%; background-color: #5c3293; ">
				<div class="caja_inline">
					<img style="margin-top:-50px; margin-bottom:10px; margin-left: 50px;" src=" img/horoscopo/signo_1g.png">
				</div>
				<div align="center" class="caja_inline" style="margin-left:15%; width:50%; ">
					<h1 style=" color: #ffc808; font-size:64px; ">Acuario</h1>
					<a style=" margin-top:-20px; width: 50%; color: #efefef; ">20 Enero - 20 Febrero</a>
				</div>
				<div style=" width:100%; height: 450px; background-color: #f3e0ee; ">
					<div align="center">
						<h2 style="color: #848081; "><br>
							<?php
							setlocale(LC_TIME, 'es_ES.UTF-8');
							echo ' ' . ucfirst(strftime("%A, %d de %B de %Y")) . '<br/>';
							?> </h2>
					</div>
					<div align=" justify" style="margin-left:5%; margin-right:5%;">

						<a style="color: #452167">Conocerás tu futuro en el amor, la salud, el trabajo. Te sorprenderás al
							observar cómo serán tus viajes, tus amistades, tu dinero y muchas sorpresas
							más, siempre de la mano de nuestros expertos GURÚS PSÍQUICOS.
						</a>
						<br><br>
						<a style="color: #6b6b6b">
							Conocerás tu futuro en el amor, la salud, el trabajo. Te sorprenderás al
							observar cómo serán tus viajes, tus amistades, tu dinero y muchas sorpresas
							más, siempre de la mano de nuestros expertos GURÚS PSÍQUICOS.

						</a>
						<br><br>
						<a style="color: #452167">
							Conocerás tu futuro en el amor, la salud, el trabajo. Te sorprenderás al
							observar cómo serán tus viajes, tus amistades, tu dinero y muchas sorpresas
							más, siempre de la mano de nuestros expertos GURÚS PSÍQUICOS.
						</a>
					</div>
				</div>
			</div>
			<div align="center" class="caja_inline" style="  border-radius: 30px; width:30%; height: 550px; margin-left: 5%; margin-top: 10px; background-color: #5c3293; ">
				<div style=" width: 100%; margin-top: 25px;">
					<h3 style="color:#ffc808">SELECCIONA TU SIGNO</h3>
					<br>
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signo_1n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_2n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_3n.png"></a>
					</div>
				</div>

				<div style=" width: 100%; margin-top: 25px;">
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signo_4n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_5n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_6n.png"></a>
					</div>
				</div>

				<div style=" width: 100%; margin-top: 25px;">
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signo_7n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_8n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_9n.png"></a>
					</div>
				</div>

				<div style=" width: 100%; margin-top: 25px;">
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signo_10n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_11n.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signo_12n.png"></a>
					</div>
				</div>
			</div>
		</div>
		<div align="center" style=" margin-left: 17%;">
			<br>
			<h1 style=" color: #848484;">EXPLORA NUESTRA LIBRERÍA</h1>
			<br>
			<a href=""><img style="width:30%;" src=" img/horoscopo/libreriah_1.png"></a>
			<a href=""><img style="width:30%;" src=" img/horoscopo/libreriah_2.png"></a>
			<a href=""><img style="width:30%;" src=" img/horoscopo/libreriah_3.png"></a>
			<br>
			<a href=""><img style="width:30%;" src=" img/horoscopo/libreriah_4.png"></a>
			<a href=""><img style="width:30%;" src=" img/horoscopo/libreriah_5.png"></a>
			<a href=""><img style="width:30%;" src=" img/horoscopo/libreriah_6.png"></a>
		</div>
		<div align="center" style=" margin-left: 17%;">
			<br>
			<h1 style=" color: #848484;">COMPATIBILIDAD ASTROLÓGICA</h1>
			<br>


			<div align="center" class="caja_inline" style="  border-radius: 30px; width:38%; margin-top: 10px; background-color: none; ">
				<div style=" width: 100%; margin-top: 25px;">
					<h3 style="color:#452167">Conoce a tu mujer ideal según tu signo zodiacal</h3>
					<br>
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signos_1m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_2m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_3m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_4m.png"></a>
					</div>
				</div>

				<div style=" width: 100%; margin-top: 25px;">
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_5m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_6m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signos_7m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_8m.png"></a>
					</div>
				</div>

				<div style=" width: 100%; margin-top: 25px;">
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_9m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signos_10m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_11m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_12m.png"></a>
					</div>
				</div>

				<br>
			</div>


			<div align="center" class="caja_inline" style="  vertical-align: middle ; width:15%; margin-top: -36%; ">
				<a href=""><img style="width:100%;" src=" img/horoscopo/pareja.png"></a>

			</div>

			<div align="center" class="caja_inline" style="  border-radius: 30px; width:38%; margin-top: 10px; background-color: none; ">
				<div style=" width: 100%; margin-top: 25px;">
					<h3 style="color:#452167">Conoce a tu hombre ideal según tu signo zodiacal</h3>
					<br>
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signos_1m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_2m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_3m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_4m.png"></a>
					</div>
				</div>

				<div style=" width: 100%; margin-top: 25px;">
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_5m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_6m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signos_7m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_8m.png"></a>
					</div>
				</div>

				<div style=" width: 100%; margin-top: 25px;">
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_9m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style=" width:100%; " src=" img/horoscopo/signos_10m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_11m.png"></a>
					</div>
					<div class="caja_inline">
						<a href=""><img style="width:100%;" src=" img/horoscopo/signos_12m.png"></a>
					</div>
				</div>

				<br>
			</div>
		</div>
	</div>
	</div>
	<div class="flex-container" style="margin-left:15%">
		<div style="width:42%;">
			<img src="imghoroscopo/acuario.svg" alt=""><br>
			<img src="imghoroscopo/texto_acuario.svg" alt=""><br>

		</div>
		<div style="width:42%">
			<img src="imghoroscopo/acuario.jpg" alt="">
		</div>
	</div>
	<!--Product Grid-->
	<div align="right">

	</div>
	</div>
	</div>

	<div class="footerpsiquicos" align="center">
		<div class="container2">
			<div align="right">
				<img style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/apsiquico.png" alt="kalita">
			</div>

			<div align="center">

				<img style="width:15%; border-radius:20px" src="img/preffo1.png" alt="kalita">
				<img style="width:15%; border-radius:20px; margin-left:25px" src="img/preffo2.png" alt="kalita">
				<img style="width:15%; border-radius:20px; margin-left:25px" src="img/preffo3.png" alt="kalita">
				<img style="width:15%; border-radius:20px; margin-left:25px; margin-right:25px " src="img/preffo4.png" alt="kalita">
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

	<!-- SLIDER -->

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
				$(".barraizquierdapsiquico").mCustomScrollbar({
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
</body>

</html>