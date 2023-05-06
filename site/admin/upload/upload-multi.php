<?php
    require_once('../../classes/autoload.php');
// Дирректория для загрузки файлов
$uploadDir = "img";

$urlsImg = [];

foreach ($_FILES['image']['name'] as $index => $name) {
// Временное имя файла во временной дирректории
    $tmpName = $_FILES['image']['tmp_name'][$index];
    // Формируем имя файла
    $fileName = $name;
    $fileNameParts = explode('.', $fileName);
    $fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];

    $path = $uploadDir . '/' . $fileNameNew;
    $urlsImg[] = $path;
    // Сохраняем файл
    move_uploaded_file($tmpName, $path);
}

$photos = json_encode($urlsImg);
var_dump($photos);



    
        $pdo = \Connection::getConnection();
        //подготовим запрос
        $query = $pdo->prepare("UPDATE `tours` SET `img-carousel`=:imgCarousel WHERE `id`='1'");
    
        $query->execute(['imgCarousel'=>$photos]);
        
        echo "ADD FILEs";






?>