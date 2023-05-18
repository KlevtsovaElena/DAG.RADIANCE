<?php require_once('../classes/autoload.php'); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/1.css">
    <link rel="stylesheet" href="css/route.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

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
                    <p>Помощь в организации отдыха</p>
                </li>
            </ul>
        </div>

        <!-- <section class="article">
            <div class="article-container inner_section">
            <div class="triangles-wrap">
                <div class="triangle"><a href="#about">Самолет</a></div>
                <div class="triangle"><a href="/client/route.php">Поезд</a></div>
                <div class="triangle"><a href="/client/housing.php">Авто</a></div>
            </div>
            </div>
        </section> -->

        <section class="article">
            <div class="article-container inner_section">
                <div class="article-text">
                    <div class="section-header" id="plane">
                        <div class="article-text__desc">Как добраться в Дагестан</div>
                    </div>
                    <div class="section-first d-flex">
                        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3Ac7c22167edfd43cec42a80d170f306d7025dfc6eb9cc582e4da27a05022880ab&amp;source=constructor" width="450" height="450" frameborder="0"></iframe>
                        <!-- <img src="./img/route/4.jpg" alt=""> -->
                        <div class="article-text gap">
                            <div class="article-text__title">На самолете</div>
                            <p>
                                Международный аэропорт Махачкалы принимает рейсы из Москвы (Внуково, Шереметьево, Домодедово), Санкт-Петербурга, Ростова-на-Дону, Сургута, Сочи, Казани, Новосибирска, Екатеринбурга. Имейте в виду: некоторые рейсы выполняются с пересадками. Например, во время перелета из Екатеринбурга и Новосибирска вам придется сделать не менее одной пересадки. При желании сюда можно прилететь даже из Стамбула, правда, такие полеты выполняются не ежедневно. Перелет из Москвы займет от 2 часов, из Санкт-Петербурга – 3 часа 30 минут, из Новосибирска – около 9 часов (с учетом пересадок).<br>
                                Аэропорт Махачкалы расположен в 20 км от города, доехать в центр можно за полчаса, но на общественном транспорте добираться неудобно: маршрутка № 105 ходит редко, автобус — 4 раза в день (в 10:30, 12:15, 14:10 и 15:00) и только до ТРЦ «Пирамида», расположенного на южной окраине Махачкалы.
                            </p>
                            <a href="https://www.aeroflot.ru/ru-ru" target="_blank" class="card-btn block"><button class="card-item__btn btn-big btn-theme">Авиабилеты</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="article" id="train">
            <div class="article-container">
                <div class="article-text">
                    <div class="section-first d-flex">
                        <img class="train" src="./img/route/5.jpg" alt="">
                        <div class="article-text gap">
                            <div class="article-text__title">На поезде</div>
                            <p>
                                Еще один вариант – поездка в Махачкалу по железной дороге. Добраться в столицу Республики Дагестан на поезде можно из Москвы, Санкт-Петербурга, Ростова-на-Дону, Тюмени. Из Москвы регулярно курсирует поезд в Дербент.
                                Путешествовать по Дагестану можно на авто, рейсовых автобусах, микроавтобусах, такси, попутках. Из Махачкалы можно добраться на электричках в Дербент, Хасавюрт, Кизилюрт, Избербаш, Манас.
                            </p>
                            <a href="https://www.rzd.ru/" target="_blank" class="card-btn block"><button class="card-item__btn btn-big btn-theme">Ж/д билеты</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <div class="photo-back">
        <section class="article" id="car">
            <div class="article-container">
                <div class="article-text">
                    <div class="section-first d-flex">
                        <div class="article-text">
                            <div class="article-text__title">На автомобиле</div>
                            <p>
                                Москву и Махачкалу разделяют чуть больше 1800 км, самый короткий путь — по трассе P-22 «Каспий» через Тамбов, Волгоград и Элисту. Если ехать без остановок, поездка займет около суток, бензин обойдется в 6500–7000 RUB. Дорога до Дербента длиннее на 130 км и 1,5 часа. Чтобы доехать в Махачкалу из Петербурга, придется преодолеть 2500 км и потратить на дорогу около 30 часов.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        
    </div>

    <section class="article">
        <div class="article-container">
            <div class="article-text">
                <div class="section-first d-flex">
                    <img class="bus" src="./img/route/7.jpg" alt="">
                    <div class="article-text gap">
                        <div class="article-text__title">На автобусе</div>
                        <p>
                            Добраться из Москвы в Махачкалу можно за 31 час и 4000 RUB, автобусы отправляются ежедневно с автостанции «Котельники». По понедельникам с автовокзала «Саларьево» уходят автобусы в Дербент, билеты стоят от 3200 RUB, поездка длится 41 час.
                            Дорога на автобусе из Питера в Махачкалу занимает 39–41 час, цена билетов — около 5000 RUB. Точки отправления — ТРК «Лондон Молл» и метро «Балтийская».
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="article">
        <div class="article-container">
            <div class="article-text">
                <div class="section-first d-flex">
                    <img class="rental" src="./img/route/8.jpg" alt="" style="max-height: 500px">
                    <div class="article-text gap">
                        <div class="article-text__title">Прокат автомобилей</div>
                        <p>
                            В Махачкале есть пункты проката автомобилей. При необходимости вам доставят арендованное авто прямо в аэропорт. Планируя поездку по высокогорным районам республики, лучше взять напрокат хороший внедорожник.
                            <br><br>
                            Самая простая альтернатива – поездка в Дагестан с организованной экскурсионной группой. О транспорте позаботятся организаторы тура, а вы сможете расслабиться и наслаждаться видами из окна, а также колоритом дагестанских мест.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
        

    <div class="two-buttons">
            <a href="../index.php" class="card-btn"><button class="card-item__btn btn-big btn-theme">На главную</button></a>
            <a href="housing.php" class="card-btn"><button class="card-item__btn btn-big btn-theme">Далее</button></a>
        </div>
    </main>

    <?php include "footer.php";?>

    <script src="js/main.js"></script>

</body>

</html>