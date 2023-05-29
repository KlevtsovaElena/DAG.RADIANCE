/* ********  СКРЫТЬ/ПОКАЗАТЬ Mobile Menu  ******** */

// По кнопке бургера будем показывать и скрывать мобльное меню
// С помощью toggle

// Найдём кнопку бургера на странице и div с мобилным меню
const btnBurger = document.querySelector('.btn-burger');
const mobileNav = document.querySelector('.mobile-nav');

// Будем отслеживать клик по кнопке бургера
btnBurger.addEventListener('click', function() {

  // в случае клика - добавляем/убираем активный класс 
  mobileNav.classList.toggle('mobile-nav-active');
  btnBurger.classList.toggle('mobile-nav-close');

})

/* ******** СКРЫТЬ/ПОКАЗАТЬ выпадающие пункты в Mobile Menu ******** */

let triggers = document.querySelectorAll('.li-trigger');

for (let i = 0; i < triggers.length; i++) {
    triggers[i].addEventListener('click', function(){
    document.querySelectorAll('.mobile-submenu')[i].classList.toggle('open');
    document.querySelectorAll('.arrow')[i].classList.toggle('active');
  });
}


/* ******** СКРЫТЬ/ПОКАЗАТЬ форму обратной связи ******** */
const modalFeedbackForm = document.querySelector(".modalbox");

function showFeedback() {
    console.log("jjhhjgjhg");
    modalFeedbackForm.classList.remove('d-none');
}

function closeFeedback() {
    if (this === event.target) {
        modalFeedbackForm.classList.add('d-none');
    }
}

modalFeedbackForm.addEventListener("click", closeFeedback);


/* ******** Отправка в телеграмм-бота ******** */
function sendExample() {

    //предотвратить дефолтные действия, отмена отправки формы
    event.preventDefault(); 

    alert("сообщение отправлено");

    //скрыть форму
    modalFeedbackForm.classList.add('d-none');
}