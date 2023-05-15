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

            <div class="catalog-container">
            <?php $data = Tour::getLinesApi();
            foreach ($data as $tour) { ?>
                <div class="d-flex card-item catalog-card catalog-card_effect">
                    <div class="card-item__img" style="background-image: url('./<?php echo $tour['img-title'] ?>');"> </div>
                    <div class="card-item__title">
                        <h3><?php echo $tour['title']; ?></h3>
                    </div>
                    <div class="card-item__desc">
                        <?php echo $tour['short-desc']; ?>
                    </div>
                    <div class="card-item__desc catalog-price">
                        Стоимость: <span><?php echo $tour['price']; ?> руб.</span>
                    </div>
                    <a href="card-tour.php?id=<?= $tour['id'] ?> " class="block"><button class="card-item__btn catalog-btn btn-theme">Подробнее</button></a>
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