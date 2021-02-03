<?php
$e=$_POST['email'];
if(ereg("^[_a-z0-9-]+(\.[_a-z0-9-])*@[_a-z0-9-]+(\.[_a-z0-9])",$e))
{
	echo "Valid mail";
}
else
{
	echo "Invalid";
}
?>
