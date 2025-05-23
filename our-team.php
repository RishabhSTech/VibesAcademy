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
	<title>Our Team - The Vibes Academy</title>

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

<style>
    .employeeRow{
   display: flex;
  flex-wrap: wrap;
  padding-left: 0;
}
.colmEMP{
  flex: 0 0 25%;
}
.image{
        line-height: 0;
}
.image img{
    max-width: 100%;
    width: 100%;
}
.card{
        padding: 15px 15px;
}
.card .details{
      padding: 8px 15px;
    border-right: 1px solid #d5d5d5;
    border-left: 1px solid #d5d5d5;
    border-bottom: 1px solid #d5d5d5;
    min-height: 175px;
}
.card .content{
    font-size: 14px;
    margin: 8px 0px;
    color: #5d5d5d;
    line-height: 16px;
}
.card .name{
       margin: 8px 0px; 
}
.des{
    font-size: 14px;
    margin-bottom: 12px;
    color: #7c7c7c;
}
 @media screen and (max-width: 999px) {
     .colmEMP{
  flex: 0 0 100%;
}
 }
</style>
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
				<div class="Headin1">THE TEAM</div>
				<div class="Heading">Meet The Vibes Academy Team</div>
				<div class="Peragr">Meet the vibrant team behind The Vibes Academy, dedicated to revolutionising the learning and education sector for influencers with innovative strategies and impactful content.
				</div>
			</div>
			
			
			<div class="employeeRow">
			    
			    <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/1.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Ahmer</div>
			                <div class="des">Chief</div>
			                <div class="content">I have worked in the social communications for more than 2 decades. I am curious and passionate about many things. I believe in that young people can and should change the world.</div>
			            </div>
			        </div>
			    </div>
			    
			      <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/2.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Sagar</div>
			                <div class="des">Operations</div>
			                <div class="content">I am a traveller and story collector. I thrive when I am connecting with people and learning about them. I help the team by ensuring everyone stays on track and is having fun</div>
			            </div>
			        </div>
			    </div>
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/3.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Ankita</div>
			                <div class="des">Brand Mumma</div>
			                <div class="content">Story teller. Brand Wizard. Mother et large. I help people and organisations develop their voice and become the best version of themselves</div>
			            </div>
			        </div>
			    </div>
			    
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/4.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Sandiip</div>
			                <div class="des">Brand Partnership</div>
			                <div class="content">Digital Marketing and Strategy expert. Architect of groundbreaking campaigns and strategies. I am committed to nurturing talent, and fostering digital excellence.</div>
			            </div>
			        </div>
			    </div>
			    
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/5.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Venkatesh</div>
			                <div class="des">HR, Finance & Admin</div>
			                <div class="content">Manager et large, I have built & managed large teams to help increase the reach of important messages, I am keen on helping people in becoming better by using systems and processes.</div>
			            </div>
			        </div>
			    </div>
			    
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/6.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Rabi</div>
			                <div class="des">UX & Service Designer</div>
			                <div class="content">Design Wizard. I believe good design can change the world. I am working on Democratising design thinking and making design education accessible for all</div>
			            </div>
			        </div>
			    </div>
			    
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/7.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Anupriya</div>
			                <div class="des">Curriculum Designer</div>
			                <div class="content">I am a curriculum developer with several years of experience. I ensure that we teach in a simple, effective, easy to understand language</div>
			            </div>
			        </div>
			    </div>
			    
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/8.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Anjan</div>
			                <div class="des">Community Manager</div>
			                <div class="content">I'm here to sprinkle some joy and ensure you have fun while you learn. Whether it's organizing events, sparking conversations, or just bringing people together, I'm your gal!</div>
			            </div>
			        </div>
			    </div>
			    
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/9.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Ravideep</div>
			                <div class="des">Coordinator</div>
			                <div class="content">Turning likes into love and followers into friends! From hashtags to spontaneous challenges, I'm all about making our community feel like one big, happy family. Let's sprinkle some magic dust on social media and spread joy one post at a time!</div>
			            </div>
			        </div>
			    </div>
			    
			         <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/10.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">Manish</div>
			                <div class="des">Admin</div>
			                <div class="content">I juggle numbers, paperwork, party planning, payroll and the occasional office prank with ease. Let's keep the chaos organized and the laughter flowing!</div>
			            </div>
			        </div>
			    </div>
			    
			           
			    
			          <div class="colmEMP">
			        <div class="card">
			            <div class="image">
			                <img src="empImg/12.png" alt="empImg" />
			            </div>
			            <div class="details">
			                <div class="name">This is you</div>
			                <div class="des">We are Hiring</div>
			                <div class="content">Ready to join our dynamic team?  Send your resume to <b>carrer@thevibes.academy</b> and let's kickstart your journey with us! Your next adventure awaits.</div>
			            </div>
			        </div>
			    </div>
	
			    
			    
			    
			</div>

           
		






		</div>
	</section>

	<?php include("inc/footer.php"); ?>