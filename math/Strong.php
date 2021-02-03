<html>
	<head>
		<title>Solid Number</title>
	</head>
	<body>
		<form action = "<?php $_PHP_SELF ?>" method = "GET">
			<label>Enter Number<input type = "text" name = "num"></label>
			<input type = "submit" value = "ChkStrong" name = "sumbit">
		</form>
	</body>
</html>

<?php
	$no = $_GET['num'];
	if(isset($no))
	{
		$add = 0;
		$fact = 1;
		$n = $no;
		while($n != 0)
		{
			$digit = (int)($n % 10);
			while($digit != 0)
			{		
				$fact = $fact * $digit;
				$digit--;
			}
			$add = $add + $fact;
			$fact = 1;
			$n = (int)($n / 10);
		}
		if($add == $no)
		{
			echo "Strong";
		}
		else
		{
			echo "Not Strong";
		}
	}
	
?>
