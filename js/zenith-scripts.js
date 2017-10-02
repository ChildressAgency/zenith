/*
 Normalize Carousel Heights - pass in Bootstrap Carousel items. https://coderwall.com/p/uf2pka/normalize-twitter-bootstrap-carousel-slide-heights
also try: https://stackoverflow.com/questions/41626960/how-to-smooth-transition-between-elements-of-different-heights-in-bootstrap-caro
*/
$.fn.carouselHeights = function(){
  var items = $(this), //grab all slides
    heights = [], //create empty array to store height values
    tallest; //create variable to make note of the tallest slide

  var normalizeHeights = function(){
    items.each(function () { //add heights to array
      heights.push($(this).height());
    });
    tallest = Math.max.apply(null, heights); //cache largest value
    items.each(function () {
      $(this).css('min-height', tallest + 'px');
    });
  };

  normalizeHeights();

  $(window).on('resize orientationchange', function () {
    //reset vars
    tallest = 0;
    heights.length = 0;

    items.each(function () {
      $(this).css('min-height', '0'); //reset min-height
    });
    normalizeHeights(); //run it again 
  });
};

jQuery(document).ready(function($){

  $('#testimonial-slider').carouselHeights();

  //home-hero continue
  $('.scrolldown').on('click', function (e) {
    e.preventDefault();
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 1000);
        return false;
      }
    }
  });  

  if (typeof $.fn.swiperight == 'function') {
    $('.carousel.slide').swiperight(function () {
      $(this).carousel('prev');
    });
    $('.carousel.slide').swipeleft(function () {
      $(this).carousel('next');
    });
  }

});
