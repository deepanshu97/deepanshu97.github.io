<?php
$to='deepanshuchauhan.02@gmail.com';
       $subject='Contact Mail';
       $body = 'Hello';
       $headers = "From: someone@gmail.com"
       if(@mail($to,$subject,$body,$headers))
       {
       	echo 'Email has been successfully sent';
       } 
       else
       {
       	echo 'Some error occured. Please try again later';
       }
?>
