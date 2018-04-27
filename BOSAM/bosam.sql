
-- Host: 127.0.0.1
-- Generation Time: 26, April, 2018 at 07:47 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


--
-- Database: `bosam`
--
CREATE DATABASE IF NOT EXISTS `bosam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bosam`;


-- --------------------------------------------------------

--
-- Table structure for table `mstr_login`
--

CREATE TABLE IF NOT EXISTS `mstr_login` (
  `username` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `type` varchar(15) DEFAULT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mstr_login`
--

INSERT INTO `mstr_login` (`username`, `password`, `type`) VALUES
('lois', '08100000', 'user'),
('angel', '08100000', 'user');


--
-- Table structure for table `mstr_profile`
--

CREATE TABLE IF NOT EXISTS `mstr_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(45) NOT NULL,
  `middle_name` varchar(15) NULL,
  `last_name` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `Dob` varchar(45) NOT NULL,
  `address` varchar(255) NOT NULL,
  `house` varchar(45) NOT NULL,
  `contact_no` varchar(45) DEFAULT NULL,
  `emailid` varchar(255) NULL,
  `profile_photo` varchar(45) DEFAULT NULL,
  `username` varchar(45) NOT NULL,
  `set_year` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_mstr_profile_1` (`username`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `mstr_profile`
--

INSERT INTO `mstr_profile` (`id`,`first_name`, `middle_name`, `last_name`, `gender`, `Dob`, `address`,`house`, `contact_no`, `emailid`, `profile_photo`, `username`, `set_year`) VALUES
(1,'Lois', 'I', 'Thomas', 'Female', '13/05/1996', 'Behind Loremm Hotel, Keffi', 'Steven Awuku','08134546733', 'lois.idzi@gmail.com', NULL, 'lois', 2012),
(2, 'Angela', 'U', 'Ayuba', 'Female', '30/03/1994', 'ECWA No. 1 Keffi', 'KT Zamani','0819323383', 'angel@gmail.com', 'upload/2016-01-01-17-26-23-452.jpg', 'angel', 2012);

--
-- Constraints for dumped tables
--


