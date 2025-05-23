<?php
session_start();


$CustName = '';
$email = '';
$mobile = '';
$tranid = '';

$paid = 0;
//print_r($_GET);


//if(isset($_GET['txnID']) && isset($_GET['txnID']) != '' && isset($_GET['tid']) && isset($_GET['tid']) !=''){
if(isset($_GET['tid']) && $_GET['tid'] !=''){    
    
    
    $servername = "localhost";
    $username = "mba";
    $password = "mba@123";
    $dbname = "mba";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    //$sql = "SELECT * FROM payments WHERE `id` = '".$_GET['tid']."' AND `txnID` = '".$_GET['txnID']."'";
    $sql = "SELECT * FROM payments WHERE PaymentStatus != 'PAYMENT_SUCCESS' AND `id` = '".$_GET['tid']."'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $CustName = $row['CustName'];
        $email = $row['email'];
        $mobile = $row['mobile'];
        $tranid = $_GET['tid'];
    } else {
        
        $paid = 1;
        
    }
    
    $conn->close();
    
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
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6XTXR8Z"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
	<?php include("inc/header.php"); ?>

        <?php
        
        if(isset($_GET['tid']) && $_GET['tid'] !='' && $paid != 1){   
        
        ?>
         <div class="ThanksMsgBlock">
             	<div class="container">
					       	   <P class="NamePayment">Hello <b><?php echo $CustName;?></b></P>
					    
					          <p class="ThanksMsg">Thank you for providing your information. We invite you to take advantage of our exclusive Influencer MBA course by enrolling now for just Rs 499.</p>
					   </div> 
					    </div> 

		<section class="formContent PaymentPage">
			<div class="container">
				<div class="joinnow">
				
					<div class="JoinColm">
					   
						<form action="pay-now.php" id="EnrollNow2" method="post">
							<div class="form__group field">
								<input type="input" class="form__field" value="<?php echo $CustName;?>" disabled />
								<label for="CusName" class="form__label">Name *</label>
							</div>
							<div class="form__group field">
								<input type="email" class="form__field" value="<?php echo $email;?>" disabled />
								<label for="CusEmail" class="form__label">Email ID *</label>
							</div>
							<div class="form__group field">
								<input type="tel" class="form__field numberonly CusTel" value="<?php echo $mobile;?>" disabled />
								<label for="CusTel" class="form__label">Mobile Number *</label>
								<p class="error" style="color:red;"></p>
							</div>
							<div class="form-group">
							    
							    <input type="hidden" name="CusName" value="<?php echo $CustName;?>" />
							    <input type="hidden" value="<?php echo $mobile;?>" name="CusTel" />
							    <input type="hidden" value="<?php echo $email;?>" name="CusEmail" />
							    <input type="hidden" value="<?php echo $tranid;?>" name="transid" />
							    
								<button class="btn-submit" type="submit">Pay Now Rs. 499 </button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</section>
    <?php } ?>
    
    <?php if(!isset($_GET['tid']) || $_GET['tid'] ==''){ ?>
    
        <div class="ThanksMsgBlock">
            <div class="container">
    	        <h1>page not found!</h1>   	   
    	   </div> 
    	</div> 
    
    <?php } ?>
    
    <?php  if(isset($_GET['tid']) && $_GET['tid'] !='' && $paid == 1){    ?>
    
        <div class="ThanksMsgBlock">
            <div class="container">
    	        <h1>you have already paid</h1>   	   
    	   </div> 
    	</div> 
    
    <?php } ?>
    

	<?php include("inc/footer.php"); ?>
</body>


</html>
