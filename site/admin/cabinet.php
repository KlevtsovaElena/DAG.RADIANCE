<?php require_once('../classes/autoload.php'); ?>
<?php $profile = require('works/check.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPannel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../client/css/style.css">    
    <link rel="stylesheet" href="../client/css/catalog.css">
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
            <h1>Admin panel</h1> 
            <div class="d-flex-list">
                <a href="tours.php"><div class="list-admin-panel" style="background-color: #b48dd3;">
                    <div class="list-ap-title">Туры</div>
                    <div class="list-ap-img">
                        <img src="../client/img/icons/adventure-backpack-svgrepo-com.svg" >
                        <div style="font-size: 18px">&#9998 К редактированию</div>
                    </div>
                </div></a>
                <a href="places.php"><div class="list-admin-panel" style="background-color: #68e365;">
                    <div class="list-ap-title">Достопримечательности</div>
                    <div class="list-ap-img">
                        <img src="../client/img/icons/binoculars-svgrepo-com.svg" >
                        <div style="font-size: 18px">&#9998 К редактированию</div>
                    </div>
                </div></a>
                <a href="contacts.php"><div class="list-admin-panel" style="background-color: #5bcfc5;">
                    <div class="list-ap-title">Контакты</div>
                    <div class="list-ap-img">
                        <img src="../client/img/icons/contacts-svgrepo-com.svg" >
                        <div style="font-size: 18px">&#9998 К редактированию</div>
                    </div>
                </div></a>
                <a href="hotels.php"><div class="list-admin-panel" style="background-color: #ff9871;">
                    <div class="list-ap-title">Гостиницы и домики</div>
                    <div class="list-ap-img">
                        <img src="../client/img/icons/hotel-svgrepo-com.svg" >
                        <div style="font-size: 18px">&#9998 К редактированию</div>
                    </div>
                </div></a>
                <?php if($profile['role']=='admin') { ?>
                <a href="add-account.php"><div class="list-admin-panel" style="background-color: #fd7e14;">
                    <div class="list-ap-title">Создать аккаунт</div>
                    <div class="list-ap-img">
                        <img src="../client/img/icons/account-avatar-person-svgrepo-com.svg" >
                        <div style="font-size: 18px">&#9998 К редактированию</div>
                    </div>
                </div></a>
                <?php } ?>
                <a href="bot.php"><div class="list-admin-panel" style="background-color: #709fba;">
                    <div class="list-ap-title">Мониторинг бота</div>
                    <div class="list-ap-img">
                        <img src="../client/img/icons/robot-svgrepo-com.svg" >
                        <div style="font-size: 18px">&#9993 Перейти к сообщениям</div>
                    </div>
                </div></a>


            </div>
        </div>

    </div>

</div>  

    <script src="js/main.js"></script>
</body>
</html>