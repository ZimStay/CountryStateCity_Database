-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 05, 2014 at 02:42 PM
-- Server version: 5.1.72-community
-- PHP Version: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cscdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state_id` int(11) NOT NULL,
  `city_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=52 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `state_id`, `city_name`) VALUES
(1, 1, 'Mumbai'),
(2, 1, 'Pune'),
(3, 1, 'Latur'),
(4, 2, 'Gurdaspur'),
(5, 2, 'Amritsar'),
(6, 2, 'Pathankot'),
(7, 2, 'Ludhiana'),
(8, 3, 'Jaipur'),
(9, 3, 'Ajmer'),
(10, 4, 'Bareilly'),
(11, 4, 'Meerut'),
(12, 4, 'Kanpur'),
(13, 4, 'Agra'),
(14, 9, 'Long Xuyen '),
(15, 10, 'Vung Tau '),
(16, 11, 'Thai Nguyen '),
(17, 12, 'Quy Nhon '),
(18, 5, 'Abbeville'),
(19, 5, 'Coaling'),
(20, 5, 'Goodwater'),
(21, 5, 'Marvel'),
(22, 6, 'Fairbanks'),
(23, 6, 'Wasilla'),
(24, 6, 'Bethel'),
(25, 6, 'Palmer'),
(26, 8, 'Miami'),
(27, 8, 'Orlando'),
(28, 8, 'Hialeah'),
(29, 8, 'Fort Lauderdale'),
(30, 17, 'Mutare'),
(31, 13, 'Chipinge'),
(32, 13, 'Chimanimani'),
(33, 13, 'Nyanga'),
(34, 14, 'Masvingo'),
(35, 14, 'Chiredzi'),
(36, 14, 'Gutu'),
(37, 14, 'Bikita'),
(38, 15, 'Harare'),
(39, 15, 'Mt Darwin'),
(40, 15, 'Chitungwiza'),
(41, 15, 'Bindura'),
(42, 15, 'Chinhoyi'),
(43, 15, 'Chegutu'),
(44, 15, 'Beatrice'),
(45, 16, 'Chivhu'),
(46, 16, 'Gweru'),
(47, 16, 'Kwekwe'),
(48, 16, 'Kadoma'),
(49, 17, 'Bulawayo'),
(50, 17, 'Beitbridge'),
(51, 17, 'Gwanda');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `country_name`) VALUES
(1, 'India'),
(2, 'USA'),
(3, 'Vietnam'),
(4, 'Zimbabwe'),
(5, 'Zambia');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_id` int(11) NOT NULL,
  `state_name` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `country_id`, `state_name`) VALUES
(1, 1, 'Maharashtra'),
(2, 1, 'Punjab'),
(3, 1, 'Rajasthan '),
(4, 1, 'Uttar Pradesh'),
(5, 2, 'Alabama'),
(6, 2, 'Alaska'),
(8, 2, 'Florida'),
(9, 3, 'An Giang '),
(10, 3, 'Ba Ria-Vung Tau '),
(11, 3, 'Bac Thai '),
(12, 3, 'Binh Dinh '),
(13, 4, 'Manicaland'),
(14, 4, 'Masvingo'),
(15, 4, 'Mashonaland'),
(16, 4, 'Midlands'),
(17, 4, 'Matebeleland');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
