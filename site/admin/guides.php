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
                    <h1>Гиды</h1>
                    <a href="card-guide.php"><button class="btn-admin">+ Добавить сайт с гидами</button></a>
                </div>

                <div class="work-area__contaner">

                    <div class="catalog-container">
               
                        <?php 
                            $guides = Guide::getLinesApi(); 
                            foreach ($guides as $guide) {
                        ?>

                            <div class="guide catalog-card_effect">
                    
                                <div class="guide-img" style="background-image: url('../client/<?=$guide['img-title'];?>')"></div>
                                <div class="guide-link"><a href="#"><button class="card-item__btn guide-btn ">Гиды</button></a></div>
                            
                                <div class="edit-card">
                                    <a href="card-guide.php?id=<?= $guide['id']; ?>" class="d-block"><button class="btn-black">&#9998 Изменить</button></a>
                                    <button class="btn-delete btn-black" onclick="deleteCard()">X Удалить</button>
                                </div>
                                <div class="delete-card delete-card-guide d-none">
                                    <a href="../admin/works/delete-guide.php?id=<?= $guide['id']; ?>"><div onclick="hiddenDeleteBlock()" class="btn-admin btn-delete">Удалить</div></a>
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