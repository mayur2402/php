<?php
session_start();

$mail = $_POST['email'];
$pass = $_POST['password'];
$usr = $_POST['user'];

$host = "host = 127.0.0.1";
$port = "port = 5432";
$dbname = "dbname = leave";
$credentials = "user = postgres password=mayur123";

$db = pg_connect( "$host $port $dbname $credentials");

if($usr != 'select'){
	if(isset($mail) && isset($pass)){
		if($usr == 'Admin'){
			$query = "select aid from Admin where aemail='$mail' and apass='$pass'";

			$user = pg_query($db,$query);

			$row = pg_fetch_row($user);

			if($row[0]){
				include 'Admin.php';
			}
			else{

				include 'index.html';
			}
		}
		else if($usr == 'Staff'){
			$query = "select sid from Staff where semail='$mail' and spass='$pass'";

			$user = pg_query($db,$query);

			$row = pg_fetch_row($user);

			$_SESSION['id'] = $row[0];

			if($row[0]){
				include 'User.php';
			}
			else{
				echo '<script type="text/JavaScript">  
				alert("Invalid Staff member"); 
				</script>';
				include 'index.html';
			}
		}
	}
}
else{
	echo '<script type="text/JavaScript">  
	alert("please select user"); 
	</script>' 
	; 
	include 'index.html';
}


?>
