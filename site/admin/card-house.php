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
                    <h1>РЕДАКТИРОВАТЬ ГОСТЕВОЙ ДОМ</h1>
                </div>

                <div class="edit-place">

                <?php 
                    $houses = Guesthouses::getLinesApiId($_GET['id']);
                    $house = (object)$houses[0];
                ?>

                    <!-- Собираем данные одного элемента для таблицы  -->
                    <form action="works/edit-house.php" method="post" class="edit-place__form" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $house->id;?>"> 
                        <p>Название дома</p><input type="text" id="name" name="name" value="<?= $house->name;?>">
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"><?= $house->{'short-desc'};?></textarea>
                        <p>Месторасположение</p><input type="text" id="location" name="location" value="<?= $house->location;?>">                    
                        <p>Ссылка на сайт</p><input type="text" id="link" name="link" value="<?= $house->link;?>">                    

                        <!-- картинка для карточки -->
                        <p>
                        <div class="img-title-form">Изображениe для карточки
                            <div class="img-title-prew img-title-prew-hotel"><img src="<?= '../client/' . $house->image;?>" /></div>
                            <input type="hidden" name="image" value="<?= $house->image;?>">  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                            

                        <div>
                            <a href="card-house.php?id=<?= $house->id;?>"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
                            <button class="btn-admin" type="submit">Сохранить</button>
                        </div>


                    </form>
                </div>

                <?php } else { ?> 
            <div class="work-area">
                <div class="work-area__title">
                    <h1>ДОБАВИТЬ ГОСТЕВОЙ ДОМ</h1>
                </div>

                <div class="edit-place">

                    <!-- Собираем данные одного элемента для таблицы  -->
                    <form action="works/edit-house.php" method="post" class="edit-place__form" enctype="multipart/form-data">

                        <p>Название дома</p><input type="text" id="name" name="name" value="">
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"></textarea>
                        <p>Месторасположение</p><input type="text" id="location" name="location" value="">                    
                        <p>Ссылка на сайт</p><input type="text" id="link" name="link" value="">                    

                        <!-- картинка для карточки -->
                        <p>
                        <div class="img-title-form">Изображениe для карточки
                            <div class="img-title-prew img-title-prew-hotel"><img></div>  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                            

                        <div>
                            <a href="card-house.php"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
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