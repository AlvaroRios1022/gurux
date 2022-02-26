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
            
            

           
        </script>
        <style>
        :checked {
            margin-left: 25px;
            border: 1px solid blue;
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
            
            

           
        </script>

            <!-- Informacion Personal -->

            

            <div  class="flex-container"  align="center">
                <div align="left">
                <br>
                <img style="width:250px; " src="images/logo.png"/> 
                </div>
                <div align="center" >
                <br>
                    <img style="width:50%; " src="img/headert12en.png" /> 
                </div>            
            </div>  
            <br>

            <div style="background-color:#fff">
            <img src="img/resumen.png"  width="100%" height="auto" alt="" />
            </div>
            <div  class="flex-container" style="background-color: #E3DAEC;" align="left">
                <div class="flex-item-left">
                    <img src="img/bienvienidos3en.png"  width="80%" height="auto" alt="" />
  
                            
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
                    }  ?>">
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
                    <img src="img/personalen.png"  width="100%" height="auto" alt=""  />
                    <div id="" class="fondoblanco">   
                        <div  class="flex-container" class="fondoblanco" align="left">
                            <div class="flex-item-left">
                                <br>
                                <label for="nombre" class="titulosa"  >
                                <ul class="lista">
                                    <li> 
                                        <p >Name </p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)">
                                <label for="nombre" class="titulosa"  >
                                <ul class="lista">
                                    <li> 
                                        <p >Last name</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" id="nombre" name="nombre" class="camposgenerales" required onkeypress="return soloLetras(event)"><br>

                                <label for="tipo" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p >Document type</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="tipo_doc" name="tipo_doc" class="camposgenerales"  > 
                                <option value = ""> Please select </option>
                                         <option value = "0"> CC </option>
                                         <option value = "1"> CE </option>
                                         <option value = "2"> TI </option>
                                         <option value = "3"> NIT </option>                     
                                         <option value = "4"> PSP </option>

                                </select>

                                <label for="documento" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Document No.</p>
                                        
                                    </li> 
                                </ul>
                                </label>
                                <input  required type="text" min="0" id="documento" name="documento" class="camposgenerales" onkeypress='return validaNumericos(event)'><br>

                                
                                <label for="fecha"class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Date of Birth</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="date" id="fecha" min="<?php echo $nuevafechanacido ?>" name="fecha" max="<?php echo $nuevafecha ?>" class="camposgenerales" onkeypress="return validarFechaMenorActual(event)">

                                <label for="Genero" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Gender</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="tipo_doc" name="tipo_doc" class="camposgenerales"  > 
                                <option value = ""> Please select </option>
                                         <option value = "0"> - </option>
                                         <option value = "1"> M </option>
                                         <option value = "2"> F </option>

                                </select>
                                
                                <label for="pais" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Country of residence</p>
                                    </li> 
                                </ul>
                                </label>
                                <select  required id="pais" name="pais" class="camposgenerales" > 
                                <option value = ""> Please select </option>
                                    <option value = "AFGANISTAN"> AFGANISTAN </option>
                                    <option value = "ALBANIA"> ALBANIA </option>
                                    <option value = "GERMANY"> GERMANY </option>
                                    <option value = "ANDORRA"> ANDORRA </option>
                                    <option value = "ANGOLA"> ANGOLA </option>
                                    <option value = "ANGUILLA"> ANGUILLA </option>
                                    <option value = "ANTIGUA AND BARBUDA"> ANTIGUA AND BARBUDA </option>
                                    <option value = "NETHERLANDS ANTILLES"> NETHERLANDS ANTILLES </option>
                                    <option value = "SAUDI ARABIA"> SAUDI ARABIA </option>
                                    <option value = "ALGERIA"> ALGERIA </option>
                                    <option value = "ARGENTINA"> ARGENTINA </option>
                                    <option value = "ARMENIA"> ARMENIA </option>
                                    <option value = "ARUBA"> ARUBA </option>
                                    <option value = "AUSTRALIA"> AUSTRALIA </option>
                                    <option value = "AUSTRIA"> AUSTRIA </option>
                                    <option value = "AZERBAIYAN"> AZERBAIYAN </option>
                                    <option value = "BAHAMAS"> BAHAMAS </option>
                                    <option value = "BAHRAIN"> BAHRAIN </option>
                                    <option value = "BANGLADESH"> BANGLADESH </option>
                                    <option value = "BARBADOS"> BARBADOS </option>
                                    <option value = "BELARUS"> BELARUS </option>
                                    <option value = "BELGIUM"> BELGIUM </option>
                                    <option value = "BELIZE"> BELIZE </option>
                                    <option value = "BENIN"> BENIN </option>
                                    <option value = "BERMUDA SHORTS"> BERMUDA SHORTS </option>
                                    <option value = "BHUTAN"> BHUTAN </option>
                                    <option value = "BOLIVIA"> BOLIVIA </option>
                                    <option value = "BOSNIA AND HERZEGOVINA"> BOSNIA AND HERZEGOVINA </option>
                                    <option value = "BOTSWANA"> BOTSWANA </option>
                                    <option value = "BRAZIL"> BRAZIL </option>
                                    <option value = "BRUNEI"> BRUNEI </option>
                                    <option value = "BULGARIA"> BULGARIA </option>
                                    <option value = "BURKINA FASO"> BURKINA FASO </option>
                                    <option value = "BURUNDI"> BURUNDI </option>
                                    <option value = "CAPE VERDE"> CAPE VERDE </option>
                                    <option value = "CAMBODIA"> CAMBODIA </option>
                                    <option value = "CAMEROON"> CAMEROON </option>
                                    <option value = "CANADA"> CANADA </option>
                                    <option value = "CHAD"> CHAD </option>
                                    <option value = "CHILE"> CHILE </option>
                                    <option value = "CHINA"> CHINA </option>
                                    <option value = "CYPRUS"> CYPRUS </option>
                                    <option value = "COLOMBIA"> COLOMBIA </option>
                                    <option value = "COMORES"> COMORES </option>
                                    <option value = "CONGO"> CONGO </option>
                                    <option value = "KOREA"> KOREA </option>
                                    <option value = "NORTH KOREA"> NORTH KOREA </option>
                                    <option value = "IVORY COAST"> IVORY COAST </option>
                                    <option value = "COSTA RICA"> COSTA RICA </option>
                                    <option value = "CROATIA"> CROATIA </option>
                                    <option value = "CUBA"> CUBA </option>
                                    <option value = "DENMARK"> DENMARK </option>
                                    <option value = "DJIBOUTI"> DJIBOUTI </option>
                                    <option value = "DOMINICA"> DOMINICA </option>
                                    <option value = "ECUADOR"> ECUADOR </option>
                                    <option value = "EGYPT"> EGYPT </option>
                                    <option value = "EL SALVADOR"> EL SALVADOR </option>
                                    <option value = "UNITED ARAB EMIRATES"> UNITED ARAB EMIRATES </option>
                                    <option value = "ERITREA"> ERITREA </option>
                                    <option value = "SLOVENIA"> SLOVENIA </option>
                                    <option value = "SPAIN"> SPAIN </option>
                                    <option value = "UNITED STATES OF AMERICA"> UNITED STATES OF AMERICA </option>
                                    <option value = "ESTONIA"> ESTONIA </option>
                                    <option value = "ETHIOPIA"> ETHIOPIA </option>
                                    <option value = "FIJI"> FIJI </option>
                                    <option value = "PHILIPPINES"> PHILIPPINES </option>
                                    <option value = "FINLAND"> FINLAND </option>
                                    <option value = "FRANCE"> FRANCE </option>
                                    <option value = "GABON"> GABON </option>
                                    <option value = "GAMBIA"> GAMBIA </option>
                                    <option value = "GEORGIA"> GEORGIA </option>
                                    <option value = "GHANA"> GHANA </option>
                                    <option value = "GIBRALTAR"> GIBRALTAR </option>
                                    <option value = "GRANADA"> GRANADA </option>
                                    <option value = "GREECE"> GREECE </option>
                                    <option value = "GREENLAND"> GREENLAND </option>
                                    <option value = "GUADALUPE"> GUADALUPE </option>
                                    <option value = "GUAM"> GUAM </option>
                                    <option value = "GUATEMALA"> GUATEMALA </option>
                                    <option value = "FRENCH GUAYANA"> FRENCH GUAYAN </option>
                                    <option value = "GUERNESEY"> GUERNESEY </option>
                                    <option value = "GUINEA"> GUINEA </option>
                                    <option value = "EQUATORIAL GUINEA"> EQUATORIAL GUINEA </option>
                                    <option value = "GUINEA-BISSAU"> GUINEA-BISSAU </option>
                                    <option value = "GUYANA"> GUYANA </option>
                                    <option value = "HAITI"> HAITI </option>
                                    <option value = "HONDURAS"> HONDURAS </option>
                                    <option value = "HONG KONG"> HONG KONG </option>
                                    <option value = "HUNGARY"> HUNGARY </option>
                                    <option value = "INDIA"> INDIA </option>
                                    <option value = "INDONESIA"> INDONESIA </option>
                                    <option value = "IRAN"> IRAN </option>
                                    <option value = "IRAQ"> IRAQ </option>
                                    <option value = "IRELAND"> IRELAND </option>
                                    <option value = "ISLE OF MAN"> ISLE OF MAN </option>
                                    <option value = "NORFOLK ISLAND"> NORFOLK ISLAND </option>
                                    <option value = "ICELAND"> ICELAND </option>
                                    <option value = "ALAND ISLANDS"> ALAND ISLANDS </option>
                                    <option value = "CAYMAN ISLANDS"> CAYMAN ISLANDS </option>
                                    <option value = "COOK ISLANDS"> COOK ISLANDS </option>
                                    <option value = "CANAL ISLANDS"> CANAL ISLANDS </option>
                                    <option value = "Faroe Islands"> Faroe Islands </option>
                                    <option value = "ISLAS FALVINAS"> ISLAS MALVINAS </option>
                                    <option value = "NORTHERN MARIAN ISLANDS"> NORTHERN MARIAN ISLANDS </option>
                                    <option value = "MARSHALL ISLANDS"> MARSHALL ISLANDS </option>
                                    <option value = "PITCAIRN ISLANDS"> PITCAIRN ISLANDS </option>
                                    <option value = "SOLOMON ISLANDS"> SOLOMON ISLANDS </option>
                                    <option value = "TURKS AND CAICOS ISLANDS"> TURKISH AND CAICOS ISLANDS </option>
                                    <option value = "BRITISH VIRGIN ISLANDS"> BRITISH VIRGIN ISLANDS </option>
                                    <option value = "VIRGIN ISLANDS OF THE UNITED STATES"> VIRGIN ISLANDS OF THE UNITED STATES </option>
                                    <option value = "ISRAEL"> ISRAEL </option>
                                    <option value = "ITALY"> ITALY </option>
                                    <option value = "JAMAICA"> JAMAICA </option>
                                    <option value = "JAPAN"> JAPAN </option>
                                    <option value = "JERSEY"> JERSEY </option>
                                    <option value = "JORDAN"> JORDAN </option>
                                    <option value = "KAZAJSTAN"> KAZAJSTAN </option>
                                    <option value = "KENYA"> KENYA </option>
                                    <option value = "KYRGYSTAN"> KYRGYSTAN </option>
                                    <option value = "KIRIBATI"> KIRIBATI </option>
                                    <option value = "KUWAIT"> KUWAIT </option>
                                    <option value = "LAOS"> LAOS </option>
                                    <option value = "LESOTHO"> LESOTHO </option>
                                    <option value = "LATVIA"> LATVIA </option>
                                    <option value = "LEBANON"> LEBANON </option>
                                    <option value = "LIBERIA"> LIBERIA </option>
                                    <option value = "LIBYA"> LIBYA </option>
                                    <option value = "LIECHTENSTEIN"> LIECHTENSTEIN </option>
                                    <option value = "LITHUANIA"> LITHUANIA </option>
                                    <option value = "LUXEMBOURG"> LUXEMBOURG </option>
                                    <option value = "MACAO"> MACAO </option>
                                    <option value = "MACEDONIA"> MACEDONIA </option>
                                    <option value = "MADAGASCAR"> MADAGASCAR </option>
                                    <option value = "MALAYSIA"> MALAYSIA </option>
                                    <option value = "MALAWI"> MALAWI </option>
                                    <option value = "MALDIVES"> MALDIVES </option>
                                    <option value = "MALI"> MALI </option>
                                    <option value = "MALTA"> MALTA </option>
                                    <option value = "MOROCCO"> MOROCCO </option>
                                    <option value = "MARTINICA"> MARTINICA </option>
                                    <option value = "MAURITIUS"> MAURITIUS </option>
                                    <option value = "MAURITANIA"> MAURITANIA </option>
                                    <option value = "MAYOTTE"> MAYOTTE </option>
                                    <option value = "MEXICO"> MEXICO </option>
                                    <option value = "MICRONESIA"> MICRONESIA </option>
                                    <option value = "MOLDOVA"> MOLDOVA </option>
                                    <option value = "MONACO"> MONACO </option>
                                    <option value = "MONGOLIA"> MONGOLIA </option>
                                    <option value = "MONTENEGRO"> MONTENEGRO </option>
                                    <option value = "MONTSERRAT"> MONTSERRAT </option>
                                    <option value = "MOZAMBIQUE"> MOZAMBIQUE </option>
                                    <option value = "MYANMAR"> MYANMAR </option>
                                    <option value = "NAMIBIA"> NAMIBIA </option>
                                    <option value = "NAURU"> NAURU </option>
                                    <option value = "NEPAL"> NEPAL </option>
                                    <option value = "NICARAGUA"> NICARAGUA </option>
                                    <option value = "NIGER"> NIGER </option>
                                    <option value = "NIGERIA"> NIGERIA </option>
                                    <option value = "NIUE"> NIUE </option>
                                    <option value = "NORWAY"> NORWAY </option>
                                    <option value = "NEW CALEDONIA"> NEW CALEDONIA </option>
                                    <option value = "NEW ZEALAND"> NEW ZEALAND </option>
                                    <option value = "OMAN"> OMAN </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF NORTH AMERICA"> OTHER COUNTRIES OR TERRITORIES OF NORTH AMERICA </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF SOUTH AMERICA"> OTHER COUNTRIES OR TERRITORIES OF SOUTH AMERICA </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF AFRICA"> OTHER COUNTRIES OR TERRITORIES OF AFRICA </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF ASIA"> OTHER COUNTRIES OR TERRITORIES OF ASIA </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF THE EUROPEAN UNION"> OTHER COUNTRIES OR TERRITORIES OF THE EUROPEAN UNION </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF OCEANIA"> OTHER COUNTRIES OR TERRITORIES OF OCEANIA </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF THE CARIBBEAN AND CENTRAL AMERICA"> OTHER COUNTRIES OR TERRITORIES OF THE CARIBBEAN AND CENTRAL AMERICA </option>
                                    <option value = "OTHER COUNTRIES OR TERRITORIES OF THE REST OF EUROPE"> OTHER COUNTRIES OR TERRITORIES OF THE REST OF EUROPE </option>
                                    <option value = "NETHERLANDS"> NETHERLANDS </option>
                                    <option value = "PAKISTAN"> PAKISTAN </option>
                                    <option value = "PALAOS"> PALAOS </option>
                                    <option value = "PALESTINE"> PALESTINE </option>
                                    <option value = "PANAMA"> PANAMA </option>
                                    <option value = "PAPUA NEW GUINEA"> PAPUA NEW GUINEA </option>
                                    <option value = "PARAGUAY"> PARAGUAY </option>
                                    <option value = "PERU"> PERU </option>
                                    <option value = "FRENCH POLYNESIA"> FRENCH POLYNESIA </option>
                                    <option value = "POLAND"> POLAND </option>
                                    <option value = "PORTUGAL"> PORTUGAL </option>
                                    <option value = "PUERTO RICO"> PUERTO RICO </option>
                                    <option value = "QATAR"> QATAR </option>
                                    <option value = "UNITED KINGDOM"> UNITED KINGDOM </option>
                                    <option value = "DEMOCRATIC REP OF CONGO"> DEMOCRATIC REP OF CONGO </option>
                                    <option value = "CENTRAL AFRICAN REPUBLIC"> CENTRAL AFRICAN REPUBLIC </option>
                                    <option value = "CZECH REPUBLIC"> CZECH REPUBLIC </option>
                                    <option value = "DOMINICAN REPUBLIC"> DOMINICAN REPUBLIC </option>
                                    <option value = "SLOVAK REPUBLIC"> SLOVAK REPUBLIC </option>
                                    <option value = "REUNION"> REUNION </option>
                                    <option value = "RWANDA"> RWANDA </option>
                                    <option value = "ROMANIA"> ROMANIA </option>
                                    <option value = "RUSSIA"> RUSSIA </option>
                                    <option value = "WESTERN SAHARA"> WESTERN SAHARA </option>
                                    <option value = "SAMOA"> SAMOA </option>
                                    <option value = "SAMOA AMERICANA"> SAMOA AMERICANA </option>
                                    <option value = "SAN BARTOLOME"> SAN BARTOLOME </option>
                                    <option value = "SAN CRISTOBAL Y NIEVES"> SAN CRISTOBAL Y NIEVES </option>
                                    <option value = "SAN MARINO"> SAN MARINO </option>
                                    <option value = "SAN MARTIN (FRENCH PART)"> SAN MARTIN (FRENCH PART) </option>
                                    <option value = "SAN PEDRO Y MIQUELON"> SAN PEDRO Y MIQUELON </option>
                                    <option value = "SAINT VINCENT AND THE GRENADINES"> SAINT VINCENT AND THE GRENADINES </option>
                                    <option value = "SANTA HELENA"> SANTA HELENA </option>
                                    <option value = "SANTA LUCIA"> SANTA LUCIA </option>
                                    <option value = "SANTA SEDE"> SANTA SEDE </option>
                                    <option value = "SANTO TOME AND PRINCIPE"> SANTO TOME AND PRINCIPE </option>
                                    <option value = "SENEGAL"> SENEGAL </option>
                                    <option value = "SERBIA"> SERBIA </option>
                                    <option value = "SEYCHELLES"> SEYCHELLES </option>
                                    <option value = "SIERRA LEONA"> SIERRA LEONA </option>
                                    <option value = "SINGAPORE"> SINGAPORE </option>
                                    <option value = "SYRIA"> SYRIA </option>
                                    <option value = "SOMALIA"> SOMALIA </option>
                                    <option value = "SRI LANKA"> SRI LANKA </option>
                                    <option value = "SOUTH AFRICA"> SOUTH AFRICA </option>
                                    <option value = "SUDAN"> SUDAN </option>
                                    <option value = "SWEDEN"> SWEDEN </option>
                                    <option value = "SWITZERLAND"> SWITZERLAND </option>
                                    <option value = "SURINAME"> SURINAME </option>
                                    <option value = "SVALBARD AND JAN MAYEN"> SVALBARD AND JAN MAYEN </option>
                                    <option value = "SWAZILAND"> SWAZILAND </option>
                                    <option value = "TADYIKISTAN"> TADYIKISTAN </option>
                                    <option value = "THAILAND"> THAILAND </option>
                                    <option value = "TANZANIA"> TANZANIA </option>
                                    <option value = "EAST TIMOR"> EAST TIMOR </option>
                                    <option value = "TOGO"> TOGO </option>
                                    <option value = "TOKELAU"> TOKELAU </option>
                                    <option value = "TONGA"> TONGA </option>
                                    <option value = "TRINIDAD AND TOBAGO"> TRINIDAD AND TOBAGO </option>
                                    <option value = "TUNISIA"> TUNIS </option>
                                    <option value = "TURKMENISTAN"> TURKMENISTAN </option>
                                    <option value = "TURKEY"> TURKEY </option>
                                    <option value = "TUVALU"> TUVALU </option>
                                    <option value = "UKRAINE"> UKRAINE </option>
                                    <option value = "UGANDA"> UGANDA </option>
                                    <option value = "URUGUAY"> URUGUAY </option>
                                    <option value = "UZBEKISTAN"> UZBEKISTAN </option>
                                    <option value = "VANUATU"> VANUATU </option>
                                    <option value = "VENEZUELA"> VENEZUELA </option>
                                    <option value = "VIETNAM"> VIETNAM </option>
                                    <option value = "WALLIS AND FORTUNE"> WALLIS AND FORTUNE </option>
                                    <option value = "YEMEN"> YEMEN </option>
                                    <option value = "ZAMBIA"> ZAMBIA </option>
                                    <option value = "ZIMBABWE"> ZIMBABWE </option>
            
                                    </select>

                                    <label for="cobru1" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Referred code (if applicable)</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  type="text" min="0" maxlength="10" id="cobru1" name="cobru1" class="camposgenerales" >
                                
                                <label for="nombre" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>city ​​of birth</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  type="text"  required id="estado_c" name="estado_c" class="camposgenerales"  >

                            
                                <label for="cobru1" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Date expiration Document</p>
                                    </li> 
                                </ul>
                                </label>
                                <input  type="date" min="0" maxlength="10" id="cobru2" name="expira" class="camposgenerales" >
                                
                                <label for="expira" class="titulosa" >
                                <ul class="lista" >
                                    <li> 
                                        <p>City of residence</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" id="ciudad" name="ciudad" class="camposgenerales" onkeypress="return soloLetras(event)">

                                <label for="cobru3" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Kind of Person</p>
                                    </li> 
                                </ul>
                                </label>
                                <select required id="PERSONA" name="PERSONA" class="camposgenerales" > 
                                    <option value = ""> Please select </option>
                                    <option value = "1"> Natural </option>
                                    <option value = "2"> Juridica </option>
                                </select>

                                <label for="direccion" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Address</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" id="direccion" name="direccion" class="camposgrandes"><br>
                                
                                <label for="codigo" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Country code</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" min="0" maxlength="4" id="codigo" name="codigo" class="camposgenerales" onkeypress='return validaNumericos(event)'>
                                
                                <label for="telefono" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Phone</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="text" min="0" maxlength="10" id="telefono" name="telefono" class="camposgenerales" onkeypress='return validaNumericos(event)'>
                                

                                <label for="correo"  class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Email</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="email" id="correo" name="correo" class="camposgenerales">
                                <label for="correo"  class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Password Cobru</p>
                                    </li> 
                                </ul>
                                </label>
                                <input required type="password" id="correo" name="correo" class="camposgenerales"><br>
                            
                            <label for="idioma" class="titulosa">
                                <ul class="lista" >
                                    <li>
                                        <p>Native language</p>
                                    </li> 
                                </ul>
                            </label>
                            <select required id="idioma" name="idioma" class="camposgenerales" onchange="cambiar_idioma(this)" >
                            <option value = ""> Select language </option>
                                <option value = "German"> German </option>
                                <option value = "Arabic"> Arabic </option>
                                <option value = "Bengali"> Bengali </option>
                                <option value = "Cantonese Chinese"> Cantonese Chinese </option>
                                <option value = "Mandarin Chinese"> Mandarin Chinese </option>
                                <option value = "Chinese Mǐn Nán"> Chinese Mǐn Nán </option>
                                <option value = "Chinese Wu"> Chinese Wu </option>
                                <option value = "Korean"> Korean </option>
                                <option value = "Spanish"> Spanish </option>
                                <option value = "French"> French </option>
                                <option value = "Hausa"> Hausa </option>
                                <option value = "Hindi"> Hindi </option>
                                <option value = "Indonesian"> Indonesian </option>
                                <option value = "English"> English </option>
                                <option value = "Italian"> Italian </option>
                                <option value = "Japanese"> Japanese </option>
                                <option value = "Javanese"> Javanese </option>
                                <option value = "Marathi"> Marathi </option>
                                <option value = "Western Punjabi"> Western Punjabi </option>
                                <option value = "Iranian Persian"> Iranian Persian </option>
                                <option value = "Portuguese"> Portuguese </option>
                                <option value = "Russian"> Russian </option>
                                <option value = "Thai"> Thai </option>
                                <option value = "Tamil"> Tamil </option>
                                <option value = "Telugu"> Telugu </option>
                                <option value = "Turkish"> Turkish </option>
                                <option value = "Urdu"> Urdu </option>
                                <option value = "Vietnamese"> Vietnamese </option>
                            </select>
                            
                            <label for="nivel" class="titulosa">
                                <ul class="lista" >
                                    <li> 
                                        <p>Additional languages</p>
                                    </li> 
                                </ul>
                            </label>
                            <input id="nivel" name="nivel" class="camposgenerales" >

                            <input  class="check" id="nativo" name="nativo" type="hidden"  >
                         <!-- <label for="Femenino" class="labels">Nativo</label> -->
                            <input required="required" required  type="hidden" id="url_cert_formacion" name="url_cert_formacion">
                                <label for="certificado" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Attach Photo of the Document ahead</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </li> 
                                </ul>
                                </label>
                                <div class="file-select" id="certificado" align="center" style="margin-left: 30px">
                                    <input  required="required" required  type="file" id="docu1" name="certificado"  class="camposcertificados"><br>
                                </div>
                                
                                <input required="required" required accept="image/*" type="hidden" id="url_cert_formacion" name="url_cert_formacion">
                                <label for="certificado" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Attach a Photo of the Document on the back</p>
                                    </li> 
                                </ul>
                                </label>
                                <div class="file-select" id="certificado" align="center" style="margin-left: 30px">
                                    <input  required="required" required  type="file" id="docu2" name="certificado"  class="camposcertificados"><br>
                                </div>

                                <input required="required" required accept="image/*" type="hidden" id="url_cert_formacion" name="url_cert_formacion">
                                <label for="certificado" >
                                <ul class="lista" >
                                    <li> 
                                        <p>Attach CV and certifications (pdf)</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    </li> 
                                </ul>
                                </label>
                                <div class="file-select" id="certificado" align="center" style="margin-left: 30px">
                                    <input  required="required" required   type="file" id="certificado" name="certificado" onchange="Adjuntar_certificado(this)" class="camposcertificados"><br>
                                </div>
                            
                            
                        </div>
                            <div align="center" class="flex-item-right2" ><br><br>
                                <label for="nombre" >
                                <input type="hidden" name="url_image" id="url_image">
                                <input type="hidden" name="url_image_name" id="url_image_name">
                                
                                    <img src="img/foto.png" id="image_perfil" class="imgfoto" alt=""/>
                                </label>
                                <div class="file-select" id="foto" align="center" style="margin-left: -90px">
                                    <input required type="file" name="foto" id="foto" accept="image/*"  onchange = "AdjuntarImagen(this)" >
                                </div>
                                <br><br><br>
                       
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
                    </div><br>
        <img src="img/barbancof_en.png"  width="100%" height="auto" alt=""  />
        <br><br>
        <div align="left">
        <h5 > 
            <input required type="radio" checked value="ok" id="ok" name="ok" class="camposradio">
            <label for="ok" style="font-size:22px">This card is free and is part of our platform, with the registration process.</label>&nbsp;&nbsp;&nbsp;
            <label for="ok" style="font-size:22px; margin-left: 3.5%;">In case of NOT being approved by the bank, DO NOT WORRY !!! You are welcome to our GURUXY COMMUNITY.</label>&nbsp;&nbsp;&nbsp;

        
        </h5>   
                       
       <a style= "color: #462161; margin-left: 3%; font-size:24px"> Benefits of the Digital Credit card:</a>
       </div>   
 

       <a style= "color: #C02938; margin-left: 3%; font-size:18px"> You have the power, the control is yours!</a>
<div style= "margin-left:3%; margin-right:3%">

    <h6 style= "color: #000">
    <h6><a style= "font-size:18px"> What is the best office to handle your money? The cell phone! We develop a digital experience so that you can easily make all your transactions from home or wherever you are!</h6>
    <ul>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">Receive the resources of your professional services and transfer them to your Credit Card. </li> 
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">100% Human, We personally attend all our service channels.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">100% digital card, Discover a really different App. Goodbye to paperwork and branches. New and better features.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">$ 0 handling fee*, We are efficient and you will not have to pay handling fee, There is no contract with the fine print.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">20% discount* on the current interest rate.</li>
        <li style= "color: #000; font-size:15px">Devolución de <a style= "font-size:18px">Refund of $ 30,000* if the first purchase is equal to or greater than $ 200,000 within 3 months from the card activation date.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">Secure and contactless shopping via QR.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">Insurance and assistance Visa.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">We refund 1% of deferred purchases.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">Additionally, from your cell phone you have a digital experience so that you can easily carry out all your transactions from home.</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">You can have control over your financial life</li>
        <li style= "color: #000; font-size:15px"><a style= "font-size:18px">You will find the best version for your financial life.</li>
        <br>
        <a style= "font-size:18px">* It only applies to Banco Finandina digital TDC.</a>

    </ul>
    <h6>
    <h4> Being part of the <a style= "color: #462161"> GURUXY </a>community you can enjoy many products and services.</h4>
    <br>
    <h6 >
        <ul>
            <li style= "color: #000;"><a style= "font-size:18px">Obtain a permanent 15% discount for the purchase of services and products on the platform.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Be able to make as many inquiries on the platform as you require, since you will have a card associated with the payment.</li>                
            <li style= "color: #000;"><a style= "font-size:18px">Pay your handling fee only for the months you use the Card or have any outstanding debt. </li>
            <li style= "color: #000;"><a style= "font-size:18px">Choose the time in which you want to pay for your purchase.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Enjoy exclusive discounts every week of the year in the GURUXY COMMUNITY.</li>
            <li style= "color: #000;"><a style= "font-size:18px">Have the option of making advances on your credit quota.</li>
            <li style= "color: #000;"><a style= "font-size:18px">The conditions indicated apply only to the Banco finandina Digital Credit Card. </li>
            <li style= "color: #000;"><a style= "font-size:18px">Terms and conditions apply. </li>
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
                            <p style="display: contents;"> By submitting your application you authorize us to send your information to our evaluators. Your application will be considered exclusively to apply as an independent contractor at Guru's Center and not to obtain any position as our employee.</p>
                        </li> 
                    </div>
                </ul>
                </a>
                <input required type="checkbox" name="acepto" value="acepto" class="check4" >
                <label for="acepto" class="texto">
                    <p>&nbsp;&nbsp;<a href="terminos.pdf" download="terminos.pdf">I accept the terms and conditions.</a></p>
                </label>
                <br>
                <input required type="checkbox" name="18" value="18" class="check4">
                <label for="18" class="texto"> 
                    <p>&nbsp;&nbsp;I certify that I am over 18 years of age.</p>
                </label>
                <br>
                
                
                
                
                <input required type="checkbox" name="politicas" value="politicas" class="check4">
                <label for="18" class="tedatos.pdfxto"> 
                    <p>&nbsp;&nbsp;<a href="datos.pdf" download="">Accept data processing policy.</p></a>
                </label>

                <br>
                
                <input required type="checkbox" name="contrato" value="contrato" class="check4">
                <label for="18" class="texto"> 
                    <p>&nbsp;&nbsp;<a>I accept consultation in risk centers.</a></p>
                </label><br>
                <input required type="checkbox" name="contrato" value="contrato" class="check4">
                <label for="18" class="tedatos.pdfxto"> 
                    <p>&nbsp;&nbsp;<a href="contrato.pdf" download="contrato.pdf">Accept the conditions of the Contract.</a></p>
                </label>
                </div>
            </div>
            <div align="center" class="fondoblanco" >
                <br><br>
                <button style="width:200px" type="submit"  onclick="alerta();"><img src="img/send.png" alt="" style="width: 100%; " /> </button>
                <button style="width:200px" type="button"  onclick="borrar1();"><img src="img/cancel.png" alt="" style="width: 100%;"  /> </button> <br><br>
            </div>
        </form>

         <!-- Fin Idiomas -->
       
        </div>
        <div align="right">
        </div>
        <?php require("modal/registro.php"); ?>
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

            
            function borrar1() {
             
                  document.getElementById("informacion_general").reset();
            }  
          
        </script>
        
        <script>
            function alerta()
            {
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
