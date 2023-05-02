// *********  СЛАЙДЕР JQUERY/SLICK, ПО 3 ЭЛЕМЕНТА ******************//

$('.slick-slide').slick({
  slidesToShow: 3,      //по сколько элементов показывать
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
      breakpoint: 1000,
      settings: {
        slidesToShow: 2,
        infinite: true
      }
  }, 
  {
    breakpoint: 650,
    settings: {
      slidesToShow: 1,
      dots: true
    }
  }, 
  {
    breakpoint: 300,
    settings: "unslick" // destroys slick
  }]

});

 
// *********  СЛАЙДЕР НА ЧИСТОМ JS, ПО 1 ЭЛЕМЕНТУ ******************//


// слайдер на чистом js по одному элемент

// Найдём контейнер со слайдами
const carouselPanorama = document.querySelector('.carousel-panorama');

// Теперь запишем в переменную все слайды этого слайдера
const slideItems = Array.from(carouselPanorama.children);


// Работаем с коллекцией слайдов
// Пройдёмся по каждому слайду из коллекции
slideItems.forEach(function (slide, index) {

  // скрываем все слайды, кроме первого
  if (index !== 0) {
      slide.classList.add('d-none');
  }

  // для каждого слайда добавляем data-атрибут с его индексом 
  slide.dataset.index = index;


  // теперь будем отслеживать клик по слайду
  slide.addEventListener('click', function() {

    // скроем текущий слайд
    slide.classList.add('d-none');

    // найдём индекс следующего слайда
    let nextIndex;

    if (index + 1 === slideItems.length) {
      nextIndex = 0;
    } else {
      nextIndex = index + 1;
    }
    console.log(nextIndex);
    // Найдём сам следующий слайд
    const nextSlide = carouselPanorama.querySelector(`[data-index="${nextIndex}"]`);

    console.log(nextSlide);

    // Уберём класс d-none, чтобы показать этот слайд. и добавим атрибут data-active
    nextSlide.classList.remove('d-none');

  });
})
