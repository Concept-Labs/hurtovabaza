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
-- Структура таблицы `tovar_sausage`
--

CREATE TABLE `tovar_sausage` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `tovar_sausage`
--

INSERT INTO `tovar_sausage` (`id`, `name`, `label`) VALUES
(1, 'soyuzna', 'Союзна'),
(2, 'originalna', 'Оригінальна'),
(3, 'minska', 'Мінська'),
(4, 'ryadyanska', 'Радянська'),
(5, 'ekstra', 'Екстра'),
(6, 'olive', 'Олів\'є'),
(7, 'molochna_gocha', 'Молочна ДСТУ(Гоща)'),
(8, 'posolska_gocha', 'Посольська вар.(Гоща)'),
(9, 'serdelka_ukr', 'Сарделька українська'),
(10, 'serdelka_tovstunchik', 'Сарделька \"Товстунчик\"'),
(11, 'serdelka_shkilna', 'Сарделька \"Шкільна\"'),
(12, 'serdelka_mocarela', 'Сарделька \"Моцарела\"'),
(13, 'sosiska_lasunya', 'Сосиска \"Ласуня\"'),
(14, 'sosiska_lakomka', 'Сосиска \"Лакомка\"'),
(15, 'krakivska_brashno', 'Краківська (Брашно)'),
(16, 'shpikachka', 'Шпикачка'),
(17, 'dovbushska_brashno', 'Довбушська (Брашно)'),
(18, 'furshetna_gayar', 'Фуршетна (Гаяр)'),
(19, 'furshetna_brashno', 'Фуршетна (Брашно)'),
(20, 'servilat', 'Сервілат царський'),
(21, 'posolska_stema', 'Посольська (Стема)'),
(22, 'firmova_stema', 'Фірмова (Стема)'),
(23, 'salyami_italy', 'Салямі італійська'),
(24, 'svyatkova_stema', 'Святкова (Стема)'),
(25, 'balikova', 'Баликова'),
(26, 'mislivski', 'Мисливські'),
(27, 'domnadrovah', 'Домашня на дровах'),
(28, 'moskovska_gorodok', 'Московська (Городок)'),
(29, 'moskovska_stema', 'Московська (Стема)'),
(30, 'moskovska_dstu', 'Московська ДСТУ'),
(31, 'zamkova', 'Замкова'),
(32, 'staroslovyanska', 'Старослов\'янська'),
(33, 'uzhgorodska', 'Ужгородська'),
(34, 'avstraliyska', 'Австралійська'),
(35, 'bochok_polsha', 'Бочок (Польща)'),
(36, 'mahan', 'Махан'),
(37, 'macik', 'Мацик'),
(38, 'sloyka', 'Слойка'),
(39, 'sneki', 'Снеки до пива'),
(40, 'myunhenski_white', 'Мюнхенські білі'),
(41, 'furshetna_stasyuk', 'Фуршетна (Стасюк)'),
(42, 'drogobicka_stasyuk', 'Дрогобицька (Стасюк)'),
(43, 'guculska_stasyuk', 'Гуцульська (Стасюк)'),
(44, 'domnadrovah_stasyuk', 'Дом. на дровах (Стасюк)'),
(45, 'moskovska_stasyuk', 'Московська (Стасюк)'),
(46, 'mislivski_stasyuk', 'Мисливські (Стасюк)'),
(47, 'muskatna_stasyuk', 'Мускатна (Стасюк)'),
(48, 'shashlichni_stasyuk', 'Шашличні (Стасюк)');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `tovar_sausage`
--
ALTER TABLE `tovar_sausage`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `tovar_sausage`
--
ALTER TABLE `tovar_sausage`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
