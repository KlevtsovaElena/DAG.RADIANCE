<?php 

// ПРОВЕРКА ТОКЕНА НА СООТВЕТСТВИЕ С БАЗОЙ

// если куки нет, то открываем форму авторизации
if(!isset($_COOKIE['admin'])) {
    header('Location: login.php');
    exit(0);
} else {
    $_POST['token'] = $_COOKIE['admin'];
    $admin = Admin::check();

    if (!$admin) {
        // если куки есть, но нет в базе токена, то открываем форму авторизации
        header('Location: login.php');
        exit(0);
    } else {
        // иначе возвращаем данные админа
        return $admin;
    }
}

?>