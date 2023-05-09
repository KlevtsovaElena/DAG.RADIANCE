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

/* **************** */
