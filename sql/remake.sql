-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 31 2018 г., 11:31
-- Версия сервера: 5.5.56-MariaDB
-- Версия PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `admin_hurtovabaza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `remake`
--

CREATE TABLE `remake` (
  `id` int(111) UNSIGNED NOT NULL,
  `name_tovar` varchar(55) NOT NULL,
  `bochka_tovar` varchar(55) NOT NULL,
  `fish_tovar` varchar(55) NOT NULL,
  `gyrtovna_tovar` varchar(55) NOT NULL,
  `centr_tovar` varchar(55) NOT NULL,
  `bochka2_tovar` varchar(55) NOT NULL,
  `fish2_tovar` varchar(55) NOT NULL,
  `gyrtovna2_tovar` varchar(55) NOT NULL,
  `centr2_tovar` varchar(55) NOT NULL,
  `dostavka_tovar` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `remake`
--
ALTER TABLE `remake`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `remake`
--
ALTER TABLE `remake`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;