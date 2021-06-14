<?php

$message_sent = False;
if(isset($_POST['email']) && $_POST['email'] != ''){
	
	if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
		$name = $_POST['name'];
        $email = $_POST['email'];
        $subject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "prasansha.satpathy@gmail.com";
        $txt = "Name = " . $name . "\r\nEmail = " . $email . "\r\nSubject = " . $subject . "\r\nMessage = " . $message;
        $header = "From: From My Website" ;

       mail($to,$txt,$header);     
        
	}
}


?>