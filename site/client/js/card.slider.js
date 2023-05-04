// *********  СЛАЙДЕР JQUERY/SLICK, ПО 3 ЭЛЕМЕНТА ******************//



  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav'
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    prevArrow: '<div class="btn-slider-prev">&#10094</div>',  //стрелка назад
    nextArrow: '<div class="btn-slider-next">&#10095</div>',  //стрелка вперёд
  });
    