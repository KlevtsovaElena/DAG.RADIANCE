<?php

require_once('../../classes/autoload.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
require 'phpmailer/src/Exception.php';

//вытащим адрес электронной почты владельца из БД
$contacts = Contacts::getLinesAPI();
$addressMail = $contacts['0']['mail'];


$mail = new PHPMailer(true);
$mail->CharSet = 'UTF-8';
$mail->setLanguage('ru', 'phpmailer/language/');
$mail->IsHTML(true);

// $mail->SMTPDebug = SMTP::DEBUG_SERVER;

//настройки smtp
$mail->isSMTP();
$mail->Host = 'smtp.mail.ru';
$mail->SMTPAuth = true;

//здесь можно поменять адрес и пароль эл почты, с которой уходят сообщения
$mail->Username = 'dagradiance@mail.ru';
$mail->Password = 'r2vKDk4ZAt9Esx9vrvDs';

//настройки smtp
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
$mail->Port = 465;

//от кого
$mail->setFrom('dagradiance@mail.ru');
//кому
$mail->addAddress($addressMail);


//собираем текст сообщения в зависимости от переданных данных

//проверяем данные с какой формы были переданы
if ($_POST['formName'] == 'formFeedback') {
    //форма обратной связи

    //тема письма
    $mail->Subject = "Заявка с сайта. Форма обратной связи";

    //соберём тело письма
    if (trim($_POST['phone']) !== '' && trim($_POST['mail']) == '') {
        $body = 'Вам поступила заявка с сайта от клиента по имени <b>' . $_POST['name'] .'</b>, телефон <b>' .$_POST['phone'] . '</b>';
        $altBody = 'Вам поступила заявка с сайта от клиента по имени ' . $_POST['name'] .', телефон ' .$_POST['phone'];
    } else if (trim($_POST['mail']) !== '' && trim($_POST['phone']) == '') {
        $body = 'Вам поступила заявка с сайта от клиента по имени <b>' . $_POST['name'] .'</b>, электронная почта <b>' .$_POST['mail'] . '</b>';
        $altBody = 'Вам поступила заявка с сайта от клиента по имени ' . $_POST['name'] .', электронная почта ' .$_POST['mail'];
    } else if (trim($_POST['mail']) !== '' && trim($_POST['phone']) !== ''){
        $body = 'Вам поступила заявка с сайта от клиента по имени <b>' . $_POST['name'] .'</b>, телефон <b>' .$_POST['phone'] . '</b>, электронная почта: <b>' . $_POST['mail'] . '</b>';
        $altBody = 'Вам поступила заявка с сайта от клиента по имени ' . $_POST['name'] .', телефон ' .$_POST['phone'] . ', электронная почта: ' . $_POST['mail'];
    }




//здесь собираем письмо для других форм (например, анкета) по аналогии выше
//т.е. определяем subject, body и altBody
} else {
    //тема письма
    $mail->Subject = "Заявка";
}


//текст внутри письма
$mail->Body = $body;

//сообщение обычным текстом без поддержки html
$mail->AltBody = $altBody;


//отправляем собранное сообщение
try { 
    $mail->send();
    $message = "Заявка успешно отправлена!";
} catch (Exception $e){
    $message = "Ошибка! Заявка не отправлена";
}

$response = ['message' => $message];

header('Content-type: application/json');
echo json_encode($response, JSON_UNESCAPED_UNICODE);

// данные почты
// dagradiance@mail.ru
// MgM-Pe7-F6B-CWE
// r2vKDk4ZAt9Esx9vrvDs
?>

