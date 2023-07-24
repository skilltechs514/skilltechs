<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  $to = 'yousafarslan09@gmail.com';
  $subject = 'New email from website';
  $body = "Name: $name\nEmail: $email\n\n$message";
  ini_set("SMTP", "https://agreeable-cliff-0bd37e810.3.azurestaticapps.net/");
  ini_set("smtp_port", 25);
  // Send email
  if (mail($to, $subject, $body)) {
    echo 'Email sent successfully.';
  } else {
    echo 'An error occurred. Please try again later.';
  }
}
?>