<?php
require("/home/tymek/Documents/webdesign/timbemiddeling/PHPMailer_5.2.0/class.phpmailer.php");

$mail = new PHPMailer();

$mail->IsSMTP();                                      // set mailer to use SMTP
$mail->Host = "mail.timbemiddeling.com";  // specify main and backup server
$mail->Port       = 587; 
$mail->SMTPAuth = true;     // turn on SMTP authentication
$mail->SMTPSecure = "tls";
$mail->Username = "info@timbemiddeling.com";  // SMTP username
$mail->Password = "Pelnia1992"; // SMTP password

$mail->From = "info@timbemiddeling.com";
$mail->FromName = "Mailer";
$mail->AddAddress("tymek.m@hotmail.com");                  // name is optional

$mail->WordWrap = 50;                                 // set word wrap to 50 characters
$mail->IsHTML(true);                                  // set email format to HTML

$mail->Subject = "Here is the subject";
$mail->Body    = "This is the HTML message body in bold!";
$mail->AltBody = "This is the body in plain text for non-HTML mail clients";

if(!$mail->Send())
{
   echo "Message could not be sent. 
";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
