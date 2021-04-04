<?php
//old
include "./PHPMailer-5.2-stable/PHPMailerAutoload.php";

$gmailUsername = "alphadevhustlehub@gmail.com";
$gmailPassword = "secretalaminmo123";

///////////////////////////////////
//old
$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = "smtp.gmail.com";
$mail->Port = 465;
$mail->isHTML(true);
$mail->Username = $gmailUsername;
$mail->Password = $gmailPassword;
///////////////////////////////////
