-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2017 at 11:54 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

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

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `parent_id`) VALUES
(1, 'Reserved', 0);

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `fullname`, `description`, `place_id`, `email`, `www`, `picture_url`) VALUES
(1, 'Webcity', 'A webcity company.', 1, 'infomail.webcity@gmail.com', '', '');

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `description`, `category_id`, `date_start`, `date_end`, `place_id`, `company_id`) VALUES
(1, 'Birthday', 'Happy Birthday!', 1, '2017-07-19 14:06:49', '2017-07-19 14:06:49', 1, 1);

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`place_id`, `name`, `latitude`, `longitude`, `city`, `street`, `house`, `apartment`, `postalcode`) VALUES
(1, 'Home', '48.742886', '37.587985', 'Kramatorsk', 'Marata', 8, 0, '84313'),
(2, 'Краматорск', '48.737724', '37.584001', 'Краматорск', '0', 0, 0, '84300');

--
-- Dumping data for table `social_networks`
--

INSERT INTO `social_networks` (`company_id`, `social_network_id`, `company_network_url`) VALUES
(1, 1, 'webcity.com');

--
-- Dumping data for table `social_networks_list`
--

INSERT INTO `social_networks_list` (`id`, `network`, `network_url`) VALUES
(1, 'Reserved', 'reserved.com'),
(2, 'Facebook', 'fb.com'),
(3, 'Twitter', 'https://twitter.com/');

--
-- Dumping data for table `telephone_numbers`
--

INSERT INTO `telephone_numbers` (`company_id`, `telephone`) VALUES
(1, '+380981234567');

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
