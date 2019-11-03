<?php
$ccr_subject = 'Submission from website'; // Subject of your email
$to = $_REQUEST['findyourfortesurrey@gmail.com'];  //Recipient's E-mail

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= "From: " . $_REQUEST['website@no-reply.com'] . "\r\n"; // Sender's E-mail
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$ccr_message .= 'Name: ' . $_REQUEST['name'] . "<br>";
$ccr_message .= $_REQUEST['message'];

if (@mail($to, $ccr_subject, $ccr_message, $headers))
{
	// Transfer the value 'sent' to ajax function for showing success message.
	echo 'sent';
}
else
{
	// Transfer the value 'failed' to ajax function for showing error message.
	echo 'failed';
}
?>