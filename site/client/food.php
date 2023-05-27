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
    <link rel="stylesheet" href="css/2.css">
    <link rel="stylesheet" href="css/catalog.css">
    <link rel="stylesheet" href="css/food.css">

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
        <div class="title-catalog-page">Как отдохнуть</div>
        <div class="breadcrumbs-container">
            <ul class="breadcrumbs-list">
                <li>
                    <a href="../index.php">Главная</a>
                </li>
                    <p>Где поесть</p>
                </li>
            </ul>
        </div>

        <section class="article">
            <div class="article-container inner_section">
                <div class="article-text">
                    <div class="section-first d-flex column">
                        <div class="article-text__desc ta-center">Где поесть? Идеи подарков</div>
                        <img class="img-big img-one" src="./img/food/1.jpg" alt="">
                    </div>
                </div>
            </div>
        </section>

        <section class="article">
            <div class="article-container inner_section">
                <div class="article-text">
                    <div class="article-text__title">Любимое блюдо дагестанцев — хинкал</div>
                    <div class="section-first two-columns">
                        <!-- <div class="title-text"> -->
                            <p>
                                Хинкал — традиционное блюдо дагестанской кухни, без которого не обходится ни один праздничный стол. Иногда его путают с грузинскими хинкали, с которыми у хинкала нет ничего общего. С аварского языка «хинк» переводится как «одна штука». Хинкал — это кусочки теста, сваренные в мясном бульоне. Подается хинкал с бараниной или говядиной (иногда — с курицей), с пиалой мясного бульона и соусом. Как правило, это два вида соуса: сметана или кефир с чесноком и томатный соус с чесноком.<br>
                                Виды хинкала:<br>
                                Аварский хинкал:<br>
                                Тесто режется ромбами, толщина каждой галушки примерно 1-1,5 см, она обязательно накалывается вилкой или зубочистками, чтобы не сдуться.<br>
                                Даргинский хинкал<br>
                                Тесто раскатывают достаточно тонко, посылают ореховой травой, а после скатывают в рулет.. Рулет режется на кружки, именно солёность является отличительной особенностью Даргинского хинкала.<br>
                                Лакский хинкал<br>
                                Тесто раскатывается в жгутики, каждый жгутик разрезается на равное количество частей, маленькую заготовку гладят в левую ладонь, делая большим пальцем ямку, придавая тесту форму «ушка». У лакцев этот хинкал называют «ххункӏру».<br>
                                Лезгинский хинкал<br>
                                Тесто раскатывается настолько тонко, чтобы после варки галушка была почти прозрачной, разрезается на небольшие квадратики.<br>
                                Подача уникальна тем, что вместе с мясом и галушками дают аджику или томатный соус.<br>
                            </p>
                        <!-- </div> -->
                        <div class="food1 img-section"></div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <?php include "footer.php";?>

    <script src="js/main.js"></script>

</body>

</html>