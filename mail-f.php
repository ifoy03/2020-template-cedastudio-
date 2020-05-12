<?php 
	$name= $_POST['name'];
	$phone= $_POST['phone'];

	$subject= "=?utf-8?B?".base64_encode($name)."?=";
	$headers= "Footer: Only name and phone(without services)\r\nNumber: $phone\r\nContent-type: text/html; charset=utf-8\r\n";

	$success = mail("info@cedastudio.com",$subject,$headers);
	echo success;
?>