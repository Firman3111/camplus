<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_form = 'info@yourwebsite.com';

$email_subject ='New Form Submision';

$email_body = "User Name: $name.\n".
                "user Email: $visitor_email.\n".
                "user subject: $subject.\n".
                "user Message: $message.\n";

$to = 'artclinicsurabaya@gmail.com';

$header = "From: $email_form\r\n";

$header .= "Replay-To: $visitor_Email\r\n";

mail($to,$email_subject,$email_body,$header);

header("Location: contact.html");
?>