-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 17 2019 г., 23:36
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
  `theme` mediumtext,
  `request` mediumtext,
  `username` varchar(20) DEFAULT NULL,
  `sendDateAndTime` datetime DEFAULT NULL,
  `managerName` varchar(20) DEFAULT NULL,
  `answer` mediumtext,
  `fileName` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `requestsandanswers`
--

INSERT INTO `requestsandanswers` (`id`, `theme`, `request`, `username`, `sendDateAndTime`, `managerName`, `answer`, `fileName`) VALUES
(1, 'rtttrtrtr', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent facilisis, quam in porttitor egestas, sem sem fringilla ipsum, id consequat lectus nunc eget quam. Nullam ipsum urna, dignissim a elementum at, interdum nec nibh. Donec vitae dui porta, feugiat velit non, consequat purus. Sed blandit massa ipsum, ut tempor mi. ', 'client_01', '2019-11-10 00:00:00', 'some_name', 'dfgvhjnm.l,mknmbvbnmdfgvhjnm.l,mknmbvbnmdfgvhjnm.l,mknmbvbnmdfgvhjnm.l,mknmbvbnmdfgvhjnm.l,mknmbvbnm', NULL),
(2, 'yuyuyuyuuy', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed vel nisi non purus maximus mattis at vitae odio. Pellentesque ac auctor diam. Suspendisse potenti. Nulla consectetur semper purus. Vivamus et consequat purus. Vivamus eu turpis felis. Curabitur ullamcorper blandit nisl eget bibendum. Maecenas aliquet, lectus a tincidunt lacinia, dolor lorem. ', 'client_01', '2019-11-12 00:00:00', 'some_name', 'Integer fringilla lectus lectus, sed dignissim est lacinia venenatis. Quisque vel ante sit amet eros euismod accumsan sit amet ac quam. Nunc quis leo pulvinar, pharetra neque vel, placerat quam. ', NULL),
(3, 'qqqqqqqqqq', 'wwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwwweeeeeeeeeeeeeeeeeeeeeeeeeeeerrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'client_01', '2019-11-13 01:54:14', 'some_name', 'Suspendisse augue orci, feugiat eu blandit non, ornare nec lacus. Curabitur feugiat eu ex vel dapibus. Suspendisse tincidunt eros tellus, sed faucibus tellus hendrerit eu. Proin rhoncus ullamcorper venenatis. Sed. ', NULL),
(8, 'Nulla elit ex, pharetra sed elementum id. ', 'Mauris a venenatis neque. Donec sed leo non dui dignissim tempus. Etiam ac lectus convallis, malesuada lorem sollicitudin, fermentum enim. Donec vitae dui nibh. Curabitur bibendum egestas lorem, at pellentesque quam. Morbi tincidunt velit ipsum, eu accumsan arcu interdum quis. Nam non lacinia ipsum. Duis a congue nibh, eget consequat. ', 'client_02', '2019-11-17 06:22:03', NULL, NULL, NULL),
(9, 'Sed pulvinar pellentesque eros placerat commodo. Donec. ', 'Mauris id turpis sodales, lobortis eros sed, ullamcorper felis. Curabitur pulvinar fringilla purus in lacinia. Cras facilisis ex ac diam malesuada pulvinar. Sed vel eleifend mi, in ullamcorper sem. Donec ullamcorper leo non elit luctus fringilla. Quisque iaculis quam sit amet enim convallis sodales. Pellentesque nec dignissim massa, eu tristique. ', 'client_03', '2019-11-17 06:26:36', NULL, NULL, NULL),
(7, 'По поводу сроков доставки', 'Здравствуйте. Могли бы вы доставить одну покупку к 5 января 2020 года. Дело в том что я хочу подарить эту покупку другу который проживает в другом городе на его день рождения, т.е. ваш курьер должен доставить этот подарок по адресу, который я укажу именно 5 января 2020 года. Было бы замечательно, если бы так можно было. Заранее спасибо.', 'client_01', '2019-11-14 05:22:08', 'some_name', 'Здравствуйте. Да, это возможно. Важно лишь совершить покупку не позднее срока доставки конкретно для адреса получателя, и написать комментарий что курьер должен быть у получателя конкретно такого-то числа. То есть, в вашем случае, если на сайте будет указано что товар дойдет до получателя, скажем, за 7 календарных дней, то вы должна оставить на сайте заказ не позже, получается, 29 декабря. Сайт и служба доставки работают круглый год и круглосуточно (попеременно и посменно), поэтому выходные тоже включаются в срок доставки. Не забудьте в комментарии написать свою просьбу.', NULL),
(6, 'Книга опаздывает', 'Здравствуйте. 10 дней назад заказал у вас книгу. На сайте было сказано, что в течение 7 дней приедет. Жду, вот, уже 10-тый день. А покупки всё нет. Колл-центр занят. Скажите что с покупкой, когда приедет.', 'client_01', '2019-11-17 05:19:23', 'some_name', 'Здравствуйте. Ваш товар находится в пути. В данный момент товар в нашем хранилище в городе Караганда. Причина задержки выясняется. Предположительное время доставки 2-3дня. Просим извинений и, в качестве компенсации, добавляем в ваш аккаунт сертификат на покупку аксессуаров на сумму 1000 тенге. \r\nОставайтесь с нами.', NULL),
(12, 'Pellentesque eu laoreet lorem. ', 'Suspendisse augue orci, feugiat eu blandit non, ornare nec lacus. Curabitur feugiat eu ex vel dapibus. Suspendisse tincidunt eros tellus, sed faucibus tellus hendrerit eu. Proin rhoncus ullamcorper venenatis. Sed. ', 'client_07', '2019-11-18 02:20:32', NULL, NULL, 'Koala.jpg'),
(13, 'Aliquam quis lorem ex. ', 'Consectetur adipiscing elit. Curabitur ultricies lorem eu elementum tempus. Etiam vulputate massa sit amet urna luctus, ac faucibus ex viverra. Duis eget erat pharetra, posuere felis sit amet, malesuada eros. Pellentesque congue condimentum fringilla. Vivamus interdum nunc vitae odio rhoncus, vitae rhoncus sem mollis. Pellentesque. ', 'client_06', '2019-11-18 03:11:36', NULL, NULL, ''),
(14, 'asadasddsdsd', 'gfdgdfgfdggfdgdfgfdggfdgdfgfdggfdgdfgfdggfdgdfgfdggfdgdfgfdggfdgdfgfdg', 'client_08', '2019-11-18 05:08:55', 'some_name', 'nmnnlkjljhkjh', ''),
(15, 'asdfgsgs', 'xcvxcvxcvxcvxcvxcvxcvx', 'client_09', '2019-11-18 05:29:53', NULL, NULL, '');

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
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `email`) VALUES
(8, 'some_name', 'ab307e96c76d2a617dba96f01e66a353', 'manager', 'testtask@testtask.testtask'),
(9, 'client_01', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_01@mail.ru'),
(10, 'client_02', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_02@mail.ru'),
(11, 'client_03', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_03@mail.ru'),
(12, 'client_04', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_04@mail.ru'),
(13, 'client_05', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_05@mail.ru'),
(14, 'client_06', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_06@mail.ru'),
(15, 'client_07', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_07@mail.ru'),
(16, 'client_08', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_08@mail.ru'),
(17, 'client_09', '897c8fde25c5cc5270cda61425eed3c8', 'client', 'client_09@mail.ru');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
