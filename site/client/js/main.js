//слайдер
$('.slick-slide').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    autoplay: true,
    dots: true,
    speed: 800,
    autoplaySpeed: 4000,
    prevArrow: '<div class="btn-slider-prev">&#10094</div>',
    nextArrow: '<div class="btn-slider-next">&#10095</div>',

    
     
  });
// console.log("hdgshjdgjk");
// // Найдём контейнер со слайдами
// const sliderWrapper = document.querySelector('.slide-wrapper');

// // Теперь запишем в переменную все слайды этого слайдера
// const slideItems = Array.from(sliderWrapper.children);

// // Найдём кнопки ВПЕРЁД и НАЗАД
// const btnNext = document.querySelector('.btn-slider-next');
// const btnPrev = document.querySelector('.btn-slider-prev');

// // Для первого слайда  добавляем data-атрибут data-active
// slideItems[0].setAttribute('data-active', '');


// // Работаем с коллекцией слайдов
// // Пройдёмся по каждому слайду из коллекции
// slideItems.forEach(function (slide, index) {

//     // скрываем все слайды, кроме первых 3
//     if (index > 2) {
//         slide.classList.remove('d-flex');
//         slide.classList.add('d-none');
//     }

//     // для каждого слайда добавляем data-атрибут с его индексом 
//     slide.dataset.index = index;
// })

// btnNext.onclick = function() {
//     console.log("next slide");

//     const currentSlide = sliderWrapper.querySelector('[data-active]');
//     const currentSlideIndex = +currentSlide.dataset.index;
//     currentSlide.classList.add('d-none');
//     currentSlide.classList.remove('d-flex');
//     currentSlide.removeAttribute('data-active');

//     let nextDataActive;
//     let nextSlideIndex;

//     if (currentSlideIndex + 1 === slideItems.length) {
//         nextDataActive = 0;
//         nextSlideIndex = nextDataActive + 2;
//     } else if (currentSlideIndex + 2 === slideItems.length) {
//         nextDataActive = currentSlideIndex + 1
//         nextSlideIndex = 1;
//     } else if (currentSlideIndex + 3 === slideItems.length) {
//         nextDataActive = currentSlideIndex + 1
//         nextSlideIndex = 0;
//     } else {
//         nextDataActive = currentSlideIndex + 1;
//         nextSlideIndex = nextDataActive + 2;
//     }


    
//     slideItems[nextDataActive].setAttribute('data-active', '');
//     slideItems[nextSlideIndex].classList.add('d-flex');
//     slideItems[nextSlideIndex].classList.remove('d-none');

//     console.log('Текущий ' + currentSlideIndex);
//     console.log('active ' + nextDataActive);
//     console.log('Открываем ' + nextSlideIndex);
// };

// btnPrev.onclick = function() {
//     console.log("prev slide");

//     const currentSlide = sliderWrapper.querySelector('[data-active]');
//     const currentSlideIndex = +currentSlide.dataset.index;
//     currentSlide.classList.add('d-none');
//     currentSlide.classList.remove('d-flex');
//     currentSlide.removeAttribute('data-active');

//     let prevDataActive;
//     let prevSlideIndex;

//     if (currentSlideIndex === 0) {
//         nextDataActive = 0;
//         nextSlideIndex = nextDataActive + 2;
//     } else if (currentSlideIndex + 2 === slideItems.length) {
//         nextDataActive = currentSlideIndex + 1
//         nextSlideIndex = 1;
//     } else if (currentSlideIndex + 3 === slideItems.length) {
//         nextDataActive = currentSlideIndex + 1
//         nextSlideIndex = 0;
//     } else {
//         nextDataActive = currentSlideIndex + 1;
//         nextSlideIndex = nextDataActive + 2;
//     }


    
//     slideItems[nextDataActive].setAttribute('data-active', '');
//     slideItems[nextSlideIndex].classList.add('d-flex');
//     slideItems[nextSlideIndex].classList.remove('d-none');

//     console.log('Текущий ' + currentSlideIndex);
//     console.log('active ' + nextDataActive);
//     console.log('Открываем ' + nextSlideIndex);
// };