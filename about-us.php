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
	<title>About Us - The Vibes Academy</title>

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

	<section class="InnerMsg">
		<div class="container">
			<div class="InnerSec">
				<div class="Headin1">About us</div>
				<div class="Heading">Introducing VIBES ACADEMY – your premier online platform for change-making influencers.</div>
				<div class="Peragr">We're dedicated to uniting a diverse community of social media trendsetters to ignite positive societal shifts.</div>
				<div class="Peragr">At VIBES ACADEMY, our commitment lies in fostering an inclusive environment where influencers can learn, collaborate, and find inspiration. Our vision? To unite progressive influencers in driving impactful change nationwide. Our mission is clear: to empower influencers to amplify their voices for social good. Through our platform, influencers gain invaluable skills in storytelling, content creation, and audience engagement to enact meaningful transformations.
				</div>
					<div class="Peragr pbold"> Here are our core values</div>
			</div>

            <div class="rowAboutUs rowAboutUs3">
                	<div class="MultiColorBox">
				<div class="box bc1 textAbout4">
					<img class="boximgg" src="images/Asset1.png" alt="image">
				</div>
				<div class="box ">
					<div class="iiiSec">
						<div class="InnerHeading">Inclusivity</div>
						<p>Every voice is valued, and diversity is celebrated.</p>
					</div>
				</div>
			</div>
			<div class="MultiColorBox">
            	<div class="box bc2 textAbout4">
					<img class="boximgg" src="images/Asset2.png" alt="image">
				</div>
				<div class="box textAbout2">
					<div class="iiiSec">
						<div class="InnerHeading">Education</div>
						<p>Continuously nurturing learning and development for influencers and the community.</p>
					</div>
				</div>
			
			</div>
				</div>
                
              <div class="rowAboutUs rowAboutUs2">  
             
                
                <div class="MultiColorBox textAbout2 box2">
                    	<div class="InnerHeading">Empowerment</div>
						<p>Equipping influencers with the tools and platforms to effect change.</p>
                </div>
            
                <div class="MultiColorBox textAbout3 box2">
                    	<img class="boximgg" src="images/Asset3.png" alt="image">
                </div>
                <div class="MultiColorBox textAbout box2">
                    	<div class="InnerHeading">Impact</div>
						<p>Success is measured by the tangible positive change we collectively achieve.</p>
                </div>
                
         
            
            </div>
            

		






		</div>
	</section>

	<?php include("inc/footer.php"); ?>