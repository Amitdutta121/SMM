<?php
	session_start();
	include 'connection.php';
	

	$order_id = time().'-'.mt_rand();
	$service_id = $_POST["servic"];
	$link = $_POST["link"];
	$quantity = $_POST["quantity"];
	$package_id = $_POST["pak"];
	echo $package_id;
	echo "<br />";
	echo $quantity;
	echo "<br />";
	
	$single=0;
	$price=0;
	
	$sqla = "SELECT * FROM packages where package_id='$package_id'";
                $resulta = $conn->query($sqla);
                if ($resulta->num_rows > 0){
                    while($rowa = $resulta->fetch_assoc()) {
						$price = $rowa["package_price"];
						$single= $rowa["package_price"]/$rowa["package_quantity"];
					}
				}
				
				echo $price;
				echo "<br />";
				echo $single;
				echo "<br />";
				$sqlx = "SELECT * FROM custom_price where package_id='$package_id'";
						$resultx = $conn->query($sqlx);
						if ($resultx->num_rows > 0){
							while($rowx = $resultx->fetch_assoc()) {
								$price = $rowx["package_price"];
								$single= $rowx["package_price"]/$rowx["package_quantity"];
							}
						}
				echo $price;
				echo "<br />";
				echo $single;
				echo "<br />";
	
	$total_price = $single * $quantity;
	
	echo $total_price;
	
	$user_id = $_SESSION["username_main"];;
	$status = "Processing";
	
	$order_date = date("Y-m-d");
	
	
	$sql = "INSERT INTO service_order VALUES ('$order_id','$service_id','$package_id','$user_id','$total_price','','','$status','$order_date','$link')";
	if ($conn->query($sql) === true) {
		$sql = "UPDATE user set user_balance = user_balance-$total_price where user_name='$user_id'";
	if ($conn->query($sql) === true) {
		header("Location: index.php");
	}
		
		
	}else{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	

?>