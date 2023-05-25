<?php
require_once('../../classes/autoload.php');

// РЕДАКТИРОВАНИЕ ИЛИ СОЗДАНИЕ ЗАПИСИ ТУРА В ТАБЛИЦЕ

// разнесём данные по переменным из массива $POST
$title = $_POST['title'];
$link = $_POST['link'];

if(isset($_POST['id'])){
    $imgTitle = $_POST['img-title'];
    $id = $_POST['id'];  
} else {
    $imgTitle = "";
}


// Проверим передали ли картинки в $_FILES 
// Если да, то загрузим изображения в папки 
// И соберём ссылки на них

if ($_FILES['new-img-title']['name'] !== "") {
    // загружаем только файлы с указанным расширением
    $typeFile = $_FILES['new-img-title']['type'];
    if ($typeFile == "image/jpeg" || $typeFile == "image/jpg" || $typeFile == "image/png") {
        // Дирректория для загрузки файлов
        $uploadDir = "img/tour/title";

        // Временное имя файла во временной дирректории
        $tmpName = $_FILES['new-img-title']['tmp_name'];

        // Формируем имя файла
        $fileName = $_FILES['new-img-title']['name'];
        $fileNameParts = explode('.', $fileName);
        $fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];
        $path = '../../client/' . $uploadDir . '/' . $fileNameNew;

        // Перезапишем адрес титульной картинки на новое значение
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
    $sqlText = "UPDATE `tours` SET `title`='$title', `img-title`='$imgTitle', `link`='$link' WHERE `id`=$id";
    
    //запись в базу
    $query = $pdo->query($sqlText);
} else {
    $sqlText = "INSERT INTO `tours` (`title`, `img-title`, `link`) VALUES('$title', '$imgTitle', '$link')";
    
    // запись в базу
    $query = $pdo->query($sqlText);
    $sqlText = "SELECT id from `tours` ORDER BY id DESC LIMIT 1 ;";
    $row = $pdo->query($sqlText);
    $row = $row->fetch();
    $id = $row['id'];
}

// возвращаемся на страницу
header('Location: ../card-tour.php?id=' . $id)

?>

