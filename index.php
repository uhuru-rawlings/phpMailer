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
$mail->Username = "username@gmail.com";
// set gmail password
$mail->Password = "emailpassword";
// set email subject
$mail->Subject = "Post Notification";
// sender
$mail->setFrom("sendingemail@gmail.com");
// email body
$mail->Body = "Your desired email";
// add recipient
$mail->addAddress("destination@gmail.com");
// send
if($mail->Send()){
    echo("Email sent...");
}else{
    echo("Email not sent...");
}
// close connection
$mail->smtpClose();
?>