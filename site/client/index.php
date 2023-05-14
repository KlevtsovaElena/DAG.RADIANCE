<?php require_once('../classes/autoload.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="./fonts/PlayFairDisplay/stylefonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body class="body-index">

    <!-- HEADER -->
    <header class="header index">
        <div class="footer-links">
            <?php 
                $data = Contacts::getLinesApi(); 
                $contact = (object)$data[0];
            ?>
                <a href="tel:+<?= $contact->phone;?>" class="linkPic" target="_blank"><img src="img/icons/tel.png" alt="Позвонить" class="linkPic"></a>  
                <a href="mailto:<?= $contact->mail;?>" class="linkPic" target="_blank"><img src="img/icons/mail.jpg" alt="Написать" class="linkPic"></a>
                <a href="https://vk.com/<?= $contact->vk;?>" target="_blank"><img src="img/icons/vk.jpg" alt="Написать в VK" class="linkPic"></a>  
                <a href="tg://resolve?domain=<?= $contact->telegram;?>" target="_blank"><img src="img/icons/tg.png" alt="Написать в телеграмм" class="linkPic"></a> 
                <a href="whatsapp://send?phone=<?= $contact->whatsapp;?>" target="_blank"><img src="img/icons/wtsp.png" alt="Написать в whatsapp" class="linkPic"></a>               
            </div>
        <?php include('header.php'); ?>
        <div class="header-index">
            <div class="header-index__title">Welcome to Russia</div>
            <h1 class="header-index__desc">Удивительный и уникальный Дагестан!</h1>
            <a href="#geography-and-climate"><p class="header-index__scroll">Начать путешествие</p></a>
        </div>
    </header>
    <!-- /HEADER -->

    <main>

         <!-- 3 заглавных темы -->
        <section class="article">
            <div id="geography-and-climate" class="article-container">
                <div class="article-text">
                    <div class="article-text__title">Уникальная природа</div>
                    <div class="article-text__desc">Горы, море и бархан!</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.</p>
                    <a href="geography-and-climate.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <a href="geography-and-climate.php">
                        <img class="small-img" src="./img/place/Горы-small.jpg" alt="">
                        <img class="big-img d-none" src="./img/place/Горы2.jpg" alt="">
                    </a>
                </div>
            </div>

            <div class="article-container">
                <div class="article-text">
                    <div class="article-text__title">Кавказский Вавилон</div>
                    <div class="article-text__desc">Самый колоритный регион России!</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.</p>
                    <a href="national-pecularities.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <a href="national-pecularities.php">
                        <img class="small-img" src="./img/place/кавказский-вавилон2-small.jpg" alt="">
                        <img class="big-img d-none" src="./img/place/кавказский-вавилон.jpeg" alt="">
                    </a>
                </div>
            </div>

            <div class="article-container">
                <div class="article-text">
                    <div class="article-text__title">Чтение традиций</div>
                    <div class="article-text__desc">Гостеприимство, праздники и танцы!</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.</p>
                    <a href="fests-and-traditions.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <a href="fests-and-traditions.php">
                        <img class="small-img" src="./img/place/Танец-small.jpg" alt="">
                        <img class="big-img d-none" src="./img/place/Танец.jpg" alt="">
                    </a>
                </div>
            </div>

        </section>
        <!--/ 3 заглавных темы -->

        <!-- БЛОК Достопримечательности -->
        <section class="places card-container">

            <!-- Заголовок -->
            <div class="card-text"><h2>Достопримечательности</h2></div>

            <!-- Слайдер -->
            <div class="slider ">
                <div class="slider-container">
                    <div class="card-carousel d-flex slider-wrapper slick-slide">

                    <?php 

                    $data = Place::getLinesApiShort(6);

                    foreach ($data as $place) { ?>

                        <div class="d-flex card-item catalog-card slide height-card-item" style="background-image: url('./<?= $place['img-title'];?>');">
                            <div class="card-item__title height-card-item_title">
                                <h3><?= $place['title'];?></h3>
                            </div>
                            <div class="card-item__desc height-card-item__desc">
                                <?= $place['short-desc'];?>
                            </div>
                            <a href="card-place.php?id=<?= $place['id']; ?>"><button class="card-btn card-item__btn catalog-btn btn-yellow height-card-item_btn">Подробнее</button></a>
                        </div>

                    <?php };?>

                    </div>
                </div>

                <!-- Кнопка Смотреть всё -->

                <a href="places-catalog.php" class="card-btn block"><button class="card-item__btn btn-big btn-yellow">Смотреть все</button></a>
            </div>
                

        </section>
        <!-- БЛОК Достопримечательности --> 
        
        <!-- Панорамные картинки -->
        <section class="panorama">            
                <div class="bg-img">
                <div class="bg-gost-white">
                    <a href="#videovisit"><button class="card-item__btn btn-panorama btn-yellow">Смотреть видео</button></a>
                </div> 
                </div>
   
                
        </section>
        <!-- /Панорамные картинки -->

        <!-- БЛОК ТУРЫ -->
        <section class="tours card-container">

            <!-- Заголовок -->
            <div class="card-text"><h2>Туры</h2></div>

            <!-- Слайдер -->
            <div class="slider ">
                <div class="slider-container">
                    <div class="card-carousel d-flex slider-wrapper slick-slide">

                        <?php 

                        $data = Tour::getLinesApiShort(6); 

                        foreach ($data as $tour) { ?>

                            <div class="d-flex card-item  catalog-card slide height-card-item" style="background-image: url('./<?= $tour['img-title'];?>');">
                                <div class="card-item__title height-card-item_title">
                                    <h3><?= $tour['title'];?> </h3>
                                </div>
                                <div class="card-item__desc height-card-item_title">
                                    <?= $tour['short-desc'];?>
                                </div>
                                <a href="card-tour.php?id=<?=$tour['id']; ?>"><button class="card-btn card-item__btn catalog-btn btn-yellow height-card-item_btn">Подробнее</button></a>
                            
                            </div>

                        <?php };?>

                    </div>
                </div>
            </div>

            <!-- Кнопка Смотреть всё -->
            <a href="tours-catalog.php" class="card-btn block"><button class="card-item__btn btn-big btn-yellow">Смотреть все</button></a>

        </section>
        <!-- БЛОК ТУРЫ -->

    </main>

    <iframe id="videovisit" class="video-card" width="100%" height="400" src="https://www.youtube.com/embed/M10qSqWxsgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    
    <?php include "footer.php";?>


    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/index.slider.js"></script>
    <script src="js/main.js"></script>


</body>

</html>