/* ********  СЛАЙДЕР JQUERY/SLICK, ПО 4 ЭЛЕМЕНТА ******** */

$('.slick-slide').slick({
  slidesToShow: 4,      //по сколько элементов показывать
  slidesToScroll: 1,    //сколько элементов прокрутить
  autoplay: true,       //включить автопрокрутку?
  dots: true,           //добавить прокрутку внизу (точки)?
  speed: 800,           //скорость прокрутки по кнопкам
  autoplaySpeed: 6000,  //скорость автопрокрутки
  prevArrow: '<div class="btn-slider-prev">&#10094</div>',  //стрелка назад
  nextArrow: '<div class="btn-slider-next">&#10095</div>',  //стрелка вперёд

  // Адаптивность
  responsive: [
    {
      breakpoint: 1300,
      settings: {
        slidesToShow: 3,
        infinite: true
      }
  }, 
    {
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        infinite: true
      }
  }, 
  {
    breakpoint: 550,
    settings: {
      slidesToShow: 1,
      dots: true
    }
  }, 
  {
    breakpoint: 350,
    settings: {
      slidesToShow: 1,
      dots: true,
      arrows: false
    }
  }
]

});