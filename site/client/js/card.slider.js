// *********  СЛАЙДЕР JQUERY/SLICK, ПО 3 ЭЛЕМЕНТА ******************//



  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',
    // Адаптивность
    // responsive: [
       
    // {
    //   breakpoint: 300,
    //   settings: "unslick" // destroys slick
    // }]
  });
  $('.slider-nav').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    asNavFor: '.slider-for',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    autoplay: true,
    prevArrow: '<div class="btn-slider-prev">&#10094</div>',  //стрелка назад
    nextArrow: '<div class="btn-slider-next">&#10095</div>',  //стрелка вперёд

    // Адаптивность
    responsive: [
      {
        breakpoint: 1000,
        settings: {
          slidesToShow: 3,
          infinite: true
        }
    }, 
    {
      breakpoint: 650,
      settings: {
        slidesToShow: 2,
        dots: true
      }
    }, 
    // {
    //   breakpoint: 450,
    //   settings: "unslick" // destroys slick
    // }, 
    ]

  });
    