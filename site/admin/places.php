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
                    <h1>ДОСТОПРИМЕЧАТЕЛЬНОСТИ</h1>
                </div>

                <a href="card-place.php" class="btn-admin">+ ДОБАВИТЬ НОВОЕ МЕСТО</a>

                <div class="work-area__contaner">
                <div class="catalog-container">
                <?php $data = Place::getLinesApi();
                    foreach ($data as $place) { ?>
                    <div class="d-flex card-item catalog-card catalog-card_effect" style="background-image: url('../client/<?= $place['img-title'] ?>');">
                        <div class="card-item__title">
                            <h3><?= $place['title']; ?></h3>
                        </div>
                        <div class="card-item__desc">
                            <?= $place['short-desc']; ?>
                        </div>
                        <!-- ЗАМЕНИТЬ НА ПЕРЕХОД НА НУЖНУЮ КАРТОЧКУ -->
                        <a href="" class="d-block card-item__btn catalog-btn btn-yellow">Подробнее</a>

                        <div class="edit-card">
                            <a href="card-place.php?id=<?= $place['id']; ?>" class="d-block  btn-admin  btn-black">&#9998 Изменить</a>

                            <button class="btn-delete btn-black" onclick="deleteCard()">X Удалить</button>
                        
                        </div>
                        <div class="delete-card d-none">
                            <a href="../admin/works/delete-place.php?id=<?= $place['id']; ?>" ><div onclick="hiddenDeleteBlock()" class="btn-admin btn-delete">Удалить</div></a>
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