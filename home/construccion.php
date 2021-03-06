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
	<link rel="stylesheet" href="/resources/demos/style.css">
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
			background-color: #FFC808;
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

		.sinfondo :hover {
			background-color: none;
			color: #000;
			text-decoration: none;
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
			<div class="barraconstruccion" style="margin-top:-6px; ">
				<ul id="lista1">
					<li style="margin-left:-23px;" class="itemlista1"><a id="current" href="construccion.php" style="color:#fff; text-shadow: 1px 1px 1px black;"> HOME ESPECIALISTAS CONSTRUCCIÓN </a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="#">PREGUNTAS FRECUENTES</a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="presencial_construccion.php">CITA PRESENCIAL</a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="servicios_cursos_construccion.php">CURSOS EN LÍNEA </a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="libreria_construccion.php" >LIBRERÍA</a></li>
					<li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
					<li class="itemlista1"><a href="#">MI CUENTA</a></li>
				</ul>
			</div>

			<div class="contenido">
				<div class="barraizquierdaconstruccion">

					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" id="buscador" class="buscadorconstruccion" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchconstruccion">
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
					<div>
						<table style="border: transparent !important;border-top: 0px !important ;color:transparent !important;border-radius: transparten;">
							<tr>
								<td>
									<li style="color: #333; list-style: none; " value="title">Especialistas En:</li>
								</td>
							</tr>

							<tbody id="myTable" class="especialconstructores">

								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Baños')" value="Baños">Baños</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Calentadores de Agua')" value="Calentadores de Agua">Calentadores de Agua</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Casa inteligente y Seguridad')" value="Casa inteligente y Seguridad">Casa inteligente y Seguridad</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Cerraduras y Herrajes')" value="Cerraduras y Herrajes">Cerraduras y Herrajes</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Climatizacion')" value="Climatizacion">Climatizacion</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Cocina')" value="Cocina">Cocina</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Complementos de Baños')" value="Complementos de Baños">Complementos de Baños</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Construccion y Ferreteria')" value="Construccion y Ferreteria">Construccion y Ferreteria</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Cortinas y Persianas')" value="Cortinas y Persianas">Cortinas y Persianas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Decoración')" value="Decoración">Decoración</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Electricidad')" value="Electricidad">Electricidad</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Electrodomésticos de Cocina')" value="Electrodomésticos de Cocina">Electrodomésticos de Cocina</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Electrodomésticos del Hogar')" value="Electrodomésticos del Hogar">Electrodomésticos del Hogar</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Escaleras y Mudanzas')" value="Escaleras y Mudanzas">Escaleras y Mudanzas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Estufas, Hornos & Campanas')" value="Estufas, Hornos & Campanas">Estufas, Hornos & Campanas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ferretería')" value="Ferretería">Ferretería</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Herramientas')" value="Herramientas">Herramientas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Herramientas Electricas')" value="Herramientas Electricas">Herramientas Electricas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Iluminación')" value="Iluminación">Iluminación</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Impermeabilizantes')" value="Impermeabilizantes">Impermeabilizantes</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Jardín')" value="Jardín">Jardín</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Lavandería y Lavadero')" value="Lavandería y Lavadero">Lavandería y Lavadero</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Limpieza')" value="Limpieza">Limpieza</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Encofrador')" value="Línea Blanca">Línea Blanca</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Maderas, Tableros y Herrajes')" value="Maderas, Tableros y Herrajes">Maderas, Tableros y Herrajes</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Materiales de Construcción')" value="Materiales de Construcción">Materiales de Construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Muebles de Patio')" value="Muebles de Patio">Muebles de Patio</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Organizadores')" value="Organizadores">Organizadores</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Pinturas')" value="Pinturas">Pinturas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Pisos y Paredes')" value="Pisos y Paredes">Pisos y Paredes</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Pisos y Pinturas para tus Espacios')" value="Pisos y Pinturas para tus Espacios">Pisos y Pinturas para tus Espacios</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Plomería')" value="Plomería">Plomería</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Puertas y Ventanas')" value="Puertas y Ventanas">Puertas y Ventanas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Seguridad')" value="Seguridad">Seguridad</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Tecnologia y Television')" value="Tecnologia y Television">Tecnologia y Television</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Tejas y Drywall')" value="Tejas y Drywall">Tejas y Drywall</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ventilación')" value="Ventilación">Ventilación</li>
										</a></td>
								</tr>


								<tr>
									<td>
										<li class="sinfondo" style="color: #333; " value="title">Profesional de Construcción:</li>
									</td>
								</tr>

								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Albañil')" value="Albañil">Albañil</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Alicatador')" value="Alicatador">Alicatador</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Arquitecto')" value="Arquitecto">Arquitecto</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Arquitecto Bioclimático')" value="Arquitecto Bioclimático">Arquitecto Bioclimático</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Arquitecto paisajista')" value="Arquitecto paisajista">Arquitecto paisajista</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Arquitecto técnico')" value="Arquitecto técnico">Arquitecto técnico</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Asesor de energías domésticas')" value="Asesor de energías domésticas">Asesor de energías domésticas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Asistente topografía')" value="Asistente topografía">Asistente topografía</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Auxiliar Técnico de Obra')" value="Auxiliar Técnico de Obra">Auxiliar Técnico de Obra</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Buzo')" value="Buzo">Buzo</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Capataz en Construcción de Edificios')" value="Capataz en Construcción de Edificios">Capataz en Construcción de Edificios</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Carpintero')" value="Carpintero">Carpintero</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Carretillero')" value="Carretillero">Carretillero</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Construcción Manager')" value="Construcción Manager">Construcción Manager</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Cristalero')" value="Cristalero">Cristalero</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Decorador')" value="Decorador">Decorador</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Delineante')" value="Delineante">Delineante</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Director de cantera')" value="Director de cantera">Director de cantera</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Director de Obra')" value="Director de Obra">Director de Obra</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Director de paisajismo')" value="Director de paisajismo">Director de paisajismo</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Encargado de la construcción')" value="Encargado de la construcción">Encargado de la construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Encargado de Obra')" value="Encargado de Obra">Encargado de Obra</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Encargado de servicios')" value="Encargado de servicios">Encargado de servicios</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Encofrador')" value="Encofrador">Encofrador</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Experto Eficiencia Energética')" value="Experto Eficiencia Energética">Experto Eficiencia Energética</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Experto en Simulación Energética de Edificios')" value="Experto en Simulación Energética de Edificios">Experto en Simulación Energética de Edificios</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ferrallista')" value="Ferrallista">Ferrallista</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Geólogo')" value="Geólogo">Geólogo</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Hidrogeólogo')" value="Hidrogeólogo">Hidrogeólogo</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero civil')" value="Ingeniero civil">Ingeniero civil</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero de la construcción')" value="Ingeniero de la construcción">Ingeniero de la construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero de plataformas petrolíferas marinas')" value="Ingeniero de plataformas petrolíferas marinas">Ingeniero de plataformas petrolíferas marinas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero de transportes')" value="Ingeniero de transportes">Ingeniero de transportes</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero estructural')" value="Ingeniero estructural">Ingeniero estructural</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero geólogo')" value="Ingeniero geólogo">Ingeniero geólogo</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero Medioambiental')" value="Ingeniero Medioambiental">Ingeniero Medioambiental</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero de Petróleos')" value="Ingeniero de Petróleos">Ingeniero de Petróleos</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Ingeniero técnico de la construcción')" value="Ingeniero técnico de la construcción">Ingeniero técnico de la construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Inspector de obras')" value="Inspector de obras">Inspector de obras</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Instalador de aislante térmico e insonorización')" value="Instalador de aislante térmico e insonorización">Instalador de aislante térmico e insonorización</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Instalador de cercas')" value="Instalador de cercas">Instalador de cercas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Instalador de cercas')" value="Instalador de cercas">Instalador de cercas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Instalador de sistemas de calefacción y aire acondicionado')" value="Instalador de sistemas de calefacción y aire acondicionado">Instalador de sistemas de calefacción y aire acondicionado</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Instalador de ventanas')" value="Instalador de ventanas">Instalador de ventanas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Instalador Electricista')" value="Instalador Electricista">Instalador Electricista</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Instalador y reparador en tecnologías TIC')" value="Instalador y reparador en tecnologías TIC">Instalador y reparador en tecnologías TIC</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Interprete de Planos en Construcción')" value="Interprete de Planos en Construcción">Interprete de Planos en Construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Mampostero')" value="Mampostero">Mampostero</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Mantenedor de edificios')" value="Mantenedor de edificios">Mantenedor de edificios</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Maquetista')" value="Maquetista">Maquetista</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Mecánico de maquinaria de construcción')" value="Mecánico de maquinaria de construcción">Mecánico de maquinaria de construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Montador de andamios')" value="Montador de andamios">Montador de andamios</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Montador de estructuras metálicas')" value="Montador de estructuras metálicas">Montador de estructuras metálicas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Obrero especializado en la fabricación de herramientas')" value="Obrero especializado en la fabricación de herramientas">Obrero especializado en la fabricación de herramientas</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Operador de grúa')" value="Operador de grúa">Operador de grúa</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Operador de maquinaria de construcción')" value="Operador de maquinaria de construcción">Operador de maquinaria de construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Operador de máquinas para trabajar la madera')" value="Operador de máquinas para trabajar la madera">Operador de máquinas para trabajar la madera</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Operario de carretilla elevadora')" value="Operario de carretilla elevadora">Operario de carretilla elevadora</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Operario de derribos')" value="Operario de derribos">Operario de derribos</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Operario de un almacén de construcción')" value="Operario de un almacén de construcción">Operario de un almacén de construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Peón de la construcción')" value="Peón de la construcción">Peón de la construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Perito de la construcción')" value="Perito de la construcción">Perito de la construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Personal de apoyo urbanístico')" value="Personal de apoyo urbanístico">Personal de apoyo urbanístico</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Proveedor de materiales de construcción')" value="Proveedor de materiales de construcción">Proveedor de materiales de construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Pulidor de muebles')" value="Pulidor de muebles">Pulidor de muebles</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Revocador de Construcción')" value="Revocador de Construcción">Revocador de Construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Soldador / Calderero')" value="Soldador / Calderero">Soldador / Calderero</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Techador')" value="Techador">Techador</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico de aislamiento de paredes')" value="Técnico de aislamiento de paredes">Técnico de aislamiento de paredes</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico de impermeabilización')" value="Técnico de impermeabilización">Técnico de impermeabilización</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico de ingeniería civil o estructural')" value="Técnico de ingeniería civil o estructural">Técnico de ingeniería civil o estructural</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico de la construcción')" value="Técnico de la construcción">Técnico de la construcción</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico de planchado')" value="Técnico de planchado">Técnico de planchado</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico de recubrimiento de superficies')" value="Técnico de recubrimiento de superficies">Técnico de recubrimiento de superficies</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico en Diseño de Edificaciones')" value="Técnico en Diseño de Edificaciones">Técnico en Diseño de Edificaciones</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico geólogo')" value="Técnico geólogo">Técnico geólogo </li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Técnico topógrafo')" value="Técnico topógrafo">Técnico topógrafo</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Trabajador de carreteras')" value="Trabajador de carreteras">Trabajador de carreteras</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Urbanista')" value="Urbanista">Urbanista</li>
										</a></td>
								</tr>
								<tr>
									<td><a href="#">
											<li style="color: #333; " onclick="filtroTipo('Yesero')" value="Yesero">Yesero</li>
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


	<div align="right">
		<a href="como.php"><img style="width:84%; margin-top:142px " src="img/categorias/barracomo.png" alt="estres"></a>
	</div>

	<div class="slideshow-container2" style="margin-left:16%">
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio1.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_construccion3.jpg" style="width:100%"></a>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>

	</div>

	<!-- Gurus -->

	<div class="fondomedio">

		<div style=" background-color: #f8d878">
			<br>
			<img src="img/nuestros.png" style="width: 25%; margin-left:17%" height="auto">
			<a style=" margin-left:5%">Filtrar por:</a>
			<br><br>

			<input type="hidden" id="filtro" value="especialista">
			<span style="margin-left:20%"> Ciudad:</span>
			<select class="camposgenerales" name="filtro_ciudad" id="filtro_ciudad" onchange="change_ciudad(this)">
				<option value="">-----</option>
				<option value="Amazonas">Amazonas</option>
				<option value="Leticia">Leticia</option>
				<option value="PuertoNariño">PuertoNariño</option>
				<option value="Antioquia">Antioquia</option>
				<option value="Abejorral">Abejorral</option>
				<option value="Abriaquí">Abriaquí</option>
				<option value="Alejandría">Alejandría</option>
				<option value="Amaga">Amaga</option>
				<option value="Amalfi">Amalfi</option>
				<option value="Andes">Andes</option>
				<option value="Angelópolis">Angelópolis</option>
				<option value="Angostura">Angostura</option>
				<option value="Anorí">Anorí</option>
				<option value="Anzá">Anzá</option>
				<option value="Apartadó">Apartadó</option>
				<option value="Arboletes">Arboletes</option>
				<option value="Argelia">Argelia</option>
				<option value="Armenia">Armenia</option>
				<option value="Barbosa">Barbosa</option>
				<option value="Bello">Bello</option>
				<option value="Belmira">Belmira</option>
				<option value="Betania">Betania</option>
				<option value="Betulia">Betulia</option>
				<option value="Briceño">Briceño</option>
				<option value="Buriticá">Buriticá</option>
				<option value="Cáceres">Cáceres</option>
				<option value="Caicedo">Caicedo</option>
				<option value="Caldas">Caldas</option>
				<option value="Campamento">Campamento</option>
				<option value="Cañasgordas">Cañasgordas</option>
				<option value="Caracolí">Caracolí</option>
				<option value="Caramanta">Caramanta</option>
				<option value="Carepa">Carepa</option>
				<option value="CarolinaDelPrincipe">CarolinaDelPrincipe</option>
				<option value="Caucasia">Caucasia</option>
				<option value="Chigorodó">Chigorodó</option>
				<option value="Cisneros">Cisneros</option>
				<option value="CiudadBolívar">CiudadBolívar</option>
				<option value="Cocorná">Cocorná</option>
				<option value="Concepción">Concepción</option>
				<option value="Concordia">Concordia</option>
				<option value="Copacabana">Copacabana</option>
				<option value="Dabeiba">Dabeiba</option>
				<option value="DonMatías">DonMatías</option>
				<option value="Ebéjico">Ebéjico</option>
				<option value="ElBagre">ElBagre</option>
				<option value="ElCarmenDeViboral">ElCarmenDeViboral</option>
				<option value="ElPeñol">ElPeñol</option>
				<option value="ElRetiro">ElRetiro</option>
				<option value="Entrerríos">Entrerríos</option>
				<option value="Envigado">Envigado</option>
				<option value="Fredonia">Fredonia</option>
				<option value="Frontino">Frontino</option>
				<option value="Giraldo">Giraldo</option>
				<option value="Girardota">Girardota</option>
				<option value="GómezPlata">GómezPlata</option>
				<option value="Granada">Granada</option>
				<option value="Guadalupe">Guadalupe</option>
				<option value="Guarne">Guarne</option>
				<option value="Guatapé">Guatapé</option>
				<option value="Heliconia">Heliconia</option>
				<option value="Hispania">Hispania</option>
				<option value="Itagüí">Itagüí</option>
				<option value="Ituango">Ituango</option>
				<option value="Jardín">Jardín</option>
				<option value="Jericó">Jericó</option>
				<option value="LaCejaDelTambo">LaCejaDelTambo</option>
				<option value="LaEstrella">LaEstrella</option>
				<option value="LaPintada">LaPintada</option>
				<option value="LaUnión">LaUnión</option>
				<option value="Liborina">Liborina</option>
				<option value="Maceo">Maceo</option>
				<option value="Marinilla">Marinilla</option>
				<option value="Medellín">Medellín</option>
				<option value="Montebello">Montebello</option>
				<option value="Murindó">Murindó</option>
				<option value="Mutatá">Mutatá</option>
				<option value="Nariño">Nariño</option>
				<option value="Nechí">Nechí</option>
				<option value="Necoclí">Necoclí</option>
				<option value="Olaya">Olaya</option>
				<option value="Peque">Peque</option>
				<option value="Pueblorrico">Pueblorrico</option>
				<option value="PuertoBerrio">PuertoBerrio</option>
				<option value="PuertoNare">PuertoNare</option>
				<option value="PuertoTriunfo">PuertoTriunfo</option>
				<option value="Remedios">Remedios</option>
				<option value="Rionegro">Rionegro</option>
				<option value="Sabanalarga">Sabanalarga</option>
				<option value="Sabaneta">Sabaneta</option>
				<option value="Salgar">Salgar</option>
				<option value="SanAndrésDeCuerquia">SanAndrésDeCuerquia</option>
				<option value="SanCarlos">SanCarlos</option>
				<option value="SanFrancisco">SanFrancisco</option>
				<option value="SanJerónimo">SanJerónimo</option>
				<option value="SanJoséDeLaMontaña">SanJoséDeLaMontaña</option>
				<option value="SanJuanDeUrabá">SanJuanDeUrabá</option>
				<option value="SanLuis">SanLuis</option>
				<option value="SanPedroDeLosMilagros">SanPedroDeLosMilagros</option>
				<option value="SanPedroDeUrabá">SanPedroDeUrabá</option>
				<option value="SanRafael">SanRafael</option>
				<option value="SanRoque">SanRoque</option>
				<option value="SanVicente">SanVicente</option>
				<option value="SantaBárbara">SantaBárbara</option>
				<option value="SantaRosaDeOsos">SantaRosaDeOsos</option>
				<option value="SantafeDeAntioquia">SantafeDeAntioquia</option>
				<option value="SantoDomingo">SantoDomingo</option>
				<option value="Santuario">Santuario</option>
				<option value="Segovia">Segovia</option>
				<option value="Sonsón">Sonsón</option>
				<option value="Sopetrán">Sopetrán</option>
				<option value="Támesis">Támesis</option>
				<option value="Tarazá">Tarazá</option>
				<option value="Tarso">Tarso</option>
				<option value="Titiribí">Titiribí</option>
				<option value="Toledo">Toledo</option>
				<option value="Turbo">Turbo</option>
				<option value="Uramita">Uramita</option>
				<option value="Urrao">Urrao</option>
				<option value="Valdivia">Valdivia</option>
				<option value="Valparaíso">Valparaíso</option>
				<option value="Vegachí">Vegachí</option>
				<option value="Venecia">Venecia</option>
				<option value="VigíaDelFuerte">VigíaDelFuerte</option>
				<option value="Yalí">Yalí</option>
				<option value="Yarumal">Yarumal</option>
				<option value="Yolombó">Yolombó</option>
				<option value="Yondo">Yondo</option>
				<option value="Zaragoza">Zaragoza</option>
				<option value="Arauca">Arauca</option>
				<option value="Arauquita">Arauquita</option>
				<option value="CravoNorte">CravoNorte</option>
				<option value="Fortul">Fortul</option>
				<option value="PuertoRondón">PuertoRondón</option>
				<option value="Saravena">Saravena</option>
				<option value="Tame">Tame</option>
				<option value="Atlántico">Atlántico</option>
				<option value="Baranoa">Baranoa</option>
				<option value="Barranquilla">Barranquilla</option>
				<option value="CampoDeLaCruz">CampoDeLaCruz</option>
				<option value="Candelaria">Candelaria</option>
				<option value="Galapa">Galapa</option>
				<option value="JuanDeAcosta">JuanDeAcosta</option>
				<option value="Luruaco">Luruaco</option>
				<option value="Malambo">Malambo</option>
				<option value="Manatí">Manatí</option>
				<option value="PalmarDeVarela">PalmarDeVarela</option>
				<option value="Piojo">Piojo</option>
				<option value="Polonuevo">Polonuevo</option>
				<option value="Ponedera">Ponedera</option>
				<option value="PuertoColombia">PuertoColombia</option>
				<option value="Repelón">Repelón</option>
				<option value="Sabanagrande">Sabanagrande</option>
				<option value="Sabanalarga">Sabanalarga</option>
				<option value="SantaLucía">SantaLucía</option>
				<option value="SantoTomas">SantoTomas</option>
				<option value="Soledad">Soledad</option>
				<option value="Suan">Suan</option>
				<option value="Tubará">Tubará</option>
				<option value="Usiacurí">Usiacurí</option>
				<option value="Bolivar">Bolivar</option>
				<option value="Achí">Achí</option>
				<option value="AltosDelRosario">AltosDelRosario</option>
				<option value="Arenal">Arenal</option>
				<option value="Arjona">Arjona</option>
				<option value="Arroyohondo">Arroyohondo</option>
				<option value="BarrancoDeLoba">BarrancoDeLoba</option>
				<option value="Calamar">Calamar</option>
				<option value="Cantagallo">Cantagallo</option>
				<option value="CartagenadeIndias">CartagenadeIndias</option>
				<option value="Cicuco">Cicuco</option>
				<option value="Clemencia">Clemencia</option>
				<option value="Córdoba">Córdoba</option>
				<option value="ElCarmenDeBolívar">ElCarmenDeBolívar</option>
				<option value="ElGuamo">ElGuamo</option>
				<option value="ElPeñon">ElPeñon</option>
				<option value="HatilloDeLoba">HatilloDeLoba</option>
				<option value="Magangué">Magangué</option>
				<option value="Mahates">Mahates</option>
				<option value="Margarita">Margarita</option>
				<option value="MaríaLaBaja">MaríaLaBaja</option>
				<option value="Montecristo">Montecristo</option>
				<option value="Morales">Morales</option>
				<option value="Norosí">Norosí</option>
				<option value="Pinillos">Pinillos</option>
				<option value="Regidor">Regidor</option>
				<option value="Rioviejo">Rioviejo</option>
				<option value="SanCristóbal">SanCristóbal</option>
				<option value="SanEstanislao">SanEstanislao</option>
				<option value="SanFernando">SanFernando</option>
				<option value="SanJacinto">SanJacinto</option>
				<option value="SanJacintoDelCauca">SanJacintoDelCauca</option>
				<option value="SanJuanNepomuceno">SanJuanNepomuceno</option>
				<option value="SanMartínDeLoba">SanMartínDeLoba</option>
				<option value="SanPablo">SanPablo</option>
				<option value="SantaCatalina">SantaCatalina</option>
				<option value="SantaCruzDeMompós">SantaCruzDeMompós</option>
				<option value="SantaRosaDelNorte">SantaRosaDelNorte</option>
				<option value="SantaRosaDelSur">SantaRosaDelSur</option>
				<option value="Simití">Simití</option>
				<option value="Soplaviento">Soplaviento</option>
				<option value="TalaiguaNuevo">TalaiguaNuevo</option>
				<option value="Tiquisio">Tiquisio</option>
				<option value="Turbaco">Turbaco</option>
				<option value="Turbana">Turbana</option>
				<option value="Villanueva">Villanueva</option>
				<option value="Zambrano">Zambrano</option>
				<option value="Boyacá">Boyacá</option>
				<option value="Almeida">Almeida</option>
				<option value="Aquitania">Aquitania</option>
				<option value="Arcabuco">Arcabuco</option>
				<option value="Belén">Belén</option>
				<option value="Berbeo">Berbeo</option>
				<option value="Betéitiva">Betéitiva</option>
				<option value="Boavita">Boavita</option>
				<option value="Boyacá">Boyacá</option>
				<option value="Briceño">Briceño</option>
				<option value="Buenavista">Buenavista</option>
				<option value="Busbanzá">Busbanzá</option>
				<option value="Caldas">Caldas</option>
				<option value="Campohermoso">Campohermoso</option>
				<option value="Cerinza">Cerinza</option>
				<option value="Chinavita">Chinavita</option>
				<option value="Chiquinquirá">Chiquinquirá</option>
				<option value="Chíquiza">Chíquiza</option>
				<option value="Chiscas">Chiscas</option>
				<option value="Chita">Chita</option>
				<option value="Chitaraque">Chitaraque</option>
				<option value="Chivata">Chivata</option>
				<option value="Chivor">Chivor</option>
				<option value="Ciénega">Ciénega</option>
				<option value="Combita">Combita</option>
				<option value="Coper">Coper</option>
				<option value="Corrales">Corrales</option>
				<option value="Covarachía">Covarachía</option>
				<option value="Cubará">Cubará</option>
				<option value="Cucaita">Cucaita</option>
				<option value="Cuítiva">Cuítiva</option>
				<option value="Duitama">Duitama</option>
				<option value="ElCocuy">ElCocuy</option>
				<option value="ElEspino">ElEspino</option>
				<option value="Firavitoba">Firavitoba</option>
				<option value="Floresta">Floresta</option>
				<option value="Gachantivá">Gachantivá</option>
				<option value="Gámeza">Gámeza</option>
				<option value="Garagoa">Garagoa</option>
				<option value="Guacamayas">Guacamayas</option>
				<option value="Guateque">Guateque</option>
				<option value="Guayatá">Guayatá</option>
				<option value="Güicán">Güicán</option>
				<option value="Iza">Iza</option>
				<option value="Jenesano">Jenesano</option>
				<option value="Jericó">Jericó</option>
				<option value="LaCapilla">LaCapilla</option>
				<option value="LaUvita">LaUvita</option>
				<option value="LaVictoria">LaVictoria</option>
				<option value="Labranzagrande">Labranzagrande</option>
				<option value="Macanal">Macanal</option>
				<option value="Maripi">Maripi</option>
				<option value="Miraflores">Miraflores</option>
				<option value="Mongua">Mongua</option>
				<option value="Monguí">Monguí</option>
				<option value="Moniquirá">Moniquirá</option>
				<option value="Motavita">Motavita</option>
				<option value="Muzo">Muzo</option>
				<option value="Nobsa">Nobsa</option>
				<option value="NuevoColón">NuevoColón</option>
				<option value="Oicatá">Oicatá</option>
				<option value="Otanche">Otanche</option>
				<option value="Pachavita">Pachavita</option>
				<option value="Páez">Páez</option>
				<option value="Paipa">Paipa</option>
				<option value="Pajarito">Pajarito</option>
				<option value="Panqueba">Panqueba</option>
				<option value="Pauna">Pauna</option>
				<option value="Paya">Paya</option>
				<option value="PazDeRío">PazDeRío</option>
				<option value="Pesca">Pesca</option>
				<option value="Pisba">Pisba</option>
				<option value="PuertoBoyacá">PuertoBoyacá</option>
				<option value="Quípama">Quípama</option>
				<option value="Ramiriquí">Ramiriquí</option>
				<option value="Ráquira">Ráquira</option>
				<option value="Rondón">Rondón</option>
				<option value="Saboya">Saboya</option>
				<option value="Sáchica">Sáchica</option>
				<option value="Samacá">Samacá</option>
				<option value="SanEduardo">SanEduardo</option>
				<option value="SanJoséDePare">SanJoséDePare</option>
				<option value="SanLuisDeGaceno">SanLuisDeGaceno</option>
				<option value="SanMateo">SanMateo</option>
				<option value="SanMiguelDeSema">SanMiguelDeSema</option>
				<option value="SanPabloDeBorbur">SanPabloDeBorbur</option>
				<option value="SantaMaría">SantaMaría</option>
				<option value="SantaRosaDeViterbo">SantaRosaDeViterbo</option>
				<option value="SantaSofía">SantaSofía</option>
				<option value="Santana">Santana</option>
				<option value="Sativanorte">Sativanorte</option>
				<option value="Sativasur">Sativasur</option>
				<option value="Siachoque">Siachoque</option>
				<option value="Soatá">Soatá</option>
				<option value="Socha">Socha</option>
				<option value="Socotá">Socotá</option>
				<option value="Sogamoso">Sogamoso</option>
				<option value="Somondoco">Somondoco</option>
				<option value="Sora">Sora</option>
				<option value="Soracá">Soracá</option>
				<option value="Sotaquirá">Sotaquirá</option>
				<option value="Susacón">Susacón</option>
				<option value="Sutamarchan">Sutamarchan</option>
				<option value="Sutatenza">Sutatenza</option>
				<option value="Tasco">Tasco</option>
				<option value="Tenza">Tenza</option>
				<option value="Tibaná">Tibaná</option>
				<option value="Tibasosa">Tibasosa</option>
				<option value="Tinjacá">Tinjacá</option>
				<option value="Tipacoque">Tipacoque</option>
				<option value="Toca">Toca</option>
				<option value="Togüí">Togüí</option>
				<option value="Tópaga">Tópaga</option>
				<option value="Tota">Tota</option>
				<option value="Tunja">Tunja</option>
				<option value="Tunungua">Tunungua</option>
				<option value="Turmequé">Turmequé</option>
				<option value="Tuta">Tuta</option>
				<option value="Tutazá">Tutazá</option>
				<option value="Úmbita">Úmbita</option>
				<option value="Ventaquemada">Ventaquemada</option>
				<option value="VillaDeLeyva">VillaDeLeyva</option>
				<option value="Viracachá">Viracachá</option>
				<option value="Zetaquirá">Zetaquirá</option>
				<option value="Caldas">Caldas</option>
				<option value="Aguadas">Aguadas</option>
				<option value="Anserma">Anserma</option>
				<option value="Aranzazu">Aranzazu</option>
				<option value="Belalcazar">Belalcazar</option>
				<option value="Chinchiná">Chinchiná</option>
				<option value="Filadelfia">Filadelfia</option>
				<option value="LaDorada">LaDorada</option>
				<option value="LaMerced">LaMerced</option>
				<option value="Manizales">Manizales</option>
				<option value="Manzanares">Manzanares</option>
				<option value="Marmato">Marmato</option>
				<option value="Marquetalia">Marquetalia</option>
				<option value="Marulanda">Marulanda</option>
				<option value="Neira">Neira</option>
				<option value="Norcasia">Norcasia</option>
				<option value="Pacora">Pacora</option>
				<option value="Palestina">Palestina</option>
				<option value="Pensilvania">Pensilvania</option>
				<option value="Riosucio">Riosucio</option>
				<option value="Risaralda">Risaralda</option>
				<option value="Salamina">Salamina</option>
				<option value="Samaná">Samaná</option>
				<option value="SanJosé">SanJosé</option>
				<option value="Supía">Supía</option>
				<option value="Victoria">Victoria</option>
				<option value="Villamaría">Villamaría</option>
				<option value="Viterbo">Viterbo</option>
				<option value="Caquetá">Caquetá</option>
				<option value="Albania">Albania</option>
				<option value="BelénDeLosAndaquies">BelénDeLosAndaquies</option>
				<option value="CartagenaDelChairá">CartagenaDelChairá</option>
				<option value="Curillo">Curillo</option>
				<option value="ElDoncello">ElDoncello</option>
				<option value="ElPaujil">ElPaujil</option>
				<option value="Florencia">Florencia</option>
				<option value="LaMontañita">LaMontañita</option>
				<option value="Milán">Milán</option>
				<option value="Morelia">Morelia</option>
				<option value="PuertoRico">PuertoRico</option>
				<option value="SanJoséDelFragua">SanJoséDelFragua</option>
				<option value="SanVicenteDelCaguán">SanVicenteDelCaguán</option>
				<option value="Solano">Solano</option>
				<option value="Solita">Solita</option>
				<option value="Valparaíso">Valparaíso</option>
				<option value="Casanare">Casanare</option>
				<option value="Aguazul">Aguazul</option>
				<option value="Chameza">Chameza</option>
				<option value="HatoCorozal">HatoCorozal</option>
				<option value="LaSalina">LaSalina</option>
				<option value="Maní">Maní</option>
				<option value="Monterrey">Monterrey</option>
				<option value="Nunchía">Nunchía</option>
				<option value="Orocué">Orocué</option>
				<option value="PazDeAriporo">PazDeAriporo</option>
				<option value="Pore">Pore</option>
				<option value="Recetor">Recetor</option>
				<option value="Sabanalarga">Sabanalarga</option>
				<option value="Sácama">Sácama</option>
				<option value="SanLuisDePalenque">SanLuisDePalenque</option>
				<option value="Támara">Támara</option>
				<option value="Tauramena">Tauramena</option>
				<option value="Trinidad">Trinidad</option>
				<option value="Villanueva">Villanueva</option>
				<option value="Yopal">Yopal</option>
				<option value="Cauca">Cauca</option>
				<option value="Almaguer">Almaguer</option>
				<option value="Argelia">Argelia</option>
				<option value="Balboa">Balboa</option>
				<option value="Bolívar">Bolívar</option>
				<option value="BuenosAires">BuenosAires</option>
				<option value="Cajibio">Cajibio</option>
				<option value="Caldono">Caldono</option>
				<option value="Caloto">Caloto</option>
				<option value="Corinto">Corinto</option>
				<option value="ElTambo">ElTambo</option>
				<option value="Florencia">Florencia</option>
				<option value="Guachené">Guachené</option>
				<option value="Guapi">Guapi</option>
				<option value="Inzá">Inzá</option>
				<option value="Jambaló">Jambaló</option>
				<option value="LaSierra">LaSierra</option>
				<option value="LaVega">LaVega</option>
				<option value="LópezDeMicay">LópezDeMicay</option>
				<option value="Mercaderes">Mercaderes</option>
				<option value="Miranda">Miranda</option>
				<option value="Morales">Morales</option>
				<option value="Padilla">Padilla</option>
				<option value="Páez">Páez</option>
				<option value="Patía">Patía</option>
				<option value="Piamonte">Piamonte</option>
				<option value="Piendamó">Piendamó</option>
				<option value="Popayán">Popayán</option>
				<option value="PuertoTejada">PuertoTejada</option>
				<option value="Puracé">Puracé</option>
				<option value="Rosas">Rosas</option>
				<option value="SanSebastián">SanSebastián</option>
				<option value="SantaRosa">SantaRosa</option>
				<option value="SantanderDeQuilichao">SantanderDeQuilichao</option>
				<option value="Silvia">Silvia</option>
				<option value="Sotará">Sotará</option>
				<option value="Suárez">Suárez</option>
				<option value="Sucre">Sucre</option>
				<option value="Timbío">Timbío</option>
				<option value="Timbiquí">Timbiquí</option>
				<option value="Toribio">Toribio</option>
				<option value="Totoro">Totoro</option>
				<option value="VillaRica">VillaRica</option>
				<option value="Cesar">Cesar</option>
				<option value="Aguachica">Aguachica</option>
				<option value="AgustínCodazzi">AgustínCodazzi</option>
				<option value="Astrea">Astrea</option>
				<option value="Becerril">Becerril</option>
				<option value="Bosconia">Bosconia</option>
				<option value="Chimichagua">Chimichagua</option>
				<option value="Chiriguaná">Chiriguaná</option>
				<option value="Curumaní">Curumaní</option>
				<option value="ElCopey">ElCopey</option>
				<option value="ElPaso">ElPaso</option>
				<option value="Gamarra">Gamarra</option>
				<option value="González">González</option>
				<option value="LaGloria">LaGloria</option>
				<option value="LaJaguaDeIbirico">LaJaguaDeIbirico</option>
				<option value="LaPaz">LaPaz</option>
				<option value="ManaureBalcónDelCésar">ManaureBalcónDelCésar</option>
				<option value="Pailitas">Pailitas</option>
				<option value="Pelaya">Pelaya</option>
				<option value="PuebloBello">PuebloBello</option>
				<option value="RioDeOro">RioDeOro</option>
				<option value="SanAlberto">SanAlberto</option>
				<option value="SanDiego">SanDiego</option>
				<option value="SanMartín">SanMartín</option>
				<option value="Tamalameque">Tamalameque</option>
				<option value="Valledupar">Valledupar</option>
				<option value="Chocó">Chocó</option>
				<option value="Acandí">Acandí</option>
				<option value="AltoBaudó">AltoBaudó</option>
				<option value="Atrato">Atrato</option>
				<option value="Bagadó">Bagadó</option>
				<option value="BahíaSolano">BahíaSolano</option>
				<option value="BajoBaudó">BajoBaudó</option>
				<option value="Bojayá">Bojayá</option>
				<option value="CarmenDelDarién">CarmenDelDarién</option>
				<option value="Cértegui">Cértegui</option>
				<option value="Condoto">Condoto</option>
				<option value="ElCantóndeSanPablo">ElCantóndeSanPablo</option>
				<option value="ElCarmenDeAtrato">ElCarmenDeAtrato</option>
				<option value="ElLitoralDeSanJuan">ElLitoralDeSanJuan</option>
				<option value="Istmina">Istmina</option>
				<option value="Juradó">Juradó</option>
				<option value="Lloró">Lloró</option>
				<option value="MedioAtrato">MedioAtrato</option>
				<option value="MedioBaudó">MedioBaudó</option>
				<option value="MedioSanJuan">MedioSanJuan</option>
				<option value="Nóvita">Nóvita</option>
				<option value="Nuquí">Nuquí</option>
				<option value="Quibdó">Quibdó</option>
				<option value="RíoIró">RíoIró</option>
				<option value="RíoQuito">RíoQuito</option>
				<option value="Riosucio">Riosucio</option>
				<option value="SanJosédeTadó">SanJosédeTadó</option>
				<option value="SanJoséDelPalmar">SanJoséDelPalmar</option>
				<option value="Sipí">Sipí</option>
				<option value="Ungüía">Ungüía</option>
				<option value="UniónPanamericana">UniónPanamericana</option>
				<option value="Córdoba">Córdoba</option>
				<option value="Ayapel">Ayapel</option>
				<option value="Buenavista">Buenavista</option>
				<option value="Canalete">Canalete</option>
				<option value="Cereté">Cereté</option>
				<option value="Chimá">Chimá</option>
				<option value="Chinú">Chinú</option>
				<option value="CiénagaDeOro">CiénagaDeOro</option>
				<option value="Cotorra">Cotorra</option>
				<option value="LaApartada">LaApartada</option>
				<option value="LosCórdobas">LosCórdobas</option>
				<option value="Momil">Momil</option>
				<option value="Montelibano">Montelibano</option>
				<option value="Montería">Montería</option>
				<option value="Moñitos">Moñitos</option>
				<option value="PlanetaRica">PlanetaRica</option>
				<option value="PuebloNuevo">PuebloNuevo</option>
				<option value="PuertoEscondido">PuertoEscondido</option>
				<option value="PuertoLibertador">PuertoLibertador</option>
				<option value="Purísima">Purísima</option>
				<option value="Sahagún">Sahagún</option>
				<option value="SanAndrésDeSotavento">SanAndrésDeSotavento</option>
				<option value="SanAntero">SanAntero</option>
				<option value="SanBernardoDelViento">SanBernardoDelViento</option>
				<option value="SanCarlos">SanCarlos</option>
				<option value="SanJoséDeUré">SanJoséDeUré</option>
				<option value="SanPelayo">SanPelayo</option>
				<option value="SantaCruzDeLorica">SantaCruzDeLorica</option>
				<option value="Tierralta">Tierralta</option>
				<option value="Tuchín">Tuchín</option>
				<option value="Valencia">Valencia</option>
				<option value="Cundinamarca">Cundinamarca</option>
				<option value="AguaDeDios">AguaDeDios</option>
				<option value="Albán">Albán</option>
				<option value="Anapoima">Anapoima</option>
				<option value="Anolaima">Anolaima</option>
				<option value="Apulo">Apulo</option>
				<option value="Arbeláez">Arbeláez</option>
				<option value="Beltrán">Beltrán</option>
				<option value="Bituima">Bituima</option>
				<option value="BogotáD.C.">BogotáD.C.</option>
				<option value="Bojacá">Bojacá</option>
				<option value="Cabrera">Cabrera</option>
				<option value="Cachipay">Cachipay</option>
				<option value="Cajicá">Cajicá</option>
				<option value="Caparrapí">Caparrapí</option>
				<option value="Cáqueza">Cáqueza</option>
				<option value="CarmenDeCarupa">CarmenDeCarupa</option>
				<option value="Chaguaní">Chaguaní</option>
				<option value="Chía">Chía</option>
				<option value="Chipaque">Chipaque</option>
				<option value="Choachí">Choachí</option>
				<option value="Chocontá">Chocontá</option>
				<option value="Cogua">Cogua</option>
				<option value="Cota">Cota</option>
				<option value="Cucunubá">Cucunubá</option>
				<option value="ElColegio">ElColegio</option>
				<option value="ElPeñón">ElPeñón</option>
				<option value="ElRosal">ElRosal</option>
				<option value="Facatativá">Facatativá</option>
				<option value="Fómeque">Fómeque</option>
				<option value="Fosca">Fosca</option>
				<option value="Funza">Funza</option>
				<option value="Fúquene">Fúquene</option>
				<option value="Fusagasugá">Fusagasugá</option>
				<option value="Gachalá">Gachalá</option>
				<option value="Gachancipá">Gachancipá</option>
				<option value="Gachetá">Gachetá</option>
				<option value="Gama">Gama</option>
				<option value="Girardot">Girardot</option>
				<option value="Granada">Granada</option>
				<option value="Guachetá">Guachetá</option>
				<option value="Guaduas">Guaduas</option>
				<option value="Guasca">Guasca</option>
				<option value="Guataquí">Guataquí</option>
				<option value="Guatavita">Guatavita</option>
				<option value="GuayabalDeSiquima">GuayabalDeSiquima</option>
				<option value="Guayabetal">Guayabetal</option>
				<option value="Gutierrez">Gutierrez</option>
				<option value="Jerusalen">Jerusalen</option>
				<option value="Junín">Junín</option>
				<option value="LaCalera">LaCalera</option>
				<option value="LaMesa">LaMesa</option>
				<option value="LaPalma">LaPalma</option>
				<option value="LaPeña">LaPeña</option>
				<option value="LaVega">LaVega</option>
				<option value="Lenguazaque">Lenguazaque</option>
				<option value="Machetá">Machetá</option>
				<option value="Madrid">Madrid</option>
				<option value="Manta">Manta</option>
				<option value="Medina">Medina</option>
				<option value="Mosquera">Mosquera</option>
				<option value="Nariño">Nariño</option>
				<option value="Nemocón">Nemocón</option>
				<option value="Nilo">Nilo</option>
				<option value="Nimaima">Nimaima</option>
				<option value="Nocaima">Nocaima</option>
				<option value="Pacho">Pacho</option>
				<option value="Paime">Paime</option>
				<option value="Pandi">Pandi</option>
				<option value="Paratebueno">Paratebueno</option>
				<option value="Pasca">Pasca</option>
				<option value="PuertoSalgar">PuertoSalgar</option>
				<option value="Pulí">Pulí</option>
				<option value="Quebradanegra">Quebradanegra</option>
				<option value="Quetame">Quetame</option>
				<option value="Quipile">Quipile</option>
				<option value="Ricaurte">Ricaurte</option>
				<option value="SanAntonioDelTequendama">SanAntonioDelTequendama</option>
				<option value="SanBernardo">SanBernardo</option>
				<option value="SanCayetano">SanCayetano</option>
				<option value="SanFrancisco">SanFrancisco</option>
				<option value="SanJuanDeRioseco">SanJuanDeRioseco</option>
				<option value="Sasaima">Sasaima</option>
				<option value="Sesquilé">Sesquilé</option>
				<option value="Sibaté">Sibaté</option>
				<option value="Silvania">Silvania</option>
				<option value="Simijaca">Simijaca</option>
				<option value="Soacha">Soacha</option>
				<option value="Sopó">Sopó</option>
				<option value="Subachoque">Subachoque</option>
				<option value="Suesca">Suesca</option>
				<option value="Supatá">Supatá</option>
				<option value="Susa">Susa</option>
				<option value="Sutatausa">Sutatausa</option>
				<option value="Tabio">Tabio</option>
				<option value="Tausa">Tausa</option>
				<option value="Tena">Tena</option>
				<option value="Tenjo">Tenjo</option>
				<option value="Tibacuy">Tibacuy</option>
				<option value="Tibirita">Tibirita</option>
				<option value="Tocaima">Tocaima</option>
				<option value="Tocancipá">Tocancipá</option>
				<option value="Topaipi">Topaipi</option>
				<option value="Ubalá">Ubalá</option>
				<option value="Ubaque">Ubaque</option>
				<option value="Ubate">Ubate</option>
				<option value="Une">Une</option>
				<option value="Útica">Útica</option>
				<option value="Venecia">Venecia</option>
				<option value="Vergara">Vergara</option>
				<option value="Vianí">Vianí</option>
				<option value="Villagomez">Villagomez</option>
				<option value="Villapinzón">Villapinzón</option>
				<option value="Villeta">Villeta</option>
				<option value="Viotá">Viotá</option>
				<option value="Yacopí">Yacopí</option>
				<option value="Zipacón">Zipacón</option>
				<option value="Zipaquirá">Zipaquirá</option>
				<option value="Guainía">Guainía</option>
				<option value="Barrancominas">Barrancominas</option>
				<option value="Inirida">Inirida</option>
				<option value="Guaviare">Guaviare</option>
				<option value="Calamar">Calamar</option>
				<option value="ElRetorno">ElRetorno</option>
				<option value="Miraflores">Miraflores</option>
				<option value="SanJoséDelGuaviare">SanJoséDelGuaviare</option>
				<option value="Huila">Huila</option>
				<option value="Acevedo">Acevedo</option>
				<option value="Agrado">Agrado</option>
				<option value="Aipe">Aipe</option>
				<option value="Algeciras">Algeciras</option>
				<option value="Altamira">Altamira</option>
				<option value="Baraya">Baraya</option>
				<option value="Campoalegre">Campoalegre</option>
				<option value="Colombia">Colombia</option>
				<option value="Elías">Elías</option>
				<option value="Garzón">Garzón</option>
				<option value="Gigante">Gigante</option>
				<option value="Guadalupe">Guadalupe</option>
				<option value="Hobo">Hobo</option>
				<option value="Iquira">Iquira</option>
				<option value="Isnos">Isnos</option>
				<option value="LaArgentina">LaArgentina</option>
				<option value="LaPlata">LaPlata</option>
				<option value="Nátaga">Nátaga</option>
				<option value="Neiva">Neiva</option>
				<option value="Oporapa">Oporapa</option>
				<option value="Paicol">Paicol</option>
				<option value="Palermo">Palermo</option>
				<option value="Palestina">Palestina</option>
				<option value="Pital">Pital</option>
				<option value="Pitalito">Pitalito</option>
				<option value="Rivera">Rivera</option>
				<option value="Saladoblanco">Saladoblanco</option>
				<option value="SanAgustín">SanAgustín</option>
				<option value="SantaMaría">SantaMaría</option>
				<option value="Suaza">Suaza</option>
				<option value="Tarqui">Tarqui</option>
				<option value="Tello">Tello</option>
				<option value="Teruel">Teruel</option>
				<option value="Tesalia">Tesalia</option>
				<option value="Timaná">Timaná</option>
				<option value="Villavieja">Villavieja</option>
				<option value="Yaguará">Yaguará</option>
				<option value="La Guajira">La Guajira</option>
				<option value="Albania">Albania</option>
				<option value="Barrancas">Barrancas</option>
				<option value="Dibulla">Dibulla</option>
				<option value="Distracción">Distracción</option>
				<option value="ElMolino">ElMolino</option>
				<option value="Fonseca">Fonseca</option>
				<option value="Hatonuevo">Hatonuevo</option>
				<option value="LaJaguaDelPilar">LaJaguaDelPilar</option>
				<option value="Maicao">Maicao</option>
				<option value="Manaure">Manaure</option>
				<option value="Riohacha">Riohacha</option>
				<option value="SanJuanDelCesar">SanJuanDelCesar</option>
				<option value="Uribia">Uribia</option>
				<option value="Urumita">Urumita</option>
				<option value="Villanueva">Villanueva</option>
				<option value="Magdalena">Magdalena</option>
				<option value="Algarrobo">Algarrobo</option>
				<option value="Aracataca">Aracataca</option>
				<option value="Ariguaní">Ariguaní</option>
				<option value="CerroDeSanAntonio">CerroDeSanAntonio</option>
				<option value="Chivolo">Chivolo</option>
				<option value="Ciénaga">Ciénaga</option>
				<option value="Concordia">Concordia</option>
				<option value="ElBanco">ElBanco</option>
				<option value="ElPiñón">ElPiñón</option>
				<option value="ElRetén">ElRetén</option>
				<option value="Fundación">Fundación</option>
				<option value="Guamal">Guamal</option>
				<option value="NuevaGranada">NuevaGranada</option>
				<option value="Pedraza">Pedraza</option>
				<option value="PijiñoDelCarmen">PijiñoDelCarmen</option>
				<option value="Pivijay">Pivijay</option>
				<option value="Plato">Plato</option>
				<option value="Puebloviejo">Puebloviejo</option>
				<option value="Remolino">Remolino</option>
				<option value="SabanasDeSanÁngel">SabanasDeSanÁngel</option>
				<option value="Salamina">Salamina</option>
				<option value="SanSebastiánDeBuenavista">SanSebastiánDeBuenavista</option>
				<option value="SanZenón">SanZenón</option>
				<option value="SantaAna">SantaAna</option>
				<option value="SantaBárbaraDePinto">SantaBárbaraDePinto</option>
				<option value="SantaMarta">SantaMarta</option>
				<option value="Sitionuevo">Sitionuevo</option>
				<option value="Tenerife">Tenerife</option>
				<option value="Zapayán">Zapayán</option>
				<option value="ZonaBananera">ZonaBananera</option>
				<option value="Meta">Meta</option>
				<option value="Acacías">Acacías</option>
				<option value="BarrancaDeUpía">BarrancaDeUpía</option>
				<option value="Cabuyaro">Cabuyaro</option>
				<option value="CastillaLaNueva">CastillaLaNueva</option>
				<option value="Cubarral">Cubarral</option>
				<option value="Cumaral">Cumaral</option>
				<option value="ElCalvario">ElCalvario</option>
				<option value="ElCastillo">ElCastillo</option>
				<option value="ElDorado">ElDorado</option>
				<option value="FuenteDeOro">FuenteDeOro</option>
				<option value="Granada">Granada</option>
				<option value="Guamal">Guamal</option>
				<option value="LaMacarena">LaMacarena</option>
				<option value="Lejanias">Lejanias</option>
				<option value="Mapiripán">Mapiripán</option>
				<option value="Mesetas">Mesetas</option>
				<option value="PuertoConcordia">PuertoConcordia</option>
				<option value="PuertoGaitán">PuertoGaitán</option>
				<option value="PuertoLleras">PuertoLleras</option>
				<option value="PuertoLópez">PuertoLópez</option>
				<option value="PuertoRico">PuertoRico</option>
				<option value="Restrepo">Restrepo</option>
				<option value="SanCarlosDeGuaroa">SanCarlosDeGuaroa</option>
				<option value="SanJuanDeArama">SanJuanDeArama</option>
				<option value="SanJuanito">SanJuanito</option>
				<option value="SanMartínDeLosLlanos">SanMartínDeLosLlanos</option>
				<option value="Uribe">Uribe</option>
				<option value="Villavicencio">Villavicencio</option>
				<option value="VistaHermosa">VistaHermosa</option>
				<option value="Nariño">Nariño</option>
				<option value="Alban">Alban</option>
				<option value="Aldana">Aldana</option>
				<option value="Ancuyá">Ancuyá</option>
				<option value="Arboleda">Arboleda</option>
				<option value="Barbacoas">Barbacoas</option>
				<option value="Belén">Belén</option>
				<option value="Buesaco">Buesaco</option>
				<option value="Chachagüí">Chachagüí</option>
				<option value="Colón">Colón</option>
				<option value="Consacá">Consacá</option>
				<option value="Contadero">Contadero</option>
				<option value="Córdoba">Córdoba</option>
				<option value="Cuaspud">Cuaspud</option>
				<option value="Cumbal">Cumbal</option>
				<option value="Cumbitara">Cumbitara</option>
				<option value="ElCharco">ElCharco</option>
				<option value="ElPeñol">ElPeñol</option>
				<option value="ElRosario">ElRosario</option>
				<option value="ElTablónDeGómez">ElTablónDeGómez</option>
				<option value="ElTambo">ElTambo</option>
				<option value="FranciscoPizarro">FranciscoPizarro</option>
				<option value="Funes">Funes</option>
				<option value="Guachucal">Guachucal</option>
				<option value="Guaitarilla">Guaitarilla</option>
				<option value="Gualmatán">Gualmatán</option>
				<option value="Iles">Iles</option>
				<option value="Imués">Imués</option>
				<option value="Ipiales">Ipiales</option>
				<option value="LaCruz">LaCruz</option>
				<option value="LaFlorida">LaFlorida</option>
				<option value="LaLlanada">LaLlanada</option>
				<option value="LaTola">LaTola</option>
				<option value="LaUnión">LaUnión</option>
				<option value="Leiva">Leiva</option>
				<option value="Linares">Linares</option>
				<option value="LosAndes">LosAndes</option>
				<option value="MagüiPayán">MagüiPayán</option>
				<option value="Mallama">Mallama</option>
				<option value="Mosquera">Mosquera</option>
				<option value="Nariño">Nariño</option>
				<option value="OlayaHerrera">OlayaHerrera</option>
				<option value="Ospina">Ospina</option>
				<option value="Policarpa">Policarpa</option>
				<option value="Potosí">Potosí</option>
				<option value="Providencia">Providencia</option>
				<option value="Puerres">Puerres</option>
				<option value="Pupiales">Pupiales</option>
				<option value="Ricaurte">Ricaurte</option>
				<option value="RobertoPayán">RobertoPayán</option>
				<option value="Samaniego">Samaniego</option>
				<option value="SanBernardo">SanBernardo</option>
				<option value="SanJuanDePasto">SanJuanDePasto</option>
				<option value="SanLorenzo">SanLorenzo</option>
				<option value="SanPablo">SanPablo</option>
				<option value="SanPedroDeCartago">SanPedroDeCartago</option>
				<option value="Sandoná">Sandoná</option>
				<option value="SantaBárbara">SantaBárbara</option>
				<option value="Santacruz">Santacruz</option>
				<option value="Sapuyes">Sapuyes</option>
				<option value="Taminango">Taminango</option>
				<option value="Tangua">Tangua</option>
				<option value="Tumaco">Tumaco</option>
				<option value="Túquerres">Túquerres</option>
				<option value="Yacuanquer">Yacuanquer</option>
				<option value="Norte de Santander">Norte de Santander</option>
				<option value="Abrego">Abrego</option>
				<option value="Arboledas">Arboledas</option>
				<option value="Bochalema">Bochalema</option>
				<option value="Bucarasica">Bucarasica</option>
				<option value="Cáchira">Cáchira</option>
				<option value="Cácota">Cácota</option>
				<option value="Chinácota">Chinácota</option>
				<option value="Chitagá">Chitagá</option>
				<option value="Convención">Convención</option>
				<option value="Cucutilla">Cucutilla</option>
				<option value="Durania">Durania</option>
				<option value="ElCarmen">ElCarmen</option>
				<option value="ElTarra">ElTarra</option>
				<option value="ElZulia">ElZulia</option>
				<option value="Gramalote">Gramalote</option>
				<option value="Hacarí">Hacarí</option>
				<option value="Herrán">Herrán</option>
				<option value="LaEsperanza">LaEsperanza</option>
				<option value="LaPlayaDeBelén">LaPlayaDeBelén</option>
				<option value="Labateca">Labateca</option>
				<option value="LosPatios">LosPatios</option>
				<option value="Lourdes">Lourdes</option>
				<option value="Mutiscua">Mutiscua</option>
				<option value="Ocaña">Ocaña</option>
				<option value="Pamplona">Pamplona</option>
				<option value="Pamplonita">Pamplonita</option>
				<option value="PuertoSantander">PuertoSantander</option>
				<option value="Ragonvalia">Ragonvalia</option>
				<option value="SalazarDeLasPalmas">SalazarDeLasPalmas</option>
				<option value="SanCalixto">SanCalixto</option>
				<option value="SanCayetano">SanCayetano</option>
				<option value="SanJoséDeCúcuta">SanJoséDeCúcuta</option>
				<option value="Santiago">Santiago</option>
				<option value="Sardinata">Sardinata</option>
				<option value="Silos">Silos</option>
				<option value="Teorama">Teorama</option>
				<option value="Tibú">Tibú</option>
				<option value="Toledo">Toledo</option>
				<option value="VillaCaro">VillaCaro</option>
				<option value="VillaDelRosario">VillaDelRosario</option>
				<option value="Putumayo">Putumayo</option>
				<option value="Colón">Colón</option>
				<option value="Mocoa">Mocoa</option>
				<option value="Orito">Orito</option>
				<option value="PuertoAsís">PuertoAsís</option>
				<option value="PuertoCaicedo">PuertoCaicedo</option>
				<option value="PuertoGuzmán">PuertoGuzmán</option>
				<option value="PuertoLeguizamo">PuertoLeguizamo</option>
				<option value="SanFrancisco">SanFrancisco</option>
				<option value="SanMiguel">SanMiguel</option>
				<option value="Santiago">Santiago</option>
				<option value="Sibundoy">Sibundoy</option>
				<option value="ValleDelGuamuez">ValleDelGuamuez</option>
				<option value="Villagarzón">Villagarzón</option>
				<option value="Qundío">Qundío</option>
				<option value="Armenia">Armenia</option>
				<option value="Buenavista">Buenavista</option>
				<option value="Calarcá">Calarcá</option>
				<option value="Circasia">Circasia</option>
				<option value="Córdoba">Córdoba</option>
				<option value="Filandia">Filandia</option>
				<option value="Génova">Génova</option>
				<option value="LaTebaida">LaTebaida</option>
				<option value="Montenegro">Montenegro</option>
				<option value="Pijao">Pijao</option>
				<option value="Quimbaya">Quimbaya</option>
				<option value="Salento">Salento</option>
				<option value="Risaralda">Risaralda</option>
				<option value="Apía">Apía</option>
				<option value="Balboa">Balboa</option>
				<option value="BelénDeUmbría">BelénDeUmbría</option>
				<option value="Dosquebradas">Dosquebradas</option>
				<option value="Guática">Guática</option>
				<option value="LaCelia">LaCelia</option>
				<option value="LaVirginia">LaVirginia</option>
				<option value="Marsella">Marsella</option>
				<option value="Mistrato">Mistrato</option>
				<option value="Pereira">Pereira</option>
				<option value="PuebloRico">PuebloRico</option>
				<option value="Quinchía">Quinchía</option>
				<option value="SantaRosaDeCabal">SantaRosaDeCabal</option>
				<option value="Santuario">Santuario</option>
				<option value="San Andrés">San Andrés</option>
				<option value="Providencia">Providencia</option>
				<option value="Santander">Santander</option>
				<option value="Aguada">Aguada</option>
				<option value="Albania">Albania</option>
				<option value="Aratoca">Aratoca</option>
				<option value="Barbosa">Barbosa</option>
				<option value="Barichara">Barichara</option>
				<option value="Barrancabermeja">Barrancabermeja</option>
				<option value="Betulia">Betulia</option>
				<option value="Bolívar">Bolívar</option>
				<option value="Bucaramanga">Bucaramanga</option>
				<option value="Cabrera">Cabrera</option>
				<option value="California">California</option>
				<option value="Capitanejo">Capitanejo</option>
				<option value="Carcasí">Carcasí</option>
				<option value="Cepita">Cepita</option>
				<option value="Cerrito">Cerrito</option>
				<option value="Charalá">Charalá</option>
				<option value="Charta">Charta</option>
				<option value="Chimá">Chimá</option>
				<option value="Chipatá">Chipatá</option>
				<option value="Cimitarra">Cimitarra</option>
				<option value="Concepción">Concepción</option>
				<option value="Confines">Confines</option>
				<option value="Contratación">Contratación</option>
				<option value="Coromoro">Coromoro</option>
				<option value="Curití">Curití</option>
				<option value="ElCarmenDeChucurí">ElCarmenDeChucurí</option>
				<option value="ElGuacamayo">ElGuacamayo</option>
				<option value="ElPeñón">ElPeñón</option>
				<option value="ElPlayón">ElPlayón</option>
				<option value="Encino">Encino</option>
				<option value="Enciso">Enciso</option>
				<option value="Florián">Florián</option>
				<option value="Floridablanca">Floridablanca</option>
				<option value="Galán">Galán</option>
				<option value="Gambita">Gambita</option>
				<option value="Girón">Girón</option>
				<option value="Guaca">Guaca</option>
				<option value="Guadalupe">Guadalupe</option>
				<option value="Guapota">Guapota</option>
				<option value="Guavatá">Guavatá</option>
				<option value="Güepsa">Güepsa</option>
				<option value="Hato">Hato</option>
				<option value="JesúsMaría">JesúsMaría</option>
				<option value="Jordán">Jordán</option>
				<option value="LaBelleza">LaBelleza</option>
				<option value="LaPaz">LaPaz</option>
				<option value="Landázuri">Landázuri</option>
				<option value="Lebrija">Lebrija</option>
				<option value="LosSantos">LosSantos</option>
				<option value="Macaravita">Macaravita</option>
				<option value="Málaga">Málaga</option>
				<option value="Matanza">Matanza</option>
				<option value="Mogotes">Mogotes</option>
				<option value="Molagavita">Molagavita</option>
				<option value="Ocamonte">Ocamonte</option>
				<option value="Oiba">Oiba</option>
				<option value="Onzaga">Onzaga</option>
				<option value="Palmar">Palmar</option>
				<option value="PalmasDelSocorro">PalmasDelSocorro</option>
				<option value="Paramo">Paramo</option>
				<option value="Piedecuesta">Piedecuesta</option>
				<option value="Pinchote">Pinchote</option>
				<option value="PuenteNacional">PuenteNacional</option>
				<option value="PuertoParra">PuertoParra</option>
				<option value="PuertoWilches">PuertoWilches</option>
				<option value="Rionegro">Rionegro</option>
				<option value="SabanaDeTorres">SabanaDeTorres</option>
				<option value="SanAndrés">SanAndrés</option>
				<option value="SanBenito">SanBenito</option>
				<option value="SanGil">SanGil</option>
				<option value="SanJoaquin">SanJoaquin</option>
				<option value="SanJoséDeMiranda">SanJoséDeMiranda</option>
				<option value="SanMiguel">SanMiguel</option>
				<option value="SanVicenteDelChucurí">SanVicenteDelChucurí</option>
				<option value="SantaBárbara">SantaBárbara</option>
				<option value="SantaHelenaDeOpon">SantaHelenaDeOpon</option>
				<option value="Simacota">Simacota</option>
				<option value="Socorro">Socorro</option>
				<option value="Suaita">Suaita</option>
				<option value="Sucre">Sucre</option>
				<option value="Surata">Surata</option>
				<option value="Tona">Tona</option>
				<option value="ValleDeSanJosé">ValleDeSanJosé</option>
				<option value="Vélez">Vélez</option>
				<option value="Vetas">Vetas</option>
				<option value="Villanueva">Villanueva</option>
				<option value="Zapatoca">Zapatoca</option>
				<option value="Sucre">Sucre</option>
				<option value="Buenavista">Buenavista</option>
				<option value="Caimito">Caimito</option>
				<option value="Chalan">Chalan</option>
				<option value="Coloso">Coloso</option>
				<option value="Corozal">Corozal</option>
				<option value="Coveñas">Coveñas</option>
				<option value="ElRoble">ElRoble</option>
				<option value="Galeras">Galeras</option>
				<option value="Guaranda">Guaranda</option>
				<option value="LaUnión">LaUnión</option>
				<option value="LosPalmitos">LosPalmitos</option>
				<option value="Majagual">Majagual</option>
				<option value="Morroa">Morroa</option>
				<option value="Ovejas">Ovejas</option>
				<option value="SanAntonioDePalmito">SanAntonioDePalmito</option>
				<option value="Sampues">Sampues</option>
				<option value="SanBenitoAbad">SanBenitoAbad</option>
				<option value="SanJuanDeBetulia">SanJuanDeBetulia</option>
				<option value="SanMarcos">SanMarcos</option>
				<option value="SanOnofre">SanOnofre</option>
				<option value="SanPedro">SanPedro</option>
				<option value="Sincé">Sincé</option>
				<option value="Sincelejo">Sincelejo</option>
				<option value="Sucre">Sucre</option>
				<option value="SantiagoDeTolú">SantiagoDeTolú</option>
				<option value="Toluviejo">Toluviejo</option>
				<option value="Tolima">Tolima</option>
				<option value="Alpujarra">Alpujarra</option>
				<option value="Alvarado">Alvarado</option>
				<option value="Ambalema">Ambalema</option>
				<option value="Anzoátegui">Anzoátegui</option>
				<option value="Armero">Armero</option>
				<option value="Ataco">Ataco</option>
				<option value="Cajamarca">Cajamarca</option>
				<option value="CarmenDeApicalá">CarmenDeApicalá</option>
				<option value="Casabianca">Casabianca</option>
				<option value="Chaparral">Chaparral</option>
				<option value="Coello">Coello</option>
				<option value="Coyaima">Coyaima</option>
				<option value="Cunday">Cunday</option>
				<option value="Dolores">Dolores</option>
				<option value="ElEspinal">ElEspinal</option>
				<option value="Falan">Falan</option>
				<option value="Flandes">Flandes</option>
				<option value="Fresno">Fresno</option>
				<option value="ElGuamo">ElGuamo</option>
				<option value="Herveo">Herveo</option>
				<option value="Honda">Honda</option>
				<option value="Ibagué">Ibagué</option>
				<option value="Icononzo">Icononzo</option>
				<option value="Lérida">Lérida</option>
				<option value="Libano">Libano</option>
				<option value="Mariquita">Mariquita</option>
				<option value="Melgar">Melgar</option>
				<option value="Murillo">Murillo</option>
				<option value="Natagaima">Natagaima</option>
				<option value="Ortega">Ortega</option>
				<option value="Palocabildo">Palocabildo</option>
				<option value="Piedras">Piedras</option>
				<option value="Planadas">Planadas</option>
				<option value="Prado">Prado</option>
				<option value="Purificación">Purificación</option>
				<option value="Rioblanco">Rioblanco</option>
				<option value="Roncesvalles">Roncesvalles</option>
				<option value="Rovira">Rovira</option>
				<option value="Saldaña">Saldaña</option>
				<option value="SanAntonio">SanAntonio</option>
				<option value="SanLuis">SanLuis</option>
				<option value="SantaIsabel">SantaIsabel</option>
				<option value="Suarez">Suarez</option>
				<option value="ValleDeSanJuan">ValleDeSanJuan</option>
				<option value="Venadillo">Venadillo</option>
				<option value="Villahermosa">Villahermosa</option>
				<option value="Villarrica">Villarrica</option>
				<option value="Valle del Cauca">Valle del Cauca</option>
				<option value="Alcalá">Alcalá</option>
				<option value="Andalucía">Andalucía</option>
				<option value="Ansermanuevo">Ansermanuevo</option>
				<option value="Argelia">Argelia</option>
				<option value="Bolívar">Bolívar</option>
				<option value="Buenaventura">Buenaventura</option>
				<option value="GuadalajaraDeBuga">GuadalajaraDeBuga</option>
				<option value="Bugalagrande">Bugalagrande</option>
				<option value="Caicedonia">Caicedonia</option>
				<option value="CalimaDelDarién">CalimaDelDarién</option>
				<option value="Candelaria">Candelaria</option>
				<option value="Cartago">Cartago</option>
				<option value="Dagua">Dagua</option>
				<option value="ElÁguila">ElÁguila</option>
				<option value="ElCairo">ElCairo</option>
				<option value="ElCerrito">ElCerrito</option>
				<option value="ElDovio">ElDovio</option>
				<option value="Florida">Florida</option>
				<option value="Ginebra">Ginebra</option>
				<option value="Guacarí">Guacarí</option>
				<option value="Jamundí">Jamundí</option>
				<option value="LaCumbre">LaCumbre</option>
				<option value="LaUnión">LaUnión</option>
				<option value="LaVictoria">LaVictoria</option>
				<option value="Obando">Obando</option>
				<option value="Palmira">Palmira</option>
				<option value="Pradera">Pradera</option>
				<option value="Restrepo">Restrepo</option>
				<option value="Riofrio">Riofrio</option>
				<option value="Roldanillo">Roldanillo</option>
				<option value="SanPedro">SanPedro</option>
				<option value="SantiagoDeCali">SantiagoDeCali</option>
				<option value="Sevilla">Sevilla</option>
				<option value="Toro">Toro</option>
				<option value="Trujillo">Trujillo</option>
				<option value="Tuluá">Tuluá</option>
				<option value="Ulloa">Ulloa</option>
				<option value="Versalles">Versalles</option>
				<option value="Vijes">Vijes</option>
				<option value="Yotoco">Yotoco</option>
				<option value="Yumbo">Yumbo</option>
				<option value="Zarzal">Zarzal</option>
				<option value="Vaupés">Vaupés</option>
				<option value="Caruru">Caruru</option>
				<option value="Mitú">Mitú</option>
				<option value="Taraira">Taraira</option>
				<option value="Vichada">Vichada</option>
				<option value="Cumaribo">Cumaribo</option>
				<option value="LaPrimavera">LaPrimavera</option>
				<option value="PuertoCarreño">PuertoCarreño</option>
				<option value="SantaRosalía">SantaRosalía</option>

			</select>

			<span style="margin-left:3%"> Rango de Precio:</span>
			<select class="camposgenerales" style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;" name="rango_precios" id="rango_precios" onchange="change_rango_precios(this)">
				<option value="">-----</option>
				<option value="0-50000">$0 - $50.000</option>
				<option value="50000-100000">$50.000 - $100.000</option>
				<option value="100000-150000">$100.000 - $150.000</option>
				<option value="150000-200000">$150.000 - $200.000</option>
				<option value="200000-250000">$200.000 - $250.000</option>
				<option value="250000-300000">$250.000 - $300.000</option>
				<option value="300000-350000">$300.000 - $350.000</option>
				<option value="350000-9999999999">Mayor a $350.000 </option>
			</select>

			<span style="margin-left:3%"> Idioma</span>
			<select class="camposgenerales" style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;" name="idioma" id="idioma" onchange="change_idioma(this)">
				<option value="">-----</option>

				<option value="Alemán">Alemán</option>
				<option value="Árabe">Árabe</option>
				<option value="Bengalí">Bengalí</option>
				<option value="Chino cantonés">Chino cantonés</option>
				<option value="Chino mandarín">Chino mandarín</option>
				<option value="Chino Mǐn Nán">Chino Mǐn Nán</option>
				<option value="Chino Wu">Chino Wu</option>
				<option value="Coreano">Coreano</option>
				<option value="Español">Español</option>
				<option value="Francés">Francés</option>
				<option value="Hausa">Hausa</option>
				<option value="Hindi">Hindi</option>
				<option value="Indonesio">Indonesio</option>
				<option value="Ingles">Ingles</option>
				<option value="Italiano">Italiano</option>
				<option value="Japonés">Japonés</option>
				<option value="Javanés">Javanés</option>
				<option value="Maratí">Maratí</option>
				<option value="Panyabí occidental">Panyabí occidental</option>
				<option value="Persa iraní">Persa iraní</option>
				<option value="Portugués">Portugués</option>
				<option value="Ruso">Ruso</option>
				<option value="Tailandés">Tailandés</option>
				<option value="Tamil">Tamil</option>
				<option value="Telugú">Telugú</option>
				<option value="Turco">Turco</option>
				<option value="Urdu">Urdu</option>
				<option value="Vietnamita">Vietnamita</option>
			</select>

			<span style="margin-left:3%"> Pais:</span>
			<select class="camposgenerales" style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;" name="pais" id="pais" onchange="change_pais(this)">

				<option value="">-----</option>
				<option value="AFGANISTAN">AFGANISTAN</option>
				<option value="ALBANIA">ALBANIA</option>
				<option value="ALEMANIA">ALEMANIA</option>
				<option value="ANDORRA">ANDORRA</option>
				<option value="ANGOLA">ANGOLA</option>
				<option value="ANGUILLA">ANGUILLA</option>
				<option value="ANTIGUA Y BARBUDA">ANTIGUA Y BARBUDA</option>
				<option value="ANTILLAS HOLANDESAS">ANTILLAS HOLANDESAS</option>
				<option value="ARABIA SAUDI">ARABIA SAUDI</option>
				<option value="ARGELIA">ARGELIA</option>
				<option value="ARGENTINA">ARGENTINA</option>
				<option value="ARMENIA">ARMENIA</option>
				<option value="ARUBA">ARUBA</option>
				<option value="AUSTRALIA">AUSTRALIA</option>
				<option value="AUSTRIA">AUSTRIA</option>
				<option value="AZERBAIYAN">AZERBAIYAN</option>
				<option value="BAHAMAS">BAHAMAS</option>
				<option value="BAHREIN">BAHREIN</option>
				<option value="BANGLADESH">BANGLADESH</option>
				<option value="BARBADOS">BARBADOS</option>
				<option value="BELARUS">BELARUS</option>
				<option value="BELGICA">BELGICA</option>
				<option value="BELICE">BELICE</option>
				<option value="BENIN">BENIN</option>
				<option value="BERMUDAS">BERMUDAS</option>
				<option value="BHUTÁN">BHUTÁN</option>
				<option value="BOLIVIA">BOLIVIA</option>
				<option value="BOSNIA Y HERZEGOVINA">BOSNIA Y HERZEGOVINA</option>
				<option value="BOTSWANA">BOTSWANA</option>
				<option value="BRASIL">BRASIL</option>
				<option value="BRUNEI">BRUNEI</option>
				<option value="BULGARIA">BULGARIA</option>
				<option value="BURKINA FASO">BURKINA FASO</option>
				<option value="BURUNDI">BURUNDI</option>
				<option value="CABO VERDE">CABO VERDE</option>
				<option value="CAMBOYA">CAMBOYA</option>
				<option value="CAMERUN">CAMERUN</option>
				<option value="CANADA">CANADA</option>
				<option value="CHAD">CHAD</option>
				<option value="CHILE">CHILE</option>
				<option value="CHINA">CHINA</option>
				<option value="CHIPRE">CHIPRE</option>
				<option value="COLOMBIA">COLOMBIA</option>
				<option value="COMORES">COMORES</option>
				<option value="CONGO">CONGO</option>
				<option value="COREA">COREA</option>
				<option value="COREA DEL NORTE ">COREA DEL NORTE </option>
				<option value="COSTA DE MARFIL">COSTA DE MARFIL</option>
				<option value="COSTA RICA">COSTA RICA</option>
				<option value="CROACIA">CROACIA</option>
				<option value="CUBA">CUBA</option>
				<option value="DINAMARCA">DINAMARCA</option>
				<option value="DJIBOUTI">DJIBOUTI</option>
				<option value="DOMINICA">DOMINICA</option>
				<option value="ECUADOR">ECUADOR</option>
				<option value="EGIPTO">EGIPTO</option>
				<option value="EL SALVADOR">EL SALVADOR</option>
				<option value="EMIRATOS ARABES UNIDOS">EMIRATOS ARABES UNIDOS</option>
				<option value="ERITREA">ERITREA</option>
				<option value="ESLOVENIA">ESLOVENIA</option>
				<option value="ESPAÑA">ESPAÑA</option>
				<option value="ESTADOS UNIDOS DE AMERICA">ESTADOS UNIDOS DE AMERICA</option>
				<option value="ESTONIA">ESTONIA</option>
				<option value="ETIOPIA">ETIOPIA</option>
				<option value="FIJI">FIJI</option>
				<option value="FILIPINAS">FILIPINAS</option>
				<option value="FINLANDIA">FINLANDIA</option>
				<option value="FRANCIA">FRANCIA</option>
				<option value="GABON">GABON</option>
				<option value="GAMBIA">GAMBIA</option>
				<option value="GEORGIA">GEORGIA</option>
				<option value="GHANA">GHANA</option>
				<option value="GIBRALTAR">GIBRALTAR</option>
				<option value="GRANADA">GRANADA</option>
				<option value="GRECIA">GRECIA</option>
				<option value="GROENLANDIA">GROENLANDIA</option>
				<option value="GUADALUPE">GUADALUPE</option>
				<option value="GUAM">GUAM</option>
				<option value="GUATEMALA">GUATEMALA</option>
				<option value="GUAYANA FRANCESA">GUAYANA FRANCESA</option>
				<option value="GUERNESEY">GUERNESEY</option>
				<option value="GUINEA">GUINEA</option>
				<option value="GUINEA ECUATORIAL">GUINEA ECUATORIAL</option>
				<option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
				<option value="GUYANA">GUYANA</option>
				<option value="HAITI">HAITI</option>
				<option value="HONDURAS">HONDURAS</option>
				<option value="HONG KONG">HONG KONG</option>
				<option value="HUNGRIA">HUNGRIA</option>
				<option value="INDIA">INDIA</option>
				<option value="INDONESIA">INDONESIA</option>
				<option value="IRAN">IRAN</option>
				<option value="IRAQ">IRAQ</option>
				<option value="IRLANDA">IRLANDA</option>
				<option value="ISLA DE MAN">ISLA DE MAN</option>
				<option value="ISLA NORFOLK">ISLA NORFOLK</option>
				<option value="ISLANDIA">ISLANDIA</option>
				<option value="ISLAS ALAND">ISLAS ALAND</option>
				<option value="ISLAS CAIMÁN">ISLAS CAIMÁN</option>
				<option value="ISLAS COOK">ISLAS COOK</option>
				<option value="ISLAS DEL CANAL">ISLAS DEL CANAL</option>
				<option value="ISLAS FEROE">ISLAS FEROE</option>
				<option value="ISLAS MALVINAS">ISLAS MALVINAS</option>
				<option value="ISLAS MARIANAS DEL NORTE">ISLAS MARIANAS DEL NORTE</option>
				<option value="ISLAS MARSHALL">ISLAS MARSHALL</option>
				<option value="ISLAS PITCAIRN">ISLAS PITCAIRN</option>
				<option value="ISLAS SALOMON">ISLAS SALOMON</option>
				<option value="ISLAS TURCAS Y CAICOS">ISLAS TURCAS Y CAICOS</option>
				<option value="ISLAS VIRGENES BRITANICAS">ISLAS VIRGENES BRITANICAS</option>
				<option value="ISLAS VÍRGENES DE LOS ESTADOS UNIDOS">ISLAS VÍRGENES DE LOS ESTADOS UNIDOS</option>
				<option value="ISRAEL">ISRAEL</option>
				<option value="ITALIA">ITALIA</option>
				<option value="JAMAICA">JAMAICA</option>
				<option value="JAPON">JAPON</option>
				<option value="JERSEY">JERSEY</option>
				<option value="JORDANIA">JORDANIA</option>
				<option value="KAZAJSTAN">KAZAJSTAN</option>
				<option value="KENIA">KENIA</option>
				<option value="KIRGUISTAN">KIRGUISTAN</option>
				<option value="KIRIBATI">KIRIBATI</option>
				<option value="KUWAIT">KUWAIT</option>
				<option value="LAOS">LAOS</option>
				<option value="LESOTHO">LESOTHO</option>
				<option value="LETONIA">LETONIA</option>
				<option value="LIBANO">LIBANO</option>
				<option value="LIBERIA">LIBERIA</option>
				<option value="LIBIA">LIBIA</option>
				<option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
				<option value="LITUANIA">LITUANIA</option>
				<option value="LUXEMBURGO">LUXEMBURGO</option>
				<option value="MACAO">MACAO</option>
				<option value="MACEDONIA ">MACEDONIA </option>
				<option value="MADAGASCAR">MADAGASCAR</option>
				<option value="MALASIA">MALASIA</option>
				<option value="MALAWI">MALAWI</option>
				<option value="MALDIVAS">MALDIVAS</option>
				<option value="MALI">MALI</option>
				<option value="MALTA">MALTA</option>
				<option value="MARRUECOS">MARRUECOS</option>
				<option value="MARTINICA">MARTINICA</option>
				<option value="MAURICIO">MAURICIO</option>
				<option value="MAURITANIA">MAURITANIA</option>
				<option value="MAYOTTE">MAYOTTE</option>
				<option value="MEXICO">MEXICO</option>
				<option value="MICRONESIA">MICRONESIA</option>
				<option value="MOLDAVIA">MOLDAVIA</option>
				<option value="MONACO">MONACO</option>
				<option value="MONGOLIA">MONGOLIA</option>
				<option value="MONTENEGRO">MONTENEGRO</option>
				<option value="MONTSERRAT">MONTSERRAT</option>
				<option value="MOZAMBIQUE">MOZAMBIQUE</option>
				<option value="MYANMAR">MYANMAR</option>
				<option value="NAMIBIA">NAMIBIA</option>
				<option value="NAURU">NAURU</option>
				<option value="NEPAL">NEPAL</option>
				<option value="NICARAGUA">NICARAGUA</option>
				<option value="NIGER">NIGER</option>
				<option value="NIGERIA">NIGERIA</option>
				<option value="NIUE">NIUE</option>
				<option value="NORUEGA">NORUEGA</option>
				<option value="NUEVA CALEDONIA">NUEVA CALEDONIA</option>
				<option value="NUEVA ZELANDA">NUEVA ZELANDA</option>
				<option value="OMAN">OMAN</option>
				<option value="OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE">OTROS PAISES O TERRITORIOS DE AMERICA DEL NORTE</option>
				<option value="OTROS PAISES O TERRITORIOS  DE SUDAMERICA">OTROS PAISES O TERRITORIOS DE SUDAMERICA</option>
				<option value="OTROS PAISES O TERRITORIOS DE AFRICA">OTROS PAISES O TERRITORIOS DE AFRICA</option>
				<option value="OTROS PAISES O TERRITORIOS DE ASIA">OTROS PAISES O TERRITORIOS DE ASIA</option>
				<option value="OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA">OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA</option>
				<option value="OTROS PAISES O TERRITORIOS DE OCEANIA">OTROS PAISES O TERRITORIOS DE OCEANIA</option>
				<option value="OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL">OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL</option>
				<option value="OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA">OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA</option>
				<option value="PAISES BAJOS">PAISES BAJOS</option>
				<option value="PAKISTAN">PAKISTAN</option>
				<option value="PALAOS">PALAOS</option>
				<option value="PALESTINA">PALESTINA</option>
				<option value="PANAMA">PANAMA</option>
				<option value="PAPUA NUEVA GUINEA">PAPUA NUEVA GUINEA</option>
				<option value="PARAGUAY">PARAGUAY</option>
				<option value="PERU">PERU</option>
				<option value="POLINESIA FRANCESA">POLINESIA FRANCESA</option>
				<option value="POLONIA">POLONIA</option>
				<option value="PORTUGAL">PORTUGAL</option>
				<option value="PUERTO RICO">PUERTO RICO</option>
				<option value="QATAR">QATAR</option>
				<option value="REINO UNIDO">REINO UNIDO</option>
				<option value="REP.DEMOCRATICA DEL CONGO">REP.DEMOCRATICA DEL CONGO</option>
				<option value="REPUBLICA CENTROAFRICANA">REPUBLICA CENTROAFRICANA</option>
				<option value="REPUBLICA CHECA">REPUBLICA CHECA</option>
				<option value="REPUBLICA DOMINICANA">REPUBLICA DOMINICANA</option>
				<option value="REPUBLICA ESLOVACA">REPUBLICA ESLOVACA</option>
				<option value="REUNION">REUNION</option>
				<option value="RUANDA">RUANDA</option>
				<option value="RUMANIA">RUMANIA</option>
				<option value="RUSIA">RUSIA</option>
				<option value="SAHARA OCCIDENTAL">SAHARA OCCIDENTAL</option>
				<option value="SAMOA">SAMOA</option>
				<option value="SAMOA AMERICANA">SAMOA AMERICANA</option>
				<option value="SAN BARTOLOME">SAN BARTOLOME</option>
				<option value="SAN CRISTOBAL Y NIEVES">SAN CRISTOBAL Y NIEVES</option>
				<option value="SAN MARINO">SAN MARINO</option>
				<option value="SAN MARTIN (PARTE FRANCESA)">SAN MARTIN (PARTE FRANCESA)</option>
				<option value="SAN PEDRO Y MIQUELON ">SAN PEDRO Y MIQUELON </option>
				<option value="SAN VICENTE Y LAS GRANADINAS">SAN VICENTE Y LAS GRANADINAS</option>
				<option value="SANTA HELENA">SANTA HELENA</option>
				<option value="SANTA LUCIA">SANTA LUCIA</option>
				<option value="SANTA SEDE">SANTA SEDE</option>
				<option value="SANTO TOME Y PRINCIPE">SANTO TOME Y PRINCIPE</option>
				<option value="SENEGAL">SENEGAL</option>
				<option value="SERBIA">SERBIA</option>
				<option value="SEYCHELLES">SEYCHELLES</option>
				<option value="SIERRA LEONA">SIERRA LEONA</option>
				<option value="SINGAPUR">SINGAPUR</option>
				<option value="SIRIA">SIRIA</option>
				<option value="SOMALIA">SOMALIA</option>
				<option value="SRI LANKA">SRI LANKA</option>
				<option value="SUDAFRICA">SUDAFRICA</option>
				<option value="SUDAN">SUDAN</option>
				<option value="SUECIA">SUECIA</option>
				<option value="SUIZA">SUIZA</option>
				<option value="SURINAM">SURINAM</option>
				<option value="SVALBARD Y JAN MAYEN">SVALBARD Y JAN MAYEN</option>
				<option value="SWAZILANDIA">SWAZILANDIA</option>
				<option value="TADYIKISTAN">TADYIKISTAN</option>
				<option value="TAILANDIA">TAILANDIA</option>
				<option value="TANZANIA">TANZANIA</option>
				<option value="TIMOR ORIENTAL">TIMOR ORIENTAL</option>
				<option value="TOGO">TOGO</option>
				<option value="TOKELAU">TOKELAU</option>
				<option value="TONGA">TONGA</option>
				<option value="TRINIDAD Y TOBAGO">TRINIDAD Y TOBAGO</option>
				<option value="TUNEZ">TUNEZ</option>
				<option value="TURKMENISTAN">TURKMENISTAN</option>
				<option value="TURQUIA">TURQUIA</option>
				<option value="TUVALU">TUVALU</option>
				<option value="UCRANIA">UCRANIA</option>
				<option value="UGANDA">UGANDA</option>
				<option value="URUGUAY">URUGUAY</option>
				<option value="UZBEKISTAN">UZBEKISTAN</option>
				<option value="VANUATU">VANUATU</option>
				<option value="VENEZUELA">VENEZUELA</option>
				<option value="VIETNAM">VIETNAM</option>
				<option value="WALLIS Y FORTUNA">WALLIS Y FORTUNA</option>
				<option value="YEMEN">YEMEN</option>
				<option value="ZAMBIA">ZAMBIA</option>
				<option value="ZIMBABWE">ZIMBABWE</option>
			</select>


			<span style="margin-left:3%"> Estado:</span>
			<select class="camposgenerales" style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;" name="cars" id="cars">
				<option value="">-----</option>
				<option value="">En Linea</option>
				<option value="">En Consulta</option>
				<option value="">OffLine</option>

			</select>
			<br><br>
		</div>



		<!--Product Grid-->
		<div align="right">


			<section class="section-grid2">

				<div class="grid-prod2" id="div_gurus">


				</div>
				<div align="left" style="padding-left: 0px;margin-right: 20px; ">

					<div class="menuright" align="center">

						<form action="" method="post" id="form_login">
							<div>
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705;  "><strong>Iniciar Sesión</strong></h4>
								<P style="font-size: 14px; color: #ffffff; margin:0 20%">Para chatear con nuestros Gurús inicia sesión con tu usuario y contraseña</P>
								<br>
							</div>
							<div>
								<div class="form-group">
									<input type="hidden" value="login" name="tipo">
									<input type="hidden" value="1" name="tipo_user">
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div>
								<br>
								<div class="form-group">
									<div class="clearfix">
									</div>
									<input type="password" name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>

							</div>
							<div>
								<a href="recuperar_pass.php" style="text-decoration:none;">
									<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
								</a>
								<a href="usuarios.php" style="text-decoration:none;">
									<h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4>
								</a>

								<br>
							</div>
							<input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 ">
						</form>
					</div>
					<div class="menuright3" align="center" style="margin-top: 20px">
						<form action="" method="post">
							<div>
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705; ">Eres Gúru?</h4>
								<P style="font-size: 18px; color: #ffffff">Ingresa a tu perfil</P>
							</div>
							<div>
								<div class="form-group">
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div><br>
								<div class="form-group">
									<div class="clearfix">
									</div>
									<input type="password" name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
							</div>
							<div>
								<a href="recuperar_pass.php" style="text-decoration:none;">
									<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
								</a>
								<a href="https://www.guruxy.com" style="text-decoration:none;">
									<h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4>
								</a>

								<br>

							</div>
							<input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 ">
						</form>
					</div>

					<div class="menuright2" align="center" style="margin-top: 20px">
						<form action="" method="post">
							<h4 style="color:#5C3293; padding-top: 20px; margin-bottom: 20px; font-size:16"> GURÚS DESTACADOS </h4>
						</form>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFC808; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
							<br>
							<form>
								<p class="clasificacion2">
									<input id="radio1" type="radio" name="estrellas" value="5">
									<!--
									--><label style="color:#fff" for="radio1">★</label>
									<!--
									--><input id="radio2" type="radio" name="estrellas" value="4">
									<!--
									--><label style="color:#fff" for="radio2">★</label>
									<!--
									--><input id="radio3" type="radio" name="estrellas" value="3">
									<!--
									--><label style="color:#fff" for="radio3">★</label>
									<!--
									--><input id="radio4" type="radio" name="estrellas" value="2">
									<!--
									--><label style="color:#fff" for="radio4">★</label>
									<!--
									--><input id="radio5" type="radio" name="estrellas" value="1">
									<!--
									--><label style="color:#fff" for="radio5">★</label>
								</p>
							</form>
							<br>
							<img style="margin-bottom:10;" src="img/categorias/en linea/1.jpg" alt="kalita">
						</div>

						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS
							<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
							<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFC808; ">
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px"> TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta:
							</p>
							<p class="textopguru" style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFC808; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
							<br>
							<form>
								<p class="clasificacion2" style="margin-bottom: -7px">
									<input id="radio1" type="radio" name="estrellas" value="5">
									<!--
								--><label style="color:#fff" for="radio1">★</label>
									<!--
								--><input id="radio2" type="radio" name="estrellas" value="4">
									<!--
								--><label style="color:#fff" for="radio2">★</label>
									<!--
								--><input id="radio3" type="radio" name="estrellas" value="3">
									<!--
								--><label style="color:#fff" for="radio3">★</label>
									<!--
								--><input id="radio4" type="radio" name="estrellas" value="2">
									<!--
								--><label style="color:#fff" for="radio4">★</label>
									<!--
								--><input id="radio5" type="radio" name="estrellas" value="1">
									<!--
								--><label style="color:#fff" for="radio5">★</label>
								</p>
								<br><br>
							</form>
							<img style="margin-bottom:10;" src="img/categorias/en linea/2.jpg" alt="kalita">
						</div>

						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS
							<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
							<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFC808; ">
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px"> TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta:
							</p>
							<p class="textopguru" style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFC808; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
							<br>
							<form>
								<p class="clasificacion2" style="margin-bottom: -7px">
									<input id="radio1" type="radio" name="estrellas" value="5">
									<!--
								--><label style="color:#fff" for="radio1">★</label>
									<!--
								--><input id="radio2" type="radio" name="estrellas" value="4">
									<!--
								--><label style="color:#fff" for="radio2">★</label>
									<!--
								--><input id="radio3" type="radio" name="estrellas" value="3">
									<!--
								--><label style="color:#fff" for="radio3">★</label>
									<!--
								--><input id="radio4" type="radio" name="estrellas" value="2">
									<!--
								--><label style="color:#fff" for="radio4">★</label>
									<!--
								--><input id="radio5" type="radio" name="estrellas" value="1">
									<!--
								--><label style="color:#fff" for="radio5">★</label>
								</p>
								<br>
							</form>
							<img style="margin-bottom:10;" src="img/categorias/en linea/3.jpg" alt="kalita">
						</div>

						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS
							<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
							<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFC808; ">
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px"> TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta:
							</p>
							<p class="textopguru" style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFC808; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
							<br>
							<form>
								<p class="clasificacion2" style="margin-bottom: -7px">
									<input id="radio1" type="radio" name="estrellas" value="5">
									<!--
								--><label style="color:#fff" for="radio1">★</label>
									<!--
								--><input id="radio2" type="radio" name="estrellas" value="4">
									<!--
								--><label style="color:#fff" for="radio2">★</label>
									<!--
								--><input id="radio3" type="radio" name="estrellas" value="3">
									<!--
								--><label style="color:#fff" for="radio3">★</label>
									<!--
								--><input id="radio4" type="radio" name="estrellas" value="2">
									<!--
								--><label style="color:#fff" for="radio4">★</label>
									<!--
								--><input id="radio5" type="radio" name="estrellas" value="1">
									<!--
								--><label style="color:#fff" for="radio5">★</label>
								</p>
								<br>
							</form>
							<img style="margin-bottom:10;" src="img/categorias/en linea/4.jpg" alt="kalita">
						</div>

						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS
							<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
							<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>

						<div class=" bloqueguru3" style=" background-color:#FFC808; ">
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px"> TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta:
							</p>
							<p class="textopguru" style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFC808; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
							<br>
							<form>
								<p class="clasificacion2" style="margin-bottom: -7px">
									<input id="radio1" type="radio" name="estrellas" value="5">
									<!--
									--><label style="color:#fff" for="radio1">★</label>
									<!--
									--><input id="radio2" type="radio" name="estrellas" value="4">
									<!--
									--><label style="color:#fff" for="radio2">★</label>
									<!--
									--><input id="radio3" type="radio" name="estrellas" value="3">
									<!--
									--><label style="color:#fff" for="radio3">★</label>
									<!--
									--><input id="radio4" type="radio" name="estrellas" value="2">
									<!--
									--><label style="color:#fff" for="radio4">★</label>
									<!--
									--><input id="radio5" type="radio" name="estrellas" value="1">
									<!--
									--><label style="color:#fff" for="radio5">★</label>
								</p>
								<br>
							</form>
							<img style="margin-bottom:10;" src="img/categorias/en linea/5.jpg" alt="kalita">
						</div>

						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS
							<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
							<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
							<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFC808; ">
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px"> TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta:
							</p>
							<p class="textopguru" style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>

						<br><br>
					</div>
			</section>
		</div>
	</div>
	</div>

	<div class="footerconstruccion" align="center">
		<div class="container2">
			<div align="right">
				<img style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/aconstruccion.png" alt="kalita">
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
							<a href="https://www.linkedin.com/company/guruxylatam"><i style="color: #FFFFFF" class="fa fa-linkedin fa-2x"></i></a>
						</li>

						 <!--<li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-youtube fa-2x"></i></a>
                           </li> -->
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
				$(".barraizquierdaconstruccion").mCustomScrollbar({
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
	<script src="js/consulta_gurus.js"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
	<script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>
	<script src="js/login.js"></script>
</body>

</html>