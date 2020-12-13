<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
  
require_once "vendor/autoload.php";
require 'vendor/phpmailer/vendor/phpmailer/src/Exception.php';
require 'vendor/phpmailer/vendor/phpmailer/src/PHPMailer.php';
require 'vendor/phpmailer/vendor/phpmailer/src/SMTP.php';
  
$mail = new PHPMailer(true);
  
try {
    $mail->isSMTP();
    $mail->Host = 'in-v3.mailjet.com'; // host
    $mail->SMTPAuth = true;
    $mail->Username = '3c8befcdd0a205834569cd72a0658daf'; //username
    $mail->Password = '9cb781174b51f3f0d269ef3407ba1150'; //password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587; //smtp port
   
    $mail->setFrom('antoboo@yahoo.com', 'Ann');
    $mail->addAddress('antoinette.roberts85@yahoo.com', 'Antoinette');
  
    $mail->isHTML(true);
    $mail->Subject = 'Testing';
    $mail->Body    = '<b>Testing</b>';
  
    $mail->send();
    echo 'Email has been sent.';
} catch (Exception $e) {
    echo 'Email could not be sent. Mailer Error: '. $mail->ErrorInfo;
}