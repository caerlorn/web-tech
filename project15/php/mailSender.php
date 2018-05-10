<?php

require_once ("../vendor/autoload.php"); //Require vendor autoload file

use PHPMailer\PHPMailer\PHPMailer; // import the phpmailer library

function sendMail($subject, $body, $recipientAddress)
{
    $mailer = new PHPMailer();

    try {
        $mailer->IsSMTP();

        $mailer->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mailer->Host = 'ssl://smtp.gmail.com:465';

        $mailer->SMTPAuth = TRUE;
        $mailer->Username = 'project15mailer@gmail.com';  // Change this to your gmail address
        $mailer->Password = 'Test123!';  // Change this to your gmail password
        $mailer->From = 'project15mailer@gmail.com';  // This HAVE TO be your gmail address
        $mailer->FromName = 'Team 15';
        $mailer->Body = $body;
        $mailer->Subject = $subject;
        $mailer->AddAddress($recipientAddress);

        if(!$mailer->Send()) {
            return "Message was not sent";
        } else {
            return "Message has been sent";
        }
    } catch (Exception $e) {
        // for debugging purpose
        var_dump('Message could not be sent. Mailer Error: ', $mailer->ErrorInfo);
        die();
    }
}