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

    <!-- Здесь будет отрисовка самих отзывов, поля ниже -->

            </div>

        </main>
        
        
        <?php include "footer.php";?>
    </div>

    <script src="js/main.js"></script>

</body>

</html>