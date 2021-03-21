<?php

//Import the PHPMailer class into the global namespace
use PHPMailer\PHPMailer\PHPMailer;

require '../vendor/autoload.php';

//Create a new PHPMailer instance
$mail = new PHPMailer();
//Set who the message is to be sent from
$mail->setFrom('from@example.com', $_POST['name']);

//Set who the message is to be sent to
$mail->addAddress('kudumia@hotmail.com', 'Hsinyi Duan');
//Set the subject line
$mail->Subject = 'From CV site';

//Replace the plain text body with one created manually
$mail->AltBody = $_POST['content'];

//send the message, check for errors
if (!$mail->send()) {
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Message sent!';
}
    ?>