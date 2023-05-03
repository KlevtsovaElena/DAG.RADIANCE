//функция для отправки запросов GET
function sendRequestGET(url){

  let requestObj = new XMLHttpRequest();
  requestObj.open('GET', url, false);
  requestObj.send();
  return requestObj.responseText;

}



// * ********  ПРИМЕР GET ЗАПРОСА ***************** *//
// Адрес для отправки запроса http://localhost/api/get/tours/
let dataJson = sendRequestGET('http://localhost/api/get/tours/index.php');
console.log(dataJson);
//раскодируем
let data = JSON.parse(dataJson);
console.log(data);





//функция для отправки запросов POST
function sendRequestPOST(url, params){

  let requestObj = new XMLHttpRequest();
  requestObj.open('POST', url, false);
  requestObj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
  requestObj.send(params);
  return requestObj.responseText;

}

//функция сохранения в ls
function save(keyData, saveData){

  //кодируем data в json и сохраняем в localStorage
  let dataJson = JSON.stringify(saveData);
  //сохраняем в localStorage
  localStorage.setItem(keyData, dataJson);

}


// * ********  СЛАЙДЕР JQUERY/SLICK, ПО 3 ЭЛЕМЕНТА ***************** *//

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
 
    // Найдём сам следующий слайд
    const nextSlide = carouselPanorama.querySelector(`[data-index="${nextIndex}"]`);

    // Уберём класс d-none, чтобы показать этот слайд.
    nextSlide.classList.remove('d-none');

  });
})
// ***************************//