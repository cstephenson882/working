-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 27, 2023 at 09:33 AM
-- Server version: 5.7.31
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

DROP TABLE IF EXISTS `application`;
CREATE TABLE IF NOT EXISTS `application` (
  `AID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Gender` varchar(6) DEFAULT NULL,
  `DOB` date NOT NULL,
  `Phone` varchar(12) NOT NULL,
  `Email` varchar(80) NOT NULL,
  `Street` varchar(100) NOT NULL,
  `Zip` varchar(7) NOT NULL,
  `Country` varchar(50) NOT NULL,
  `SchoolName` varchar(150) NOT NULL,
  `SchoolStreet` varchar(100) NOT NULL,
  `SchoolZip` varchar(7) NOT NULL,
  `SchoolCountry` varchar(50) NOT NULL,
  `EFirstName` varchar(50) NOT NULL,
  `ELastName` varchar(50) NOT NULL,
  `EEmail` varchar(100) NOT NULL,
  `EPhone` varchar(12) NOT NULL,
  `RoomType` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `State` varchar(10) NOT NULL,
  PRIMARY KEY (`AID`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`AID`, `FirstName`, `LastName`, `Gender`, `DOB`, `Phone`, `Email`, `Street`, `Zip`, `Country`, `SchoolName`, `SchoolStreet`, `SchoolZip`, `SchoolCountry`, `EFirstName`, `ELastName`, `EEmail`, `EPhone`, `RoomType`, `Password`, `State`) VALUES
(5, 'pf', 'pl', 'Male', '2023-03-26', '0543-286636', 'p@gmail.com', 'asdf', '123', 'sad', 'sdfa', 'asdfschool', '123', 'dsaf', 'ef', 'el', 'alagaatik@icloud.com', '1232134', 'single', '1234', 'Rejected');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
