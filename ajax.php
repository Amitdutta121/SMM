<?php
include 'connection.php';
    if (isset($_GET["service"]) && !empty($_GET["service"])){
        $id = $_GET["service"];
        $query = "SELECT * FROM packages WHERE service_id='$id'";
        $do = mysqli_query($conn, $query);
        $count= mysql_num_rows($do);
        if($count>0){
            while ($row = mysqli_fetch_array($do)){
               ?>
                <option value="<?php echo $row["package_type"] ?>"><?php echo $row["package_type"] ?></option>
    <?php
            }
        }
    }else{
        echo "<option>NO Option available</option>";
    }
?>