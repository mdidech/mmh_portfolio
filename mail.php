<?php

if (isset($_POST['submit'])) {
 // Collect form data
 $name = $_POST['name'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 // Set recipient email address
 $to = 'contact@mmarketinghelp.com';

 // Set email subject
 $subject = 'New Contact Form Submission';

 // Build the email content
 $body = "Name: $name\nEmail: $email\nMessage: $message";

 // Set email headers
 $headers = "From: $name <$email>\r\n";
 $headers .= "Reply-To: $email\r\n";

 // Send the email
 if (mail($to, $subject, $body, $headers)) {
  echo '<p>votre message est envoyé avec success.</p>';
 } else {
  echo '<p>There was an error sending your message. Please try again later.</p>';
 }
}
