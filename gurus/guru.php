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
                    if(isset($_POST['especialista'])){
                        echo $_POST['especialista'];
                    } ?>">
                    <input type="hidden" name="Preparacion_fisica" id="Preparacion_fisica" value="<?php 
                    if(isset($_POST['Preparacion_fisica'])){
                        echo $_POST['Preparacion_fisica'];
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
                                <input required type="text" id="ciudad" name="ciudad" class="camposgenerales" onkeypress="return soloLetras(event)">

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
        <img src="img/barbancof.png"  width="100%" height="auto" alt=""  />
        <br><br>
        <div align="left">
        <h5 > 
            <input required type="radio" checked value="ok" id="ok" name="ok" class="camposradio">
            <label for="ok" style="font-size:22px">* Esta Tarjeta es GRATUITA y hace parte de nuestra plataforma, con el proceso de registro. </label>&nbsp;&nbsp;&nbsp;
            <label for="ok" style="font-size:22px; margin-left: 3.5%;">En caso de NO ser aprobado por la entidad bancaria, NO TE PREOCUPES!!! Eres bienvenido a nuestra COMUNIDAD GURUXY.</label>&nbsp;&nbsp;&nbsp;
        </h5>   
              

       <a style= " margin-left: 3%; font-size:24px" > Beneficios de la tarjeta de Crédito Digital:</a>
       </div>
 

     <a style= " margin-left: 3%; font-size:18px"> ¡Tú tienes el poder, el control es tuyo!</a>
<div style= "margin-left:3%; margin-right:3%">

    <h6 style= "color: #000">
    <h6><a style= "font-size:18px"> ¿Cuál es la mejor oficina para manejar tu dinero? ¡El celular! Desarrollamos una experiencia digital para que puedas hacer fácilmente todas tus transacciones desde casa o donde te encuentres! </h6>
    <ul>
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">Recibir los recursos</strong> <a style= "font-size:18px">de tus servicios profesionales y transferirlos a tu Tarjeta de Crédito. </li> 
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">100% Humano</strong><a style= "font-size:18px">, Atendemos personalmente todos nuestros canales de servicio.</li>
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">Tarjeta 100% digital</strong><a style= "font-size:18px">, Descubre una App realmente diferente. Adiós al papeleo y a las sucursales. Nuevas y mejores funcionalidades.</li>
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">$0 cuota de manejo* </strong><a style= "font-size:18px">, Somos eficientes y No tendrás que pagar cuota de manejo, No existe contrato con la letra pequeña.</li>
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">20% de descuento* </strong><a style= "font-size:18px">en la tasa de interés vigente.</li>
        <li style= "color: #000; font-size:15px">Devolución de <strong style= "font-size:20px">$30.000* </strong><a style= "font-size:18px"> si la primera compra es igual o superior a $200.000 dentro de los 3 meses a partir de la fecha de activación de la tarjeta.</li>
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">Compras seguras</strong> <a style= "font-size:18px">y sin contacto por medio de QR.</li>
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">Seguros y asistencias Visa.</strong></li>
        <li style= "color: #000; font-size:15px"><strong style= "font-size:20px">Te devolvemos</strong><a style= "font-size:18px"> el 1% de las compras diferidas.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">Adicionalmente desde tu celular tienes una experiencia digital para que puedas realizar fácilmente todas tus transacciones desde casa.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">Podrás tener el control sobre tu vida financiera</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">Encontraras la mejor versión para tu vida financiera.</li>
        <br>
        <a style= "font-size:18px">*Solo aplica para TDC digital Banco Finandina.</a>
    </ul>
    <h6>
    <h4><a style= "font-size:18px"> Siendo parte de la comunidad </a><a style= "color: #462161"> GURUXY </a><a style= "font-size:18px">podrás disfrutar de muchos productos y servicios.</h4>
    <br>
    <h6>
        <ul>
            <li style= "color: #000;"><a style= "font-size:18px">Obtendrás un descuento del 15% permanentemente por la compra de productos y servicios en la plataforma.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Podrás realizar cuantas consultas requieras, ya que tendrás una tarjeta asociada al pago.</li>                
            <li style= "color: #000;"><a style= "font-size:18px">Pagarás tu cuota de manejo solo los meses en que utilices la Tarjeta o tengas alguna deuda pendiente. </li>
            <li style= "color: #000;"><a style= "font-size:18px">Escogerás el tiempo que deseas pagar tu compra.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Disfrutarás de descuentos exclusivos todas las semanas del año en la COMUNIDAD GURUXY.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Tendrás la opción de realizar avances de tu cupo de crédito.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Las condiciones señaladas aplican solo para la Tarjeta de crédito Digital del Banco finandina.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Aplican terminos y condiciones.</li>
        </ul>
        <br> <br>
        <div align="center">
            <img src="img/logobancolargo.png"  width="40%" height="auto" alt=""  />
        </div>
        <br><br>

    </h6 >
</div>
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
