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

            <section class="article">
                <div class="article-container inner_section">
                    <div class="triangles-wrap">
                        <div class="triangle with-img"><a href="#mountains">Горы</a>
                            <div class="circle img-mountains"></div>
                        </div>
                        <div class="triangle with-img"><a href="#sea">Каспийское<br>море</a>
                            <div class="circle img-sea"></div>
                        </div>
                        <div class="triangle with-img"><a href="#desert">Пустыня</a>
                            <div class="circle img-desert"></div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="article no-reverse">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="text-left-img-right d-flex gap">
                                <div class="title-text">
                                    <div class="article-text__title">Горы</div>
                                    <p class="text-left">
                                        <i>Да, горы прекрасные и опасные, снежные вершины, каменные великаны... Они чаруют и пугают своей холодной молчаливой неизвестностью. Что таят эти перевалы, пропасти и ледяные водопады?<br>Жизнь или смерть, счастье или разочарование...
                                        Скорее жизнь и надежду!!! СВОБОДУ, мечту о бесконечном...</i>
                                        <p class="text-align-right">Алексей Филатов</p>
                                    </p>
                                </div>
                                <div class="img-mountains-big1 mountains-big"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="article no-reverse">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Топ-10 самых высоких гор в Дагестане</div>
                            <div class="text-left-img-right d-flex gap">
                                <ul class="top-10_text text-left">
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#10_4000" target="_blank">10. Ачигсырт, 4000 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#9_4007" target="_blank">9. Балиал, 4007 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#8_4016" target="_blank">8. Ярудага, 4016 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#7_4020" target="_blank">7. Рагдан, 4020 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#6_4084" target="_blank">6. Чарындаг, 4084 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#5_4116" target="_blank">5. Деавгай, 4116 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#4_4142" target="_blank">4. Шалбуздаг, 4142 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#3_-_4152" target="_blank">3. Аддала-Шухгельмеэр, 4152 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#2_4285" target="_blank">2. Диклосмта, 4285 м</a></li>
                                    <li><a href="https://top10a.ru/samye-vysokie-gory-v-dagestane.html#1_4466" target="_blank">1. Базардюзю, 4466 м</a></li>
                                </ul>
                                <div class="img-mountains-big2 mountains-big"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Карточки Горы -->
            <div class="category" id="mountains"><h2>Горы</h2></div>
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

            <!-- Статичное описание достопримечательностей -->
            <section class="article no-reverse">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Дагестанское чудо: завораживающий подземный водопад в Салтинской теснине</div>
                            <div class="text-left-img-right d-flex gap">
                                <div class="saltin1 mountains-big img-left"></div>
                                <p class="text-left">
                                    Салтинский водопад в Дагестане по праву занимает одно из первых мест в списке топовых локаций, которые непременно стоит увидеть! Уникальность этого небольшого, но потрясающе красивого водопада в том, что находится он... под землей. Его мощный поток, с грохотом падающий сквозь круглое отверстие в скале, создает иллюзию низвергающихся в подземелье небес...
                                </p>
                            </div>
                            <p>
                                Водопад на территории теснины образует река Багдакули (Салтинка). Водопад прорывается сверху через отверстие в сплошной скале. Водопад не всегда имеет мощный поток воды и имеет пульсирующий характер, наибольший сток приходится на май-июнь, в период таяния снегов и максимальных осадков.
                            </p>
                            <div class="row">
                                <div class="saltin2 img-section one-of"></div>
                                <div class="saltin3 img-section one-of"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Аул-призрак Гамсутль</div>
                            <div class="d-flex column">
                                <p>
                                    Урбанизация — это неотъемлемая часть современной жизни, поэтому многие поселки со временем оказываются заброшены. То же случилось и с аулом Гамсутль, в котором ещё 50 лет назад бурлила жизнь, работали магазины, больницы и т. д. Однако со временем жители стали покидать родные дома и переезжать в более крупные населенные пункты, а в 2015 году умер последний житель Гамсутля. С тех пор село одиноко стоит посреди гор, ожидая того момента, когда навсегда исчезнет с лица Земли. Важно упомянуть, что примерный возраст Гамсутля составляет 2 тыс. лет, а на территории села были сделаны многочисленные археологические находки.
                                </p>
                                <img class="img-big img-one" src="./img/places-catalog/gamsutl.jpg" alt="">
                            </div>   
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
            <div class="article-container inner_section">
                <div class="article-text">
                    <div class="section-first two-columns">
                            <div class="title-text">
                                <div class="article-text__title">Древнее селение Старый Гоор —</div>
                                <p>
                                    достопримечательность горного Дагестана, которую хотят посмотреть практически все путешествующие по республике туристы. Расположено оно на самом краю отвесной пропасти и примечательно тем, что там сохранились оборонительные башни предположительно XVII века постройки. Невероятное мастерство древних строителей, сумевших в труднодоступном горном месте возвести строения необычной архитектуры, поражает и восхищает. К башенным стенам примыкали двухэтажные жилые дома, искусно вписанные в террасированную местность. Складывается ощущение, что дома и горы — единое целое.
                                </p>
                                <div class="old-goor2 small-img-below"></div>
                            </div>
                            <div class="old-goor1 img-section"></div>
                    </div>
                </div>
            </div>
        </section>

        <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Сулакский каньон и Чиркейская ГЭС</div>
                            <div class="d-flex column">
                                <p>
                                    Сула́кский каньо́н — каньон на территории России в долине реки Сулак (Республика Дагестан), глубочайший каньон Европы. Протяжённость каньона составляет 53 километра, глубина достигает 1920 метров. Это на 63 метра глубже Большого каньона в США и на 620 метров глубже каньона реки Тара.
                                </p>
                                <p>
                                    Миллионы лет природа создавала один из своих самых уникальных шедевров – Сулакский каньон. Глубиной он превосходит своего знаменитого заокеанского брата – Большой каньон в США. Это поистине масштабное творение природы притягивает путешественников и ученых со всего мира. Сулакский каньон по праву считают геологической энциклопедией, по которой можно изучать минувшие эпохи. Этот грандиозный памятник природы был очевидцем событий ледникового периода, о чем свидетельствуют следы, оставленные в камне. Он видел исторические вехи цивилизации, был местом эпических сражений, его необъятная красота и сила вдохновляла великих поэтов, писателей и художников. Своей глубиной каньон обязан реке Сулак, поражающей красотой бирюзовых вод, чьи бурные потоки сдерживают действующие плотины. Самой мощной считается Чиркейская ГЭС, благодаря которой образовалось знаменитое водохранилище
                                </p>
                                <div class="img-with-caption">
                                    <img class="img-big img-one sulak" src="./img/places-catalog/sulak1.jpg" alt="">
                                    <p class="caption">Сулакский каньон</p>
                                </div>
                                <div class="diagonal">
                                    <div class="img-with-caption top-left">
                                        <img class="one-of" src="./img/places-catalog/sulak2.jpg" alt="">
                                        <p class="caption">Сулакский каньон</p>
                                    </div>
                                    <img class="bottom-right one-of" src="./img/places-catalog/sulak3.jpg" alt="">
                                </div>
                                <div class="diagonal">
                                    <div class="img-with-caption top-left">
                                        <img class="one-of" src="./img/places-catalog/chirkey1.jpg" alt="">
                                        <p class="caption">Чиркейская ГЭС</p>
                                    </div>
                                    <img class="bottom-right one-of" src="./img/places-catalog/chirkey2.jpg" alt="">
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Ирганайское водохранилище в Дагестане</div>
                            <div class="d-flex column">
                                <p>
                                    Живописное водохранилище в Унцукульском районе Дагестана. Пусть это творение человека, а не природы, но выглядит место потрясающе: можно бесконечно любоваться отражением гор в изумрудном зеркале бассейна. Двадцатикилометровое Ирганайское водохранилище, зажатое между каменных стен, сравнивают с норвежским фьордом — извилистым узким морским заливом со скалистыми берегами, врезающимся в сушу. Вдоль водохранилища петляет хорошая асфальтированная дорога с четырехкилометровым Гимринским тоннелем.
                                </p>
                                <img class="img-big img-one" src="./img/places-catalog/irganay1.jpg" alt="">
                                <div class="diagonal">
                                    <div class="img-with-caption top-left">
                                        <img class="one-of" src="./img/places-catalog/irganay2.jpg" alt="">
                                        <p class="caption">Ирганайское водохранилище</p>
                                    </div>
                                    <img class="bottom-right one-of" src="./img/places-catalog/irganay3.jpg" alt="">
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Карадахская теснина</div>
                            <div class="d-flex column">
                                <p>
                                    Карадахская теснина, которую называют «Ворота чудес», «Сланцевое ущелье», Бецъкварили (на аварском — темное, слепое ущелье) — все это неформальные названия Карадахской теснины, уникального памятника природы республики Дагестан. Всего 5 м в ширину (на некоторых участках и того меньше — до 2 м) и целых 150 м в высоту — когда идешь вдоль гладких, будто отполированных стен теснины, кажется, будто тебя вот-вот зажмет между скалами.
                                    Добавьте к этому вечный полумрак и огромные валуны, в нескольких местах висящие над ущельем — да, вид Карадахской теснины восхищает и ужасает одновременно. Расположена теснина в Гунибском районе в селе Карадах.
                                </p>
                                <div class="row">
                                    <div class="karadakh1 img-section one-of"></div>
                                    <div class="karadakh2 img-section one-of"></div>
                                </div>
                                <img class="img-big img-one" src="./img/places-catalog/karadakh3.jpg" alt="">
                            </div>  
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">Нарын-кала — крепость с историей в 5000 лет</div>
                            <div class="d-flex column">
                                <p>
                                    Нары́н-кала́ — персидская цитадель, часть Дербентской крепости, соединённая с Каспийским морем двойными стенами, призванными перекрывать так называемые Каспийские ворота в Персидскую державу. Входит в список всемирного наследия ЮНЕСКО. В переводе со среднеперсидского название означает «солнечная крепость». Со Средних веков Дербентская крепостная стена также называлась стеной Александра Македонского из-за предания, что её построил великий завоеватель.
                                </p>
                                <img class="img-big img-one" src="./img/places-catalog/naryn-kala1.jpg" alt="">
                            </div> 
                            <div class="row">
                                <div class="naryn-kala2 img-section one-of"></div>
                                <div class="naryn-kala3 img-section one-of"></div>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="d-flex column gap">
                                <div class="article-text__title">Забытое наследие могущественной цивилизации. Экраноплан-ракетоносец проекта 903 “Лунь”</div>
                                <img class="img-big img-one" src="./img/places-catalog/lun.jpg" alt="">
                                <div class="article-text__title">«Творение, превзошедшее время»</div>
                                <p>
                                    В 20-е годы XX века ученые открыли экранный эффект — резкое увеличение подъемной силы летательного аппарата во время движения над ровной поверхностью. Это может быть море, лед, земля без перепадов высот. Используя эффект «воздушной подушки» между поверхностью и аппаратом, в 1961 году советский кораблестроитель Ростислав Алексеев сконструировал машину, не имевшую аналогов в мире, — экраноплан, скоростное судно, способное и передвигаться по воде, и лететь над поверхностью земли.
                                </p>
                                <p>
                                    Его построили в СССР для уничтожения кораблей противников, он похож на корабль фантастического кино, и ему уже почти тридцать лет . в 2020 году экраноплан решили сохранить для истории и сделать центральным экспонатом дагестанского военно-патриотического парка в г. Дербент.
                                </p>
                                <p>
                                    Самый мощный в мире летательный аппарат советские разработчики начали строить в 60-е годы. Длина 92 метра, размах 37 и взлетная масса 544 тонны. Аппарат должен был парить над водой за счет эффекта экрана. Назывался он официально КМ, что значило корабль-макет. Но американские спецслужбы расшифровали это как "Каспийский монстр", потому что испытания экраноплана проводили в Каспийском море, недалеко от города Каспийска.
                                </p>
                            </div> 
                        </div>
                    </div>
                </div>
            </section>


            <!-- Достопримечательности МОРЕ, ВОДА -->
            <section class="article"  id="sea">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="text-left-img-right d-flex gap">
                                <div>
                                    <div class="article-text__title">Каспийское море</div>
                                    <p>
                                        Море или озеро? Каспий — это озеро, потому что является замкнутым водоемом, не соединенным с Мировым океаном. Но называть его морем — не ошибка. По размеру (около 390 тыс. кв. км), глубине (до 1025 м), солености и геологической структуре дна это в общем-то море. Кроме того, в прошлом Каспий через Кумо-Манычскую впадину соединялся с Азовским морем (и некоторые ученые-практики, кстати, предлагают прорыть по линии бывшей впадины судоходный канал с системой шлюзов). А еще раньше, миллионы лет назад, на этом месте был океан Тетис. Каспийское, Черное, Азовское и Аральское моря, а также озеро Балатон в Венгрии — это все остатки древнего Тетиса.
                                    </p>
                                    <img class="sea img-margin float-right" src="./img/places-catalog/kaspiy-sea.jpg" alt="">
                                    <p>
                                        Дагестан — не только красивая республика славящаяся величественными горами, прекрасными водопадами и богатым историческим наследием. Впрочем, пляжный отдых здесь тоже можно устроить замечательный – на Каспийском море, его обеспечивают лучшие курорты Республики, которые мы сегодня и опишем.
                                    </p>
                                </div>
                            </div>
                            <div class="d-flex column">
                                <p>
                                    Жемчужиной уникальной красоты и самобытности является Каспийское море. Это уникальный, единственный в мире замкнутый водоем с хрупкой и бесценной экосистемой. Его уникальность привлекает к себе мировое внимание. Каспий считается самым большим внутренним водоемом в мире, располагается на стыке Азии и Европы. Удивительному природному творению уделили много своих трудов поэты, философы, историки, географы. Среди них: Гомер, Геродот, Аристотель.
                                </p>
                                <div class="sea2 relative" src="./img/places-catalog/kaspiy-sea2.jpg" alt="">
                                    <p class="text-left-verse half-trans covers">
                                        Тихонько затаюсь, качаясь на просторах.<br>
                                        Взлетаю в высь, и снова опускаюсь между волн.<br>
                                        Оно со мной играет, ласковое море.<br>
                                        Я в этой ласке как младенец опьянён
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <!-- Карточки вода -->
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

            <section class="article"  id="desert">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="text-left-img-right d-flex gap">
                                <div class="title-text">
                                    <div class="article-text__title">Песчаная гора Сарыкум в Дагестане</div>
                                    <img class="img-big img-one" src="./img/places-catalog/sarykum.jpg" alt="">
                                    <p>
                                        Творение природы совершеннее шедевров искусства...
                                    </p>
                                    <p>
                                        Бархан Сарыкум в Дагестане – удивительный природный феномен. Эта дюна признана крупнейшей в Европе, по высоте она равна 90-этажному небоскребу. Здесь царит собственный микроклимат, сложилась уникальная экосистема. По склону песчаного холма проложен оснащенный поручнями трап с металлической и деревянной поверхностью. На крутых участках устроены лестницы. С вершины открываются живописные панорамы скалистых предгорий Кавказа, вид на обширную степную долину и побережье Каспийского моря.
                                    </p>
                                    <div class="two-unequal">
                                        <div class="desert1 img-section img-bigger"></div>
                                        <div class="desert2 img-section img-smaller"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Карточки Пустыня -->
            <!-- <div class="category"><h2>Пустыня</h2></div>
            <div class="catalog-container">
            <?php $data = Place::getLinesApiCategory("пустыня");
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
            </div> -->

 
            

            <section class="article">
                <div class="article-container">
                    <div class="article-text">
                        <div class="section-first">
                            <div class="article-text__title">И ещё много всего интересного</div>
                            <div class="d-flex column">
                                <p>
                                    Мы рассказали вам про достопримечательности, ради которых стоит приехать в самый уникальный регион России - в Республику Дагестан, и чтобы поднять бокал вина и попробовать немного Италии, можно отправиться в Южный Дагестан в винный тур или так называемый этнотуризм. Ведь мы отправляемся в путешествия не только ради пейзажей, архитектурных достопримечательностей и исторических памятников, но и для того, чтобы познакомиться с гастрономическими традициями, национальной кухней и не только...
                                </p>
                                <img class="img-big img-one" src="./img/places-catalog/vineyard.jpg" alt="">
                            </div>
                            <div class="two-columns adjustment">
                                <div class="grape"></div>
                                <div class="text-and-img d-flex">
                                    <p>
                                        Сегодня дагестанский коньяк – настоящий бренд. По некоторым оценкам, 80% всего продаваемого в России ароматного алкогольного напитка родом из Дагестана. А французы до сих пор спорят, чей коньяк древнее – их или дагестанский.
                                    </p>
                                    <div class="cognac"></div>
                                </div>
                            </div>    
                        </div>
                    </div>
                </div>
            </section>
            





            <!-- Достопримечательности Иное -->
            <!-- <div class="category"><h2>И ещё много всего интересного</h2></div> -->
            <div class="catalog-container">
            <?php $data = Place::getLinesApiCategory("нет");
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

            <div class="two-buttons">
                <a href="../index.php" class="card-btn"><button class="card-item__btn btn-big btn-theme">На главную</button></a>
                <a href="tours-catalog.php" class="card-btn"><button class="card-item__btn btn-big btn-theme">К Турам</button></a>
            </div>
        
    
        </main>
        
        <?php include "footer.php";?>
        
    </div>
    
    <script src="./js/jquery-3.6.4.min.js"></script>
    <script src="./js/slick.min.js"></script>
    <script src="js/main.js"></script>

</body>

</html>