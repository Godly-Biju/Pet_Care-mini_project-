-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 07, 2023 at 05:54 PM
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
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `apt_id` int(10) NOT NULL AUTO_INCREMENT,
  `petcenter` varchar(100) NOT NULL,
  `pet_id` int(10) NOT NULL,
  `owner` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `reason` text NOT NULL,
  `apt_rate` int(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `payment` varchar(10) NOT NULL,
  PRIMARY KEY (`apt_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`apt_id`, `petcenter`, `pet_id`, `owner`, `date`, `time`, `reason`, `apt_rate`, `status`, `payment`) VALUES
(1, 'Rubinapetcenter@gmail.com', 1, 'gokul@gmail.com', '2023-05-21', '01:20', 'going on a trip, for 10 days', 999, 'Complete', 'Not Billed'),
(2, 'pcgokul@gmail.com', 2, 'samantha@gmail.com', '2023-05-23', '10:30', 'Going for 10 days shoot', 999, 'Complete', 'Not Billed'),
(3, 'akg@gmail.com', 1, 'gokul@gmail.com', '2023-06-23', '12:00', 'trip', 999, 'Complete', 'Not Billed'),
(4, 'akg@gmail.com', 1, 'gokul@gmail.com', '2023-07-02', '12:30', 'going for 2 day trip', 999, 'Assigned', 'Not Billed'),
(5, '', 1, 'gokul@gmail.com', '2023-06-02', '15:48', 'qqqq', 999, 'New', 'Not Billed');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE IF NOT EXISTS `chat_messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chat_messages`
--

INSERT INTO `chat_messages` (`id`, `sender`, `message`, `created_at`) VALUES
(1, 'gokul', 'hi', '2023-05-14 21:09:53'),
(2, 'gokul', 'To gain knowledge ', '2023-05-14 21:09:59');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `type` varchar(50) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `type`) VALUES
('admin', 'admin', 'Admin'),
('gokul@gmail.com', 'Gokul@123', 'User'),
('pcgokul@gmail.com', 'Gokul@123', 'PetCenter'),
('samantha@gmail.com', 'Samantha@123', 'User'),
('Rubina@gmail.com', 'Password@123', 'User'),
('Rubinapetcenter@gmail.com', 'Password@123', 'PetCenter'),
('akg@gmail.com', 'Password@123', 'PetCenter'),
('drchrome@gmail.com', 'drc', 'Doctor'),
('rahul@gmail.com', 'Rahul@123', 'User'),
('mj@gmail.com', 'mj@123', 'Doctor'),
('rubina2@gmail.com', 'Rubina@123', 'User'),
('tovinozzz@gmail.com', 'zz', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `online_consult`
--

CREATE TABLE IF NOT EXISTS `online_consult` (
  `consult_id` int(11) NOT NULL AUTO_INCREMENT,
  `user` varchar(100) NOT NULL,
  `query` text NOT NULL,
  `pet_id` int(11) NOT NULL,
  `doc_id` int(11) NOT NULL,
  `doc_note` text NOT NULL,
  `status` varchar(20) NOT NULL,
  `user_feedback` varchar(111) NOT NULL,
  PRIMARY KEY (`consult_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `online_consult`
--

INSERT INTO `online_consult` (`consult_id`, `user`, `query`, `pet_id`, `doc_id`, `doc_note`, `status`, `user_feedback`) VALUES
(1, 'gokul@gmail.com', 'test msg', 1, 1, 'Reply to query ans', 'New Case', '0'),
(3, 'samantha@gmail.com', 'memo is not ok,', 2, 1, 'reach out to nearest pet care', 'New Case', '0'),
(9, 'gokul@gmail.com', 'VHAD7GYYUGERNGSAOGTJU', 1, 0, '', 'New Case', '0'),
(10, 'gokul@gmail.com', 'Need a gromming', 1, 1, 'ok go to PCM', 'Completed', '0');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE IF NOT EXISTS `register` (
  `pet_id` int(11) NOT NULL AUTO_INCREMENT,
  `pet_name` varchar(100) NOT NULL,
  `pet_type` varchar(100) NOT NULL,
  `pet_gender` varchar(100) NOT NULL,
  `pet_dob` varchar(100) NOT NULL,
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` text NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`pet_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`pet_id`, `pet_name`, `pet_type`, `pet_gender`, `pet_dob`, `email`, `name`, `phone_no`, `address`, `status`) VALUES
(1, 'Cocoa', 'Dog', 'Female', '2023-06-01', 'gokul@gmail.com', 'Gokul Jayakumar', 7678659000, '123 street house', 'New'),
(2, 'Memo', 'Cat', 'Female', '2022-02-01', 'samantha@gmail.com', 'Samantha', 9988779988, 'aaaaaaaaaaaaaaaaaaaaaaaa', 'Approved'),
(3, '', '', '', '', 'Rubina@gmail.com', 'Rubina', 7589426512, '', 'New'),
(6, 'Joky', 'Dog', 'Male', '2023-06-29', 'rahul@gmail.com', 'Rahul', 1234561234, '123 Joky house ', 'Approved'),
(7, '', '', '', '', 'rubina2@gmail.com', 'Rubina', 7678653331, '', 'New'),
(8, '', '', '', '', 'tovinozzz@gmail.com', 'aaaaaaaaa', 77777777, '', 'New');

-- --------------------------------------------------------

--
-- Table structure for table `register_petcenter`
--

CREATE TABLE IF NOT EXISTS `register_petcenter` (
  `email` varchar(200) NOT NULL,
  `pet_center_name` varchar(200) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register_petcenter`
--

INSERT INTO `register_petcenter` (`email`, `pet_center_name`, `phone_no`, `status`) VALUES
('pcgokul@gmail.com', 'PC gokul', 7678659000, 'Approved'),
('Rubinapetcenter@gmail.com', 'Rubina pet center', 7589426512, 'New'),
('akg@gmail.com', 'AKG Center', 7589426512, 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `reg_doc`
--

CREATE TABLE IF NOT EXISTS `reg_doc` (
  `doc_id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ph_no` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `license` varchar(100) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `reg_doc`
--

INSERT INTO `reg_doc` (`doc_id`, `name`, `gender`, `dob`, `email`, `ph_no`, `address`, `license`) VALUES
(1, 'Michelle Johnson', 'female', '2005-05-10', 'mj@gmail.com', '1231231231', '321 home', 'LIC123'),
(5, 'Dr Chrome', 'male', '2005-06-01', 'drchrome@gmail.com', '7845127845', '7845 house', 'LIC456');

-- --------------------------------------------------------

--
-- Table structure for table `vaccine_breeding`
--

CREATE TABLE IF NOT EXISTS `vaccine_breeding` (
  `vb_id` int(11) NOT NULL AUTO_INCREMENT,
  `req_raised_by` varchar(100) NOT NULL,
  `pet_id` int(11) NOT NULL,
  `owner` varchar(110) NOT NULL,
  `rate` varchar(110) NOT NULL,
  `options` varchar(110) NOT NULL,
  `doc_approval` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL,
  `payment` varchar(100) NOT NULL,
  PRIMARY KEY (`vb_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `vaccine_breeding`
--

INSERT INTO `vaccine_breeding` (`vb_id`, `req_raised_by`, `pet_id`, `owner`, `rate`, `options`, `doc_approval`, `status`, `payment`) VALUES
(1, 'gokul@gmail.com', 1, 'gokul@gmail.com', '800', 'Vaccine', 'Approved', 'Complete', 'Billed'),
(2, 'akg@gmail.com', 2, 'samantha@gmail.com', '800', 'Breeding', 'Approved', 'Complete', 'Not Billed'),
(3, 'Rubinapetcenter@gmail.com', 1, 'gokul@gmail.com', '800', 'Breeding', 'New Case', 'New Case', 'Not Billed'),
(4, 'Rubinapetcenter@gmail.com', 6, 'rahul@gmail.com', '800', 'Breeding', 'Approved', 'New Case', 'Not Billed'),
(6, 'akg@gmail.com', 1, 'gokul@gmail.com', '800', 'Vaccine', 'New Case', 'New Case', 'Billed');
