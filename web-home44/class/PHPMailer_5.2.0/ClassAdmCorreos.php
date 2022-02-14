 <?php
    //header("Content-Type: text/html;charset=utf-8");
	error_reporting(E_STRICT);
	require_once('class.phpmailer.php');

class ClassAdmCorreos {

static public function AprobarEnvio(){
	$mail             = new PHPMailer();

	$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
												   // 1 = errors and messages
												   // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "smtp.powweb.com"; // sets the SMTP server
		$mail->Port       = 587;                    // set the SMTP port for the GMAIL server
		//$mail->SMTPSecure = "ssl";
		$mail->Username   = "info@rascanube.com"; // SMTP account username
		$mail->Password   = "B1g4n.2398";        // SMTP account password
		$mail->SetFrom('info@rascanube.com', 'Prueba');
		//$mail->AddReplyTo("contacto@moneya.co","[www.moneya.co]");
		$mail->AltBody    = "Para ver el mensaje, por favor use un navegador de internet!"; // optional, comment out and test

		$mail->MsgHTML("<span>Prueba</span>");
		
		$address = "alvaro.riosp@hotmail.com";
		$mail->AddAddress($address, "Álvaro Ríos");
		$mail->CharSet = 'UTF-8';
		if($mail->Send()) {
			echo "envio";
		} else {
			echo "no envio";
		}
		var_dump($mail);
		return "OK";															
}

	static public function EnviarCorreoRespuesta($CorreoDestino,$nombre,$Solicitud,$Codigo,$TipoResp,$Copia=1)
	{
		//echo "Correo".$CorreoDestino. " nombre ".$nombre." Solici ".$Solicitud. " tipo resp ".$TipoResp;
		// Mail administrador sistema
		$mail             = new PHPMailer();
		$Estado = "";
		
		if ($TipoResp == 1) // PreAprobada
		{
			$body             = file_get_contents('contRespuestaPreAprobada.html');
			$Estado = "PreAprobada";
		}

		if ($TipoResp == 2) // Aprobada
		{
			$body             = file_get_contents('contRespuestaAprobada.html');
			$Estado = "Aprobada";
			$body = str_replace('$Codigo', $Codigo, $body);
		}
		
		if ($TipoResp == 3) // Rechazada
		{
			$body             = file_get_contents('contRespuestaRechazada.html');
			$Estado = "Rechazada";
		}
		
		if ($TipoResp == 4) // Cerrada
		{
			$body             = file_get_contents('contRespuestaCerrada.html');
			$Estado = "Cerrada";
			$body = str_replace('$idSolicitud', $Solicitud, $body);
		}
				
		$body = str_replace('$nombre', $nombre, $body);
		
		$body             = str_replace("[\]",'',$body);
		//$mail->IsSMTP(); // telling the class to use SMTP
		$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
												   // 1 = errors and messages
												   // 2 = messages only
		$mail->SMTPAuth   = true;                  // enable SMTP authentication
		$mail->Host       = "smtp.zoho.com"; // sets the SMTP server
		$mail->Port       = 465;                    // set the SMTP port for the GMAIL server
		$mail->SMTPSecure = "ssl";
		$mail->Username   = "contacto@moneya.co"; // SMTP account username
		$mail->Password   = "Cambiar123";        // SMTP account password
		$mail->SetFrom('contacto@moneya.co', 'Financiera Moneya');
		$mail->AddReplyTo("contacto@moneya.co","[www.moneya.co]");
		
		if ($Copia == 1)
		{
			$mail->Subject    = "Solicitud de crédito # ".$Solicitud. " " .$Estado. " www.moneya.co Financiera Moneya";	
		}
		if ($Copia == 2)
		{
			$mail->Subject    = "Copia Mensaje - Solicitud de crédito # " .$Solicitud. " " .$Estado. "  www.moneya.co Financiera Moneya";	
		}
		
		$mail->AltBody    = "Para ver el mensaje, por favor use un navegador de internet!"; // optional, comment out and test

		$mail->MsgHTML($body);
		
		$address = $CorreoDestino;
		$mail->AddAddress($address, $nombre);
		$mail->CharSet = 'UTF-8';
		if(!$mail->Send()) {
			echo "ok enviado";
		} else {
			echo "nooo ok enviado";
		}
		return "OK";															
	}
	
}
?>

											