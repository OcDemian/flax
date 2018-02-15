$(document).ready(function(){

  $('input.input-custom').styler();

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

  $('body').on('click', '.history_body_title_text_detail', function(e){
    e.preventDefault();
    var op=$(this).attr('data_open');
    $('.history_body_item').removeClass('open');
    $('#'+op).addClass('open');
    // alert(op);
  });

  $('body').on('click', '.order_make_info_buyer_title_btn', function(e){
    e.preventDefault();
    $('.order_make').toggleClass('open');
  });

});
