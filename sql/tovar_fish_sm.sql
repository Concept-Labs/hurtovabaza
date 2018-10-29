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
-- Структура таблицы `tovar_fish_sm`
--

CREATE TABLE `tovar_fish_sm` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_fish_sm`
--

INSERT INTO `tovar_fish_sm` (`id`, `name`, `label`) VALUES
(1, 'oseledec_sm', 'Оселедець с/м'),
(2, 'skumbriya_sm', 'Скумбрія с/м'),
(3, 'hek_sm', 'Хек с/м'),
(4, 'salaka_sm', 'Салака с/м'),
(5, 'krevetka', 'Креветка'),
(6, 'steyk_mas', 'Стейк масляної'),
(7, 'steyk_los', 'Стейк лосося'),
(8, 'krevetka_king', 'Креветка королівська'),
(9, 'file_panhasiusa', 'Філе пангасіуса'),
(10, 'nototeniya', 'Нототенія');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_fish_sm`
--
ALTER TABLE `tovar_fish_sm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_fish_sm`
--
ALTER TABLE `tovar_fish_sm`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
