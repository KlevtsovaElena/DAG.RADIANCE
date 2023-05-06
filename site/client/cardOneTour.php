<?php
require_once('../classes/autoload.php');
// получим данные именно по этой карточке
$data = Tour::getLinesApiId($_GET['id']);

var_dump($data);
echo "Получили данные по карточке" . $data[0]['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DAG.RADIANCE</title>
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">

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
            <section class="card">
                <div class="card-container">
                    <div class="card-container__text">
                        <div class="card-text__title">
                            <h3>Название Тура</h3>
                        </div>
                        <div class="card-text__desc">
                            <p>Здесь будет развернутое описание тура. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Elit ullamcorper dignissim cras tincidunt. A arcu cursus vitae congue mauris rhoncus aenean vel. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus mattis. Adipiscing commodo elit at imperdiet. Ornare suspendisse sed nisi lacus sed viverra tellus in hac. Elit eget gravida cum sociis natoque penatibus et magnis. Lectus urna duis convallis convallis tellus id interdum velit. Euismod nisi porta lorem mollis. Vitae sapien pellentesque habitant morbi. Tincidunt nunc pulvinar sapien et ligula. Fermentum iaculis eu non diam phasellus vestibulum lorem sed risus. Neque viverra justo nec ultrices dui sapien. Turpis nunc eget lorem dolor sed viverra ipsum. Tristique magna sit amet purus gravida quis blandit turpis. Sit amet purus gravida quis blandit turpis cursus. Scelerisque in dictum non consectetur a erat nam at. Eget egestas purus viverra accumsan in. Feugiat nisl pretium fusce id velit ut.

                                Senectus et netus et malesuada fames ac turpis. Nunc sed velit dignissim sodales. Nibh praesent tristique magna sit amet. Lorem dolor sed viverra ipsum nunc aliquet bibendum enim facilisis. Vitae congue eu consequat ac felis donec et odio pellentesque. Vitae suscipit tellus mauris a diam maecenas. Netus et malesuada fames ac turpis egestas sed tempus. Tempus urna et pharetra pharetra massa massa. Proin sagittis nisl rhoncus mattis rhoncus urna neque. Nulla malesuada pellentesque elit eget gravida cum sociis natoque. Curabitur gravida arcu ac tortor dignissim convallis aenean.
                                
                                At risus viverra adipiscing at in tellus integer feugiat scelerisque. Diam sollicitudin tempor id eu nisl nunc mi ipsum faucibus. Metus aliquam eleifend mi in nulla posuere. Varius sit amet mattis vulputate enim nulla. A condimentum vitae sapien pellentesque habitant morbi tristique senectus. Nibh nisl condimentum id venenatis a condimentum. Tincidunt praesent semper feugiat nibh sed pulvinar proin. Nec ultrices dui sapien eget. Mattis pellentesque id nibh tortor id. Nulla porttitor massa id neque aliquam vestibulum.</p>
                        </div>
                    </div>

                    <!-- Слайдер с нижней мини-галереей -->
                    <div class="double-slider_container">
                        <div class="slider big-slider">
                            <div class="card-carousel d-flex slider-wrapper slick-slide slider-for">
                                <div class="d-flex card-item slide" style="background-image: url('./<?= $data[0]['img-title']?>');">
                                </div>
                                <div class="d-flex card-item slide" style="background-image: url('./img/card/sunset.jpg');">
                                </div>
                                <div class="d-flex card-item slide" style="background-image: url('./img/card/reserve.jpg');">
                                </div> 
                                <div class="d-flex card-item slide" style="background-image: url('./img/card/hills.jpg');">
                                </div> 
                                <div class="d-flex card-item slide" style="background-image: url('./img/card/nature.jpeg');">
                                </div> 
                            </div>      
                        </div>
                        
                        <!-- Нижняя мини-галерея слайдера -->
                        <div class="slider mini-slider">
                            <div class="card-carousel d-flex slider-wrapper slick-slide slider-nav">
                                <div class="d-flex card-item_small slide" style="background-image: url('./img/card/sea.jpg');">
                                </div>
                                <div class="d-flex card-item_small slide" style="background-image: url('./img/card/sunset.jpg');">
                                </div>
                                <div class="d-flex card-item_small slide" style="background-image: url('./img/card/reserve.jpg');">
                                </div> 
                                <div class="d-flex card-item_small slide" style="background-image: url('./img/card/hills.jpg');">
                                </div> 
                                <div class="d-flex card-item_small slide" style="background-image: url('./img/card/nature.jpeg');">
                                </div> 
                            </div>       
                        </div>
                    </div>
                
            </section>

                <div class="card-btn"><button class="card-item__btn">Смотреть все</button></div>
            </div>
    
        </main>
        <footer>FOOTER
    
        </footer>
    </div>
 


    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/card.slider.js"></script>
</body>

</html>

<style>
    .slick-dots {
        position: absolute;
        bottom: -40px;
        padding: 0;
    }

    .slick-dots li + li{
        margin-left: 3px;
    }
    .slick-dots li button{
        font-size: 0;
        height: 10px;
        width: 10px;
        border-radius: 50%;
        background-color: rgb(18, 17, 17);
        padding: 0;
        margin: 0;
        cursor: pointer;
        border: none;
    }

    .slick-dots .slick-active button {
        background-color: coral;
    }

    .slick-dots li{
        display: inline-block;
    }

</style>