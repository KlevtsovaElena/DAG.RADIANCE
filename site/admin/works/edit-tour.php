<?php
require_once('../../classes/autoload.php');

    $id = $_POST['id'];
    $title = $_POST['title'];
    $shortDesc = $_POST['short-desc'];
    $fullDesc = $_POST['full-desc'];
    $price = $_POST['price'];
    $imgTitle = $_POST['img-title'];
    $imgCarousel = $_POST['img-carousel'];

    $pdo = \Connection::getConnection();
    //подготовим запрос
    $query = $pdo->prepare("UPDATE `tours` SET `title`=:title, `short-desc`=:shortDesc, `full-desc`=:fullDesc, `price`=:price, `img-title`=:imgTitle WHERE `id`=:id");

    $query->execute(['title'=>$title, 'shortDesc'=>$shortDesc, 'fullDesc'=>$fullDesc, 'price'=>$price, 'imgTitle'=>$imgTitle,  'id'=>$id]);
    
    header('Location: ../contacts.php')

?>

