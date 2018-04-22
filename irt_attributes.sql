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
-- Table structure for table `irt_attributes`
--

CREATE TABLE `irt_attributes` (
  `id` int(11) NOT NULL,
  `attribute` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `irt_attributes`
--

INSERT INTO `irt_attributes` (`id`, `attribute`) VALUES
(1, 'Long history in KSA'),
(2, 'Well known company'),
(3, 'Modern and progressive company'),
(4, 'The best choice for my company'),
(5, 'Stands out against the closest competition'),
(6, 'Good Reputation/Image'),
(7, 'Good Hospital Network/Coverage'),
(8, 'Endorsed by local government authority/department'),
(9, 'Strong Local Roots'),
(10, 'Global Expertise'),
(11, 'Flexible Coverage Schemes'),
(12, 'Good Value for money/ Value-Added Services'),
(13, 'Good Customer Service'),
(14, 'Easy Application Process'),
(15, 'Easy Pre-Authorization process'),
(16, 'Good Speed of Approvals'),
(17, 'Easy Claims Process'),
(18, 'Reasonable Pricing, Fee & Charges'),
(19, 'Variety of Payment Options & Flexible Terms'),
(20, 'Good Loyalty Programs'),
(21, 'Fast Delivery of cards once signed up'),
(22, 'Good Online platforms to interact'),
(23, 'Wide range of Products'),
(24, 'Less documentation'),
(25, 'Innovative/Modern'),
(26, 'Transparent communication'),
(27, 'Trustworthy');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `irt_attributes`
--
ALTER TABLE `irt_attributes`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
