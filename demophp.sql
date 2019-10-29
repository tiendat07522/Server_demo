-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Oct 29, 2019 at 04:57 AM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `demophp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `mp3`
--

DROP TABLE IF EXISTS `mp3`;
CREATE TABLE IF NOT EXISTS `mp3` (
  `mp3_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) CHARACTER SET utf8 COLLATE utf8_vietnamese_ci NOT NULL,
  `singer` varchar(100) NOT NULL,
  `category` varchar(1000) DEFAULT NULL,
  `views` int(11) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL,
  `picture` varchar(100) NOT NULL,
  PRIMARY KEY (`mp3_id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp3`
--

INSERT INTO `mp3` (`mp3_id`, `name`, `singer`, `category`, `views`, `path`, `picture`) VALUES
(28, 'Dang da cho ta 1 mua xuan', 'min rose', NULL, NULL, 'demophp/uploads/mp3/dangda.mp3', 'demophp/uploads/image/020104.png');

-- --------------------------------------------------------

--
-- Table structure for table `mp4`
--

DROP TABLE IF EXISTS `mp4`;
CREATE TABLE IF NOT EXISTS `mp4` (
  `mp4_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(1000) NOT NULL,
  `singer` varchar(100) NOT NULL,
  `category` varchar(100) NOT NULL,
  `views` int(11) NOT NULL,
  `path` varchar(200) NOT NULL,
  PRIMARY KEY (`mp4_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mp4`
--

INSERT INTO `mp4` (`mp4_id`, `name`, `singer`, `category`, `views`, `path`) VALUES
(1, 'Video 1', 'Singer1', '1', 1, 'upload/mp4/video1');

-- --------------------------------------------------------

--
-- Table structure for table `playlist`
--

DROP TABLE IF EXISTS `playlist`;
CREATE TABLE IF NOT EXISTS `playlist` (
  `playlist_id` int(11) NOT NULL AUTO_INCREMENT,
  `mp3_id` int(11) NOT NULL,
  `mp4_id` int(11) NOT NULL,
  `users_id` int(11) NOT NULL,
  PRIMARY KEY (`playlist_id`),
  KEY `mp3_id` (`mp3_id`),
  KEY `mp4_id` (`mp4_id`),
  KEY `users_id` (`users_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `upload`
--

DROP TABLE IF EXISTS `upload`;
CREATE TABLE IF NOT EXISTS `upload` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(256) NOT NULL,
  `size` int(11) NOT NULL,
  `type` varchar(256) NOT NULL,
  `location` varchar(256) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `upload`
--

INSERT INTO `upload` (`id`, `name`, `size`, `type`, `location`) VALUES
(1, 'aaaa.jpg', 51736, 'image/jpeg', 'aaaa.jpg'),
(2, 'aaaa.jpg', 51736, 'image/jpeg', 'aaaa.jpg'),
(3, 'aaaa.jpg', 51736, 'image/jpeg', '/uploads'),
(4, 'adv_2.jpg', 7655, 'image/jpeg', '/uploads'),
(5, 'a.jpg', 20653, 'image/jpeg', 'uploads/.a.jpg'),
(6, 'a.jpg', 20653, 'image/jpeg', 'uploads/a.jpg'),
(7, '28583848_586825598324061_599672628_o.jpg', 726344, 'image/jpeg', 'uploads/28583848_586825598324061_599672628_o.jpg'),
(8, 'a.jpg', 20653, 'image/jpeg', 'uploads/a.jpg'),
(9, 'hu.jpg', 110170, 'image/jpeg', 'uploads/hu.jpg'),
(10, '28583848_586825598324061_599672628_o.jpg', 726344, 'image/jpeg', 'uploads/28583848_586825598324061_599672628_o.jpg'),
(11, '28583848_586825598324061_599672628_o.jpg', 726344, 'image/jpeg', 'uploads/28583848_586825598324061_599672628_o.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `name`, `username`, `password`) VALUES
(1, 'Dat', 'datma', '123');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `playlist`
--
ALTER TABLE `playlist`
  ADD CONSTRAINT `playlist_ibfk_1` FOREIGN KEY (`mp3_id`) REFERENCES `mp3` (`mp3_id`),
  ADD CONSTRAINT `playlist_ibfk_2` FOREIGN KEY (`mp4_id`) REFERENCES `mp4` (`mp4_id`),
  ADD CONSTRAINT `playlist_ibfk_3` FOREIGN KEY (`users_id`) REFERENCES `users` (`users_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
