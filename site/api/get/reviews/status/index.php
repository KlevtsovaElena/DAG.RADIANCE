<?php
//чтобы получить доступ из нашей странички
header('Access-Control-Allow-Origin: *');

require_once('../../../../classes/autoload.php');
$status = $_GET['status'];
$sqlText = 'SELECT * FROM `' . Reviews::TABLE . '` WHERE status= ' . $status;

//создание объекта для подключения к БД
$pdo = Connection::getConnection();

$result = $pdo->query($sqlText);
 
$tableItem = [];
while ($row = $result->fetch())
{
    $tableItem[] = $row;
} 

echo json_encode($tableItem, JSON_UNESCAPED_UNICODE);