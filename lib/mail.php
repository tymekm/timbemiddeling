<?php
require("PHPMailer_5.2.0/class.phpmailer.php");

include '../../etc/timbemiddeling.com/pass/sender-pass.php';
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$telnum = $_REQUEST['telnum'];
$subject = $_REQUEST['subject'];
$message = $_REQUEST['message'];

$mail = new PHPMailer();

$mail->IsSMTP(true);
$mail->Host = "mail.timbemiddeling.com";
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = "tls";
$mail->Username = "sender@timbemiddeling.com";
$mail->Password = $pass;
$mail->WordWrap = 50;
$mail->IsHTML(true);

$mail->From = $email;
$mail->FromName = $name;
$mail->AddAddress("info@timbemiddeling.com");
$mail->Subject = $subject;
$mail->Body = 
    'Imie: ' . $name . '<br>' .
    'Email: ' . $email . '<br>' .
    'Numer telefonu: ' . $telnum . '<br><br>' .
    '<h3>' . $subject . '</h3><br>' .
    $message;

if(!$mail->Send())
{
   echo "Message could not be sent.";
   echo "Mailer Error: " . $mail->ErrorInfo;
   exit;
}

echo "Message has been sent";
?>
