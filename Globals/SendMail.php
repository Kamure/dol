<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class SendMail{
    public function Send_Mail($conf,$mailCnt){



//Load Composer's autoloader (created by composer, not included with PHPMailer)
require_once __DIR__ . '/../vendor/autoload.php';

//Create an instance; passing true enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = $conf['smtp_host'];                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $conf['smtp_user'];                     //SMTP username
    $mail->Password   = $conf['smtp_pass'];                     //SMTP password
    $mail->SMTPSecure = $conf['smtp_secure'];                   //Enable implicit TLS encryption
    $mail->Port       = $conf['smtp_port'];                     //TCP port to connect to; use 587 if you have set SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS

    //Recipients
    $mail->setFrom($conf['smtp_user'], $conf['site_name']);
    $mail->addAddress($mailCnt['mail_to'] , $mailCnt['name_to']);     //Add a recipient
    //$mail->addAddress('ellen@example.com');               //Name is optional
    //$mail->addReplyTo('info@example.com', 'Information');
    //$mail->addCC('cc@example.com');
    //$mail->addBCC('bcc@example.com');

    //Attachments
    //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $mailCnt['subject'];
    $mail->Body    = $mailCnt['body'];
    $mail->AltBody = $mailCnt['altbody'];

    $mail->send();
    echo 'Secure account email has been sent';
} catch (Exception $e) {
    echo "Email failed. Mailer Error: {$mail->ErrorInfo}";
}

    }
}