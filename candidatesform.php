<?php
$name=$_POST['your-name'];
$phone_number=$_POST['text1'];
$visitor_email=$_POST['your-email'];
$position=$_POST['text'];


$email_from='irisjohn40@gmail.com';
$email_subject='new form submission';
$email_body ="User name: $name.\n".
              "Phone number:$phone_number.\n".
              "User email:$visitor_email.\n".
              "Position applied for:$position.\n";



$to ="irisjohnrose@gmail.com";
$headers ="From :$email_from\r\n";
$headers="Reply-to :$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers)

header("Locatio: candidates.html ");
