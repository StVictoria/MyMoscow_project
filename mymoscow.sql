-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 05 2019 г., 18:53
-- Версия сервера: 10.1.38-MariaDB
-- Версия PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `mymoscow`
--
CREATE DATABASE IF NOT EXISTS `mymoscow` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mymoscow`;

-- --------------------------------------------------------

--
-- Структура таблицы `cards`
--

CREATE TABLE IF NOT EXISTS `cards` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pic` varchar(50) NOT NULL,
  `h3` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `priority` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `cards`
--

INSERT INTO `cards` (`id`, `pic`, `h3`, `description`, `priority`) VALUES
(1, '/icon/map.png', 'Необычные маршруты', 'Мы обязательно порадуем тебя необычными маршрутами Москвы, которые прокладывают наши опытные гиды. Ты увидишь и узнаешь о Москве то, что никогда не знал!', 10),
(2, '/icon/souvenir.png', 'Классные сувениры', 'Отличная новость! У нас появился магазин сувениров! И самое примечательное, что все эти сувениры делаем мы сами! Заходи к нам в гости!', 20),
(3, '/icon/compass.png', 'Интересные экскурсии', 'За время экскурсий, которых у нас больше 20, ты узнаешь и увидишь все основные достопримечательности: Кремль, Храм Христа Спасителя, так и пройдёшься по пешеходным улицам Москвы, узнаешь их историю и сделаешь классные фотографии.', 30),
(4, '/icon/picture.png', 'Фотосессии в Москве', 'Команда MyMoscow рада провести  креативные фотосессии в любом уголке Москвы. Не важно, свадьба у Вас или просто захотелось добавить в альбом или инстаграм красивых фоток.', 40),
(5, '/icon/discussion.png', 'Новые знакомства', 'MyMoscow - это целый клуб, где после московских прогулок ты сможешь продолжить общение с теми, кому интерена Москва, знакомиться с новыми людьми и делиться впечатлениями.', 50),
(6, '/icon/sun.png', 'Яркие впечатления', 'Самое важное - это яркие эмоции, которые останутся с тобой на долгое время! Поэтому в нашей команде мы ждём именно тебя!', 60);

-- --------------------------------------------------------

--
-- Структура таблицы `clients`
--

CREATE TABLE IF NOT EXISTS `clients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fio` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `comment` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `clients`
--

INSERT INTO `clients` (`id`, `fio`, `email`, `phone`, `comment`) VALUES
(1, 'Victoria', 'zbs666x2@gmail.com', 2147483647, '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
