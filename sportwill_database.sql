-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 15, 2018 at 04:00 PM
-- Server version: 5.7.19
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sportwill_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

DROP TABLE IF EXISTS `about`;
CREATE TABLE IF NOT EXISTS `about` (
  `id_about` int(10) NOT NULL AUTO_INCREMENT,
  `description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `employers_id` int(10) NOT NULL,
  `gallery_id` int(10) NOT NULL,
  PRIMARY KEY (`id_about`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id_about`, `description`, `facebook`, `instagram`, `twitter`, `employers_id`, `gallery_id`) VALUES
(1, 'Aaaaaaaasdasdassa', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', 1, 14),
(2, 'Asdsadasdasdadas', 'www.facebook.com', 'www.instagram.com', 'www.twitter.com', 2, 15);

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

DROP TABLE IF EXISTS `employers`;
CREATE TABLE IF NOT EXISTS `employers` (
  `id_employers` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `surname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `position` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_employers`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id_employers`, `name`, `surname`, `position`) VALUES
(1, 'Dusan', 'Samac', 'fitnes'),
(2, 'Kristina', 'Stanojevic', 'aerobik');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `id_gallery` int(10) NOT NULL AUTO_INCREMENT,
  `path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `path_secondary` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `class` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `class_i` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_type_id` int(10) NOT NULL,
  PRIMARY KEY (`id_gallery`)
) ENGINE=InnoDB AUTO_INCREMENT=30 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id_gallery`, `path`, `path_secondary`, `alt`, `class`, `class_i`, `gallery_type_id`) VALUES
(1, 'assets/img/demo-bgs/demo-bg-1.jpg', '', 'slider1', '', '', 1),
(2, 'assets/img/demo-bgs/demo-bg-2.jpg', '', 'slider2', '', '', 1),
(3, 'assets/img/demo-bgs/demo-bg-3.jpg', '', 'slider3', '', '', 1),
(4, 'assets/img/demo-clients/1.png', '', 'sponsors1', '', '', 2),
(5, 'assets/img/demo-clients/2.png', '', 'sponsors2', '', '', 2),
(6, 'assets/img/demo-clients/3.png', '', 'sponsors3', '', '', 2),
(7, 'assets/img/demo-clients/4.png', '', 'sponsors4', '', '', 2),
(8, 'assets/img/demo-clients/5.png', '', 'sponsors5', '', '', 2),
(9, 'assets/img/demo-clients/6.png', '', 'sponsors6', '', '', 2),
(10, 'assets/img/demo-clients/7.png', '', 'sponsors7', '', '', 2),
(11, 'assets/img/demo-clients/8.png', '', 'sponsors8', '', '', 2),
(12, 'assets/img/demo-clients/9.png', '', 'sponsors9', '', '', 2),
(13, 'assets/img/demo-clients/10.png', '', 'sponsors10', '', '', 2),
(14, 'assets/img/demo-portraits/portrait-1.jpg', '', 'zaposleni1', '', '', 3),
(15, 'assets/img/demo-portraits/portrait-2.jpg', '', 'zaposleni2', '', '', 3),
(18, 'assets/img/demo-portfolio/15.jpg', 'assets/img/demo-portfolio/16.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(19, 'assets/img/demo-portfolio/17.jpg', 'assets/img/demo-portfolio/18.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(20, 'assets/img/demo-portfolio/19.jpg', 'assets/img/demo-portfolio/20.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(21, 'assets/img/demo-portfolio/21.jpg', 'assets/img/demo-portfolio/22.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(22, 'assets/img/demo-portfolio/23.jpg', 'assets/img/demo-portfolio/24.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(23, 'assets/img/demo-portfolio/25.jpg', 'assets/img/demo-portfolio/26.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(24, 'assets/img/demo-portfolio/27.jpg', 'assets/img/demo-portfolio/28.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(25, 'assets/img/demo-portfolio/29.jpg', 'assets/img/demo-portfolio/30.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(26, 'assets/img/demo-portfolio/31.jpg', 'assets/img/demo-portfolio/32.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(27, 'assets/img/demo-portfolio/33.jpg', 'assets/img/demo-portfolio/34.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(28, 'assets/img/demo-portfolio/35.jpg', 'assets/img/demo-portfolio/36.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5),
(29, 'assets/img/demo-portfolio/37.jpg', 'assets/img/demo-portfolio/38.jpg', 'training', 'gallery-item', 'fa fa-search-plus', 5);

-- --------------------------------------------------------

--
-- Table structure for table `gallery_type`
--

DROP TABLE IF EXISTS `gallery_type`;
CREATE TABLE IF NOT EXISTS `gallery_type` (
  `id_gallery_type` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_gallery_type`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery_type`
--

INSERT INTO `gallery_type` (`id_gallery_type`, `name`) VALUES
(1, 'slider'),
(2, 'sponsor'),
(3, 'employer'),
(4, 'gym'),
(5, 'training');

-- --------------------------------------------------------

--
-- Table structure for table `gym`
--

DROP TABLE IF EXISTS `gym`;
CREATE TABLE IF NOT EXISTS `gym` (
  `id_gym` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `instagram` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `logo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_gym`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gym`
--

INSERT INTO `gym` (`id_gym`, `name`, `location`, `phone`, `email`, `facebook`, `instagram`, `logo`) VALUES
(1, 'Sportwill', 'lokacija', '1321412412', 'sportwill@gmail.com', 'https://www.facebook.com/', 'https://www.instagram.com/', 'assets/img/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `navigation`
--

DROP TABLE IF EXISTS `navigation`;
CREATE TABLE IF NOT EXISTS `navigation` (
  `id_navigation` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `path` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_navigation`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `navigation`
--

INSERT INTO `navigation` (`id_navigation`, `name`, `path`) VALUES
(1, 'About', '#about'),
(2, 'Feauters', '#features'),
(3, 'Gallery', '#gallery'),
(4, 'Contact', '#contact');

-- --------------------------------------------------------

--
-- Table structure for table `sponsors`
--

DROP TABLE IF EXISTS `sponsors`;
CREATE TABLE IF NOT EXISTS `sponsors` (
  `id_sponsors` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `gallery_id` int(10) NOT NULL,
  PRIMARY KEY (`id_sponsors`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sponsors`
--

INSERT INTO `sponsors` (`id_sponsors`, `name`, `gallery_id`) VALUES
(1, 'Sponzor 1', 4),
(2, 'Sponzor 1', 5),
(3, 'Sponzor 1', 6),
(4, 'Sponzor 1', 7),
(5, 'Sponzor 1', 8),
(6, 'Sponzor 1', 9),
(7, 'Sponzor 1', 10),
(8, 'Sponzor 1', 11),
(9, 'Sponzor 1', 12),
(10, 'Sponzor 1', 13);

-- --------------------------------------------------------

--
-- Table structure for table `trening_types`
--

DROP TABLE IF EXISTS `trening_types`;
CREATE TABLE IF NOT EXISTS `trening_types` (
  `id_trening_types` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `icon` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `short_description` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `long_description` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_trening_types`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
