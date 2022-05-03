<?php
$website = $_POST['website'];
$password = $_POST['password'];


// Database connection
	$conn = new mysqli('localhost','bp325','','bp325_test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}
?>