<?php

if (isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  // Replace these with your actual email address and recipient email address
  $senderEmail = "team@boostifygrowth.tech";
  $recipientEmail = "team@boostifygrowth.tech";

  $subject = "Contact Form Submission";

  $emailBody = "Name: $name\n\nEmail: $email\n\nMessage:\n$message";

  $headers = "From: $senderEmail\r\n";

  if (mail($recipientEmail, $subject, $emailBody, $headers)) {
    echo "Message sent successfully!";
  } else {
    echo "Failed to send message. Please try again later.";
  }
} else {
  echo "Invalid form submission.";
}

?>