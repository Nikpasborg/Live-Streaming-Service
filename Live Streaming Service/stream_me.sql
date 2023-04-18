-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 02, 2023 at 01:47 AM
-- Server version: 8.0.31
-- PHP Version: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stream.me`
--

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

DROP TABLE IF EXISTS `chat`;
CREATE TABLE IF NOT EXISTS `chat` (
  `chat_Id` int NOT NULL AUTO_INCREMENT,
  `stream_Id` int NOT NULL,
  `user_Id` int NOT NULL,
  `message_Id` varchar(255) NOT NULL,
  `timestamp` timestamp NOT NULL,
  PRIMARY KEY (`chat_Id`),
  KEY `stream_Id` (`stream_Id`),
  KEY `user_Id` (`user_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `follower`
--

DROP TABLE IF EXISTS `follower`;
CREATE TABLE IF NOT EXISTS `follower` (
  `follower_Id` int NOT NULL AUTO_INCREMENT,
  `user_Id` int NOT NULL,
  PRIMARY KEY (`follower_Id`),
  KEY `user_Id` (`user_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stream`
--

DROP TABLE IF EXISTS `stream`;
CREATE TABLE IF NOT EXISTS `stream` (
  `stream_Id` int NOT NULL AUTO_INCREMENT,
  `user_Id` int NOT NULL,
  `stream_Title` varchar(50) NOT NULL,
  `stream_Desc` varchar(255) NOT NULL,
  `#ofviewers` int NOT NULL,
  `stream_start` datetime NOT NULL,
  `stream_end` datetime NOT NULL,
  PRIMARY KEY (`stream_Id`),
  KEY `user_Id` (`user_Id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

DROP TABLE IF EXISTS `subscriptions`;
CREATE TABLE IF NOT EXISTS `subscriptions` (
  `subscription_Id` int NOT NULL AUTO_INCREMENT,
  `user_Id` int NOT NULL,
  `subscribe_date` date NOT NULL,
  `subscribe_end` date NOT NULL,
  PRIMARY KEY (`subscription_Id`),
  KEY `user_Id` (`user_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`subscription_Id`, `user_Id`, `subscribe_date`, `subscribe_end`) VALUES
(1, 15132, '2023-03-01', '2023-03-01');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_Id` int NOT NULL AUTO_INCREMENT,
  `user_Pass` varchar(255) NOT NULL,
  `user_Email` varchar(255) NOT NULL,
  `user_Name` varchar(35) NOT NULL,
  `birth_date` date NOT NULL,
  PRIMARY KEY (`user_Id`)
) ENGINE=MyISAM AUTO_INCREMENT=15135 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_Id`, `user_Pass`, `user_Email`, `user_Name`, `birth_date`) VALUES
(15132, 'password', 'email@domain.ca', 'Francis-Jay Cabato', '1999-03-03'),
(15134, '5f4dcc3b5aa765d61d8327deb882cf99', 'jeff@jeff.com', 'Jeff', '1212-12-12');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
