// Get the current time
var currentTime = new Date();

// Add 1 hour to the current time
var deadline = new Date(currentTime.getTime() + (1 * 60 * 60 * 1000));

var x = setInterval(function() {
   var currentTime = new Date().getTime();
   var t = deadline - currentTime;
   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
   var seconds = Math.floor((t % (1000 * 60)) / 1000);
   document.getElementById("hour").innerHTML =hours;
   document.getElementById("minute").innerHTML = minutes;
   document.getElementById("second").innerHTML =seconds;
   if (t < 0) {
      clearInterval(x);
      // Recalculate the deadline for the next hour
      deadline = new Date(currentTime.getTime() + (1 * 60 * 60 * 1000));
      document.getElementById("time-up").innerHTML = "TIME UP";
      document.getElementById("hour").innerHTML ='0';
      document.getElementById("minute").innerHTML ='0' ;
      document.getElementById("second").innerHTML = '0';
   }
}, 1000);

//CAROUSEL
/*
    Carousel
*/
(function () {
  "use strict";

  var carousels = function () {
    $(".owl-carousel1").owlCarousel({
      loop: true,
      center: true,
      margin: 0,
      responsiveClass: true,
      nav: true,
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        680: {
          items: 2,
          nav: true,
          loop: false
        },
        1000: {
          items: 3,
          nav: true
        }
      }

    });
  };

  (function ($) {
    carousels();
  })(jQuery);
})();
