<?php
if(isset($_GET['to']))
{
	$to=$_GET['to'];
	if(!empty($to))
	{
		echo 'Hello';
	}
else
{
	echo 'Sorry';
}
}
else
{
	echo 'Sorry';
}

?>
