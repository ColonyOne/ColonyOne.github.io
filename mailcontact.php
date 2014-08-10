<?php
$email = $_POST['email'];
$name = $_POST['name'];
$message= $_POST['message'];
$formcontent="Email: $email \n Name: $name \n Message: $message";
$recipient = "colonyfrontier@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You! Your contact request has been received by ColonyOne. You will be responded to shortly in regards to your message." . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
header("Location: ".$_SERVER['HTTP_SERVER'].$_POST['back']."");
?>