jQuery(document).ready(function( $ ) {

// on scroll watch header
$(window).on("scroll ready", function() {
  if ( $(window).scrollTop() > 50 ) {
    $(".header").addClass("active");
    $('.sub-menu').addClass('scrollMenu');
  } else {
     $(".header").removeClass("active");
     $('.sub-menu').removeClass('scrollMenu');
  }
});

// mobile menu toggle
$('.mobile-button').click(function() {
  // change bar for animation
  $('.bar').removeClass('back');
  if ($('.bar').hasClass('change')) {
    $('.bar').addClass('back');
  }
  $('.bar').toggleClass('change');

  // toggle mobile menu
  $('.mobile-menu').toggleClass('active');
  $('.bar').toggleClass('active');
  $('.header').find('.logo').toggleClass('active');

  // html overflow
  $('html').toggleClass('mobileScroll');

  if ( $(window).scrollTop() > 50 && $('.header').hasClass('active') ) {
    $('.header').removeClass('active');
  } else if ($(window).scrollTop() > 50 && !$('.header').hasClass('active')){
    $('.header').addClass('active');
  }
});

// off click closes any sub menu
$('html').click(function(e) {
  if ( !$(e.target).hasClass('menu-item-has-children') && e.target.tagName.toLowerCase() !== 'a' ) {
    $('.sub-menu').removeClass('active');
    $('.menu-item-has-children').removeClass('rotate');
  }
});

// sub menu display
$('.menu-item-has-children > a').click(function(e) {
  e.preventDefault();
  $(this).parent().toggleClass('rotate');
  $(this).parent().siblings().children('.sub-menu').removeClass('active');
  $(this).parent().siblings('.menu-item-has-children').removeClass('rotate');
  $(this).siblings('.sub-menu').toggleClass('active');
});

// detect browsers for easy cross-browser styling
function detectBrowser() {
  var ua = window.navigator.userAgent;

  // detect edge
  var edge = ua.indexOf('Edge/');
  if (edge > 0) {
     return 'is-edge';
  }

  // detect chrome
  var chrome = ua.indexOf('Chrome/');
  if (chrome > 0) {
    return 'is-chrome';
  }

  // detect firefox
  var mozilla = ua.indexOf('Firefox');
  if (mozilla > 0) {
    return 'is-firefox';
  }

  // detect ie
  var trident = ua.indexOf('Trident/');
  if (trident > 0) {
      return 'is-trident';
  }

  // other browser
  return 'not-IE';
}
$('body').addClass(detectBrowser());

// styles for ie and edge
$('.gfield').addClass(detectBrowser());
$('.gform_footer').addClass(detectBrowser());

// blog

$('.blog-body').text(function(index, currentContent) {
  return currentContent.substr(0,300) + '...';
});

// photo dragger

$(function() {
  if ( $(window).width() <= 576 ) {
    $('.covered').coveringBad({
      marginY : 30 , // margin-top and margin-bottom
      marginX : 10 , // margin-left and margin-right
      setX  : 200,
      setY  : 100 ,
      direction   : "horizontal" // vertical or horizontal
    });
  } else {
    $('.covered').coveringBad({
      marginY : 30 , // margin-top and margin-bottom
      marginX : 10 , // margin-left and margin-right
      setX  : 350,
      setY  : 100 ,
      direction   : "horizontal" // vertical or horizontal
    });
  }
});

$('.one').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1
});

});//close all jquery
