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

	<?php

	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>
			<section class="formContent">
				<div class="container">
					<div class="joinnow">
						<div class="JoinColm">
							<div class="msgContent paynowbttnnn">
							 
										<h1 class="mainh"><span class="Span1">i-MBA</span> INFLUENCERS' <span class="Span2">का</span> MBA</h1>
				<p>
				बेहतर <span>कहानीकार</span> बनिए, डाटा का इस्तेमाल करके कैसे <span>तेज़ी से फॉलोवर्स</span> बढ़ा सकते हैं, इन्फ्लुएंसर्स से <span>पार्टनरशिप</span> कैसे करें, और सोशल मीडिया से <span> पैसे कैसे कमाएं</span>, सीखिए ये सब एक ऐसे कोर्स के ज़रिए, जो बनाया गया है सिर्फ आपके लिए।
				</p>


	
				<div class="Earlytext"> पहले आएं पहले पाएं ऑफर <span style="text-decoration: line-through;">₹9,999</span> केवल ₹499 </div>
	
	
							</div>
						</div>
						<div class="JoinColm">
							<form action="paynow.php" id="EnrollNow" method="post">
								<div class="form__group field">
									<input type="input" class="form__field" placeholder="Name" name="CusName" id='CusName' required />
									<label for="CusName" class="form__label">नाम *</label>
								</div>
								<div class="form__group field">
									<input type="email" class="form__field" placeholder="Email ID" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,10}" name="CusEmail" id='CusEmail' required />
									<label for="CusEmail" class="form__label">ईमेलऐड्रेस  *</label>
								</div>
								<div class="form__group field">
									<input type="tel" class="form__field numberonly CusTel" maxlength="10" minlength="10" placeholder="Mobile Number" name="CusTel" id='CusTel' required />
									<label for="CusTel" class="form__label">मोबाइल नंबर  *</label>
									<p class="error" style="color:red;"></p>
								</div>
								<div class="form-group">
								    <input type="hidden" name="track_form" value="enroll-now-php-hindi">
								    <span class="success_msg" style="display:none">🎉 You are already enrolled in our i-MBA course.</span>
								    
									<button class="btn-submit" type="submit">₹499 देकर तुरंत नामांकन करें</button>
									
								</div>
							</form>
						</div>
					</div>
				</div>
			</section>
			
							
<div class="container33">
  <div class="center titlelogo">Media Coverage</div>
  
   <section class="client-slider">
      <div class="slide"><a href="https://www.abplive.com/brand-wire/the-best-online-platform-for-developing-and-training-influencers-who-set-social-media-trends-2695545"><img src="https://www.thevibes.academy/Logo/ABP.png" alt="logo"></a></div>
       <div class="slide"><a href="https://www.bhaskarhindi.com/education/vibes-academy-pioneering-positive-change-in-the-field-of-social-messaging-and-skill-training-1032784"><img src="https://www.thevibes.academy/Logo/DainikBhaskar.png" alt="logo"></a></div>
        <div class="slide"><a href="https://english.newsnationtv.com/brand-stories/brand-stories-english/introducing-the-vibes-academy-pioneering-positive-change-in-social-messaging-and-skill-training-259877.html"><img src="https://www.thevibes.academy/Logo/NewsNationLogo.png" alt="logo"></a></div>
         <div class="slide"><a href="https://www.timesnownews.com/business-economy/industry/indias-vibes-academy-embarks-on-ambitious-skill-revolution-to-shape-formidable-workforce-article-110369285"><img src="https://www.thevibes.academy/Logo/TimesNow.jpg" alt="logo"></a></div>
          <div class="slide"><a href="https://www.educationtimes.com/article/editor-s-pick/99735357/the-vibes-academy-voices-inspiring-a-better-society"><img src="https://www.thevibes.academy/Logo/ET.jpg" alt="logo"></a></div>

   </section>
</div>
		<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
		<section class="formContent">
			<div class="container">
				<div class="joinnow">
					<div class="JoinColm">
						<div class="msgContent paynowbttnnn">
							<h1 class="mainh"><span class="Span1">i-MBA</span> INFLUENCERS' <span class="Span2">ka</span> MBA</h1>
							<p>Master the art of <span>storytelling</span>, harness the power of data for exponential
								<span>growth</span>, get an opportunity to <span>collaborate</span> with fellow influencers and <span> learn
								to earn </span> through content, All this and more in 1 course, tailored just for you!</p>
							<div class="Earlytext">Early Bird offer <span style="text-decoration: line-through;">₹9,999</span> ₹499
								Only</div>
						</div>
					</div>
					<div class="JoinColm">
						<form action="paynow.php" id="EnrollNow2" method="post">
							<div class="form__group field">
								<input type="input" class="form__field" placeholder="Name" pattern="[a-zA-Z\s]*" name="CusName" id='CusName' required />
								<label for="CusName" class="form__label">Name *</label>
							</div>
							<div class="form__group field">
								<input type="email" class="form__field" placeholder="Email ID" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,6}" name="CusEmail" id='CusEmail' required />
								<label for="CusEmail" class="form__label">Email ID *</label>
							</div>
							<div class="form__group field">
								<input type="tel" class="form__field numberonly CusTel" maxlength="10" minlength="10" placeholder="Mobile Number" name="CusTel" id='CusTel' required />
								<label for="CusTel" class="form__label">Mobile Number *</label>
								<p class="error" style="color:red;"></p>
							</div>
							<div class="form-group">
							    <input type="hidden" name="track_form" value="enroll-now-php-english">
							    <span class="success_msg" style="display:none">🎉 You are already enrolled in our i-MBA course.</span>
							    
								<button class="btn-submit" type="submit">Pay and Start Now</button>
								
							</div>
						</form>
					</div>
				</div>
			</div>
							
<div class="container33">
  <div class="center titlelogo">Media Coverage</div>
  
   <section class="client-slider">
      <div class="slide"><a href="https://www.abplive.com/brand-wire/the-best-online-platform-for-developing-and-training-influencers-who-set-social-media-trends-2695545"><img src="https://www.thevibes.academy/Logo/ABP.png" alt="logo"></a></div>
       <div class="slide"><a href="https://www.bhaskarhindi.com/education/vibes-academy-pioneering-positive-change-in-the-field-of-social-messaging-and-skill-training-1032784"><img src="https://www.thevibes.academy/Logo/DainikBhaskar.png" alt="logo"></a></div>
        <div class="slide"><a href="https://english.newsnationtv.com/brand-stories/brand-stories-english/introducing-the-vibes-academy-pioneering-positive-change-in-social-messaging-and-skill-training-259877.html"><img src="https://www.thevibes.academy/Logo/NewsNationLogo.png" alt="logo"></a></div>
         <div class="slide"><a href="https://www.timesnownews.com/business-economy/industry/indias-vibes-academy-embarks-on-ambitious-skill-revolution-to-shape-formidable-workforce-article-110369285"><img src="https://www.thevibes.academy/Logo/TimesNow.jpg" alt="logo"></a></div>
          <div class="slide"><a href="https://www.educationtimes.com/article/editor-s-pick/99735357/the-vibes-academy-voices-inspiring-a-better-society"><img src="https://www.thevibes.academy/Logo/ET.jpg" alt="logo"></a></div>

   </section>
</div>
		</section>
	<?php } ?>


<form action="pay-online.php" id="payagain" method="post">
    <input type = "hidden" name="payagain" id="pay_id">
    <input type="hidden" name="track_form" value="enroll-now-php">
</form>
        
	<?php include("inc/footer.php"); ?>
</body>


<script>
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
                    
                    
                    //$('#pay_id').val(response);
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

</html>
