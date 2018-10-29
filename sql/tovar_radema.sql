-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Авг 06 2018 г., 20:36
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
-- Структура таблицы `tovar_radema`
--

CREATE TABLE `tovar_radema` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_radema`
--

INSERT INTO `tovar_radema` (`id`, `name`, `label`) VALUES
(1, 'zernyatko_raf5l', 'Зернятко раф. 5л'),
(2, 'zernyatko_neraf5l', 'Зернятко не раф. 5л'),
(3, 'zernyatko_raf2l', 'Зернятко раф. 2л'),
(4, 'zernyatko_raf3l', 'Зернятко раф. 3л'),
(5, 'zernyatko_raf1l', 'Зернятко раф. 1л'),
(6, 'zernyatko_neraf1l', 'Зернятко не раф. 1л'),
(7, 'oil_polsha1l', 'Олія (Польща)1л'),
(8, 'oil_polsha5l', 'Олія (Польща)5л');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_radema`
--
ALTER TABLE `tovar_radema`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_radema`
--
ALTER TABLE `tovar_radema`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
