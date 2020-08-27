<html>
<head>
<title>Perfect Number</title>
</head>
<body>
<form action = "<?php $_php_self ?>" method = "GET"/>
Enter Number<input type = "text" name = "number"/>
<input type = "submit" value = "check"/>
</form>
</body>
</html>

<?php


	$number = $_GET["number"];

	if(isset($number))
	{
	function ChkPerfect($no)
	{
		$iAdd = 1;
		for ($iCnt = 2;$iCnt < $no;$iCnt++)
		{
			if($no % $iCnt == 0)
			{
				$iAdd = $iAdd + $iCnt;
			}
			if($iAdd > $no)
			{
				break;
			}
		}
	
		if ($iAdd == $no)
		{
			echo $no." is Perfect Number";
		}
		else
		{
			echo $no." is not Perfect Number";
		}
	}
	if($number < 0)
	{
		$number = -$number;
	}
	if($number == 0 || $number == 1)
	{
		echo "Not Perfect";
	}
	ChkPerfect($number);
}
?>
