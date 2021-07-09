<?php
	$name = $_POST['name'];
	$visitor_email =$_POST['email'];
	$message =$_POST['message'];

	$email_from = 'EMZee Solutions';
	$email_subject = "new";
	$email_body ="User Name: $name. \n".
					"User Email: $visitor_email. \n".
					"User Message: $message. \n";

	$to = "manojy0505@gmail.com";
	$headers ="from: $email_from\r\n";
	$headers .="Reply-To: $visitor_email\r\n";

	mail($to,$email_subject,$email_body,$headers);
	header("Loction: index.html");

?>