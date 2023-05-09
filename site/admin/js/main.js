//функция для отправки запросов GET
function sendRequestGET(url){

    let requestObj = new XMLHttpRequest();
    requestObj.open('GET', url, false);
    requestObj.send();
    return requestObj.responseText;
    
}

//функция для отправки запросов POST
function sendRequestPOST(url, params){

    let requestObj = new XMLHttpRequest();
    requestObj.open('POST', url, false);
    requestObj.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    requestObj.send(params);
    return requestObj.responseText;

}


function logOut() {
    //берём токен из куки
    const cookie = document.cookie.match(/admin=(.+?)(;|$)/);

    //если токена нет, то рисуем форму Авторизации и выходим из функции
    if (cookie == null || cookie == undefined || cookie == ""){
        renderLogin();
        return;
    }

    //если токен есть , то передаём его на сервер
    let params = "token=" + cookie[1];

    //отправляем запрос на сервер
    sendRequestPOST("http://localhost/authadmin/logout/", params);

    //удаляем токен из куки
    document.cookie = "admin=''; max-age=-1";

    //рисуем форму авторизации
    renderLogin();
}


function addAccount() {
    //предотвратить дефолтные действия, отмена отправки формы
    event.preventDefault(); 

     //найти все инпуты и получить данные из каждого
     let inputs = event.target.closest('form').querySelectorAll('input');
     const info = document.querySelector(".info");
     const newLogin = document.querySelector(".new-login");
     let text = document.createElement('textarea');
     let div = document.createElement('div');
     let first_name = inputs[0];
     let last_name = inputs[1];
     let login = inputs[2];
     let role = inputs[3];
     let password = Math.random().toString(36).slice(-8);

    //если пустые поля , то не добавляем
    if (first_name.value == "" || last_name.value == "" || login.value == "" || role.value == ""){
        info.innerText = "Заполните все данные";
        return;
    }

    let params =  "first_name=" + first_name.value + "&last_name=" + last_name.value + "&login=" + login.value + "&role=" + role.value + "&temp_password=" + password;

    //отправляем запрос на сервер
    let json = sendRequestPOST("http://localhost/authadmin/account/", params);

    //получаем ответ 'success': false/true, admin
    let data = JSON.parse(json);

    if (data['success'] == false) {
        text.innerText += data['error'];
    } else {
        text.innerText += "Ваши данные для входа в админ панель:   ";
        text.innerText += "login: " + login.value + "  ";
        text.innerText += "ВРЕМЕННЫЙ пароль: " + password + "  ";
        text.innerText += "При первом входе измените временный пароль на постоянный!"

        div.innerText = "Аккаунт создан. Скопируйте и отправьте пользователю:"
    }

    info.innerText = "";
    newLogin.innerHTML = "";

    newLogin.appendChild(div);
    newLogin.appendChild(text);

}

function deleteCard() {
    const deleteCardBlock = event.target.closest('.card-item').querySelector('.delete-card');

    deleteCardBlock.classList.remove('d-none');
}

function hiddenDeleteBlock() {
    const deleteCardBlock = event.target.closest('.card-item').querySelector('.delete-card');
    deleteCardBlock.classList.add('d-none');
}
function hiddenDeleteBlock2() {
    const deleteCardBlock = event.target.closest('.card-item').querySelector('.delete-card');
    deleteCardBlock.classList.add('d-none');
}

function hiddenDeleteImgCarousel() {

    const deleteImg = event.target.closest('.img-carousel-item').querySelector('.delete-img-carousel');
    deleteImg.classList.remove('d-none');
}

function notDeleteImgCarousel() {
    const deleteImg = event.target.closest('.img-carousel-item').querySelector('.delete-img-carousel');
    deleteImg.classList.add('d-none');
}

function deleteImgCarousel() {
    const deleteImg = event.target.closest('.img-carousel-item');
    deleteImg.remove();
}


