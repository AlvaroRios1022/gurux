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
			background-color: #A665A9;
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
		<div class="barrapsiquicos" style="margin-top:-6px; ">
		<ul id="lista1" >
                <li style="margin-left:-23px;" class="itemlista1"><a id="current" href="psiquicos.php" > HOME PSÍQUICOS </a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="preguntas_psiquicos.php" style="color:#fff;text-shadow: 1px 1px 1px black;">PREGUNTAS FRECUENTES</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="horoscopo.php">HORÓSCOPO</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="libreria_psiquicos.php">LIBRERÍA</a></li>
                <li class="itemlista1">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="historia_psiquicos.php">MI CUENTA</a></li>
            </ul>
        </div>

        <div class="contenido">
            <div class="barraizquierdapsiquico">
			
					<form class="form-search">
						<div class="input-group">
							<br><br>
							<input style="margin-left:10px" class="buscadorpsiquico" maxlength="128" placeholder="Buscar" size="15" type="text" />
							<button class="searchpsiquico" >
								<i class="fa fa-search ">&nbsp;</i>
							</button>
						</div>
					</form>
							<div class="especialpsiquicos" >
                            <a href=" "><li style="color: #333;" value="Adivinación">Adivinación</li></a><br>
                            <a href=" "><li style="color: #333;" value="Amor y relaciones">Amor y relaciones</li></a><br>
                            <a href=" "><li style="color: #333;" value="Análisis de sueños">Análisis de sueños</li></a><br>
                            <a href=" "><li style="color: #333;" value="Astrología">Astrología</li></a><br>
                            <a href=" "><li style="color: #333;" value="Astrología china">Astrología china</li></a><br>
                            <a href=" "><li style="color: #333;" value="Cabalá">Cabalá</li></a><br>
                            <a href=" "><li style="color: #333;" value="Casa y familia">Casa y familia</li></a><br>
                            <a href=" "><li style="color: #333;" value="Clarividencia">Clarividencia</li></a><br>
                            <a href=" "><li style="color: #333;" value="Espiritualidad new age">Espiritualidad new age</li></a><br>
                            <a href=" "><li style="color: #333;" value="Exorcismos">Exorcismos</li></a><br>
                            <a href=" "><li style="color: #333;" value="Filosofía oriental">Filosofía oriental</li></a><br>
                            <a href=" "><li style="color: #333;" value="Grafología">Grafología</li></a><br>
                            <a href=" "><li style="color: #333;" value="Guías espirituales">Guías espirituales</li></a><br>
                            <a href=" "><li style="color: #333;" value="Interpretación de sueños">Interpretación de sueños</li></a><br>
                            <a href=" "><li style="color: #333;" value="Karma">Karma</li></a><br>
                            <a href=" "><li style="color: #333;" value="Lectura de manos">Lectura de manos</li></a><br>
                            <a href=" "><li style="color: #333;" value="Lecturas de imagen">Lecturas de imagen</li></a><br>
                            <a href=" "><li style="color: #333;" value="Lecturas pasadas de la vida">Lecturas pasadas de la vida</li></a><br>
                            <a href=" "><li style="color: #333;" value="Lecturas psíquicas">Lecturas psíquicas</li></a><br>
                            <a href=" "><li style="color: #333;" value="Leyes universales">Leyes universales</li></a><br>
                            <a href=" "><li style="color: #333;" value="Numerología oriental">Numerología oriental</li></a><br>
                            <a href=" "><li style="color: #333;" value="Ocultismo">Ocultismo</li></a><br>
                            <a href=" "><li style="color: #333;" value="Paranormal">Paranormal</li></a><br>
                            <a href=" "><li style="color: #333;" value="Perspectivas financieras">Perspectivas financieras</li></a><br>
                            <a href=" "><li style="color: #333;" value="Pronósticos de carrera">Pronósticos de carrera</li></a><br>
                            <a href=" "><li style="color: #333;" value="Reencarnación">Reencarnación</li></a><br>
                            <a href=" "><li style="color: #333;" value="Regresiones a vidas pasadas">Regresiones a vidas pasadas</li></a><br>
                            <a href=" "><li style="color: #333;" value="Religión">Religión</li></a><br>
                            <a href=" "><li style="color: #333;" value="Rituales y energía">Rituales y energía</li></a><br>
                            <a href=" "><li style="color: #333;" value="Sexo e intimidad">Sexo e intimidad</li></a><br>
                            <a href=" "><li style="color: #333;" value="Sonoterapia">Sonoterapia</li></a><br>
							<a href=" "><li style="color: #333;" value="Tarot y cartas">Tarot y cartas</li></a><br>
							
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
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_inicio1.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_psiquicos2.jpg" style="width:100%"></a>
		</div>
		<div class="mySlides fade">
			<a href="https://guruxy.com/home/usuarios.php"><img src="banners/banner_psiquicos3.jpg" style="width:100%"></a>
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
<br>
		
		<section class="section-grid">
				<div class="grid-med">
					<div style="width: 45%;">
				<h2 class="preguntas" style="margin-left:-10px">Preguntas Frecuentes</h2>
				</div>
			<div class="bloquepreguntas_int">
				<details>
					<summary class="titulodesple">
					   Que es Guruxy Sección Psíquicos					
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Guruxy Psíquicos es la comunidad espiritual más grande del mundo y la única plataforma de webcams en directo que permite a los usuarios chatear en vídeo con médiums en directo y cómodos desde su propia casa. Aunque Guruxy está reconocida en el mundo entero por sus médiums, cualquier persona que tiene un mensaje o una capacidad espiritual (horóscopo, sueños, interpretación, tratamiento Reiki, lectura de tarots, meditación, videncia y hasta hechizos) puede usar. 
					<br><br> La misión de Guruxy es ayudar a conectar, inspirar y dar poder a la comunidad espiritual mundial al traer sabiduría antigua al mundo digital. 


					</p>
					<br><br>

				</details>

				<details>
					<summary class="titulodesple">
						Hay muchas razones para consultar tu Gurú Psíquico:
					</summary>
					<br>
					<li>Por no ir a perder tu tiempo en desplazamientos y en áreas congestionadas de publico.</li>
					<li>Por no faltar al trabajo.</li>
					<li>Por estar abiertos cuando más cuenta, las 24 horas.</li>
					<li>Por tranquilidad y conveniencia.</li>
					<li>Porque la mejor receta es disponer a tu antojo de tu tiempo.</li>
					<br><br>
				</details>

				<details>
				<summary class="titulodesple">
					¿Que acreditaciones y experiencia tienen los GURUS de PREPARACION FISICA en Guruxy.com?
				</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
						Todos nuestros Gurus de Preparacion Fisica están certificados, y nosotros realizamos 
						un proceso de certificación con una compañía multinacional que nos acredita dicha
						información proporcionada por nuestros Gurus.
					</p>			
					<br><br>
				</details>

				<details>
					<summary class="titulodesple">
						¿Cómo funciona el streaming en directo?					
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Los Psíquicos tienen una webcam o una cámara de vídeo instalada en su sala o estudio que transmite una señal a través de Internet. 
					<br><br>
					Debe tener instalado el complemento de Adobe Flash en su navegador para ver los canales de la cámara. Para cualquier asistencia técnica, puede ponerse en contacto con nuestro Equipo de Soporte en Línea, disponible 24/7.
					<br><br>
				</details>

				<details>
					<summary class="titulodesple">
						¿Condiciones de Uso de Guruxy?	
					</summary>			
					<br>
					Por favor léase <a href="terminos.pdf" download="terminos.pdf" style=" text-decoration:none; " >Términos y Condiciones</a>
					<br><br>
				</details>

				<details>
				<summary class="titulodesple">
				¿La Clase es en inglés o español?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Tu decides. Sabemos que cuando se trata de comunicar los síntomas que uno siente, 
					es mejor hacerlo en el idioma que uno está acostumbrado a hablar. Por eso, la consulta 
					con Guruxy.com es en español. Si prefieres, puede ser en inglés. La consulta es en 
					tu idioma de preferencia.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
					¿No tengo tarjeta de crédito, como puedo pagar la consulta?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
						Si no tienes una tarjeta de crédito, puedes usar una de débito. 
						Si no tienes de ningún tipo, puedes adquirir en muchas tiendas de 
						supermercado tarjetas de regalo (gift cards) 
						en donde ya viene la tarjeta con un simbolo de VISA o Master Card. 
						Estas tarjetas funcionan igual que una de crédito o débito.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				¿Hay que ser ciudadano o residente de Estados Unidos o de algun pais en particular?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					No. Todos necesitamos cuidar nuestra salud y Guruxy.com es para todas
					 las nacionalidades. No importa si eres américano, latinoamericano, residente, 
					 indocumentado o solamente estás visitando los Estados Únidos o te encuentras en 
					 cualquier pais de Latinoamerica, puedes consultar Guruxy.com en español o en 
					 inglés.
					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				¿Si tengo algún inconveniente con algún Gurú que puedo hacer?					</summary>
					<br>
					<p style="font-size:18px; text-align: left;">
					Muy simple, nos escribes y nos pondremos en contacto contigo lo mas pronto posible para que nos cuentes la situación.					</p>
					<br>
				</details>
				<details>
				<summary class="titulodesple">
				¿Están abiertos las 24 horas del día?
					</summary>
					<br>
					<p style="font-size:16px; text-align: left;">
					Si. Por que sabemos que las enfermedades no tienen horario. Hasta parece que 
					se esperan que anochezca o que sea fin de semana, cuando las clínicas y doctores 
					de cabecera ya cerraron. Por que sabemos que el mejor horario es cuando más cuenta, 
					cuando lo necesitas! Por eso siempre estamos abiertos las 24 horas del día.
					</p>
					<br>
				</details>
				<br><br>
			</div>
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
					</div>
				</section>
			</div>
		</div>
	</div>

	<div class="footerpsiquicos" align="center" >
		<div class="container2" >
		<div align="right">         
            <img  style="width:100%; margin-top:-15px; margin-bottom:30px;" src="img/apsiquico.png" alt="kalita">
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
            $(".barraizquierdapsiquico").mCustomScrollbar({
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
