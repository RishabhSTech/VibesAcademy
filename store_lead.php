<?php

session_start();

$servername = "localhost";
$username = "mba";
$password = "mba@123";
$dbname = "mba";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$user_mob = $_POST['user_mob'];


date_default_timezone_set("Asia/Kolkata"); 
$timestamp = time();
$TXNdatetime = date('Y-m-d H:i:s', $timestamp);

$useragent = $_SERVER ['HTTP_USER_AGENT'];

function get_client_ip() {
    $ipaddress = '';
    if (getenv('HTTP_CLIENT_IP'))
    $ipaddress = getenv('HTTP_CLIENT_IP');
    else if(getenv('HTTP_X_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_X_FORWARDED_FOR');
    else if(getenv('HTTP_X_FORWARDED'))
    $ipaddress = getenv('HTTP_X_FORWARDED');
    else if(getenv('HTTP_FORWARDED_FOR'))
    $ipaddress = getenv('HTTP_FORWARDED_FOR');
    else if(getenv('HTTP_FORWARDED'))
    $ipaddress = getenv('HTTP_FORWARDED');
    else if(getenv('REMOTE_ADDR'))
    $ipaddress = getenv('REMOTE_ADDR');
    else
    $ipaddress = 'UNKNOWN';
    return $ipaddress;
}


$client_ip = get_client_ip();

$ip_address = get_client_ip();


$url = "https://ipinfo.io/$ip_address?token=ce94a7dc45301a";
$response = file_get_contents($url);
$details = json_decode($response, true);
$state_name = $details['region'];


$userIP = $client_ip;
$UserDevice = $useragent;
$UserIPLocation = $state_name;


$utm_source = '';//$_SESSION['utm_source'];
$utm_medium = '';//$_SESSION['utm_medium'];
$utm_campaign = '';//$_SESSION['utm_campaign'];


$server_data = json_encode($_SERVER);

$sqlInsert = "INSERT INTO leads (CustName, email, mobile, TXNdatetime, userIP, UserDevice, UserIPLocation, utm_source, utm_medium, utm_campaign, request_from ) VALUES ('N/A','N/A','" . $user_mob . "', '" . $TXNdatetime . "', '" . $userIP . "', '" . $UserDevice . "', '" . $UserIPLocation . "', '" . $utm_source . "', '" . $utm_medium . "', '" . $utm_campaign . "', '" . $server_data . "')";

if (mysqli_query($conn, $sqlInsert)) {
    $id = mysqli_insert_id($conn);
}
exit;
?>
