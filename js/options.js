// ===============================================

// MOBILE MENU

// ===============================================

$('.mobileTriger').on('click', function(e){
    $('.menu').toggleClass('menu-active');
    e.preventDefault();
});


$('.mobileTriger').on('click', function(e){
  $('.menu-vidros').toggleClass('menu-active-vidros');
  e.preventDefault();
});


// $('.filter-img').on('hover', function(e){
//   $('.filter-over').show();
//   e.preventDefault();
// });

// modal product details
jQuery(document).ready(function ($) {
  $('img[data-rel^=lightcase]').lightcase({
      swipe: true
  });
});

// ===============================================

// WORK FILTER

// ===============================================

// $('.filtr-container').imagesLoaded( function() {
//     // images have loaded
//   });


// var options = {
//        animationDuration: 0.75, // in seconds
//        filter: 'all', // Initial filter
//        delay: 5, // Transition delay in ms
//        delayMode: 'progressive', // 'progressive' or 'alternate'
//        easing: 'ease-out',
//        filterOutCss: { // Filtering out animation
//           opacity: 0,
//           transform: 'scale(0.75)'
//        },
//        filterInCss: { // Filtering in animation
//           opacity: 0,
//           transform: 'scale(1)'
//        },
//        layout: 'sameSize', // See layouts
//        multifilterLogicalOperator: 'or',
//        selector: '.filtr-container',
//     setupControls: false
//     }
//     var filterizd = $('.filtr-container').filterizr(options);

// $('.filter').on('click', function(e){
//     $('.filter').removeClass('filter-active');
//     $(this).addClass('filter-active');
// });

// $('.grid').isotope({
//     // options...
//     itemSelector: '.grid-item',
//     percentPosition: true,
//     masonry: {
//         columnWidth: 0
//       }
//     // masonry: {
//     //   columnWidth: 0
//     // }
//   });

  // layout Isotope after each image loads
// $grid.imagesLoaded().progress( function() {
//     $grid.isotope('fitRows');
//   });

//   $('.grid').isotope({
//     // set itemSelector so .grid-sizer is not used in layout
//     itemSelector: '.grid-item',
//     percentPosition: true,
//     masonry: {
//       // use element for option
//       columnWidth: '200px'
//     }
//   })