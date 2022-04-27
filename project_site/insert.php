<?php
$website = $_POST['website'];
$password = $_POST['password'];

if (!empty($website) || !empty($password {
	$host = "localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$dbName = "bp325_passwords";
	
	$conn = new mysqli($)
	
	if (mysql_connect_error()){
		die('Connection Error('. mysql_connect_errno().')'.mysql_connect_error());
		
	} else {
		$SELECT = "SELECT website from bp325_passwords Where website = ? Limit 1";
		$INSERT = "INSERT Into bp325_passwords (website, password) values(?, ?)";
		
		$stmt = $conn->prepare($SELECT);
		$stmt ->bind_param("s" , $website);
		$stmt ->execute();
		$stmt ->bind_result($website);
		$stmt ->store_result($email);
		$rnum = $stmt->num_rows;
		
		if ($rnum==0) {
			$stmt->close();
			$stmt = $conn->prepare($INSERT);
			$stmt ->bind_param("ss", $website, $password);
			$stmt ->execute();
			echo "New record inserted successfully";
		} else {
			echo "You already have a password saved for this site";
		}
		$stmt->close();
		$conn->close();
	}
	
} else { 
echo "All fields are required";
die();

}
?>