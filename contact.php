<?php
//get data from form  
$fname = $_POST['fname'];
$fname = $_POST['lname'];
$mobile = $_POST['tel'];
$email= $_POST['email'];

$to = "hapackcis@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $fname . "\r\n  Email = " . $email . "\r\n Mobile =" . $mobile;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect

?>