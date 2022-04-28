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

								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/guruxy.png"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/falabella.png"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/larebaja.png"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/lopido.png"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:14px; text-decoration:none; color:#1ebdde;">TURISMO MEDICO</a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/betplay.png"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/idime.png"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="cobru.php" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/cobru.png"></a> </li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/pasalapagina.png"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/lesmills.png"></a> </li>
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
											<li style="color: #333; " value="Deportólogo">Cirujanos Plásticos</li>
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



	<div style=" margin-left:15%;  background-color:#fff;">

<link rel="profile" href="https://gmpg.org/xfn/11" />
<link rel="pingback" href="https://mauricioduran.com/xmlrpc.php" />
<script type="text/javascript">
window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.1.0\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/mauricioduran.com\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.9.3"}};
/*! This file is auto-generated */
!function(e,a,t){var n,r,o,i=a.createElement("canvas"),p=i.getContext&&i.getContext("2d");function s(e,t){var a=String.fromCharCode;p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,e),0,0);e=i.toDataURL();return p.clearRect(0,0,i.width,i.height),p.fillText(a.apply(this,t),0,0),e===i.toDataURL()}function c(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(o=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},r=0;r<o.length;r++)t.supports[o[r]]=function(e){if(!p||!p.fillText)return!1;switch(p.textBaseline="top",p.font="600 32px Arial",e){case"flag":return s([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])?!1:!s([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!s([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]);case"emoji":return!s([10084,65039,8205,55357,56613],[10084,65039,8203,55357,56613])}return!1}(o[r]),t.supports.everything=t.supports.everything&&t.supports[o[r]],"flag"!==o[r]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[o[r]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(n=t.source||{}).concatemoji?c(n.concatemoji):n.wpemoji&&n.twemoji&&(c(n.twemoji),c(n.wpemoji)))}(window,document,window._wpemojiSettings);
</script>
<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 0.07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>


<link rel='stylesheet' id='layerslider-css'  href='https://mauricioduran.com/wp-content/plugins/LayerSlider/static/layerslider/css/layerslider.css?ver=6.10.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='https://mauricioduran.com/wp-includes/css/dist/block-library/style.min.css?ver=5.9.3' type='text/css' media='all' />
<style id='global-styles-inline-css' type='text/css'>
body{--wp--preset--color--black: #000000;--wp--preset--color--cyan-bluish-gray: #abb8c3;--wp--preset--color--white: #ffffff;--wp--preset--color--pale-pink: #f78da7;--wp--preset--color--vivid-red: #cf2e2e;--wp--preset--color--luminous-vivid-orange: #ff6900;--wp--preset--color--luminous-vivid-amber: #fcb900;--wp--preset--color--light-green-cyan: #7bdcb5;--wp--preset--color--vivid-green-cyan: #00d084;--wp--preset--color--pale-cyan-blue: #8ed1fc;--wp--preset--color--vivid-cyan-blue: #0693e3;--wp--preset--color--vivid-purple: #9b51e0;--wp--preset--color--: #19bfd1;--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple: linear-gradient(135deg,rgba(6,147,227,1) 0%,rgb(155,81,224) 100%);--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan: linear-gradient(135deg,rgb(122,220,180) 0%,rgb(0,208,130) 100%);--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange: linear-gradient(135deg,rgba(252,185,0,1) 0%,rgba(255,105,0,1) 100%);--wp--preset--gradient--luminous-vivid-orange-to-vivid-red: linear-gradient(135deg,rgba(255,105,0,1) 0%,rgb(207,46,46) 100%);--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray: linear-gradient(135deg,rgb(238,238,238) 0%,rgb(169,184,195) 100%);--wp--preset--gradient--cool-to-warm-spectrum: linear-gradient(135deg,rgb(74,234,220) 0%,rgb(151,120,209) 20%,rgb(207,42,186) 40%,rgb(238,44,130) 60%,rgb(251,105,98) 80%,rgb(254,248,76) 100%);--wp--preset--gradient--blush-light-purple: linear-gradient(135deg,rgb(255,206,236) 0%,rgb(152,150,240) 100%);--wp--preset--gradient--blush-bordeaux: linear-gradient(135deg,rgb(254,205,165) 0%,rgb(254,45,45) 50%,rgb(107,0,62) 100%);--wp--preset--gradient--luminous-dusk: linear-gradient(135deg,rgb(255,203,112) 0%,rgb(199,81,192) 50%,rgb(65,88,208) 100%);--wp--preset--gradient--pale-ocean: linear-gradient(135deg,rgb(255,245,203) 0%,rgb(182,227,212) 50%,rgb(51,167,181) 100%);--wp--preset--gradient--electric-grass: linear-gradient(135deg,rgb(202,248,128) 0%,rgb(113,206,126) 100%);--wp--preset--gradient--midnight: linear-gradient(135deg,rgb(2,3,129) 0%,rgb(40,116,252) 100%);--wp--preset--duotone--dark-grayscale: url('#wp-duotone-dark-grayscale');--wp--preset--duotone--grayscale: url('#wp-duotone-grayscale');--wp--preset--duotone--purple-yellow: url('#wp-duotone-purple-yellow');--wp--preset--duotone--blue-red: url('#wp-duotone-blue-red');--wp--preset--duotone--midnight: url('#wp-duotone-midnight');--wp--preset--duotone--magenta-yellow: url('#wp-duotone-magenta-yellow');--wp--preset--duotone--purple-green: url('#wp-duotone-purple-green');--wp--preset--duotone--blue-orange: url('#wp-duotone-blue-orange');--wp--preset--font-size--small: 13px;--wp--preset--font-size--medium: 20px;--wp--preset--font-size--large: 36px;--wp--preset--font-size--x-large: 42px;}.has-black-color{color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-color{color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-color{color: var(--wp--preset--color--white) !important;}.has-pale-pink-color{color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-color{color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-color{color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-color{color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-color{color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-color{color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-color{color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-color{color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-color{color: var(--wp--preset--color--vivid-purple) !important;}.has-black-background-color{background-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-background-color{background-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-background-color{background-color: var(--wp--preset--color--white) !important;}.has-pale-pink-background-color{background-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-background-color{background-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-background-color{background-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-background-color{background-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-background-color{background-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-background-color{background-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-background-color{background-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-background-color{background-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-background-color{background-color: var(--wp--preset--color--vivid-purple) !important;}.has-black-border-color{border-color: var(--wp--preset--color--black) !important;}.has-cyan-bluish-gray-border-color{border-color: var(--wp--preset--color--cyan-bluish-gray) !important;}.has-white-border-color{border-color: var(--wp--preset--color--white) !important;}.has-pale-pink-border-color{border-color: var(--wp--preset--color--pale-pink) !important;}.has-vivid-red-border-color{border-color: var(--wp--preset--color--vivid-red) !important;}.has-luminous-vivid-orange-border-color{border-color: var(--wp--preset--color--luminous-vivid-orange) !important;}.has-luminous-vivid-amber-border-color{border-color: var(--wp--preset--color--luminous-vivid-amber) !important;}.has-light-green-cyan-border-color{border-color: var(--wp--preset--color--light-green-cyan) !important;}.has-vivid-green-cyan-border-color{border-color: var(--wp--preset--color--vivid-green-cyan) !important;}.has-pale-cyan-blue-border-color{border-color: var(--wp--preset--color--pale-cyan-blue) !important;}.has-vivid-cyan-blue-border-color{border-color: var(--wp--preset--color--vivid-cyan-blue) !important;}.has-vivid-purple-border-color{border-color: var(--wp--preset--color--vivid-purple) !important;}.has-vivid-cyan-blue-to-vivid-purple-gradient-background{background: var(--wp--preset--gradient--vivid-cyan-blue-to-vivid-purple) !important;}.has-light-green-cyan-to-vivid-green-cyan-gradient-background{background: var(--wp--preset--gradient--light-green-cyan-to-vivid-green-cyan) !important;}.has-luminous-vivid-amber-to-luminous-vivid-orange-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-amber-to-luminous-vivid-orange) !important;}.has-luminous-vivid-orange-to-vivid-red-gradient-background{background: var(--wp--preset--gradient--luminous-vivid-orange-to-vivid-red) !important;}.has-very-light-gray-to-cyan-bluish-gray-gradient-background{background: var(--wp--preset--gradient--very-light-gray-to-cyan-bluish-gray) !important;}.has-cool-to-warm-spectrum-gradient-background{background: var(--wp--preset--gradient--cool-to-warm-spectrum) !important;}.has-blush-light-purple-gradient-background{background: var(--wp--preset--gradient--blush-light-purple) !important;}.has-blush-bordeaux-gradient-background{background: var(--wp--preset--gradient--blush-bordeaux) !important;}.has-luminous-dusk-gradient-background{background: var(--wp--preset--gradient--luminous-dusk) !important;}.has-pale-ocean-gradient-background{background: var(--wp--preset--gradient--pale-ocean) !important;}.has-electric-grass-gradient-background{background: var(--wp--preset--gradient--electric-grass) !important;}.has-midnight-gradient-background{background: var(--wp--preset--gradient--midnight) !important;}.has-small-font-size{font-size: var(--wp--preset--font-size--small) !important;}.has-medium-font-size{font-size: var(--wp--preset--font-size--medium) !important;}.has-large-font-size{font-size: var(--wp--preset--font-size--large) !important;}.has-x-large-font-size{font-size: var(--wp--preset--font-size--x-large) !important;}
</style>
<link rel='stylesheet' id='ccw_main_css-css'  href='https://mauricioduran.com/wp-content/plugins/click-to-chat-for-whatsapp/prev/assets/css/mainstyles.css?ver=2.10' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://mauricioduran.com/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.3.2' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-law-info-css'  href='https://mauricioduran.com/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-public.css?ver=1.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='cookie-law-info-gdpr-css'  href='https://mauricioduran.com/wp-content/plugins/cookie-law-info/public/css/cookie-law-info-gdpr.css?ver=1.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='https://mauricioduran.com/wp-content/plugins/revslider/public/assets/css/rs6.css?ver=6.1.5' type='text/css' media='all' />
<style id='rs-plugin-settings-inline-css' type='text/css'>
#rs-demo-id {}
</style>
<link rel='stylesheet' id='denta-theme-style-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/style.css?ver=1.0.0' type='text/css' media='screen, print' />

<style id='denta-style-inline-css' type='text/css'>

    .header_mid .header_mid_inner .logo_wrap {
        width : 175px;
    }

    .header_mid_inner .logo .logo_retina {
        width : 175px;
    }


    .header_top {
        height : 50px;
    }

    .header_top .meta_wrap > *{
        line-height : 50px;
    }
    
    ul.top_line_nav > li > a {
        line-height : 48px;
    }
    
    .header_mid {
        height : 120px;
    }
    
    .header_bot {
        height : 70px;
    }
    
    #page.cmsmasters_heading_after_header #middle, 
    #page.cmsmasters_heading_under_header #middle .headline .headline_outer {
        padding-top : 120px;
    }
    
    #page.cmsmasters_heading_after_header.enable_header_top #middle, 
    #page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer {
        padding-top : 170px;
    }
    
    #page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
    #page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer {
        padding-top : 190px;
    }
    
    #page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
    #page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
        padding-top : 240px;
    }
    
    @media only screen and (max-width: 1024px) {
        .header_top,
        .header_mid,
        .header_bot {
            height : auto !important;
        }
        
        .header_mid .header_mid_inner > div:not(.header_mid_interface),
        .header_mid .header_mid_inner .cmsmasters_header_cart_link ,
        .header_mid .header_mid_inner .resp_mid_nav_wrap ,
        .header_mid .header_mid_inner .cmsmasters_header_cart_link ,
        .header_mid .header_mid_inner .slogan_wrap ,
        .header_mid .header_mid_inner .mid_search_but_wrap {
            height : 120px;
        }
        
        #page.cmsmasters_heading_after_header #middle, 
        #page.cmsmasters_heading_under_header #middle .headline .headline_outer, 
        #page.cmsmasters_heading_after_header.enable_header_top #middle, 
        #page.cmsmasters_heading_under_header.enable_header_top #middle .headline .headline_outer, 
        #page.cmsmasters_heading_after_header.enable_header_bottom #middle, 
        #page.cmsmasters_heading_under_header.enable_header_bottom #middle .headline .headline_outer, 
        #page.cmsmasters_heading_after_header.enable_header_top.enable_header_bottom #middle, 
        #page.cmsmasters_heading_under_header.enable_header_top.enable_header_bottom #middle .headline .headline_outer {
            padding-top : 0 !important;
        }
    }
    
    @media only screen and (max-width: 768px) {
        .header_mid .header_mid_inner > div, 
        .header_bot .header_bot_inner > div,
        .header_mid .header_mid_inner > div:not(.header_mid_interface),
        .header_mid .header_mid_inner .cmsmasters_header_cart_link ,
        .header_mid .header_mid_inner .resp_mid_nav_wrap ,
        .header_mid .header_mid_inner .cmsmasters_header_cart_link ,
        .header_mid .header_mid_inner .slogan_wrap ,
        .header_mid .header_mid_inner .mid_search_but_wrap {
            height:auto;
        }
    }
    
    @media only screen and (max-width: 1024px) {
        .enable_header_centered .header_mid .header_mid_inner .cmsmasters_header_cart_link {
            height:auto;
        }
    }

</style>
<link rel='stylesheet' id='denta-adaptive-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/theme-framework/theme-style/css/adaptive.css?ver=1.0.0' type='text/css' media='screen, print' />
<link rel='stylesheet' id='denta-retina-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/theme-framework/theme-style/css/retina.css?ver=1.0.0' type='text/css' media='screen' />
<style id='denta-retina-inline-css' type='text/css'>
#cmsmasters_row_87v0q70mtp .cmsmasters_row_outer_parent { 
    padding-top: 0px; 
} 

#cmsmasters_row_87v0q70mtp .cmsmasters_row_outer_parent { 
    padding-bottom: 0px; 
} 


            @media only screen and (max-width: 320px) {
                #cmsmasters_row_87v0q70mtp .cmsmasters_row_outer_parent {
                    padding-top: 0px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_87v0q70mtp .cmsmasters_row_outer_parent {
                    padding-bottom: 0px;
                }
            }
            #cmsmasters_row_87v0q70mtp .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-left:0%; 
} 
#cmsmasters_row_87v0q70mtp .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-right:0%; 
} 

#rev_slider_2_1_wrapper .hermes.tp-bullets{}#rev_slider_2_1_wrapper .hermes .tp-bullet{overflow:hidden;  border-radius:50%;  width:16px;  height:16px;  background-color:rgba(0,0,0,0);  box-shadow:inset 0 0 0 2px #ffffff;  -webkit-transition:background 0.3s ease;  transition:background 0.3s ease;  position:absolute}#rev_slider_2_1_wrapper .hermes .tp-bullet:hover{background-color:rgba(0,0,0,0.21)}#rev_slider_2_1_wrapper .hermes .tp-bullet:after{content:' '; position:absolute; bottom:0; height:0; left:0; width:100%; background-color:#ffffff; box-shadow:0 0 1px #ffffff; -webkit-transition:height 0.3s ease; transition:height 0.3s ease}#rev_slider_2_1_wrapper .hermes .tp-bullet.selected:after{height:100%}#cmsmasters_row_krefisx25l { 
    background-image: url(https://mauricioduran.com/wp-content/uploads/2017/08/rectangle-9-copy-4-min-3-2.jpg); 
    background-position: top center; 
    background-repeat: no-repeat; 
    background-attachment: scroll; 
    background-size: cover; 
} 

#cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent { 
    padding-top: 30px; 
} 

#cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent { 
    padding-bottom: 80px; 
} 


            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-top: 30px;
                }
            }
            
            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-bottom: 30px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-top: 20px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-bottom: 50px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-top: 20px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-bottom: 35px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-top: 30px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_krefisx25l .cmsmasters_row_outer_parent {
                    padding-bottom: 25px;
                }
            }
            

#cmsmasters_heading_8msi8zv8e4 { 
    text-align:left; 
    margin-top:38px; 
    margin-bottom:0px; 
} 

#cmsmasters_heading_8msi8zv8e4 .cmsmasters_heading { 
    text-align:left; 
} 



#cmsmasters_heading_8msi8zv8e4 .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_8msi8zv8e4 .cmsmasters_heading_divider { 
} 




#cmsmasters_clients_kesaqqkle .cmsmasters_clients_item { height:100px; line-height:100px; } 
#cmsmasters_clients_kesaqqkle .cmsmasters_clients_item a { line-height:100px; } 

#cmsmasters_column_spa4ieohck .cmsmasters_column_inner { 
    padding: 5px 0 60px; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_spa4ieohck .cmsmasters_column_inner {
                    padding: 5px 0 50px;
                }
            }
            
#cmsmasters_divider_autp56lec7 { 
    border-bottom-width:1px; 
    border-bottom-style:solid; 
    margin-top:20px; 
    margin-bottom:0px; 
    border-bottom-color:#348395;
} 

#cmsmasters_column_4nh6g47xsi .cmsmasters_column_inner { 
    padding: 5px 0 60px; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_4nh6g47xsi .cmsmasters_column_inner {
                    padding: 5px 0 50px;
                }
            }
            

#cmsmasters_column_hxd4j3l8z { 
    background-color:rgba(10,96,118,0.3);
    border-width:20px; 
    border-color:rgba(158,158,158,0);
    -webkit-border-radius:20px 20px 20px 20px; 
    border-radius:20px 20px 20px 20px; overflow:hidden;
} 

#cmsmasters_column_hxd4j3l8z .cmsmasters_column_inner { 
    padding: 10% 10% 10% 10%; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_hxd4j3l8z .cmsmasters_column_inner {
                    padding: 0 10%;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_column_hxd4j3l8z .cmsmasters_column_inner {
                    padding: 0 5%;
                }
            }
            
#cmsmasters_icon_4f065lgryk { 
    display:block; 
    text-align:center; } 


#cmsmasters_icon_4f065lgryk a:hover .cmsmasters_simple_icon {} 
#cmsmasters_icon_4f065lgryk .cmsmasters_simple_icon_title { 
    color:#29ceff;} 
#cmsmasters_icon_4f065lgryk a:hover .cmsmasters_simple_icon_title {} 


#cmsmasters_heading_fl68kbfyh3 { 
    text-align:center; 
    margin-top:20px; 
    margin-bottom:30px; 
} 

#cmsmasters_heading_fl68kbfyh3 .cmsmasters_heading { 
    text-align:center; 
} 


#cmsmasters_heading_fl68kbfyh3 .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_fl68kbfyh3 .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_l7bi6w0kd { 
    text-align:center; 
    margin-top:10px; 
    margin-bottom:30px; 
} 

#cmsmasters_heading_l7bi6w0kd .cmsmasters_heading { 
    text-align:center; 
} 



#cmsmasters_heading_l7bi6w0kd .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_l7bi6w0kd .cmsmasters_heading_divider { 
} 



#cmsmasters_button_u1h0keibig { 
    
    text-align:center; 
    
} 

#cmsmasters_button_u1h0keibig .cmsmasters_button:before { 
    margin-right:.5em; 
    margin-left:0; 
    vertical-align:baseline; 
} 

#cmsmasters_button_u1h0keibig .cmsmasters_button { 
    line-height:26px; 
    padding-right:20px; 
    padding-left:20px; 
    background-color:rgba(255,255,255,0.2);-webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
} 
#cmsmasters_button_u1h0keibig .cmsmasters_button:hover { 
    background-color:#ffffff;-webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
    color:#0a6076;
} 


#cmsmasters_divider_z7zrrx8s9 { 
    border-bottom-width:0px; 
    border-bottom-style:solid; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_column_q26amddodm { 
    background-color:rgba(10,96,118,0.3);
    -webkit-border-radius:20px 20px 20px 20px ; 
    border-radius:20px 20px 20px 20px ; overflow:hidden;
} 

#cmsmasters_column_q26amddodm .cmsmasters_column_inner { 
    padding: 10% 10% 10% 10%; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_q26amddodm .cmsmasters_column_inner {
                    padding: 0 10%;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_column_q26amddodm .cmsmasters_column_inner {
                    padding: 0 5%;
                }
            }
            
#cmsmasters_icon_p4mej0vkwe { 
    display:block; 
    text-align:center; } 

#cmsmasters_icon_p4mej0vkwe .cmsmasters_simple_icon { 
    border-width:0px; 
    width:80px; 
    height:80px; 
    font-size:60px; 
    line-height:80px; 
    text-align:center; 
    -webkit-border-radius:50%; 
    border-radius:50%; 
    color:#25e7d7;} 
#cmsmasters_icon_p4mej0vkwe a:hover .cmsmasters_simple_icon {} 
#cmsmasters_icon_p4mej0vkwe .cmsmasters_simple_icon_title { 
    color:#25e7d7;} 
#cmsmasters_icon_p4mej0vkwe a:hover .cmsmasters_simple_icon_title {} 


#cmsmasters_heading_kozbqtohjo { 
    text-align:center; 
    margin-top:20px; 
    margin-bottom:30px; 
} 

#cmsmasters_heading_kozbqtohjo .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_kozbqtohjo .cmsmasters_heading, #cmsmasters_heading_kozbqtohjo .cmsmasters_heading a { 
    font-size:36px; 
    color:#ffffff;
} 

#cmsmasters_heading_kozbqtohjo .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_kozbqtohjo .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_fwbqv1yi4f { 
    text-align:center; 
    margin-top:10px; 
    margin-bottom:30px; 
} 

#cmsmasters_heading_fwbqv1yi4f .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_fwbqv1yi4f .cmsmasters_heading, #cmsmasters_heading_fwbqv1yi4f .cmsmasters_heading a { 
    font-family:'Arimo'; 
    font-size:16px; 
    line-height:26px; 
    color:#ffffff;
} 

#cmsmasters_heading_fwbqv1yi4f .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_fwbqv1yi4f .cmsmasters_heading_divider { 
} 



#cmsmasters_button_32x9ntagaq { 
    
    text-align:center; 
    
} 

#cmsmasters_button_32x9ntagaq .cmsmasters_button:before { 
    margin-right:.5em; 
    margin-left:0; 
    vertical-align:baseline; 
} 

#cmsmasters_button_32x9ntagaq .cmsmasters_button { 
    line-height:26px; 
    padding-right:20px; 
    padding-left:20px; 
    background-color:rgba(255,255,255,0.2);-webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
} 
#cmsmasters_button_32x9ntagaq .cmsmasters_button:hover { 
    background-color:#ffffff;-webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
    color:#0a6076;
} 


#cmsmasters_divider_1f6eyxbotj { 
    border-bottom-width:0px; 
    border-bottom-style:solid; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_column_mi5l2gcqha { 
    background-color:rgba(10,96,118,0.3);
    -webkit-border-radius:20px 20px 20px 20px ; 
    border-radius:20px 20px 20px 20px ; overflow:hidden;
} 

#cmsmasters_column_mi5l2gcqha .cmsmasters_column_inner { 
    padding: 10% 10% 10% 10%; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_mi5l2gcqha .cmsmasters_column_inner {
                    padding: 0 10%;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_column_mi5l2gcqha .cmsmasters_column_inner {
                    padding: 0 5%;
                }
            }
            
#cmsmasters_icon_654ixwbu5j { 
    display:block; 
    text-align:center; } 

#cmsmasters_icon_654ixwbu5j .cmsmasters_simple_icon { 
    border-width:0px; 
    width:80px; 
    height:80px; 
    font-size:60px; 
    line-height:80px; 
    text-align:center; 
    -webkit-border-radius:50%; 
    border-radius:50%; 
    color:#54e9af;} 
#cmsmasters_icon_654ixwbu5j a:hover .cmsmasters_simple_icon {} 
#cmsmasters_icon_654ixwbu5j .cmsmasters_simple_icon_title { 
    color:#54e9af;} 
#cmsmasters_icon_654ixwbu5j a:hover .cmsmasters_simple_icon_title {} 


#cmsmasters_heading_xhbkshzouh { 
    text-align:center; 
    margin-top:20px; 
    margin-bottom:30px; 
} 

#cmsmasters_heading_xhbkshzouh .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_xhbkshzouh .cmsmasters_heading, #cmsmasters_heading_xhbkshzouh .cmsmasters_heading a { 
    font-size:36px; 
    color:#ffffff;
} 

#cmsmasters_heading_xhbkshzouh .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_xhbkshzouh .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_j8uaa7y3z6 { 
    text-align:center; 
    margin-top:10px; 
    margin-bottom:30px; 
} 

#cmsmasters_heading_j8uaa7y3z6 .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_j8uaa7y3z6 .cmsmasters_heading, #cmsmasters_heading_j8uaa7y3z6 .cmsmasters_heading a { 
    font-family:'Arimo'; 
    font-size:16px; 
    line-height:26px; 
    color:#ffffff;
} 

#cmsmasters_heading_j8uaa7y3z6 .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_j8uaa7y3z6 .cmsmasters_heading_divider { 
} 



#cmsmasters_button_vvt6rho4nn { 
    
    text-align:center; 
    
} 

#cmsmasters_button_vvt6rho4nn .cmsmasters_button:before { 
    margin-right:.5em; 
    margin-left:0; 
    vertical-align:baseline; 
} 

#cmsmasters_button_vvt6rho4nn .cmsmasters_button { 
    line-height:26px; 
    padding-right:20px; 
    padding-left:20px; 
    background-color:rgba(255,255,255,0.2);-webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
} 
#cmsmasters_button_vvt6rho4nn .cmsmasters_button:hover { 
    background-color:#ffffff;-webkit-box-shadow: none;
                -moz-box-shadow: none;
                box-shadow: none;
    color:#0a6076;
} 


#cmsmasters_divider_arrnwtfml { 
    border-bottom-width:0px; 
    border-bottom-style:solid; 
    margin-top:0px; 
    margin-bottom:20px; 
} 
#cmsmasters_row_mrxier2s5v { 
    background-color:#ffffff;
} 

#cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent { 
    padding-top: 120px; 
} 

#cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent { 
    padding-bottom: 70px; 
} 


            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-top: 40px;
                }
            }
            
            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-bottom: 40px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-top: 40px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-bottom: 40px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-top: 40px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-bottom: 40px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-top: 50px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_mrxier2s5v .cmsmasters_row_outer_parent {
                    padding-bottom: 25px;
                }
            }
            

#cmsmasters_heading_vkgy5x62qm { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:0px; 
} 

#cmsmasters_heading_vkgy5x62qm .cmsmasters_heading { 
    text-align:center; 
    background-color:#ffffff;
    padding-left:1em; 
    padding-right:1em; 
} 

#cmsmasters_heading_vkgy5x62qm .cmsmasters_heading, #cmsmasters_heading_vkgy5x62qm .cmsmasters_heading a { 
    font-family:'Fira Sans'; 
    font-size:38px; 
    line-height:48px; 
    font-weight:300; 
    color:#1c1e24;
} 

#cmsmasters_heading_vkgy5x62qm .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_vkgy5x62qm .cmsmasters_heading_divider { 
} 


#cmsmasters_row_qiaf46nojh { 
    background-color:#ffffff;
} 

#cmsmasters_row_qiaf46nojh .cmsmasters_row_outer_parent { 
    padding-top: 0px; 
} 

#cmsmasters_row_qiaf46nojh .cmsmasters_row_outer_parent { 
    padding-bottom: 90px; 
} 


            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_qiaf46nojh .cmsmasters_row_outer_parent {
                    padding-bottom: 0px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_qiaf46nojh .cmsmasters_row_outer_parent {
                    padding-bottom: 0px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_qiaf46nojh .cmsmasters_row_outer_parent {
                    padding-bottom: 0px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_qiaf46nojh .cmsmasters_row_outer_parent {
                    padding-top: 25px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_qiaf46nojh .cmsmasters_row_outer_parent {
                    padding-bottom: 0px;
                }
            }
            

#cmsmasters_slider_2yhfwtaddd{
padding-bottom: 0;
}
#cmsmasters_column_cz8cozd2h8{
    margin-bottom: 0;
}#cmsmasters_row_uat9820e6s .cmsmasters_row_outer_parent { 
    padding-top: 0px; 
} 

#cmsmasters_row_uat9820e6s .cmsmasters_row_outer_parent { 
    padding-bottom: 0px; 
} 


            #cmsmasters_row_uat9820e6s {
                margin-top: -1px;
            }
            
@media only screen and (max-width: 1024px) {
       #cmsmasters_row_krefisx25l .cmsmasters_row_inner:nth-child(1) .cmsmasters_row_margin.cmsmasters_row_columns_behavior{
            display: block;
        }

#cmsmasters_column_hxd4j3l8z,
#cmsmasters_column_q26amddodm,
#cmsmasters_column_mi5l2gcqha{
        margin-bottom: 20px;
}

    #cmsmasters_column_hsj5eysij5{
        width: 100%;
    }
}#cmsmasters_row_x6b69c0tqc { 
    background-color:#0b6479;
} 

#cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent { 
    padding-top: 80px; 
} 

#cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent { 
    padding-bottom: 80px; 
} 


            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-top: 30px;
                }
            }
            
            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-bottom: 30px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-top: 20px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-bottom: 50px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-top: 20px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-bottom: 35px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-top: 30px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_x6b69c0tqc .cmsmasters_row_outer_parent {
                    padding-bottom: 25px;
                }
            }
            
#cmsmasters_column_hd783fvb7p .cmsmasters_column_inner { 
    padding: 7% 32% 7% 0%; 
} 


            @media only screen and (max-width: 1024px) {
                #cmsmasters_column_hd783fvb7p .cmsmasters_column_inner {
                    padding: 7% 10% 7% 0%;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_column_hd783fvb7p .cmsmasters_column_inner {
                    padding: 7% 10% 7% 0%;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_column_hd783fvb7p .cmsmasters_column_inner {
                    padding: 0 5%;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_column_hd783fvb7p .cmsmasters_column_inner {
                    padding: 0 0%;
                }
            }
            
#cmsmasters_heading_ji8wk1bb0m { 
    text-align:left; 
    margin-top:0px; 
    margin-bottom:0px; 
} 

#cmsmasters_heading_ji8wk1bb0m .cmsmasters_heading { 
    text-align:left; 
} 

#cmsmasters_heading_ji8wk1bb0m .cmsmasters_heading, #cmsmasters_heading_ji8wk1bb0m .cmsmasters_heading a { 
    font-family:'Fira Sans'; 
    font-size:22px; 
    line-height:28px; 
    font-weight:300; 
    color:#19bfd1;
} 

#cmsmasters_heading_ji8wk1bb0m .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_ji8wk1bb0m .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_zk1jtzcqg { 
    text-align:left; 
    margin-top:20px; 
    margin-bottom:30px; 
} 

#cmsmasters_heading_zk1jtzcqg .cmsmasters_heading { 
    text-align:left; 
} 

#cmsmasters_heading_zk1jtzcqg .cmsmasters_heading, #cmsmasters_heading_zk1jtzcqg .cmsmasters_heading a { 
    font-size:38px; 
    line-height:44px; 
    color:#ffffff;
} 

#cmsmasters_heading_zk1jtzcqg .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_zk1jtzcqg .cmsmasters_heading_divider { 
} 



#cmsmasters_column_31vrmatqwr { 
    background-color:rgba(255,255,255,0.95);
    -webkit-border-radius:20px 20px 20px 20px; 
    border-radius:20px 20px 20px 20px; overflow:hidden;
} 

#cmsmasters_column_31vrmatqwr .cmsmasters_column_inner { 
    padding: 7% 7% 7% 7%; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_31vrmatqwr .cmsmasters_column_inner {
                    padding: 30px 10%;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_column_31vrmatqwr .cmsmasters_column_inner {
                    padding: 30px 10%;
                }
            }
            #cmsmasters_row_4fpvrofujh .cmsmasters_row_outer_parent { 
    padding-top: 0px; 
} 

#cmsmasters_row_4fpvrofujh .cmsmasters_row_outer_parent { 
    padding-bottom: 0px; 
} 

#cmsmasters_row_4fpvrofujh .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-left:0%; 
} 
#cmsmasters_row_4fpvrofujh .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-right:0%; 
} 

.safari_only #cmsmasters_fb_13mgyiau9y .featured_block_inner, 
.safari_mobile_only #cmsmasters_fb_13mgyiau9y .featured_block_inner{
    padding-bottom: 100%;

}

@media only screen and (min-width: 768px) {

        #cmsmasters_column_zgbeh0uc1j{margin: 0;}

}

@media only screen and (max-width: 768px) {

#cmsmasters_column_zgbeh0uc1j{
    margin: 0 0 -35%;
}


.safari_only #cmsmasters_fb_13mgyiau9y .featured_block_inner, 
.safari_mobile_only #cmsmasters_fb_13mgyiau9y .featured_block_inner{
    padding-bottom: 10%;

}

}
#cmsmasters_row_5ioidx849 { 
    background-color:#e3eef3;
} 

#cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent { 
    padding-top: 80px; 
} 

#cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent { 
    padding-bottom: 115px; 
} 


            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-top: 30px;
                }
            }
            
            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-bottom: 15px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-top: 30px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-bottom: 30px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-top: 20px;
                }
            }
            
            @media only screen and (max-width: 540px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-bottom: 20px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-top: 0px;
                }
            }
            
            @media only screen and (max-width: 320px) {
                #cmsmasters_row_5ioidx849 .cmsmasters_row_outer_parent {
                    padding-bottom: 40px;
                }
            }
            #cmsmasters_row_5ioidx849 .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-left:15%; 
} 
#cmsmasters_row_5ioidx849 .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-right:15%; 
} 

#cmsmasters_column_hm4qo0uu6b { 
    -webkit-border-radius:20px 20px 20px 20px ; 
    border-radius:20px 20px 20px 20px ; overflow:hidden;
} 

#cmsmasters_column_hm4qo0uu6b .cmsmasters_column_inner { 
    padding: 0% 6% 0% 6%; 
} 


#cmsmasters_icon_box_1id3jkgjtc { 
    border-width:0px; 
} 

#cmsmasters_icon_box_1id3jkgjtc:before, 
#cmsmasters_icon_box_1id3jkgjtc .icon_box_heading:before { 
    font-size:80px; 
    line-height:150px; 
    width:150px; 
    height:150px; 
    border-width:0px; 
    -webkit-border-radius:50%; 
    border-radius:50%; 
    color:#3ebcda;
    background-color:#ffffff;
} 

#cmsmasters_icon_box_1id3jkgjtc { 
    padding-top:180px; } 

#cmsmasters_icon_box_1id3jkgjtc:before, 
#cmsmasters_icon_box_1id3jkgjtc .icon_box_heading:before { 
    margin-left:-75px; 
    } 

#cmsmasters_icon_box_1id3jkgjtc.cmsmasters_icon_top { 
    padding-top:210px; 
    } 



#cmsmasters_heading_1pm6dc3xb { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_1pm6dc3xb .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_1pm6dc3xb .cmsmasters_heading, #cmsmasters_heading_1pm6dc3xb .cmsmasters_heading a { 
    font-size:32px; 
    color:#32a8c9;
} 

#cmsmasters_heading_1pm6dc3xb .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_1pm6dc3xb .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_wurssmfod { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_wurssmfod .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_wurssmfod .cmsmasters_heading, #cmsmasters_heading_wurssmfod .cmsmasters_heading a { 
    font-family:'Arimo'; 
    font-size:16px; 
    line-height:26px; 
    color:#4a4f52;
} 

#cmsmasters_heading_wurssmfod .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_wurssmfod .cmsmasters_heading_divider { 
} 



#cmsmasters_column_9v99e0qndg .cmsmasters_column_inner { 
    padding: 0% 6% 0% 6%; 
} 


#cmsmasters_icon_box_1pox7xbdl6 { 
    border-width:0px; 
} 

#cmsmasters_icon_box_1pox7xbdl6:before, 
#cmsmasters_icon_box_1pox7xbdl6 .icon_box_heading:before { 
    font-size:80px; 
    line-height:150px; 
    width:150px; 
    height:150px; 
    border-width:0px; 
    -webkit-border-radius:50%; 
    border-radius:50%; 
    color:#28c1ce;
    background-color:#ffffff;
} 

#cmsmasters_icon_box_1pox7xbdl6 { 
    padding-top:180px; } 

#cmsmasters_icon_box_1pox7xbdl6:before, 
#cmsmasters_icon_box_1pox7xbdl6 .icon_box_heading:before { 
    margin-left:-75px; 
    } 

#cmsmasters_icon_box_1pox7xbdl6.cmsmasters_icon_top { 
    padding-top:210px; 
    } 



#cmsmasters_heading_h4dzav1new { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_h4dzav1new .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_h4dzav1new .cmsmasters_heading, #cmsmasters_heading_h4dzav1new .cmsmasters_heading a { 
    font-size:32px; 
    color:#22a8b5;
} 

#cmsmasters_heading_h4dzav1new .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_h4dzav1new .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_vb4a1q7957 { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_vb4a1q7957 .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_vb4a1q7957 .cmsmasters_heading, #cmsmasters_heading_vb4a1q7957 .cmsmasters_heading a { 
    font-family:'Arimo'; 
    font-size:16px; 
    line-height:26px; 
    color:#4a4f52;
} 

#cmsmasters_heading_vb4a1q7957 .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_vb4a1q7957 .cmsmasters_heading_divider { 
} 



#cmsmasters_column_0mn6ah96sv .cmsmasters_column_inner { 
    padding: 0% 6% 0% 6%; 
} 


#cmsmasters_icon_box_libyun9wc { 
    border-width:0px; 
} 

#cmsmasters_icon_box_libyun9wc:before, 
#cmsmasters_icon_box_libyun9wc .icon_box_heading:before { 
    font-size:80px; 
    line-height:150px; 
    width:150px; 
    height:150px; 
    border-width:0px; 
    -webkit-border-radius:50%; 
    border-radius:50%; 
    color:#23c6ae;
    background-color:#ffffff;
} 

#cmsmasters_icon_box_libyun9wc { 
    padding-top:180px; } 

#cmsmasters_icon_box_libyun9wc:before, 
#cmsmasters_icon_box_libyun9wc .icon_box_heading:before { 
    margin-left:-75px; 
    } 

#cmsmasters_icon_box_libyun9wc.cmsmasters_icon_top { 
    padding-top:210px; 
    } 



#cmsmasters_heading_wahb3zr2je { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_wahb3zr2je .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_wahb3zr2je .cmsmasters_heading, #cmsmasters_heading_wahb3zr2je .cmsmasters_heading a { 
    font-size:32px; 
    color:#20b599;
} 

#cmsmasters_heading_wahb3zr2je .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_wahb3zr2je .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_w2b6surwge { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_w2b6surwge .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_w2b6surwge .cmsmasters_heading, #cmsmasters_heading_w2b6surwge .cmsmasters_heading a { 
    font-family:'Arimo'; 
    font-size:16px; 
    line-height:26px; 
    color:#4a4f52;
} 

#cmsmasters_heading_w2b6surwge .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_w2b6surwge .cmsmasters_heading_divider { 
} 



#cmsmasters_column_o4aniea74 .cmsmasters_column_inner { 
    padding: 0% 6% 0% 6%; 
} 


#cmsmasters_icon_box_u3c2kwkr5j { 
    border-width:0px; 
} 

#cmsmasters_icon_box_u3c2kwkr5j:before, 
#cmsmasters_icon_box_u3c2kwkr5j .icon_box_heading:before { 
    font-size:80px; 
    line-height:150px; 
    width:150px; 
    height:150px; 
    border-width:0px; 
    -webkit-border-radius:50%; 
    border-radius:50%; 
    color:#45da88;
    background-color:#ffffff;
} 

#cmsmasters_icon_box_u3c2kwkr5j { 
    padding-top:180px; } 

#cmsmasters_icon_box_u3c2kwkr5j:before, 
#cmsmasters_icon_box_u3c2kwkr5j .icon_box_heading:before { 
    margin-left:-75px; 
    } 

#cmsmasters_icon_box_u3c2kwkr5j.cmsmasters_icon_top { 
    padding-top:210px; 
    } 



#cmsmasters_heading_v9r1kwu5e { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_v9r1kwu5e .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_v9r1kwu5e .cmsmasters_heading, #cmsmasters_heading_v9r1kwu5e .cmsmasters_heading a { 
    font-size:32px; 
    color:#3bba78;
} 

#cmsmasters_heading_v9r1kwu5e .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_v9r1kwu5e .cmsmasters_heading_divider { 
} 



#cmsmasters_heading_0sfho3jni1 { 
    text-align:center; 
    margin-top:0px; 
    margin-bottom:20px; 
} 

#cmsmasters_heading_0sfho3jni1 .cmsmasters_heading { 
    text-align:center; 
} 

#cmsmasters_heading_0sfho3jni1 .cmsmasters_heading, #cmsmasters_heading_0sfho3jni1 .cmsmasters_heading a { 
    font-family:'Arimo'; 
    font-size:16px; 
    line-height:26px; 
    color:#4a4f52;
} 

#cmsmasters_heading_0sfho3jni1 .cmsmasters_heading a:hover { 
} 

#cmsmasters_heading_0sfho3jni1 .cmsmasters_heading_divider { 
} 


 @media screen and (max-width: 1440px) and  (min-width: 1024px){
     #cmsmasters_row_h53s5vwgfl .cmsmasters_icon_box::before{
        line-height: 160px;
        width: 160px;
        height: 160px;
        margin-left: -70px;
     }       
}#cmsmasters_row_af06ucr4aj { 
    background-image: url(https://mauricioduran.com/wp-content/uploads/2017/08/rectangle-9-copy-5-2.jpg); 
    background-position: top center; 
    background-repeat: no-repeat; 
    background-attachment: scroll; 
    background-size: cover; 
} 

#cmsmasters_row_af06ucr4aj .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-left:0%; 
} 
#cmsmasters_row_af06ucr4aj .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-right:0%; 
} 

#cmsmasters_column_me88xxzzix { 
    background-image: url(https://mauricioduran.com/wp-content/uploads/2017/08/e12-1-2.png); 
    background-position: center left; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    background-size: auto; 
    position: static; 
} 

#cmsmasters_column_me88xxzzix .cmsmasters_column_inner { 
    padding: 95px 15% 35px; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_me88xxzzix .cmsmasters_column_inner {
                    padding: 75px 15% 15px;
                }
            }
            
#cmsmasters_counters_3v6fv1n55 .cmsmasters_counter.counter_has_icon .cmsmasters_counter_inner, 
#cmsmasters_counters_3v6fv1n55 .cmsmasters_counter.counter_has_image .cmsmasters_counter_inner { 
    padding-top:34px; 
} 

#cmsmasters_counters_3v6fv1n55.counters_type_horizontal .cmsmasters_counter.counter_has_icon .cmsmasters_counter_subtitle, 
#cmsmasters_counters_3v6fv1n55.counters_type_horizontal .cmsmasters_counter.counter_has_image .cmsmasters_counter_subtitle { 
    padding-left:44px; 
} 

#cmsmasters_counters_3v6fv1n55.counters_type_vertical .cmsmasters_counter .cmsmasters_counter_inner:before { 
    margin-left:-12px; 
} 

#cmsmasters_counters_3v6fv1n55.counters_type_horizontal .cmsmasters_counter .cmsmasters_counter_inner .cmsmasters_counter_counter_wrap { 
    line-height:24px; 
} 

#cmsmasters_counters_3v6fv1n55 .cmsmasters_counter .cmsmasters_counter_inner:before { 
    font-size:50px; 
    line-height:24px; 
    width:24px; 
    height:24px; 
    border-width:0px; 
    -webkit-border-radius:50%; 
    border-radius:50%; 
} 


#cmsmasters_counter_prydc1omi .cmsmasters_counter_inner:before { 
} 

#cmsmasters_counter_prydc1omi .cmsmasters_counter_counter_wrap { 
    color:#ffffff;
} 

#cmsmasters_counter_90tjqr8lw .cmsmasters_counter_inner:before { 
} 

#cmsmasters_counter_90tjqr8lw .cmsmasters_counter_counter_wrap { 
    color:#ffffff;
} 

#cmsmasters_counter_beobtdd6v .cmsmasters_counter_inner:before { 
} 

#cmsmasters_counter_beobtdd6v .cmsmasters_counter_counter_wrap { 
    color:#ffffff;
} 

#cmsmasters_counter_hxwk3l8ejo .cmsmasters_counter_inner:before { 
} 

#cmsmasters_counter_hxwk3l8ejo .cmsmasters_counter_counter_wrap { 
    color:#ffffff;
} 

#cmsmasters_counter_zllxlqjjp .cmsmasters_counter_inner:before { 
} 

#cmsmasters_counter_zllxlqjjp .cmsmasters_counter_counter_wrap { 
    color:#ffffff;
} 
#cmsmasters_row_mnx8bym622 .cmsmasters_row_outer_parent { 
    padding-top: 130px; 
} 

#cmsmasters_row_mnx8bym622 .cmsmasters_row_outer_parent { 
    padding-bottom: 375px; 
} 


            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_mnx8bym622 .cmsmasters_row_outer_parent {
                    padding-top: 30px;
                }
            }
            
            @media only screen and (max-width: 1024px) {
                #cmsmasters_row_mnx8bym622 .cmsmasters_row_outer_parent {
                    padding-bottom: 320px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_mnx8bym622 .cmsmasters_row_outer_parent {
                    padding-top: 100px;
                }
            }
            
            @media only screen and (max-width: 768px) {
                #cmsmasters_row_mnx8bym622 .cmsmasters_row_outer_parent {
                    padding-bottom: 255px;
                }
            }
            
#cmsmasters_row_owjfk9a7s { 
    background-image: url(https://mauricioduran.com/wp-content/uploads/2017/08/rectangle-9-copy-5-2.jpg); 
    background-position: top center; 
    background-repeat: no-repeat; 
    background-attachment: scroll; 
    background-size: cover; 
} 

#cmsmasters_row_owjfk9a7s .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-left:0%; 
} 
#cmsmasters_row_owjfk9a7s .cmsmasters_row_inner.cmsmasters_row_fullwidth { 
    padding-right:0%; 
} 

#cmsmasters_column_k26izi6vh { 
    background-image: url(https://mauricioduran.com/wp-content/uploads/2017/08/e12-1-2.png); 
    background-position: center left; 
    background-repeat: no-repeat; 
    background-attachment: fixed; 
    background-size: auto; 
    position: static; 
} 

#cmsmasters_column_k26izi6vh .cmsmasters_column_inner { 
    padding: 95px 15% 35px; 
} 


            @media only screen and (max-width: 768px) {
                #cmsmasters_column_k26izi6vh .cmsmasters_column_inner {
                    padding: 75px 15% 15px;
                }
            }
            
#cmsmasters_fb_4u5a3hbibm { 
    padding-top:0px; 
    padding-bottom:0px; 
} 

#cmsmasters_fb_4u5a3hbibm .featured_block_inner { 
    width: 100%; 
    text-align: left; 
    margin:0 auto; 
} 

#cmsmasters_fb_4u5a3hbibm .featured_block_text { 
    text-align: left; 
} 


#cmsmasters_row_mcg50w9x2 .cmsmasters_row_outer_parent { 
    padding-top: 0px; 
} 

#cmsmasters_row_mcg50w9x2 .cmsmasters_row_outer_parent { 
    padding-bottom: 50px; 
} 



</style>
<link rel='stylesheet' id='denta-icons-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/css/fontello.css?ver=1.0.0' type='text/css' media='screen' />
<link rel='stylesheet' id='denta-icons-custom-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/theme-vars/theme-style/css/fontello-custom.css?ver=1.0.0' type='text/css' media='screen' />
<link rel='stylesheet' id='animate-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/css/animate.css?ver=1.0.0' type='text/css' media='screen' />
<link rel='stylesheet' id='ilightbox-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/css/ilightbox.css?ver=2.2.0' type='text/css' media='screen' />
<link rel='stylesheet' id='ilightbox-skin-dark-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/css/ilightbox-skins/dark-skin.css?ver=2.2.0' type='text/css' media='screen' />
<link rel='stylesheet' id='denta-theme-vars-style-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/theme-vars/theme-style/css/vars-style.css?ver=1.0.0' type='text/css' media='screen, print' />
<link rel='stylesheet' id='denta-gutenberg-frontend-style-css'  href='https://mauricioduran.com/wp-content/themes/MD2020/gutenberg/cmsmasters-framework/theme-style/css/frontend-style.css?ver=1.0.0' type='text/css' media='screen' />





	<script type='text/javascript' id='layerslider-greensock-js-extra'>
/* <![CDATA[ */
var LS_Meta = {"v":"6.10.0"};
/* ]]> */
</script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/LayerSlider/static/layerslider/js/greensock.js?ver=1.19.0' id='layerslider-greensock-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-includes/js/jquery/jquery.min.js?ver=3.6.0' id='jquery-core-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-includes/js/jquery/jquery-migrate.min.js?ver=3.3.2' id='jquery-migrate-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.kreaturamedia.jquery.js?ver=6.10.0' id='layerslider-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/LayerSlider/static/layerslider/js/layerslider.transitions.js?ver=6.10.0' id='layerslider-transitions-js'></script>
<script type='text/javascript' id='cookie-law-info-js-extra'>
/* <![CDATA[ */
var Cli_Data = {"nn_cookie_ids":[],"cookielist":[],"ccpaEnabled":"","ccpaRegionBased":"","ccpaBarEnabled":"","ccpaType":"gdpr","js_blocking":"1","custom_integration":""};
var cli_cookiebar_settings = {"animate_speed_hide":"500","animate_speed_show":"500","background":"#FFF","border":"#b1a6a6c2","border_on":"","button_1_button_colour":"#61a229","button_1_button_hover":"#4e8221","button_1_link_colour":"#fff","button_1_as_button":"1","button_1_new_win":"","button_2_button_colour":"#333","button_2_button_hover":"#292929","button_2_link_colour":"#444","button_2_as_button":"","button_2_hidebar":"","button_3_button_colour":"#3566bb","button_3_button_hover":"#2a5296","button_3_link_colour":"#fff","button_3_as_button":"1","button_3_new_win":"","button_4_button_colour":"#000","button_4_button_hover":"#000000","button_4_link_colour":"#333333","button_4_as_button":"","font_family":"inherit","header_fix":"","notify_animate_hide":"1","notify_animate_show":"","notify_div_id":"#cookie-law-info-bar","notify_position_horizontal":"right","notify_position_vertical":"bottom","scroll_close":"","scroll_close_reload":"","accept_close_reload":"","reject_close_reload":"","showagain_tab":"1","showagain_background":"#fff","showagain_border":"#000","showagain_div_id":"#cookie-law-info-again","showagain_x_position":"100px","text":"#333333","show_once_yn":"","show_once":"10000","logging_on":"","as_popup":"","popup_overlay":"1","bar_heading_text":"","cookie_bar_as":"banner","popup_showagain_position":"bottom-right","widget_position":"left"};
var log_object = {"ajax_url":"https:\/\/mauricioduran.com\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/cookie-law-info/public/js/cookie-law-info-public.js?ver=1.9.0' id='cookie-law-info-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/revslider/public/assets/js/rs6.min.js?ver=6.1.5' id='revmin-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/debounced-resize.min.js?ver=1.0.0' id='debounced-resize-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/modernizr.min.js?ver=1.0.0' id='modernizr-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/respond.min.js?ver=1.0.0' id='respond-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/jquery.iLightBox.min.js?ver=2.2.0' id='iLightBox-js'></script>
<meta name="generator" content="Powered by LayerSlider 6.10.0 - Multi-Purpose, Responsive, Parallax, Mobile-Friendly Slider Plugin for WordPress." />
<!-- LayerSlider updates and docs at: https://layerslider.kreaturamedia.com -->
<link rel="https://api.w.org/" href="https://mauricioduran.com/wp-json/" /><link rel="alternate" type="application/json" href="https://mauricioduran.com/wp-json/wp/v2/pages/505" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://mauricioduran.com/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://mauricioduran.com/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 5.9.3" />
<link rel="canonical" href="https://mauricioduran.com/" />
<link rel='shortlink' href='https://mauricioduran.com/' />
<link rel="alternate" type="application/json+oembed" href="https://mauricioduran.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmauricioduran.com%2F" />
<link rel="alternate" type="text/xml+oembed" href="https://mauricioduran.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Fmauricioduran.com%2F&#038;format=xml" />
			<script type="text/javascript">
				var cli_flush_cache = true;
			</script>
<link rel="icon" href="https://mauricioduran.com/wp-content/uploads/2019/03/cropped-logo-md-withe-copia-1-32x32.png" sizes="32x32" />
<link rel="icon" href="https://mauricioduran.com/wp-content/uploads/2019/03/cropped-logo-md-withe-copia-1-192x192.png" sizes="192x192" />
<link rel="apple-touch-icon" href="https://mauricioduran.com/wp-content/uploads/2019/03/cropped-logo-md-withe-copia-1-180x180.png" />
<meta name="msapplication-TileImage" content="https://mauricioduran.com/wp-content/uploads/2019/03/cropped-logo-md-withe-copia-1-270x270.png" />
<script type="text/javascript">function setREVStartSize(t){try{var h,e=document.getElementById(t.c).parentNode.offsetWidth;if(e=0===e||isNaN(e)?window.innerWidth:e,t.tabw=void 0===t.tabw?0:parseInt(t.tabw),t.thumbw=void 0===t.thumbw?0:parseInt(t.thumbw),t.tabh=void 0===t.tabh?0:parseInt(t.tabh),t.thumbh=void 0===t.thumbh?0:parseInt(t.thumbh),t.tabhide=void 0===t.tabhide?0:parseInt(t.tabhide),t.thumbhide=void 0===t.thumbhide?0:parseInt(t.thumbhide),t.mh=void 0===t.mh||""==t.mh||"auto"===t.mh?0:parseInt(t.mh,0),"fullscreen"===t.layout||"fullscreen"===t.l)h=Math.max(t.mh,window.innerHeight);else{for(var i in t.gw=Array.isArray(t.gw)?t.gw:[t.gw],t.rl)void 0!==t.gw[i]&&0!==t.gw[i]||(t.gw[i]=t.gw[i-1]);for(var i in t.gh=void 0===t.el||""===t.el||Array.isArray(t.el)&&0==t.el.length?t.gh:t.el,t.gh=Array.isArray(t.gh)?t.gh:[t.gh],t.rl)void 0!==t.gh[i]&&0!==t.gh[i]||(t.gh[i]=t.gh[i-1]);var r,a=new Array(t.rl.length),n=0;for(var i in t.tabw=t.tabhide>=e?0:t.tabw,t.thumbw=t.thumbhide>=e?0:t.thumbw,t.tabh=t.tabhide>=e?0:t.tabh,t.thumbh=t.thumbhide>=e?0:t.thumbh,t.rl)a[i]=t.rl[i]<window.innerWidth?0:t.rl[i];for(var i in r=a[0],a)r>a[i]&&0<a[i]&&(r=a[i],n=i);var d=e>t.gw[n]+t.tabw+t.thumbw?1:(e-(t.tabw+t.thumbw))/t.gw[n];h=t.gh[n]*d+(t.tabh+t.thumbh)}void 0===window.rs_init_css&&(window.rs_init_css=document.head.appendChild(document.createElement("style"))),document.getElementById(t.c).height=h,window.rs_init_css.innerHTML+="#"+t.c+"_wrapper { height: "+h+"px }"}catch(t){console.log("Failure at Presize of Slider:"+t)}};</script>
</head>
<body class="home page-template-default page page-id-505 elementor-default elementor-kit-1481">


<!-- Start Page -->
<div id="page" class="chrome_only cmsmasters_liquid fullwidth fixed_header enable_header_top cmsmasters_heading_under_header hfeed site">

<!-- Start Main -->
<div id="main">

<!-- Start Header -->
<header id="header">
	<div class="header_top" data-height="50"><div class="header_top_outer"><div class="header_top_inner">
<div class="social_wrap">
	<div class="social_wrap_inner">
		<ul>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_1 cmsmasters-icon-facebook-1" title="Facebook" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_2 cmsmasters-icon-gplus-1" title="Google+" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_3 cmsmasters-icon-instagram" title="Instagram" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_4 cmsmasters-icon-twitter" title="Twitter" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_5 cmsmasters-icon-youtube-play" title="YouTube" target="_blank"></a>
				</li>
		</ul>
	</div>
</div><div class="header_top_meta"><div class="meta_wrap"><a href="https://mauricioduran.com/contactenos/" class="cmsmasters-icon-custom-new-phone">Llámanos (+57) 311 531 2257</a><span>Lun - Sab: 8:00am - 5:00pm, Domingo: CERRADO</span></div></div></div></div><div class="header_top_but closed"><span class="cmsmasters_theme_icon_slide_bottom"></span></div></div><div class="header_mid" data-height="120"><div class="header_mid_outer"><div class="header_mid_inner"><div class="logo_wrap"><a href="https://mauricioduran.com/" title="Mauricio Durán" class="logo">
	<img src="https://mauricioduran.com/wp-content/uploads/2020/08/logo-5.png" alt="Mauricio Durán" />
<img class="logo_retina" src="https://mauricioduran.com/wp-content/uploads/2020/08/logo_retina-2.png" alt="Mauricio Durán" width="175" height="61" />
</a>
</div><div class='header_mid_interface'>
					<div class='header_mid_interface_inner'><div class="slogan_wrap"><div class="slogan_wrap_inner"><div class="slogan_wrap_text"><a class="cmsmasters_button" href="https://mauricioduran.com/solicitar-cita-gratis/">Cita ¡Gratis!</a></div></div></div><div class="resp_mid_nav_wrap"><div class="resp_mid_nav_outer"><a class="responsive_nav resp_mid_nav" href="javascript:void(0)"><span></span></a></div></div><!-- Start Navigation --><div class="mid_nav_wrap"><nav><div class="menu-menu-md-container"><ul id="navigation" class="mid_nav navigation"><li id="menu-item-6" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-6 menu-item-depth-0"><a href="https://www.mauricioduran.com/"><span class="nav_item_wrap"><span class="nav_title">HOME</span></span></a></li>
<li id="menu-item-688" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-688 menu-item-depth-0"><a href="https://mauricioduran.com/nosotros/"><span class="nav_item_wrap"><span class="nav_title">NOSOTROS</span></span></a></li>
<li id="menu-item-694" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-694 menu-item-depth-0"><a href="https://mauricioduran.com/servicios/"><span class="nav_item_wrap"><span class="nav_title">SERVICIOS</span></span></a>
<ul class="sub-menu">
	<li id="menu-item-695" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-695 menu-item-depth-1"><a href="https://mauricioduran.com/implantes/"><span class="nav_item_wrap"><span class="nav_title">Implantes dentales</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-1226" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-1226 menu-item-depth-subitem"><a href="https://mauricioduran.com/implantes-de-carga-inmediata/"><span class="nav_item_wrap"><span class="nav_title">IMPLANTES DE CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES BOGOTA COLOMBIA</span></span></a>		</li>
		<li id="menu-item-710" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-710 menu-item-depth-subitem"><a href="https://mauricioduran.com/implantes-zirconio/"><span class="nav_item_wrap"><span class="nav_title">Imp. Zirconio</span></span></a>		</li>
		<li id="menu-item-709" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-709 menu-item-depth-subitem"><a href="https://mauricioduran.com/all-on-four/"><span class="nav_item_wrap"><span class="nav_title">All on Four</span></span></a>		</li>
		<li id="menu-item-706" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-706 menu-item-depth-subitem"><a href="https://mauricioduran.com/implante-sobre-dentadura/"><span class="nav_item_wrap"><span class="nav_title">Imp. Sobre Dentadura</span></span></a>		</li>
		<li id="menu-item-708" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-708 menu-item-depth-subitem"><a href="https://mauricioduran.com/implantes-post-exodoncia/"><span class="nav_item_wrap"><span class="nav_title">Imp. Post-Exodoncia</span></span></a>		</li>
		<li id="menu-item-705" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-705 menu-item-depth-subitem"><a href="https://mauricioduran.com/implantes-max-stability/"><span class="nav_item_wrap"><span class="nav_title">Imp. Max Stability</span></span></a>		</li>
		<li id="menu-item-696" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-696 menu-item-depth-subitem"><a href="https://mauricioduran.com/protesis-fija-sobre-implantes/"><span class="nav_item_wrap"><span class="nav_title">Prótesis Fija</span></span></a>		</li>
		<li id="menu-item-707" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-707 menu-item-depth-subitem"><a href="https://mauricioduran.com/protesis-hibrida/"><span class="nav_item_wrap"><span class="nav_title">Prótesis Híbrida</span></span></a>		</li>
		<li id="menu-item-687" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-687 menu-item-depth-subitem"><a href="https://mauricioduran.com/protesis-total-implante/"><span class="nav_item_wrap"><span class="nav_title">Prótesis Total Implante</span></span></a>		</li>
	</ul>
	</li>
	<li id="menu-item-697" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-697 menu-item-depth-1"><a href="https://mauricioduran.com/rehabilitacion-oral/"><span class="nav_item_wrap"><span class="nav_title">Rehabilitación Oral</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-692" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-692 menu-item-depth-subitem"><a href="https://mauricioduran.com/corona-cadcam/"><span class="nav_item_wrap"><span class="nav_title">Corona cad/cam</span></span></a>		</li>
		<li id="menu-item-704" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-704 menu-item-depth-subitem"><a href="https://mauricioduran.com/corona-zirconio/"><span class="nav_item_wrap"><span class="nav_title">Corona Zirconio</span></span></a>		</li>
		<li id="menu-item-716" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-716 menu-item-depth-subitem"><a href="https://mauricioduran.com/protesis-fija-zirconio/"><span class="nav_item_wrap"><span class="nav_title">Prótesis fija Zirconio</span></span></a>		</li>
	</ul>
	</li>
	<li id="menu-item-698" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-698 menu-item-depth-1"><a href="https://mauricioduran.com/ortodoncia/"><span class="nav_item_wrap"><span class="nav_title">Ortodoncia</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-685" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-685 menu-item-depth-subitem"><a href="https://mauricioduran.com/brackets-de-autoligado/"><span class="nav_item_wrap"><span class="nav_title">Brackets de Autoligado</span></span></a>		</li>
		<li id="menu-item-711" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-711 menu-item-depth-subitem"><a href="https://mauricioduran.com/brackets-ceramicos/"><span class="nav_item_wrap"><span class="nav_title">Brackets Cerámicos bogota chia cajica zipaquira</span></span></a>		</li>
		<li id="menu-item-712" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-712 menu-item-depth-subitem"><a href="https://mauricioduran.com/brackets-esteticos/"><span class="nav_item_wrap"><span class="nav_title">Brackets Estéticos</span></span></a>		</li>
		<li id="menu-item-699" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-699 menu-item-depth-subitem"><a href="https://mauricioduran.com/invisilings-invisible/"><span class="nav_item_wrap"><span class="nav_title">Invisilings  Invisible</span></span></a>		</li>
		<li id="menu-item-691" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-691 menu-item-depth-subitem"><a href="https://mauricioduran.com/ortodoncia-lingual/"><span class="nav_item_wrap"><span class="nav_title">Ortodoncia Lingual</span></span></a>		</li>
		<li id="menu-item-713" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-713 menu-item-depth-subitem"><a href="https://mauricioduran.com/ortodoncia-tecnica-de-roth/"><span class="nav_item_wrap"><span class="nav_title">Técnica de Roth</span></span></a>		</li>
	</ul>
	</li>
	<li id="menu-item-690" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-690 menu-item-depth-1"><a href="https://mauricioduran.com/endodoncia/"><span class="nav_item_wrap"><span class="nav_title">Endodoncia</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-718" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-718 menu-item-depth-subitem"><a href="https://mauricioduran.com/apicectomia/"><span class="nav_item_wrap"><span class="nav_title">Apicectomía bogota chia cajica zipaquira</span></span></a>		</li>
	</ul>
	</li>
	<li id="menu-item-700" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-700 menu-item-depth-1"><a href="https://mauricioduran.com/cirugias/"><span class="nav_item_wrap"><span class="nav_title">Cirugías</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-717" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-717 menu-item-depth-subitem"><a href="https://mauricioduran.com/cirugia-endodontica/"><span class="nav_item_wrap"><span class="nav_title">Cirugía Endodontica</span></span></a>		</li>
		<li id="menu-item-689" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-689 menu-item-depth-subitem"><a href="https://mauricioduran.com/cirugia-oral/"><span class="nav_item_wrap"><span class="nav_title">Cirugía oral</span></span></a>		</li>
		<li id="menu-item-684" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-684 menu-item-depth-subitem"><a href="https://mauricioduran.com/cirugia-periodontal/"><span class="nav_item_wrap"><span class="nav_title">Cirugía Periodontal</span></span></a>		</li>
	</ul>
	</li>
	<li id="menu-item-701" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-701 menu-item-depth-1"><a href="https://mauricioduran.com/odontologia-estetica/"><span class="nav_item_wrap"><span class="nav_title">Odontología Estética</span></span></a>
	<ul class="sub-menu">
		<li id="menu-item-683" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-683 menu-item-depth-subitem"><a href="https://mauricioduran.com/blanqueamiento/"><span class="nav_item_wrap"><span class="nav_title">Blanqueamiento bogota chia cajica zipaquira</span></span></a>		</li>
		<li id="menu-item-702" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-702 menu-item-depth-subitem"><a href="https://mauricioduran.com/cirugia-de-las-encias/"><span class="nav_item_wrap"><span class="nav_title">Cirugía de las encías</span></span></a>		</li>
		<li id="menu-item-703" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-703 menu-item-depth-subitem"><a href="https://mauricioduran.com/diseno-de-sonrisa/"><span class="nav_item_wrap"><span class="nav_title">Diseño de Sonrisa bogota colombia</span></span></a>		</li>
		<li id="menu-item-719" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-719 menu-item-depth-subitem"><a href="https://mauricioduran.com/carillas-porcelana/"><span class="nav_item_wrap"><span class="nav_title">Carillas dentales  Porcelana</span></span></a>		</li>
		<li id="menu-item-715" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-715 menu-item-depth-subitem"><a href="https://mauricioduran.com/carillas-resina/"><span class="nav_item_wrap"><span class="nav_title">Carillas dentales en  Resina</span></span></a>		</li>
		<li id="menu-item-714" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-714 menu-item-depth-subitem"><a href="https://mauricioduran.com/carillas/"><span class="nav_item_wrap"><span class="nav_title">Carillas Zirconio</span></span></a>		</li>
	</ul>
	</li>
</ul>
</li>
<li id="menu-item-9" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-9 menu-item-depth-0"><a href="https://mauricioduran.com/category/promociones/"><span class="nav_item_wrap"><span class="nav_title">PROMOS</span></span></a></li>
<li id="menu-item-2594" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-2594 menu-item-depth-0"><a href="#"><span class="nav_item_wrap"><span class="nav_title">SALUD</span></span></a>
<ul class="sub-menu">
	<li id="menu-item-8" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-8 menu-item-depth-1"><a href="https://mauricioduran.com/category/salud-oral/"><span class="nav_item_wrap"><span class="nav_title">Salud Oral</span></span></a>	</li>
	<li id="menu-item-7" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-7 menu-item-depth-1"><a href="https://mauricioduran.com/category/salud-general/"><span class="nav_item_wrap"><span class="nav_title">Salud General</span></span></a>	</li>
</ul>
</li>
<li id="menu-item-878" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-878 menu-item-depth-0"><a href="https://mauricioduran.com/category/blog/"><span class="nav_item_wrap"><span class="nav_title">BLOG</span></span></a></li>
<li id="menu-item-2596" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2596 menu-item-depth-0"><a href="https://mauricioduran.com/contactenos/"><span class="nav_item_wrap"><span class="nav_title">CONTÁCTENOS</span></span></a></li>
</ul></div></nav></div><!-- Finish Navigation --></div>
			</div>
		</div></div></div></header>
<!-- Finish Header -->


<!-- Start Middle -->
<div id="middle">
<div class="middle_inner">
<div class="content_wrap fullwidth">

<!-- Start Content -->
<div class="middle_content entry"></div></div><div id="cmsmasters_row_87v0q70mtp" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_9dsetdmva" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_slider">
			<!-- START Slider REVOLUTION SLIDER 6.1.5 --><p class="rs-p-wp-fix"></p>
		
							--><rs-layer
								id="slider-2-slide-5-layer-3" 
								data-type="text"
								data-color="#ffffff"
								data-rsp_ch="on"
								data-xy="x:77px;y:349px;"
								data-text="s:85;l:80;fw:300;a:inherit;"
								data-vbility="t,t,f,f"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:8;background-color:rgba(0,0,0,0.4);font-family:Fira Sans;"
							>Nuevos protocolos 
<br> COVID-19 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-5-layer-4" 
								data-type="text"
								data-color="#00909d"
								data-rsp_ch="on"
								data-xy="x:98px;y:526px;"
								data-text="s:36;l:46;fw:300;a:inherit;"
								data-vbility="t,t,f,f"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:9;background-color:rgba(199,199,204,0.6);font-family:Fira Sans;"
							>Queremos cuidarte. 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-5-layer-10" 
								class="rev-btn"
								data-type="button"
								data-color="#0b647a"
								data-rsp_ch="on"
								data-xy="x:124px;y:596px;"
								data-text="s:15;l:30;fw:700;a:inherit;"
								data-vbility="t,t,f,f"
								data-actions='o:click;a:simplelink;target:_self;url:#;'
								data-padding="t:14;r:40;b:12;l:40;"
								data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:30px,30px,30px,30px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								data-frame_hover="c:#fff;bgc:rgba(255,255,255,0);boc:#fff;bor:30px,30px,30px,30px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;"
								style="z-index:10;background-color:#ffffff;font-family:Arimo;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							>ver video 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-5-layer-13" 
								data-type="text"
								data-color="#00909d"
								data-xy="x:108px;y:524px;"
								data-text="s:36;l:46;fw:300;a:inherit;"
								data-vbility="f,f,t,t"
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:12;background-color:#ffffff;font-family:Fira Sans;"
							>Queremos cuidarte. 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-5-layer-14" 
								class="rev-btn"
								data-type="button"
								data-color="#0b647a"
								data-xy="x:130px;y:608px;"
								data-text="s:13;l:24;fw:700;a:inherit;"
								data-vbility="f,f,t,t"
								data-actions='o:click;a:simplelink;target:_self;url:http://denta.cmsmasters.net/make-appointments/;'
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-padding="t:14;r:40;b:12;l:40;"
								data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:30px,30px,30px,30px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								data-frame_hover="c:#fff;bgc:rgba(255,255,255,0);boc:#fff;bor:30px,30px,30px,30px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;"
								style="z-index:13;background-color:#ffffff;font-family:Arimo;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							>Ver Video 
							</rs-layer><!--
-->						</rs-slide>
						<rs-slide data-key="rs-6" data-title="Slide" data-thumb="//denta.cmsmasters.net/demo/wp-content/uploads/sites/5/2018/01/06.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
							<img src="//denta.cmsmasters.net/demo/wp-content/uploads/sites/5/2018/01/06.jpg" title="Home" class="rev-slidebg" data-no-retina>
<!--
							--><rs-layer
								id="slider-2-slide-6-layer-1" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:-1038px;y:251px;"
								data-text="l:22;a:inherit;"
								data-dim="w:1337px;h:1340px;"
								data-vbility="t,t,f,f"
								data-frame_0="tp:600;"
								data-frame_1="o:0.2;tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:7;"
							><img src="//denta.cmsmasters.net/demo/wp-content/uploads/sites/5/revslider/home_alt/e2.png" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-3" 
								data-type="text"
								data-color="#0c4e59"
								data-rsp_ch="on"
								data-xy="x:65px;y:403px;"
								data-text="s:85;l:80;fw:300;a:inherit;"
								data-vbility="t,t,f,f"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:8;font-family:Fira Sans;"
							>Estamos contigo! 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-4" 
								data-type="text"
								data-color="#00909d"
								data-rsp_ch="on"
								data-xy="x:88px;y:535px;"
								data-text="s:36;l:46;fw:300;a:inherit;"
								data-vbility="t,t,f,f"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:9;font-family:Fira Sans;"
							>en tiempos de emergencia. 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-10" 
								class="rev-btn"
								data-type="button"
								data-color="#0b647a"
								data-rsp_ch="on"
								data-xy="x:77px;y:602px;"
								data-text="s:15;l:30;fw:700;a:inherit;"
								data-vbility="t,t,f,f"
								data-actions='o:click;a:simplelink;target:_self;url:https://mauricioduran.com/contactenos/;'
								data-padding="t:14;r:40;b:12;l:40;"
								data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:30px,30px,30px,30px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								data-frame_hover="c:#fff;bgc:rgba(255,255,255,0);boc:#fff;bor:30px,30px,30px,30px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;"
								style="z-index:10;background-color:#ffffff;font-family:Arimo;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							>Contáctanos 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-12" 
								data-type="text"
								data-color="#0c4e59"
								data-xy="x:63px;y:409px;"
								data-text="s:85;l:80;fw:300;a:inherit;"
								data-vbility="f,f,t,t"
								data-basealign="slide"
								data-rsp_bd="off"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:11;font-family:Fira Sans;"
							>Estamos contigo! 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-13" 
								data-type="text"
								data-color="#00909d"
								data-xy="x:70px;y:532px;"
								data-text="s:36;l:46;fw:300;a:inherit;"
								data-vbility="f,f,t,t"
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:12;font-family:Fira Sans;"
							>en tiempos de emergencia. 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-14" 
								class="rev-btn"
								data-type="button"
								data-color="#0b647a"
								data-xy="x:76px;y:605px;"
								data-text="s:13;l:24;fw:700;a:inherit;"
								data-vbility="f,f,t,t"
								data-actions='o:click;a:simplelink;target:_self;url:http://denta.cmsmasters.net/make-appointments/;'
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-padding="t:14;r:40;b:12;l:40;"
								data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:30px,30px,30px,30px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								data-frame_hover="c:#fff;bgc:rgba(255,255,255,0);boc:#fff;bor:30px,30px,30px,30px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;"
								style="z-index:13;background-color:#ffffff;font-family:Arimo;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							>Contáctanos 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-17" 
								data-type="image"
								data-xy="x:-1038px;y:251px;"
								data-text="l:22;a:inherit;"
								data-dim="w:1337px;h:1340px;"
								data-vbility="f,f,t,t"
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="tp:600;"
								data-frame_1="o:0.2;tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:6;"
							><img src="//denta.cmsmasters.net/demo/wp-content/uploads/sites/5/revslider/home_alt/e2.png" data-no-retina> 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-6-layer-21" 
								data-type="image"
								data-rsp_ch="on"
								data-xy="x:-700px;"
								data-vbility="f,f,t,t"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:5;"
							><img src="//mauricioduran.com/wp-content/uploads/2019/03/DSC0135-copia.jpg" width="3456" height="2304" data-no-retina> 
							</rs-layer><!--
-->						</rs-slide>
						<rs-slide data-key="rs-7" data-title="Slide" data-thumb="//mauricioduran.com/wp-content/uploads/2020/08/banner6-scaled-100x50.jpg" data-anim="ei:d;eo:d;s:600;r:0;t:fade;sl:d;">
							<img src="//mauricioduran.com/wp-content/uploads/2020/08/banner6-scaled.jpg" title="Businesswoman interacting with doctors" width="2560" height="1539" class="rev-slidebg" data-no-retina>
<!--
							--><rs-layer
								id="slider-2-slide-7-layer-3" 
								data-type="text"
								data-color="#ffffff"
								data-rsp_ch="on"
								data-xy="x:77px;y:349px;"
								data-text="s:85;l:80;fw:300;a:inherit;"
								data-vbility="t,t,f,f"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:8;font-family:Fira Sans;"
							>Nuevos protocolos 
<br> COVID-19 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-7-layer-4" 
								data-type="text"
								data-color="#00909d"
								data-rsp_ch="on"
								data-xy="x:98px;y:526px;"
								data-text="s:36;l:46;fw:300;a:inherit;"
								data-vbility="t,t,f,f"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:9;font-family:Fira Sans;"
							>Queremos cuidarte. 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-7-layer-10" 
								class="rev-btn"
								data-type="button"
								data-color="#0b647a"
								data-rsp_ch="on"
								data-xy="x:124px;y:596px;"
								data-text="s:15;l:30;fw:700;a:inherit;"
								data-vbility="t,t,f,f"
								data-actions='o:click;a:simplelink;target:_self;url:#;'
								data-padding="t:14;r:40;b:12;l:40;"
								data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:30px,30px,30px,30px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								data-frame_hover="c:#fff;bgc:rgba(255,255,255,0);boc:#fff;bor:30px,30px,30px,30px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;"
								style="z-index:10;background-color:#ffffff;font-family:Arimo;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							>ver video 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-7-layer-13" 
								data-type="text"
								data-color="#00909d"
								data-xy="x:108px;y:524px;"
								data-text="s:36;l:46;fw:300;a:inherit;"
								data-vbility="f,f,t,t"
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								style="z-index:12;font-family:Fira Sans;"
							>Queremos cuidarte. 
							</rs-layer><!--

							--><rs-layer
								id="slider-2-slide-7-layer-14" 
								class="rev-btn"
								data-type="button"
								data-color="#0b647a"
								data-xy="x:130px;y:608px;"
								data-text="s:13;l:24;fw:700;a:inherit;"
								data-vbility="f,f,t,t"
								data-actions='o:click;a:simplelink;target:_self;url:http://denta.cmsmasters.net/make-appointments/;'
								data-basealign="slide"
								data-rsp_o="off"
								data-rsp_bd="off"
								data-padding="t:14;r:40;b:12;l:40;"
								data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:30px,30px,30px,30px;"
								data-frame_0="tp:600;"
								data-frame_1="tp:600;sR:10;"
								data-frame_999="o:0;tp:600;st:w;sR:4190;"
								data-frame_hover="c:#fff;bgc:rgba(255,255,255,0);boc:#fff;bor:30px,30px,30px,30px;bos:solid;bow:2px,2px,2px,2px;oX:50;oY:50;"
								style="z-index:13;background-color:#ffffff;font-family:Arimo;cursor:pointer;outline:none;box-shadow:none;box-sizing:border-box;-moz-box-sizing:border-box;-webkit-box-sizing:border-box;"
							>Ver Video 
							</rs-layer><!--
-->						</rs-slide>
					</rs-slides>
					<rs-progress class="rs-bottom" style="visibility: hidden !important;"></rs-progress>
				</rs-module>
				<script type="text/javascript">
					setREVStartSize({c: 'rev_slider_2_1',rl:[1240,1024,778,480],el:[760],gw:[1200],gh:[760],layout:'fullwidth',mh:"0"});
					var	revapi2,
						tpj;
					jQuery(function() {
						tpj = jQuery;
						if(tpj("#rev_slider_2_1").revolution == undefined){
							revslider_showDoubleJqueryError("#rev_slider_2_1");
						}else{
							revapi2 = tpj("#rev_slider_2_1").show().revolution({
								jsFileLocation:"//mauricioduran.com/wp-content/plugins/revslider/public/assets/js/",
								duration:4500,
								visibilityLevels:"1240,1024,778,480",
								gridwidth:1200,
								gridheight:760,
								minHeight:"",
								spinner:"spinner0",
								editorheight:"760,760,650,420",
								responsiveLevels:"1240,1024,778,480",
								disableProgressBar:"on",
								navigation: {
									keyboardNavigation:true,
									mouseScrollNavigation:false,
									onHoverStop:false,
									bullets: {
										enable:true,
										tmp:"",
										style:"hermes"
									}
								},
								fallbacks: {
									allowHTML5AutoPlayOnAndroid:true
								},
							});
						}
						
					});
				</script>
				<script>
					var htmlDivCss = unescape("%23rev_slider_2_1_wrapper%20.hermes.tp-bullets%20%7B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.hermes%20.tp-bullet%20%7B%0A%20%20%20%20overflow%3Ahidden%3B%0A%20%20%20%20border-radius%3A50%25%3B%0A%20%20%20%20width%3A16px%3B%0A%20%20%20%20height%3A16px%3B%0A%20%20%20%20background-color%3A%20rgba%280%2C%200%2C%200%2C%200%29%3B%0A%20%20%20%20box-shadow%3A%20inset%200%200%200%202px%20%23ffffff%3B%0A%20%20%20%20-webkit-transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20transition%3A%20background%200.3s%20ease%3B%0A%20%20%20%20position%3Aabsolute%3B%0A%7D%0A%0A%23rev_slider_2_1_wrapper%20.hermes%20.tp-bullet%3Ahover%20%7B%0A%09%20%20background-color%3A%20rgba%280%2C0%2C0%2C0.21%29%3B%0A%7D%0A%23rev_slider_2_1_wrapper%20.hermes%20.tp-bullet%3Aafter%20%7B%0A%20%20content%3A%20%27%20%27%3B%0A%20%20position%3A%20absolute%3B%0A%20%20bottom%3A%200%3B%0A%20%20height%3A%200%3B%0A%20%20left%3A%200%3B%0A%20%20width%3A%20100%25%3B%0A%20%20background-color%3A%20%23ffffff%3B%0A%20%20box-shadow%3A%200%200%201px%20%23ffffff%3B%0A%20%20-webkit-transition%3A%20height%200.3s%20ease%3B%0A%20%20transition%3A%20height%200.3s%20ease%3B%0A%7D%0A%23rev_slider_2_1_wrapper%20.hermes%20.tp-bullet.selected%3Aafter%20%7B%0A%20%20height%3A100%25%3B%0A%7D%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
				<script>
					var htmlDivCss = unescape("%0A%0A%0A");
					var htmlDiv = document.getElementById('rs-plugin-settings-inline-css');
					if(htmlDiv) {
						htmlDiv.innerHTML = htmlDiv.innerHTML + htmlDivCss;
					}else{
						var htmlDiv = document.createElement('div');
						htmlDiv.innerHTML = '<style>' + htmlDivCss + '</style>';
						document.getElementsByTagName('head')[0].appendChild(htmlDiv.childNodes[0]);
					}
				</script>
			</rs-module-wrap>
			<!-- END REVOLUTION SLIDER -->
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_krefisx25l" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
<div id="cmsmasters_column_9b377np2md" class="cmsmasters_column one_fourth">
<div class="cmsmasters_column_inner"><div id="cmsmasters_heading_8msi8zv8e4" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
	<h6 class="cmsmasters_heading">Nuestros Aliados:</h6>
</div>
</div></div>
<div id="cmsmasters_column_hsj5eysij5" class="cmsmasters_column three_fourth">
<div class="cmsmasters_column_inner"><div class="cmsmasters_clients_slider_wrap">
<div id="cmsmasters_clients_kesaqqkle" class="cmsmasters_owl_slider owl-carousel cmsmasters_clients_slider" data-items="4" data-single-item="false" data-auto-play="5000" data-slide-speed="5000" data-pagination-speed="5000" data-pagination="false" data-navigation="false"><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/01.png" alt="3m" title="3m" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/02.png" alt="kerr" title="kerr" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/03.png" alt="chofu" title="chofu" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/04.png" alt="mis" title="mis" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/05.png" alt="voco" title="voco" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/06.png" alt="dentsply" title="dentsply" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/07.png" alt="vita" title="vita" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/08.png" alt="neodent" title="neodent" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/09.png" alt="straumann" title="straumann" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/10.png" alt="ihdedental" title="ihdedental" /></div><div class="cmsmasters_clients_item item cmsmasters_owl_slider_item"><img src="https://mauricioduran.com/wp-content/uploads/2020/08/11.png" alt="ivoclar" title="ivoclar" /></div></div>
</div>
</div></div>
</div>
</div>
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_spa4ieohck" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div id="cmsmasters_divider_autp56lec7" class="cmsmasters_divider cmsmasters_divider_width_long cmsmasters_divider_pos_center"></div>
</div></div>
</div>
</div>
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_4nh6g47xsi" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_posts_slider" >
			<div id="cmsmasters_slider_n0lajb9jfs" class="cmsmasters_owl_slider owl-carousel" data-items="1" data-single-item="false" data-auto-play="5000"><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-2880" class="cmsmasters_slider_post enable_image post-2880 post type-post status-publish format-aside has-post-thumbnail hentry category-blog category-promocionesdescuentos category-promociones post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="293" src="https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada.jpg" class="full-width wp-post-image" alt="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." title="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." srcset="https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada.jpg 400w, https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada-300x293.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/" title="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/">protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales.</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-2904" class="cmsmasters_slider_post enable_image post-2904 post type-post status-publish format-aside has-post-thumbnail hentry category-blog category-promocionesdescuentos post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="300" src="https://mauricioduran.com/wp-content/uploads/2020/09/implantes-carga-inmediata-publicidad_opt-300x300.png" class="full-width wp-post-image" alt="implantes dentales carga inmediata implantologia estrategica minimamente invasivo sin cirugia,sin injertos ,sin membrana rehabilitacion en 24 horas bogota-chia-cajica-zipaquira-la calera-colombia-Implantologia estrategica precios especiales para su tratamiento odontologico arcada completa en grapheno liviano y resistente ideal para rehabilitar sobre implantes dentales de carga inmediata  ." loading="lazy" title="implantes dentales carga inmediata implantologia estrategica minimamente invasivo sin cirugia,sin injertos ,sin membrana rehabilitacion en 24 horas bogota-chia-cajica-zipaquira-la calera-colombia-Implantologia estrategica precios especiales para su tratamiento odontologico arcada completa en grapheno liviano y resistente ideal para rehabilitar sobre implantes dentales de carga inmediata  ." srcset="https://mauricioduran.com/wp-content/uploads/2020/09/implantes-carga-inmediata-publicidad_opt-300x300.png 300w, https://mauricioduran.com/wp-content/uploads/2020/09/implantes-carga-inmediata-publicidad_opt-150x150.png 150w, https://mauricioduran.com/wp-content/uploads/2020/09/implantes-carga-inmediata-publicidad_opt-75x75.png 75w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/02/12/implantes-carga-inmediata-minimamente-invasivo-sin-injertos-sin-membrana/" title="implantes dentales carga inmediata implantologia estrategica minimamente invasivo sin cirugia,sin injertos ,sin membrana rehabilitacion en 24 horas bogota-chia-cajica-zipaquira-la calera-colombia-Implantologia estrategica precios especiales para su tratamiento odontologico arcada completa en grapheno liviano y resistente ideal para rehabilitar sobre implantes dentales de carga inmediata  ." class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/02/12/implantes-carga-inmediata-minimamente-invasivo-sin-injertos-sin-membrana/">implantes dentales carga inmediata implantologia estrategica minimamente invasivo sin cirugia,sin injertos ,sin membrana rehabilitacion en 24 horas bogota-chia-cajica-zipaquira-la calera-colombia-Implantologia estrategica precios especiales para su tratamiento odontologico arcada completa en grapheno liviano y resistente ideal para rehabilitar sobre implantes dentales de carga inmediata  .</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/02/12/implantes-carga-inmediata-minimamente-invasivo-sin-injertos-sin-membrana/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1373" class="cmsmasters_slider_post enable_image post-1373 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promocionesdescuentos category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="225" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos.jpg" class="full-width wp-post-image" alt="GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA" loading="lazy" title="GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos.jpg 301w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos-300x226.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/06/29/gran-promocion-de-coronas-en-zirconio-por-este-mes-descuento-del-30/" title="GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/06/29/gran-promocion-de-coronas-en-zirconio-por-este-mes-descuento-del-30/">GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/06/29/gran-promocion-de-coronas-en-zirconio-por-este-mes-descuento-del-30/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-898" class="cmsmasters_slider_post enable_image post-898 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promocionesdescuentos category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="169" src="https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob.png" class="full-width wp-post-image" alt="DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA" loading="lazy" title="DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob.png 1600w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-300x169.png 300w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-768x432.png 768w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-1024x576.png 1024w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-1140x641.png 1140w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/04/28/costo-carillas-dentales-diseno-de-sonrisa-coronas-zirconio-porcelana-bruxzir-monolitica-implantes-dentales-carga-inmediata-bogota-precio-lentes-ceramicos-dentales-de-contacto-cosmeticos-dentales-porc/" title="DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/04/28/costo-carillas-dentales-diseno-de-sonrisa-coronas-zirconio-porcelana-bruxzir-monolitica-implantes-dentales-carga-inmediata-bogota-precio-lentes-ceramicos-dentales-de-contacto-cosmeticos-dentales-porc/">DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/04/28/costo-carillas-dentales-diseno-de-sonrisa-coronas-zirconio-porcelana-bruxzir-monolitica-implantes-dentales-carga-inmediata-bogota-precio-lentes-ceramicos-dentales-de-contacto-cosmeticos-dentales-porc/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div></div></div>
</div></div>
<div id="cmsmasters_column_wqj3s17kcg" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_posts_slider" >
			<div id="cmsmasters_slider_x85dz6ol6f" class="cmsmasters_owl_slider owl-carousel" data-items="1" data-single-item="false" data-auto-play="5000"><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-2880" class="cmsmasters_slider_post enable_image post-2880 post type-post status-publish format-aside has-post-thumbnail hentry category-blog category-promocionesdescuentos category-promociones post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="293" src="https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada.jpg" class="full-width wp-post-image" alt="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." loading="lazy" title="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." srcset="https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada.jpg 400w, https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada-300x293.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/" title="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/">protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales.</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-3114" class="cmsmasters_slider_post enable_image post-3114 post type-post status-publish format-aside has-post-thumbnail hentry category-promociones post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="300" src="https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-300x300.jpg" class="full-width wp-post-image" alt="placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia" loading="lazy" title="placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia" srcset="https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-300x300.jpg 300w, https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-150x150.jpg 150w, https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-75x75.jpg 75w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/04/21/placa-para-el-bruxismo-ultima-tecnologia-t-brux-bogota-colombia/" title="placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/04/21/placa-para-el-bruxismo-ultima-tecnologia-t-brux-bogota-colombia/">placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/04/21/placa-para-el-bruxismo-ultima-tecnologia-t-brux-bogota-colombia/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-246" class="cmsmasters_slider_post enable_image post-246 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="200" src="https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447.jpg" class="full-width wp-post-image" alt="PIDE TU PIMERA CITA GRATIS" loading="lazy" title="PIDE TU PIMERA CITA GRATIS" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447.jpg 3456w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-300x200.jpg 300w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-768x512.jpg 768w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-1024x683.jpg 1024w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-1140x760.jpg 1140w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2019/03/12/pide-tu-pimera-cita-gratis/" title="PIDE TU PIMERA CITA GRATIS" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2019/03/12/pide-tu-pimera-cita-gratis/">PIDE TU PIMERA CITA GRATIS</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2019/03/12/pide-tu-pimera-cita-gratis/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1261" class="cmsmasters_slider_post enable_image post-1261 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="200" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-4.jpg" class="full-width wp-post-image" alt="LENTES-CERAMICOS -CAD-CAM -BRUXZIR-CAD-CAM-I-MAX-CEREC 3D-IMPLANTES-DENTALES-CARGA-INMEDIATA-IMPLANTOLOGIA ESTRATEGICA-IMPLANTES BASALES BOGOTA-CHIA-CAJICA-ZIPAQUIRA.LA CALERA-IMPLANTOLOGIA DENTAL ESTRATEGICA" loading="lazy" title="LENTES-CERAMICOS -CAD-CAM -BRUXZIR-CAD-CAM-I-MAX-CEREC 3D-IMPLANTES-DENTALES-CARGA-INMEDIATA-IMPLANTOLOGIA ESTRATEGICA-IMPLANTES BASALES BOGOTA-CHIA-CAJICA-ZIPAQUIRA.LA CALERA-IMPLANTOLOGIA DENTAL ESTRATEGICA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-4.jpg 600w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-4-300x200.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/06/25/costo-precio-lentes-ceramicos-zirconio-porcelana-dentales-cad-cam-de-contacto-cosmeticos-dentales-zirconio-monolitico-bruxzir-cad-cam-i-max-cerec-3d-implantes-dentales-ab-leone-bogota-chia-la-calera-c/" title="LENTES-CERAMICOS -CAD-CAM -BRUXZIR-CAD-CAM-I-MAX-CEREC 3D-IMPLANTES-DENTALES-CARGA-INMEDIATA-IMPLANTOLOGIA ESTRATEGICA-IMPLANTES BASALES BOGOTA-CHIA-CAJICA-ZIPAQUIRA.LA CALERA-IMPLANTOLOGIA DENTAL ESTRATEGICA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/06/25/costo-precio-lentes-ceramicos-zirconio-porcelana-dentales-cad-cam-de-contacto-cosmeticos-dentales-zirconio-monolitico-bruxzir-cad-cam-i-max-cerec-3d-implantes-dentales-ab-leone-bogota-chia-la-calera-c/">LENTES-CERAMICOS -CAD-CAM -BRUXZIR-CAD-CAM-I-MAX-CEREC 3D-IMPLANTES-DENTALES-CARGA-INMEDIATA-IMPLANTOLOGIA ESTRATEGICA-IMPLANTES BASALES BOGOTA-CHIA-CAJICA-ZIPAQUIRA.LA CALERA-IMPLANTOLOGIA DENTAL ESTRATEGICA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/06/25/costo-precio-lentes-ceramicos-zirconio-porcelana-dentales-cad-cam-de-contacto-cosmeticos-dentales-zirconio-monolitico-bruxzir-cad-cam-i-max-cerec-3d-implantes-dentales-ab-leone-bogota-chia-la-calera-c/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1258" class="cmsmasters_slider_post enable_image post-1258 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="225" src="https://mauricioduran.com/wp-content/uploads/2019/03/S7300062.jpg" class="full-width wp-post-image" alt="implantes-dentales-carga-inmediata implantes-dentales-basales coronas-zirconio resinas-cad-cam-cerec-implantologia estrategica bogota colombia" loading="lazy" title="implantes-dentales-carga-inmediata implantes-dentales-basales coronas-zirconio resinas-cad-cam-cerec-implantologia estrategica bogota colombia" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/S7300062.jpg 320w, https://mauricioduran.com/wp-content/uploads/2019/03/S7300062-300x225.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/04/30/costo-precio-promocion-implantes-dentales-carga-inmediata-implantes-dentales-basales-bogota-diseno-de-sonrisa-odontologos-dentista-bogota-chia-la-calera-costo-precios-especiales-coronas-zirconio-porce/" title="implantes-dentales-carga-inmediata implantes-dentales-basales coronas-zirconio resinas-cad-cam-cerec-implantologia estrategica bogota colombia" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/04/30/costo-precio-promocion-implantes-dentales-carga-inmediata-implantes-dentales-basales-bogota-diseno-de-sonrisa-odontologos-dentista-bogota-chia-la-calera-costo-precios-especiales-coronas-zirconio-porce/">implantes-dentales-carga-inmediata implantes-dentales-basales coronas-zirconio resinas-cad-cam-cerec-implantologia estrategica bogota colombia</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/04/30/costo-precio-promocion-implantes-dentales-carga-inmediata-implantes-dentales-basales-bogota-diseno-de-sonrisa-odontologos-dentista-bogota-chia-la-calera-costo-precios-especiales-coronas-zirconio-porce/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1401" class="cmsmasters_slider_post enable_image post-1401 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="197" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg" class="full-width wp-post-image" alt="IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA" loading="lazy" title="IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg 600w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-300x197.jpg 300w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-500x330.jpg 500w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/03/08/implantes-dentales-carga-inmediata-implantologia-estrategica/" title="IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/03/08/implantes-dentales-carga-inmediata-implantologia-estrategica/">IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/03/08/implantes-dentales-carga-inmediata-implantologia-estrategica/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1274" class="cmsmasters_slider_post enable_image post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="225" src="https://mauricioduran.com/wp-content/uploads/2019/03/pagina37.jpg" class="full-width wp-post-image" alt="IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA" loading="lazy" title="IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/pagina37.jpg 320w, https://mauricioduran.com/wp-content/uploads/2019/03/pagina37-300x225.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/02/12/costo-precio-implantes-dentales-carga-inmediata-implantologia-estrategica-implantes-basales-coronas-zirconio-imax-porcelanas-dentales-protesis-fija-implantes-protesis-atornillada-on-all-four-4-precios/" title="IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/02/12/costo-precio-implantes-dentales-carga-inmediata-implantologia-estrategica-implantes-basales-coronas-zirconio-imax-porcelanas-dentales-protesis-fija-implantes-protesis-atornillada-on-all-four-4-precios/">IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/02/12/costo-precio-implantes-dentales-carga-inmediata-implantologia-estrategica-implantes-basales-coronas-zirconio-imax-porcelanas-dentales-protesis-fija-implantes-protesis-atornillada-on-all-four-4-precios/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-2994" class="cmsmasters_slider_post post-2994 post type-post status-publish format-aside hentry category-blog category-promociones post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><span class="img_placeholder cmsmasters_theme_icon_image"></span><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/03/08/graphenano-dental-precio-bogota-colombia/" title="GRAPHENANO-GRAFENO  DENTAL PRECIO BOGOTA COLOMBIA TRABAJOS ODONTOLOGICOS DE ARCADAS COMPLETAS CON GRAFENO DENTAL PRECIOS ESPECIALES" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/03/08/graphenano-dental-precio-bogota-colombia/">GRAPHENANO-GRAFENO  DENTAL PRECIO BOGOTA COLOMBIA TRABAJOS ODONTOLOGICOS DE ARCADAS COMPLETAS CON GRAFENO DENTAL PRECIOS ESPECIALES</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/03/08/graphenano-dental-precio-bogota-colombia/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1373" class="cmsmasters_slider_post enable_image post-1373 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promocionesdescuentos category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="225" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos.jpg" class="full-width wp-post-image" alt="GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA" loading="lazy" title="GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos.jpg 301w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos-300x226.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/06/29/gran-promocion-de-coronas-en-zirconio-por-este-mes-descuento-del-30/" title="GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/06/29/gran-promocion-de-coronas-en-zirconio-por-este-mes-descuento-del-30/">GRAN PROMOCION DE CORONAS EN ZIRCONIO DISILICATO DE LITIO POR ESTE MES DESCUENTO DEL 30% BOGOTA-CHIA-CAJICA-ZIPAQUIRA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/06/29/gran-promocion-de-coronas-en-zirconio-por-este-mes-descuento-del-30/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1230" class="cmsmasters_slider_post enable_image post-1230 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="197" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg" class="full-width wp-post-image" alt="DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA" loading="lazy" title="DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg 600w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-300x197.jpg 300w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-500x330.jpg 500w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/03/30/costo-precio-de-diseno-de-sonrisa-sin-brackets-lentes-ceramicos-resinas-carillas-dentales-de-contacto-cosmeticos-dentales-en-zirconio-porcelana-odontologo-dentista-bogota-chia-la-calera-cundinamarca-c/" title="DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/03/30/costo-precio-de-diseno-de-sonrisa-sin-brackets-lentes-ceramicos-resinas-carillas-dentales-de-contacto-cosmeticos-dentales-en-zirconio-porcelana-odontologo-dentista-bogota-chia-la-calera-cundinamarca-c/">DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/03/30/costo-precio-de-diseno-de-sonrisa-sin-brackets-lentes-ceramicos-resinas-carillas-dentales-de-contacto-cosmeticos-dentales-en-zirconio-porcelana-odontologo-dentista-bogota-chia-la-calera-cundinamarca-c/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-898" class="cmsmasters_slider_post enable_image post-898 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promocionesdescuentos category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="169" src="https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob.png" class="full-width wp-post-image" alt="DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA" loading="lazy" title="DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob.png 1600w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-300x169.png 300w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-768x432.png 768w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-1024x576.png 1024w, https://mauricioduran.com/wp-content/uploads/2019/03/1531491561227blob-1140x641.png 1140w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/04/28/costo-carillas-dentales-diseno-de-sonrisa-coronas-zirconio-porcelana-bruxzir-monolitica-implantes-dentales-carga-inmediata-bogota-precio-lentes-ceramicos-dentales-de-contacto-cosmeticos-dentales-porc/" title="DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/04/28/costo-carillas-dentales-diseno-de-sonrisa-coronas-zirconio-porcelana-bruxzir-monolitica-implantes-dentales-carga-inmediata-bogota-precio-lentes-ceramicos-dentales-de-contacto-cosmeticos-dentales-porc/">DISEÑO DE SONRISA CORONAS-ZIRCONIO PORCELANA BRUXZIR MONOLITICA-IMPLANTES-DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES PRECIOS ESPECIALES BOGOTA CHIA CAJICA ZIPAQUIRA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/04/28/costo-carillas-dentales-diseno-de-sonrisa-coronas-zirconio-porcelana-bruxzir-monolitica-implantes-dentales-carga-inmediata-bogota-precio-lentes-ceramicos-dentales-de-contacto-cosmeticos-dentales-porc/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1268" class="cmsmasters_slider_post enable_image post-1268 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="225" src="https://mauricioduran.com/wp-content/uploads/2019/03/PLACA-INVISILING1-copia.jpg" class="full-width wp-post-image" alt="COSTO-PRECIO-ORTODONCIA-INVISIBLE-SIN-BRACKETS-INVISILING BOGOTA-CHIA-CAJICA-ZIPAQUIRA" loading="lazy" title="COSTO-PRECIO-ORTODONCIA-INVISIBLE-SIN-BRACKETS-INVISILING BOGOTA-CHIA-CAJICA-ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/PLACA-INVISILING1-copia.jpg 320w, https://mauricioduran.com/wp-content/uploads/2019/03/PLACA-INVISILING1-copia-300x225.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/03/31/costo-precio-ortodoncia-invisible-sin-brackets-invisiling-bogota-chia-la-calera-cundinamarca-colombia/" title="COSTO-PRECIO-ORTODONCIA-INVISIBLE-SIN-BRACKETS-INVISILING BOGOTA-CHIA-CAJICA-ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/03/31/costo-precio-ortodoncia-invisible-sin-brackets-invisiling-bogota-chia-la-calera-cundinamarca-colombia/">COSTO-PRECIO-ORTODONCIA-INVISIBLE-SIN-BRACKETS-INVISILING BOGOTA-CHIA-CAJICA-ZIPAQUIRA</a></h3></header><a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/03/31/costo-precio-ortodoncia-invisible-sin-brackets-invisiling-bogota-chia-la-calera-cundinamarca-colombia/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div></div></div>
</div></div>
</div>
</div>
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin cmsmasters_row_columns_behavior">
<div id="cmsmasters_column_hxd4j3l8z" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner"><div id="cmsmasters_icon_4f065lgryk" class="cmsmasters_icon_wrap"><span class="cmsmasters_simple_icon cmsmasters-icon-custom-icon---1"></span><span class="cmsmasters_simple_icon_title"></span></div>
<div id="cmsmasters_heading_fl68kbfyh3" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">Dental Center MD</h2>
</div><div id="cmsmasters_heading_l7bi6w0kd" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">Busque un experto, confíe en Dental Center MD para enfermedades, afecciones, implantes dentales y diseño de sonrisa, entre otros.</h2>
</div><div id="cmsmasters_button_u1h0keibig" class="button_wrap"><a href="https://mauricioduran.com/nosotros/" class="cmsmasters_button"><span>Ver Doctor</span></a></div>
<div id="cmsmasters_divider_z7zrrx8s9" class="cl"></div>
</div></div>
<div id="cmsmasters_column_q26amddodm" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner"><div id="cmsmasters_icon_p4mej0vkwe" class="cmsmasters_icon_wrap"><span class="cmsmasters_simple_icon cmsmasters-icon-custom-icon---2"></span><span class="cmsmasters_simple_icon_title"></span></div>
<div id="cmsmasters_heading_kozbqtohjo" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading"> Ubicación</h2>
</div><div id="cmsmasters_heading_fwbqv1yi4f" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">Dental Center MD se ubica muy cerca de los principales centros financieros del país, en Bogotá la capital de la república de colombia. Obtenga direcciones e información ingresando al mapa.</h2>
</div><div id="cmsmasters_button_32x9ntagaq" class="button_wrap"><a href="https://mauricioduran.com/contactenos/" class="cmsmasters_button"><span>Ver Ubicación</span></a></div>
<div id="cmsmasters_divider_1f6eyxbotj" class="cl"></div>
</div></div>
<div id="cmsmasters_column_mi5l2gcqha" class="cmsmasters_column one_third">
<div class="cmsmasters_column_inner"><div id="cmsmasters_icon_654ixwbu5j" class="cmsmasters_icon_wrap"><span class="cmsmasters_simple_icon cmsmasters-icon-custom-icon---3"></span><span class="cmsmasters_simple_icon_title"></span></div>
<div id="cmsmasters_heading_xhbkshzouh" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">Citas Programadas</h2>
</div><div id="cmsmasters_heading_j8uaa7y3z6" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading"> Gracias por utilizar el formulario de solicitud en línea para una cita en las clínicas ambulatorias de Dental Center</h2>
</div><div id="cmsmasters_button_vvt6rho4nn" class="button_wrap"><a href="https://mauricioduran.com/solicitar-cita-gratis/" class="cmsmasters_button"><span>Pide tu cita</span></a></div>
<div id="cmsmasters_divider_arrnwtfml" class="cl"></div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_mrxier2s5v" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_qyud1tqmgt" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner"><div id="cmsmasters_heading_vkgy5x62qm" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h4 class="cmsmasters_heading">PROMOCIONES</h4>
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_qiaf46nojh" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_cz8cozd2h8" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner"><div class="cmsmasters_posts_slider" >
			<div id="cmsmasters_slider_3sbshwofci" class="cmsmasters_owl_slider owl-carousel" data-items="1" data-single-item="false" data-auto-play="false"><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-3114" class="cmsmasters_slider_post enable_image post-3114 post type-post status-publish format-aside has-post-thumbnail hentry category-promociones post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="300" src="https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-300x300.jpg" class="full-width wp-post-image" alt="placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia" loading="lazy" title="placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia" srcset="https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-300x300.jpg 300w, https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-150x150.jpg 150w, https://mauricioduran.com/wp-content/uploads/2022/04/PLACA-BRUXISMO-75x75.jpg 75w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/04/21/placa-para-el-bruxismo-ultima-tecnologia-t-brux-bogota-colombia/" title="placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/04/21/placa-para-el-bruxismo-ultima-tecnologia-t-brux-bogota-colombia/">placa para el bruxismo ultima tecnologia t-brux-placa bruxismo confort  bogota colombia</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>CON ESTA PLACA VAMOS A CORREGIR EL PROBLEMA DE BRUXISMO Y LAS CAUSAS EVITANDO DESGASTES DE LOS DIENTES DOLORES ARTICULARES...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/04/21/placa-para-el-bruxismo-ultima-tecnologia-t-brux-bogota-colombia/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-1401" class="cmsmasters_slider_post enable_image post-1401 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="197" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg" class="full-width wp-post-image" alt="IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA" loading="lazy" title="IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg 600w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-300x197.jpg 300w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-500x330.jpg 500w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/03/08/implantes-dentales-carga-inmediata-implantologia-estrategica/" title="IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/03/08/implantes-dentales-carga-inmediata-implantologia-estrategica/">IMPLANTES DENTALES CARGA INMEDIATA PRECIOS ESPECIALES IMPLANTOLOGIA ESTRATEGICA IMPLANTES DENTALES BASALES   BOGOTA-CHIA-CAJICA-ZIPAQUIRA</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>¿DONDE SE FIJAN LOS IMPLANTES DENTALES DE CARGA INMEDIATA IMPLANTOLOGIA DENTAL ESTRATEGICA IMPLANTES DENTALES BASALES? Es importante conocer los diferentes...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/03/08/implantes-dentales-carga-inmediata-implantologia-estrategica/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-2994" class="cmsmasters_slider_post post-2994 post type-post status-publish format-aside hentry category-blog category-promociones post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><span class="img_placeholder cmsmasters_theme_icon_image"></span><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/03/08/graphenano-dental-precio-bogota-colombia/" title="GRAPHENANO-GRAFENO  DENTAL PRECIO BOGOTA COLOMBIA TRABAJOS ODONTOLOGICOS DE ARCADAS COMPLETAS CON GRAFENO DENTAL PRECIOS ESPECIALES" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/03/08/graphenano-dental-precio-bogota-colombia/">GRAPHENANO-GRAFENO  DENTAL PRECIO BOGOTA COLOMBIA TRABAJOS ODONTOLOGICOS DE ARCADAS COMPLETAS CON GRAFENO DENTAL PRECIOS ESPECIALES</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>Graphenano Dental bogota apuesta por la nanotecnología para el sector dental creando biopolímeros nanorreforzados con grafeno de uso biológico para...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/03/08/graphenano-dental-precio-bogota-colombia/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-1274" class="cmsmasters_slider_post enable_image post-1274 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="225" src="https://mauricioduran.com/wp-content/uploads/2019/03/pagina37.jpg" class="full-width wp-post-image" alt="IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA" loading="lazy" title="IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/pagina37.jpg 320w, https://mauricioduran.com/wp-content/uploads/2019/03/pagina37-300x225.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2022/02/12/costo-precio-implantes-dentales-carga-inmediata-implantologia-estrategica-implantes-basales-coronas-zirconio-imax-porcelanas-dentales-protesis-fija-implantes-protesis-atornillada-on-all-four-4-precios/" title="IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2022/02/12/costo-precio-implantes-dentales-carga-inmediata-implantologia-estrategica-implantes-basales-coronas-zirconio-imax-porcelanas-dentales-protesis-fija-implantes-protesis-atornillada-on-all-four-4-precios/">IMPLANTES DENTALES CARGA INMEDIATA IMPLANTOLOGIA ESTRATEGICA MINIMAMENTE INVASIVO-SIN INJERTO DE HUESO-NI MEMBRANA REHABILITACION DENTAL EN 24 HORAS CON DIENTES FIJOS SOPORTADOS SOBRE IMPLANTES DENTALES INMEDIATOS-COSTO-PRECIO-BOGOTA-LA CALERA-CHIA</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>Nuestros implantes dentales de carga inmediata implantologia estrategica de la Clínica odontología Dental Center Mauricio Duran &nbsp;proporcionan un alta nivel...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2022/02/12/costo-precio-implantes-dentales-carga-inmediata-implantologia-estrategica-implantes-basales-coronas-zirconio-imax-porcelanas-dentales-protesis-fija-implantes-protesis-atornillada-on-all-four-4-precios/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-2880" class="cmsmasters_slider_post enable_image post-2880 post type-post status-publish format-aside has-post-thumbnail hentry category-blog category-promocionesdescuentos category-promociones post_format-post-format-aside">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="293" src="https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada.jpg" class="full-width wp-post-image" alt="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." loading="lazy" title="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." srcset="https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada.jpg 400w, https://mauricioduran.com/wp-content/uploads/2020/07/protesis-con-estructura-pin-arreglada-300x293.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/" title="protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales." class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promocionesdescuentos/" class="cmsmasters_cat_color cmsmasters_cat_36" rel="category tag">promoción descuentos</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/">protesis-hibrida- all- on- four -protesis -atornillada -estructura- peek &#8211; carbono-dientes fijos en grafeno(graheno dental sin-metal-bogota-chia-cajica-zipaquira-la calera-colombia implantologia estrategica precios especiales.</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>Cada vez hay más estudios sobre materiales que sean compatibles con el organismo humano Prótesis dentales totales realizadas con peek...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/08/26/protesis-hibrida-all-on-four-protesis-atornillada-estructura-peek-sin-metal-bogota-colombia/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div></div></div>
</div></div>
<div id="cmsmasters_column_34aa7wdwu6" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_posts_slider" >
			<div id="cmsmasters_slider_kzixg4tcge" class="cmsmasters_owl_slider owl-carousel" data-items="1" data-single-item="false" data-auto-play="false"><div class="cmsmasters_owl_slider_item"><!-- Start Posts Slider Post Article -->
<article id="post-1278" class="cmsmasters_slider_post enable_image post-1278 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="225" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos.jpg" class="full-width wp-post-image" alt="BLANQUEAMIENTO BOGOTA CHIA CAJICA ZIPAQUIRA" loading="lazy" title="BLANQUEAMIENTO BOGOTA CHIA CAJICA ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos.jpg 301w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-coronas-en-zirconio-dental-bien-blancos-300x226.jpg 300w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2019/03/02/costo-blanqueamiento-dental-implantes-dentales-carga-inmediata-coronas-zirconio-porcelana-bruxzir-monolitica-cad-cam-bogota-chia-la-calera-cundinamarca-periodoncia-profijet-colombia-precios-especiales/" title="BLANQUEAMIENTO BOGOTA CHIA CAJICA ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2019/03/02/costo-blanqueamiento-dental-implantes-dentales-carga-inmediata-coronas-zirconio-porcelana-bruxzir-monolitica-cad-cam-bogota-chia-la-calera-cundinamarca-periodoncia-profijet-colombia-precios-especiales/">BLANQUEAMIENTO BOGOTA CHIA CAJICA ZIPAQUIRA</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>COSTO BLANQUEAMIENTO DENTAL, IMPLANTES-DENTALES-CARGA-INMEDIATA, CORONAS-ZIRCONIO-PORCELANA, BRUXZIR-MONOLITICA -CAD-CAM- BOGOTA-CHIA-LA-CALERA-CUNDINAMARCA PERIODONCIA-PROFIJET COLOMBIA-PRECIOS-ESPECIALES-30% Blanqueamiento dental bogota chia la calera colombina &nbsp;para iniciar un...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2019/03/02/costo-blanqueamiento-dental-implantes-dentales-carga-inmediata-coronas-zirconio-porcelana-bruxzir-monolitica-cad-cam-bogota-chia-la-calera-cundinamarca-periodoncia-profijet-colombia-precios-especiales/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-246" class="cmsmasters_slider_post enable_image post-246 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="200" src="https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447.jpg" class="full-width wp-post-image" alt="PIDE TU PIMERA CITA GRATIS" loading="lazy" title="PIDE TU PIMERA CITA GRATIS" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447.jpg 3456w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-300x200.jpg 300w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-768x512.jpg 768w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-1024x683.jpg 1024w, https://mauricioduran.com/wp-content/uploads/2019/03/DSC0447-1140x760.jpg 1140w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2019/03/12/pide-tu-pimera-cita-gratis/" title="PIDE TU PIMERA CITA GRATIS" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2019/03/12/pide-tu-pimera-cita-gratis/">PIDE TU PIMERA CITA GRATIS</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>Aparta tu cita ya!&nbsp;Hazlo por medio de la pagina en el&nbsp;menú&nbsp;&#8220;solicitar cita gratis&#8221; o llama a los&nbsp;números&nbsp;de contacto. Danos el...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2019/03/12/pide-tu-pimera-cita-gratis/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-876" class="cmsmasters_slider_post enable_image post-876 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="223" src="https://mauricioduran.com/wp-content/uploads/2019/03/brackets-dentales-trasparentes-autoligado-copia.jpg" class="full-width wp-post-image" alt="BRACKETS ESTETICOS TRASPARENTES ZAFIRO-PORCELANA-CRISTAL-3-AUTOLIGADO-MBT-CLARITY-UNITEK BOGOTA CHIA CAJICA ZIPAQUIRA" loading="lazy" title="BRACKETS ESTETICOS TRASPARENTES ZAFIRO-PORCELANA-CRISTAL-3-AUTOLIGADO-MBT-CLARITY-UNITEK BOGOTA CHIA CAJICA ZIPAQUIRA" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2019/03/22/costo-brackets-dentales-esteticos-trasparentes-zafiro-porcelana-cristal-3-autoligado-mbt-clarity-unitek-ortodoncista-bogota-chia-la-calera-cundinamarca-colombia-cuesta-precios-descuento-30/" title="BRACKETS ESTETICOS TRASPARENTES ZAFIRO-PORCELANA-CRISTAL-3-AUTOLIGADO-MBT-CLARITY-UNITEK BOGOTA CHIA CAJICA ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2019/03/22/costo-brackets-dentales-esteticos-trasparentes-zafiro-porcelana-cristal-3-autoligado-mbt-clarity-unitek-ortodoncista-bogota-chia-la-calera-cundinamarca-colombia-cuesta-precios-descuento-30/">BRACKETS ESTETICOS TRASPARENTES ZAFIRO-PORCELANA-CRISTAL-3-AUTOLIGADO-MBT-CLARITY-UNITEK BOGOTA CHIA CAJICA ZIPAQUIRA</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>COSTO-PRECIO -BRACKETS-DENTALES-ESTETICOS-TRASPARENTES-ZAFIRO-PORCELANA-CRISTAL-3-AUTOLIGADO-MBT-CLARITY-UNITEK-ORTODONCISTA-BOGOTA-CHIA-LA-CALERA-CUNDINAMARCA- COLOMBIA-CUESTA-PRECIOS-DESCUENTO-30% brackets dentales Autoligados transparentes,esteticos,ceramicos,zafiro,cristal 3d ,tecnica roth mbt,,ortodoncia rapida un año o año y medio sin extraer,ni...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2019/03/22/costo-brackets-dentales-esteticos-trasparentes-zafiro-porcelana-cristal-3-autoligado-mbt-clarity-unitek-ortodoncista-bogota-chia-la-calera-cundinamarca-colombia-cuesta-precios-descuento-30/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-1230" class="cmsmasters_slider_post enable_image post-1230 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="300" height="197" src="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg" class="full-width wp-post-image" alt="DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA" loading="lazy" title="DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA" srcset="https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3.jpg 600w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-300x197.jpg 300w, https://mauricioduran.com/wp-content/uploads/2019/03/sonrisa-diego-3-500x330.jpg 500w" sizes="(max-width: 300px) 100vw, 300px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/03/30/costo-precio-de-diseno-de-sonrisa-sin-brackets-lentes-ceramicos-resinas-carillas-dentales-de-contacto-cosmeticos-dentales-en-zirconio-porcelana-odontologo-dentista-bogota-chia-la-calera-cundinamarca-c/" title="DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA" class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/03/30/costo-precio-de-diseno-de-sonrisa-sin-brackets-lentes-ceramicos-resinas-carillas-dentales-de-contacto-cosmeticos-dentales-en-zirconio-porcelana-odontologo-dentista-bogota-chia-la-calera-cundinamarca-c/">DISEÑO-DE-SONRISA-PRECIOS ESPECIALES- SIN-BRACKETS LENTES CERAMICOS RESINAS-CARILLAS DENTALES BOGOTA CHIA CAJICA ZIPAQUIRA</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>COSTO-PRECIO-DE-DISEÑO-DE-SONRISA-SIN-BRACKETS-LENTES-CERAMICOS-RESINAS-CARILLAS-DENTALES-DE-CONTACTO-COSMETICOS-DENTALES-EN-ZIRCONIO-PORCELANA -ODONTOLOGO-DENTISTA-BOGOTA-CHIA-CAJICA-ZIPAQUIRA-LA-CALERA-CUNDINAMARCA-CARILLAS-ZIRCONIO-MONOLITICO-BRUXZIR-RESINAS-CUESTA-PRECIO-DESCUENTO-30%-TENER-UNA-SONRISA-DENTAL-BELLA Clinica odontologica Dental center Mauricio Duran ubicada en bogotà chia cajica zipaquira la calera Colombia , especialistas en...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/03/30/costo-precio-de-diseno-de-sonrisa-sin-brackets-lentes-ceramicos-resinas-carillas-dentales-de-contacto-cosmeticos-dentales-en-zirconio-porcelana-odontologo-dentista-bogota-chia-la-calera-cundinamarca-c/">Read More</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

<!-- Start Posts Slider Post Article -->
<article id="post-1417" class="cmsmasters_slider_post enable_image post-1417 post type-post status-publish format-standard has-post-thumbnail hentry category-blog category-promociones">
	<div class="cmsmasters_slider_post_outer">
	<div class="cmsmasters_slider_post_date_img_wrap"><figure class="cmsmasters_img_rollover_wrap preloader"><img width="210" height="300" src="https://mauricioduran.com/wp-content/uploads/2020/03/IMG-20200330-WA0014.jpg" class="full-width wp-post-image" alt="Consulta virtual online,  odontologia problema periodontal-abcesos- dolor de una muela-bruxismo." loading="lazy" title="Consulta virtual online,  odontologia problema periodontal-abcesos- dolor de una muela-bruxismo." srcset="https://mauricioduran.com/wp-content/uploads/2020/03/IMG-20200330-WA0014.jpg 428w, https://mauricioduran.com/wp-content/uploads/2020/03/IMG-20200330-WA0014-210x300.jpg 210w" sizes="(max-width: 210px) 100vw, 210px" /><div class="cmsmasters_img_rollover"><a href="https://mauricioduran.com/2020/03/30/consulta-virtual-online-odontologiaproblema-periodontal-abcesos-dolor-de-una-muela-bruxismo/" title="Consulta virtual online,  odontologia problema periodontal-abcesos- dolor de una muela-bruxismo." class="cmsmasters_open_link"></a></div></figure></div><div class="cmsmasters_slider_post_inner"><footer class="cmsmasters_slider_post_footer entry-meta"><span class="cmsmasters_slider_post_category"><a href="https://mauricioduran.com/category/blog/" class="cmsmasters_cat_color cmsmasters_cat_9" rel="category tag">Blog</a> / <a href="https://mauricioduran.com/category/promociones/" class="cmsmasters_cat_color cmsmasters_cat_2" rel="category tag">Promociones</a></span></footer><header class="cmsmasters_slider_post_header entry-header"><h3 class="cmsmasters_slider_post_title entry-title"><a href="https://mauricioduran.com/2020/03/30/consulta-virtual-online-odontologiaproblema-periodontal-abcesos-dolor-de-una-muela-bruxismo/">Consulta virtual online,  odontologia problema periodontal-abcesos- dolor de una muela-bruxismo.</a></h3></header><div class="cmsmasters_slider_post_content entry-content">
<p>consulta virtual online odontologia,problema periodontal-abcesos- dolor de una muela-bruxismo-fractura de una muela-diente-inflamacion de la cara DOLOR DE UNA MUELA-PROBLEMA PERIODONTAL...</p>
</div>
<a class="cmsmasters_slider_post_read_more" href="https://mauricioduran.com/2020/03/30/consulta-virtual-online-odontologiaproblema-periodontal-abcesos-dolor-de-una-muela-bruxismo/">LEER MÁS...</a></div>	</div>
</article>
<!-- Finish Posts Slider Post Article -->

</div></div></div>
<p></p>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_uat9820e6s" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_8gsr10fb7" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner"><p></p>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_x6b69c0tqc" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_hd783fvb7p" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner"><div id="cmsmasters_heading_ji8wk1bb0m" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
	<h2 class="cmsmasters_heading">Agenda tu Cita</h2>
</div><div id="cmsmasters_heading_zk1jtzcqg" class="cmsmasters_heading_wrap cmsmasters_heading_align_left">
	<h2 class="cmsmasters_heading"> ¡Cita Gratis!</h2>
</div><div class="cmsmasters_text">
<h6><span style="color: #ffffff; font-size: 20px; line-height: 28px; font-weight: 300; text-align: left;">Nuestra clínica brinda servicios dentales de alto nivel, ofrece soluciones integrales para cualquier el tratamiento o enfermedad dental.</span></h6>
</div>
</div></div>
<div id="cmsmasters_column_31vrmatqwr" class="cmsmasters_column one_half">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_contact_form"><div role="form" class="wpcf7" id="wpcf7-f741-p505-o1" lang="es-CO" dir="ltr">
<div class="screen-reader-response"><p role="status" aria-live="polite" aria-atomic="true"></p> <ul></ul></div>
<form action="/#wpcf7-f741-p505-o1" method="post" class="wpcf7-form init" novalidate="novalidate" data-status="init">
<div style="display: none;">
<input type="hidden" name="_wpcf7" value="741" />
<input type="hidden" name="_wpcf7_version" value="5.3.2" />
<input type="hidden" name="_wpcf7_locale" value="es_CO" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f741-p505-o1" />
<input type="hidden" name="_wpcf7_container_post" value="505" />
<input type="hidden" name="_wpcf7_posted_data_hash" value="" />
</div>
<p><label> Nombre (Requerido)<br />
    <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> E-mail (requerido)<br />
    <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" /></span> </label></p>
<p><label> Asunto<br />
    <span class="wpcf7-form-control-wrap your-subject"><input type="text" name="your-subject" value="" size="40" class="wpcf7-form-control wpcf7-text" aria-invalid="false" /></span> </label></p>
<p><label> Mensaje<br />
    <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span> </label></p>
<p><input type="submit" value="Enviar" class="wpcf7-form-control wpcf7-submit" /></p>
<div class="wpcf7-response-output" aria-hidden="true"></div></form></div></div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_4fpvrofujh" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_6hj6zj9cg" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner"><p></p>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_5ioidx849" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_fullwidth">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_hm4qo0uu6b" class="cmsmasters_column one_fourth">
<div class="cmsmasters_column_inner"><div id="cmsmasters_icon_box_1id3jkgjtc" class="cmsmasters_icon_box cmsmasters_icon_top box_icon_type_icon cmsmasters-icon-custom-icon---5">
<div class="icon_box_inner">
<div class="icon_box_text">
<p></p>
</div>
</div>
</div>
<div id="cmsmasters_heading_1pm6dc3xb" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading"> Blanqueamiento dental</h2>
</div><div id="cmsmasters_heading_wurssmfod" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">El blanqueamiento es uno de los procedimientos dentales más populares.cause it can greatly improve how your teeth look.</h2>
</div>
</div></div>
<div id="cmsmasters_column_9v99e0qndg" class="cmsmasters_column one_fourth">
<div class="cmsmasters_column_inner"><div id="cmsmasters_icon_box_1pox7xbdl6" class="cmsmasters_icon_box cmsmasters_icon_top box_icon_type_icon cmsmasters-icon-custom-icon---4">
<div class="icon_box_inner">
<div class="icon_box_text">
<p></p>
</div>
</div>
</div>
<div id="cmsmasters_heading_h4dzav1new" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading"> Limpieza dental</h2>
</div><div id="cmsmasters_heading_vb4a1q7957" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">La limpieza de los dientes es parte de la higiene bucal e implica la eliminación de la placa dental de los dientes (caries dental).</h2>
</div>
</div></div>
<div id="cmsmasters_column_0mn6ah96sv" class="cmsmasters_column one_fourth">
<div class="cmsmasters_column_inner"><div id="cmsmasters_icon_box_libyun9wc" class="cmsmasters_icon_box cmsmasters_icon_top box_icon_type_icon cmsmasters-icon-custom-icon---6">
<div class="icon_box_inner">
<div class="icon_box_text">
<p></p>
</div>
</div>
</div>
<div id="cmsmasters_heading_wahb3zr2je" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">Soportes de calidad</h2>
</div><div id="cmsmasters_heading_w2b6surwge" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading"> La ortodoncia es la rama de la odontología que corrige dientes y mandíbulas que están mal colocados.</h2>
</div>
</div></div>
<div id="cmsmasters_column_o4aniea74" class="cmsmasters_column one_fourth">
<div class="cmsmasters_column_inner"><div id="cmsmasters_icon_box_u3c2kwkr5j" class="cmsmasters_icon_box cmsmasters_icon_top box_icon_type_icon cmsmasters-icon-custom-icon---7">
<div class="icon_box_inner">
<div class="icon_box_text">
<p></p>
</div>
</div>
</div>
<div id="cmsmasters_heading_v9r1kwu5e" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">Dentistas certificados</h2>
</div><div id="cmsmasters_heading_0sfho3jni1" class="cmsmasters_heading_wrap cmsmasters_heading_align_center">
	<h2 class="cmsmasters_heading">La anestesia dental es un campo de la anestesia que incluye no solo anestesia local, sino también sedación y anestesia general.</h2>
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_af06ucr4aj" class="cmsmasters_row cmsmasters_color_scheme_third cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_fullwidth cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_me88xxzzix" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner"><div id="cmsmasters_counters_3v6fv1n55" class="cmsmasters_counters counters_type_vertical"><div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_prydc1omi" class="cmsmasters_counter" data-percent="4350">
<div class="cmsmasters_counter_inner">
<span class="cmsmasters_counter_counter_wrap">
<span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span>
</span>
<span class="cmsmasters_counter_title">clientes satisfechos</span>
</div>
</div>
</div><div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_90tjqr8lw" class="cmsmasters_counter" data-percent="1578">
<div class="cmsmasters_counter_inner">
<span class="cmsmasters_counter_counter_wrap">
<span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span>
</span>
<span class="cmsmasters_counter_title">Urgencias tratadas</span>
</div>
</div>
</div><div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_beobtdd6v" class="cmsmasters_counter" data-percent="18">
<div class="cmsmasters_counter_inner">
<span class="cmsmasters_counter_counter_wrap">
<span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span>
</span>
<span class="cmsmasters_counter_title"> Servicios dentales</span>
</div>
</div>
</div><div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_hxwk3l8ejo" class="cmsmasters_counter" data-percent="12">
<div class="cmsmasters_counter_inner">
<span class="cmsmasters_counter_counter_wrap">
<span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span>
</span>
<span class="cmsmasters_counter_title">Premios nacionales</span>
</div>
</div>
</div><div class="cmsmasters_counter_wrap one_fifth">
<div id="cmsmasters_counter_zllxlqjjp" class="cmsmasters_counter" data-percent="23">
<div class="cmsmasters_counter_inner">
<span class="cmsmasters_counter_counter_wrap">
<span class="cmsmasters_counter_prefix"></span><span class="cmsmasters_counter_counter">0</span><span class="cmsmasters_counter_suffix"></span>
</span>
<span class="cmsmasters_counter_title">Años de experiencia</span>
</div>
</div>
</div></div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_mnx8bym622" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_szy7km538i" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner"><div class="cmsmasters_quotes_slider_wrap">
<div id="cmsmasters_quotes_slider_rms4dw6g69" class="cmsmasters_owl_slider owl-carousel cmsmasters_quotes cmsmasters_quotes_slider" data-auto-play="5000"><div class="cmsmasters_quote cmsmasters_owl_slider_item">
<!-- Start Quote Slider Article -->
<article class="cmsmasters_quote_inner">
<div class="cmsmasters_quote_content">
<p id="tw-target-text" class="tw-data-text tw-text-large XcVN5d tw-ta" data-placeholder="Traducción"><span lang="es">La elección de la profesión es muy importante. Yo hice mi elección. Y nunca me he arrepentido. Me alegra que mi trabajo sea ayudar a la gente a ser un &#8220;dentista más saludable y más bella&#8221;, similar a los padres, pero critican sus dientes en lugar de su estilo de vida.</span></p>
</div><header class="cmsmasters_quote_header"><h3 class="cmsmasters_quote_title">Matthew Brooks</h3></header><div class="cmsmasters_quote_subtitle_wrap"><h6 class="cmsmasters_quote_subtitle">Dentist-surgeon</h6></div></article>
<!-- Finish Quote Slider Article -->

</div>
<div class="cmsmasters_quote cmsmasters_owl_slider_item">
<!-- Start Quote Slider Article -->
<article class="cmsmasters_quote_inner">
<div class="cmsmasters_quote_content">
<p>Incluso el dolor de muelas más pequeño puede suavizar el mayor dolor mental. La salud de nuestros clientes es muy importante para nosotros. Intentamos hacer todo lo mejor posible. &#8220;Cada diente en la cabeza de un hombre es más valioso que un diamante&#8221;.</p>
</div><header class="cmsmasters_quote_header"><h3 class="cmsmasters_quote_title">Paola Rubio</h3></header><div class="cmsmasters_quote_subtitle_wrap"><h6 class="cmsmasters_quote_subtitle">Dentist-therapist</h6></div></article>
<!-- Finish Quote Slider Article -->

</div>
<div class="cmsmasters_quote cmsmasters_owl_slider_item">
<!-- Start Quote Slider Article -->
<article class="cmsmasters_quote_inner">
<div class="cmsmasters_quote_content">
<p>Una sonrisa adorna a una persona. Los dentistas son como joyeros. Me alegro de poder decorar a las personas incluso de esta manera. No tienes que cepillarte los dientes, solo los que quieres conservar. &#8220;La odontología no es cara, la negligencia lo es. Ser un diseñador famoso es como ser un dentista famoso&#8221;.</p>
</div><header class="cmsmasters_quote_header"><h3 class="cmsmasters_quote_title">Richard Machado</h3></header><div class="cmsmasters_quote_subtitle_wrap"><h6 class="cmsmasters_quote_subtitle">Dentist-orthodontist</h6></div></article>
<!-- Finish Quote Slider Article -->

</div>
</div>
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_owjfk9a7s" class="cmsmasters_row cmsmasters_color_scheme_third cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_fullwidth">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner cmsmasters_row_fullwidth cmsmasters_row_no_margin">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_k26izi6vh" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner"><div id="cmsmasters_fb_4u5a3hbibm" class="cmsmasters_featured_block">
<div class="featured_block_inner">
<div class="featured_block_text">
<h3 style="text-align: center;">¡Haz realidad tu sonrisa soñada! Llámanos al +57 311 531 2257 o haz una cita</h3>

</div>
</div>
</div>
</div></div>
</div>
</div>
</div>
</div>
</div>
<div id="cmsmasters_row_mcg50w9x2" class="cmsmasters_row cmsmasters_color_scheme_default cmsmasters_row_top_default cmsmasters_row_bot_default cmsmasters_row_boxed">
<div class="cmsmasters_row_outer_parent">
<div class="cmsmasters_row_outer">
<div class="cmsmasters_row_inner">
<div class="cmsmasters_row_margin">
<div id="cmsmasters_column_wlecwvzbiv" class="cmsmasters_column one_first">
<div class="cmsmasters_column_inner">
<div class="cmsmasters_slider"></div>
</div></div>
</div>
</div>
</div>
</div>
</div>

<div class="cl"></div><div class="content_wrap fullwidth">

<div class="middle_content entry"></div>
<!-- Finish Content -->



		</div>
	</div>
</div>
<!-- Finish Middle -->
<a href="javascript:void(0)" id="slide_top" class="cmsmasters_theme_icon_slide_top"><span></span></a>
</div>
<!-- Finish Main -->

<!-- Start Footer -->
<footer id="footer">
	<div class="footer cmsmasters_color_scheme_footer cmsmasters_footer_default">
	<div class="footer_inner">
		<div class='footer_wrap_logo_icon'><div class="footer_logo_wrap"><a href="https://mauricioduran.com/" title="Mauricio Durán" class="footer_logo">
	<img src="https://mauricioduran.com/wp-content/uploads/2020/08/logo_footer-1.png" alt="Mauricio Durán" />
<img class="footer_logo_retina" src="https://mauricioduran.com/wp-content/uploads/2020/08/logo_footer_retina-1.png" alt="Mauricio Durán" width="175" height="47" />
</a>
</div>			<span class="footer_copyright copyright">
				<a class="privacy-policy-link" href="https://mauricioduran.com/privacy-policy/">Políticas de Privacidad</a> / Dental Center - Mauricio Durán © 2020 / Todos los Derechos Reservados			</span>
		</div><div class='footer_wrap_html_menu'>
<div class="social_wrap">
	<div class="social_wrap_inner">
		<ul>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_1 cmsmasters-icon-facebook-1" title="Facebook" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_2 cmsmasters-icon-gplus-1" title="Google+" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_3 cmsmasters-icon-instagram" title="Instagram" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_4 cmsmasters-icon-twitter" title="Twitter" target="_blank"></a>
				</li>
				<li>
					<a href="#" class="cmsmasters_social_icon cmsmasters_social_icon_5 cmsmasters-icon-youtube-play" title="YouTube" target="_blank"></a>
				</li>
		</ul>
	</div>
</div><div class="footer_nav_wrap"><nav><div class="menu-footer-container"><ul id="footer_nav" class="footer_nav"><li id="menu-item-817" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-817"><a href="https://mauricioduran.com/solicitar-cita-gratis/">Solicitar Cita ¡GRATIS!</a></li>
<li id="menu-item-813" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-813"><a href="https://mauricioduran.com/home/">HOME</a></li>
<li id="menu-item-814" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-814"><a href="https://mauricioduran.com/nosotros/">NOSOTROS</a></li>
<li id="menu-item-816" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-816"><a href="https://mauricioduran.com/servicios/">SERVICIOS</a></li>
<li id="menu-item-812" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-812"><a href="https://mauricioduran.com/contactenos/">CONTÁCTENOS</a></li>
<li id="menu-item-815" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-815"><a href="https://mauricioduran.com/privacy-policy/">Políticas de Privacidad</a></li>
</ul></div></nav></div>		</div>
	</div>
</div></footer>
<!-- Finish Footer -->

</div>
<span class="cmsmasters_responsive_width"></span>
<!-- Finish Page -->

<!--googleoff: all--><div id="cookie-law-info-bar"><span><div class="cli-bar-container cli-style-v2"><div class="cli-bar-message">We use cookies on our website to give you the most relevant experience by remembering your preferences and repeat visits. By clicking “Accept”, you consent to the use of ALL the cookies.</div><div class="cli-bar-btn_container"><a role='button' tabindex='0' class="cli_settings_button" style="margin:0px 10px 0px 5px;" >Cookie settings</a><a role='button' tabindex='0' data-cli_action="accept" id="cookie_action_close_header"  class="medium cli-plugin-button cli-plugin-main-button cookie_action_close_header cli_action_button" style="display:inline-block; ">ACCEPT</a></div></div></span></div><div id="cookie-law-info-again" style="display:none;"><span id="cookie_hdr_showagain">Privacy & Cookies Policy</span></div><div class="cli-modal" id="cliSettingsPopup" tabindex="-1" role="dialog" aria-labelledby="cliSettingsPopup" aria-hidden="true">
  <div class="cli-modal-dialog" role="document">
    <div class="cli-modal-content cli-bar-popup">
      <button type="button" class="cli-modal-close" id="cliModalClose">
        <svg class="" viewBox="0 0 24 24"><path d="M19 6.41l-1.41-1.41-5.59 5.59-5.59-5.59-1.41 1.41 5.59 5.59-5.59 5.59 1.41 1.41 5.59-5.59 5.59 5.59 1.41-1.41-5.59-5.59z"></path><path d="M0 0h24v24h-24z" fill="none"></path></svg>
        <span class="wt-cli-sr-only">Close</span>
      </button>
      <div class="cli-modal-body">
        <div class="cli-container-fluid cli-tab-container">
    <div class="cli-row">
        <div class="cli-col-12 cli-align-items-stretch cli-px-0">
            <div class="cli-privacy-overview">
                <h4>Privacy Overview</h4>                <div class="cli-privacy-content">
                    <div class="cli-privacy-content-text">This website uses cookies to improve your experience while you navigate through the website. Out of these cookies, the cookies that are categorized as necessary are stored on your browser as they are essential for the working of basic functionalities of the website. We also use third-party cookies that help us analyze and understand how you use this website. These cookies will be stored in your browser only with your consent. You also have the option to opt-out of these cookies. But opting out of some of these cookies may have an effect on your browsing experience.</div>
                </div>
                <a class="cli-privacy-readmore" data-readmore-text="Show more" data-readless-text="Show less"></a>            </div>
        </div>
        <div class="cli-col-12 cli-align-items-stretch cli-px-0 cli-tab-section-container">
                                                <div class="cli-tab-section">
                        <div class="cli-tab-header">
                            <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="necessary" data-toggle="cli-toggle-tab">
                                Necessary                            </a>
                            <div class="wt-cli-necessary-checkbox">
                        <input type="checkbox" class="cli-user-preference-checkbox"  id="wt-cli-checkbox-necessary" data-id="checkbox-necessary" checked="checked"  />
                        <label class="form-check-label" for="wt-cli-checkbox-necessary">Necessary</label>
                    </div>
                    <span class="cli-necessary-caption">Always Enabled</span>                         </div>
                        <div class="cli-tab-content">
                            <div class="cli-tab-pane cli-fade" data-id="necessary">
                                <p>Necessary cookies are absolutely essential for the website to function properly. This category only includes cookies that ensures basic functionalities and security features of the website. These cookies do not store any personal information.</p>
                            </div>
                        </div>
                    </div>
                                                <div class="cli-tab-section">
                        <div class="cli-tab-header">
                            <a role="button" tabindex="0" class="cli-nav-link cli-settings-mobile" data-target="non-necessary" data-toggle="cli-toggle-tab">
                                Non-necessary                            </a>
                            <div class="cli-switch">
                        <input type="checkbox" id="wt-cli-checkbox-non-necessary" class="cli-user-preference-checkbox"  data-id="checkbox-non-necessary"  checked='checked' />
                        <label for="wt-cli-checkbox-non-necessary" class="cli-slider" data-cli-enable="Enabled" data-cli-disable="Disabled"><span class="wt-cli-sr-only">Non-necessary</span></label>
                    </div>                        </div>
                        <div class="cli-tab-content">
                            <div class="cli-tab-pane cli-fade" data-id="non-necessary">
                                <p>Any cookies that may not be particularly necessary for the website to function and is used specifically to collect user personal data via analytics, ads, other embedded contents are termed as non-necessary cookies. It is mandatory to procure user consent prior to running these cookies on your website.</p>
                            </div>
                        </div>
                    </div>
            
        </div>
    </div>
</div>
      </div>
    </div>
  </div>
</div>
<div class="cli-modal-backdrop cli-fade cli-settings-overlay"></div>
<div class="cli-modal-backdrop cli-fade cli-popupbar-overlay"></div>
<!--googleon: all--><!-- Click to Chat - prev - https://holithemes.com/plugins/click-to-chat/  v2.10 -->
<div class="ccw_plugin chatbot" style="bottom:75px; right:21px;">
    <div class="ccw_style9 animated no-animation ccw-no-hover-an">
        <a target="_blank" href="https://web.whatsapp.com/send?phone=573115312257&text=" class="img-icon-a nofocus">   
            <img class="img-icon ccw-analytics" id="style-9" data-ccw="style-9" style="height: 48px;" src="https://mauricioduran.com/wp-content/plugins/click-to-chat-for-whatsapp/./new/inc/assets/img/whatsapp-icon-square.svg" alt="WhatsApp chat">
        </a>
    </div>
</div>
		<script type="text/javascript">
		if(typeof revslider_showDoubleJqueryError === "undefined") {
			function revslider_showDoubleJqueryError(sliderID) {
				var err = "<div class='rs_error_message_box'>";
				err += "<div class='rs_error_message_oops'>Oops...</div>";
				err += "<div class='rs_error_message_content'>";
				err += "You have some jquery.js library include that comes after the Slider Revolution files js inclusion.<br>";
				err += "To fix this, you can:<br>&nbsp;&nbsp;&nbsp; 1. Set 'Module General Options' -> 'Advanced' -> 'jQuery & OutPut Filters' -> 'Put JS to Body' to on";
				err += "<br>&nbsp;&nbsp;&nbsp; 2. Find the double jQuery.js inclusion and remove it";
				err += "</div>";
			err += "</div>";
				jQuery(sliderID).show().html(err);
			}
		}
		</script>
<script type='text/javascript' id='ccw_app-js-extra'>
/* <![CDATA[ */
var ht_ccw_var = {"page_title":"Home","google_analytics":"","ga_category":"","ga_action":"","ga_label":"","fb_analytics":"","fb_event_name":"","p1_value":"","p2_value":"","p3_value":"","p1_name":"","p2_name":"","p3_name":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/click-to-chat-for-whatsapp/prev/assets/js/app.js?ver=2.10' id='ccw_app-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/cmsmasters-mega-menu/js/jquery.megaMenu.js?ver=1.2.9' id='megamenu-js'></script>
<script type='text/javascript' id='contact-form-7-js-extra'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/mauricioduran.com\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"}};
/* ]]> */
</script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.3.2' id='contact-form-7-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/cmsmasters-hover-slider.min.js?ver=1.0.0' id='cmsmasters-hover-slider-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/easing.min.js?ver=1.0.0' id='easing-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/easy-pie-chart.min.js?ver=1.0.0' id='easy-pie-chart-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/mousewheel.min.js?ver=1.0.0' id='mousewheel-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/owlcarousel.min.js?ver=1.0.0' id='owlcarousel-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/request-animation-frame.min.js?ver=1.0.0' id='request-animation-frame-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/scrollspy.js?ver=1.0.0' id='scrollspy-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/scroll-to.min.js?ver=1.0.0' id='scroll-to-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/stellar.min.js?ver=1.0.0' id='stellar-js'></script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/waypoints.min.js?ver=1.0.0' id='waypoints-js'></script>
<script type='text/javascript' id='denta-script-js-extra'>
/* <![CDATA[ */
var cmsmasters_script = {"theme_url":"https:\/\/mauricioduran.com\/wp-content\/themes\/MD2020","site_url":"https:\/\/mauricioduran.com\/","ajaxurl":"https:\/\/mauricioduran.com\/wp-admin\/admin-ajax.php","nonce_ajax_like":"c8214ab6ae","nonce_ajax_view":"05b2bd8c4d","project_puzzle_proportion":"0.7069","gmap_api_key":"","gmap_api_key_notice":"Please add your Google Maps API key","gmap_api_key_notice_link":"read more how","primary_color":"#0a6076","ilightbox_skin":"dark","ilightbox_path":"vertical","ilightbox_infinite":"0","ilightbox_aspect_ratio":"1","ilightbox_mobile_optimizer":"1","ilightbox_max_scale":"1","ilightbox_min_scale":"0.2","ilightbox_inner_toolbar":"0","ilightbox_smart_recognition":"0","ilightbox_fullscreen_one_slide":"0","ilightbox_fullscreen_viewport":"center","ilightbox_controls_toolbar":"1","ilightbox_controls_arrows":"0","ilightbox_controls_fullscreen":"1","ilightbox_controls_thumbnail":"1","ilightbox_controls_keyboard":"1","ilightbox_controls_mousewheel":"1","ilightbox_controls_swipe":"1","ilightbox_controls_slideshow":"0","ilightbox_close_text":"Close","ilightbox_enter_fullscreen_text":"Enter Fullscreen (Shift+Enter)","ilightbox_exit_fullscreen_text":"Exit Fullscreen (Shift+Enter)","ilightbox_slideshow_text":"Slideshow","ilightbox_next_text":"Next","ilightbox_previous_text":"Previous","ilightbox_load_image_error":"An error occurred when trying to load photo.","ilightbox_load_contents_error":"An error occurred when trying to load contents.","ilightbox_missing_plugin_error":"The content your are attempting to view requires the <a href='{pluginspage}' target='_blank'>{type} plugin<\\\/a>."};
/* ]]> */
</script>
<script type='text/javascript' src='https://mauricioduran.com/wp-content/themes/MD2020/js/jquery.script.js?ver=1.0.0' id='denta-script-js'></script>
<script type='text/javascript' id='denta-theme-script-js-extra'>
/* <![CDATA[ */
var cmsmasters_theme_script = {"primary_color":"#0a6076"};
/* ]]> */
</script>
	</body>
</html>
	</div>


	<!-- Gurus -->

	<div class="fondomedio">


		<!--Product Grid-->

	</div>
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
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
	<script src="js/consulta_gurus_especiales.js"></script>
	<script src="js/login.js"></script>
</body>

</html>