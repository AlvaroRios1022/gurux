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
</head>
<body  class="cabecera">
<header align="center" >
			  <img src="img/header.png"  width="100%" height="auto" alt="" /> 
			  <br>
			  <img src="img/texto.png"  width="100%" height="auto" alt="" /> 
			  
</header>

			
	<div align="center" class="menuimagen">
		<a href="#" ><img src="img/m1medico.png" width="143" height="166"  ></a>
		<a href="#" ><img src="img/m2alternativa.png" width="143" height="166"></a>
		<a href="#" ><img src="img/m3yoga.png" width="143" height="166"></a>
		<a href="#" ><img src="img/m4psiquico.png" width="143" height="166"></a>
		<a href="#" ><img src="img/m5religioso.png" width="143" height="166"></a>
		<a href="#" ><img src="img/m6coaching.png" width="143" height="166"></a>
		<a href="#" ><img src="img/m7idiomas.png" width="143" height="166"></a>
		<a href="#" ><img src="img/m8tutores.png" width="143" height="166"></a>
		<a href="#" ><img src="img/m9otros.png" width="143" height="166"></a>
	</div>
	<br>
	<div class="left"><br>
			<li> TEMAS MÁS BUSCADOS</li>
		<br>
</div>
		<div class="carousel">
			<div class="carousel__contenedor">
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
		<div role="tablist" class="carousel__indicadores"></div>
		<br>
		</div>
	</div>

<div class="fondomedio" >
	<div align="center">
		<img src="img/libro.png"  style="max-width: 100%" height="auto">
	</div>
	<div>
		<img src="img/enlinea.png"  style="width: 30%" height="auto">
	</div>
	<div class="container">
		  <!--Product Grid-->
		<div id="div1">
			<section class="section-grid">
				<div class="grid-prod">
					<div class="prod-grid bloqueguru">
					  <img class="imgredonguru" src="img/categorias/en linea/1.jpg" alt="kalita">
						<h3>Ph'nglui mglw'nafh. </h3>
						<p>Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn. </p>
					</div>
					<div class="prod-grid bloqueguru">
					  <img class="imgredonguru" src="img/categorias/en linea/2.jpg" alt="kalita">
						<h3>Ph'nglui mglw'nafh. </h3>    
						<p>Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn.</p>
					</div>
					<div class="prod-grid bloqueguru">
					  <img class="imgredonguru" src="img/categorias/en linea/3.jpg" alt="kalita">
						<h3>Ph'nglui mglw'nafh. </h3>
						<p>Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn. </p>
					</div>
					<div class="prod-grid bloqueguru">
					  <img class="imgredonguru" src="img/categorias/en linea/4.jpg" alt="kalita">
						<h3>Ph'nglui mglw'nafh. </h3>    
						<p>Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn.</p>
					</div>
					<div class="prod-grid bloqueguru">
					  <img class="imgredonguru" src="img/categorias/en linea/5.jpg" alt="kalita">
						<h3>Ph'nglui mglw'nafh. </h3>
						<p>Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn. </p>
					</div>
					<div class="prod-grid bloqueguru">
					  <img class="imgredonguru" src="img/categorias/en linea/6.jpg" alt="kalita">
						<h3>Ph'nglui mglw'nafh. </h3>    
						<p>Ph'nglui mglw'nafh Cthulhu R'lyeh wgah'nagl fhtagn.</p>
					</div>
				</div>
				<div align="right" style="padding-left: 25px; margin-top: -40px">
					
					<div class="menuright" align="center" >
						<form  action="" method="post">
							<div >			
								<h4 style=" color: #FEC705; ">&nbsp; </h4>
								<h4 style=" color: #FEC705; ">Únete GRATIS</h4>
								<P style="font-size: 12px; color: #ffffff">Para chatear con nuestros Gurús</P>
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
								<div class="form-group" >
									<div class="clearfix">
									</div>
									<input type="email"  name="email" class="imputright" required="required" placeholder="Correo">
								</div>
							</div>
							<div class="terminos">Al pulsar sobre Únase gratis, confirmo que soy mayor de edad y que he leido, comprendido y aceptado los terminos y condiciones.
						  </div>
							<input type="submit" name="entrar" value="Entrar" class=" botonright" style=" " >
						</form>
					</div>
					<div class="menuright" align="center" style="margin-top: 20px">
						<form  action="" method="post">
							<div> &nbsp; </div>
							<img src="img/top100.png"   >
						</form>
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
                                <a href="https://www.facebook.com/Guruxy-104884922225645"><i style="color: #FFFFFF"  class="fa fa-facebook fa-2x"></i></a>
                           </li>
                          
                           <li>
                                <a href="#"><i style="color: #FFFFFF"  class="fa fa-instagram fa-2x"></i></a>
                           </li>
				   <img  src="img/logo3.png" width="350" height="auto" style="margin-left: -100px"  alt=""/>
              </ul>
            </div>
       
       
    </div> 
	<?php
	require("modal/registro.php");
	require("modal/inicio_sesion.php");
	require("modal/olvido_password.php");
	?>
	 
  </div>
	<div align="right">
	
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