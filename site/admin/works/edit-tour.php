<?php
require_once('../../classes/autoload.php');

// разнесём данные по переменным из массива $POST
$id = $_POST['id'];
$title = $_POST['title'];
$shortDesc = $_POST['short-desc'];
$fullDesc = $_POST['full-desc'];
$price = $_POST['price'];

$imgCarousel = [];
$urlsImgCarousel = [];
$imgTitle = $_POST['img-title'];


// Проверим передали ли картинки в $_FILES 
// Если да, то загрузим изображения в папки 
// И соберём ссылки на них

// сначала для карусели
if ($_FILES['new-img-carousel']['name'][0] !== "") {
    // Дирректория для загрузки файлов
    $uploadDir = "img/tour/carousel";

    foreach ($_FILES['new-img-carousel']['name'] as $index => $name) {
        // Временное имя файла во временной дирректории
        $tmpName = $_FILES['new-img-carousel']['tmp_name'][$index];
        // Формируем имя файла
        $fileName = $name;
        $fileNameParts = explode('.', $fileName);
        $fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];
    
        $path = '../../client/' . $uploadDir . '/' . $fileNameNew;
        $urlsImgCarousel[] = $uploadDir . '/' . $fileNameNew;
        // Сохраняем файл в дирректорию
        move_uploaded_file($tmpName, $path);
    }
}

// теперь для титульного изображения карточки тура
if ($_FILES['new-img-title']['name'] !== "") {
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

// Теперь проверим $_POST
// если в $_POST передали картинки для карусели, то собираем их в массив $imgCarousel[]
if (isset($_POST['img-carousel'])) {

    $postImgCarousel[] = $_POST['img-carousel'];

    $i = 0;
    foreach ($postImgCarousel[0] as $img) {
        $imgCarousel[$i] = $img;
        $i = $i + 1;
    }
} 

// Дальше соединим полученные url из POST и FILES
$imgCarousel = array_merge($imgCarousel, $urlsImgCarousel);

// Полученный массив кодируем в json-формат
$json = json_encode($imgCarousel);

$sqlText = "UPDATE `tours` SET `title`='$title', `short-desc`='$shortDesc', `full-desc`='$fullDesc', `price`='$price', `img-title`='$imgTitle', `img-carousel`='$json' WHERE `id`=$id";

// запись в базу
$pdo = \Connection::getConnection();

$query = $pdo->query($sqlText);

// // подготовим запрос
// $query = $pdo->prepare("UPDATE `tours` SET `title`=:title, `short-desc`=:shortDesc, `full-desc`=:fullDesc, `price`=:price, `img-title`=:imgTitle, `img-carousel`=:imgCarousel WHERE `id`=:$id");
// // запрос
// $query->execute(['title'=>$title, 'shortDesc'=>$shortDesc, 'fullDesc'=>$fullDesc, 'price'=>$price, 'imgTitle'=>$imgTitle, 'imgCarousel'=>$json, 'id'=>$id]);

// возвращаемся на страницу
header('Location: ../card-tour.php?id=' . $id)

?>

