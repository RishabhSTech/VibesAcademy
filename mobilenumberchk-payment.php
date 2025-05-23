<?php

session_start();

// Establish database connection
$servername = "localhost";
$username = "mba";
$password = "mba@123";
$dbname = "mba";

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve mobile number sent via AJAX
$mobileNumber = $_POST['mobileNumber'];

// Check if mobile number exists in database
$sql = "SELECT id,PaymentStatus,remarks FROM payments WHERE `mobile` LIKE '%$mobileNumber%'  LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mobile number already exists
    //echo 'exists';
    $row = $result->fetch_assoc();
    $id = $row['id'];
    $PaymentStatus = $row['PaymentStatus'];
    $remarks = $row['remarks'];
    
    $_SESSION['payagain'] = $id;
    
    if($PaymentStatus == 'PAYMENT_SUCCESS' && $remarks !=''){
        echo 'pay_success';
    }else{
        echo $id;
    }
    
    
    
    //echo $id;
} else {
    // Mobile number doesn't exist
    echo 'not_exists';
}

$conn->close();
?>
