-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2017 at 08:57 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kiitmun`
--
CREATE DATABASE IF NOT EXISTS `kiitmun` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `kiitmun`;

-- --------------------------------------------------------

--
-- Table structure for table `ca`
--

CREATE TABLE `ca` (
  `uid` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `altemail` varchar(25) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `nation` varchar(25) DEFAULT NULL,
  `college` varchar(25) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `syear` varchar(20) DEFAULT NULL,
  `pastca` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `delegate`
--

CREATE TABLE `delegate` (
  `uid` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `nation` varchar(25) DEFAULT NULL,
  `college` varchar(25) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `syear` varchar(20) DEFAULT NULL,
  `cv` varchar(500) DEFAULT NULL,
  `accom` varchar(3) DEFAULT NULL,
  `secname` varchar(25) DEFAULT NULL,
  `secemail` varchar(25) DEFAULT NULL,
  `seccontact` bigint(20) DEFAULT NULL,
  `secgender` varchar(1) DEFAULT NULL,
  `secaddress` varchar(100) DEFAULT NULL,
  `secnation` varchar(25) DEFAULT NULL,
  `seccollege` varchar(25) DEFAULT NULL,
  `seccourse` varchar(20) DEFAULT NULL,
  `secsyear` varchar(20) DEFAULT NULL,
  `seccv` varchar(500) DEFAULT NULL,
  `secaccom` varchar(3) DEFAULT NULL,
  `preference1` varchar(30) DEFAULT NULL,
  `count11` varchar(30) DEFAULT NULL,
  `count12` varchar(30) DEFAULT NULL,
  `preference2` varchar(30) DEFAULT NULL,
  `count21` varchar(30) DEFAULT NULL,
  `count22` varchar(30) DEFAULT NULL,
  `preference3` varchar(30) DEFAULT NULL,
  `count31` varchar(30) DEFAULT NULL,
  `count32` varchar(30) DEFAULT NULL,
  `heard` varchar(20) DEFAULT NULL,
  `ca` varchar(20) DEFAULT NULL,
  `motivate` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


--
-- Table structure for table `hits`
--

CREATE TABLE `hits` (
  `page` char(100) NOT NULL DEFAULT '',
  `count` int(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hits`
--

INSERT INTO `hits` (`page`, `count`) VALUES
('KIIT INTERNATIONAL MUN 2014', 35269),
('kiitmun2015', 115830),
('The second page', 1),
('UNDP', 1780),
('UNGA', 6813),
('UNHRC', 2303),
('UNSC', 1702),
('WHO', 1732);

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `ip_address` varchar(30) DEFAULT NULL,
  `user_agent` varchar(50) DEFAULT NULL,
  `datetime` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `ip_address`, `user_agent`, `datetime`) VALUES
(17183, '37.132.29.101', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', '2014/11/09 13:41:38'),
(17184, '69.171.237.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/', '2014/11/09 14:26:48'),
(17185, '31.45.46.243', 'Mozilla/5.0 (iPad; CPU OS 8_1 like Mac OS X) Apple', '2014/11/13 19:45:04'),
(17186, '113.199.194.98', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', '2014/11/16 15:37:43'),
(17187, '80.28.246.19', 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:33.0) Gecko', '2014/11/17 08:22:47'),
(17188, '150.70.173.60', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1;', '2014/11/26 17:51:51'),
(17189, '192.163.214.134', 'Mozilla/5.0 (X11; Linux x86_64; rv:26.0) (nuS3iPfF', '2014/12/05 06:29:48'),
(17190, '31.13.97.116', 'facebookexternalhit/1.1 (+http://www.facebook.com/', '2014/12/14 12:05:28'),
(17191, '150.70.173.5', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1;', '2014/12/14 12:06:15'),
(17192, '203.147.90.49', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', '2015/01/01 05:00:46'),
(17193, '203.147.90.105', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', '2015/01/02 02:09:14'),
(17194, '14.99.78.91', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', '2015/01/07 00:48:47'),
(17195, '14.139.221.179', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', '2015/01/08 09:00:29'),
(17196, '59.145.203.66', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/53', '2015/01/14 19:04:47'),
(17197, '14.139.221.180', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', '2015/01/23 02:52:17'),
(17198, '150.70.97.97', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1;', '2015/01/29 01:54:10'),
(17199, '150.70.75.212', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1;', '2015/01/29 02:02:38'),
(17200, '150.70.173.39', 'Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 5.1;', '2015/01/29 02:03:44'),
(17201, '173.252.110.117', 'facebookexternalhit/1.1 (+http://www.facebook.com/', '2015/02/10 08:35:57'),
(17202, '142.4.206.228', 'Mozilla/4.0 (compatible; MSIE 7.0; Windows NT 6.2;', '2015/02/10 08:38:40'),
(17203, '14.139.212.227', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', '2015/02/11 12:11:57'),
(17204, '100.43.91.14', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/02/13 17:53:21'),
(17205, '100.43.81.152', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/02/17 01:06:08'),
(17206, '100.43.91.7', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/02/20 10:45:10'),
(17207, '14.139.212.228', 'Mozilla/5.0 (Windows NT 6.3) AppleWebKit/537.36 (K', '2015/02/22 16:23:45'),
(17208, '218.248.12.34', 'Mozilla/5.0 (X11; Ubuntu; Linux x86_64; rv:35.0) G', '2015/02/26 01:03:58'),
(17209, '198.7.62.204', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebK', '2015/02/26 09:13:08'),
(17210, '59.145.203.67', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', '2015/02/27 04:53:02'),
(17211, '117.238.24.64', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebK', '2015/03/05 06:14:36'),
(17212, '14.139.212.226', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', '2015/03/13 13:25:34'),
(17213, '14.96.48.215', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', '2015/03/18 08:10:11'),
(17214, '59.145.203.68', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebK', '2015/03/18 15:08:19'),
(17215, '199.21.99.219', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/03/27 23:44:14'),
(17216, '100.43.85.27', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/03/27 23:44:25'),
(17217, '100.43.90.10', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/03/29 12:44:38'),
(17218, '199.21.99.194', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/04/22 12:22:52'),
(17219, '199.21.99.217', 'Mozilla/5.0 (compatible; YandexBot/3.0; +http://ya', '2015/04/29 05:34:46'),
(17220, '112.79.37.57', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/53', '2015/05/05 20:35:14'),
(17221, '31.13.110.119', 'facebookexternalhit/1.1 (+http://www.facebook.com/', '2015/05/09 05:33:03'),
(17222, '124.123.33.175', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', '2015/05/09 05:33:09'),
(17223, '203.99.205.107', 'Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/53', '2015/05/14 04:19:45'),
(17224, '31.28.161.107', '', '2015/05/17 00:51:04'),
(17225, '107.23.45.196', 'Mozilla/5.0 (compatible; DuckDuckGo-Favicons-Bot/1', '2015/05/20 15:12:38'),
(17226, '112.79.37.73', 'Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53', '2015/06/05 05:18:50'),
(17227, '117.226.169.5', 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebK', '2015/06/05 05:37:27'),
(17228, '31.13.97.118', 'facebookexternalhit/1.1 (+http://www.facebook.com/', '2015/06/10 12:26:30'),
(17229, '66.249.84.173', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/2011081', '2015/06/11 02:55:25'),
(17230, '66.249.82.179', 'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36', '2015/06/11 02:55:26'),
(17231, '66.249.81.240', 'Mozilla/5.0 (Windows NT 6.1; rv:6.0) Gecko/2011081', '2015/06/12 06:42:00'),
(17232, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWeb', '2015/12/08 10:27:59');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) NOT NULL,
  `news` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news`) VALUES
(27, '<a href="https://drive.google.com/folderview?id=0B7S39mHdfFSkWDdnQWFxMW1YZTA&usp=sharing" target="_blank">Click Here to Download Study Guides.</a>'),
(28, '<a href="ITINERARY.pdf" target="_blank" > Click to download the Itinerary</a>'),
(29, '<a href ="http://www.windowsphone.com/en-gb/store/app/kiit-international-mun/77539d21-e36c-413a-a4e2-84bb57829524" target="_blank">Download the KIIT MUN 2014 Windows App</a>');

-- --------------------------------------------------------

--
-- Table structure for table `ocdetails`
--

CREATE TABLE `ocdetails` (
  `id` int(10) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phno` varchar(15) NOT NULL,
  `dept` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `ocnews`
--

CREATE TABLE `ocnews` (
  `id` int(100) NOT NULL,
  `news` varchar(200) NOT NULL,
  `date` date NOT NULL,
  `author` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ocnews`
--

INSERT INTO `ocnews` (`id`, `news`, `date`, `author`) VALUES
(6, 'welcome to oc portal\r\n#kiitmun2015', '2015-08-03', 'sushant sagar'),
(7, 'please do not share this page in public on social networking sites\r\nand don\\''t update news for testing because for now the author doesn\\''t have the privilege to delete the news.\r\nall you can do is re-', '2015-08-03', 'sushant sagar');

-- --------------------------------------------------------

--
-- Table structure for table `press`
--

CREATE TABLE `press` (
  `uid` int(10) UNSIGNED NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `contact` bigint(20) DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `nation` varchar(25) DEFAULT NULL,
  `college` varchar(25) DEFAULT NULL,
  `course` varchar(20) DEFAULT NULL,
  `syear` varchar(20) DEFAULT NULL,
  `accom` varchar(3) DEFAULT NULL,
  `cv` varchar(250) DEFAULT NULL,
  `position` varchar(15) DEFAULT NULL,
  `preference` varchar(50) DEFAULT NULL,
  `work_reporter` varchar(3) DEFAULT NULL,
  `reporterarticle` varchar(1000) DEFAULT NULL,
  `videoarticle` varchar(1000) DEFAULT NULL,
  `editorarticle` varchar(1000) DEFAULT NULL,
  `heard` varchar(20) DEFAULT NULL,
  `ca` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `slno` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `council` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



--
-- Indexes for table `ca`
--
ALTER TABLE `ca`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `delegate`
--
ALTER TABLE `delegate`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `hits`
--
ALTER TABLE `hits`
  ADD PRIMARY KEY (`page`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD KEY `id_2` (`id`),
  ADD KEY `id_3` (`id`);

--
-- Indexes for table `ocdetails`
--
ALTER TABLE `ocdetails`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phno` (`phno`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indexes for table `ocnews`
--
ALTER TABLE `ocnews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `press`
--
ALTER TABLE `press`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ca`
--
ALTER TABLE `ca`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;
--
-- AUTO_INCREMENT for table `delegate`
--
ALTER TABLE `delegate`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3829;
--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17233;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `ocdetails`
--
ALTER TABLE `ocdetails`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
--
-- AUTO_INCREMENT for table `ocnews`
--
ALTER TABLE `ocnews`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `press`
--
ALTER TABLE `press`
  MODIFY `uid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=525;
--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `slno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3153;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
