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
//session_start();
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
//session_start();
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
    
    $ip_address = get_client_ip(); // Example IP address
    
    // Your ipstack API access key
    $api_key = "ce94a7dc45301a";
    $url = "https://ipinfo.io/$ip_address?token=ce94a7dc45301a";
    $response = file_get_contents($url);
    $details = json_decode($response, true);
    $state_name = $details['region'];


    //$customerID = uniqid();
    
    $cleanedName = preg_replace('/[^a-zA-Z]/', '', $CustName);
    $firstFiveLetters = substr($cleanedName, 0, 5);
    $customerID = strtolower($firstFiveLetters).$CustMobile;

    //$txnID =  uniqid();
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
        
        // Replace these with your actual PhonePe API credentials
        
        $merchantId = 'VIBESONLINE'; // sandbox or test merchantId
        $apiKey="0f46e587-b588-466f-86e8-d713c2a99596"; // sandbox or test APIKEY
        //$redirectUrl = 'https://www.thevibes.academy/thank-you.php';
        $redirectUrl = 'https://www.thevibes.academy/verify.php';
        
        
        // Set transaction details
        $order_id = $customerID; 
        $name= $CustName;
        $email=$CustEmail;
        $mobile=$CustMobile;
        $amount = $Amount; // amount in INR
        $description = 'Coures - i-MBA INFLUENCERS ka MBA';
        
        
        $paymentData = array(
            'merchantId' => $merchantId,
            'merchantTransactionId' => "$txnID", // test transactionID
            "merchantUserId"=>"$customerID",
            'amount' => $amount*100,
            'redirectUrl'=>$redirectUrl,
            'redirectMode'=>"POST",
            'callbackUrl'=>$redirectUrl,
            "merchantOrderId"=>$order_id,
            "mobileNumber"=>$mobile,
            "message"=>$description,
            "email"=>$email,
            "shortName"=>$name,
            "paymentInstrument"=> array(    
            "type"=> "PAY_PAGE",
            )
        );
        
        
        
        $jsonencode = json_encode($paymentData);
        $payloadMain = base64_encode($jsonencode);
        $salt_index = 1; //key index 1
        $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
        $sha256 = hash("sha256", $payload);
        $final_x_header = $sha256 . '###' . $salt_index;
        $request = json_encode(array('request'=>$payloadMain));
        
        //print_r($request);
                
        $curl = curl_init();
        curl_setopt_array($curl, [
        CURLOPT_URL => "https://api.phonepe.com/apis/hermes/pg/v1/pay",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => $request,
        CURLOPT_HTTPHEADER => [
        "Content-Type: application/json",
        "X-VERIFY: " . $final_x_header,
        "accept: application/json"
        ],
        ]);
        
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
    
        if ($err) {
            echo "cURL Error #:" . $err;
        } else {
            
            $sql = "UPDATE payments SET response = '".$response."' WHERE txnID = '".$txnID."'";
    
            if ($con->query($sql) === TRUE) {
                 
            } else {
                 
            }
            $res = json_decode($response);
            
            if(isset($res->success) && $res->success=='1'){
                $paymentCode=$res->code;
                $paymentMsg=$res->message;
                $payUrl=$res->data->instrumentResponse->redirectInfo->url;
                
                //session_start();
                
                $_SESSION['SucessID'] = $customerID;
                $_SESSION['SucessName'] = $CustName;
                $_SESSION['SucessEmail'] = $CustEmail;
                
                header('Location:'.$payUrl) ;
        
        
            }else{
                header("Location: failed.php");
            }
        
        }
    
    
        //echo "New record created successfully. Inserted ID is: " . $id;
    } else {
        echo "Error: " . $sqlInsert . "<br>" . mysqli_error($con);
    }
    
    mysqli_close($con);
}


          
?>