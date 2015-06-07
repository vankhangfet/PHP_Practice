-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2011 at 02:16 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `books`
--

-- --------------------------------------------------------

--
-- Table structure for table `tham_do_ct`
--

DROP TABLE IF EXISTS `tham_do_ct`;
CREATE TABLE IF NOT EXISTS `tham_do_ct` (
  `MCH` int(11) DEFAULT NULL,
  `Stt` int(11) NOT NULL DEFAULT '0',
  `Noi_dung` varchar(255) COLLATE utf8_bin DEFAULT NULL,
  `So_lan_binh_chon` int(11) DEFAULT NULL,
  PRIMARY KEY (`Stt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `tham_do_ct`
--

