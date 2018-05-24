<?php
	session_start();
	include 'connection.php';
	
	$uniqueId= time().'-'.mt_rand();
	$name = $_POST["uname"];
	$email = $_POST["email"];
	$role = $_POST["role"];
	$pass = $_POST["pass"];
	$fullname = $_POST["fullname"];
	
	
	
	$sql = "INSERT INTO user VALUES ('$uniqueId', '$name', '$email','$fullname', '$role', '$pass', '67190b2076ccdf40951b613878e6bdf8.png', '0')";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: add_admin.php");
	

?>