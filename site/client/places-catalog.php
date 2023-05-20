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
            <div class="category"><h2>Горы</h2></div>
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
            <div class="category"><h2>Море, реки, водохранилища</h2></div>
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
            <div class="category"><h2>Пустыня</h2></div>
            <div class="catalog-container">
            <?php $data = Place::getLinesApiCategory("песок");
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
            <?php $data = Place::getLinesApiCategory("иное");
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

            <a href="../index.php" class="card-btn block"><button class="card-item__btn btn-big btn-theme">На главную</button></a>
        
    
        </main>
        
        <?php include "footer.php";?>
        
    </div>
    
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>