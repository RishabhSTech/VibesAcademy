
<?php
session_start();
if(!isset($_POST['transactionId'])){
	header("Location: index.php");
exit();
}


$SucessID = $_SESSION['SucessID'];
$CustName = $_SESSION['SucessName'];
$CustEmail = $_SESSION['SucessEmail'];

?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>Failed</title>

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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6XTXR8Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php include("inc/header.php"); ?>

	<section class="mainmsg">
		<div class="container">
			<div class="ThankContent">
				<img src="failed.png" alt="sucess">
				<h2> Transaction Failed</h2>
				<p>Oops! It looks like there was an issue with the payment information provided. Please double-check and try again.</p>
				
				<div>
					<div>Order Id: <strong><?php echo $SucessID; ?></strong></div> <br>
					<div>Amount: <strong>₹<?php $amt = $_POST['amount']/100; echo $amt; ?></strong>  </div><br>
					<div>Txn Id: <strong><?php echo $_POST['transactionId'] ?></strong> </div><br>
				</div>

			</div>
		</div>
	</section>

	<?php include("inc/footer.php"); ?>