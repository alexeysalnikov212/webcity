-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Июл 20 2017 г., 12:02
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webcity`
--
CREATE DATABASE IF NOT EXISTS `webcity` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `webcity`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL COMMENT 'category''s name',
  `parent_id` int(10) UNSIGNED DEFAULT NULL COMMENT 'keeps parent''s category this subcategory'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--


INSERT INTO `categories` (`id`, `category_name`, `parent_id`) VALUES
(1, 'Reserved', 0),
(2, 'Кино', 0),
(3, 'Концерты', 0),
(4, 'Скидки и рекламные акции', 0),
(5, 'Выставки', 0),
(6, 'Для детей', 0),
(7, 'Театр', 0),
(8, 'Спорт', 0),
(9, 'Семинары', 0);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `fullname` varchar(255) NOT NULL COMMENT 'company''s name',
  `description` varchar(255) NOT NULL COMMENT 'short description',
  `place_id` int(10) UNSIGNED NOT NULL COMMENT 'place of head office',
  `email` varchar(255) DEFAULT NULL COMMENT '@',
  `www` varchar(255) DEFAULT NULL COMMENT 'company''s url',
  `picture_url` varchar(255) DEFAULT NULL COMMENT 'company''s picture'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table for company';

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `fullname`, `description`, `place_id`, `email`, `www`, `picture_url`) VALUES
(1, 'Webcity', 'A webcity company.', 1, 'infomail.webcity@gmail.com', '', ''),
(2, '"Родина"', 'Kинотеатр "Родина".', 1, 'rodina_kino@mail.ru', 'http://rodina.mk/', ''),
(3, 'ДК и Т НКМЗ', 'Городской Дворец Культуры и Техники НКМЗ.', 1, 'nspdkit@gmail.com', '', ''),
(4, '"Юбилейный"', 'Парк "Юбилейный".', 1, '', '', ''),
(5, 'Парк им. А.С.Пушкина ', 'Парк им. А.С.Пушкина.', 1, '', '', ''),
(6, ' ДК "Строитель"', 'Городской дворец культуры «Строитель».', 1, '', '', ''),
(7, '«Сад Бернацкого»', 'Парк «Сад Бернацкого».', 1, '', '', ''),
(8, 'Краматорский художественный музей', 'Краматорский художественный музей.', 1, '', '', ''),
(9, 'Музей', 'Музей истории города Краматорска.', 1, '', '', ''),
(10, 'Центральная библиотека', 'Центральная городская публичная библиотека им. М. Горького.', 1, 'library@krm.net.ua', 'http://lib-krm.org/', ''),
(11, 'Фиеста', 'Арт-кафе фиеста.', 1, 'fiestaclub@list.ru', '', ''),
(12, 'Блюминг', 'Блюминг, стадион в Краматорске.', 1, '', '', ''),
(13, 'Авангард', 'Авангард, стадион в Краматорске.', 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL COMMENT 'event''s name',
  `description` varchar(255) NOT NULL COMMENT 'event''s description',
  `category_id` tinyint(3) UNSIGNED NOT NULL COMMENT 'category',
  `date_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'start of event',
  `date_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'end of event',
  `place_id` int(10) UNSIGNED NOT NULL COMMENT 'venue',
  `company_id` int(10) UNSIGNED NOT NULL COMMENT 'organizer'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `category_id`, `date_start`, `date_end`, `place_id`, `company_id`) VALUES
(1, 'Birthday', 'Happy Birthday!', 1, '2017-07-19 14:06:49', '2017-07-19 14:06:49', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `event_id` int(10) UNSIGNED NOT NULL COMMENT 'event',
  `picture_url` varchar(255) NOT NULL COMMENT 'event''s picture'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL COMMENT 'name',
  `latitude` decimal(9,6) NOT NULL COMMENT 'geo',
  `longitude` decimal(9,6) NOT NULL COMMENT 'geo',
  `city` varchar(255) DEFAULT NULL COMMENT 'place''s name',
  `street` varchar(255) DEFAULT NULL COMMENT 'place''s street',
  `house` smallint(6) DEFAULT NULL COMMENT 'place''s house',
  `apartment` smallint(6) DEFAULT NULL COMMENT 'place''s apartment',
  `postalcode` varchar(20) NOT NULL COMMENT 'zipcode'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `name`, `latitude`, `longitude`, `city`, `street`, `house`, `apartment`, `postalcode`) VALUES
(1, 'Home', '48.742886', '37.587985', 'Kramatorsk', 'Marata', 8, 0, '84313'),
(2, 'Краматорск', '48.737724', '37.584001', 'Краматорск', '0', 0, 0, '84300');

-- --------------------------------------------------------

--
-- Table structure for table `social_networks`
--

CREATE TABLE `social_networks` (
  `company_id` int(10) UNSIGNED NOT NULL COMMENT 'company',
  `social_network_id` int(10) UNSIGNED NOT NULL COMMENT 'social network list',
  `company_network_url` varchar(255) NOT NULL COMMENT 'company''s social network'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_networks`
--

INSERT INTO `social_networks` (`company_id`, `social_network_id`, `company_network_url`) VALUES
(1, 1, 'webcity.com');

-- --------------------------------------------------------

--
-- Table structure for table `social_networks_list`
--

CREATE TABLE `social_networks_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `network` varchar(255) NOT NULL COMMENT 'network''s name',
  `network_url` varchar(255) NOT NULL COMMENT 'network''s url'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `social_networks_list`
--

INSERT INTO `social_networks_list` (`id`, `network`, `network_url`) VALUES
(1, 'Reserved', 'reserved.com'),
(2, 'Facebook', 'fb.com'),
(3, 'Twitter', 'https://twitter.com/');

-- --------------------------------------------------------

--
-- Table structure for table `telephone_numbers`
--

CREATE TABLE `telephone_numbers` (
  `company_id` int(10) UNSIGNED NOT NULL COMMENT 'company',
  `telephone` varchar(13) NOT NULL COMMENT 'tel number'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `telephone_numbers`
--

INSERT INTO `telephone_numbers` (`company_id`, `telephone`) VALUES
(1, '+380981234567');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL COMMENT 'login',
  `hash` varchar(255) NOT NULL COMMENT 'password''s hash',
  `email` varchar(255) NOT NULL COMMENT '@',
  `picture_url` varchar(255) DEFAULT NULL COMMENT 'avatar'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table for users';

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `login`, `hash`, `email`, `picture_url`) VALUES
(1, 'test', '$1$0GK47V1I$NN22o4Dpa79mhXYLXhmk1.', 'infomail.myday@gmail.com ', ''),
(2, 'Lucky75', '$1$0GK47V1I$NN22o4Dpa79mhXYLXhmk1.', 'infomail.myday@gmail.com', ''),
(3, 'GodRa13', '$1$0GK47V1I$NN22o4Dpa79mhXYLXhmk1.', 'infomail.myday@gmail.com', ''),
(4, 'lisnm', '$1$0GK47V1I$NN22o4Dpa79mhXYLXhmk1.', 'infomail.myday@gmail.com', ''),
(5, 'olgalisvaja', '$1$0GK47V1I$NN22o4Dpa79mhXYLXhmk1.', 'infomail.myday@gmail.com', ''),
(6, '22nick', '$1$0GK47V1I$NN22o4Dpa79mhXYLXhmk1.', 'infomail.myday@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `users_companies`
--

CREATE TABLE `users_companies` (
  `id_user` int(10) UNSIGNED NOT NULL COMMENT 'user''s id from "users"',
  `id_company` int(10) UNSIGNED NOT NULL COMMENT 'company''s id from "company'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='connect users and companies';

--
-- Dumping data for table `users_companies`
--

INSERT INTO `users_companies` (`id_user`, `id_company`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`category_name`),
  ADD KEY `subcategory_id` (`parent_id`);
ALTER TABLE `categories` ADD FULLTEXT KEY `category_name` (`category_name`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event` (`company_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `place_id` (`place_id`);

--
-- Indexes for table `pictures`
--
ALTER TABLE `pictures`
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`place_id`);

--
-- Indexes for table `social_networks`
--
ALTER TABLE `social_networks`
  ADD KEY `company_id` (`company_id`),
  ADD KEY `social_network_id` (`social_network_id`);

--
-- Indexes for table `social_networks_list`
--
ALTER TABLE `social_networks_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `telephone_numbers`
--
ALTER TABLE `telephone_numbers`
  ADD UNIQUE KEY `telephone` (`telephone`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`login`);

--
-- Indexes for table `users_companies`
--
ALTER TABLE `users_companies`
  ADD UNIQUE KEY `User_unique` (`id_user`),
  ADD KEY `id_company` (`id_company`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `social_networks_list`
--
ALTER TABLE `social_networks_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_ibfk_1` FOREIGN KEY (`place_id`) REFERENCES `places` (`place_id`);

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `event` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `events_ibfk_2` FOREIGN KEY (`place_id`) REFERENCES `places` (`place_id`) ON DELETE CASCADE;

--
-- Constraints for table `pictures`
--
ALTER TABLE `pictures`
  ADD CONSTRAINT `pictures_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `events` (`id`);

--
-- Constraints for table `social_networks`
--
ALTER TABLE `social_networks`
  ADD CONSTRAINT `social_network_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `social_network_list` FOREIGN KEY (`social_network_id`) REFERENCES `social_networks_list` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telephone_numbers`
--
ALTER TABLE `telephone_numbers`
  ADD CONSTRAINT `telephone_numbers_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

--
-- Constraints for table `users_companies`
--
ALTER TABLE `users_companies`
  ADD CONSTRAINT `company_id_companies` FOREIGN KEY (`id_company`) REFERENCES `companies` (`id`),
  ADD CONSTRAINT `user_id_users` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
