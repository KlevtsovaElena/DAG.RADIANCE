<?php
require_once('../classes/autoload.php');

?>




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
                    <h1>РЕДАКТИРОВАТЬ ТУР</h1>
                </div>

                <div class="edit-tour">

                <?php 
                    $data = Tour::getLinesApiId($_GET['id']);
                    $tour = (object)$data[0];
                ?>
                    <form action="works/edit-tour.php" method="post" class="edit-tour__form">
                        <input type="hidden" name="id" value="<?= $tour->id;?>"> 
                        <label for="title"> НАЗВАНИЕ ТУРА
                            <input type="text" id="title" name="title" value="<?= $tour->title;?>"> 
                        </label>
                        <label for="short-desc"> КРАТКОЕ ОПИСАНИЕ
                            <input type="text" id="short-desc" name="short-desc" value="<?= $tour->{'short-desc'};?>"> 
                        </label>
                        <label for="full-desc"> ПОЛНОЕ ОПИСАНИЕ
                            <input type="text" id="full-desc" name="full-desc" value="<?= $tour->{'full-desc'};?>"> 
                        </label>
                        <label for="price"> СТОИМОСТЬ
                            <input type="text" id="price" name="price" value="<?= $tour->price;?>"> 
                        </label>
                        <label for="img-title"> ФОТО ДЛЯ КАРТОЧКИ
                            <input type="text" id="img-title" name="img-title" value="<?= $tour->{'img-title'};?>"> 
                        </label>
                        <label for="img-carousel"> ФОТО ДЛЯ ГАЛЕРЕИ
                            <input type="text" id="img-carousel" name="img-carousel" value="<?= $tour->{'img-carousel'};?>"> 
                        </label>


                        <button type="submit">Сохранить</button>

                    </form>
                </div>
                



            </div>

        </div>
    </div>


    <script src="js/admin.js"></script>
</body>
</html>