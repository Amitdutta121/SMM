<?php
	session_start();
	include 'connection.php';
	
	$order_id = $_GET["order_id"];
	
	$sql = "DELETE FROM service_order where order_id='$order_id'";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: ".$_SERVER['HTTP_REFERER']);
	
?>