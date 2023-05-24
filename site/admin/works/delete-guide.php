<?php
require_once('../../classes/autoload.php');

// УДАЛЕНИЕ ЗАПИСИ ИЗ ТАБЛИЦЫ

    $id = $_GET['id'];

    // запись в базу
    $pdo = \Connection::getConnection();
    // подготовим запрос
    $query = $pdo->prepare("DELETE FROM `guides` WHERE `id`=:id");
    // выполним запрос
    $query->execute(['id'=>$id]);
    
    // возврат на страницу редактирования 
    header('Location: ../guides.php')

?>

