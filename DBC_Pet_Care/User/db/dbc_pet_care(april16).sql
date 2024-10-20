-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2023 at 12:37 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbc_pet_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('admin@gmail.com', 'Admin@123', 'Admin'),
('gokul@gmail.com', 'Gokul@123', 'User'),
('pcgokul@gmail.com', 'Gokul@123', 'PetCenter'),
('samantha@gmail.com', 'Samantha@123', 'User'),
('Rubina@gmail.com', 'Password@123', 'User'),
('Rubinapetcenter@gmail.com', 'Password@123', 'PetCenter'),
('akg@gmail.com', 'Password@123', 'PetCenter');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`email`, `name`, `phone_no`, `status`) VALUES
('gokul@gmail.com', 'Gokul Jayakumar', 7678659000, 0),
('samantha@gmail.com', 'Samantha', 9988779988, 0),
('Rubina@gmail.com', 'Rubina', 7589426512, 0);

-- --------------------------------------------------------

--
-- Table structure for table `register_petcenter`
--

CREATE TABLE IF NOT EXISTS `register_petcenter` (
  `email` varchar(200) NOT NULL,
  `pet_center_name` varchar(200) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `status` int(2) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_petcenter`
--

INSERT INTO `register_petcenter` (`email`, `pet_center_name`, `phone_no`, `status`) VALUES
('pcgokul@gmail.com', 'PC gokul', 7678659000, 0),
('Rubinapetcenter@gmail.com', 'Rubina pet center', 7589426512, 0),
('akg@gmail.com', 'AKG Center', 7589426512, 0);
