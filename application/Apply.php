<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>leave application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="Store.php" enctype="multipart/form-data">
		<div class = "container p-3">
			<div class="row">
				<div class="card mx-auto mb-3 p-3 bg-secondary" style="width: 18rem;" >
					<div class="card-body">
						<h5 class="card-title">Application Form</h5>
						<div class="form-group">
							<label for="timeoff">Enter Time to visit doctor</label>
							<input type="date" name = "timeoff" class="form-control" id="timeoff1" placeholder=" " required="true">
						</div>
						<div class="form-group">
							<label for="clinic">Select Clinic</label>
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
						</div>
						<div class="form-group">
							<label for="MC">Upload Medical Certificate</label>
							<input type="file" id="myFile" name="mc">
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>	
			</div>
		</div>
	</form>
</body>
</html>
