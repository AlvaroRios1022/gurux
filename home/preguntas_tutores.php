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
			background-color: #DE5886;
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
		<div class="barratutores" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="tutores.php" > HOME TUTORES </a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_tutores.php" style="color:#fff;text-shadow: 1px 1px 1px black;">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="tutores_aprender.php">QUIERO APRENDER</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="servicios_cursos.php">CURSOS EN L??NEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="libreria_tutores.php" >LIBRER??A</a></li>
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
                                <a href=" "><li style="color: #333; " value="Biolog??a">Biolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ciencias sociales">Ciencias sociales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Contabilidad">Contabilidad</li></a><br>
                                <a href=" "><li style="color: #333; " value="Econom??a">Econom??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Espa??ol">Espa??ol</li></a><br>
                                <a href=" "><li style="color: #333; " value="??tica">??tica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Filosof??a">Filosof??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="F??sica">F??sica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geometr??a">Geometr??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Humanidades">Humanidades</li></a><br>
                                <a href=" "><li style="color: #333; " value="Matem??ticas">Matem??ticas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Qu??mica">Qu??mica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistemas y Tecnolog??a">Sistemas y Tecnolog??a</li></a><br>
                           <br>

                            <p>Ciencias</p>
                             	<a href=" "><li style="color: #333; " value="Balance de materia y energ??a">Balance de materia y energ??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biof??sica">Biof??sica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biolog??a">Biolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biolog??a celular">Biolog??a celular</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biolog??a computacional">Biolog??a computacional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Biolog??a molecular">Biolog??a molecular</li></a><br>
                                <a href=" "><li style="color: #333; " value="Bioqu??mica">Bioqu??mica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Bioqu??mica metab??lica">Bioqu??mica metab??lica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Cat??lisis">Cat??lisis</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ciencias agr??colas">Ciencias agr??colas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Circuitos el??ctricos">Circuitos el??ctricos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Dise??o de m??quinas">Dise??o de m??quinas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ecolog??a">Ecolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Electromagnetismo">Electromagnetismo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Electr??nica an??loga">Electr??nica an??loga</li></a><br>
                                <a href=" "><li style="color: #333; " value="Est??tica">Est??tica</li></a><br>
                                <a href=" "><li style="color: #333; " value="F??sica 1">F??sica 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="F??sica 2">F??sica 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="F??sica biomec??nica">F??sica biomec??nica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fisicoqu??mica">Fisicoqu??mica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Gen??tica">Gen??tica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geociencia">Geociencia</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geolog??a">Geolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Hidrolog??a">Hidrolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mec??nica de fluidos y s??lidos">Mec??nica de fluidos y s??lidos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mecatr??nica">Mecatr??nica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Metrolog??a">Metrolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microbiolog??a">Microbiolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Qu??mica anal??tica">Qu??mica anal??tica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Qu??mica general">Qu??mica general</li></a><br>
                                <a href=" "><li style="color: #333; " value="Qu??mica inorg??nica">Qu??mica inorg??nica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Qu??mica org??nica">Qu??mica org??nica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Resistencia de materiales">Resistencia de materiales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Termodin??mica">Termodin??mica</li></a><br>
                            <br>

                            <p>Ciencias Politicas y Sociales</p>
                                <a href=" "><li style="color: #333; " value="Antropolog??a">Antropolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ciencias pol??ticas">Ciencias pol??ticas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Common law">Common law</li></a><br>
                                <a href=" "><li style="color: #333; " value="Criminolog??a">Criminolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho civil">Derecho civil</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho comercial y mercantil">Derecho comercial y mercantil</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho constitucional">Derecho constitucional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho internacional">Derecho internacional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho laboral">Derecho laboral</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho penal">Derecho penal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho privado">Derecho privado</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho procesal">Derecho procesal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho p??blico">Derecho p??blico</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derecho romano">Derecho romano</li></a><br>
                                <a href=" "><li style="color: #333; " value="Derechos humanos">Derechos humanos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Filosof??a">Filosof??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Hermen??utica">Hermen??utica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Historia y geograf??a">Historia y geograf??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Recursos humanos">Recursos humanos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Redacci??n y gram??tica">Redacci??n y gram??tica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Relaciones internacionales">Relaciones internacionales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sociolog??a">Sociolog??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teolog??a">Teolog??a</li></a><br>
                            <br>

                            <p>Econom??a, Finanzas y Contabilidad</p>
                                <a href=" "><li style="color: #333; " value="An??lisis financiero">An??lisis financiero</li></a><br>
                                <a href=" "><li style="color: #333; " value="Comercio">Comercio</li></a><br>
                                <a href=" "><li style="color: #333; " value="Contabilidad">Contabilidad</li></a><br>
                                <a href=" "><li style="color: #333; " value="Costos">Costos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Econometr??a">Econometr??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Econom??a internacional">Econom??a internacional</li></a><br>
                                <a href=" "><li style="color: #333; " value="Econom??a matem??tica">Econom??a matem??tica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Finanzas">Finanzas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fundamentos macroecon??micos">Fundamentos macroecon??micos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fundamentos microecon??micos">Fundamentos microecon??micos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Impuestos">Impuestos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Macroeconom??a 1">Macroeconom??a 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Macroeconom??a 2">Macroeconom??a 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Matem??tica financiera">Matem??tica financiera</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mercadeo">Mercadeo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mercado de valores">Mercado de valores</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mercadotecnia y ventas">Mercadotecnia y ventas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microeconom??a 1">Microeconom??a 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Microeconom??a 2">Microeconom??a 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Niif">Niif</li></a><br>
                                <a href=" "><li style="color: #333; " value="Presupuesto">Presupuesto</li></a><br>
                                <a href=" "><li style="color: #333; " value="Simulaci??n financiera">Simulaci??n financiera</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teor??a de juegos">Teor??a de juegos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teor??a del consumidor">Teor??a del consumidor</li></a><br>
                                <a href=" "><li style="color: #333; " value="Trading">Trading</li></a><br>
                                <br>

                            <p>Deportes</p>
                                <a href=" "><li style="color: #333; " value="Ajedrez">Ajedrez</li></a><br>
                                <a href=" "><li style="color: #333; " value="Artes marciales">Artes marciales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Baloncesto">Baloncesto</li></a><br>
                                <a href=" "><li style="color: #333; " value="Box/kick boxing">Box/kick boxing</li></a><br>
                                <a href=" "><li style="color: #333; " value="Entrenador personal">Entrenador personal</li></a><br>
                                <a href=" "><li style="color: #333; " value="F??tbol">F??tbol</li></a><br>
                                <a href=" "><li style="color: #333; " value="Manejo de dron">Manejo de dron</li></a><br>
                                <a href=" "><li style="color: #333; " value="Mma (artes marciales mixtas)">Mma (artes marciales mixtas)</li></a><br>
                                <a href=" "><li style="color: #333; " value="Nataci??n">Nataci??n</li></a><br>
                                <a href=" "><li style="color: #333; " value="Patinaje">Patinaje</li></a><br>
                                <a href=" "><li style="color: #333; " value="Pilates">Pilates</li></a><br>
                                <a href=" "><li style="color: #333; " value="Slackline">Slackline</li></a><br>
                                <a href=" "><li style="color: #333; " value="Squash">Squash</li></a><br>
                                <a href=" "><li style="color: #333; " value="Tenis">Tenis</li></a><br>
                                <a href=" "><li style="color: #333; " value="Zumba">Zumba</li></a><br>
                            <br>

                            <p>Ingenier??a</p>
                                <a href=" "><li style="color: #333; " value="Anadec">Anadec</li></a><br>
                                <a href=" "><li style="color: #333; " value="Base de datos">Base de datos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Base de datos linux">Base de datos linux</li></a><br>
                                <a href=" "><li style="color: #333; " value="Calidad">Calidad</li></a><br>
                                <a href=" "><li style="color: #333; " value="Comunicaciones anal??gicas">Comunicaciones anal??gicas</li></a><br>
                                <a href=" "><li style="color: #333; " value="Control de producci??n">Control de producci??n</li></a><br>
                                <a href=" "><li style="color: #333; " value="Fundamentos de producci??n">Fundamentos de producci??n</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ingenier??a civil">Ingenier??a civil</li></a><br>
                                <a href=" "><li style="color: #333; " value="Inteligencia artificial">Inteligencia artificial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Log??stica de producci??n">Log??stica de producci??n</li></a><br>
                                <a href=" "><li style="color: #333; " value="Machine learning">Machine learning</li></a><br>
                                <a href=" "><li style="color: #333; " value="Modelos de ingenier??a 1 y 2">Modelos de ingenier??a 1 y 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Simulaci??n">Simulaci??n</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistema de apoyo a la decisi??n">Sistema de apoyo a la decisi??n</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistema de control gerencial">Sistema de control gerencial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistemas de control anal??gico">Sistemas de control anal??gico</li></a><br>
                                <a href=" "><li style="color: #333; " value="Sistemas de control discreto">Sistemas de control discreto</li></a><br>
                            <br>

                            <p>Instrumentos Musicales</p>
                                <a href=" "><li style="color: #333; " value="Acorde??n">Acorde??n</li></a><br>
                                <a href=" "><li style="color: #333; " value="Bajo">Bajo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Bater??a">Bater??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Composici??n musical">Composici??n musical</li></a><br>
                                <a href=" "><li style="color: #333; " value="Flauta">Flauta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Grabaci??n y producci??n musical">Grabaci??n y producci??n musical</li></a><br>
                                <a href=" "><li style="color: #333; " value="Guitarra">Guitarra</li></a><br>
                                <a href=" "><li style="color: #333; " value="Guitarra el??ctrica">Guitarra el??ctrica</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ingenier??a de sonido">Ingenier??a de sonido</li></a><br>
                                <a href=" "><li style="color: #333; " value="Piano">Piano</li></a><br>
                                <a href=" "><li style="color: #333; " value="T??cnica vocal">T??cnica vocal</li></a><br>
                                <a href=" "><li style="color: #333; " value="Teor??a musical">Teor??a musical</li></a><br>
                                <a href=" "><li style="color: #333; " value="Trompeta">Trompeta</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ukelele">Ukelele</li></a><br>
                                <a href=" "><li style="color: #333; " value="Viol??n">Viol??n</li></a><br>
                            <br>

                            <p>Matem??ticas y probabilidad universitaria</p>
                                <a href=" "><li style="color: #333; " value="??lgebra lineal">??lgebra lineal</li></a><br>
                                <a href=" "><li style="color: #333; " value="An??lisis matem??tico">An??lisis matem??tico</li></a><br>
                                <a href=" "><li style="color: #333; " value="C??lculo diferencial">C??lculo diferencial</li></a><br>
                                <a href=" "><li style="color: #333; " value="C??lculo integral">C??lculo integral</li></a><br>
                                <a href=" "><li style="color: #333; " value="C??lculo multivariado">C??lculo multivariado</li></a><br>
                                <a href=" "><li style="color: #333; " value="C??lculo vectorial">C??lculo vectorial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Ecuaciones diferenciales">Ecuaciones diferenciales</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estad??stica aplicada">Estad??stica aplicada</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estad??stica descriptiva">Estad??stica descriptiva</li></a><br>
                                <a href=" "><li style="color: #333; " value="Estad??stica inferencial">Estad??stica inferencial</li></a><br>
                                <a href=" "><li style="color: #333; " value="Geometr??a">Geometr??a</li></a><br>
                                <a href=" "><li style="color: #333; " value="Matem??tica estructural">Matem??tica estructural</li></a><br>
                                <a href=" "><li style="color: #333; " value="Modelos probabil??sticos">Modelos probabil??sticos</li></a><br>
                                <a href=" "><li style="color: #333; " value="Prec??lculo">Prec??lculo</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad 1">Probabilidad 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad 2">Probabilidad 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad y estad??stica 1">Probabilidad y estad??stica 1</li></a><br>
                                <a href=" "><li style="color: #333; " value="Probabilidad y estad??stica 2">Probabilidad y estad??stica 2</li></a><br>
                                <a href=" "><li style="color: #333; " value="Trigonometr??a">Trigonometr??a</li></a><br>
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
				          
		
	<div align="right">
		<a href="como.php"><img style="width:84%; margin-top:142px " src="img/categorias/barracomo.png" alt="estres"></a>
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
				
				<div style="width: 45%;">
				<h2 class="preguntas" style="margin-left:-10px">Preguntas Frecuentes</h2>
				</div>
			<div class="bloquepreguntas_int">

				<details>
					<summary class="titulodesple">
					TUTORES expertos en ASIGNATURAS DE COLEGIOS Y UNIVERSIDADES					
					</summary>
					<br>
					<br><br>
				</details>

				<details>
				<summary class="titulodesple">
					Encuentre profesores certificados				
					</summary>
					<br>	
					<br><br>
				</details>

				<details>
					<summary class="titulodesple">
					Revisamos y confirmamos cuidadosamente el perfil de cada tutor GURU TUTOR					
					</summary>
					<br>
					<br><br>
				</details>

				<details>
					<summary class="titulodesple">
					Tome lecciones en l??nea en el momento perfecto para su apretada agenda					</summary>			
					<br>
					<br><br>
				</details>

				<details>
				<summary class="titulodesple">
				Elija un tutor experimentado que se ajuste a su presupuesto				
				</summary>
					<br>
					<br><br>
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
				<br><br>
			</div>
				</div>		<div align="left" style="padding-left: 0px;margin-right: 20px; ">
					
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
							<input type="submit" name="entrar" value="Iniciar Sesi??n" class=" botonright" style="font-weight:800 " >
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
