<center>
<h1>Employee Details</h1>
<table border=1>
<?php
	echo "<tr>
		<th>Employee Number</th>
		<th>Employee Name</th>
		<th>Employee Salary</th>
		<th>Employee Designation</th>
	</tr>";
	$xml=simplexml_load_file('employee.xml') or die("Unable to load file");
	foreach($xml->Employee as $emp)
	{
		echo"<tr><td>".$emp->Eno."</td>";
		echo"<td>".$emp->Ename."</td>";
		echo"<td>".$emp->Esalary."</td>";
		echo"<td>".$emp->Edesg."</td></tr>";
	}
?>
</table>
</center>
