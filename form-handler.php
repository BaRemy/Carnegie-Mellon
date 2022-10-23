<?php
$name = $_POST['name']
$viistor_email = $_POST['email']
$subject = $_POST['subject']
$message = $_POST['message']

$_email_from ='info@yourwebsite.com';
$_email_subject ='New Form Submission';
$_email_body ="User Name: $name.\n".
                "User Email: $visitor_email.\n".
                 "Subject: $subject.\n".
                 "User Message: $message.\n".;
$_to = 'bahatiremy05@gmail.com';                

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitor_email \r\n";

mail($_to,$_email_subject,$_email_body,$headers);

header("Location: contact.html")
?>