<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Guruxy</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">

    <!-- CSS de Bootstrap -->
    <link href="css/header.css" rel="stylesheet" type="text/css" />

    <style>
        body {
            margin: 0px;
        }
    </style>
    <!-- librerías opcionales que activan el soporte de HTML5 para IE8 -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="body">
        <div class="caja_inline ">
            <a style=" width:100%" href="index.php"><img src="images/logo.png" style=" width:100%;" alt="logo" /></a>
        </div>

        <div class="caja_inline_noxotros">

            <ul class="nav">
                <li> <a class="sub" style=" width:150px; color:#fff;" href="#">SOBRE NOSOTROS</a>
                    <ul>
                        <li><a class="fondo" href="preguntas.php">PREGUNTAS FRECUENTES</a></li>
                        <li><a class="fondo" href="politicas.pdf">POLÍTICAS DE PRIVACIDAD</a></li>
                        <li><a class="fondo" href="terminos.pdf">TÉRMINOS Y CONDICIONES</a></li>
                        <li><a class="fondo" href="datos.pdf">POLÍTICAS DE DATOS</a></li>
                        <li><a class="fondo" href="contacto.php">CONTÁCTENOS</a></li>
                    </ul>
                </li>
            </ul>
        </div>

        <div class="caja_inline_barra_left ">
            <a class="titulos"> | </a>
        </div>

        <div class="caja_inline_trabaje ">
            <a class="titulos" style=" width:150%" href="https://www.guruxy.com">TRABAJA CON NOSOTROS</a>
        </div>

        <div class="caja_inline_barra_right">
            <a class="titulos"> | </a>
        </div>

        <div class="caja_inline_como">
            <a class="titulos" style=" width:100%; " href="como.php">¿CÓMO FUNCIONA?</a>
        </div>

        <?php
        if (!(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE)) {
        ?>

            <div class="caja_inline_img_usuario">
                <a href="usuarios.php"> <img src="img/registros_.png" style=" width:120%" alt="registro" /></a>
            </div>
            <div class="caja_inline_img_login">
                <a href="login.php"><img src="img/sesiones_.png" style=" width:120%" alt="sesion" /></a>
            </div>
        <?php

        } else {
        ?>
            <a style=" color:#FFC808; width:100% "><?php echo $_SESSION['nombre']; ?></a>

            <div class="caja_inline_img">
                <a class="logout_btn" href="logout.php" style=" width:120%"> Cerrar Sesión</a>
            </div>

        <?php
        }
        ?>
        <div class="caja_inline_barra_cobru">
            <a href="cobru.php"><img src="img/logoheader.png" style=" width:80%" alt="sesion" /></a>
        </div>
        <div class="caja_inline_barra_idioma">
            <span class="titulos">IDIOMA <a style="color:#FFC808"> ES </a> | EN</span>
        </div>
        <br>



        <div align="right" class="menu">

            <div align="left" class="boton_servicios">
                <ul class="nav2" style=" margin-right: 180px;">
                    <li> <a><img style="" src=" img/servicios/servicio.png"></a>
                        <ul>
                            <li><a class="fondo2" href="preguntas.php"><img src=" img/servicios/guruxy.png"></a></li>
                            <li><a class="fondo2" href="politicas.pdf"><img src=" img/servicios/falabella.png"></a></li>
                            <li><a class="fondo2" href="terminos.pdf"><img src=" img/servicios/larebaja.png"></a></li>
                            <li><a class="fondo2" href="datos.pdf"><img src=" img/servicios/lopido.png"></a></li>
                            <li><a class="fondo2" href="contacto.php">TURISMO MEDICO</a></li>
                            <li><a class="fondo2" href="contacto.php"><img src=" img/servicios/betplay.png"></a></li>
                            <li><a class="fondo2" href="contacto.php"><img src=" img/servicios/idime.png"></a></li>
                            <li><a class="fondo2" href="contacto.php"><img src=" img/servicios/cobru.png"></a></li>
                            <li><a class="fondo2" href="contacto.php"><img src=" img/servicios/pasalapagina.png"></a></li>
                            <li><a class="fondo2" href="contacto.php"><img src=" img/servicios/lesmills.png"></a></li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="boton">
                <a href="medicos.php"><button class="boton_medicos" name="button">MÉDICOS</button></a>
            </div>
            <div class="boton">
                <a href="medicina_alternativa.php"><button class="boton_alternativa" name="button">MÉDICINA ALTERNATIVA</button></a>
            </div>
            <div class="boton">
                <a href="preparacion.php"><button class="boton_fisica" name="button">PREPARACIÓN FÍSICA</button></a>
            </div>
            <div class="boton">
                <a href="psiquicos.php"><button class="boton_psiquicos" type="submit" name="button">PSÍQUICOS</button></a>
            </div>
            <div class="boton">
                <a href="religiosos.php"><button class="boton_religiosos" name="button">RELIGIOSOS</button></a>
            </div>
            <div class="boton">
                <a href="coaching.php"><button class="boton_coaching" name="button">COACHING</button></a>
            </div>
            <div class="boton">
                <a href="idiomas.php"><button class="boton_idiomas" name="button">IDIOMAS</button></a>
            </div>
            <div class="boton">
                <a href="tutores.php"><button class="boton_tutores" name="button">TUTORES</button></a>
            </div>
            <div class="boton">
                <a href="otros.php"><button class="boton_otros" name="button">OTROS</button></a>
            </div>
            <div class="boton">
                <a href="construccion.php"><button class="boton_construccion" name="button">CONSTRUCCIÓN</button></a>
            </div>
        </div>
    </div>





    <!-- Librería jQuery requerida por los plugins de JavaScript -->
    <script src="http://code.jquery.com/jquery.js"></script>

    <!-- Todos los plugins JavaScript de Bootstrap (también puedes
         incluir archivos JavaScript individuales de los únicos
         plugins que utilices) -->
</body>

</html>