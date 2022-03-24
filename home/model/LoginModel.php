<?php
require_once("../config/conexion.php");
class LoginModel {


    public static function cambiar_pass($post){
        $return = array();
        $mysqli=Conectar::conexion();
        $correo = $mysqli->real_escape_string($post['correo']);
        $consultaemail = "SELECT * FROM `usuario_guru` WHERE email_usu= '$correo'";
        //echo $consultaemail;
        $aleatorio = uniqid();
        if($resultadopass = $mysqli->query($consultaemail)) {
            while($row = $resultadopass->fetch_array()) {
                    $contraseña = $row['password'];
            }
            $return['code'] ='0';
            
            $resultadopass->close();
        }
        

        if($resultadoemail = $mysqli->query($consultaemail));
        $numeroemail = $resultadoemail->num_rows;
        if($numeroemail==0) {
            $return['mensaje'] ="el correo electronico ingresado no existe.";
            $return['status'] ='warning';
	    }
        else {
            require_once(dirname(__FILE__) . "/../class/Mailer/envio.php");
            $email_subject = "Nueva contraseña Gurú";
                $email_from = "noreply.guruxy.com";
                $email_message = "Hola , Se ha generado una nueva contraseña \n\n";
                //$email_message = "Hola " . $username . ", Se ha generado una nueva contraseña \n\n";
                //$email_message .= "Contraseña: " . $rpass . "\n";
    
                $query_update = "UPDATE `usuario_guru` SET pass_usu='".md5($aleatorio)."' WHERE `email_usu`= '".$correo."' ";

                if($registro = $mysqli->query($query_update)){

                ob_start();
               // EnvioModel::enviopassword($correo, $email_subject, $aleatorio);
                ob_end_clean();
            
            
                $return['mensaje'] ="Se ha enviado un correo electrónico a su cuenta con la contraseña";
                $return['status'] ='success';
                }
                else{
                    
                $return['mensaje'] ="Se ha presentado un error por favor intente de nuevo.";
                $return['status'] ='warning';
                }
            
        }
          

          
        $mysqli->close();
          return $return;
    }

    public static function Inicio_sesion($post){
        $return = array();
        $mysqli=Conectar::conexion();
        $username = $mysqli->real_escape_string($post['usuario']);
        $password = md5($post['password']);
        if($_POST['tipo_user'] == "0"){ 
            $consulta = "SELECT `id`, `telefono`, `password` FROM `guru` WHERE telefono= '$username' AND password = '$password'";

            if($resultado = $mysqli->query($consulta)) {
                while($row = $resultado->fetch_array()) {
      
                  $userok = $row['telefono'];
                  $passok = $row['password'];
                  $id = $row['id'];
                }
                $return['code'] ='0';
                
                $resultado->close();
              }
              $mysqli->close();

              if(isset($userok) && isset($passok)) {

                if($username == $userok && $password == $passok) {
                  
                    $_SESSION['user']  = $userok; 
                    $_SESSION['logueado'] = TRUE;
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['perfil'] = 'guru';
                    $_SESSION['id']=$id;
                    $_SESSION['id_usuario']=$id;
                    $_SESSION['user']='3134965514';
                    $_SESSION['password'] ='Crea1504';
                    $_SESSION['logueado']=TRUE;
                    $return['mensaje'] ="Inicio se sesión exitoso.";
                    $return['status'] ='success';
                }
                else {
                    $return['mensaje'] ="Error! el usuario o contraseña no coinciden.";
                    $return['status'] ='warning';
      
                }
            }else{
                $return['mensaje'] ="Error! el usuario o contraseña no coinciden.";
                $return['status'] ='warning';
    
            }

        }else{
            $consulta = "SELECT nombre_usu,apellido_usu,`id_usuario`, `email_usu`, `pass_usu` FROM `usuario_guru` WHERE email_usu= '$username' AND pass_usu = '$password'";
            if($resultado = $mysqli->query($consulta)) {
                while($row = $resultado->fetch_array()) {
      
                  $userok = $row['email_usu'];
                  $passok = $row['pass_usu'];
                  $nombre = $row['nombre_usu']." ".$row['apellido_usu'];
                  $id = $row['id_usuario'];
                }
                $return['code'] ='1';
                
                $resultado->close();
              }
              $mysqli->close();

              if(isset($userok) && isset($passok)) {

                if($username == $userok && $password == $passok) {
                    $_SESSION['nombre']  = $nombre; 
                  
                    $_SESSION['user']  = $userok; 
                    $_SESSION['logueado'] = TRUE;
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['perfil'] = 'cliente';
                    $_SESSION['id']=$id;
                    $_SESSION['user']='3134965514';
                    $_SESSION['password'] ='Crea1504';
                    $_SESSION['logueado']=TRUE;
                    $return['mensaje'] ="Inicio se sesión exitoso.";
                    $return['status'] ='success';
                }
                else {
                    $return['mensaje'] ="Error! el usuario o contraseña no coinciden.";
                    $return['status'] ='warning';
      
                }
            }else{
                $return['mensaje'] ="Error! el usuario o contraseña no coinciden.";
                $return['status'] ='warning';
    
            }
        }


          return $return;

    }
}