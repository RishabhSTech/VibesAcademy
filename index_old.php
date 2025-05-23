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
    
    if($lang == 'hi') {
        
        ?>
        
	<section class="mainmsg">
		<div class="container">
			<div class="msgContent">
				<hr>
				<h1 class="mainh"><span class="Span1">i-MBA</span> INFLUENCERS' <span class="Span2">का</span> MBA</h1>
				<p>
				बेहतर <span>कहानीकार</span> बनिए, डाटा का इस्तेमाल करके कैसे <span>तेज़ी से फॉलोवर्स</span> बढ़ा सकते हैं, इन्फ्लुएंसर्स से <span>पार्टनरशिप</span> कैसे करें, और सोशल मीडिया से <span> पैसे कैसे कमाएं</span>, सीखिए ये सब एक ऐसे कोर्स के ज़रिए, जो बनाया गया है सिर्फ आपके लिए।
				</p>


				<img width="180" src="images/erly.gif" alt="erly" />
				<div class="Earlytext"> पहले आएं पहले पाएं ऑफर <span style="text-decoration: line-through;">₹9,999</span> केवल ₹499 </div>
	
				<a class="enroolbtn" href="enroll-now.php?lang=hi"> आवेदन करें   </a>

				<div class="secondmsg"><span class="span3">एक ऐसा खास और आधुनिक कोर्स जो बनाया गया है सिर्फ आपके लिए</span>
					<span class="span4">साथ जुड़ें, सशक्त बनें और आगे बढ़ें </span>
				</div>
			</div>
		</div>
	</section>

<section class="parallax-container" data-speed="0.5">
    <!-- Your content here -->
</section>



	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>इंटरनेट की दुनिया में बनाइये अपनी पहचान  🔊</h5>
				<p> इस i-MBA प्रोग्राम के दौरान हम आपको सिखाएंगे कि कैसे आप एक सशक्त आवाज बन सकते हैं, जिससे समाज में सकारात्मक बदलाव लाया जा सके और लोगो तक आपकी आवाज पहुंच सके।
 </p>
			</div>
		</div>
		<div class="colum bc-1">
			<img src="images/img7.png" alt="image">
		</div>
		<div class="colum bc-2 ">
			<img src="images/img8.png" alt="image">
		</div>
	</div>
	<div class="row">
		<div class="colum bc4">
			<img src="images/img10.png" alt="image">
		</div>
		<div class="colum bc5 ">
			<img src="images/img11.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5> i-MBA सिर्फ एक कोर्स नहीं, एक परिवार है  🕸️ </h5>
				<p>आइये जुड़िये एक ऐसे परिवार से जो कंटेंट के द्वारा अपनी पहचान बनाने में आपकी मदद करेगा, समाज में अपनी एक अलग पहचान और जो आपको एक बेहतर दुनिया बनाने के लिए प्रेरित करेगा। </p>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="colum bc5">
			<img src="images/img12.png" alt="image">
		</div>
		
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>तेजी से फॉलोवर्स बढ़ाने के लिए डेटा का उपयोग सीखें 🚀</h5>
				<p>i-MBA आपके हुनर को निखारने के लिए मार्गदर्शन प्रदान करता है, यह सुनिश्चित करता है कि आपकी आवाज प्रभावी तरीके से सभी तक पहुंच सके | यह आपको डेटा के ज़रिए फॉलोवर्स बढ़ाना सिखाता  है ।  डाटा का सही इस्तेमाल करके आप जान पायेंगे कि आपकी आवाज़ कितनी प्रभावशाली है, तथा इसे बेहतर बनाने के लिए और क्या किया जा सकता है।</p>
			</div>
		</div>

		<div class="colum bc-brown ">
			<img src="images/img11.png" alt="image">
		</div>

	</div>

	<div class="row">
		<div class="colum bc1">
			<img src="images/img12.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<img src="images/img13.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>सम्मान पाएं, जश्न का हिस्सा बनें 🏆 </h5>
				<p>i-MBA सिर्फ एक ट्रेनिंग प्रोग्राम नहीं है, हम आपके हुनर की पहचान करते हैं और आपको एक बेहतर इंसान और बेहतर इन्फ्लुएंसर बनने में मदद करते हैं। अगर आप अच्छा काम करते हैं तो आप जीत सकते हैं न सिर्फ कैश प्राइज पर और भी बहुत कुछ। </p>
			</div>
		</div>

		

	</div>


	<div class="msgpart">
		<div class="container">
			<div class="allmsg">
				<div class="linem1">वाइब्स अकादमी का i-MBA </div>
				<div class="linem2">कलाकारों द्वारा, कलाकारों के लिए बनाया गया है </div>
				<div class="linem3">किन लोगों को करना चाहिए i-MBA ?</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>अपनी पहचान खुद बनाए  💫</h5>
				<p>i-MBA सिर्फ एक ट्रेनिंग प्रोग्राम नहीं है, हम आपके हुनर की पहचान करते हैं और आपको एक बेहतर इंसान और बेहतर इन्फ्लुएंसर बनने में मदद करते हैं। अगर आप अच्छा काम करते है तो आप जीत सकते हैं न सिर्फ कैश प्राइज पर और भी बहुत कुछ।</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img4.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>क्या आप बेहतर समाज बनाना चाहते हैं ⚖️ </h5>
				<p>एक ऐसी दुनिया जहाँ प्रेम, एकता और समानता हो।  यदि आप एक बेहतर समाज का सपना देखते हैं और अगर आपका सपना समाज में सकरात्मक बदलाव लाने का है तो i-MBA प्लेटफॉर्म पर आपका स्वागत है। </p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>सजग एवं सचेत कहानीकार ✍🏻 </h5>
				<p>अगर आपके पास ऐसी कहानियां हैं जो समाज और लोगों की भलाई से प्रेरित हैं, समाज में एक आशा की किरण है, दूसरों को प्रोत्साहित करती है, तो i-MBA से जुड़िए ।</p>
			</div>
		</div>
		<div class="colum bc-brown">
			<img src="images/img6.png" alt="image">
		</div>
		<div class="colum bc-white  ">
			<div class="cenetlo">
				<h5>निडर वक्ता ⚖️</h5>
				<p>यदि आप सच पर अड़ना जानते हैं और अपने अधिकारों के लिए लड़ना चाहते हैं तो हमारे प्लेटफार्म से जुड़िये और सामाजिक न्याय, सामाजिक कुरीतियों पर मिलकर आवाज़ उठाइये।</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>आशावादी विचारधारा वाले लोग 🌟 </h5>
				<p>आपकी सकारात्मक सोच को जरुरत है i-MBA की। हम ऐसे इन्फ्लुएंसरस ढूंढ रहे हैं जो सोशल मीडिया का इस्तेमाल समाज में खुशियां बाँटने और लोगों को प्रेरित करने के लिए तैयार है। हम मानते हैं के अच्छी सोच ही समाज में परिवर्तन ला सकती है।</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img5.png" alt="image">
		</div>
		<div class="colum bc-brown  ">
			<div class="cenetlo">
				<h5>पर्यावरण  प्रेमी  🍀</h5>
				<p>अगर आप अपने पर्यावरण से प्रेम करते हैं, और पर्यावरण के लिए सजग हैं तथा मानव गतिविधि और पर्यावरण के बीच संतुलन बनाना चाहते हैं तो i-MBA से जुड़कर और  सोशल मीडिया की सहायता से पर्यावरण के प्रति जागरूकता लाने में अपना योगदान दीजिए ।</p>
			</div>
		</div>
	</div>

	<div class="msgaaa">
		<img width="250" src="images/erly.gif" alt="erly" />
			<div class="Earlytext"> पहले आएं पहले पाएं ऑफर <span style="text-decoration: line-through;">₹9,999</span> केवल ₹499 </div>
	
				<a class="enroolbtn" href="enroll-now.php"> आवेदन करें   </a>
	</div>

        
     <?php
        
    } elseif($lang == 'mr') {
        // Content for Marathi

         ?>
         
         
	<section class="mainmsg">
		<div class="container">
			<div class="msgContent">
				<hr>
				<h1 class="mainh"><span class="Span1">i-MBA</span> इनफ्लूएन्सर <span class="Span2">चे</span> एमबीए</h1>
				<p><span> कथाकथन</span> कलेमध्ये प्रभुत्व मिळवा , उच्चतम प्रगतीसाठी डेटाची शक्ती वापरा , तुमच्यासोबतच्या इन्फलूएन्सर सोबत काम करण्याची संधी मिळवा  आणि कंटेंट मधून कमवायला शिका , यासह आणखी खूप काही, फक्त तुमच्यासाठी तयार केले आहे!
				</p>


				<img width="180" src="images/erly.gif" alt="erly" />
				<div class="Earlytext">लवकर खरेदी ऑफर<span style="text-decoration: line-through;">₹9,999</span> ₹499
                फक्त</div>
				<a class="enroolbtn" href="enroll-now.php"> आत्ताच नोंदणी करा </a>

				<div class="secondmsg"><span class="span3"> आम्ही एक एक्सक्लूझीव, अत्याधुनिक अभ्यासक्रम डिझाइन केला ह्यासाठी </span>
					<span class="span4">प्रगती . सहयोग . उन्नती </span>
				</div>
			</div>
		</div>
	</section>

<section class="parallax-container" data-speed="0.5">
    <!-- Your content here -->
</section>



	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5> इंटरनेटवर तुमचा प्रभाव  🔊</h5>
				<p> i-MBA प्रोग्रॅमच्या दरम्यान,  तुमचे कंटेंट इंटरनेट वर जास्तीत जास्त लोकांपर्यंत पोहोचवेल आणि एक सकारात्मक बदल घडवू शकेल असा आवाज विकसित करण्यास मदत करतो.</p>
			</div>
		</div>
		<div class="colum bc-1">
			<img src="images/img7.png" alt="image">
		</div>
		<div class="colum bc-2 ">
			<img src="images/img8.png" alt="image">
		</div>
	</div>
	<div class="row">
		<div class="colum bc4">
			<img src="images/img10.png" alt="image">
		</div>
		<div class="colum bc5 ">
			<img src="images/img11.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5> i-MBA हा  फक्त कोर्स नसून एक कम्युनिटी आहे . 🕸️ </h5>
				<p> एक मोठा बदल घडवून आणण्यासाठी तुमच्यासारख्या विचारांच्या कम्युनिटीला जॉईन व्हा . वाईब्स मध्ये , तुम्ही अशा सामुदायिक शक्तीचा भाग होता जी एक चांगले आणि अधिक दयाळू जग बनवण्यास प्रेरणा, आधार देते</p>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="colum bc5">
			<img src="images/img12.png" alt="image">
		</div>
		
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>उच्चतम प्रगतीसाठी डेटाचा वापर कसा करायचा हे शिका  🚀</h5>
				<p> i-MBA तुमचे संदेश मोठ्याने आणि स्पष्टपणे ऐकले जातील याची खात्री करून, तुमची कौशल्ये वाढवण्यासाठी संसाधने आणि मार्गदर्शन देते, ते तुम्हाला मोजायला आणि समजून घ्यायला शिकवते की संदेश ऐकला जातं आहे का , तुमचा कंटेंट आणखी चांगला बनवण्यासाठी काय केले जाऊ शकते हेही शिकवते.</p>
			</div>
		</div>

		<div class="colum bc-brown ">
			<img src="images/img11.png" alt="image">
		</div>

	</div>

	<div class="row">
		<div class="colum bc1">
			<img src="images/img12.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<img src="images/img13.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>Get recognised and celebrated 🏆 </h5>
				<p>The i-MBA is not just a training program, we recognise your talent and help you become a better person and a better influencer. Outstanding students have a chance to win cash rewards and more.</p>
			</div>
		</div>

		

	</div>


	<div class="msgpart">
		<div class="container">
			<div class="allmsg">
				<div class="linem1">वाईब्स अकॅडेमी i-MBA</div>
				<div class="linem2">क्रिएटिव्हद्वारे, क्रिएटिव्हसाठी</div>
				<div class="linem3"> या कोर्स साठी कोणी अप्लाय करावे ते खालीलप्रमाणे! </div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>स्वप्न विणणारे  💫</h5>
				<p>आम्हाला असे धाडसी इन्फलूएन्सर हवे आहेत जे चांगले जग बघण्याचे स्वप्न बघतात — एक असे जग जिथे दयाळूपणा एक चलन आहे, जिथे विविधता साजरी केली जाते आणि ज्यामुळे पृथ्वीची भरभराट होते. जर तुमची स्वप्न सकारात्मक बदलांसाठी गुंजत आहेत , तर i-MBA हा तुमचा कॅनवास आहे .</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img4.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>कम्युनिटी बिल्डर्स  ⚖️ </h5>
				<p>i-MBA कम्युनिटी एका नेटवर्क पेक्षा खूप जास्त आहे ; ही एक अशी जागा आहे जिथे इन्फलूएन्सर एकमेकांना उन्नत करतात.तुम्ही कनेक्शन तयार करण्यासाठी, सहयोगासाठी आणि आपुलकीची भावना वाढवण्यासाठी समर्पित असाल, तर तुमची टोळी वाट पाहत आहे.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>करुणामय स्टोरी टेलर्स  ✍🏻 </h5>
				<p>तुमच्या कथा सहानुभूतीच्या धाग्याने विणल्या पाहिजेत, मानवतेच्या संघर्ष आणि विजयांशी संबंधित असाव्यात. जर तुम्हाला वाटते की इतरांना सहानुभूती आणि समजूतदारपणा स्वीकारण्यास मदत करण्यासाठी, कथा सांगणे हा एक आशेचा किरण आहे तर i-MBA जॉईन करा</p>
			</div>
		</div>
		<div class="colum bc-brown">
			<img src="images/img6.png" alt="image">
		</div>
		<div class="colum bc-white  ">
			<div class="cenetlo">
				<h5>निर्भीड वकील  ⚖️</h5>
				<p>सत्य बाजू साठी जर तुम्ही उभे राहू शकतात , तर i-MBA तुमच्यासाठी आहे. आम्ही शोधत आहोत असे निर्भीड सामाजिक न्यायाचे चॅम्पियन, जे नियमांना आव्हान देतात,आणि लक्ष वेधून घेण्यासाठी आपला आवाज उठवतात.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5> सकारात्मकता वाढवणारे  🌟 </h5>
				<p> इतरांनाही सवय होईल अशी सकारात्मकता  i-MBA कम्युनिटीमध्ये आना . आनंद, प्रेरणा आणि मानवतेवर खरे प्रेम पसरवण्यासाठी त्यांच्या प्लॅटफॉर्मचा वापर करणाऱ्या इन्फलूएन्सरला आम्ही आवाहन करत आहोत.  तुमच्या सकारात्मकतेमध्ये बदलाची लहर निर्माण करण्याची ताकद आहे.</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img5.png" alt="image">
		</div>
		<div class="colum bc-brown  ">
			<div class="cenetlo">
				<h5> पृथ्वीचे संरक्षक  🍀</h5>
				<p> जर तुम्ही पृथ्वीच्या संगोपनाबद्दल जागरूक असाल, पर्यावरणाला न्याय देणे आणि टिकाऊपणाबद्दल उत्कट असाल तर i-MBA समुदाय तुमचे अभयारण्य आहे. मानवता आणि पृथ्वी मातेचा सुसंवाद घडवण्यासाठी आमच्यात सामील व्हा.</p>
			</div>
		</div>
	</div>

	<div class="msgaaa">
		<img width="250" src="images/erly.gif" alt="erly" />
		<div class="Earlytext">लवकर खरेदी ऑफर <span style="text-decoration: line-through;">₹9,999</span> ₹499
        फक्त </div>
		<a class="enroolbtn" href="enroll-now.php"> आत्ताच नोंदणी करा </a>
	</div>





    <?php   
    } elseif($lang == 'pb') {

      ?>



	<section class="mainmsg">
		<div class="container">
			<div class="msgContent">
				<hr>
				<h1 class="mainh"><span class="Span1">i-MBA</span> ਇੰ ਫ਼ਲੁਐਂਸਰ ' <span class="Span2">ਦਾ </span> MBA</h1>
				<p>ਕਹਾਣੀ ਸੁਣਾਉਣ ਦੀ ਕਲਾ ਿਵੱ ਚ ਮੁਹਾਰਤ ਹਾਸਲ ਕਰੋ, ਤੇẸੀ ਨਾਲ ਵਾਧੇ ਲਈ ਡੇਟਾ ਦੀ  ਕਤੀ ਦਾ ਉਪਯੋਗ ਕਰੋ, ਸਾਥੀ ਇੰ ਫ਼ਲੁਐਂਸਰ ਨਾਲ ਕੋਲੈਬ ਕਰਨ ਦਾ ਮੌਕਾ ਪ˛ਾਪਤ ਕਰੋ ਅਤੇ ਕੰ ਟ ਟ ਨਾਲ ਕਮਾਈ ਕਰਨਾ ਿਸੱ ਖੋ, ਇਸ ਸਭ ਦੇ ਨਾਲ ਹੋਰ ਵੀ ਬਹੁਤ ਕੱ ੁਝ 1 ਕੋਰਸ ਿਵੱ ਚ, ਜੋ ਿਤਆਰ ਕੀਤਾ ਿਗਆ ਹੈ ਿਸਰਫ਼ ਤੁਹਾਡੇ ਲਈ!
				</p>


				<img width="180" src="images/erly.gif" alt="erly" />
				<div class="Earlytext">ਅਰਲੀ ਬਰਡ ਆਫ਼ਰ ਿਸਰਫ਼  <span style="text-decoration: line-through;">₹9,999</span> ₹499
					</div>
				<a class="enroolbtn" href="enroll-now.php">ਹੁਣੇ ਨਾਮ ਦਰਜ ਕਰੋ</a>

				<div class="secondmsg"><span class="span3">ਅਸĖ ਇੱ ਕ ਿਵ ੇ , ਅਿਤ-ਆਧੁਿਨਕ ਕੋਰਸ ਦੀ ਪੇ ਕ  ਕਰਦੇ ਹ ਜੋ ਿਕ</span>
					<span class="span4">ਕਤੀਕਰਨ. ਕੋਲੈਬੋਰੇ ਨ. ਤਰੱ ਕੀ ਲਈ ਿਤਆਰ ਕੀਤਾ ਿਗਆ ਹੈ</span>
				</div>
			</div>
		</div>
	</section>

<section class="parallax-container" data-speed="0.5">
    <!-- Your content here -->
</section>



	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>ਇੰ ਟਰਨ` ਟ 'ਤੇ ਤੁਹਾਡਾ ਪ˛ਭਾਵ 🔊</h5>
				<p>i-MBA ਪ˛ੋਗਰਾਮ ਦੇ ਦੌਰਾਨ ਅਸĖ ਇੱ ਕ ਕਤੀ ਾਲੀ ਆਵਾẸ ਿਵਕਿਸਤ ਕਰਨ ਿਵੱ ਚ ਤੁਹਾਡੀ ਮਦਦ ਕਰਦੇ ਹ ਜੋ ਪਾਿẸਿਟਵ ਬਦਲਾਅ ਲਈ ਇੱ ਕ ਤਾਕਤ ਹੈ ਅਤੇ ਇੰ ਟਰਨ` ਟ ਦੇ ਦਰ ਕ ਤੱ ਕ ਪਹੰ ੁਚਦੀ ਹੈ।</p>
			</div>
		</div>
		<div class="colum bc-1">
			<img src="images/img7.png" alt="image">
		</div>
		<div class="colum bc-2 ">
			<img src="images/img8.png" alt="image">
		</div>
	</div>
	<div class="row">
		<div class="colum bc4">
			<img src="images/img10.png" alt="image">
		</div>
		<div class="colum bc5 ">
			<img src="images/img11.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>i-MBA ਿਸਰਫ਼ ਇੱ ਕ ਕੋਰਸ ਨਹĖ ਹੈ, ਇਹ ਇੱ ਕ ਕਿਮਊਿਨਟੀ ਹੈ 🕸️ </h5>
				<p>ਇੱ ਕੋ ਿਜਹੀ ਸੋਚ ਵਾਲੇ ਇੰ ਫ਼ਲੁਐਂਸਰ ਦੀ ਇੱ ਕ ਉਤੇਿਜਤ ਕਿਮਊਿਨਟੀ ਿਵੱ ਚ  ਾਮਲ ਹੋਵੋ ਜੋ ਬਦਲਾਅ ਿਲਆਉਣ ਲਈ ਤੁਹਾਡੇ ਜਨੰ ੂਨ ਨੰ ੂ ਸ ਝਾ ਕਰਦੇ ਹਨ। ਵਾਈਬਸ ਿਵਖੇ, ਤੁਸĖ ਇੱ ਕ ਸਮੂਿਹਕ  ਕਤੀ ਦਾ ਿਹੱ ਸਾ ਹੋ ਜੋ ਇੱ ਕ ਿਬਹਤਰ, ਵਧੇਰੇ ਹਮਦਰਦ ਦੁਨੀਆ ਬਣਾਉਣ ਲਈ ਪ˛ੇਿਰਤ, ਸਮਰਥਨ ਅਤੇ ਸਿਹਯੋਗ ਕਰਦੀ ਹੈ।</p>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="colum bc5">
			<img src="images/img12.png" alt="image">
		</div>
		
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>ਤੇẸੀ ਨਾਲ ਵਧਣ ਲਈ ਡੇਟਾ ਦੀ ਵਰਤ ਕਰਨਾ ਿਸੱ ਖੋ 🚀</h5>
				<p>Ti-MBA ਤੁਹਾਡੀਆਂ ਸਿਕੱ ਲẸ ਨੰ ੂ ਵਧਾਉਣ ਲਈ ਸਰੋਤ ਅਤੇ ਗਾਈਡ ਸ ਦੀ ਪੇ ਕ  ਕਰਦਾ ਹੈ, ਇਹ ਯਕੀਨੀ ਬਣਾ ਦਾ ਹੈ ਿਕ ਤੁਹਾਡੇ ਮੈਸਜ  ਚੀ ਅਤੇ ਸਪੱ  ਟ ਸੁਣੇ ਜਾਣ, ਇਹ ਤੁਹਾਨੰ ੂ ਮਾਪਣਾ ਅਤੇ ਸਮਝਣਾ ਵੀ ਿਸਖਾ ਦਾ ਹੈ ਿਕ ਮੈਸਜ ਸੁਣੇ ਜਾ ਰਹੇ ਹਨ ਜ ਨਹĖ, ਇਹ
ਿਕੰ ਨ` ਪ˛ਭਾਵ ਾਲੀ ਹਨ ਅਤੇ ਤੁਹਾਡੇ ਕੰ ਟ ਟ ਨੰ ੂ ਹੋਰ ਵਧੀਆ ਬਣਾਉਣ ਲਈ ਕੀ ਕੀਤਾ ਜਾ ਸਕਦਾ ਹੈ।
</p>
			</div>
		</div>

		<div class="colum bc-brown ">
			<img src="images/img11.png" alt="image">
		</div>

	</div>

	<div class="row">
		<div class="colum bc1">
			<img src="images/img12.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<img src="images/img13.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>Get recognised and celebrated 🏆 </h5>
				<p>The i-MBA is not just a training program, we recognise your talent and help you become a better person and a better influencer. Outstanding students have a chance to win cash rewards and more.</p>
			</div>
		</div>

		

	</div>


	<div class="msgpart">
		<div class="container">
			<div class="allmsg">
				<div class="linem1">ਵਾਈਬਸ ਅਕੈਡਮੀ i-MBA</div>
				<div class="linem2">ਕ˛ੀਏਿਟਵ ਲੋਕ ਦੁਆਰਾ, ਕ˛ੀਏਿਟਵ ਲੋਕ ਲਈ </div>
				<div class="linem3">ਕੋਰਸ ਲਈ ਇਹਨ ਨੰ ੂ ਅਪਲਾਈ ਕਰਨਾ ਚਾਹੀਦਾ ਹੈ</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>ਦ ਡ˛ੀਮ ਵੀਵਰਸ (ਸੁਪਨ` ਸਜਾਉਣ ਵਾਲੇ) 💫</h5>
				<p>ਅਸĖ ਅਿਜਹੇ ਇੰ ਫ਼ਲੁਐਂਸਰ ਚਾਹੰ ੁਦੇ ਹ  ਜੋ ਇੱ ਕ ਿਬਹਤਰ ਦੁਨੀਆ ਦਾ ਸੁਪਨਾ ਦੇਖਣ ਦੀ ਿਹੰ ਮਤ ਕਰਨ —ਇੱ ਕ ਅਿਜਹੀ ਦੁਨੀਆ ਿਜੱ ਥੇ
ਿਦਆਲਤਾ ਕਰੰ ਸੀ ਹੈ, ਿਵਿਭੰ ਨਤਾ ਦਾ ਜ ਨ ਮਨਾਇਆ ਜ ਦਾ ਹੈ, ਅਤੇ ਧਰਤੀ ਵੱ ਧਦੀ-ਫੱ ੁਲਦੀ ਹੈ। ਜੇਕਰ ਤੁਹਾਡੇ ਸੁਪਨ` ਪਾਿẸਿਟਵ ਬਦਲਾਅ ਦੀ ਗੰ ੂਜ ਨਾਲ ਗੰ ੂਜਦੇ ਹਨ, ਤ i-MBA ਤੁਹਾਡਾ ਕੈਨਵਸ ਹੈ।
</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img4.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>ਕਿਮਊਿਨਟੀ ਬਣਾਉਣ ਵਾਲੇ ⚖️ </h5>
				<p>i-MBA ਕਿਮਊਿਨਟੀ ਇੱ ਕ ਨ` ਟਵਰਕ ਤ ਿਕਤੇ ਵੱ ਧ ਹੈ; ਇਹ ਇੱ ਕ ਅਿਜਹੀ ਥ ਹੈ ਿਜੱ ਥੇ ਇੰ ਫ਼ਲੁਐਂਸਰ ਇੱ ਕ ਦੂਜੇ ਨੰ ੂ ਤਰੱ ਕੀ ਲਈ ਸਹਾਇਤਾ ਕਰਦੇ ਹਨ। ਜੇਕਰ ਤੁਸĖ ਕਨ` ਕ ਨ ਬਣਾਉਣ, ਸਿਹਯੋਗ ਕਰਨ ਅਤੇ ਆਪਸੀ ਸ ਝ ਨੰ ੂ ਵਧਾਉਣ ਲਈ ਸਮਰਿਪਤ ਹੋ, ਤ ਤੁਹਾਡੀ ਕਿਮਊਿਨਟੀ ਤੁਹਾਡੀ ਉਡੀਕ ਕਰ ਰਹੀ ਹੈ।</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>ਿਦਆਲੂ ਕਹਾਣੀ ਸੁਣਾਉਣ ਵਾਲਾ ✍🏻 </h5>
				<p>ਤੁਹਾਡੀਆਂ ਕਹਾਣੀਆਂ ਹਮਦਰਦੀ ਦੇ ਧਾਗੇ ਨਾਲ ਬੁਣੀਆਂ ਹੋਣੀਆਂ ਚਾਹੀਦੀਆਂ ਹਨ, ਜੋ ਮਨੱ ੁਖਤਾ ਦੇ ਸੰ ਘਰ   ਅਤੇ ਿਜੱ ਤ  ਨਾਲ ਗੰ ੂਜਦੀਆਂ ਹੋਣ। ਜੇਕਰ ਤੁਸĖ ਮੰ ਨਦੇ ਹੋ ਿਕ ਕਹਾਣੀ ਸੁਣਾਉਣਾ ਇੱ ਕ ਉਮੀਦ ਦੀ ਿਕਰਨ ਹੈ,  ਜੋ ਦੂਿਜਆਂ ਨੰ ੂ  ਦਇਆ ਅਤੇ ਸਮਝ ਨੰ ੂ ਅਪਣਾਉਣ ਲਈ ਉਤ ਾਿਹਤ ਕਰਦੀ ਹੈ ਤ ਜੋਇਨ ਕਰੋ i-MBA</p>
			</div>
		</div>
		<div class="colum bc-brown">
			<img src="images/img6.png" alt="image">
		</div>
		<div class="colum bc-white  ">
			<div class="cenetlo">
				<h5>ਿਨਡਰ ਵਕੀਲ ⚖️</h5>
				<p>ਜੇ ਤੁਸĖ ਸਹੀ ਲਈ ਖੜੇ¸ ਹੋਣ ਤ ਨਹĖ ਡਰਦੇ, ਤ i-MBA ਤੁਹਾਡਾ ਮੰ ਚ ਹੈ। ਅਸĖ ਅਿਜਹੇ ਇੰ ਫ਼ਲੁਐਂਸਰ ਲੱ ਭ ਰਹੇ ਹ ਜੋ ਿਨਡਰਤਾ ਨਾਲ ਸਮਾਿਜਕ ਿਨਆਂ ਦੀ ਅਗਵਾਈ ਕਰਦੇ ਹਨ, ਿਨਯਮ ਨੰ ੂ ਚੁਣੌਤੀ ਿਦੰ ਦੇ ਹਨ, ਅਤੇ ਿਧਆਨ ਿਖੱ ਚਣ ਵਾਲੇ ਮੱ ੁਿਦਆਂ ‘ਤੇ ਆਪਣੀ ਆਵਾẸ
ਚੱ ੁਕਦੇ ਹਨ।
</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>ਪਾਿẸਿਟਿਵਟੀ ਐਂਪਲੀਫਾਇਰ 🌟 </h5>
				<p>ਆਪਣੀ ਸੰ ਕ˛ਿਮਤ ਪਾਿẸਿਟਿਵਟੀ ਨੰ ੂ i-MBA ਕਿਮਊਿਨਟੀ ਿਵੱ ਚ ਲੈਕੇ ਆਓ। ਅਸĖ ਉਹਨ ਇੰ ਫ਼ਲੁਐਂਸਰ ਨੰ ੂ ਬੁਲਾ ਰਹੇ ਹ ਜੋ ਖੁ ੀ, ਪ˛ੇਰਣਾ, ਅਤੇ ਮਨੱ ੁਖਤਾ ਪ˛ਤੀ ਸੱ ਚਾ ਿਪਆਰ ਫੈਲਾਉਣ ਲਈ ਆਪਣੇ ਪਲੇਟਫਾਰਮ ਦੀ ਵਰਤ ਕਰਦੇ ਹਨ। ਤੁਹਾਡੀ ਪਾਿẸਿਟਿਵਟੀ ਿਵੱ ਚ ਬਦਲਾਅ ਦੀਆਂ ਲਿਹਰ ਪੈਦਾ ਕਰਨ ਦੀ ਕਤੀ ਹੈ।</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img5.png" alt="image">
		</div>
		<div class="colum bc-brown  ">
			<div class="cenetlo">
				<h5>ਧਰਤੀ ਦੇ ਰੱ ਿਖਅਕ 🍀</h5>
				<p>ਜੇਕਰ ਤੁਸĖ ਸਾਡੇ ਗ˛ਿਹ ਦੇ ਇੱ ਕ ਸਰਪ˛ਸਤ ਹੋ, ਸਿਥਰਤਾ ਅਤੇ ਵਾਤਾਵਰਣ ਿਨਆਂ ਬਾਰੇ ਭਾਵੁਕ ਹੋ, ਤ i-MBA ਕਿਮਊਿਨਟੀ ਤੁਹਾਡੀ ਪਨਾਹਗਾਹ ਹੈ। ਮਨੱ ੁਖਤਾ ਅਤੇ ਧਰਤੀ ਮਾਤਾ ਿਵਚਾਲੇ ਇਕਸਾਰ ਸੰ ਤੁਲਨ ਬਣਾਉਣ ਲਈ ਸਾਡੇ ਨਾਲ ਜੁੜੋ।</p>
			</div>
		</div>
	</div>

	<div class="msgaaa">
		<img width="250" src="images/erly.gif" alt="erly" />
		<div class="Earlytext">ਅਰਲੀ ਬਰਡ ਆਫ਼ਰ ਿਸਰਫ਼ <span style="text-decoration: line-through;">₹9,999</span> ₹499
			</div>
		<a class="enroolbtn" href="enroll-now.php">ਹੁਣੇ ਨਾਮ ਦਰਜ ਕਰੋ</a>
	</div>






        
     <?php   
    } elseif($lang == 'tm') {

      ?>
      
      <section class="mainmsg">
		<div class="container">
			<div class="msgContent">
				<hr>
				<h1 class="mainh"><span class="Span1">i-MBA</span> INFLUENCERS' <span class="Span2">ka</span> MBA</h1>
				<p>கதை சொல்லும் கலையில் தேர்ச்சி பெறுங்கள்.  அதிவேக வளர்ச்சிக்கு தரவுகளின் சக்தியைப் பயன்படுத்துங்கள்.  உங்களை போன்ற சிறந்த பணியாளர்களுடன் கூட்டு பணியாற்றுவதற்கான வாய்ப்பைப் பெறுங்கள். உள்ளடக்கத்தின் மூலம் சம்பாதிப்பதை கற்றுக்கொள்ளுங்கள். இவை அனைத்தும் உங்களுக்காகவே வடிவமைக்கப்பட்ட 1 பாடத்திட்டத்தில் காத்திருக்கின்றன! 
				</p>


				<img width="180" src="images/erly.gif" alt="erly" />
				<div class="Earlytext">Early Bird சலுகை  <span style="text-decoration: line-through;">₹9,999</span> ₹499
                மட்டுமே </div>
				<a class="enroolbtn" href="enroll-now.php">இப்போதே இணைந்திடுங்கள்</a>

				<div class="secondmsg"><span class="span3">நாம் உங்களுக்கு பிரத்தியேகமான, அதிநவீன பாடத்திட்டத்தை  அதிகாரமளிக்க, </span>
					<span class="span4">ஒத்துழைக்க,  முன்னேற்ற வழங்குகிறோம். </span>
				</div>
			</div>
		</div>
	</section>

<section class="parallax-container" data-speed="0.5">
    <!-- Your content here -->
</section>



	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>இணையம் முழுவதும் உங்கள் செல்வாக்கு 🔊</h5>
				<p>i-MBA திட்டத்தின் போது, நேர்மறையான மாற்றத்தை உருவாக்க கூடிய மற்றும் இணையம் முழுவதும் உள்ள பார்வையாளர்களை சென்றடையும் சக்திவாய்ந்த குரலை உருவாக்க நாங்கள் உங்களுக்கு உதவுகிறோம். </p>
			</div>
		</div>
		<div class="colum bc-1">
			<img src="images/img7.png" alt="image">
		</div>
		<div class="colum bc-2 ">
			<img src="images/img8.png" alt="image">
		</div>
	</div>
	<div class="row">
		<div class="colum bc4">
			<img src="images/img10.png" alt="image">
		</div>
		<div class="colum bc5 ">
			<img src="images/img11.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>i-MBA என்பது ஒரு கற்கைநெறி மட்டுமல்ல அது ஒரு சமூகம்.  🕸️ </h5>
				<p>மாற்றத்தை ஏற்படுத்துவதற்கான உங்கள் ஆர்வத்தைப் பகிர்ந்து கொள்ளும் ஒருமித்த எண்ணம் கொண்ட செல்வாக்குமிக்க சமூகத்தில் இணைந்திடுங்கள். VIBES இல், நீங்கள் ஒரு சிறந்த, அதிக பாசமுள்ள உலகத்தை உருவாக்க ஊக்குவிக்கும், ஆதரிக்கும் மற்றும் ஒத்துழைக்கும் ஒரு கூட்டுப் படையின் ஒரு பகுதியாக இருக்கிறீர்கள். </p>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="colum bc5">
			<img src="images/img12.png" alt="image">
		</div>
		
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>அதிவேகமாக வளர தரவைப் பயன்படுத்த கற்றுக்கொள்ளுங்கள்  🚀</h5>
				<p>i-MBA ஆனது உங்கள் செய்திகள் சத்தமாகவும் தெளிவாகவும் கேட்கப்படுவதை உறுதிசெய்வதுடன் உங்கள் திறன்களை மேம்படுத்துவதற்கான வளங்களையும் வழிகாட்டுதலையும் வழங்குகிறது. மேலும் செய்தி கேட்கப்படுகிறதா, அது எவ்வளவு பயனுள்ளதாக இருக்கிறது மற்றும் உங்கள் உள்ளடக்கம் இன்னும் சிறந்ததாக மாற இன்னும் என்ன செய்ய வேண்டும் என்பதை அளவிடவும் புரிந்துகொள்ளவும் கற்றுக்கொடுக்கிறது.  </p>
			</div>
		</div>

		<div class="colum bc-brown ">
			<img src="images/img11.png" alt="image">
		</div>

	</div>

	<div class="row">
		<div class="colum bc1">
			<img src="images/img12.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<img src="images/img13.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>Get recognised and celebrated 🏆 </h5>
				<p>The i-MBA is not just a training program, we recognise your talent and help you become a better person and a better influencer. Outstanding students have a chance to win cash rewards and more.</p>
			</div>
		</div>

		

	</div>


	<div class="msgpart">
		<div class="container">
			<div class="allmsg">
				<div class="linem1">வைப்ஸ் அகாடமி i-MBA </div>
				<div class="linem2">புத்தாக்க சிந்தனையாளர்களால், புத்தாக்க சிந்தனையாளர்களுக்கு </div>
				<div class="linem3">கற்கைநெறிக்கு யார் யாரெல்லம் விண்ணப்பிக்க முடியும்! </div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>கனவு காண்பவர்கள்  💫</h5>
				<p>ஒரு சிறந்த உலகத்தை கனவு காணத் துணியும் செல்வாக்கு செலுத்துபவர்களை நாங்கள் விரும்புகிறோம் - நாணயத்தை போன்று அன்பு பரிமாறப்படக்கூடிய, பன்முகத்தன்மை கொண்டாடப்படக்கூடிய மற்றும் பூமி செழிக்கக்கூடிய ஒரு உலகம்.  உங்கள் கனவுகள் நேர்மறையான மாற்றத்தின் அதிர்வுடன் எதிரொலித்தால், i-MBA தான் உங்களுக்கான ஆடை. </p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img4.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>சமூகத்தை உருவாக்குபவர்கள்  ⚖️ </h5>
				<p>i-MBA சமூகமானது ஒரு வலையமைப்பை விட அதிகம்;  இது செல்வாக்கு செலுத்துபவர்கள் ஒருவரையொருவர் உயர்த்தும் இடம்.  நீங்கள் தொடர்புகளை உருவாக்குவதற்கும், ஒத்துழைப்பதற்கும், சொந்தம் என்ற உணர்வை வளர்ப்பதற்கும் அர்ப்பணிப்புடன் இருந்தால், உங்களுக்கானவர்கள் காத்திருக்கிறார்கள்.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>கருணையுள்ளத்தோடு கதைசொல்லக்கூடியவர்கள்  ✍🏻 </h5>
				<p>உங்கள் கதைகள் மனிதகுலத்தின் போராட்டங்கள் மற்றும் வெற்றிகளுடன் எதிரொலிக்கும் பச்சாதாபத்தின் இழைகளால் பிணைக்கப்பட வேண்டும். நம்பிக்கையின் கலங்கரை விளக்காக, அன்பு மற்றும் புரிதலைத் தழுவுவதற்கு மற்றவர்களை ஊக்குவிக்க கூடிய ஒன்றாக நீங்கள் கதை சொல்வதை  கருதினால், i-MBA இல் இணைந்து கொள்ளுங்கள். </p>
			</div>
		</div>
		<div class="colum bc-brown">
			<img src="images/img6.png" alt="image">
		</div>
		<div class="colum bc-white  ">
			<div class="cenetlo">
				<h5>அச்சமற்ற வழக்கறிஞர்கள்  ⚖️</h5>
				<p>சரியானவைக்கு ஆதரவாக நீங்கக் நின்று எதற்கும் பயப்படாவிட்டால், i-MBA தான் உங்களுக்கான மேடை.  அச்சமின்றி சமூக நீதியை நிலைநாட்டக்கூடிய, நெறிமுறைகளுக்கு சவால் கிடைக்கக்கூடிய மற்றும் கவனத்தை ஈர்க்கும் வகையில் குரல் கொடுக்கக் கூடிய செல்வாக்குமிக்கவர்களை நாங்கள் தேடுகிறோம். </p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>The Positivity Amplifiers 🌟 </h5>
				<p>i-MBA சமூகத்திற்கு உங்கள்  நேர்மறை சிந்தனையை கொண்டு வாருங்கள். மகிழ்ச்சி, உத்வேகம் மற்றும் மனிதகுலத்தின் மீது உண்மையான அன்பைப் பரப்புவதற்கு தங்கள் தளங்களைப் பயன்படுத்தும் செல்வாக்கு செலுத்துபவர்களை நாங்கள் இணைந்து கொள்ளுமாறு அழைப்பு விடுக்கிறோம்.  உங்கள் நேர்மறை சிந்தனையானது மாற்றத்தின் அலைகளை உருவாக்கும் ஆற்றல் கொண்டது. </p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img5.png" alt="image">
		</div>
		<div class="colum bc-brown  ">
			<div class="cenetlo">
				<h5>பூமியின் பாதுகாவலர்கள்  🍀</h5>
				<p>நீங்கள் எங்கள் பூமியின் பொறுப்பாளராக இருந்தால், நிலைத்தன்மை மற்றும் சுற்றுச்சூழல் நீதியில் ஆர்வமுள்ளவராக இருந்தால், i-MBA சமூகம் தான் உங்கள் சரணாலயம்.  மனிதகுலத்திற்கும் தாய் பூமிக்கும் இடையே இணக்கமான சமநிலையை உருவாக்குவதில் எங்களுடன் சேருங்கள். i-MBA பற்றி </p>
			</div>
		</div>
	</div>

	<div class="msgaaa">
		<img width="250" src="images/erly.gif" alt="erly" />
		<div class="Earlytext">Early Bird சலுகை <span style="text-decoration: line-through;">₹9,999</span> ₹499
        மட்டுமே </div>
		<a class="enroolbtn" href="enroll-now.php">இப்போதே இணைந்திடுங்கள்</a>
	</div>

  



      <?php  
    } else {
        header("Location:index.php");
    }
    ?>
    
    
    <?php
} else {


    ?>

	<section class="mainmsg">
		<div class="container">
			<div class="msgContent">
				<hr>
				<h1 class="mainh"><span class="Span1">i-MBA</span> INFLUENCERS' <span class="Span2">ka</span> MBA</h1>
				<p>Master the art of <span>storytelling</span>, harness the power of data for exponential
					<span>growth</span>, get an
					opportunity to <span>collaborate</span> with fellow influencers and <span> learn
						to earn </span> through content, All this and more in 1 course, tailored just for you!
				</p>


				<img width="180" src="images/erly.gif" alt="erly" />
				<div class="Earlytext">Early Bird offer <span style="text-decoration: line-through;">₹9,999</span> ₹499
					Only</div>
				<a class="enroolbtn" href="enroll-now.php">ENROLL NOW</a>

				<div class="secondmsg"><span class="span3">We offer an exclusive, state-of-the-art course designed
						to</span>
					<span class="span4">Empower. Collaborate. Uplift</span>
				</div>
			</div>
		</div>
	</section>

<section class="parallax-container" data-speed="0.5">
    <!-- Your content here -->
</section>



	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>Your influence across the internet 🔊</h5>
				<p>During the i-MBA program we help you develop a powerful voice that is a force for positive change and
					reaches audiences across the internet.</p>
			</div>
		</div>
		<div class="colum bc-1">
			<img src="images/img7.png" alt="image">
		</div>
		<div class="colum bc-2 ">
			<img src="images/img8.png" alt="image">
		</div>
	</div>
	<div class="row">
		<div class="colum bc4">
			<img src="images/img10.png" alt="image">
		</div>
		<div class="colum bc5 ">
			<img src="images/img11.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>The i-MBA is not just a course, it is a community 🕸️ </h5>
				<p>Join a vibrant community of like-minded influencers who share your passion for making a difference.
					At VIBES, you're part of a collective force that inspires, supports, and collaborates to create a
					better, more compassionate world.</p>
			</div>
		</div>

	</div>

	<div class="row">
		<div class="colum bc5">
			<img src="images/img12.png" alt="image">
		</div>
		
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>Learn to use data to grow exponentially 🚀</h5>
				<p>The i-MBA offers resources and guidance to enhance your skills, ensuring your messages are heard loud and clear, it also teaches you to measure and understand if the message is being heard, how effective it is and what more can be done to make your content even better.</p>
			</div>
		</div>

		<div class="colum bc-brown ">
			<img src="images/img11.png" alt="image">
		</div>

	</div>

	<div class="row">
		<div class="colum bc1">
			<img src="images/img12.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<img src="images/img13.png" alt="image">
		</div>
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>Get recognised and celebrated 🏆 </h5>
				<p>The i-MBA is not just a training program, we recognise your talent and help you become a better person and a better influencer. Outstanding students have a chance to win cash rewards and more.</p>
			</div>
		</div>

		

	</div>


	<div class="msgpart">
		<div class="container">
			<div class="allmsg">
				<div class="linem1">VIBES ACADEMYS' i-MBA</div>
				<div class="linem2">By Creatives, for Creatives</div>
				<div class="linem3">Here's who should apply for the course!</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>The Dream Weavers 💫</h5>
				<p>We want influencers who dare to dream of a better world—a world where kindness is currency, diversity
					is celebrated, and the planet thrives. If your dreams echo with the vibrancy of positive change,
					i-MBA is your canvas.</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img4.png" alt="image">
		</div>
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>The Community Builders ⚖️ </h5>
				<p>The i-MBA community is more than a network; it's a space where influencers uplift each other. If
					you're dedicated to building connections, collaborating, and fostering a sense of belonging, your
					tribe awaits.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-white ">
			<div class="cenetlo">
				<h5>The Compassionate Storytellers ✍🏻 </h5>
				<p>Your stories should be woven with threads of empathy, resonating with the struggles and triumphs of
					humanity. Join i-MBA if you beleive storytelling is a beacon of hope, encouraging others to embrace
					compassion and understanding.</p>
			</div>
		</div>
		<div class="colum bc-brown">
			<img src="images/img6.png" alt="image">
		</div>
		<div class="colum bc-white  ">
			<div class="cenetlo">
				<h5>The Fearless Advocates ⚖️</h5>
				<p>If you are not afraid to stand up for what's right, the i-MBA is your stage. We're seeking
					influencers who fearlessly champion social justice, challenge norms, and lend their voices to causes
					that demand attention.</p>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="colum bc-brown ">
			<div class="cenetlo">
				<h5>The Positivity Amplifiers 🌟 </h5>
				<p>Bring your infectious positivity to the i-MBA commynity. We're calling on influencers who use their
					platforms to spread joy, inspiration, and a genuine love for humanity. Your positivity has the power
					to create ripples of change.</p>
			</div>
		</div>
		<div class="colum bc-white">
			<img src="images/img5.png" alt="image">
		</div>
		<div class="colum bc-brown  ">
			<div class="cenetlo">
				<h5>The Earth Guardians 🍀</h5>
				<p>If you're a steward of our planet, passionate about sustainability and environmental justice, the
					i-MBA community is your sanctuary. Join us in creating a harmonious balance between humanity and
					Mother Earth.</p>
			</div>
		</div>
	</div>

	<div class="msgaaa">
		<img width="250" src="images/erly.gif" alt="erly" />
		<div class="Earlytext">Early Bird offer <span style="text-decoration: line-through;">₹9,999</span> ₹499
			Only</div>
		<a class="enroolbtn" href="enroll-now.php">ENROLL NOW</a>
	</div>


	
    <?php
}

?>
	<?php include("inc/footer.php"); ?>