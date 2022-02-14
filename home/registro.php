 <?php
ob_start();
?>
<?php
session_start();
if(isset($_SESSION['logueado']) && $_SESSION['logueado'] == TRUE) {
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <title>Gurus Center</title>
</head>
	<?php
	require("conexion.php");
	$nombre = $mysqli->real_escape_string($_POST['nombre']);
	$apellido = $mysqli->real_escape_string($_POST['apellido']);
	$usuario = $mysqli->real_escape_string($_POST['usuario']);
	$email = $mysqli->real_escape_string($_POST['email']);
	$password = md5($_POST['password']);
	$ip = $_SERVER['REMOTE_ADDR'];

	$consultausuario = "SELECT usuario_usu FROM usuario_guru WHERE usuario_usu = '$usuario'";
	$consultaemail = "SELECT email_usu FROM usuario_guru WHERE email_usu = '$email'";

	if($resultadousuario = $mysqli->query($consultausuario));
		$numerousuario = $resultadousuario->num_rows;

	if($resultadoemail = $mysqli->query($consultaemail));
		$numeroemail = $resultadoemail->num_rows;

	if($numeroemail>0) {
		echo "Este correo ya esta registrado, intenta con otro";
	}
	elseif($numerousuario>0) {
		  echo "Este usuario ya existe";
		}
	else {
		$aleatorio = uniqid();

		$query = "INSERT INTO usuario_guru ( usuario_usu, nombre_usu, apellido_usu, email_usu, pass_usu, fecha_usu, ip_usu, codigo_usu ) VALUES ('$usuario','$nombre','$apellido','$email','$password',now(),'$ip','$aleatorio')";

		if($registro = $mysqli->query($query)) {

		Header("Refresh: 2; URL=index.php");

		echo "Felicidades $usuario se ha registrado correctamente, te hemos enviado un correo de confirmacion.";

			// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
			$email_to = $email;
			$email_subject = "Confirma tu email Gurú";
			$email_from = "noreply.guruxy.com";
			$email_message = "Hola " . $usuario . ", para poder disfrutar de nuestro sitio web, debes confirmar tu email\n\n";
			$email_message .= "Ingresa el siguiente codigo para confirmar tu email\n\n";
			$email_message .= "Codigo: " . $aleatorio . "\n";


			// Ahora se envía el e-mail usando la función mail() de PHP
			$headers = 'From: '.$email_from."\r\n".
			'Reply-To: '.$email_from."\r\n" .
			'X-Mailer: PHP/' . phpversion();
			@mail($email_to, $email_subject, $email_message, $headers);
		  }
		  else {
			  echo "Ha ocurrido un error en el registro, intentelo de nuevo";
			  header("Refresh: 2; URL=index.php");
		  }
	}
	$mysqli->close();
	ob_end_flush();
?>