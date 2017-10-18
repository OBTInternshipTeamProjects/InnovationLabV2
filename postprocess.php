<?php
	$n = $_POST['fname'];
	$l = $_POST['lname'];
	$e = $_POST['email'];
	$message = $_POST['message'];
	$m = "First Name: $n\n Last Name: $l\n Email: $e\n Message: $message";
	//Subject
	$s = "Message from $n $l"; 
	//Recipient Email
	$t = "innovationlab@industrycity.com";
	//Email Header
	$h = 'From: '.$t."\r\n".'Reply-To: '.$t."\r\n".'X-Mailer: PHP/'.phpversion();
	mail($t, $s, $m, $h);
	header('Location: index.php');
?>