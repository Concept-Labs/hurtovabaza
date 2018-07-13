-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 13 2018 г., 20:11
-- Версия сервера: 10.1.30-MariaDB
-- Версия PHP: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `hurtovabaza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `number_product`
--

CREATE TABLE `number_product` (
  `id` int(111) UNSIGNED NOT NULL,
  `kod_tovar` varchar(55) NOT NULL,
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
-- Дамп данных таблицы `number_product`
--

INSERT INTO `number_product` (`id`, `kod_tovar`, `name_tovar`, `bochka_tovar`, `fish_tovar`, `gyrtovna_tovar`, `centr_tovar`, `bochka2_tovar`, `fish2_tovar`, `gyrtovna2_tovar`, `centr2_tovar`, `dostavka_tovar`, `date`) VALUES
(1, '25', 'Банани', '45', '53', '21', '33', '50', '56', '23', '34', '163', '2018-07-13'),
(2, '13', 'Мандарини', '25', '13', '46', '24', '25', '34', '10', '26', '95', '2018-07-13');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `number_product`
--
ALTER TABLE `number_product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `number_product`
--
ALTER TABLE `number_product`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
