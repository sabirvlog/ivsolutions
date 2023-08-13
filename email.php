<?php

$name=$_POST['name'];
$email=$_POST['email'];
$number=$_POST['number'];
$message=$_POST['message'];

$to="Salehimranjanjua@gmail.com";
$subject=$name."\n".$number;
$headers="From: $email";


if (mail($to,$subject,$message,$headers)){
    echo "<h3>mail successfuly send</h3>";
}
else {
    echo "<h3>mail faild to send</h3>";
    
}




?>