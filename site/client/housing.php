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
                <div class="contacts-container">  
                <div class="contacts">  
                        
                <?php 
                    $hotelsJSON = Hotels::getLinesApi(); 
                    $hotels = (object)$hotelsJSON[0];
                ?>
                    <h2>Наши гостишки:</h2>
                    
<img src="<?= $hotels->image ?>">
<div> <?= $hotels->location ?> </div>
<div><a href="<?= $hotels->link ?>" > ССылка </div>



<?php 
                    $housesJSON = Guesthouses::getLinesApi(); 
                    $houses = (object)$housesJSON[0];
                ?>
                    <h2>Наши гостишки:</h2>
                    
<img src="<?= $houses->image ?>">
<div> <?= $houses->location ?> </div>
<div><a href="<?= $houses->link ?>" target="_blank"> ССылка </div>
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