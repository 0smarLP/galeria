<?php

header('content-type: application/json');

	$o = new stdClass();
	$o->status = 'success';
	echo json_encode($o);

	$email_to = "osmichan07@gmail.com"; // Replace by your email address
	$email = $_POST["email"];
	$text = "Felicidades ! Una nueva persona quiere recibir una alerta cuando su sitio esté en línea: $email";

	$headers = "MIME-Version: 1.0" . "\r\n"; 
	$headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
	$headers .= "From:<$email>\n";

	mail($email_to, "Message", $text, $headers);

?>
