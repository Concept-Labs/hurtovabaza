-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 29 2018 г., 12:28
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
-- Структура таблицы `delivery`
--

CREATE TABLE `delivery` (
  `id` int(111) UNSIGNED NOT NULL,
  `banan` varchar(55) NOT NULL,
  `apelsin` varchar(55) NOT NULL,
  `limon` varchar(55) NOT NULL,
  `laim` varchar(55) NOT NULL,
  `greypfruit` varchar(55) NOT NULL,
  `kivi` varchar(55) NOT NULL,
  `ananas_big` varchar(55) NOT NULL,
  `ananas_small` varchar(55) NOT NULL,
  `granat` varchar(55) NOT NULL,
  `grusha` varchar(55) NOT NULL,
  `persik_red` varchar(55) NOT NULL,
  `persik_princ` varchar(55) NOT NULL,
  `persik_ingir` varchar(55) NOT NULL,
  `nektarin_white` varchar(55) NOT NULL,
  `nektarin_black` varchar(55) NOT NULL,
  `abrikos` varchar(55) NOT NULL,
  `sliva` varchar(55) NOT NULL,
  `vinograd_kish` varchar(55) NOT NULL,
  `vinograd_myskat` varchar(55) NOT NULL,
  `vinograd_arkadiya` varchar(55) NOT NULL,
  `vinograd_kardinal` varchar(55) NOT NULL,
  `vinograd_preob` varchar(55) NOT NULL,
  `vinograd_moldova` varchar(55) NOT NULL,
  `yabluko_golden` varchar(55) NOT NULL,
  `izym` varchar(55) NOT NULL,
  `chornosliv_vyal` varchar(55) NOT NULL,
  `kuraga` varchar(55) NOT NULL,
  `finiki` varchar(55) NOT NULL,
  `ingir` varchar(55) NOT NULL,
  `cukaty` varchar(55) NOT NULL,
  `sushka` varchar(55) NOT NULL,
  `grib` varchar(55) NOT NULL,
  `imbir` varchar(55) NOT NULL,
  `ogirok_kornishok` varchar(55) NOT NULL,
  `krip` varchar(55) NOT NULL,
  `petrushka` varchar(55) NOT NULL,
  `salat_green` varchar(55) NOT NULL,
  `avokado` varchar(55) NOT NULL,
  `ayzberg` varchar(55) NOT NULL,
  `rukola` varchar(55) NOT NULL,
  `pomidor_krug` varchar(55) NOT NULL,
  `pomidor_sliva` varchar(55) NOT NULL,
  `pomidor_yellow` varchar(55) NOT NULL,
  `pomidor_red` varchar(55) NOT NULL,
  `pomidor_blackprinc` varchar(55) NOT NULL,
  `pomidor_sokal` varchar(55) NOT NULL,
  `pomidor_zorya` varchar(55) NOT NULL,
  `pomidor_cheri` varchar(55) NOT NULL,
  `pomidor_kokteyl` varchar(55) NOT NULL,
  `baklazhan` varchar(55) NOT NULL,
  `perec_herson` varchar(55) NOT NULL,
  `perec_red` varchar(55) NOT NULL,
  `perec_yellow` varchar(55) NOT NULL,
  `chasnik` varchar(55) NOT NULL,
  `kapusta_bilock` varchar(55) NOT NULL,
  `kapusta_cvitna` varchar(55) NOT NULL,
  `kapusta_pekinska` varchar(55) NOT NULL,
  `kapusta_brokoli` varchar(55) NOT NULL,
  `morkva` varchar(55) NOT NULL,
  `kartoplya` varchar(55) NOT NULL,
  `buryak` varchar(55) NOT NULL,
  `cibulya` varchar(55) NOT NULL,
  `perec_chili` varchar(55) NOT NULL,
  `cibulya_yalta` varchar(55) NOT NULL,
  `cibulya_white` varchar(55) NOT NULL,
  `soyuzna` varchar(55) NOT NULL,
  `originalna` varchar(55) NOT NULL,
  `minska` varchar(55) NOT NULL,
  `ryadyanska` varchar(55) NOT NULL,
  `ekstra` varchar(55) NOT NULL,
  `olive` varchar(55) NOT NULL,
  `molochna_gocha` varchar(55) NOT NULL,
  `posolska_gocha` varchar(55) NOT NULL,
  `serdelka_ukr` varchar(55) NOT NULL,
  `serdelka_tovstunchik` varchar(55) NOT NULL,
  `serdelka_shkilna` varchar(55) NOT NULL,
  `serdelka_mocarela` varchar(55) NOT NULL,
  `sosiska_lasunya` varchar(55) NOT NULL,
  `sosiska_lakomka` varchar(55) NOT NULL,
  `krakivska_brashno` varchar(55) NOT NULL,
  `shpikachka` varchar(55) NOT NULL,
  `dovbushska_brashno` varchar(55) NOT NULL,
  `furshetna_gayar` varchar(55) NOT NULL,
  `furshetna_brashno` varchar(55) NOT NULL,
  `servilat` varchar(55) NOT NULL,
  `posolska_stema` varchar(55) NOT NULL,
  `firmova_stema` varchar(55) NOT NULL,
  `salyami_italy` varchar(55) NOT NULL,
  `svyatkova_stema` varchar(55) NOT NULL,
  `balikova` varchar(55) NOT NULL,
  `mislivski` varchar(55) NOT NULL,
  `domnadrovah` varchar(55) NOT NULL,
  `moskovska_gorodok` varchar(55) NOT NULL,
  `moskovska_stema` varchar(55) NOT NULL,
  `moskovska_dstu` varchar(55) NOT NULL,
  `zamkova` varchar(55) NOT NULL,
  `staroslovyanska` varchar(55) NOT NULL,
  `uzhgorodska` varchar(55) NOT NULL,
  `avstraliyska` varchar(55) NOT NULL,
  `bochok_polsha` varchar(55) NOT NULL,
  `mahan` varchar(55) NOT NULL,
  `macik` varchar(55) NOT NULL,
  `sloyka` varchar(55) NOT NULL,
  `sneki` varchar(55) NOT NULL,
  `myunhenski_white` varchar(55) NOT NULL,
  `furshetna_stasyuk` varchar(55) NOT NULL,
  `drogobicka_stasyuk` varchar(55) NOT NULL,
  `guculska_stasyuk` varchar(55) NOT NULL,
  `domnadrovah_stasyuk` varchar(55) NOT NULL,
  `moskovska_stasyuk` varchar(55) NOT NULL,
  `mislivski_stasyuk` varchar(55) NOT NULL,
  `muskatna_stasyuk` varchar(55) NOT NULL,
  `shashlichni_stasyuk` varchar(55) NOT NULL,
  `sir_serenada` varchar(55) NOT NULL,
  `sir_yellow` varchar(55) NOT NULL,
  `mocarela_black` varchar(55) NOT NULL,
  `mocarela_green` varchar(55) NOT NULL,
  `mocarela_long` varchar(55) NOT NULL,
  `sir_king` varchar(55) NOT NULL,
  `sir_favita` varchar(55) NOT NULL,
  `sir_slayen` varchar(55) NOT NULL,
  `sir_topleniy` varchar(55) NOT NULL,
  `sirki_timosha` varchar(55) NOT NULL,
  `maslo_minske` varchar(55) NOT NULL,
  `oseledec_ss` varchar(55) NOT NULL,
  `skumbriya_ss` varchar(55) NOT NULL,
  `fileoseledcya_ss` varchar(55) NOT NULL,
  `tornado_skumbriya` varchar(55) NOT NULL,
  `tyulka_oil` varchar(55) NOT NULL,
  `tyulka_baltiyska` varchar(55) NOT NULL,
  `oseledec_goroh` varchar(55) NOT NULL,
  `salaka_oil` varchar(55) NOT NULL,
  `shproty_oil` varchar(55) NOT NULL,
  `gorbusha` varchar(55) NOT NULL,
  `midiya` varchar(55) NOT NULL,
  `skumbriya_oil` varchar(55) NOT NULL,
  `morkva_king` varchar(55) NOT NULL,
  `salat_shanhai` varchar(55) NOT NULL,
  `salat_babinelito` varchar(55) NOT NULL,
  `morska_cibulya` varchar(55) NOT NULL,
  `morska_morkva` varchar(55) NOT NULL,
  `skumbriya_hk` varchar(55) NOT NULL,
  `skumbriya_gk` varchar(55) NOT NULL,
  `fileskumbr_hk` varchar(55) NOT NULL,
  `fileoseled_hk` varchar(55) NOT NULL,
  `sayra_hk` varchar(55) NOT NULL,
  `moyva_hk` varchar(55) NOT NULL,
  `salaka_hk` varchar(55) NOT NULL,
  `dunayka` varchar(55) NOT NULL,
  `vomer` varchar(55) NOT NULL,
  `tushka_bichka` varchar(55) NOT NULL,
  `hrebetlos_hk` varchar(55) NOT NULL,
  `hrebetlos_gk` varchar(55) NOT NULL,
  `vugor_hk` varchar(55) NOT NULL,
  `lyach_vyaleniy` varchar(55) NOT NULL,
  `okun_vyaleniy` varchar(55) NOT NULL,
  `chuka_vyalena` varchar(55) NOT NULL,
  `chehon_vyalena` varchar(55) NOT NULL,
  `plotva_vyalena` varchar(55) NOT NULL,
  `oseledec_sm` varchar(55) NOT NULL,
  `skumbriya_sm` varchar(55) NOT NULL,
  `hek_sm` varchar(55) NOT NULL,
  `salaka_sm` varchar(55) NOT NULL,
  `krevetka` varchar(55) NOT NULL,
  `steyk_mas` varchar(55) NOT NULL,
  `steyk_los` varchar(55) NOT NULL,
  `krevetka_king` varchar(55) NOT NULL,
  `file_panhasiusa` varchar(55) NOT NULL,
  `nototeniya` varchar(55) NOT NULL,
  `krupa_yachna` varchar(55) NOT NULL,
  `krupa_pshenichna` varchar(55) NOT NULL,
  `krupa_kukurudzyana` varchar(55) NOT NULL,
  `grechka` varchar(55) NOT NULL,
  `grechaniy_prodil` varchar(55) NOT NULL,
  `perlovka` varchar(55) NOT NULL,
  `ris_long` varchar(55) NOT NULL,
  `ris_circle` varchar(55) NOT NULL,
  `ris_pareniy` varchar(55) NOT NULL,
  `ris_sichka` varchar(55) NOT NULL,
  `pshono` varchar(55) NOT NULL,
  `manka` varchar(55) NOT NULL,
  `goroh` varchar(55) NOT NULL,
  `arnautka` varchar(55) NOT NULL,
  `sil_kam` varchar(55) NOT NULL,
  `sil_briket` varchar(55) NOT NULL,
  `krohmal` varchar(55) NOT NULL,
  `soda_harchova` varchar(55) NOT NULL,
  `ocet_lviv` varchar(55) NOT NULL,
  `cukor` varchar(55) NOT NULL,
  `kilka_darinka` varchar(55) NOT NULL,
  `kukurudza_koncerv` varchar(55) NOT NULL,
  `vermishel_gorodok_3kg` varchar(55) NOT NULL,
  `vermishel_gorodok_1kg` varchar(55) NOT NULL,
  `zernyatko_raf5l` varchar(55) NOT NULL,
  `zernyatko_neraf5l` varchar(55) NOT NULL,
  `zernyatko_raf2l` varchar(55) NOT NULL,
  `zernyatko_raf3l` varchar(55) NOT NULL,
  `zernyatko_raf1l` varchar(55) NOT NULL,
  `zernyatko_neraf1l` varchar(55) NOT NULL,
  `oil_polsha1l` varchar(55) NOT NULL,
  `oil_polsha5l` varchar(55) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `delivery`
--
ALTER TABLE `delivery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `delivery`
--
ALTER TABLE `delivery`
  MODIFY `id` int(111) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
