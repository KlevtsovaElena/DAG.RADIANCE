<?php require_once('../classes/autoload.php'); ?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/hotels.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

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
                        <p>Где остановиться</p>
                    </li>
                </ul>
            </div>


                

            <section class="article">
                <div class="inner_section">
                    <div class="article-text">
                        <div class="section-header">
                            <div class="article-text__desc">Где остановиться</div>
                        </div>

                        <div class="hotels-section">
                            <div class="view-img"></div>
                            
                            <div class="article-text">
                                <div class="booking">
                                    <div class="article-text__title">Системы бронирования</div>
                                    <p>Вы можете воспользоваться следующими системами бронирования:</p>
                                    <div class="booking-section">
                                        <a href="https://www.tripadvisor.ru/Hotels-g1536793-Republic_of_Dagestan_North_Caucasian_District-Hotels.html" target="_blank">
                                            <div class="booking-icons" style="background-image: url('img/icons/tripadvisor.jpg');"></div>
                                        </a>
                                        <a href="https://ostrovok.ru/?sid=f618de62-38d2-4a26-83aa-9d6402fa9cb5"  target="_blank">
                                            <div class="booking-icons" style="background-image: url('img/icons/ostrovok.jpg');"></div>
                                        </a>
                                        <a href="https://travel.yandex.ru/hotels/"  target="_blank">
                                            <div class="booking-icons" style="background-image: url('img/icons/yandex-travel.jpg');"></div>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div class="article-text">
                                <div class="article-text__title">Лучшие видовые отели в Дагестане</div>
                                <p>Потрясающий вид из номера, с террасы или балкона - это то, чем может похвастаться далеко не каждый отель.</p>
                                <p>Видовые отели и апартаменты высоко ценятся у путешественников. Забронировав номер с видом, можно насладиться панорамными видами на город или красоты окружающей природы.  Гостиницы с панорамными окнами или видовой террасой отлично подойдут для проведения романтического вечера или свадебной фотосессии.</p>
                                <p>Мы подобрали для вас лучшие отели с красивым видом в Дагестане. В подборке представлены только качественные объекты с высокой оценкой реальных гостей и популярные отели. Вы можете выбрать понравившийся отель и забронировать номер через самую популярную систему бронирования.</p>
                                <p>В списке представлены гостиницы Дагестана с хорошим видом в различном ценовом диапазоне. Здесь вы можете найти дорогие отели люкс и премиум сегмента и относительно дешевые отели с лучшим соотношением цена/качество. Цены на проживания актуальны на момент добавления отеля в нашу базу и могут отличаться от цен на ваши даты.</p>
                                <a href="https://ex-terior.ru/land/rossiya/dagestan/feature/view-hotel/" class="article-text__more" target="_blank"> подробнее</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>



 
                <div class="hotels" id="hotels">  
                    <div class="hotels-title">Лучшие видовые отели</div>    
                    <div class="hotels-container d-flex">
                        
                        <?php 
                            $hotels = Hotels::getLinesApi(); 
                            foreach ($hotels as $hotel) {
                        ?>

                            <div class="hotel-item" >
                                <div class="hotel-item__img-container">
                                    <div class="hotel-item__img" style="background-image: url('./<?= $hotel['image'] ?>');"> </div>
                                </div>
                                <div class="hotel-item__title">
                                    <h3><?= $hotel['name']; ?></h3>
                                </div>
                                <div class="hotel-item__location">
                                    <?= $hotel['location']; ?>
                                </div>
                                <a href="<?= $hotel['link'] ?> " class="block"><button class="card-item__btn hotel-btn">На сайт</button></a>
                            </div>
                            <?php } ?>
                    </div>
                    <div class="hotels-all-btn">
                        <a href="https://ex-terior.ru/land/rossiya/dagestan/feature/view-hotel/" target="_blank">
                            <button class="card-item__btn btn-big btn-theme">Смотреть ещё</button>
                        </a>
                    </div>


                    <div class="hotels-title" id="guesthouses">Гостевые домики</div>    
                    <div class="hotels-container d-flex">
                        
                        <?php 
                            $houses = Guesthouses::getLinesApi(); 
                            foreach ($houses as $house) {
                        ?>

                            <div class="hotel-item" >
                                <div class="hotel-item__img-container">
                                    <div class="hotel-item__img" style="background-image: url('./<?= $house['image'] ?>');"> </div>
                                </div>
                                <div class="hotel-item__title">
                                    <h3><?= $house['name']; ?></h3>
                                </div>
                                <div class="hotel-item__location">
                                    <?= $house['location']; ?>
                                </div>
                                <a href="<?= $house['link'] ?> " class="block"><button class="card-item__btn hotel-btn">На сайт</button></a>
                            </div>
                            <?php } ?>
                            
                    </div>
                    <div class="hotels-all-btn">
                        <a href="https://ex-terior.ru/land/rossiya/dagestan/feature/view-hotel/" target="_blank">
                            <button class="card-item__btn btn-big btn-theme">Смотреть ещё</button>
                        </a>
                    </div>
                </div>



        </main>
        
        
        <?php include "footer.php";?>
    </div>

    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>