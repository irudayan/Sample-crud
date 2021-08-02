<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "live";

$conn = mysqli_connect("$servername","$username","$password","$dbname");

if ($conn->connect_error) {
	echo("connection failed".$connect_error);
}
else{
	echo "connected sucessfully";
}
?>
