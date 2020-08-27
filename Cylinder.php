<!--
	Accept dimensions of a cylinder and print the surface area and volume 
	(Hint: surface area = 2πrr +2πrh, volume = πr 2 h)
-->

<html>
<head>
<title>Cylinder</title>
<body>
<form method = "POST">
Enter Radius<input type = text name = Radius ><br>
Enter Height<input type = text name = Height ><br>
<input type = "submit" value = "submit">
</form>
</body>
</html>

<?php
	$Radius = $_POST['Radius'];
	$Height = $_POST['Height'];
	
	$area = 2*3.142*$Radius*$Radius + 2*3.142*$Radius*$Height;
	echo "Area of Cylinder is ".$area;

	$volume = 3.142*$Radius*$Radius*$Height;
	echo "Area of Cylinder is ".$volume;

?>


