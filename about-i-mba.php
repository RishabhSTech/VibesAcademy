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

	<section class="InnerMsg">
		<div class="container">
			<div class="InnerSec">
				<div class="Headin1">Course Structure</div>
				<div class="Heading">Elevate Your Online Presence with the
					i-MBA in Social Media Influencing</div>
				<div class="Peragr">This tailored program is perfect for social media influencers aiming to excel in the
					dynamic
					landscape of social media. Upon completion, you'll be equipped with the tools, techniques, and
					insights needed to thrive in your social media journey.</div>
				<div class="Peragr">The course has limited seats and as an introductory offer, we are charging only 499
					Rs. instead of
					the actual 9999 Rs. for the course on launch day. Take a look at the course offering and join now!
				</div>
			</div>

			<div class="MultiColorBox">
				<div class="box bc1">
					<img src="images/img1.png" alt="image">
				</div>
				<div class="box ">
					<div class="iiiSec">
						<div class="InnerHeading">This 7-days program is designed to help you become a better
							Influencer!</div>
						<ol class="innerUL">
							<li>Boost your online presence and follower base</li>
							<li>Enhance audience engagement strategies</li>
							<li>Create impactful content</li>
							<li>Learn to monetise your content</li>
							<li>Foster socially conscious thinking in your content creation process</li>
						</ol>
					</div>
				</div>
			</div>
			<div class="MultiColorBox">

				<div class="box">
					<div class="iiiSec">
						<div class="InnerHeading">With the guidance of experienced mentors, you'll learn:</div>
						<ol class="innerUL">
							<li>Build authentic connections with your followers</li>
							<li>Address social issues through your content</li>
							<li>Utilize digital marketing and social media strategies</li>
							<li>Stay updated on the latest trends and best practices</li>
						</ol>
					</div>
				</div>
				<div class="box bc2">
					<img src="images/img2.png" alt="image">
				</div>
			</div>


			<div class="MultiColorBox">
				<div class="box bc3">
					<img src="images/img3.png" class="minhhh" alt="image">
				</div>
				<div class="box">
					<div class="iiiSec">
						<div class="InnerHeading">​Our Cohort based approach enables you by providing:</div>
						<ol class="innerUL">
							<li>​Community Support: <span>Cohort-based learning provides a supportive community of
									peers, fostering collaboration, accountability, and a sense of belonging.</span>
							</li>
							<li>Networking and Peer Learning: <span>Participants benefit from networking opportunities
									and peer learning, gaining diverse perspectives, knowledge exchange, and potential
									collaborations.</span></li>
							<li>Accelerated Skill Development: <span>Cohort-based learning offers structured,
									interactive activities that accelerate skill development, enhance engagement, and
									encourage real-world application.</span></li>
						</ol>
					</div>
				</div>
			</div>
			<div class="msgaaa">
				<img width="250" src="images/erly.gif" alt="erly" />
				<div class="Earlytext">Early Bird offer <span style="text-decoration: line-through;">₹9,999</span> ₹499
					Only</div>
				<a class="enroolbtn" href="enroll-now.php">ENROLL NOW</a>
			</div>




		</div>
	</section>

	<?php include("inc/footer.php"); ?>