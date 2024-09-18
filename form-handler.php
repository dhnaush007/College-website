<?php
$name = $_pOST['name'];
$visitor_email = $_pOST['email'];
$subject = $_pOST['subject'];
$message = $_pOST['message'];


$email_from = 'info@youwebsite.com'

$email_subject = 'New Form Submission'

$email_body = "User Name :$name.\n".
              "User Eamil :$visitor_email.\n".
              "User subject :$subject.\n".
              "User Message :$message.\n";



 $to = 'dkd63761@gmail.com';

 $headers = "From : $emaill_from \r\n";

 $headers .= "Reply-To: $visitor_email \r\n" ;

 mail($to,$email_subject,$email_body,$headers);

 header("Location: contect.html.html");
 ?>












?>