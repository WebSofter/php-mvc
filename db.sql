-- Adminer 4.7.8 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `tasks`;
CREATE TABLE `tasks` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `title` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_general_ci,
  `time` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `status` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `tasks` (`id`, `email`, `title`, `description`, `time`, `status`) VALUES
(45,	'zebra@gmail.com',	'Написать статью',	'Описание сути',	'2021-02-20T03:33',	''),
(6,	'mail@mail.ru',	'Задача 1',	'Описание к задаче 1',	'2021-02-09 03:20:28',	' '),
(7,	'mail@mail.ru',	'Задача 2',	'Описание к задаче 2',	'2021-02-09 03:20:59',	' '),
(8,	'mail@mail.ru',	'Задача 3',	'Описание к задаче 3',	'2021-02-09 03:22:39',	' '),
(9,	'mail@mail.ru',	'Задача 1',	'Описание к задаче 1',	'2021-02-09 03:20:28',	' '),
(10,	'mail@mail.ru',	'Задача 2',	'Описание к задаче 2',	'2021-02-09 03:20:59',	' '),
(11,	'mail@mail.ru',	'Задача 3',	'Описание к задаче 3',	'2021-02-09 03:22:39',	' '),
(12,	'mail@mail.ru',	'Задача 1',	'Описание к задаче 1',	'2021-02-09 03:20:28',	' '),
(13,	'mail@mail.ru',	'Задача 2',	'Описание к задаче 2',	'2021-02-09 03:20:59',	' '),
(14,	'mail@mail.ru',	'Задача 3',	'Описание к задаче 3',	'2021-02-09 03:22:39',	' '),
(15,	'mail@mail.ru',	'thrthrh',	'rthhrth',	'2021-02-27T13:55',	' '),
(16,	'mail@mail.ru',	'rthrth',	'rhrh',	'2021-02-25T10:57',	' '),
(17,	'mail@mail.ru',	'rthrth',	'rhrh',	'2021-02-25T10:57',	' '),
(18,	'mail@mail.ru',	'Задачка',	'к6н56',	'2021-02-27T14:01',	'1'),
(19,	'mail@mail.ru',	'Задачка',	'к6н56',	'2021-02-27T14:01',	' '),
(20,	'mail@mail.ru',	'крнкр',	'кнренрон',	'2021-02-25T11:02',	' '),
(22,	'mail@mail.ru',	'rthyth',	'tyhtyjtyjy',	'2021-02-26T14:07',	' '),
(28,	'mail@mail.ru',	'Задач 1000',	'Опсание задачи 9999',	'2021-02-10T11:05',	' '),
(24,	'mail@mail.ru',	'Задач 9999',	'Опсание задачи 9999',	'2021-02-10T11:05',	' '),
(29,	'mail@mail.ru',	'uyu',	'yuyu',	'2021-02-12T11:38',	' '),
(31,	'mail@mail.ru',	'Моя задача',	'Описание',	'2021-02-25T11:40',	' '),
(32,	'mail@mail.ru',	'Моя новая задачка',	'укеункнкн',	'2021-03-04T11:40',	'1'),
(33,	'mail@mail.ru',	'Моя новая задачка',	'Описание новое',	'2021-03-04T11:40',	' '),
(34,	'mail@mail.ru',	'Моя новая задачка',	'Новое описание',	'2021-03-04T11:40',	' '),
(35,	'mail@mail.ru',	'Моя новая задачка1',	'укеункнкн',	'2021-03-04T11:40',	' '),
(36,	'mail@mail.ru',	'Моя новая задачка1',	'Описание',	'2021-03-04T11:40',	' '),
(37,	'mail@mail.ru',	'Моя новая задачка1',	'Описание 555',	'2021-03-04T11:40',	' '),
(38,	'mail@mail.ru',	'Моя супер задача',	'Описание задачи',	'2021-02-27T14:46',	' '),
(42,	'mail@mail.ru',	'Моя супер задача',	'Описание задачи',	'2021-02-27T14:46',	' '),
(44,	'mail.websofter@gmail.com',	'Моя супер задача 1',	'rtht',	'2021-02-19T18:08',	'1');

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` char(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `login` char(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `password` char(150) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

INSERT INTO `users` (`id`, `name`, `login`, `password`) VALUES
(68,	'Давид',	'admin',	'OGhq');

-- 2021-02-15 00:35:08