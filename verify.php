<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if(!isset($_POST['transactionId']) || $_POST['transactionId'] == ''){
    header("Location: index.php");
    exit();
}

$gateway = (object) [
    'token' => 'VIBESONLINE',
    'secret_key' => '0f46e587-b588-466f-86e8-d713c2a99596',
];

$orderId = $_POST['transactionId'];

$encodeIn265 = hash('sha256', '/pg/v1/status/' . $gateway->token . '/' . $orderId . $gateway->secret_key) . '###1';

$headers = [
    'Content-Type: application/json',
    'X-MERCHANT-ID: ' . $gateway->token,
    'X-VERIFY: ' . $encodeIn265,
    'Accept: application/json',
];

$phonePeStatusUrl = 'https://api.phonepe.com/apis/hermes/pg/v1/status/' . $gateway->token . '/' . $orderId;

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $phonePeStatusUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);
curl_close($ch);

$api_response = json_decode($response);

if ($api_response->code == "PAYMENT_SUCCESS") {
    
   //echo '<Pre/>'; print_r($api_response);
   
   //--- update payment details
   
    $remarkid = $api_response->data->transactionId;
    $txnIDnew = $api_response->data->merchantTransactionId;
    $code21 = $api_response->code;
    //$providerReferenceId = $api_response->providerReferenceId;
    
    $servername = "localhost";
    $username = "mba";
    $password = "mba@123";
    $dbname = "mba";
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
      if ($conn->connect_error) {
             die("Connection failed: " . $conn->connect_error);
    }
    
    date_default_timezone_set("Asia/Kolkata"); 
    $timestamp = time();
    $TXNdatetime = date('Y-m-d H:i:s', $timestamp);
    $sql = "UPDATE payments SET final_status = '1', TXNdatetime = '".$TXNdatetime."', PaymentStatus = '".$code21."', remarks = '".$remarkid."', txnID = '".$txnIDnew."', response = '".$response."' WHERE txnID = '".$txnIDnew."'";
    
    if ($conn->query($sql) === TRUE) {
             //echo "Record updated successfully";
    } else {
            // echo "Error updating record: " . $conn->error;
    }
    
    $conn->close();
    
    
    
    
    //--- send mail 
    
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

	$sqlQuery = "SELECT * FROM `payments` WHERE txnID  = '".$txnIDnew."'";
	
	$result = mysqli_query($conn, $sqlQuery);	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	  
    if($row != null || !empty($row)){
        
        /*
        require_once('PHPMailer/Exception.php');
        require_once('PHPMailer/OAuth.php');
        require_once('PHPMailer/PHPMailer.php');
        require_once('PHPMailer/SMTP.php');
        require_once('PHPMailer/POP3.php');
        
        $welcome_msg = 'Dear <strong>'.$row["CustName"].'</strong>,<br><br>
        
        This email is to confirm your registration for this i-MBA course with The Vibes Academy. <br/>
        <br/>
        In case you require further details, please contact us on support@thevibes.academy <br/> <br/>
        
        Warm regards,<br>
        The Vibes Academy';
        
        
        $usermail = $row['email'];
         
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "localhost";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '587';
        $mail->isHTML();
        $mail->Username = 'hello@thevibes.academy';
        $mail->Password = 'zhgtnzvvdemuemue';
        $mail->SetFrom('hello@thevibes.academy','The Vibes Academy');
        $mail->Subject = "Booking Confirmation";
        $mail->Body =  $welcome_msg;
        $mail->AddAddress($usermail);
        
        //$mail->SMTPDebug  = 1;
        
        $result = $mail->Send();
            
        
        $welcome_msg2 = '
        
         Dear Admin<br><br/>
        
        Below is new booking details <br/><br/>
    
        
        <table border=1>
        
        <tr>
            <td>Name</td>
            <td>'.$row["CustName"].'</td>
        </tr>
         <tr>
            <td>Email</td>
            <td>'.$row["email"].'</td>
        </tr>
         <tr>
            <td>Mobile</td>
            <td>'.$row["mobile"].'</td>
        </tr>
         <tr>
            <td>Payment Status</td>
            <td>'.$row["PaymentStatus"].'</td>
        </tr>
         <tr>
            <td>txnID</td>
            <td>'.$row["txnID"].'</td>
        </tr>
         <tr>
            <td>customer ID</td>
            <td>'.$row["customerID"].'</td>
        </tr>
         <tr>
            <td>remarks </td>
            <td>'.$row["remarks"].'</td>
        </tr>
        <tr>
            <td>TXNdatetime</td>
            <td>'.$row["TXNdatetime"].'</td>
        </tr>
           <tr>
            <td>User IP</td>
            <td>'.$row["userIP"].'</td>
        </tr>
        
           <tr>
            <td>User Device</td>
            <td>'.$row["UserDevice"].'</td>
        </tr>
        
           <tr>
            <td>State Name</td>
            <td>'.$row["UserIPLocation"].'</td>
        </tr>
          <tr>
            <td>Amount</td>
            <td>'.$row["Amount"].'</td>
        </tr>
        
        </table>
        
        <br/>
        
        Warm regards,<br><br/>
        The Vibes Academy';
        
        
        $usermail = 'hello@thevibes.academy';
        //$usermail = 'rajeshjoshirj1994@gmail.com';
         
        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->Host = "localhost";
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = 'tls';
        $mail->Host = 'smtp.gmail.com';
        $mail->Port = '587';
        $mail->isHTML();
        $mail->Username = 'hello@thevibes.academy';
        $mail->Password = 'zhgtnzvvdemuemue';
        $mail->SetFrom('hello@thevibes.academy','The Vibes Academy');
        $mail->Subject = "New Booking Confirmation";
        $mail->addBCC("marketing@thinquilab.com", "marketing");
        $mail->addBCC("rdungawat@gmail.com", "testing");
        $mail->Body =  $welcome_msg2;
        $mail->AddAddress($usermail);
        
        //$mail->SMTPDebug  = 1;
    
        $result = $mail->Send();
             
        $curl_student_reg = curl_init();

        curl_setopt_array($curl_student_reg, array(
          CURLOPT_URL => 'https://thevibesacademy.edmingle.com/nuSource/api/v1/organization/students',
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => '',
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 0,
          CURLOPT_FOLLOWLOCATION => true,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => 'POST',
          CURLOPT_POSTFIELDS => array('JSONString' => '{
          "emails": [
            {
              "contact_number_country_id": 103,
              "contact_number_dial_code": "+91",
              "email": "'.$row["email"].'",
              "name": "'.$row["CustName"].'",
              "organization_id": 8423,
              "password": "'.$row["customerID"].'",
              "contact_number": "'.$row["mobile"].'"
            }
          ]
        }'),
          CURLOPT_HTTPHEADER => array(
            'APIKEY: a44d14e9f1795349cb0282e740c8f4a7',
            'ORGID: 8423'
          ),
        ));
        
        $response = curl_exec($curl_student_reg);
        
        curl_close($curl_student_reg);  
         
    
        $sqlQuery = "UPDATE `payments` SET `is_sent`= 1 WHERE `txnID` = '".$txnIDnew."'";
	    $result = mysqli_query($conn, $sqlQuery);	
	    
	    */
	    //-- return to new thanks page
	    
	    
	    $_SESSION['customerID'] = $row["customerID"];
        $_SESSION['CustName'] = $row["CustName"];
        $_SESSION['txnID'] = $row["txnID"];
        $_SESSION['Amount'] = $row["Amount"];
        $_SESSION['PaymentStatus'] = 'PAYMENT_SUCCESS';//$row["PaymentStatus"];
        
	    //header("Location: payment-confirmation.php");
	    header("Location: thank-you.php");
	    
        exit();
    
    }else{
        header("Location: index.php");
        exit();
    }
 
} else {
    
    echo "Transaction Failed";
}
?>