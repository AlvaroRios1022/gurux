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
	<link href="css/estilos2.css" rel="stylesheet" type="text/css" />
	<link href="css/style.css" rel="stylesheet" type="text/css" />

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
	

		.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
	</style>
</head>

<body class="cabecera">

		<div id="container2" >
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%"  alt="logo" /></a>
			</div>
			<div class="menu">
				<div align="right" class="menusuperiocentroa"  >
								<p style="margin-top: 20px; margin-left: 100px; color:#FEC705;"> BIENVENIDO NOMBRE Y APELLIDO DE GURÚ </p>

					
			</div>
			
		

				<div class="menusuperiorderecho3 " align="right" style="margin-left:auto;margin-right:20px; margin-top:10px;"  >
				<nav>
					<li class="menuamarillo" style=" width:90px; height:30px; background-color:transparent; ">
							<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>
					
							<ul style="margin-left:-35px;">
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/guruxy.png"></a></li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/falabella.png"></a></li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/larebaja.png"></a>	</li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/lopido.png"></a></li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:14px; text-decoration:none; color:#1ebdde;" >TURISMO MEDICO</a></li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/betplay.png"></a>	</li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/idime.png"></a></li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="cobru.php" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/cobru.png"></a>	</li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="servicios_pasalapagina.php" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/pasalapagina.png"></a></li>
							<li class="bordes" style="width:150px; height:40px; background-color:#452167; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#FFC808;" ><img src=" img/servicios/lesmills.png"></a>	</li>
							</ul>
					</li>
						<a style="color:#fff">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp; </a>
				
						<li class="menuamarillo" style=" width:50px; height:30px; background-color:transparent;"> 
							<a class="menuamarillo" href="perfil.php" style="font-size: 15px;  text-decoration:none;">PERFIL </a>
						</li>
						<a style="color:#fff">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;  </a>
						<li class="menuamarillo" style=" width:110px; height:30px; background-color:transparent;">
						<a class="menuamarillo" href="hv.php" style="font-size: 15px;  text-decoration:none;"> HOJA DE VIDA </a>
						</li>
					</nav>
				</div>
				
				<div class="menuinferior" style="margin-top:2px">
					<br>
					<nav  >
						<ul  >
							<li class="menuamarillo" style="height:30px;background-color:transparent">
								<a class="menuamarillo" href="oficina.php" style="font-size: 15px; text-decoration:none; color:#FEC705;">INGRESAR</a>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>

							<li class="menuamarillo" style=" width:124px; height:30px; background-color:transparent; ">
								<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>
					
								<ul style="margin-left:-38px; height:auto; width:124px;">
									<li class="bordes" style="width:124px; height:25px; background-color:#FFC808; z-index: 999;"><a style="font-size:12px; text-decoration:none; color:#000;" href="">VIDEO</a></li>
									<li class="bordes" style="width:124px; height:25px; background-color:#FFC808; z-index: 999;"><a href="" style="font-size:12px; text-decoration:none; color:#000;" >PROMOCIONES</a></li>
									<li class="bordes" style="width:124px; height:25px; background-color:#FFC808; z-index: 999;"><a href="blog.php" style="font-size:12px; text-decoration:none; color:#000;" >BLOG</a></li>
								</ul>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
							<li class="menuamarillo" style="height:30px;background-color:transparent">
								<a class="menuamarillo" href="sagenda.php" style="font-size: 15px; text-decoration:none;">AGENDA</a>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>

							<li class="menuamarillo" style=" width:170px; height:30px; background-color:transparent; ">
								<a class="menuamarillo" href="screar.php" style="font-size: 15px;  text-decoration:none;">CREAR USUARIO</a>
								<ul style="margin-left:-38px; height:auto; max-width:130px;">
									<li class="bordes" style="width:170px; height:25px; background-color:#FFC808; z-index: 999;"><a style=" font-size:12px; text-decoration:none; color:#000;" href="">PACIENTE</a></li>
									<li class="bordes" style="width:170px; height:25px; background-color:#FFC808; z-index: 999;"><a href="#" style="font-size:12px; text-decoration:none; color:#000;" >ESTUDIANTE</a></li>
									<li class="bordes" style="width:170px; height:25px; background-color:#FFC808; z-index: 999;"><a href="#" style="font-size:12px; text-decoration:none; color:#000;" >USUARIO / CLIENTE</a></li>
									<li class="bordes" style="width:170px; height:25px; background-color:#FFC808; z-index: 999;"><a href="#" style="font-size:12px; text-decoration:none; color:#000;" >FELIGRÉS</a></li>

								</ul>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
							<li class="menuamarillo" style=" height:30px; width:190px; background-color:transparent">
								<a class="menuamarillo" href="sconsultar.php" style="font-size: 15px; text-decoration:none;">CONSULTAR USUARIO</a>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
							<li class="menuamarillo" style="height:30px;background-color:transparent">
								<a class="menuamarillo" href="sreportes.php" style="font-size: 15px; text-decoration:none;">REPORTES</a>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>

							<li class="menuamarillo" style=" width:160px; height:30px; background-color:transparent; ">
								<a class="menuamarillo" href="spago.php" style="font-size: 15px;  text-decoration:none;">MEDIOS DE PAGO</a>
								<ul style="margin-left:-38px; height:auto; max-width:130px;">
									<li class="bordes" style="width:160px; height:25px; background-color:#FFC808; z-index: 999;"><a style="font-size:12px; text-decoration:none; color:#000;" href="">ITAU</a></li>
									<li class="bordes" style="width:160px; height:25px; background-color:#FFC808; z-index: 999;"><a href="#" style="font-size:12px; text-decoration:none; color:#000;" href="">COBRU</a></li>
								</ul>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>
							<li class="menuamarillo" style=" height:30px; width:100px; background-color:transparent">
								<a class="menuamarillo" href="contacto.php" style="font-size: 15px; text-decoration:none;">SOPORTE</a>
							</li>
						</ul> 
					</nav>
				</div>
				
			</div>	
			
				
			</div>
		</div>
		
		<div  style="background-color:#fff; height:800px; margin-top:50px;"><br><br>
		<div align="right" style="margin-right:20px">
			<a class="menuamarillo" style=" height:30px; width:190px; background-color:transparent">
				<a href="#" style="font-size: 15px; color:#462161; text-decoration:none;">CREAR USUARIO</a>
			</a>
			<a style="font-size: 15px; color:#462161;height:30px;width:3px;background-color:transparent">|</a>
			<a class="menuamarillo" style="height:30px;background-color:transparent">
				<a  href="#" style="font-size: 15px; color:#462161; text-decoration:none;">CONSULTAR USUARIO</a>
			</a>
			</div>
				<div style="margin-left:20px; margin-right:20px;  background-color: #DCCCE3; height:50px" >
					<span style="font-size:26px; width:250px; color:#6F6F6E;">&nbsp;&nbsp;&nbsp;Nombre_Usuario</span>
					<div align="right" style="margin-top:-25px; margin-right:20px">
					
						<input required type="radio" display="inline" name="tipolinea" value="online" >
						<label for="online" class="texto"> 
                    	<span style="font-size:14px; color:#462161">&nbsp;&nbsp;ONLINE</span>
						</label>
						<input required type="radio" name="tipolinea" value="ocupado" >
						<label for="consulta" class="texto"> 
							<span style="font-size:14px; color:#462161">&nbsp;&nbsp;EN CONSULTA</span>
						</label>
						<input required type="radio" name="tipolinea" value="offline" >
						<label for="offline" class="texto"> 
							<span style="font-size:14px; color:#462161">&nbsp;&nbsp;OFFLINE</span>
						</label>
					</div>
					<div class="flex-container" style="background-color: #fff;" align="center">
                    <div class="flex-item-left">
					<img src="img/foto2.png" style="width:100%; margin-top:-1px"><br><br>
					<img src="img/comenzar.png" style="width:50%; margin-top:4px;">
					<img src="img/confirmar.png" style="width:25%; margin-top:4px;">
					</div>
					<div class="flex-item-right" style="background-color: #fff; max-height:480px;" align="center"><br><br>

					<div style="max-width:97%; margin-top:-55px; " class="chats" >
					<div class="container">
						<img src="/w3images/bandmember.jpg" alt="Avatar" style="width:30%;">
						<p>Hello. How are you today?</p>
						<span class="time-right">11:00</span>
						</div>

						<div class="container darker">
						<img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:30%;">
						<p>Hey! I'm fine. Thanks for asking!</p>
						<span class="time-left">11:01</span>
						</div>

						<div class="container">
						<img src="/w3images/bandmember.jpg" alt="Avatar" style="width:30%;">
						<p>Sweet! So, what do you wanna do today?</p>
						<span class="time-right">11:02</span>
						</div>

						<div class="container darker">
						<img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:30%;">
						<p>Nah, I dunno. Play soccer.. or learn more coding perhaps?</p>
						<span class="time-left">11:05</span>
						</div><br>
						
												
					</div>
					<br>
					<div class="input-group">
								<input type="text" class="chat">
								<span class="input-group-btn">
									<button  type="button">
										<img src="img/enviarm.png" style="width:50%;">
									</button>
								</span>
							
						</div>
				</div> 
					
		<div>
		<script>
    (function($){
        $(window).on("load",function(){
            $(".chats").mCustomScrollbar({
    theme:"rounded"
});
        });
    })(jQuery);
</script>
</body>
</html>
