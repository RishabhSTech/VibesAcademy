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

	<section class="formContent">
		<div class="container">
			<div class="joinnow">
				<div class="JoinColm">
            				<div class="msgContent paynowbttnnn">
			
				<h1 class="mainh"><span class="Span1">i-MBA</span> INFLUENCERS' <span class="Span2">ka</span> MBA</h1>
				<p>Master the art of <span>storytelling</span>, harness the power of data for exponential
					<span>growth</span>, get an
					opportunity to <span>collaborate</span> with fellow influencers and <span> learn
						to earn </span> through content, All this and more in 1 course, tailored just for you!
				</p>
				<div class="Earlytext" style="display:none">Early Bird offer <span style="text-decoration: line-through;">₹9,999</span> ₹499
					Only</div>
				
			</div>
				</div>
				<div class="JoinColm">
					<form action="mba_process.php" id="EnrollNow" method="post">

						<div class="form__group field">
							<input type="input" class="form__field" pattern="[a-zA-Z]*" placeholder="Name" name="CusName" id='CusName' required />
							<label for="CusName" class="form__label">Name *</label>
						</div>

						<div class="form__group field">
							<input type="email" class="form__field" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}"  placeholder="Email ID" name="CusEmail" id='CusEmail' required />
							<label for="CusEmail" class="form__label">Email ID *</label>
						</div>

						<div class="form__group field">
							<input type="tel" class="form__field numberonly" maxlength="10" minlength="10" placeholder="Mobile Number" name="CusTel" id='CusTel' required />
							<label for="CusTel" class="form__label">Mobile Number *</label>
						</div>
						<div class="form__group field">
							<input type="text" class="form__field "  placeholder="Coupon code" name="CouponCode" id='CouponCode' required />
							<label for="CusTel" class="form__label">Coupon Code</label>
							 <span id="errorMessage" style="color: red; display: none;">Please enter the correct coupon code.</span>
						</div>

						<div class="form-group">
							<button class="btn-submit" type="submit">Enroll Now</button>
						</div>
					</form>
				</div>

			</div>
		</div>
	</section>

	<?php include("inc/footer.php"); ?>
<script>
$(document).ready(function(){
    $('#EnrollNow').on('submit', function(event){
        var inputValue = $('#CouponCode').val();
        var errorMessage = $('#errorMessage');
        if (inputValue !== '2024') {
            errorMessage.show();
            event.preventDefault(); // Prevent form submission
        } else {
            errorMessage.hide();
        }
    });
});
</script>