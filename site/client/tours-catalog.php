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

    <link rel="stylesheet" href="./fonts/PlayFairDisplay/stylefonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>

<body>

    <div class="container-page d-flex">
        <header class="header">
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
        </header>
    
        <main>
            <div class="catalog-container">
            <?php $data = Tour::getLines();
            foreach ($data as $tour) { ?>
                <div class="d-flex card-item catalog-card catalog-card_effect" style="background-image: url('./<?php echo $tour['img-title'] ?>');">
                    <div class="card-item__title">
                        <h3><?php echo $tour['title']; ?></h3>
                    </div>
                    <div class="card-item__desc">
                        <?php echo $tour['short-desc']; ?>
                    </div>
                    <div class="card-item__desc catalog-price">
                        Стоимость: <span><?php echo $tour['price']; ?> руб.</span>
                    </div>
                    <!-- ЗАМЕНИТЬ НА ПЕРЕХОД НА НУЖНУЮ КАРТОЧКУ -->
                    <a href="card.html" class="block"><button class="card-item__btn catalog-btn btn-yellow">Подробнее</button></a>
                </div>
                <?php } ?>
            </div>
            
    
    
        </main>
        <footer>FOOTER
    
        </footer>
    </div>

    <script src="js/main.js"></script>

</body>

</html>