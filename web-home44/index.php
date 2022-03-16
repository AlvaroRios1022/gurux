<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
  
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<title>Gurús Center</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/menu.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>
.flex-container4 {
  display: flex;
  flex-wrap: nowrap;
  width: 100%;
}

.flex-container4 > div {
  text-align: right;
  font-size: 30px;
}



</style>
<body  class="cabecera">
	
<header class="alto" style=" width: 100%;position: fixed; z-index:999; background:#4f2770">
	
	<?php
		if(empty($_SESSION['userlog'])) {
	?>
	<!--titulo-->
				
	<div class="flex-container4" >
		<div style="250px; margin-top:15px; margin-left:20px">
			<a href="" class="logo" >
				<img class="img" src="img/logopeque.png" alt=""/>
			</a>
		</div>
  		<div align=" right" style=" width:100%; ">
			<div class="topnav" id="myTopnav" style=" width:100%;"> 
				<div class="dropdown">
					<button class="dropbtn">SOBRE NOSOTROS 
						<i class="fa fa-caret-down"></i>
					</button>
					<div class="dropdown-content" >
						<a style="color: #000; font-size: 10px; border-bottom: 1px solid #000; text-decoration:none;" href='#'>GURÚS CENTER</a>
						<a style="color: #000; font-size: 10px; border-bottom: 1px solid #000; text-decoration:none;" href='#'>PREGUNTAS FRECUENTES</a>
						<a style="color: #000; font-size: 10px; border-bottom: 1px solid #000; text-decoration:none;" href='#'>POLÍTICAS DE PRIVACIDAD</a>
						<a style="color: #000; font-size: 10px; border-bottom: 1px solid #000; text-decoration:none;" href='#'>TÉRMINOS Y CONDICIONES</a>						
						<a style="color: #000; font-size: 10px; border-bottom: 1px solid #000; text-decoration:none;" href='#'>TÉRMINOS DE USO</a>
						<a style="color: #000; font-size: 10px; border-bottom: 1px solid #000; text-decoration:none;" href='#'>CONTÁCTENOS</a>
					</div>
				</div> 
				<a style="margin-left:-30px; text-decoration: none; color: #ffffff;">|</a>
				<a style="margin-left:-25px;" href="#home" >TRABAJA CON NOSOTROS</a>
				<a style="margin-left:-25px; text-decoration: none; color: #ffffff;">|</a>
				<a style="margin-left:-25px;" href="#news">CÓMO FUNCIONA?</a>
				<a  href="#modal_registro" class="trigger-btn" data-toggle="modal" >
					<img class="botonesheader " src="img/regis.png" alt="" />
				</a>
				<a href="#sesion" class="trigger-btn" data-toggle="modal">
					<img class="botonesheader" src="img/inicios.png" alt=""/>
				</a>
				<a style="color:#fff">IDIOMA </a>
				<a style=" margin-left:-25px; text-decoration: none; color: #FFC812;  " href="#">ES </a> 
				<a style=" margin-left:-25px; text-decoration: none; color: #ffffff;  " href="#">| EN </a> 						
				<a href="javascript:void(0);" style="font-size:15px;" class="icon" onclick="myFunction()">&#9776;</a>
			</div>
			<div style="background-color: #4f2770; font-size:14px;  widht:100%; height:40px; margin-top:10px;  ">
				<a href="#" style="color:#000; background-color:#8ED8F8; padding:20px; text-decoration:none; margin-left:-2px">MEDICOS</a>
				<a href="#" style="color:#000; background-color:#A5CE39; padding:20px; text-decoration:none; margin-left:-2px">MEDICINA ALTERNATIVA</a>
				<a href="#" style="color:#000; background-color:#FFED90; padding:20px; text-decoration:none; margin-left:-2px" >YOGA</a>
				<a href="#" style="color:#000; background-color:#A665A9; padding:20px; text-decoration:none; margin-left:-2px" >PSÍQUICOS</a>
				<a href="#" style="color:#000; background-color:#ECF8FC; padding:20px; text-decoration:none; margin-left:-2px" >RELIGIOSOS</a>
				<a href="#" style="color:#000; background-color:#F58120; padding:20px; text-decoration:none; margin-left:-2px" >COACHING</a>
				<a href="#" style="color:#000; background-color:#4EB3BD; padding:20px; text-decoration:none; margin-left:-2px" >IDIOMAS</a>
				<a href="#" style="color:#000; background-color:#DE5886; padding:20px; text-decoration:none; margin-left:-2px" >TUTORES</a>
				<a href="#" style="color:#000; background-color:#9AD3AE; padding:20px; text-decoration:none; margin-left:-2px" >GURUS OTRAS PROFESIONES</a>
			</div>
		</div>
		
	</div>		
	
</header>


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
			<div ><img style="width:100%; padding-top:106px" src="img/categorias/barracomo.png" alt="estres"></div>
	
			<div class="slideshow-container">

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

	
			<!--	<div class="carousel" >
			<div class="carousel__contenedor" ><br>
				<button aria-label="Anterior" class="carousel__anterior cuadro">
					<img src="img/atras.svg"></img>
				</button>
				<div class="carousel__lista">
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider" src="img/categorias/menopausia.png" alt="menopausia"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/estres laboral.png" alt="estres"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/constelaciones familiares.png" alt="constelaciones"></a>
					</div>
					<div  class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/meditacion en casa.png" alt="meditacion"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/meditacion en casa.png" alt="meditacion"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/constelaciones familiares.png" alt="constelaciones"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/estres laboral.png" alt="estres"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/menopausia.png" alt="menopausia"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/constelaciones familiares.png" alt="constelaciones"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/meditacion en casa.png" alt="meditacion"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/constelaciones familiares.png" alt="constelaciones"></a>
					</div>
					<div class="carousel__elemento">
						<a href="#" ><img class="imagenslider"  src="img/categorias/estres laboral.png" alt="estres"></a>
					</div>
				</div>
				<button aria-label="Siguiente" class="carousel__siguiente cuadro">
					<img src="img/adelante.svg"></img>
				</button><br>
	<!--	<div role="tablist" class="carousel__indicadores"></div>
				<br>
			</div> 
		</div> -->

<div class="fondomedio" >
	<div align="left">
		<img src="img/libro2.png"  style="max-width: 50%; height:auto; margin-left:50px; margin-top:25px;margin-bottom:25px;" >
	</div>
	<div>
		<img src="img/enlinea.png"  style="width: 30%" height="auto">
	</div>
	<div align="right">
		<img  src="img/agenda.png" alt="kalita" style=" width:25%; margin-right:25px"  >
	</div>
	
	
		  <!--Product Grid-->
		<div >

		
			<section class="section-grid">
				<div class="grid-prod">
					<div class="prod-grid ">
					  <img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  <img src="img/categorias/en linea/1m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>`
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  <img src="img/categorias/en linea/1m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  <img src="img/categorias/en linea/1m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#C8D3E5; " >
							<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					
					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>



					<div class="prod-grid">

					  <img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  <img src="img/categorias/en linea/2m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#CDD8C7; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  <img src="img/categorias/en linea/2m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#CDD8C7; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  <img src="img/categorias/en linea/2m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#CDD8C7; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  <img src="img/categorias/en linea/3m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  <img src="img/categorias/en linea/3m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  <img src="img/categorias/en linea/3m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#E8E0CD; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

					<div class="prod-grid ">
					  <img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  <img src="img/categorias/en linea/4m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#D2CBD3; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  <img src="img/categorias/en linea/4m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#D2CBD3; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid ">
					  <img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  <img src="img/categorias/en linea/4m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#D2CBD3; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  <img src="img/categorias/en linea/5m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#AED6D8; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  <img src="img/categorias/en linea/5m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#AED6D8; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid ">
					  <img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  <img src="img/categorias/en linea/5m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#AED6D8; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  <img src="img/categorias/en linea/6m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#E5CAB6; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid ">
					  <img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  <img src="img/categorias/en linea/6m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#E5CAB6; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  <img src="img/categorias/en linea/6m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#E5CAB6; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  <img src="img/categorias/en linea/7m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#C7E1E1; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid ">
					  <img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  <img src="img/categorias/en linea/7m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#C7E1E1; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid ">
					  <img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  <img src="img/categorias/en linea/7m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#C7E1E1; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
					  <img src="img/categorias/en linea/8m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
					  <img src="img/categorias/en linea/8m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
					  <img src="img/categorias/en linea/8m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#EADAE2; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
					  <img src="img/categorias/en linea/9m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
					  <img src="img/categorias/en linea/9m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
						<p class="textopguru" style="margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>
					<div class="prod-grid">
					  <img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
					  <img src="img/categorias/en linea/9m.png" alt="kalita">
					  <div class="bloqueguru bloqueguru2">
						<h4 style=" margin-left: 10px">Dr. Peter Ostheimer </h4>
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
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
		</div>
						<div class=" bloqueguru3" style=" background-color:#D5E2D9; " >
						<p			 class="textopguru" style="color:#000; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#000; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
					</div>

					<P style="margin-left:90%; padding-top:20px; color:#A665A9; font-size:90%">VER MÁS ><P>

				</div>
				<div align="left" style="padding-left: 40px;margin-right: 40px; ">
					
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
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
								
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p> </a>
								<h4 style=" color: #ffffff; ">Registrarme ¡GRATIS!</h4>
								<br>
						  </div>
							<input type="submit" name="entrar" value="Únete Ahora" class=" botonright" style="font-weight:800 " >
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
								</div>
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
								</div>
							</div>
							<div >
								<a href="recuperar_pass.php" style="text-decoration:none;">  <p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p> </a>
								<h4 style=" color: #ffffff; ">Registrarme ¡GRATIS!</h4>
								<br>

							</div>
						  <input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
						</form>
					</div>
					
					<div class="menuright2" align="center" style="margin-top: 20px" >
						<form  action="" method="post">
							<h4 style="color:#5C3293; padding-top: 20px; margin-bottom: 20px; font-size:16"> GURÚS DESTACADOS </h4>
						</form>
						<div class="prod-grid2 bloqueguru " style=" background-color: #A665A9; color:#fff">
						<p style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </h4>
						<h6 style=" margin-left: 10px; font-style: italic;">Gúru Psíquico </h6>
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
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/1.jpg" alt="kalita">
					</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#A665A9; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #59C7DA; color:#fff">
						<p style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </h4>
						<h6 style=" margin-left: 10px; font-style: italic;">Gúru Psíquico </h6>
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
						<div class=" bloqueguru3" style=" background-color:#59C7DA; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #F58120; color:#fff">
						<p style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </h4>
						<h6 style=" margin-left: 10px; font-style: italic;">Gúru Psíquico </h6>
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
						<div class=" bloqueguru3" style=" background-color:#F58120; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #DE5886; color:#fff">
						<p style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </h4>
						<h6 style=" margin-left: 10px; font-style: italic;">Gúru Psíquico </h6>
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
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
						<p style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </h4>
						<h6 style=" margin-left: 10px; font-style: italic;">Gúru Psíquico </h6>
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
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #FFE6A0; color:#fff">
						<p style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </h4>
						<h6 style=" margin-left: 10px; font-style: italic;">Gúru Psíquico </h6>
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
						</form>
					  <img  style="margin-bottom:10;" src="img/categorias/en linea/6.jpg" alt="kalita">
		</div>
								
						<p class="textopguru">Especialista en Tantra Yoga, Meditacion, Esotérico Integral. </p>
						<p class="textopguru2">IDIOMAS  
						<img style="width:20px" src="img/categorias/en linea/b1.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b2.png" alt="kalita">
						<img style="width:20px" src="img/categorias/en linea/b3.png" alt="kalita">
						<h7 style="margin-left:22%; color:#82142C">Leer más ><h7>
						</p>
						<div class=" bloqueguru3" style=" background-color:#FFE6A0; " >
						<p			 class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
						<br><br><br>
						<div class="prod-grid2 bloqueguru " style=" background-color: #9AD3AE; color:#fff">
						<p style="font-size:26px; margin-left: 12px">Dr. Peter Ostheimer </h4>
						<h6 style=" margin-left: 10px; font-style: italic;">Gúru Psíquico </h6>
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
						</form>
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
						<p class="textopguru" style="color:#fff; margin-top:-10px; font-size:15px" > TARIFA:
							<img src="img/categorias/en linea/barra.png" style="width:2px; height:50px; margin-top:20px" alt="kalita"> Tiempo de Consulta: </p>
							<p class="textopguru"  style="color:#fff; margin-bottom:10px; margin-top:-40px; font-size:15px"> US$30 &nbsp;&nbsp;&nbsp;&nbsp;30 minutos</p>
						</div>
				</div>
			</section>
		</div>
	</div>
</div>

<footer>
 <div class="container">
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
                        <a href="#">Unete hoy a nosotros y conéctate a esta gran red de expertos.</a>
                     </li>
                </ul>
            </div>
       
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
               <ul class="social">
                          <span style="color: #C93782">SIGUENOS</span>    
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-facebook fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-instagram fa-2x"></i></a>
                           </li>
				   <img  src="img/logo4.png" width="350" height="auto" style="margin-left: -100px"  alt=""/>
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

	<!-- Grid -->
	<script>

	</script>
	<!-- fin Grid -->


	<!-- Ramdom imagen -->
<script src="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>
<script src="js/app.js"></script>

	<!-- Fin Ramdom imagen -->


	<!-- Menu Responsive -->	
<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
		x.className += " responsive";
	  } else {
		x.className = "topnav";
	  }
	}
	
</script>



<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="js/registro.js"></script>

</body>
</html>