<?php
    session_start();
	include 'connection.php';
	
	
	$uname = $_SESSION["username_main"];
	
	?>
	<select class="form-control" name="pak">
	<?php
    
    if(isset($_POST["ids"]) && !empty($_POST["ids"])){

        $res = "";
        $id = $_POST["ids"];
        ?>

        <?php

        $sql = "SELECT * FROM packages WHERE service_id='$id'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $res .= "<option value='".$row["package_id"]."'>".$row["package_type"]."</option>";
            }
        }
		
		$sql = "SELECT * FROM custom_price WHERE service_id='$id' && user_id='$uname'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $res .= "<option value='".$row["package_id"]."'>".$row["package_type"]."</option>";
            }
        }
		
        echo $res;
?>
</select>
            <?php
			
    }
?>