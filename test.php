<?php
	include 'connection.php';
	
	$price ="";
$sql = "SELECT * FROM services";
                $result = $conn->query($sql);
                if ($result->num_rows > 0){
                    while($row = $result->fetch_assoc()) {
						$idd = $row["service_id"];
						
						$price = $row["service_price"];
						
						$sql_product = "SELECT * FROM custom_price where user_id='amitdutta121' && service_id='$idd'";
                        $result1 = $conn->query($sql_product);
                        while($row1 = $result1->fetch_assoc()) {
                            $price = $row1["service_price"];
							
                        }
						echo $price."<br />";
					}
				}
?>