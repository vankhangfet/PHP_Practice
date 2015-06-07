-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 15, 2011 at 02:14 PM
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
-- Table structure for table `ct_dat_hang`
--

DROP TABLE IF EXISTS `ct_dat_hang`;
CREATE TABLE IF NOT EXISTS `ct_dat_hang` (
  `SDH` int(11) NOT NULL DEFAULT '0',
  `MS` int(11) NOT NULL DEFAULT '0',
  `So_luong` int(11) DEFAULT NULL,
  `Don_gia` double DEFAULT NULL,
  `Thanh_tien` double DEFAULT NULL,
  PRIMARY KEY (`SDH`,`MS`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `ct_dat_hang`
--

