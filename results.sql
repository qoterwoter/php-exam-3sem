-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Хост: std-mysql
-- Время создания: Янв 28 2021 г., 14:08
-- Версия сервера: 5.7.26-0ubuntu0.16.04.1
-- Версия PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `std_962`
--

-- --------------------------------------------------------

--
-- Структура таблицы `results`
--

CREATE TABLE `results` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `poll_id` bigint(20) UNSIGNED NOT NULL,
  `link` varchar(32) NOT NULL,
  `results` text NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `results`
--

INSERT INTO `results` (`id`, `poll_id`, `link`, `results`, `title`) VALUES
(6, 13, 'd4004dcb03b933ca07d6ef983e001f98', '', 'Ð ÐµÑÐ¿Ð¾Ð½Ð´ÐµÐ½Ñ‚ 1'),
(7, 13, '4748d09240400033b986e33591946484', 'a:2:{s:7:\"poll_id\";s:2:\"13\";s:6:\"answer\";a:5:{i:0;s:2:\"15\";i:1;s:12:\"Ð¡Ñ‚Ñ€Ð¾ÐºÐ°\";i:2;s:10:\"Ð¢ÐµÐºÑÑ‚\";i:3;s:17:\"Ð¡ÐµÐ»ÐµÐºÑ‚ â„–3\";i:4;a:2:{s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–2\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–2\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–3\";s:19:\"Ð§ÐµÐºÐ±Ð¾ÐºÑ â„–3\";}}}', 'Ð ÐµÑÐ¿Ð¾Ð½Ð´ÐµÐ½Ñ‚ 2');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`),
  ADD KEY `poll_id` (`poll_id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `results`
--
ALTER TABLE `results`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
