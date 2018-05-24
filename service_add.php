<?php
	session_start();
	include 'connection.php';
	
	$service_title = $_POST["service_name"];
	$type = $_POST["type"];
	
	$id= time().'-'.mt_rand();
	$sql = "INSERT INTO services VALUES ('$id','$service_title','','$type')";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: add_services.php?st=1");
	

?>