<?php
session_start();
if(!(isset($_SESSION['logueado_admin']) && $_SESSION['logueado_admin'] == TRUE)) {
    header('Location: hhttps://guruxy.com/admin/');
    exit;
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
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    </head>
    <body class="cabecera" >
    <br>
        <img src="img/headert.png"  width="60%" height="auto" alt="" style="margin:0px; padding:0px; " />
        <div class="fondoblanco" align="center">
            <br><br> <br>
            <button type="button" onclick="descargar_ExcelAll()"><img src="img/descargar_guru.png" alt="" style="width: 80%;"  /></button>
            
            <a href="usuarios.php"><img src="img/descargar_usuarios.png" alt="" style="width: 19%;"  /></a>
           
            <!-- <div align="center">
                <table id="tabla_guru" class="table table-striped table-bordered" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <td>Nombre Gurú</td>
                        <td>Fecha de creación</td>
                        <td></td>
                    </tr>
                </thead>
                <tbody>
                </tbody>
                </table>
        
                <br> <br> <br>-->
                <br><br> <br>
        </div>
        <br><br><br>
      <div align="right" > 
            <img src="images/logo.png"   alt="" width="20%" height="auto" style="position:absolute; bottom:10px; right:20px;" />
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
            <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
            <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.js"></script>
            <script src="js/site.js"></script>
            <script src="js/admin_guru.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    </body>
</html>