<?php
if(isset($_POST['submit'])) 
{
require 'PHPMailer-5.2-stable/PHPMailerAutoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];


    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'makeithappen.1357@gmail.com';                     // SMTP username
    $mail->Password   = 'makeithappen';                               // SMTP password
    $mail->SMTPSecure = 'tls';         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email, $name);
    $mail->addAddress('makeithappen.1357@gmail.com', 'Team MakeItHappen');     // Add a recipient

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Query from user '.$name;
    $mail->Body    = 'Query from the user is :<br>'.$message;

   if(!$mail->send())
   {
       echo 'Message could not be sent.';
       echo 'Mailer Error: '.$mail->ErrorInfo;
   }
   else{
       //echo 'Message has been sent!';
       include 'thankyou.html';
   }
}