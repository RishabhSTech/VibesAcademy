<?php
session_start();


if(isset($_POST['CusName'])) {
    
    $conn = mysqli_connect("localhost", "mba", "mba@123", "mba");
    
    $CustName = $_POST['CusName'];
    $CustEmail = $_POST['CusEmail'];
    $CustMobile = $_POST['CusTel'];
    $CustMobile = preg_replace('/[^0-9]/', '', $CustMobile);
    $transid = $_POST['transid'];
    
    
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
    
    $ip_address = get_client_ip();
    
    date_default_timezone_set("Asia/Kolkata"); 
    $timestamp = time();
    $TXNdatetime = date('Y-m-d H:i:s', $timestamp);
    $api_key = "ce94a7dc45301a";
    $url = "https://ipinfo.io/$ip_address?token=ce94a7dc45301a";
    $response = file_get_contents($url);
    $details = json_decode($response, true);
    $server_data = json_encode($_SERVER);
    
    
    $merchantId = 'VIBESONLINE';
    $apiKey="0f46e587-b588-466f-86e8-d713c2a99596";
    //$redirectUrl = 'https://www.thevibes.academy/thank-you.php';
    $redirectUrl = 'https://www.thevibes.academy/verify.php';
    
    //$customerID = uniqid();
    
    $cleanedName = preg_replace('/[^a-zA-Z]/', '', $CustName);
    $firstFiveLetters = substr($cleanedName, 0, 5);
    $customerID = $transid.strtolower($firstFiveLetters).$CustMobile;
    
    //$txnID =  uniqid();
    $txnID =  substr(hexdec(uniqid()), -6).'D'.date("Ymd").'T'.time();
    $PaymentStatus  = '';
    $amount = '499';
    
    $order_id = $customerID; 
    $name= $CustName;
    $email=$CustEmail;
    $mobile=$CustMobile;
    
    $_SESSION['SucessID'] = $customerID;
    $_SESSION['SucessName'] = $CustName;
    $_SESSION['SucessEmail'] = $CustEmail;
    $_SESSION['transid'] = $transid;

    $description = 'Coures - i-MBA INFLUENCERS ka MBA';
    
    $paymentData = array(
        'merchantId' => $merchantId,
        'merchantTransactionId' => "$txnID",
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
    $salt_index = 1;
    $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
    $sha256 = hash("sha256", $payload);
    $final_x_header = $sha256 . '###' . $salt_index;
    $request = json_encode(array('request'=>$payloadMain));
    
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
        $res = json_decode($response);
        
        $sql_res = "UPDATE payments SET Amount = '".$amount."',response = '".$response."' WHERE id = '".$transid."'";
    
        if ($conn->query($sql_res) === TRUE) {
             
        } else {
             
        }
        
        if(isset($res->success) && $res->success=='1'){
            
            $payUrl=$res->data->instrumentResponse->redirectInfo->url;
            
            $servername = "localhost";
            $username = "mba";
            $password = "mba@123";
            $dbname = "mba";
            
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            
            date_default_timezone_set("Asia/Kolkata"); 
            $timestamp = time();
            $TXNdatetime = date('Y-m-d H:i:s', $timestamp);
            $sql = "UPDATE payments SET Amount = '".$amount."',pay_by_whatsapp = '1', TXNdatetime = '".$TXNdatetime."',  txnID = '".$txnID."', new_txnID = '".$txnID."', customerID = '".$customerID."', response = '".$response."' WHERE id = '".$transid."'";
            
            if ($conn->query($sql) === TRUE) {
                    
            } else {
                    
            }
            
            
            
            header('Location:'.$payUrl);
    
    
        }else{
            header("Location: failed.php");
        }
    
    }
    
}


          
?>