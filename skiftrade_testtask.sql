-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2019 г., 15:45
-- Версия сервера: 5.7.26
-- Версия PHP: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `skiftrade_testtask`
--

-- --------------------------------------------------------

--
-- Структура таблицы `requestsandanswers`
--

DROP TABLE IF EXISTS `requestsandanswers`;
CREATE TABLE IF NOT EXISTS `requestsandanswers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `theme` text,
  `request` text,
  `username` varchar(20) DEFAULT NULL,
  `sendTime` date DEFAULT NULL,
  `managerName` varchar(20) DEFAULT NULL,
  `answer` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `requestsandanswers`
--

INSERT INTO `requestsandanswers` (`id`, `theme`, `request`, `username`, `sendTime`, `managerName`, `answer`) VALUES
(1, 'rtttrtrtr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis, quam in porttitor egestas, sem sem fringilla ipsum, id consequat lectus nunc eget quam. Nullam ipsum urna, dignissim a elementum at, interdum nec nibh. Donec vitae dui porta, feugiat velit non, consequat purus. Sed blandit massa ipsum, ut tempor mi. ', 'client_01', NULL, NULL, NULL),
(2, 'yuyuyuyuuy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nisi non purus maximus mattis at vitae odio. Pellentesque ac auctor diam. Suspendisse potenti. Nulla consectetur semper purus. Vivamus et consequat purus. Vivamus eu turpis felis. Curabitur ullamcorper blandit nisl eget bibendum. Maecenas aliquet, lectus a tincidunt lacinia, dolor lorem. ', 'client_01', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `role` varchar(20) DEFAULT 'client',
  `email` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(8, 'some_name', 'ab307e96c76d2a617dba96f01e66a353', 'manager', 'testtask@testtask.testtask'),
(9, 'client_01', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'cleint_01@mail.ru'),
(10, 'client_02', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'cleint_02@mail.ru');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
