<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require "PHPMailer.php";
require "SMTP.php";
require "Exception.php";
require __DIR__ . '/lib/util.php';

$to = 'info@trubizz.ntubedglobal.com';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


try {
  //Server settings
  $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
  $mail->isSMTP();                                            //Send using SMTP
  $mail->Host       = 'smtp.office365.com';                     //Set the SMTP server to send through
  $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
  $mail->Username   = 'no-reply@orientalexoticsprl.com';                     //SMTP username
  $mail->Password   = 'Oriental030307*';                               //SMTP password
  $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption
  $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set 

  //Recipients
  $mail->setFrom('no-reply@orientalexoticsprl.com', 'Trubizz | Ntubed Global LTD.');
  $mail->addAddress($to );               //Name is optional

  //Content
  $mail->isHTML(true);                                  //Set email format to HTML
  $mail->Subject = "Message recieved from ".$_POST['name'] ;
  $mail->Body    = template_generate();

  $mail->send();
  echo 'OK';
} catch (Exception $e) {
  error_log($e->getMessage() . "\n", 3, __DIR__ . "log.log");
}

