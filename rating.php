<?php

$Name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['number'];
$mes=$_POST['message'];
$star=$_POST['rating'];

$to= "aravind@vinteksolution.com,intern@vinteksolution.com,srinivasansm@vinteksolution.com,asfiya@vinteksolution.com";
$subject='Vintek Solution Intern Response';
$message = "<strong>Name: </strong>".$Name."<br><strong>E-mail ID: </strong>".$email."<br><strong>Mobile number: </strong>".$mobile."<br><strong>Message: </strong>".$mes"<br><strong>Rating: </strong>".$star;

echo "<script>alert('Thank you for your rating!');";
echo  "location.replace(\"http://learn.vinteksolution.com/\");</script>";
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
echo mail($to, $subject, $message, $headers);


?>