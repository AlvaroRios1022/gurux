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
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
          

        <title>Gurús Center</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Open+Sans&display=swap" rel="stylesheet"> 
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.1/normalize.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glider-js@1.7.3/glider.min.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <body class="cabecera">

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
        <!-- Informacion Personal -->
        <div  class="flex-container"  align="center">
            <div align="left">
                <br>
                <a href="index.php"><img style="width:250px; margin-left:20%;" src="images/logo.png"/> </a>
            </div>
            <div align="center" >
                <br>
                <img style="width:50%;margin-left:-30%; " src="img/txtousuario.png" /> 
            </div>            
        </div>  
        <br>
        
        <div  class="flex-container" style="background-color: #E3DAEC;" align="left">
            <div class="flex-item-left">
                
                <!--</div> -->
                <form action="#" method="post" id="registro_usuarios" >
                
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
                    <form action="#" method="post" id="registro_usuarios" >
                        <input type="hidden" name="tipo" id="tipo" value="registro">
                    <div id="" class="fondoblanco" >   
                        <div align="center"><br><br>
                            <img src="img/texto_usuario.png"   width="80%" height="auto" alt="" />
                            <br>
                        <a style="color:#452167; font-size:20px">Diligencia el siguiente formulario para crear tu cuenta directamente con GURUXY</a>
                        </div>
                
                        <div class="flex-container"  class="fondoblanco" align="left">
                            <div class="flex-item-left"  >
                                <br>
                                <div style="margin-left:20%">
                                    <label for="nombre" class="titulosa"  >
                                        <ul class="lista">
                                            <li> 
                                                <p style="font-size:18px" >Nombre</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)"><br>
                                    <label for="tipo" class="titulosa" >
                                        <ul class="lista" >
                                            <li> 
                                                <p style="font-size:18px">Apellido</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <input required type="text" id="apellido" name="apellido" class="camposgenerales" required onkeypress="return soloLetras(event)" > <br>        
                                    <label for="documento" class="titulosa" >
                                        <ul class="lista" >
                                            <li> 
                                                <p style="font-size:18px">E-mail</p>                            
                                            </li> 
                                        </ul>
                                    </label>
                                    <input  required type="email" id="email" name="email" class="camposgenerales"> <br>
                                    <label for="Genero" class="titulosa">
                                        <ul class="lista" >
                                            <li> 
                                                <p style="font-size:18px">Teléfono</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <input  required type="number"  id="telefono" name="telefono" class="camposgenerales" ><br> 
                                    <label for="fecha"class="titulosa" >
                                        <ul class="lista" >
                                            <li> 
                                                <p style="font-size:18px">Contraseña</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <input  required type="password"  id="pass" name="pass" class="camposgenerales" ><br>
                                    <label for="nombre" class="titulosa">
                                        <ul class="lista" >
                                            <li> 
                                                <p style="font-size:18px">Documento</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <select style="width: 5%;" required id="tipo_doc" name="tipo_doc" class="camposgenerales"  > 
                                            <option value = "0"> CC </option>
                                            <option value = "1"> CE </option>
                                            <option value = "2"> TI </option>
                                            <option value = "3"> NIT </option>                     
                                            <option value = "4"> PSP </option>
                                    </select>
                                    <input  style="margin-left: 0;width: 30%;" required type="text" min="0" id="documento" name="documento" class="camposgenerales" onkeypress='return validaNumericos(event)'><br>

                                    <label for="pais" class="titulosa">
                                        <ul class="lista" >
                                            <li> 
                                                <p style="font-size:18px">Cumpleaños</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <input required type="date" id="fecha" min="<?php echo $nuevafechanacido ?>" name="fecha" max="<?php echo $nuevafecha ?>" class="camposgenerales" onkeypress="return validarFechaMenorActual(event)"><br>
                                    <label for="ciudad" class="titulosa" >
                                        <ul class="lista" >
                                            <li> 
                                                <p style="font-size:18px">Cómo nos conociste?</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <select required id="conocio" name="conocio" class="camposgenerales" > 
                                        <option value="">Por favor selecciona</option>
                                        <option value="1">Buscador</option>
                                        <option value="2">Televisión</option>
                                        <option value="3">Referencia</option>
                                        <option value="4">Facebook</option> 
                                        <option value="5">Instagram</option>
                                        <option value="6">Youtube</option>
                                        <option value="7">Pinterest</option>
                                        <option value="8">Otro sitio web</option>
                                        <option value="9">Radio</option>
                                        <option value="10">Podcast</option>
                                        <option value="11">Tik tok</option>
                                        <option value="12">Otros</option>
                                    </select>
                                    <br>
                                    <input required type="checkbox" name="18" value="18" class="check4">
                                    <label for="18" class="texto"> 
                                        <p style="font-size:14px; color:#888482;">&nbsp;&nbsp;Certifico que soy mayor de 18 años y acepto los términos y condiciones y la política de tratamiento de datos.</p>
                                    </label>
                                    <br>
                                    <input required type="checkbox" name="politicas" value="politicas" class="check4">
                                        <label for="18" class="texto"> 
                                            <p style="font-size:14px; color:#888482">&nbsp;&nbsp;Acepto recibir notificaciones de GURU´S CENTER.</p>
                                        </label>
                                    <br><br><br>
                                </div>
                                <div align="center">
                                    <button id="btn_guardar" type="submit" ><img src="img/crear.png" alt="" style="width: 60%; "/> </button>
                                    <button type="button"  ><img src="img/bborrar.png" alt="" style="width: 60%; "  /> </button> <br><br>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

         <!-- Fin Idiomas -->
       
    </div>
        <?php //require("modal/registro.php"); ?> 
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
