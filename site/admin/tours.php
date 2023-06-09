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

</head>
<body>
    
<div id="containerPage">
        <div class="cabinet">
        <?php include "cabinet-menu.php";?>


            <div class="work-area">
                <div class="work-area__title">
                    <h1>ТУРЫ</h1>
                    <a href="card-tour.php" class="btn-admin">+ Добавить новый тур</a>
                </div>



                <div class="work-area__contaner">
                <div class="catalog-container">
                <?php $data = Tour::getLinesApi();
                    foreach ($data as $tour) { ?>
                    <div class="d-flex card-item catalog-card tour-item tour-card catalog-card_effect" style="background-image: url('../client/<?= $tour['img-title'] ?>');">
                    
                        <div class="edit-card">
                            <a href="card-tour.php?id=<?= $tour['id']; ?>" class="d-block btn-admin btn-black">&#9998 Изменить</a>

                            <button class="btn-delete btn-black" onclick="deleteCard()">X Удалить</button>
                        
                        </div>
                        <div class="delete-card d-none">
                            <a href="../admin/works/delete-tour.php?id=<?= $tour['id']; ?>"><div onclick="hiddenDeleteBlock()" class="btn-admin btn-delete">Удалить</div></a>
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