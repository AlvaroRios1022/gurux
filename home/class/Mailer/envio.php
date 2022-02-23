<?php
/**
 * This example shows making an SMTP connection with authentication.
 */

//Import the PHPMailer class into the global namespace
require_once(dirname(__FILE__) . "/PHPMailer.php");
require_once(dirname(__FILE__) . "/smtp.php");

//SMTP needs accurate times, and the PHP time zone MUST be set
//This should be done in your php.ini, but this is how to do it if you don't have access to that
date_default_timezone_set('Etc/UTC');

//require '../vendor/autoload.php';


class EnvioModel {

public function EnvioCodigo($email, $email_subject, $pk){

$mail = new PHPMailer;
//Tell PHPMailer to use SMTP
$mail->isSMTP();
//Enable SMTP debugging
// SMTP::DEBUG_OFF = off (for production use)
// SMTP::DEBUG_CLIENT = client messages
// SMTP::DEBUG_SERVER = client and server messages
$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//Set the hostname of the mail server
$mail->Host = 'mail.guruxy.com';
//Set the SMTP port number - likely to be 25, 465 or 587
$mail->Port = 465;
//Whether to use SMTP authentication
$mail->SMTPAuth = true;

$mail->SMTPSecure = 'TLS'; //seguridad
//Username to use for SMTP authentication
$mail->Username = 'info@guruxy.com';
//Password to use for SMTP authentication
$mail->Password = '1Contacto2*';
//Set who the message is to be sent from
$mail->setFrom('info@guruxy.com', 'Notificaciones Guru');
//Set an alternative reply-to address
//Set who the message is to be sent to
$mail->addAddress($email);
//Set the subject line
$mail->Subject = utf8_decode($email_subject);
//Read an HTML message body from an external file, convert referenced images to embedded,

$body = file_get_contents(dirname(__FILE__).'/plantilla_clave.html');
$body = str_replace('%testemail%', $email, $body); 
$body = str_replace('%testpk%', $pk, $body); 
$mail->msgHTML(utf8_decode($body));
//Replace the plain text body with one created manually
$mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');

//send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
      //  echo 'Message sent!';
    }
    }
}
