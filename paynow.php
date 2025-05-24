<?php

require('vendor/autoload.php');

use Razorpay\Api\Api;

session_start();

if(!isset($_SESSION['utm_source'])){
    $utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : '';
    $utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : '';
    $utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : '';
    $utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : '';
    
    $_SESSION['utm_source'] = $utm_source;
    $_SESSION['utm_medium'] = $utm_medium;
    $_SESSION['utm_campaign'] = $utm_campaign;
    $_SESSION['utm_content'] = $utm_content;
}

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['CusName'])) {
    $con = mysqli_connect("localhost", "u475996608_mba", "Ashi@2605", "u475996608_vibesacademy");
    
    if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      die();
    }
    
    $CustName = $_POST['CusName'];
    $CustEmail = $_POST['CusEmail'];
    $CustMobile = $_POST['CusTel'];
    $CustMobile = preg_replace('/[^0-9]/', '', $CustMobile);
    $CustMobile = substr($CustMobile, -10);
    
    $track_form = $_POST['track_form'];
    
    
    date_default_timezone_set("Asia/Kolkata"); 
    $timestamp = time();
    $TXNdatetime = date('Y-m-d H:i:s', $timestamp);
    
    $useragent = $_SERVER ['HTTP_USER_AGENT'];
    $CourseID = '7DAYS_COURSE';
 
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
    
    $api_key = "ce94a7dc45301a";
    $url = "https://ipinfo.io/$ip_address?token=ce94a7dc45301a";
    $response = file_get_contents($url);
    $details = json_decode($response, true);
    $state_name = $details['region'];

    $cleanedName = preg_replace('/[^a-zA-Z]/', '', $CustName);
    $firstFiveLetters = substr($cleanedName, 0, 5);
    $customerID = strtolower($firstFiveLetters).$CustMobile;

    $txnID =  substr(hexdec(uniqid()), -6).'D'.date("Ymd").'T'.time();
    $PaymentStatus  = '';
    $Amount = '499';
    $remarks = '';
    $userIP = $client_ip;
    $UserDevice = $useragent;
    $UserIPLocation = $state_name;
    
    
    $utm_source = $_SESSION['utm_source'];
    $utm_medium = $_SESSION['utm_medium'];
    $utm_campaign = $_SESSION['utm_campaign'];
    $utm_content = $_SESSION['utm_content'];
    $utm_term = 'Online';
    
    $server_data = json_encode($_SERVER);
    
    $sqlInsert = "INSERT INTO payments (CustName, email, mobile, customerID, txnID, PaymentStatus, Amount, TXNdatetime, remarks, userIP, UserDevice, UserIPLocation, utm_source, utm_medium, utm_campaign, utm_term, utm_content, request_from, old_datetime, track_form, CourseID) VALUES ('" . $CustName . "','" . $CustEmail . "','" . $CustMobile . "','" . $customerID . "', '" . $txnID . "', '" . $PaymentStatus . "', '" . $Amount . "', '" . $TXNdatetime . "', '" . $remarks . "', '" . $userIP . "', '" . $UserDevice . "', '" . $UserIPLocation . "', '" . $utm_source . "', '" . $utm_medium . "', '" . $utm_campaign . "', '" . $utm_term . "', '" . $utm_content . "', '" . $server_data . "', '" . $TXNdatetime . "', '" . $track_form . "', '" . $CourseID . "')";

    if (mysqli_query($con, $sqlInsert)) {
        $id = mysqli_insert_id($con);
        
        $cleanedName = preg_replace('/[^a-zA-Z]/', '', $CustName);
        $firstFiveLetters = substr($cleanedName, 0, 5);
        $customerID = $id.strtolower($firstFiveLetters).$CustMobile;
        $sql2 = "UPDATE payments SET customerID = '".$customerID."' WHERE id = '".$id."'";
    
        if ($con->query($sql2) === TRUE) {
             
        } else {
             
        }
        
        $api_key = "rzp_test_j0AdRTrkd74Mb8";
        $api_secret = "SBN9J0ZzbZrQDNWQ7iDLhIwL";
        $redirectUrl = 'https://www.vibesacademy.shrijantech.com/verify.php';
        
        $api = new Api($api_key, $api_secret);
        
        $orderData = [
            'receipt'         => $txnID,
            'amount'          => $Amount * 100,
            'currency'        => 'INR',
            'payment_capture' => 1
        ];
        
        try {
            $razorpayOrder = $api->order->create($orderData);
            
            $razorpayOrderId = $razorpayOrder['id'];
            
            $sql = "UPDATE payments SET response = '".json_encode($razorpayOrder)."' WHERE txnID = '".$txnID."'";
            
            if ($con->query($sql) === FALSE) {
                // Handle error if needed
            }
            
            $checkoutData = [
                "key"               => $api_key,
                "amount"            => $orderData['amount'],
                "name"              => "Vibes Academy",
                "description"      => "Course - i-MBA INFLUENCERS ka MBA",
                "image"             => "",
                "prefill"           => [
                    "name"          => $CustName,
                    "email"         => $CustEmail,
                    "contact"      => $CustMobile,
                ],
                "notes"             => [
                    "merchant_order_id" => $customerID,
                ],
                "theme"             => [
                    "color"         => "#F37254"
                ],
                "order_id"          => $razorpayOrderId,
            ];
            
            $_SESSION['SucessID'] = $customerID;
            $_SESSION['SucessName'] = $CustName;
            $_SESSION['SucessEmail'] = $CustEmail;
            $_SESSION['razorpay_order_id'] = $razorpayOrderId;
            
            $jsonCheckoutData = json_encode($checkoutData);
            
            echo '<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                var options = ' . $jsonCheckoutData . ';
                
                options.handler = function (response) {
                    var form = document.createElement("form");
                    form.method = "POST";
                    form.action = "verify.php";
                    
                    function addInput(name, value) {
                        var input = document.createElement("input");
                        input.type = "hidden";
                        input.name = name;
                        input.value = value;
                        form.appendChild(input);
                    }
                    
                    addInput("txnID", "' . $txnID . '");
                    addInput("razorpay_payment_id", response.razorpay_payment_id);
                    addInput("razorpay_order_id", response.razorpay_order_id);
                    addInput("razorpay_signature", response.razorpay_signature);
                    
                    document.body.appendChild(form);
                    form.submit();
                };
            
                options.modal = {
                    ondismiss: function() {
                        window.location.href = "failed.php";
                    }
                };
            
                var rzp = new Razorpay(options);
                rzp.open();
            </script>';
            
        } catch (Exception $e) {
            header("Location: failed.php?error=".urlencode($e->getMessage()));
        }
    
    } else {
        echo "Error: " . $sqlInsert . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);
}
?>