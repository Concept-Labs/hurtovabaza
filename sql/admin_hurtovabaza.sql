-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: localhost
-- Время создания: Сен 06 2018 г., 17:58
-- Версия сервера: 5.5.60-MariaDB
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
-- Структура таблицы `cheese_delivery`
--

CREATE TABLE `cheese_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `distribution_bochka`
--

CREATE TABLE `distribution_bochka` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` int(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `distribution_center`
--

CREATE TABLE `distribution_center` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` int(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `distribution_fish_terminal`
--

CREATE TABLE `distribution_fish_terminal` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` int(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `distribution_gurtovnya`
--

CREATE TABLE `distribution_gurtovnya` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` int(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `driedfruit_delivery`
--

CREATE TABLE `driedfruit_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `fish_processing_delivery`
--

CREATE TABLE `fish_processing_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Структура таблицы `fish_sm_delivery`
--

CREATE TABLE `fish_sm_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
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

-- --------------------------------------------------------

--
-- Структура таблицы `fruits_delivery`
--

CREATE TABLE `fruits_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Структура таблицы `name_tovar`
--

CREATE TABLE `name_tovar` (
  `id` int(111) UNSIGNED NOT NULL,
  `name` varchar(55) NOT NULL,
  `label` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `name_tovar`
--

INSERT INTO `name_tovar` (`id`, `name`, `label`) VALUES
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
(31, 'sushka', 'Сушка'),
(32, 'grib', 'Гриб'),
(33, 'imbir', 'Імбир'),
(34, 'ogirok_kornishok', 'Огірок \"Корнішок\"'),
(35, 'krip', 'Кріп'),
(36, 'petrushka', 'Петрушка'),
(37, 'salat_green', 'Салат зелений'),
(38, 'avokado', 'Авокадо'),
(39, 'ayzberg', 'Айзберг'),
(40, 'rukola', 'Рукола'),
(41, 'pomidor_krug', 'Помідор \"Круглий\"'),
(42, 'pomidor_sliva', 'Помідор \"Сливочка\"'),
(43, 'pomidor_yellow', 'Помідор жовтий'),
(44, 'pomidor_red', 'Помідор червоний'),
(45, 'pomidor_blackprinc', 'Помідор \"Чорний принц\"'),
(46, 'pomidor_sokal', 'Помідор \"Сокаль\"'),
(47, 'pomidor_zorya', 'Помідор \"Зоря\"'),
(48, 'pomidor_cheri', 'Помідор \"Чері\"'),
(49, 'pomidor_kokteyl', 'Помідор \"Коктейль\"'),
(50, 'baklazhan', 'Баклажан'),
(51, 'perec_herson', 'Перець херсон'),
(52, 'perec_red', 'Перець червоний'),
(53, 'perec_yellow', 'Перець жовтий'),
(54, 'chasnik', 'Часник'),
(55, 'kapusta_bilock', 'Капуста \"Білок.\"'),
(56, 'kapusta_cvitna', 'Капуста \"Цвітна\"'),
(57, 'kapusta_pekinska', 'Капуста \"Пекінська\"'),
(58, 'kapusta_brokoli', 'Капуста \"Броколі\"'),
(59, 'morkva', 'Морква'),
(60, 'kartoplya', 'Картопля'),
(61, 'buryak', 'Буряк'),
(62, 'cibulya', 'Цибуля'),
(63, 'perec_chili', 'Перець чилі'),
(64, 'cibulya_yalta', 'Цибуля \"Ялта\"'),
(65, 'cibulya_white', 'Цибуля біла'),
(66, 'soyuzna', 'Союзна'),
(67, 'originalna', 'Оригінальна'),
(68, 'minska', 'Мінська'),
(69, 'ryadyanska', 'Радянська'),
(70, 'ekstra', 'Екстра'),
(71, 'olive', 'Олів\'є'),
(72, 'molochna_gocha', 'Молочна ДСТУ(Гоща)'),
(73, 'posolska_gocha', 'Посольська вар.(Гоща)'),
(74, 'serdelka_ukr', 'Сарделька українська'),
(75, 'serdelka_tovstunchik', 'Сарделька \"Товстунчик\"'),
(76, 'serdelka_shkilna', 'Сарделька \"Шкільна\"'),
(77, 'serdelka_mocarela', 'Сарделька \"Моцарела\"'),
(78, 'sosiska_lasunya', 'Сосиска \"Ласуня\"'),
(79, 'sosiska_lakomka', 'Сосиска \"Лакомка\"'),
(80, 'krakivska_brashno', 'Краківська (Брашно)'),
(81, 'shpikachka', 'Шпикачка'),
(82, 'dovbushska_brashno', 'Довбушська (Брашно)'),
(83, 'furshetna_gayar', 'Фуршетна (Гаяр)'),
(84, 'furshetna_brashno', 'Фуршетна (Брашно)'),
(85, 'servilat', 'Сервілат царський'),
(86, 'posolska_stema', 'Посольська (Стема)'),
(87, 'firmova_stema', 'Фірмова (Стема)'),
(88, 'salyami_italy', 'Салямі італійська'),
(89, 'svyatkova_stema', 'Святкова (Стема)'),
(90, 'balikova', 'Баликова'),
(91, 'mislivski', 'Мисливські'),
(92, 'domnadrovah', 'Домашня на дровах'),
(93, 'moskovska_gorodok', 'Московська (Городок)'),
(94, 'moskovska_stema', 'Московська (Стема)'),
(95, 'moskovska_dstu', 'Московська ДСТУ'),
(96, 'zamkova', 'Замкова'),
(97, 'staroslovyanska', 'Старослов\'янська'),
(98, 'uzhgorodska', 'Ужгородська'),
(99, 'avstraliyska', 'Австралійська'),
(100, 'bochok_polsha', 'Бочок (Польща)'),
(101, 'mahan', 'Махан'),
(102, 'macik', 'Мацик'),
(103, 'sloyka', 'Слойка'),
(104, 'sneki', 'Снеки до пива'),
(105, 'myunhenski_white', 'Мюнхенські білі'),
(106, 'furshetna_stasyuk', 'Фуршетна (Стасюк)'),
(107, 'drogobicka_stasyuk', 'Дрогобицька (Стасюк)'),
(108, 'guculska_stasyuk', 'Гуцульська (Стасюк)'),
(109, 'domnadrovah_stasyuk', 'Дом. на дровах (Стасюк)'),
(110, 'moskovska_stasyuk', 'Московська (Стасюк)'),
(111, 'mislivski_stasyuk', 'Мисливські (Стасюк)'),
(112, 'muskatna_stasyuk', 'Мускатна (Стасюк)'),
(113, 'shashlichni_stasyuk', 'Шашличні (Стасюк)'),
(114, 'sir_serenada', 'Сир \"Серенада\"'),
(115, 'sir_yellow', 'Сир \"Жовтий\"'),
(116, 'mocarela_black', 'Сир \"Моцарела\"(чорний)'),
(117, 'mocarela_green', 'Сир \"Моцарела\"(зелений)'),
(118, 'mocarela_long', 'Сир \"Моцарела\"(довгий)'),
(119, 'sir_king', 'Сир \"Королівський\"'),
(120, 'sir_favita', 'Сир \"Фавіта\"'),
(121, 'sir_slayen', 'Сир \"Слайен\"'),
(122, 'sir_topleniy', 'Сир \"Топльоний\"'),
(123, 'sirki_timosha', 'Сирки \"Тімоша\"'),
(124, 'maslo_minske', 'Масло \"Мінське\"'),
(125, 'oseledec_ss', 'Оселедець с/с'),
(126, 'skumbriya_ss', 'Скумбрія с/с'),
(127, 'fileoseledcya_ss', 'Філе оселедця с/с'),
(128, 'tornado_skumbriya', 'Торнадо скумбрія'),
(129, 'tyulka_oil', 'Тюлька в олії'),
(130, 'tyulka_baltiyska', 'Тюлька балтійська'),
(131, 'oseledec_goroh', 'Оселедець (горох)'),
(132, 'salaka_oil', 'Салака в олії'),
(133, 'shproty_oil', 'Шпроти в олії'),
(134, 'gorbusha', 'Горбуша кусок'),
(135, 'midiya', 'Мідія'),
(136, 'skumbriya_oil', 'Скумбрія в олії'),
(137, 'morkva_king', 'Морква по кор.'),
(138, 'salat_shanhai', 'Салат \"Шанхай\"'),
(139, 'salat_babinelito', 'Салат \"Бабине літо\"'),
(140, 'morska_cibulya', 'Морська з цибулею'),
(141, 'morska_morkva', 'Морська з морквою'),
(142, 'skumbriya_hk', 'Скумбрія х/к'),
(143, 'skumbriya_gk', 'Скумбрія г/к'),
(144, 'fileskumbr_hk', 'Філе скумбр. х/к'),
(145, 'fileoseled_hk', 'Філе оселед. х/к'),
(146, 'sayra_hk', 'Сайра х/к'),
(147, 'moyva_hk', 'Мойва х/к'),
(148, 'salaka_hk', 'Салака х/к'),
(149, 'dunayka', 'Дунайка'),
(150, 'vomer', 'Вомер'),
(151, 'tushka_bichka', 'Тушка бичка'),
(152, 'hrebetlos_hk', 'Хребет лос. х/к'),
(153, 'hrebetlos_gk', 'Хребет лос. г/к'),
(154, 'vugor_hk', 'Вугор х/к'),
(155, 'lyach_vyaleniy', 'Лящ в\'ялений'),
(156, 'okun_vyaleniy', 'Окунь в\'ялений'),
(157, 'chuka_vyalena', 'Щука в\'ялена'),
(158, 'chehon_vyalena', 'Чехонь в\'ялена'),
(159, 'plotva_vyalena', 'Плотва в\'ялена'),
(160, 'oseledec_sm', 'Оселедець с/м'),
(161, 'skumbriya_sm', 'Скумбрія с/м'),
(162, 'hek_sm', 'Хек с/м'),
(163, 'salaka_sm', 'Салака с/м'),
(164, 'krevetka', 'Креветка'),
(165, 'steyk_mas', 'Стейк масляної'),
(166, 'steyk_los', 'Стейк лосося'),
(167, 'krevetka_king', 'Креветка королівська'),
(168, 'file_panhasiusa', 'Філе пангасіуса'),
(169, 'nototeniya', 'Нототенія'),
(170, 'krupa_yachna', 'Крупа ячна'),
(171, 'krupa_pshenichna', 'Крупа пшенична'),
(172, 'krupa_kukurudzyana', 'Крупа кукурудзяна'),
(173, 'grechka', 'Гречка'),
(174, 'grechaniy_prodil', 'Гречаний проділ'),
(175, 'perlovka', 'Перловка'),
(176, 'ris_long', 'Рис довгий'),
(177, 'ris_circle', 'Рис круглий'),
(178, 'ris_pareniy', 'Рис парений'),
(179, 'ris_sichka', 'Рис січка'),
(180, 'pshono', 'Пшоно'),
(181, 'manka', 'Манка'),
(182, 'goroh', 'Горох'),
(183, 'arnautka', 'Арнаутка'),
(184, 'sil_kam', 'Сіль кам\'яна'),
(185, 'sil_briket', 'Сіль в брикеті'),
(186, 'krohmal', 'Крохмаль'),
(187, 'soda_harchova', 'Сода харчова'),
(188, 'ocet_lviv', 'Оцет львівський'),
(189, 'cukor', 'Цукор'),
(190, 'kilka_darinka', 'Кілька даринка'),
(191, 'kukurudza_koncerv', 'Кукурудза коцервов.'),
(192, 'vermishel_gorodok_3kg', 'Вермішель городок 3кг'),
(193, 'vermishel_gorodok_1kg', 'Вермішель городок 1кг'),
(194, 'zernyatko_raf5l', 'Зернятко раф. 5л'),
(195, 'zernyatko_neraf5l', 'Зернятко не раф. 5л'),
(196, 'zernyatko_raf2l', 'Зернятко раф. 2л'),
(197, 'zernyatko_raf3l', 'Зернятко раф. 3л'),
(198, 'zernyatko_raf1l', 'Зернятко раф. 1л'),
(199, 'zernyatko_neraf1l', 'Зернятко не раф. 1л'),
(200, 'oil_polsha1l', 'Олія (Польща)1л'),
(201, 'oil_polsha5l', 'Олія (Польща)5л');

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
-- Структура таблицы `ovis_delivery`
--

CREATE TABLE `ovis_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
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
-- Структура таблицы `radema_delivery`
--

CREATE TABLE `radema_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `remake`
--

CREATE TABLE `remake` (
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
-- Структура таблицы `sausage_delivery`
--

CREATE TABLE `sausage_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
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

-- --------------------------------------------------------

--
-- Структура таблицы `vegetables_delivery`
--

CREATE TABLE `vegetables_delivery` (
  `id` int(10) UNSIGNED NOT NULL,
  `tovar_id` varchar(55) NOT NULL,
  `number` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `cheese_delivery`
--
ALTER TABLE `cheese_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `distribution_bochka`
--
ALTER TABLE `distribution_bochka`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `distribution_center`
--
ALTER TABLE `distribution_center`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `distribution_fish_terminal`
--
ALTER TABLE `distribution_fish_terminal`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `distribution_gurtovnya`
--
ALTER TABLE `distribution_gurtovnya`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `driedfruit_delivery`
--
ALTER TABLE `driedfruit_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fish_processing_delivery`
--
ALTER TABLE `fish_processing_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fish_sm`
--
ALTER TABLE `fish_sm`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fish_sm_delivery`
--
ALTER TABLE `fish_sm_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fruits`
--
ALTER TABLE `fruits`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `fruits_delivery`
--
ALTER TABLE `fruits_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `name_baz`
--
ALTER TABLE `name_baz`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `name_tovar`
--
ALTER TABLE `name_tovar`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ovis`
--
ALTER TABLE `ovis`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ovis_delivery`
--
ALTER TABLE `ovis_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `radema`
--
ALTER TABLE `radema`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `radema_delivery`
--
ALTER TABLE `radema_delivery`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `remake`
--
ALTER TABLE `remake`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sausage`
--
ALTER TABLE `sausage`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `sausage_delivery`
--
ALTER TABLE `sausage_delivery`
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
-- Индексы таблицы `vegetables_delivery`
--
ALTER TABLE `vegetables_delivery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `cheese_delivery`
--
ALTER TABLE `cheese_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `distribution_bochka`
--
ALTER TABLE `distribution_bochka`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `distribution_center`
--
ALTER TABLE `distribution_center`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `distribution_fish_terminal`
--
ALTER TABLE `distribution_fish_terminal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `distribution_gurtovnya`
--
ALTER TABLE `distribution_gurtovnya`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `driedfruit_delivery`
--
ALTER TABLE `driedfruit_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fish_processing_delivery`
--
ALTER TABLE `fish_processing_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fish_sm`
--
ALTER TABLE `fish_sm`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fish_sm_delivery`
--
ALTER TABLE `fish_sm_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `fruits_delivery`
--
ALTER TABLE `fruits_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `name_baz`
--
ALTER TABLE `name_baz`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `name_tovar`
--
ALTER TABLE `name_tovar`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=202;

--
-- AUTO_INCREMENT для таблицы `ovis`
--
ALTER TABLE `ovis`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `ovis_delivery`
--
ALTER TABLE `ovis_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `radema`
--
ALTER TABLE `radema`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `radema_delivery`
--
ALTER TABLE `radema_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `remake`
--
ALTER TABLE `remake`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `sausage`
--
ALTER TABLE `sausage`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `sausage_delivery`
--
ALTER TABLE `sausage_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

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

--
-- AUTO_INCREMENT для таблицы `vegetables_delivery`
--
ALTER TABLE `vegetables_delivery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
