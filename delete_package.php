<?php
	session_start();
	include 'connection.php';
	
	$package_id = $_GET["packid"];
	
	$uniqueId= time().'-'.mt_rand();
	
	$sql = "DELETE FROM packages where package_id='$package_id'";
	if ($conn->query($sql) === true) {
		echo $sql;
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	header("Location: managepackage.php");

?>