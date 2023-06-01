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
const formFeedback = modalFeedbackForm.querySelector('form');

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

/* ******** Отправка на электронную почту ******** */
//сюда передаём собранные с формы поля (formData)
async function sendMail(formData){

    let nameDirSend = 'works/sendmail.php';

    if (window.location.pathname.includes('index.php')) {
        nameDirSend = 'client/works/sendmail.php';
    }
    //отправляем поля в sendmail.php
    let response = await fetch(nameDirSend, {
        method: 'POST',
        body: formData
    });

    //функция должна вернуть сообщение, которое выведем в попап
    //если письмо ушло на почту или ошибка при отправки send(), то получаем ответ с сервера
    if (response.ok){

        let result = await response.json();
        return result.message;

    //если response отличен от ok или не попали в sendmail.php
    } else {

        return "Ошибка! Заявка не отправлена!";
    }

}

/* ******** Валидация и передача формы обратной связи для отправки на почту ******** */
async function sendFormFeedback(){

    //предотвратить дефолтные действия, отмена отправки формы (чтобы страница не перезагружалась)
    event.preventDefault(); 

    let name = document.getElementById('name').value;
    let phone = document.getElementById('phone').value;
    let mail = document.getElementById('mail').value;

    //проверки, чтобы нужные поля были заполнены
    if (name.trim() != '') {

        if (phone.trim() != '' || (mail.trim() != '' && mail.indexOf('@') >= 0)) {
            //если все нужные поля заполнены

            //собираем все поля с формы
            let formData = new FormData(formFeedback);

            //показываем иконку loading на момент процесса отправки
            document.querySelector('.loading').classList.add('sending');

            //вызываем функцию отправки и передаём ей formData
            messagePopUp = await sendMail(formData);

            //скрываем иконку loading 
            document.querySelector('.loading').classList.remove('sending');

            //очищаем информационное поле
            document.getElementById('result').innerHTML="";

            //скрыть форму
            modalFeedbackForm.classList.add('d-none');

            //передадим поп-ап полученное сообщение после попытки отправить письмо
            modalFeedbackFormSuccess.querySelector('.success').innerText = messagePopUp;

            
            if (messagePopUp.includes("Ошибка")) {
                //добавим красный цвет тексту при ошибке
                modalFeedbackFormSuccess.querySelector('.success').style.color = "red";
            } else {      
                //если заявка отправлена, очищаем поля формы
                formFeedback.reset();
            }


            //открыть поп-ап об успешной отправке заявки
            modalFeedbackFormSuccess.classList.remove('d-none');

            //автоматически закрыть поп-ап через 3 сек
            setTimeout(() => { 
                modalFeedbackFormSuccess.classList.add('d-none'); 
            }, 3000);

            //если заполнена только почта, но нет @
            } else if (mail.trim() != '' && mail.indexOf('@') < 0) {
                document.getElementById('result').innerHTML = 'Почта долна содержать знак @';
           
            //если нужные поля не заполнены
            } else {
                document.getElementById('result').innerHTML = 'Для обратной связи необходимо указать почту или телефон.';
            }

    } else {
        document.getElementById('result').innerHTML = 'Заполните поле "Имя"';
    }

}





/* ******** Отправка заявки в телеграмм-бота ******** */
// function sendForm() {

//     //предотвратить дефолтные действия, отмена отправки формы (чтобы страница не перезагружалась)
//     event.preventDefault(); 

//     let name = document.getElementById('name').value;
//     let phone = document.getElementById('phone').value;
//     let mail = document.getElementById('mail').value;

//     //проверки, чтобы нужные поля были заполнены
//     if (name.trim() != '') {

//         if (phone.trim() != '' || mail.trim() != '') {

//             //создание объекта, отправляющего запросы
//             let requestObj = new XMLHttpRequest();
        
//             let link;
        
//                 if (phone && !mail) {
//                     if (phone.trim() != '') {
//                         link = 'https://api.telegram.org/bot6166166487:AAGnLTIkj5dZfGmCK-Xo9FxIo4WZjal-Eck/sendMessage?chat_id=224039891&text=' + "Вам поступила заявка с сайта от клиента по имени " + name + ", телефон: " + phone;
//                     }
//                 }
        
//                 if (!phone && mail) {
//                     if (mail.trim() != '') {
//                         link = 'https://api.telegram.org/bot6166166487:AAGnLTIkj5dZfGmCK-Xo9FxIo4WZjal-Eck/sendMessage?chat_id=224039891&text=' + "Вам поступила заявка с сайта от клиента по имени " + name + ", электронная почта: " + mail;
//                     }
//                 }
        
//                 if (phone && mail) {
//                     if (phone.trim() != '' && mail.trim() != '') {
//                         link = 'https://api.telegram.org/bot6166166487:AAGnLTIkj5dZfGmCK-Xo9FxIo4WZjal-Eck/sendMessage?chat_id=224039891&text=' + "Вам поступила заявка с сайта от клиента по имени " + name + ", телефон: " + phone + ", электронная почта: " + mail;
//                     } 
//                 }
        
//             //конфигурация объекта
//             requestObj.open('GET', link, false);
                
//             //отправка запроса
//             requestObj.send();

//             //скрыть форму
//             modalFeedbackForm.classList.add('d-none');

//             //открыть поп-ап об успешной отправке заявки
//             modalFeedbackFormSuccess.classList.remove('d-none');

//             //автоматически закрыть поп-ап через 3 сек
//             setTimeout(() => { 
//                 modalFeedbackFormSuccess.classList.add('d-none'); 
//             }, 3000);

//             //если нужные поля не заполнены
//             } else {
//                 document.getElementById('result').innerHTML = 'Для обратной связи необходимо указать почту или телефон.';
//             }

//     } else {
//         document.getElementById('result').innerHTML = 'Заполните поле "Имя"';
//     }

// }