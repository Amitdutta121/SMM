<?php
	session_start();
	include 'connection.php';
	
	$ids = $_POST["ser_id"];
	$serviceName = $_POST["service_name"];
	$type = $_POST["type"];
	
	$sql = "UPDATE services set service_title='$serviceName',service_type='$type' where service_id='$ids'";
	if ($conn->query($sql) === true) {
		echo $sql;
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	header("Location: manageservices.php");
	
	

?>