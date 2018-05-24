<?php
	session_start();
	include 'connection.php';
	
	$ids = $_GET["serid"];
	
	$sql = "DELETE FROM services where service_id='$ids'";
	if ($conn->query($sql) === true) {
		echo $sql;
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: manageservices.php");
?>