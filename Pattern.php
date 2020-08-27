<html>
<head>
<title>Pattern Printing</title>
</head>
<body>
<form action = "<?php $_PHP_SELF ?>" method = "GET">
How many Rows<input type = "text" name = "Row"><br>
How many Columns<input type = "text" name = "Col"><br>
<input type = "submit" value = "Print">
</form>
</body>
</html>

<?php
/*
	accept input from user and display below pattern

	input	:	4	4

	output	:	*  *  *  #	1,1  1,2  1,3  1,4		2  3  4  5
			*  *  #  *	2,1  2,2  2,3  2,4		3  4  5  6
			*  #  *  *	3,1  3,2  3,3  3,4		4  5  6  7
			#  *  *  *	4,1  4,2  4,3  4,4		5  6  7  8
*/

$Row = $_GET['Row'];
$Col = $_GET['Col'];

if(isset($Row) && isset($Col))
{
//	int $i = 0,$j = 0;
	if($Row < 0)
	{
		$Row = -$Row;
	}
	if($Col < 0)
	{
		$Col = -$Col;
	}
	if($Row != $Col || $Row == 0 || $Col == 0)
	{
		echo"Invalid arguments";
		return ;
	}
	else
	{
		for($i = 1;$i <= $Row;$i++)
		{
			for($j = 1;$j <= $Col;$j++)
			{
				if($i+$j != $Col+1)
				{
					echo "*\t";
				}
				else
				{
					echo "#\t";
				}
			}
			echo"<br>";
		}
	}
}
?>

