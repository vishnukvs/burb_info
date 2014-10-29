<?php
include_once('dbconn.php');
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

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
