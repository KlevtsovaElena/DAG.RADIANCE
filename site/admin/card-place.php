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
                    <h1>РЕДАКТИРОВАТЬ ДОСТОПРИМЕЧАТЕЛЬНОСТЬ</h1>
                </div>

                <div class="edit-place">

                <?php 
                    $data = Place::getLinesApiId($_GET['id']);
                    $place = (object)$data[0];
                ?>

                    <!-- Собираем данные одного элемента для таблицы достоприм -->
                    <form action="works/edit-place.php" method="post" class="edit-place__form" enctype="multipart/form-data">

                        <input type="hidden" name="id" value="<?= $place->id;?>"> 
                        <p>Название места</p><input type="text" id="title" name="title" value="<?= $place->title;?>">
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"><?= $place->{'short-desc'};?></textarea>
                        <p>Полное описание</p><textarea id="full-desc" name="full-desc"><?= $place->{'full-desc'};?></textarea>
                        <p>Категория</p><input type="text" id="category" name="category" value="<?= $place->category;?>">
                        <p>Карта</p><textarea id="code-map" name="code-map" rows="4"><?= $place->{'code-map'};?></textarea>

                        <!-- картинка для маленькой карточки -->
                        <p>
                        <div class="img-title-form">Изображениe для карточки места
                            <div>(Рекомендованные параметры 300X400)</div>
                            <div class="img-title-prew"><img src="<?= '../client/' . $place->{'img-title'};?>" /></div>
                            <input type="hidden" name="img-title" value="<?= $place->{'img-title'};?>">  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                        <!-- галерея КАРУСЕЛИ-->
                        <p>
                        <div class="img-carousel">ИЗОБРАЖЕНИЯ ДЛЯ КАРУСЕЛИ МЕСТА
                            <div>(Рекомендованное количество от 3 изображений)</div>
                            <div>(Рекомендованные пропорции 1:2)</div>
                            <?php if ($data[0]['img-carousel'] !== "[]" && $data[0]['img-carousel'] !== NULL) {
                                $imgCarousel = json_decode($data[0]['img-carousel'], true);
                                for ($i = 0; $i < count($imgCarousel); $i++) { ?>
                                    <div class="img-carousel-item">
                                        <img style="width: 100px" src="<?= '../client/' . $imgCarousel[$i]; ?>">
                                        <input type=hidden name="img-carousel[<?= $i; ?>]" value="<?= $imgCarousel[$i]; ?>">
                                        <div class="d-inline-block cursor btn-admin btn-delete " onclick="hiddenDeleteImgCarousel()">X удалить</div>
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
                            <a href="card-place.php?id=<?= $place->id;?>"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
                            <button class="btn-admin" type="submit">Сохранить</button>
                        </div>


                    </form>
                </div>

                <?php } else { ?> 
            <div class="work-area">
                <div class="work-area__title">
                    <h1>ДОБАВИТЬ ДОСТОПРИМЕЧАТЕЛЬНОСТЬ</h1>
                </div>

                <div class="edit-place">
                    <!-- Собираем данные одного элемента для таблицы достоприм -->
                    <form action="works/edit-place.php" method="post" class="edit-place__form" enctype="multipart/form-data">

                        <p>Название места</p><input type="text" id="title" name="title" value="">
                        <p>Краткое описание</p><textarea id="short-desc" name="short-desc"></textarea>
                        <p>Полное описание</p><textarea id="full-desc" name="full-desc"></textarea>
                        <p>Категория</p><input type="text" id="category" name="category" value="нет">
                        <p>Карта</p><textarea id="code-map" name="code-map" rows="4"></textarea>                      

                        <!-- картинка для маленькой карточки -->
                        <p>
                        <div class="img-title-form">ИЗОБРАЖЕНИЕ ДЛЯ КАРТОЧКИ МЕСТА
                            <div>(Рекомендованные параметры 300X400)</div>
                            <div class="img-title-prew"><img></div>  
                            <input type="file"  id="new-img-title" name="new-img-title" accept="image/png, image/jpg, image/jpeg">                               
                        </div> 
                        </p>
                        <!-- галерея КАРУСЕЛИ-->
                        <p>
                        <div class="img-carousel">ИЗОБРАЖЕНИЯ ДЛЯ КАРУСЕЛИ МЕСТА
                            <div>(Рекомендованное количество от 3 изображений)</div>
                            <div>(Рекомендованные пропорции 1:2)</div>
                            <input type="file"  id="new-img-carousel" name="new-img-carousel[]" multiple accept="image/png, image/jpg, image/jpeg">  
                            <div class="img-carousel-prew"></div>        
                        </div>
                        </p>

                        <div>
                            <a href="card-place.php"><div class="btn-admin btn-reset">Сбросить изменения</div></a>
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