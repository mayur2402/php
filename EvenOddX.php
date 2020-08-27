<html>
<head>
<title>Even odd difference</title>
</head>
<body>
<form = action = "<?php $_PHP_SELF ?>" method = "GET">
Enter Numbers<input type = "text" name = "Array" placeholder = "separate by ','"><br>
<input type = "submit" value = "Difference">
</form>
</body>
</html>

<?php
	$Arr = $_GET['Array'];
	if(isset($Arr))
	{
		$Array = exclude(',',$Arr,0)
		print_r($Array);
	}
?>
