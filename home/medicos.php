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
					<a href="medicos.php"><li class="azulmedicos" style=" ">MÉDICOS</li></a>
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
							<a href="#"><li style="color: #333; " onclick="filtroTipo('Alergólogo')">Alergólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Cardiólogo')">Cardiólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Angiólogo')">Angiólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Deportólogo')">Deportólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Dermatólogo')">Dermatólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Endocrinólogo')">Endocrinólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Enfermero')">Enfermero</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Epidemiólogo')">Epidemiólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Estomatólogo')">Estomatólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Farmacólogo')">Farmacólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Fisiólogo')">Fisiólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Fonoaudiólogo')">Fonoaudiólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Forense')">Forense</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('General')">General</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Geriatra')">Geriatra</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Ginecólogo')">Ginecólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Hematólogo')">Hematólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Histólogo')">Histólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Inmunólogo')">Inmunólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Microbiólogo')">Microbiólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Nefrólogo')">Nefrólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Neumólogo')">Neumólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Neurólogo')">Neurólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Oncólogo')">Oncólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Ortopedista')">Ortopedista</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Patólogo')">Patólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Pediatra')">Pediatra</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Podólogo')">Podólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Proctólogo')">Proctólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Psicoanalista')">Psicoanalista</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Psicólogo')">Psicólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Psicoterapeuta')">Psicoterapeuta</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Psiquiatra')">Psiquiatra</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Quiropráctico')">Quiropráctico</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Radiólogo')">Radiólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Radioterapeuta')">Radioterapeuta</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Reumatólogo')">Reumatólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Sexólogo')">Sexólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Sofrólogo')">Sofrólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Terapeuta')">Terapeuta</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Toxicólogo')">Toxicólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Traumatólogo y Ortopedista')">Traumatólogo y Ortopedista</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Urólogo')">Urólogo</li></a><br>
                                <a href="#"><li style="color: #333; " onclick="filtroTipo('Virólogo')">Virólogo</li></a><br>
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
	
	<div style=" background-color: #d6f0fc; " >
		<br>
		<img src="img/nuestros.png"  style="width: 25%; margin-left:17%" height="auto"> 
		<a style=" margin-left:5%">Filtrar por:</a>
		<br><br>
		
	<input type="hidden" id="filtro" value="medicina">
  <span style="margin-left:20%"> Ciudad:</span>
  <select class="camposgenerales"	style=" border: none; background-color: #0000;font-size: 15px;
	width: 100px;text-decoration: none;margin-bottom: auto;text-align: center" 
	name="filtro_ciudad" id="filtro_ciudad" onchange="change_ciudad(this)">  
	<option value="">-----</option>           
	<option value="Bogota">Bogota</option>       

  </select>

  <span style="margin-left:3%"> Rango de Precio:</span>
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #0000;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center" 
	
	name="rango_precios" id="rango_precios" onchange="change_rango_precios(this)">
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
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #0000;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center" 
	
	name="idioma" id="idioma" onchange="change_idioma(this)">
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
  <select class="camposgenerales"
  
  style=" border: none;
    background-color: #0000;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center" 
	
	name="pais" id="pais" onchange="change_pais(this)">

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
                                    <option value="OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE">OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE</option>
                                    <option value="OTROS PAISES O TERRITORIOS  DE SUDAMERICA">OTROS PAISES O TERRITORIOS  DE SUDAMERICA</option>
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
  <select class="camposgenerales"
  
  style=" border: none;
    background-color: #0000;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center" 
	
	name="cars" id="cars">
	<option value="">-----</option>       
	<option value="">En Linea</option>       
	<option value="">En Consulta</option>       
	<option value="">OffLine</option>       

  </select>
  <br>
  <br>

	</div>
	
	
	
		  <!--Product Grid-->
		<div align="right">

		
			<section class="section-grid2">
				
				<div class="grid-prod2" id="div_gurus">
				
					


					
					
					
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
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/consultaMedicos_gurus.js"></script>

</body>
</html>
