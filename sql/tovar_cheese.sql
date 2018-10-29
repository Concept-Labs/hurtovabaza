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
-- Структура таблицы `tovar_cheese`
--

CREATE TABLE `tovar_cheese` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_cheese`
--

INSERT INTO `tovar_cheese` (`id`, `name`, `label`) VALUES
(1, 'sir_serenada', 'Сир \"Серенада\"'),
(2, 'sir_yellow', 'Сир \"Жовтий\"'),
(3, 'mocarela_black', 'Сир \"Моцарела\"(чорний)'),
(4, 'mocarela_green', 'Сир \"Моцарела\"(зелений)'),
(5, 'mocarela_long', 'Сир \"Моцарела\"(довгий)'),
(6, 'sir_king', 'Сир \"Королівський\"'),
(7, 'sir_favita', 'Сир \"Фавіта\"'),
(8, 'sir_slayen', 'Сир \"Слайен\"'),
(9, 'sir_topleniy', 'Сир \"Топльоний\"'),
(10, 'sirki_timosha', 'Сирки \"Тімоша\"'),
(11, 'maslo_minske', 'Масло \"Мінське\"');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_cheese`
--
ALTER TABLE `tovar_cheese`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_cheese`
--
ALTER TABLE `tovar_cheese`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
