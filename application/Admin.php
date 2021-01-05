<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>leave application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="AdminCheck.php">
		<div class = "container p-3">
			<div class="row">
				<div class="card mx-auto mb-3 p-3 bg-secondary" style="width: 18rem;" >
					<div class="card-body">
						<h5 class="card-title">View Applications</h5>
						<div class="form-group">
							<label for="timeoff">Select Day</label>
							<input type="date" name = "timeoff" class="form-control" id="timeoff1" placeholder=" " required="true">
						</div>
						<button type="submit" class="btn btn-primary">View</button>
					</div>
				</div>	
			</div>
		</div>
	</form>
</body>
</html>
