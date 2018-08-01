-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Июл 31 2018 г., 11:33
-- Версия сервера: 5.5.56-MariaDB
-- Версия PHP: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `admin_hurtovabaza`
--

-- --------------------------------------------------------

--
-- Структура таблицы `fish_sm`
--

CREATE TABLE `fish_sm` (
  `id` int(111) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Структура таблицы `fruits`
--

CREATE TABLE `fruits` (
  `id` int(111) UNSIGNED NOT NULL,
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
-- Дамп данных таблицы `fruits`
--

INSERT INTO `fruits` (`id`, `name_tovar`, `bochka_tovar`, `fish_tovar`, `gyrtovna_tovar`, `centr_tovar`, `bochka2_tovar`, `fish2_tovar`, `gyrtovna2_tovar`, `centr2_tovar`, `dostavka_tovar`, `date`) VALUES
(3, 'Банани', '45', '0', '0', '0', '0', '0', '0', '0', '0', '2018-07-31');

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

-- --------------------------------------------------------

--
-- Структура таблицы `ovis`
--

CREATE TABLE `ovis` (
  `id` int(111) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Структура таблицы `radema`
--

CREATE TABLE `radema` (
  `id` int(111) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Структура таблицы `ramake`
--

CREATE TABLE `ramake` (
  `id` int(111) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Структура таблицы `sausage`
--

CREATE TABLE `sausage` (
  `id` int(111) UNSIGNED NOT NULL,
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

-- --------------------------------------------------------

--
-- Структура таблицы `users_admin`
--

CREATE TABLE `users_admin` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_delivery`
--

CREATE TABLE `users_delivery` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `users_directrix`
--

CREATE TABLE `users_directrix` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `users_directrix`
--

INSERT INTO `users_directrix` (`id`, `login`, `password`, `date`) VALUES
(1, 'login_directrix', '6e25b7841692a7aa73d1c936e5950010', '2018-07-27');

-- --------------------------------------------------------

--
-- Структура таблицы `users_site`
--

CREATE TABLE `users_site` (
  `id` int(11) UNSIGNED NOT NULL,
  `login` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `vegetables`
--

CREATE TABLE `vegetables` (
  `id` int(111) UNSIGNED NOT NULL,
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
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `fish_sm`
--
ALTER TABLE `fish_sm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `name_baz`
--
ALTER TABLE `name_baz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ovis`
--
ALTER TABLE `ovis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `radema`
--
ALTER TABLE `radema`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ramake`
--
ALTER TABLE `ramake`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sausage`
--
ALTER TABLE `sausage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_admin`
--
ALTER TABLE `users_admin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_delivery`
--
ALTER TABLE `users_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_directrix`
--
ALTER TABLE `users_directrix`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users_site`
--
ALTER TABLE `users_site`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `vegetables`
--
ALTER TABLE `vegetables`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `fish_sm`
--
ALTER TABLE `fish_sm`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `name_baz`
--
ALTER TABLE `name_baz`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ovis`
--
ALTER TABLE `ovis`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `radema`
--
ALTER TABLE `radema`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `ramake`
--
ALTER TABLE `ramake`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sausage`
--
ALTER TABLE `sausage`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users_admin`
--
ALTER TABLE `users_admin`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_delivery`
--
ALTER TABLE `users_delivery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `users_directrix`
--
ALTER TABLE `users_directrix`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `users_site`
--
ALTER TABLE `users_site`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `vegetables`
--
ALTER TABLE `vegetables`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
