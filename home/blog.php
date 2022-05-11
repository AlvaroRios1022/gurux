<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
  
}


$fechaactual = date('Y-m-d');// 2016-12-29
$nuevafecha = strtotime ('-18 year' , strtotime($fechaactual)); //Se resta un año menos
$nuevafecha = date ('Y-m-d',$nuevafecha);
$fecha_min_estudio=$fechaactual;
$fecha_min_inicio=strtotime ('-80 year' , strtotime($fechaactual)); //Se resta un año menos;
$nuevafechanacido=date ('Y-m-d',$fecha_min_inicio);
$fecha_estudio=strtotime ('-60 year' , strtotime($fechaactual)); //Se resta un año menos;
$nuevafechaestudio=date ('Y-m-d',$fecha_estudio);



?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link href="css/estilos2.css" rel="stylesheet" type="text/css" />
	<link href="css/style2.css" rel="stylesheet" type="text/css" />

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
				<div class="menusuperiorderecho3 " align="right" style="margin-left:auto;margin-right:20px; "  >
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
					<nav>
						<ul>
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
    <div  class="flex-container" style="background-color: #E3DAEC;" align="left">
        <form action="#" method="post" id="informacion_general" >
            <input type="hidden" name="medicina" id="medicina" value="<?php 
                        if(isset($_POST['medicina'])){
                            echo $_POST['medicina'];
                        }
                        ?>">
            <input type="hidden" name="alternativa" id="alternativa" value="<?php
                    
                    if(isset($_POST['alternativa'])){
                        echo $_POST['alternativa'];
                    } ?>">
            <input type="hidden" name="yoga" id="yoga" value="<?php
                    if(isset($_POST['yoga'])){
                        echo $_POST['yoga'];
                    }  ?>">
            <input type="hidden" name="psiquico" id="psiquico" value="<?php
                    if(isset($_POST['psiquico'])){
                        echo $_POST['psiquico'];
                    } 
                    ?>">
            <input type="hidden" name="religioso" id="religioso" value="<?php
                    if(isset($_POST['religioso'])){
                        echo $_POST['religioso'];
                    } 
                    ?>">
            <input type="hidden" name="coaching" id="coaching" value="<?php 
                    if(isset($_POST['coaching'])){
                        echo $_POST['coaching'];
                    } 
                    ?>">
            <input type="hidden" name="idiomas" id="idiomas" value="<?php
                    
                    if(isset($_POST['idiomas'])){
                        echo $_POST['idiomas'];
                    }  ?>">
            <input type="hidden" name="tutor" id="tutor" value="<?php 
                    if(isset($_POST['tutor'])){
                        echo $_POST['tutor'];
                    } 
                    ?>">
            <input type="hidden" name="otros" id="otros" value="<?php
                    
                    if(isset($_POST['otros'])){
                        echo $_POST['otros'];
                    } 
                    ?>">
            <input type="hidden" name="tipo" id="tipo" value="info_pesonal">
            <input type="hidden" name="id_personal" id="id_personal" value="0">
            <div id="" class="fondoblanco">  
                <br><br><br><br><br><br>
                <h2 style="margin-left:45px; color: #4f2770; font-size:24px">Blog</h2>
                <div  class="flex-container" class="fondoblanco"  >


                    <div class="flex-item-left4" align="center" style="">
                        <br>
                        <label for="" style="color: #4f2770;" >Fotografía Gurú</label> 
                        <label for="nombre" >        
                            <img src="img/foto.png" id="image_perfil" class="imgfoto2" alt=""/>
                        </label>
                        <div class="file-select" id="fotoes" align="left" >
                        <input required type="file" name="foto" id="foto" accept="image/*"  onchange = "AdjuntarImagen(this)" >
                        </div>
                        <br><br>
                        <div class="containerpublicacion">
                            <br>
                            <h2 style="color: #4f2770; font-size:18px">Mis Publicaciones</h2>
                            <div style=" border-bottom:3px solid; width: 82%; color:#FFF">
                            </div>
                            <br>
                            
                            <p style=" text-align: left; font-size:14px; margin-right:10px;"> 
                                <img src="img/publicacion.png" id="image_perfil" class="imgpubli" alt="" align="left"/>
                                CÓMO MANEJAR LA TENSIÓN ALTA
                            </p>
                            <p style=" text-align: justify; font-size:9px; margin-top:-10px;"> 
                                26 Enero 2020
                            </p>
                        
                            <div style=" border-bottom:1px solid; width: 80%; color:#FFF">
                            </div>
                            
                            <br>
                            
                            <p style=" text-align: left; font-size:14px; margin-right:10px;"> 
                                <img src="img/publicacion.png" id="image_perfil" class="imgpubli" alt="" align="left"/>
                                CÓMO MANEJAR LA TENSIÓN ALTA
                            </p>
                            <p style=" text-align: justify; font-size:9px; margin-top:-10px;"> 
                                26 Enero 2020
                            </p>
                        
                            <div style=" border-bottom:1px solid; width: 80%; color:#FFF">
                            </div>
                            <br>
                            
                            <p style=" text-align: left; font-size:14px; margin-right:10px;"> 
                                <img src="img/publicacion.png" id="image_perfil" class="imgpubli" alt="" align="left"/>
                                CÓMO MANEJAR LA TENSIÓN ALTA
                            </p>
                            <p style=" text-align: justify; font-size:9px; margin-top:-10px;"> 
                                26 Enero 2020
                            </p>
                        
                            <div style=" border-bottom:1px solid; width: 80%; color:#FFF">
                            </div>
                            <br>
                            
                            <p style=" text-align: left; font-size:14px; margin-right:10px;"> 
                                <img src="img/publicacion.png" id="image_perfil" class="imgpubli" alt="" align="left"/>
                                CÓMO MANEJAR LA TENSIÓN ALTA
                            </p>
                            <p style=" text-align: justify; font-size:9px; margin-top:-10px;"> 
                                26 Enero 2020
                            </p>
                        
                            <div style=" border-bottom:1px solid; width: 80%; color:#FFF">
                            </div>
                            <br>
                            
                            <p style=" text-align: left; font-size:14px; margin-right:10px;"> 
                                <img src="img/publicacion.png" id="image_perfil" class="imgpubli" alt="" align="left"/>
                                CÓMO MANEJAR LA TENSIÓN ALTA
                            </p>
                            <p style=" text-align: justify; font-size:9px; margin-top:-10px;"> 
                                26 Enero 2020
                            </p>
                        
                            <div style=" border-bottom:1px solid; width: 80%; color:#FFF">
                            </div>
                            <br>
                            
                            <p style=" text-align: left; font-size:14px; margin-right:10px;"> 
                                <img src="img/publicacion.png" id="image_perfil" class="imgpubli" alt="" align="left"/>
                                CÓMO MANEJAR LA TENSIÓN ALTA
                            </p>
                            <p style=" text-align: justify; font-size:9px; margin-top:-10px;"> 
                                26 Enero 2020
                            </p>
                        
                            <div style=" border-bottom:1px solid; width: 80%; color:#FFF">
                            </div>
                            
                        </div>
                        <br>
                    <!-- Mis Contenidos -->

                    <div class="containerpublicacion2">
                            <br>
                            <h2 style="color: #4f2770; font-size:18px">Mi Contenido</h2>
                            <div style=" border-bottom:3px solid; width: 82%; color:#FFF">
                            </div>
                            <br>
                            <p>
                                <img src="img/testimonio.png" id="image_perfil" class="imgcontenido" alt="" align="left"/>
                            </p>
                            <p>
                                <img src="img/videos.png" id="image_perfil" class="imgcontenido" alt="" align="left"/>
                            </p>
                            <p>
                                <img src="img/promociones.png" id="image_perfil" class="imgcontenido" alt="" align="left"/>
                            </p>
                            <p>
                                <img src="img/blogs.png" id="image_perfil" class="imgcontenido" alt="" align="left"/>
                            </p>
                                
                            <br>
                    </div>   
                </div>


                <form method="post" action="">
                    <div align="left" class="flex-item-right4" >
                        <h2 for="" style="color: #6F6F6E;" >Blog de Nombre gurú</h2>

                        <label for="nombre" class="titulosblog" style="text-decoration: none;" >
                            <h5  style="color: #6F6F6E;">Título</h5>
                        </label>
                       
                        <input  required type="text" id="nombre" name="nombre" class="camposblogtitulo">
                        <br><br>

                        &nbsp;<img src="img/fotoblog.png" id="image_perfil" class="imgfoto3" alt=""/>
                        <br><br>
                        <div align="center" >
                        <div class="file-select" id="fotoes" align="center" >

                            <input required type="file" name="foto" id="foto" accept="image/*"  onchange = "AdjuntarImagen(this)" >
                        </div>
                        </div>
                        <br><br>
                        <label for="tipo" style="color: #4f2770; margin-left: 10%" >
                            <p style="font-size:14px" >Digita el primer párrafo de tu blog en 450 caracteres incluidos espacios</p>
                        </label>
                        <br>
                        <input  required type="text" id="nombre" name="nombre" class="camposbloggrandes" >
                        <br><br>
                        <label for="tipo" style="color: #4f2770; margin-left: 10%" >
                            <p style="font-size:14px">Digita el segundo párrafo de tu blog en 450 caracteres incluidos espacios</p>
                        </label>
                        <br>
                        <input  required type="text" id="nombre" name="nombre" class="camposbloggrandes" >
                        <br><br>
                        <label for="tipo" style="color: #4f2770; margin-left: 10%" >
                            <p style="font-size:14px">Digita el tercer párrafo de tu blog en 490 caracteres incluidos espacios</p>
                        </label>
                        <br>
                        <input  required type="text" id="nombre" name="nombre" class="camposblogmedio" >
                        <label for="nombre" >        
                            <img src="img/foto.png" id="image_perfil" style="margin-left:30px; height:253px"class="" alt=""/>
                        </label>
                        <div align="center"  >
                        <div class="file-select" id="fotoes" style="margin-left:650px"  >
                            <input required type="file" name="foto" id="foto" accept="image/*" style="margin-right:20px;" onchange = "AdjuntarImagen(this)" >
                        </div>
                        </div>
                        <br><br>
                        <label for="tipo" style="color: #4f2770; margin-left: 40%" >
                            <p style="font-size:14px">Digita el cuarto párrafo de tu blog en 490 caracteres incluidos espacios</p>
                        </label>
                        <div style="margin-left: 10%;">
                            <label for="nombre" >        
                                <img src="img/foto.png" id="image_perfil" style=" height:253px"class="" alt=""/>
                            </label>
                            
                            <input  required type="text" id="nombre" name="nombre" class="camposblogmedioder" >

                            <div align="left" >
                            <div class="file-select" id="fotoes" align="center" style="margin-left: 45px">

                                <input required type="file" name="foto" id="foto" accept="image/*" onchange = "AdjuntarImagen(this)" >
                           </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div align=" center" class="fondoblanco" >
                
                
                <button type="submit"  onclick="alerta();"><img src="img/guardar.png" alt="" style="width: 70%;" /> </button>
                </form>
            </div>
                <!-- Parte Inferior -->
            <div  class="flex-container" class="fondoblanco"  >
                <div class="flex-item-left5" align="left">
                    <br>
                    <form method="post" action="">
                        <label for="" style="font-size:40px; color: #4f2770;  margin-left:60px; margin-top:-95px;" >Video</label> 
                        <br><br>
                        <label for="tipo" style="color: #4f2770; margin-left: 17%" >
                            <p style="font-size:14px; margin-left:20px">Inserta tu video de presentación</p>
                        </label>
                        <label for="nombre" style="margin-top:-10px; color: #4f2770; margin-left:20px ">        
                            <img style="border-radius:50px; margin-top:-40px" src="img/foto.png" id="image_perfil" class="imgvideo" alt="" />
                            <div class="file-select" id="fotoes" align="center" style="margin-left: 45px">

                            <input required type="file" name="foto" id="foto" accept="image/*"  onchange = "AdjuntarImagen(this)"  >
                            </div>
                        </label>
                        <br>
                        <div align=" center" class="fondoblanco" >
                            <button type="submit"  onclick="alerta();"><img src="img/guardar.png" alt="" style="width: 70%; " /> </button>
                        </div>
                    </form>
                    <br><br><br><br>
                </div>
                <div align="left" class="flex-item-right5" >
                    <form method="post" action="">
                        <label for="" style="font-size:40px; color: #4f2770; margin:60px; " >Promociones</label> 
                        
                        <div style="margin-left: 10%;">
                            <label for="nombre" >        
                                <img src="img/foto.png" id="image_perfil" style=" height:190px; width:200px"class="" alt=""/>
                                <label for="tipo" style="color: #4f2770; margin-left: 35%; margin-top:-190px;" >
                            <a style="font-size:14px; text-align: left;  ">Digita la promoción en 100 caracteres incluidos espacios</a>
                            <input style="margin-top:20px" required type="text" id="nombre" name="nombre" class="campospromo" >
                        </label>
                            </label>
                            
                           

                            <div class="file-select" id="fotoes" align="left" >
                                <input required type="file" name="fotoes" id="foto" accept="image/*" onchange = "AdjuntarImagen(this)" >
                            </div>
                        <br>
                        <div align=" left" class="fondoblanco" >
                            <button type="submit"  onclick="alerta();"><img src="img/guardar.png" alt="" style="width: 70%; " /> </button>
                            <button type="submit"  onclick="alerta();"><img src="img/agregar.png" alt="" style="width: 60%;" /> </button>
                        </div>                           <br><br>
                    </form>   
                </div>
                </div>
            </div>
        </div>
        
        <!-- Fin Informacion Personal -->
         <!-- TERMINOS  -->
            </div>
        </form>

         <!-- Fin Idiomas -->
       
    </div>
        <?php require("modal/registro.php"); ?>



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
        
        <script>
            function validarFechaMenorActual(date){
            var x=new Date();
            var fecha = date.split("/");
            x.setFullYear(fecha[2],fecha[1]-1,fecha[0]);
            var today = new Date();

            if (x >= today)
                return false;
            else
                return true;
            }
        
            function validaNumericos(event) {
                if(event.charCode >= 48 && event.charCode <= 57){
                    return true;
                }
                return false;        
            }

            function soloLetras(e) {
                var key = e.keyCode || e.which,
                tecla = String.fromCharCode(key).toLowerCase(),
                letras = " áéíóúabcdefghijklmnñopqrstuvwxyz",
                especiales = [8, 37, 39, 46],
                tecla_especial = false;

                for (var i in especiales) {
                    if (key == especiales[i]) {
                        tecla_especial = true;
                        break;
                    }
                }

                if (letras.indexOf(tecla) == -1 && !tecla_especial) {
                    return false;
                }
            }
            
            function habilitar(value) {
                if(value==true) {
                    document.getElementById("fechafin_f").disabled=true;
                }
                else if(value==false){
                    document.getElementById("fechafin_f").disabled=false;
                }
            }
            function habilitar2(value) {
                if(value==true) {
                    document.getElementById("fechafin_c").disabled=true;
                }
                else if(value==false){
                    document.getElementById("fechafin_c").disabled=false;
                }
            }
            function habilitar3(value) {
                if(value==true) {
                    document.getElementById("fechafin_e").disabled=true;
                }
                else if(value==false){
                    document.getElementById("fechafin_e").disabled=false;
                }
            }
            
            

           
        </script>

        <script>
            function alerta(){
                <img src="img/cierre.jpg" alt="">
            }
        </script>
        
        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

        <script src="js/site.js"></script>
        <script src="js/registro.js"></script>
        
     
     </body>   
</html>
