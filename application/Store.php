
<?php
session_start();
$id = $_SESSION['id'];
$time = $_POST['timeoff'];
$clinic = $_POST['clinics'];
$mc = $_FILES['mc'];

$host = "host = 127.0.0.1";
$port = "port = 5432";
$dbname = "dbname = leave";
$credentials = "user = postgres password=mayur123";
$db = pg_connect( "$host $port $dbname $credentials");

$query1 = "select cid from Clinic where cname = '$clinic'";
$clinicid = pg_query($db,$query1);
$row = pg_fetch_row($clinicid);

$query2 = "insert into Application values($id,$row[0],'$mc','$time')";

$row1 = pg_query($query2);

if($row1){
	include 'index.html';
}
else{
	include 'Apply.php';
}

?>