-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2016 at 10:22 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `libarary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE IF NOT EXISTS `books` (
  `BId` int(10) NOT NULL AUTO_INCREMENT,
  `BName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `BAbout` text COLLATE utf8_unicode_ci NOT NULL,
  `BCategory` int(11) NOT NULL,
  `Book` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `BWriter` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`BId`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`BId`, `BName`, `BAbout`, `BCategory`, `Book`, `BWriter`, `date`) VALUES
(7, 'kk', 'kk', 1, 'online_exam.sql', 'kkk', '2016-04-27 08:21:29');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `CId` int(10) NOT NULL AUTO_INCREMENT,
  `CName` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`CId`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `Id` int(10) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `Username` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Userpassword` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Phone` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `Privalige` int(11) NOT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `Name`, `Email`, `Username`, `Userpassword`, `Phone`, `Privalige`) VALUES
(1, 'مدثر السمانى', 'mmmm', 'mmmm', '123', '1235', 0),
(2, '', '', '', '', '', 0),
(3, '', '', '', '', '', 0),
(4, '', '', '', '', '', 0),
(5, 'Ù…Ø¯Ø«Ø± Ø§Ù„Ø³Ù…Ø§Ù†Ù‰ Ø§Ù„Ø³Ù…Ø§Ù†Ù‰', 'modatherelsmani@gmail.com', 'modatheer', '123', '02220', 1),
(6, '&#1605;&#1583;&#1579;&#1585; &#1575;&#1604;&#1587;&#1605;&#1575;&#1606;&#1609; &#1575;&#1604;&#1587;', 'modatherelsmani@gmail.com', 'modatheer', '123', '02220', 0),
(7, '&#1605;&#1583;&#1579;&#1585; &#1575;&#1604;&#1587;&#1605;&#1575;&#1606;&#1609; &#1575;&#1604;&#1587;', 'modatherelsmani@gmail.com', 'modatheer', '123', '02220', 0),
(8, '', '', '', '', '', 0),
(9, '', '', '', '', '', 0),
(10, '', '', '', '', '', 0),
(11, '', '', '', '', '', 0),
(12, '', '', '', '', '', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
