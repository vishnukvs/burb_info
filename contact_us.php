<?php
include_once('dbconn.php');
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
var_dump($name);

$email_to = "vishnu@burbtech.com.au";  // This email address will recieve the data of form.html
$email_subject = "email for Burbtech"; 

$email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Comments: ".clean_string($messgae)."\n";
     
     
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  

if($name&&$email!=''){


$sql = $db->query(
		"INSERT into visitors (name,email,message,created)
		VALUES('$name','$email','$message',NOW())
			");
echo "Thank's for Contacting us We will get back to you as soon as possible";
}
else {
	echo 'please enter the required fields';
}