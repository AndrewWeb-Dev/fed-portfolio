//load in jQuery plugin dependencies (eg. flexslider, smoothScroll etc.) in this file
 $('a[href*="#"]:not([href="#"])').click(function() {
         if ($(window).width() <= 760) { 
           $('.nav').slideUp();
           $(".fa-times-circle").slideUp();
           $(".fa-bars").slideDown();
         }
         if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
           var target = $(this.hash);
           target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
           if (target.length) {
             $('html, body').animate({
               scrollTop: target.offset().top
             }, 1000);
             return false;
           }
         }
       });