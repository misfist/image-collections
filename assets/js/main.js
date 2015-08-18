$().ready( function() {

   $('#feature-image').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    fade: true,
    asNavFor: '.slider-nav'
  });

  $('#image-list').slick({
    slidesToShow: 6,
    slidesToScroll: 2,
    variableWidth: false,
    asNavFor: '#feature-image',
    arrows: true,
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    vertical: true,
    infinite: false
  });
  
} ); 
