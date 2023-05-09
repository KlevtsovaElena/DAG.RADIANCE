<?php 
require_once('../classes/autoload.php');

if(!isset($_COOKIE['admin'])) {
    header('Location: index.php');
    die();
} else {
    $_POST['token'] = $_COOKIE['admin'];
    $admin = Admin::check();

    if (!$admin) {
        header('Location: index.php');
        die();
    } else {
        return $admin;
    }
}
?>