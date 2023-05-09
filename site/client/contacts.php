<?php require_once('../classes/autoload.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/contacts.css">

    <link rel="stylesheet" href="./fonts/PlayFairDisplay/stylefonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <nav class="nav">
            <div class="nav-wrapper d-flex">
                <div class="logo">DAG.RADIANCE</div>
                <div class="nav-items">
                    <ul>
                        <li><a href="1.php">О регионе</a></li>
                        <li><a href="places-catalog.php">Достопримечательности</a></li>
                        <li><a href="tours-catalog.php">Туры</a></li>
                        <li><a href="contacts.php">Контакты</a></li>
                    </ul>
                </div>
                <div class="account"><a href="#">Аккаунт/Поиск</a></div>
                <button class="btn-burger"><span class="nav-burger"></span></button>
            </div>
        </nav>
        <div class="mobile-nav">
            <ul>
                <li><a href="1.php">О регионе</a></li>
                <li><a href="places-catalog.php">Достопримечательности</a></li>
                <li><a href="tours-catalog.php">Туры</a></li>
                <li><a href="contacts.php">Контакты</a></li>
            </ul>
        </div>
    </header>
    <!-- /HEADER -->

    <main>

    <div class="contacts-container">  
            <div class="contacts">  
                          
                <h2>Наши контакты:</h2>
                <div class="line"><p>Телефон:</p> <a href="tel:+" target="_blank">+7(999)-999-99-99</a></div>  
                <div class="line"><p>Электронная почта:</p> <a href="mailto:" target="_blank">email@gmail.com</a></div>
                <div class="line"><p>Вконтакте:</p>   <a href="https://vk.com/" target="_blank">vk.com</a></div>
                <div class="line"><p>Телеграм:</p> <a href="tg://resolve?domain=" target="_blank">telegram.me</a></div> 
                <div class="line"><p>Whatsapp:</p> <a href="whatsapp://send?phone=" target="_blank">whatsapp.me</a></div>
            </div>
        </div>

    </main>
    
    
    <?php include "footer.php";?>


    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>