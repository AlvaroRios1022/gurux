<?php
session_start();
if(!(isset($_SESSION['perfil']) && $_SESSION['perfil'] == 'guru') && !(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE)) {
	//header('Location: https://guruxy.com/home/');
    //exit;
}
if(isset($_GET["tipo_crypto"])){
	$tipo_servicio = $_GET["tipo_crypto"];
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link href="css/estilos_cobru2.css" rel="stylesheet" type="text/css" />
	<link href="css/estilos.css" rel="stylesheet" type="text/css" />		<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
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
			background-color: #F58120;
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
	


::placeholder {
  color: #777;
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
		<div class="barracobru" style="margin-top:-6px; ">
            <ul id="lista1"  >
			<li style="margin-left:-100px;" class="itemlista1"><a id="current" href="cobru.php" style="color:#fff; text-shadow: 1px 1px 1px black;"> HOME COBRU </a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cobru_cobrar.php" style="color:#fff">COBRAR</a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cobru_enviar.php" style="color:#fff">ENVIAR</a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cobru_recarga.php" style="color:#fff">RECARGAR</a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cobru_retirar.php" style="color:#fff">RETIRAR </a></li>
     			<li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#" style="color:#fff">TARJETA DE CREDITO</a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cobru_crypto.php" style="color:#fff">CRIPTOMONEDAS</a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#" style="color:#fff">PAGA TUS SERVICIOS </a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="#" style="color:#fff">PRODUCTOS DIGITALES</a></li>
                <li class="itemlista1" style="color:#fff">&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;</li>
                <li class="itemlista1"><a href="cobru_seguros.php" style="color:#fff">SEGUROS</a></li>
            </ul>
        </div>

        <div class="contenido">
            <div class="barraizquierdacobru" >
				<div align="center">
					<img src="images/cobru.png" alt ="" style= "width:60%; margin-top:20px;  " >
				</div>
				<br>
				<div class="especialseguros" style="margin-left:40px; font-size:21px;" >
					<a href="cobru.php"><li style=" color: #000; " value="resumen">&nbsp;&nbsp;&nbsp;Resumen</li></a><br>
					<a href="cobru_enviar.php "><li style="color: #000;" value="enviar">&nbsp;&nbsp;&nbsp;Enviar</li></a><br>
					<a href="cobru_cobrar.php" ><li style="color: #000; " value="cobrar ">&nbsp;&nbsp;&nbsp;Cobrar </li></a><br>
					<a href="cobru_recarga.php "><li style="color: #000;" value="recargas">&nbsp;&nbsp;&nbsp;Recargas</li></a><br>
                    <a href="cobru_crypto.php "><li style="color: #fff; background-color:#1CCE28; border-radius: 20px; width:60%;" value="cripto ">&nbsp;&nbsp;&nbsp;Cripto monedas </li></a><br>
					<a href="cobru_seguros.php "><li style="color: #000;" value="seguros">&nbsp;&nbsp;&nbsp;Seguros</li></a><br>
                    <a href="cobru_retirar.php "><li style="color: #000; " value="retirar">&nbsp;&nbsp;&nbsp;Retirar </li></a><br><div> &nbsp;</div>
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
				          
		
	<div align="right" style="background-color: #F6F5F6;">
		<img style=" width:84%; margin-top:142px; " src="img/barra_gris.png" alt="estres">
	</div>
	<div align="left">
		<br>
	<a style="margin-left:20%; font-size:22px"> Enviar</a>
	<br><br>
	</div>
	<div class="caja" style="margin-left:20%;  " align="center">
		<img style="width:20%; margin-top:10%; margin-left:-35%;  " src="images/cobru_pesos.png" alt="cobru"><a href="" style="font-size: 18px;; color:#777; text-decoration: none;"> Billetera </a> 
		<br>
		<div style="margin-top:-30px;margin-left:90px;text-align: left;padding-left: 3rem;">
		<a class="balance" style=" font-size: 30px; color:#000;  text-decoration: none;">$0</a>
		<br>
		<lable>Canje</label>
		<a class="canje" style=" font-size: 15px; color:#000;  text-decoration: none;">$0</a>
		</div>
	</div>


	
	<?php 
		if(!(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE)){
	?>
		<div class="cajai2" style="margin-left:3%;top: 15.1rem !important;" >
			<img style=" margin-left:10%; margin-top:10px " src="img/titulo2.svg" alt="cobru">
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'bitcoin') echo "selectedItem"; ?>" onclick="cambiarCrypto('bitcoin');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_bitcoin.svg" alt="cobru"></a>
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'bitcoincash') echo "selectedItem"; ?>" onclick="cambiarCrypto('bitcoincash');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_bitcoincash.svg" alt="cobru"></a>
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'dai') echo "selectedItem"; ?>" onclick="cambiarCrypto('dai');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_dai.svg" alt="cobru"></a>
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'dash') echo "selectedItem"; ?>" onclick="cambiarCrypto('dash');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_dash.svg" alt="cobru"></a>
			<br>
		</div>
	<?php 
		}else{ 
	?>
		<div class="cajai2" style="margin-left:3%; " >
			<img style=" margin-left:10%; margin-top:10px " src="img/titulo2.svg" alt="cobru">
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'bitcoin') echo "selectedItem"; ?>" onclick="cambiarCrypto('bitcoin');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_bitcoin.svg" alt="cobru"></a>
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'bitcoincash') echo "selectedItem"; ?>" onclick="cambiarCrypto('bitcoincash');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_bitcoincash.svg" alt="cobru"></a>
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'dai') echo "selectedItem"; ?>" onclick="cambiarCrypto('dai');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_dai.svg" alt="cobru"></a>
			<a class="btnCobru <?php if ($_GET["tipo_crypto"] == 'dash') echo "selectedItem"; ?>" onclick="cambiarCrypto('dash');"><img style=" margin-left:5%; margin-top:10px " src="img/cobru_dash.svg" alt="cobru"></a>
			<br>
		</div>
	<?php 
		}

		if(isset($_GET["tipo_crypto"])){
	?>
	
	<div class="crypto " style="margin-left:20%; margin-top:20px; " >
		<div align="center" >
			<form action="#" method="post" id="comprar_crypto">
			<br>
			<label for="form" style="color:#000">Compra Cryptos </label>
				<br><br>
				<input disabled="disabled" value="<?php echo $_GET["tipo_crypto"] ?>" style=" width:30%; height:40px;  border:none; background-color: #EEF2F7; color:#000" type="text" id="operator" name="operator" Placeholder="Tipo de Crypto Moneda">
				<br><br>
				<label for="form" style="color:#000; font-size:14px">??Monto a Comprar? </label>
				<br>
				<input style=" width:30%; height:40px;  border:none; background-color: #EEF2F7; color:#000" type="number" id="retiro" name="retiro" Placeholder="&nbsp;&nbsp;Minimo $ 200.000">
				<br><br>
				<label for="form" style="color:#000; font-size:14px">??Monto a Recibir? </label>
				<br>
				<input style=" width:30%; height:40px;  border:none; background-color: #EEF2F7; color:#000" type="number" id="retiro" name="retiro" Placeholder="&nbsp;&nbsp;$ 0.00">
				<br><br>
				<label for="form" style="color:#000; font-size:14px">??D??nde te enviamos</label>
				<br>
				<input style=" width:30%; height:40px;  border:none; background-color: #EEF2F7; color:#000" type="number" id="retiro" name="retiro" Placeholder="&nbsp;&nbsp;Billetera">
				<br><br>
				<input type="submit" style="height:40px; color: #fff; background-color:#1CCE28; border-radius: 20px; width:20%; border:none;"  value="Cobru">
				
			    
			</form> 
			<br>
		</div>
	</div>
	<?php
		}
	?>
	<br><br><br><br><br><br>
	
		

		<!-- Gurus -->

		<div class="fondomedio" >
	
	<div >
		
	</div>
	
	
	
		  <!--Product Grid-->
		<div align="right">

		
			<section class="section-grid2">
				
				<div class="grid-prod2">
				
				</div>	
					
				</section>
			</div>
		</div>
	</div>

	<div class="footercobru" align="center" >
		<div class="container2" >
               


			<div class="row" >		

			</div>
		</div>
	</div>
	<footer>
		<div class="container" >
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
					$(".barraizquierdacoaching").mCustomScrollbar({
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
		<script src="js/cobru.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
</body>
</html>
