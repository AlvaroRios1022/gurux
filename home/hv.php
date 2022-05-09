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
	<link href="css/estilos3.css" rel="stylesheet" type="text/css" />
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

		<div id="container2"  >
			<div class="logo">
				<a href="index.php"><img src="images/logo.png" style="margin-top:12px; margin-left:15px" width="190%"  alt="logo" /></a>
			</div>
			<div class="menu">
				<div class="menusuperiocentroa"  >
								<p style="margin-top: 20px; margin-left: 100px; color:#FEC705;"> BIENVENIDO NOMBRE Y APELLIDO DE GURÚ </p>

				</div>
				<div class="menusuperiorderecho3 " align="right" style="margin-left:auto;margin-right:20px; margin-top:25px; margin-bottom:-20px"  >
				<nav>
					<li class="menuamarillo" style=" width:120px; height:30px; background-color:transparent; ">
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
								<a class="menuamarillo" href="oficina.php" style="font-size: 15px; text-decoration:none; ">INGRESAR</a>
							</li>
							<li style="font-size: 15px; color: #FFF;height:30px;width:3px;background-color:transparent">|</li>

							<li class="menuamarillo" style=" width:124px; height:30px; background-color:transparent; ">
								<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>
					
								<ul style="margin-left:-38px; height:auto; width:124px;">
									<li class="bordes" style="width:124px; height:25px; background-color:#FFC808; z-index: 999;"><a style="font-size:12px; text-decoration:none; color:#000;" href="">VIDEO</a></li>
									<li class="bordes" style="width:124px; height:25px; background-color:#FFC808; z-index: 999;"><a href="" download="" style="font-size:12px; text-decoration:none; color:#000;" >PROMOCIONES</a></li><li class="bordes" style="width:124px; height:25px; background-color:#FFC808; z-index: 999;"><a href="blog.php" style="font-size:12px; text-decoration:none; color:#000;" >BLOG</a></li>
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
	<div  style="background-color:#fff; height:640px; margin-top:55px;"><br><br>
		<div align="right" style="margin-right:20px">
		</div>
		<div style="margin-left:20px; margin-right:20px;  background-color: #fff; height:50px" >
			<span style="font-size:26px; width:250px; color:#6F6F6E;">&nbsp;&nbsp;&nbsp;Nombre_Usuario</span>
			<div class="flex-container" style="background-color: #fff;" align="center">
                <div class="flex-item-left">
					<img src="img/foto2.png" style="width:100%;"><br><br>
					<input required type="file" name="foto" id="foto" accept="image/*" >
				</div>
				<div class="flex-item-right" style="background-color: #fff;" align="center"><br><br>
					<p style="font-size:12px; text-align:left; margin-left:10px; color:#462161; margin-top:200px">Esta fotografía debe ser tomada en  formato horizontal y con la ambientación adecuada para mostrar tu perfil</p>
					<a href="muestra.php"><p style="font-size:14px; text-align:left; margin-left:10px; color:#462161; ">Ver muestras de fotografías ></p>
				</div>						
			</div>
		</div> 
	</div>
	<div style="background-color: #ffffff; height:100%;" align="left">
	<div class="flex-containera" >
	<div class="hvform" >
			<form action="#" >
				<img src="img/hv.png" style="width:80%; margin-left: 10%; margin-top: 10px;"><br><br>
				<label for="especial" class="texthv">Digita tu especialidad en 70 caracteresincluidos espacios</label><br>
				<input class="camposhv" type="text" id="especial" name="especial"><br>
				<label for="lname" class="texthv">Digita tus estudios principales en 200 caracteres incluidos espacios</label><br>
				<input class="camposhvcaja" type="text" id="lname" name="lname" ><br>
				<label for="lname" class="texthv">Idiomas para mostrar</label><br>
				<select id="idioma1" class="camposidiomas" style="margin-left:15%">
					<option value="">idioma</option>
                    <option value="">Selecciona idioma</option>
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
				<select id="idioma1" class="camposidiomas">
					<option value="">Idioma</option>
                    <option value="">Selecciona idioma</option>
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
				<select id="idioma1" class="camposidiomas">
					<option value="">Iidoma</option>
                    <option value="">Selecciona idioma</option>
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
				<br>
				<label style="margin-top:10px" for="especial" class="texthv">Tarifa &nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
				&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;Tiempo de Consulta</label><br>
				<input class="camposhvcajap" type="number" id="lname" name="lname" >
				<input class="camposhvcajapd" type="text" id="lname" name="lname" ><br>
                <button type="submit"  onclick="alerta();"><img src="img/guardar.png" alt="" style="width: 50%; margin-left:20px" /> </button>
			</form> 
		</div>
		<div class="hvform">
			
		<!-- aca va el calendario de la plataforma que contrataron -->

		
		</div>
	</div>

</body>
</html>
