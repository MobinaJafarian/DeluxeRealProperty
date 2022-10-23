<?php

namespace App\Http\Services;

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use System\Config\Config;

class MailService
{
    public function send($emailAddress, $subject, $body)
    {
        $mail = new PHPMailer(true);

try {
    
    $mail->CharSet = 'UTF-8';
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = Config::get('mail.SMTP.Host');                     //Set the SMTP server to send through
    $mail->SMTPAuth   = Config::get('mail.SMTP.SMTPAuth');                                   //Enable SMTP authentication
    $mail->Username   = Config::get('mail.SMTP.Username');                     //SMTP username
    $mail->Password   = Config::get('mail.SMTP.Password');                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = Config::get('mail.SMTP.Port');                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom(Config::get('mail.SMTP.setFrom.mail'), Config::get('mail.SMTP.setFrom.name'));
    $mail->addAddress($emailAddress);     //Add a recipient

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body  = $body;

    $result = $mail->send();
    return $result;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
    }
}