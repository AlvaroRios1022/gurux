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

	<title>Gurus Center</title>
	<style type="text/css">
		body {
			margin-left: 0px;
			margin-top: 0px;
			margin-right: 0px;
			margin-bottom: 0px;
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
		<a href="index.php"><img src="images/logo.png" width="190%"  alt="logo" /></a>
		</div>
		<div class="menu">
			
			<div class="menusuperiorizquierdo" align="right" >
			<nav  >
				<ul  >
					<li class="menuamarillo"style=" width:150px; height:30px; background-color:transparent; ">
					<a  href="#" style="font-size: 14.3px; color: #FFF; text-decoration:none;">SOBRE NOSOTROS</a>
						<ul style="margin-left:-35px; height:auto; max-width:130px;">
							<li  style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:9px;" href="">&nbsp;&nbsp;</a></li>

							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:9px; text-decoration:none;" href="">GUR??S CENTER</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:9px; text-decoration:none;" href="">PREGUNTAS FRECUENTES</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:9px; text-decoration:none;" href="">POL??TICAS DE PRIVACIDAD</a></li>
							<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:9px; text-decoration:none;" href="">T??RMINOS Y CONDICIONES</a></li>
														<li class="bordes" style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:9px; text-decoration:none;" href="">CONT??CTENOS</a></li>
							<li style="width:150px; height:20px; background-color:#FFC808; z-index: 999;"><a style="font-size:10px; text-decoration:none;" href="">&nbsp;&nbsp;</a></li>
						</ul>
					</li>
					<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
					<li style="margin-left:-20px;height:30px;width:250px;background-color:transparent">
						<a class="menuamarillo" href="#" style="font-size: 15px;color: #FFF; text-decoration:none;">TRABAJA CON NOSOTROS</a>
					</li>
					<li style="font-size: 15px; color: #FFF;margin-left:-20px;height:30px;width:3px;background-color:transparent">|</li>
					<li style=" margin-left:-30px;height:30px;width:250px;background-color:transparent">
						<a class="menuamarillo" href="#"style="font-size: 15px;color: #FFF; text-decoration:none;">??C??MO FUNCIONA?</a>
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
			
			<div class="menusuperiocentro"  style="margin-right:-50">
				<img src="images/registro.png" width="176px" height="30px" alt="registro" />
				<img src="images/sesion.png" width="176px" height="30px" alt="sesion" />
			</div>
			<div class="menusuperiorderecho" align="left"  >
				<span class="itemlista">IDIOMA  <a style="color:#FFC808"> ES </a>  |  EN</span>
			</div>
			
			<div class="menuinferior">
				<br>
				<nav>
					<ul align="right">
					<a href="servicios.php">
								<li class="rojoservicios" style="">	SERVICIOS</li>
							</a>

							<a href="medicos.php"><li class="azulmedicos" style="">M??DICOS</li></a>
						<a href="medicina_alternativa.php"><li class="verdemedicos">M??DICINA ALTERNATIVA</li></a>
						<a href="yoga.php"><li class="amarilloyoga" >PREPARACI??N F??SICA</li></a>
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
		<div class="barrayoga" style="margin-top:-16px; ">
            <ul id="lista1" >
                <li style="margin-left:-105px;" class="itemlista1"><a id="current" href="#" style="color:#fff;"> HOME PREPARACI??N F??SICA </a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">PREPARACI??N F??SICA EN CASA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">TRASMISIONES EN LINEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">CURSOS EN LINEA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="servicios_libreria_general.php" >LIBRER??A</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#">MI CUENTA</a></li>
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
							<a href=" "><li style="color: #333; " value=">Acidez">Aerobicos</li></a><br>
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
							<a href=" "><li style="color: #333; " value=">Acn??">Bikram yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Acoso escolar">Esoterismo integral</li></a><br>
							<a href=" "><li style="color: #333; " value=">Adicci??n a medicamentos">Hatha yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Agorafobia">Meditaci??n</li></a><br>
							<a href=" "><li style="color: #333; " value=">Alcoholismo y abuso de alcohol">Tantra yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Alergia a insectos">Vinyasa yoga</li></a><br>
							<a href=" "><li style="color: #333; " value=">Alergia ocular">Yoga a??reo</li></a><br>
							<a href=" "><li style="color: #333; " value=">Ambliop??a">Yoga prenatal</li></a><br>
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
		<img style="width:84%; margin-top:132px " src="img/categorias/barracomo.png" alt="estres">
	</div>
	
	<div class="slideshow-container2" style="margin-left:16%" >
		<div class="mySlides fade">
			<img src="img/categorias/img3.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
			<img src="img/categorias/img2.jpg" style="width:100%">
		</div>
		<div class="mySlides fade">
			<img src="img/categorias/img1.png" style="width:100%">
		</div>
		<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
		<a class="next" onclick="plusSlides(1)">&#10095;</a>
	
		</div>

		<!-- Gurus -->

		<div class="fondomedio" >
	
	<div >
		<br>
		<img src="img/nuestros.png"  style="width: 25%; margin-left:17%" height="auto"> 
		<a style=" margin-left:5%">Filtrar por:</a>
		<br><br>
		

  <span style="margin-left:20%"> Ciudad:</span>
  <select class="camposgenerales"
  
  	name="cars" id="cars">        
	<option value="">-----</option>       

  </select>

 <span style="margin-left:3%"> Rango de Precio:</span>
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;"
  
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

   <span style="margin-left:3%"> Idioma</span>
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;"
  
	name="cars" id="cars">
        <option value="">-----</option>
	
	</select>

  <span style="margin-left:3%"> Pais:</span>
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;"
	
  
	name="cars" id="cars">

        <option value="">-----</option>       
        
	</select>


  <span style="margin-left:3%"> Estado:</span>
  <select class="camposgenerales" 
  
  style=" border: none;
    background-color: #ffffff;
    font-size: 15px;
	width: 100px;
	color:#000;
    text-decoration: none;
    margin-bottom: auto;
	text-align: center;
    height: 25px;
    border-bottom-left-radius: 3px;"
  
	name="cars" id="cars">
	<option value="">-----</option>       
	<option value="">En Linea</option>       
	<option value="">En Consulta</option>       
	<option value="">OffLine</option>       

  </select>
	</div>
	
	
	
		  <!--Product Grid-->
		<div align="right">

		
			<section class="section-grid2">
				
				<div class="grid-prod2">
				
					<div class="prod-grid3 " style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 "style="margin-top:25px">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					

					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid3 ">
						<img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  	<img src="img/categorias/en linea/3m.png" alt="kalita">
					  	<div class="bloqueguru bloqueguru2">
							<h5 style=" margin-right: 45px">Dr. Peter Ostheimer </h5>
							<form>
								<p class="clasificacion">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label for="radio5">???</label>
								</p>
							</form>
							<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
							<p class="textopguru2">IDIOMAS  
								<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
								<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
								<h7 style="margin-left:4%; color:#82142C">Leer m??s ><h7>
							</p>
						</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
							<p class="textopguru" style="margin-top:-10px; font-size:85%" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					<P style="margin-left:64%;  padding-top:10px; color:#FFF; background-color:#BFBFBF; height:50px; font-size:100%">&nbsp;&nbsp;&nbsp;&nbsp;VER TODOS LOS G??RUS >&nbsp;&nbsp;&nbsp;&nbsp;<P>

				</div>
				<div align="left" style="padding-left: 0px;margin-right: 20px; ">
					
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
								<h4 style=" color: #ffffff; ">Registrarme ??GRATIS!</h4>
								<br>
						  </div>
							<input type="submit" name="entrar" value="??nete Ahora" class=" botonright" style="font-weight:800 " >
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
								<h4 style=" color: #ffffff; ">Registrarme ??GRATIS!</h4>
								<br>

							</div>
						  <input type="submit" name="entrar" value="Iniciar Sesi??n" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
					
					<div class="menuright2" align="center" style="margin-top: 20px" >
						<form  action="" method="post">
							<h4 style="color:#5C3293; padding-top: 20px; margin-bottom: 20px; font-size:16"> GUR??S DESTACADOS </h4>
						</form>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFED90; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
							<br>
							<form>
								<p class="clasificacion2" >
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label style="color:#fff" for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label style="color:#fff" for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label style="color:#fff" for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label style="color:#fff" for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label style="color:#fff" for="radio5">???</label>
								</p>
							</form>
							<br>
							<img  style="margin-bottom:10;" src="img/categorias/en linea/1.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFED90; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFED90; color:#fff">
						<br>
						<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">???</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">???</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">???</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">???</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">???</label>
							</p>
							<br><br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/2.jpg" alt="kalita">
		</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFED90; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFED90; color:#fff">
						<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">???</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">???</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">???</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">???</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">???</label>
							</p>
							<br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/3.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFED90; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFED90; color:#fff">
						<br>
						<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
						<br><br>
						<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
						<br>
						<form>
  							<p class="clasificacion2" style="margin-bottom: -7px">
								<input id="radio1" type="radio" name="estrellas" value="5"><!--
								--><label style="color:#fff" for="radio1">???</label><!--
								--><input id="radio2" type="radio" name="estrellas" value="4"><!--
								--><label style="color:#fff" for="radio2">???</label><!--
								--><input id="radio3" type="radio" name="estrellas" value="3"><!--
								--><label style="color:#fff" for="radio3">???</label><!--
								--><input id="radio4" type="radio" name="estrellas" value="2"><!--
								--><label style="color:#fff" for="radio4">???</label><!--
								--><input id="radio5" type="radio" name="estrellas" value="1"><!--
								--><label style="color:#fff" for="radio5">???</label>
							</p>
							<br>
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/4.jpg" alt="kalita">
					</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						
						<div class=" bloqueguru3" style=" background-color:#FFED90; " >
							<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
								<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFED90; color:#fff">
							<br>
							<a style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </a>
							<br><br>
							<a style=" margin-left: 10px; font-style: italic;">G??ru M??dico </a>
							<br>
							<form>
								<p class="clasificacion2" style="margin-bottom: -7px">
									<input id="radio1" type="radio" name="estrellas" value="5"><!--
									--><label style="color:#fff" for="radio1">???</label><!--
									--><input id="radio2" type="radio" name="estrellas" value="4"><!--
									--><label style="color:#fff" for="radio2">???</label><!--
									--><input id="radio3" type="radio" name="estrellas" value="3"><!--
									--><label style="color:#fff" for="radio3">???</label><!--
									--><input id="radio4" type="radio" name="estrellas" value="2"><!--
									--><label style="color:#fff" for="radio4">???</label><!--
									--><input id="radio5" type="radio" name="estrellas" value="1"><!--
									--><label style="color:#fff" for="radio5">???</label>
								</p>
								<br>
							</form>
					  		<img  style="margin-bottom:10;" src="img/categorias/en linea/5.jpg" alt="kalita">
						</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esot??rico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer m??s ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFED90; " >
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
				   <img  src="img/logo4.png" width="350" height="auto" style="margin-left: -100px"  alt=""/>
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

</body>
</html>
