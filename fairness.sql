-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Feb 15, 2021 at 10:34 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fairness`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(200) CHARACTER SET utf8 NOT NULL,
  `txtMessage` text CHARACTER SET utf8 NOT NULL,
  `img` varchar(200) DEFAULT NULL,
  `m_username` varchar(100) DEFAULT NULL,
  `datesave` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`a_id`, `title`, `txtMessage`, `img`, `m_username`, `datesave`) VALUES
(1, 'ทดสอบ 1', 'หกดฟหกดฟหกดฟหกดฟหกดฟหกดหฟกด', '', '', '2021-02-15 09:54:18'),
(2, 'ทดสอบ 2', 'ฟหกดฟหกดฟหกดฟหกดฟหกด', '', '', '2021-02-15 09:54:18');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `level` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`ID`, `username`, `password`, `name`, `level`) VALUES
(1, 'admin', 'hellojava', 'somsak', 'admin'),
(2, '222', '222', 'devtai', 'member');

-- --------------------------------------------------------

--
-- Table structure for table `nt_act`
--

DROP TABLE IF EXISTS `nt_act`;
CREATE TABLE IF NOT EXISTS `nt_act` (
  `id_act` int(7) NOT NULL AUTO_INCREMENT,
  `name_act` varchar(255) NOT NULL,
  `date_act` varchar(50) NOT NULL,
  `detail_act` text NOT NULL,
  `id_photo` int(7) NOT NULL,
  `date_in` varchar(255) NOT NULL,
  `status_act` int(7) NOT NULL,
  PRIMARY KEY (`id_act`)
) ENGINE=MyISAM AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nt_act`
--

INSERT INTO `nt_act` (`id_act`, `name_act`, `date_act`, `detail_act`, `id_photo`, `date_in`, `status_act`) VALUES
(25, 'กิจกรรมการปลูปป่า', '1 กันยายน 2554', 'มาร่วมกิจกรรมปลูกป่ากันนะคับ', 162, '01-09-2011', 1),
(27, 'ปลูกป่า2', '31 สิงหาคม 2554', 'ปลูกป่่าลดภาวะโลกร้อน                              ', 166, '01-09-2011', 0);

-- --------------------------------------------------------

--
-- Table structure for table `nt_photo`
--

DROP TABLE IF EXISTS `nt_photo`;
CREATE TABLE IF NOT EXISTS `nt_photo` (
  `id_photo` int(7) NOT NULL AUTO_INCREMENT,
  `name_photo` varchar(255) NOT NULL,
  `id_act` int(7) NOT NULL,
  PRIMARY KEY (`id_photo`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `nt_photo`
--

INSERT INTO `nt_photo` (`id_photo`, `name_photo`, `id_act`) VALUES
(162, 'DSC04777.JPG', 25),
(165, 'DSC04870.JPG', 27),
(166, 'DSC04884.JPG', 27);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
