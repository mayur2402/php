<html>
	<head>
		<title>Even Odd Difference</title>
	</head>
	<body>
		<form action = "<?php $_PHP_SELF ?>" method = "GET">
			Enter Numbers<input type = "text" name = "Array" placeholder = "separate by ','"><br>
			<input type = "submit" value = "Difference" name = "sumbit">
		</form>
	</body>
</html>
<?php
	$Arr = $_GET['Array'];
	if(isset($_GET['sumbit']))
	{
		if(isset($Arr))
		{
			$ans = 0;
			$Array = explode(',',$Arr);
			$len = count($Array);
			for($iCnt = 0;$iCnt < $len;$iCnt++)
			{
				if($Array[$iCnt] % 2 == 0)
				{
					$ans += $Array[$iCnt];
				}
				else
				{
					$ans -= $Array[$iCnt];
				}
			}
			echo "<br>Difference between sum of even number and sum of odd numbers are ".$ans;
		}
	}
?>
