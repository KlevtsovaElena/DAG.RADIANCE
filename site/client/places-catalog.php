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
            <?php $data = Place::getLinesApi();
            foreach ($data as $place) { ?>
                <div class="d-flex card-item catalog-card catalog-card_effect" style="background-image: url('./<?php echo $place['img-title'] ?>');">
                    <div class="card-item__title">
                        <h3><?php echo $place['title']; ?></h3>
                    </div>
                    <div class="card-item__desc">
                        <?php echo $place['short-desc']; ?>
                    </div>
                    <a href="cardOnePlace.php?id= <?= $place['id'] ?> " class="block"><button class="card-item__btn catalog-btn btn-yellow">Подробнее</button></a>
                </div>
                <?php } ?>
            </div>
            
    
    
        </main>
        
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
                <div class="footer-links">
                    <img src="img/icons/fb.png" alt="" class="linkPic">
                    <img src="img/icons/tg.png" alt="" class="linkPic">
                    <img src="img/icons/inst.png" alt="" class="linkPic">
                    <img src="img/icons/wtsp.png" alt="" class="linkPic">
                </div>
            </div>
        </footer>
    </div>
    
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>