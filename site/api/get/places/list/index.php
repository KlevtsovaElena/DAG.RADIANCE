<?php
//чтобы получить доступ из нашей странички
header('Access-Control-Allow-Origin: *');

require_once('../../../../classes/autoload.php');

$sqlText = 'SELECT * FROM `' . Place::TABLE . '` WHERE 1 ';

//создание объекта для подключения к БД
$pdo = Connection::getConnection();

$result = $pdo->query($sqlText);
 
$tableItem = [];
while ($row = $result->fetch())
{
    $tableItem[] = $row;
} 

echo json_encode($tableItem, JSON_UNESCAPED_UNICODE);