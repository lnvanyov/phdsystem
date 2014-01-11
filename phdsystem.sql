-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2014 at 11:16 PM
-- Server version: 5.5.34
-- PHP Version: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `phdsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `users_id` int(11) NOT NULL AUTO_INCREMENT,
  `users_firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `users_lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `users_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `users_password` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `users_specialty` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `users_role` tinyint(1) DEFAULT NULL COMMENT '1-admin,2-student,3-phd,4-teacher',
  `users_email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `users_active` tinyint(4) NOT NULL DEFAULT '0',
  `users_deleted` tinyint(4) NOT NULL DEFAULT '0',
  PRIMARY KEY (`users_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=6 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`users_id`, `users_firstname`, `users_lastname`, `users_username`, `users_password`, `users_specialty`, `users_role`, `users_email`, `users_active`, `users_deleted`) VALUES
(1, 'First name', 'Last name', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Specialty', 2, 'First name', 0, 0),
(2, 'First name', 'Last name', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Specialty', 2, 'First name', 0, 0),
(3, 'First name', 'Last name', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Specialty', 2, 'First name', 0, 0),
(4, 'First name', 'Last name', 'test', '098f6bcd4621d373cade4e832627b4f6', 'Specialty', 2, 'First name', 0, 0),
(5, 'test2', 'test2', 'test2', 'ad0234829205b9033196ba818f7a872b', 'test2', 3, 'test2', 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
