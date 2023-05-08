<?php require_once('../classes/autoload.php'); ?>

<?php 
$check = require('check.php');

var_dump($check);

if ($check['success'] == 'false') {
    header('Location: ../card-tour.php?id=' . 13);
    die();
}

?>