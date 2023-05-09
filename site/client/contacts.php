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
    <div class="container-page d-flex">
        <!-- HEADER -->
        <header class="header">
            <?php include('header.php'); ?>
        </header>
        <!-- /HEADER -->

        <main>

                <div class="breadcrumbs-container">
                            <ul class="breadcrumbs-list">
                                <li>
                                    <a href="index.php">Главная</a>
                                </li>
                                    <p>Контакты</p>
                                </li>
                            </ul>
                        </div>
                <div class="contacts-container">  
                <div class="contacts">  
                        
                <?php 
                    $data = Contacts::getLinesApi(); 
                    $contact = (object)$data[0];
                ?>
                    <h2>Наши контакты:</h2>
                    <div class="line"><p>Телефон:</p><a href="tel:+<?= $contact->phone;?>" target="_blank">+<?= $contact->phone;?></a></div>  
                    <div class="line"><p>Электронная почта:</p><a href="mailto:<?= $contact->mail;?>" target="_blank"><?= $contact->mail;?></a></div>
                    <div class="line"><p>Вконтакте:</p><a href="https://vk.com/<?= $contact->vk;?>" target="_blank">vk.com</a></div>
                    <div class="line"><p>Телеграм:</p><a href="tg://resolve?domain=<?= $contact->telegram;?>" target="_blank">telegram.me</a></div> 
                    <div class="line"><p>Whatsapp:</p><a href="whatsapp://send?phone=<?= $contact->whatsapp;?>" target="_blank">whatsapp.me</a></div>
                </div>
            </div>

        </main>
        
        
        <?php include "footer.php";?>
    </div>

    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>