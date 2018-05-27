jQuery(document).ready(function($) {

// smooth scroll
$(document).on('click', 'a[href^="#"]', function (e) {
  e.preventDefault();

  $('html, body').animate({
      scrollTop: $($.attr(this, 'href')).offset().top
  }, 500);
});

let maxHeight = 0;
  $('.tunnel').each(function(){
     if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  });
  $('.tunnel').height(maxHeight + 50);

  let headerHt = $('header').outerHeight();
  $('.header-fill').height(headerHt);

  let headingHt = $('.heading').height();
  $('.heading-filter').height(headingHt);

  let joinHt = $('.join').outerHeight();
  $('#learn-more').css('bottom', joinHt + 78);

  $(window).scroll(function() {
    if ($(this).scrollTop() > 110) {
      $('nav li').css('padding', '28px 0 20px');
      $('nav a').css('font-size', 16);
      $('.header-title img').css('max-width', 120);
      $('.header-title img').css('margin-top', 4);
      $('header').css('background-color', 'rgba(255,255,255,0.95)');
    } else {
      $('nav li').css('padding', '40px 0 34px');
      $('nav a').css('font-size', 18);
      $('.header-title img').css('max-width', 180);
      $('.header-title img').css('margin-top', 0);
      $('header').css('background-color', 'rgba(255,255,255,1)');
    }
  });

const updateContainer = () => {

  $('.tunnel').css('height', 'initial');
  let maxHeight = 0;
  $('.tunnel').each(function(){
     if ($(this).height() > maxHeight) { maxHeight = $(this).height(); }
  });
  $('.tunnel').height(maxHeight + 50);

}

  $(window).resize(function() {
    updateContainer();
  });

});