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
-- Структура таблицы `tovar_fruits`
--

CREATE TABLE `tovar_fruits` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_fruits`
--

INSERT INTO `tovar_fruits` (`id`, `name`, `label`) VALUES
(1, 'banan', 'Банан'),
(2, 'apelsin', 'Апельсин'),
(3, 'limon', 'Лимон'),
(4, 'laim', 'Лайм'),
(5, 'greypfruit', 'Грейпфрукт'),
(6, 'kivi', 'Ківі'),
(7, 'ananas_big', 'Ананас вел.'),
(8, 'ananas_small', 'Ананас мал.'),
(9, 'granat', 'Гранат'),
(10, 'grusha', 'Груша'),
(11, 'persik_red', 'Персик \"Редхевен\"'),
(12, 'persik_princ', 'Персик \"Принц\"'),
(13, 'persik_ingir', 'Персик \"Інжирний\"'),
(14, 'nektarin_white', 'Нектарин \"Світлий\"'),
(15, 'nektarin_black', 'Нектарин \"Темний\"'),
(16, 'abrikos', 'Абрикос'),
(17, 'sliva', 'Слива'),
(18, 'vinograd_kish', 'Виноград \"Киш-Миш\"'),
(19, 'vinograd_myskat', 'Виноград \"Мускат\"'),
(20, 'vinograd_arkadiya', 'Виноград \"Аркадія\"'),
(21, 'vinograd_kardinal', 'Виноград \"Кардинал\"'),
(22, 'vinograd_preob', 'Виноград \"Преображеніє\"'),
(23, 'vinograd_moldova', 'Виноград \"Молдова\"'),
(24, 'yabluko_golden', 'Яблуко \"Голден\"'),
(25, 'izym', 'Ізюм'),
(26, 'chornosliv_vyal', 'Чорнослив в\'ялений'),
(27, 'kuraga', 'Курага'),
(28, 'finiki', 'Фініки'),
(29, 'ingir', 'Інжир'),
(30, 'cukaty', 'Цукати'),
(31, 'sushka', 'Сушка');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_fruits`
--
ALTER TABLE `tovar_fruits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_fruits`
--
ALTER TABLE `tovar_fruits`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
