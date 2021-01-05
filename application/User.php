<!DOCTYPE html>
<html>
<head>
	<title>Leave Application</title>
	<meta charset="UTF-8">
	<title>leave application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<div class = "container p-3">
		<div class="row">
			<div class="card mx-auto mb-3 p-3 bg-secondary" style="width: 18rem;" >
				<div class="card-body">
					<h5 class="card-title">CLINICS</h5>
					<label for="clinic"><h3>View Clinic</h3></label>
					<select name="clinics" id="clinicid" class="form-control">
						<?php
						$host = "host = 127.0.0.1";
						$port = "port = 5432";
						$dbname = "dbname = leave";
						$credentials = "user = postgres password=mayur123";
						$db = pg_connect( "$host $port $dbname $credentials");

						$query = "select cname from Clinic";

						$clinic = pg_query($query);

						while($row = pg_fetch_assoc($clinic)){
							echo "<option value='$row[cname]'>".$row[cname]." clinic</option>";
						}
						?>
					</select>
					<h5 class="card-footer">Apply For Leave</h5>
					<a href="Apply.php" class="btn btn-primary">Apply</a>
					<h5 class="card-footer">View status of application</h5>
					<a href="Status.php" class="btn btn-primary">View Status</a>
				</div>
			</div>	
		</div>

	</div>
</body>
</html>