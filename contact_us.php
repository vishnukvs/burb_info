<?php
include('includes/header.php');


$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
if(!$name && !$email){
$email_to = "vishnu@burbtech.com.au";  // This email address will recieve the data of form.html
$email_from = "admin@burbtech.com.au";
$email_subject = "email form Burbtech"; 
$email_message = "Form details below.\n\n";

function clean_string($string) {
  $bad = array("content-type","bcc:","to:","cc:","href");
  return str_replace($bad,"",$string);
}

$email_message .= "Name: ".clean_string($name)."\n";
$email_message .= "Email: ".clean_string($email)."\n";
$email_message .= "Comments: ".clean_string($message)."\n";


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);
echo"Thank you for contacting us. We will be in touch with you very soon.";

}
echo"Thank you for contacting us. We will be in touch with you very soon.";
