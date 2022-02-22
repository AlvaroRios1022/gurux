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
			background-color: #9AD3AE;
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
		<div class="barraotros" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="otros.php" > HOME OTROS PROFESIONALES </a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">WEBINAR</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="presencial_otros.php" style="color:#fff; text-shadow: 1px 1px 1px black;">CITA PRESENCIAL</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">CURSOS EN LÍNEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">LIBRERÍA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">MI CUENTA</a></li>
            </ul>
        </div>

        <div class="contenido">
            <div class="barraizquierdaotros">
			
					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" class="buscadorotros" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchotros" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
							<div class="especialotros" >
                            <a href=" "><li style="color: #333; " value="Abogado “Contratación Estatal">Abogado “Contratación Estatal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Abogado “Contratación  Comercial ">Abogado “Contratación  Comercial </li></a><br>
                            <a href=" "><li style="color: #333; " value="Abogado “Contratación  Civil ">Abogado “Contratación  Civil </li></a><br>
                            <a href=" "><li style="color: #333; " value="Abogado “Contratación  Penal">Abogado “Contratación  Penal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Abogado “Contratación Propiedad Intelectual ">Abogado “Contratación Propiedad Intelectual </li></a><br>
                            <a href=" "><li style="color: #333; " value="Abogado “Contratación Estatal Tributaritarista">Abogado “Contratación Estatal Tributaritarista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Acompanante">Acompanante</li></a><br>
                            <a href=" "><li style="color: #333; " value="Actor">Actor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Actuario">Actuario</li></a><br>
                            <a href=" "><li style="color: #333; " value="Administrador Aeropuerto">Administrador Aeropuerto</li></a><br>
                            <a href=" "><li style="color: #333; " value="Administrador de Empresas">Administrador de Empresas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Aduana">Agente de Aduana</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Bolsa">Agente de Bolsa</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Policía">Agente de Policía</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Embarque">Agente de Embarque</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Inmigracion">Agente de Inmigración</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Marcas y Patentes">Agente de Marcas y Patentes</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente Maritimo">Agente Marítimo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente Portuario">Agente Portuario</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente Comerciales, Corredores y Afines">Agente Comerciales, Corredores y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Aduanas e Inspectores de Fronteras">Agente de Aduanas e Inspectores de Fronteras</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Compras, Intermediacion y consignatarios">Agente de Compras, Intermediación y Consignatarios</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Impuestos">Agente de Impuestos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Seguros">Agente de Seguros</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente de Viajes">Agentes de Viajes</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente Inmobiliarios">Agente Inmobiliarios</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agente y Policía de Transito">Agente y Policía de Transito</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agregado Diplomático">Agregado Diplomático</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agricultor">Agricultor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Agrónomo">Agrónomo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Analista Económico">Analista Económico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Analista Gestión Humana">Analista Gestión Humana</li></a><br>
                            <a href=" "><li style="color: #333; " value="Analista Mercados">Analista Mercados</li></a><br>
                            <a href=" "><li style="color: #333; " value="Analista Siniestros">Analista Siniestros</li></a><br>
                            <a href=" "><li style="color: #333; " value="Analista de Sistemas Informaticos">Analista de Sistemas Informaticos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Analista y Agentes Financieros">Analista y Agentes Financieros</li></a><br>
                            <a href=" "><li style="color: #333; " value="Antropologos">Antropólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Arqueologos">Arqueólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Arquitecto">Arquitecto</li></a><br>
                            <a href=" "><li style="color: #333; " value="Artesano de la Madera y Materiales Similares">Artesano de la Madera y Materiales Similares</li></a><br>
                            <a href=" "><li style="color: #333; " value="Artesano de los Tejidos, El cuero y Materiales similares">Artesano de los Tejidos, El cuero y Materiales similares</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asesor Financiero">Asesor Financiero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asesor Legal">Asesor Legal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asistente de Cine, Teatro, Televisión y Afines">Asistente de Cine, Teatro, Televisión y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asistente Contable">Asistente Contable</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asistente de Bibliotecas y Archivos">Asistente de Bibliotecas y Archivos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asistente Jurídico">Asistente Jurídico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asistente de Comercio Exterior">Asistente de Comercio Exterior</li></a><br>
                            <a href=" "><li style="color: #333; " value="Asistente de Trabajo Social y Comunitario">Asistente de Trabajo Social y Comunitario</li></a><br>
                            <a href=" "><li style="color: #333; " value="Astrofísico">Astrofísico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Astrólogo">Astrólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Astrónomo">Astrónomo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Atletas, Deportistas y Afines">Atletas, Deportistas y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auditor Contable">Auditor Contable</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auditor Financiero">Auditor Financiero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auditor Interno">Auditor Interno</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auditor Sistemas">Auditor Sistemas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar de Cartera y Afines">Auxiliar de Cartera y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar de Servicios de Correo">Auxiliar de Servicios de Correo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar de Droguería">Auxiliar de Droguería</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar Licencias">Auxiliar Licencias</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar Mecánica">Auxiliar Mecánica</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar de Vuelo">Auxiliar de Vuelo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar de Administración y Afines">Auxiliar de Administración y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar de Enfermería">Auxiliar de Enfermería</li></a><br>
                            <a href=" "><li style="color: #333; " value="Auxiliar de Odontología">Auxiliar de Odontología</li></a><br>
                            <a href=" "><li style="color: #333; " value="Avaluador Bienes">Avaluador Bienes</li></a><br>
                            <a href=" "><li style="color: #333; " value="Avicultores">Avicultores</li></a><br>
                            <a href=" "><li style="color: #333; " value="Azafata">Azafata</li></a><br>
                            <a href=" "><li style="color: #333; " value="Bacteriólogo">Bacteriólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Bailarín">Bailarín</li></a><br>
                            <a href=" "><li style="color: #333; " value="Banderillero">Banderillero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Barquero">Barquero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Beisbolista">Beisbolista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Bibliotecarios, Documentalistas y Afines">Bibliotecarios, Documentalistas y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Biofísico">Biofísico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Biógrafo">Biógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Biólogo">Biólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Bioquímico">Bioquímico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Bomberos y Rescatistas">Bomberos y Rescatistas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Bordadores y Afines">Bordadores y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Botánico">Botánico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Boxeador">Boxeador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Caficultor">Caficultor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cajero">Cajero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cajistas, Tipógrafos y Afines">Cajistas, Tipografos y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Camarógrafo">Camarógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cantante">Cantante</li></a><br>
                            <a href=" "><li style="color: #333; " value="Capitán de Aviación">Capitán de Aviación</li></a><br>
                            <a href=" "><li style="color: #333; " value="Capitanes, Oficiales de Cubierta y Prácticos">Capitanes, Oficiales de Cubierta y Prácticos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Caricaturista">Caricaturista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Carnicero, Pescadores y Afines">Carnicero, Pescadores y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Carpintero">Carpintero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cartógrafo">Cartógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Catadores y Clasificadores de Alimentos y Bebidas">Catadores y Clasificadores de Alimentos y Bebidas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cazadores y Tramperos">Cazadores y Tramperos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cesteros, Bruceros y Afines">Cesteros, Bruceros y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Catalogadores de Piezas de Museos, Archivos y Afines">Catalogadores de Piezas de Museos, Archivos y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Catedrático">Catedrático</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ciclista">Ciclista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cienfífico">Cienfífico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cocineros">Cocineros</li></a><br>
                            <a href=" "><li style="color: #333; " value="Codificador de Datos, Corrector Pruebas Imprenta y Afines">Codificador de Datos, Corrector Pruebas Imprenta y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Columnista">Columnista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Comandante Estación Bomberos">Comandante Estación Bomberos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Comediante">Comediante</li></a><br>
                            <a href=" "><li style="color: #333; " value="Comerciante">Comerciante</li></a><br>
                            <a href=" "><li style="color: #333; " value="Comisario de Familia">Comisario de Familia</li></a><br>
                            <a href=" "><li style="color: #333; " value="Compositor">Compositor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Comunicador Social">Comunicador Social</li></a><br>
                            <a href=" "><li style="color: #333; " value="Concejal">Concejal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consejero de Estado">Consejero de Estado</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consejero Jurídico">Consejero Jurídico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consejero Matrimonial">Consejero Matrimonial</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consejero Ocupacional">Consejero Ocupacional</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consejero Educativo">Consejero Educativo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consul">Consul</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consultor Ambiental">Consultor Ambiental</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consultor Financiero">Consultor Financiero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consultor Organizacional">Consultor Organizacional</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consultor Política Social">Consultor Política Social</li></a><br>
                            <a href=" "><li style="color: #333; " value="Consultor Recursos Humanos">Consultor Recursos Humanos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Contadores">Contadores</li></a><br>
                            <a href=" "><li style="color: #333; " value="Contralores">Contralores</li></a><br>
                            <a href=" "><li style="color: #333; " value="Coordinador Servicios Generales">Coordinador Servicios Generales</li></a><br>
                            <a href=" "><li style="color: #333; " value="Copiloto Aeronave">Copiloto Aeronave</li></a><br>
                            <a href=" "><li style="color: #333; " value="Coreógrafo y Afines">Coreógrafo y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Corredor Autos">Corredor Autos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Corredor Bolsa">Corredor Bolsa</li></a><br>
                            <a href=" "><li style="color: #333; " value="Corresponsal de Prensa">Corresponsal de Prensa</li></a><br>
                            <a href=" "><li style="color: #333; " value="Criador de Ganado y Animales Domésticos">Criador de Ganado y Animales Domésticos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Criador de Especies Acuáticas">Criador de Especies Acuáticas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Criador de Insectors, Sericultures y Afines">Criador de Insectors, Sericultures y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cristalero">Cristalero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Crítico Artes y Medios">Crítico Artes y Medios</li></a><br>
                            <a href=" "><li style="color: #333; " value="Cuentero">Cuentero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Curador Arte">Curador Arte</li></a><br>
                            <a href=" "><li style="color: #333; " value="Curador Urbanístico">Curador Urbanístico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Dactiloscopista">Dactiloscopista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Decanos">Decanos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Declamador">Declamador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Artístico">Director Artístico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Cine">Director Cine</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Departamento de Mantenimiento">Director Departamento de Mantenimiento</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Departamento de Seguridad">Director Departamento de Seguridad</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Escuela de Aviación">Director Escuela de Aviación</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director General Industria Manufacturera">Director General Industria Manufacturera</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Grupo Musical">Director Grupo Musical</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Departamento Financiero y Administrativo">Director Departamento Financiero y Administrativo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Departamento Investigacion y Desarrollo">Director Departamento Investigacion y Desarrollo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Departamento Personal">Director Departamento Personal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Director Departamento Publicidad y Mercadeo">Director Departamento Publicidad y Mercadeo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Dibujantes">Dibujantes</li></a><br>
                            <a href=" "><li style="color: #333; " value="Diseñador Grafico e Industrial">Diseñador Grafico e Industrial</li></a><br>
                            <a href=" "><li style="color: #333; " value="DiskJockey">DiskJockey</li></a><br>
                            <a href=" "><li style="color: #333; " value="Dramaturgo">Dramaturgo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ecologista">Ecologista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ecólogo">Ecólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Economistas">Economistas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Edil">Edil</li></a><br>
                            <a href=" "><li style="color: #333; " value="Educadores">Educadores</li></a><br>
                            <a href=" "><li style="color: #333; " value="Electricista">Electricista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Electrotécnico">Electrotécnico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Empresario">Empresario</li></a><br>
                            <a href=" "><li style="color: #333; " value="Entrenador">Entrenador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Escritor y Afines">Escritor y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Estadístico">Estadístico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Etimologista">Etimologista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Etnografo">Etnografo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Etnólogo">Etnólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Farmacéutico">Farmacéutico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Farmacólogo">Farmacólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Filólogo">Filólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Filósofo">Filósofo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fiscal">Fiscal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fisiatra">Fisiatra</li></a><br>
                            <a href=" "><li style="color: #333; " value="Físico">Físico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fisiólogo">Fisiólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Floricultor">Floricultor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fontanero e Instaladores de Tuberias">Fontanero e Instaladores de Tuberias</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fotógrafo">Fotógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fruticultor">Fruticultor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fisioterapeuta">Fisioterapeuta</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fonólogo">Fonólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Forenses">Forenses</li></a><br>
                            <a href=" "><li style="color: #333; " value="Fotógrafo">Fotógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Futbolista">Futbolista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ganadero">Ganadero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Geólogo">Geólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Geotecnista">Geotecnista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Gemólogo">Gemólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Genetista">Genetista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Geofísico">Geofísico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Geógrafo">Geógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Geriatra">Geriatra</li></a><br>
                            <a href=" "><li style="color: #333; " value="Gobernador Comunidad Indígena">Gobernador Comunidad Indígena</li></a><br>
                            <a href=" "><li style="color: #333; " value="Grabadores de Imprenta y Fotograbadores">Grabadores de Imprenta y Fotograbadores</li></a><br>
                            <a href=" "><li style="color: #333; " value="Grabadores de Vidrio">Grabadores de Vidrio</li></a><br>
                            <a href=" "><li style="color: #333; " value="Grafólogo">Grafólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Herramentistas y Afines">Herramentistas y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Herreros y Forjadores">Herreros y Forjadores</li></a><br>
                            <a href=" "><li style="color: #333; " value="Histólogo">Histólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Histopatólogo">Histopatólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Humorista">Humorista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Higienetistas">Higienetistas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Historiador">Historiador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ictólogo">Ictólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Impresor Artes Gráficas">Impresor Artes Gráficas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Agrícola">Ingeniero Agrícola</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Agroindustrial">Ingeniero Agroindustrial</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Agrónomo">Ingeniero Agrónomo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Alimentos">Ingeniero Alimentos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Ambiental">Ingeniero Ambiental</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Biomédico">Ingeniero Biomédico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Civil">Ingeniero Civil</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Electricista">Ingeniero Electricista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Eléctrico">Ingeniero Eléctrico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Electromécanico">Ingeniero Electromécanico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Electronico">Ingeniero Electronico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Industrial">Ingeniero Industrial</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Forestal">Ingeniero Forestal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Genética">Ingeniero Genética</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Geologo">Ingeniero Geólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Hidráulico">Ingeniero Hidráulico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Mecánico">Ingeniero Mecánico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Mecatrónico">Ingeniero Mecatrónico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Naval">Ingeniero Naval</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Pesquero">Ingeniero Pesquero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Petróleos">Ingeniero Petróleos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Producción">Ingeniero Producción</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Químico">Ingeniero Químico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Sanitario">Ingeniero Sanitario</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Seguridad Industrial">Ingeniero Seguridad Industrial</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Sistemas">Ingeniero Sistemas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Sonido">Ingeniero Sonido</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Telecomunicaciones">Ingeniero Telecomunicaciones</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Textil">Ingeniero Textil</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Transportes">Ingeniero Transportes</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Vuelo">Ingeniero Vuelo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ingeniero Minas, Metalúrgicos ">Ingeniero Minas, Metalúrgicos </li></a><br>
                            <a href=" "><li style="color: #333; " value="Instrumentador Quirúrgico">Instrumentador Quirúrgico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Interprete">Interprete</li></a><br>
                            <a href=" "><li style="color: #333; " value="Interventor">Interventor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Investigador">Investigador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Jardinero">Jardinero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Juez">Juez</li></a><br>
                            <a href=" "><li style="color: #333; " value="Lexicógrafo">Lexicógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Lexicólogo">Lexicólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Libretista">Libretista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Licenciado">Licenciado</li></a><br>
                            <a href=" "><li style="color: #333; " value="Locutor de Radio, Televisión y Afines">Locutor de Radio, Televisión y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Luminotécnico">Luminotécnico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Maestro">Maestro</li></a><br>
                            <a href=" "><li style="color: #333; " value="Magistrado">Magistrado</li></a><br>
                            <a href=" "><li style="color: #333; " value="Maquinista de Vehiculos por riel">Maquinista de Vehiculos por riel</li></a><br>
                            <a href=" "><li style="color: #333; " value="Marineros de Cubierta y Afines">Marineros de Cubierta y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Maquetero">Maquetero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Marroquinero">Marroquinero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Matemático">Matemático</li></a><br>
                            <a href=" "><li style="color: #333; " value="Mecánico Industrial">Mecánico Industrial</li></a><br>
                            <a href=" "><li style="color: #333; " value="Mesero, Taberneros y Afines">Mesero, Taberneros y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Meteorologos">Meteorologos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Mimo Teatro y Callejero">Mimo Teatro y Callejero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Mineros y Canteros">Mineros y Canteros</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ministro">Ministro</li></a><br>
                            <a href=" "><li style="color: #333; " value="Músico">Músico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Notario">Notario</li></a><br>
                            <a href=" "><li style="color: #333; " value="Novillero">Novillero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Oceanógrafo">Oceanógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Odontólogo">Odontólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Oficial Ejército">Oficial Ejército</li></a><br>
                            <a href=" "><li style="color: #333; " value="Oficial Polícia">Oficial Polícia</li></a><br>
                            <a href=" "><li style="color: #333; " value="Oficial Naval">Oficial Naval</li></a><br>
                            <a href=" "><li style="color: #333; " value="Oficial Fuerza Aérea">Oficial Fuerza Aérea</li></a><br>
                            <a href=" "><li style="color: #333; " value="Oftalmólogo">Oftalmólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Operador Máquinas ">Operador Máquinas </li></a><br>
                            <a href=" "><li style="color: #333; " value="Optómetra">Optómetra</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ortodoncista">Ortodoncista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Ortopedista">Ortopedista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Paleobiólogo">Paleobiólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Paleógrafo">Paleógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Paleólogo">Paleólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Paleontólogo">Paleontólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Panadero, Pastelero y Confitero">Panadero, Pastelero y Confitero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Patinador">Patinador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Patólogo">Patólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Pedagogo">Pedagogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Periodista">Periodista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Perito">Perito</li></a><br>
                            <a href=" "><li style="color: #333; " value="Periodoncista">Periodoncista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Personero">Personero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Pescador">Pescador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Piloto Avión, Carros Carreras, Afines">Piloto Avión, Carros Carreras, Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Pintor Arte">Pintor Arte</li></a><br>
                            <a href=" "><li style="color: #333; " value="Piscicultor">Piscicultor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Planificador Medio Ambiente">Planificador Medio Ambiente</li></a><br>
                            <a href=" "><li style="color: #333; " value="Planificador Tránsito">Planificador Tránsito</li></a><br>
                            <a href=" "><li style="color: #333; " value="Plomero">Plomero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Poeta">Poeta</li></a><br>
                            <a href=" "><li style="color: #333; " value="Politólogo">Politólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Polvorero">Polvorero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Porcicultor">Porcicultor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Publicista">Publicista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Procurador">Procurador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Químico y Afines">Químico y Afines</li></a><br>
                            <a href=" "><li style="color: #333; " value="Radiotécnico">Radiotécnico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Rector Institución Educativa">Rector Institución Educativa</li></a><br>
                            <a href=" "><li style="color: #333; " value="Registrador">Registrador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Rejoneador">Rejoneador</li></a><br>
                            <a href=" "><li style="color: #333; " value="Relojero">Relojero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Reportero Gráfico">Reportero Gráfico</li></a><br>
                            <a href=" "><li style="color: #333; " value="Representante a la Cámara">Representante a la Cámara</li></a><br>
                            <a href=" "><li style="color: #333; " value="Revisor Fiscal">Revisor Fiscal</li></a><br>
                            <a href=" "><li style="color: #333; " value="Salvavidas">Salvavidas</li></a><br>
                            <a href=" "><li style="color: #333; " value="Sastres, Modistos">Sastres, Modistos</li></a><br>
                            <a href=" "><li style="color: #333; " value="Sismólogo">Sismólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Sub Oficial Ejercito">Sub Oficial Ejercito</li></a><br>
                            <a href=" "><li style="color: #333; " value="Sub Oficial Policia">Sub Oficial Policia</li></a><br>
                            <a href=" "><li style="color: #333; " value="Sub Oficial Naval">Sub Oficial Naval</li></a><br>
                            <a href=" "><li style="color: #333; " value="Sub Oficial Fuerza Aerea">Sub Oficial Fuerza Aerea</li></a><br>
                            <a href=" "><li style="color: #333; " value="Taxonomista">Taxonomista</li></a><br>
                            <a href=" "><li style="color: #333; " value="Técnicos en general">Técnicos en general</li></a><br>
                            <a href=" "><li style="color: #333; " value="Terapeuta">Terapeuta</li></a><br>
                            <a href=" "><li style="color: #333; " value="Tesorero">Tesorero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Topógrafo">Topógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Torero">Torero</li></a><br>
                            <a href=" "><li style="color: #333; " value="Toxicólogo">Toxicólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Traductor">Traductor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Tutor">Tutor</li></a><br>
                            <a href=" "><li style="color: #333; " value="Veterinario">Veterinario</li></a><br>
                            <a href=" "><li style="color: #333; " value="Virólogo">Virólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Vulcanólogo">Vulcanólogo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Xilógrafo">Xilógrafo</li></a><br>
                            <a href=" "><li style="color: #333; " value="Zoólogo ">Zoólogo </li></a><br>
                            <a href=" "><li style="color: #333; " value="Zootécnico">Zootécnico</li></a><br>
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
				    
					<div align="center" style="background-color:#E3F2E6">
		<img style="width:84%; margin-top:142px; height:0.01px " src="img/barratop.png" alt="estres">
		<br>
		<br>
		<form style=" margin-left:15%; background:#ffffff; border-radius:20px; width:80%" >
		<br>
		
		<span >  Tutor:</span>
  <select class="camposgenerales"
  x
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
  <span style="margin-left:3%"> Rango de Precio:</span>
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #0000;
    font-size: 15px;
    width: 100px;
    text-decoration: none;
    margin-bottom: auto;
    text-align: center;  " 
    
    name="cars" id="cars">
    <option value="">-----</option>       
        <option value="1">$0 - $50.000</option>
        <option value="2">$50.000 - $100.000</option>
        <option value="3">$100.000 - $150.000</option>
        <option value="4">$150.000 - $200.000</option>
        <option value="5">$200.000 - $250.000</option>
        <option value="6">$250.000 - $300.000</option>
        <option value="7">$300.000 - $350.000</option>
        <option value="8">Mayor a $350.000 </option>
  </select>


  <span style="margin-left:3%">  Ciudad:</span>
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
    	text-decoration: none;
    	margin-bottom: auto;
    	text-align: center" 

    	name="cars" id="cars">        
   		 <option value="">-----</option>       

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
	
	<div class="slideshow-container2" style="margin-left:16%" >
	<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_otros_profesionales2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_otros_profesionales3.jpg" style="width:100%"></a>
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>

		<!-- Gurus -->

		<div class="fondomedio" >
	

	
		  <!--Product Grid-->
		<div align="right">

		
			<section class="section-grid2">
				
				<div class="grid-prod2">
				
					<div class="prod-grid3 " style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					

					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/9m.png" alt="kalita">
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
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
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
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
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
						
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
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
						<div class=" bloqueguru3" style=" background-color:#9AD3AE; " >
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

	<div class="footerotros" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/aotros.png" alt="kalita">
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
            $(".barraizquierdaotros").mCustomScrollbar({
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
