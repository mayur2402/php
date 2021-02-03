<?php
$mail=$_POST['email'];
if(filter_var($mail,FILTER_VALIDATE_EMAIL))
{
	echo "Valid Mail";
}
else
{
	echo "Invalid Mail";
}
?>

