<?php
	$name = $_Post['name'];
	$visitor_email = $_post['email'];
	$message = $_POST['message'];

	$email_from = 'mathijsmol3@gmail.com'
	
	$email_subject = "New Form Submission"
	
	$email_body = "User Name: $name.\n"
					"User Email: $visitor_email.\n".
						"User Messsage: $message.\n";
$to = "avinash6252@gmail.com";

$headers = "From: $email_form \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: indez.html");
?>