<?php
require_once('../../classes/autoload.php');

// УДАЛЕНИЕ ЗАПИСИ ИЗ ТАБЛИЦЫ

    $id = $_GET['id'];

    // запись в базу
    $pdo = \Connection::getConnection();
    // подготовим запрос
    $query = $pdo->prepare("DELETE FROM `guest-houses` WHERE `id`=:id");
    // выполним запрос
    $query->execute(['id'=>$id]);
    
    // возврат на страницу редактирования туров
    header('Location: ../hotels.php')

?>

