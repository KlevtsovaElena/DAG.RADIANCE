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
                    <div class="">Лучшие видовые отели!!!!</div>    
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


                    <style>
                        .hotel-btn {
                            position: absolute;
                            bottom: 20px;
                            margin-left: auto;
                            margin-right: auto;
                            left: 0;
                            right: 0;
                            cursor: pointer;
                        }
                        .hotel-btn:hover {
                            background-color: gainsboro;
                        }
                        .hotels-container {
                            display: flex;
                            justify-content: center;
                            flex-wrap: wrap;
                        }
                        .hotel-item {
                            display: flex;
                            flex-direction: column;
                            position: relative;
                            flex-wrap: wrap;
                            width:315px;
                            height: 415px;
                            background-color: #ffffff;
                            color: #000;
                            overflow: hidden;
                            margin: 50px 20px;
                            border-radius: 20px;
                        }
                        .hotel-item__img-container {
                            width: 100%;
                            height: 50%; 
                            overflow: hidden;
                        }
                        .hotel-item__img{
                            width: 100%;
                            height: 100%;
                            background-position: center center;
                            background-size: cover;
                            transition: all 0.5s;
                        }
                        .hotel-item__img-container:hover .hotel-item__img {
                            transform: scale(1.1);
                        }
                        .hotel-item__title {
                            height: 20%;
                            padding: 10px 15px;
                            text-align: center;
                        }
                        .hotel-item__location {
                            padding: 0 15px;
                            text-align: center;
                        }
                    </style>
                    <div class="">Гостевые домики</div>
                    <div class="hotels-container d-flex">
                        
                        <?php 
                            $houses = Guesthouses::getLinesApi(); 
                            foreach ($houses as $house) {
                        ?>

                            <div class="d-flex card-item catalog-card catalog-card_effect" >
                                <div class="card-item__img" style="background-image: url('./<?= $house['image'] ?>');"> </div>
                                <div class="card-item__title">
                                    <h3><?= $house['name']; ?></h3>
                                </div>
                                <div class="card-item__desc">
                                    <?= $house['location']; ?>
                                </div>
                                <a href="<?= $house['link'] ?> " class="block"><button class="card-item__btn catalog-btn btn-theme">На сайт</button></a>
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