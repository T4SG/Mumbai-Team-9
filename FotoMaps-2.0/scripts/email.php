<?php

$sendTo = $_POST["sendTo"];
$subject = $_POST["title"] . " - contact form";

$headers = "From: " . $_POST["name"] ." <" . $_POST["email"] .">\r\n";
$headers .= "Reply-To: " . $_POST["email"] . "\r\n";
$headers .= "Return-path: " . $_POST["email"];

$message = stripslashes($_POST["name"] . " (" . $_POST["email"] . ") writes: \n\n" . $_POST["message"]);

mail($sendTo, $subject, $message, $headers);

?>