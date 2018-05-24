<?php
	session_start();
	include 'connection.php';
	
	$id = $_GET["admin"];
	
	$sql = "DELETE FROM user where 	user_id='$id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>