-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2018 at 08:55 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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
-- Table structure for table `rotation_plan_irt`
--

CREATE TABLE `rotation_plan_irt` (
  `rid` int(11) NOT NULL,
  `counter` int(11) NOT NULL,
  `stid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rotation_plan_irt`
--

INSERT INTO `rotation_plan_irt` (`rid`, `counter`, `stid`) VALUES
(1, 0, 1),
(1, 0, 2),
(1, 0, 3),
(1, 0, 4),
(1, 0, 5),
(1, 0, 6),
(1, 0, 7),
(1, 0, 8),
(1, 0, 9),
(1, 0, 10),
(1, 0, 11),
(1, 0, 12),
(1, 0, 13),
(1, 0, 14),
(1, 0, 15),
(1, 0, 16),
(1, 0, 17),
(1, 0, 18),
(1, 0, 19),
(1, 0, 20),
(1, 0, 21),
(1, 0, 22),
(1, 0, 23),
(1, 0, 24),
(1, 0, 25),
(1, 0, 26),
(1, 0, 27),
(2, 0, 1),
(2, 0, 2),
(2, 0, 3),
(2, 0, 4),
(2, 0, 5),
(2, 0, 6),
(2, 0, 7),
(2, 0, 8),
(2, 0, 9),
(2, 0, 10),
(2, 0, 11),
(2, 0, 12),
(2, 0, 13),
(2, 0, 14),
(2, 0, 15),
(2, 0, 16),
(2, 0, 17),
(2, 0, 18),
(2, 0, 19),
(2, 0, 20),
(2, 0, 21),
(2, 0, 22),
(2, 0, 23),
(2, 0, 24),
(2, 0, 25),
(2, 0, 26),
(2, 0, 27),
(3, 0, 1),
(3, 0, 2),
(3, 0, 3),
(3, 0, 4),
(3, 0, 5),
(3, 0, 6),
(3, 0, 7),
(3, 0, 8),
(3, 0, 9),
(3, 0, 10),
(3, 0, 11),
(3, 0, 12),
(3, 0, 13),
(3, 0, 14),
(3, 0, 15),
(3, 0, 16),
(3, 0, 17),
(3, 0, 18),
(3, 0, 19),
(3, 0, 20),
(3, 0, 21),
(3, 0, 22),
(3, 0, 23),
(3, 0, 24),
(3, 0, 25),
(3, 0, 26),
(3, 0, 27),
(4, 0, 1),
(4, 0, 2),
(4, 0, 3),
(4, 0, 4),
(4, 0, 5),
(4, 0, 6),
(4, 0, 7),
(4, 0, 8),
(4, 0, 9),
(4, 0, 10),
(4, 0, 11),
(4, 0, 12),
(4, 0, 13),
(4, 0, 14),
(4, 0, 15),
(4, 0, 16),
(4, 0, 17),
(4, 0, 18),
(4, 0, 19),
(4, 0, 20),
(4, 0, 21),
(4, 0, 22),
(4, 0, 23),
(4, 0, 24),
(4, 0, 25),
(4, 0, 26),
(4, 0, 27);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rotation_plan_irt`
--
ALTER TABLE `rotation_plan_irt`
  ADD KEY `irt_key` (`rid`),
  ADD KEY `irt_attr` (`stid`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `rotation_plan_irt`
--
ALTER TABLE `rotation_plan_irt`
  ADD CONSTRAINT `irt_attr` FOREIGN KEY (`stid`) REFERENCES `irt_attributes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `irt_key` FOREIGN KEY (`rid`) REFERENCES `rotation_plan_primary` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
