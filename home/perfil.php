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
            <div class="menusuperiorderecho3 " align="right" style="margin-left:auto;margin-right:20px; margin-top:10px;"  >
				<nav>
					<li class="menuamarillo" style=" width:90px; height:30px; background-color:transparent; ">
							<a class="menuamarillo" href="#" style="font-size: 15px; background-color: #FFC808; border-radius:20px; color:#000;  text-decoration:none;">&nbsp;&nbsp;SERVICIOS&nbsp;&nbsp;</a>
					
							<ul style="margin-left:-35px;">
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#000;" >COMUNIDAD GURÚ</a></li>
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="seguros.php" style="font-size:10px; text-decoration:none; color:#000;" >SEGUROS</a></li>
							<li class="bordes" style="width:120px; height:20px; background-color:#FFC808; z-index: 999;"><a href="" style="font-size:10px; text-decoration:none; color:#000;" >COBRU</a>	</li>
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
							<li class="menuamarillo" style=";height:30px;background-color:transparent">
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
									<li class="bordes" style="width:170px; height:25px; background-color:#FFC808; z-index: 999;"><a style="; font-size:12px; text-decoration:none; color:#000;" href="">PACIENTE</a></li>
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
            <div class="flex-item-left">
                
                <!--</div> -->
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
                        <div  class="flex-container" class="fondoblanco" style="margin-top: 80px" align="left">
                        <img src="img/personal.png"  width="100%" height="auto" alt=""  />    
                        <div class="flex-item-left">
                                <br>
                                <label for="nombre" class="titulosa"  >
                                <ul class="lista">
                                    <li> 
                                        <p >Tipo de Gurú</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)">

                                <label for="tipo" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p >Especialidad</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)">

                                <label for="nombre" class="titulosa"  >
                                <ul class="lista">
                                    <li> 
                                        <p >Nombres y Apellidos</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgrandes" required onkeypress="return soloLetras(event)"><br>

                                <label for="tipo" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p >Tipo de documento</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="tipo_doc" name="tipo_doc" class="camposgenerales"  > 
                                        <option value="">Por favor selecciona</option>
                                        <option value="1">Cédula de Ciudadania</option>
                                        <option value="2">Cédula de Extranjeria</option>
                                        <option value="3">Pasaporte</option>
                                </select>

                                <label for="documento" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>No. Documento</p>
                                        
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" min="0" id="documento" name="documento" class="camposgenerales" onkeypress='return validaNumericos(event)'><br>

                                <label for="Genero" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Género</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="radio" value="f" id="femenino" name="genero" class="camposradio">
                                <label for="Femenino">F</label>&nbsp;&nbsp;&nbsp;
                                <input required type="radio"  value="m" id="masculino" name="genero" class="camposradio">
                                <label for="Masculino">M</label><br>
                                
                                <label for="fecha"class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Fecha de Nacimiento</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="date" id="fecha" min="<?php echo $nuevafechanacido ?>" name="fecha" max="<?php echo $nuevafecha ?>" class="camposgenerales" onkeypress="return validarFechaMenorActual(event)"><br>

                                <label for="nombre" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Estado civil</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="estado_c" name="estado_c" class="camposgenerales" > 
                                        <option value="">Por favor selecciona</option>
                                        <option value="1">Casado</option>
                                        <option value="2">Divorciado</option>
                                        <option value="3">Soltero</option>
                                        <option value="4">Unión Libre</option>
                                </select><br>
                            
                                <label for="pais" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>País de residencia</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)">

                                <label for="ciudad" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Ciudad de residencia</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" id="ciudad" name="ciudad" class="camposgenerales" onkeypress="return soloLetras(event)"><br>

                                <label for="direccion" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Dirección</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" id="direccion" name="direccion" class="camposgrandes"><br>
                                
                                <label for="codigo" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Código de País</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" min="0" maxlength="4" id="codigo" name="codigo" class="camposgenerales" onkeypress='return validaNumericos(event)'>
                                
                                <label for="telefono" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Teléfono</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" min="0" maxlength="10" id="telefono" name="telefono" class="camposgenerales" onkeypress='return validaNumericos(event)'>
                                

                                <label for="correo"  class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Correo electrónico</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="email" id="correo" name="correo" class="camposgrandes"><br>
                                <label for="idioma" class="titulosa">
                                <ul class="lista" >
                                    <li>
                                        <p>Idioma nativo</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)">

                                <label for="nivel" class="titulosa">
                                    <ul class="lista" >
                                        <li> 
                                            <p>Idiomas adicionales</p>
                                        </li> 
                                    </ul>
                                </label>
                                <input id="nivel" name="nivel" class="camposgenerales" >

                                <input  class="check" id="nativo" name="nativo" type="hidden"  >
                            <!-- <label for="Femenino" class="labels">Nativo</label> -->
                               
                    </div>
                    <div align="center" class="flex-item-right2" ><br><br>
                        <label for="nombre" >
                            <input type="hidden" name="url_image" id="url_image">
                            <input type="hidden" name="url_image_name" id="url_image_name">
                                    
                            <img src="img/foto.png" id="image_perfil" class="imgfoto" alt=""/>
                        </label>
                         <input required type="file" name="foto" id="foto" accept="image/*"  onchange = "AdjuntarImagen(this)" >
                                
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
        </footer>


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
        <div align=" center" class="fondoblanco" >
                
                
                <button type="submit"  onclick="alerta();"><img src="img/guardar.png" alt="" style="width: 70%;" /> </button>
                <button type="button"  onclick="borrar1();"><img src="img/editar.png" alt="" style="width: 70%;"  /> </button> <br><br>
                
            </div>

            
     </body>   
</html>
