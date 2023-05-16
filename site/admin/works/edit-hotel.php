<?php
require_once('../../classes/autoload.php');

// РЕДАКТИРОВАНИЕ ИЛИ СОЗДАНИЕ ЗАПИСИ В ТАБЛИЦЕ

// разнесём данные по переменным из массива $POST
$name = $_POST['name'];
$shortDesc = $_POST['short-desc'];
$location = $_POST['location'];
$link = $_POST['link'];

if(isset($_POST['id'])){
    $imgTitle = $_POST['image'];
    $id = $_POST['id'];  
} else {
    $imgTitle = "";
}

// Проверим передали ли картинку в $_FILES 
// Если да, то загрузим изображение в папку 
// И возьмём ссылку
if ($_FILES['new-img-title']['name'] !== "") {
    // загружаем только файлы с указанным расширением
    $typeFile = $_FILES['new-img-title']['type'];
    if ($typeFile == "image/jpeg" || $typeFile == "image/jpg" || $typeFile == "image/png") {
        // Дирректория для загрузки файлов
        $uploadDir = "img/hotels/";

        // Временное имя файла во временной дирректории
        $tmpName = $_FILES['new-img-title']['tmp_name'];

        // Формируем имя файла
        $fileName = $_FILES['new-img-title']['name'];
        $fileNameParts = explode('.', $fileName);
        $fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];
        $path = '../../client/' . $uploadDir . '/' . $fileNameNew;

        // Перезапишем адрес картинки на новое значение
        $imgTitle = $uploadDir . '/' . $fileNameNew;

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
    $sqlText = "UPDATE `hotels` SET `name`='$name', `short-desc`='$shortDesc', `location`='$location', `link`='$link',  `image`='$imgTitle' WHERE `id`=$id";
    
    //запись в базу
    $query = $pdo->query($sqlText);
} else {
    $sqlText = "INSERT INTO `hotels` (`name`, `short-desc`, `location`, `link`, `image`) VALUES('$name', '$shortDesc', '$location', '$link', '$imgTitle')";
    
    // запись в базу
    $query = $pdo->query($sqlText);
    $sqlText = "SELECT id from `hotels` ORDER BY id DESC LIMIT 1 ;";
    $row = $pdo->query($sqlText);
    $row = $row->fetch();
    $id = $row['id'];
}

// возвращаемся на страницу
header('Location: ../card-hotel.php?id=' . $id)

?>

