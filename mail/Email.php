<?php
$mail=$_POST['email'];
if(substr_count($mail,"@")==1)
{
	echo $mail." is Valid Email";
}
else
{
	echo $mail." is Invalid Email";
}
?>
