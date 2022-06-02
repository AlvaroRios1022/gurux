<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
  
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
			margin-top:60px;			
			margin-left:-3px;
		}

		.mCS-rounded.mCSB_scrollTools .mCSB_draggerRail {
			margin-right:10px;
			margin-top:60px;
			width:4px;
			background-color: #FFED90;
		}
.mySlides {display:none;}

.holder1::-webkit-input-placeholder {
  text-align: center;
  color: #452167;
  
}
input:focus, select:focus, select, input.form-control:focus {

outline:none !important;

outline-width: 0 !important;

box-shadow: none;

-moz-box-shadow: none;

-webkit-box-shadow: none;

}
	

		
	</style>
</head>

<body class="cabecera">
		
<?php
		if(empty($_SESSION['userlog'])) {
	?>
	<div id="container2" >
		<div class="logo">
		<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%"  alt="logo" /></a>
		<!--	<nav style=" margin-left:-20px; ">
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
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="servicios_pasalapagina.php" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/pasalapagina.svg"></a></li>
								<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;"><img src=" img/servicios/smartfit.svg"></a> </li>
							</ul>
						</li>
				</nav> -->
			</div>
		<div class="menu">
			
			<div class="menusuperiorizquierdo" align="right" style="margin-left: 70px" >
			<nav  >
				<ul  >
					<li class="menuamarillo" style=" width:150px; height:30px; background-color:transparent; ">
					<a class="menuamarillo" href="#" style="font-size: 15px;  text-decoration:none;">SOBRE NOSOTROS</a>
					<ul style="margin-left:-35px; height:auto; max-width:130px;">
							
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000;" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="politicas.pdf" download="politicas.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POLÍTICAS DE PRIVACIDAD</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="terminos.pdf" download="terminos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >TÉRMINOS Y CONDICIONES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="datos.pdf" download="datos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POLÍTICAS DE DATOS</a></li>
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
				if(!(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE)){
			?>
				<div class="menusuperiocentro"  style="margin-left: -30px">
					<a href="usuarios.php"> <img src="img/registros_.png" width="176px" height="30px" alt="registro" /></a>
					<a href="login.php"><img src="img/sesiones_.png" width="176px" height="30px" alt="sesion" /></a>
				</div>
			<?php 
				}else{ 
			?>
				<div class="menusuperiocentro logout"  style="">
				<a style=" color:#FFC808;  "><?php echo $_SESSION['nombre']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

				<a class="logout_btn" href="logout.php" style=" "> Cerrar Sesión</a>
				</div>
			<?php 
				} 
			?>
			<a href="cobru.php" ><img src="img/logoheader.png" width="7%"  alt="sesion" style="margin-top:10px" /></a>


			<div class="menusuperiorderecho" align="left"  style="margin-left: -20px">
				<span class="itemlista">IDIOMA  <a style="color:#FFC808"> ES </a>  |  EN</span>
			</div>
			
			<div class="menuinferior" >
				<br>
				<nav>
					<ul align="right">
					<a href="servicios.php">
								<li class="rojoservicios" style="">	SERVICIOS</li>
							</a>

							<a href="medicos.php"><li class="azulmedicos" style="">MÉDICOS</li></a>
						<a href="medicina_alternativa.php"><li class="verdemedicos">MÉDICINA ALTERNATIVA</li></a>
						<a href="preparacion.php"><li class="amarilloyoga" >PREPARACIÓN FÍSICA</li></a>
						<a href="psiquicos.php"><li class="moradosiquico">PSÍQUICOS</li></a>
						<a href="religiosos.php"><li class="azulreligioso">RELIGIOSOS</li></a>
						<a href="coaching.php"><li class="naranjacoaching">COACHING</li></a>
						<a href="idiomas.php"><li class="azulidioma">IDIOMAS</li></a>
						<a href="tutores.php"><li class="rosadotutores">TUTORES</li></a>
						<a href="otros.php"><li class="verdeotros">OTROS PROFESIONALES</li></a>
						<a href="construccion.php"><li class="amarillocontruccion">ESPECIALISTAS CONSTRUCCIÓN</li></a>
					</ul>
				</nav>
			</div>
		</div>
		<div class="barrayoga" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-100px;" class="itemlista1"><a id="current" href="preparacion.php" > HOME PREPARACIÓN FÍSICA </a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_preparacion.php" style="color:#fff; text-shadow: 1px 1px 2px black;">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preparacion_fisica_casa.php">PREPARACIÓN FÍSICA EN CASA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">TRASMISIONES EN LÍNEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preparacion_cursos.php">CURSOS EN LÍNEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="servicios_fithub.php">NUTRICIÓN EN LÍNEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="libreria_preparacion.php" >LIBRERÍA</a></li>
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
							<button class="searchyoga" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
							<div class="especialyoga" >
							<a href=" "><li style="color: #333; " value=">Acidez">Aeróbicos</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Baile Bachata</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Baile Merengue</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Baile Salsa</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Baile Tango</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Barre</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Crosstech</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Danzika</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Spinning</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Body Combat</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Gluteo Xp</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Pilates</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Rumba</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Step</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Zumba</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Tabata</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Tono</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acidez">Acroyoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acné">Bikram yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acoso escolar">Esoterismo integral</li></a><br>
							<a href=" "><li style="color: #333; " value=">Adicción a medicamentos">Hatha yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Agorafobia">Meditación</li></a><br>
							<a href=" "><li style="color: #333; " value=">Alcoholismo y abuso de alcohol">Tantra yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Alergia a insectos">Vinyasa yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Alergia ocular">Yoga aéreo</li></a><br>
							<a href=" "><li style="color: #333; " value=">Ambliopía">Yoga prenatal</li></a><br>
							<a href=" "><li style="color: #333; " value=">Amenaza de aborto">Yoga restaurativo</li></a><br>
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

			if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
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
	
	<div class="slideshow-container2" style="margin-left:16%" >
	<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_preparacion_fisica2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_preparacion_fisica3.jpg" style="width:100%"></a>
		</div>
		
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>

		<!-- Gurus -->

		<div class="fondomedio" >
	

	
	
	
		  <!--Product Grid-->
		<div align="left">
<br>
		
		<section class="section-grid">
				<div class="grid-med">
					<div style="width: 45%;">
				<h2 class="preguntas" style="margin-left:-10px">Preguntas Frecuentes</h2>
				</div>
			<div class="bloquepreguntas_int">
				<details>
					<summary class="titulodesple">
					Clases Bajo Demanda 
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
						Transmita nuestro contenido On Demand a sus miembros a través del sitio web Guruxy.com o la aplicación. 
						Reciben un descuento y tú recibes una comisión.
					</p>
					<br>

				</details>

				<details>
					<summary class="titulodesple">
					Clases En Livestream				
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Transmita a sus instructores que enseñan clases Guruxy.com en vivo o desde su propia biblioteca digital.
					</p>
					<br>
				</details>
				
				<details>
					<summary class="titulodesple">
					Clases Virtuales
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Pantalla virtual de clases en cientos de Gimnasios del mundo.					</p>
					<br>
				</details>

				<details>
					<summary class="titulodesple">
					Hay muchas razones para consultar tu Guru en PREPARACION FISICA:					</summary>
					<br>
					<li>Por no ir a perder tu tiempo en desplazamientos y en áreas congestionadas de publico.</li>
					<li>Por no faltar al trabajo.</li>
					<li>Por estar abiertos cuando más cuenta, las 24 horas.</li>
					<li>Por tranquilidad y conveniencia.</li>
					<li>Porque la mejor receta es disponer a tu antojo de tu tiempo.</li>
					<br>
				</details>

				<details>
				<summary class="titulodesple">
					¿Que acreditaciones y experiencia tienen los GURUS de PREPARACION FISICA en Guruxy.com?
				</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
						Todos nuestros Gurus de Preparacion Fisica están certificados, y nosotros realizamos 
						un proceso de certificación con una compañía multinacional que nos acredita dicha
						información proporcionada por nuestros Gurus.
					</p>			
					<br>
				</details>

				<details>
				<summary class="titulodesple">
					¿Me puedo capacitar como INSTRUCTOR FISICO EN Guruxy.com?					
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;"><strong>DESCRIPCIÓN GENERAL DE LA CAPACITACIÓN INICIAL</strong>
						Capacítese como Instructor en cualquiera de nuestros programas: la elección es suya
						El curso de 2 días generalmente se lleva a cabo los sábados y domingos (alrededor de 8 horas cada día) y puede elegir asistir a un evento de capacitación en persona o un evento de capacitación en línea.
						Recibirás materiales de formación completos, que incluyen música y coreografía.
						Entrenadores de clase mundial lo guiarán a través de la capacitación, paso a paso.
						Al final del fin de semana, aprenderá a enseñar de forma segura y eficaz el programa de su elección.
						Esperamos grandes cosas de nuestros instructores, por lo que para demostrar que sus habilidades están a la altura, también deberá enviar un video de evaluación dentro de los 60 días posteriores a la finalización de su capacitación inicial.
						Todas las certificaciones deben completarse dentro de los seis meses posteriores a su asistencia a la capacitación.
						<br><br>
						<strong>CONVIÉRTETE EN MAESTRO DE EJERCICIO DE GRUPO</strong>
						Descubra talentos y fortalezas que nunca supo que tenía, reciba la guía de los mejores instructores del mundo, reciba educación regular, recursos y comience su viaje para convertirse en un instructor de entrenamiento de grupo maestro.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
					¿Qué Puedo Enseñar?				
				</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Ofrecemos 27 programas de capacitación diferentes, desde Aerobicos, Baile Bachata, Baile Merengue, Baile Salsa, Baile Tango, Barre, Crosstech, Danzika, Spinnig, Body Combat, etc.
					<br><br>
					Ver nuestros entrenamientos si no está seguro de en qué entrenar, hable con los instructores de su instalación local o comuníquese con nosotros y estaremos encantados de ayudarle.
					<br>
					Es posible que también desee ver qué clubes e instalaciones en su área ofrecen el entrenamiento que le interesa enseñar.

					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
					Inspírese Y Conecte Con Su Comunidad De Instructores					
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
						Asiste a los talleres de Guruxy y conoce a los mejores entrenadores maestros del mundo, experimenta nuevos lanzamientos y aprende técnicas para preparar tus clases.
						<br>
						Obtenga la última educación e investigación y pruebe diferentes programas de Guruxy.
						<br>
						Inspírese con lo mejor de lo mejor, conéctese con otros instructores y mejore su educación y habilidades con nuestros eventos.

					</p>

					<br>
				</details>
				<details>
				<summary class="titulodesple">
				¿La Clase es en inglés o español?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Tu decides. Sabemos que cuando se trata de comunicar los síntomas que uno siente, 
					es mejor hacerlo en el idioma que uno está acostumbrado a hablar. Por eso, la consulta 
					con Guruxy.com es en español. Si prefieres, puede ser en inglés. La consulta es en 
					tu idioma de preferencia.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
					¿No tengo tarjeta de crédito, como puedo pagar la consulta?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
						Si no tienes una tarjeta de crédito, puedes usar una de débito. 
						Si no tienes de ningún tipo, puedes adquirir en muchas tiendas de 
						supermercado tarjetas de regalo (gift cards) 
						en donde ya viene la tarjeta con un simbolo de VISA o Master Card. 
						Estas tarjetas funcionan igual que una de crédito o débito.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				¿Hay que ser ciudadano o residente de Estados Unidos o de algun pais en particular?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					No. Todos necesitamos cuidar nuestra salud y Guruxy.com es para todas
					 las nacionalidades. No importa si eres américano, latinoamericano, residente, 
					 indocumentado o solamente estás visitando los Estados Únidos o te encuentras en 
					 cualquier pais de Latinoamerica, puedes consultar Guruxy.com en español o en 
					 inglés.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
					¿Cómo inscribo mi Gimnasio a Guruxy para incluir todas mi programación de clases?
					</summary>
					<br>
					<p style="font-size:18px; text-align: left;">
					Muy simple, nos escribes y nos pondremos en contacto contigo lo mas pronto posible para conversar de como seria la integración de tus programación a nuestro producto.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				¿Están abiertos las 24 horas del día?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Si. Por que sabemos que las enfermedades no tienen horario. Hasta parece que 
					se esperan que anochezca o que sea fin de semana, cuando las clínicas y doctores 
					de cabecera ya cerraron. Por que sabemos que el mejor horario es cuando más cuenta, 
					cuando lo necesitas! Por eso siempre estamos abiertos las 24 horas del día.
					</p>
					<br>
				</details>
				<br><br>
			</div>
				</div>

			
				<div align="left" style="margin-right: 40px; ">
					
					<div class="menuright" align="center" >

						<form  action="" method="post">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705;  "><strong>Iniciar Sesión</strong></h4>
								<P style="font-size: 14px; color: #ffffff; margin:0 20%">Para chatear con nuestros Gurús inicia sesión con tu usuario y contraseña</P>
							<br>
							</div>
							<div >				
								<div class="form-group" >
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div>
								<br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
								
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p> </a>
								<a href="usuarios.php" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4> </a>
								<br>
						  </div>
							<input href="usuarios.php"type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
					<div class="menuright3" align="center" style="margin-top: 20px" >
						<form  action="" method="post">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705; ">Eres Gúru?</h4>
								<P style="font-size: 18px; color: #ffffff">Ingresa a tu perfil</P>
							</div>
							<div >				
								<div class="form-group" >
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div><br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p> </a>
									<a href="https://www.guruxy.com" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4> </a>

								<br>

							</div>
						  <input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
						</form>
					</div>	
				</div>
				
				</section>			</div>
		</div>
	</div>

	<div class="footeryoga" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/ayoga.png" alt="kalita">
        </div>
            
                <div align="center">
                    
					<img  style="width:15%; border-radius:20px" src="img/preffo1.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px" src="img/preffo2.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px" src="img/preffo3.png" alt="kalita">
                    <img  style="width:15%; border-radius:20px; margin-left:25px; margin-right:25px " src="img/preffo4.png" alt="kalita">
                </div> 


			<div class="row" >		

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
                        <a href="https://www.guruxy.com" >Únete hoy a nosotros y conéctate a esta gran red de expertos.</a>
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
				  <a href="https://guruxy.com/home/index.php" ><img  src="images/logo.png" width="220" height="auto" style="margin-left: -30px"  alt=""/></a
>
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
			if (n > slides.length) {slideIndex = 1}    
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";  
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";  
			dots[slideIndex-1].className += " active";
			}
		</script>
<script>
    (function($){
        $(window).on("load",function(){
            $(".barraizquierdayoga").mCustomScrollbar({
    theme:"rounded"
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
  if (slideIndex > x.length) {slideIndex = 1} 
  x[slideIndex-1].style.display = "block"; 
  setTimeout(carousel, 15000); 
}
</script>
</body>
</html>
