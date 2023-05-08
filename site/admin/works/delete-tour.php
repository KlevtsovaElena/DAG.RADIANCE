<?php
require_once('../../classes/autoload.php');

// УДАЛЕНИЕ ЗАПИСИ ТУРА ИЗ ТАБЛИЦЫ

    $id = $_GET['id'];

    // запись в базу
    $pdo = \Connection::getConnection();
    // подготовим запрос
    $query = $pdo->prepare("DELETE FROM `tours` WHERE `id`=:id");
    // выполним запрос
    $query->execute(['id'=>$id]);
    
    // возврат на страницу редактирования туров
    header('Location: ../tours.php')

?>

