<?php require_once('classes/autoload.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="client/css/slick.css">
    <link rel="stylesheet" href="client/css/style.css">
    <link rel="stylesheet" href="client/css/fonts.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body class="body-index">

    <!-- HEADER -->
    <header class="header index">

        <nav class="nav">
            <div class="nav-wrapper d-flex">
                <button class="btn-burger"><span class="nav-burger"></span></button>
            </div>            
        </nav>
        <div class="mobile-nav">
            <ul>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>О регионе</a>
                    <ul class="mobile-submenu">
                        <li><a href="client/geography-and-climate.php">География и климат</a></li>
                        <li><a href="client/national-pecularities.php">Особенности</a></li>
                        <li><a href="client/fests-and-traditions.php">Праздники и традиции</a></li>
                    </ul>
                </li>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>Помощь в организации отдыха</a>
                    <ul class="mobile-submenu">
                        <li><a href="client/route.php#plane">Авиаперелет</a></li>
                        <li><a href="client/route.php#train">Ж/д проезд</a></li>
                        <li><a href="client/route.php#car">Авто</a></li>
                    </ul>
                </li>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>Где остановиться</a>
                    <ul class="mobile-submenu">
                        <li><a href="client/housing.php#hotels">Отели</a></li>
                        <li><a href="client/housing.php#guesthouses">Гостевые домики</a></li>
                    </ul>
                </li>
                <li class="li-trigger"><a href="#"><span class="arrow"></span>Как отдохнуть</a>
                    <ul class="mobile-submenu">
                        <li><a href="client/places-catalog.php">Достопримечательности</a></li>
                        <li><a href="client/tours-catalog.php">Туры</a></li>
                        <li><a href="client/food.php">Рестораны</a></li>
                    </ul>
                </li>
                <!-- Развернутая версия мобильного меню без выпадающих пунктов -->
                <!-- <li><a href="client/geography-and-climate.php">О регионе</a>
                    <ul>
                        <li><a href="client/geography-and-climate.php#geography">География и климат</a></li>
                        <li><a href="client/national-pecularities.php">Особенности</a></li>
                        <li><a href="client/fests-and-traditions.php">Праздники и традиции</a></li>
                    </ul>
                </li>
                <li><a href="client/route.php">Помощь в организации отдыха</a>
                    <ul>
                        <li><a href="client/route.php#plane">Авиаперелет</a></li>
                        <li><a href="client/route.php#train">Ж/д проезд</a></li>
                        <li><a href="client/route.php#car">Авто</a></li>
                    </ul>
                </li>
                <li><a href="client/housing.php">Где остановиться</a>
                    <ul>
                        <li><a href="client/housing.php#hotels">Отели</a></li>
                        <li><a href="client/housing.php#guesthouses">Гостевые домики</a></li>
                    </ul>
                </li>
                <li><a href="client/places-catalog.php">Как отдохнуть</a>
                    <ul>
                        <li><a href="client/tours-catalog.php">Туры</a></li>
                        <li><a href="client/places-catalog.php">Достопримечательности</a></li>
                        <li><a href="client/food.php">Рестораны</a></li>
                    </ul>
                </li> -->
                <!-- <li><a href="#">Отзывы</a></li> -->
                <li><a href="client/contacts.php">Контакты</a></li>
                <div class="burger-links">
                    <?php 
                        $data2 = Contacts::getLinesApi(); 
                        $contact = (object)$data2[0];
                    ?>
                    <a href="tel:+<?= $contact->phone;?>" class="linkPic" target="_blank"><img src="client/img/icons/tel.png" alt="Позвонить" class="linkPic"></a>  
                    <a href="mailto:<?= $contact->mail;?>" class="linkPic" target="_blank"><img src="client/img/icons/mail.jpg" alt="Написать" class="linkPic"></a>
                    <a href="https://vk.com/<?= $contact->vk;?>" target="_blank"><img src="client/img/icons/vk.jpg" alt="Написать в VK" class="linkPic"></a>  
                    <a href="tg://resolve?domain=<?= $contact->telegram;?>" target="_blank"><img src="client/img/icons/tg.png" alt="Написать в телеграмм" class="linkPic"></a> 
                    <a href="whatsapp://send?phone=<?= $contact->whatsapp;?>" target="_blank"><img src="client/img/icons/wtsp.png" alt="Написать в whatsapp" class="linkPic"></a>               
                </div>
            </ul>
        </div>
    <div class="article">
        <div class="account" onclick="showFeedback()">Заказать звонок</div>

        <div class="header-index">
            <p class="header-index__desc">DAG.RADIANCE</p>
            <div class="header-index__title">welcome to Russia</div>

        </div>
        <div class="right-menu d-flex">
            <div class="triangles-wrap">
                <div class="triangle"><a href="#about">Про Дагестан</a></div>
                <div class="triangle"><a href="/client/route.php">Как добраться</a></div>
                <div class="triangle"><a href="/client/housing.php">Где остановиться</a></div>
            </div>
            <div class="nav-items-right">
                <h3>Меню</h3>
                <ul>
                    <li><a href="client/geography-and-climate.php">О регионе</a></li>
                        <ul>
                            <li><a href="client/geography-and-climate.php#geography">География и климат</a></li>
                            <li><a href="client/national-pecularities.php">Особенности</a></li>
                            <li><a href="client/fests-and-traditions.php">Праздники и традиции</a></li>
                        </ul>
                    <li><a href="client/route.php">Помощь в организации отдыха</a></li>
                        <ul>
                            <li><a href="client/route.php#plane">Авиаперелет</a></li>
                            <li><a href="client/route.php#train">Ж/д проезд</a></li>
                            <li><a href="client/route.php#car">Авто</a></li>
                        </ul>
                    <li><a href="client/housing.php">Где остановиться</a></li>
                        <ul>
                            <li><a href="client/housing.php#hotels">Отели</a></li>
                            <li><a href="client/housing.php#guesthouses">Гостевые домики</a></li>
                        </ul>
                    <li><a href="#tours">Как отдохнуть</a></li>
                        <ul>
                            <li><a href="client/tours-catalog.php">Туры</a></li>
                            <li><a href="client/places-catalog.php">Достопримечательности</a></li>
                            <li><a href="client/food.php">Рестораны</a></li>
                        </ul>
                    <!-- <li><a href="#">Где поесть</a></li>
                        <ul>
                            <li><a href="client/food.php">Рестораны</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Кафе</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Отзывы</a></li>
                        </ul> -->
                    <li><a href="client/contacts.php">Контакты</a></li>
                </ul>

            </div>
        </div>
        <!-- </div> -->
        </div>

        <div class="modalbox d-none" >
            <form class="modal-form">
                <h2>Остались вопросы?</h2>
                <h3>Оставь заявку, мы перезвоним!</h3>
                <p>Имя*</p><input type="text" id="name" name="name" placeholder="Имя" value="" required>
                <p>Телефон</p><input type="text" id="phone" name="phone" placeholder="+79999999999" value="">
                <p>Mail</p><input type="text" id="mail" name="mail"  placeholder="mail@mail.com" value="">
                <button class="modal-form__div modal-form__btn" onclick="sendExample()">ОТПРАВИТЬ</button>
            </form>
        </div>
    </header>
    <!-- /HEADER -->

    <main>
        <h2 class="welcome">Добро пожаловать на наш сайт и в наш уникальный, красивый и многонациональный край в составе Российской Федерации - в Республику Дагестан. Мы расскажем вам о самом главном: где это, как красиво и как здорово увидеть весь этот колорит своими глазами.</h2>
         <!-- 3 заглавных темы -->
        <section class="article main-sections">
            <div id="geography-and-climate" class="article-container main-page">
                <div class="article-text">
                    <div id="about" class="article-text__title">Уникальная природа</div>
                    <div class="article-text__desc">Горы, море и бархан!</div>
                    <p class="fs-22">
                    Мой Дагестан, расти, цвети. Всегда двукрылый и двуногий!<br>
                    Пусть в сказках будут три пути, Три молодца и три дороги…<br>
                    Не три струны и не одна На двух, пандур мой, пой, играя:<br>
                    Любовь — одна моя струна, А Дагестан — струна вторая.
                    </p>
                    <p align="right" class="fs-22">Расул Гамзатов</p>
                    <a href="client/places-catalog.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <a href="client/geography-and-climate.php">
                        <img class="small-img" src="client/img/section1/1-small.png" alt="geography-and-climate">
                        <img class="big-img d-none" src="client/img/section1/1-big.jpg" alt="geography-and-climate">
                    </a>
                </div>
            </div>

            <div class="article-container main-page short-article">
                <div class="article-text short-text">
                    <div class="article-text__title">Самый колоритный регион России!</div>
                    <div class="article-text__desc"></div>
                    <p class="fs-22">
                    Лезгин, Рутулец, Табасаранец, Агулец,<br>
                    Даргинец брат, плечом к плечу стоят.<br>
                    Цахурец, Лакец, Кумык, Аварец,<br>
                    В лезгинском танце как орлы парят.<br>
                    В единстве духа множество народов,<br>
                    Крепка их дружба, твердостью скалы.<br>
                    В сердечном братстве сила Дагестанцев,<br>
                    В бесстрашии воинов душа Нарын Калы.
                    </p>
                    <a href="client/national-pecularities.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <a href="client/national-pecularities.php">
                        <img class="small-img" src="client/img/section2/2-small-450.jpg" alt="national-pecularities">
                        <img class="big-img d-none" src="client/img/section2/2-big.jpg" alt="national-pecularities">
                    </a>
                </div>
            </div>

            <div class="article-container main-page">
                <div class="article-text">
                    <div class="article-text__title">Гостеприимство, праздники и танцы!</div>
                    <div class="article-text__desc"></div>
                    <p class=" fs-22">
                    Кто побывал один лишь только раз.<br>
                    Увидев красоту земную,<br>
                    оставит память в сердце тот Кавказ,<br>
                    который манит, радует, чарует.<br>
                    Здесь говорят на разных языках,<br>
                    но понимают друга с полуслова.<br>
                    Шумит как эхо в сказочных горах,<br>
                    хорошее лишь повторяя снова.

                    </p>
                    <a href="client/fests-and-traditions.php" class="article-text__more"> подробнее</a>
                </div>
                <div class="article-img">
                    <a href="client/fests-and-traditions.php">
                        <img class="small-img" src="client/img/section3/3-small.jpg" alt="fests-and-traditions">
                        <img class="big-img d-none" src="client/img/section3/12.jpg" alt="fests-and-traditions">
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

                    $data = Place::getLinesApi();

                    foreach ($data as $place) { ?>

                        <div class="d-flex card-item catalog-card slide height-card-item">
                            <div class="card-item__img" style="background-image: url('client/<?= $place['img-title'];?>');"> </div>
                            <div class="card-item__title height-card-item_title">
                                <h3><?= $place['title'];?></h3>
                            </div>
                            <div class="card-item__desc height-card-item__desc">
                                <?= $place['short-desc'];?>
                            </div>
                            <a href="client/card-place.php?id=<?= $place['id']; ?>" class="card-btn card-item__btn catalog-btn btn-theme height-card-item_btn">Подробнее</a>
                        </div>

                    <?php };?>

                    </div>
                </div>

                <!-- Кнопка Смотреть всё -->

                <a href="client/places-catalog.php" class="card-btn block card-item__btn btn-big btn-theme m-center">Смотреть все</a>
            </div>
                

        </section>
        <!-- БЛОК Достопримечательности --> 
        
        <!-- Панорамные картинки -->
        <section class="panorama">

                <div class="bg-img">
                <div class="bg-gost-white">
                    <a href="#videovisit" class="card-item__btn btn-panorama btn-theme">Смотреть видео</a>
                </div> 
                </div>
      
        </section>
        <!-- /Панорамные картинки -->

        <!-- БЛОК ТУРЫ -->
        <section class="tours card-container" id="tours">

            <!-- Заголовок -->
            <div class="card-text"><h2>Туры</h2></div>

            <!-- Слайдер -->
            <div class="slider ">
                <div class="slider-container">
                    <div class="card-carousel d-flex slider-wrapper slick-slide">

                    <?php 

                    $toures = Tour::getLinesApi();

                    foreach ($toures as $tour) { ?>

                        <div class="d-flex card-item slide catalog-card tour-item height-card-item tour-card tour-card-margin">
                            <div class="tour-item__img-container">
                                <div class="tour-item__img" style="background-image: url('client/<?= $tour['img-title'];?>');"> </div>
                            </div>
                            <div class="tour-item__hover">
                                <a href="<?= $tour['link'] ?> " class="block card-item__btn tour-btn" target="_blank">На сайт</a>
                            </div> 
                        </div>
                    <?php };?>

                    </div>
                </div>
            </div>

            <!-- Кнопка Смотреть всё -->
            <a href="client/tours-catalog.php" class="card-btn block card-item__btn btn-big btn-theme m-center">Смотреть все</a>

        </section>
        <!-- БЛОК ТУРЫ -->

    </main>

    <iframe id="videovisit" class="video-card" width="100%" height="400" src="https://www.youtube.com/embed/M10qSqWxsgU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
    
      <!-- FOOTER  -->
      <footer >
        <div class="footer-container">
            <div class="footer-nav">
                <a href="#"><div class="logo">DAG.RADIANCE</div></a>
                <div class="footer-menu_container">
                    <div class="footer-nav__item">
                        <h4 class="footer-nav__title">Меню</h4>
                        <div class="footer-nav__links">
                            <a href="client/route.php">Как добраться</a>
                            <a href="client/housing.php">Где остановиться</a>
                            <a href="client/places-catalog.php">Достопримечательности</a>
                            <a href="client/tours-catalog.php">Туры</a>
                            <a href="client/food.php">Где поесть</a>
                            <a href="client/contacts.php">Контакты</a>
                        </div>
                    </div>
                    <div class="footer-nav__item">
                        <h4 class="footer-nav__title">О регионе</h4>
                        <div class="footer-nav__links">
                            <a href="client/geography-and-climate.php">География и климат</a>
                            <a href="client/national-pecularities.php">Особенности</a>
                            <a href="client/fests-and-traditions.php">Праздники и традиции</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-links">
                <?php 
                    $data = Contacts::getLinesApi(); 
                    $contact = (object)$data[0];
                ?>
                <a href="tel:+<?= $contact->phone;?>" class="linkPic" target="_blank"><img src="client/img/icons/tel.png" alt="Позвонить" class="linkPic"></a>  
                <a href="mailto:<?= $contact->mail;?>" class="linkPic" target="_blank"><img src="client/img/icons/mail.jpg" alt="Написать" class="linkPic"></a>
                <a href="https://vk.com/<?= $contact->vk;?>" target="_blank"><img src="client/img/icons/vk.jpg" alt="Написать в VK" class="linkPic"></a>  
                <a href="tg://resolve?domain=<?= $contact->telegram;?>" target="_blank"><img src="client/img/icons/tg.png" alt="Написать в телеграмм" class="linkPic"></a> 
                <a href="whatsapp://send?phone=<?= $contact->whatsapp;?>" target="_blank"><img src="client/img/icons/wtsp.png" alt="Написать в whatsapp" class="linkPic"></a>  

            </div>
            <div class="credits">Сделано в МГТУ им Баумана</div>
        </div>   
    </footer>
    <!-- /FOOTER  -->
 
    <script src="client/js/jquery-3.6.4.min.js"></script>
    <script src="client/js/slick.min.js"></script>
    <script src="client/js/index.slider.js"></script>
    <script src="client/js/main.js"></script>


</body>

</html>