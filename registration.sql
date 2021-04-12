-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 20, 2019 at 08:08 AM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_place`
--

CREATE TABLE IF NOT EXISTS `add_place` (
  `place_name` char(50) NOT NULL,
  `package_name` varchar(100) NOT NULL,
  `detail` varchar(200) NOT NULL,
  `cost_per_person` int(6) NOT NULL,
  `id` int(6) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=28 ;

--
-- Dumping data for table `add_place`
--

INSERT INTO `add_place` (`place_name`, `package_name`, `detail`, `cost_per_person`, `id`) VALUES
('Bhopal', '3 night 2 day', 'city of lakes', 500, 21),
('Pune', '3 night 2 day', 'Metro city', 3000, 22),
('Banglore', '3 night 2 day', 'Metro city', 1200, 23),
('Mathura', '3 night 2 day', 'Holy Place', 1200, 24),
('silwani', '3 night 2 day', 'city of lakes', 1200, 25),
('Goa', '3 night 2 day', 'Full of Beaches', 1200, 26),
('Manali', '3 night 2 day', 'hill station', 12345, 27);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE IF NOT EXISTS `booking` (
  `bookingid` int(6) NOT NULL AUTO_INCREMENT,
  `packageid` int(6) NOT NULL,
  `bookedby` varchar(60) NOT NULL,
  `date` date NOT NULL,
  `noofperson` int(6) NOT NULL,
  `total` int(11) NOT NULL,
  `status` varchar(60) NOT NULL DEFAULT 'booking placed',
  PRIMARY KEY (`bookingid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bookingid`, `packageid`, `bookedby`, `date`, `noofperson`, `total`, `status`) VALUES
(1, 22, 'vipingourkhede@gmail.com', '2019-04-19', 4, 49380, 'booking placed'),
(2, 23, 'sapna1@gmail.com', '2019-04-19', 2, 2400, 'booking placed'),
(3, 21, 'vipingourkhede@gmail.com', '2019-04-19', 2, 692, 'booking placed'),
(7, 21, 'vipingourkhede@gmail.com', '2019-04-20', 2, 692, 'booking placed'),
(8, 21, 'vipingourkhede@gmail.com', '2019-04-26', 2, 1000, 'booking placed'),
(9, 21, 'vipingourkhede@gmail.com', '2019-04-13', 1, 500, 'booking placed'),
(10, 21, 'vicky@gmail.com', '2019-04-26', 2, 1000, 'booking placed'),
(11, 21, 'sapna@gmail.com', '2019-04-20', 1, 500, 'booking placed'),
(12, 23, 'daminimourya05@gmailc0m', '2019-04-25', 3, 3600, 'booking placed');

-- --------------------------------------------------------

--
-- Table structure for table `tourism`
--

CREATE TABLE IF NOT EXISTS `tourism` (
  `name` char(30) NOT NULL,
  `mobile_no` bigint(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tourism`
--

INSERT INTO `tourism` (`name`, `mobile_no`, `email`, `password`) VALUES
('damini', 7503621455, 'daminimourya05@gmailc0m', '787'),
('Deeksha gour', 8085677335, 'deekshagour@gmail.com', '12345'),
('namrata', 7554287043, 'namrata@gmail.com', '12345'),
('Rajni', 7554287043, 'rajni@gmail.com', '12345'),
('damini', 8085677335, 'rupali@gmail.com', '12345'),
('Sapna sahu', 7554287043, 'sapna1@gmail.com', '12345'),
('Dolly gour', 8784647463, 'sapna@gmail.com', '123456'),
('Vicky', 7554287043, 'vicky@gmail.com', '12345'),
('Vipin gourkhede', 8319494921, 'vipingourkhede@gmail.com', '12345');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
