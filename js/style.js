

$(document).ready(function(){
  $('.bxslider').bxSlider({
      minSlides: 3,
  maxSlides: 3,
  slideWidth: 500,
  slideMargin: 10,
  pagerType:'full',
   pager: ($(".bxslider2>.wrap").length > 1) ? true: false,
   captions: false,
  auto: true,
 
  });
});