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
        <nav class="nav">
            <div class="nav-wrapper d-flex">
                <div class="logo">DAG.RADIANCE</div>
                <div class="nav-items">
                    <ul>
                        <li><a href="#">О регионе</a></li>
                        <li><a href="#">Достопримечательности</a></li>
                        <li><a href="#">Туры</a></li>
                        <li><a href="#">Контакты</a></li>
                    </ul>
                </div>
                <div class="account"><a href="#">Аккаунт/Поиск</a></div>
                <button class="btn-burger"><span class="nav-burger"></span></button>
            </div>
        </nav>
        <div class="mobile-nav">
            <ul>
                <li><a href="#">О регионе</a></li>
                <li><a href="#">Достопримечательности</a></li>
                <li><a href="#">Туры</a></li>
                <li><a href="#">Контакты</a></li>
            </ul>
        </div>
        <div class="header-index">
            <div class="header-index__title">Welcome to Russia</div>
            <h1 class="header-index__desc">Удивительный и уникальный Дагестан!</h1>
            <p class="header-index__scroll">scroll down</p>
        </div>
    </header>
    <!-- /HEADER -->

    <main>

         <!-- 3 заглавных темы -->
        <section class="article">
            <div class="article-container">
                <div class="article-text">
                    <div class="article-text__title">Уникальная природа</div>
                    <div class="article-text__desc">Горы, море и бархан!</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.</p>
                    <a href="1.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <img class="small-img" src="./img/place/Горы-small.jpg" alt="">
                    <img class="big-img d-none" src="./img/place/Горы2.jpg" alt="">
                </div>
            </div>

            <div class="article-container">
                <div class="article-text">
                    <div class="article-text__title">Кавказский Вавилон</div>
                    <div class="article-text__desc">Самый колоритный регион России!</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.</p>
                    <a href="2.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <img class="small-img" src="./img/place/кавказский-вавилон2-small.jpg" alt="">
                    <img class="big-img d-none" src="./img/place/кавказский-вавилон.jpeg" alt="">
                </div>
            </div>

            <div class="article-container">
                <div class="article-text">
                    <div class="article-text__title">Чтение традиций</div>
                    <div class="article-text__desc">Гостеприимство, праздники и танцы!</div>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.</p>
                    <a href="3.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <img class="small-img" src="./img/place/Танец-small.jpg" alt="">
                    <img class="big-img d-none" src="./img/place/Танец.jpg" alt="">
                </div>
            </div>

        </section>
        <!--/ 3 заглавных темы -->

        
        <!-- Панорамные каринки -->
        <section class="panorama">
            <div class="carousel-panorama">
                <div class="bg-img"><img src="./img/bg/panorama1.jpg" alt=""></div>
                <div class="bg-img"><img src="./img/bg/panorama2.jpg" alt=""></div>
                <div class="bg-img"><img src="./img/bg/panorama3.jpg" alt=""></div>
                <div class="bg-img"><img src="./img/bg/panorama4.jpeg" alt=""></div>
                <div class="bg-img"><img src="./img/bg/panorama5.jpg" alt=""></div>
                <div class="bg-img"><img src="./img/bg/panorama6.jpg" alt=""></div>
            </div>
        </section>
    <!-- /Панорамные каринки -->





        <!-- БЛОК Достопримечательности -->
        <div class="places card-contaner">

            <!-- Заголовок -->
            <div class="card-text"><h2>Достопримечательности</h2></div>

            <!-- Слайдер -->
            <div class="slider ">
                <div class="card-carousel d-flex slider-wrapper slick-slide">

                    <?php 

                    $data = Place::getLinesApiShort(4);

                    foreach ($data as $place) { ?>

                        <div class="d-flex card-item catalog-card slide" style="background-image: url('./<?= $place['img-title'];?>');">
                            <div class="card-item__title">
                                <h3><?= $place['title'];?></h3>
                            </div>
                            <div class="card-item__desc">
                                <?= $place['short-desc'];?>
                            </div>
                            <a href="cardOnePlace.php?id= <?= $place['id']; ?>"><button class="card-btn card-item__btn catalog-btn btn-yellow">Подробнее</button></a>
                        </div>

                    <?php };?>

                </div>
            </div>

            <!-- Кнопка Смотреть всё -->

            <a href="places-catalog.php" class="card-btn block"><button class="card-item__btn btn-yellow">Смотреть все</button></a>

        </div>
        <!-- БЛОК Достопримечательности -->



        <!-- БЛОК ТУРЫ -->
        <div class="tours card-contaner">

            <!-- Заголовок -->
            <div class="card-text"><h2>Туры</h2></div>

            <!-- Слайдер -->
            <div class="slider ">
                <div class="card-carousel d-flex slider-wrapper slick-slide">

                    <?php 

                    $data = Tour::getLinesApiShort(4); 

                    foreach ($data as $tour) { ?>

                        <div class="d-flex card-item catalog-card slide" style="background-image: url('./<?= $tour['img-title'];?>');">
                            <div class="card-item__title">
                                <h3><?= $tour['title'];?> </h3>
                            </div>
                            <div class="card-item__desc">
                                <?= $tour['short-desc'];?>
                            </div>
                            <a href="cardOneTour.php?id= <?= $tour['id']; ?>"><button class="card-btn card-item__btn catalog-btn btn-yellow">Подробнее</button></a>
                           
                        </div>

                    <?php };?>

                </div>
            </div>

            <!-- Кнопка Смотреть всё -->
            <a href="tours-catalog.php" class="card-btn block"><button class="card-item__btn btn-yellow">Смотреть все</button></a>

        </div>
        <!-- БЛОК ТУРЫ -->



            


    </main>

    <iframe class="video-card" width="100%" height="400" src="https://www.youtube.com/embed/M10qSqWxsgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
    
    <!-- FOOTER  -->
    
    <footer >
            <div class="footer-container">
                <div class="footer-nav">
                    <div class="logo">DAG.RADIANCE</div>
                    <div class="footer-menu_container">
                        <div class="footer-nav__item">
                            <h4 class="footer-nav__title">Меню</h4>
                            <div class="footer-nav__links">
                                <a href="places-catalog.html">Достопримечательности</a>
                                <a href="tours-catalog.html">Туры</a>
                                <a href="contacts.html">Контакты</a>
                            </div>
                        </div>
                        <div class="footer-nav__item">
                            <h4 class="footer-nav__title">О регионе</h4>
                            <div class="footer-nav__links">
                                <a href="1.html">География и климат</a>
                                <a href="2.html">Колорит</a>
                                <a href="3.html">Праздники и традиции</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-links">

                <?php $data = Contacts::getLinesApi(); 
                        $contact = (object)$data[0];?>
                    <a href="tel:+<?= $contact->phone;?>" class="linkPic" target="_blank"><img src="img/icons/tel.png" alt="Позвонить" class="linkPic"></a>  
                    <a href="mailto:<?= $contact->mail;?>" class="linkPic" target="_blank"><img src="img/icons/mail.png" alt="Написать" class="linkPic"></a>
                    <a href="https://vk.com/<?= $contact->vk;?>" target="_blank"><img src="img/icons/vk.png" alt="Написать в VK" class="linkPic"></a>  
                    <a href="tg://resolve?domain=<?= $contact->telegram;?>" target="_blank"><img src="img/icons/tg.png" alt="Написать в телеграмм" class="linkPic"></a> 
                    <a href="whatsapp://send?phone=<?= $contact->whatsapp;?>" target="_blank"><img src="img/icons/wtsp.png" alt="Написать в whatsapp" class="linkPic"></a>  
                        
       
            </div>
        </div>
    </footer>
    <!-- /FOOTER  -->


    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>