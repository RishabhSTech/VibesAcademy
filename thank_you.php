
<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

session_start();

if(!isset($_GET['status']) || $_GET['status'] == '') {
    header("Location: index.php");
    exit();
}

$PIXAL_TRACK_ID = $_GET['status'];
?>


<?php

if(isset($_GET['status'])) {
    
         
    $posttxtx =$_GET['status'];
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

	$sqlQuery = "SELECT * FROM `leads` WHERE id  = '".$posttxtx."' AND is_sent = '0'";
	$result = mysqli_query($conn, $sqlQuery);	
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	
	if($row != null || !empty($row)){
	    
        require_once('PHPMailer/Exception.php');
        require_once('PHPMailer/OAuth.php');
        require_once('PHPMailer/PHPMailer.php');
        require_once('PHPMailer/SMTP.php');
        require_once('PHPMailer/POP3.php');
        
        $welcome_msg = 'Dear <strong>'.$row["CustName"].'</strong>,<br><br>
        
     You have secured your spot. We will notify you as soon as the course is available..<br/>
        <br/> 
        
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
        $mail->Subject = "Thank you";
        $mail->Body =  $welcome_msg;
        $mail->AddAddress($usermail);
        
        //$mail->SMTPDebug  = 1;
        
        $result = $mail->Send();
            
        
        $welcome_msg2 = '
        
         Dear Admin<br><br/>
        
       Below is new lead details <br/><br/>
    
        
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
        <td>State Name</td>
        <td>'.$row["UserIPLocation"].'</td>
    </tr>
        <tr>
            <td>TXNdatetime</td>
            <td>'.$row["TXNdatetime"].'</td>
        </tr>
    
        
           <tr>
            <td>User Device</td>
            <td>'.$row["UserDevice"].'</td>
        </tr>
        
        <tr>
        <td>User IP</td>
        <td>'.$row["userIP"].'</td>
    </tr>
        
        </table>
        
        <br/>
        
        Warm regards,<br><br/>
        The Vibes Academy';
        
        
        $usermail2 = 'hello@thevibes.academy';
         
        $mail2 = new PHPMailer();
        $mail2->isSMTP();
        $mail2->Host = "localhost";
        $mail2->SMTPAuth = true;
        $mail2->SMTPSecure = 'tls';
        $mail2->Host = 'smtp.gmail.com';
        $mail2->Port = '587';
        $mail2->isHTML();
        $mail2->Username = 'hello@thevibes.academy';
        $mail2->Password = 'zhgtnzvvdemuemue';
        $mail2->SetFrom('hello@thevibes.academy','The Vibes Academy');
        $mail2->Subject = "New Lead - " . $row['CustName'];
        $mail2->addBCC("marketing@thinquilab.com", "marketing");
        //$mail2->addBCC("rdungawat@gmail.com", "testing");
        $mail2->Body =  $welcome_msg2;
        $mail2->AddAddress($usermail2);
        
        //$mail->SMTPDebug  = 1;
        
        $result2 = $mail2->Send();
        
        $sqlQuery = "UPDATE `leads` SET `is_sent`= 1 WHERE `id` = '".$posttxtx."'";
	    $result = mysqli_query($conn, $sqlQuery);	
	
    }else{
        header("Location: index.php");
        exit();
    }
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
	<title>Thank you</title>

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
	

    
    <?php  if ($_GET['status']) { ?>
	<section class="mainmsg">
		<div class="container">
			<div class="ThankContent">
				<img src="images/success.gif" alt="sucess">
				<h2>Thank you, <span><?php echo $row['CustName']; ?></span></h2>
				<p>You’ve blocked a spot in our early batches. We’ll notify you as soon as the course is available</p>
			</div>
		</div>
	</section>
	
	<?php }; ?>

	<?php include("inc/footer.php"); session_destroy(); ?>