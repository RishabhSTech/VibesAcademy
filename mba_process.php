<?php
session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
session_start();
if(isset($_POST['CusName'])) {
  $con = mysqli_connect("localhost", "mba", "mba@123", "mba");

  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      die();
  }

  $CustName = $_POST['CusName'];
  $CustEmail = $_POST['CusEmail'];
  $CustMobile = $_POST['CusTel'];
  $CustMobile = preg_replace('/[^0-9]/', '', $CustMobile);


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

$ip_address = get_client_ip();; // Example IP address

// Your ipstack API access key
$api_key = "ce94a7dc45301a";
$url = "https://ipinfo.io/$ip_address?token=ce94a7dc45301a";
$response = file_get_contents($url);
$details = json_decode($response, true);
$state_name = $details['region'];


  $customerID = uniqid();
  $txnID =  uniqid();
  $PaymentStatus  = '';
  $Amount = '0.00';
  $remarks = '';
  $userIP = $client_ip;
  $UserDevice = $useragent;
  $UserIPLocation = $state_name;
  
$_SESSION['txnIDfee'] = $txnID;
  
   $utm_source = $_SESSION['utm_source'];
    $utm_medium = $_SESSION['utm_medium'];
    $utm_campaign = $_SESSION['utm_campaign'];
    $utm_term = 'Online';


  $sqlInsert = "INSERT INTO payments (CustName, email, mobile, customerID, txnID, PaymentStatus, Amount, TXNdatetime, remarks, userIP, UserDevice, UserIPLocation, utm_source, utm_medium, utm_campaign, utm_term ) VALUES ('" . $CustName . "','" . $CustEmail . "','" . $CustMobile . "','" . $customerID . "', '" . $txnID . "', '" . $PaymentStatus . "', '" . $Amount . "', '" . $TXNdatetime . "', '" . $remarks . "', '" . $userIP . "', '" . $UserDevice . "', '" . $UserIPLocation . "', '" . $utm_source . "', '" . $utm_medium . "', '" . $utm_campaign . "', '" . $utm_term . "')";

  if (mysqli_query($con, $sqlInsert)) {
      $id = mysqli_insert_id($con);
    
   header("Location: thankyou.php?txnstatus=success&TxnnID=$txnID");
    
  } else {
      echo "Error: " . $sqlInsert . "<br>" . mysqli_error($con);
  }

  mysqli_close($con);
}

          
?>