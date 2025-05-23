<?php
session_start();

// Capture UTM parameters from URL
if(!isset($_SESSION['utm_source'])){
	$utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : '';
	$utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '';
	$utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '';
	$utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
	
	// Store UTM parameters in session
	$_SESSION['utm_source'] = $utm_source;
	$_SESSION['utm_medium'] = $utm_medium;
	$_SESSION['utm_campaign'] = $utm_campaign;
	$_SESSION['utm_content'] = $utm_content;
}

?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


function validateInput($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    
    $CustName = validateInput($_POST['CusName']);
    $CustEmail = validateInput($_POST['CusEmail']);
    $CustMobile = validateInput($_POST['CusTel']);
    $CustMobile = preg_replace('/[^0-9]/', '', $CustMobile);
    
  $con = mysqli_connect("localhost", "mba", "mba@123", "mba");

  if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      die();
  }


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


  $userIP = $client_ip;
  $UserDevice = $useragent;
  $UserIPLocation = $state_name;
  
  
   $utm_source = $_SESSION['utm_source'];
    $utm_medium = $_SESSION['utm_medium'];
    $utm_campaign = $_SESSION['utm_campaign'];
  
    
    $server_data = json_encode($_SERVER);

  $sqlInsert = "INSERT INTO leads (CustName, email, mobile, TXNdatetime, userIP, UserDevice, UserIPLocation, utm_source, utm_medium, utm_campaign, request_from ) VALUES ('" . $CustName . "','" . $CustEmail . "','" . $CustMobile . "', '" . $TXNdatetime . "', '" . $userIP . "', '" . $UserDevice . "', '" . $UserIPLocation . "', '" . $utm_source . "', '" . $utm_medium . "', '" . $utm_campaign . "', '" . $server_data . "')";

  if (mysqli_query($con, $sqlInsert)) {
      $id = mysqli_insert_id($con);

 $id = urlencode($id); // Sanitize the $id variable

header('Location: thank_you.php?status=' . $id);

      //echo "New record created successfully. Inserted ID is: " . $id;

  } else {
      echo "Error: " . $sqlInsert . "<br>" . mysqli_error($con);
  }

  mysqli_close($con);
  
  
  
}


          
?>