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
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"><?= $tour->{'short-desc'};?></textarea>
                        <p>Полное описание</p><textarea id="full-desc" name="full-desc"><?= $tour->{'full-desc'};?></textarea>
                        <p>Стоимость</p><input type="text" id="price" name="price" value="<?= $tour->price;?>">                     

                        <!-- картинка для маленькой карточки -->
                        <p>
                        <div class="img-title-form">Изображениe для карточки тура
                            <div>(Рекомендованные параметры 300X400)</div>
                            <div class="img-title-prew"><img src="<?= '../client/' . $tour->{'img-title'};?>" /></div>
                            <input type="hidden" name="img-title" value="<?= $tour->{'img-title'};?>">  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                        <!-- галерея КАРУСЕЛИ-->
                        <p>
                        <div class="img-carousel">Изображения для карусели тура
                            <div>(Рекомендованное количество от 3 изображений)</div>
                            <?php if ($data[0]['img-carousel'] !== "[]" && $data[0]['img-carousel'] !== NULL) {
                                $imgCarousel = json_decode($data[0]['img-carousel'], true);
                                for ($i = 0; $i < count($imgCarousel); $i++) { ?>
                                    <div class="img-carousel-item">
                                        <img style="width: 100px" src="<?= '../client/' . $imgCarousel[$i]; ?>">
                                        <input type=hidden name="img-carousel[<?= $i; ?>]" value="<?= $imgCarousel[$i]; ?>">
                                        <div class="d-inline-block cursor btn-admin btn-delete" onclick="hiddenDeleteImgCarousel()">X удалить</div>
                                        <div class="d-none delete-img-carousel">
                                            <h6>Удалить это изображение?<h6>
                                            <div class="d-inline-block btn-admin btn-reset" onclick="notDeleteImgCarousel()">ОТМЕНА</div>
                                            <div class="d-inline-block btn-admin btn-delete" onclick="deleteImgCarousel()">ДА</div>
                                        </div>
                                    </div> 
                                <?php }   
                            }?>
                            

                            <input type="file"  id="new-img-carousel" name="new-img-carousel[]" multiple accept="image/png, image/jpg, image/jpeg">  
                            <div class="img-carousel-prew"></div>        
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
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"></textarea>
                        <p>Полное описание</p><textarea id="full-desc" name="full-desc"></textarea>
                        <p>Стоимость</p><input type="text" id="price" name="price" value="0">                      

                        <!-- картинка для маленькой карточки -->
                        <p>
                        <div class="img-title-form">Изображение для карточки тура
                            <div>(Рекомендованные параметры 300X400)</div>
                            <div class="img-title-prew"><img></div>  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                        <!-- галерея КАРУСЕЛИ-->
                        <p>
                        <div class="img-carousel">Изображения для карусели тура
                        <div>(Рекомендованное количество от 3 изображений)</div>
                            <input type="file"  id="new-img-carousel" name="new-img-carousel[]" multiple accept="image/png, image/jpg, image/jpeg">  
                            <div class="img-carousel-prew"></div>        
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