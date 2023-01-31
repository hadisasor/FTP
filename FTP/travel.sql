-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2023 at 03:35 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `yosr`
--

-- --------------------------------------------------------

--
-- Table structure for table `travel`
--

CREATE TABLE `travel` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `packageName` varchar(255) NOT NULL,
  `groupLeader` varchar(255) NOT NULL,
  `numberOfTraveler` int(11) NOT NULL,
  `groupNumber` int(11) NOT NULL,
  `stayingDays` int(11) NOT NULL,
  `packagePrice` int(11) NOT NULL,
  `Th_airline` varchar(255) NOT NULL,
  `Th_departmentDate` date NOT NULL,
  `S_arrivalDate` date NOT NULL,
  `S_airline` varchar(255) NOT NULL,
  `S_departmentDate` date NOT NULL,
  `Th_arrivalDate` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `travel`
--

INSERT INTO `travel` (`id`, `user_id`, `packageName`, `groupLeader`, `numberOfTraveler`, `groupNumber`, `stayingDays`, `packagePrice`, `Th_airline`, `Th_departmentDate`, `S_arrivalDate`, `S_airline`, `S_departmentDate`, `Th_arrivalDate`, `created_at`, `updated_at`) VALUES
(1, 123, '123', '123', 123, 123, 123, 123, '123', '0000-00-00', '0000-00-00', '123', '0000-00-00', '0000-00-00', '2023-01-27 04:14:24', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
