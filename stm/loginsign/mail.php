<?php
$to_email = "20it066@charusat.edu.in";
$subject = "Test email to send from XAMPP";
$body = "Hi, This is test mail to check how to send mail from Localhost Using Gmail ";
$from="mangukiyaparth310@gmail.com";
$headers = "From: $from";

if (mail($to_email, $subject, $body, $headers))

{
    echo "Email successfully sent to $to_email...";
}

else

{
    echo "Email sending failed!";
}