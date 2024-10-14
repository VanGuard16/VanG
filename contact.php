<?php

if (isset($_POST["submit"])) {
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$number = $_POST["number"];
$_message = $_POST["message"];

$email_from ="eacoedmodelhighschool.com";

$email_subject ="New Form Submission":

$email_body =" User Name: $name. \n".
                "User Email: $vistior_email. \n".
                 "User Phone Number: $number. \n".
                 "User Message: $message. \n";

$to ="ibrahimkhidir25@gmail.com"

$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
}
?>