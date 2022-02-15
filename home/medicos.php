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
		

</style>
</head>

<body class="cabecera">
		
<?php
		if(empty($_SESSION['userlog'])) {
	?>
	<div id="container2" >
		<div class="logo">
		<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%"  alt="logo" /></a>
		<nav  style=" margin-left:-20px;">
				<ul  >
					<li class="menuamarillo" style=" margin-top:-3px; margin-left:10px; width:120px; height:30px; background-color:transparent; ">
					<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>
					
					<ul style="margin-left:-35px; height:auto; max-width:130px;">
							
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#000;" >COMUNIDAD GURÚ</a></li>
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="seguros.php" style="font-size:10px; text-decoration:none; color:#000;" >SEGUROS</a></li>
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#000;" >COBRU</a>	</li>
						</ul>
					</li>
					</nav>
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
						<a class="menuamarillo" href="#" style="font-size: 15px; text-decoration:none;">¿CÓMO FUNCIONA?</a>
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
			
			<div class="menusuperiocentro"  style="margin-left: -30px">
				<a href="usuarios.php"> <img src="img/registros_.png" width="176px" height="30px" alt="registro" /></a>
				<img src="img/sesiones_.png" width="176px" height="30px" alt="sesion" />
			</div>
			<a href="cobru.php" ><img src="img/logoheader.png" width="7%"  alt="sesion" style="margin-top:10px" /></a>


			<div class="menusuperiorderecho" align="left"  style="margin-left: -20px">
				<span class="itemlista">IDIOMA  <a style="color:#FFC808"> ES </a>  |  EN</span>
			</div>
			
			<div class="menuinferior" >
				<br>
				<nav>
					<ul align="right">
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
		<div class="barra" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="#" style="color:#fff; text-shadow: 1px 1px 1px black;"> HOME MÉDICOS </a></li>
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
				<li class="itemlista1"><a href="libreria.php">LIBRERÍA</a></li> 

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
							<div class="especial" >
								<a href=" "><li style="color: #333; " value="Alergólogo">Alergólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Angiólogo">Angiólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Cardiólogo">Cardiólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Deportólogo">Deportólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Dermatólogo">Dermatólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Endocrinólogo">Endocrinólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Enfermero">Enfermero</li></a><br>
                                <a href=" "><li style="color: #333; " value="Epidemiólogo">Epidemiólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estomatólogo">Estomatólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Farmacólogo">Farmacólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fisiólogo">Fisiólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fonoaudiólogo">Fonoaudiólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Forense">Forense</li></a><br>
                                <a href=" "><li style="color: #333; " value="General">General</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geriatra">Geriatra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ginecólogo">Ginecólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Hematólogo">Hematólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Histólogo">Histólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Inmunólogo">Inmunólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microbiólogo">Microbiólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Nefrólogo">Nefrólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Neumólogo">Neumólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Neurólogo">Neurólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Oncólogo">Oncólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ortopedista">Ortopedista</li></a><br>
                                <a href=" "><li style="color: #333; " value="Patólogo">Patólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Pediatra">Pediatra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Podólogo">Podólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Proctólogo">Proctólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psicoanalista">Psicoanalista</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psicólogo">Psicólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psicoterapeuta">Psicoterapeuta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Psiquiatra">Psiquiatra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Quiropráctico">Quiropráctico</li></a><br>
                                <a href=" "><li style="color: #333; " value="Radiólogo">Radiólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Radioterapeuta">Radioterapeuta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Reumatólogo">Reumatólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sexólogo">Sexólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sofrólogo">Sofrólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Terapeuta">Terapeuta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Toxicólogo">Toxicólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Traumatólogo y Ortopedista">Traumatólogo y Ortopedista</li></a><br>
                                <a href=" "><li style="color: #333; " value="Urólogo">Urólogo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Virólogo">Virólogo</li></a><br>
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
		<img style="width:84%; margin-top:142px " src="img/categorias/barracomo.png" alt="estres">
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
	
	<div >
		<br>
		<img src="img/nuestros.png"  style="width: 55%; margin-left:17%" height="auto">
	</div>
	
	
	
		  <!--Product Grid-->
		<div align="right">

		
			<section class="section-grid2">
				
				<div class="grid-prod2">
				
					<div class="prod-grid3 " style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					

					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/1m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">★</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer más ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					<P style="margin-left:64%;  padding-top:10px; color:#FFF; background-color:#BFBFBF; height:50px; font-size:100%">&nbsp;&nbsp;&nbsp;&nbsp;VER TODOS LOS GÚRUS >&nbsp;&nbsp;&nbsp;&nbsp;<P>

				</div>
				<div align="left" style="padding-left: 0px;margin-right: 20px; ">
					
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
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario">
								</div>
								<br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
								
							</div>
							<div >
								<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
																<a href="usuarios.php" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4> </a>

								<br>
						  </div>
							<input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
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
									<input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario">
								</div><br>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
							</div>
							<div >
								<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
																<a href="https://www.guruxy.com" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4> </a>

								<br>

							</div>
						  <input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
					
					<div class="menuright2" align="center" style="margin-top: 20px" >
						<form  action="" method="post">
							<h4 style="color:#5C3293; padding-top: 20px; margin-bottom: 20px; font-size:16"> GURÚS DESTACADOS </h4>
						</form>
						<div class="prod-grid2 bloqueguru " style=" background-color: #8ED8F8; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
							<br>
							<form>
								<p class="clasificacion2" >
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label style="color:#fff" for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label style="color:#fff" for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label style="color:#fff" for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label style="color:#fff" for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label style="color:#fff" for="radio5">★</label>
								</p>
							</form>
							<br>
							<img  style="margin-bottom:10;" src="img/categorias/en linea/1.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#8ED8F8; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #8ED8F8; color:#fff">
						<br>
						<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">★</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">★</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">★</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">★</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">★</label>
							</p>
							<br><br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/2.jpg" alt="kalita">
		</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#8ED8F8; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #8ED8F8; color:#fff">
						<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">★</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">★</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">★</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">★</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">★</label>
							</p>
							<br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/3.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#8ED8F8; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #8ED8F8; color:#fff">
						<br>
						<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">★</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">★</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">★</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">★</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">★</label>
							</p>
							<br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/4.jpg" alt="kalita">
					</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						
						<div class=" bloqueguru3" style=" background-color:#8ED8F8; " >
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #8ED8F8; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">Gúru Médico </a>
							<br>
							<form>
								<p class="clasificacion2" style="margin-bottom: -7px">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label style="color:#fff" for="radio1">★</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label style="color:#fff" for="radio2">★</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label style="color:#fff" for="radio3">★</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label style="color:#fff" for="radio4">★</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label style="color:#fff" for="radio5">★</label>
								</p>
								<br>
							</form>
					  		<img  style="margin-bottom:10;" src="img/categorias/en linea/5.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#8ED8F8; " >
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>

				<br><br>
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
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-facebook fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-instagram fa-2x"></i></a>
						   </li>
						   <li>
                                <a href="#"><i style="color: #FFFFFF" class="fa fa-linkedin fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-youtube fa-2x"></i></a>
                           </li>
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
