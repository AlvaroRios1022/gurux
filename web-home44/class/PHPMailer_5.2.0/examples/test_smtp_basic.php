<html>
<head>
<title>PHPMailer - SMTP basic test with authentication</title>
</head>
<body>

<?php

//error_reporting(E_ALL);
error_reporting(E_STRICT);
//date_default_timezone_set('America/Bogota');
require_once('../class.phpmailer.php');
//include("class.smtp.php"); // optional, gets called from within class.phpmailer.php if not already loaded
$mail             = new PHPMailer();
$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);
$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.tusoftware.co"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "contacto@tusoftware.co"; // SMTP account username
$mail->Password   = "Sistemas30$";        // SMTP account password
$mail->SetFrom('contacto@tusoftware.co', 'www.tusoftware.co');
$mail->AddReplyTo("griosb@tusoftware.co","[www.tusoftware.co]");
$mail->Subject    = "[Solicitud contacto] [www.tusoftware.co]";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test

$nombre = "Geovanny Rios Bernal";
$telefono = "3177749341";
$comentarios = "CKSK KJ KJH KJHKJHJHK HJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJJ HJ HJ";

$mail->MsgHTML("<table cellpadding='0' cellspacing='0' align='center' style='border:1px solid #b9e1fb;width:40%;height:192px;border-radius:0px 0px 4px 4px;'><tbody><tr><td style='height:36px;'><span style='font-family:Arial;font-weight:bold;font-size:13px;padding-left:5px;'>Señor(a) ".$nombre." buen día,</span></td></tr><tr><td style='height:28px;'><p><span style='font-family:Arial;font-size:13px;padding-left:5px;'>Agradecemos se haya contactado con nosotros, nos comunicaremos con usted lo más pronto posible.</span></p><p><span style='font-family:Arial;font-size:13px;padding-left:5px;'>Atentamente,</span></p><span style='font-family:Arial;font-size:13px;padding-left:5px;'><br>El Equipo de Tu Software S.A.S <br><img alt='' src='http://seoandsem.co/Prototipos/tusoftware/brave/PHPMailer_5.2.0/examples/images/LogoPNG.png'></span><br><br></td></tr><tr><td></td></tr></tbody></table>");
$address = "geovanny_rios@hotmail.com";
$mail->AddAddress($address, "Geovanny Rios");
//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
// Activo condificacción utf-8
$mail->CharSet = 'UTF-8';
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}


// Mil administrador sistema
$mail             = new PHPMailer();
$body             = file_get_contents('contents.html');
$body             = eregi_replace("[\]",'',$body);
$mail->IsSMTP(); // telling the class to use SMTP
//$mail->Host       = "mail.yourdomain.com"; // SMTP server
$mail->SMTPDebug  = 2;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  // enable SMTP authentication
$mail->Host       = "mail.tusoftware.co"; // sets the SMTP server
$mail->Port       = 25;                    // set the SMTP port for the GMAIL server
$mail->Username   = "contacto@tusoftware.co"; // SMTP account username
$mail->Password   = "Sistemas30$";        // SMTP account password
$mail->SetFrom('contacto@tusoftware.co', 'www.tusoftware.co');
$mail->AddReplyTo("griosb@tusoftware.co","[www.tusoftware.co]");
$mail->Subject    = "[Solicitud contacto] [www.tusoftware.co]";
$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
//$mail->MsgHTML($body);



$mail->MsgHTML("<body style='margin: 10px;'>
<div style='width: 640px; font-family: Arial, Helvetica, sans-serif; font-size: 11px;'>
<br>
<b>Nueva Solicitud de contacto</b><br>
<br>
Datos
<br>
<br>
<b>EMPRESA/NOMBRE:&nbsp;&nbsp;&nbsp;&nbsp;</b>".$nombre."  
<br />
<b>TELEFONO:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>".$telefono." 
<br />
<b>COMENTARIOS: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>".$comentarios."
<br>
</div>
<div align='left'><BR><img src='http://seoandsem.co/Prototipos/tusoftware/brave/PHPMailer_5.2.0/examples/images/LogoPNG.png'></div><br>

</body>
");


$address = "griosb@tusoftware.co";
$mail->AddAddress($address, "Geovanny Rios");
//$mail->AddAttachment("images/phpmailer.gif");      // attachment
//$mail->AddAttachment("images/phpmailer_mini.gif"); // attachment
// Activo condificacción utf-8
$mail->CharSet = 'UTF-8';
if(!$mail->Send()) {
  echo "Mailer Error: " . $mail->ErrorInfo;
} else {
  echo "Message sent!";
}



?>
</body>
</html>
