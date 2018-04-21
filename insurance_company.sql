-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 23, 2018 at 01:56 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `insurance_company`
--

DROP TABLE IF EXISTS `insurance_company`;
CREATE TABLE IF NOT EXISTS `insurance_company` (
  `id` varchar(2) NOT NULL,
  `insurance_e` varchar(28) DEFAULT NULL,
  `insurance_a` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `insurance_company`
--

INSERT INTO `insurance_company` (`id`, `insurance_e`, `insurance_a`) VALUES
('1', 'Bupa Arabia', 'بوبا العربية'),
('2', 'Gulf Union', 'اتحاد الخليج'),
('3', 'AXA-Cooperative', 'AXA أكسا للتأمين التعاوني'),
('4', 'Al-Ahlia', 'الأهلية'),
('5', 'AICC', 'شركة التأمين التعاونية العربية'),
('6', 'Tawuniya', 'التعاونية'),
('7', 'Gulf General', 'الخليج العام'),
('8', 'Arabian Shield', 'الدرع العربي'),
('9', 'United cooperative insurance', 'UCA المتحدة للتأمين التعاوني'),
('10', 'Al Alamiya', 'العالمية'),
('11', 'Trade Union', 'الإتحادالتجاري'),
('12', 'ACIG', 'أسيجACIG'),
('13', 'ALLIANZ SF', 'أليانزSF'),
('14', 'Amana Insurance', 'أمانة للتأمين'),
('15', 'Buruj', 'بروج'),
('16', 'Al Rajhi Takaful', 'تكافل الراجحي'),
('17', 'SAICO', 'SAICO'),
('18', 'SALAMA', 'سلامة'),
('19', 'SANAD', 'سند'),
('20', 'Solidarity', 'سوليداريتي'),
('21', 'Enaya', 'عناية'),
('22', 'Sagr Insurance', 'صقر للتأمين'),
('23', 'Malath Insurance', 'ملاذ للتأمين'),
('24', 'MEDGULF', 'ميدغلف'),
('25', 'WAFA Insurance', 'وفا للتأمين'),
('26', 'Weqaya Takaful', 'وقاية التكافل'),
('27', 'Walaa Insurance', 'ولاء للتأمين'),
('28', 'Others', 'غيرها');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
