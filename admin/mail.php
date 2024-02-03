<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/Exception.php';

function sendemail($to,$subject,$message){
//Import PHPMailer classes into the global namespace



$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;
//to view proper logging details for success and error messages
// $mail->SMTPDebug = 1;
$mail->Host = 'smtp.gmail.com';  //gmail SMTP server
$mail->Username = 'ahmedabadLive123@gmail.com';   //email
$mail->Password = 'mpmtefspopxbmany';   //16 character obtained from app password created
$mail->Port = 465;                    //SMTP port
$mail->SMTPSecure = "ssl";


//sender information
$mail->setFrom('ahmedabadLive123@gmail.com', 'SAM');

//receiver address and name
$mail->addAddress($to);


// Add cc or bcc   
// $mail->addCC('email@mail.com');  
// $mail->addBCC('user@mail.com');  

// $mail->addAttachment(__DIR__ . '/download.png');

// $mail->addAttachment(__DIR__ . '/exampleattachment2.jpg');


$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body    = $message;

if (!$mail->send()) {
    echo 'Email not sent an error was encountered: ' . $mail->ErrorInfo;
} else {
    echo 'Message has been sent.';
}

$mail->smtpClose();
}
