
  <?php
$name=$_POST['name'];
$destination=$_POST['destination'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$country=$_POST['country'];
$sevice=$_POST['service'];
$to = "tourismatkenya@gmail.com";
$subject = "Application";

$headers = "From: ".$email . "\r\n" .
$apply = "Name:"." ".$name." "."Email"." ".$email." "."Contact"." ".$contact."Country:"." ".$country." "."Destination:"." ".$destination."service"." ".$service;
$msg=$apply;
mail($to,$subject,$msg,$headers);


?>