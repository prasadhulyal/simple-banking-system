-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2020 at 04:49 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking`
--

-- --------------------------------------------------------

--
-- Table structure for table `bankingman`
--

CREATE TABLE `bankingman` (
  `id` int(255) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Accountno` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bankingman`
--

INSERT INTO `bankingman` (`id`, `Name`, `Accountno`, `amount`) VALUES
(1, 'prasad', '12345', 16976),
(2, 'prasanna', '123456', 4760),
(3, 'vasu', '1234567', 5009),
(4, 'jimmy', '12345678', 44),
(5, 'pummy', '12345678', 5647),
(6, 'sowmya', '123456789', 4870),
(7, 'vijesh', '12345678910', 5465),
(8, 'shreya', '1234512345', 4000),
(9, 'nithish', '123456567', 6777),
(10, 'dawood', '12312345', 5471);

-- --------------------------------------------------------

--
-- Table structure for table `record`
--

CREATE TABLE `record` (
  `tid` int(255) NOT NULL,
  `sender` varchar(255) NOT NULL,
  `receiver` varchar(255) NOT NULL,
  `amount` int(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record`
--

INSERT INTO `record` (`tid`, `sender`, `receiver`, `amount`, `timestamp`) VALUES
(0, 'prasad', 'prasanna', 10, '2020-11-16 05:01:33.000000'),
(0, 'prasanna', 'jimmy', 50, '2020-11-16 05:01:55.000000'),
(0, 'sowmya', 'prasad', 1000, '2020-11-16 05:04:07.000000'),
(0, 'sowmya', 'prasad', 1000, '2020-11-16 05:04:12.000000'),
(0, 'jimmy', 'pummy', 1000, '2020-11-20 06:09:41.000000'),
(0, 'jimmy', 'prasad', 4900, '2020-11-20 06:11:46.000000'),
(0, 'prasanna', 'pummy', 1, '2020-11-20 15:47:24.000000');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
