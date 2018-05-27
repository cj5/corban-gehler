jQuery(document).ready(function($) {

// smooth scroll
$(document).on('click', 'a[href^="#"]', function (e) {
  e.preventDefault();

  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});

$('body').css('overflow-y', 'hidden');
let vpW = $(window).width();
console.log('vp width: ', vpW);
$('body').css('overflow-y', 'visible');

let vpH = $(window).height();

let heroImgHt = $('.hero-section img').height();
console.log('heroImgHt:', heroImgHt);
$('.hero-section').height(heroImgHt);

let maxHeight = 0;
$('.tunnel').each(function(){
    if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
});
let h5Height = 0;
$('.tunnel h5').each(function(){
    if ($(this).height() > h5Height) { h5Height = $(this).height(); }
});
$('.tunnel').height(maxHeight + h5Height);

let headerHt = $('header').outerHeight();
$('.header-fill').height(headerHt);
// $('.header-wrapper').height(headerHt);

let headingHt = $('.heading').height();
$('.heading-filter').height(headingHt);

let offsetHt = $('.offset').outerHeight();
$('#learn-more').css('bottom', offsetHt + 78);

let containerW = $('.container').width();
let learnMoreHt = $('.learn-more').height();
$('.learn-more').css('right', (vpW - (containerW + 20)) / 2);
console.log(containerW);
let heroHt = $('.hero-section').outerHeight();
console.log('heroHt:', heroHt);
if (headerHt + heroHt > vpH) {
  $('.learn-more').css('top', vpH - headerHt - 110);
} else {
  $('.learn-more').css('top', 'initial');
  $('.learn-more').css('bottom', 20);
}

$(window).scroll(function() {
  if ($(this).scrollTop() > 110) {
    $('nav.desktop li').css('padding', '28px 0 20px');
    $('nav.desktop a').css('font-size', 16);
    $('.header-title img').css('max-width', 120);
    $('.header-title img').css('margin-top', );
    $('header').css('background-color', 'rgba(255,255,255,0.95)');
    $('.header-fill').height(headerHt);
  } else {
    $('nav.desktop li').css('padding', '40px 0 34px');
    $('nav.desktop a').css('font-size', 18);
    $('.header-title img').css('max-width', 180);
    $('.header-title img').css('margin-top', 0);
    $('header').css('background-color', 'rgba(255,255,255,1)');
    $('.header-fill').height(headerHt);
  }
});

let mobileNavHt = $('#mobile-nav').height();
$('#navicon').click(function() {    
  $('#mobile-nav').css('top', 0);
  // $('#mobile-nav').css('display', 'block');
  $('body').css('top', mobileNavHt);
});
$('#close').click(function() {
  if ($('#mobile-nav').css('top') === '0px') {      
    $('#mobile-nav').css('top', -mobileNavHt);
    // $('#mobile-nav').css('display', 'none');
    $('body').css('top', 0);
  }
});

const updateContainer = () => {
  
  $('body').css('overflow-y', 'hidden');
  let vpW = $(window).width();
  console.log('vp width: ', vpW);
  $('body').css('overflow-y', 'visible');

  let vpH = $(window).height();
  console.log('vpH:', vpH);

  let heroImgHt = $('.hero-section img').height();
  console.log(heroImgHt);
  $('.hero-section').height(heroImgHt);
  let heroHt = $('.hero-section').outerHeight();
  console.log('heroHt:', heroHt);
  const learnMoreHt = $('.learn-more').height();
  console.log('learnMoreHt:', learnMoreHt);

  let headerHt = $('header').outerHeight();
  $('.header-fill').height(headerHt);
  console.log('headerHt:', headerHt);

  let containerW = $('.container').width();  
  $('.learn-more').css('right', (vpW - (containerW + 20)) / 2);
  if (headerHt + heroHt > vpH) {    
    $('.learn-more').css('top', vpH - headerHt - (110));
  } else {
    $('.learn-more').css('top', 'initial');
    $('.learn-more').css('bottom', 20);
  }

  $('.tunnel').css('height', 'initial');
  let maxHeight = 0;
  $('.tunnel').each(function(){
     if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  });
  $('.tunnel').height(maxHeight + 50);

  if(vpW > 992) {
    $('body').css('top', 0);
  }

  let mobileNavHt = $('#mobile-nav').height();
  $('#navicon').click(function() {    
    $('#mobile-nav').css('top', 0);
    $('body').css('top', mobileNavHt);
  });
  $('#close').click(function() {
    if ($('#mobile-nav').css('top') === '0px') {      
      $('#mobile-nav').css('top', -mobileNavHt);
      $('body').css('top', 0);
    }
  });

}

  $(window).resize(function() {
    updateContainer();
  });

});