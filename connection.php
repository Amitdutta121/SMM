<?php
    $server = 'localhost';
    $username = 'root';
    $password = "";
    $db_name = 'smm';

    $conn = new mysqli($server,$username,$password,$db_name);

    if($conn->connect_error){
        echo "Faild to connect with the database". $conn->connect_error;
    }else{
		
    }
?>