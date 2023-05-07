<?php

// Временное имя файла во временной дирректории
$tmpName = $_FILES['image']['tmp_name'];
// Формируем имя файла
$fileName = $_FILES['image']['name'];
$fileNameParts = explode('.', $fileName);
$fileNameNew = $fileNameParts[0] . '_' . time() . '.' . $fileNameParts[1];
// Дирректория для загрузки файлов
$uploadDir = "img";
// Сохраняем файл
move_uploaded_file($tmpName, $uploadDir . '/' . $fileNameNew);

echo "ADD FILE";
?>
