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
    <link rel="stylesheet" href="css/admin.css">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

</head>

<body>
    <div id="containerPage">
        <div class="cabinet">
            <!-- рисуем меню кабинета из файла cabinet-menu.php -->
            <?php include "cabinet-menu.php";?>

        <!-- Проверка наличия переданного id -->
        <?php 
        if (isset($_GET["id"])) { ?>

            <div class="work-area">
                <div class="work-area__title">
                    <h1>РЕДАКТИРОВАТЬ ГОСТИНИЦУ</h1>
                </div>

                <div class="edit-place">

                <?php 
                    $hotels = Hotels::getLinesApiId($_GET['id']);
                    $hotel = (object)$hotels[0];
                ?>

                    <!-- Собираем данные одного элемента для таблицы гостиниц -->
                    <form action="works/edit-hotel.php" method="post" class="edit-place__form" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $hotel->id;?>"> 
                        <p>Название гостиницы</p><input type="text" id="name" name="name" value="<?= $hotel->name;?>">
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"><?= $hotel->{'short-desc'};?></textarea>
                        <p>Месторасположение</p><input type="text" id="location" name="location" value="<?= $hotel->location;?>">                    
                        <p>Ссылка на сайт</p><input type="text" id="link" name="link" value="<?= $hotel->link;?>">                    

                        <!-- картинка для карточки -->
                        <p>
                        <div class="img-title-form">Изображениe для карточки гостиницы
                            <div class="img-title-prew-hotel"><img src="<?= '../client/' . $hotel->image;?>" /></div>
                            <input type="hidden" name="image" value="<?= $hotel->image;?>">  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                            

                        <div>
                            <a href="card-hotel.php?id=<?= $hotel->id;?>"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
                            <button class="btn-admin" type="submit">Сохранить</button>
                        </div>


                    </form>
                </div>

                <?php } else { ?> 
            <div class="work-area">
                <div class="work-area__title">
                    <h1>ДОБАВИТЬ ГОСТИНИЦУ</h1>
                </div>

                <div class="edit-place">

                    <!-- Собираем данные одного элемента для таблицы гостиниц -->
                    <form action="works/edit-hotel.php" method="post" class="edit-place__form" enctype="multipart/form-data">

                        <p>Название гостиницы</p><input type="text" id="name" name="name" value="">
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"></textarea>
                        <p>Месторасположение</p><input type="text" id="location" name="location" value="">                    
                        <p>Ссылка на сайт</p><input type="text" id="link" name="link" value="">                    

                        <!-- картинка для карточки -->
                        <p>
                        <div class="img-title-form">Изображениe для карточки гостиницы
                            <div class="img-title-prew-hotel"><img></div>
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                            

                        <div>
                            <a href="card-hotel.php"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
                            <button class="btn-admin" type="submit">Сохранить</button>
                        </div>


                    </form>
                </div>
                
                <?php } ?>  
            </div>
        </div>
    </div>

    <script src="js/prewImg.js"></script>
    <script src="js/main.js"></script> 

</body>
</html>