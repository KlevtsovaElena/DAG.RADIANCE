<?php
require_once('../../classes/autoload.php');

// УДАЛЕНИЕ ЗАПИСИ ДОСТОПРИМЕЧАТЕЛЬНОСТИ ИЗ ТАБЛИЦЫ

    $id = $_GET['id'];

    // запись в базу
    $pdo = \Connection::getConnection();
    // подготовим запрос
    $query = $pdo->prepare("DELETE FROM `places` WHERE `id`=:id");
    // выполним запрос
    $query->execute(['id'=>$id]);
    
    // возврат на страницу редактирования достопримечателностей
    header('Location: ../places.php')

?>

