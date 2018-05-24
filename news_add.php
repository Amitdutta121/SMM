<?php
	
	include 'connection.php';
	
	$news_title = $_POST["title"];
	$news_des = $_POST["des"];
	
	$id= time().'-'.mt_rand();
	$sql = "INSERT INTO news VALUES ('$id','$news_title','$news_des',CURRENT_DATE(), CURRENT_TIME())";
	if ($conn->query($sql) === true) {
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	header("Location: managenews.php");
	

?>