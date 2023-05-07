<?php
require_once('../../classes/autoload.php');

    $phone = $_POST['phone'];
    $mail = $_POST['mail'];
    $telegram = $_POST['telegram'];
    $whatsapp = $_POST['whatsapp'];
    $vk = $_POST['vk'];


    $pdo = \Connection::getConnection();
    //подготовим запрос
    $query = $pdo->prepare("UPDATE `contacts` SET `phone`=:phone, `mail`=:mail, `telegram`=:telegram, `whatsapp`=:whatsapp, `vk`=:vk WHERE `id`=1");

    $query->execute(['phone'=>$phone, 'mail'=>$mail, 'telegram'=>$telegram, 'whatsapp'=>$whatsapp, 'vk'=>$vk]);
    
    header('Location: ../contacts.php')

?>

