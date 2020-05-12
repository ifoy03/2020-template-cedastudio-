<?php 
	$name= $_POST['name'];
	$phone= $_POST['phone'];
	$services= $_POST['services'];

	$subject= "=?utf-8?B?".base64_encode($services)."?=";
	$headers= "Name: $name\r\nNumber: $phone\r\nContent-type: text/html; charset=utf-8\r\n";

	$success = mail("info@cedastudio.com",$subject,$headers);
	echo success;
?>