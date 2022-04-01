<?php
require_once("../config/conexion.php");
class LoginModel {

    public static function Inicio_sesion($post){
        $return = array();
        $mysqli=Conectar::conexion();
        $username = $mysqli->real_escape_string($_POST['usuario']);
        $password = ($_POST['password']);
        $consulta = "SELECT `id`, `user`, `password` FROM `admin_ratzel` WHERE user= '$username' AND password = '$password'";
        

        if($resultado = $mysqli->query($consulta)) {
            while($row = $resultado->fetch_array()) {
  

              $userok = $row['user'];
              $passok = $row['password'];
                $id = $row['id'];

            }
            $resultado->close();
          }
          $mysqli->close();

          if(isset($userok) && isset($passok)) {

            if($username == $userok && $password == $passok) {
              
                $_SESSION['user_admin']  = $userok; 
                $_SESSION['logueado_admin'] = TRUE;
                $_SESSION['id_admin']=$id;
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

          return $return;

    }
}