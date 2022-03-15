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

header('Access-Control-Allow-Origin: *');

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



<style>
/* Popup container - can be anything you want */
.popup {
  position: relative;
  display: inline-block;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* The actual popup */
.popup .popuptext {
  visibility: hidden;
  width: 160px;
  background-color: #555;
  color: #fff;
  text-align: center;
  border-radius: 6px;
  padding: 8px 0;
  position: absolute;
  z-index: 1;
  bottom: 125%;
  left: 50%;
  margin-left: -80px;
}

/* Popup arrow */
.popup .popuptext::after {
  content: "";
  position: absolute;
  top: 100%;
  left: 50%;
  margin-left: -5px;
  border-width: 5px;
  border-style: solid;
  border-color: #555 transparent transparent transparent;
}

/* Toggle this class - hide and show the popup */
.popup .show {
  visibility: visible;
  -webkit-animation: fadeIn 1s;
  animation: fadeIn 1s;
}

/* Add animation (fade in the popup) */
@-webkit-keyframes fadeIn {
  from {opacity: 0;} 
  to {opacity: 1;}
}

@keyframes fadeIn {
  from {opacity: 0;}
  to {opacity:1 ;}
}
</style>



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

            function alerta(){
                '<img src="img/cierre.jpg" alt="">'
            }

           
        </script>
        <style>
        :checked {
            margin-left: 25px;
            border: 1px solid blue;
        }
</style>
        <!-- Informacion Personal -->
        <div  class="flex-container"  align="center">
            <div align="left">
                <br>
                <img style="width:250px; " src="images/logo.png"/> 
            </div>
            <div align="center" >
                <br>
                <img style="width:50%; " src="img/headert12.png" /> 
            </div>            
        </div>  
        <br>
        
        <img src="img/header23.png"  width="100%" height="auto" alt="" />
        <div  class="flex-container" style="background-color: #E3DAEC;" align="left">
            <div class="flex-item-left">
                <img src="img/bienvienidos3.png"  width="80%" height="auto" alt="" />
                
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
                    <input type="hidden" name="fisico" id="fisico" value="<?php
                    if(isset($_POST['fisico'])){
                        echo $_POST['fisico'];
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
                    } ?>">
                    <input type="hidden" name="especialista" id="especialista" value="<?php 
                    if(isset($_POST['constructor'])){
                        echo $_POST['constructor'];
                    } ?>">
                    <input type="hidden" name="Preparacion_fisica" id="Preparacion_fisica" value="<?php 
                    if(isset($_POST['yoga'])){
                        echo $_POST['yoga'];
                    } 
                    ?>">
                    <input type="hidden" name="otros" id="otros" value="<?php
                    
                    if(isset($_POST['otros'])){
                        echo $_POST['otros'];
                    } 
                    ?>">
                    <input type="hidden" name="tipo" id="tipo" value="info_pesonal">
                    <input type="hidden" name="id_personal" id="id_personal" value="0">
                    <img src="img/personal.png"  width="100%" height="auto" alt=""  />
                    <div id="" class="fondoblanco">   
                        <div  class="flex-container" class="fondoblanco" align="left">
                            <div class="flex-item-left">
                                <br>
                                <label for="nombre" class="titulosa"  >
                                <ul class="lista">
                                    <li> 
                                        <p >Nombres </p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)">
                                <label for="nombre" class="titulosa"  >
                                <ul class="lista">
                                    <li> 
                                        <p >Apellidos</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="apellidos" name="apellidos" class="camposgenerales" required onkeypress="return soloLetras(event)"><br>

                                <label for="tipo" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p >Tipo de documento</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="tipo_doc" name="tipo_doc" class="camposgenerales"  > 
                                        <option value="">Por favor selecciona</option>
                                        <option value = "0"> CC </option>
                                        <option value = "1"> CE </option>
                                        <option value = "2"> TI </option>
                                        <option value = "3"> NIT </option>                     
                                        <option value = "4"> PSP </option>
                                </select>

                                <label for="documento" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>No. Documento</p>
                                        
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" min="0" id="documento" name="documento" class="camposgenerales" onkeypress='return validaNumericos(event)'><br>


                                <label for="fecha_n" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Fecha de Nacimiento</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="date" id="fecha_n" min="<?php echo $nuevafechanacido ?>" name="fecha_n" max="<?php echo $nuevafecha ?>" class="camposgenerales" onkeypress="return validarFechaMenorActual(event)">

                                <label for="Genero" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Género</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="genero" name="genero" class="camposgenerales"  > 
                                        <option value="">Por favor selecciona</option>
                                        <option value="0">-</option>
                                        <option value="1">M</option>
                                        <option value="2">F</option>
                                </select>
                                <label for="pais" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>País de residencia</p>
                                    </li> 
                                </ul>
                                </label>
                                <select  required id="pais" name="pais" class="camposgenerales" > 
                                    <option value="">Por favor selecciona</option>       
                                    <option value="AFGANISTAN">AFGANISTAN</option>
                                    <option value="ALBANIA">ALBANIA</option>
                                    <option value="ALEMANIA">ALEMANIA</option>
                                    <option value="ANDORRA">ANDORRA</option>
                                    <option value="ANGOLA">ANGOLA</option>
                                    <option value="ANGUILLA">ANGUILLA</option>
                                    <option value="ANTIGUA Y BARBUDA">ANTIGUA Y BARBUDA</option>
                                    <option value="ANTILLAS HOLANDESAS">ANTILLAS HOLANDESAS</option>
                                    <option value="ARABIA SAUDI">ARABIA SAUDI</option>
                                    <option value="ARGELIA">ARGELIA</option>
                                    <option value="ARGENTINA">ARGENTINA</option>
                                    <option value="ARMENIA">ARMENIA</option>
                                    <option value="ARUBA">ARUBA</option>
                                    <option value="AUSTRALIA">AUSTRALIA</option>
                                    <option value="AUSTRIA">AUSTRIA</option>
                                    <option value="AZERBAIYAN">AZERBAIYAN</option>
                                    <option value="BAHAMAS">BAHAMAS</option>
                                    <option value="BAHREIN">BAHREIN</option>
                                    <option value="BANGLADESH">BANGLADESH</option>
                                    <option value="BARBADOS">BARBADOS</option>
                                    <option value="BELARUS">BELARUS</option>
                                    <option value="BELGICA">BELGICA</option>
                                    <option value="BELICE">BELICE</option>
                                    <option value="BENIN">BENIN</option>
                                    <option value="BERMUDAS">BERMUDAS</option>
                                    <option value="BHUTÁN">BHUTÁN</option>
                                    <option value="BOLIVIA">BOLIVIA</option>
                                    <option value="BOSNIA Y HERZEGOVINA">BOSNIA Y HERZEGOVINA</option>
                                    <option value="BOTSWANA">BOTSWANA</option>
                                    <option value="BRASIL">BRASIL</option>
                                    <option value="BRUNEI">BRUNEI</option>
                                    <option value="BULGARIA">BULGARIA</option>
                                    <option value="BURKINA FASO">BURKINA FASO</option>
                                    <option value="BURUNDI">BURUNDI</option>
                                    <option value="CABO VERDE">CABO VERDE</option>
                                    <option value="CAMBOYA">CAMBOYA</option>
                                    <option value="CAMERUN">CAMERUN</option>
                                    <option value="CANADA">CANADA</option>
                                    <option value="CHAD">CHAD</option>
                                    <option value="CHILE">CHILE</option>
                                    <option value="CHINA">CHINA</option>
                                    <option value="CHIPRE">CHIPRE</option>
                                    <option value="57">COLOMBIA</option>
                                    <option value="COMORES">COMORES</option>
                                    <option value="CONGO">CONGO</option>
                                    <option value="COREA">COREA</option>
                                    <option value="COREA DEL NORTE ">COREA DEL NORTE </option>
                                    <option value="COSTA DE MARFIL">COSTA DE MARFIL</option>
                                    <option value="COSTA RICA">COSTA RICA</option>
                                    <option value="CROACIA">CROACIA</option>
                                    <option value="CUBA">CUBA</option>
                                    <option value="DINAMARCA">DINAMARCA</option>
                                    <option value="DJIBOUTI">DJIBOUTI</option>
                                    <option value="DOMINICA">DOMINICA</option>
                                    <option value="ECUADOR">ECUADOR</option>
                                    <option value="EGIPTO">EGIPTO</option>
                                    <option value="EL SALVADOR">EL SALVADOR</option>
                                    <option value="EMIRATOS ARABES UNIDOS">EMIRATOS ARABES UNIDOS</option>
                                    <option value="ERITREA">ERITREA</option>
                                    <option value="ESLOVENIA">ESLOVENIA</option>
                                    <option value="ESPAÑA">ESPAÑA</option>
                                    <option value="ESTADOS UNIDOS DE AMERICA">ESTADOS UNIDOS DE AMERICA</option>
                                    <option value="ESTONIA">ESTONIA</option>
                                    <option value="ETIOPIA">ETIOPIA</option>
                                    <option value="FIJI">FIJI</option>
                                    <option value="FILIPINAS">FILIPINAS</option>
                                    <option value="FINLANDIA">FINLANDIA</option>
                                    <option value="FRANCIA">FRANCIA</option>
                                    <option value="GABON">GABON</option>
                                    <option value="GAMBIA">GAMBIA</option>
                                    <option value="GEORGIA">GEORGIA</option>
                                    <option value="GHANA">GHANA</option>
                                    <option value="GIBRALTAR">GIBRALTAR</option>
                                    <option value="GRANADA">GRANADA</option>
                                    <option value="GRECIA">GRECIA</option>
                                    <option value="GROENLANDIA">GROENLANDIA</option>
                                    <option value="GUADALUPE">GUADALUPE</option>
                                    <option value="GUAM">GUAM</option>
                                    <option value="GUATEMALA">GUATEMALA</option>
                                    <option value="GUAYANA FRANCESA">GUAYANA FRANCESA</option>
                                    <option value="GUERNESEY">GUERNESEY</option>
                                    <option value="GUINEA">GUINEA</option>
                                    <option value="GUINEA ECUATORIAL">GUINEA ECUATORIAL</option>
                                    <option value="GUINEA-BISSAU">GUINEA-BISSAU</option>
                                    <option value="GUYANA">GUYANA</option>
                                    <option value="HAITI">HAITI</option>
                                    <option value="HONDURAS">HONDURAS</option>
                                    <option value="HONG KONG">HONG KONG</option>
                                    <option value="HUNGRIA">HUNGRIA</option>
                                    <option value="INDIA">INDIA</option>
                                    <option value="INDONESIA">INDONESIA</option>
                                    <option value="IRAN">IRAN</option>
                                    <option value="IRAQ">IRAQ</option>
                                    <option value="IRLANDA">IRLANDA</option>
                                    <option value="ISLA DE MAN">ISLA DE MAN</option>
                                    <option value="ISLA NORFOLK">ISLA NORFOLK</option>
                                    <option value="ISLANDIA">ISLANDIA</option>
                                    <option value="ISLAS ALAND">ISLAS ALAND</option>
                                    <option value="ISLAS CAIMÁN">ISLAS CAIMÁN</option>
                                    <option value="ISLAS COOK">ISLAS COOK</option>
                                    <option value="ISLAS DEL CANAL">ISLAS DEL CANAL</option>
                                    <option value="ISLAS FEROE">ISLAS FEROE</option>
                                    <option value="ISLAS MALVINAS">ISLAS MALVINAS</option>
                                    <option value="ISLAS MARIANAS DEL NORTE">ISLAS MARIANAS DEL NORTE</option>
                                    <option value="ISLAS MARSHALL">ISLAS MARSHALL</option>
                                    <option value="ISLAS PITCAIRN">ISLAS PITCAIRN</option>
                                    <option value="ISLAS SALOMON">ISLAS SALOMON</option>
                                    <option value="ISLAS TURCAS Y CAICOS">ISLAS TURCAS Y CAICOS</option>
                                    <option value="ISLAS VIRGENES BRITANICAS">ISLAS VIRGENES BRITANICAS</option>
                                    <option value="ISLAS VÍRGENES DE LOS ESTADOS UNIDOS">ISLAS VÍRGENES DE LOS ESTADOS UNIDOS</option>
                                    <option value="ISRAEL">ISRAEL</option>
                                    <option value="ITALIA">ITALIA</option>
                                    <option value="JAMAICA">JAMAICA</option>
                                    <option value="JAPON">JAPON</option>
                                    <option value="JERSEY">JERSEY</option>
                                    <option value="JORDANIA">JORDANIA</option>
                                    <option value="KAZAJSTAN">KAZAJSTAN</option>
                                    <option value="KENIA">KENIA</option>
                                    <option value="KIRGUISTAN">KIRGUISTAN</option>
                                    <option value="KIRIBATI">KIRIBATI</option>
                                    <option value="KUWAIT">KUWAIT</option>
                                    <option value="LAOS">LAOS</option>
                                    <option value="LESOTHO">LESOTHO</option>
                                    <option value="LETONIA">LETONIA</option>
                                    <option value="LIBANO">LIBANO</option>
                                    <option value="LIBERIA">LIBERIA</option>
                                    <option value="LIBIA">LIBIA</option>
                                    <option value="LIECHTENSTEIN">LIECHTENSTEIN</option>
                                    <option value="LITUANIA">LITUANIA</option>
                                    <option value="LUXEMBURGO">LUXEMBURGO</option>
                                    <option value="MACAO">MACAO</option>
                                    <option value="MACEDONIA ">MACEDONIA </option>
                                    <option value="MADAGASCAR">MADAGASCAR</option>
                                    <option value="MALASIA">MALASIA</option>
                                    <option value="MALAWI">MALAWI</option>
                                    <option value="MALDIVAS">MALDIVAS</option>
                                    <option value="MALI">MALI</option>
                                    <option value="MALTA">MALTA</option>
                                    <option value="MARRUECOS">MARRUECOS</option>
                                    <option value="MARTINICA">MARTINICA</option>
                                    <option value="MAURICIO">MAURICIO</option>
                                    <option value="MAURITANIA">MAURITANIA</option>
                                    <option value="MAYOTTE">MAYOTTE</option>
                                    <option value="MEXICO">MEXICO</option>
                                    <option value="MICRONESIA">MICRONESIA</option>
                                    <option value="MOLDAVIA">MOLDAVIA</option>
                                    <option value="MONACO">MONACO</option>
                                    <option value="MONGOLIA">MONGOLIA</option>
                                    <option value="MONTENEGRO">MONTENEGRO</option>
                                    <option value="MONTSERRAT">MONTSERRAT</option>
                                    <option value="MOZAMBIQUE">MOZAMBIQUE</option>
                                    <option value="MYANMAR">MYANMAR</option>
                                    <option value="NAMIBIA">NAMIBIA</option>
                                    <option value="NAURU">NAURU</option>
                                    <option value="NEPAL">NEPAL</option>
                                    <option value="NICARAGUA">NICARAGUA</option>
                                    <option value="NIGER">NIGER</option>
                                    <option value="NIGERIA">NIGERIA</option>
                                    <option value="NIUE">NIUE</option>
                                    <option value="NORUEGA">NORUEGA</option>
                                    <option value="NUEVA CALEDONIA">NUEVA CALEDONIA</option>
                                    <option value="NUEVA ZELANDA">NUEVA ZELANDA</option>
                                    <option value="OMAN">OMAN</option>
                                    <option value="OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE">OTROS PAISES  O TERRITORIOS DE AMERICA DEL NORTE</option>
                                    <option value="OTROS PAISES O TERRITORIOS  DE SUDAMERICA">OTROS PAISES O TERRITORIOS  DE SUDAMERICA</option>
                                    <option value="OTROS PAISES O TERRITORIOS DE AFRICA">OTROS PAISES O TERRITORIOS DE AFRICA</option>
                                    <option value="OTROS PAISES O TERRITORIOS DE ASIA">OTROS PAISES O TERRITORIOS DE ASIA</option>
                                    <option value="OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA">OTROS PAISES O TERRITORIOS DE LA UNION EUROPEA</option>
                                    <option value="OTROS PAISES O TERRITORIOS DE OCEANIA">OTROS PAISES O TERRITORIOS DE OCEANIA</option>
                                    <option value="OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL">OTROS PAISES O TERRITORIOS DEL CARIBE Y AMERICA CENTRAL</option>
                                    <option value="OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA">OTROS PAISES O TERRITORIOS DEL RESTO DE EUROPA</option>
                                    <option value="PAISES BAJOS">PAISES BAJOS</option>
                                    <option value="PAKISTAN">PAKISTAN</option>
                                    <option value="PALAOS">PALAOS</option>
                                    <option value="PALESTINA">PALESTINA</option>
                                    <option value="PANAMA">PANAMA</option>
                                    <option value="PAPUA NUEVA GUINEA">PAPUA NUEVA GUINEA</option>
                                    <option value="PARAGUAY">PARAGUAY</option>
                                    <option value="PERU">PERU</option>
                                    <option value="POLINESIA FRANCESA">POLINESIA FRANCESA</option>
                                    <option value="POLONIA">POLONIA</option>
                                    <option value="PORTUGAL">PORTUGAL</option>
                                    <option value="PUERTO RICO">PUERTO RICO</option>
                                    <option value="QATAR">QATAR</option>
                                    <option value="REINO UNIDO">REINO UNIDO</option>
                                    <option value="REP.DEMOCRATICA DEL CONGO">REP.DEMOCRATICA DEL CONGO</option>
                                    <option value="REPUBLICA CENTROAFRICANA">REPUBLICA CENTROAFRICANA</option>
                                    <option value="REPUBLICA CHECA">REPUBLICA CHECA</option>
                                    <option value="REPUBLICA DOMINICANA">REPUBLICA DOMINICANA</option>
                                    <option value="REPUBLICA ESLOVACA">REPUBLICA ESLOVACA</option>
                                    <option value="REUNION">REUNION</option>
                                    <option value="RUANDA">RUANDA</option>
                                    <option value="RUMANIA">RUMANIA</option>
                                    <option value="RUSIA">RUSIA</option>
                                    <option value="SAHARA OCCIDENTAL">SAHARA OCCIDENTAL</option>
                                    <option value="SAMOA">SAMOA</option>
                                    <option value="SAMOA AMERICANA">SAMOA AMERICANA</option>
                                    <option value="SAN BARTOLOME">SAN BARTOLOME</option>
                                    <option value="SAN CRISTOBAL Y NIEVES">SAN CRISTOBAL Y NIEVES</option>
                                    <option value="SAN MARINO">SAN MARINO</option>
                                    <option value="SAN MARTIN (PARTE FRANCESA)">SAN MARTIN (PARTE FRANCESA)</option>
                                    <option value="SAN PEDRO Y MIQUELON ">SAN PEDRO Y MIQUELON </option>
                                    <option value="SAN VICENTE Y LAS GRANADINAS">SAN VICENTE Y LAS GRANADINAS</option>
                                    <option value="SANTA HELENA">SANTA HELENA</option>
                                    <option value="SANTA LUCIA">SANTA LUCIA</option>
                                    <option value="SANTA SEDE">SANTA SEDE</option>
                                    <option value="SANTO TOME Y PRINCIPE">SANTO TOME Y PRINCIPE</option>
                                    <option value="SENEGAL">SENEGAL</option>
                                    <option value="SERBIA">SERBIA</option>
                                    <option value="SEYCHELLES">SEYCHELLES</option>
                                    <option value="SIERRA LEONA">SIERRA LEONA</option>
                                    <option value="SINGAPUR">SINGAPUR</option>
                                    <option value="SIRIA">SIRIA</option>
                                    <option value="SOMALIA">SOMALIA</option>
                                    <option value="SRI LANKA">SRI LANKA</option>
                                    <option value="SUDAFRICA">SUDAFRICA</option>
                                    <option value="SUDAN">SUDAN</option>
                                    <option value="SUECIA">SUECIA</option>
                                    <option value="SUIZA">SUIZA</option>
                                    <option value="SURINAM">SURINAM</option>
                                    <option value="SVALBARD Y JAN MAYEN">SVALBARD Y JAN MAYEN</option>
                                    <option value="SWAZILANDIA">SWAZILANDIA</option>
                                    <option value="TADYIKISTAN">TADYIKISTAN</option>
                                    <option value="TAILANDIA">TAILANDIA</option>
                                    <option value="TANZANIA">TANZANIA</option>
                                    <option value="TIMOR ORIENTAL">TIMOR ORIENTAL</option>
                                    <option value="TOGO">TOGO</option>
                                    <option value="TOKELAU">TOKELAU</option>
                                    <option value="TONGA">TONGA</option>
                                    <option value="TRINIDAD Y TOBAGO">TRINIDAD Y TOBAGO</option>
                                    <option value="TUNEZ">TUNEZ</option>
                                    <option value="TURKMENISTAN">TURKMENISTAN</option>
                                    <option value="TURQUIA">TURQUIA</option>
                                    <option value="TUVALU">TUVALU</option>
                                    <option value="UCRANIA">UCRANIA</option>
                                    <option value="UGANDA">UGANDA</option>
                                    <option value="URUGUAY">URUGUAY</option>
                                    <option value="UZBEKISTAN">UZBEKISTAN</option>
                                    <option value="VANUATU">VANUATU</option>
                                    <option value="VENEZUELA">VENEZUELA</option>
                                    <option value="VIETNAM">VIETNAM</option>
                                    <option value="WALLIS Y FORTUNA">WALLIS Y FORTUNA</option>
                                    <option value="YEMEN">YEMEN</option>
                                    <option value="ZAMBIA">ZAMBIA</option>
                                    <option value="ZIMBABWE">ZIMBABWE</option>
                                </select>
                                


                                <label for="refe" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Código de referido (si aplica)</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  type="text" min="0" maxlength="10" id="refe" name="refe" class="camposgenerales" >
                                
                                <label for="ciudad" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Ciudad de residencia</p>
                                    </li> 
                                </ul>
                                </label>
                                

                                <select  required id="ciudad" name="ciudad" class="camposgenerales" > 
                                <option value="">-----</option>     

	<optgroup label="Amazonas">     
	<option value="Leticia">Leticia</option>
	<option value="PuertoNariño">PuertoNariño</option>
	
</optgroup>
	<optgroup label="Antioquia">
	     

<option value="Abejorral">Abejorral</option>
<option value="Abriaquí">Abriaquí</option>
<option value="Alejandría">Alejandría</option>
<option value="Amaga">Amaga</option>
<option value="Amalfi">Amalfi</option>
<option value="Andes">Andes</option>
<option value="Angelópolis">Angelópolis</option>
<option value="Angostura">Angostura</option>
<option value="Anorí">Anorí</option>
<option value="Anzá">Anzá</option>
<option value="Apartadó">Apartadó</option>
<option value="Arboletes">Arboletes</option>
<option value="Argelia">Argelia</option>
<option value="Armenia">Armenia</option>
<option value="Barbosa">Barbosa</option>
<option value="Bello">Bello</option>
<option value="Belmira">Belmira</option>
<option value="Betania">Betania</option>
<option value="Betulia">Betulia</option>
<option value="Briceño">Briceño</option>
<option value="Buriticá">Buriticá</option>
<option value="Cáceres">Cáceres</option>
<option value="Caicedo">Caicedo</option>
<option value="Caldas">Caldas</option>
<option value="Campamento">Campamento</option>
<option value="Cañasgordas">Cañasgordas</option>
<option value="Caracolí">Caracolí</option>
<option value="Caramanta">Caramanta</option>
<option value="Carepa">Carepa</option>
<option value="CarolinaDelPrincipe">CarolinaDelPrincipe</option>
<option value="Caucasia">Caucasia</option>
<option value="Chigorodó">Chigorodó</option>
<option value="Cisneros">Cisneros</option>
<option value="CiudadBolívar">CiudadBolívar</option>
<option value="Cocorná">Cocorná</option>
<option value="Concepción">Concepción</option>
<option value="Concordia">Concordia</option>
<option value="Copacabana">Copacabana</option>
<option value="Dabeiba">Dabeiba</option>
<option value="DonMatías">DonMatías</option>
<option value="Ebéjico">Ebéjico</option>
<option value="ElBagre">ElBagre</option>
<option value="ElCarmenDeViboral">ElCarmenDeViboral</option>
<option value="ElPeñol">ElPeñol</option>
<option value="ElRetiro">ElRetiro</option>
<option value="Entrerríos">Entrerríos</option>
<option value="Envigado">Envigado</option>
<option value="Fredonia">Fredonia</option>
<option value="Frontino">Frontino</option>
<option value="Giraldo">Giraldo</option>
<option value="Girardota">Girardota</option>
<option value="GómezPlata">GómezPlata</option>
<option value="Granada">Granada</option>
<option value="Guadalupe">Guadalupe</option>
<option value="Guarne">Guarne</option>
<option value="Guatapé">Guatapé</option>
<option value="Heliconia">Heliconia</option>
<option value="Hispania">Hispania</option>
<option value="Itagüí">Itagüí</option>
<option value="Ituango">Ituango</option>
<option value="Jardín">Jardín</option>
<option value="Jericó">Jericó</option>
<option value="LaCejaDelTambo">LaCejaDelTambo</option>
<option value="LaEstrella">LaEstrella</option>
<option value="LaPintada">LaPintada</option>
<option value="LaUnión">LaUnión</option>
<option value="Liborina">Liborina</option>
<option value="Maceo">Maceo</option>
<option value="Marinilla">Marinilla</option>
<option value="Medellín">Medellín</option>
<option value="Montebello">Montebello</option>
<option value="Murindó">Murindó</option>
<option value="Mutatá">Mutatá</option>
<option value="Nariño">Nariño</option>
<option value="Nechí">Nechí</option>
<option value="Necoclí">Necoclí</option>
<option value="Olaya">Olaya</option>
<option value="Peque">Peque</option>
<option value="Pueblorrico">Pueblorrico</option>
<option value="PuertoBerrio">PuertoBerrio</option>
<option value="PuertoNare">PuertoNare</option>
<option value="PuertoTriunfo">PuertoTriunfo</option>
<option value="Remedios">Remedios</option>
<option value="Rionegro">Rionegro</option>
<option value="Sabanalarga">Sabanalarga</option>
<option value="Sabaneta">Sabaneta</option>
<option value="Salgar">Salgar</option>
<option value="SanAndrésDeCuerquia">SanAndrésDeCuerquia</option>
<option value="SanCarlos">SanCarlos</option>
<option value="SanFrancisco">SanFrancisco</option>
<option value="SanJerónimo">SanJerónimo</option>
<option value="SanJoséDeLaMontaña">SanJoséDeLaMontaña</option>
<option value="SanJuanDeUrabá">SanJuanDeUrabá</option>
<option value="SanLuis">SanLuis</option>
<option value="SanPedroDeLosMilagros">SanPedroDeLosMilagros</option>
<option value="SanPedroDeUrabá">SanPedroDeUrabá</option>
<option value="SanRafael">SanRafael</option>
<option value="SanRoque">SanRoque</option>
<option value="SanVicente">SanVicente</option>
<option value="SantaBárbara">SantaBárbara</option>
<option value="SantaRosaDeOsos">SantaRosaDeOsos</option>
<option value="SantafeDeAntioquia">SantafeDeAntioquia</option>
<option value="SantoDomingo">SantoDomingo</option>
<option value="Santuario">Santuario</option>
<option value="Segovia">Segovia</option>
<option value="Sonsón">Sonsón</option>
<option value="Sopetrán">Sopetrán</option>
<option value="Támesis">Támesis</option>
<option value="Tarazá">Tarazá</option>
<option value="Tarso">Tarso</option>
<option value="Titiribí">Titiribí</option>
<option value="Toledo">Toledo</option>
<option value="Turbo">Turbo</option>
<option value="Uramita">Uramita</option>
<option value="Urrao">Urrao</option>
<option value="Valdivia">Valdivia</option>
<option value="Valparaíso">Valparaíso</option>
<option value="Vegachí">Vegachí</option>
<option value="Venecia">Venecia</option>
<option value="VigíaDelFuerte">VigíaDelFuerte</option>
<option value="Yalí">Yalí</option>
<option value="Yarumal">Yarumal</option>
<option value="Yolombó">Yolombó</option>
<option value="Yondo">Yondo</option>
<option value="Zaragoza">Zaragoza</option>


</optgroup>
	<optgroup label="Arauca">


<option value="Arauca">Arauca</option>
<option value="Arauquita">Arauquita</option>
<option value="CravoNorte">CravoNorte</option>
<option value="Fortul">Fortul</option>
<option value="PuertoRondón">PuertoRondón</option>
<option value="Saravena">Saravena</option>
<option value="Tame">Tame</option>


</optgroup>
	<optgroup label="Atlántico">
		
	<option value="Baranoa">Baranoa</option>
<option value="Barranquilla">Barranquilla</option>
<option value="CampoDeLaCruz">CampoDeLaCruz</option>
<option value="Candelaria">Candelaria</option>
<option value="Galapa">Galapa</option>
<option value="JuanDeAcosta">JuanDeAcosta</option>
<option value="Luruaco">Luruaco</option>
<option value="Malambo">Malambo</option>
<option value="Manatí">Manatí</option>
<option value="PalmarDeVarela">PalmarDeVarela</option>
<option value="Piojo">Piojo</option>
<option value="Polonuevo">Polonuevo</option>
<option value="Ponedera">Ponedera</option>
<option value="PuertoColombia">PuertoColombia</option>
<option value="Repelón">Repelón</option>
<option value="Sabanagrande">Sabanagrande</option>
<option value="Sabanalarga">Sabanalarga</option>
<option value="SantaLucía">SantaLucía</option>
<option value="SantoTomas">SantoTomas</option>
<option value="Soledad">Soledad</option>
<option value="Suan">Suan</option>
<option value="Tubará">Tubará</option>
<option value="Usiacurí">Usiacurí</option>

</optgroup>
	<optgroup label="Bolivar">

<option value="Achí">Achí</option>
<option value="AltosDelRosario">AltosDelRosario</option>
<option value="Arenal">Arenal</option>
<option value="Arjona">Arjona</option>
<option value="Arroyohondo">Arroyohondo</option>
<option value="BarrancoDeLoba">BarrancoDeLoba</option>
<option value="Calamar">Calamar</option>
<option value="Cantagallo">Cantagallo</option>
<option value="CartagenadeIndias">CartagenadeIndias</option>
<option value="Cicuco">Cicuco</option>
<option value="Clemencia">Clemencia</option>
<option value="Córdoba">Córdoba</option>
<option value="ElCarmenDeBolívar">ElCarmenDeBolívar</option>
<option value="ElGuamo">ElGuamo</option>
<option value="ElPeñon">ElPeñon</option>
<option value="HatilloDeLoba">HatilloDeLoba</option>
<option value="Magangué">Magangué</option>
<option value="Mahates">Mahates</option>
<option value="Margarita">Margarita</option>
<option value="MaríaLaBaja">MaríaLaBaja</option>
<option value="Montecristo">Montecristo</option>
<option value="Morales">Morales</option>
<option value="Norosí">Norosí</option>
<option value="Pinillos">Pinillos</option>
<option value="Regidor">Regidor</option>
<option value="Rioviejo">Rioviejo</option>
<option value="SanCristóbal">SanCristóbal</option>
<option value="SanEstanislao">SanEstanislao</option>
<option value="SanFernando">SanFernando</option>
<option value="SanJacinto">SanJacinto</option>
<option value="SanJacintoDelCauca">SanJacintoDelCauca</option>
<option value="SanJuanNepomuceno">SanJuanNepomuceno</option>
<option value="SanMartínDeLoba">SanMartínDeLoba</option>
<option value="SanPablo">SanPablo</option>
<option value="SantaCatalina">SantaCatalina</option>
<option value="SantaCruzDeMompós">SantaCruzDeMompós</option>
<option value="SantaRosaDelNorte">SantaRosaDelNorte</option>
<option value="SantaRosaDelSur">SantaRosaDelSur</option>
<option value="Simití">Simití</option>
<option value="Soplaviento">Soplaviento</option>
<option value="TalaiguaNuevo">TalaiguaNuevo</option>
<option value="Tiquisio">Tiquisio</option>
<option value="Turbaco">Turbaco</option>
<option value="Turbana">Turbana</option>
<option value="Villanueva">Villanueva</option>
<option value="Zambrano">Zambrano</option>

</optgroup>
	<optgroup label="Boyacá">

<option value="Almeida">Almeida</option>
<option value="Aquitania">Aquitania</option>
<option value="Arcabuco">Arcabuco</option>
<option value="Belén">Belén</option>
<option value="Berbeo">Berbeo</option>
<option value="Betéitiva">Betéitiva</option>
<option value="Boavita">Boavita</option>
<option value="Boyacá">Boyacá</option>
<option value="Briceño">Briceño</option>
<option value="Buenavista">Buenavista</option>
<option value="Busbanzá">Busbanzá</option>
<option value="Caldas">Caldas</option>
<option value="Campohermoso">Campohermoso</option>
<option value="Cerinza">Cerinza</option>
<option value="Chinavita">Chinavita</option>
<option value="Chiquinquirá">Chiquinquirá</option>
<option value="Chíquiza">Chíquiza</option>
<option value="Chiscas">Chiscas</option>
<option value="Chita">Chita</option>
<option value="Chitaraque">Chitaraque</option>
<option value="Chivata">Chivata</option>
<option value="Chivor">Chivor</option>
<option value="Ciénega">Ciénega</option>
<option value="Combita">Combita</option>
<option value="Coper">Coper</option>
<option value="Corrales">Corrales</option>
<option value="Covarachía">Covarachía</option>
<option value="Cubará">Cubará</option>
<option value="Cucaita">Cucaita</option>
<option value="Cuítiva">Cuítiva</option>
<option value="Duitama">Duitama</option>
<option value="ElCocuy">ElCocuy</option>
<option value="ElEspino">ElEspino</option>
<option value="Firavitoba">Firavitoba</option>
<option value="Floresta">Floresta</option>
<option value="Gachantivá">Gachantivá</option>
<option value="Gámeza">Gámeza</option>
<option value="Garagoa">Garagoa</option>
<option value="Guacamayas">Guacamayas</option>
<option value="Guateque">Guateque</option>
<option value="Guayatá">Guayatá</option>
<option value="Güicán">Güicán</option>
<option value="Iza">Iza</option>
<option value="Jenesano">Jenesano</option>
<option value="Jericó">Jericó</option>
<option value="LaCapilla">LaCapilla</option>
<option value="LaUvita">LaUvita</option>
<option value="LaVictoria">LaVictoria</option>
<option value="Labranzagrande">Labranzagrande</option>
<option value="Macanal">Macanal</option>
<option value="Maripi">Maripi</option>
<option value="Miraflores">Miraflores</option>
<option value="Mongua">Mongua</option>
<option value="Monguí">Monguí</option>
<option value="Moniquirá">Moniquirá</option>
<option value="Motavita">Motavita</option>
<option value="Muzo">Muzo</option>
<option value="Nobsa">Nobsa</option>
<option value="NuevoColón">NuevoColón</option>
<option value="Oicatá">Oicatá</option>
<option value="Otanche">Otanche</option>
<option value="Pachavita">Pachavita</option>
<option value="Páez">Páez</option>
<option value="Paipa">Paipa</option>
<option value="Pajarito">Pajarito</option>
<option value="Panqueba">Panqueba</option>
<option value="Pauna">Pauna</option>
<option value="Paya">Paya</option>
<option value="PazDeRío">PazDeRío</option>
<option value="Pesca">Pesca</option>
<option value="Pisba">Pisba</option>
<option value="PuertoBoyacá">PuertoBoyacá</option>
<option value="Quípama">Quípama</option>
<option value="Ramiriquí">Ramiriquí</option>
<option value="Ráquira">Ráquira</option>
<option value="Rondón">Rondón</option>
<option value="Saboya">Saboya</option>
<option value="Sáchica">Sáchica</option>
<option value="Samacá">Samacá</option>
<option value="SanEduardo">SanEduardo</option>
<option value="SanJoséDePare">SanJoséDePare</option>
<option value="SanLuisDeGaceno">SanLuisDeGaceno</option>
<option value="SanMateo">SanMateo</option>
<option value="SanMiguelDeSema">SanMiguelDeSema</option>
<option value="SanPabloDeBorbur">SanPabloDeBorbur</option>
<option value="SantaMaría">SantaMaría</option>
<option value="SantaRosaDeViterbo">SantaRosaDeViterbo</option>
<option value="SantaSofía">SantaSofía</option>
<option value="Santana">Santana</option>
<option value="Sativanorte">Sativanorte</option>
<option value="Sativasur">Sativasur</option>
<option value="Siachoque">Siachoque</option>
<option value="Soatá">Soatá</option>
<option value="Socha">Socha</option>
<option value="Socotá">Socotá</option>
<option value="Sogamoso">Sogamoso</option>
<option value="Somondoco">Somondoco</option>
<option value="Sora">Sora</option>
<option value="Soracá">Soracá</option>
<option value="Sotaquirá">Sotaquirá</option>
<option value="Susacón">Susacón</option>
<option value="Sutamarchan">Sutamarchan</option>
<option value="Sutatenza">Sutatenza</option>
<option value="Tasco">Tasco</option>
<option value="Tenza">Tenza</option>
<option value="Tibaná">Tibaná</option>
<option value="Tibasosa">Tibasosa</option>
<option value="Tinjacá">Tinjacá</option>
<option value="Tipacoque">Tipacoque</option>
<option value="Toca">Toca</option>
<option value="Togüí">Togüí</option>
<option value="Tópaga">Tópaga</option>
<option value="Tota">Tota</option>
<option value="Tunja">Tunja</option>
<option value="Tunungua">Tunungua</option>
<option value="Turmequé">Turmequé</option>
<option value="Tuta">Tuta</option>
<option value="Tutazá">Tutazá</option>
<option value="Úmbita">Úmbita</option>
<option value="Ventaquemada">Ventaquemada</option>
<option value="VillaDeLeyva">VillaDeLeyva</option>
<option value="Viracachá">Viracachá</option>
<option value="Zetaquirá">Zetaquirá</option>

</optgroup>
	<optgroup label="Caldas">

<option value="Aguadas">Aguadas</option>
<option value="Anserma">Anserma</option>
<option value="Aranzazu">Aranzazu</option>
<option value="Belalcazar">Belalcazar</option>
<option value="Chinchiná">Chinchiná</option>
<option value="Filadelfia">Filadelfia</option>
<option value="LaDorada">LaDorada</option>
<option value="LaMerced">LaMerced</option>
<option value="Manizales">Manizales</option>
<option value="Manzanares">Manzanares</option>
<option value="Marmato">Marmato</option>
<option value="Marquetalia">Marquetalia</option>
<option value="Marulanda">Marulanda</option>
<option value="Neira">Neira</option>
<option value="Norcasia">Norcasia</option>
<option value="Pacora">Pacora</option>
<option value="Palestina">Palestina</option>
<option value="Pensilvania">Pensilvania</option>
<option value="Riosucio">Riosucio</option>
<option value="Risaralda">Risaralda</option>
<option value="Salamina">Salamina</option>
<option value="Samaná">Samaná</option>
<option value="SanJosé">SanJosé</option>
<option value="Supía">Supía</option>
<option value="Victoria">Victoria</option>
<option value="Villamaría">Villamaría</option>
<option value="Viterbo">Viterbo</option>

</optgroup>
	<optgroup label="Caquetá">

<option value="Albania">Albania</option>
<option value="BelénDeLosAndaquies">BelénDeLosAndaquies</option>
<option value="CartagenaDelChairá">CartagenaDelChairá</option>
<option value="Curillo">Curillo</option>
<option value="ElDoncello">ElDoncello</option>
<option value="ElPaujil">ElPaujil</option>
<option value="Florencia">Florencia</option>
<option value="LaMontañita">LaMontañita</option>
<option value="Milán">Milán</option>
<option value="Morelia">Morelia</option>
<option value="PuertoRico">PuertoRico</option>
<option value="SanJoséDelFragua">SanJoséDelFragua</option>
<option value="SanVicenteDelCaguán">SanVicenteDelCaguán</option>
<option value="Solano">Solano</option>
<option value="Solita">Solita</option>
<option value="Valparaíso">Valparaíso</option>

</optgroup>
	<optgroup label="Casanare">

<option value="Aguazul">Aguazul</option>
<option value="Chameza">Chameza</option>
<option value="HatoCorozal">HatoCorozal</option>
<option value="LaSalina">LaSalina</option>
<option value="Maní">Maní</option>
<option value="Monterrey">Monterrey</option>
<option value="Nunchía">Nunchía</option>
<option value="Orocué">Orocué</option>
<option value="PazDeAriporo">PazDeAriporo</option>
<option value="Pore">Pore</option>
<option value="Recetor">Recetor</option>
<option value="Sabanalarga">Sabanalarga</option>
<option value="Sácama">Sácama</option>
<option value="SanLuisDePalenque">SanLuisDePalenque</option>
<option value="Támara">Támara</option>
<option value="Tauramena">Tauramena</option>
<option value="Trinidad">Trinidad</option>
<option value="Villanueva">Villanueva</option>
<option value="Yopal">Yopal</option>

</optgroup>
	<optgroup label="Cauca">

<option value="Almaguer">Almaguer</option>
<option value="Argelia">Argelia</option>
<option value="Balboa">Balboa</option>
<option value="Bolívar">Bolívar</option>
<option value="BuenosAires">BuenosAires</option>
<option value="Cajibio">Cajibio</option>
<option value="Caldono">Caldono</option>
<option value="Caloto">Caloto</option>
<option value="Corinto">Corinto</option>
<option value="ElTambo">ElTambo</option>
<option value="Florencia">Florencia</option>
<option value="Guachené">Guachené</option>
<option value="Guapi">Guapi</option>
<option value="Inzá">Inzá</option>
<option value="Jambaló">Jambaló</option>
<option value="LaSierra">LaSierra</option>
<option value="LaVega">LaVega</option>
<option value="LópezDeMicay">LópezDeMicay</option>
<option value="Mercaderes">Mercaderes</option>
<option value="Miranda">Miranda</option>
<option value="Morales">Morales</option>
<option value="Padilla">Padilla</option>
<option value="Páez">Páez</option>
<option value="Patía">Patía</option>
<option value="Piamonte">Piamonte</option>
<option value="Piendamó">Piendamó</option>
<option value="Popayán">Popayán</option>
<option value="PuertoTejada">PuertoTejada</option>
<option value="Puracé">Puracé</option>
<option value="Rosas">Rosas</option>
<option value="SanSebastián">SanSebastián</option>
<option value="SantaRosa">SantaRosa</option>
<option value="SantanderDeQuilichao">SantanderDeQuilichao</option>
<option value="Silvia">Silvia</option>
<option value="Sotará">Sotará</option>
<option value="Suárez">Suárez</option>
<option value="Sucre">Sucre</option>
<option value="Timbío">Timbío</option>
<option value="Timbiquí">Timbiquí</option>
<option value="Toribio">Toribio</option>
<option value="Totoro">Totoro</option>
<option value="VillaRica">VillaRica</option>

</optgroup>
	<optgroup label="Cesar">

<option value="Aguachica">Aguachica</option>
<option value="AgustínCodazzi">AgustínCodazzi</option>
<option value="Astrea">Astrea</option>
<option value="Becerril">Becerril</option>
<option value="Bosconia">Bosconia</option>
<option value="Chimichagua">Chimichagua</option>
<option value="Chiriguaná">Chiriguaná</option>
<option value="Curumaní">Curumaní</option>
<option value="ElCopey">ElCopey</option>
<option value="ElPaso">ElPaso</option>
<option value="Gamarra">Gamarra</option>
<option value="González">González</option>
<option value="LaGloria">LaGloria</option>
<option value="LaJaguaDeIbirico">LaJaguaDeIbirico</option>
<option value="LaPaz">LaPaz</option>
<option value="ManaureBalcónDelCésar">ManaureBalcónDelCésar</option>
<option value="Pailitas">Pailitas</option>
<option value="Pelaya">Pelaya</option>
<option value="PuebloBello">PuebloBello</option>
<option value="RioDeOro">RioDeOro</option>
<option value="SanAlberto">SanAlberto</option>
<option value="SanDiego">SanDiego</option>
<option value="SanMartín">SanMartín</option>
<option value="Tamalameque">Tamalameque</option>
<option value="Valledupar">Valledupar</option>

</optgroup>
	<optgroup label="Chocó">

<option value="Acandí">Acandí</option>
<option value="AltoBaudó">AltoBaudó</option>
<option value="Atrato">Atrato</option>
<option value="Bagadó">Bagadó</option>
<option value="BahíaSolano">BahíaSolano</option>
<option value="BajoBaudó">BajoBaudó</option>
<option value="Bojayá">Bojayá</option>
<option value="CarmenDelDarién">CarmenDelDarién</option>
<option value="Cértegui">Cértegui</option>
<option value="Condoto">Condoto</option>
<option value="ElCantóndeSanPablo">ElCantóndeSanPablo</option>
<option value="ElCarmenDeAtrato">ElCarmenDeAtrato</option>
<option value="ElLitoralDeSanJuan">ElLitoralDeSanJuan</option>
<option value="Istmina">Istmina</option>
<option value="Juradó">Juradó</option>
<option value="Lloró">Lloró</option>
<option value="MedioAtrato">MedioAtrato</option>
<option value="MedioBaudó">MedioBaudó</option>
<option value="MedioSanJuan">MedioSanJuan</option>
<option value="Nóvita">Nóvita</option>
<option value="Nuquí">Nuquí</option>
<option value="Quibdó">Quibdó</option>
<option value="RíoIró">RíoIró</option>
<option value="RíoQuito">RíoQuito</option>
<option value="Riosucio">Riosucio</option>
<option value="SanJosédeTadó">SanJosédeTadó</option>
<option value="SanJoséDelPalmar">SanJoséDelPalmar</option>
<option value="Sipí">Sipí</option>
<option value="Ungüía">Ungüía</option>
<option value="UniónPanamericana">UniónPanamericana</option>

</optgroup>
	<optgroup label="Córdoba">

<option value="Ayapel">Ayapel</option>
<option value="Buenavista">Buenavista</option>
<option value="Canalete">Canalete</option>
<option value="Cereté">Cereté</option>
<option value="Chimá">Chimá</option>
<option value="Chinú">Chinú</option>
<option value="CiénagaDeOro">CiénagaDeOro</option>
<option value="Cotorra">Cotorra</option>
<option value="LaApartada">LaApartada</option>
<option value="LosCórdobas">LosCórdobas</option>
<option value="Momil">Momil</option>
<option value="Montelibano">Montelibano</option>
<option value="Montería">Montería</option>
<option value="Moñitos">Moñitos</option>
<option value="PlanetaRica">PlanetaRica</option>
<option value="PuebloNuevo">PuebloNuevo</option>
<option value="PuertoEscondido">PuertoEscondido</option>
<option value="PuertoLibertador">PuertoLibertador</option>
<option value="Purísima">Purísima</option>
<option value="Sahagún">Sahagún</option>
<option value="SanAndrésDeSotavento">SanAndrésDeSotavento</option>
<option value="SanAntero">SanAntero</option>
<option value="SanBernardoDelViento">SanBernardoDelViento</option>
<option value="SanCarlos">SanCarlos</option>
<option value="SanJoséDeUré">SanJoséDeUré</option>
<option value="SanPelayo">SanPelayo</option>
<option value="SantaCruzDeLorica">SantaCruzDeLorica</option>
<option value="Tierralta">Tierralta</option>
<option value="Tuchín">Tuchín</option>
<option value="Valencia">Valencia</option>

</optgroup>
	<optgroup label="Cundinamarca">

<option value="AguaDeDios">AguaDeDios</option>
<option value="Albán">Albán</option>
<option value="Anapoima">Anapoima</option>
<option value="Anolaima">Anolaima</option>
<option value="Apulo">Apulo</option>
<option value="Arbeláez">Arbeláez</option>
<option value="Beltrán">Beltrán</option>
<option value="Bituima">Bituima</option>
<option value="BogotáD.C.">BogotáD.C.</option>
<option value="Bojacá">Bojacá</option>
<option value="Cabrera">Cabrera</option>
<option value="Cachipay">Cachipay</option>
<option value="Cajicá">Cajicá</option>
<option value="Caparrapí">Caparrapí</option>
<option value="Cáqueza">Cáqueza</option>
<option value="CarmenDeCarupa">CarmenDeCarupa</option>
<option value="Chaguaní">Chaguaní</option>
<option value="Chía">Chía</option>
<option value="Chipaque">Chipaque</option>
<option value="Choachí">Choachí</option>
<option value="Chocontá">Chocontá</option>
<option value="Cogua">Cogua</option>
<option value="Cota">Cota</option>
<option value="Cucunubá">Cucunubá</option>
<option value="ElColegio">ElColegio</option>
<option value="ElPeñón">ElPeñón</option>
<option value="ElRosal">ElRosal</option>
<option value="Facatativá">Facatativá</option>
<option value="Fómeque">Fómeque</option>
<option value="Fosca">Fosca</option>
<option value="Funza">Funza</option>
<option value="Fúquene">Fúquene</option>
<option value="Fusagasugá">Fusagasugá</option>
<option value="Gachalá">Gachalá</option>
<option value="Gachancipá">Gachancipá</option>
<option value="Gachetá">Gachetá</option>
<option value="Gama">Gama</option>
<option value="Girardot">Girardot</option>
<option value="Granada">Granada</option>
<option value="Guachetá">Guachetá</option>
<option value="Guaduas">Guaduas</option>
<option value="Guasca">Guasca</option>
<option value="Guataquí">Guataquí</option>
<option value="Guatavita">Guatavita</option>
<option value="GuayabalDeSiquima">GuayabalDeSiquima</option>
<option value="Guayabetal">Guayabetal</option>
<option value="Gutierrez">Gutierrez</option>
<option value="Jerusalen">Jerusalen</option>
<option value="Junín">Junín</option>
<option value="LaCalera">LaCalera</option>
<option value="LaMesa">LaMesa</option>
<option value="LaPalma">LaPalma</option>
<option value="LaPeña">LaPeña</option>
<option value="LaVega">LaVega</option>
<option value="Lenguazaque">Lenguazaque</option>
<option value="Machetá">Machetá</option>
<option value="Madrid">Madrid</option>
<option value="Manta">Manta</option>
<option value="Medina">Medina</option>
<option value="Mosquera">Mosquera</option>
<option value="Nariño">Nariño</option>
<option value="Nemocón">Nemocón</option>
<option value="Nilo">Nilo</option>
<option value="Nimaima">Nimaima</option>
<option value="Nocaima">Nocaima</option>
<option value="Pacho">Pacho</option>
<option value="Paime">Paime</option>
<option value="Pandi">Pandi</option>
<option value="Paratebueno">Paratebueno</option>
<option value="Pasca">Pasca</option>
<option value="PuertoSalgar">PuertoSalgar</option>
<option value="Pulí">Pulí</option>
<option value="Quebradanegra">Quebradanegra</option>
<option value="Quetame">Quetame</option>
<option value="Quipile">Quipile</option>
<option value="Ricaurte">Ricaurte</option>
<option value="SanAntonioDelTequendama">SanAntonioDelTequendama</option>
<option value="SanBernardo">SanBernardo</option>
<option value="SanCayetano">SanCayetano</option>
<option value="SanFrancisco">SanFrancisco</option>
<option value="SanJuanDeRioseco">SanJuanDeRioseco</option>
<option value="Sasaima">Sasaima</option>
<option value="Sesquilé">Sesquilé</option>
<option value="Sibaté">Sibaté</option>
<option value="Silvania">Silvania</option>
<option value="Simijaca">Simijaca</option>
<option value="Soacha">Soacha</option>
<option value="Sopó">Sopó</option>
<option value="Subachoque">Subachoque</option>
<option value="Suesca">Suesca</option>
<option value="Supatá">Supatá</option>
<option value="Susa">Susa</option>
<option value="Sutatausa">Sutatausa</option>
<option value="Tabio">Tabio</option>
<option value="Tausa">Tausa</option>
<option value="Tena">Tena</option>
<option value="Tenjo">Tenjo</option>
<option value="Tibacuy">Tibacuy</option>
<option value="Tibirita">Tibirita</option>
<option value="Tocaima">Tocaima</option>
<option value="Tocancipá">Tocancipá</option>
<option value="Topaipi">Topaipi</option>
<option value="Ubalá">Ubalá</option>
<option value="Ubaque">Ubaque</option>
<option value="Ubate">Ubate</option>
<option value="Une">Une</option>
<option value="Útica">Útica</option>
<option value="Venecia">Venecia</option>
<option value="Vergara">Vergara</option>
<option value="Vianí">Vianí</option>
<option value="Villagomez">Villagomez</option>
<option value="Villapinzón">Villapinzón</option>
<option value="Villeta">Villeta</option>
<option value="Viotá">Viotá</option>
<option value="Yacopí">Yacopí</option>
<option value="Zipacón">Zipacón</option>
<option value="Zipaquirá">Zipaquirá</option>

</optgroup>
	<optgroup label="Guainía">

<option value="Barrancominas">Barrancominas</option>
<option value="Inirida">Inirida</option>

</optgroup>
	<optgroup label="Guaviare">

<option value="Calamar">Calamar</option>
<option value="ElRetorno">ElRetorno</option>
<option value="Miraflores">Miraflores</option>
<option value="SanJoséDelGuaviare">SanJoséDelGuaviare</option>

</optgroup>
	<optgroup label="Huila">

<option value="Acevedo">Acevedo</option>
<option value="Agrado">Agrado</option>
<option value="Aipe">Aipe</option>
<option value="Algeciras">Algeciras</option>
<option value="Altamira">Altamira</option>
<option value="Baraya">Baraya</option>
<option value="Campoalegre">Campoalegre</option>
<option value="Colombia">Colombia</option>
<option value="Elías">Elías</option>
<option value="Garzón">Garzón</option>
<option value="Gigante">Gigante</option>
<option value="Guadalupe">Guadalupe</option>
<option value="Hobo">Hobo</option>
<option value="Iquira">Iquira</option>
<option value="Isnos">Isnos</option>
<option value="LaArgentina">LaArgentina</option>
<option value="LaPlata">LaPlata</option>
<option value="Nátaga">Nátaga</option>
<option value="Neiva">Neiva</option>
<option value="Oporapa">Oporapa</option>
<option value="Paicol">Paicol</option>
<option value="Palermo">Palermo</option>
<option value="Palestina">Palestina</option>
<option value="Pital">Pital</option>
<option value="Pitalito">Pitalito</option>
<option value="Rivera">Rivera</option>
<option value="Saladoblanco">Saladoblanco</option>
<option value="SanAgustín">SanAgustín</option>
<option value="SantaMaría">SantaMaría</option>
<option value="Suaza">Suaza</option>
<option value="Tarqui">Tarqui</option>
<option value="Tello">Tello</option>
<option value="Teruel">Teruel</option>
<option value="Tesalia">Tesalia</option>
<option value="Timaná">Timaná</option>
<option value="Villavieja">Villavieja</option>
<option value="Yaguará">Yaguará</option>

</optgroup>
	<optgroup label="La Guajira">

<option value="Albania">Albania</option>
<option value="Barrancas">Barrancas</option>
<option value="Dibulla">Dibulla</option>
<option value="Distracción">Distracción</option>
<option value="ElMolino">ElMolino</option>
<option value="Fonseca">Fonseca</option>
<option value="Hatonuevo">Hatonuevo</option>
<option value="LaJaguaDelPilar">LaJaguaDelPilar</option>
<option value="Maicao">Maicao</option>
<option value="Manaure">Manaure</option>
<option value="Riohacha">Riohacha</option>
<option value="SanJuanDelCesar">SanJuanDelCesar</option>
<option value="Uribia">Uribia</option>
<option value="Urumita">Urumita</option>
<option value="Villanueva">Villanueva</option>

</optgroup>
	<optgroup label="Magdalena">

<option value="Algarrobo">Algarrobo</option>
<option value="Aracataca">Aracataca</option>
<option value="Ariguaní">Ariguaní</option>
<option value="CerroDeSanAntonio">CerroDeSanAntonio</option>
<option value="Chivolo">Chivolo</option>
<option value="Ciénaga">Ciénaga</option>
<option value="Concordia">Concordia</option>
<option value="ElBanco">ElBanco</option>
<option value="ElPiñón">ElPiñón</option>
<option value="ElRetén">ElRetén</option>
<option value="Fundación">Fundación</option>
<option value="Guamal">Guamal</option>
<option value="NuevaGranada">NuevaGranada</option>
<option value="Pedraza">Pedraza</option>
<option value="PijiñoDelCarmen">PijiñoDelCarmen</option>
<option value="Pivijay">Pivijay</option>
<option value="Plato">Plato</option>
<option value="Puebloviejo">Puebloviejo</option>
<option value="Remolino">Remolino</option>
<option value="SabanasDeSanÁngel">SabanasDeSanÁngel</option>
<option value="Salamina">Salamina</option>
<option value="SanSebastiánDeBuenavista">SanSebastiánDeBuenavista</option>
<option value="SanZenón">SanZenón</option>
<option value="SantaAna">SantaAna</option>
<option value="SantaBárbaraDePinto">SantaBárbaraDePinto</option>
<option value="SantaMarta">SantaMarta</option>
<option value="Sitionuevo">Sitionuevo</option>
<option value="Tenerife">Tenerife</option>
<option value="Zapayán">Zapayán</option>
<option value="ZonaBananera">ZonaBananera</option>

</optgroup>
	<optgroup label="Meta">

<option value="Acacías">Acacías</option>
<option value="BarrancaDeUpía">BarrancaDeUpía</option>
<option value="Cabuyaro">Cabuyaro</option>
<option value="CastillaLaNueva">CastillaLaNueva</option>
<option value="Cubarral">Cubarral</option>
<option value="Cumaral">Cumaral</option>
<option value="ElCalvario">ElCalvario</option>
<option value="ElCastillo">ElCastillo</option>
<option value="ElDorado">ElDorado</option>
<option value="FuenteDeOro">FuenteDeOro</option>
<option value="Granada">Granada</option>
<option value="Guamal">Guamal</option>
<option value="LaMacarena">LaMacarena</option>
<option value="Lejanias">Lejanias</option>
<option value="Mapiripán">Mapiripán</option>
<option value="Mesetas">Mesetas</option>
<option value="PuertoConcordia">PuertoConcordia</option>
<option value="PuertoGaitán">PuertoGaitán</option>
<option value="PuertoLleras">PuertoLleras</option>
<option value="PuertoLópez">PuertoLópez</option>
<option value="PuertoRico">PuertoRico</option>
<option value="Restrepo">Restrepo</option>
<option value="SanCarlosDeGuaroa">SanCarlosDeGuaroa</option>
<option value="SanJuanDeArama">SanJuanDeArama</option>
<option value="SanJuanito">SanJuanito</option>
<option value="SanMartínDeLosLlanos">SanMartínDeLosLlanos</option>
<option value="Uribe">Uribe</option>
<option value="Villavicencio">Villavicencio</option>
<option value="VistaHermosa">VistaHermosa</option>

</optgroup>
	<optgroup label="Nariño">\
<option value="Alban">Alban</option>
<option value="Aldana">Aldana</option>
<option value="Ancuyá">Ancuyá</option>
<option value="Arboleda">Arboleda</option>
<option value="Barbacoas">Barbacoas</option>
<option value="Belén">Belén</option>
<option value="Buesaco">Buesaco</option>
<option value="Chachagüí">Chachagüí</option>
<option value="Colón">Colón</option>
<option value="Consacá">Consacá</option>
<option value="Contadero">Contadero</option>
<option value="Córdoba">Córdoba</option>
<option value="Cuaspud">Cuaspud</option>
<option value="Cumbal">Cumbal</option>
<option value="Cumbitara">Cumbitara</option>
<option value="ElCharco">ElCharco</option>
<option value="ElPeñol">ElPeñol</option>
<option value="ElRosario">ElRosario</option>
<option value="ElTablónDeGómez">ElTablónDeGómez</option>
<option value="ElTambo">ElTambo</option>
<option value="FranciscoPizarro">FranciscoPizarro</option>
<option value="Funes">Funes</option>
<option value="Guachucal">Guachucal</option>
<option value="Guaitarilla">Guaitarilla</option>
<option value="Gualmatán">Gualmatán</option>
<option value="Iles">Iles</option>
<option value="Imués">Imués</option>
<option value="Ipiales">Ipiales</option>
<option value="LaCruz">LaCruz</option>
<option value="LaFlorida">LaFlorida</option>
<option value="LaLlanada">LaLlanada</option>
<option value="LaTola">LaTola</option>
<option value="LaUnión">LaUnión</option>
<option value="Leiva">Leiva</option>
<option value="Linares">Linares</option>
<option value="LosAndes">LosAndes</option>
<option value="MagüiPayán">MagüiPayán</option>
<option value="Mallama">Mallama</option>
<option value="Mosquera">Mosquera</option>
<option value="Nariño">Nariño</option>
<option value="OlayaHerrera">OlayaHerrera</option>
<option value="Ospina">Ospina</option>
<option value="Policarpa">Policarpa</option>
<option value="Potosí">Potosí</option>
<option value="Providencia">Providencia</option>
<option value="Puerres">Puerres</option>
<option value="Pupiales">Pupiales</option>
<option value="Ricaurte">Ricaurte</option>
<option value="RobertoPayán">RobertoPayán</option>
<option value="Samaniego">Samaniego</option>
<option value="SanBernardo">SanBernardo</option>
<option value="SanJuanDePasto">SanJuanDePasto</option>
<option value="SanLorenzo">SanLorenzo</option>
<option value="SanPablo">SanPablo</option>
<option value="SanPedroDeCartago">SanPedroDeCartago</option>
<option value="Sandoná">Sandoná</option>
<option value="SantaBárbara">SantaBárbara</option>
<option value="Santacruz">Santacruz</option>
<option value="Sapuyes">Sapuyes</option>
<option value="Taminango">Taminango</option>
<option value="Tangua">Tangua</option>
<option value="Tumaco">Tumaco</option>
<option value="Túquerres">Túquerres</option>
<option value="Yacuanquer">Yacuanquer</option>

</optgroup>
	<optgroup label="Norte de Santander">

<option value="Abrego">Abrego</option>
<option value="Arboledas">Arboledas</option>
<option value="Bochalema">Bochalema</option>
<option value="Bucarasica">Bucarasica</option>
<option value="Cáchira">Cáchira</option>
<option value="Cácota">Cácota</option>
<option value="Chinácota">Chinácota</option>
<option value="Chitagá">Chitagá</option>
<option value="Convención">Convención</option>
<option value="Cucutilla">Cucutilla</option>
<option value="Durania">Durania</option>
<option value="ElCarmen">ElCarmen</option>
<option value="ElTarra">ElTarra</option>
<option value="ElZulia">ElZulia</option>
<option value="Gramalote">Gramalote</option>
<option value="Hacarí">Hacarí</option>
<option value="Herrán">Herrán</option>
<option value="LaEsperanza">LaEsperanza</option>
<option value="LaPlayaDeBelén">LaPlayaDeBelén</option>
<option value="Labateca">Labateca</option>
<option value="LosPatios">LosPatios</option>
<option value="Lourdes">Lourdes</option>
<option value="Mutiscua">Mutiscua</option>
<option value="Ocaña">Ocaña</option>
<option value="Pamplona">Pamplona</option>
<option value="Pamplonita">Pamplonita</option>
<option value="PuertoSantander">PuertoSantander</option>
<option value="Ragonvalia">Ragonvalia</option>
<option value="SalazarDeLasPalmas">SalazarDeLasPalmas</option>
<option value="SanCalixto">SanCalixto</option>
<option value="SanCayetano">SanCayetano</option>
<option value="SanJoséDeCúcuta">SanJoséDeCúcuta</option>
<option value="Santiago">Santiago</option>
<option value="Sardinata">Sardinata</option>
<option value="Silos">Silos</option>
<option value="Teorama">Teorama</option>
<option value="Tibú">Tibú</option>
<option value="Toledo">Toledo</option>
<option value="VillaCaro">VillaCaro</option>
<option value="VillaDelRosario">VillaDelRosario</option>

</optgroup>
	<optgroup label="Putumayo">

<option value="Colón">Colón</option>
<option value="Mocoa">Mocoa</option>
<option value="Orito">Orito</option>
<option value="PuertoAsís">PuertoAsís</option>
<option value="PuertoCaicedo">PuertoCaicedo</option>
<option value="PuertoGuzmán">PuertoGuzmán</option>
<option value="PuertoLeguizamo">PuertoLeguizamo</option>
<option value="SanFrancisco">SanFrancisco</option>
<option value="SanMiguel">SanMiguel</option>
<option value="Santiago">Santiago</option>
<option value="Sibundoy">Sibundoy</option>
<option value="ValleDelGuamuez">ValleDelGuamuez</option>
<option value="Villagarzón">Villagarzón</option>

</optgroup>
	<optgroup label="Qundío">

<option value="Armenia">Armenia</option>
<option value="Buenavista">Buenavista</option>
<option value="Calarcá">Calarcá</option>
<option value="Circasia">Circasia</option>
<option value="Córdoba">Córdoba</option>
<option value="Filandia">Filandia</option>
<option value="Génova">Génova</option>
<option value="LaTebaida">LaTebaida</option>
<option value="Montenegro">Montenegro</option>
<option value="Pijao">Pijao</option>
<option value="Quimbaya">Quimbaya</option>
<option value="Salento">Salento</option>

</optgroup>
	<optgroup label="Risaralda">

<option value="Apía">Apía</option>
<option value="Balboa">Balboa</option>
<option value="BelénDeUmbría">BelénDeUmbría</option>
<option value="Dosquebradas">Dosquebradas</option>
<option value="Guática">Guática</option>
<option value="LaCelia">LaCelia</option>
<option value="LaVirginia">LaVirginia</option>
<option value="Marsella">Marsella</option>
<option value="Mistrato">Mistrato</option>
<option value="Pereira">Pereira</option>
<option value="PuebloRico">PuebloRico</option>
<option value="Quinchía">Quinchía</option>
<option value="SantaRosaDeCabal">SantaRosaDeCabal</option>
<option value="Santuario">Santuario</option>

</optgroup>
	<optgroup label="San Andrés">

<option value="Providencia">Providencia</option>

</optgroup>
	<optgroup label="Santander">

<option value="Aguada">Aguada</option>
<option value="Albania">Albania</option>
<option value="Aratoca">Aratoca</option>
<option value="Barbosa">Barbosa</option>
<option value="Barichara">Barichara</option>
<option value="Barrancabermeja">Barrancabermeja</option>
<option value="Betulia">Betulia</option>
<option value="Bolívar">Bolívar</option>
<option value="Bucaramanga">Bucaramanga</option>
<option value="Cabrera">Cabrera</option>
<option value="California">California</option>
<option value="Capitanejo">Capitanejo</option>
<option value="Carcasí">Carcasí</option>
<option value="Cepita">Cepita</option>
<option value="Cerrito">Cerrito</option>
<option value="Charalá">Charalá</option>
<option value="Charta">Charta</option>
<option value="Chimá">Chimá</option>
<option value="Chipatá">Chipatá</option>
<option value="Cimitarra">Cimitarra</option>
<option value="Concepción">Concepción</option>
<option value="Confines">Confines</option>
<option value="Contratación">Contratación</option>
<option value="Coromoro">Coromoro</option>
<option value="Curití">Curití</option>
<option value="ElCarmenDeChucurí">ElCarmenDeChucurí</option>
<option value="ElGuacamayo">ElGuacamayo</option>
<option value="ElPeñón">ElPeñón</option>
<option value="ElPlayón">ElPlayón</option>
<option value="Encino">Encino</option>
<option value="Enciso">Enciso</option>
<option value="Florián">Florián</option>
<option value="Floridablanca">Floridablanca</option>
<option value="Galán">Galán</option>
<option value="Gambita">Gambita</option>
<option value="Girón">Girón</option>
<option value="Guaca">Guaca</option>
<option value="Guadalupe">Guadalupe</option>
<option value="Guapota">Guapota</option>
<option value="Guavatá">Guavatá</option>
<option value="Güepsa">Güepsa</option>
<option value="Hato">Hato</option>
<option value="JesúsMaría">JesúsMaría</option>
<option value="Jordán">Jordán</option>
<option value="LaBelleza">LaBelleza</option>
<option value="LaPaz">LaPaz</option>
<option value="Landázuri">Landázuri</option>
<option value="Lebrija">Lebrija</option>
<option value="LosSantos">LosSantos</option>
<option value="Macaravita">Macaravita</option>
<option value="Málaga">Málaga</option>
<option value="Matanza">Matanza</option>
<option value="Mogotes">Mogotes</option>
<option value="Molagavita">Molagavita</option>
<option value="Ocamonte">Ocamonte</option>
<option value="Oiba">Oiba</option>
<option value="Onzaga">Onzaga</option>
<option value="Palmar">Palmar</option>
<option value="PalmasDelSocorro">PalmasDelSocorro</option>
<option value="Paramo">Paramo</option>
<option value="Piedecuesta">Piedecuesta</option>
<option value="Pinchote">Pinchote</option>
<option value="PuenteNacional">PuenteNacional</option>
<option value="PuertoParra">PuertoParra</option>
<option value="PuertoWilches">PuertoWilches</option>
<option value="Rionegro">Rionegro</option>
<option value="SabanaDeTorres">SabanaDeTorres</option>
<option value="SanAndrés">SanAndrés</option>
<option value="SanBenito">SanBenito</option>
<option value="SanGil">SanGil</option>
<option value="SanJoaquin">SanJoaquin</option>
<option value="SanJoséDeMiranda">SanJoséDeMiranda</option>
<option value="SanMiguel">SanMiguel</option>
<option value="SanVicenteDelChucurí">SanVicenteDelChucurí</option>
<option value="SantaBárbara">SantaBárbara</option>
<option value="SantaHelenaDeOpon">SantaHelenaDeOpon</option>
<option value="Simacota">Simacota</option>
<option value="Socorro">Socorro</option>
<option value="Suaita">Suaita</option>
<option value="Sucre">Sucre</option>
<option value="Surata">Surata</option>
<option value="Tona">Tona</option>
<option value="ValleDeSanJosé">ValleDeSanJosé</option>
<option value="Vélez">Vélez</option>
<option value="Vetas">Vetas</option>
<option value="Villanueva">Villanueva</option>
<option value="Zapatoca">Zapatoca</option>

</optgroup>
	<optgroup label="Sucre">

<option value="Buenavista">Buenavista</option>
<option value="Caimito">Caimito</option>
<option value="Chalan">Chalan</option>
<option value="Coloso">Coloso</option>
<option value="Corozal">Corozal</option>
<option value="Coveñas">Coveñas</option>
<option value="ElRoble">ElRoble</option>
<option value="Galeras">Galeras</option>
<option value="Guaranda">Guaranda</option>
<option value="LaUnión">LaUnión</option>
<option value="LosPalmitos">LosPalmitos</option>
<option value="Majagual">Majagual</option>
<option value="Morroa">Morroa</option>
<option value="Ovejas">Ovejas</option>
<option value="SanAntonioDePalmito">SanAntonioDePalmito</option>
<option value="Sampues">Sampues</option>
<option value="SanBenitoAbad">SanBenitoAbad</option>
<option value="SanJuanDeBetulia">SanJuanDeBetulia</option>
<option value="SanMarcos">SanMarcos</option>
<option value="SanOnofre">SanOnofre</option>
<option value="SanPedro">SanPedro</option>
<option value="Sincé">Sincé</option>
<option value="Sincelejo">Sincelejo</option>
<option value="Sucre">Sucre</option>
<option value="SantiagoDeTolú">SantiagoDeTolú</option>
<option value="Toluviejo">Toluviejo</option>

</optgroup>
	<optgroup label="Tolima">

<option value="Alpujarra">Alpujarra</option>
<option value="Alvarado">Alvarado</option>
<option value="Ambalema">Ambalema</option>
<option value="Anzoátegui">Anzoátegui</option>
<option value="Armero">Armero</option>
<option value="Ataco">Ataco</option>
<option value="Cajamarca">Cajamarca</option>
<option value="CarmenDeApicalá">CarmenDeApicalá</option>
<option value="Casabianca">Casabianca</option>
<option value="Chaparral">Chaparral</option>
<option value="Coello">Coello</option>
<option value="Coyaima">Coyaima</option>
<option value="Cunday">Cunday</option>
<option value="Dolores">Dolores</option>
<option value="ElEspinal">ElEspinal</option>
<option value="Falan">Falan</option>
<option value="Flandes">Flandes</option>
<option value="Fresno">Fresno</option>
<option value="ElGuamo">ElGuamo</option>
<option value="Herveo">Herveo</option>
<option value="Honda">Honda</option>
<option value="Ibagué">Ibagué</option>
<option value="Icononzo">Icononzo</option>
<option value="Lérida">Lérida</option>
<option value="Libano">Libano</option>
<option value="Mariquita">Mariquita</option>
<option value="Melgar">Melgar</option>
<option value="Murillo">Murillo</option>
<option value="Natagaima">Natagaima</option>
<option value="Ortega">Ortega</option>
<option value="Palocabildo">Palocabildo</option>
<option value="Piedras">Piedras</option>
<option value="Planadas">Planadas</option>
<option value="Prado">Prado</option>
<option value="Purificación">Purificación</option>
<option value="Rioblanco">Rioblanco</option>
<option value="Roncesvalles">Roncesvalles</option>
<option value="Rovira">Rovira</option>
<option value="Saldaña">Saldaña</option>
<option value="SanAntonio">SanAntonio</option>
<option value="SanLuis">SanLuis</option>
<option value="SantaIsabel">SantaIsabel</option>
<option value="Suarez">Suarez</option>
<option value="ValleDeSanJuan">ValleDeSanJuan</option>
<option value="Venadillo">Venadillo</option>
<option value="Villahermosa">Villahermosa</option>
<option value="Villarrica">Villarrica</option>

</optgroup>
	<optgroup label="Valle del Cauca">

<option value="Alcalá">Alcalá</option>
<option value="Andalucía">Andalucía</option>
<option value="Ansermanuevo">Ansermanuevo</option>
<option value="Argelia">Argelia</option>
<option value="Bolívar">Bolívar</option>
<option value="Buenaventura">Buenaventura</option>
<option value="GuadalajaraDeBuga">GuadalajaraDeBuga</option>
<option value="Bugalagrande">Bugalagrande</option>
<option value="Caicedonia">Caicedonia</option>
<option value="CalimaDelDarién">CalimaDelDarién</option>
<option value="Candelaria">Candelaria</option>
<option value="Cartago">Cartago</option>
<option value="Dagua">Dagua</option>
<option value="ElÁguila">ElÁguila</option>
<option value="ElCairo">ElCairo</option>
<option value="ElCerrito">ElCerrito</option>
<option value="ElDovio">ElDovio</option>
<option value="Florida">Florida</option>
<option value="Ginebra">Ginebra</option>
<option value="Guacarí">Guacarí</option>
<option value="Jamundí">Jamundí</option>
<option value="LaCumbre">LaCumbre</option>
<option value="LaUnión">LaUnión</option>
<option value="LaVictoria">LaVictoria</option>
<option value="Obando">Obando</option>
<option value="Palmira">Palmira</option>
<option value="Pradera">Pradera</option>
<option value="Restrepo">Restrepo</option>
<option value="Riofrio">Riofrio</option>
<option value="Roldanillo">Roldanillo</option>
<option value="SanPedro">SanPedro</option>
<option value="SantiagoDeCali">SantiagoDeCali</option>
<option value="Sevilla">Sevilla</option>
<option value="Toro">Toro</option>
<option value="Trujillo">Trujillo</option>
<option value="Tuluá">Tuluá</option>
<option value="Ulloa">Ulloa</option>
<option value="Versalles">Versalles</option>
<option value="Vijes">Vijes</option>
<option value="Yotoco">Yotoco</option>
<option value="Yumbo">Yumbo</option>
<option value="Zarzal">Zarzal</option>

</optgroup>
	<optgroup label="Vaupés">

<option value="Caruru">Caruru</option>
<option value="Mitú">Mitú</option>
<option value="Taraira">Taraira</option>

</optgroup>
	<optgroup label="Vichada">

<option value="Cumaribo">Cumaribo</option>
<option value="LaPrimavera">LaPrimavera</option>
<option value="PuertoCarreño">PuertoCarreño</option>
<option value="SantaRosalía">SantaRosalía</option>
   
</optgroup>

                                </select>
                                <label for="fecha_e" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Fecha de expedición del documento</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  type="date" min="0" maxlength="10" id="fecha_e" name="fecha_e" class="camposgenerales" >
                                

                                <label for="estado_c" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Lugar de Nacimiento</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required id="estado_c" name="estado_c" class="camposgenerales" > 
                                       
                            
                                <label for="t_persona" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p> Tipo de Persona</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="t_persona" name="t_persona" class="camposgenerales" > 
                                    <option value = ""> Por favor selecciona </option>
                                    <option value = "1"> Natural </option>
                                    <option value = "2"> Juridica </option>
                                </select>
                               
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
                                        <p>Teléfono Celular</p>
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
                                <input required type="email" id="correo" name="correo" class="camposgenerales">
                                
                                <label for="password"  class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Contraseña Cobru</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="password" id="password" name="password" class="camposgenerales"><br>
                                
                                <label for="idioma" class="titulosa">
                                <ul class="lista" >
                                    <li>
                                        <p>Idioma nativo</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="idioma" name="idioma" class="camposgenerales" onchange="cambiar_idioma(this)" >
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
                                
                                <label for="idioma_adicional" class="titulosa">
                                    <ul class="lista" >
                                        <li> 
                                            <p>Idiomas adicionales</p>
                                        </li> 
                                    </ul>
                                </label>
                                <input id="idioma_adicional" name="idioma_adicional" class="camposgenerales" >

                                <input  class="check" id="nativo" name="nativo" type="hidden"  >
                            <!-- <label for="Femenino" class="labels">Nativo</label> -->
                                
                                    <input required="required" required  type="hidden" id="url_cert_formacion1" name="url_cert_formacion1">
                                    <label for="certificado1" >
                                        <ul class="lista" >
                                            <li> 
                                                <p>Adjuntar Foto del Documento por delante</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </li> 
                                        </ul>
                                    </label>
                                    <div class="file-select" id="certificadoes" align="center" style="margin-left: 30px">
                                        <input required="required" required  type="file" id="certificado1" name="certificado1" onchange="Adjuntar_certificado1(this)" class="camposcertificados"><br>
                                    </div>
                                    <br>
                                    <input required="required" required  type="hidden" id="url_cert_formacion2" name="url_cert_formacion2">
                                    <label for="certificado2" >
                                        <ul class="lista" >
                                            <li> 
                                                <p>Adjuntar Foto del Documento por detras</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                            </li> 
                                        </ul>
                                    </label>
                                    <div class="file-select" id="certificadoes" align="center" style="margin-left: 30px">
                                        <input required="required" required  type="file" id="certificado2" name="certificado2" onchange="Adjuntar_certificado2(this)" class="camposcertificados"><br>
                                    </div>
                                    <br>
                                    <input required="required" required  type="hidden" id="url_cert_formacion3" name="url_cert_formacion3">
                                    <label for="certificado" >
                                        <ul class="lista" >
                                            <li> 
                                                <p>Adjuntar hoja de vida y certificaciones (pdf)</p>
                                            </li> 
                                        </ul>
                                    </label>
                                    <div class="file-select" id="certificadoes" align="center" style="margin-left: 30px">
                                        <input required="required" required  type="file" id="certificado3" name="certificado3" onchange="Adjuntar_certificado3(this)" class="camposcertificados"><br>
                                    </div>
                    </div>
                    <div align="center" class="flex-item-right2" ><br><br>
                        <label for="nombre" >
                            <input type="hidden" name="url_image" id="url_image">
                            <input type="hidden" name="url_image_name" id="url_image_name">
                                    
                            <img src="img/foto.png" id="image_perfil" class="imgfoto" alt=""/>
                        </label>
                        <br>
                        <div class="file-select" id="fotoes" align="center" style="margin-left: -90px">
                            <input  required type="file" name="fotoes" id="foto" accept="image/*"  onchange = "AdjuntarImagen(this)" >
                        </div>   <br><br><br>
                       
                        <div class="popup" onclick="mostrar()"> 
                            <img src="img/logo_cobru.svg" style="margin-left:-100px" alt="">
                                <span style='color:#fff; font-size:20' class="popuptext" id="myPopup">Pasarela de pago & Billetera</span>
                        </div>

<script>
// When the user clicks on div, open the popup
function mostrar() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>
                    </div>
                </div>
            </div>
            <br>
            
        </div>
       

        <!-- Fin Informacion Personal -->
         <!-- TERMINOS  -->
        
            <div class="fondorosa">
                <ul class="lista">
                    <div style="text-align: justify; margin-right: 30px "><br>
                        <li> 
                            <p style="display: contents;"> Al enviar tu postulación nos autorizas a enviar tu información a nuestros evaluadores. Tu solicitud será considerada exclusivamente para aplicar como contratista independiente en Guru´s Center y no para obtener alguna posición como nuestro empleado.</p>
                        </li> 
                    </div>
                </ul>
                </a>
                <input required type="checkbox" name="acepto" value="acepto" class="check4" >
                <label for="acepto" class="texto">
                    <p>&nbsp;&nbsp;<a href="terminos.pdf" download="terminos.pdf">Acepto los términos y condiciones.</a></p>
                </label>
                <br>
                <input required type="checkbox" name="18" value="18" class="check4">
                <label for="18" class="texto"> 
                    <p>&nbsp;&nbsp;Certifico que soy mayor de 18 años.</p>
                </label>
                <br>
                
                <input required type="checkbox" name="politicas" value="politicas" class="check4">
                <label for="18" class="tedatos.pdfxto"> 
                    <p>&nbsp;&nbsp;<a href="datos.pdf" download="terminos.pdf">Aceptar política de tratamiento de datos.</a></p>
                </label>

                <br>
                
                <input required type="checkbox" name="contrato" value="contrato" class="check4">
                <label for="18" class="texto"> 
                    <p>&nbsp;&nbsp;<a>Acepto consulta en centrales de riesgo.</a></p>
                </label><br>
                
                <input required type="checkbox" name="datacredito" value="datacredito" class="check4">
                <label for="18" class="tedatos.pdfxto"> 
                    <p>&nbsp;&nbsp;<a href="contrato.pdf" download="contrato.pdf">Acepto las condiciones del Contrato.</a></p>
                </label>
                </div>
            </div>
            <div align="center" class="fondoblanco" >
                <br><br>
                <!--<button style="width:200px" type="submit"  onclick="alerta();"><img src="img/envio.png" alt="" style="width: 100%;" /> </button>-->
                <button style="width:200px" type="sbmit"  onclick="alerta();"><img src="img/envio.png" alt="" style="width: 100%;" /> </button>
                <button style="width:200px" type="button"  onclick="borrar1();"><img src="img/cancelo.png" alt="" style="width: 100%;"  /> </button> <br><br>
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

        
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
        <link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.css" rel="stylesheet"/>

        <script src="js/site.js"></script>
        <script src="js/registro.js"></script>
     </body>   
</html>
