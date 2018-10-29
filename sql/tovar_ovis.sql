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
-- Структура таблицы `tovar_ovis`
--

CREATE TABLE `tovar_ovis` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_ovis`
--

INSERT INTO `tovar_ovis` (`id`, `name`, `label`) VALUES
(1, 'krupa_yachna', 'Крупа ячна'),
(2, 'krupa_pshenichna', 'Крупа пшенична'),
(3, 'krupa_kukurudzyana', 'Крупа кукурудзяна'),
(4, 'grechka', 'Гречка'),
(5, 'grechaniy_prodil', 'Гречаний проділ'),
(6, 'perlovka', 'Перловка'),
(7, 'ris_long', 'Рис довгий'),
(8, 'ris_circle', 'Рис круглий'),
(9, 'ris_pareniy', 'Рис парений'),
(10, 'ris_sichka', 'Рис січка'),
(11, 'pshono', 'Пшоно'),
(12, 'manka', 'Манка'),
(13, 'goroh', 'Горох'),
(14, 'arnautka', 'Арнаутка'),
(15, 'sil_kam', 'Сіль кам\'яна'),
(16, 'sil_briket', 'Сіль в брикеті'),
(17, 'krohmal', 'Крохмаль'),
(18, 'soda_harchova', 'Сода харчова'),
(19, 'ocet_lviv', 'Оцет львівський'),
(20, 'cukor', 'Цукор'),
(21, 'kilka_darinka', 'Кілька даринка'),
(22, 'kukurudza_koncerv', 'Кукурудза коцервов.'),
(23, 'vermishel_gorodok_3kg', 'Вермішель городок 3кг'),
(24, 'vermishel_gorodok_1kg', 'Вермішель городок 1кг');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_ovis`
--
ALTER TABLE `tovar_ovis`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_ovis`
--
ALTER TABLE `tovar_ovis`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
