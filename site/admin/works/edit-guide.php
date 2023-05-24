<?php
require_once('../../classes/autoload.php');

// РЕДАКТИРОВАНИЕ ИЛИ СОЗДАНИЕ ЗАПИСИ В ТАБЛИЦЕ

// разнесём данные по переменным из массива $POST
$name = $_POST['name'];
$guideDesc = $_POST['guide-desc'];

if(isset($_POST['id'])){
    $photo = $_POST['photo'];
    $id = $_POST['id'];  
} else {
    $photo = "";
}

// Проверим передали ли картинку в $_FILES 
// Если да, то загрузим изображение в папку 
// И возьмём ссылку
if ($_FILES['new-img-title']['name'] !== "") {
    // загружаем только файлы с указанным расширением
    $typeFile = $_FILES['new-img-title']['type'];
    if ($typeFile == "image/jpeg" || $typeFile == "image/jpg" || $typeFile == "image/png") {
        // Дирректория для загрузки файлов
        $uploadDir = "img/guides/";

        // Временное имя файла во временной дирректории
        $tmpName = $_FILES['new-img-title']['tmp_name'];

        // Формируем имя файла
        $fileName = $_FILES['new-img-title']['name'];
        $fileNameParts = explode('.', $fileName);
        $fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];
        $path = '../../client/' . $uploadDir . '/' . $fileNameNew;

        // Перезапишем адрес картинки на новое значение
        $photo = $uploadDir . '/' . $fileNameNew;

        // Сохраняем файл в дирректорию
        move_uploaded_file($tmpName, $path);
    }
}

//подключение к базе
$pdo = \Connection::getConnection();

// формируем текст запроса
// если редактируем карточку, то данные UPDATE
// если создаём новую - то INSERT
if (isset($_POST['id'])) {
    $sqlText = "UPDATE `guides` SET `name`='$name', `guide-desc`='$guideDesc', `photo`='$photo' WHERE `id`=$id";
    
    //запись в базу
    $query = $pdo->query($sqlText);
} else {
    $sqlText = "INSERT INTO `guides` (`name`, `guide-desc`, `photo`) VALUES('$name', '$guideDesc', '$photo')";
    
    // запись в базу
    $query = $pdo->query($sqlText);
    $sqlText = "SELECT id from `guides` ORDER BY id DESC LIMIT 1 ;";
    $row = $pdo->query($sqlText);
    $row = $row->fetch();
    $id = $row['id'];
}

// возвращаемся на страницу
header('Location: ../card-guide.php?id=' . $id)

?>

