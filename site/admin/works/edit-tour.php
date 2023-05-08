<?php
require_once('../../classes/autoload.php');

// РЕДАКТИРОВАНИЕ ИЛИ СОЗДАНИЕ ЗАПИСИ ТУРА В ТАБЛИЦЕ

// разнесём данные по переменным из массива $POST
$title = $_POST['title'];
$shortDesc = $_POST['short-desc'];
$fullDesc = $_POST['full-desc'];
$price = $_POST['price'];

if(isset($_POST['id'])){
    $imgTitle = $_POST['img-title'];
    $id = $_POST['id'];  
} else {
    $imgTitle = "";
}

$imgCarousel = [];
$urlsImgCarousel = [];


// Проверим передали ли картинки в $_FILES 
// Если да, то загрузим изображения в папки 
// И соберём ссылки на них

// сначала для карусели
if ($_FILES['new-img-carousel']['name'][0] !== "") {
    // Дирректория для загрузки файлов
    $uploadDir = "img/tour/carousel";

    foreach ($_FILES['new-img-carousel']['name'] as $index => $name) {

        // загружаем только файлы с указанным расширением
        $typeFile = $_FILES['new-img-carousel']['type'][$index];
        if ($typeFile == "image/jpeg" || $typeFile == "image/jpg" || $typeFile == "image/png") {


        // Временное имя файла во временной дирректории
        $tmpName = $_FILES['new-img-carousel']['tmp_name'][$index];

        // Формируем имя файла
        $fileName = $name;
        $fileNameParts = explode('.', $fileName);
        $fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];
        $path = '../../client/' . $uploadDir . '/' . $fileNameNew;

        // добавляем в массив url картинок карусели
        $urlsImgCarousel[] = $uploadDir . '/' . $fileNameNew;

        // Сохраняем файл в дирректорию
        move_uploaded_file($tmpName, $path);
        }
    }
}

// теперь для титульного изображения карточки тура
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

// Теперь проверим $_POST
// если в $_POST передали картинки для карусели, то добавляем их в массив $imgCarousel[]
if (isset($_POST['img-carousel'])) {

    $postImgCarousel[] = $_POST['img-carousel'];

    $i = 0;
    foreach ($postImgCarousel[0] as $img) {
        $imgCarousel[$i] = $img;
        $i = $i + 1;
    }
} 

// Дальше соединим полученные url из POST и FILES
// и получим весь список адресов картинок
$imgCarousel = array_merge($imgCarousel, $urlsImgCarousel);

// Полученный массив кодируем в json-формат 
// который будем записывать в базу
$json = json_encode($imgCarousel, JSON_UNESCAPED_UNICODE);

//подключение к базе
$pdo = \Connection::getConnection();

// формируем текст запроса
// если редактируем карточку, то данные UPDATE
// если создаём новую - то INSERT
if (isset($_POST['id'])) {
    $sqlText = "UPDATE `tours` SET `title`='$title', `short-desc`='$shortDesc', `full-desc`='$fullDesc', `price`='$price', `img-title`='$imgTitle', `img-carousel`='$json' WHERE `id`=$id";
    
    //запись в базу
    $query = $pdo->query($sqlText);
} else {
    $sqlText = "INSERT INTO `tours` (`title`, `short-desc`, `full-desc`, `price`, `img-title`, `img-carousel`) VALUES('$title', '$shortDesc', '$fullDesc', '$price', '$imgTitle', '$json')";
    
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

