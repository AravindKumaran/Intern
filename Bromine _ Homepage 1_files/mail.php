<?php

$Name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['number'];
$mes=$_POST['message'];


$to= "asfiya1605@gmail.com";
$subject='Vintek Solution Intern Response';
$message = "<strong>Name: </strong>".$Name."<br><strong>E-mail ID: </strong>".$email."<br><strong>Mobile number: </strong>".$mobile."<br><strong>Message: </strong>".$mes;

echo "<script>alert('Thank you for the interest!');";
echo  "location.replace(\"http://www.learn.vinteksolution.com/\");</script>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
echo mail($to, $subject, $message, $headers);


?>