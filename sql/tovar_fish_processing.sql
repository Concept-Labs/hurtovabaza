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
-- Структура таблицы `tovar_fish_processing`
--

CREATE TABLE `tovar_fish_processing` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_fish_processing`
--

INSERT INTO `tovar_fish_processing` (`id`, `name`, `label`) VALUES
(1, 'oseledec_ss', 'Оселедець с/с'),
(2, 'skumbriya_ss', 'Скумбрія с/с'),
(3, 'fileoseledcya_ss', 'Філе оселедця с/с'),
(4, 'tornado_skumbriya', 'Торнадо скумбрія'),
(5, 'tyulka_oil', 'Тюлька в олії'),
(6, 'tyulka_baltiyska', 'Тюлька балтійська'),
(7, 'oseledec_goroh', 'Оселедець (горох)'),
(8, 'salaka_oil', 'Салака в олії'),
(9, 'shproty_oil', 'Шпроти в олії'),
(10, 'gorbusha', 'Горбуша кусок'),
(11, 'midiya', 'Мідія'),
(12, 'skumbriya_oil', 'Скумбрія в олії'),
(13, 'morkva_king', 'Морква по кор.'),
(14, 'salat_shanhai', 'Салат \"Шанхай\"'),
(15, 'salat_babinelito', 'Салат \"Бабине літо\"'),
(16, 'morska_cibulya', 'Морська з цибулею'),
(17, 'morska_morkva', 'Морська з морквою'),
(18, 'skumbriya_hk', 'Скумбрія х/к'),
(19, 'skumbriya_gk', 'Скумбрія г/к'),
(20, 'fileskumbr_hk', 'Філе скумбр. х/к'),
(21, 'fileoseled_hk', 'Філе оселед. х/к'),
(22, 'sayra_hk', 'Сайра х/к'),
(23, 'moyva_hk', 'Мойва х/к'),
(24, 'salaka_hk', 'Салака х/к'),
(25, 'dunayka', 'Дунайка'),
(26, 'vomer', 'Вомер'),
(27, 'tushka_bichka', 'Тушка бичка'),
(28, 'hrebetlos_hk', 'Хребет лос. х/к'),
(29, 'hrebetlos_gk', 'Хребет лос. г/к'),
(30, 'vugor_hk', 'Вугор х/к'),
(31, 'lyach_vyaleniy', 'Лящ в\'ялений'),
(32, 'okun_vyaleniy', 'Окунь в\'ялений'),
(33, 'chuka_vyalena', 'Щука в\'ялена'),
(34, 'chehon_vyalena', 'Чехонь в\'ялена'),
(35, 'plotva_vyalena', 'Плотва в\'ялена');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_fish_processing`
--
ALTER TABLE `tovar_fish_processing`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_fish_processing`
--
ALTER TABLE `tovar_fish_processing`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
