-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 22, 2014 at 03:15 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `sim database`
--
CREATE DATABASE IF NOT EXISTS `sim database` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sim database`;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `Firstname` varchar(20) NOT NULL,
  `Midname` varchar(20) NOT NULL,
  `Lastname` varchar(20) NOT NULL,
  `Fathername` varchar(25) NOT NULL,
  `Mothername` varchar(25) NOT NULL,
  `rollno` varchar(25) NOT NULL,
  `Username` varchar(25) NOT NULL,
  `Password` varchar(25) NOT NULL,
  `bmonth` int(2) NOT NULL,
  `bdate` int(2) NOT NULL,
  `byear` varchar(4) NOT NULL,
  `Gender` varchar(8) NOT NULL,
  `studentno` varchar(11) NOT NULL,
  `guardianno` varchar(11) NOT NULL,
  `category` varchar(10) NOT NULL,
  `Email` varchar(25) NOT NULL,
  `Current Address` varchar(50) NOT NULL,
  `permanentaddress` varchar(50) NOT NULL,
  `10thperc` int(4) NOT NULL,
  `Highschoolname` varchar(30) NOT NULL,
  `12thperc` int(4) NOT NULL,
  `Highersecandryschoolname` varchar(30) NOT NULL,
  `Course` varchar(10) NOT NULL,
  `Semester` int(2) NOT NULL,
  `Section` varchar(1) NOT NULL,
  `Achievements` varchar(200) NOT NULL,
  `CareerObjective` varchar(200) NOT NULL,
  `ToDo` varchar(100) NOT NULL,
  `DreamCompany` varchar(100) NOT NULL,
  `BloodGroup` varchar(2) NOT NULL,
  PRIMARY KEY (`Username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`Firstname`, `Midname`, `Lastname`, `Fathername`, `Mothername`, `rollno`, `Username`, `Password`, `bmonth`, `bdate`, `byear`, `Gender`, `studentno`, `guardianno`, `category`, `Email`, `Current Address`, `permanentaddress`, `10thperc`, `Highschoolname`, `12thperc`, `Highersecandryschoolname`, `Course`, `Semester`, `Section`, `Achievements`, `CareerObjective`, `ToDo`, `DreamCompany`, `BloodGroup`) VALUES
('', '', '', '', '', '', '', '', 0, 0, '', 'Male', '', '', '', '', '', '', 0, '', 0, '', 'M.Tech', 0, '', '', '', '', '', ''),
('Abhishek', 'Kumar', 'Sharma', 'Santosh Sharma  ', ' Uma Sharma ', 'IT-2K11-01', 'abhi', 'abhi', 0, 15, '1993', ' Male', ' 8871507061', '7415268123', 'general', ' abhishek15iips@gmail.com', '45, JCB boys hostel, kahndwa road DAVV', ' 45, JCB boys hostel, kahndwa road DAVV  ', 68, 'Vidya bhavan public school', 63, 'Vidya bhavan public school', ' M.Tech(I.', 6, 'A', 'nothing', 'IAS ofiicer', 'nothing', 'Google', 'o-'),
('Sourabh', 'jsakdjfd', 'qjk', 'jk', 'j', 'jk', 'asd', 'asd', 0, 1, '1958', 'Male', '7878787878', '8998989898', 'poi', 'aksjajdshjhasjdasd@gmail.', 'sdfsdfsdfdsf', 'sdfsdfsdfdsf', 0, '', 0, '', 'M.Tech', 1, '', '', '', '', '', ''),
('ayaz', '', 'khan', 'salman  ', ' nur ', 'IT-2k11-08', 'ayaz', 'xxx', 0, 1, '1992', 'Male', ' 7415205503', '', '', ' Ayaz@gmail.com ', 'indore', ' indore ', 99, 'yy', 98, 'jj', ' M.Tech ', 6, 'A', 'aS', 'd', 'f', 'f', 'a'),
('asd', '', 'skdf', 'asdfj        ', '    akdsf    ', 'IT-2k11-45', 'deven', 'deven', 0, 1, '1950', '    Male', '    6594416', '6561354654', 'obc', '    d@gmail.com    ', 'dkfa', '    dkfa    ', 0, '', 0, '', '    M.Tech', 1, '', '', '', '', '', ''),
('Devendra', '', 'Malviya', 'Mohan          ', 'Lakshami', 'IT-2K11-10', 'devu', 'devu', 11, 9, '1992', ' Male', '9770126777', '', 'OBC', 'devendra.iips@gmail  ', '', ' jcb boys hostel indore     ', 0, '', 0, '', ' M.Tech ', 1, 'A', '', '', '', '', ''),
('ad', 'ads', 'adf', 'asdlfqasdq  ', ' alds ', 'IT-2k11-48', 'hari', 'hair', 0, 1, '1950', ' Male', ' 55455', '665465464', 'st', ' de@gmail.com ', 'adlsflds', ' adlsflds ', 0, '', 0, '', ' M.Tech ', 1, '', '', '', '', '', ''),
('harman', 'jeetsingh', 'waliya', 'happysingh  ', ' geet ', 'IT-2k11-11', 'harman', 'harman', 1, 1, '1993', ' Male', ' 9875478654', '9856471254', 'general', ' harman@gmail.com ', 'RNT boys hostel', ' RNT boys hostel  ', 0, '', 0, '', ' M.Tech ', 1, 'A', '', '', '', '', ''),
('gjf', '', 'gh', 'dg  ', ' df ', 'IT-2k11-21', 'hi', 'hi', 0, 1, '1950', ' Male', '9770126777', '', 'OBC', ' de@gmail.com ', 'jaldjglasg', ' jaldjglasg ', 0, '', 0, '', ' M.Tech ', 1, '', '', '', '', '', ''),
('mayank', '', 'upasak', 'prakash  ', ' mina ', 'IT-2k11-18', 'mayank', 'mayank', 4, 3, '1993', ' Male', ' 9854621887', '9871154123', 'general', ' mayank@gmail.com ', 'palasia indore', ' palasia indore ', 0, '', 0, '', ' M.Tech ', 1, '', '', '', '', '', ''),
('anurag', '', 'patidar', 'mahesh  ', ' lata ', 'IT-2k11-07', 'neta', 'neta', 0, 1, '1992', ' Male', ' 8288239741', '9172395817', 'OBC', ' neta@gmail.com ', 'indrapuri indore', ' indrapuri indore ', 78, 'shree kanwartara dhamnod', 98, 'shree kanwartara dhamnod', ' M.Tech ', 6, '', 'not yet', 'programmer', 'in aire', 'google', 'a+'),
('asd', '', 'skdf', 'asdfj        ', '    akdsf    ', 'IT-2k11-45', 'oye', 'oye', 0, 1, '1950', '    Male', '    6594416', '1974385749', 'obc', '    d@gmail.com    ', 'dhar', '    dkfa    ', 0, '', 0, '', '    M.Tech', 1, '', '', '', '', '', ''),
('saurabh', '', 'pandey', 'scpandey', 'madhu', 'IT 2K11-35', 'pandey', 'pandey', 0, 16, '1993', 'Male', '9999955555', '9988774455', 'general', 'pandey16@gmail.com', 'shukhliya indore', 'shukliya indore', 71, 'kv indore', 72, 'kv indore', 'M.Tech', 6, 'A', 'not yet', 'programmer', 'in air', 'google', 'a'),
('s', 'h', 'k', 'af  ', ' dk ', 'IT-2k11-32', 'raj', 'raj', 0, 1, '1996', ' Male', ' 9854621887', '9876543210', 'st', ' devmalviyabarwani@gmail.', 'indore', ' indore ', 0, '', 0, '', ' M.Tech ', 1, '', 'rf6g', 'gd', '', '', ''),
('rajat', '', 'jain', 'ajay  ', ' rupali ', 'IT-2K11-06', 'rajat', 'rajat', 8, 12, '1992', 'Male', ' 977012677', '', 'general', ' rajat@gmail.com ', '', ' Dewas ', 0, '', 0, '', ' Mca ', 1, 'A', 'adfs', 'hdfll', 'hfl', 'fdhl', ''),
('ram', '', 'sen', 'rr  ', ' dd ', 'IT-2k11-40', 'ram', 'ram', 0, 1, '2011', ' Male', ' 9854621887', '9871154123', 'obc', 'devendra.iips@gmail.com', '', '  ', 0, '', 0, '', ' M.Tech ', 1, '', '', '', '', '', ''),
('rohit', '', 'mukati', 'aakash    ', '  anubhuti  ', 'IT-2k11-55', 'rohit', 'rohit', 0, 1, '1994', '  Male', '  887150706', '6565332326', 'OBC', '  rohit@gmail.com  ', 'barwani', '  barwani  ', 0, '', 0, '', '  M.Tech  ', 1, '', '', '', '', '', ''),
('roshan', '', 'tanwar', 'narayan  ', ' radha ', 'IT-2k11-29', 'roshan', 'roshan', 0, 1, '1992', 'Male', ' 9826917245', '9826917254', '  general', ' roshan@gmail.com ', 'indrapuri indore', ' indrapuri indore ', 78, 'shree kanwartara dhamnod', 79, 'shree kanwartara dhamnod', ' M.Tech ', 6, 'A', 'not yet', 'gain more n more knowledge', 'none', 'google', 'A'),
('sorabh', '', 'jain', 'rohan  ', ' mira ', 'IT-2k11-36', 'sourabh', 'sourabh', 6, 1, '1993', '   Male', '  975684612', '9875469854', 'general', '  sourabh@gmail.com  ', 'dewas', ' dewas ', 90, 'kv2 indore', 92, 'kv2 indore', '   M.Tech ', 6, 'A', 'not yet', '', '', '', 'a+'),
('Surbhi', '', 'rathore', 'Santosh  ', ' Indira ', 'IT-2k11-39', 'surbhi', 'surbhi', 4, 20, '1993', ' Female', ' 7415314917', '8871507061', '', ' surbhi18rathore@gmail.co', '301,Gokuldham ranibagh,Main indore', ' 301,Gokuldham ranibagh,Main indore ', 85, 'vidya bahvan public school', 85, 'Vidya bhavan public school', ' M.Tech ', 6, '', 'no', 'no', 'no', 'no', 'O+');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
