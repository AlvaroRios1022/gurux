<?php
require_once("../config/conexion.php");
class UsuarioModel {


    public static function Inicio_sesion($post){
        $return = array();
        $mysqli=Conectar::conexion();
        $username = $mysqli->real_escape_string($_POST['usuario']);
        $password = md5($_POST['password']);
        $consulta = "SELECT id_usuario,email_usu,pass_usu FROM usuario_guru WHERE email_usu = '$username' AND pass_usu = '$password'";

        if($resultado = $mysqli->query($consulta)) {
            while($row = $resultado->fetch_array()) {
  
              $userok = $row['email_usu'];
              $passok = $row['pass_usu'];
                $id = $row['id_usuario'];
            }
            $resultado->close();
          }
          $mysqli->close();

          if(isset($userok) && isset($passok)) {

            if($username == $userok && $password == $passok) {
              
                $_SESSION['userlog']  = $userok; 
                $_SESSION['logueado'] = TRUE;
                $_SESSION['id_usuario']=$id;
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
    
    public static function Registro($registro){
        $return = array();
        $db=Conectar::conexion();

        $nombre = $db->real_escape_string($_POST['nombre']);
        $apellido = $db->real_escape_string($_POST['apellido']);
        $usuario = $db->real_escape_string($_POST['telefono']);
        $email = $db->real_escape_string($_POST['email']);
        $password = md5($_POST['pass']);
        $ip = $_SERVER['REMOTE_ADDR'];
        $conocio = $db->real_escape_string($_POST['conocio']); 
        $fecha = $db->real_escape_string($_POST['fecha']); 

        $consultausuario = "SELECT email_usu FROM usuario_guru WHERE email_usu = '$usuario'";
	    $consultaemail = "SELECT email_usu FROM usuario_guru WHERE email_usu = '$email'";

	    if($resultadousuario = $db->query($consultausuario));
		    $numerousuario = $resultadousuario->num_rows;

	    if($resultadoemail = $db->query($consultaemail));
		    $numeroemail = $resultadoemail->num_rows;

	    if($numeroemail>0) {
            $return['mensaje'] ="Este correo ya esta registrado, intente de nuevo  con otro correo electrónico.";
            $return['status'] ='warning';
	    }
	    elseif($numerousuario>0) {
            $return['mensaje'] = "Este usuario ya existe, por favor registre un usuario valido.";
            $return['status'] ='warning';
        }
        else {
            $aleatorio = uniqid();
    
            $query = "INSERT INTO usuario_guru (conocio,fecha, usuario_usu, nombre_usu, apellido_usu, email_usu, pass_usu, fecha_usu, ip_usu, codigo_usu ) 
                                         VALUES ($conocio,'$fecha','$usuario','$nombre','$apellido','$email','$password',now(),'$ip','$aleatorio')";
        
            if($registro = $db->query($query)) {          

                $return['mensaje']= "Felicidades ". $nombre ." ". $apellido ." se ha registrado correctamente, te hemos enviado un correo de confirmacion.";
                $return['status'] ='success';
                require_once(dirname(__FILE__) . "/../class/Mailer/envio.php");

                $email_subject = 'Notificaciones Guru';
                
                ob_start();
                EnvioModel::EnvioCodigo($email, $email_subject, $aleatorio);
                ob_end_clean();
                
              }
              else {
                $return['mensaje']= "Ha ocurrido un error en el registro, intentelo de nuevo";
                  $return['status'] ='warning';
              }
            }
        $db->close();
	    ob_end_flush();
        return $return;

    }   

    public function randomPassword() {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 8; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }

}