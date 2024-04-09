<?php
// Get data from form  
$name = $_POST['name'];
$surname = $_POST['surname'];
$email = $_POST['email'];
$message = $_POST['message'];
$task = $_POST['task'];

$to = "naidusrinivas035@mail.com";
$subject = "Mail From portfolio";
$txt = "Name: " . $name . "\r\nSurname: " . $surname . "\r\nEmail: " . $email . "\r\nMessage: " . $message . "\r\nTask: " . $task;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: somebodyelse@example.com";

if ($email != NULL) {
    mail($to, $subject, $txt, $headers);
}

// Redirect
header("Location: thankyou.html");
?>
