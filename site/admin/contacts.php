<?php require_once('../classes/autoload.php'); ?>
<?php require('check.php');?>
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
                        <label for="phone"> ТЕЛЕФОН
                            <input type="text" id="phone" name="phone" value="<?= $contact->phone;?>"> 
                        </label>
                        <label for="mail"> ЭЛЕКТРОННАЯ ПОЧТА
                            <input type="text" id="mail" name="mail" value="<?= $contact->mail;?>"> 
                        </label>
                        <label for="telegram"> TELEGRAM
                            <input type="text" id="telegram" name="telegram" value="<?= $contact->telegram;?>"> 
                        </label>
                        <label for="whatsapp"> WHATSAPP
                            <input type="text" id="whatsapp" name="whatsapp" value="<?= $contact->whatsapp;?>"> 
                        </label>
                        <label for="vk"> VK
                            <input type="text" id="vk" name="vk" value="<?= $contact->vk;?>"> 
                        </label>


                        <button class="btn-admin" type="submit">Сохранить</button>

                    </form>
                </div>


                


                <!-- <form>
                    <input type="text"  placeholder="first_name">
                    <input type="text"  placeholder="last_name">
                    <input type="text"  placeholder="login">
                    <input type="text"  placeholder="role">
                    <button onclick="addAccount()">Добавить учётную запись</button>
            
                </form> -->
            </div>

        </div>
    </div>


    <script src="js/main.js"></script>
</body>
</html>