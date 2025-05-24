<?php

require('vendor/autoload.php');

use Razorpay\Api\Api;

session_start();

if(isset($_POST['payagain'])) {
    $track_form = $_POST['track_form'];
    
    $servername = "localhost";
    $username = "u475996608_mba";
    $password = "Ashi@2605";
    $dbname = "u475996608_vibesacademy";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "SELECT * FROM payments WHERE `id` = '".$_POST['payagain']."'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $CustName = $row['CustName'];
        $CustEmail = $row['email'];
        $CustMobile = $row['mobile'];
        $CustMobile = preg_replace('/[^0-9]/', '', $CustMobile);
        $transid = $row['id'];
        $duplicate_retry = $row['duplicate_retry'];
        $duplicate_retry = $duplicate_retry+1;
    } else {
        header('Location:index.php');
        exit;
    }
    
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
    
    date_default_timezone_set("Asia/Kolkata"); 
    $timestamp = time();
    $TXNdatetime = date('Y-m-d H:i:s', $timestamp);
    
    $cleanedName = preg_replace('/[^a-zA-Z]/', '', $CustName);
    $firstFiveLetters = substr($cleanedName, 0, 5);
    $customerID = $transid.strtolower($firstFiveLetters).$CustMobile;
    
    $txnID = substr(hexdec(uniqid()), -6).'D'.date("Ymd").'T'.time();
    $PaymentStatus = '';
    $amount = '499';
    $CourseID = '7DAYS_COURSE';
    
    $_SESSION['SucessID'] = $customerID;
    $_SESSION['SucessName'] = $CustName;
    $_SESSION['SucessEmail'] = $CustEmail;
    $_SESSION['transid'] = $transid;

    // Razorpay API credentials
    $api_key = "rzp_test_j0AdRTrkd74Mb8";
    $api_secret = "SBN9J0ZzbZrQDNWQ7iDLhIwL";
    $redirectUrl = 'https://www.vibesacademy.shrijantech.com/verify.php';

    try {
        // Initialize Razorpay API
        $api = new Api($api_key, $api_secret);
        
        // Create order
        $orderData = [
            'receipt'         => $txnID,
            'amount'          => $amount * 100, // amount in paise
            'currency'        => 'INR',
            'payment_capture' => 1 // auto capture
        ];
        
        $razorpayOrder = $api->order->create($orderData);
        $razorpayOrderId = $razorpayOrder['id'];
        
        // Update payment record in database
        $sql_res = "UPDATE payments SET 
            CourseID = '".$CourseID."', 
            duplicate_track_form = '".$track_form."', 
            Amount = '".$amount."', 
            response = '".json_encode($razorpayOrder)."',
            razorpay_order_id = '".$razorpayOrderId."',
            PaymentStatus = 'created', 
            TXNdatetime = '".$TXNdatetime."', 
            txnID = '".$txnID."', 
            new_txnID = '".$txnID."', 
            customerID = '".$customerID."', 
            duplicate_retry = '".$duplicate_retry."' 
            WHERE id = '".$transid."'";
        
        $conn->query($sql_res);
        
        // Create checkout data
        $checkoutData = [
            "key"               => $api_key,
            "amount"            => $orderData['amount'],
            "name"              => "Vibes Academy",
            "description"       => "Course - i-MBA INFLUENCERS ka MBA",
            "image"             => "https://example.com/your-logo.png",
            "prefill"           => [
                "name"          => $CustName,
                "email"         => $CustEmail,
                "contact"       => $CustMobile,
            ],
            "notes"             => [
                "merchant_order_id" => $customerID,
                "retry_payment"    => "true",
                "original_txn_id"  => $transid
            ],
            "theme"             => [
                "color"         => "#F37254"
            ],
            "order_id"          => $razorpayOrderId,
        ];
        
        $_SESSION['razorpay_order_id'] = $razorpayOrderId;
        
        // Output JavaScript to auto-submit the Razorpay checkout form
        ?>
        <html>
        <head>
            <title>Processing Payment...</title>
        </head>
        <body>
            <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
            <script>
                var options = <?php echo json_encode($checkoutData); ?>;
                options.handler = function (response) {
                    window.location.href = "verify.php?payment_id=" + response.razorpay_payment_id + 
                                          "&order_id=" + response.razorpay_order_id + 
                                          "&signature=" + response.razorpay_signature +
                                          "&retry=true";
                };
                options.modal = {
                    ondismiss: function() {
                        window.location.href = "failed.php?retry=true";
                    }
                };
                var rzp = new Razorpay(options);
                rzp.open();
            </script>
            <p>Redirecting to payment gateway...</p>
        </body>
        </html>
        <?php
        
    } catch (Exception $e) {
        // Log error
        error_log("Razorpay Error: " . $e->getMessage());
        // Update database with error
        $conn->query("UPDATE payments SET response = '".json_encode(['error' => $e->getMessage()])."' WHERE id = '".$transid."'");
        // Redirect to error page
        header("Location: failed.php?error=".urlencode($e->getMessage())."&retry=true");
        exit();
    }
    
    $conn->close();
}
?>