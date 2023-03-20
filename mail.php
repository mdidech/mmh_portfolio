<?php

if (isset($_POST['submit'])) {
 // Set SMTP server, port number, and authentication credentials
 ini_set('SMTP', 'mail.mmarketinghelp.com');
 ini_set('smtp_port', '465');
 ini_set('smtp_auth', true);
 ini_set('username', 'contact@mmarketinghelp.com');
 ini_set('password', ',m_;fh()..H~');


 // Collect form data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 // Set recipient email address
 $to = 'abdelaziz.mdidech@gmail.com';

 // Set email subject
 $subject = 'New Contact Form Submission From mmarketinghelp protfolio';

 // Build the email content
 $body = "Name: $name\nEmail: $email\nMessage: $message";

 // Set email headers
 $headers = "From: $name <$email>\r\n";
 $headers .= "Reply-To: $email\r\n";

 // Send the email
 if (mail($to, $subject, $body, $headers)) {
  header('Location: emailenvoye.html');
 } else {
  header('Location: emailnonenvoye.html');
 }
}
