<?php

if (isset($_POST['submit']))

{

	$name = $_POST['Name'];
	$email= $_POST['Email'];
	$subject = $_POST['Subject'];
	$mailFrom = $_POST['mail'];
	$message = $_POST['Message'];

	$mailTo  = 'gg.@net';
	$headers = 'From: '.$mailFrom;
	$txt     = 'You have recieved an email from'.$name.'.\n\n'.$message;

	mail($mailTo, $subject, $txt, $headers);
	header('Location: index.html');
}

?>