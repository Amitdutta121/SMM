<?php
	session_start();
	include 'connection.php';
	
	$name = $_POST["uname"];
	$ids = $_POST["ids"];
	$fname = $_POST["fullname"];
	$email = $_POST["email"];
	$pass= $_POST["pass"];
	$role = $_POST["role"];
	
	$sql = "UPDATE user set user_email='$email', user_type='$role', user_password=$pass, user_name='$name', user_full_name='$fname' where user_id='$ids'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: add_admin.php");
	

?>