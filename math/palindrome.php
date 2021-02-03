<?php
$string=$_POST['s'];
$s1=array();
$flag=0;
$n=strlen($string);
for($i=0;$i<$n;$i++)
{
	array_push($s1,$string[$i]);
}
for($i=0;$i<$n;$i++)
{
	if(array_pop($s1)!=$string[$i])
	{
		echo "Not Palindrome";
		break;
	}
}
if($i==$n)
{
	echo "Palindrome";
}
?>
