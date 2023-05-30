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
    modalFeedbackForm.classList.remove('d-none');
}

function closeFeedback() {
    if (this === event.target) {
        modalFeedbackForm.classList.add('d-none');
    }
}

function closeFeedbackIcon() {
      modalFeedbackForm.classList.add('d-none');
}

modalFeedbackForm.addEventListener("click", closeFeedback);

/* ******** СКРЫТЬ поп-ап об успешно отправленной заявке по крестику или скликиванием ******** */
const modalFeedbackFormSuccess = document.getElementById("success");

function closeFeedbackIconSuccess() {
    modalFeedbackFormSuccess.classList.add('d-none');
}

function closeFeedbackSuccess() {
    if (this === event.target) {
        modalFeedbackFormSuccess.classList.add('d-none');
    }
}

// modalFeedbackFormSuccess.addEventListener("click", closeFeedback);


/* ******** Отправка заявки в телеграмм-бота ******** */
function sendForm() {

    //предотвратить дефолтные действия, отмена отправки формы (чтобы страница не перезагружалась)
    event.preventDefault(); 

    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let mail = document.getElementById('mail').value;

    //проверки, чтобы нужные поля были заполнены
    if (name.trim() != '') {

        if (phone.trim() != '' || mail.trim() != '') {

            //создание объекта, отправляющего запросы
            let requestObj = new XMLHttpRequest();
        
            let link;
        
                if (phone && !mail) {
                    if (phone.trim() != '') {
                        link = 'https://api.telegram.org/bot6166166487:AAGnLTIkj5dZfGmCK-Xo9FxIo4WZjal-Eck/sendMessage?chat_id=224039891&text=' + "Вам поступила заявка с сайта от клиента по имени " + name + ", телефон: " + phone;
                    }
                }
        
                if (!phone && mail) {
                    if (mail.trim() != '') {
                        link = 'https://api.telegram.org/bot6166166487:AAGnLTIkj5dZfGmCK-Xo9FxIo4WZjal-Eck/sendMessage?chat_id=224039891&text=' + "Вам поступила заявка с сайта от клиента по имени " + name + ", электронная почта: " + mail;
                    }
                }
        
                if (phone && mail) {
                    if (phone.trim() != '' && mail.trim() != '') {
                        link = 'https://api.telegram.org/bot6166166487:AAGnLTIkj5dZfGmCK-Xo9FxIo4WZjal-Eck/sendMessage?chat_id=224039891&text=' + "Вам поступила заявка с сайта от клиента по имени " + name + ", телефон: " + phone + ", электронная почта: " + mail;
                    } 
                }
        
            //конфигурация объекта
            requestObj.open('GET', link, false);
                
            //отправка запроса
            requestObj.send();

            //скрыть форму
            modalFeedbackForm.classList.add('d-none');

            //открыть поп-ап об успешной отправке заявки
            modalFeedbackFormSuccess.classList.remove('d-none');

            //автоматически закрыть поп-ап через 3 сек
            setTimeout(() => { 
                modalFeedbackFormSuccess.classList.add('d-none'); 
            }, 3000);

            //если нужные поля не заполнены
            } else {
                document.getElementById('result').innerHTML = 'Для обратной связи необходимо указать почту или телефон.';
            }

    } else {
        document.getElementById('result').innerHTML = 'Заполните поле "Имя"';
    }

}