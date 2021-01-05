<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>leave application</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
	<form method="POST" action="Admin.php">
		<div class = "container p-3">
			<div class="row">
				<div class="card mx-auto mb-3 p-3" >
					<div class="card-body">
						<h5 class="card-title">Application Form</h5>
						<div class="form-group">
							<label for="timeoff">Time of leave</label>
							<input type="date" name = "timeoff" class="form-control" id="timeoff1" placeholder=" " required="true">
						</div>
						<div class="form-group">
							<embed src="Cv1.pdf" width="400px" height="400px" />
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
							<label class="form-check-label" for="exampleRadios1">
								Accepted
							</label>
						</div>
						<div class="form-check">
							<input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
							<label class="form-check-label" for="exampleRadios2">
								Rejected
							</label>
						</div>
						<button type="submit" class="btn btn-primary">Submit</button>
					</div>
				</div>	
			</div>
		</div>
	</form>
</body>
</html>

<?php

	$var = $_POST['']

?>
