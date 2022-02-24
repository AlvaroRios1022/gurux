<?php
require_once("../config/conexion.php");
class LoginModel {

    public static function Inicio_sesion($post){
        $return = array();
        $mysqli=Conectar::conexion();
        $username = $mysqli->real_escape_string($_POST['usuario']);
        $password = md5($_POST['password']);
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
            $consulta = "SELECT `id_usuario`, `usuario_usu`, `pass_usu` FROM `usuario_guru` WHERE usuario_usu= '$username' AND pass_usu = '$password'";
            if($resultado = $mysqli->query($consulta)) {
                while($row = $resultado->fetch_array()) {
      
                  $userok = $row['usuario_usu'];
                  $passok = $row['pass_usu'];
                  $id = $row['id_usuario'];
                }
                $return['code'] ='1';
                
                $resultado->close();
              }
              $mysqli->close();

              if(isset($userok) && isset($passok)) {

                if($username == $userok && $password == $passok) {
                  
                    $_SESSION['user']  = $userok; 
                    $_SESSION['logueado'] = TRUE;
                    $_SESSION['password'] = $_POST['password'];
                    $_SESSION['perfil'] = 'cliente';
                    $_SESSION['id']=$id;
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