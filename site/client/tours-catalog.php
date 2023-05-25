<?php require_once('../classes/autoload.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/catalog.css">

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
            <div class="title-catalog-page">Наши туры</div>
            <div class="breadcrumbs-container">
                <ul class="breadcrumbs-list">
                    <li>
                        <a href="../index.php">Главная</a>
                    </li>
                        <p>Все туры</p>
                    </li>
                </ul>
            </div>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">

                            <div class="text-left-img-right d-flex align-start">
                                <div class="title-text">
                                    <p>
                                    Вы ознакомились с разнообразием и уникальностью нашего края. 
                                    <br>
                                    Теперь давайте отправимся в туры - любой уголок замечательного места на земле 
                                    </p>
                                </div>
                                <img class="mountains" src="./img/tour/car-mountain.jpg" alt="">
                            </div>
                    
                    </div>
                </div>
            </section>
    
            <section>
                <div class="catalog-container">
                <?php $data = Tour::getLinesApi();
                foreach ($data as $tour) { ?>

                        <div class="d-flex card-item catalog-card tour-item tour-card">
                            <div class="tour-item__img-container">
                                <div class="tour-item__img" style="background-image: url('<?= $tour['img-title'];?>');"> </div>
                            </div>
                            <div class="tour-item__hover">
                                <a href="<?= $tour['link'] ?> " class="block" target="_blank"><button class="card-item__btn tour-btn">На сайт</button></a>
                            </div> 
                        </div>
                <?php };?>
                </div>
            </section>

            <section class="guides">
                <p>Также предлагаем вам подборку ссылок, где лучшие гиды Дагестана</p>
                <div class="catalog-container">
                    <div class="guide">
                        <div class="guide-img"></div>
                        <div class="guide-link"><a href="#"><button class="card-item__btn guide-btn ">Гиды</button></a></div>
                    </button>
                </div>
            </section>
<style>
    .guide {
        width: 300px;
        height: 150px;
        background-color: #ffffff;
        
    }
    .guide-img {
        width: 300px;
        height: 90px;
        background-color: red;
    }
    </style>



            <div class="two-buttons">
                <a href="../index.php" class="card-btn"><button class="card-item__btn btn-big btn-theme">На главную</button></a>
                <a href="places-catalog.php" class="card-btn"><button class="card-item__btn btn-big btn-theme btn-long">Достопримечательности</button></a>
            </div>
            
    
    
        </main>
        
        <?php include "footer.php";?>
        
    </div>
    
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>