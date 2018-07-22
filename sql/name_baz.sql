-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 21 2018 г., 21:44
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
-- Структура таблицы `name_baz`
--

CREATE TABLE `name_baz` (
  `id` int(11) UNSIGNED NOT NULL,
  `number` varchar(55) NOT NULL,
  `name` varchar(55) NOT NULL,
  `bochka` varchar(55) NOT NULL,
  `fish` varchar(55) NOT NULL,
  `gyrtovna` varchar(55) NOT NULL,
  `center` varchar(55) NOT NULL,
  `bochka2` varchar(55) NOT NULL,
  `fish2` varchar(55) NOT NULL,
  `gyrtovna2` varchar(55) NOT NULL,
  `center2` varchar(55) NOT NULL,
  `dostavka` varchar(55) NOT NULL,
  `dia` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `name_baz`
--

INSERT INTO `name_baz` (`id`, `number`, `name`, `bochka`, `fish`, `gyrtovna`, `center`, `bochka2`, `fish2`, `gyrtovna2`, `center2`, `dostavka`, `dia`) VALUES
(1, '№', 'Назва', 'Бочка', 'Рибний термінал', 'Гуртовня', 'Центр', 'Бочка', 'Рибний термінал', 'Гуртовня', 'Центр', 'Доставити', 'Дія');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `name_baz`
--
ALTER TABLE `name_baz`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `name_baz`
--
ALTER TABLE `name_baz`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
