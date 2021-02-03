<?php
$name=array('1'=> 'mayur','2'=>'Sagar','3'=>'Aniket',4=>'Devarshi');
$op=$_POST['op'];
switch($op)
{
	case 1:
		echo "Array<br>";
		print_r($name);
		echo "<br>";
		$name1=array_flip($name);
		echo "Array in reverse<br>";
		print_r($name1);
		break;
	case 2:
		echo "Array<br>";
		print_r($name);
		echo "<br>";
		shuffle($name);
		echo "Array in Random order<br>";
		print_r($name);
		break;
}
