<?php

if(isset($_GET['qr']) && $_GET['qr'] == 'studentfest'){
    $servername = "localhost";
    $username = "mba";
    $password = "mba@123";
    $dbname = "mba";
    
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql = "INSERT INTO `test`(`name`) VALUES ('online-enroll-now.php')";
    $result = $conn->query($sql);
}
    ?>
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
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>The Vibes Academy</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.svg">
    <meta name="description" content="">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6XTXR8Z');</script>
<!-- End Google Tag Manager -->

 
</head>

<body>
    


<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          
         	<?php

	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>
 
          
          
          
        <h5 class="modal-title" id="exampleModalLabel">आवेदन करे</h5>
        
        
        
           		<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
        
          <h5 class="modal-title" id="exampleModalLabel">Enroll Now</h5>
          
        	<?php } ?>
        
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
       	<div class="JoinColm">
							<form action="https://www.thevibes.academy/paynow.php" id="EnrollNow" method="post">
								<div class="form__group field">
									<input type="input" class="form__field" placeholder="Name" name="CusName" id='CusName' required />
									
	<?php
	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>
			<label for="CusName" class="form__label">नाम *</label>
		 		<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
		<label for="CusName" pattern="[a-zA-Z]*" class="form__label">Name *</label>
		<?php } ?>
        
									
								
								</div>
								<div class="form__group field">
									<input type="email" class="form__field" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,8}"  placeholder="Email ID" name="CusEmail" id='CusEmail' required />
									
									
										<?php
	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>
			<label for="CusEmail" class="form__label">ईमेलऐड्रेस  *</label
		 		<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
		<label for="CusEmail" class="form__label">Email Address  *</label
		<?php } ?>
								>
								</div>
								<div class="form__group field">
									<input type="tel" class="form__field numberonly CusTel" maxlength="10" minlength="10" placeholder="Mobile Number" name="CusTel" id='CusTel' required />
										<?php
	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>
		<label for="CusTel" class="form__label">मोबाइल नंबर  *</label>
		 		<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
	<label for="CusTel" class="form__label">Mobile Number  *</label>
		<?php } ?>
									
									<p class="error" style="color:red;"></p>
								</div>
								<div class="form-group">
								    	<?php
	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>
		
		 <input type="hidden" name="track_form" value="enroll-i-mba-online index hindi">
		 
		    <span class="success_msg" style="display:none">🎉 You are already enrolled in our i-MBA course.</span>
			<button class="btn-submit" type="submit">₹499 देकर तुरंत नामांकन करें</button>
		 		<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
	
	
	 <input type="hidden" name="track_form" value="enroll-i-mba-online index english">
	<span class="success_msg" style="display:none">🎉 You are already enrolled in our i-MBA course.</span>
		<button class="btn-submit btnClickLog" type="submit">Pay Rs. 499 & Enroll Right Away</button>
		
		<?php } ?>
								
								</div>
							</form>
						</div>
      </div>


<div class="miniHeader" style="background: #ffffff; color: #fe3702; padding: 14px 0px 0px 0px; text-align: center; font-size: 18px; font-weight: 600; border-top: 1px solid #ccc; display:none;">
    	   <p>🎉 New batch starts on 3rd June 2024 🚀</p>
</div>

    </div>
  </div>
</div>
   <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T6XTXR8Z"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) --> 
    
<div class="background">
    <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
   <span></span>
</div>


		<?php

	if(isset($_GET['lang'])) {
		$lang = $_GET['lang'];
		if($lang == 'hi') { ?>




    <div class="container-fluid">
        <div class="row pdtb115">

            <div class="col-md-6 col-sm-12  text-center txt-cnt logo">
                <a target="_blank" href="https://www.thevibes.academy/enroll-i-mba-online/?lang=hi">
                    <img src="images/logo.svg" class="img-fluid left-side-space  d-md-block mrgintopheader" alt="">
                </a>
            </div>
            <div class="col-md-6 col-sm-9 text-right  txt-cnt topenroll d-none d-sm-none d-md-block">
               <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn-enroll right-side-space">अभी आवेदन 
               करें <span> ₹9999 </span> नहीं सिर्फ ₹499 में</a>
            </div>



        </div> <!-- LOGO ENDS-->
        <div class="row pdtb115 bg-video-01">
            <div class="container bg-video-02">
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-centered">
                        <h3 class="text-center txt-xl mr-b-subheading HeadingforDesktop"><span class="txt-grad">60  दिनों मे बनें इन्फ्लुएंसर!</span></h3>
                         <h3 class="text-center txt-xl mr-b-subheading HeadingforMobile"><span class="txt-grad">60  दिनों मे बनें <br> इन्फ्लुएंसर!</span></h3>
                        <p class="text-center smallWidhtMobile">हमारे <strong>i-MBA, Influencers’ MBA</strong> के साथ, बनिए सोशल मीडिया स्टार, डाटा की सहायता से कैसे फोल्लोवेर्स बढ़ाएं, अन्य इन्फ़्लूनासरस के साथ पार्टनरशिप करें और सीखे कंटेंट से पैसे कामना, ये सबकुछ 1 सिंपल से कोर्स में !</p>
                    </div>

                    <div class="col-md-12 text-center">
                       
                        <iframe class="video-container1 VideoContainerWidth" width="auto" height="320px" src="https://www.youtube.com/embed/7c6m_HMPpxQ?si=aYcEH40KqUP7r0mh?autoplay=1&controls=0&showinfo=0&rel=0&modestbranding=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>

                    <div class="col-md-12 text-center">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn-enroll">अभी आवेदन करें 
                        <span> ₹9999 </span> नहीं सिर्फ ₹499 में </a>
                    </div>
                </div>
            </div>
        </div> <!-- VIDEO ENDS-->
        
        
        <div class="row pdtb140 bg-get">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad textsss">आपको क्या-क्या मिलेगा?</span></h3>
                    </div>

                    <div class="col-lg-10 col-md-12 col-centered">
                        <div class="row">
                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red">
                                    <div><span class="live"><strong>60 दिन </strong> की लाइव क्लासेस</span></div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red">
                                  <div><span class="watch">सरल और <strong>दिलचस्प</strong> पाठ्यक्रम </span></div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red">
                                    <div><span class="hindi">कोर्स अंग्रेजी और <strong>हिंदी भाषा में उपलब्ध</strong></span></div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red ">
                                    <div><span class="recording"><strong>ऑनलाइन कोर्स </strong>| एंड्रॉइड ऐप पर उपलब्ध</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- YOU WILL GET ENDS-->
        <div class="row pdtb115 pdb120 bg-time">
            <div class="col-md-12">
                <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">समय निकल रहा है </span></h3>
                <p class="text-center">समय शून्य होने पर इस कोर्स की फीस बढ़कर ₹ 9999 हो जाएगी </p>
            </div>

            <div class="col-md-12 text-center">

                <div class="timer">
                    <div>
                        <span class="days" id="day"></span>
                        <div class="smalltext">दिन</div>
                    </div>
                    <div class="dot"><img src="images/dot.png"></div>
                    <div>
                        <span class="hours" id="hour"></span>
                        <div class="smalltext">घंटा </div>
                    </div>
                    <div class="dot"><img src="images/dot.png"></div>
                    <div>
                        <span class="minutes" id="minute"></span>
                        <div class="smalltext">मिनट </div>
                    </div>
                    <div class="dot hidden-xs"><img src="images/dot.png"></div>
                    <div class="hidden-xs">
                        <span class="seconds" id="second"></span>
                        <div class="smalltext">सेकंड </div>
                    </div>
                    <p id="time-up"></p>
                </div>

            </div>

            <div class="col-md-12 text-center">
                <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn-enroll">अभी आवेदन करें <span>₹9999</span>  नहीं सिर्फ ₹499 में</a>
            </div>

        </div> <!-- TIMER ENDS-->
        <div class="row pdtb120 bg-course-02">
            <div class="row bg-course-01 col-centered w-100">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12">
                            <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">क्यों करना चाहिए आपको ये कोर्स ?</span></h3>
                            <p class="text-center">अपने आप मूल्यांकन करें, और अभी ज्वाइन करें | </p>
                        </div>



                        <!-- NEW TESTING-->
                        <div class="container tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs device-small" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                        <div class="ourcourses bg-green brd-rd-30 txt-white txt-base">Our Courses</div>
                                    </a></li>

                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                        <div class="othercourses txt-white txt-base bg-black brd-rd-30">Others</div>
                                    </a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active col col-xs-12 col-sm-12 col-md-5" id="home">
                                    <div class="join">
                                        <h4 class="bg-green brd-rd-30 txt-white txt-base d-none d-md-block d-lg-block">हम अलग है क्यों की हम आप को देते है</h4>
                                        <div class="wrapperCnt">
                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class=" firstchild" data-toggle="collapse" href="#joinreason1" role="button" aria-expanded="false" aria-controls="collapseExample">
														कोर्स <strong>हिंदी और अंग्रेजी</strong> दोनों में उपलब्ध है  <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason1">
                                                        <p>
                                                        हमारा कोर्स हिंदी और अंग्रेज़ी दोनों में उपलब्ध है 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>प्रभावशाली  </strong>कोर्स कंटेंट  <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason2">
                                                        <p>
                                                        हमारा कोर्स  कंटेंट  विशेष रूप से  भारतीय इन्फ्लुएंसर्स और दर्शकों को ध्यान में रखकर बनाया गया है, जिसमें ऐसे  तकनीकें शामिल हैं जो केवल भारतवासियों के लिए काम करती हैं।
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    कंटेंट   <strong> आईडिया</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason3">
                                                        <p>
                                                        हम अपने  कोर्स में प्रतिदिन आसान भाषा में कंटेंट आईडिया ( असाइनमेंट्स )  साझा करते है जिससे आपको सोशल  मीडिया कंटेंट बनाने में सहायता मिले 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    पुरस्कार और  <strong>प्रोत्साहन</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason4">
                                                        <p>
                                                        कोर्स के दौरान अच्छा प्रदर्शन करने वालों प्रतिभागियों को प्रोत्साहन और पुरस्कार जीतने का अवसर मिलेगा, साथ ही साथ कोर्स खत्म  होने पर एक सर्टिफिकेट भी दिया जायेगा। 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    इन्फ्लुएंसर   <strong> समर्थन</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason5">
                                                        <p>
                                                        आपको कोर्स के बाद भी इन्फ्लुएंसर दोस्तों  से जुड़े रहने और सहयोग करने के अवसर मिलते हैं
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>मोबाइल आधारित कोर्स  </strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason6">
                                                        <p>
                                                        आप पूरा कोर्स आसानी से मोबाइल एप्लिकेशन से कर सकते हैं और लैपटॉप जैसे अन्य उपकरणों की कोई आवश्यकता नहीं होती है।
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane col-xs-12 col-sm-0 col-md-2 text-center" id="">
                                    <div class="vscontainer">
                                        <div class="vs"><span>vs</span></div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane col-xs-12 col-sm-12 col-md-5" id="messages">
                                    <div class="other">
                                        <h4 class="bg-black brd-rd-30 txt-white txt-base d-none d-md-block d-lg-block">अन्य प्लेटफार्मों पर आपको क्या मिल रहा है </h4>
                                        <div class="wrapperCnt">

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class=" firstchild" data-toggle="collapse" href="#otherreason1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <strong>सिर्फ एक भाषा</strong>  मे उपलब्ध     <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason1">
                                                        <p>
                                                        अधिकांश कोर्स  केवल अंग्रेजी में में उपलब्ध हैं,  जिसे समझने में अक्सर दिक्कत होती हैं
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>अअनुकूलित  </strong> कोर्स कंटेंट  <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason2">
                                                        <p>
                                                        कोर्स का  कंटेंट  आपकी  ज़रूरतों को ध्यान का नहीं रखता है, और कई ऐसी तकनीकें बताई जाती हैं जो भारतीय दर्शकों के लिए काम नहीं करतीं।
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>थ्योरी आधारित</strong> कंटेंट  <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason3">
                                                        <p>
                                                        बिना प्रैक्टिकल लेसंस के सिर्फ थ्योरी से पढ़ने पर आपको कंटेंट डेवेलोप करने में दिक्कत हो सकती है
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                    <strong> केवल</strong>  कोर्स  प्रमाण पत्र  <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason4">
                                                        <p>
                                                        कोर्स  के पूरा होने के दौरान या उसके पूरा होने पर पाठ्यक्रम प्रमाणपत्र से परे कोई अतिरिक्त पुरस्कार नहीं दिया जाता है
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>सीमित </strong> समर्थन <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason5">
                                                        <p>
                                                        आपको कोर्स से बाद कोई समर्थन  प्राप्त नहीं होता  है
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>लैपटॉप/कैमरा   </strong>ज़रूरी <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason6">
                                                        <p>
                                                        अन्य कोर्स करने के लिए आपको मेहेंगे लैपटॉप और कैमरा की ज़रुरत पड़ेगी 
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- NEW TESTING END-->


                    </div>
                </div>
            </div>
        </div> <!-- JOIN COURSE ENDS-->
        <div class="row pdtb120 bg-exactly">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">आप क्या-क्या सीखेंगे और समझेंगे?</span></h3>
                        <p class="text-center">अपने आप मूल्यांकन करें, और अभी ज्वाइन करें | </p>
                    </div>
                </div>

                <div class="gtco-testimonials pdb120 bg-exactly-01">
                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>पहले हफ्ते </strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>कैमरे का इस्तेमाल </strong></p>
                                            <ul class="coursetitle">
                                                <li>कैसे शूट करें </li>
                                                <li>बारीकियों की समझ </li>
                                                <li>लाइटिंग की समझ और उसका इस्तेमाल </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>दूसरे हफ्ते </strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>एडिटिंग </strong></p>
                                            <ul class="coursetitle">
                                                <li>पोस्ट प्रोडक्शन तकनीक</li>
                                                <li>ऑडियो रिकॉर्डिंग की बारीकियां </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>तीसरे हफ्ते</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>कंटेंट डेवलपमेंट </strong></p>
                                            <ul class="coursetitle">
                                                <li>कंटेंट डेवेलोप करने के तरीके </li>
                                                <li>भावनत्मक कंटेंट </li>
                                                <li>कंटेंट की निरंतरता </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>चौथे हफ्ते</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong> ब्रांडिंग</strong></p>
                                            <ul class="coursetitle">
                                                <li>असरदार ब्रांडिंग </li>
                                                <li>कंटेंट में व्यक्तिगत प्रतिनिधित्व</li>
                                                <li>प्रामाणिक कंटेंट </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>पांचवे हफ्ते </strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>प्लानिंग और ऑडियंस की समझ </strong></p>
                                            <ul class="coursetitle">
                                                <li>प्लान के तहत पोस्ट करना </li>
                                                <li>सोशल मीडिया पर ऑडिएंस से ऐन्गजे करना </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>छठे हफ्ते </strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>ट्रेंड्स </strong></p>
                                            <ul class="coursetitle">
                                                <li>ट्रेंडिंग कंटेंट </li>
                                                <li>कम्युनिटी को इन्फ्लुएंस करना </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>सातवें हफ्ते </strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>डेटा का इस्तेमाल </strong></p>
                                            <ul class="coursetitle">
                                                <li>एनालिटिक्स की समझ </li>
                                                <li>एनालिटिक्स डाटा का विश्लेषण और इस्तेमाल </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>आठवें हफ्ते </strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>कंटेंट से पैसे कामना </strong></p>
                                            <ul class="coursetitle">
                                                <li>पैसे कमाने की रणनीतियां </li>
                                                <li>इंफ्लुंसर पार्टनरशिप से पैसे कामना </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- WHAT YOU GET ENDS-->
        <div class="row bg-exactly">
            <div class="col-md-12">
                <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">हमसे अक्सर पूछे जाने वाले प्रश्न - बारीकियों को समझें</span></h3>
                <p class="text-center">अपने आप मूल्यांकन करें, और अभी ज्वाइन करें | </p>
            </div>
            <div class="container bg-exactly-01 faqhindi">
                <div class="col-md-12 faqs pdt35">

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong> कोर्स की कीमत क्या है और इसमें क्या क्या शामिल है?</strong></p>
                            <p>कोर्स की लागत 9999/- है, लेकिन आप हमारे अर्ली बर्ड ऑफर का लाभ लेकर केवल 499/- में कोर्स ले सकते हैं। इसमें आपको  ऐप एक्सेस, तकनीक संसाधन, हर दिन नया कंटेंट आईडिया और ट्रेंड्स  शामिल है।  </p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong>मैं एक विशिष्ट टाइप का कंटेंट बनकर सफल होना चाहता हूं, क्या मुझे इसके लिए मार्गदर्शन मिलेगा ?</strong></p>
                            <p>बिल्कुल, हमारा कोर्स सभी  क्षेत्रों में इस्तेमाल होने वाली तकनीकों में  सहायता करता है, जो आपके चुने हुए विशिष्ट विषय में पहुंच बनाने मैं सहायता करएगा </p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong> कोर्स के लिए प्रतिदिन कितना समय  देना होगा ?</strong></p>
                            <p>आपके कोर्स की अवधि 60  दिन की है आप को प्रतिदिन 60 मिनट देना होगा जिसमें आपको  कोर्स समझने के लिए 15 मिनट और आपके असाइनमेंट का 45मिनट दिया गया है, आप असाइनमेंट ख़तम करके सोशल मीडिया पे पोस्ट और और फिर पोस्ट लिंक एप्लीकेशन पे  शेयर करें |  हमारा  उद्देश्य आपके सोशल मीडिया प्लेटफॉर्म पर प्रतिदिन वीडियो पोस्टिंग को प्रेरित  करना हैं</p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong>कोर्स शुरू करने और असाइनमेंट पूरा करने किन किन चीज़ो की जरुरत है ?</strong></p>
                            <p>आपको बस एक एंड्रॉइड फोन, इंटरनेट एक्सेस और कोर्स में  गहरी रुचि की जरुरत है </p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong>  क्या सोशल मीडिया अकाउंट होना जरुरी है ?</strong></p>
                            <p>हां, आपका इंस्टाग्राम, फेसबुक, यूट्यूब या ट्विटर पर एक सोशल मीडिया अकाउंट होना चाहिए</p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong> वाइब्स अकादमी क्या है और अकादमी कहाँ स्थित है?</strong></p>
                            <p>वाइब्स अकादमी एक  इनफ्लुंसर MBA  कोर्स है  जो  इनफ्लुंसर बना चाहते है उन्हें अच्छे कंटेंट के सहायता से सशक्त बनाने के लिए किया गया है। हमारी अकादमी दिल्ली में स्थित है।</p>
                        </div>
                    </div>


                </div>
            </div>
        </div> <!-- FAQs ENDS-->
        <div class="row pdtb115 pdtb120 bg-us">
            <div class="col-md-12">
                <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">यह सिर्फ हम नहीं कह रहे </span></h3>
                <p class="text-center">देखिये पूर्व स्टूडेंट्स क्या कहते हैं हमारे बारे में</p>

                <div class="container">
                      <div class="row gap20">
                              

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder4.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>राघव मेहता</strong><br>
                                                <small>सोशल मीडिया बिगनर</small>
                                                <blockquote>मैंने  कंटेंट आइडिया के साथ साथ कैमरा  तकनीक की बारिकियो की समझा  जिससे  मेरे लिए रील्स बनाना आसान और आकर्षक हो गया मैं सोशल मीडिया पर नया हूं पर अब मुझे लगता है मैं आसन से अच्छा इन्फ्लुएंसर बन सकता हूं, धन्यवाद वाइब्स अकादमी </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>अक्षिता जोशी</strong><br>
                                                <small> लाइफस्टाइल इन्फ्लुएंसर 5k+ फॉलोअर्स </small>
                                                <blockquote>वाइब्स अकादमी के साथ मेरे दो महीने  ज्ञान से भरे हुए थे। #वाइब्स अकादमी के साथ सोशल मीडिया कोर्स  में आवेदन करना मेरा सबसे अच्छा निर्णय था </blockquote>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder2.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>तुषार बंसल</strong><br>
                                                <small> ट्रैवल इन्फ्लुएंसर इंस्टाग्राम पर 6k+ फॉलोअर्स</small>
                                                <blockquote>कोर्स  को समझना आसान है, और यह कोर्स को समझने में कोई प्रॉब्लम नहीं होती है  कहीं से भी कोई भी इन इसका  उपयोग कर सकता है! #वाइब्स अकादमी   का कोर्स  यह सोचने पर मजबूर करता है कि कैसे अच्छा इन्फ्लुएंसर बने और स्टेप बाई स्टेप  सफलता कैसे प्राप्त करें।</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder3.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>शिवम कुमार</strong><br>
                                                <small>फ़ूड  ब्लॉगर</small>
                                                <blockquote>आश्चर्यजनक! मुझे  कोर्स में बहोत मज़ा आया ! मुझे  पसंद आया कि यह कोर्स  "इन्फ्लुएंसर माइंडसेट", लाइफस्टाइल और सोशल मीडिया से पैसे कमाने के तरीको पर खासतौर पर ज़ोर देता है ।</blockquote>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--.row-->
                </div>
            </div>
        </div> <!-- IT's NOT ONLY US ENDS-->
        
        
        
        		<?php
		} elseif($lang == 'mr') {
			// Content for Marathi
		} else {
			header("Location:index.php");
		}
	} else { ?>
        
        
    
    <div class="container-fluid">
        <div class="row pdtb115">

            <div class="col-md-6 col-sm-12  text-center txt-cnt logo">
                <a target="_blank" href="https://www.thevibes.academy/enroll-i-mba-online/">
                    <img src="images/logo.svg" class="img-fluid left-side-space  d-md-block mrgintopheader" alt="">
                </a>
            </div>
            <div class="col-md-6 col-sm-9 text-right  txt-cnt topenroll d-none d-sm-none d-md-block">
                <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn-enroll right-side-space">Enroll Now for <span>₹9999</span> ₹499 Only</a>
            </div>



        </div> <!-- LOGO ENDS-->
        <div class="row pdtb115 bg-video-01">
            <div class="container bg-video-02">
                <div class="row">
                    <div class="col-lg-10 col-md-12 col-sm-12 col-centered">
                        <h3 class="text-center txt-xl mr-b-subheading HeadingforDesktop"><span class="txt-grad">Become an influencer in 60 Days</span></h3>
                         <h3 class="text-center txt-xl mr-b-subheading HeadingforMobile"><span class="txt-grad">Become an influencer in <br> 60 Days</span></h3>
                        <p class="text-center smallWidhtMobile">With our <strong>i-MBA, Influencers’ Program</strong>, Master storytelling, leverage data for growth, collaborate with influencers, and learn content monetisation—all in 1 tailored course!</p>
                    </div>

                    <div class="col-md-12 text-center">
                        
                        <iframe class="video-container1 VideoContainerWidth" width="auto" height="320px" src="https://www.youtube.com/embed/7c6m_HMPpxQ?si=aYcEH40KqUP7r0mh?autoplay=1&controls=0&showinfo=0&rel=0&modestbranding=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    
                  
                    </div>

                    <div class="col-md-12 text-center">
                        <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn-enroll">Enroll Now for <span>₹9999</span> ₹499 Only</a>
                    </div>
                </div>
            </div>
        </div> <!-- VIDEO ENDS-->
        
      

        <div class="row pdtb140 bg-get">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad textsss">What will you get?</span></h3>
                    </div>

                    <div class="col-lg-10 col-md-12 col-centered">
                        <div class="row">
                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red">
                                    <div><span class="live"><strong>60 Days</strong> Online Classes</span></div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red">
                                    <div><span class="watch"><strong>Easy & Engaging</strong> Course Flow</span></div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red">
                                    <div><span class="hindi">Courses in English &amp; <strong>Hindi / हिन्दी</strong></span></div>
                                </div>
                            </div>

                            <div class="col-md-6 pad-lr-30">
                                <div class="brd-blck-red ">
                                    <div><span class="recording"><strong>Online Classes</strong> via Android App</span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- YOU WILL GET ENDS-->
        <div class="row pdtb115 pdb120 bg-time">
            <div class="col-md-12">
                <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">Time is Running Out!</span></h3>
                <p class="text-center">Once the timer hits zero, pricing will be increased to ₹9999/-</p>
            </div>

            <div class="col-md-12 text-center">

                <div class="timer">
                    <div>
                        <span class="days" id="day"></span>
                        <div class="smalltext">Days</div>
                    </div>
                    <div class="dot"><img src="images/dot.png"></div>
                    <div>
                        <span class="hours" id="hour"></span>
                        <div class="smalltext">Hours</div>
                    </div>
                    <div class="dot"><img src="images/dot.png"></div>
                    <div>
                        <span class="minutes" id="minute"></span>
                        <div class="smalltext">Minutes</div>
                    </div>
                    <div class="dot hidden-xs"><img src="images/dot.png"></div>
                    <div class="hidden-xs">
                        <span class="seconds" id="second"></span>
                        <div class="smalltext">Seconds</div>
                    </div>
                    <p id="time-up"></p>
                </div>

            </div>

            <div class="col-md-12 text-center">
                <a href="javascript:;" data-toggle="modal" data-target="#exampleModal" class="btn-enroll">Enroll Now for <span>₹9999</span> ₹499 Only</a>
            </div>

        </div> <!-- TIMER ENDS-->
        <div class="row pdtb120 bg-course-02">
            <div class="row bg-course-01 col-centered w-100">
                <div class="container ">
                    <div class="row ">
                        <div class="col-md-12">
                            <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">Why should you join this Course?</span></h3>
                            <p class="text-center">Evaluate your cause and Enroll Now </p>
                        </div>



                        <!-- NEW TESTING-->
                        <div class="container tabs">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs device-small" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">
                                        <div class="ourcourses bg-green brd-rd-30 txt-white txt-base">Our Courses</div>
                                    </a></li>

                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">
                                        <div class="othercourses txt-white txt-base bg-black brd-rd-30">Others</div>
                                    </a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active col col-xs-12 col-sm-12 col-md-5" id="home">
                                    <div class="join">
                                        <h4 class="bg-green brd-rd-30 txt-white txt-base d-none d-md-block d-lg-block">What we offer that sets us apart</h4>
                                        <div class="wrapperCnt">
                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class=" firstchild" data-toggle="collapse" href="#joinreason1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        Available in<strong> many languages</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason1">
                                                        <p>
                                                            You can access the course in not just English but also in Hindi, and many other regional languages
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>Curated </strong>course content <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason2">
                                                        <p>
                                                            Our course content is specifically made to cater to Indian influencers and audience, with concepts and techniques that work for the Bharat-wasi
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                       Content <strong> Ideas</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason3">
                                                        <p>
                                                            Easy to implement content ideas (assignments) are shared regularly in our course that help you post with consistency on social media
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        Rewards and  <strong>Incentives</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason4">
                                                        <p>
                                                            Well-performing participants have the opportunity to win incentives and rewards even as the course is ongoing. They also receive a certificate at the end.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                       Community <strong> Support</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason5">
                                                        <p>
                                                            You get opportunities to connect and create beyond the course
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="joinwrap brd-green">
                                                <div class="ico-join">
                                                    <img src="images/check.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#joinreason6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>User-Friendly </strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="joinreason6">
                                                        <p>
                                                            You get easy access on a mobile application and don’t need other devices like laptops.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane col-xs-12 col-sm-0 col-md-2 text-center" id="">
                                    <div class="vscontainer">
                                        <div class="vs"><span>vs</span></div>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane col-xs-12 col-sm-12 col-md-5" id="messages">
                                    <div class="other">
                                        <h4 class="bg-black brd-rd-30 txt-white txt-base d-none d-md-block d-lg-block">What is there on other platforms</h4>
                                        <div class="wrapperCnt">

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class=" firstchild" data-toggle="collapse" href="#otherreason1" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                      Available in   <strong>one language</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason1">
                                                        <p>
                                                            Most other courses are available only in one language, that is English, thereby limiting their access to a wider audience
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason2" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>Un-customized </strong> course content <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason2">
                                                        <p>
                                                            Course content is not customised to suit your needs and is more generic or universal, with many concepts not working for the Indian audience
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason3" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>Theory based </strong>content only  <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason3">
                                                        <p>
                                                            Concepts are taught without any practical application that doesn’t help you generate content and post on a regular basis
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason4" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        Course certificate <strong> only</strong> <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason4">
                                                        <p>
                                                            No additional rewards beyond a course certificate are offered either during or upon completion of the course
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason5" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>Limited </strong> Learnings <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason5">
                                                        <p>
                                                            You don’t receive any support or content beyond the course
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="otherwrap brd-blackbrd">
                                                <div class="ico-join">
                                                    <img src="images/cross.png">
                                                </div>
                                                <div class="text-wrap vcenter">
                                                    <a class="" data-toggle="collapse" href="#otherreason6" role="button" aria-expanded="false" aria-controls="collapseExample">
                                                        <strong>Limited </strong>Usage <span class="IconDownArrow"></span>
                                                    </a>
                                                    <div class="collapse" id="otherreason6">
                                                        <p>
                                                            You struggle to access content that is available on websites that are not mobile-friendly
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>



                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <!-- NEW TESTING END-->


                    </div>
                </div>
            </div>
        </div> <!-- JOIN COURSE ENDS-->
        <div class="row pdtb120 bg-exactly">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">What exactly we will learn &amp; build?</span></h3>
                        <p class="text-center">Evaluate your cause and Enroll Now </p>
                    </div>
                </div>

                <div class="gtco-testimonials pdb120 bg-exactly-01">
                    <div class="owl-carousel owl-carousel1 owl-theme">
                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 01</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Learning Visual Basics</strong></p>
                                            <ul class="coursetitle">
                                                <li>Capturing techniques</li>
                                                <li>Framing nuances</li>
                                                <li>Lighting dynamics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 02</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Editing</strong></p>
                                            <ul class="coursetitle">
                                                <li>Post-production techniques</li>
                                                <li>Role of audio</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 03</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Storytelling</strong></p>
                                            <ul class="coursetitle">
                                                <li>Explore narrative essentials</li>
                                                <li>Emotional content</li>
                                                <li>Continuity</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 04</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Branding</strong></p>
                                            <ul class="coursetitle">
                                                <li>Explore personal representation</li>
                                                <li>Authenticity</li>
                                                <li>Effective branding</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 05</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Planning and Audience</strong></p>
                                            <ul class="coursetitle">
                                                <li>Planning and posting</li>
                                                <li>Engagement</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 06</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Trends</strong></p>
                                            <ul class="coursetitle">
                                                <li>Trending content</li>
                                                <li>Community influence</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 07</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Data Insights</strong></p>
                                            <ul class="coursetitle">
                                                <li>Explore analytical tools</li>
                                                <li>Analyse performance metrics</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <div class="card text-left">
                                <div class="brd-rd-blue">
                                    <div class="card-body">
                                        <h5><span><strong>Week 08</strong></span></h5>
                                        <div class="card-text">
                                            <p><strong>Monetisation</strong></p>
                                            <ul class="coursetitle">
                                                <li>Revenue strategies</li>
                                                <li>Partnerships</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div> <!-- WHAT YOU GET ENDS-->
        <div class="row bg-exactly">
            <div class="col-md-12">
                <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">FAQ - Frequently Asked Questions</span></h3>
                <p class="text-center">Evaluate your cause and Enroll Now </p>
            </div>
            <div class="container bg-exactly-01">
                <div class="col-md-12 faqs pdt35">

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong>What is the pricing and what does it include?</strong></p>
                            <p>The course cost is ₹ 9999/- but you can take advantage of our early bird offer at just ₹499/-. It includes app access, technique
                                resources, daily content ideas, and potential content boosting for trending posts.</p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong>I want to be successful in a specific niche, will I get guidance for that?</strong></p>
                            <p>Absolutely, our course offers techniques applicable across all niches, ensuring your success regardless of your chosen niche.</p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong> What is the daily time commitment for the course?</strong></p>
                            <p>You'll need to dedicate just 60 minutes daily for the 60-day duration of the course. The course takes 15 minutes only, while we advise you to keep aside 45 mins to do your assignment, post it on social media and then share the link with us on the application. <br>We encourage daily video posting on your social media platforms.</p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong>What prerequisites are needed to start the course or complete assignments?</strong></p>
                            <p>All you need is an Android phone, internet access, and a keen interest in the course content.</p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong> Is it mandatory to have social media accounts?</strong></p>
                            <p>Yes, at least one active social media account is mandatory, such as Instagram, Facebook, YouTube, or Twitter.</p>
                        </div>
                    </div>

                    <div class="faqwrap brd-blck">
                        <div class="ico-faq">
                            <img src="images/icon-faq.png">
                        </div>
                        <div class="text-wrap vcenter">
                            <p><strong> What is the Vibes Academy all about and where is the academy located?</strong></p>
                            <p>Vibes Academy offers an influencer MBA program designed to empower aspiring influencers to create impactful content. Our
                                academy is based out of Delhi.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div> <!-- FAQs ENDS-->
        <div class="row pdtb115 pdtb120 bg-us">
            <div class="col-md-12">
                <h3 class="text-center txt-xl mr-b-subheading"><span class="txt-grad">It’s not only us</span></h3>
                <p class="text-center">Here's what others have to say about us.</p>

                <div class="container">
                      <div class="row gap20">
                              

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder4.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>Raghav Mehta</strong><br>
                                                <small>Social Media Novice</small>
                                                <blockquote>I gained exposure to various techniques and tricks along with learning about the elements
                                                    that make a reel captivating to the audience. I was new to social media but now I feel I can
                                                    become an influencer easily, all thanks to The Vibes academy.</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>Akshita Joshi</strong><br>
                                                <small>Lifestyle Influencer with 5k+ followers</small>
                                                <blockquote>My two months with The Vibes Academy were brimming with fascinating insights and
                                                    knowledge. Enrolling in a social media course with #TVA has proven to be one of my best choices.</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                      <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder2.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>Tushaar Bansal</strong><br>
                                                <small>Travel Influencer on Instagram with 6k+ followers</small>
                                                <blockquote>The content is easy to understand, and this course doesn’t give hard to understand
                                                    fundas. Anyone from anywhere can use these tips! TVA’s course makes you think
                                                    how to be better and how to gain success in a step by step process.</blockquote>
                                            </div>
                                        </div>
                                    </div>
                                       <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                        <div class="img-circle"><img src="images/img-placeholder3.png" alt=""></div>
                                        <div class="brd-rd-blue testimonial">
                                            <div>
                                                <strong>Shivam Kumar</strong><br>
                                                <small>Food Blogger</small>
                                                <blockquote>Wonderful! I enjoyed the course! Especially loved that it was specific to the
                                                    &#39;influencer&#39; mindset, lifestyle and financial management.</blockquote>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--.row-->
                </div>
            </div>
        </div> <!-- IT's NOT ONLY US ENDS-->
        
            
        
        
        
        	<?php } ?>
        
        
        
        
        
        
    <form action="https://www.thevibes.academy/pay-online.php" id="payagain" method="post">
        <input type = "hidden" name="payagain" id="pay_id">
        <input type="hidden" name="track_form" value="enroll-i-mba-online-php">
    </form>   
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div class="row footer bg-lightred">
            <div class="container">
                <div class="row footerrow">
                    <div class="col-md-3 col4">
                        <ul class="flinks txt-sm">
                            <li><a href="#">Legal</a></li>
                            <li><a target="_blank" href="https://www.thevibes.academy/terms-and-conditions.php">Terms &amp; Condition</a></li>
                            <li><a target="_blank" href="https://www.thevibes.academy/privacy-policy.php">Privacy Policy</a></li>
                            <li><a target="_blank" href="https://www.thevibes.academy/refund-policy.php">Refund Policy</a></li>
                        </ul>
                    </div>
                    <div class="col-md-5 address txt-sm col6">
                        <address>
                            E-261, Basement, Greater Kailash-2,
                            New Delhi - 110048<br>
                            <a href="tel:+919773794872">+91-9773794872</a><br>
                            <a target="_blank" href="mailto:hello@thevibes.academy">hello@thevibes.academy</a>
                        </address>
                    </div>
                    <div class="col-md-4 copyright txt-sm">
                        Copyright ©️ The Vibes Academy 2024.<br>
                        An initiative of <a target="_blank" href="https://thinquilab.com/">Thinquilab Private Limited</a>

                    </div>
                </div>
            </div>
        </div> <!-- FOOTER ENDS-->
    </div>



    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/scripts.js"></script>
    
  
</body>
<script>
    $(document).ready(function() {
        $('#image').click(function() {
            $(this).hide();
            $('.video-container').show();
        });
    });
</script>

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
            url: 'https://www.thevibes.academy/mobilenumberchk-payment.php',
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
            url: 'https://www.thevibes.academy/mobilenumberchk-payment.php',
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
            url: 'https://www.thevibes.academy/mobilenumberchk-payment.php',
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
<script>
$(document).ready(function() {
    $(".btnClickLog").click(function() {
        // Send AJAX request to log the click
        $.ajax({
            type: "POST",
            url: "log_click.php",
            success: function(response) {
                console.log(response);
            }
        });
    });
});
</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js"></script>
	
	<script>
	    $(document).ready(function(){
  $('.client-slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 1500,
    arrows: false,
    dots: false,
    pauseOnHover: false,
    responsive: [{
      breakpoint: 768,
      settings: {
        slidesToShow: 3
      }
    }, {
      breakpoint: 520,
      settings: {
        slidesToShow: 2
      }
    }]
  });
});
	</script>

</html>