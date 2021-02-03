<?php
$n=$_POST['no'];
if(is_numeric($n) && $n>0)
{
	echo "Factorial is ".fact($n);
}
else
{
	echo "Enter valid number";
}
function fact($n)
{
	$f=1;
	for($i=1;$i<=$n;$i++)
	{
		$f=$f*$i;
	}
	return $f;
}
?>
