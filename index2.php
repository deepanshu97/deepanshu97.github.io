<?php
if(isset($_GET['to']))
{
	$to=$_GET['to'];
	if(!empty($to))
	{
$body="hello";
$subject="Hello";
$header="From: someone@gmail.com";
if(mail($to, $subject, $body,$header))
{
	echo 'Email sent';
}
else
{
	echo 'Could not send';
}
}
else
{
	echo 'Please enter email';
}
}
else
{
	echo 'Could not send';
}
?>
