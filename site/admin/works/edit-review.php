<?php
require_once('../../classes/autoload.php');

// РЕДАКТИРОВАНИЕ КОНТАКТОВ В ТАБЛИЦЕ

    // разнесём данные по переменным из массива $POST

    $id = intVal($_POST['id']);
    $statusReview = intVal($_GET['status']);

    // запись в базу
    $pdo = \Connection::getConnection();
    // подготовим запрос
    $query = $pdo->prepare("UPDATE `reviews` SET `status`=:statusReview WHERE `id`=:id");
    // выполним запрос
    $query->execute(['statusReview'=>$statusReview, 'id'=>$id]);
    
    // возврат на страницу Отзывов
     header('Location: ../reviews.php')

?>

