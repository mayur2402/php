<?php
$to=$_POST['to'];
$subject=$_POST['sub'];
$message=$_POST['msg'];
$from="localhost";
$headers="From : $from";
mail($to,$subject,$message,$headers);
echo "Mail send";
?>
