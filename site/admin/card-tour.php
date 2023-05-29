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
                    <h1>РЕДАКТИРОВАТЬ ТУР</h1>
                </div>

                <div class="edit-tour">

                <?php 
                    $data = Tour::getLinesApiId($_GET['id']);
                    $tour = (object)$data[0];
                ?>

                    <!-- Собираем данные одного тура для таблицы туров -->
                    <form action="works/edit-tour.php" method="post" class="edit-tour__form" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $tour->id;?>"> 
                        <p>Название тура</p><input type="text" id="title" name="title" value="<?= $tour->title;?>">
                        <p>Ссылка</p><input type="text" id="link" name="link" value="<?= $tour->link;?>">
                        <!-- картинка для маленькой карточки -->
                        <p>
                        <div class="img-title-form">Изображениe для карточки тура
                            <div>(Рекомендованные параметры 300X400)</div>
                            <div class="img-title-prew"><img src="<?= '../client/' . $tour->{'img-title'};?>" /></div>
                            <input type="hidden" name="img-title" value="<?= $tour->{'img-title'};?>">  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>

                        <div>
                            <a href="card-tour.php?id=<?= $tour->id;?>"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
                            <button class="btn-admin" type="submit">Сохранить</button>
                        </div>


                    </form>
                </div>

                <?php } else { ?> 
            <div class="work-area">
                <div class="work-area__title">
                    <h1>ДОБАВИТЬ ТУР</h1>
                </div>

                <div class="edit-tour">
                    <!-- Собираем данные одного тура для таблицы туров -->
                    <form action="works/edit-tour.php" method="post" class="edit-tour__form" enctype="multipart/form-data">

                        <p>Название тура</p><input type="text" id="title" name="title" value="">
                        <p>Ссылка</p><input type="text" id="link" name="link" value="">
                        <!-- картинка для маленькой карточки -->
                        <p>
                        <div class="img-title-form">Изображение для карточки тура
                            <div>(Рекомендованные параметры 300X400)</div>
                            <div class="img-title-prew"><img></div>  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                       
                        <div>
                            <a href="card-tour.php"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
                            <button type="submit">Сохранить</button>
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