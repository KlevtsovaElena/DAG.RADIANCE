-- Adminer 4.8.1 MySQL 8.0.33 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `login` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `role` varchar(50) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `temp_password` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `date_registr` datetime NOT NULL,
  `date_update` datetime DEFAULT NULL,
  `token` varchar(80) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb3;

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `login`, `role`, `password`, `temp_password`, `date_registr`, `date_update`, `token`) VALUES
(1,	'admin',	'admin',	'dagradiance',	'admin',	'inS4UGgjBAP.I',	'',	'2023-05-06 19:09:44',	'2023-05-06 19:10:25',	'in8CZN4snSZHc');

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE `contacts` (
  `id` int NOT NULL AUTO_INCREMENT,
  `phone` varchar(13) DEFAULT NULL,
  `mail` varchar(100) DEFAULT NULL,
  `telegram` varchar(100) DEFAULT NULL,
  `whatsapp` varchar(100) DEFAULT NULL,
  `vk` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb3;

INSERT INTO `contacts` (`id`, `phone`, `mail`, `telegram`, `whatsapp`, `vk`) VALUES
(1,	'70000000000',	'dagradiance@dagradiance.ru',	'telegram_account',	'whatsapp_account',	'vk_аккаунт');

DROP TABLE IF EXISTS `guest-houses`;
CREATE TABLE `guest-houses` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `short-desc` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `location` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `link` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

INSERT INTO `guest-houses` (`id`, `name`, `short-desc`, `image`, `location`, `link`) VALUES
(1,	'Загородный комплекс Домик в горах Дагестана',	NULL,	'img/hotels/domik.jpg',	'Гергебильский район, с. Чалда',	'https://домик-в-горах-дагестана.рф/'),
(2,	'Дома у моря Ethno Villa',	NULL,	'img/hotels/ethno-villa.jpg',	'г. Избербаш / г. Махачкала',	'https://ethnovilla.ru/'),
(3,	'Глэмпинг Аул мастеров',	'',	'img/hotels/aul-masterov.jpg',	'Казбековский район, п. Пионерный',	'https://tripinglamp.ru/glampings/aul-masterov/'),
(6,	'Гостевой дом Глобал',	'',	'img/hotels/global.jpg',	'Гергебильский район, с. Чалда',	'https://глобал-чалда.рф/');

DROP TABLE IF EXISTS `guides`;
CREATE TABLE `guides` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `img-title` varchar(1000) DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

INSERT INTO `guides` (`id`, `title`, `img-title`, `link`) VALUES
(2,	'tropki',	'img/guide/guide-tropki_1685040682.jpg',	'https://tropki.ru/rossiya/dagestan/ekskursii/gidy'),
(3,	'needguide',	'img/guide/guide-needguide_1685041461.jpg',	'https://needguide.ru/view_city.php?city=%D0%94%D0%B0%D0%B3%D0%B5%D1%81%D1%82%D0%B0%D0%BD'),
(4,	'sputnik8',	'img/guide/guide-sputnik_1685041487.jpg',	'https://www.sputnik8.com/ru/makhachkala/private-guides'),
(5,	'personalguide',	'img/guide/guide-personal_1685041556.jpg',	'https://www.personalguide.ru/rossiya/mahachkala/guide'),
(6,	'travel-or-die',	'img/guide/guide-travelordie_1685041599.jpg',	'https://travel-or-die.ru/russia/dagestan/gidy-v-dagestane/');

DROP TABLE IF EXISTS `guides-archive`;
CREATE TABLE `guides-archive` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `guide-desc` varchar(1000) NOT NULL,
  `photo` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

INSERT INTO `guides-archive` (`id`, `name`, `guide-desc`, `photo`) VALUES
(1,	'Дмитрий',	'Историк. Самый общительный гид. Стаж 10 лет',	'img/guides/guid.jpg'),
(2,	'Дмитрий',	'Историк. Самый общительный гид. Стаж 10 лет',	'img/guides/guid.jpg'),
(3,	'Дмитрий',	'Историк. Самый общительный гид. Стаж 10 лет',	'img/guides/guid.jpg'),
(4,	'Дмитрий',	'Историк. Самый общительный гид. Стаж 10 лет',	'img/guides/guid.jpg'),
(6,	'Дмитрий',	'Историк. Самый общительный гид. Стаж 10 лет',	'img/guides/guid.jpg');

DROP TABLE IF EXISTS `hotels`;
CREATE TABLE `hotels` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `short-desc` varchar(1000) DEFAULT NULL,
  `image` varchar(1000) NOT NULL,
  `location` varchar(250) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `link` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb3;

INSERT INTO `hotels` (`id`, `name`, `short-desc`, `image`, `location`, `link`) VALUES
(1,	'Гостиничный комплекс «Джами»',	NULL,	'img/hotels/djamihotel.jpg',	'г. Махачкала',	'https://djamihotel.ru/'),
(2,	'Гостиница Андалусия',	'',	'img/hotels/andalusiya.jpg',	'г. Махачкала',	'https://m.travelata.ru/russia/makhachkala/hotels/andalusiya-andalusiya-gostinica-3ca2cf3.html#?fromCity=2&dateFrom=29.05.2023&dateTo=29.05.2023&nightFrom=7&nightTo=10&adults=2&priceFrom=100&priceTo=50000000&meal=all&productType=all&hsid=l08rr1alj1'),
(3,	'Отель Ассорти',	NULL,	'img/hotels/assorty-hotel.jpg',	'г. Дербент, Сухая Речка',	'https://assorty-hotel.ru/'),
(5,	'Отель Рояль',	NULL,	'img/hotels/otel-royal.jpg',	'г. Дербент',	'https://travel.yandex.ru/hotels/derbent/roial/');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `places`;
CREATE TABLE `places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `short-desc` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `full-desc` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-carousel` json DEFAULT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `code-map` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `places` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `category`, `code-map`) VALUES
(16,	'Гора Базардюзю',	'Самая высокая гора. Вершина располагается на высоте 4466 метров.',	'<h4>Самая высокая гора</h4><p>Первое, что стоит отметить, рассматривая достопримечательности Кавказа, это самую высокую точку или гору Базардюзю.  Ее вершина располагается на высоте 4466 метров. Гора находится непосредственно на границе. Буквально одна часть ее принадлежит России, а вторая часть Азербайджану.</p><p>С русского языка самая высокая точка переводится, как рыночная площадь. Объясняется это тем, что в давние времени восточнее горы устраивали крупные ярмарки. В них участвовать народы Восточного Кавказа.</p><p>Сегодня сюда стекается большое количество туристов, альпинистов. Восхождение на гору вверх занимает 7 часов, спуск займет почти 4 часа. В то же время, сам поход до самой высокой точки будет продолжаться минимум три дня. Объясняется это тем, что организм должен привыкнуть к высоте, поэтому на определенных уровнях обязательно делают привалы.</p>',	'img/place/title/bazarduzo_1684573960.jpg',	'[\"img/place/carousel/bazarduzo_1684573960.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3A1145ebc3df6e959b6ae06e7c9b245ef3855b95a36239a8530088c7d2d96d7cd4&amp;source=constructor'),
(17,	'Вершина Шалбуздаг',	'Лучшее место для паломничества мусульман',	'<p>Отправляясь в дагестанский тур, стоит заранее выяснить, какие горы в Дагестане стоит посмотреть в первую очередь. Особенно стоит выделить самые красивые вершины: Шалбуздаг. </p> <p>Лучшее место для паломничества мусульман. Практически каждый мусульманин Дагестана считает должным подняться на вершину горы. Восхождение приравнивается к хаджу. Здесь даже действует столовая, где паломники могут бесплатно отобедать. Для акклиматизации стоит предварительно пожить некоторое время в селе Куруш.</p>',	'img/place/title/shalbudzag_1684574141.jpg',	'[\"img/place/carousel/shalbudzag_1684574140.jpg\", \"img/place/carousel/shulbuzdag_1684574140.jpg\", \"img/place/carousel/shalbuzdag3_1684591137.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3A2d6e1e2f7899979c283bfb2de6597683d1baca608813b9948c4aca0a9358552b&amp;source=constructor'),
(18,	'Вершина Тарки-Тау',	'Вершина со смотровой площадкой, природный памятник.',	'<p>Со смотровых площадок открываются красивые виды на Махачкалу и Каспий. Не зря вершина называется природным памятником. Для туристов имеется смотровая площадка, с которой открываются виды на леса и хребты.</p>',	'img/place/title/taki-tau_1684574680.jpg',	'[\"img/place/carousel/gora-tarki-tau_1684574680.jpg\", \"img/place/carousel/tarki-tau3_1684591165.jpg\", \"img/place/carousel/tarki-tau4_1684591165.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3Acfdd81cec7d0a86b5a42d81c59f62b7edf81a15746c16d76c8aa7866d9db06ae&amp;source=constructor'),
(19,	'Аддала-Шухгельмеэр',	'Гора Кабалла по форме похожа на звезду.',	'<p>Гора известна под двумя названиями: официальным — Аддала-Шухгельмеэр и местным — Кабалла. С высоты птичьего полета по форме она похожа на звезду, относится к системе Кавказского Богосского хребта. Её абсолютная высота составляет 4 км 151 м. над уровнем моря. </p>',	'img/place/title/addala-shuhgelmer_1684574764.jpg',	'[\"img/place/carousel/addala-shuhgelmer_1684574764.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3A27f025dab6a25943d7a5ee8e133ee4c1c89f860cbc7b6c2f49d2e51ea65c00fe&amp;source=constructor'),
(20,	'Изберг-Тау',	'Профиль горы очень похож на профиль Пушкина А.С.',	'<p>Располагается около популярного пляжа и берега моря. Достаточно популярное в туризме место, особенно среди почитателей Пушкина. Считается, что профиль горы очень похож на профиль поэта. В 1978 году Пушкин-Тау была объявлена памятником природы. В честь этого события в Дагестане вышла памятная монета. Сегодня гора пользуется популярностью у альпинистов и любителей полётов на параплане.</p>',	'img/place/title/izberg-tau_1684575224.jpg',	'[\"img/place/carousel/izberg-tau_1684575224.jpg\", \"img/place/carousel/izberg-tau2_1684575224.jpg\", \"img/place/carousel/izberg-tau_1684591251.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3Aef94dc747ce63daa7e974bddb152865c138c5f4b09ef26271617ebfc84402cf6&amp;source=constructor'),
(21,	'Гора Деавгай',	'Это самая высокая из точек Гельмец-Ахтынского хребта. ',	'<p>Гора Деавгай находится на Большом Кавказе. Это самая высокая из точек Гельмец-Ахтынского хребта. Сама вершина немного имеет вогнутую форму. На ней вечно присутствуют снега.</p><p>Склоны гор довольно скалистые. Северная часть горы образует отвесную сланцевую стену черного цвета с большими объемами снегов. А с южной стороны — крутые склоны с ледово-снежным карнизом.</p>',	'img/place/title/deavgay_1684575303.jpg',	'[\"img/place/carousel/deavgay_1684575303.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3A57393b4466130d1c9782e2f933b320859b0af6cf01d235a81a99be63ea7d09b4&amp;source=constructor'),
(22,	'Диклосмта',	'Гора со смотровой площадкой на границе Грузии, Дагестана и Чечни.',	'<p>Это естественная граница между Грузией, Дагестаном и Чечней. Хребет покрыт шапками снега, имеются ледники и горные речки, питающие их. В горном районе имеется смотровая площадка.</p>',	'img/place/title/diklosmta_1684575403.jpg',	'[\"img/place/carousel/diklosmta_1684575403.jpg\", \"img/place/carousel/diklosmta2_1684591401.jpg\", \"img/place/carousel/diklosmta3_1684591401.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3Ada27c3ecee41ca74997641264ed72222ce8e4421639e6c2bb7733d6f57e8963b&amp;source=constructor'),
(23,	'Гора Маяк Гуниб',	'Село, парящее в небесах! Обелиск с девятью журавлями.',	'<h4>Гуниб — село, парящее в небесах</h4> <p>Одним из красивейших мест в Дагестане по праву можно назвать село Гуниб. Оно простирается на одноименном плато, расположенном на высоте 1500 метров над уровнем моря.</p><p>Гуниб находится в 150 километрах от столицы Дагестана Махачкалы. Поселение возникло во второй половине 19 столетия в ходе строительства русского укрепленного пункта.</p><p>Аул Гуниб, который имеет огромное историческое значение для всего Дагестана. Именно в отношении него говорят: «Кто не побывал в Гунибе, тот не видел сам Дагестан». Гуниб считают точкой отсчета путешествия по Дагестану. Село Гуниб расположено на вершине плосковидной горы — на Гунибском плато.</p><p>Современное село Гуниб возникло в 1862 году. Здесь в 1859 году завершилась одна из самых тяжелых войн в истории Дагестана – Кавказская война, длившаяся 35 лет. И недаром великий русский художник И. К. Айвазовский увековечил Гуниб на своем полотне. За центральной площадью аула находится достопримечательность Гуниба – парк Победы имени Расула Гамзатова. Поэта в Гунибе почитают, как нигде в Дагестане. Поэтому в центре парка стоит обелиск с девятью журавлями. (Р. Гамзатов автор стихов к песне «Журавли».)</p><p>На конкурсе «Моя Планета. Чудеса России». Из более чем 3000 работ были отобраны 44 снимка. Они стали экспонатами фотовыставки, которая проходит в нескольких городах России. Рассвет Над старой крепостью  Леонтьева Константина 1 из 44 </p>',	'img/place/title/mayak-gunib-small_1684575804.jpg',	'[\"img/place/carousel/gunib-krepost_1684575520.jpg\", \"img/place/carousel/gunib-plato_1684575520.jpg\", \"img/place/carousel/mayak-gunib_1684575520.jpg\", \"img/place/carousel/gunib-aul_1684592605.jpg\"]',	'горы',	'https://yandex.ru/map-widget/v1/?um=constructor%3A53e794ad7d203d6f769a669b33393e46286e08d18864ef987e729a36ad3d3d8c&amp;source=constructor'),
(24,	'Подземный водопад',	'Дагестанское чудо: завораживающий подземный водопад в Салтинской теснине',	'<h4>Дагестанское чудо: завораживающий подземный водопад в Салтинской теснине</h4><p>Салтинский водопад в Дагестане по праву занимает одно из первых мест в списке топовых локаций, которые непременно стоит увидеть! Уникальность этого небольшого, но потрясающе красивого водопада в том, что находится он... под землей. Его мощный поток, с грохотом падающий сквозь круглое отверстие в скале, создает иллюзию низвергающихся в подземелье небес...</p><p>Водопад на территории теснины образует река Багдакули (Салтинка). Водопад прорывается сверху через отверстие в сплошной скале. Водопад не всегда имеет мощный поток воды и имеет пульсирующий характер, наибольший сток приходится на май-июнь, в период таяния снегов и максимальных осадков.</p>',	'img/place/title/vodopad-saltinka2_1684575928.jpg',	'[\"img/place/carousel/vodopad-saltinka_1684575928.jpg\", \"img/place/carousel/vodopad-saltinka3_1684575928.jpg\", \"img/place/carousel/vodopad2_1684591483.jpg\", \"img/place/carousel/vodopad3_1684591483.jpg\"]',	'вода',	'https://yandex.ru/map-widget/v1/?um=constructor%3Ac9801ca7adfc21ad5a13f5be7d09d65785894be5f0b86eab023a795ade0adfec&amp;source=constructor'),
(25,	'Аул-призрак Гамсутль',	'Аул с 2000-летней историей одиноко стоит посреди гор.',	'<p>Урбанизация — это неотъемлемая часть современной жизни, поэтому многие поселки со временем оказываются заброшены. То же случилось и с аулом Гамсутль, в котором ещё 50 лет назад бурлила жизнь, работали магазины, больницы и т. д. Однако со временем жители стали покидать родные дома и переезжать в более крупные населенные пункты, а в 2015 году умер последний житель Гамсутля.</p> <p>С тех пор село одиноко стоит посреди гор, ожидая того момента, когда навсегда исчезнет с лица Земли. Важно упомянуть, что примерный возраст Гамсутля составляет 2 тыс. лет, а на территории села были сделаны многочисленные археологические находки.</p>',	'img/place/title/gamsutl_1684576136.jpg',	'[\"img/place/carousel/gamsutl_1684576136.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3A8c18b68c38118b79e02b2923a99b73b90cb84c9e3051d65bca903568069d0888&amp;source=constructor'),
(26,	'Старый Гоор',	'Древнее селение, расположенное на самом краю отвесной пропасти.',	'<p><h4 style=\"display: inline\" >Древнее селение Старый Гоор </h4> — достопримечательность горного Дагестана, которую хотят посмотреть практически все путешествующие по республике туристы. Расположено оно на самом краю отвесной пропасти и примечательно тем, что там сохранились оборонительные башни предположительно XVII века постройки. Невероятное мастерство древних строителей, сумевших в труднодоступном горном месте возвести строения необычной архитектуры, поражает и восхищает. К башенным стенам примыкали двухэтажные жилые дома, искусно вписанные в террасированную местность. Складывается ощущение, что дома и горы — единое целое.</p>',	'img/place/title/old-goor2_1684576260.jpg',	'[\"img/place/carousel/old-goor_1684576313.jpg\", \"img/place/carousel/goor-towers.jpg\", \"img/place/carousel/goor_1684591607.jpg\", \"img/place/carousel/goorskie-bashni_1684591607.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3Aa5c33b0e1e8a9d24ae65abb203c5edf654844daa3cb02819e8e011669a892559&amp;source=constructor'),
(27,	'Сулакский каньон',	'Глубочайший каньон Европы, поражающий красотой бирюзовых вод. Чиркейская ГЭС.',	'<p>Сула́кский каньо́н — каньон на территории России в долине реки Сулак (Республика Дагестан), глубочайший каньон Европы. Протяжённость каньона составляет 53 километра, глубина достигает 1920 метров. Это на 63 метра глубже Большого каньона в США и на 620 метров глубже каньона реки Тара.</p><p>Миллионы лет природа создавала один из своих самых уникальных шедевров – Сулакский каньон. Глубиной он превосходит своего знаменитого заокеанского брата – Большой каньон в США. Это поистине масштабное творение природы притягивает путешественников и ученых со всего мира. Сулакский каньон по праву считают геологической энциклопедией, по которой можно изучать минувшие эпохи. Этот грандиозный памятник природы был очевидцем событий ледникового периода, о чем свидетельствуют следы, оставленные в камне. Он видел исторические вехи цивилизации, был местом эпических сражений, его необъятная красота и сила вдохновляла великих поэтов, писателей и художников. Своей глубиной каньон обязан реке Сулак, поражающей красотой бирюзовых вод, чьи бурные потоки сдерживают действующие плотины. Самой мощной считается Чиркейская ГЭС, благодаря которой образовалось знаменитое водохранилище</p>',	'img/place/title/каньон-small_1684576678.jpg',	'[\"img/place/carousel/sulak-kanion_1684576678.jpg\", \"img/place/carousel/sulak-kanion2_1684576678.jpg\", \"img/place/carousel/sulakskiy-kanion-big_1684576678.jpg\", \"img/place/carousel/sulak-kanion_1684591662.jpg\", \"img/place/carousel/sulak-kanion2_1684591675.jpg\"]',	'вода',	'https://yandex.ru/map-widget/v1/?um=constructor%3A383e7f45a004122fa68bcdc4a5bb1fcd4422d5823ae10a29dab50dfa436900e1&amp;source=constructor'),
(28,	'Ирганайское водохранилище',	'Живописное водохранилище в Унцукульском районе Дагестана',	'<h4>Ирганайское водохранилище в Дагестане</h4><p>Живописное водохранилище в Унцукульском районе Дагестана. Пусть это творение человека, а не природы, но выглядит место потрясающе: можно бесконечно любоваться отражением гор в изумрудном зеркале бассейна. Двадцатикилометровое Ирганайское водохранилище, зажатое между каменных стен, сравнивают с норвежским фьордом — извилистым узким морским заливом со скалистыми берегами, врезающимся в сушу. Вдоль водохранилища петляет хорошая асфальтированная дорога с четырехкилометровым Гимринским тоннелем..</p>',	'img/place/title/irgan-vodokhranilishe_1684576815.jpg',	'[\"img/place/carousel/irgan-vodokhranilishe_1684576815.jpg\", \"img/place/carousel/irgan-vodokhranilishe2_1684576815.jpg\", \"img/place/carousel/irgan-vodokhranilishe3_1684576815.jpg\", \"img/place/carousel/irganaiskoe-vodokhranilishche_1684591694.jpg\"]',	'вода',	'https://yandex.ru/map-widget/v1/?um=constructor%3A7988733f6cade8ba2601a9d6e32a93123dfe46665f3a0e8693639b8c6d43cffb&amp;source=constructor'),
(29,	'Бархан Сарыкум',	'Крупнейшая дюна в Европе, по высоте равна 90-этажному небоскребу.',	'<p>Бархан Сарыкум в Дагестане – удивительный природный феномен. Эта дюна признана крупнейшей в Европе, по высоте она равна 90-этажному небоскребу. Здесь царит собственный микроклимат, сложилась уникальная экосистема. По склону песчаного холма проложен оснащенный поручнями трап с металлической и деревянной поверхностью. На крутых участках устроены лестницы. С вершины открываются живописные панорамы скалистых предгорий Кавказа, вид на обширную степную долину и побережье Каспийского моря.</p>',	'img/place/title/Бархан-small_1684576928.jpg',	'[\"img/place/carousel/sarykum_1684576928.jpg\", \"img/place/carousel/Бархан_1684576928.jpg\", \"img/place/carousel/sarikum_1684839763.jpg\", \"img/place/carousel/sarykum_1684843988.jpg\"]',	'пустыня',	'https://yandex.ru/map-widget/v1/?um=constructor%3A1c0cd6f4abfdb4880b36360d94f0060881b2710eb1c605c9a05a5cb91ebb18ba&amp;source=constructor'),
(31,	'Карадахская теснина',	'Уникальный памятник природы - \"Ворота чудес\", \"Сланцевое ущелье\", Бецъкварили.',	'<p>Карадахская теснина, которую называют «Ворота чудес», «Сланцевое ущелье», Бецъкварили (на аварском — темное, слепое ущелье) — все это неформальные названия Карадахской теснины, уникального памятника природы республики Дагестан. Всего 5 м в ширину (на некоторых участках и того меньше — до 2 м) и целых 150 м в высоту — когда идешь вдоль гладких, будто отполированных стен теснины, кажется, будто тебя вот-вот зажмет между скалами.</p><p>Добавьте к этому вечный полумрак и огромные валуны, в нескольких местах висящие над ущельем — да, вид Карадахской теснины восхищает и ужасает одновременно. Расположена теснина в Гунибском районе в селе Карадах.</p>',	'img/place/title/karadah-tesnina3_1684840166.jpg',	'[\"img/place/carousel/karadah-tesnina_1684840166.jpg\", \"img/place/carousel/karadah-tesnina2_1684840166.jpg\", \"img/place/carousel/karadah-tesnina3_1684840166.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3Ac64f5fa78ffcec79ac9fabac9a72fb314ed48f20a22738f7dd030d6f469f770b&amp;source=constructor'),
(32,	'Крепость Нарын-кала',	'Нарын-кала - крепость с историей в 5000 лет. Входит в список всемирного наследия ЮНЕСКО.',	'<p>Нары́н-кала́ — персидская цитадель, часть Дербентской крепости, соединённая с Каспийским морем двойными стенами, призванными перекрывать так называемые Каспийские ворота в Персидскую державу. Входит в список всемирного наследия ЮНЕСКО. В переводе со среднеперсидского название означает «солнечная крепость». Со Средних веков Дербентская крепостная стена также называлась стеной Александра Македонского из-за предания, что её построил великий завоеватель.</p>',	'img/place/title/narin-kala_1684840317.jpg',	'[\"img/place/carousel/narin-kala_1684840317.jpg\", \"img/place/carousel/narin-kala2_1684840317.jpg\", \"img/place/carousel/narin-kala3_1684840317.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3A18cfbc2bd50ab47c294d1de65ce96b79b00c96b26f3d2a5046b288d2d5d49b58&amp;source=constructor'),
(33,	'Экраноплан-ракетоносец',	'Забытое наследие могущественной цивилизации. Экраноплан-ракетоносец проекта 903 “Лунь”',	'<h4>Экраноплан-ракетоносец проекта 903 “Лунь”</h4>\r\n<h4>«Творение, превзошедшее время»</h4>\r\n<p>В 20-е годы XX века ученые открыли экранный эффект — резкое увеличение подъемной силы летательного аппарата во время движения над ровной поверхностью. Это может быть море, лед, земля без перепадов высот. Используя эффект «воздушной подушки» между поверхностью и аппаратом, в 1961 году советский кораблестроитель Ростислав Алексеев сконструировал машину, не имевшую аналогов в мире, — экраноплан, скоростное судно, способное и передвигаться по воде, и лететь над поверхностью земли.</p><p>Его построили в СССР для уничтожения кораблей противников, он похож на корабль фантастического кино, и ему уже почти тридцать лет . в 2020 году экраноплан решили сохранить для истории и сделать центральным экспонатом дагестанского военно-патриотического парка в г. Дербент.</p><p>Самый мощный в мире летательный аппарат советские разработчики начали строить в 60-е годы. Длина 92 метра, размах 37 и взлетная масса 544 тонны. Аппарат должен был парить над водой за счет эффекта экрана. Назывался он официально КМ, что значило корабль-макет. Но американские спецслужбы расшифровали это как \"Каспийский монстр\", потому что испытания экраноплана проводили в Каспийском море, недалеко от города Каспийска.</p>',	'img/place/title/ecranoplan_1684843947.jpg',	'[\"img/place/carousel/ecranoplan2_1684844237.jpg\", \"img/place/carousel/ecranoplan3_1684844316.jpg\", \"img/place/carousel/ecranoplan4_1684844316.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3A141575de2ee5a546479f545b24ce1a268b7cc631f3cef22212eb92307bbe1a58&amp;source=constructor'),
(34,	'Каспийское море',	'Уникальный, единственный в мире замкнутый водоем с хрупкой и бесценной экосистемой.',	'<p>Море или озеро? Каспий — это озеро, потому что является замкнутым водоемом, не соединенным с Мировым океаном. Но называть его морем — не ошибка. По размеру (около 390 тыс. кв. км), глубине (до 1025 м), солености и геологической структуре дна это в общем-то море. Кроме того, в прошлом Каспий через Кумо-Манычскую впадину соединялся с Азовским морем (и некоторые ученые-практики, кстати, предлагают прорыть по линии бывшей впадины судоходный канал с системой шлюзов). А еще раньше, миллионы лет назад, на этом месте был океан Тетис. Каспийское, Черное, Азовское и Аральское моря, а также озеро Балатон в Венгрии — это все остатки древнего Тетиса.</p><p>Дагестан — не только красивая республика славящаяся величественными горами, прекрасными водопадами и богатым историческим наследием. Впрочем, пляжный отдых здесь тоже можно устроить замечательный – на Каспийском море, его обеспечивают лучшие курорты Республики, которые мы сегодня и опишем.</p><p>Жемчужиной уникальной красоты и самобытности является Каспийское море. Это уникальный, единственный в мире замкнутый водоем с хрупкой и бесценной экосистемой. Его уникальность привлекает к себе мировое внимание. Каспий считается самым большим внутренним водоемом в мире, располагается на стыке Азии и Европы. Удивительному природному творению уделили много своих трудов поэты, философы, историки, географы. Среди них: Гомер, Геродот, Аристотель. </p>',	'img/place/title/sea01_1684840907.jpg',	'[\"img/place/carousel/sea_1684840906.jpg\", \"img/place/carousel/Море_1684840907.jpg\", \"img/place/carousel/kaspiy-sea_1684840974.jpg\", \"img/place/carousel/kaspiy-sea2_1684840974.jpg\"]',	'вода',	NULL),
(35,	'Дагестанский коньяк',	'80% всего продаваемого коньяка в России родом из Дагестана.',	'<p>Сегодня дагестанский коньяк – настоящий бренд. По некоторым оценкам, 80% всего продаваемого в России ароматного алкогольного напитка родом из Дагестана. А французы до сих пор спорят, чей коньяк древнее – их или дагестанский. </p>',	'img/place/title/grape_1684841131.jpg',	'[\"img/place/carousel/cognac_1684841131.jpg\"]',	'нет',	NULL),
(36,	'Самурский лес',	'Единственный в России субтропический лиановый лес и один из самых северных в мире.',	'<p><b>Самурский лес</b> – это уникальная природная территория на юге Дагестана, единственный в России субтропический лиановый лес и один из самых северных в мире. Он является частью Самурского государственного национального парка в Дагестане, в котором произрастают тысячи видов растений, в том числе краснокнижных, обитает 51 вид редких птиц, а также насчитываются сотни видов животных. Из интересных и знаковых туристических мест в лесу также посещают старинное платановое дерево, которому якобы 800 лет, форелевое хозяйство и пляж с черным песком на берегу Каспийского моря.</p>',	'img/place/title/forest_1684841224.jpg',	'[\"img/place/carousel/forest_1684841224.jpg\", \"img/place/carousel/forest2_1684841224.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3A37c3071d811ceb8d6d8260cc83c8f346bd58972d3bf9cf3c097165410ff2fa01&amp;source=constructor'),
(37,	'Село Куруш',	'Самое высокогорное село Европы и России.',	'<p><b>Село Куруш</b> — не только самое южное в России, но и самое высокогорное в Европе. Здесь, в зоне альпийских лугов, уже не растут деревья, а облака находятся не вверху, а внизу. Панорама села, слева гора Ерыдак (3925 м.), справа Базардюзю (4466 м.), и Шалбуздаг ( 4150 м.). </p><p><i>У меня же незабываемое впечатление от нахождения в Куруше оставило звездное небо. Никогда я не видел столько звезд, ярко светящих на протяжение всей ночи. Не было ни одной ночи, когда бы я не выходил фотографировать небосвод.</i></p><p class=\"text-right\">Алексей Данилкин</p>',	'img/place/title/kurush_1684843842.jpg',	'[\"img/place/carousel/kurush_1684841377.jpg\", \"img/place/carousel/kurush2_1684841377.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3A68e7d995d2c3a609367e48f5464f9cb1d3c1140dbb623609c12ccb1127866ed7&amp;source=constructor'),
(38,	'Курахский район',	'Каньон Мерки, село Кабир, река Курах, гора Гестинкиль, Курах-дере',	'<p>Курахский район является одним из южных районов Республики Дагестан.</p><p>Одно из особенных мест Курахского района - Каньон Мерки. Вам нужно добраться до села Кабир и идти вниз по течению реки Курах - она приведёт Вас к каньону, ибо по его дну и течет река. </p><p>Гестинкиль - одна из живописных вершин Южного Дагестана.Высота горы - 2788 метров.</p><p>Курах-дере – одна из красивейших частей центрального горного Дагестана, расположенная в бассейне реки КурахвацI, между Самурским и Калухдагским хребтами. Большая часть территории занята горами – неприступные заснеженные вершины, головокружительные горные кручи перемежаются живописными склонами и лугами. </p>',	'img/place/title/merki-kanion_1684841546.jpg',	'[\"img/place/carousel/kabir-selo_1684841546.jpg\", \"img/place/carousel/merki-kanion_1684841546.jpg\", \"img/place/carousel/gestinkil_1684841838.jpg\", \"img/place/carousel/gestinkil2_1684841838.jpg\", \"img/place/carousel/kurah-dere_1684842233.jpg\", \"img/place/carousel/kurah-dere-ashar_1684842233.jpg\", \"img/place/carousel/kurah-dere-chehivir_1684842233.jpg\"]',	'нет',	'https://yandex.ru/map-widget/v1/?um=constructor%3A8d54f8d9827f29b9d7839f80af784f18856cb2d57cec62019506a64c16e19e08&amp;source=constructor');

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE `reviews` (
  `id` int NOT NULL AUTO_INCREMENT,
  `date-time` datetime NOT NULL,
  `photo` varchar(1000) DEFAULT NULL,
  `name` varchar(100) NOT NULL,
  `title` varchar(1000) DEFAULT NULL,
  `description` varchar(3000) NOT NULL,
  `rating` tinyint NOT NULL,
  `connection` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3;

INSERT INTO `reviews` (`id`, `date-time`, `photo`, `name`, `title`, `description`, `rating`, `connection`) VALUES
(1,	'2023-05-29 11:58:13',	'img\\place\\sulakskiy-kanion-big.jpg',	'Елена',	'Всё супер',	'Всё отлично!',	5,	'почта'),
(2,	'2023-05-29 11:58:13',	'img\\place\\sulakskiy-kanion-big.jpg',	'Елена',	'Всё супер',	'Всё отлично!',	4,	'почта'),
(3,	'2023-05-29 11:58:13',	'img\\place\\sulakskiy-kanion-big.jpg',	'Елена',	'Всё супер',	'Всё отлично!',	3,	'почта'),
(4,	'2023-05-29 11:58:13',	'img\\place\\sulakskiy-kanion-big.jpg',	'Елена',	'Всё супер',	'Всё отлично!',	2,	'почта');

DROP TABLE IF EXISTS `tours`;
CREATE TABLE `tours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `img-title` varchar(1000) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci DEFAULT NULL,
  `link` varchar(1000) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb3;

INSERT INTO `tours` (`id`, `title`, `img-title`, `link`) VALUES
(1,	'dag-tour',	'img/tour/title/dag-tour_1685011052.jpg',	'https://dag-tour.ru/'),
(2,	'sulakcanyon.com',	'img/tour/title/sulakcanyon_1685011149.jpg',	'https://sulakcanyon.com/'),
(3,	'etnomirkavkaza',	'img/tour/title/etnomirkavkaza_1685011177.jpg',	'https://etnomirkavkaza.ru/'),
(4,	'basirtour',	'img/tour/title/basirtour_1685011202.jpg',	'https://basirtour.ru/'),
(5,	'etalontravel',	'img/tour/title/etalontravel_1685011235.jpg',	'https://etalontravel.com/ru/'),
(6,	'your-dagestan',	'img/tour/title/your-dagestan_1685011265.jpg',	'https://your-dagestan.ru/'),
(7,	'dag-excurse',	'img/tour/title/dag-excurse_1685011301.jpg',	'http://dag-excurse.ru/'),
(8,	'caspian.travel',	'img/tour/title/caspian-travel_1685011337.jpg',	'https://caspian.travel/'),
(9,	'ethnotour05',	'img/tour/title/ethnotour05_1685011362.jpg',	'https://ethnotour05.ru/'),
(10,	'dagestanturist',	'img/tour/title/dagestanturist_1685011397.jpg',	'https://dagestanturist.ru/'),
(11,	'anextour',	'img/tour/title/anextour_1685011419.jpg',	'https://www.anextour.com/'),
(12,	'indigid',	'img/tour/title/indigid_1685011451.jpg',	'https://indigid.ru/');

DROP TABLE IF EXISTS `tours-archive`;
CREATE TABLE `tours-archive` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `short-desc` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `full-desc` varchar(3000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-carousel` json DEFAULT NULL,
  `price` int DEFAULT NULL,
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tours-archive` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `price`, `link`) VALUES
(1,	'ТУР 1',	'описание для нашего тура 1',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'[\"img/place/sea01.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	500,	''),
(2,	'ТУР 2',	'описание для нашего тура 2',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/gamsutl.jpg',	'[\"img/tours-catalog/gamsutl.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	''),
(3,	'ТУР 3',	'описание для нашего тура 3',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/goor-towers.jpg',	'[\"img/tours-catalog/goor-towers.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	''),
(4,	'ТУР 4',	'описание для нашего тура 4',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/karadakh.jpg',	'[\"img/tours-catalog/karadakh.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	''),
(5,	'ТУР 5',	'описание для нашего тура 5',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/naryn-kala-green.jpg',	'[\"img/tours-catalog/naryn-kala-green.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	''),
(6,	'ТУР 6',	'описание для нашего тура 6',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/shalbuzdag.jpg',	'[\"img/tours-catalog/shalbuzdag.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	''),
(7,	'ТУР 7',	'описание для нашего тура 7',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/gunib.jpg',	'[\"img/tours-catalog/gunib.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	''),
(8,	'ТУР 8',	'описание для нашего тура 8',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/old-kakhib.jpg',	'[\"img/tours-catalog/old-kakhib.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	''),
(9,	'ТУР 9',	'описание для нашего тура 9',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/saltin.jpeg',	'[\"img/tours-catalog/saltin.jpeg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	''),
(10,	'ТУР 10',	'описание для нашего тура 10',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/sarykum.jpg',	'[\"img/tours-catalog/sarykum.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	''),
(11,	'ТУР 11',	'описание для нашего тура 11',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/tarki-tau.jpg',	'[\"img/tours-catalog/tarki-tau.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	''),
(12,	'ТУР12',	'описание для нашего тура 12',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/sulak.jpg',	'[\"img/tours-catalog/sulak.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'');

-- 2023-05-29 12:14:52
