(function($) {
  "use strict";

  $(document).ready(function() {

  // ______________ RESPONSIVE MENU
  $('#navigation').superfish({
    delay: 300,
    animation: {
      opacity: 'show',
      height: 'show'
    },
    speed: 'fast',
    dropShadows: false
  });

  $(function() {
    $('#navigation').slicknav({
      label: "",
      closedSymbol: "&#8594;",
      openedSymbol: "&#8595;"
    });
  });

 // ______________ FIXED MENU AT SCROLL

 var nav = $('.header');
 if ($(window).width() > 767) {
   $(window).scroll(function () {
    if ($(this).scrollTop() > 200) {
      nav.addClass("f-nav fadeindown");
    } else {
      nav.removeClass("f-nav fadeindown");
    }
  });
 }

// ______________ MODAL LOGIN
$('input').blur(function() {
  if ($(this).val())
    $(this).addClass('used');
  else
    $(this).removeClass('used');
});

// ______________ RIPPLE EFFECT
$(function(){
  $('.ripple').materialripple();
});

// ______________ MATERIAL DESIGN FORM
$(function(){
  $('form.material').materialForm();
});

// ______________ ANIMATE EFFECTS
var wow = new WOW({
  boxClass: 'wow',
  animateClass: 'animated',
  offset: 0,
  mobile: false
});
wow.init();

 // ______________ BACK TO TOP BUTTON
 $(window).scroll(function() {
  if ($(this).scrollTop() > 300) {
    $('#back-to-top').fadeIn('slow');
  } else {
    $('#back-to-top').fadeOut('slow');
  }
});
 $('#back-to-top').click(function() {
  $("html, body").animate({
    scrollTop: 0
  }, 600);
  return false;
});


});

})(jQuery);