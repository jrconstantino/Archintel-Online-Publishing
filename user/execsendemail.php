<?php
	include('connection.php');
	require_once('auth.php');
$email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$date = $_POST["date"];
$emailcontent = $_POST["emailcontent"];

$emailcontent = $_POST["emailcontent"];


	
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\Exception;

	require 'phpmailer/src/Exception.php';
	require 'phpmailer/src/PHPMailer.php';
	require 'phpmailer/src/SMTP.php';

		$mail = new PHPMailer(true);
		
		$mail->isSMTP();
		$mail->SMTPAuth = true;
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
		$mail->Port = 587;
		$mail->CharSet = 'UTF-8';
		$mail->isHTML(true);

		$mail->Username = "archinteltest@gmail.com";
		$mail->Password ="axqgtpdazkhoidfg";

		$mail->setFrom("archinteltest@gmail.com");
		$mail->addAddress($email);

		$mail->Subject = $subject;
		$mail->Body = $emailcontent;

		$mail->send();

		echo	
		"
		<script>
		alert('Sent Successfully');
		document.location.href = 'sendarticle.php?remarks=success';
		</script>
		";


?>