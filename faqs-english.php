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
    <meta name="verify-v1" content="google-site-verification=wSU1GQpx6WIY81xEDeG-Q418YC1fdiGz1sLUIUqKhPE">
    <meta name="google-site-verification" content="wSU1GQpx6WIY81xEDeG-Q418YC1fdiGz1sLUIUqKhPE">
    	<title>All FAQs</title>

	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large" />
	<link rel="icon" href="images/favicon.png" sizes="32x32" />

	<link rel="stylesheet" type="text/css" href="css/reset.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/ionicons.min.css">
	
	

<?php include("inc/gtag.php"); ?>


<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"Tell me about the course","acceptedAnswer":[{"@type":"Answer","text":"Our comprehensive 7-day course covers essential topics like camera techniques, trending content, storytelling, and monetization strategies."}]},{"@type":"Question","name":"I want to be successful in a specific niche, will I get guidance for that?","acceptedAnswer":[{"@type":"Answer","text":"Absolutely, our course offers techniques applicable across all niches, ensuring your success regardless of your chosen niche."}]},{"@type":"Question","name":"What is the mode of course delivery?","acceptedAnswer":[{"@type":"Answer","text":"The course is entirely online and accessible through our user-friendly app."}]},{"@type":"Question","name":"What is the daily time commitment for the course?","acceptedAnswer":[{"@type":"Answer","text":"You'll need to dedicate just 15 minutes daily for the 7-day duration of the course. We encourage daily video posting on your social media platforms."}]},{"@type":"Question","name":"Where can I access the webinar sessions? Inside the app or elsewhere?","acceptedAnswer":[{"@type":"Answer","text":"All webinars are accessible within the app itself for your convenience."}]},{"@type":"Question","name":"What is the pricing and what does it include?","acceptedAnswer":[{"@type":"Answer","text":"Take advantage of our early bird offer at just 499/-. It includes app access, technique resources, daily content ideas, and potential content boosting for trending posts."}]},{"@type":"Question","name":"In which languages is the course available?","acceptedAnswer":[{"@type":"Answer","text":"The course materials are provided in both English and Hindi."}]},{"@type":"Question","name":"What prerequisites are needed to start the course or complete assignments?","acceptedAnswer":[{"@type":"Answer","text":"All you need is an Android phone, internet access, and a keen interest in the course content."}]},{"@type":"Question","name":"Is it mandatory to have social media accounts?","acceptedAnswer":[{"@type":"Answer","text":"Yes, at least one active social media account is mandatory, such as Instagram, Facebook, YouTube, or Twitter."}]},{"@type":"Question","name":"Which social media platforms does the course focus on the most?","acceptedAnswer":[{"@type":"Answer","text":"While we primarily focus on Instagram, Facebook, and YouTube, the techniques taught are applicable across all platforms."}]},{"@type":"Question","name":"Do I need a laptop or phone?","acceptedAnswer":[{"@type":"Answer","text":"An Android phone is all you need to access the course materials and participate in activities."}]},{"@type":"Question","name":"Are additional equipment like a ring light or tripod necessary?","acceptedAnswer":[{"@type":"Answer","text":"No, we'll teach you how to create engaging content using only your smartphone."}]},{"@type":"Question","name":"What can I do if I am facing issues during sign-up?","acceptedAnswer":[{"@type":"Answer","text":"We've got you covered! A tutorial will be provided to assist you with any sign-up issues."}]},{"@type":"Question","name":"Is there a time limit for completing the course?","acceptedAnswer":[{"@type":"Answer","text":"Each lesson will be accessible for 24 hours to ensure you have enough time to complete assignments and engage with the content."}]},{"@type":"Question","name":"Can I download the course materials for offline access?","acceptedAnswer":[{"@type":"Answer","text":"No, but you're encouraged to take notes during the course."}]},{"@type":"Question","name":"Is there a refund policy?","acceptedAnswer":[{"@type":"Answer","text":"Our refund policy is mentioned on our website : https://thevibes.academy/refund-policy.php"}]},{"@type":"Question","name":"If I struggle during the course, what support is available?","acceptedAnswer":[{"@type":"Answer","text":"You can always reach out to us on WhatsApp or on our phone number and we will be happy to help"}]},{"@type":"Question","name":"What benefits can I expect after completing the course?","acceptedAnswer":[{"@type":"Answer","text":"Upon completion, you'll receive a certificate that enhances your credibility, potentially attracting brands interested in collaborating with you."}]},{"@type":"Question","name":"Will I receive support from your team?","acceptedAnswer":[{"@type":"Answer","text":"Absolutely! Our support team is available Monday to Saturday from 10 AM to 7 PM to assist you with any queries or challenges you may face."}]},{"@type":"Question","name":"Will I receive feedback during assessments?","acceptedAnswer":[{"@type":"Answer","text":"Yes, we provide regular feedback on your progress and highlight the best-performing influencers' work."}]},{"@type":"Question","name":"Who will I collaborate with during the course?","acceptedAnswer":[{"@type":"Answer","text":"You'll have the opportunity to collaborate with over 10,000 other influencers enrolled in the course."}]},{"@type":"Question","name":"Who are you and your team?","acceptedAnswer":[{"@type":"Answer","text":"We are a team of seasoned professionals with backgrounds in filmmaking, social media, storytelling, advertising, media, and brand management."}]},{"@type":"Question","name":"What is the Vibes Academy all about?","acceptedAnswer":[{"@type":"Answer","text":"Vibes Academy offers an influencer MBA program designed to empower aspiring influencers to create impactful content."}]},{"@type":"Question","name":"Where is the academy located?","acceptedAnswer":[{"@type":"Answer","text":"Our academy is based in Delhi."}]},{"@type":"Question","name":"Why should I choose the Vibes Academy?","acceptedAnswer":[{"@type":"Answer","text":"We're dedicated to supporting aspiring influencers in honing their skills and creating compelling content that resonates with audiences."}]},{"@type":"Question","name":"Who are the mentors guiding the course?","acceptedAnswer":[{"@type":"Answer","text":"Our mentors bring a wealth of experience from diverse fields such as filmmaking, social media, storytelling, advertising, media, and brand management."}]}]}</script><!-- Generated by https://www.searchlogistics.com -->
</head>

<body class="fasqss">
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6XTXR8Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<?php include("inc/header.php"); ?>
	
	
	<div class="BannerFaq">
	    <div class="container">
	       <div class="roww">
	           <div class="coll">
	                <div class="textFAQ">
	            <h1>Get Your Answers Here</h1>
	            <p>Hello! Ready to enroll for our Instagram Influencer course, but you have some questions? Don't worry, we are here to provide you all the answers! This page is all about helping you understand everything about our courses and our company.</p>
	        </div>
	           </div>
	           <div class="coll coll2">
	               <img src="images/faqs.png" alt="faqs"/>
	           </div>
	       </div>
	    </div>
	</div>
	<div class="allFaq">
	    <div class="container">
	           <div class="FaqsRow">
	               <div class="ColmFaq Faq1 Fixed">
	                    <div class="hiNDIeng">
	                           <a href="faqs-hindi.php">हिन्दी </a>
	                              | <a href="faqs-english.php"><b>English</b></a>
	                       </div>
	                       
	                       
	                   <a href="javascript:;" class="tableOfContent mobileShow">Table of Contents</a>
	                   <ul class="menummmm">
	                      
	                       <span class="closebtn">X</span>
	                       <li><a class="cl1" href="#1_Faq">Course</a></li>
	                       <li><a class="cl2" href="#2_Faq">Technical</a></li>
	                       <li><a class="cl3" href="#3_Faq">Success Rate</a></li>
	                       <li><a class="cl4" href="#4_Faq">Community Engagement/Collabs</a></li>
	                       <li><a class="cl5" href="#5_Faq">Organization</a></li>
	                   </ul>
	               </div>
	                <div class="ColmFaq Faq2">
	                   <div class="AccordianBox" id="1_Faq">

                                <div class="acc">
                                <div class="Headingfaq">Course</div>
                                    <div class="acc__card">
                                      <div class="acc__title">Tell me about the course</div>
                                      <div class="acc__panel">
                                       Our comprehensive 7-day course covers essential topics like camera techniques, trending content, storytelling, and monetization strategies.
                                     </div>
                                </div>
                                <div class="acc__card">
                                      <div class="acc__title">I want to be successful in a specific niche, will I get guidance for that?</div>
                                      <div class="acc__panel">
                                      Absolutely, our course offers techniques applicable across all niches, ensuring your success regardless of your chosen niche.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">What is the mode of course delivery?</div>
                                      <div class="acc__panel">
                                    The course is entirely online and accessible through our user-friendly app.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">What is the daily time commitment for the course?</div>
                                      <div class="acc__panel">
                                    You'll need to dedicate just 15 minutes daily for the 7-days duration of the course. We encourage daily video posting on your social media platforms.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">Where can I access the webinar sessions? Inside the app or elsewhere?</div>
                                      <div class="acc__panel">
                                    All webinars are accessible within the app itself for your convenience.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">What is the pricing and what does it include?</div>
                                      <div class="acc__panel">
                                    Take advantage of our early bird offer at just 499/-. It includes app access, technique resources, daily content ideas, and potential content boosting for trending posts.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">In which languages is the course available?</div>
                                      <div class="acc__panel">
                                    The course materials are provided in both English and Hindi.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">What prerequisites are needed to start the course or complete assignments?</div>
                                      <div class="acc__panel">
                                    All you need is an Android phone, internet access, and a keen interest in the course content.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">Is it mandatory to have social media accounts?</div>
                                      <div class="acc__panel">
                                    Yes, at least one active social media account is mandatory, such as Instagram, Facebook, YouTube, or Twitter.
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">Which social media platforms does the course focus on the most?</div>
                                      <div class="acc__panel">
                                    While we primarily focus on Instagram, Facebook, and YouTube, the techniques taught are applicable across all platforms.
                                     </div>
                                </div>
	                       </div>
	                   </div>
	                     <div class="AccordianBox" id="2_Faq">
	                     
                                <div class="acc">
                                      <div class="Headingfaq">Technical</div>
                                    <div class="acc__card">
                                          <div class="acc__title">Do I need a laptop or phone?</div>
                                          <div class="acc__panel">
                                         An Android phone is all you need to access the course materials and participate in activities.
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">Are additional equipment like a ring light or tripod necessary?</div>
                                          <div class="acc__panel">
                                         No, we'll teach you how to create engaging content using only your smartphone.
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">What can I do if I am facing issues during sign-up?</div>
                                          <div class="acc__panel">
                                         We've got you covered! A tutorial will be provided to assist you with any sign-up issues.
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">Is there a time limit for completing the course?</div>
                                          <div class="acc__panel">
                                         Each lesson will be accessible for 24 hours to ensure you have enough time to complete assignments and engage with the content.
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">Can I download the course materials for offline access?</div>
                                          <div class="acc__panel">
                                         No, but you're encouraged to take notes during the course.
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">Is there a refund policy?</div>
                                          <div class="acc__panel">
                                         Our refund policy is mentioned on our website : <a href="https://thevibes.academy/refund-policy.php">https://thevibes.academy/refund-policy.php</a>
                                         </div>
                                     </div>   
                                
	                       </div>
	                   </div>
	                   
	                   <div class="AccordianBox" id="3_Faq">
	                      
                                <div class="acc">
                                     <div class="Headingfaq">Success Rate</div>
                                    <div class="acc__card">
                                          <div class="acc__title">If I struggle during the course, what support is available?</div>
                                          <div class="acc__panel">
                                            You can always reach out to us on WhatsApp or on our phone number and we will be happy to help
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">What benefits can I expect after completing the course?</div>
                                          <div class="acc__panel">
                                            Upon completion, you'll receive a certificate that enhances your credibility, potentially attracting brands interested in collaborating with you.
                                         </div>
                                     </div>
                                      
                                
	                       </div>
	                   </div>
	                   
	                      <div class="AccordianBox" id="4_Faq">
	                      
                                <div class="acc">
                                     <div class="Headingfaq">Community Engagement/Collabs</div>
                                    <div class="acc__card">
                                          <div class="acc__title">Will I receive support from your team?</div>
                                          <div class="acc__panel">
                                            Absolutely! Our support team is available Monday to Saturday from 10 AM to 7 PM to assist you with any queries or challenges you may face.
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">Will I receive feedback during assessments?</div>
                                          <div class="acc__panel">
                                            Yes, we provide regular feedback on your progress and highlight the best-performing influencers' work.
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">Who will I collaborate with during the course?</div>
                                          <div class="acc__panel">
                                            You'll have the opportunity to collaborate with over 10,000 other influencers enrolled in the course.
                                         </div>
                                     </div>
	                       </div>
	                   </div>
	                   
	                   
	                      <div class="AccordianBox" id="5_Faq">
	                      
                                <div class="acc">
                                     <div class="Headingfaq">Organization</div>
                                    <div class="acc__card">
                                          <div class="acc__title">Who are you and your team?</div>
                                          <div class="acc__panel">
                                        We are a team of seasoned professionals with backgrounds in filmmaking, social media, storytelling, advertising, media, and brand management.
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">What is the Vibes Academy all about?</div>
                                          <div class="acc__panel">
                                                Vibes Academy offers an influencer MBA program designed to empower aspiring influencers to create impactful content.
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">Where is the academy located?</div>
                                          <div class="acc__panel">
                                        Our academy is based in Delhi.
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">Why should I choose the Vibes Academy?</div>
                                          <div class="acc__panel">
                                            We're dedicated to supporting aspiring influencers in honing their skills and creating compelling content that resonates with audiences.
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">Who are the mentors guiding the course?</div>
                                          <div class="acc__panel">
                                            Our mentors bring a wealth of experience from diverse fields such as filmmaking, social media, storytelling, advertising, media, and brand management.
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">Vibes Academy does not have enough followers, how will you help us grow? </div>
                                          <div class="acc__panel">
                                            Take a look at our YouTube channel – our first video garnered 1.2 million views, and we gained 1k subscribers within just one week.
                                         </div>
                                     </div>
                                
	                       </div>
	                   </div>
	                   
	                   
	               </div>
	           </div>
	    </div>
	</div>
	
	
	
	<?php include("inc/footer.php"); ?>
	
	<script>
	    /* jQuery
================================================== */
$(function() {
  $('.acc__title').click(function(j) {
    
    var dropDown = $(this).closest('.acc__card').find('.acc__panel');
    $(this).closest('.acc').find('.acc__panel').not(dropDown).slideUp();
    
    if ($(this).hasClass('active')) {
      $(this).removeClass('active');
    } else {
      $(this).closest('.acc').find('.acc__title.active').removeClass('active');
      $(this).addClass('active');
    }
    
    dropDown.stop(false, true).slideToggle();
    j.preventDefault();
  });
});


  $(".cl1").click(function() {
    $('html, body').animate({
        scrollTop: $("#1_Faq").offset().top
    }, 300);
});

$(".cl2").click(function() {
    $('html, body').animate({
        scrollTop: $("#2_Faq").offset().top
    }, 300);
});

$(".cl3").click(function() {
    $('html, body').animate({
        scrollTop: $("#3_Faq").offset().top
    }, 300);
});

$(".cl4").click(function() {
    $('html, body').animate({
        scrollTop: $("#4_Faq").offset().top
    }, 300);
});

$(".cl5").click(function() {
    $('html, body').animate({
        scrollTop: $("#5_Faq").offset().top
    }, 300);
});

$(".tableOfContent").click(function() {
    $(".menummmm").addClass("ul2");
});
$(".closebtn").click(function() {
    $(".menummmm").removeClass("ul2");
});
 
	</script>