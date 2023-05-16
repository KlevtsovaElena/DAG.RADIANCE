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
                <div class="work-area__title">
                    <h1>Гостиницы</h1>
                    <a href="card-hotel.php"><button class="btn-admin">+ Добавить гостиницу/отель</button></a>
                </div>

                <div class="work-area__contaner">
                <div class="catalog-container">
                <?php $hotels = Hotels::getLinesApi();
                    foreach ($hotels as $hotel) { ?>
                    <div class="d-flex card-item catalog-card catalog-card_effect" style="background-image: url('../client/<?= $hotel['image'] ?>');">
                        <div class="card-item__title">
                            <h3><?= $hotel['name']; ?></h3>
                        </div>
                        <div class="card-item__desc catalog-price">
                            <span><?= $hotel['location']; ?></span>
                        </div>

                        <a href="" class="d-block"><button class="card-item__btn catalog-btn btn-yellow">Подробнее</button></a>

                        <div class="edit-card">
                            <a href="card-hotel.php?id=<?= $hotel['id']; ?>" class="d-block"><button class="btn-black">&#9998 Изменить</button></a>

                            <button class="btn-delete btn-black" onclick="deleteCard()">X Удалить</button>
                        
                        </div>
                        <div class="delete-card d-none">
                            <a href="../admin/works/delete-hotel.php?id=<?= $hotel['id']; ?>"><div onclick="hiddenDeleteBlock()" class="btn-admin btn-delete">Удалить</div></a>
                            <div  onclick="hiddenDeleteBlock2()" class="btn-admin btn-reset">Отмена</div>
                        </div>                      
                           
                    </div>
                <?php } ?>
                </div>
               </div> 

            </div>

            <div class="work-area">
                <div class="work-area__title">
                    <h1>Гостевые домики</h1>
                    <a href="card-house.php"><button class="btn-admin">+ Добавить гостевой домик</button></a>
                </div>

                <div class="work-area__contaner">
                <div class="catalog-container">
                <?php $houses = Guesthouses::getLinesApi();
                    foreach ($houses as $house) { ?>
                    <div class="d-flex card-item catalog-card catalog-card_effect" style="background-image: url('../client/<?= $house['image'] ?>');">
                        <div class="card-item__title">
                            <h3><?= $house['name']; ?></h3>
                        </div>

                        <div class="card-item__desc catalog-price">
                            <span><?= $house['location']; ?></span>
                        </div>

                        <a href="" class="d-block"><button class="card-item__btn catalog-btn btn-yellow">Подробнее</button></a>

                        <div class="edit-card">
                            <a href="card-house.php?id=<?= $house['id']; ?>" class="d-block"><button class="btn-black">&#9998 Изменить</button></a>

                            <button class="btn-delete btn-black" onclick="deleteCard()">X Удалить</button>
                        
                        </div>
                        <div class="delete-card d-none">
                            <a href="../admin/works/delete-house.php?id=<?= $house['id']; ?>"><div onclick="hiddenDeleteBlock()" class="btn-admin btn-delete">Удалить</div></a>
                            <div  onclick="hiddenDeleteBlock2()" class="btn-admin btn-reset">Отмена</div>
                        </div>                      
                           
                    </div>
                <?php } ?>
                </div>
               </div> 

            </div>

        </div>
    </div>


    <script src="js/main.js"></script>

</body>
</html>