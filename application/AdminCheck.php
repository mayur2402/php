<!DOCTYPE html>
<html>
<head>
	<title>Leave Application</title>
	<meta charset="UTF-8">
	<title>leave application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	
	<?php

	$host = "host = 127.0.0.1";
	$port = "port = 5432";
	$dbname = "dbname = leave";
	$credentials = "user = postgres password=mayur123";
	$db = pg_connect( "$host $port $dbname $credentials");

	$date = $_POST['timeoff'];

	$query = "select * from Application where date='$date'";

	$sid = pg_query($query);
	
	while($row = pg_fetch_assoc($sid)){
		echo"<form method = 'POST' action='AdminCheck.php'>
		<div class = 'container p-3'>
				<div class='row'>
					<div class='card p-3 mb-3 mx-auto bg-secondary' style='width: 20rem;'>
						<div class = 'card-header'>
						<div class='embed-responsive' style='padding-bottom:150%'>
    						<embed src=".'Cv1.pdf'." type='application/pdf' width='80%' height='80%'>
   
    						<input type = text name = 'staffid' value = ".$row[sid]." hidden>
						</div>
						</div>
						<div class='card-body'>
							<label for='staffid'>Id of Staff :</label>".
							$row[sid]
							."<div class='form-group'>
							<label for='timeoff'>Day of leave :</label>"
							.$row[date]
							."</div>
						<div class='form-check'>
							<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios1' value='Accepted' checked>
							<label class='form-check-label' for='exampleRadios1'>
								Accepted
							</label>
						</div>
						<div class='form-check'>
							<input class='form-check-input' type='radio' name='exampleRadios' id='exampleRadios2' value='Rejected'>
							<label class='form-check-label' for='exampleRadios2'>
								Rejected
							</label>
						</div>
						</div>
						<div class='card-footer'>
							<input type = 'submit' value = 'submit'>
						</div>
					</div>
				</div>
			</div>
		</form>";	
	}

	?>

	<?php
	$status = $_POST['exampleRadios'];
	$sid = $_POST['staffid'];
	$query = "insert into Status values('$sid','$status')";
	$status_query = pg_query($query);
	include 'Admin.php';
	?>
</body>
</html>

