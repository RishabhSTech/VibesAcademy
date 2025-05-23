<?php
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
$sql = "SELECT * FROM payments WHERE mobile = '$mobileNumber'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mobile number already exists
    echo 'exists';
} else {
    // Mobile number doesn't exist
    echo 'not_exists';
}

$conn->close();
?>
