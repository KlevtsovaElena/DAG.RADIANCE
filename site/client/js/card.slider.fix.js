/* ********  СЛАЙДЕР JQUERY/SLICK, ПО 3 ЭЛЕМЕНТА ***************** */

// определим количество элементов карусели
const imgSmall = document.querySelectorAll('.card-item_small');
const countImgSmall = imgSmall.length;
let showImgSmall = 0;
let showImgSmall1000 = 0;
let showImgSmall650 = 0;


// по сколько показывать в минигалерее
if (countImgSmall > 4) {
  showImgSmall = 3;
  showImgSmall1000 = 3;
  showImgSmall650 = 2;
} else if (countImgSmall === 3) {
  showImgSmall = 2;
  showImgSmall1000 = 2;
  showImgSmall650 = 1;
} else if (countImgSmall === 2) {
  showImgSmall = 1;
  showImgSmall1000 = 1;
  showImgSmall650 = 1;
}


  $('.slider-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-nav',

  });


if (countImgSmall > 1) {
  $('.slider-nav').slick({
    slidesToShow: showImgSmall,
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
          slidesToShow: showImgSmall1000,
          infinite: true
        }
    }, 
    {
      breakpoint: 650,
      settings: {
        slidesToShow: showImgSmall650,
        dots: true
      }
    }, 
    {
      breakpoint: 450,
      settings: {
        slidesToShow: 1,
        dots: true,
        arrows: false
      }
    }, 
    ]

  });

} else {
  document.querySelector(".mini-slider").classList.add('d-none');
  document.querySelector(".double-slider_container").classList.add('d-none');
  document.querySelector(".one-img-gallery").classList.remove('d-none');
}
    