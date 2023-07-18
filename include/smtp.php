<?php

use PHPMailer\PHPMailer\PHPMailer;

// MESSAGE & EMAIL CONFIGURATION FOR SCRIPT
class message{
    private $conn;
    public function send_mail($email, $message, $subject){

        $mail = new PHPMailer();
        //SMTP Settings
        $mail->isSMTP();
        $mail->Host = "mail.vaultplus.online"; // Change Email Host
        $mail->SMTPAuth = true;
        $mail->Username = "contact@vaultplus.online"; // Change Email Address
        $mail->Password = '@SECvaultplus1'; // Change Email Password
        $mail->Port = 587; //587
        $mail->SMTPSecure = "ssl"; //tls

        //Email Settings
        $mail->isHTML(true);
        $mail->setFrom('contact@vaultplus.online','Support - Vault Plus Bank'); // Change
        $mail->addAddress($email);
        $mail->AddReplyTo("contact@vaultplus.online", "Support - Vault Plus Bank"); // Change
        $mail->Subject = $subject;
        $mail->MsgHTML($message);
        $mail->Send();


    }

}


?>