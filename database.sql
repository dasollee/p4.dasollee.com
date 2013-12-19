-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 18, 2013 at 08:05 PM
-- Server version: 5.5.33-31.1
-- PHP Version: 5.3.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `luvusinc_p4_dasollee_com`
--

-- --------------------------------------------------------

--
-- Table structure for table `journal`
--

CREATE TABLE IF NOT EXISTS `journal` (
  `year` int(10) NOT NULL,
  `month` int(10) NOT NULL,
  `date` int(10) NOT NULL,
  `text` text COLLATE utf8_unicode_ci NOT NULL,
  `uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `journal`
--

INSERT INTO `journal` (`year`, `month`, `date`, `text`, `uid`) VALUES
(2013, 12, 17, 'Today is an awesome day.', 'amdcpybt@gmail.com'),
(2014, 12, 17, '', 'amdcpybt@gmail.com'),
(2015, 12, 17, '', 'amdcpybt@gmail.com'),
(2016, 12, 17, '', 'amdcpybt@gmail.com'),
(2017, 12, 17, '', 'amdcpybt@gmail.com'),
(2013, 12, 1, '', 'amdcpybt@gmail.com'),
(2014, 12, 1, '', 'amdcpybt@gmail.com'),
(2015, 12, 1, '', 'amdcpybt@gmail.com'),
(2016, 12, 1, '', 'amdcpybt@gmail.com'),
(2017, 12, 1, '', 'amdcpybt@gmail.com'),
(2013, 11, 15, '', 'amdcpybt@gmail.com'),
(2014, 11, 15, '', 'amdcpybt@gmail.com'),
(2015, 11, 15, '', 'amdcpybt@gmail.com'),
(2016, 11, 15, '', 'amdcpybt@gmail.com'),
(2017, 11, 15, '', 'amdcpybt@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE IF NOT EXISTS `test` (
  `testint` int(10) NOT NULL,
  `testvarchar` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `testtext` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `upw` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `upw`) VALUES
('amdcpybt@gmail.com', '7bcbf838aad2d6d4f975380ee45ef8d8');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
