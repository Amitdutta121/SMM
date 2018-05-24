<?php
//Include database configuration file
include('connection.php');

if(isset($_POST["country_id"]) && !empty($_POST["country_id"])){
	$idss = $_POST['country_id'];
    //Get all state data
    $query = $db->query("SELECT * FROM packages WHERE service_id = '$idss'");
    
    //Count total number of rows
    $rowCount = $query->num_rows;
    
    //Display states list
    if($rowCount > 0){
        echo '<option value="">Select state</option>';
        while($row = $query->fetch_assoc()){ 
            echo '<option value="'.$row['package_type'].'">'.$row['package_type'].'</option>';
        }
    }else{
        echo '<option value="">State not available</option>';
    }
}


?>