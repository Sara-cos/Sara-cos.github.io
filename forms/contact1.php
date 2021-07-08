<?php
	$userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

  	
        $to = "prasansha.satpathy@gmail.com";
        $body = "";

        $body .= "From : ".$userName. "\r\n";
        $body .= "From : ".$userEmail. "\r\n";
        $body .= "From : ".$message. "\r\n";

    $send = mail($to, $messageSubject, $body);
?>
