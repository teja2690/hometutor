-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2018 at 06:18 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hometutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `completedetails`
--

CREATE TABLE IF NOT EXISTS `completedetails` (
  `studentName` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `gender` varchar(8) NOT NULL,
  `qualification` varchar(20) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `aadharNo` varchar(12) NOT NULL,
  `station` varchar(30) NOT NULL,
  `address` varchar(70) NOT NULL,
  `email1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `completedetails`
--

INSERT INTO `completedetails` (`studentName`, `dob`, `gender`, `qualification`, `subject`, `aadharNo`, `station`, `address`, `email1`) VALUES
('ajit', '24/09/2011', 'male', '5', 'math', '536587465879', 'Rajib Chowk', 'new delhi', 'ajit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `complete_tutor_details`
--

CREATE TABLE IF NOT EXISTS `complete_tutor_details` (
  `name` varchar(30) NOT NULL,
  `tgender` varchar(10) NOT NULL,
  `tdob` varchar(10) NOT NULL,
  `tqualification` varchar(20) NOT NULL,
  `taadharNo` varchar(12) NOT NULL,
  `tcourse` varchar(30) NOT NULL,
  `tstation` varchar(30) NOT NULL,
  `taddress` varchar(90) NOT NULL,
  `temail1` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complete_tutor_details`
--

INSERT INTO `complete_tutor_details` (`name`, `tgender`, `tdob`, `tqualification`, `taadharNo`, `tcourse`, `tstation`, `taddress`, `temail1`) VALUES
('', 'male', '24/09/1994', 'btech', '2147483647', 'hindi', 'Rajib Chowk', 'dhgh', 'ajit@gmail.com'),
('', 'male', '23/09/1994', 'btech', '123456789123', 'Math', 'Rajib Chowk', 'new delhi', 'uttam@gmail.com'),
('', 'male', '12/09/1994', 'btech', '123456789123', 'math', 'Rajib Chowk', 'new delhi', 'xyz@gmail.com'),
('Ajit', 'male', '23/09/1993', '12th', '9876542345', 'math', 'Adarsh Nagar', 'new delhi', 'ajit@gmail.com'),
('ajit', 'male', '23/09/2011', 'btech', '45678997654', 'all', 'Rajib Chowk', 'new delhi', 'ajit@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE IF NOT EXISTS `course` (
  `courseid` varchar(10) NOT NULL,
  `CourseName` varchar(20) NOT NULL,
  `CourseFee` varchar(6) NOT NULL,
  `CourseOfClass` varchar(2) NOT NULL,
  PRIMARY KEY (`courseid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseid`, `CourseName`, `CourseFee`, `CourseOfClass`) VALUES
('1111', 'Hindi', '2000', '9'),
('1112', 'Hindi', '2000', '10'),
('1113', 'all', '3000', '8'),
('1114', 'all', '3000', '7'),
('1115', 'all', '3000', '6'),
('1116', 'all', '3000', '5'),
('1117', 'all', '3000', '4'),
('1118', 'all', '3000', '3'),
('1119', 'all', '3000', '2'),
('1120', 'all', '3000', '1'),
('1121', 'all', '3000', 'KG'),
('1124', 'math', '2000', '5');

-- --------------------------------------------------------

--
-- Table structure for table `signup1`
--

CREATE TABLE IF NOT EXISTS `signup1` (
  `type` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile` varchar(11) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup1`
--

INSERT INTO `signup1` (`type`, `name`, `email`, `mobile`, `password`) VALUES
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('', '', '', '', ''),
('student', 'hsbh', 'sdh@gmail.com', '12345678766', '1234'),
('tutor', 'aaaaaaaaaaaaaa', 'aaaaaaaa@gmail.com', '9012345678', '1234'),
('tutor', 'aaaaaaaaaaaaaa', 'aaaaaaaa@gmail.com', '9012345678', '1234'),
('student', 'aisha', 'aisha@gmail.com', '9025437645', '123456'),
('student', 'aisha', 'aisha@gmail.com', '9025437645', '123456'),
('student', 'dhananjay', 'vdamnd@gmail.com', '8888998888', '12345'),
('student', 'dhananjay', 'vdamnd@gmail.com', '8888998888', '12345'),
('student', 'ashish', 'ash@gmail.com', '6770', 'abc'),
('student', 'ashish', 'ash@gmail.com', '6770', 'abc'),
('', 'ashish', 'abc@gmail.com', '8887', 'abc'),
('', 'ashish', 'abc@gmail.com', '8887', 'abc'),
('student', 'ajit', 'ajit@gmail.com', '9035294372', '123456'),
('student', 'ajit', 'ajit@gmail.com', '9035294372', '123456'),
('tutor', 'uttam', 'uttam@gmail.com', '9035294372', '123456'),
('tutor', 'uttam', 'uttam@gmail.com', '9035294372', '123456'),
('tutor', 'xyz', 'xyz@gmail.com', '9023451234', '123456'),
('tutor', 'xyz', 'xyz@gmail.com', '9023451234', '123456'),
('tutor', 'xyz', 'xyz@gmail.com', '9012345674', '1234'),
('tutor', 'xyz', 'xyz@gmail.com', '9012345674', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `tutor`
--

CREATE TABLE IF NOT EXISTS `tutor` (
  `tutorEmail` varchar(30) NOT NULL,
  `address` varchar(30) NOT NULL,
  `currentAddress` varchar(30) NOT NULL,
  `permanentAddress` varchar(30) NOT NULL,
  `qualification` varchar(30) NOT NULL,
  `aadharNo` int(12) NOT NULL,
  `panNo` varchar(10) NOT NULL,
  `tutorCharge` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
