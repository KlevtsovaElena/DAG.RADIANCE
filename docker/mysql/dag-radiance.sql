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
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `category` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `category` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `places` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `link`, `category`) VALUES
(16,	'Гора Базардюзо',	'Самая высокая гора. Вершина располагается на высоте 4466 метров.',	'<h4>Самая высокая гора</h4>\r\n<p>Первое, что стоит отметить, рассматривая достопримечательности Кавказа, это самую высокую точку или гору Базардюзю.  Ее вершина располагается на высоте 4466 метров. Гора находится непосредственно на границе. Буквально одна часть ее принадлежит России, а вторая часть Азербайджану.</p>\r\n<p>С русского языка самая высокая точка переводится, как рыночная площадь. Объясняется это тем, что в давние времени восточнее горы устраивали крупные ярмарки. В них участвовать народы Восточного Кавказа.</p>\r\n<p>Сегодня сюда стекается большое количество туристов, альпинистов. Восхождение на гору вверх занимает 7 часов, спуск займет почти 4 часа. В то же время, сам поход до самой высокой точки будет продолжаться минимум три дня. Объясняется это тем, что организм должен привыкнуть к высоте, поэтому на определенных уровнях обязательно делают привалы.</p>',	'img/place/title/bazarduzo_1684573960.jpg',	'[\"img/place/carousel/bazarduzo_1684573960.jpg\"]',	NULL,	'горы'),
(17,	'Вершина Шалбудзаг',	'Лучшее место для паломничества мусульман',	'<p>Отправляясь в дагестанский тур, стоит заранее выяснить, какие горы в Дагестане стоит посмотреть в первую очередь. Особенно стоит выделить самые красивые вершины: Шалбуздаг. </p> <p>Лучшее место для паломничества мусульман. Практически каждый мусульманин Дагестана считает должным подняться на вершину горы. Восхождение приравнивается к хаджу. Здесь даже действует столовая, где паломники могут бесплатно отобедать. Для акклиматизации стоит предварительно пожить некоторое время в селе Куруш.</p>',	'img/place/title/shalbudzag_1684574141.jpg',	'[\"img/place/carousel/shalbudzag_1684574140.jpg\", \"img/place/carousel/shulbuzdag_1684574140.jpg\", \"img/place/carousel/shalbuzdag3_1684591137.jpg\"]',	NULL,	'горы'),
(18,	'Вершина Тарки-Тау',	'Вершина со смотровой площадкой, природный памятник.',	'<p>Со смотровых площадок открываются красивые виды на Махачкалу и Каспий. Не зря вершина называется природным памятником. Для туристов имеется смотровая площадка, с которой открываются виды на леса и хребты.</p>',	'img/place/title/taki-tau_1684574680.jpg',	'[\"img/place/carousel/gora-tarki-tau_1684574680.jpg\", \"img/place/carousel/tarki-tau3_1684591165.jpg\", \"img/place/carousel/tarki-tau4_1684591165.jpg\"]',	NULL,	'горы'),
(19,	'Аддала-Шухгельмеэр',	'Гора Кабалла по форме похожа на звезду.',	'<p>Гора известна под двумя названиями: официальным — Аддала-Шухгельмеэр и местным — Кабалла. С высоты птичьего полета по форме она похожа на звезду, относится к системе Кавказского Богосского хребта. Её абсолютная высота составляет 4 км 151 м. над уровнем моря. </p>\r\n',	'img/place/title/addala-shuhgelmer_1684574764.jpg',	'[\"img/place/carousel/addala-shuhgelmer_1684574764.jpg\"]',	NULL,	'горы'),
(20,	'Изберг-Тау',	'Профиль горы очень похож на профиль Пушкина А.С.',	'<p>Располагается около популярного пляжа и берега моря. Достаточно популярное в туризме место, особенно среди почитателей Пушкина. Считается, что профиль горы очень похож на профиль поэта. В 1978 году Пушкин-Тау была объявлена памятником природы. В честь этого события в Дагестане вышла памятная монета. Сегодня гора пользуется популярностью у альпинистов и любителей полётов на параплане.</p>\r\n',	'img/place/title/izberg-tau_1684575224.jpg',	'[\"img/place/carousel/izberg-tau_1684575224.jpg\", \"img/place/carousel/izberg-tau2_1684575224.jpg\", \"img/place/carousel/izberg-tau_1684591251.jpg\"]',	NULL,	'горы'),
(21,	'Гора Деавгай',	'Это самая высокая из точек Гельмец-Ахтынского хребта. ',	'<p>Гора Деавгай находится на Большом Кавказе. Это самая высокая из точек Гельмец-Ахтынского хребта. Сама вершина немного имеет вогнутую форму. На ней вечно присутствуют снега.</p>\r\n<p>Склоны гор довольно скалистые. Северная часть горы образует отвесную сланцевую стену черного цвета с большими объемами снегов. А с южной стороны — крутые склоны с ледово-снежным карнизом.</p>',	'img/place/title/deavgay_1684575303.jpg',	'[\"img/place/carousel/deavgay_1684575303.jpg\"]',	NULL,	'горы'),
(22,	'Диклосмта',	'Гора со смотровой площадкой на границе Грузии, Дагестана и Чечни.',	'<p>Это естественная граница между Грузией, Дагестаном и Чечней. Хребет покрыт шапками снега, имеются ледники и горные речки, питающие их. В горном районе имеется смотровая площадка.</p>\r\n',	'img/place/title/diklosmta_1684575403.jpg',	'[\"img/place/carousel/diklosmta_1684575403.jpg\", \"img/place/carousel/diklosmta2_1684591401.jpg\", \"img/place/carousel/diklosmta3_1684591401.jpg\"]',	NULL,	'горы'),
(23,	'Гора Маяк Гуниб',	'Село, парящее в небесах! Обелиск с девятью журавлями.',	'<h4>Гуниб — село, парящее в небесах</h4> \r\n<p>Одним из красивейших мест в Дагестане по праву можно назвать село Гуниб. Оно простирается на одноименном плато, расположенном на высоте 1500 метров над уровнем моря.</p>\r\n<p>Гуниб находится в 150 километрах от столицы Дагестана Махачкалы. Поселение возникло во второй половине 19 столетия в ходе строительства русского укрепленного пункта.</p>\r\n<p>Аул Гуниб, который имеет огромное историческое значение для всего Дагестана. Именно в отношении него говорят: «Кто не побывал в Гунибе, тот не видел сам Дагестан». Гуниб считают точкой отсчета путешествия по Дагестану. Село Гуниб расположено на вершине плосковидной горы — на Гунибском плато.</p>\r\n<p>Современное село Гуниб возникло в 1862 году. Здесь в 1859 году завершилась одна из самых тяжелых войн в истории Дагестана – Кавказская война, длившаяся 35 лет. И недаром великий русский художник И. К. Айвазовский увековечил Гуниб на своем полотне. За центральной площадью аула находится достопримечательность Гуниба – парк Победы имени Расула Гамзатова. Поэта в Гунибе почитают, как нигде в Дагестане. Поэтому в центре парка стоит обелиск с девятью журавлями. (Р. Гамзатов автор стихов к песне «Журавли».)</p>\r\n<p>На конкурсе «Моя Планета. Чудеса России». Из более чем 3000 работ были отобраны 44 снимка. Они стали экспонатами фотовыставки, которая проходит в нескольких городах России. Рассвет Над старой крепостью  Леонтьева Константина 1 из 44 </p>',	'img/place/title/mayak-gunib-small_1684575804.jpg',	'[\"img/place/carousel/gunib-krepost_1684575520.jpg\", \"img/place/carousel/gunib-plato_1684575520.jpg\", \"img/place/carousel/mayak-gunib_1684575520.jpg\", \"img/place/carousel/gunib-aul_1684592605.jpg\"]',	NULL,	'горы'),
(24,	'Подземный водопад',	'Дагестанское чудо: завораживающий подземный водопад в Салтинской теснине',	'<h4>Дагестанское чудо: завораживающий подземный водопад в Салтинской теснине</h4>\r\n<p>Салтинский водопад в Дагестане по праву занимает одно из первых мест в списке топовых локаций, которые непременно стоит увидеть! Уникальность этого небольшого, но потрясающе красивого водопада в том, что находится он... под землей. Его мощный поток, с грохотом падающий сквозь круглое отверстие в скале, создает иллюзию низвергающихся в подземелье небес...</p>\r\n<p>Водопад на территории теснины образует река Багдакули (Салтинка). Водопад прорывается сверху через отверстие в сплошной скале. Водопад не всегда имеет мощный поток воды и имеет пульсирующий характер, наибольший сток приходится на май-июнь, в период таяния снегов и максимальных осадков.</p>',	'img/place/title/vodopad-saltinka2_1684575928.jpg',	'[\"img/place/carousel/vodopad-saltinka_1684575928.jpg\", \"img/place/carousel/vodopad-saltinka3_1684575928.jpg\", \"img/place/carousel/vodopad2_1684591483.jpg\", \"img/place/carousel/vodopad3_1684591483.jpg\"]',	NULL,	'вода'),
(25,	'Аул-призрак Гамсутль',	'Аул с 2000-летней историей одиноко стоит посреди гор.',	'<p>Урбанизация — это неотъемлемая часть современной жизни, поэтому многие поселки со временем оказываются заброшены. То же случилось и с аулом Гамсутль, в котором ещё 50 лет назад бурлила жизнь, работали магазины, больницы и т. д. Однако со временем жители стали покидать родные дома и переезжать в более крупные населенные пункты, а в 2015 году умер последний житель Гамсутля.</p> <p>С тех пор село одиноко стоит посреди гор, ожидая того момента, когда навсегда исчезнет с лица Земли. Важно упомянуть, что примерный возраст Гамсутля составляет 2 тыс. лет, а на территории села были сделаны многочисленные археологические находки.</p>',	'img/place/title/gamsutl_1684576136.jpg',	'[\"img/place/carousel/gamsutl_1684576136.jpg\"]',	NULL,	'иное'),
(26,	'Старый Гоор',	'Древнее селение, расположенное на самом краю отвесной пропасти.',	'<p><h4 style=\"display: inline\" >Древнее селение Старый Гоор </h4> — достопримечательность горного Дагестана, которую хотят посмотреть практически все путешествующие по республике туристы. Расположено оно на самом краю отвесной пропасти и примечательно тем, что там сохранились оборонительные башни предположительно XVII века постройки. Невероятное мастерство древних строителей, сумевших в труднодоступном горном месте возвести строения необычной архитектуры, поражает и восхищает. К башенным стенам примыкали двухэтажные жилые дома, искусно вписанные в террасированную местность. Складывается ощущение, что дома и горы — единое целое.</p>',	'img/place/title/old-goor2_1684576260.jpg',	'[\"img/place/carousel/old-goor_1684576313.jpg\", \"img/place/carousel/goor-towers.jpg\", \"img/place/carousel/goor_1684591607.jpg\", \"img/place/carousel/goorskie-bashni_1684591607.jpg\"]',	NULL,	'иное'),
(27,	'Сулакский каньон',	'Глубочайший каньон Европы, поражающий красотой бирюзовых вод. Чиркейская ГЭС.',	'<p>Сула́кский каньо́н — каньон на территории России в долине реки Сулак (Республика Дагестан), глубочайший каньон Европы. Протяжённость каньона составляет 53 километра, глубина достигает 1920 метров. Это на 63 метра глубже Большого каньона в США и на 620 метров глубже каньона реки Тара.</p>\r\n<p>Миллионы лет природа создавала один из своих самых уникальных шедевров – Сулакский каньон. Глубиной он превосходит своего знаменитого заокеанского брата – Большой каньон в США. Это поистине масштабное творение природы притягивает путешественников и ученых со всего мира. Сулакский каньон по праву считают геологической энциклопедией, по которой можно изучать минувшие эпохи. Этот грандиозный памятник природы был очевидцем событий ледникового периода, о чем свидетельствуют следы, оставленные в камне. Он видел исторические вехи цивилизации, был местом эпических сражений, его необъятная красота и сила вдохновляла великих поэтов, писателей и художников. Своей глубиной каньон обязан реке Сулак, поражающей красотой бирюзовых вод, чьи бурные потоки сдерживают действующие плотины. Самой мощной считается Чиркейская ГЭС, благодаря которой образовалось знаменитое водохранилище</p>',	'img/place/title/каньон-small_1684576678.jpg',	'[\"img/place/carousel/sulak-kanion_1684576678.jpg\", \"img/place/carousel/sulak-kanion2_1684576678.jpg\", \"img/place/carousel/sulakskiy-kanion-big_1684576678.jpg\", \"img/place/carousel/sulak-kanion_1684591662.jpg\", \"img/place/carousel/sulak-kanion2_1684591675.jpg\"]',	NULL,	'вода'),
(28,	'Ирганайское водохранилище',	'Живописное водохранилище в Унцукульском районе Дагестана',	'<h4>Ирганайское водохранилище в Дагестане</h4>\r\n<p>Живописное водохранилище в Унцукульском районе Дагестана. Пусть это творение человека, а не природы, но выглядит место потрясающе: можно бесконечно любоваться отражением гор в изумрудном зеркале бассейна. Двадцатикилометровое Ирганайское водохранилище, зажатое между каменных стен, сравнивают с норвежским фьордом — извилистым узким морским заливом со скалистыми берегами, врезающимся в сушу. Вдоль водохранилища петляет хорошая асфальтированная дорога с четырехкилометровым Гимринским тоннелем..</p>',	'img/place/title/irgan-vodokhranilishe_1684576815.jpg',	'[\"img/place/carousel/irgan-vodokhranilishe_1684576815.jpg\", \"img/place/carousel/irgan-vodokhranilishe2_1684576815.jpg\", \"img/place/carousel/irgan-vodokhranilishe3_1684576815.jpg\", \"img/place/carousel/irganaiskoe-vodokhranilishche_1684591694.jpg\"]',	NULL,	'вода'),
(29,	'Сарыкум',	'Коротенькое описание',	'<p>полное описание</p>',	'img/place/title/Бархан-small_1684576928.jpg',	'[\"img/place/carousel/sarykum_1684576928.jpg\", \"img/place/carousel/Бархан_1684576928.jpg\", \"img/place/carousel/Бархан-small_1684576928.jpg\"]',	NULL,	'песок');

DROP TABLE IF EXISTS `places-archive`;
CREATE TABLE `places-archive` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `short-desc` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `full-desc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-carousel` json DEFAULT NULL,
  `price` int DEFAULT NULL,
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `places-archive` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `price`, `link`) VALUES
(1,	'Сулакский каньон',	'Коротенькое описание для места 1',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sulakskiy-kanion-big.jpg',	'[\"img/place/sulakskiy-kanion-big.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	500,	'ваыв'),
(2,	'Дербент',	'Коротенькое описание для места 2',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/derbent.jpg',	'[\"img/place/derbent.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(3,	'Гамсутль',	'Коротенькое описание для места 3',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/gamsutl.jpg',	'[\"img/place/gamsutl.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(4,	'Кахиб',	'Коротенькое описание для места 4',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/kakhib.webp',	'[\"img/place/kakhib.webp\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(5,	'Салтинская теснина',	'Коротенькое описание для места 5',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/saltin.jpg',	'[\"img/place/saltin.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(6,	'Тарки-Тау',	'Коротенькое описание для места 6',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/gora-tarki-tau.jpg',	'[\"img/place/gora-tarki-tau.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(7,	'Нарын-Кала',	'Коротенькое описание для места 7',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/naryn-kala.jpg',	'[\"img/place/naryn-kala.jpg\", \"img/place/кавказский-вавилон-small.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(8,	'Шалбуздаг',	'Коротенькое описание для места 8',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/shulbuzdag.jpg',	'[\"img/place/shulbuzdag.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(9,	'Сарыкум',	'Коротенькое описание для места 9',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sarykum.jpg',	'[\"img/place/sarykum.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(10,	'Карадахское ущелье',	'Коротенькое описание для места 10',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/karadakh.jpg',	'[\"img/place/karadakh.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(11,	'Гурские башни',	'Коротенькое описание для места 11',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/goor-towers.jpg',	'[\"img/place/goor-towers.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв'),
(12,	'Каспийское море',	'Коротенькое описание для места 12',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea.jpg',	'[\"img/place/sea.jpg\", \"img/place/кавказский-вавилон.jpeg\", \"img/place/Море.jpg\", \"img/place/Дербент.jpg\", \"img/place/Горы2.jpg\"]',	600,	'ваыв');

DROP TABLE IF EXISTS `tours`;
CREATE TABLE `tours` (
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

INSERT INTO `tours` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `price`, `link`) VALUES
(1,	'ТУР 1',	'Коротенькое описание для нашего тура 1',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'[\"img/place/sea01.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	500,	'ваыв'),
(2,	'ТУР 2',	'Коротенькое описание для нашего тура 2',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/gamsutl.jpg',	'[\"img/tours-catalog/gamsutl.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(3,	'ТУР 3',	'Коротенькое описание для нашего тура 3',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/goor-towers.jpg',	'[\"img/tours-catalog/goor-towers.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(4,	'ТУР 4',	'Коротенькое описание для нашего тура 4',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/karadakh.jpg',	'[\"img/tours-catalog/karadakh.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(5,	'ТУР 5',	'Коротенькое описание для нашего тура 5',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/naryn-kala-green.jpg',	'[\"img/tours-catalog/naryn-kala-green.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(6,	'ТУР 6',	'Коротенькое описание для нашего тура 6',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/shalbuzdag.jpg',	'[\"img/tours-catalog/shalbuzdag.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(7,	'ТУР 7',	'Коротенькое описание для нашего тура 7',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/gunib.jpg',	'[\"img/tours-catalog/gunib.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(8,	'ТУР 8',	'Коротенькое описание для нашего тура 8',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/old-kakhib.jpg',	'[\"img/tours-catalog/old-kakhib.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(9,	'ТУР 9',	'Коротенькое описание для нашего тура 9',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/saltin.jpeg',	'[\"img/tours-catalog/saltin.jpeg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(10,	'ТУР 10',	'Коротенькое описание для нашего тура 10',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/sarykum.jpg',	'[\"img/tours-catalog/sarykum.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(11,	'ТУР 11',	'Коротенькое описание для нашего тура 11',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/tarki-tau.jpg',	'[\"img/tours-catalog/tarki-tau.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(12,	'ТУР12',	'Коротенькое описание для нашего тура 12',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/sulak.jpg',	'[\"img/tours-catalog/sulak.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв');

DROP TABLE IF EXISTS `tours-archive`;
CREATE TABLE `tours-archive` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `short-desc` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `full-desc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-carousel` json DEFAULT NULL,
  `price` int DEFAULT NULL,
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tours-archive` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `price`, `link`) VALUES
(1,	'ТУР 1',	'Коротенькое описание для нашего тура 1',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'[\"img/place/sea01.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	500,	'ваыв'),
(2,	'ТУР 2',	'Коротенькое описание для нашего тура 2',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/gamsutl.jpg',	'[\"img/tours-catalog/gamsutl.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(3,	'ТУР 3',	'Коротенькое описание для нашего тура 3',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/goor-towers.jpg',	'[\"img/tours-catalog/goor-towers.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(4,	'ТУР 4',	'Коротенькое описание для нашего тура 4',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/karadakh.jpg',	'[\"img/tours-catalog/karadakh.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(5,	'ТУР 5',	'Коротенькое описание для нашего тура 5',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/naryn-kala-green.jpg',	'[\"img/tours-catalog/naryn-kala-green.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(6,	'ТУР 6',	'Коротенькое описание для нашего тура 6',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/shalbuzdag.jpg',	'[\"img/tours-catalog/shalbuzdag.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	600,	'ваыв'),
(7,	'ТУР 7',	'Коротенькое описание для нашего тура 7',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/gunib.jpg',	'[\"img/tours-catalog/gunib.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(8,	'ТУР 8',	'Коротенькое описание для нашего тура 8',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/old-kakhib.jpg',	'[\"img/tours-catalog/old-kakhib.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(9,	'ТУР 9',	'Коротенькое описание для нашего тура 9',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/saltin.jpeg',	'[\"img/tours-catalog/saltin.jpeg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(10,	'ТУР 10',	'Коротенькое описание для нашего тура 10',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/sarykum.jpg',	'[\"img/tours-catalog/sarykum.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(11,	'ТУР 11',	'Коротенькое описание для нашего тура 11',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/tarki-tau.jpg',	'[\"img/tours-catalog/tarki-tau.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв'),
(12,	'ТУР12',	'Коротенькое описание для нашего тура 12',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/tours-catalog/sulak.jpg',	'[\"img/tours-catalog/sulak.jpg\", \"img/card/plain.jpg\", \"img/card/reserve.jpg\", \"img/card/hills.jpg\", \"img/card/nature.jpeg\"]',	700,	'ваыв');

-- 2023-05-20 14:39:23
