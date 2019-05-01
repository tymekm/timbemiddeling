<?php
require("PHPMailer_5.2.0/class.phpmailer.php");

include '/home4/timbemid/etc/timbemiddeling.com/pass/sender-pass.php';
$subject = $_REQUEST['name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.timbemiddeling.com";  // specify main and backup server
$mail->Port       = 587; 
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Username = "sender@timbemiddeling.com";  // SMTP username
$mail->Password = $pass; // SMTP password

$mail->From = "sender@timbemiddeling.com";

$mail->FromName = $named;
$mail->AddAddress("info@timbemiddeling.com");                  // name is optional

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = $message;

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
