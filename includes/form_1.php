<?php	
	if(empty($_POST['email']) && strlen($_POST['email']) == 0 || empty($_POST['message']) && strlen($_POST['message']) == 0)
	{
		return false;
	}
	
	$name = $_POST['lastname'];
	$email = $_POST['email'];
	$source = $_POST['source'];
	$projet = $_POST['projet'];
	
	$to = 'charlesforgeard@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from your website";
	$email_body = "You have received a new message. \n\n".
				  "Name: $name \nEmail: $email \nInput_504: $source \nMessage: $projet \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: contact@yoursite.com\n";
	$headers .= "Reply-To: $source";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>