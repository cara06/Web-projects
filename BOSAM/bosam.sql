
-- Host: 127.0.0.1
-- Generation Time: 15, August, 2018 at 07:47 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+01:00";


--
-- Database: `bosam`
--
CREATE DATABASE IF NOT EXISTS `bosam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bosam`;


--
-- Table structure for table `mstr_profile`
--

CREATE TABLE IF NOT EXISTS `mstr_profile` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `photo` varchar(225) NULL,
  `full_name` varchar(45) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `grad` int(10) NOT NULL,
  `address` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=72 ;

--
-- Dumping data for table `mstr_profile`
--

INSERT INTO `mstr_profile` (`id`,`photo`,`full_name`, `phone`, `grad`, `address`) VALUES
(1,'', 'Lois Thomas', '08131143315', 2012,'Behind Loremm Hotel, Keffi'),
(2, 'upload/2016-01-01-17-26-23-452.jpg', 'Angela Ayuba', '0819323383', 2012, 'ecwa  no.1 Keffi');

--
-- Constraints for dumped tables
--


