<?php 
	session_start();
	$_SESSION["cart_id"] = array();
	$_SESSION["cart_quantity"] = array();
	include 'connection.php';
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name = $_POST["uname"];
		$pass = $_POST["pass"];
	}
	
	$sql = "SELECT * from user where user_name='$name'";
	$result = $conn->query($sql);
                        

    while($row = $result->fetch_assoc()) {
		if($pass == $row["user_password"]){
			echo "welcome you have successfully logeed in";
			$type = $row["user_type"];
			echo $type;
			
			$_SESSION["username_main"] = $name;
			$_SESSION["main_user_type"] = $type;
			header("Location: index.php");
			
			exit();
		}else {
			echo "username and password doesn't match";
			?>
				<a href="login.php">Please Login</a>
			<?php
		}
    }
?>