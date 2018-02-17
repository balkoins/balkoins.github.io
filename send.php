<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

mail("balkoins@gmail.com","Services Customer",$message,"From: $email\r\n" );

echo "Thanks for contacting us!";




?>