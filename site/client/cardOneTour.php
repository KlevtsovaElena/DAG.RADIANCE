<?php
require_once('../classes/autoload.php');
// получим данные именно по этой карточке
$data = Tour::getLinesApiId($_GET['id']);

var_dump($data);
echo "Получили данные по карточке" . $data[0]['id'];
?>