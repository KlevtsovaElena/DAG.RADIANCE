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
(1,	'70000000000',	'dagradiance@dagradiance.ru',	'telegram_account',	'whatsapp_account',	'vk_account');

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
  `full-desc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-title` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `img-carousel` json DEFAULT NULL,
  `price` int DEFAULT NULL,
  `link` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `places` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `price`, `link`) VALUES
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
  `full-desc` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
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

-- 2023-05-17 13:13:51
