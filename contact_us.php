<?php
include_once('dbconn.php');
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);
$email_to = "vishnu@burbtech.com.au";  // This email address will recieve the data of form.html
$email_subject = "email for Burbtech"; 

function clean_text($string) {
$bad = array("content-type","bcc:","to:","cc:","href");
return str_replace($bad,"",$string);
}

$email_message .= " Name: ".clean_text($name)."\n";
$email_message .= "Email: ".clean_text($email)."\n";
$email_message .= "Comments: ".clean_text($message)."\n";

@mail($email_to, $email_subject, $email_message);

/*
Put your custom message here or redirect user to any other page
after successful submission of form.<br/>
for example a simple message like this:<br /> */
echo "Your form has been Submitted Successfuly.!!
We will be back to you ASAP";

}

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