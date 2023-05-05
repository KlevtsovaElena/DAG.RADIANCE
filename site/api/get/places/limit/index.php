<?php
//чтобы получить доступ из нашей странички
header('Access-Control-Allow-Origin: *');

require_once('../../../../classes/autoload.php');

if (isset($_GET['limit']) && $_GET['limit'] !== '') {
    $sqlText = 'SELECT * FROM `' . Place::TABLE . '` limit ' . $_GET['limit'];
} else {
    $sqlText = 'SELECT * FROM `' . Place::TABLE . '` WHERE 1';
}


//создание объекта для подключения к БД
$pdo = Connection::getConnection();

$result = $pdo->query($sqlText);
 
$tableItem = [];
while ($row = $result->fetch())
{
    $tableItem[] = $row;
} 

echo json_encode($tableItem, JSON_UNESCAPED_UNICODE);