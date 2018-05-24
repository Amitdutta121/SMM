<?php
	session_start();
	include 'connection.php';
	
	$fund = $_POST["fund"];
	$uname = $_POST["uname"];
	
	
	$sql = "UPDATE user set user_balance=user_balance+$fund where user_name='$uname'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>