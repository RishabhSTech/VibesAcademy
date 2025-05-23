
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if(!isset($_POST['transactionId']) || $_POST['transactionId'] == ''){
header("Location: index.php");
exit();}
$PIXAL_TRACK_ID = $_POST['transactionId'];
?>

<?php

if(isset($_POST['transactionId'])) {
    
    
    if ($_POST['code'] == "PAYMENT_SUCCESS") {
        
        $txnIDnew = $_POST['transactionId'];
        $code21 = $_POST['code'];
        $providerReferenceId = $_POST['providerReferenceId'];
        
        $servername = "localhost";
        $username = "mba";
        $password = "mba@123";
        $dbname = "mba";
        
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
          if ($conn->connect_error) {
                 die("Connection failed: " . $conn->connect_error);
        }
        
        
        $sql = "UPDATE payments SET PaymentStatus = '".$code21."', remarks = '".$providerReferenceId."'  WHERE txnID = '".$txnIDnew."'";
        
        if ($conn->query($sql) === TRUE) {
                 //echo "Record updated successfully";
        } else {
                // echo "Error updating record: " . $conn->error;
        }
        
        $conn->close();
        
    }
    
}

?>

<?php

if(isset($_POST['transactionId'])) {
    
     if ($_POST['code'] == "PAYMENT_SUCCESS") {
         
    $posttxtx =$_POST['transactionId'];
    $servername = "localhost";
    $username = "mba";
    $password = "mba@123";
    $dbname = "mba";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
        if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
        }

	//$sqlQuery = "SELECT * FROM `payments` WHERE txnID  = '".$posttxtx."'";
	$sqlQuery = "SELECT * FROM `payments` WHERE txnID  = '".$posttxtx."' AND is_sent = '0'";
	
	$result = mysqli_query($conn, $sqlQuery);	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	  
    if($row != null || !empty($row)){
        
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
         
    
        $sqlQuery = "UPDATE `payments` SET `is_sent`= 1 WHERE `txnID` = '".$posttxtx."'";
	    $result = mysqli_query($conn, $sqlQuery);	
    
    }else{
        header("Location: index.php");
        exit();
    }
    
     }
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>i-MBA - The Vibes Academy</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="Cushions Custom">
	<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
	<link rel="icon" href="images/favicon.png" sizes="32x32" />

	<link rel="stylesheet" type="text/css" href="css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">

<?php include("inc/gtag.php"); ?>
</head>

<body>

<img src="https://netcore.g2afse.com/success.jpg?afid=<?php echo $PIXAL_TRACK_ID; ?>&afstatus=1" height="1" width="1" alt=""/>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6XTXR8Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php include("inc/header.php"); ?>
	

    
    <?php  if ($_POST['code'] == "PAYMENT_SUCCESS") { ?>
	<section class="mainmsg">
		<div class="container">
			<div class="ThankContent">
				<img src="images/success.gif" alt="sucess">
				<h2>Thank you, <span><?php echo $row['CustName']; ?></span></h2>
				<p>Thank you for being our valued customer. We are thankful to serve you and hope we meet your expectations.</p>
				
				<div>
					<div>Order Id: <strong><?php echo $row['customerID']; ?></strong></div> <br>
					<div>Amount: <strong>₹<?php echo $row['Amount']; ?></strong>  </div><br>
					<div>Txn Id: <strong><?php echo $row['txnID']; ?></strong> </div><br>
				</div>
                
                
                <div class="playstore">
                    <div class="text">Download this app and start the course</div>
                    <a href="https://play.google.com/store/apps/details?id=com.edmingle.thevibesacademy" target="_blank">
                        <img  src="images/PLY.png" alt="playstore" />
                    </a>
                    
                </div>
			</div>
		</div>
	</section>
	
	 <?php }else{ ?>
	 
    	<section class="mainmsg">
		<div class="container">
			<div class="ThankContent">
				<img src="images/icons8-fail-480.png" width="150" alt="sucess">
				<h2> Transaction Failed</h2>
				<p>Oops! It looks like there was an issue with the payment information provided. Please double-check and try again.</p>
				

			</div>
		</div>
	</section>	 
	<?php }; ?>

	<?php include("inc/footer.php"); session_destroy(); ?>