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
		.custom-combobox {
			position: relative;
			display: inline-block;

		}

		.custom-combobox-toggle {
			position: absolute;
			top: 0;
			bottom: 0;
			margin-left: -1px;
			padding: 0;
			border: 0;

		}

		.custom-combobox-input {
			margin: 0;
			border: 0;

		}

		.ui-menu-item .ui-menu-item-wrapper:hover {
			background-color: #CCC;
			border: none;

		}

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
			background-color: #FFED90;
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
	<script>
		$(function() {
			$.widget("custom.combobox", {
				_create: function() {
					this.wrapper = $("<span>")
						.addClass("custom-combobox")
						.insertAfter(this.element);

					this.element.hide();
					this._createAutocomplete();
					this._createShowAllButton();
				},

				_createAutocomplete: function() {
					var selected = this.element.children(":selected"),
						value = selected.val() ? selected.text() : "";

					this.input = $("<input>")
						.appendTo(this.wrapper)
						.val(value)
						.attr("title", "")
						.addClass("custom-combobox-input ui-widget ui-widget-content ui-state-default ui-corner-left")
						.autocomplete({
							delay: 0,
							minLength: 0,
							source: this._source.bind(this)
						})
						.tooltip({
							classes: {
								"ui-tooltip": "ui-state-highlight"
							}
						});

					this._on(this.input, {
						autocompleteselect: function(event, ui) {
							ui.item.option.selected = true;
							change_ciudad(ui.item.option.value)
							this._trigger("select", event, {
								item: ui.item.option
							});
						},

						autocompletechange: "_removeIfInvalid"
					});
				},

				_createShowAllButton: function() {
					var input = this.input,
						wasOpen = false;

					$("<a>")
						.attr("tabIndex", -1)
						.attr("title", "Mostrar Ciudades")
						.tooltip()
						.appendTo(this.wrapper)
						.button({
							icons: {
								primary: "ui-icon-triangle-1-s"
							},
							text: false
						})
						.removeClass("ui-corner-all")
						.addClass("custom-combobox-toggle ui-corner-right")
						.on("mousedown", function() {
							wasOpen = input.autocomplete("widget").is(":visible");
						})
						.on("click", function() {
							input.trigger("focus");
							// Close if already visible
							if (wasOpen) {
								return;
							}

							// Pass empty string as value to search for, displaying all results
							input.autocomplete("search", "");
						});
				},

				_source: function(request, response) {

					var matcher = new RegExp($.ui.autocomplete.escapeRegex(request.term), "i");
					response(this.element.children("option").map(function() {
						var text = $(this).text();

						if (this.value && (!request.term || matcher.test(text)))
							return {
								label: text,
								value: text,
								option: this
							};
					}));
				},

				_removeIfInvalid: function(event, ui) {

					// Selected an item, nothing to do
					if (ui.item) {
						return;
					}

					// Search for a match (case-insensitive)
					var value = this.input.val(),
						valueLowerCase = value.toLowerCase(),
						valid = false;
					this.element.children("option").each(function() {
						if ($(this).text().toLowerCase() === valueLowerCase) {
							this.selected = valid = true;
							return false;
						}
					});

					// Found a match, nothing to do
					if (valid) {
						return;
					}

					// Remove invalid value
					this.input
						.val("")
						.attr("title", value + " didn't match any item")
						.tooltip("open");
					this.element.val("");
					this._delay(function() {
						this.input.tooltip("close").attr("title", "");
					}, 2500);
					this.input.autocomplete("instance").term = "";
				},

				_destroy: function() {
					this.wrapper.remove();
					this.element.show();

				}
			});

			$("#filtro_ciudad").combobox();
			$("#toggle").on("click", function() {
				$("#filtro_ciudad").toggle();
			});
		});
	</script>
</head>

<body class="cabecera">

	<?php
	if (empty($_SESSION['userlog'])) {
	?>
		<div id="container2">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%" alt="logo" /></a>
				
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
			<div class="barrayoga" style="margin-top:-6px; ">
				<ul id="lista1">
					<li style="margin-left:-100px;" class="itemlista1"><a id="current" href="preparacion.php"> HOME PREPARACIÓN FÍSICA </a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="preguntas_preparacion.php">PREGUNTAS FRECUENTES</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="preparacion_fisica_casa.php">PREPARACIÓN FÍSICA EN CASA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="#">TRASMISIONES EN LÍNEA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="preparacion_cursos.php" style="color:#fff; text-shadow: 1px 1px 2px black;">CURSOS EN LÍNEA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="servicios_fithub.php">NUTRICIÓN EN LÍNEA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="servicios_libreria_general.php" >LIBRERÍA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="historia_preparacion.php">MI CUENTA</a></li>
				</ul>
			</div>

			<div class="contenido">
				<div class="barraizquierdayoga">

					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" class="buscadoryoga" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchyoga">
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
					<div class="especialyoga">
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Aeróbicos</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Baile Bachata</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Baile Merengue</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Baile Salsa</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Baile Tango</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Barre</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Crosstech</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Danzika</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Spinning</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Body Combat</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Gluteo Xp</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Pilates</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Rumba</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Step</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Zumba</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Tabata</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Tono</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acidez">Acroyoga</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acné">Bikram yoga</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Acoso escolar">Esoterismo integral</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Adicción a medicamentos">Hatha yoga</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Agorafobia">Meditación</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Alcoholismo y abuso de alcohol">Tantra yoga</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Alergia a insectos">Vinyasa yoga</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Alergia ocular">Yoga aéreo</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Ambliopía">Yoga prenatal</li>
						</a><br>
						<a href=" ">
							<li style="color: #333; " value=">Amenaza de aborto">Yoga restaurativo</li>
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


	<div align="center" style="background-color:#FFF7DB">
		<img style="width:84%; margin-top:142px; height:0.01px " src="img/barratop.png" alt="estres">
	</div>
	<div style="margin-left:17%">
		<iframe src="https://www.smartfit.com.co/" width="100%" height="2200px" allow="fullscreen"></iframe>

	</div>
	<!-- Gurus -->

	<div class="fondomedio">

		<!--Product Grid-->
		<div align="right">


			<div class="footeryoga" align="center">
				<div class="container2">
					<div align="right">
						<img style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/ayoga.png" alt="kalita">
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
									<a href="https://www.facebook.com/Guruxy-104884922225645"><i style="color: #FFFFFF"  class="fa fa-facebook fa-2x"></i></a>
								</li>

								<li>
									<a href="https://www.instagram.com/guxury.co/"><i style="color: #FFFFFF"  class="fa fa-instagram fa-2x"></i></a>
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
						$(".barraizquierdayoga").mCustomScrollbar({
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
			<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
			<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
			<script src="js/login.js"></script>
</body>

</html>