<?php
  $name = $_POST["name"];
  $visitor_email = $_POST["email"];
  $message = $_POST["message"];

  $email_from = 'itsme@mithubortamuly.in';

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name. \n".
                  "User Email: $visitor_email. \n".
                      "User Message: $message. \n";

  $to = "mithubortamuly@gmail.com";

  $headers = "From: $email_from";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);

  header("Location: contact-me.html");
 ?>
