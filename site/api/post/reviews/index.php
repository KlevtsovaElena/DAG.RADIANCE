<?php
//чтобы получить доступ из нашей странички
header('Access-Control-Allow-Origin: *');

require_once('../../../classes/autoload.php');

// РЕДАКТИРОВАНИЕ ИЛИ СОЗДАНИЕ ЗАПИСИ В ТАБЛИЦЕ

// разнесём данные по переменным из массива $POST
$name = $_POST['name'];
$title = $_POST['title'];
$description = $_POST['description'];
$rating = $_POST['rating'];
$photo = $_POST['photo-default'];
$dateTime =  date('Y-m-d H:i:s');
$connection = $_POST['connection'];


// Проверим передали ли картинку в $_FILES 
// Если да, то загрузим изображение в папку 
// И возьмём ссылку
if ($_FILES['photo']['name'] !== "") {
    // загружаем только файлы с указанным расширением
    $typeFile = $_FILES['photo']['type'];
    if ($typeFile == "image/jpeg" || $typeFile == "image/jpg" || $typeFile == "image/png") {
        // Дирректория для загрузки файлов
        $uploadDir = "img/avatar-review";

        // Временное имя файла во временной дирректории
        $tmpName = $_FILES['photo']['tmp_name'];

        // Формируем имя файла
        $fileName = $_FILES['photo']['name'];
        $fileNameParts = explode('.', $fileName);
        $fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];
        $path = '../../../client/' . $uploadDir . '/' . $fileNameNew;

        // Перезапишем адрес картинки на новое значение
        $photo = $uploadDir . '/' . $fileNameNew;

        // Сохраняем файл в дирректорию
        move_uploaded_file($tmpName, $path);
    }
}

//подключение к базе
$pdo = \Connection::getConnection();

// формируем текст запроса
$sqlText = "INSERT INTO `reviews` (`name`, `description`, `title`, `rating`, `connection`, `photo`, `date-time`) VALUES('$name', '$description', '$title', '$rating', '$connection', '$photo', '$dateTime')";

// запись в базу
$query = $pdo->query($sqlText);

// возвращаемся на страницу
header('Location: ../../../../client/reviews.php')

?>


