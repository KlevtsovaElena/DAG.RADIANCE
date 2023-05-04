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


-- 2023-05-04 14:45:28
