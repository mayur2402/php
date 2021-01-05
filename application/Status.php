<?php
session_start();
$id = $_SESSION['id'];

$host = "host = 127.0.0.1";
$port = "port = 5432";
$dbname = "dbname = leave";
$credentials = "user = postgres password=mayur123";

$db = pg_connect( "$host $port $dbname $credentials");

$query = "select status from Status where sid = '$id'";

$status_query = pg_query($query);

$row = pg_fetch_row($status_query);

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>leave application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class = "container p-3">
		<div class="row">
			<div class="card mx-auto mb-3 p-3 bg-secondary" style="width: 18rem; height : 18rem;">
				<div class="card-header">
					Status Of Application
				</div>
				<div class="card-body">
						<?php
							if($row[0] == Accepted){
								echo "<h4>".Accepted."</h4";
							}
							else if($row[0] == Rejected){
								echo "<h4>".Rejected."</h4";
							}
							else{
								echo "<h4>".pending."</h4>";
							}
						?>
				</div>
				<div class="card-footer">
				<a class="btn btn-primary" href="index.html" role="button">Logout</a>
			</div>
			</div>
		</div>
	</div>
</body>
</html>

