<?php
require_once('../../classes/autoload.php');

// РЕДАКТИРОВАНИЕ КОНТАКТОВ В ТАБЛИЦЕ

    // разнесём данные по переменным из массива $POST
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $telegram = $_POST['telegram'];
    $whatsapp = $_POST['whatsapp'];
    $vk = $_POST['vk'];


    // запись в базу
    $pdo = \Connection::getConnection();
    // подготовим запрос
    $query = $pdo->prepare("UPDATE `contacts` SET `phone`=:phone, `mail`=:mail, `telegram`=:telegram, `whatsapp`=:whatsapp, `vk`=:vk WHERE `id`=1");
    // выполним запрос
    $query->execute(['phone'=>$phone, 'mail'=>$mail, 'telegram'=>$telegram, 'whatsapp'=>$whatsapp, 'vk'=>$vk]);
    
    // возврат на страницу редактирования контактов
    header('Location: ../contacts.php')

?>

