-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2017 at 09:05 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sfs`
--

-- --------------------------------------------------------

--
-- Table structure for table `cm_feed`
--

CREATE TABLE `cm_feed` (
  `u_id` int(4) NOT NULL,
  `sub_code` varchar(1000) NOT NULL,
  `teacher_name` varchar(500) DEFAULT NULL,
  `year` varchar(10) NOT NULL,
  `sec` varchar(100) NOT NULL,
  `39` int(1) NOT NULL,
  `40` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cm_feed`
--

INSERT INTO `cm_feed` (`u_id`, `sub_code`, `teacher_name`, `year`, `sec`, `39`, `40`) VALUES
(2105, 'CS-521', 'JS', 'SY', 'A', 4, 4),
(2105, 'CS-522', 'MJS', 'SY', 'A', 5, 5),
(2105, 'CS-523', 'GK', 'SY', 'A', 5, 4),
(2105, 'CS-524', 'AD-8', 'SY', 'A', 5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `cm_subject`
--

CREATE TABLE `cm_subject` (
  `s_id` int(4) NOT NULL,
  `name` varchar(250) NOT NULL,
  `sub_code` varchar(25) NOT NULL,
  `year` varchar(20) NOT NULL,
  `sem` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cm_subject`
--

INSERT INTO `cm_subject` (`s_id`, `name`, `sub_code`, `year`, `sem`) VALUES
(24, 'Engineering Mathematics ', 'AM-411', 'FY', 1),
(25, 'Applied Chemistry ', 'CY-411', 'FY', 1),
(27, 'Engineering Mathematics', 'AM-411', 'FY', 1),
(28, 'Applied Chemistry', 'CY-411', 'FY', 1),
(29, 'Communication Skills/  Professional Communication', 'HU-411', 'FY', 1),
(30, 'Workshop Technology & Practice-I', 'WS-411', 'FY', 1),
(31, 'Engineering Drawing', 'ME-411', 'FY', 1),
(32, 'Elements of Computer Programming', 'CS-411', 'FY', 1),
(33, 'Computer Fundamentals and Information Technology', 'CS-412', 'FY', 1),
(34, 'Applied Physics', 'PH-421', 'FY', 2),
(35, 'Environmental Studies', 'MC-421', 'FY', 2),
(36, 'Elements of Electronics  Engineering', 'EC-421', 'FY', 2),
(37, 'Web Applications', 'CS-421', 'FY', 2),
(38, 'Element of Electrical Eng', 'EE-421', 'FY', 2),
(39, 'Object Oriented Programming', 'CS422', 'FY', 2),
(40, 'Trouble Shooting & Maintenance', 'CS-423', 'FY', 2),
(41, 'Two weeks Practical  Training   during summer vacations ', 'TP-401', 'FY', 2),
(43, 'Higher Engineering Mathematics', 'AM-511', 'SY', 3),
(44, 'Human Values and  Professional Ethics', 'MC-511', 'SY', 3),
(45, 'Operating System', 'CS-511', 'SY', 3),
(46, 'Digital Circuit and Logic', 'CS-512', 'SY', 3),
(47, 'Data structures and Algorithm', 'CS-513', 'SY', 3),
(48, 'Database Management System', 'CS-514', 'SY', 3),
(49, 'Numerical  Analysis ', 'AM-521', 'SY', 4),
(50, 'Industrial Chemistry', 'CY-521', 'SY', 4),
(51, 'Web Technologies', 'CS-521', 'SY', 4),
(52, 'Computer Organization', 'CS-522', 'SY', 4),
(53, 'Data Communication and Computer Networks', 'CS-523', 'SY', 4),
(54, 'System Software', 'CS-524', 'SY', 4),
(55, 'Engineering Economics and  Entrepreneurship ', 'HU-611', 'TY', 5),
(56, 'Material Science', 'PH-611', 'TY', 5),
(57, 'Seminar', 'CS-611', 'TY', 5),
(58, 'Algorithm Analysis and Design', 'CS-612', 'TY', 5),
(59, 'Software Engineering', 'CS-613', 'TY', 5),
(60, 'Discrete Mathematics', 'CS-614', 'TY', 5),
(61, 'Microprocessor and Application', 'CS-615', 'TY', 5),
(62, 'Elective-I', 'CS-621(A-D)', 'TY', 6),
(63, 'Automata and Formal Languages', 'CS-622', 'TY', 6),
(64, 'Computer Graphics and Multimedia ', 'CS-623', 'TY', 6),
(65, 'Software Reliability and Testing', 'CS-624', 'TY', 6),
(66, 'Simulation and Modelling ', 'CS-625', 'TY', 6),
(67, 'Network Programming', 'CS-626', 'TY', 6),
(68, 'Emerging Technologies Lab', 'CS-627', 'TY', 6),
(69, 'Industrial  Training   during summer vacations ( 6 weeks)', 'TP-701', 'TY', 6),
(73, 'Advanced Computer Architecture', 'CS-712', 'FRY', 7),
(74, 'Artificial Intelligence', 'CS-713', 'FRY', 7),
(75, 'Data Mining and Warehousing', 'CS-714', 'FRY', 7),
(76, 'Compiler Design', 'CS-715', 'FRY', 7),
(77, 'Advance Technology Lab', 'CS-716', 'FRY', 7),
(78, 'Project', 'CS-717', 'FRY', 7),
(79, 'Industrial Training ( Evaluation Only)', 'TP-701E', 'FRY', 7),
(80, 'Technical Communication & Soft Skills', 'HU-721', 'FRY', 8),
(81, 'Elective-III', 'CS-721(A-D)', 'FRY', 8),
(82, 'Soft Computing ', 'CS-722', 'FRY', 8),
(83, 'High Speed Communication Network', 'CS-723', 'FRY', 8),
(84, 'Parallel Computing', 'CS-724', 'FRY', 8),
(85, 'OP-Elective', 'OE-729', 'FRY', 8),
(86, 'Project', 'CS-725', 'FRY', 8);

-- --------------------------------------------------------

--
-- Table structure for table `cv_feed`
--

CREATE TABLE `cv_feed` (
  `u_id` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL,
  `44` int(10) NOT NULL,
  `45` int(10) NOT NULL,
  `46` int(10) NOT NULL,
  `47` int(10) NOT NULL,
  `48` int(10) NOT NULL,
  `49` int(10) NOT NULL,
  `50` int(10) NOT NULL,
  `51` int(10) NOT NULL,
  `52` int(10) NOT NULL,
  `53` int(10) NOT NULL,
  `54` int(10) NOT NULL,
  `55` int(10) NOT NULL,
  `56` int(10) NOT NULL,
  `57` int(10) NOT NULL,
  `58` int(10) NOT NULL,
  `59` int(10) NOT NULL,
  `60` int(10) NOT NULL,
  `61` int(10) NOT NULL,
  `62` int(10) NOT NULL,
  `63` int(10) NOT NULL,
  `64` int(10) NOT NULL,
  `65` int(10) NOT NULL,
  `66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cv_subject`
--

CREATE TABLE `cv_subject` (
  `s_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_feed`
--

CREATE TABLE `c_feed` (
  `u_id` int(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(100) NOT NULL,
  `year` varchar(100) NOT NULL,
  `44` int(10) NOT NULL,
  `45` int(10) NOT NULL,
  `46` int(10) NOT NULL,
  `47` int(10) NOT NULL,
  `48` int(10) NOT NULL,
  `49` int(10) NOT NULL,
  `50` int(10) NOT NULL,
  `51` int(10) NOT NULL,
  `52` int(10) NOT NULL,
  `53` int(10) NOT NULL,
  `54` int(10) NOT NULL,
  `55` int(10) NOT NULL,
  `56` int(10) NOT NULL,
  `57` int(10) NOT NULL,
  `58` int(10) NOT NULL,
  `59` int(10) NOT NULL,
  `60` int(10) NOT NULL,
  `61` int(10) NOT NULL,
  `62` int(10) NOT NULL,
  `63` int(10) NOT NULL,
  `64` int(10) NOT NULL,
  `65` int(10) NOT NULL,
  `66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `c_subject`
--

CREATE TABLE `c_subject` (
  `s_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ec_feed`
--

CREATE TABLE `ec_feed` (
  `u_id` int(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL,
  `44` int(10) NOT NULL,
  `45` int(10) NOT NULL,
  `46` int(10) NOT NULL,
  `47` int(10) NOT NULL,
  `48` int(10) NOT NULL,
  `49` int(10) NOT NULL,
  `50` int(10) NOT NULL,
  `51` int(10) NOT NULL,
  `52` int(10) NOT NULL,
  `53` int(10) NOT NULL,
  `54` int(10) NOT NULL,
  `55` int(10) NOT NULL,
  `56` int(10) NOT NULL,
  `57` int(10) NOT NULL,
  `58` int(10) NOT NULL,
  `59` int(10) NOT NULL,
  `60` int(10) NOT NULL,
  `61` int(10) NOT NULL,
  `62` int(10) NOT NULL,
  `63` int(10) NOT NULL,
  `64` int(10) NOT NULL,
  `65` int(10) NOT NULL,
  `66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ec_subject`
--

CREATE TABLE `ec_subject` (
  `s_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ee_feed`
--

CREATE TABLE `ee_feed` (
  `u_id` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL,
  `44` int(10) NOT NULL,
  `45` int(10) NOT NULL,
  `46` int(10) NOT NULL,
  `47` int(10) NOT NULL,
  `48` int(10) NOT NULL,
  `49` int(10) NOT NULL,
  `50` int(10) NOT NULL,
  `51` int(10) NOT NULL,
  `52` int(10) NOT NULL,
  `53` int(10) NOT NULL,
  `54` int(10) NOT NULL,
  `55` int(10) NOT NULL,
  `56` int(10) NOT NULL,
  `57` int(10) NOT NULL,
  `58` int(10) NOT NULL,
  `59` int(10) NOT NULL,
  `60` int(10) NOT NULL,
  `61` int(10) NOT NULL,
  `62` int(10) NOT NULL,
  `63` int(10) NOT NULL,
  `64` int(10) NOT NULL,
  `65` int(10) NOT NULL,
  `66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ee_subject`
--

CREATE TABLE `ee_subject` (
  `s_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `if_feed`
--

CREATE TABLE `if_feed` (
  `u_id` int(4) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `year` varchar(10) NOT NULL,
  `42` int(1) NOT NULL,
  `43` int(1) NOT NULL,
  `44` int(1) NOT NULL,
  `45` int(1) NOT NULL,
  `50` int(1) NOT NULL,
  `57` int(1) NOT NULL,
  `58` int(1) NOT NULL,
  `59` int(1) NOT NULL,
  `60` int(1) NOT NULL,
  `61` int(1) NOT NULL,
  `62` int(1) NOT NULL,
  `63` int(1) NOT NULL,
  `64` int(1) NOT NULL,
  `65` int(1) NOT NULL,
  `66` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `if_feed1`
--

CREATE TABLE `if_feed1` (
  `u_id` int(4) NOT NULL,
  `subject` varchar(20) NOT NULL,
  `message` varchar(5000) DEFAULT NULL,
  `year` varchar(10) NOT NULL,
  `42` int(1) NOT NULL,
  `43` int(1) NOT NULL,
  `44` int(1) NOT NULL,
  `45` int(1) NOT NULL,
  `50` int(1) NOT NULL,
  `57` int(1) NOT NULL,
  `58` int(1) NOT NULL,
  `59` int(1) NOT NULL,
  `60` int(1) NOT NULL,
  `61` int(1) NOT NULL,
  `62` int(1) NOT NULL,
  `63` int(1) NOT NULL,
  `64` int(1) NOT NULL,
  `65` int(1) NOT NULL,
  `66` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `if_subject`
--

CREATE TABLE `if_subject` (
  `s_id` int(4) NOT NULL,
  `name` varchar(25) NOT NULL,
  `year` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `if_subject`
--

INSERT INTO `if_subject` (`s_id`, `name`, `year`) VALUES
(2, 'Basic Chem', 'FY'),
(3, 'Basic Phy', 'FY'),
(4, 'Math2', 'SY'),
(5, 'DSU', 'SY'),
(6, 'RDBMS', 'SY'),
(7, 'AJP', 'TY'),
(8, 'DCN', 'TY'),
(9, 'OOMD', 'TY'),
(10, 'EDE', 'TY'),
(11, 'MC-521', 'FY'),
(12, 'MC-521', 'FY'),
(13, 'CS-521', 'FY'),
(14, '678888', 'FY'),
(15, 'ME-421', 'FY');

-- --------------------------------------------------------

--
-- Table structure for table `me_feed`
--

CREATE TABLE `me_feed` (
  `u_id` int(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(100) DEFAULT NULL,
  `year` varchar(1000) NOT NULL,
  `44` int(10) NOT NULL,
  `45` int(10) NOT NULL,
  `46` int(10) NOT NULL,
  `47` int(10) NOT NULL,
  `48` int(10) NOT NULL,
  `49` int(10) NOT NULL,
  `50` int(10) NOT NULL,
  `51` int(10) NOT NULL,
  `52` int(10) NOT NULL,
  `53` int(10) NOT NULL,
  `54` int(10) NOT NULL,
  `55` int(10) NOT NULL,
  `56` int(10) NOT NULL,
  `57` int(10) NOT NULL,
  `58` int(10) NOT NULL,
  `59` int(10) NOT NULL,
  `60` int(10) NOT NULL,
  `61` int(10) NOT NULL,
  `62` int(10) NOT NULL,
  `63` int(10) NOT NULL,
  `64` int(10) NOT NULL,
  `65` int(10) NOT NULL,
  `66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `me_subject`
--

CREATE TABLE `me_subject` (
  `s_id` int(100) NOT NULL,
  `name` varchar(1000) NOT NULL,
  `year` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `me_subject`
--

INSERT INTO `me_subject` (`s_id`, `name`, `year`) VALUES
(1, 'ghhh', 'FY');

-- --------------------------------------------------------

--
-- Table structure for table `mh_feed`
--

CREATE TABLE `mh_feed` (
  `u_id` int(100) NOT NULL,
  `subject` varchar(1000) NOT NULL,
  `message` varchar(1000) DEFAULT NULL,
  `year` varchar(100) NOT NULL,
  `44` int(10) NOT NULL,
  `45` int(10) NOT NULL,
  `46` int(10) NOT NULL,
  `47` int(10) NOT NULL,
  `48` int(10) NOT NULL,
  `49` int(10) NOT NULL,
  `50` int(10) NOT NULL,
  `51` int(10) NOT NULL,
  `52` int(10) NOT NULL,
  `53` int(10) NOT NULL,
  `54` int(10) NOT NULL,
  `55` int(10) NOT NULL,
  `56` int(10) NOT NULL,
  `57` int(10) NOT NULL,
  `58` int(10) NOT NULL,
  `59` int(10) NOT NULL,
  `60` int(10) NOT NULL,
  `61` int(10) NOT NULL,
  `62` int(10) NOT NULL,
  `63` int(10) NOT NULL,
  `64` int(10) NOT NULL,
  `65` int(10) NOT NULL,
  `66` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mh_subject`
--

CREATE TABLE `mh_subject` (
  `s_id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `year` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mh_subject`
--

INSERT INTO `mh_subject` (`s_id`, `name`, `year`) VALUES
(1, 'MC-411', 'FY');

-- --------------------------------------------------------

--
-- Table structure for table `previous_feed`
--

CREATE TABLE `previous_feed` (
  `t_id` int(11) NOT NULL,
  `f_date` text NOT NULL,
  `branch` varchar(32) NOT NULL,
  `table_name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ques`
--

CREATE TABLE `ques` (
  `q_id` int(2) NOT NULL,
  `question` varchar(900) NOT NULL,
  `q_batch` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ques`
--

INSERT INTO `ques` (`q_id`, `question`, `q_batch`) VALUES
(39, 'hello', 1),
(40, 'Comes on time', 1);

-- --------------------------------------------------------

--
-- Table structure for table `q_type`
--

CREATE TABLE `q_type` (
  `q_type` varchar(1000) NOT NULL,
  `q_batch` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `q_type`
--

INSERT INTO `q_type` (`q_type`, `q_batch`) VALUES
('Planning and organisation', 1),
('Presentation/Communication', 2),
('Student Participation', 3),
('Class Management/Assessment of students', 4);

-- --------------------------------------------------------

--
-- Table structure for table `score`
--

CREATE TABLE `score` (
  `player_id` int(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `score`
--

INSERT INTO `score` (`player_id`, `score`) VALUES
(1, 10),
(2, 20),
(3, 15),
(4, 40),
(5, 60),
(6, 25),
(7, 5);

-- --------------------------------------------------------

--
-- Table structure for table `time_table`
--

CREATE TABLE `time_table` (
  `t_id` int(100) NOT NULL,
  `A1` varchar(200) NOT NULL,
  `A2` varchar(110) NOT NULL,
  `B1` varchar(250) NOT NULL,
  `B2` varchar(110) NOT NULL,
  `C1` varchar(100) NOT NULL,
  `C2` varchar(100) NOT NULL,
  `D1` varchar(110) NOT NULL,
  `D2` varchar(100) NOT NULL,
  `batch` varchar(100) NOT NULL,
  `sub_code` varchar(110) NOT NULL,
  `sub_name` varchar(100) NOT NULL,
  `L` int(100) NOT NULL,
  `T` int(100) NOT NULL,
  `P` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `time_table`
--

INSERT INTO `time_table` (`t_id`, `A1`, `A2`, `B1`, `B2`, `C1`, `C2`, `D1`, `D2`, `batch`, `sub_code`, `sub_name`, `L`, `T`, `P`) VALUES
(1, 'AD-2', '', 'AD-2', '', 'RS-10', '', 'RS-10', '', 'GCS-14', 'CS-621 (A-D)', 'ELECTIVE-I', 0, 0, 0),
(2, 'RG', '', 'RG', '', ' PKB', '', ' PKB', '', 'GCS-14', 'CS-622', 'AUTOMATA AND FORMAL LANGUAGES', 0, 0, 0),
(3, 'AD-6', '', 'AD-6', '', 'MMS', '', 'MMS', '', 'GCS-14', 'CS-623', 'COMPUTER GRAPHICS AND MULTIMEDIA', 0, 0, 0),
(4, 'AD-6', '', 'AD-6', '', 'MMS', '', 'MMS', '', 'GCS-14', 'CS-623', 'COMPUTER GRAPHICS AND MULTIMEDIA LAB', 0, 0, 1),
(5, 'AD-5 ', '', 'AD-5', '', 'AD-7', '', 'AD-7', '', 'GCS-14', 'CS-624', 'SOFTWARE RELIABILITY AND TESTING', 0, 0, 0),
(6, 'AD-5 ', '', 'AD-5', '', 'AD-7', '', 'AD-7', '', 'GCS-14', 'CS-624', 'SOFTWARE RELIABILITY AND TESTING LAB', 0, 0, 1),
(7, 'AD-1', '', 'AD-1', '', 'AD-1', '', 'AD-1', '', 'GCS-14', 'CS-625', 'SIMULATION AND MODELING', 0, 0, 0),
(8, 'RS-2', '', 'RS-2', '', 'RS-2', '', 'RS-2', '', 'GCS-14', 'CS-626', 'NETWORK PROGRAMMING', 0, 0, 0),
(9, 'RS-2', '', 'RS-4', '', 'RS-1', '', 'RS-1', '', 'GCS-14', 'CS-626', 'NETWORK PROGRAMMING LAB', 0, 0, 1),
(10, 'MKS', '', 'MKS ', 'PKB ', 'MJS', '', 'MJS', '', 'GCS-14', 'CS-627', 'EMERGING TECHNOLOGIES LAB', 0, 0, 1),
(11, 'JS', '', 'JS', '', ' CSY', '', ' CSY', '', 'GCS-15', 'CS-521', 'WEB TECHNOLOGIES', 0, 0, 0),
(12, 'JS', '', 'JS ', 'CSY ', 'CSY', '', 'CSY', '', 'GCS-15', 'CS-521', 'WEB TECHNOLOGIES LAB', 0, 0, 1),
(13, 'MJS', '', 'MJS', '', 'AD-10', '', 'AD-10', '', 'GCS-15', 'CS-522', 'COMPUTER ORGANIZATION', 0, 0, 0),
(14, 'GK', '', 'GK', '', 'GK', '', 'GK', '', 'GCS-15', 'CS-523', 'DATA COMMUNICATION AND COMPUTER NETWORKS', 0, 0, 0),
(15, 'GK', '', 'GK', '', 'GK', '', 'GK', '', 'GCS-15', 'CS-523', 'DATA COMMUNICATION AND COMPUTER NETWORKS LAB', 0, 0, 1),
(16, 'AD-8', '', 'AD-8', '', 'AD-13', '', 'AD-13', '', 'GCS-15', 'CS-524', 'SYSTEM SOFTWARE', 0, 0, 0),
(17, 'AD-8', '', 'AD-8', '', 'AD-13', '', 'AD-13', '', 'GCS-15', 'CS-524', 'SYSTEM SOFTWARE LAB', 0, 0, 1),
(18, 'YK', '', 'YK', '', '0', '', '0', '', 'GCS-16', 'AMT-421', 'Engineering Mathematics', 0, 0, 0),
(19, 'MK', '', 'MK', '', '0', '', '0', '', 'GCS-16', 'HUT-421', 'English Communication & Soft Skills', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `u_id` int(4) NOT NULL,
  `chk` int(1) NOT NULL,
  `user` varchar(80) NOT NULL,
  `pass` varchar(80) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `batch` varchar(8) NOT NULL,
  `post` varchar(10) NOT NULL,
  `year` varchar(10) NOT NULL,
  `name` char(255) NOT NULL,
  `u_group` char(1) NOT NULL,
  `email` varchar(1000) NOT NULL,
  `sp_post` varchar(1000) NOT NULL,
  `flag` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `chk`, `user`, `pass`, `branch`, `batch`, `post`, `year`, `name`, `u_group`, `email`, `sp_post`, `flag`) VALUES
(1, 0, 'admin', '202cb962ac59075b964b07152d234b70', '', '', 'admin', '', '', '', '', 'admin', 1),
(2, 0, 'cmhod', '695513d5c4a69e83cfcc0cda7255b374', '', '', 'cmhod', '', '', '', '', 'cmhod', 0),
(3, 0, 'ifhod', 'eb568688256110f7fdbef8b9d079e58b', '', '', 'ifhod', '', '', '', '', '', 0),
(21, 0, '17', '70efdf2ec9b086079795c442636b55fb', 'IF', '', 'student', 'FY', '', '', '', '', 0),
(25, 0, '21', '3c59dc048e8850243be8079a5c74d079', 'IF', '', 'student', 'SY', '', '', '', '', 0),
(638, 0, 'csehod', '271226cb355bdda491d38bfaf40f675d', '0', '', 'HOD', '0', '', '', '', '', 0),
(645, 0, '780000', '9c3b257ab4ad1fdfd892a35ff9ce3bd5', 'ME', '', 'student', 'FY', '', '', '', '', 0),
(646, 0, '4566666', 'fc3f694c2f797e4ea65364aa67557632', 'ME', '', 'student', 'FY', '', '', '', '', 0),
(649, 0, '890000000', 'ec3ae13487534ca2535166c8b3bbf7ed', 'ME', '', 'student', 'FY', '', '', '', '', 0),
(650, 0, 'yu', '385d04e7683a033fcc6c6654529eb7e9', 'ME', '', 'student', 'FY', '', '', '', '', 0),
(657, 0, 'yuuuu78', '2916927abe523ba0692792a3e2302ed0', 'C', '', 'student', 'FY', '', '', '', '', 0),
(659, 0, '6790jk', 'ffebaff904c716810abab4921767c4a3', 'EC', '', 'student', 'FY', '', '', '', '', 0),
(2078, 0, 'gcs1540030', '4db1bfa5db86a924458677ec6d8f9124', 'CM', '', 'student', 'FY', '', '', '', '', 0),
(2081, 0, '1', 'c4ca4238a0b923820dcc509a6f75849b', 'CV', '', 'student', 'FY', '', '', '', '', 0),
(2083, 0, 'MKS', 'e2d098592e4a66f66e10931ac24d693d', 'CM', '', 'teacher', '', 'DR. MANOJ KUMAR SACHAN', '', '', 'subadmin', 0),
(2084, 0, 'BMS', 'f487fd6b97316473d34ebd8495c805d7', 'CM', '', 'teacher', '', 'MR. BIRMOHAN SINGH', '', '', '', 0),
(2085, 0, 'DPS', '809402c7728dd6255af87ec079b2c599', 'CM', '', 'teacher', '', 'MR. DAMANPREET SINGH', '', '', '', 0),
(2086, 0, 'MJS', '566c3096ce6295c3cc9129567319c51e', 'CM', '', 'teacher', '', 'DR. MAJOR SINGH GORAYA', '', '', 'cmhod', 0),
(2088, 0, 'GK', '7555b4f0c30ff860f6d579c79e3fa8e1', 'CM', '', 'teacher', '', 'MRS. GURJINDER KAUR', '', '', '', 0),
(2089, 0, 'MMS', '0692f35ea0022e41dc0c23ee3b12ab9f', 'CM', '', 'teacher', '', 'MR. MANMINDER SINGH', '', '', '', 0),
(2090, 0, 'JS', '5bc06f5800d415cc95e1349edbaca425', 'CM', '', 'teacher', '', 'MR. JASPAL SINGH', '', '', '', 0),
(2091, 0, 'VKV', '3d971c6966a01be43a67bba3f48ad824', 'CM', '', 'teacher', '', 'MR. VINOD KUMAR VERMA', '', '', '', 0),
(2092, 0, 'PKB', '6ea7a7b886d62e3313ec829f3eae974a', 'CM', '', 'teacher', '', 'MRS. PREETPAL KAUR BUTTAR', '', '', '', 0),
(2093, 0, 'RG', 'bac953e88f6d79514b0b6fc42eb6f3b7', 'CM', '', 'teacher', '', 'MR. RAHUL GAUTAM', '', '', '', 0),
(2094, 0, 'CSY', 'efc6c4786e843df8d7a16efe26202fd1', 'CM', '', 'teacher', '', 'MR. CHANDRA SHEKHAR YADAV', '', '', '', 0),
(2095, 0, 'AD-2', '53f3b6b6351141395ef0544f1194712e', 'CM', '', 'teacher', '', 'MR. JATINDER PAL SINGH', '', '', '', 0),
(2096, 0, 'AD-3', 'fafeb02cd39c005c03532d73c622142b', 'CM', '', 'teacher', '', 'MR. HARMANDEEP SINGH', '', '', '', 0),
(2097, 0, 'AD-4', '8a59ad61a3f4b61b599b64aa4764db18', 'CM', '', 'teacher', '', 'MS. JASWINDER KAUR', '', '', '', 0),
(2098, 0, 'AD-5', '2ee046512533bea4f1852bf16ea551fb', 'CM', '', 'teacher', '', 'MS. RAMANPREET KAUR', '', '', '', 0),
(2099, 0, 'AD-6', '15f5b2240a47c980e0fc89a471273a17', 'CM', '', 'teacher', '', 'MR. SUKHPREET SINGH', '', '', '', 0),
(2100, 0, 'AD-7', 'c3f0d76e58d8f786b4898d1df8cc962c', 'CM', '', 'teacher', '', 'MS. JASPREET KAUR', '', '', '', 0),
(2101, 0, 'AD-8', '34c662b661be96ae1bb535379b614df0', 'CM', '', 'teacher', '', 'MS. JASMEEN', '', '', '', 0),
(2102, 0, 'AD-9', '5bbcac9c496e006467e32edaf466a946', 'CM', '', 'teacher', '', 'MS. RAVINDER KAUR', '', '', '', 0),
(2103, 0, 'AD-10', '1bda879a49638a82504a0e08dc90fd25', 'CM', '', 'teacher', '', 'MR. NAVNEET GARG', '', '', '', 0),
(2104, 0, 'AD-13', '26efabde36c0753d981c904ab62c49c9', 'CM', '', 'teacher', '', 'MS.  ASHU SINGLA', '', '', '', 0),
(2105, 1, 'gcs1540003', '099b3b060154898840f0ebdfb46ec78f', 'CM', 'GCS-15', 'student', 'SY', '', 'A', 'verma.ujjwal1@gmail.com', '', 0),
(2106, 0, 'gcs1540087', '7694f4a66316e53c8cdd9d9954bd611d', 'CM', 'GCS-15', 'student', 'SY', '', 'B', 'v@g.com', '', 0),
(2107, 0, 'gcs1540008', '7694f4a66316e53c8cdd9d9954bd611d', 'CM', 'GCS-15', 'student', 'SY', '', 'A', 'narendersingh@gmail.com', '', 0),
(2108, 0, 'gcs1540000', '7694f4a66316e53c8cdd9d9954bd611d', 'CM', 'GCS-15', 'student', 'SY', '', 'C', 'a@b.com', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cm_subject`
--
ALTER TABLE `cm_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `cv_subject`
--
ALTER TABLE `cv_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `c_subject`
--
ALTER TABLE `c_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `ec_subject`
--
ALTER TABLE `ec_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `ee_subject`
--
ALTER TABLE `ee_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `if_subject`
--
ALTER TABLE `if_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `me_subject`
--
ALTER TABLE `me_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `mh_subject`
--
ALTER TABLE `mh_subject`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `previous_feed`
--
ALTER TABLE `previous_feed`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `ques`
--
ALTER TABLE `ques`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `q_type`
--
ALTER TABLE `q_type`
  ADD PRIMARY KEY (`q_batch`);

--
-- Indexes for table `time_table`
--
ALTER TABLE `time_table`
  ADD PRIMARY KEY (`t_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`u_id`),
  ADD UNIQUE KEY `user` (`user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cm_subject`
--
ALTER TABLE `cm_subject`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `cv_subject`
--
ALTER TABLE `cv_subject`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `c_subject`
--
ALTER TABLE `c_subject`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ec_subject`
--
ALTER TABLE `ec_subject`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ee_subject`
--
ALTER TABLE `ee_subject`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `if_subject`
--
ALTER TABLE `if_subject`
  MODIFY `s_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `me_subject`
--
ALTER TABLE `me_subject`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `mh_subject`
--
ALTER TABLE `mh_subject`
  MODIFY `s_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `previous_feed`
--
ALTER TABLE `previous_feed`
  MODIFY `t_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ques`
--
ALTER TABLE `ques`
  MODIFY `q_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `q_type`
--
ALTER TABLE `q_type`
  MODIFY `q_batch` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `time_table`
--
ALTER TABLE `time_table`
  MODIFY `t_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `u_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2109;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
