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
                    <form action="works/test-edit-tour.php" method="post" class="edit-tour__form">



                         ФОТО ДЛЯ ГАЛЕРЕИ json
                        <div id="img-carousel_">
                            <?php 
                                if ($data[0]['img-carousel'] !== "[]" && $data[0]['img-carousel'] !== NULL) {
                                    $imgCarousel = json_decode($data[0]['img-carousel'], true);
                                    for ($i = 0; $i < count($imgCarousel); $i++) { ?>
                                        <div class="img-carousel-item">
                                            <img style="width: 100px" src="<?= '../client/' . $imgCarousel[$i]; ?>">
                                            <input type=hidden name="img-carousel[<?= $i; ?>]" value="<?= $imgCarousel[$i]; ?>">
                                            <div class="d-inline-block" onclick="hiddenDeleteImgCarousel()">X удалить</div>
                                            <div class="d-none delete-img-carousel">
                                            <h6>Удалить это изображение?<h6>
                                                <div class="d-inline-block delete-true" onclick="deleteImgCarousel()">ДА</div>
                                                <div class="d-inline-block delete-false" onclick="notDeleteImgCarousel()">ОТМЕНА</div>
                                            </div>
                                
                                        </div> 
                                        <?php }   
                                }
                            ?>
                            <button>+ Добавить ещё из ГАЛЕРЕИ</button>
                            <button>+ Загрузить файлы</button>
                            
                        </div>
                        

                        <a href="test-card-tour.php?id=13">Не сохранять</a>
                        <button type="submit">Сохранить</button>

                    </form>
                </div>
                



            </div>

        </div>
    </div>


    <script src="js/admin.js"></script>
</body>
</html>