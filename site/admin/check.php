<?php 

if(!isset($_COOKIE['admin'])) {
    header('Location: index.php');
    die();
} 
?>