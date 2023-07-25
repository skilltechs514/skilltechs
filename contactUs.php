<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

    $name =$_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['telephone'];
    $message = $_POST['message'];

    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'yousafarslan09@gmail.com';
    $mail->Password = 'tzmfmpjqtdhbjzvo';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom('info@arclighttech.net', $name);
    $mail->addAddress('info@arclighttech.net');
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;
    $mail->send();
    echo "
    <script>
    alert('Email Sent Successfully');
    </script>
    ";
?>
