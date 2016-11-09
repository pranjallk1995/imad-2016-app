<?php
session_start();
//error_reporting(E_ALL);
require 'phpmailer/PHPMailerAutoload.php';
$mail = new PHPMailer();
$mail->IsSMTP(); // set mailer to use SMTP
//$mail->SMTPDebug  = 2; 
$mail->From = "secure.pansecure@gmail.com";
$mail->FromName = "PANSecure";
$mail->Host = "smtp.gmail.com"; // specif smtp server
$mail->SMTPSecure= "ssl"; // Used instead of TLS when only POP mail is selected
$mail->Port = 465; // Used instead of 587 when only POP mail is selected
$mail->SMTPAuth = true;
$mail->Username = "secure.pansecure@gmail.com"; // SMTP username
$mail->Password = "HistoryTV18"; // SMTP password
$mail->AddAddress($_SESSION['sess_eid'], $_SESSION['sess_un']); //replace myname and mypassword to yours

$mail->WordWrap = 50; // set word wrap
//$mail->AddAttachment("c:\\temp\\js-bak.sql"); // add attachments
//$mail->AddAttachment("c:/temp/11-10-00.zip");

$mail->IsHTML(true); // set email format to HTML
$mail->Subject = 'Confirmation mail from PAN Secure';
$mail->Body = '<b>Congratulations!</b><br>U have taken the first step in securing all your account passwords with PAN Secure<br><a href="localhost/PAN/">Go to PAN Secure</a><br><br>Regards<br>PAN Secure Team';

if($mail->Send()) {echo "Send mail successfully";}
else {echo "Send mail fail";} 

header('Location: index.php');
?>