<?php
require_once('../../classes/autoload.php');
$id = 13;
$imgCarousel = [];


if (isset($_POST['img-carousel'])) {

    $postImgCarousel[] = $_POST['img-carousel'];

    $i = 0;
    foreach ($postImgCarousel[0] as $img) {
        $imgCarousel[$i] = $img;
        $i = $i + 1;
    }
} 


$json = json_encode($imgCarousel);

$pdo = \Connection::getConnection();
//подготовим запрос
$query = $pdo->prepare("UPDATE `tours` SET `img-carousel`=:imgCarousel WHERE `id`=:id");

$query->execute(['imgCarousel'=>$json,  'id'=>13]);

header('Location: ../test-card-tour.php?id=' . $id)

?>

