// ===============================================

// MOBILE MENU

// ===============================================

$('.mobileTriger').on('click', function(e){
    $('.menu').toggleClass('menu-active');
    e.preventDefault();
});

// modal product details
jQuery(document).ready(function ($) {
  $('img[data-rel^=lightcase]').lightcase({
      swipe: true
  });
});

