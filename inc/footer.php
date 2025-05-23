<footer>
	<div class="container-fluid">
		<div class="colm">
            <div class="col">
                <ul class="legallink">
                    <li class="hedfoort">Legal</li>
                    <li><a href="<?php echo $root_url; ?>terms-and-conditions.php">Terms & Conditions</a></li>
                    <li><a href="<?php echo $root_url; ?>privacy-policy.php">Privacy Policy</a></li>
                    <li><a href="<?php echo $root_url; ?>refund-policy.php">Refund Policy</a></li>
                    <!--<li><a href=">accessibility-statement.php">Accessibility Statement</a></li> -->
                </ul>
            </div>
            <div class="col">
                <ul class="socialmedia">
                    <li><a target="_blank" href="https://www.instagram.com/the.vibes.academy"><img src="<?php echo $root_url; ?>images/insta.png" alt="social"></a></li>
                    <li><a target="_blank" href="https://www.youtube.com/@thevibesacademy"><img src="<?php echo $root_url; ?>images/youtube.png" alt="social"></a></li>
                    <li><a target="_blank" href="https://www.facebook.com/profile.php?id=61556155543215"><img src="<?php echo $root_url; ?>images/facebook.png" alt="social"></a></li>
                    <li><a target="_blank" href="https://twitter.com/thevibesacadem"><img src="<?php echo $root_url; ?>images/tw.png" alt=""></a></li>
                    <li><a target="_blank" href="https://www.linkedin.com/company/the-vibes-academy-in"><img src="<?php echo $root_url; ?>images/linkedin.png" alt="social"></a></li>
                </ul>
             <p>Copyright ©️ The Vibes Academy 2024. An initiative of <a style="color: #ff3700;" target="_blank" href="https://thinquilab.com/">Thinquilab Private Limited </a></p>
            </div>
            <div class="col">
                <div class="hedfoort">Contact</div>
                <p>E-261, Basement, <br>Greater Kailash-2, <br>New Delhi - 110048</p>
                  <a href="tel:+91-9773794872" class="emaild">+91-9773794872</a><br>
                <a href="mailto:hello@thevibes.academy" class="emaild">hello@thevibes.academy</a>
            </div>
        </div>
	</div>
</footer>
<!-- Modal HTML embedded directly into document -->
<div id="LeadPop" class="modal">
  
    <div class="PopDesign">
     
        <img src="images/popimg.jpeg" alt="pop img"> 
     
     <div class="popfooter">
         <div class="popHeading">
             Still have questions?<br>Drop your number!
         </div>
          <div class="popHeading2">
           Our experts will reach out to you 
         </div>
         
         <form>
    
             <div id="otp-input">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
                <input type="number" step="1" min="0" max="9" autocomplete="no" pattern="\d*">
            </div>
            <input type="hidden" name="otp">
         </form>
     </div>
     
    </div>
    
    <div class="LeadSuccess" style="display:none">
        <div class="PopDesign1">
             <img src="images/thank-you-pop.png" alt="Thank you" />
              <h3 class="thankyouh">Thank you :)</h3>
              <p>Our experts will reach out <br/> to you shortly</p>
        </div
    </div>    
 
</div>

<!-- Link to open the modal -->
<!--p><a href="#LeadPop" rel="modal:open" style="disp">mobile</a></p-->


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<!-- jQuery Modal -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-modal/0.9.1/jquery.modal.min.css" />

<script>
    
    function showPopup() {
    
        $('#LeadPop').modal('show');
        document.cookie = "popupShown=true";
        console.log('cookie saved');
    }

    function checkPopupCookie() {
    
        if (document.cookie.split(';').some((item) => item.trim().startsWith('popupShown='))) {
            console.log('already cookie saved');
            return;
        }
        
        setTimeout(showPopup, 3000000);
    }

    $(document).ready(function() {
        checkPopupCookie();
    });
    
    function storeLead(){
        
        var user_mob = document.querySelector("input[name=otp]").value;
        
        if(user_mob.length > 9){
            
            $.ajax({
                type: 'POST',
                url: 'https://www.thevibes.academy/store_lead.php',
                data: {user_mob: user_mob}, 
                success: function(response) {
                    
                    $('.PopDesign').hide();
                    $('.LeadSuccess').show();
                },
                error: function(xhr, status, error) {
                    
                    console.error('Error:', error);
                }
            });
        }
    }
</script>

<script>

$(document).ready(function () {    
    
    $('.numberonly').keypress(function (e) {    

        var charCode = (e.which) ? e.which : event.keyCode    

        if (String.fromCharCode(charCode).match(/[^0-9]/g))    

            return false;                        

    });    

});

(function () {
	$('.hamburger-wrapper').on('click', function() {
		$('.hamburger-menu').toggleClass('animate');
		$('.mobile-menu-overlay').toggleClass('visible');
	})
	$('.mobile-menu-overlay > ul > li > a').on('click', function () {
		$('.hamburger-menu').removeClass('animate');
		$('.mobile-menu-overlay').removeClass('visible');
	})
})();

(function () {
  const inputs = document.querySelectorAll("#otp-input input");

  for (let i = 0; i < inputs.length; i++) {
    const input = inputs[i];

    input.addEventListener("input", function () {
      // handling normal input
      if (input.value.length == 1 && i+1 < inputs.length) {
        inputs[i+1].focus();
      }

      // if a value is pasted, put each character to each of the next input
      if (input.value.length > 1) {
        // sanitise input
        if (isNaN(input.value)) {
          input.value = "";
          updateInput();
          return;
        }

        // split characters to array
        const chars = input.value.split('');

        for (let pos = 0; pos < chars.length; pos++) {
          // if length exceeded the number of inputs, stop
          if (pos + i >= inputs.length) break;

          // paste value
          let targetInput = inputs[pos + i];
          targetInput.value = chars[pos];
        }

        // focus the input next to the last pasted character
        let focus_index = Math.min(inputs.length - 1, i + chars.length);
        inputs[focus_index].focus();
      }
      updateInput();
    });

    input.addEventListener("keydown", function (e) {
      // backspace button
      if (e.keyCode == 8 && input.value == '' && i != 0) {
        // shift next values towards the left
        for (let pos = i; pos < inputs.length - 1; pos++) {
          inputs[pos].value = inputs[pos + 1].value;
        }

        // clear previous box and focus on it
        inputs[i-1].value = '';
        inputs[i-1].focus();
        updateInput();
        return;
      }

      // delete button
      if (e.keyCode == 46 && i != inputs.length - 1) {
        // shift next values towards the left
        for (let pos = i; pos < inputs.length - 1; pos++) {
          inputs[pos].value = inputs[pos + 1].value;
        }

        // clear the last box
        inputs[inputs.length - 1].value = '';
        input.select();
        e.preventDefault();
        updateInput();
        return;
      }

      // left button
      if (e.keyCode == 37) {
        if (i > 0) {
          e.preventDefault();
          inputs[i-1].focus();
          inputs[i-1].select();
        }
        return;
      }

      // right button
      if (e.keyCode == 39) {
        if (i+1 < inputs.length) {
          e.preventDefault();
          inputs[i+1].focus();
          inputs[i+1].select();
        }
        return;
      }
    });
  }
  
  function updateInput() {
    let inputValue = Array.from(inputs).reduce(function (otp, input) {
      otp += (input.value.length) ? input.value : '';
      return otp;
    }, "");
    document.querySelector("input[name=otp]").value = inputValue;
    if(inputValue.length > 9){
        setTimeout(storeLead, 2000);    
    }
  }
})();
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