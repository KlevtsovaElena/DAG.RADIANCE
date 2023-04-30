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

-- 2023-04-30 16:32:56
