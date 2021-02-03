<?php
$op1=$_POST['op'];
$name=array('Mayur','Sagar','Devarshi','Aniket');
switch($op1)
{
	case 1:
		print_r($name);
		break;
	case 2 :
		$n=sizeof($name);
		echo $n;
		break;
}
?>
