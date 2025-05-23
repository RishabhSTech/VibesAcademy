<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $servername = "localhost";
    $username = "mba";
    $password = "mba@123";
    $dbname = "mba";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `btnclick`(`name`) VALUES ('Paynow click')";
    $result = $conn->query($sql);
}
    ?>