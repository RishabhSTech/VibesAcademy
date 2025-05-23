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

<script type="application/ld+json">{"@context":"https://schema.org","@type":"FAQPage","mainEntity":[{"@type":"Question","name":"मुझे कोर्स के बारे में बताइए","acceptedAnswer":[{"@type":"Answer","text":"हमारे व्यापक 60-दिवसीय कोर्स में कैमरा तकनीक, ट्रेंडिंग कंटेंट, कहानीकार कहने के साथ-साथ पैसे कमाने के उपाए जैसे आवश्यक विषय शामिल हैं।"}]},{"@type":"Question","name":"मैं एक विशिष्ट जगह में सफल होना चाहता हूं, क्या मुझे इसके लिए सपोर्ट मिलेगा?","acceptedAnswer":[{"@type":"Answer","text":"बिल्कुल, हमारा कोर्स सभी niches पर लागू तकनीकों की पेशकश करता है, जो आपके चुने हुए कैटेगरी के साथ साथ अन्य क्षेत्र में आपकी सफलता सुनिश्चित करता है।"}]},{"@type":"Question","name":"क्या यह कोर्स ऑनलाइन है या ऑफलाइन?","acceptedAnswer":[{"@type":"Answer","text":"कोर्स पूरी तरह से ऑनलाइन है और हमारे ऐप के माध्यम से आप तक पहुचाये जायेगे"}]},{"@type":"Question","name":"कोर्स के लिए दिन में कितने घंटे देने होंगे?","acceptedAnswer":[{"@type":"Answer","text":"कोर्स की अवधि 6० दिन है और आपको अपना प्रतिदिन केवल 60 मिनट देना होगा । हम आपके सोशल मीडिया प्लेटफॉर्म पर रोज़ एक वीडियो पोस्टिंग को प्रोत्साहित करते हैं।"}]},{"@type":"Question","name":"मैं वेबिनार में जॉइन कैसे कर सकता हूँ ? ऐप के अंदर या कहीं और?","acceptedAnswer":[{"@type":"Answer","text":"आपकी सुविधा के लिए सभी वेबिनार ऐप के भीतर ही उपलब्ध हैं।"}]},{"@type":"Question","name":"मूल्य क्या है और इसमें क्या शामिल है?","acceptedAnswer":[{"@type":"Answer","text":"केवल 499/- पर हमारे शुरुआती ऑफर का लाभ उठाएं। इसमें ऐप एक्सेस, तकनीक संसाधन, दैनिक सामग्री विचार और ट्रेंडिंग पोस्ट जैसे सामग्री शामिल हैं"}]},{"@type":"Question","name":"कोर्स किन भाषाओं में उपलब्ध है?","acceptedAnswer":[{"@type":"Answer","text":"यह कोर्स अंग्रेजी और हिंदी दोनों भाषा में उपलब्ध है"}]},{"@type":"Question","name":"कोर्स शुरू करने या असाइनमेंट पूरा करने के लिए किन चीज़ो की आवश्यकता है?","acceptedAnswer":[{"@type":"Answer","text":"आपको बस एक एंड्रॉइड फोन, इंटरनेट एक्सेस और कोर्स में गहरी रुचिहोनी चाहिए ।"}]},{"@type":"Question","name":"क्या सोशल मीडिया अकाउंट होना अनिवार्य है?","acceptedAnswer":[{"@type":"Answer","text":"हां, आपके पास कम से कम एक सोशल मीडिया अकाउंट अनिवार्य है, जैसे इंस्टाग्राम, फेसबुक, यूट्यूब या ट्विटर।"}]},{"@type":"Question","name":"कोर्स किन सोशल मीडिया प्लेटफॉर्म पर सबसे अधिक ध्यान केंद्रित करता है?","acceptedAnswer":[{"@type":"Answer","text":"हम मुख्य रूप से Instagram, Facebook और YouTube पर ध्यान केंद्रित करते हैं, जबकि सिखाई जाने वाली तकनीकें सभी प्लेटफार्मों पर लागू होती हैं।"}]},{"@type":"Question","name":"क्या मुझे लैपटॉप या फोन चाहिए?","acceptedAnswer":[{"@type":"Answer","text":"नहीं, आपको बस एक एंड्रॉइड फोन की आवश्यकता है जिससे आप ऐप के माध्यम से गतिविधियों में भाग ले सके"}]},{"@type":"Question","name":"क्या रिंग लाइट या ट्राइपॉड जैसे अतिरिक्त उपकरण आवश्यक हैं?","acceptedAnswer":[{"@type":"Answer","text":"नहीं, हम आपको सिखाएंगे कि केवल अपने स्मार्टफ़ोन का उपयोग करके अपने कंटेंट को आकर्षक कैसे बनाएं।"}]},{"@type":"Question","name":"अगर मुझे साइन-अप के दौरान समस्याओं का सामना करना पड़ रहा है, तो मैं क्या कर सकता हूं?","acceptedAnswer":[{"@type":"Answer","text":"हमने आपका ध्यान रखा है! किसी भी साइन-अप समस्या में आपकी सहायता के लिए एक ट्यूटोरियल प्रदान किया जाएगा।"}]},{"@type":"Question","name":"क्या कोर्स पूरा करने की कोई समय सीमा है?","acceptedAnswer":[{"@type":"Answer","text":"प्रत्येक पाठ केवल 24 घंटे के लिए उपलब्ध होगा ताकि यह सुनिश्चित हो सके कि आपके पास असाइनमेंट पूरा करने और कंटेंट के साथ जुड़ने के लिए पर्याप्त समय है।"}]},{"@type":"Question","name":"क्या मैं ऑफ़लाइन पहुंच के लिए कोर्स सामग्री डाउनलोड कर सकता हूं?","acceptedAnswer":[{"@type":"Answer","text":"नहीं, लेकिन आपको कोर्स के दौरान नोट्स लेने के लिए प्रोत्साहित किया जाता है।"}]},{"@type":"Question","name":"क्या कोई धनवापसी नीति है?","acceptedAnswer":[{"@type":"Answer","text":"हमारी धनवापसी नीति का उल्लेख हमारी वेबसाइट पर किया गया है: https://thevibes.academy/refund-policy.php"}]},{"@type":"Question","name":"यदि मैं कोर्स के दौरान संघर्ष करता हूं, तो क्या समर्थन उपलब्ध है?","acceptedAnswer":[{"@type":"Answer","text":"आप हमेशा व्हाट्सएप या हमारे फोन नंबर पर हमसे संपर्क कर सकते हैं और हमें मदद करने में खुशी होगी"}]},{"@type":"Question","name":"कोर्स पूरा करने के बाद मैं किन लाभों की उम्मीद कर सकता हूं?","acceptedAnswer":[{"@type":"Answer","text":"पूरा होने पर, आपको एक प्रमाण पत्र प्राप्त होगा जो आपकी विश्वसनीयता को बढ़ाता है, संभावित रूप से आपके साथ सहयोग करने में रुचि रखने वाले ब्रांडों को आकर्षित करता है।"}]},{"@type":"Question","name":"क्या मुझे आपकी टीम से समर्थन मिलेगा?","acceptedAnswer":[{"@type":"Answer","text":"वाक़ई! हमारी सहायता टीम सोमवार से शनिवार सुबह 10 बजे से शाम 7 बजे तक आपके सामने आने वाले किसी भी प्रश्न या चुनौती में आपकी सहायता के लिए उपलब्ध है।"}]},{"@type":"Question","name":"क्या मुझे आकलन के दौरान प्रतिक्रिया मिलेगी?","acceptedAnswer":[{"@type":"Answer","text":"हां, हम आपकी प्रगति पर नियमित प्रतिक्रिया प्रदान करते हैं और अच्छा प्रदर्शन करने वाले प्रभावशाली लोगों के काम को उजागर करते हैं।"}]},{"@type":"Question","name":"कोर्स के दौरान मैं किसके साथ सहयोग करूंगा?","acceptedAnswer":[{"@type":"Answer","text":"आपके पास कोर्स में नामांकित 10,000 से अधिक अन्य प्रभावितों के साथ सहयोग करने का अवसर होगा।"}]},{"@type":"Question","name":"आप और आपकी टीम कौन है?","acceptedAnswer":[{"@type":"Answer","text":"हम फिल्म निर्माण, सोशल मीडिया,सचेत कहानीकार विज्ञापन, मीडिया और ब्रांड प्रबंधन में पृष्ठभूमि वाले अनुभवी पेशेवरों की एक टीम हैं।"}]},{"@type":"Question","name":"वाइब्स अकादमी क्या है?","acceptedAnswer":[{"@type":"Answer","text":"वाइब्स अकादमी एक प्रभावशाली एमबीए प्रोग्राम प्रदान करती है जिसे प्रभावशाली सामग्री बनाने के लिए इच्छुक प्रभावशाली लोगों को सशक्त बनाने के लिए डिज़ाइन किया गया है।"}]},{"@type":"Question","name":"अकादमी कहाँ स्थित है?","acceptedAnswer":[{"@type":"Answer","text":"हमारी अकादमी दिल्ली में स्थित है।"}]},{"@type":"Question","name":"मुझे वाइब्स अकादमी क्यों चुननी चाहिए?","acceptedAnswer":[{"@type":"Answer","text":"हम इच्छुक प्रभावशाली लोगों को उनके कौशल का सम्मान करने और दर्शकों के साथ प्रतिध्वनित होने वाली सम्मोहक सामग्री बनाने में सहायता करने के लिए समर्पित हैं।"}]},{"@type":"Question","name":"पाठ्यक्रम का मार्गदर्शन करने वाले मार्गदर्शक कौन हैं?","acceptedAnswer":[{"@type":"Answer","text":"हमारे मार्गदर्शक फिल्म निर्माण, सोशल मीडिया, कहानीकार , विज्ञापन, मीडिया और ब्रांड प्रबंधन जैसे विभिन्न क्षेत्रों से भरपूर अनुभव लेकर आते हैं।"}]},{"@type":"Question","name":"वाइब्स अकादमी के पास पर्याप्त अनुयायी नहीं हैं, आप हमें बढ़ने में कैसे मदद करेंगे?","acceptedAnswer":[{"@type":"Answer","text":"हमारे YouTube चैनल पर एक नज़र डालें - हमारे पहले वीडियो को 1.2 मिलियन बार देखा गया, और हमने केवल एक सप्ताह के भीतर 1k ग्राहक प्राप्त किए।"}]}]}</script><!-- Generated by https://www.searchlogistics.com -->
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
	            <h1>आपके प्रश्नों और शंकाओं के उत्तर यहां पायें</h1>
	            <p>नमस्ते! क्या आप हमारे इंस्टाग्राम इन्फ्लुएंसर कोर्स के लिए नामांकन के लिए तैयार हैं, लेकिन आपको कुछ स्पष्टीकरण की आवश्यकता है? चिंता न करें, हम आपको सभी उत्तर प्रदान करने के लिए यहां हैं! यह पृष्ठ आपको हमारे पाठ्यक्रम और हमारी कंपनी के बारे में सब कुछ समझने में मदद करने के लिए है।</p>
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
	                           <a href="faqs-hindi.php"><b>हिन्दी </b></a>
	                              | <a href="faqs-english.php">English</a>
	                       </div>
	                       
	                       
	                   <a href="javascript:;" class="tableOfContent mobileShow">Table of Contents</a>
	                   <ul class="menummmm">
	                      
	                       <span class="closebtn">X</span>
	                       <li><a class="cl1" href="#1_Faq">पाठ्यक्रम</a></li>
	                       <li><a class="cl2" href="#2_Faq">तकनीकी</a></li>
	                       <li><a class="cl3" href="#3_Faq">सफलता दर</a></li>
	                       <li><a class="cl4" href="#4_Faq">सामुदायिक सहभागिता/सहयोग</a></li>
	                       <li><a class="cl5" href="#5_Faq">संगठन</a></li>
	                   </ul>
	               </div>
	                <div class="ColmFaq Faq2">
	                   <div class="AccordianBox" id="1_Faq">

                                <div class="acc">
                                <div class="Headingfaq">पाठ्यक्रम</div>
                                    <div class="acc__card">
                                      <div class="acc__title">मुझे कोर्स  के बारे में बताइए </div>
                                      <div class="acc__panel">
                                      हमारे व्यापक 60-दिवसीय कोर्स  में कैमरा तकनीक, ट्रेंडिंग कंटेंट, कहानीकार कहने  के साथ-साथ पैसे कमाने के उपाए जैसे आवश्यक विषय शामिल हैं।
                                     </div>
                                </div>
                                <div class="acc__card">
                                      <div class="acc__title">मैं एक विशिष्ट जगह में सफल होना चाहता हूं, क्या मुझे इसके लिए सपोर्ट मिलेगा?</div>
                                      <div class="acc__panel">
                                      बिल्कुल, हमारा कोर्स सभी niches पर लागू तकनीकों की पेशकश करता है, जो आपके चुने हुए कैटेगरी के साथ साथ अन्य क्षेत्र में आपकी सफलता सुनिश्चित करता है।
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">क्या यह कोर्स ऑनलाइन है या ऑफलाइन?</div>
                                      <div class="acc__panel">
                                      कोर्स  पूरी तरह से ऑनलाइन है और हमारे  ऐप  के माध्यम से आप तक पहुचाये जायेगे 
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">कोर्स के लिए दिन में कितने घंटे देने होंगे?</div>
                                      <div class="acc__panel">
                                      कोर्स  की अवधि 6० दिन है और आपको  अपना प्रतिदिन केवल 60 मिनट देना होगा । हम आपके सोशल मीडिया प्लेटफॉर्म पर रोज़ एक वीडियो पोस्टिंग को प्रोत्साहित करते हैं।
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">मैं वेबिनार में जॉइन  कैसे कर  सकता हूँ ? ऐप के अंदर या कहीं और?</div>
                                      <div class="acc__panel">
                                      आपकी सुविधा के लिए सभी वेबिनार ऐप के भीतर ही उपलब्ध हैं।
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">मूल्य क्या है और इसमें क्या शामिल है?</div>
                                      <div class="acc__panel">
                                      केवल 499/- पर हमारे शुरुआती ऑफर का  लाभ उठाएं। इसमें ऐप एक्सेस, तकनीक संसाधन, दैनिक सामग्री विचार और ट्रेंडिंग पोस्ट  जैसे सामग्री शामिल हैं
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">कोर्स किन भाषाओं में उपलब्ध है?</div>
                                      <div class="acc__panel">
                                      यह कोर्स अंग्रेजी और हिंदी दोनों भाषा में उपलब्ध  है 
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">कोर्स शुरू करने या असाइनमेंट पूरा करने के लिए किन चीज़ो  की आवश्यकता है?</div>
                                      <div class="acc__panel">
                                      आपको बस एक एंड्रॉइड फोन, इंटरनेट एक्सेस और कोर्स में गहरी रुचिहोनी चाहिए ।
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">क्या सोशल मीडिया अकाउंट होना अनिवार्य है?</div>
                                      <div class="acc__panel">
                                      हां, आपके पास  कम से कम एक सोशल मीडिया अकाउंट अनिवार्य है, जैसे इंस्टाग्राम, फेसबुक, यूट्यूब या ट्विटर।
                                     </div>
                                </div>
                                 <div class="acc__card">
                                      <div class="acc__title">कोर्स किन सोशल मीडिया प्लेटफॉर्म पर सबसे अधिक ध्यान केंद्रित करता है?</div>
                                      <div class="acc__panel">
                                      हम मुख्य रूप से Instagram, Facebook और YouTube पर ध्यान केंद्रित करते हैं, जबकि सिखाई जाने वाली तकनीकें सभी प्लेटफार्मों पर लागू होती हैं।
                                     </div>
                                </div>
	                       </div>
	                   </div>
	                     <div class="AccordianBox" id="2_Faq">
	                     
                                <div class="acc">
                                      <div class="Headingfaq">तकनीकी</div>
                                    <div class="acc__card">
                                          <div class="acc__title">क्या मुझे लैपटॉप या फोन चाहिए?</div>
                                          <div class="acc__panel">
                                          नहीं, आपको बस एक एंड्रॉइड फोन की आवश्यकता है जिससे आप ऐप के माध्यम से गतिविधियों में भाग ले सके 
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">क्या रिंग लाइट या ट्राइपॉड जैसे अतिरिक्त उपकरण आवश्यक हैं? </div>
                                          <div class="acc__panel">
                                          नहीं, हम आपको सिखाएंगे कि केवल अपने स्मार्टफ़ोन का उपयोग करके अपने  कंटेंट को आकर्षक  कैसे बनाएं।
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">अगर मुझे साइन-अप के दौरान समस्याओं का सामना करना पड़ रहा है, तो मैं क्या कर सकता हूं?</div>
                                          <div class="acc__panel">
                                          हमने आपका ध्यान रखा है! किसी भी साइन-अप समस्या में आपकी सहायता के लिए एक ट्यूटोरियल प्रदान किया जाएगा।
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">क्या कोर्स पूरा करने की कोई समय सीमा है?</div>
                                          <div class="acc__panel">
                                          प्रत्येक पाठ  केवल 24 घंटे के लिए उपलब्ध होगा ताकि यह सुनिश्चित हो सके कि आपके पास असाइनमेंट पूरा करने और कंटेंट  के साथ जुड़ने के लिए पर्याप्त समय है।

                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">क्या मैं ऑफ़लाइन पहुंच के लिए कोर्स  सामग्री डाउनलोड कर सकता हूं?</div>
                                          <div class="acc__panel">
                                          नहीं, लेकिन आपको कोर्स  के दौरान नोट्स लेने के लिए प्रोत्साहित किया जाता है।
                                         </div>
                                     </div>
                                        <div class="acc__card">
                                          <div class="acc__title">क्या कोई धनवापसी नीति है?</div>
                                          <div class="acc__panel">
                                          हमारी धनवापसी नीति का उल्लेख हमारी वेबसाइट पर किया गया है: https://thevibes.academy/refund-policy.php
                                         </div>
                                     </div>   
                                
	                       </div>
	                   </div>
	                   
	                   <div class="AccordianBox" id="3_Faq">
	                      
                                <div class="acc">
                                     <div class="Headingfaq">सफलता दर</div>
                                    <div class="acc__card">
                                          <div class="acc__title">यदि मैं कोर्स  के दौरान संघर्ष करता हूं, तो क्या समर्थन उपलब्ध है?</div>
                                          <div class="acc__panel">
                                          आप हमेशा व्हाट्सएप या हमारे फोन नंबर पर हमसे संपर्क कर सकते हैं और हमें मदद करने में खुशी होगी
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">कोर्स पूरा करने के बाद मैं किन लाभों की उम्मीद कर सकता हूं?</div>
                                          <div class="acc__panel">
                                          पूरा होने पर, आपको एक प्रमाण पत्र प्राप्त होगा जो आपकी विश्वसनीयता को बढ़ाता है, संभावित रूप से आपके साथ सहयोग करने में रुचि रखने वाले ब्रांडों को आकर्षित करता है।
                                         </div>
                                     </div>
                                      
                                
	                       </div>
	                   </div>
	                   
	                      <div class="AccordianBox" id="4_Faq">
	                      
                                <div class="acc">
                                     <div class="Headingfaq">सामुदायिक सहभागिता/सहयोग</div>
                                    <div class="acc__card">
                                          <div class="acc__title">क्या मुझे आपकी टीम से समर्थन मिलेगा?</div>
                                          <div class="acc__panel">
                                          वाक़ई! हमारी सहायता टीम सोमवार से शनिवार सुबह 10 बजे से शाम 7 बजे तक आपके सामने आने वाले किसी भी प्रश्न या चुनौती में आपकी सहायता के लिए उपलब्ध है।
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">क्या मुझे आकलन के दौरान प्रतिक्रिया मिलेगी?</div>
                                          <div class="acc__panel">
                                          हां, हम आपकी प्रगति पर नियमित प्रतिक्रिया प्रदान करते हैं और अच्छा प्रदर्शन करने वाले  प्रभावशाली लोगों के काम को उजागर करते हैं।
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">कोर्स  के दौरान मैं किसके साथ सहयोग करूंगा?</div>
                                          <div class="acc__panel">
                                          आपके पास कोर्स  में नामांकित 10,000 से अधिक अन्य प्रभावितों के साथ सहयोग करने का अवसर होगा।
                                         </div>
                                     </div>
	                       </div>
	                   </div>
	                   
	                   
	                      <div class="AccordianBox" id="5_Faq">
	                      
                                <div class="acc">
                                     <div class="Headingfaq">संगठन</div>
                                    <div class="acc__card">
                                          <div class="acc__title">आप और आपकी टीम कौन है?</div>
                                          <div class="acc__panel">
                                          हम फिल्म निर्माण, सोशल मीडिया,सचेत कहानीकार  विज्ञापन, मीडिया और ब्रांड प्रबंधन में पृष्ठभूमि वाले अनुभवी पेशेवरों की एक टीम हैं।
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">वाइब्स अकादमी क्या है?</div>
                                          <div class="acc__panel">
                                          वाइब्स अकादमी एक प्रभावशाली एमबीए प्रोग्राम प्रदान करती है जिसे प्रभावशाली सामग्री बनाने के लिए इच्छुक प्रभावशाली लोगों को सशक्त बनाने के लिए डिज़ाइन किया गया है।
                                         </div>
                                     </div>


                                       <div class="acc__card">
                                          <div class="acc__title">अकादमी कहाँ स्थित है?</div>
                                          <div class="acc__panel">
                                          हमारी अकादमी दिल्ली में स्थित है।
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">मुझे वाइब्स अकादमी क्यों चुननी चाहिए?</div>
                                          <div class="acc__panel">
                                          हम इच्छुक प्रभावशाली लोगों को उनके कौशल का सम्मान करने और दर्शकों के साथ प्रतिध्वनित होने वाली सम्मोहक सामग्री बनाने में सहायता करने के लिए समर्पित हैं।
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">पाठ्यक्रम का मार्गदर्शन करने वाले मार्गदर्शक कौन हैं?</div>
                                          <div class="acc__panel">
                                          हमारे मार्गदर्शक  फिल्म निर्माण, सोशल मीडिया, कहानीकार , विज्ञापन, मीडिया और ब्रांड प्रबंधन जैसे विभिन्न  क्षेत्रों से भरपूर अनुभव लेकर आते हैं।
                                         </div>
                                     </div>
                                       <div class="acc__card">
                                          <div class="acc__title">वाइब्स अकादमी के पास पर्याप्त अनुयायी नहीं हैं, आप हमें बढ़ने में कैसे मदद करेंगे?</div>
                                          <div class="acc__panel">
                                          हमारे YouTube चैनल पर एक नज़र डालें - हमारे पहले वीडियो को 1.2 मिलियन बार देखा गया, और हमने केवल एक सप्ताह के भीतर 1k ग्राहक प्राप्त किए।
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