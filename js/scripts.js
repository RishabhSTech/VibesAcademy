var deadline = new Date("april 30, 2024 15:37:25").getTime();
var x = setInterval(function() {
   var currentTime = new Date().getTime();
   var t = deadline - currentTime;
   var days = Math.floor(t / (1000 * 60 * 60 * 24));
   var hours = Math.floor((t%(1000 * 60 * 60 * 24))/(1000 * 60 * 60));
   var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
   var seconds = Math.floor((t % (1000 * 60)) / 1000);
   document.getElementById("day").innerHTML =days ;
   document.getElementById("hour").innerHTML =hours;
   document.getElementById("minute").innerHTML = minutes;
   document.getElementById("second").innerHTML =seconds;
   if (t < 0) {
      clearInterval(x);
      document.getElementById("time-up").innerHTML = "TIME UP";
      document.getElementById("day").innerHTML ='0';
      document.getElementById("hour").innerHTML ='0';
      document.getElementById("minute").innerHTML ='0' ;
      document.getElementById("second").innerHTML = '0';
   }
}, 1000);
// Empty JS for your own code to be here

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
