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
            <div class="title-catalog-page">Достопримечательности</div>
            <div class="breadcrumbs-container">
                <ul class="breadcrumbs-list">
                    <li>
                        <a href="../index.php">Главная</a>
                    </li>
                        <p>Все достопримечательности</p>
                    </li>
                </ul>
            </div>

            <!-- Достопримечательности ГОРЫ -->

            <section class="article">
                <div class="article-container inner_section">
                    <div class="triangles-wrap">
                        <div class="triangle with-img"><a href="#mountains">Горы</a>
                            <div class="circle img-mountains"></div>
                        </div>
                        <div class="triangle with-img"><a href="#sea">Каспийское<br>море</a>
                            <div class="circle img-sea"></div>
                        </div>
                        <div class="triangle with-img"><a href="#desert">Пустыня</a>
                            <div class="circle img-desert"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="text-left-img-right d-flex gap">
                                <div class="title-text">
                                    <div class="article-text__title">Горы</div>
                                    <p>
                                        <i>Да, горы прекрасные и опасные, снежные вершины, каменные великаны... Они чаруют и пугают своей холодной молчаливой неизвестностью. Что таят эти перевалы, пропасти и ледяные водопады?<br>Жизнь или смерть, счастье или разочарование...
                                        Скорее жизнь и надежду!!! СВОБОДУ, мечту о бесконечном...</i>
                                        <p class="text-right">Алексей Филатов</p>
                                    </p>
                                </div>
                                <img class="mountains" src="./img/places-catalog/4.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Топ-10 самых высоких гор в Дагестане</div>
                            <div class="text-left-img-right d-flex gap">
                                <ul class="top-10_text">
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#10_4000" target="_blank">10. Ачигсырт, 4000 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#9_4007" target="_blank">9. Балиал, 4007 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#8_4016" target="_blank">8. Ярудага, 4016 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#7_4020" target="_blank">7. Рагдан, 4020 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#6_4084" target="_blank">6. Чарындаг, 4084 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#5_4116" target="_blank">5. Деавгай, 4116 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#4_4142" target="_blank">4. Шалбуздаг, 4142 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#3_-_4152" target="_blank">3. Аддала-Шухгельмеэр, 4152 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#2_4285" target="_blank">2. Диклосмта, 4285 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#1_4466" target="_blank">1. Базардюзю, 4466 м</a></li>
                                </ul>
                                <img class="top-10_img" src="./img/places-catalog/top-10.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="category" id="mountains"><h2>Горы</h2></div>
            <div class="catalog-container">
            <?php $data = Place::getLinesApiCategory("горы");
            foreach ($data as $place) { ?>
            <div class="card-container"></div>
                <div class="d-flex card-item catalog-card catalog-card_effect" >
                    <div class="card-item__img" style="background-image: url('./<?php echo $place['img-title'] ?>');"> </div>
                    <div class="card-item__title">
                        <h3><?php echo $place['title']; ?></h3>
                    </div>
                    <div class="card-item__desc">
                        <?php echo $place['short-desc']; ?>
                    </div>
                    <a href="card-place.php?id=<?= $place['id'] ?> " class="block"><button class="card-item__btn catalog-btn btn-theme">Подробнее</button></a>
                </div>
                <?php } ?>
            </div>

            <!-- Достопримечательности МОРЕ, ВОДА -->
            <div class="category" id="sea"><h2>Море, реки, водохранилища</h2></div>
            <div class="catalog-container">
            <?php $data = Place::getLinesApiCategory("вода");
            foreach ($data as $place) { ?>
            <div class="card-container"></div>
                <div class="d-flex card-item catalog-card catalog-card_effect" >
                    <div class="card-item__img" style="background-image: url('./<?php echo $place['img-title'] ?>');"> </div>
                    <div class="card-item__title">
                        <h3><?php echo $place['title']; ?></h3>
                    </div>
                    <div class="card-item__desc">
                        <?php echo $place['short-desc']; ?>
                    </div>
                    <a href="card-place.php?id=<?= $place['id'] ?> " class="block"><button class="card-item__btn catalog-btn btn-theme">Подробнее</button></a>
                </div>
                <?php } ?>
            </div>

            <!-- Достопримечательности Пустыня -->
            <div class="category" id="desert"><h2>Пустыня</h2></div>
            <div class="catalog-container">
            <?php $data = Place::getLinesApiCategory("пустыня");
            foreach ($data as $place) { ?>
            <div class="card-container"></div>
                <div class="d-flex card-item catalog-card catalog-card_effect" >
                    <div class="card-item__img" style="background-image: url('./<?php echo $place['img-title'] ?>');"> </div>
                    <div class="card-item__title">
                        <h3><?php echo $place['title']; ?></h3>
                    </div>
                    <div class="card-item__desc">
                        <?php echo $place['short-desc']; ?>
                    </div>
                    <a href="card-place.php?id=<?= $place['id'] ?> " class="block"><button class="card-item__btn catalog-btn btn-theme">Подробнее</button></a>
                </div>
                <?php } ?>
            </div>

            <!-- Достопримечательности Иное -->
            <div class="category"><h2>И ещё много всего интересного</h2></div>
            <div class="catalog-container">
            <?php $data = Place::getLinesApiCategory("нет");
            foreach ($data as $place) { ?>
            <div class="card-container"></div>
                <div class="d-flex card-item catalog-card catalog-card_effect" >
                    <div class="card-item__img" style="background-image: url('./<?php echo $place['img-title'] ?>');"> </div>
                    <div class="card-item__title">
                        <h3><?php echo $place['title']; ?></h3>
                    </div>
                    <div class="card-item__desc">
                        <?php echo $place['short-desc']; ?>
                    </div>
                    <a href="card-place.php?id=<?= $place['id'] ?> " class="block"><button class="card-item__btn catalog-btn btn-theme">Подробнее</button></a>
                </div>
                <?php } ?>
            </div>

            <div class="two-buttons">
                <a href="../index.php" class="card-btn"><button class="card-item__btn btn-big btn-theme">На главную</button></a>
                <a href="tours-catalog.php" class="card-btn"><button class="card-item__btn btn-big btn-theme">К Турам</button></a>
            </div>
        
    
        </main>
        
        <?php include "footer.php";?>
        
    </div>
    
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>