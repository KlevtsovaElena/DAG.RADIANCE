<?php 

if (isset($_COOKIE['admin'])) {
    return $_COOKIE['admin'];
} else {
    return "нет куки";
}
?>
