<?php
if(isset($_POST['submit'])) {
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'info@ixlunipage.netlify.app'; // Update with your email address

  $email_subject = "New Form submission";

  $email_body = "User Name: $name.\n".
                "User Email: $visitor_email.\n".
                "Subject: $subject.\n".
                "User Message: $message.\n";

  $to = 'reivax.caasi@gmail.com'; // Update with your email address

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  // Redirect to a thank you page after sending the email
  header("Location: index.html");
} else {
  // If the form is not submitted, redirect back to the contact page
  header("Location: contact.html");
}
?>
