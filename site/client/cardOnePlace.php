<?php
require_once('../classes/autoload.php');
// получим данные именно по этой карточке
$data = Place::getLinesApiId($_GET['id']);





// первый вариант обращения к элементам
echo "Получили данные по карточке" . $data[0]['id'];


// второй вариант обращения к элементам
$obj = (object)$data[0];
echo "Получили данные по карточке" . $obj->id;
?>