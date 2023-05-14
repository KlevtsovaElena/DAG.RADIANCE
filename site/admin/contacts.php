<?php require_once('../classes/autoload.php'); ?>
<?php $profile = require('works/check.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="css/admin.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>
<body>
    
    <div id="containerPage">
        <div class="cabinet">
        <?php include "cabinet-menu.php";?>


            <div class="work-area">
                <div class="work-area__title">
                    <h1>КОНТАКТЫ</h1>
                </div>


                <div class="edit-contacts">

                <?php 
                $data = Contacts::getLinesApi();
                $contact = (object)$data[0]; 
                ?>
                    <form action="works/edit-contacts.php" method="post" class="edit-contacts__form">



                        <div class="d-flex"><p>Telegram</p><input type="text" id="telegram" name="telegram" value="<?= $contact->telegram;?>"> 
                        <p>Whatsapp</p><input type="text" id="whatsapp" name="whatsapp" value="<?= $contact->whatsapp;?>"> </div>
                        <div class="d-flex"><p>Телефон</p><input type="text" id="phone" name="phone" value="<?= $contact->phone;?>">
                        <p>VK</p><input type="text" id="vk" name="vk" value="<?= $contact->vk;?>"></div>
                        
                        <p>Электронная почта</p><input type="text" id="mail" name="mail" value="<?= $contact->mail;?>">

                        <p><button class="btn-admin" type="submit">Сохранить</button></p>

                    </form>
                </div>

            </div>

        </div>
    </div>


    <script src="js/main.js"></script>
</body>
</html>