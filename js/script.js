$(document).ready(function(){
  $('.main_top_slider').slick({
    dots: true,
    infinite: true,
    speed: 1000,
    autoplay: true,
    autoplaySpeed: 5000,
  });

  $('#new_carusel').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    speed: 1000,
    responsive: [
   {
     breakpoint: 1920,
     settings: {
       slidesToShow: 4,
       slidesToScroll: 4
     }
   },
   {
     breakpoint: 1000,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 2
     }
   },
   {
     breakpoint: 640,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1
     }
   }
 ]
  });

  $('#popular_carusel').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    speed: 1000,
    responsive: [
   {
     breakpoint: 1920,
     settings: {
       slidesToShow: 4,
       slidesToScroll: 4
     }
   },
   {
     breakpoint: 1000,
     settings: {
       slidesToShow: 2,
       slidesToScroll: 2
     }
   },
   {
     breakpoint: 640,
     settings: {
       slidesToShow: 1,
       slidesToScroll: 1
     }
   }
 ]
  });

  $('body').on('click', '.catalog_carusel_item_cont_basket_link', function(){
    var parent = $(this).parent(".catalog_carusel_item_cont_basket")
    parent.toggleClass('click');
    return false;
  });

  $('input.input-custom').styler();
});
