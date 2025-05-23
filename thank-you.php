
<?php

session_start();

if(!isset($_SESSION['customerID']) || $_SESSION['customerID'] == ''){
    header("Location: index.php");
    exit();
        
}

$PIXAL_TRACK_ID = $_SESSION['txnID'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Thank You - The Vibes Academy</title>

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
	
    <?php  if ($_SESSION['PaymentStatus'] == "PAYMENT_SUCCESS") { ?>
	<section class="mainmsg">
		<div class="container">
			<div class="ThankContent">
				<img src="images/success.gif" alt="sucess">
				<h2>Thank you, <span><?php echo $_SESSION['CustName'] ?></span></h2>
				
				<p>Congratulations! You are now enrolled.</p>
				
				<div class="playstore">
                    <div class="text">Download this app for your course</div>
                    <a href="https://play.google.com/store/apps/details?id=com.thevibes.academycourse" target="_blank">
                        <img  src="images/PLY.png" alt="playstore" />
                    </a>
                    
                </div>
				 
				
				<div>
					<div>Order Id: <strong><?php echo $_SESSION['customerID']; ?></strong></div> <br>
					<div>Amount: <strong>₹<?php echo $_SESSION['Amount']; ?></strong>  </div><br>
					<div>Txn Id: <strong><?php echo $_SESSION['txnID']; ?></strong> </div><br>
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