<?php
$lastName = $_POST['last_name'];
$login = $_POST['login'];
$to = $_POST['role'];
$from = "evchemez@mail.ru";
$subject = "Временный пароль";

$message = "
Имя: $lastName /n,
Логин: $login
";

mail($to, $subject, $message, "From: $from");

echo "Сообщение удчно отправлено";
?>
