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

function getNextBatchWhatsAppGroup() {
    $dbConnect = new mysqli('localhost', 'mba', 'mba@123', 'mba');
    $currentDate = date('Y-m-d');
    $sql = "SELECT BatchStartDate 
            FROM session_details 
            WHERE BatchStartDate > '$currentDate' 
            ORDER BY BatchStartDate ASC 
            LIMIT 1";

    $result = mysqli_query($dbConnect, $sql);
    if ($row = mysqli_fetch_assoc($result)) {
        return $row['BatchStartDate'];
    }
    return null;
}

$nextBatch = getNextBatchWhatsAppGroup();
if ($nextBatch) {
    $dateTime = new DateTime($nextBatch);
    $formattedDate = $dateTime->format('jS M Y');
    //echo "The next batch starts on: " . $formattedDate;
} else {
    echo "No upcoming batches found.";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Become an insta-influencer within a week. </title>
    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" href="css/responsive.css">
        <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-T6XTXR8Z');</script>
<!-- End Google Tag Manager -->

 
</head>

<body>

    <header>
        <div class="container">
            <nav class="mobile-menu">
                <a class="logo" href="https://thevibes.academy/become-an-insta-influencer-within-a-week">
                    <img src="images/logo.svg" alt="logo">
                </a>

                <div class="MenuExtra">
                    <a href="javascript:;" class="OutlineBtn btnPopOpen">Enroll Now</a>

                    <a href="javascript:;" class="hamburger-wrapper">
                        <div class="hamburger-menu"></div>
                    </a>

                </div>

                <div class="mobile-menu-overlay">
                    <ul>
                        <li><a href="#InfluencerWithinAWeek">Home</a></li>
                        <li><a href="#OurCommunityStats">Our Impact</a></li>
                        <li><a href="#SuccessStories">Success Stories</a></li>
                        <li><a href="#CourseStructure">Our Course</a></li>
                        <li><a href="#FAQs">FAQs</a></li>
                    </ul>
                </div>

            </nav>
        </div>
    </header>

    <section class="HomeSection" id="InfluencerWithinAWeek">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="MainBannerHeading formobile">Become an <br> insta-influencer <br>within a week.</h1>
                     <h1 class="MainBannerHeading fordesktop">Become an insta-influencer within a week.</h1>
                    <p class="SmallBannerHeading">Want to Go Viral and Become a 100k-Follower Instagram Influencer 😍
                    </p>
                    <div class="ButtonGroup">
                        <a href="javascript:;" class="EnrollNow btnPopOpen">Enroll Now</a>
                    </div>

                </div>
                <div class="col">
                    <div class="BannerVideRevelBox">
                        <img src="images/instathub.png" alt="Insta Live">
                        <iframe class="video-container" id="video-container" width="650" height="500" style="display: none;" src="" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>

                    </div>
                </div>
            </div>
        </div>
    </section>


    <section class="CouresInfo" id="CouresInfo">
        <div class="container">
          <div class="CouresHighlights formobile">ONLY @499 ❌ No Ads ❌ No Equipments <br> ❌No Team ❌ No Fake Followers</div>
   <div class="CouresHighlights fordesktop">ONLY @499 ❌ No Ads ❌ No Equipments ❌ No Team ❌ No Fake Followers</div>

            <ul class="CouresInfos">
                <li class="IconCoures-1">
                    <div class="InnerIcons">
                        <div class="MainHeadingIcons">1500+</div>
                        <div class="MiniHeading">Students Attended</div>
                    </div>
                </li>
                <li class="IconCoures-2">
                    <div class="InnerIcons">
                        <div class="MainHeadingIcons">2K+</div>
                        <div class="MiniHeading">Video Produceds</div>
                    </div>
                </li>
                <li class="IconCoures-3">
                    <div class="InnerIcons">
                        <div class="MainHeadingIcons">300+</div>
                        <div class="MiniHeading">Minutes</div>
                    </div>
                </li>
                <li class="IconCoures-4">
                    <div class="InnerIcons">
                        <div class="MainHeadingIcons">100%</div>
                        <div class="MiniHeading">Money Back</div>
                    </div>
                </li>
            </ul>
           <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>
        </div>
    </section>

    <section class="Community" id="OurCommunityStats">
        <div class="container">
            <div class="MainHeading">Our Community Stats</div>
            <div class="SmallHeading">Join a thriving community of over 1,500 successful influencers. Our graduates experience an average follower growth of 180%, turning their Instagram profiles into powerful platforms.
            </div>

            <img src="images/peoples.png" alt="community">

            <ul class="CouresInfos">
                <li>
                    <div class="InnerIcons">
                        <div class="MainHeadingIcons">50 Million +</div>
                        <div class="MiniHeading">Views achieved</div>
                    </div>
                </li>
                <li>
                    <div class="InnerIcons">
                        <div class="MainHeadingIcons">1 Million +</div>
                        <div class="MiniHeading">Followers achieved</div>
                    </div>
                </li>
                <li>
                    <div class="InnerIcons">
                        <div class="MainHeadingIcons">4 Million +</div>
                        <div class="MiniHeading">INR monetised</div>
                    </div>
                </li>
            </ul>
           <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>
        </div>
    </section>


    <section class="SuccessStories" id="SuccessStories">
        <div class="container">
            <div class="MainHeading">+ Success Stories</div>
            <div class="SmallHeading">Our alumni have turned their passion into a profession, collaborating with top brands and growing their follower base exponentially. Discover how The Vibes Academy has transformed their Instagram journey.</div>
        </div>
    </section>
    <div class="loop owl-carousel owl-theme">
        <div class="item">
            <img src="images/test1.png" alt="test">
        </div>
        <div class="item">
            <img src="images/test2.png" alt="test">
        </div>
        <div class="item">
            <img src="images/test3.png" alt="test">
        </div>
        <div class="item">
            <img src="images/test4.png" alt="test">
        </div>


    </div>
    <section class="SuccessStories2">

       <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>

    </section>


    <section class="CourseStructure" id="CourseStructure">
        <div class="container">
            <div class="MainHeading">Course Structure</div>
            <div class="SmallHeading">Our intensive 7-day program teaches Instagram mastery, including the algorithm, content creation, and monetisation. Gain practical experience through daily sessions.</div>


            <section class="ps-timeline-sec">
                <div class="container">
                    <ol class="ps-timeline">
                        <li>
                            <div class="ps-bot">
                                <p>Know Your Camera</p>
                            </div>
                            <span class="ps-sp-top">1</span>
                        </li>
                        <li>
                            <div class="ps-top">
                                <p>Colours of Editing</p>
                            </div>
                            <span class="ps-sp-bot">2</span>
                        </li>
                        <li>
                            <div class="ps-bot">
                                <p>Building Your Personal Brand </p>
                            </div>
                            <span class="ps-sp-top">3</span>
                        </li>
                        <li>
                            <div class="ps-top">
                                <p>How to Grow Your Audience
                                </p>
                            </div>
                            <span class="ps-sp-bot">4</span>
                        </li>
                        <li>
                            <div class="ps-bot">
                                <p>Analytics and Optimisation </p>
                            </div>
                            <span class="ps-sp-bot">5</span>
                        </li>
                        <li>
                            <div class="ps-top">
                                <p>Monetisation and Future Planning</p>
                            </div>
                            <span class="ps-sp-bot">6</span>
                        </li>

                        <p class="lastlid">+ Much More</p>

                    </ol>
                </div>
            </section>


          <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>
        </div>
    </section>




    <section class="MeetYourCoach" id="MeetYourCoach">
        <div class="container">
            <div class="MainHeading">Meet your Coaches</div>
            <div class="SmallHeading">We have a diverse team of coaches who regularly engage with both micro and macro influencers, bringing the most up-to-date and relevant insights to our courses. With a combined experience of over 15 years, some of our coaches include:</div>
            <ul class="CoachProfile">
                <li>
                    <div class="cardID">
                        <div class="imageProfile">
                            <img src="images/p1.png" alt="profile" />
                        </div>
                        <div class="coachName">Radhika Chhabra</div>
                        <div class="coachRole">Fashion Influencer</div>
                        <div class="coachEdu">B.A from Delhi University</div>
                    </div>
                </li>
                <li>
                    <div class="cardID">
                        <div class="imageProfile">
                            <img src="images/p2.png" alt="profile" />
                        </div>
                        <div class="coachName">Salman Saleem</div>
                        <div class="coachRole">Communication Expert</div>
                        <div class="coachEdu">M.A from Jamia University</div>
                    </div>
                </li>
                <li>
                    <div class="cardID">
                        <div class="imageProfile">
                            <img src="images/p3.png" alt="profile" />
                        </div>
                        <div class="coachName">Yagya Sharma</div>
                        <div class="coachRole">E-Journalist</div>
                        <div class="coachEdu">PGDP from IIMC</div>
                    </div>
                </li>
                <li>
                    <div class="cardID">
                        <div class="imageProfile">
                            <img src="images/p4.png" alt="profile" />
                        </div>
                        <div class="coachName">Anupriya Khare</div>
                        <div class="coachRole">Course Designer</div>
                        <div class="coachEdu">Phd in English, IGNOU</div>
                    </div>
                </li>
            </ul>
           <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>

        </div>
    </section>

    <section class="WhatOurStudentSay" id="WhatOurStudentSay">
        <div class="container">
            <div class="MainHeading">What our students say</div>
            <div class="SmallHeading">Explore what our past and current students have expressed about their experience with The Vibes Academy's Instagram mastery course.</div>


            <iframe class="YoutubeVideos" style="display:none;" src="https://www.youtube.com/embed/7c6m_HMPpxQ?si=u0sEr0e-QnxY1V3u" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>


            <ul class="StudentsSay">
                <li>
                    <div class="testoboxx">
                        <div class="GroupName">
                            <div class="FirstLatter ">S</div>
                            <div class="NameCustomer">Shyamala Konda</div>
                        </div>
                        <div class="TesttomnialText">I have enrolled this course with lot of doubts on credibility of it but it's an awesome course and I am learning bit by bit. I am a beginner on social media and this cource is very much helpful.</div>
                        <div class="StarGroup">
                            <div class="StarsRating"><img src="images/s1.svg" alt="star" /></div>
                            <div class="Datetesto">26th May 2024</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testoboxx">
                        <div class="GroupName">
                            <div class="FirstLatter f-bg-2">P</div>
                            <div class="NameCustomer">Prithvi Shukla</div>
                        </div>
                        <div class="TesttomnialText">I learnt a lot and made many wonderful content pieces. I saw few reviews that are misleading, seems like they are competitors who are trying to spread false news and make politics even in education</div>
                        <div class="StarGroup">
                            <div class="StarsRating"><img src="images/s2.svg" alt="star" /></div>
                            <div class="Datetesto">26th May 2024</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testoboxx">
                        <div class="GroupName">
                            <div class="FirstLatter f-bg-3">B</div>
                            <div class="NameCustomer">Bidisha C</div>
                        </div>
                        <div class="TesttomnialText">The strategies taught in the course are practical and effective. My engagement rates have skyrocketed</div>
                        <div class="StarGroup">
                            <div class="StarsRating"><img src="images/s3.svg" alt="star" /></div>
                            <div class="Datetesto">13th May 2024</div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="testoboxx">
                        <div class="GroupName">
                            <div class="FirstLatter f-bg-4">S</div>
                            <div class="NameCustomer">Dr Shripuja Siddamsetty</div>
                        </div>
                        <div class="TesttomnialText">classes are very simple to understand and interesting. I attended all the lessons :)</div>
                        <div class="StarGroup">
                            <div class="StarsRating"><img src="images/s4.svg" alt="star" /></div>
                            <div class="Datetesto">31st May 2024</div>
                        </div>
                    </div>
                </li>
            </ul>
 
            <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>

        </div>
    </section>


    <section class="GetCertified" id="GetCertified">
        <div class="container">
            <div class="MainHeading">Get Certified</div>
            <div class="SmallHeading">Upon completing the course, receive a certification from The Vibes Academy. Boost your credibility as an Instagram Influencer and unlock new opportunities for brand partnerships and growth.
            </div>

            <img src="images/certificate.png" class="imageCerticiate" alt="certificate" />

            <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>
        </div>
    </section>

    <section class="MoneyBackG">
        <div class="container">

            <div class="BoxMoney">
                <img class="moneyback2" src="images/moneyback2.png" alt="money" />
                <p>We believe in the value of our course. If you’re not satisfied with your progress, we offer a 100% money-back guarantee. Enroll now for just ₹499, and experience risk-free learning.</p>
            </div>

          <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>
        </div>
    </section>


    <section class="FAQs" id="FAQs">
        <div class="container">
            <div class="MainHeading">FAQs</div>
            <div class="SmallHeading">Got questions? We’ve got answers! Check out our FAQs section for all the information you need about The Vibes Academy, our course structure, and how we can help you become a successful Instagram influencer.</div>


            <ul class="allFaqs scrollbar-rail">
                <li>
                    <div class="faqsInner">
                        <div class="IconFaqs">
                            <img src="images/faqs.svg" alt="faqs" />
                        </div>
                        <div class="FaqsText">
                            <div class="faqsHeading">What is the pricing and what does it include? </div>
                            <div class="faqsTextinn">The course cost is ₹ 9999/- but you can take advantage of our early bird offer at just ₹499/-. It includes app access, technique resources, daily content ideas, and potential content boosting for trending posts.</div>
                        </div>
                    </div>
                </li>
                
      
                
                 <li>
                    <div class="faqsInner">
                        <div class="IconFaqs">
                            <img src="images/faqs.svg" alt="faqs" />
                        </div>
                        <div class="FaqsText">
                            <div class="faqsHeading">I want to be successful in a specific niche, will I get guidance for that? </div>
                            <div class="faqsTextinn">Absolutely, our course offers techniques applicable across all niches, ensuring your success regardless of your chosen niche.</div>
                        </div>
                    </div>
                </li>
                
                 <li>
                    <div class="faqsInner">
                        <div class="IconFaqs">
                            <img src="images/faqs.svg" alt="faqs" />
                        </div>
                        <div class="FaqsText">
                            <div class="faqsHeading">What is the daily time commitment for the course? </div>
                            <div class="faqsTextinn">You’ll need to dedicate just 30 minutes daily for the 7-day duration of the course. We recommend setting aside an additional 30 minutes to complete your assignments, post them on social media, and share the link with us in the app. Once the 7-day course is complete, you’ll have an extra 7 days to rewatch the lessons or finish any remaining assignments.</div>
                        </div>
                    </div>
                </li>
                
                 <li>
                    <div class="faqsInner">
                        <div class="IconFaqs">
                            <img src="images/faqs.svg" alt="faqs" />
                        </div>
                        <div class="FaqsText">
                            <div class="faqsHeading"> What prerequisites are needed to start the course or complete assignments?</div>
                            <div class="faqsTextinn">All you need is an Android phone, internet access, and a keen interest in the course content.</div>
                        </div>
                    </div>
                </li>
                
 
                 <li>
                    <div class="faqsInner">
                        <div class="IconFaqs">
                            <img src="images/faqs.svg" alt="faqs" />
                        </div>
                        <div class="FaqsText">
                            <div class="faqsHeading">Is it mandatory to have social media accounts? </div>
                            <div class="faqsTextinn">Yes, having an active account on Instagram is necessary as this is a course with practical applications, and the assignments require you to post a reel to Instagram as well.</div>
                        </div>
                    </div>
                </li>
                
                 <li>
                    <div class="faqsInner">
                        <div class="IconFaqs">
                            <img src="images/faqs.svg" alt="faqs" />
                        </div>
                        <div class="FaqsText">
                            <div class="faqsHeading">What is the The Vibes Academy all about and where is the academy located?</div>
                            <div class="faqsTextinn">The Vibes Academy offers an influencer MBA program designed to empower aspiring influencers to create impactful content. Our academy is based out of Delhi.</div>
                        </div>
                    </div>
                </li>
               
            </ul>


            <a href="javascript:;" class="EnrollNow btnPopOpen">Join Now <span>₹9999/-</span> ₹499/-</a>
        </div>
    </section>

    <footer>
        <div class="container">
            <div class="footerrow">
                <div class="fcol">
                    <a href="https://thevibes.academy/become-an-insta-influencer-within-a-week/">
                        <img src="images/logo.svg" alt="logo" />
                    </a>
                </div>
                <div class="fcol textright ss">
                    <p>© The Vibes Academy 2024</span> </p>
                    <p>An initiative by <span>Thinquilab Private Limited</span> </p>
                </div>
                <div class="fcol textright">
                     <a class="linksfooterii" href="https://www.thevibes.academy/terms-and-conditions.php" target="_blank">Terms & Conditions </a>
                    <a class="linksfooterii" href="https://www.thevibes.academy/privacy-policy.php" target="_blank">Privacy Policy </a>
                    <a class="linksfooterii" href="https://www.thevibes.academy/refund-policy.php" target="_blank"> Refund Policy</a>
                   
                </div>
                <div class="fcol textright1">
                    <a href="https://www.youtube.com/@THEVIBESACADEMY" target="_blank">Youtube <img src="images/rightarrow.svg" alt="right" /></a>
                    <a href="https://www.instagram.com/the.vibes.academy" target="_blank">Instagram <img src="images/rightarrow.svg" alt="right" /></a>
                    
                    
                </div>
            </div>
        </div>
    </footer>

    <div class="ModalGlassEffect d-none">
        <a href="javascript:;" class="btnPopClose">X</a>
        <div class="JoinColm">
           <div class="formGroupHeading">
               <div class="s1">To secure your spot </div>
               <div class="s2">Enroll Now</div>
           </div>
            <!--form action="https://www.thevibes.academy/form_process.php" id="EnrollNow" method="post"-->
            <form action="https://www.thevibes.academy/paynow.php" id="EnrollNow" method="post">
                <div class="form__group field">
                    <label for="CusName" pattern="[a-zA-Z]*" class="form__label">Name *</label>
                    <input type="input" class="form__field" placeholder="" name="CusName" id="CusName" required="" wfd-id="id0">
                </div>
                <div class="form__group field">
                    <label for="CusEmail" class="form__label">Email Address *</label>
                    <input type="email" class="form__field" pattern="[^@]+@[^@]+\.[a-zA-Z]{2,10}" placeholder="" name="CusEmail" id="CusEmail" required="" wfd-id="id1">
                </div>
                <div class="form__group field">
                    <label for="CusTel" class="form__label">Mobile Number *</label>
                    <input type="tel" class="form__field numberonly CusTel" maxlength="10" minlength="10" placeholder="" name="CusTel" id="CusTel" required="" wfd-id="id2">
                   <p id="error" style="color:red;"></p>
                </div>
                <div class="form-group">
                    <input type="hidden" name="track_form" value="enroll-i-mba-online index english" wfd-id="id3">
                    <span class="success_msg" style="display:none">🎉 You are already enrolled in our i-MBA
                        course.</span>
                    <button class="btn-submit btnClickLog" type="submit">Pay Now and Start</button>
                </div>
                <div class="form-group">
                   <p class="BoxForBatch"> 🎉 Batch starts on <?php echo $formattedDate;?> 🚀</p>
                </div>
            </form>
        </div>
    </div>
    
    <form action="https://www.thevibes.academy/pay-online.php" id="payagain" method="post">
        <input type = "hidden" name="payagain" id="pay_id">
        <input type="hidden" name="track_form" value="become-an-insta-influencer-within-a-week">
    </form>   
    
</body>
<script src="js/jquery.min.js"></script>
<script src="js/jquery.scrollbar.js"></script>
<script src="js/owl.carousel.js"></script>

<script>
    $(document).ready(function() {
        // Add smooth scrolling to all links
        $("a").on('click', function(event) {
            // Make sure this.hash has a value before overriding default behavior
            if (this.hash !== "") {
                // Prevent default anchor click behavior
                event.preventDefault();

                // Store hash
                var hash = this.hash;

                // Using jQuery's animate() method to add smooth page scroll
                // Subtracting 80px from the target scroll position
                $('html, body').animate({
                    scrollTop: $(hash).offset().top - 150
                }, 800, function() {
                    // Add hash (#) to URL when done scrolling (default click behavior)
                    window.location.hash = hash;
                });
            }
        });
    });



    jQuery(document).ready(function($) {
        $('.loop').owlCarousel({
            center: true,
            items: 1,
            dots: true,
            autoplay: true,
            loop: true,
            margin: 10,
            mouseDrag: true,
            touchDrag: true,
            responsive: {
                600: {
                    items: 3
                }
            }
        });
    });
    jQuery(document).ready(function() {
        jQuery('.scrollbar-rail').scrollbar();
    });
</script>
<script>
    jQuery(document).ready(function() {
        jQuery('.hamburger-wrapper').on('click', function() {
            jQuery('.hamburger-menu').toggleClass('animate');
            jQuery('.mobile-menu-overlay').toggleClass('visible');
        })
        jQuery('.mobile-menu-overlay > ul > li > a').on('click', function() {
            jQuery('.hamburger-menu').removeClass('animate');
            jQuery('.mobile-menu-overlay').removeClass('visible');
        })
    });
</script>
<script>
    $(document).ready(function() {
       $('.BannerVideRevelBox img').click(function() {
        $(this).hide(); // Hide the image
        $('.video-container').show(); // Show the iframe

        var videoUrl = "https://www.youtube.com/embed/yAlitIYXPSU?autoplay=1"; // Corrected URL
        $('#video-container').attr('src', videoUrl); // Set the src of iframe to play the video
    });
    });
</script>

<script>
    $(document).ready(function() {

        $('.numberonly').keypress(function(e) {

            var charCode = (e.which) ? e.which : event.keyCode

            if (String.fromCharCode(charCode).match(/[^0-9]/g))

                return false;

        });

    });

  

    $(document).ready(function() {
        $(".btnPopOpen").click(function() {
            $(".ModalGlassEffect ").removeClass("d-none");
            $(".ModalGlassEffect ").addClass("d-block");
            $("body").addClass("overhidden");
        });
        $(".btnPopClose").click(function() {
            $(".ModalGlassEffect ").removeClass("d-block");
            $(".ModalGlassEffect ").addClass("d-none");
            $("body").removeClass("overhidden");
        });
    });
</script>
<script>
$(document).ready(function(){
    $('#CusTel').on('input', function(){ // Trigger AJAX call on input change
        var mobileNumber = $(this).val(); // Get mobile number from input field
        
        if (mobileNumber.length < 10) { 
            return;
        }
        $.ajax({
            type: 'POST',
            url: 'https://www.thevibes.academy/mobilenumberchk.php', // PHP script to handle AJAX request
            data: {mobileNumber: mobileNumber}, // Send mobile number to PHP script
            success: function(response){
                if(response == 'exists'){
                    $('#error').text('Mobile number already exists!');
                } else {
                    $('#error').text(''); // Clear any previous error messages
                }
            }
        });
    });

    /*
    // Handle form submission
    $('#EnrollNow').submit(function(event){
        event.preventDefault();
        var mobileNumber = $('#CusTel').val(); // Get mobile number from input field
        
        $('.btn-submit').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: 'https://www.thevibes.academy/mobilenumberchk.php', // PHP script to handle AJAX request
            data: {mobileNumber: mobileNumber}, // Send mobile number to PHP script
            success: function(response){
                if(response == 'exists'){
                    $('#error').text('Mobile number already exists!');
                    //event.preventDefault(); // Prevent form submission if mobile number already exists
                    $('.btn-submit').prop('disabled', false);
                } else {
                    // If mobile number doesn't exist, you can submit the form
                    $('.btn-submit').prop('disabled', true);
                    $('#EnrollNow').unbind('submit').submit();
                }
            }
        });
    });
    */
    
    $('#EnrollNow').submit(function(event) {
        event.preventDefault();
        var mobileNumber = $('#CusTel').val();
        $('.btn-submit').prop('disabled', true);
        $.ajax({
            type: 'POST',
            url: 'https://www.thevibes.academy/mobilenumberchk-payment.php',
            data: {
                mobileNumber: mobileNumber
            },
            success: function(response) {
                if (response != 'not_exists') {

                    if (response == 'pay_success') {
                        $('.success_msg').show();
                        return;
                    } else {
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
});
</script>

</html>