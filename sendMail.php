<?php
$myemail = 'phyzekiel@gmail.com';

$fname = $_POST['givenname'];
$lname = $_POST['famname'];
$company = $_POST['company'];
$subject = $_POST['subject'];
$usermail = $_POST['email'];
$reason = $_POST['reason'];
$selfMail = $_POST['email'];
$message = $_POST['emailMessage']
$to = "";

$emailBody = "Portfolio Contact Form Submission.".
"Name: $fname $lname\n".
"Company: $company\n".
"Email: $usermail\n".
"Reason: $reason\n\n".
"$message";
$headers = “From: $usermail\n”;


if (empty(selfMail)){
$to = $myemail;
} else{
  $to = "$myemail, $usermail";
}
  mail($to,$subject,$emailBody,$headers);
  header('Location:contact-thanks.html');
?>
