/* ****** Код для предпросмотра картинок при выборе файла ****** */

let file_input = document.querySelector('#photo');
let image_preview = document.querySelector('.photo-prew');

const handle_file_preview = (e) => {
  let files = e.target.files;

  image_preview.querySelector('img').remove();

  let image = document.createElement('img');
  image.src = window.URL.createObjectURL(files[0]);
  image_preview.appendChild(image);

}

file_input.addEventListener('change', handle_file_preview);

//функция вызова формы заполнения отзыва
function showReviewsForm() {
  //открываем форму
  document.getElementById('reviews-form').classList.remove('d-none');

  //скрываем кнопку
  document.getElementById('btn-leave-review').classList.add('d-none');
}

//функция скрытия формы заполнения отзыва
function hideReviewsForm() {
  //скрываем форму
  document.getElementById('reviews-form').classList.add('d-none');

  //открываем кнопку
  document.getElementById('btn-leave-review').classList.remove('d-none');
}


// Звездный рейтинг

if(document.querySelectorAll('.rating')) {
  const ratings = document.querySelectorAll('.rating');

  showRatings();
}

//функция изменения ширины активных звезд
function setRatingActiveWidth(i = ratingValue.innerHTML) {
  const ratingActiveWidth = i / 0.05;
  ratingActive.style.width = `${ratingActiveWidth}%`;
}

//основная функция по рейтингам
function showRatings() {
  let ratingActive;
  let ratingValue;
  const ratings = document.querySelectorAll('.rating');

  //бегаем по всем рейтингам на странице
  for (let i = 0; i < ratings.length; i++) {
      const rating = ratings[i];

      //запускаем функцию для каждого из рейтингов
      showRating(rating);
  }
  
  //функция для конкретного рейтинга
  function showRating(rating) {
      initRatingInfo(rating);
      setRatingActiveWidth();

      if (rating.classList.contains('rating_set')) {
          setRating(rating);
      }
  }
  
  //функция присваивания рейтингу переменных с данными самого рейтинга (из активной полосы и из value)
  function initRatingInfo(rating) {
      ratingActive = rating.querySelector('.rating-active');
      ratingValue = rating.querySelector('.rating-value');

  }

  //функция изменения ширины активных звезд
  function setRatingActiveWidth(i = ratingValue.innerHTML) {
      const ratingActiveWidth = i / 0.05;
      ratingActive.style.width = `${ratingActiveWidth}%`;
  }

  //функция, дающая возможность указывать оценку
  function setRating(rating) {

      //собираем все рейтинги на странице
      const ratingItems = rating.querySelectorAll('.rating-item');

      //собираем все звездные рейтинги
      for (let i = 0; i < ratingItems.length; i++) {

          //получаем каждый из рейтингов на странице
          const ratingItem = ratingItems[i];

          //событие при хождении мыши по звездам
          ratingItem.addEventListener('mouseenter', function (e) {
              //обновление переменных
              initRatingInfo(rating);
              //обновление активной полосы путем передачи в нее value того объекта, на который наведена мышь
              setRatingActiveWidth(ratingItem.value);
          });

          //сообытие при уходе мыши со звезд
          ratingItem.addEventListener('mouseleave', function (e) {
              //активная полоса пеерсчитывается и остается на последнем установленном значении, которое берется из цифры, указанной в value
              setRatingActiveWidth();
          });
          //сообытие при клике на звезду
          ratingItem.addEventListener('click', function (e) {
              //обновление переменных
              initRatingInfo(rating);

              //просто отобразить на фронте указанную оценку
              ratingValue.innerHTML = i + 1;
              setRatingActiveWidth();
          });
      }
  }

}