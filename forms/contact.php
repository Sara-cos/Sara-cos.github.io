<?php
  
  $receiving_email_address = 'prasansha.satpathy@gmail.com';

//  if(file_exists($php_email_form = '../assets/vendor/php-email-form/php-email-form.php' )) {
//     include( $php_email_form );
//   } else {
//     die( 'Unable to load the "PHP Email Form" Library!');
//   } 

//   $contact = new PHP_Email_Form;
//   $contact->ajax = true; $contact->from_email = $_POST['email'];echo $contact->send();add_message( $_POST['email'], 'Email');
  
  $to = $receiving_email_address;
  $from_name = $_POST['name'];
  $from_email = $_POST['email'];
  $subject = $_POST['subject'];

 
//   $contact->smtp = array(
//     'host' => 'smtp.gmail.com',
//     'username' => 'prasansha.satpathy@gmail.com',
//     'password' => 'pass',
//     'port' => '587'
//   );
  

  $body = $_POST['name'], 'From');
  $body = $_POST['email'], 'Email');
  $body = $_POST['message'], 'Message', 10);

  $send = mail($to, $subject, $body);
?>
