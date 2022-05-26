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
	<link href="css/usuario_chat.css" rel="stylesheet" type="text/css" />
	<link href="css/usuario_header.css " rel="stylesheet" type="text/css" />

	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

	<title>Gurus Center</title>
	<style type="text/css">
		body {
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
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


		.container {
			border: 2px solid #dedede;
			background-color: #f1f1f1;
			border-radius: 5px;
			padding: 10px;
			margin: 10px 0;
		}

		.darker {
			border-color: #ccc;
			background-color: #ddd;
		}

		.container::after {
			content: "";
			clear: both;
			display: table;
		}

		.container img {
			float: left;
			max-width: 60px;
			width: 100%;
			margin-right: 20px;
			border-radius: 50%;
		}

		.container img.right {
			float: right;
			margin-left: 20px;
			margin-right: 0;
		}

		.time-right {
			float: right;
			color: #aaa;
		}

		.time-left {
			float: left;
			color: #999;
		}



		.content {
			/*margin-left: 100px; */
			margin: 0 auto;
			font-size: 12px;
			font-family: Verdana;
			width: 95%;
			/* height: 25%; */
			background-color: #FAFAFA;
		}

		/* LOS tres FORMULARIOS*/
		.form1 {
			text-align: center;
			border: 1px solid #CCC;
			height: 200px;
			width: 30%;
			/* display: inline-block; */
			float: left;
			margin-left: 2%
		}

		.try {
			float: left;
			/* display: inline-block; */
			width: 19.2%;
			height: 200px;
			border: 1px solid #CCC;
		}

		.form2 {
			/* display: inline-block; */
			float: left;
			border: 1px solid #CCC;
			height: 200px;
			width: 40%;
			/* margin-left: 415px; */

		}
	</style>
</head>

<body class="cabecera">

	<?php
	if (empty($_SESSION['userlog'])) {
	?>
		<div id="container2">
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" usemap="#logo" width="190%" alt="logo" /></a>
				
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
								<a class="menuamarillo" href="../gurus" style="font-size: 15px; text-decoration:none;">TRABAJA CON NOSOTROS</a>
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

				<div class="menuinferior" style="margin-top:2px">
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
	<br>
	<br>
	<br>

	<div style="background-color:#fff; height:800px; margin-top: 20px;"><br><br>

		<div style="margin-left:20px; margin-right:20px;  background-color: #DCCCE3; height:50px">
			<span style="font-size:26px; width:250px; color:#6F6F6E;">&nbsp;&nbsp;&nbsp;Nombre_Gurú</span>
			<div align="right" style="margin-top:-30px; margin-left:70%;">

				<p class="texto">Variable de estado.. en linea, en consulta, offline</p>

			</div>
			<div class="flex-container" style="background-color: #fff;" align="center">
				<div class="flex-item-left">
					<img src="img/foto2.png" style="width:100%; margin-top:-1px"><br>
					<a style="color:#452167; "> Valor Consulta:</a><a style=" margin-right:10%"> Variable Valor</a>
					<a href="pasarela.php"><img src="img/comenzar.png" style="width:25%; margin-top:4px;"></a>
					<?php
					if (!(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE)) {
					?>
						<a href="usuarios.php"><img src="img/registrese.png" style="width:25%; margin-top:4px;"></a>

					<?php
					} else {
					?>
						<a href="usuarios.php"><img src="img/registrese.png" style="width:25%; margin-top:4px;">Cambiar boton</a>
				</div>
			<?php
					}
			?>

			</div>
			<div class="flex-item-right" style="background-color: #fff; max-height:480px;" align="center"><br><br>

				<div style="max-width:97%; margin-top:-55px; " class="chats">
					<div class="container">
						<img src="/w3images/bandmember.jpg" alt="Avatar" style="width:30%;">
						<p>Hello. How are you today?</p>
						<span class="time-right">11:00</span>
					</div>

					<div class="container darker">
						<img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:30%;">
						<p>Hey! I'm fine. Thanks for asking!</p>
						<span class="time-left">11:01</span>
					</div>

					<div class="container">
						<img src="/w3images/bandmember.jpg" alt="Avatar" style="width:30%;">
						<p>Sweet! So, what do you wanna do today?</p>
						<span class="time-right">11:02</span>
					</div>

					<div class="container darker">
						<img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:30%;">
						<p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
						<span class="time-left">11:05</span>
					</div><br>


				</div>
				<br>
				<div class="input-group" >
					<input style="border-radius: 25px; margin-left:10px; margin-top:25px" type="text" class="chat">
					<span class="input-group-btn">
						<button type="button">
							<img src="img/enviarm.png" style="width:50%; margin-top:25px">
						</button>
					</span>

				</div>
			</div>
			<br>
			<div style=" background-color: #fff;">
				<div>
					<br>
					<div align="center" style=" height: 600px; width:100%; background-color: #fff;">
						<div id="div1" style="float:left; width:30%; margin-left:5%;">
							<img style="width:78%" src="img/doctora.png">

						</div>
						<div id="div2" style="float:left; width:30%;  ">
							<img style="width:90%" src="img/cita.png">

						
						</div>
						<div id="div3" style="float:left; width:30%; margin-right:5%;">
							<img style="width:78%" src="img/resena.png">
						</div>
					</div>
					<br>
					<div align="center" style=" height: 600px; width:100%; background-color: #fff;">
						<div align="center" style=" height: 600px; width:100%; background-color: #fff;">
							<div id="div1" style="float:left; width:40%; margin-left:5%;">
								<img style="width:90%" src="img/soy.png">

							</div>
							<div id="div2" style="float:left; width:40%; margin-left:5%;">
								<img style="width:90%" src="img/mas.png">

							</div>
						</div>


						<footer>
							<div>
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


								</div>
								<?php
								require("modal/registro.php");
								require("modal/inicio_sesion.php");
								require("modal/olvido_password.php");
								?>

							</div>
						</footer>

						<script>
							(function($) {
								$(window).on("load", function() {
									$(".chats").mCustomScrollbar({
										theme: "rounded"
									});
								});
							})(jQuery);
						</script>

						<!-- chat -->
						<script>
							var CALENDAR = function() {
								var wrap, label,
									months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

								function init(newWrap) {

								}

								function switchMonth(next, month, year) {

								}

								function createCal(year, month) {

								}
								createCal.cache = {};
								return {
									init: init,
									switchMonth: switchMonth,
									createCal: createCal
								};
							};

							wrap = $(newWrap || "#cal");
							label = wrap.find("#label");
							wrap.find("#prev").bind("click.calendar", function() {
								switchMonth(false);
							});
							wrap.find("#next").bind("click.calendar", function() {
								switchMonth(true);
							});
							label.bind("click", function() {
								switchMonth(null, new Date().getMonth(), new Date().getFullYear());
							});
							label.click();

							var curr = label.text().trim().split(" "),
								calendar, tempYear = parseInt(curr[1], 10);
							month = month || ((next) ? ((curr[0] === "December") ? 0 : months.indexOf(curr[0]) + 1) : ((curr[0] === "January") ? 11 : months.indexOf(curr[0]) - 1));
							year = year || ((next && month === 0) ? tempYear + 1 : (!next && month === 11) ? tempYear - 1 : tempYear);

							if (!month) {
								if (next) {
									if (curr[0] === "December") {
										month = 0;
									} else {
										month = months.indexOf(curr[0]) + 1;
									}
								} else {
									if (curr[0] === "January") {
										month = 11;
									} else {
										month = months.indexOf(curr[0]) - 1;
									}
								}
							}

							if (!year) {
								if (next && month === 0) {
									year = tempYear + 1;
								} else if (!next && month === 11) {
									year = tempYear - 1;
								} else {
									year = tempYear;
								}
							}

							calendar = createCal(year, month);
							$("#cal-frame", wrap)
								.find(".curr")
								.removeClass("curr")
								.addClass("temp")
								.end()
								.prepend(calendar.calendar())
								.find(".temp")
								.fadeOut("slow", function() {
									$(this).remove();
								});

							$('#label').text(calendar.label);

							{
								calendar: function() {
									/* returns a jquery object of the calendar */ },
								label: "Month Year"
							},

							var day = 1,
								i, j, haveDays = true,
								startDay = new Date(year, month, day).getDay(),
								daysInMonths = [31, (((year % 4 == 0) && (year % 100 != 0)) || (year % 400 == 0)) ? 29 : 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31],
								calendar = [];

							i = 0;
							while (haveDays) {
								calendar[i] = [];
								for (j = 0; j < 7; j++) {
									if (i === 0) {
										if (j === startDay) {
											calendar[i][j] = day++;
											startDay++;
										}
									} else if (day <= daysInMonths[month]) {
										calendar[i][j] = day++;
									} else {
										calendar[i][j] = "";
										haveDays = false;
									}
									if (day > daysInMonths[month]) {
										haveDays = false;
									}
								}
								i++;
							}


							if (calendar[5]) {
								for (i = 0; i < calendar[5].length; i++) {
									if (calendar[5][i] !== "") {
										calendar[4][i] = "<span>" + calendar[4][i] + "</span><span>" + calendar[5][i] + "</span>";
									}
								}
								calendar = calendar.slice(0, 5);
							}

							for (i = 0; i < calendar.length; i++) {
								calendar[i] = "<tr><td>" + calendar[i].join("</td><td>") + "</td></tr>";
							}
							calendar = $("<table>" + calendar.join("") + "</table>").addClass("curr");

							$("td:empty", calendar).addClass("nil");
							if (month === new Date().getMonth()) {
								$('td', calendar).filter(function() {
									return $(this).text() === new Date().getDate().toString();
								}).addClass("today");
							}
							createCal.cache[year][month] = {
								calendar: function() {
									return calendar.clone()
								},
								label: months[month] + " " + year
							};

							return createCal.cache[year][month];

							var cal = CALENDAR();

							cal.init();
						</script>

</body>

</html>