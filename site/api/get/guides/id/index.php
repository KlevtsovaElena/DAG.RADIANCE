<?php
//чтобы получить доступ из нашей странички
header('Access-Control-Allow-Origin: *');

require_once('../../../../classes/autoload.php');

if (isset($_GET['id']) && $_GET['id'] !== '') {
    $sqlText = 'SELECT * FROM `' . Guide::TABLE . '` WHERE id =  ' . $_GET['id'];
} else {
    $sqlText = 'SELECT * FROM `' . Guide::TABLE . '` WHERE id =  1';
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