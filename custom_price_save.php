<?php
	session_start();
	include 'connection.php';
	
	$service_id = $_POST["ser_id"];
	$username = $_POST["uname"];
	
	$price = $_POST["nprice"];
	$quantity = $_POST["quantity"];
	$type = $_POST["type"];
	
	$uniqueId= time().'-'.mt_rand();
	
	$sql = "INSERT INTO custom_price VALUES ('$uniqueId', '$service_id','$uniqueId', '$price', '$username','$quantity','$type')";
	if ($conn->query($sql) === true) {
		echo $sql;
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: custom_price.php");
?>