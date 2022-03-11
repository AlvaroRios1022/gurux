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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body class="cabecera">
        <form action="registroguru3.php" method="post">
            <img src="img/headert.png"  width="100%" height="auto" alt="" style="margin:0px; padding:0px;" /> 
            <br>
            <img src="img/header2.png"  width="100%" height="auto" alt="" />
            <div >
                <div class="flex-container" style="background-color: #fff;" align="left">
                    <div class="flex-item-left">
                    <label for="nombre" class="control-label col-sm-3">
                        <img src="img/titulosform6.png"   class="imgtext" alt=""/>
                    </label>
                    <input type="text" id="nombre" name="nombre" style="border:none;width:64%;background-color:#E6D9EB;font-size:15px;color:#452167"><br>

                    <label for="tipo" class="control-label col-sm-3">
                        <img src="img/titulosform7.png"  class="imgtext" alt=""/>
                    </label>
                    <select id="medicina" name="medicina" style="border:none; width:200px;background-color:#E6D9EB;font-size:15px;color:#452167"  > 
                            <option value="0">Por favor selecciona</option>
                            <option value="1">Cédula de Ciudadania</option>
                            <option value="2">Cédula de Extrangeria</option>
                            <option value="3">Pasaporte</option>
                    </select>
                    <label for="documento" class="control-label col-sm-3">
                        <img src="img/titulosform14.png"  class="imgtext" alt=""/>
                    </label>
                    <input type="text" id="documento" name="documento" style="border:none;width:200px;background-color:#E6D9EB;font-size:15px;color:#452167"><br>

                    <label for="Genero" class="control-label col-sm-3">
                        <img src="img/titulosform8.png"  class="imgtext" alt=""/>
                    </label>
                    <input type="radio" id="femenino" name="genero" style="border:none;background-color:#E6D9EB;font-size:15px;color:#452167">
                    <label for="Femenino">F</label>&nbsp;&nbsp;&nbsp;
                    <input type="radio" id="masculino" name="genero" style="border:none;background-color:#E6D9EB;font-size:15px;color:#452167">
                    <label for="Masculino">M</label><br>
                    
                    <label for="fecha" class="control-label col-sm-3">
                        <img src="img/titulosform9.png"  class="imgtext" alt=""/>
                    </label>
                    <input type="date" id="fecha" name="fecha" style="border:none; width:200px;background-color:#E6D9EB;font-size:15px;color:#452167"><br>

                    <label for="nombre" class="control-label col-sm-3">
                        <img src="img/titulosform10.png"  class="imgtext" alt=""/>
                    </label>
                    <select id="medicina" name="medicina" style="border:none;width:200px;background-color:#E6D9EB;font-size:15px;color:#452167"  > 
                            <option value="0">Por favor selecciona</option>
                            <option value="1">Casado</option>
                            <option value="2">Divorsiado</option>
                            <option value="3">Soltero</option>
                            <option value="4">Unión Libre</option>
                    </select><br>
                   
                    <label for="pais" class="control-label col-sm-3">
                        <img src="img/titulosform11.png"  class="imgtext" alt=""/>
                    </label>
                    <select id="pais" name="pais" style="border:none;width:200px;background-color:#E6D9EB;font-size:15px;color:#452167"  > 
                        <option value="0">Por favor selecciona</option>       
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
                        <option value="COLOMBIA">COLOMBIA</option>
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
                    <label for="ciudad" class="control-label col-sm-3">
                        <img src="img/titulosform15.png"  class="imgtext" alt=""/>
                    </label>
                    <input type="text" id="ciudad" name="ciudad" style="border:none;width:200px;background-color:#E6D9EB;font-size:15px;color:#452167"><br>

                    <label for="direccion" class="control-label col-sm-3">
                        <img src="img/titulosform12.png"  class="imgtext" alt=""/>
                    </label>
                    <input type="text" id="direccion" name="direccion" style="border:none;width:64%;background-color:#E6D9EB;font-size:15px;color:#452167"><br>
                    
                    <label for="telefono" class="control-label col-sm-3">
                        <img src="img/titulosform13.png"  class="imgtext" alt=""/>
                    </label>
                    <input type="text" id="telefono" name="telefono" style="border:none;width:200px;background-color:#E6D9EB;font-size:15px;color:#452167">
                       
                    
                   
                    <label for="correo" class="control-label col-sm-3">
                        <img src="img/titulosform16.png"  class="imgtext" alt=""/>
                    </label>
                    <input type="text" id="correo" name="correo" style="border:none;width:200px;background-color:#E6D9EB;font-size:15px;color:#452167"><br>
                </div>
                <br><br><br><br>
                <div class="flex-item-right2" ><br><br>
                    <label for="nombre" class="control-label col-sm-4">
                        <img src="img/foto.png"  width="230%" height="auto" alt=""/>
                    </label>
                    <input type="file" name="foto" id="foto" >
                    <br><br><br><br><br><br>
                </div>
                <input type="image" src="img/bguardar.png" alt="Submit" width="50%" height="auto" ><br><br><br><br><br><br>
                <input type="image" src="img/bborrar.png" alt="Submit" width="50%" height="auto" ><br><br><br><br><br><br>
                   
            </div>
        </form>


        
        
        
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