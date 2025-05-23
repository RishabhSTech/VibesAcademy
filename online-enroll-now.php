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
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6XTXR8Z');</script>
<!-- End Google Tag Manager -->


</head>

<body class="newLPenroll">
     <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6XTXR8Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 

	<?php include ("inc/header.php"); ?>
	
		<?php

	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>
		
	<section class="MainHeadingSection">
		<div class="container">
			<h2 class="PrimaryText">स्वागत</h2>
			<h2 class="LpNewDesignHeading"><span class="design1">i-MBA</span> INFLUENCERS' <span class="design2">का</span> MBA</h2>
		</div>
	</section>

	<section class="MainBanner">
		<div class="container">
		    <div class="BoxCenter">
		        <h1>पहले आएं पहले पाएं ऑफर<br><span>₹9,999</span>  <strong>केवल ₹499</strong></h
		        <div class="peoplesdiv"></div>
		    
		    </div>
		</div>
	</section>


	<section class="ContentandForm">
		<div class="container">
				<div class="LpNewPage">
					<div class="Colm2">
							<div class="youtubeVideoFrame">
							<iframe width="360" height="643" src="https://www.youtube.com/embed/xZZhOqzw9Vs?si=dvJ-Xu4VsRorUDcv&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
					</div>	

					<div class="Colm2">

						<div class="ContentSection">
							
                                बेहतर <span>कहानीकार</span> बनिए, डाटा का इस्तेमाल करके कैसे <span>तेज़ी से फॉलोवर्स</span> बढ़ा सकते हैं, इन्फ्लुएंसर्स से <span>पार्टनरशिप</span> कैसे करें, और सोशल मीडिया से <span> पैसे कैसे कमाएं</span>, सीखिए ये सब एक ऐसे कोर्स के ज़रिए, जो बनाया गया है सिर्फ आपके लिए।
                                
						</div>

						<form action="paynow.php" id="EnrollNow" method="post">

							<div class="form__group field">
								<input type="input" class="form__field" placeholder="Name" name="CusName" id='CusName'
									required />
								<label for="CusName" class="form__label">नाम *</label>
							</div>

							<div class="form__group field">
								<input type="email" class="form__field" placeholder="Email ID" name="CusEmail"
									id='CusEmail' required />
								<label for="CusEmail" class="form__label">ईमेलऐड्रेस *</label>
							</div>

							<div class="form__group field">
								<input type="tel" class="form__field CusTel numberonly" maxlength="10" minlength="10" placeholder="Mobile Number" name="CusTel"
									id='CusTel' required />
								<label for="CusTel" class="form__label">मोबाइल नंबर *</label>
								<p class="error" style="color:red;"></p>
							</div>

							<div class="form-group">
							    <input type="hidden" name="track_form" value="onlie-enroll-now-php hindi">
							    <span class="success_msg" style="display:none">🎉 You are already enrolled in our i-MBA course.</span>
								<button class="btn-submit" type="submit">भुगतान करके, नामांकन करें</button>
								
							</div>
						</form>
					</div>
			</div>
	</section>
		
			<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>

	<section class="MainHeadingSection">
		<div class="container">
			<h2 class="PrimaryText">Welcome 😍 to</h2>
			<h2 class="LpNewDesignHeading"><span class="design1">i-MBA</span> INFLUENCERS' <span class="design2">ka</span> MBA</h2>
		</div>
	</section>

	<section class="MainBanner">
		<div class="container">
		    <div class="BoxCenter">
		        	<h1>Early Bird offer <br><span>₹9,999</span>  <strong>₹499 Only</strong></h1>
		        <div class="peoplesdiv"></div>
		    
		    </div>
		</div>
	</section>


	<section class="ContentandForm">
		<div class="container">
				<div class="LpNewPage">
					<div class="Colm2">
							<div class="youtubeVideoFrame">
							<iframe width="360" height="643" src="https://www.youtube.com/embed/xZZhOqzw9Vs?si=dvJ-Xu4VsRorUDcv&amp;controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
							</div>
					</div>	

					<div class="Colm2">

						<div class="ContentSection">
							Master the art of <strong>storytelling</strong>, harness the power of data for <strong>exponential growth</strong>, get an
							<strong>opportunity to collaborate</strong> with fellow influencers and learn to earn through content, All
							this and more in 1 course, tailored just for you!
						</div>

						<form action="paynow.php" id="EnrollNow2" method="post">

							<div class="form__group field">
								<input type="input" class="form__field" placeholder="Name" name="CusName" id='CusName'
									required />
								<label for="CusName" class="form__label">Name *</label>
							</div>

							<div class="form__group field">
								<input type="email" class="form__field" placeholder="Email ID" name="CusEmail"
									id='CusEmail' required />
								<label for="CusEmail" class="form__label">Email ID *</label>
							</div>

							<div class="form__group field">
								<input type="tel" class="form__field CusTel numberonly" maxlength="10" minlength="10" placeholder="Mobile Number" name="CusTel"
									id='CusTel' required />
								<label for="CusTel" class="form__label">Mobile Number *</label>
								<p class="error" style="color:red;"></p>
							</div>

							<div class="form-group">
							    <input type="hidden" name="track_form" value="onlie-enroll-now-php english">
								<span class="success_msg" style="display:none">🎉 You are already enrolled in our i-MBA course.</span>
								<button class="btn-submit" type="submit">Pay & Enroll </button>
								
							</div>
						</form>
					</div>
			</div>
	</section>
	
	
	<?php } ?>
	
<form action="pay-online.php" id="payagain" method="post">
    <input type = "hidden" name="payagain" id="pay_id">
    <input type="hidden" name="track_form" value="onlie-enroll-now-php">
</form>
    	
<footer class="newLPpageFooter">
	<div class="container">
		<div class="footerRow">
			<div class="ColmFooter">
				<ul>
					<li>Legal</li>
					<li><a href="terms-and-conditions.php">Terms & Condition</a></li>
					<li><a href="privacy-policy.php">Privacy Policy</a></li>
					<li><a href="refund-policy.php">Refund Policy</a></li>
				</ul>
			</div>
			<div class="ColmFooter">
				<p>E-261, Basement, Greater Kailash-2, <br> New Delhi - 110048</p>
                <a href="mailto:hello@thevibes.academy" class="emaild">hello@thevibes.academy</a>
			</div>
			<div class="ColmFooter">
					<p>Copyright ©️ The Vibes Academy 2024. <br>
An initiative of <a href="https://thinquilab.com/"  class="emaild" target="_blank" rel="noopener noreferrer">Thinquilab Private Limited</a>
</p>
			</div>
		</div>
	</div>
</footer>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>

$(document).ready(function () {    
    
    $('.numberonly').keypress(function (e) {    

        var charCode = (e.which) ? e.which : event.keyCode    

        if (String.fromCharCode(charCode).match(/[^0-9]/g))    

            return false;                        

    });    

});

$(document).ready(function(){
    /*
    $('.CusTel').on('input', function(){
        var mobileNumber = $(this).val();
        if (mobileNumber.length < 10) { 
            return;
        }
        $.ajax({
            type: 'POST',
            url: 'mobilenumberchk-payment.php',
            data: {mobileNumber: mobileNumber},
            success: function(response){
                if(response != 'not_exists'){
                    $('.error').text('Mobile number already exists!');
                } else {
                    $('.error').text('');
                }
            }
        });
    });
    */

    $('#EnrollNow').submit(function(event){
        event.preventDefault();
        var mobileNumber = $('#CusTel').val();
        $('.btn-submit').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: 'mobilenumberchk-payment.php',
            data: {mobileNumber: mobileNumber}, 
            success: function(response){
                if(response != 'not_exists'){
                    
                    if(response == 'pay_success'){
                        $('.success_msg').show();
                        return;
                    }else{
                        $('#pay_id').val(response);
                        $("#payagain").submit();
                    } 
                    
                    //$('#pay_id').val(response);
                    //$("#payagain").submit();
                    
                    //$('#error').text('Mobile number already exists!');
                    $('.btn-submit').prop('disabled', false);
                    
                } else {
                    $('.success_msg').hide();
                    
                    $('.btn-submit').prop('disabled', true);
                    $('#EnrollNow').unbind('submit').submit();
                }
            }
        });
    });
    $('#EnrollNow2').submit(function(event){
        event.preventDefault();
        var mobileNumber = $('#CusTel').val();
        $('.btn-submit').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: 'mobilenumberchk-payment.php',
            data: {mobileNumber: mobileNumber}, 
            success: function(response){
                if(response != 'not_exists'){
                    
                    if(response == 'pay_success'){
                        $('.success_msg').show();
                        return;
                    }else{
                        $('#pay_id').val(response);
                        $("#payagain").submit();
                    }   
                    
                    // $('#pay_id').val(response);
                    //$("#payagain").submit();
                    
                    //$('#error').text('Mobile number already exists!');
                    $('.btn-submit').prop('disabled', false);
                    
                } else {
                    
                    $('.success_msg').hide();
                    $('.btn-submit').prop('disabled', true);
                    $('#EnrollNow2').unbind('submit').submit();
                }
            }
        });
    });
});
</script>