<?php
	session_start();
	include 'connection.php';
	
	$service_id = $_POST["service"];
	$type = $_POST["type"];
	$price = $_POST["price"];
	$quantity = $_POST["quantity"];
	
	$uniqueId= time().'-'.mt_rand();
	
	$sql = "INSERT INTO packages VALUES('$uniqueId','$service_id','$price','$quantity','$type')";
	if ($conn->query($sql) === true) {
		echo $sql;
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	header("Location: managepackage.php");

?>