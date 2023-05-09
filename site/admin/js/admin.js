const signInBtn = document.querySelector('.signin-btn');
const signUpBtn = document.querySelector('.signup-btn');
const formBox = document.querySelector('.form-box');
const mainBlock = document.querySelector('.mainBlock');


/* ****** Функции для отправки запросов и получения апишки ****** */

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


/* ****** Отслеживаем действия по кнопочкам Форм ****** */

// Если перейти - показываем форму смены временного пароля
signUpBtn.addEventListener('click', function(){
    formBox.classList.add('active');
    mainBlock.classList.add('active');
});

// Если перейти - показываем форму ввода логина-пароля
signInBtn.addEventListener('click', function(){
    formBox.classList.remove('active');
    mainBlock.classList.remove('active');
});

// Если Войти - вызываем функцию adminAuthorization
document.querySelector('.form_signin')
        .querySelector('button')
        .onclick = function() {
            adminAuthorization()
};

// Если Сменить пароль - вызываем функцию changePass()
document.querySelector('.form_signup')
        .querySelector('button')
        .onclick = function() {
            changePass()
};



/* ****** Функции для входа в кабинет ****** */

// авторизация
function adminAuthorization() {
    console.log('adminAuthorization()');

    //предотвратить дефолтные действия, отмена отправки формы
    event.preventDefault(); 

    //контейнер для инфы пользователю
    let info_auth = event.target.closest('form').querySelector(".info-form");

    //найти все инпуты и получить данные из каждого
    let inputs = event.target.closest('form').querySelectorAll('input');
    console.log(inputs);

    let login = inputs[0];
    let password = inputs[1];
    

    //----------------Здесь блок всяких поверок введённых значений ДО отправки на сервер------

    login.oninput = function(){
        login.classList.remove("input-debug");
        info_auth.innerHTML = "";
    }

    password.oninput = function(){
        password.classList.remove("input-debug");
        info_auth.innerHTML = "";
    }

    //проверяем поля на пустоту
    if(login.value == "") {
        info_auth.innerHTML = "Логин не может быть пустым!";
        login.classList.add("input-debug");
        return;
    }
    if(password.value == "") {
        info_auth.innerHTML = "Пароль не может быть пустым!";
        password.classList.add("input-debug");
        return;
    }

    //------------------------------------

    // Если все поля заполнены, то можно отправить запрос
    // подставить в запрос и отправить
    let params = "login=" + login.value + "&password=" + password.value;
    
    //получаем ответ
    let json = sendRequestPOST("http://localhost/authadmin/login/", params);
    let data = JSON.parse(json);

    //проверяем ответ
    //если пользователь не найден или логин/пароль не совпадают, то вернётся  {'success': false, 'error': 'Неверный логин или пароль!'}
    //выведем пользователю
    if(!data['success']) {
        info_auth.innerHTML = data['error'];
        return;
    }

    //если пользователь найден и логин/пароль верны
    //получим токен, запишем в куки с временем жизни 1 день
    if(data['success']) {
        document.cookie = "admin=" + data['token'] + "; max-age=86400";
    }

    // и перейдём на страницу кабинета
    document.location.href='cabinet.php';
}


// Смена пароля с авторизацией
function changePass() {

    console.log('changePass()');

    //предотвратить дефолтные действия, отмена отправки формы
    event.preventDefault(); 

    //найти все инпуты и получить данные из каждого
    let inputs = event.target.closest('form').querySelectorAll('input');

    //контейнер для инфы пользователю
    let info_reg = event.target.closest('form').querySelector(".info-form");
 
    let login = inputs[0];
    let temp_password = inputs[1];
    let pass1 = inputs[2];
    let pass2 = inputs[3];

    //----------------Здесь блок всяких поверок введённых значений ДО отправки на сервер------

    login.oninput = function(){
        login.classList.remove("input-debug");
        info_reg.innerHTML = "";
    }
    temp_password.oninput = function(){
        temp_password.classList.remove("input-debug");
        info_reg.innerHTML = "";
    }
    pass1.oninput = function(){
        pass1.classList.remove("input-debug");
        pass2.classList.remove("input-debug");
        info_reg.innerHTML = "";
    }
    pass2.oninput = function(){
        pass1.classList.remove("input-debug");
        pass2.classList.remove("input-debug");
        info_reg.innerHTML = "";
    }
    
    //проверяем поля на пустоту
    if(login.value == "") {
        info_reg.innerHTML = "Логин не может быть пустым!";
        login.classList.add("input-debug");
        return;
    }
    if(temp_password.value == "") {
        info_reg.innerHTML = "Введите временный пароль!";
        temp_password.classList.add("input-debug");
        return;
    }

    //проверяем введённые пароли
    //если не совпадают - надпись и подсветка
    if(pass1.value == ""){
        info_reg.innerHTML = "Введите пароль!";
        pass1.classList.add("input-debug");
        return;
    }
    if(pass2.value == ""){
        info_reg.innerHTML = "Введите пароль!";
        pass2.classList.add("input-debug");
        return;
    }
    if(pass1.value !== pass2.value){
        info_reg.innerHTML = " Пароли не совпадают!";
        pass1.classList.add("input-debug");
        pass2.classList.add("input-debug");
        return;
    }

    //------------------------------------

   //подставить в запрос и отправить
    let params = "login=" + login.value + "&password=" + pass1.value + "&temp_password=" + temp_password.value;
    
    //получаем ответ
    let json = sendRequestPOST("http://localhost/authadmin/changepass/", params);
    let data = JSON.parse(json);

    //проверяем ответ
    //если пользователь уже зарегистрирвоан, то вернётся  {'success': false, 'error': 'Такие Логин уже используются!'}
    //выведем пользователю
    if(!data['success']) {
        info_reg.innerHTML = data['error'];
        return;
    }

    //если пароль успешно заменен на постоянный получаем токен админа
    //и записываем в базу. устанавливаем срок жизни - 1 день
    if(data['success']) {
        document.cookie = "admin=" + data['token'] + "; max-age=86400";
    }

    //отрисуем его личный кабинет
    document.location.href='cabinet.php';
}