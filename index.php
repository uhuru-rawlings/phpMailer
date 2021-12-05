<?php
//  Include required files
require "includes/Exception.php";
require "includes/PHPMailer.php";
require "includes/SMTP.php";
// define name space
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
// create instance of php mailer
$mail = new PHPMailer();
// set mail to use smtp
$mail->isSMTP();
// define smtp host

$mail->Host = "smtp.gmail.com";
// enable smtp authenticxation
$mail->SMTPAuth = "true";
// set type of encryption
$mail->SMTPSecure = "tls";
// port
$mail->Port ="587";
// set gmail username
$mail->Username = "uhururawlings38@gmail.com";
// set gmail password
$mail->Password = "raw=lings36455589";
// set email subject
$mail->Subject = "Post Notification";
// sender
$mail->setFrom("uhururawlings38@gmail.com");
// email body
$mail->Body = "You are receiving this email because you signed up to RTECHBLOG post notification";
// add recipient
$mail->addAddress("rawlings.huru@student.moringaschool.com");
// send
if($mail->Send()){
    echo("Email sent...");
}else{
    echo("Email not sent...");
}
// close connection
$mail->smtpClose();
?>