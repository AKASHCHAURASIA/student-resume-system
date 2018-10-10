-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 11, 2018 at 06:53 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `student`
--

-- --------------------------------------------------------

--
-- Table structure for table `achievements`
--

CREATE TABLE IF NOT EXISTS `achievements` (
  `u_id` int(10) NOT NULL,
  `achievement` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `achievements`
--

INSERT INTO `achievements` (`u_id`, `achievement`) VALUES
(2777, 'Awarded By Director Sliet For Software Development '),
(2898, '1st prize in Badminton'),
(2777, 'Acquire 54th Rank in National Level Capture the Flag Event Organize by Defence Research and Development Organisation ');

-- --------------------------------------------------------

--
-- Table structure for table `cocurriculars`
--

CREATE TABLE IF NOT EXISTS `cocurriculars` (
  `u_id` int(10) NOT NULL,
  `cocurricular` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cocurriculars`
--

INSERT INTO `cocurriculars` (`u_id`, `cocurricular`) VALUES
(2898, 'Cricket'),
(2777, 'Co-ordinator at SLIET CYBER CELL'),
(2777, 'Convener at  SLIET COMPUTER SOCIETY '),
(2777, 'Aao Karke sikhen Theme Developer for college student so that junior should learn from senior');

-- --------------------------------------------------------

--
-- Table structure for table `educations qualification`
--

CREATE TABLE IF NOT EXISTS `educations qualification` (
  `u_id` int(10) NOT NULL,
  `Degree` varchar(255) NOT NULL,
  `Institute/Uni` varchar(255) NOT NULL,
  `Marks` varchar(10) NOT NULL,
  `%/CGPA` varchar(255) NOT NULL,
  `Year` varchar(255) NOT NULL,
  `Specialization` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educations qualification`
--

INSERT INTO `educations qualification` (`u_id`, `Degree`, `Institute/Uni`, `Marks`, `%/CGPA`, `Year`, `Specialization`) VALUES
(2898, 'BE', 'Sant Longowal Institute of Engineering and Technology', '433', '10', 'gcs2019', 'Computer Science and Engineering'),
(2777, 'Higher Secondary', 'Santana Dharma Inter College,Varanasi', '', '87.8%', '2014', 'PCM'),
(2777, 'Matriculation', 'Santana Dharma Inter College,Varanasi', '', '83.5%', '2012', ''),
(2777, 'BE', 'SLIET', '', '8.15', '2019', 'Computer Science and Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `hobbies`
--

CREATE TABLE IF NOT EXISTS `hobbies` (
  `u_id` int(10) NOT NULL,
  `hobby` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hobbies`
--

INSERT INTO `hobbies` (`u_id`, `hobby`) VALUES
(2898, 'Reading'),
(2777, 'Reading Cyber Security Blogs'),
(2777, 'Playing badminton');

-- --------------------------------------------------------

--
-- Table structure for table `personal_data`
--

CREATE TABLE IF NOT EXISTS `personal_data` (
  `u_id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `caddress` varchar(1000) NOT NULL,
  `paddress` varchar(1000) NOT NULL,
  `nationality` varchar(30) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobileno` varchar(100) NOT NULL,
  `aadhar` varchar(100) NOT NULL,
  `languages` varchar(1000) NOT NULL,
  `interest` varchar(2000) NOT NULL,
  `objective` varchar(2000) NOT NULL,
  `photo` varchar(20) NOT NULL,
  `D_te` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal_data`
--

INSERT INTO `personal_data` (`u_id`, `name`, `fathername`, `mothername`, `dob`, `sex`, `caddress`, `paddress`, `nationality`, `email`, `mobileno`, `aadhar`, `languages`, `interest`, `objective`, `photo`, `D_te`) VALUES
(2898, 'Brajneesh Kumar', 'Qwert Asdf', 'Zxcv Adhh', '12/12/1997', 'Male', 'Room 222 hostel 0 SLIET Longowal Punjab 148106', 'Vill- S Khurd Samastipur Bihar ', 'Indian', 'kbraesh@gmail.com', '2147483647', '986993396480', 'Hindi, English, Punjabi', 'Software Development', 'I want to succeed in a stimulating and challenging environment that will provide me with advancement opportunities.', 'jpg', '09-03-18'),
(2777, 'AKASH CHAURASIA', 'ANIL CHAURASIA', 'SUDHA CHAURASIA', '21/10/1997', 'Male', 'Room-no-200,BH-0,SLIET LONGOWAL', 'D-599/28,VARANASI,UP-148106', 'INDIAN', 'akash.chauria@sliet.ac.in', '94547372', '873529538293', 'ENGLISH,HINDI', 'Cyber Security Research,Ethical Hacking', 'To be A Cyber Security Expert ', 'jpg', '11-03-18');

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `u_id` int(10) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `level` varchar(30) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`u_id`, `description`, `level`) VALUES
(2898, 'Student Database', 'Degree'),
(2898, 'Teacher Database', 'Degree'),
(2777, 'Conmplaint System ', 'Degree'),
(2777, 'Student database System', 'Degree'),
(2777, 'Student feedback System', 'Degree'),
(2777, 'Protocol Parsing', 'Degree'),
(2777, 'Teacher database System', 'Degree'),
(2777, 'Intern At ThreatLandScape-Bangalore-CyberSecurity  ', 'Degree');

-- --------------------------------------------------------

--
-- Table structure for table `references`
--

CREATE TABLE IF NOT EXISTS `references` (
  `u_id` int(10) NOT NULL,
  `reference` varchar(1000) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `references`
--

INSERT INTO `references` (`u_id`, `reference`) VALUES
(2898, 'CS Department'),
(2777, 'Sanjeev Prakash,Programmer,ACSS SLIET-Longowal'),
(2777, 'Navtej Singh Co-Founder ThreatLandScape'),
(2777, 'Damanpreet singh FI-ACSS ,SLIET,Longowal');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE IF NOT EXISTS `skills` (
  `u_id` int(10) NOT NULL,
  `skill` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`u_id`, `skill`) VALUES
(2898, 'Proficiency  in C and C++'),
(2777, 'Linux And Networking'),
(2777, 'Web Development'),
(2777, 'PHP'),
(2777, 'Python'),
(2777, 'C++ programming'),
(2777, 'C Programming'),
(2777, 'Security Research'),
(2777, 'Ethical Hacking');

-- --------------------------------------------------------

--
-- Table structure for table `training`
--

CREATE TABLE IF NOT EXISTS `training` (
  `u_id` int(10) NOT NULL,
  `level` varchar(30) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `department` varchar(255) NOT NULL,
  `organisation` varchar(255) NOT NULL,
  `duration` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `training`
--

INSERT INTO `training` (`u_id`, `level`, `description`, `department`, `organisation`, `duration`) VALUES
(2898, 'BE', 'just worked alone', 'Computer Science', 'SLIET', '2019'),
(2898, 'BE', 'lomj hbvd uhbsugr hbhgsr ihhgisr uibibhi iib iinbidv iuvuizdv iuhiuzd iudhviudhgiud ndiugnius idnuisgnis nusnuh ignsugnsui ijiushguis iuhguig iuhguishgs ihiushgusi iugsnuigs isuiush iushus iiughusi siuhsugs gisuhuisb ushugs', 'Computer Science dEPTT', 'ASDYUIKMNB', '8765'),
(2777, 'BE', 'Hacking', 'Computer  Sciene and enginereing ', 'Internshala', 'june 2017-july 2017');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `u_id` int(4) NOT NULL AUTO_INCREMENT,
  `chk` int(10) NOT NULL DEFAULT '0',
  `user` varchar(100) NOT NULL DEFAULT 'o',
  `pass` varchar(100) NOT NULL DEFAULT '3',
  `Username` varchar(100) DEFAULT NULL,
  `branch` varchar(100) DEFAULT NULL,
  `batch` varchar(8) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `post` varchar(10) DEFAULT NULL,
  `year` varchar(10) DEFAULT NULL,
  `name` char(255) DEFAULT NULL,
  `u_group` char(1) DEFAULT NULL,
  `email` varchar(1000) DEFAULT NULL,
  `sp_post` varchar(1000) DEFAULT NULL,
  `flag` int(1) DEFAULT '0',
  `Group1` varchar(20) DEFAULT NULL,
  `roomno` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5328 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`u_id`, `chk`, `user`, `pass`, `Username`, `branch`, `batch`, `course`, `post`, `year`, `name`, `u_group`, `email`, `sp_post`, `flag`, `Group1`, `roomno`, `mobileno`) VALUES
(1, 0, 'o', '3', 'Username', NULL, NULL, '', 'admin', 'TY', 'Name', NULL, NULL, 'subadmin', 1, 'Group', '', ''),
(5327, 0, 'o', '3', 'pgice14540', NULL, NULL, '', NULL, NULL, 'GAURAV SINGH', NULL, NULL, NULL, NULL, 'pg2k14', '', '');
