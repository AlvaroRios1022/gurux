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
			background-color: #DE5886;
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
		<nav  style=" margin-left:-20px; ">
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
		<div class="barratutores" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="tutores.php" > HOME TUTORES </a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_tutores.php">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="tutores_aprender.php">QUIERO APRENDER</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="tutores_cursos.php" style="color:#fff;text-shadow: 1px 1px 1px black;">CURSOS EN LÍNEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="libreria_tutores.php">LIBRERÍA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="historia_tutores.php">MI CUENTA</a></li>
            </ul>
        </div>

        <div class="contenido">
            <div class="barraizquierdatutores">
			
					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" class="buscadortutores" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchtutores" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
							<div class="especialtutores" >
							<p>Asignaturas Colegio </p>
                                <a href=" "><li style="color: #333; " value="Biología">Biología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ciencias sociales">Ciencias sociales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Contabilidad">Contabilidad</li></a><br>
                                <a href=" "><li style="color: #333; " value="Economía">Economía</li></a><br>
                                <a href=" "><li style="color: #333; " value="Español">Español</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ética">Ética</li></a><br>
                                <a href=" "><li style="color: #333; " value="Filosofía">Filosofía</li></a><br>
                                <a href=" "><li style="color: #333; " value="Física">Física</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geometría">Geometría</li></a><br>
                                <a href=" "><li style="color: #333; " value="Humanidades">Humanidades</li></a><br>
                                <a href=" "><li style="color: #333; " value="Matemáticas">Matemáticas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Química">Química</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistemas y Tecnología">Sistemas y Tecnología</li></a><br>
                           <br>

                            <p>Ciencias</p>
                             	<a href=" "><li style="color: #333; " value="Balance de materia y energía">Balance de materia y energía</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biofísica">Biofísica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biología">Biología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biología celular">Biología celular</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biología computacional">Biología computacional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biología molecular">Biología molecular</li></a><br>
                                <a href=" "><li style="color: #333; " value="Bioquímica">Bioquímica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Bioquímica metabólica">Bioquímica metabólica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Catálisis">Catálisis</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ciencias agrícolas">Ciencias agrícolas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Circuitos eléctricos">Circuitos eléctricos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Diseño de máquinas">Diseño de máquinas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ecología">Ecología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Electromagnetismo">Electromagnetismo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Electrónica análoga">Electrónica análoga</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estática">Estática</li></a><br>
                                <a href=" "><li style="color: #333; " value="Física 1">Física 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Física 2">Física 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Física biomecánica">Física biomecánica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fisicoquímica">Fisicoquímica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Genética">Genética</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geociencia">Geociencia</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geología">Geología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Hidrología">Hidrología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mecánica de fluidos y sólidos">Mecánica de fluidos y sólidos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mecatrónica">Mecatrónica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Metrología">Metrología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microbiología">Microbiología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Química analítica">Química analítica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Química general">Química general</li></a><br>
                                <a href=" "><li style="color: #333; " value="Química inorgánica">Química inorgánica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Química orgánica">Química orgánica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Resistencia de materiales">Resistencia de materiales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Termodinámica">Termodinámica</li></a><br>
                            <br>

                            <p>Ciencias Politicas y Sociales</p>
                                <a href=" "><li style="color: #333; " value="Antropología">Antropología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ciencias políticas">Ciencias políticas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Common law">Common law</li></a><br>
                                <a href=" "><li style="color: #333; " value="Criminología">Criminología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho civil">Derecho civil</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho comercial y mercantil">Derecho comercial y mercantil</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho constitucional">Derecho constitucional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho internacional">Derecho internacional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho laboral">Derecho laboral</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho penal">Derecho penal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho privado">Derecho privado</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho procesal">Derecho procesal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho público">Derecho público</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho romano">Derecho romano</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derechos humanos">Derechos humanos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Filosofía">Filosofía</li></a><br>
                                <a href=" "><li style="color: #333; " value="Hermenéutica">Hermenéutica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Historia y geografía">Historia y geografía</li></a><br>
                                <a href=" "><li style="color: #333; " value="Recursos humanos">Recursos humanos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Redacción y gramática">Redacción y gramática</li></a><br>
                                <a href=" "><li style="color: #333; " value="Relaciones internacionales">Relaciones internacionales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sociología">Sociología</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teología">Teología</li></a><br>
                            <br>

                            <p>Economía, Finanzas y Contabilidad</p>
                                <a href=" "><li style="color: #333; " value="Análisis financiero">Análisis financiero</li></a><br>
                                <a href=" "><li style="color: #333; " value="Comercio">Comercio</li></a><br>
                                <a href=" "><li style="color: #333; " value="Contabilidad">Contabilidad</li></a><br>
                                <a href=" "><li style="color: #333; " value="Costos">Costos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Econometría">Econometría</li></a><br>
                                <a href=" "><li style="color: #333; " value="Economía internacional">Economía internacional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Economía matemática">Economía matemática</li></a><br>
                                <a href=" "><li style="color: #333; " value="Finanzas">Finanzas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fundamentos macroeconómicos">Fundamentos macroeconómicos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fundamentos microeconómicos">Fundamentos microeconómicos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Impuestos">Impuestos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Macroeconomía 1">Macroeconomía 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Macroeconomía 2">Macroeconomía 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Matemática financiera">Matemática financiera</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mercadeo">Mercadeo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mercado de valores">Mercado de valores</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mercadotecnia y ventas">Mercadotecnia y ventas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microeconomía 1">Microeconomía 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microeconomía 2">Microeconomía 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Niif">Niif</li></a><br>
                                <a href=" "><li style="color: #333; " value="Presupuesto">Presupuesto</li></a><br>
                                <a href=" "><li style="color: #333; " value="Simulación financiera">Simulación financiera</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teoría de juegos">Teoría de juegos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teoría del consumidor">Teoría del consumidor</li></a><br>
                                <a href=" "><li style="color: #333; " value="Trading">Trading</li></a><br>
                                <br>

                            <p>Deportes</p>
                                <a href=" "><li style="color: #333; " value="Ajedrez">Ajedrez</li></a><br>
                                <a href=" "><li style="color: #333; " value="Artes marciales">Artes marciales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Baloncesto">Baloncesto</li></a><br>
                                <a href=" "><li style="color: #333; " value="Box/kick boxing">Box/kick boxing</li></a><br>
                                <a href=" "><li style="color: #333; " value="Entrenador personal">Entrenador personal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fútbol">Fútbol</li></a><br>
                                <a href=" "><li style="color: #333; " value="Manejo de dron">Manejo de dron</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mma (artes marciales mixtas)">Mma (artes marciales mixtas)</li></a><br>
                                <a href=" "><li style="color: #333; " value="Natación">Natación</li></a><br>
                                <a href=" "><li style="color: #333; " value="Patinaje">Patinaje</li></a><br>
                                <a href=" "><li style="color: #333; " value="Pilates">Pilates</li></a><br>
                                <a href=" "><li style="color: #333; " value="Slackline">Slackline</li></a><br>
                                <a href=" "><li style="color: #333; " value="Squash">Squash</li></a><br>
                                <a href=" "><li style="color: #333; " value="Tenis">Tenis</li></a><br>
                                <a href=" "><li style="color: #333; " value="Zumba">Zumba</li></a><br>
                            <br>

                            <p>Ingeniería</p>
                                <a href=" "><li style="color: #333; " value="Anadec">Anadec</li></a><br>
                                <a href=" "><li style="color: #333; " value="Base de datos">Base de datos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Base de datos linux">Base de datos linux</li></a><br>
                                <a href=" "><li style="color: #333; " value="Calidad">Calidad</li></a><br>
                                <a href=" "><li style="color: #333; " value="Comunicaciones analógicas">Comunicaciones analógicas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Control de producción">Control de producción</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fundamentos de producción">Fundamentos de producción</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ingeniería civil">Ingeniería civil</li></a><br>
                                <a href=" "><li style="color: #333; " value="Inteligencia artificial">Inteligencia artificial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Logística de producción">Logística de producción</li></a><br>
                                <a href=" "><li style="color: #333; " value="Machine learning">Machine learning</li></a><br>
                                <a href=" "><li style="color: #333; " value="Modelos de ingeniería 1 y 2">Modelos de ingeniería 1 y 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Simulación">Simulación</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistema de apoyo a la decisión">Sistema de apoyo a la decisión</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistema de control gerencial">Sistema de control gerencial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistemas de control analógico">Sistemas de control analógico</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistemas de control discreto">Sistemas de control discreto</li></a><br>
                            <br>

                            <p>Instrumentos Musicales</p>
                                <a href=" "><li style="color: #333; " value="Acordeón">Acordeón</li></a><br>
                                <a href=" "><li style="color: #333; " value="Bajo">Bajo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Batería">Batería</li></a><br>
                                <a href=" "><li style="color: #333; " value="Composición musical">Composición musical</li></a><br>
                                <a href=" "><li style="color: #333; " value="Flauta">Flauta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Grabación y producción musical">Grabación y producción musical</li></a><br>
                                <a href=" "><li style="color: #333; " value="Guitarra">Guitarra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Guitarra eléctrica">Guitarra eléctrica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ingeniería de sonido">Ingeniería de sonido</li></a><br>
                                <a href=" "><li style="color: #333; " value="Piano">Piano</li></a><br>
                                <a href=" "><li style="color: #333; " value="Técnica vocal">Técnica vocal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teoría musical">Teoría musical</li></a><br>
                                <a href=" "><li style="color: #333; " value="Trompeta">Trompeta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ukelele">Ukelele</li></a><br>
                                <a href=" "><li style="color: #333; " value="Violín">Violín</li></a><br>
                            <br>

                            <p>Matemáticas y probabilidad universitaria</p>
                                <a href=" "><li style="color: #333; " value="Álgebra lineal">Álgebra lineal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Análisis matemático">Análisis matemático</li></a><br>
                                <a href=" "><li style="color: #333; " value="Cálculo diferencial">Cálculo diferencial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Cálculo integral">Cálculo integral</li></a><br>
                                <a href=" "><li style="color: #333; " value="Cálculo multivariado">Cálculo multivariado</li></a><br>
                                <a href=" "><li style="color: #333; " value="Cálculo vectorial">Cálculo vectorial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ecuaciones diferenciales">Ecuaciones diferenciales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estadística aplicada">Estadística aplicada</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estadística descriptiva">Estadística descriptiva</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estadística inferencial">Estadística inferencial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geometría">Geometría</li></a><br>
                                <a href=" "><li style="color: #333; " value="Matemática estructural">Matemática estructural</li></a><br>
                                <a href=" "><li style="color: #333; " value="Modelos probabilísticos">Modelos probabilísticos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Precálculo">Precálculo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad 1">Probabilidad 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad 2">Probabilidad 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad y estadística 1">Probabilidad y estadística 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad y estadística 2">Probabilidad y estadística 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Trigonometría">Trigonometría</li></a><br>
                                <a href=" "><li style="color: #333; " value="Variable compleja">Variable compleja</li></a><br>
                            
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
				          <div align="center" style="background-color:#FBD6E5">
		<img style="width:84%; margin-top:142px; height:0.01px " src="img/barratop.png" alt="estres">
		<form style="margin-left:230px;" >
		<input class="barratop holder1" type="text" id="pais" name="pais" placeholder=" Escribe tu Pais" style="margin-top:5px; margin-bottom:5px; color:#452167; width:280px; height:60px; background-color:#DE5886; border: 1px solid #452167;">
			<select id="buscar" style="text-align-last: center; color:#452167; width:280px; height:60px; background-color:#DE5886; border: 1px solid #452167;">
				<option value="0"> Rango de Precio por Hora</option>
				<option value="1">$ 50.000 - $ 100.000</option>
				<option value="2">$ 100.000 - $ 150.000</option>
				<option value="3">$ 150.000 - $ 200.000</option>
				<option value="4">$ 200.000 - $ 250.000</option>
				<option value="4">$ 250.000 - $ 300.000</option>
			</select>
			<select id="buscar" style="text-align-last: center; color:#452167; width:280px; height:60px; background-color:#DE5886; border: 1px solid #452167;">
			<option value="0"> Estoy Dispinible Elige un Horario</option>
				<option value="1">6:00 - 7:00</option>
				<option value="2">7:00 - 8:00</option>
				<option value="3">8:00 - 9:00</option>
				<option value="4">9:00 - 10:00</option>
				<option value="5">10:00 - 11:00</option> 
				<option value="6">11:00 - 12:00</option>
				<option value="7">12:00 - 13:00</option>
				<option value="8">13:00 - 14:00</option>
				<option value="9">14:00 - 15:00</option>
				<option value="10">15:00 - 16:00</option>
				<option value="12">16:00 - 17:00</option>
				<option value="13">17:00 - 18:00</option>
				<option value="14">18:00 - 19:00</option>
				<option value="15">19:00 - 20:00</option>
			</select>
			<input type="submit" value="Enviar " style="color:#000; width:180px; height:58px; background-color:#ccc; border: 1px solid #999;" />
		</form>
	</div>
		
		
	
	
	<div class="slideshow-container2" style="margin-left:16%" >
	<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio1.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banners_tutores2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_tutores3.jpg" style="width:100%"></a>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>

		<!-- Gurus -->

		<div class="fondomedio" >
	
	<div >
		<br>
	</div>
	
	
	
		  <!--Product Grid-->
		<div align="left">

		
			<section class="section-grid2">
				
				<div class="grid-prod2">
			
					<div class="prod-grid3 " style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					

					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/8m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
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
						<div class="prod-grid2 bloqueguru " style=" background-color: #DE5886; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#DE5886; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #DE5886; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#DE5886; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #DE5886; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#DE5886; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #DE5886; color:#fff">
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
						
						<div class=" bloqueguru3" style=" background-color:#DE5886; " >
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #DE5886; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#DE5886; " >
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

	<div class="footertutores" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/atutores.png" alt="kalita">
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
                        	<a href="#">Sobre Nosotros</a>
                  		</li>
                           
						<li>
							<a href="#">Política de Privacidad</a>
						</li>
							
						<li>
							<a href="#">Términos y Condiciones</a>
						</li>
							
						<li>
							<a href="#">Términos de Uso </a>
						</li>
					</ul>
            	</div>
            
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                <ul class="contact">
                     <span style="color: #C93782">ERES GURÚ?</span>    
                     <li>
                        <a href="#">Únete hoy a nosotros y conéctate a esta gran red de expertos.</a>
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
				   <img  src="images/logo.png" width="220" height="auto" style="margin-left: -30px"  alt=""/>
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
            $(".barraizquierdatutores").mCustomScrollbar({
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
