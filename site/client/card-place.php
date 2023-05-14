<?php
require_once('../classes/autoload.php');
// получим данные именно по этой карточке
$data = Place::getLinesApiId($_GET['id']);

$obj = (object)$data[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="css/lightbox.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container-page d-flex">
        <header class="header">
            <?php include('header.php'); ?>
        </header>
    
        <main>
            <div class="breadcrumbs-container">
                <ul class="breadcrumbs-list">
                    <li>
                        <a href="../index.php">Главная</a>
                    </li>
                    <li>
                        <a href="places-catalog.php">Все достопримечательности</a>
                    </li>
                    <li>
                        <p><?= $data[0]['title'] ?></p>
                    </li>
                </ul>
            </div>

            <section class="card">
                <div class="card-container">
                    <div class="card-container__text">
                        <div class="card-text__title">
                            <h3><?= $data[0]['title'] ?></h3>
                        </div>
                        <div class="card-text__desc">
                            <p> <?= $data[0]['full-desc'] ?> </p>
                        </div>
                    </div>

                    <?php $imgCarousel = json_decode($data[0]['img-carousel'], true); ?>

                    
                    
                    <!-- Слайдер с нижней мини-галереей -->
                    <div class="double-slider_container">
                        <div class="slider big-slider">
                        
                            <div class="card-carousel d-flex slider-wrapper slick-slide slider-for">
                            <?php for ($i = 0; $i < count($imgCarousel); $i++) { ?>
                                <div class="d-flex card-item slide gallery-item" data-index="<?= $i+1 ?>" img-src="<?= $imgCarousel[$i]; ?>" style="background-image: url('./<?= $imgCarousel[$i]; ?>');">
                                </div>
                                <?php }; ?>
                            </div>
                              
                        </div>
                        
                        <!-- Нижняя мини-галерея слайдера -->
                        <div class="slider mini-slider">
                            <div class="card-carousel d-flex slider-wrapper slick-slide slider-nav">
                            <?php for ($i = 0; $i < count($imgCarousel); $i++) { ?>
                                <div class="d-flex card-item_small slide" style="background-image: url('./<?= $imgCarousel[$i]; ?>');">
                                </div>
                                <?php }; ?>
                            </div>
                                   
                        </div>
                    </div>
                
                
            </section>

                <div class="two-buttons">
                    <a href="places-catalog.php" class="card-btn"><button class="card-item__btn btn-big btn-yellow">Смотреть все</button></a>
                    <a href="../index.php" class="card-btn"><button class="card-item__btn btn-big btn-yellow">На главную</button></a>
                </div>
            </div>
    
        </main>
        
        <?php include "footer.php";?>
        
    </div>
 


    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/card.slider.fix.js"></script>
    <script src="js/lightbox.slider.js"></script>
    <script src="js/main.js"></script>
</body>

</html>

<style>
    .slick-dots {
        position: absolute;
        bottom: -40px;
        padding: 0;
    }

    .slick-dots li + li{
        margin-left: 3px;
    }
    .slick-dots li button{
        font-size: 0;
        height: 10px;
        width: 10px;
        border-radius: 50%;
        background-color: #ffffff;
        padding: 0;
        margin: 0;
        cursor: pointer;
        border: none;
    }

    .slick-dots .slick-active button {
        background-color: #FFD1A0;
    }

    .slick-dots li{
        display: inline-block;
    }
    
    .btn-slider-next, .btn-slider-prev {
        top: 35%;
    }

</style>