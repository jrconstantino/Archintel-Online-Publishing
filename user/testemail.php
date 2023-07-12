<?php


	$to = "soulnitsujeater12@gmail.com";
	$subject = "Test Email";

	
	$headers = array(
	"MIME-Version" => "1.0",
	"Content-Type" =>"text/html;charset=UTF-8",
	"From" =>"justinramosconstantino@gmail.com",
	"Reply-To" =>"justinramosconstantino@gmail.com"
	);
	
	$message = file_get_contents("sendemail.php");

	$send = mail($to, $subject, $message, $headers);

	echo ($send ? "Mail is send" : "There was an error");
?>