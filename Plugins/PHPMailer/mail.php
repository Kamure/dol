<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader (created by composer, not included with PHPMailer)
require 'vendor/autoload.php';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'beyonce.kamure@strathmore.edu';                     //SMTP username
    $mail->Password   = 'dfbigwapxclqmwqe';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom('beyonce.kamure@strathmore.edu', 'KamzB Mailer');
    $mail->addAddress('ufreex.niccur@gmail.com', 'Kamure Beyonce, Receiver');     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = '🔐 BankSecure: Your Digital Vault Is Ready';
    $mail->Body    = 'Hello <b>BankSecure</b> member,<br><br>Your account has been activated.<br>Access your dashboard, track your balance, and move money with confidence.<br><br><i>Security is not a feature it is our foundation.</i>  ';
    $mail->AltBody = ' Hello BankSecure member, Your account has been activated. Access your dashboard, track your balance, and move money with confidence. Security is not a feature it is our foundation.';

    $mail->send();
    echo 'Secure account email has been sent';
} catch (Exception $e) {
    echo "Email failed. Mailer Error: {$mail->ErrorInfo}";
}