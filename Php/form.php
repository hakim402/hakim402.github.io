<?php
$clintName = $_POST['clintName'];
$clintEmail = $_POST['clintEmail'];
$clintSubject = $_POST['clintSubject'];
$clintMsg = $_POST['clintMsg'];

$email_from = 'info@yourwebsite.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: $clintName.\n".
"User Email: $email_from.\n".
"Subject: $email_subject.\n".
"User Message: $email_msg.\n";

$to = 'hakimsfi402@gmail.com';
$headers = "Form: $email_form\r\n";
$headers .= "Reply-To: $clintEmail\r\n";

mail($to, $email_subject, $email_body, $headers);

$headers("Location: index.html");
?>