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

</head>

<body>

    <!-- HEADER -->
    <header class="header">
        <?php include('header.php'); ?>
    </header>
    <!-- /HEADER -->

    <main>

        <section class="article">
            <div class="article-container inner_section">
                <div class="article-text">
                    <div class="section-header">
                        <div class="article-text__desc">Республика Дагестан</div>
                        <p> — субъект Российской Федерации, республика в её составе. Самый многонациональный регион в Российской Федерации.
                        Образована 19 января 1921 года как автономная республика в составе РСФСР. Столица республики — город Махачкала.</p>
                    </div>
                    <div class="section-first gap" id="geography">
                        <div class="geography img-section one img-margin"></div>
                        <div class="article-text__title">Географическое положение</div>
                        <p>Республика Дагестан, входящая в состав Российской Федерации, расположена на Северном Кавказе и является приграничной частью юга России. Она граничит по суше и Каспийскому морю с пятью государствами — Азербайджаном, Грузией, Казахстаном, Туркменистаном и Ираном. Внутри Российской Федерации соседствует со Ставропольским краем, Калмыкией и Чечней. Общая протяженность территории с юга на север составляет около 400 километров, с запада на восток — 200 км. На востоке на протяжении почти 530 км.
                            Дагестан омывается водами Каспийского моря. Южная граница проходит по Водораздельному хребту Большого Кавказа. По размерам территории (50,3 тыс. кв. нм.) и численности населения (2.1 млн. человек) — это самая крупная республика на Северном Кавказе.
                        </p>
                        <!-- перенесено из раздела 2 -->
                        <div class="row">
                            <div class="img-with-caption">
                                <div class="pecularities5 img-section one-of"></div>
                                <p class="caption">Г. Махачкала</p>
                            </div>
                            <div class="img-with-caption">
                                <div class="pecularities6 img-section one-of"></div>
                                <p class="caption">Г. Дербент</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
        <section class="article">
            <div class="article-container">
                <div class="article-text gap">
                    <div class="article-text__title">Климат</div>
                    <p>
                        Климат Дагестана, несмотря на разнообразие, в целом можно отнести к умеренно теплому, в горах он умеренно холодный с более или менее выраженной континентальностью, которая проявляется в значительных годовых амплитудах температуры на низменности, на возвышенностях в резких суточных колебаниях, а также в недостаточном увлажнении. В целом климат Дагестана характеризуется как сухой и полусухой, умеренно континентальный.<br>
                        Климат на севере и в центральной части Дагестана умеренно-континентальный и засушливый, на юге вдоль Каспийского моря и на Прикаспийской низменности субтропический полусухой.<br>
                        Основной фактор формирования климата всего Дагестана это расположение его в южной части умеренного теплового пояса и поступление значительного количества солнечного тепла.<br>
                        В климате Дагестана наблюдаются резкие контрасты в разных районах. В горах на высоте 3 тыс.м абсолютные максимумы температур составляют 21-23°С, а на севере низменности температура воздуха может быть более 40°С. Осадки на низменности не превышают 400 мм, а в горах на высоте 3 тыс. м их выпадает более 1 тыс. мм.
                    </p>
                    <div class="row">
                        <div class="climate1 img-section one-of"></div>
                        <div class="climate2 img-section one-of"></div>
                    </div>
                </div>
            </div>

            <div class="two-buttons">
                <a href="../index.php" class="card-btn card-item__btn btn-big btn-theme">На главную</a>
                <a href="national-pecularities.php" class="card-btn card-item__btn btn-big btn-theme">Далее</a>
            </div>

        </section>
    </main>

    <?php include "footer.php";?>

    <script src="js/main.js"></script>

</body>

</html>