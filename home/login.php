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
        <link rel="stylesheet" href="css/stylesLogin.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    </head>
    <body class="cabecera" >
    <br>
        <img src="img/headert.png"  width="60%" height="auto" alt="" style="margin:0px; padding:0px; " />
        <div class="fondoblanco">
            <br><br> <br>
            <div class="menuright" align="center" >
                <form  action="" method="post" id="form_login">
                <input type="hidden" value="login" name="tipo">
                    <div > 
                        <h4 style=" color: #FEC705; ">&nbsp; </h4>
                        <h4 style=" color: #FEC705; ">INGRESAR</h4>
                    </div>
                    <br>
                    <div class="form-group" >
                        <label for="usuario">Usuario - Tu Célular</label><br>
                        <input name="usuario" type="text" class="imputright" required="required" placeholder="Usuario">
                    </div>
                    <div class="form-group" >
                    <label for="password">Contraseña</label><br>
                        <input type="password"  name="password" class="imputright" required="required" placeholder="Contraseña">
                    </div>
                    <div class="form-group">
                        <label for="tipo_user">Tipo Usuario</label><br>
                        <select required id="tipo_user" name="tipo_user" class="camposgenerales"  > 
                            <option value="">Selecciona</option>
                            <option value = "0">Guru</option>
                            <option value = "1">Cliente</option>
                        </select>
                    </div>
                    <input type="submit" name="entrar" value="Entrar" id="bton_entrar" class=" botonright" style=" " >
                </form>
            </div>
            <br> <br> <br>
        </div>
        <br>
        <div align="right" > 
            <img src="img/logo.png"   alt="" width="50%" height="auto" />
        </div>
            
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
            <script src="js/login.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </body>
</html>