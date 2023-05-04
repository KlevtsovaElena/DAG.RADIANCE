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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb3;

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `login`, `role`, `password`, `temp_password`, `date_registr`, `date_update`, `token`) VALUES
(1,	'Елена',	'Клевцова',	'klevtsova-ev',	'admin',	'ingP3pI3LX91.',	'',	'2023-02-21 17:55:33',	NULL,	'inae9e21M2C8g'),
(2,	'Марк',	'Таратынов',	'taratynov',	'admin',	'ingP3pI3LX91.',	'',	'2023-02-21 17:55:59',	NULL,	''),
(3,	'Вася',	'Пупкин',	'manager1',	'manager',	'ingP3pI3LX91.',	'',	'2023-02-21 18:08:02',	NULL,	''),
(4,	'awsedfg',	'awsedf',	'ivanov-ii',	'qwe',	'inZtY5NaGmYb.',	'',	'2023-02-27 09:46:18',	'2023-02-27 12:11:28',	'injlFq8ohTAaE'),
(5,	'роман',	'романов',	'romanov-rr',	'manager',	'injY8GPhDQhbc',	'',	'2023-02-27 12:17:07',	'2023-02-27 12:17:57',	'inolYPzg05wTA'),
(6,	'roma',	'roma',	'rrr',	'admin',	'injY8GPhDQhbc',	'',	'2023-02-27 12:28:25',	'2023-02-27 12:29:40',	'in/cLAu/gYQIE');

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `places`;
CREATE TABLE `places` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `short-desc` varchar(250) NOT NULL,
  `full-desc` varchar(1000) NOT NULL,
  `img-title` varchar(500) NOT NULL,
  `img-carousel` json NOT NULL,
  `price` int NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `places` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `price`, `link`) VALUES
(1,	'МЕСТО 1',	'Коротенькое описание для места 1',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/каньон-small.jpg',	'{\"gdf\": \"ghgh\"}',	500,	'ваыв'),
(2,	'МЕСТО2',	'Коротенькое описание для места 2',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/каньон-small.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(3,	'МЕСТО3',	'Коротенькое описание для места 3',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/каньон-small.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(4,	'МЕСТО4',	'Коротенькое описание для места 4',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/каньон-small.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(5,	'МЕСТО5',	'Коротенькое описание для места 5',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/каньон-small.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(6,	'МЕСТО6',	'Коротенькое описание для места 6',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/каньон-small.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв');

DROP TABLE IF EXISTS `tours`;
CREATE TABLE `tours` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL,
  `short-desc` varchar(250) NOT NULL,
  `full-desc` varchar(1000) NOT NULL,
  `img-title` varchar(500) NOT NULL,
  `img-carousel` json NOT NULL,
  `price` int NOT NULL,
  `link` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `tours` (`id`, `title`, `short-desc`, `full-desc`, `img-title`, `img-carousel`, `price`, `link`) VALUES
(1,	'ТУР 1',	'Коротенькое описание для нашего тура 1',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'{\"gdf\": \"ghgh\"}',	500,	'ваыв'),
(2,	'ТУР 2',	'Коротенькое описание для нашего тура 2',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(3,	'ТУР 3',	'Коротенькое описание для нашего тура 3',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(4,	'ТУР 4',	'Коротенькое описание для нашего тура 4',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(5,	'ТУР 5',	'Коротенькое описание для нашего тура 5',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв'),
(6,	'ТУР 6',	'Коротенькое описание для нашего тура 6',	'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Esse iure, debitis repudiandae cum saepe corrupti facilis. Explicabo omnis fugit exercitationem rem, eligendi quo incidunt neque vitae corrupti amet sunt aliquid.',	'img/place/sea01.jpg',	'{\"gdf\": \"ghgh\"}',	600,	'ваыв');

-- 2023-05-04 18:31:46
