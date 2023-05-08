<?php
require_once('../../classes/autoload.php');

    $id = $_GET['id'];

    // запись в базу
    $pdo = \Connection::getConnection();
    // подготовим запрос
    $query = $pdo->prepare("DELETE FROM `tours` WHERE `id`=:id");
    // выполним запрос
    $query->execute(['id'=>$id]);
    
    // возврат на страницу редактирования контактов
    header('Location: ../tours.php')

?>

