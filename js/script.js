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
  });

  $('#popular_carusel').slick({
    slidesToShow: 4,
    slidesToScroll: 4,
    infinite: false,
    speed: 1000,
  });

  $('body').on('click', '.catalog_carusel_item_cont_basket_link', function(){
    var parent = $(this).parent(".catalog_carusel_item_cont_basket")
    parent.toggleClass('click');
    return false;
  });

  $('input.input-custom').styler();
});
