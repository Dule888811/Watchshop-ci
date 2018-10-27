-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2018 at 09:32 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lrb`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `article_price` int(11) NOT NULL DEFAULT '0',
  `article_lager` int(11) NOT NULL DEFAULT '0',
  `article_type` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Unisex',
  `article_action` varchar(2) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'NE',
  `article_description` text COLLATE utf8_unicode_ci NOT NULL,
  `brend_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_name`, `article_price`, `article_lager`, `article_type`, `article_action`, `article_description`, `brend_id`) VALUES
(1, 'Perforated Steel', 5000, 33, 'DeÄji', 'DA', 'svetli', 5),
(2, 'Silver Chrono Bracelet Watch', 5000, 0, 'Muški', 'NE', 'Description for A|X Silver Chrono Bracelet Watch.', 1),
(5, 'DIESSEL-80', 15000, 5, 'Å½enski', 'DA', 'sat', 2),
(6, 'DIESSEL-1000', 7000, 11, 'Unisex', 'DA', 'This is description for DIESSEL 800 article.', 3),
(13, 'Angry Birds', 500, 20, 'Dečji', 'DA', 'Dečji sat sa motivima popularne igre.', 5),
(14, 'Žanski sat', 333, 3, 'Ženski', 'DA', 'Žensaki sat opis.', 2),
(15, 'iWatch', 15000, 5, 'Unisex', 'DA', 'Pametni sat.', 2),
(16, 'tik-tak', 3000, 11, 'Muški', 'NE', 'super', 1),
(17, 'lacosta', 3000, 5, 'Muški', 'DA', 'tacnost pre svega', 4),
(18, 'lacosta', 3000, 5, 'Muški', 'DA', 'tacnost pre svega', 4),
(19, 'lacosta', 3000, 5, 'Muški', 'DA', 'tacnost pre svega', 4),
(20, 'image', 3000, 5, 'Muški', 'DA', 'image', 4),
(22, 'casa', 111111, 11, 'Muški', 'NE', 'plasticna', 1),
(24, 'tabakera', 888, 4, 'Muški', 'NE', 'drvena', 1),
(25, 'kockica', 222, 22, 'Muški', 'DA', 'kockasta', 1),
(26, 'satoviW', 200, 12, 'Å½enski', 'NE', 'tacan', 4),
(27, 'rolex', 3000, 5, 'MuÅ¡ki', 'NE', 'dada', 1),
(28, 'vukovi', 12, 12, 'Dečji', 'NE', 'gladni', 5),
(29, 'knjizica', 222, 2, 'Muški', 'NE', 'odlicna', 5),
(30, 'tabakera', 3000, 5, 'Muški', 'NE', '///////////////////////////////', 5),
(31, 'tabakera', 3000, 5, 'Muški', 'NE', '/////////////////////', 5),
(32, 'wwwwwwww', 22222, 11, 'MuÅ¡ki', 'NE', 'eeeeeeeeeeeeeeee', 5),
(33, 'xxxxxxxxxxxx', 8888, 33, 'Muški', 'NE', 'vvvvvvvvvvvvvv', 4),
(34, 'takovo', 222, 11, 'Muški', 'NE', 'takovo', 4),
(35, 'tabakera', 3000, 5, 'Muški', 'NE', 'bbbbbbbbbbbbbbb', 2),
(36, 'telefon', 44444, 5, 'Muški', 'NE', 'mmmmmm', 2),
(37, 'civot', 888, 3, 'Muški', 'NE', 'mnogo lose', 3);

-- --------------------------------------------------------

--
-- Table structure for table `brends`
--

CREATE TABLE `brends` (
  `brend_id` int(11) NOT NULL,
  `brend_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `brend_description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `brends`
--

INSERT INTO `brends` (`brend_id`, `brend_name`, `brend_description`) VALUES
(1, 'ARMANI EXCHANGE', 'Standardni opis za AE.'),
(2, 'CASIO', 'Standardni opis za CASSIO.'),
(3, 'DIESSEL', 'Standardni opis za DIESSEL.'),
(4, 'FOSSIL', 'Standardni opis za FOSSIL.'),
(5, 'HUGO HOSS', 'Standardni opis za HB');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `cart_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `cart_user_status` int(11) NOT NULL DEFAULT '0',
  `cart_admin_status` int(11) NOT NULL DEFAULT '0',
  `cart_code` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`cart_id`, `article_id`, `user_id`, `cart_user_status`, `cart_admin_status`, `cart_code`) VALUES
(130, 2, 1, 0, 0, '141203114138921'),
(131, 2, 1, 0, 0, '141203114138921'),
(132, 16, 1, 0, 0, '141203114138921'),
(133, 2, 1, 0, 0, '141203114138921'),
(141, 2, 30, 1, 1, '181025053650500'),
(143, 22, 30, 1, 1, '181025053650500'),
(144, 24, 30, 1, 1, '181025053650500'),
(145, 2, 30, 1, 1, '181025062241925'),
(146, 2, 30, 1, 1, '181025062245814'),
(147, 2, 30, 1, 1, '181025062247447'),
(148, 2, 30, 1, 1, '181025063155742'),
(149, 16, 30, 1, 1, '181025063155742'),
(151, 24, 30, 1, 1, '181025063155742'),
(153, 16, 30, 1, 1, '181025063350316'),
(156, 14, 30, 1, 1, '181025063723264'),
(157, 15, 30, 1, 1, '181025063723264'),
(158, 5, 30, 1, 1, '181025063723264'),
(159, 13, 30, 1, 1, '181025063723264'),
(160, 1, 30, 1, 1, '181025063723264'),
(173, 2, 1, 0, 0, '141203114138921'),
(174, 2, 1, 0, 0, '141203114138921'),
(175, 2, 1, 0, 0, '141203114138921'),
(176, 16, 1, 0, 0, '141203114138921'),
(177, 16, 1, 0, 0, '141203114138921'),
(178, 22, 1, 0, 0, '141203114138921'),
(179, 5, 1, 0, 0, '141203114138921'),
(181, 5, 1, 0, 0, '141203114138921'),
(182, 5, 1, 0, 0, '141203114138921'),
(183, 16, 30, 1, 0, '181025075127694'),
(184, 2, 22, 0, 0, '181025113422817'),
(185, 14, 22, 0, 0, '181025113422817'),
(186, 2, 29, 0, 0, '18102603243369'),
(187, 2, 29, 0, 0, '18102603243369'),
(188, 14, 29, 0, 0, '18102603243369');

-- --------------------------------------------------------

--
-- Stand-in structure for view `cart_code`
-- (See below for the actual view)
--
CREATE TABLE `cart_code` (
`cart_code` varchar(20)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `closed_cart_code`
-- (See below for the actual view)
--
CREATE TABLE `closed_cart_code` (
`cart_code` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `article_id` int(11) NOT NULL,
  `comment` text COLLATE utf8_unicode_ci NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `article_id`, `comment`, `time`) VALUES
(14, 16, 5, 'Moj komentar.', '2014-12-03 10:41:05'),
(15, 1, 15, 'Odličan sat.', '2014-12-03 10:47:04'),
(16, 14, 1, 'Dobar odnos cene i kvaliteta.', '2014-12-10 15:52:16'),
(17, 19, 14, 'Dopada mi se.', '2014-12-11 10:27:19'),
(18, 21, 13, 'Lep decji sat...', '2015-03-26 14:22:45'),
(19, 14, 1, 'Ovo je moj komentar.', '2016-03-02 14:25:51'),
(22, 27, 1, 'da', '2018-10-19 15:04:58'),
(25, 1, 0, 'bbb', '2018-10-24 23:24:41'),
(26, 1, 0, 'aaaaaaaaaaaa', '2018-10-24 23:25:00'),
(27, 1, 0, 'vvvvv', '2018-10-24 23:25:25'),
(28, 1, 0, 'da', '2018-10-24 23:42:49'),
(29, 1, 0, 'da', '2018-10-24 23:52:28'),
(30, 1, 0, 'da', '2018-10-24 23:55:20'),
(31, 1, 0, 'da', '2018-10-24 23:58:11'),
(32, 1, 0, 'da', '2018-10-25 00:00:25'),
(33, 1, 0, 'da', '2018-10-25 00:07:00'),
(34, 1, 0, 'da', '2018-10-25 00:07:30'),
(35, 30, 0, 'DA', '2018-10-25 00:44:05'),
(36, 30, 0, 'DA', '2018-10-25 00:45:26'),
(37, 30, 0, 'DA', '2018-10-25 00:47:38'),
(38, 30, 0, 'DA', '2018-10-25 00:48:23'),
(39, 30, 0, 'da', '2018-10-25 00:48:31'),
(40, 30, 0, 'da', '2018-10-25 00:49:23'),
(41, 30, 0, 'da', '2018-10-25 00:51:01'),
(42, 30, 0, 'da', '2018-10-25 00:51:22'),
(43, 30, 0, 'da', '2018-10-25 00:52:26'),
(44, 30, 0, 'da', '2018-10-25 00:53:11'),
(45, 30, 0, 'ne', '2018-10-25 00:53:18'),
(46, 30, 0, 'da', '2018-10-25 01:02:13'),
(47, 30, 0, 'da', '2018-10-25 01:06:24'),
(48, 30, 0, 'da', '2018-10-25 01:06:33'),
(49, 30, 0, 'da', '2018-10-25 01:07:37'),
(50, 30, 0, 'da', '2018-10-25 01:11:52'),
(51, 30, 0, 'da', '2018-10-25 01:13:34'),
(52, 30, 0, 'da', '2018-10-25 01:14:31'),
(53, 30, 0, 'da', '2018-10-25 01:16:19'),
(54, 30, 0, 'da', '2018-10-25 01:17:43'),
(55, 30, 0, 'da', '2018-10-25 01:19:00'),
(56, 30, 0, 'da', '2018-10-25 01:22:30'),
(57, 30, 0, 'da', '2018-10-25 01:22:44'),
(58, 30, 0, 'da', '2018-10-25 01:24:03'),
(59, 30, 0, 'da', '2018-10-25 01:24:48'),
(60, 30, 0, 'daas', '2018-10-25 01:27:10'),
(61, 30, 0, 'daas', '2018-10-25 01:30:25'),
(62, 30, 0, 'da', '2018-10-25 01:32:49'),
(63, 30, 0, 'da', '2018-10-25 01:35:46'),
(64, 1, 0, 'da', '2018-10-25 02:07:02'),
(65, 1, 0, 'da', '2018-10-25 02:07:12'),
(66, 1, 0, 'dadada', '2018-10-25 02:07:26'),
(67, 1, 0, 'dadada', '2018-10-25 02:11:21'),
(68, 1, 0, 'dasaSDGG', '2018-10-25 02:15:46'),
(69, 1, 0, 'da', '2018-10-25 02:22:40'),
(70, 1, 0, 'da', '2018-10-25 02:22:40'),
(71, 1, 0, 'da', '2018-10-25 02:24:58'),
(72, 1, 0, 'da', '2018-10-25 02:27:12'),
(73, 1, 0, 'da', '2018-10-25 02:32:20'),
(74, 1, 0, 'da', '2018-10-25 02:34:30'),
(78, 1, 2, 'najzad', '2018-10-25 03:14:56'),
(79, 1, 14, 'i meni', '2018-10-25 03:15:52'),
(80, 1, 14, 'ali preskup je\r\n', '2018-10-25 03:16:08'),
(81, 1, 14, 'ali preskup je\r\n', '2018-10-25 03:16:09'),
(83, 30, 2, 'rade komentari', '2018-10-25 03:17:26'),
(84, 1, 2, 'dDAD', '2018-10-25 15:45:39'),
(85, 30, 2, 'DADA', '2018-10-25 15:46:38'),
(86, 30, 16, 'DA', '2018-10-25 19:51:38'),
(87, 29, 5, 'd', '2018-10-26 20:32:12');

-- --------------------------------------------------------

--
-- Stand-in structure for view `open_cart_code`
-- (See below for the actual view)
--
CREATE TABLE `open_cart_code` (
`cart_code` varchar(20)
);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `first_name` varchar(32) NOT NULL,
  `last_name` varchar(32) NOT NULL,
  `email` varchar(1024) NOT NULL,
  `active` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `first_name`, `last_name`, `email`, `active`) VALUES
(19, 'marija', '2808c6d6e7b4aed69d3390e5ead943a6', 'Marija', 'Marijanovic', 'marija@gmail.com', 0),
(25, 'dusko88', '0e84724c1d309d5785e729253e7f01fa', 'Dusan', 'Pavlovic', 'dusko.dugusko@gmail.com', 1),
(26, 'aladin', 'aladin88', 'arif', 'kuntakinte', 'arif@gmail.com', 0),
(27, 'jekazeka', 'jekazeka', 'Jelena', 'Maletic', 'zeka@gmail.com', 0),
(28, 'admin88', '$2y$10$jeKrQ6Ksk6XNupOuK2wOCOm44', 'admin', 'admin', 'admin@gmail.com', 2),
(29, 'klaker', 'klaker', 'klaker', 'klaker', 'klaker@gmail.com', 2),
(30, 'admin22', 'admin', 'Dusan', 'Pavlovic', 'paja_yu@yahoo.com', 0),
(31, 'admin333', 'admin', 'Dusan', 'Pavlovic', 'paganin.vestica@gmail.com', 0),
(32, 'admin888', 'admin', 'Dusan', 'Pavlovic', 'kkktre@gmail.com', 1),
(34, 'pajapaja', 'pajapaja', 'pajapaja', 'pajapaja', 'pajapaja@gmail.com', 1),
(35, 'admin', 'admin', 'Darko', 'Pantovic', 'dssd@gmail.com', 2),
(36, 'admin', 'admin', 'Darko', 'Pantovic', 'dssd@gmail.com', 2);

-- --------------------------------------------------------

--
-- Structure for view `cart_code`
--
DROP TABLE IF EXISTS `cart_code`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `cart_code`  AS  select distinct `carts`.`cart_code` AS `cart_code` from `carts` ;

-- --------------------------------------------------------

--
-- Structure for view `closed_cart_code`
--
DROP TABLE IF EXISTS `closed_cart_code`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `closed_cart_code`  AS  select distinct `carts`.`cart_code` AS `cart_code` from `carts` where (`carts`.`cart_admin_status` = 1) ;

-- --------------------------------------------------------

--
-- Structure for view `open_cart_code`
--
DROP TABLE IF EXISTS `open_cart_code`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `open_cart_code`  AS  select distinct `carts`.`cart_code` AS `cart_code` from `carts` where ((`carts`.`cart_admin_status` = 0) and (`carts`.`cart_user_status` = 1)) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`),
  ADD KEY `brend_id` (`brend_id`);

--
-- Indexes for table `brends`
--
ALTER TABLE `brends`
  ADD PRIMARY KEY (`brend_id`),
  ADD KEY `brend_id` (`brend_id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `article_id` (`article_id`,`user_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `article_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `brends`
--
ALTER TABLE `brends`
  MODIFY `brend_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
