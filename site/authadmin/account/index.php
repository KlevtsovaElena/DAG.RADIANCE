<?php

    //чтобы получить доступ из нашей странички
    header('Access-Control-Allow-Origin: *');

    require_once('../../classes/autoload.php');

    //создание объекта для подключения к БД
    $pdo = Connection::getConnection();

    $temp_password = $_POST['temp_password'];

    //шифруем пароль для записи в бд в зашифрованном виде
    if (isset($_POST['temp_password'])) {
       $_POST['temp_password'] = crypt($_POST['temp_password'], 'inordic');
    }

    if (Admin::exists()){
        $response = [
            'success' => false,
            'error' => 'Такой Логин уже используется!'
        ];
        echo json_encode($response, JSON_UNESCAPED_UNICODE);
        //останавливаем код
        exit(0);
    }

    $_POST['date_registr'] = date('Y-m-d H:i:s');
    
    //создаём запись в БД
    Admin::createAccount();


    $response = [
        'success' => true
    ];

    echo json_encode($response, JSON_UNESCAPED_UNICODE);

   