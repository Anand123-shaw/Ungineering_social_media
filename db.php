<?php
    $hostname="127.0.0.1";
    $username="root";
    $db_password="123456";
    $db_name="social_media";
    
    $conn = mysqli_connect($hostname, $username, $db_password, $db_name);
    if (!$conn) {
         die("connection failed:".mysqli_connect_error());
    }
?>

    
