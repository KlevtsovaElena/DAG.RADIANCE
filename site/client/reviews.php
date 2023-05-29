<?php require_once('../classes/autoload.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/reviews.css">

</head>

<body>
    <div class="container-page d-flex">
        <!-- HEADER -->
        <header class="header">
            <?php include('header.php'); ?>
        </header>
        <!-- /HEADER -->

        <main>

            <div class="breadcrumbs-container">
                <ul class="breadcrumbs-list">
                    <li>
                        <a href="../index.php">Главная</a>
                    </li>
                        <p>Отзывы</p>
                    </li>
                </ul>
            </div>

            <div class="reviews-container">  
                 

    <!-- Здесь будет отрисовка самих отзывов, поля ниже -->
    <div>
                <h2>Отзывы наших посетителей:</h2>    
                <?php 
                    $reviews = Reviews::getLinesApi(); 
                    foreach ($reviews as $review) {
                ?>
                <div class="reviews"> 
                    <p>Имя:</p><div><?= $review['name'];?></div> 
                    <p>Фото:</p><div><?= $review['photo'];?></div> 
                    <p>Заголовок:</p><div><?= $review['title'];?></div> 
                    <p>Описание:</p><div><?= $review['description'];?></div>  
                    <p>Рейтинг:</p><div><?= $review['rating'];?></div> 
                    <p>Дата:</p><div><?= $review['date-time'];?></div> 
                </div>
                <?php } ?>
    </div>
    <!-- Здесь будет отрисовка самих отзывов, поля ниже -->


    <!-- Форма для отправки отзыва -->
            <section class="review-send">

                <button class="reviews-btn " onclick="showReviewForm()">Оставить отзыв</button>

                <form class="form-reviews">
                    <p class="form-reviews__text">Оставьте свой отзыв</p>
                    <input type="text" id="name" name="name" placeholder="Имя*" value="" required>
                    <div class="form-reviews__photo">
                        <p>Выберите фото</p>
                        <div class="photo-prew"><img src="img/icons/avatar.jpg"></div>
                        <input type="hidden" id="photo-default" name="photo-default" value="img/icons/avatar.jpg">
                        <input type="file"  id="photo" name="photo" accept="image/png, image/jpg, image/jpeg">                               
                    </div>
                    <textarea id="title" name="title" placeholder="Заголовок" rows="2" value=""></textarea>
                    <textarea id="description" name="description"  placeholder="Текст отзыва*" rows="5" value="" required></textarea>
                    <input type="text" id="rating" name="rating" placeholder="Оценка*" value="" required>
                    <input  type="text" id="connection" name="connection" placeholder="Способ связи" value="">

                    <button class="form-reviews__btn" type="submit">ОТПРАВИТЬ</button>
                </form>

            </section>

        </main>
        
        
        <?php include "footer.php";?>
    </div>

    <script src="js/main.js"></script>
    <script src="js/prewImg.js"></script>

</body>

</html>