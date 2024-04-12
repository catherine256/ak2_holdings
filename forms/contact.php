<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $message = $_POST["message"];
  $subject = $_POST["subject"];

  $subject = $subject;
  
  $to = "cathynakya1@gmail.com";
  $body = "Name: $name\nEmail: $email\nMessage: $message";
  
  // Send the email
  mail($to, $subject, $body);
  
  // Redirect to a thank you page
  header("Location: thanks.html");
  exit();
}
?>
