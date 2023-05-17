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
    <link rel="stylesheet" href="css/contacts.css">

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
                        <p>Контакты</p>
                    </li>
                </ul>
            </div>

 
                <div class="hotels">  
                    <div class="">Лучшие видовые отели</div>    
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

                    <div class="">Гостевые домики</div>    
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
               
                </div>



        </main>
        
        
        <?php include "footer.php";?>
    </div>

    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>