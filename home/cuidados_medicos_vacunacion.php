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
		<div class="barra" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="medicos.php" > HOME MÉDICOS </a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_medicos.php">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;|&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cuidados_medicos_casa.php"style="color:#fff; text-shadow: 1px 1px 1px black;">CUIDADOS EN CASA</a></li>
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
								<a href="cuidados_medicos_adultos.php "><li style="color: #333; " value="Alergólogo">Cuidado de Adultos</li></a><br>
                                <a href="cuidados_medicos_enfermeras.php "><li style="color: #333; " value="Enfermeras">Enfermeras</li></a><br>
                                <a href="cuidados_medicos_equipos.php"><li style="color: #333; " value="Cardiólogo">Equipos médicos</li></a><br>
                                <a href="cuidados_medicos_examenes.php "><li style="color: #333; " value="Deportólogo">Exámenes</li></a><br>
                                <a href="cuidados_medicos_fisioterapia.php "><li style="color: #333; " value="Dermatólogo">Fisioterapia</li></a><br>
                                <a href="cuidados_medicos_medicos.php "><li style="color: #333; " value="Endocrinólogo">Médicos</li></a><br>
                                <a href="cuidados_medicos_rehabilitacion.php "><li style="color: #333; " value="Enfermero">Rehabilitación</li></a><br>
                                <a href="cuidados_medicos_vacunacion.php "><li style="color: #61C7E2; " value="Epidemiólogo">Vacunación</li></a><br>
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
				          
	<div align="center" style="background-color:#D6F0FC;">
		<img style="width:84%; margin-top:142px; height:0.01px " src="img/barratop.png" alt="estres">
		<form style="margin-left:230px;" >
		
			<input class="barratop holder1" type="text" id="nombre" name="nombre" placeholder=" Escribe tu Nombre" style=" margin-top:5px; margin-bottom:5px;  width:280px; height:60px; background-color:#8ED8F8; border: 1px solid #452167;">
			<input class="barratop holder1" type="text" id="telefono" name="telefono" placeholder=" Escribe tu Teléfono" style=" width:280px; height:60px; background-color:#8ED8F8; border: 1px solid #452167;">
			<input class="barratop holder1" type="text" id="ciudad" name="ciudad" placeholder=" Escribe tu Ciudad" style=" width:280px; height:60px; background-color:#8ED8F8; border: 1px solid #452167;">
			<input type="submit" value="Enviar " style="color:#000; width:180px; height:58px; background-color:#ccc; border: 1px solid #999;" />

		</form>
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
					<h2 class="preguntas" style="margin-left:-10px">Vacunación</h2>
				</div>
			<div class="bloquepreguntas_int">
				<br>
				<p style="font-size:14px; text-align: justify;">
				Creemos que siempre es mejor prevenir que curar. Los especialistas pueden 
				administrar vacunas básicas para niños y adultos y vacunas integrales en la 
				comodidad de tu hogar. Las vacunas en el hogar garantizan tasas de infección más 
				bajas y se pueden tomar cuando lo desees.
				<br><br>
				A continuación, se muestran algunas de las vacunas e inmunizaciones para adultos 
				que se pueden administrar directamente en tu hogar:

				<br><br>

				<li>H1N1</li>
				<li>Sarampión</li>
				<li>Paperas</li>
				<li>Rubéola</li>
				<li>Tétanos / Difteria</li>
				<li>Tifoidea</li>
				<li>Gripe</li>
				<li>Varicela</li>
				<li>Hepatitis A y Hepatitis B</li>
				<li>Vacuna contra el VPH para prevenir el cáncer de cuello uterino</li>
				<li>Meningococo</li>
				<li>Neumococo</li>
				<li>Infección de herpes</li>
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
								<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
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
								<p style=" color: #FEC705; font-size:12px  ">Olvidé mi usuario / contraseña</p>
									<a href="https://www.guruxy.com" style="text-decoration:none;"> <h4 style=" color: #ffffff; text-decoration:none; ">Registrarme ¡GRATIS!</h4> </a>

								<br>

							</div>
						  <input type="submit" name="entrar" value="Iniciar Sesión" class=" botonright" style="font-weight:800 " >
						</form>
					</div>	
				</div>
				
				</section>

	<br><br>
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
