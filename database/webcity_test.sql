-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 17 2017 г., 20:42
-- Версия сервера: 10.1.21-MariaDB
-- Версия PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `webcity_test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `companies`
--

CREATE TABLE `companies` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci ROW_FORMAT=COMPACT;

--
-- Дамп данных таблицы `companies`
--

INSERT INTO `companies` (`id`, `name`, `description`) VALUES
(1, 'событие 1', 'описание нанана'),
(2, 'событие 2', 'крутое мероприятие'),
(3, 'событие 3', 'описание нанана'),
(4, 'событие 4', 'крутое мероприятие'),
(5, 'событие 5', 'описание нананана'),
(8, 'событие 8', 'не круто, но пойдеть'),
(19, 'ooo', 'des'),
(29, 'ooo', 'des'),
(30, 'ooo', 'des'),
(31, 'ooo', 'des'),
(32, 'ooo', 'des'),
(33, 'ooo', 'des'),
(34, 'ooo', 'des'),
(35, 'ooo', 'des'),
(36, 'ooo', 'des'),
(37, 'ooo', 'des'),
(38, 'ooo', 'des'),
(39, 'ooo', 'des'),
(40, 'ooo', 'des'),
(41, 'ooo', 'des'),
(42, 'ooo', 'des'),
(43, 'ooo', 'des'),
(44, 'ooo', 'des'),
(45, 'ooo', 'des'),
(46, 'ooo', 'des'),
(47, 'ooo', 'des'),
(48, 'ooo', 'des'),
(49, 'ooo', 'des'),
(50, 'ooo', 'des'),
(51, 'ooo', 'des'),
(52, 'ooo', 'des'),
(53, 'ooo', 'des'),
(54, 'ooo', 'des'),
(55, 'ooo', 'des'),
(56, 'ooo', 'des'),
(57, 'ooo', 'des'),
(58, 'ooo', 'des'),
(59, 'ooo', 'des'),
(60, 'ooo', 'des'),
(61, 'ooo', 'des'),
(62, 'ooo', 'des'),
(63, 'ooo', 'des');

-- --------------------------------------------------------

--
-- Структура таблицы `events`
--

CREATE TABLE `events` (
  `id` int(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `place` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `time` date NOT NULL,
  `price` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Дамп данных таблицы `events`
--

INSERT INTO `events` (`id`, `name`, `place`, `time`, `price`, `description`) VALUES
(1, 'event1', 'Организация 1', '2017-07-11', 'Бесплатно', 'описание нанана'),
(2, 'событие 2', 'Место 2', '2017-07-12', '15$', 'крутое мероприятие'),
(3, 'событие 3', 'Организация 3', '2017-07-11', 'Бесплатно', 'описание нанана'),
(4, 'событие 4', 'Место 4', '2017-07-12', '15$', 'крутое мероприятие'),
(5, 'событие 5', 'место 5', '2017-07-11', 'Бесплатно', 'описание нананана'),
(8, 'событие 8', ' место 8', '2017-07-13', '10$', 'не круто, но пойдеть'),
(14, 'ooo', 'p', '0000-00-00', '20', 'des'),
(15, 'ooo', 'p', '2017-05-05', '20', 'des'),
(16, 'ooo', 'p', '2017-05-05', '20', 'des'),
(17, 'ooo', 'p', '2017-05-05', '20', 'des'),
(18, 'ooo', 'p', '2017-05-05', '20', 'des');

-- --------------------------------------------------------

--
-- Структура таблицы `table`
--

CREATE TABLE `table` (
  `id` int(5) UNSIGNED NOT NULL,
  `name` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `table1`
--

CREATE TABLE `table1` (
  `id` int(5) UNSIGNED DEFAULT NULL,
  `name` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `table1`
--

INSERT INTO `table1` (`id`, `name`) VALUES
(1, 'Anna'),
(2, 'Анна');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `table`
--
ALTER TABLE `table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT для таблицы `events`
--
ALTER TABLE `events`
  MODIFY `id` int(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT для таблицы `table`
--
ALTER TABLE `table`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
