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
        <?php include "cabinet-menu.php";?>

            <div class="work-area">
                <div class="work-area__title">
                    <h1>ОТЗЫВЫ</h1>
                </div>
            
                <div class="work-area__contaner">
                    <div class="catalog-container">

                        <!-- НОВЫЕ ОТЗЫВЫ -->
                        <div class="new-reviews">
                            <div class="reviews-category">Новые отзывы на проверку</div>


                            <div class="new-reviews__container">
                                <?php
                                    $reviews = Reviews::getLinesApiStatus(2); 
                                    foreach ($reviews as $review) {
                                ?>

                                    <div class="reviews"> 
                                        <p>Имя:</p><div><?= $review['name'];?></div> 
                                        <p>Фото:</p><div><?= $review['photo'];?></div> 
                                        <p>Заголовок:</p><div><?= $review['title'];?></div> 
                                        <p>Описание:</p><div><?= $review['description'];?></div>  
                                        <p>Рейтинг:</p><div><?= $review['rating'];?></div> 
                                        <p>Дата:</p><div><?= $review['date-time'];?></div> 
                                        <p>Способ связи:</p><div><?= $review['connection'];?></div> 
                                    </div>

                                <?php } ?>
                            </div>

                        </div>

                        <!-- ОПУБЛИКОВАННЫЕ ОТЗЫВЫ -->
                        <div class="view-reviews">
                            <span title="показать" class="show-reviews" onclick="showViewReviews()">&#128065; </span><div class="reviews-category">Опубликованные отзывы</div>
                        
                            <div class="view-reviews__container d-none">
                                <?php
                                    $reviews = Reviews::getLinesApiStatus(1); 
                                    foreach ($reviews as $review) {
                                ?>

                                    <div class="reviews"> 
                                        <p>Имя:</p><div><?= $review['name'];?></div> 
                                        <p>Фото:</p><div><?= $review['photo'];?></div> 
                                        <p>Заголовок:</p><div><?= $review['title'];?></div> 
                                        <p>Описание:</p><div><?= $review['description'];?></div>  
                                        <p>Рейтинг:</p><div><?= $review['rating'];?></div> 
                                        <p>Дата:</p><div><?= $review['date-time'];?></div> 
                                        <p>Способ связи:</p><div><?= $review['connection'];?></div> 
                                    </div>

                                <?php } ?>
                            </div>
                        </div>

                        <!-- СНЯТЫЕ С ПУБЛИКАЦИИ -->
                        <div class="hidden-reviews">
                            <span title="показать" class="show-reviews" onclick="showHiddenReviews()">&#128065; </span><div class="reviews-category">Снятые с публикации отзывы</div>
                        
                            <div class="hidden-reviews__container d-none">
                                <?php
                                    $reviews = Reviews::getLinesApiStatus(0); 
                                    foreach ($reviews as $review) {
                                ?>

                                    <div class="reviews"> 
                                        <p>Имя:</p><div><?= $review['name'];?></div> 
                                        <p>Фото:</p><div><?= $review['photo'];?></div> 
                                        <p>Заголовок:</p><div><?= $review['title'];?></div> 
                                        <p>Описание:</p><div><?= $review['description'];?></div>  
                                        <p>Рейтинг:</p><div><?= $review['rating'];?></div> 
                                        <p>Дата:</p><div><?= $review['date-time'];?></div> 
                                        <p>Способ связи:</p><div><?= $review['connection'];?></div> 
                                    </div>

                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>


    <script src="js/main.js"></script>
</body>
</html>