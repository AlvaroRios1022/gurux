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
			background-color: #4EB3BD;
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
	

.caja_inline {
    display: inline-block;
    width: 100px;
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
				<div class="menusuperiocentro logout"  style="margin-left: -30px">
					<a class="logout_btn" href="logout.php"> Cerrar Sesión</a>
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
		<div class="barraidiomas" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="idiomas.php" > HOME IDIOMAS </a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_idiomas.php">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="idiomas_aprender.php" style="color:#fff; text-shadow: 1px 1px 1px black;">QUIERO APRENDER</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="idiomas_cursos.php">CURSOS EN LÍNEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="libreria_idiomas.php">LIBRERÍA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="historia_idiomas.php">MI CUENTA</a></li>
            </ul>
        </div>

        <div class="contenido">
            <div class="barraizquierdaidiomas">
			
					
			<div class="input-group">
							<br><br>
							<input style="margin-left:10px" id="buscador"  class="buscadoridiomas" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchidiomas" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					
							<div class="especialidiomas" >
							<table style="border: transparent !important;border-top: 0px !important ;color:transparent !important;border-radius: transparten;">
							<tbody id="myTable">
							<tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Alemán')" value="Alemán">Alemán</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Árabe')" value="Árabe">Árabe</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Bengalí')" value="Bengalí">Bengalí</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Chino cantonés')" value="Chino cantonés">Chino cantonés</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Chino mandarín')" value="Chino mandarín">Chino mandarín</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Chino Mǐn Nán')" value="Chino Mǐn Nán">Chino Mǐn Nán</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Chino Wu')" value="Chino Wu">Chino Wu</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Coreano')" value="Coreano">Coreano</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Español')" value="Español">Español</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Francés')" value="Francés">Francés</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Hausa')" value="Hausa">Hausa</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Hindi')" value="Hindi">Hindi</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Indonesio')" value="Indonesio">Indonesio</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Ingles')" value="Ingles">Ingles</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Italiano')" value="Italiano">Italiano</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Japonés')" value="Japonés">Japonés</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Javanés')" value="Javanés">Javanés</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Maratí')" value="Maratí">Maratí</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Panyabí occidental')" value="Panyabí occidental">Panyabí occidental</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Persa iraní')" value="Persa iraní">Persa iraní</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Portugués')" value="Portugués">Portugués</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Portugués')" value="Ruso">Ruso</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Tailandés')" value="Tailandés">Tailandés</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Tamil')" value="Tamil">Tamil</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Telugú')" value="Telugú">Telugú</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Turco')" value="Turco">Turco</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Urdu')" value="Urdu">Urdu</li></a></td></tr>
                                <tr><td><a href="#"><li style="color: #333;" onclick="filtroTipo('Vietnamita')" value="Vietnamita">Vietnamita</li></a></td></tr>
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

			if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
		?>
		<?php
			echo $_SESSION['userlog'];
		?>
		<?php
			}
		?>
		<div align="center" style="background-color:#D0E9EA">
		<img style="width:84%; margin-top:142px; height:0.01px " src="img/barratop.png" alt="estres">
		<br>
		<br>
		<form style=" margin-left:15%; background:#ffffff; border-radius:20px; width:80%" >
		<br>
		
		<span >  Quiero Aprender:</span>
  <select class="camposgenerales"
  
    style=" border: none;
    background-color: #0000;
    font-size: 15px;
    width: 100px;
    text-decoration: none;
    margin-bottom: auto;
    text-align: center" 
    name="profesional" id="profesional" onchange="SeleccionaProfesional(this)">        
    <option value="">-----</option>
								<option  value="Alemán">Alemán</option>
                                <option  value="Árabe">Árabe</option>
                                <option  value="Bengalí">Bengalí</option>
                                <option  value="Chino cantonés">Chino cantonés</option>
                                <option  value="Chino mandarín">Chino mandarín</option>
                                <option  value="Chino Mǐn Nán">Chino Mǐn Nán</option>
                                <option  value="Chino Wu">Chino Wu</option>
                                <option  value="Coreano">Coreano</option>
                                <option  value="Español">Español</option>
                                <option  value="Francés">Francés</option>
                                <option  value="Hausa">Hausa</option>
                                <option  value="Hindi">Hindi</option>
                                <option  value="Indonesio">Indonesio</option>
                                <option  value="Ingles">Ingles</option>
                                <option  value="Italiano">Italiano</option>
                                <option  value="Japonés">Japonés</option>
                                <option  value="Javanés">Javanés</option>
                                <option  value="Maratí">Maratí</option>
                                <option  value="Panyabí occidental">Panyabí occidental</option>
                                <option  value="Persa iraní">Persa iraní</option>
                                <option  value="Portugués">Portugués</option>
                                <option  value="Ruso">Ruso</option>
                                <option  value="Tailandés">Tailandés</option>
                                <option  value="Tamil">Tamil</option>
                                <option  value="Telugú">Telugú</option>
                                <option  value="Turco">Turco</option>
                                <option  value="Urdu">Urdu</option>
                                <option  value="Vietnamita">Vietnamita</option>
  </select>
  <span style="margin-left:3%"> Precio por Hora:</span>
  <input type="hidden" id="filtro" value="Idioma">
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #0000;
    font-size: 15px;
    width: 100px;
    text-decoration: none;
    margin-bottom: auto;
    text-align: center;  " 
    
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


  <span style="margin-left:3%">  Procedente de:</span>
  <select class="camposgenerales"	
  style=" border: none; background-color: #0000;font-size: 15px;
	width: 100px;text-decoration: none;margin-bottom: auto;text-align: center" 
	name="filtro_ciudad" id="filtro_ciudad" onchange="change_ciudad(this)">  
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


  
	<span style="margin-left:3%"> Disponibilidad:</span>
  <select class="camposgenerales"
  
  style=" border: none;
    background-color: #0000;
    font-size: 15px;
	width: 100px;
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
		</form>
<br>

<div class="content" align="center" style="margin-left: 17%">
    <div class="caja_inline" style=" width:300px; height: 30px; background:#ddd; border-radius:20px">
	
		<span style="margin-left:3%;">  El gurú Habla:</span>
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

	</div>

	<div class="caja_inline" style=" width:300px; height: 30px; background:#ddd; border-radius:20px">
		<span style="margin-left:3%">  Ordenar Por:</span>
  		<select class="camposgenerales"
		  
		style=" border: none;
		background-color: #0000;
    	font-size: 15px;
    	width: 100px;
    	text-decoration: none;
    	margin-bottom: auto;
    	text-align: center" 

    	name="cars" id="cars">        
   		 <option value="">-----</option>  
   		 <option value="">Nuestros Destacados</option>       

  		</select>
	</div>

	<div class="caja_inline" style=" width:300px; height: 30px; background:#ddd; border-radius:20px">
		<span style="margin-left:3%">  Buscar por Nombre:</span>
  		<select class="camposgenerales"
		  
		style=" border: none;
		background-color: #0000;
    	font-size: 15px;
    	width: 100px;
    	text-decoration: none;
    	margin-bottom: auto;
    	text-align: center" 

    	name="cars" id="cars">        
   		 <option value="">-----</option>       

  		</select>
	</div>

   
</div>

	<br>
				         
		
	<div align="right">
	</div>
	
	<div class="slideshow-container2" style="margin-left:16%" >
	<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_idiomas2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_idiomas3.jpg" style="width:100%"></a>
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
				
				<div class="grid-prod2" id="div_gurus">
				<div style="width: 45%;">
				<h2 class="preguntas" style="margin-left:-10px" >Quiero aprender</h2>
				</div>
			<div class="bloquepreguntas_int">
				<br>
			<p style="font-size:14px; text-align: justify;">
				<li>Prepárese para lograr sus objetivos con tutores privados</li>
				<li>Sumérjase en una nueva cultura</li>
				<li>Conéctese con expertos en idiomas de todo el mundo</li>
				<li>Triunfa en tu carrera</li>
				<li>Desarrolle su vocabulario de trabajo y comuníquese con claridad</li>
				<li>Obtenga ayuda de expertos cuando la necesite</li>
				<li>Aprende a resolver cualquier problema en cualquier idioma.</li>
				<li>Habla con naturalidad, siempre causa una buena impresión y genera confianza en cualquier idioma</li>
		</p>
		<br><br>
		<h2 class="preguntas" style="margin-left:-10px" >Garantía de satisfacción del 100%</h2>
		<p style="font-size:14px; text-align: justify;">
			Si no está satisfecho con su lección de prueba, le daremos un reemplazo gratuito con otro tutor o un reembolso completo
		</p>
				<br><br>
			</div>
					
					
				</div>
				<div align="left" style="padding-left: 0px;margin-right: 20px; ">
					
					<div class="menuright" align="center" >

						<form  action="" method="post" id="form_login">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705;  "><strong>Iniciar Sesión</strong></h4>
								<P style="font-size: 14px; color: #ffffff; margin:0 20%">Para chatear con nuestros Gurús inicia sesión con tu usuario y contraseña</P>
							<br>
							</div>
							<div >				
								<div class="form-group" >
								<input type="hidden" value="login" name="tipo">
								<input type="hidden" value="1" name="tipo_user">
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
								<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
																<a href="usuarios.php" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4> </a>

								<br>
						  </div>
							<input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
				</div>
				</section>
			</div>
		</div>
	</div>

	<div class="footeridiomas" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/aidiomas.png" alt="kalita">
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
            $(".barraizquierdaidiomas").mCustomScrollbar({
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
<script src="js/consulta_gurus_especiales.js"></script>
<script src="js/login.js"></script>
</body>
</html>
