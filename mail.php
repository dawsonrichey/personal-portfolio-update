<?php
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$comments = $_POST['comments'];
$formcontent = " From: $name \n Subject: $subject \n Your Message: $comments";
$recipient = "dawsonrichey@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index2.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";
?>
