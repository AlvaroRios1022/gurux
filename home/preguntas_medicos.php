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
			background-color: #8ED8F8;
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
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="politicas.pdf" download="politicas.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POL??TICAS DE PRIVACIDAD</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="terminos.pdf" download="terminos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >T??RMINOS Y CONDICIONES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a href="datos.pdf" download="datos.pdf" style="font-size:10px; text-decoration:none; color:#000;" >POL??TICAS DE DATOS</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none; color:#000; " href="contacto.php">CONT??CTENOS</a></li>
						</ul>
					</li>
					<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
					<li class="menuamarillo" style="margin-left:-20px;height:30px;width:250px;background-color:transparent">
						<a class="menuamarillo" href="https://www.guruxy.com" style="font-size: 15px; text-decoration:none;">TRABAJA CON NOSOTROS</a>
					</li>
					<li style="font-size: 15px; color: #FFF;margin-left:-20px;height:30px;width:3px;background-color:transparent">|</li>
					<li class="menuamarillo" style=" margin-left:-40px;height:30px;width:250px;background-color:transparent">
						<a href="como.php" class="menuamarillo" href="#" style="font-size: 15px; text-decoration:none;">??C??MO FUNCIONA?</a>
					</li>
				</ul> 
			</nav>
				<!--<ul id="lista">
					<li class="itemlista">SOBRE NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">TRABAJA CON NOSOTROS</li>
					<li class="itemlista">&nbsp;|&nbsp;</li>
					<li class="itemlista">??C??MO FUNCIONA?</li>
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

				<a class="logout_btn" href="logout.php" style=" "> Cerrar Sesi??n</a>
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

							<a href="medicos.php"><li class="azulmedicos" style="">M??DICOS</li></a>
						<a href="medicina_alternativa.php"><li class="verdemedicos">M??DICINA ALTERNATIVA</li></a>
						<a href="preparacion.php"><li class="amarilloyoga" >PREPARACI??N F??SICA</li></a>
						<a href="psiquicos.php"><li class="moradosiquico">PS??QUICOS</li></a>
						<a href="religiosos.php"><li class="azulreligioso">RELIGIOSOS</li></a>
						<a href="coaching.php"><li class="naranjacoaching">COACHING</li></a>
						<a href="idiomas.php"><li class="azulidioma">IDIOMAS</li></a>
						<a href="tutores.php"><li class="rosadotutores">TUTORES</li></a>
						<a href="otros.php"><li class="verdeotros">OTROS PROFESIONALES</li></a>
						<a href="construccion.php"><li class="amarillocontruccion">ESPECIALISTAS CONSTRUCCI??N</li></a>
					</ul>
				</nav>
			</div>
		</div>
		<div class="barra" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-90px;" class="itemlista1"><a id="current" href="medicos.php" > HOME M??DICOS </a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_medicos.php" style="color:#fff; text-shadow: 1px 1px 1px black;">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cuidados_medicos_casa.php">CUIDADOS EN CASA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="presencial_medicos.php">CITA PRESENCIAL</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="servicios_synlab.php">LABORATORIOS M??DICOS</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="servicios_larebaja.php">FARMACIAS</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="historia_clinica.php">HISTORIA CL??NICA</a></li>
				<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class="itemlista1"><a href="turismo_medico.php">TURISMO M??DICO</a> </li>
				<li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
				<li class="itemlista1"><a href="libreria.php" >LIBRER??A</a></li> 
            </ul>
        </div>
 
        <div class="contenido">
            <div class="barraizquierda">
			
					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" class="buscador" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="search" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
<div  class="especial">								<a href=" "><li style="color: #333; " value="Alerg??logo">Alerg??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Angi??logo">Angi??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Cardi??logo">Cardi??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Deport??logo">Deport??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Dermat??logo">Dermat??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Endocrin??logo">Endocrin??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Enfermero">Enfermero</li></a><br>
                                <a href=" "><li style="color: #333; " value="Epidemi??logo">Epidemi??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estomat??logo">Estomat??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Farmac??logo">Farmac??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fisi??logo">Fisi??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fonoaudi??logo">Fonoaudi??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Forense">Forense</li></a><br>
                                <a href=" "><li style="color: #333; " value="General">General</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geriatra">Geriatra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ginec??logo">Ginec??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Hemat??logo">Hemat??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Hist??logo">Hist??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Inmun??logo">Inmun??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microbi??logo">Microbi??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Nefr??logo">Nefr??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Neum??logo">Neum??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Neur??logo">Neur??logo</li></a><br>
								<a href=""><li style="color: #333; " value="Odont??logo Endodoncista">Odont??logo Endodoncista</li></a><br>
                                <a href=""><li style="color: #333; " value="Odont??logo general">Odont??logo general</li></a><br>
                                <a href=""><li style="color: #333; " value="Odont??logo Odontopediatra">Odont??logo Odontopediatra</li></a><br>
                                <a href=""><li style="color: #333; " value="Odont??logo Ortodoncista">Odont??logo Ortodoncista</li></a><br>
                                <a href=""><li style="color: #333; " value="Odont??logo Pat??logo oral o Cirujano oral">Odont??logo Pat??logo oral o Cirujano oral</li></a><br>
                                <a href=""><li style="color: #333; " value="Odont??logo Periodoncista">Odont??logo Periodoncista</li></a><br>
                                <a href=""><li style="color: #333; " value="Odont??logo Prostodoncista">Odont??logo Prostodoncista</li></a><br>
                                
                                <a href=" "><li style="color: #333; " value="Onc??logo">Onc??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ortopedista">Ortopedista</li></a><br>
                                <a href=" "><li style="color: #333; " value="Pat??logo">Pat??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Pediatra">Pediatra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Pod??logo">Pod??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Proct??logo">Proct??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psicoanalista">Psicoanalista</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psic??logo">Psic??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psicoterapeuta">Psicoterapeuta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psiquiatra">Psiquiatra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Quiropr??ctico">Quiropr??ctico</li></a><br>
                                <a href=" "><li style="color: #333; " value="Radi??logo">Radi??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Radioterapeuta">Radioterapeuta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Reumat??logo">Reumat??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sex??logo">Sex??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sofr??logo">Sofr??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Terapeuta">Terapeuta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Toxic??logo">Toxic??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Traumat??logo y Ortopedista">Traumat??logo y Ortopedista</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ur??logo">Ur??logo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Vir??logo">Vir??logo</li></a><br>
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
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_medicos2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_medicos3.jpg" style="width:100%"></a>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>

		<!-- Gurus -->

		<div class="fondomedio" >
	
	
		  <!--Product Grid-->
		<div >
		<br>
<!--
			<div align="right">
				<img  src="img/agenda.png" alt="kalita" style=" width:25%; margin-right:25px"  >
			</div> -->
			<section class="section-grid">
				<div class="grid-med">
					<div style="width: 45%;">
				<h2 class="preguntas" style="margin-left:-10px">Preguntas Frecuentes</h2>
				</div>
			<div class="bloquepreguntas_int">
				<details>
					<summary class="titulodesple">
					??Para qu?? casos sirve?
					</summary>
					<br>
					<li>Gripes y s??ntomas de influenza</li>
					<li>Bronquitis</li>
					<li>Alergias</li>
					<li>Hiedras / Poison Ivy</li>
					<li>Conjuntivitis / Pink Eye</li>
					<li>Infecciones urinarias</li>
					<li>Infecciones respiratorias</li>
					<li>Sinusitis</li>
					<li>Infecciones ven??reas</li>
					<li>Infecciones de o??do</li>
					<li>Picaduras de Insectos</li>
					<li>V??mitos</li>
					<li>Mareos</li>
					<li>Hinchaz??n</li>
					<li>Afectaciones mentales</li>
					<li>??Y m??s!</li>
					<br>

				</details>

				<details>
					<summary class="titulodesple">
					??Por qu?? un Gur?? medico amigo?					
					</summary>
					<br>
					<li>La receta electr??nica ser?? enviada a tu farmacia</li>
					<li>No se requiere cita previa</li>
					<li>Llama a cualquier hora</li>
					<li>Es una fracci??n del costo de la sala de emergencia</li>
					<li>Siempre est?? contigo.</li>
					<li>Agenda cita con tu medico cualquier dia.</li>
					<li>No faltar??s al trabajo</li>
					<li>Para tu tranquilidad y conveniencia</li>
					<li>Consulta desde cualquier tel??fono de E.U.A.</li>
					<li>Se habla espa??ol e ingl??s</li>

					<br>
				</details>
				
				<details>
					<summary class="titulodesple">
						Los Gur??s m??dicos
					</summary>
					<br>
					<li>"Medicos Certificados de varios paises"</li>
					<li>Todos con licencia para ejercer.</li>
					<li>Promedio de 5 a??os ejerciendo.</li>
					<li>Verificados por el ???American Medical Association para americanos, y por la autoridad del pais de su Pregrado.???</li>
					<li>Capacitados en protocolos de telesalud en como hablar y diagnosticar a pacientes por tel??fono o video llamada</li>
					<br>
				</details>

				<details>
					<summary class="titulodesple">
						??C??mo funciona?
					</summary>
					<br>
					<li>Ten tu # de membres??a a la mano</li>
					<li>Solicita tu consulta</li>
					<li>Habla con un Guru Medico</li>
					<li>Resuelve tu asunto</li>
					<br>
				</details>

				<details>
				<summary class="titulodesple">
					??Que acreditaciones y experiencia tienen los GURUS MEDICOS de Guruxy.com?
					</summary>
					<br>
					<p style="font-size:18px; text-align: left;">Hay muchas razones para consultar en Guruxy.com, pero estas son:</p>
					<li>Por no ir a perder tu tiempo en las consultorios ni cl??nicas.</li>
					<li>Por no faltar al trabajo.</li>
					<li>Por estar abiertos cuando m??s cuenta, las 24 horas.</li>
					<li>Por tranquilidad y conveniencia.</li>
					<li>Por la receta electr??nica que es enviada a tu farmacia.</li>
					<br>
				</details>

				<details>
				<summary class="titulodesple">
					??Para que enfermedades es conveniente consultar en Guruxy.com?
					</summary>
					<br>
					<p style="font-size:18px; text-align: left;">En Guruxy.com atiende casos de servicios primarios. Estos son casos comunes:</p>
					<li>Gripes y s??ntomas de influenza</li>
					<li>Bronquitis</li>
					<li>Alergias</li>
					<li>Hiedras </li>
					<li>Conjuntivitis </li>
					<li>Infecciones urinarias</li>
					<li>Infecciones respiratorias</li>
					<li>Sinusitis</li>
					<li>Infecciones ven??reas</li>
					<li>Infecciones de o??do</li>
					<li>Picaduras de Insectos</li>
					<li>Vomitos</li>
					<li>Mareos</li>
					<li>Hinchazon</li>
					<li>Afectaciones mentales ??Y m??s!</li>

					<br>
				</details>
				<details>
				<summary class="titulodesple">
					??No tengo tarjeta de cr??dito, como puedo pagar la consulta?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
						Si no tienes una tarjeta de cr??dito, puedes usar una de d??bito. 
						Si no tienes de ning??n tipo, puedes adquirir en muchas tiendas de 
						supermercado tarjetas de regalo (gift cards) 
						en donde ya viene la tarjeta con un simbolo de VISA o Master Card. 
						Estas tarjetas funcionan igual que una de cr??dito o d??bito.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??Me pueden recetar medicinas?
					</summary>
					<br>
					<p style="font-size:18px; text-align: left;">Si. Si en Guruxy.com lo v?? apropiado, puede hacer recetas de corto plazo. Estas son algunas de las mas comunes:</p>
					<li>Amoxicillin???</li>
					<li>Azithromycin???</li>
					<li>Bactrim DS???</li>
					<li>Augmentin???</li>
					<li>Cipro???</li>
					<li>Tessalon Perles???</li>
					<li>Flonase Nasal Spray???</li>
					<li>Pyridium???</li>
					<li>Prednisone???</li>
					<li>Diflucan???</li>

					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??La consulta es en ingl??s o espa??ol?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Tu decides. Sabemos que cuando se trata de comunicar los s??ntomas que uno siente, 
					es mejor hacerlo en el idioma que uno est?? acostumbrado a hablar. Por eso, la consulta 
					con Guruxy.com es en espa??ol. Si prefieres, puede ser en ingl??s. La consulta es en 
					tu idioma de preferencia.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??Hay que ser ciudadano o residente de Estados Unidos o de algun pais en particular?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					No. Todos necesitamos cuidar nuestra salud y Guruxy.com es para todas
					 las nacionalidades. No importa si eres am??ricano, latinoamericano, residente, 
					 indocumentado o solamente est??s visitando los Estados ??nidos o te encuentras en 
					 cualquier pais de Latinoamerica, puedes consultar Guruxy.com en espa??ol o en 
					 ingl??s.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??Hay que calificar?
					</summary>
					<br>
					<p style="font-size:18px; text-align: left;">
					No. No hay que calificar porque no estas comprando seguro m??dico. 
					Cualquier persona con o sin seguro m??dico puede comprar una consulta 
					de servicios primarios con Guruxy.com.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??Estoy comprando seguro m??dico con Guruxy.com?
					</summary>
					<br>
					<p style="font-size:18px; text-align: left;">
					No. Eso es lo bueno de Guruxy.com. No hay que calificar, 
					no hay deducibles o gastos adicionales o comprobantes que cuidar 
					para prevenir cobros adicionales. Es f??cil. Compras una consulta, 
					te atiende un doctor, si el doctor te receta medicamentos, env??a tu 
					receta electr??nicamente a una farmacia cerca de t?? y y??. No pierdes 
					tiempo buscando una cl??nica y esperando ah?? entre gente enferma. Marcas 
					desde donde sea con la comodidad de tu celular o desde tu casa, hotel o 
					trabajo. Lo mejor de todo es que siempre hay un Guruxy.com disponible 
					las 24 horas del d??a, cuando verdaderamente lo necesites.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??Est??n abiertos las 24 horas del d??a?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Si. Por que sabemos que las enfermedades no tienen horario. Hasta parece que 
					se esperan que anochezca o que sea fin de semana, cuando las cl??nicas y doctores 
					de cabecera ya cerraron. Por que sabemos que el mejor horario es cuando m??s cuenta, 
					cuando lo necesitas! Por eso siempre estamos abiertos las 24 horas del d??a.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??Guruxy.com atiende casos de EMERGENCIA?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					No. Si tienes una emergencia m??dica lo mejor es que te comuniques al 911 en Usa, 
					o al numero de emergencias de tu pa??s o visites a tu doctor de cabecera o sala de 
					emergencias. Guruxy.com atiende consultas de servicios primarios.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
					??Como me hacen llegar la receta m??dica?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					En caso que Guruxy.com recete medicamentos, la receta se enviar?? 
					electr??nicamente a una farmacia cercana a ti de CRUZ VERDE, no importa si 
					estas en tu casa o de viaje en otra ciudad. No siempre vas a enfermarte en 
					el mismo lugar y por eso es que pensamos en enviarte la receta a una farmacia 
					cercana a t??. La formula tambi??n se enviara v??a correo electr??nico al paciente. 
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				??Aunque ya tengo seguro, puedo consultar con Guruxy.com?
				</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Si. Aunque es bueno tener seguro para cubrir ciertos gastos, hay ocasiones 
					en donde consultar con Guruxy.com es conveniente. Pudieras estar de viaje 
					y no tener acceso a tu doctor de cabecera, o no tener tiempo o el lujo de faltar 
					al trabajo, o puede ser noche o fin de semana y tu doctor no est?? disponible. 
					Guruxy.com esta disponible las 24 horas. Solo compras, hablas, consultas y ya.
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
								<h4 style=" color: #FEC705;  "><strong>Iniciar Sesi??n</strong></h4>
								<P style="font-size: 14px; color: #ffffff; margin:0 20%">Para chatear con nuestros Gur??s inicia sesi??n con tu usuario y contrase??a</P>
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
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contrase??a">
								</div>
								
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvid?? mi usuario / contrase??a</p> </a>
								<a href="usuarios.php" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ??GRATIS!</h4> </a>
								<br>
						  </div>
							<input href="usuarios.php"type="submit" name="entrar" value="Iniciar Sesi??n" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
					<div class="menuright3" align="center" style="margin-top: 20px" >
						<form  action="" method="post">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705; ">Eres G??ru?</h4>
								<P style="font-size: 18px; color: #ffffff">Ingresa a tu perfil</P>
							</div>
							<div >				
								<div class="form-group" >
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario - Celular">
								</div><br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contrase??a">
								</div>
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvid?? mi usuario / contrase??a</p> </a>
									<a href="https://www.guruxy.com" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ??GRATIS!</h4> </a>

								<br>

							</div>
						  <input type="submit" name="entrar" value="Iniciar Sesi??n" class=" botonright" style="font-weight:800 " >
						</form>
					</div>	
				</div>
				
				</section>
			</div>
		</div>
	</div>
	<div class="footer2" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/amedico.png" alt="kalita">
        </div>
            
                <div align="center">
                    
                    <img  style="width:15%;" src="img/preffo1.png" alt="kalita">
                    <img  style="width:15%; margin-left:25px" src="img/preffo2.png" alt="kalita">
                    <img  style="width:15%; margin-left:25px" src="img/preffo3.png" alt="kalita">
                    <img  style="width:15%; margin-left:25px; margin-right:25px " src="img/preffo4.png" alt="kalita">
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
							<a href="politicas.pdf" download="politicas.pdf">Pol??tica de Privacidad</a>
						</li>
							
						<li>
							<a href="terminos.pdf" download="terminos.pdf">T??rminos y Condiciones</a>
						</li>
							
						<li>
							<a href="terminos.pdf" download="terminos.pdf">T??rminos de Uso </a>
						</li>
					</ul>
            	</div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                     <span style="color: #C93782">ERES GUR???</span>    
                     <li>
                        <a href="https://www.guruxy.com" >??nete hoy a nosotros y con??ctate a esta gran red de expertos.</a>
                     </li>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                          <span style="color: #C93782">S??GUENOS</span>    
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
            $(".barraizquierda").mCustomScrollbar({
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
