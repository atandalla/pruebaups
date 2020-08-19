<?php

require "PHPMailer/Exception.php";
require "PHPMailer/PHPMailer.php";
require "PHPMailer/SMTP.php";
 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
 
$oMail= new PHPMailer();
$oMail->isSMTP();
$oMail->Host="smtp.gmail.com";
$oMail->Port=587;
$oMail->SMTPSecure="tls";
$oMail->SMTPAuth=true;
$oMail->Username="itachitony@gmail.com";
$oMail->Password="ingtony35";
$oMail->setFrom("andylizethgl@gmail.com","Remitente");
$oMail->addAddress("andylizethgl@gmail.com","Destinatario");
$oMail->Subject="Prueba Email";
$oMail->msgHTML("Hola amor hermoso <3");
 
if(!$oMail->send())
  echo $oMail->ErrorInfo;  

?>