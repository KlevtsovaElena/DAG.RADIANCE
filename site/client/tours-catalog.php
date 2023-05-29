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

            <div class="article">
        
                <section class="tours-main">
                    <div class="text-tours-main">
                        <p>
                        Вы ознакомились с разнообразием и уникальностью нашего края. 
                        
                        Теперь давайте отправимся в туры - любой уголок замечательного места на земле 
                        </p>
                    </div>
                    <div class="img-tours-main"><img class="car-mountains" src="./img/tour/car-mountain.jpg" alt="Автотур"></div>
                </section>
                        
                <section>
                    <div class="catalog-container">
                    <?php $data = Tour::getLinesApi();
                    foreach ($data as $tour) { ?>

                            <div class="d-flex catalog-card tour-item tour-card-catalog tour-card m-10">
                                <div class="tour-item__img-container">
                                    <div class="tour-item__img" style="background-image: url('<?= $tour['img-title'];?>');"> </div>
                                </div>
                                <div class="tour-item__hover">
                                    <a href="<?= $tour['link'] ?> " class="block card-item__btn tour-btn" target="_blank">На сайт</a>
                                </div> 
                            </div>
                    <?php };?>
                    </div>
                </section>

                <section class="guides">
                    <p class="ta-center fs-18">Также предлагаем вам подборку ссылок, где лучшие гиды Дагестана</p>
                    <div class="catalog-container">
                        <?php $guides = Guide::getLinesApi();
                        foreach ($guides as $guide) { ?>

                        <div class="guide m-10">
                            <div class="guide-img" style="background-image: url('<?=$guide['img-title'];?>');"></div>
                            <div class="guide-link"><a href="<?=$guide['link'];?>" class="card-item__btn guide-btn " target="_blank">Гиды</a></div>
                        </div>

                        <?php } ?>
                    </div>
                </section>

            </div>

            <div class="two-buttons">
                <a href="../index.php" class="card-btn card-item__btn btn-big btn-theme">На главную</a>
                <a href="places-catalog.php" class="card-btn card-item__btn btn-big btn-theme btn-long">Достопримечательности</a>
            </div>
            
    
    
        </main>
        
        <?php include "footer.php";?>
        
    </div>
    
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>