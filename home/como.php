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
        <img src=" images/logo.png"  width="30%" height="auto" alt="" style="margin:0px; padding:0px; " />
        <br>
        <br>
        <div class="fondoblanco">
            <br>
            <div style="margin-top:-20px"  align="center" >
               
            <iframe width="1200" height="600" src="https://www.youtube.com/embed/APvNmnHgq3I?autoplay=1" allow='autoplay'></iframe>


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
            <script src="js/recuperar_pass.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </body>
</html>