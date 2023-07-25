<?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//   $name = $_POST['name'];
//   $email = $_POST['email'];
//   $number = $_POST['number'];
//   $message = $_POST['message'];
//   $headers = "From: info@archlighttech.net\r\n";
//   $headers .= "Reply-To: yousafarslan09@gmail.com\r\n";
//   $headers .= "Return-Path: yousafarslan09@gmail.com\r\n"; // Make sure to use a valid email address here.
//   $headers .= "Content-Type: text/plain; charset=utf-8\r\n";
//   $headers .= "X-Mailer: PHP/" . phpversion();
//   $to = 'yousafarslan09@gmail.com';
//   $subject = 'New email from website';
//   $body = "Name: $name\nEmail: $email\n\n$message";
//   ini_set("SMTP", "smtp.gmail.com");
//   ini_set("smtp_port","587");
//   ini_set("info@archlighttech.net", "yousafarslan09@gmail.com");
// ini_set("smtp_ssl", "tls");
//   // Send e$mail
//   if (mail($to, $subject, $body,$headers)) {
//     echo 'E$mail sent successfully.';
//   } else {
//     echo 'An error occurred. Please try again later.';
//   }
// }
require 'PHPMailer\src\PHPMailer.php';
require 'PHPMailer\src\Exception.php';
require 'PHPMailer\src\SMTP.php';
$mail = new PHPMailer\PHPMailer\PHPMailer();
$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';  // Replace with your SMTP server
$mail->Port = 587;               // Replace with your SMTP port
$mail->SMTPAuth = true;
$mail->Username = '';   // Replace with your SMTP username (email address)
$mail->Password = '';           // Replace with your SMTP password

$mail->SMTPSecure = 'tls';
$mail->SMTPDebug = PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;
// Set the email recipients, subject, and message
$to = "";
$subject = "Test Email";
$message = "This is a test email.";

// Set the "From" address
$mail->setFrom('', '');  // Replace with the sender's email address and name

// Add the recipient address
$mail->addAddress($to);

// Set email body
$mail->Body = $message;

// Try to send the email
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "Message sent!";
}
?>