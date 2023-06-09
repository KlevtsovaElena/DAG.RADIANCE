<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <link rel="stylesheet" href="css/admin.css">
    <link rel="stylesheet" href="css/form.login.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    
    <div id="containerPage" class="index">
  
        <div class="mainBlock">
            <article class="container">
                <!-- Внутренний блок -->
                <div class="block">
                    <section class="block__item block-item">
                        <h2 class="block-item__title">Вход в кабинет</h2>
                        <button class="block-item__btn signin-btn">Перейти</button>
                    </section>
                    <section class="block__item block-item">
                        <h2 class="block-item__title">Я здесь первый раз! Но у меня есть временный пароль.</h2>
                        <button class="block-item__btn signup-btn">Перейти</button>
                    </section>
                </div>
                <!-- блок формы -->
                <div class="form-box">
                    <!-- Форма входа -->
                    <form action="#" class="form form_signin">
                        <h3 class="form__title">Вход</h3>
                        <p>
                            <input type="text" class="form__input" placeholder="Логин">
                        </p>
                        <p>
                            <input type="password" class="form__input" placeholder="Пароль">
                        </p>
                        <p>
                            <button class="form__btn">Войти</button>
                        </p>
                        <div class="info-form"></div>
                    </form>
                    <!-- Форма регистрации -->
                    <form action="#" class="form form_signup">
                        <h3 class="form__title">Смена временного пароля</h3>
                        <p>
                            <input type="text" class="form__input user-name" placeholder="Логин">
                        </p>
                        <p>
                            <input type="password" class="form__input temp-pass" placeholder="Временный пароль">
                        </p>
                        <p>
                            <input type="password" class="form__input user-pass1" placeholder="Пароль">
                        </p>
                        <p>
                            <input type="password" class="form__input user-pass2" placeholder="Подтвердите пароль">
                        </p>
                        <p>
                            <button class="form__btn form__btn_signup">Сменить пароль</button>
                        </p>
                        <div class="info-form "></div>
                    </form>
                </div>
            </article>
        </div>
    </div>

    <script src="js/admin.js"></script>
</body>
</html>