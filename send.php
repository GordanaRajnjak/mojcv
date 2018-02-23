<?php



$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Load composer's autoloader
require 'vendor/autoload.php';

$mail = new PHPMailer(true);                              // Passing `true` enables exceptions
try {
    //Server settings
   $mail->SMTPDebug = 2;                                 // Enable verbose debug output
    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'gigirajnjak@gmail.com';                 // SMTP username
    $mail->Password = 'mihajlo2012';                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 587;                                    // TCP port to connect to

    //Sender
    $mail->setFrom('gigirajnjak@gmail.com', 'Mailer');

    //Recipients
    $mail->addAddress('gogashkk@gmail.com', 'Contact User');     // Add a recipient
    

    $body = "<p>You have received an enquiry from" . $name . "<br>The message is:" . $message . "<br>Clients email is:" . $email . "</p>";

    //Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Contact mail';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    $mail->send();

    // header("location: response.html");
    echo 'Message has been sent';
} catch (Exception $e) {
  //  echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
}