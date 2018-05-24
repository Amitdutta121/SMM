<?php
	session_start();
	include 'connection.php';
	
	$ids = $_GET["serid"];
	
	
	
	$sql = "DELETE FROM custom_price where custom_price_id='$ids'";
	if ($conn->query($sql) === true) {
		echo $sql;
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: custom_price_list.php");
?>