-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 10, 2022 at 06:57 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `company`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `employee_id` int(11) NOT NULL,
  `first_name` varchar(32) DEFAULT NULL,
  `last_name` varchar(32) DEFAULT NULL,
  `department_id` int(11) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `commission_pct` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`employee_id`, `first_name`, `last_name`, `department_id`, `salary`, `commission_pct`) VALUES
(10, 'Ahmed', 'Faruq', 101, 2300, 0.25),
(20, 'Sam', 'Smith', 102, 4200, 0.3),
(30, 'Lio', 'King', 103, 1200, NULL),
(40, 'Jesica', 'Alba', 101, 2670, NULL),
(50, 'Frya', 'John', 103, 1700, 0.45),
(60, 'Jack', 'Black', 102, 3400, NULL),
(70, 'Emily', 'smith', 104, 1530, NULL),
(80, 'George', 'Austin', 101, 5670, 0.45),
(90, 'Daniel', 'Lorents', 102, 4120, 0.15),
(100, 'Adam', 'Fripp', 103, 7690, 0.2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`employee_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
