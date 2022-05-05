<?php
$website = $_POST['website'];
$password = $_POST['password'];


//Create connection
	$conn = new mysqli('localhost','bp325_db','Razor1928','bp325_passwords');
//Test connection
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	}else{
//Send information and close connection
		$stmt = $conn->prepare("insert into passwords(website, password)
		values(?, ?)");
		$stmt->bind_param("ss",$website, $password);
		$stmt->execute();
		echo "Password saved, press return.";
		$stmt->close();
		$conn->close();
	}
?>