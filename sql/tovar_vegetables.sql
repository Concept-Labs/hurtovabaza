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
-- Структура таблицы `tovar_vegetables`
--

CREATE TABLE `tovar_vegetables` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_vegetables`
--

INSERT INTO `tovar_vegetables` (`id`, `name`, `label`) VALUES
(1, 'grib', 'Гриб'),
(2, 'imbir', 'Імбир'),
(3, 'ogirok_kornishok', 'Огірок \"Корнішок\"'),
(4, 'krip', 'Кріп'),
(5, 'petrushka', 'Петрушка'),
(6, 'salat_green', 'Салат зелений'),
(7, 'avokado', 'Авокадо'),
(8, 'ayzberg', 'Айзберг'),
(9, 'rukola', 'Рукола'),
(10, 'pomidor_krug', 'Помідор \"Круглий\"'),
(11, 'pomidor_sliva', 'Помідор \"Сливочка\"'),
(12, 'pomidor_yellow', 'Помідор жовтий'),
(13, 'pomidor_red', 'Помідор червоний'),
(14, 'pomidor_blackprinc', 'Помідор \"Чорний принц\"'),
(15, 'pomidor_sokal', 'Помідор \"Сокаль\"'),
(16, 'pomidor_zorya', 'Помідор \"Зоря\"'),
(17, 'pomidor_cheri', 'Помідор \"Чері\"'),
(18, 'pomidor_kokteyl', 'Помідор \"Коктейль\"'),
(19, 'baklazhan', 'Баклажан'),
(20, 'perec_herson', 'Перець херсон'),
(21, 'perec_red', 'Перець червоний'),
(22, 'perec_yellow', 'Перець жовтий'),
(23, 'chasnik', 'Часник'),
(24, 'kapusta_bilock', 'Капуста \"Білок.\"'),
(25, 'kapusta_cvitna', 'Капуста \"Цвітна\"'),
(26, 'kapusta_pekinska', 'Капуста \"Пекінська\"'),
(27, 'kapusta_brokoli', 'Капуста \"Броколі\"'),
(28, 'morkva', 'Морква'),
(29, 'kartoplya', 'Картопля'),
(30, 'buryak', 'Буряк'),
(31, 'cibulya', 'Цибуля'),
(32, 'perec_chili', 'Перець чилі'),
(33, 'cibulya_yalta', 'Цибуля \"Ялта\"'),
(34, 'cibulya_white', 'Цибуля біла');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_vegetables`
--
ALTER TABLE `tovar_vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_vegetables`
--
ALTER TABLE `tovar_vegetables`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
