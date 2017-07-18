-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2017 at 02:35 PM
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
CREATE DATABASE IF NOT EXISTS `webcity` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `webcity`;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` tinyint(3) UNSIGNED NOT NULL,
  `category_name` varchar(255) NOT NULL COMMENT 'category''s name',
  `parent_id` int(10) UNSIGNED NOT NULL COMMENT 'keeps parent''s category this subcategory'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `place_id` int(10) UNSIGNED NOT NULL,
  `telnumber_id` int(10) DEFAULT NULL,
  `www` varchar(255) DEFAULT NULL,
  `picture_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table for company';

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `category_id` tinyint(3) UNSIGNED NOT NULL,
  `date_start` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_end` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `place_id` int(10) UNSIGNED NOT NULL,
  `company_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pictures`
--

CREATE TABLE `pictures` (
  `event_id` int(10) UNSIGNED NOT NULL,
  `picture_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `place_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `latitude` decimal(7,0) NOT NULL,
  `longitude` decimal(7,0) NOT NULL,
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `house` smallint(6) DEFAULT NULL,
  `apartment` smallint(6) DEFAULT NULL,
  `postalcode` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `social_networks`
--

CREATE TABLE `social_networks` (
  `company_id` int(10) UNSIGNED NOT NULL,
  `social_network_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `social_networks_list`
--

CREATE TABLE `social_networks_list` (
  `id` int(10) UNSIGNED NOT NULL,
  `network` varchar(255) NOT NULL,
  `network_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `telephone_numbers`
--

CREATE TABLE `telephone_numbers` (
  `company_id` int(10) UNSIGNED NOT NULL,
  `telephone` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(255) NOT NULL,
  `hash` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `picture_url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='Table for users';

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
  ADD UNIQUE KEY `login` (`login`),
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
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `place_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `social_networks_list`
--
ALTER TABLE `social_networks_list`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
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
  ADD CONSTRAINT `social_network_company` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `social_networks_list`
--
ALTER TABLE `social_networks_list`
  ADD CONSTRAINT `social_network` FOREIGN KEY (`id`) REFERENCES `social_networks` (`social_network_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telephone_numbers`
--
ALTER TABLE `telephone_numbers`
  ADD CONSTRAINT `telephone_numbers_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companies` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
