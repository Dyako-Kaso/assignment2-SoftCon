-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 07:52 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `antibacterial`
--

CREATE TABLE `antibacterial` (
  `id` int(11) NOT NULL,
  `medName` varchar(40) NOT NULL,
  `medCode` varchar(40) NOT NULL,
  `medQ` int(40) NOT NULL,
  `medDesc` varchar(40) NOT NULL,
  `medTake` varchar(40) NOT NULL,
  `medDosage` int(40) NOT NULL,
  `medPrice` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antibacterial`
--

INSERT INTO `antibacterial` (`id`, `medName`, `medCode`, `medQ`, `medDesc`, `medTake`, `medDosage`, `medPrice`) VALUES
(1, 'amoxicilin', 'ax994', 49, 'antibacterial medicine for athlete foot', 'morning', 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `antimycotic`
--

CREATE TABLE `antimycotic` (
  `id` int(11) NOT NULL,
  `medName` varchar(40) NOT NULL,
  `medCode` varchar(40) NOT NULL,
  `medQ` int(40) NOT NULL,
  `medDesc` varchar(40) NOT NULL,
  `medTake` varchar(40) NOT NULL,
  `medDosage` int(40) NOT NULL,
  `medPrice` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antimycotic`
--

INSERT INTO `antimycotic` (`id`, `medName`, `medCode`, `medQ`, `medDesc`, `medTake`, `medDosage`, `medPrice`) VALUES
(1, 'Lamisil', 'lm5544', 23, 'a cream that prevents fungi infections', 'night', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `antiviral`
--

CREATE TABLE `antiviral` (
  `id` int(11) NOT NULL,
  `medName` varchar(40) NOT NULL,
  `medCode` varchar(40) NOT NULL,
  `medQ` int(40) NOT NULL,
  `medDesc` varchar(40) NOT NULL,
  `medTake` varchar(40) NOT NULL,
  `medDosage` int(40) NOT NULL,
  `medPrice` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `antiviral`
--

INSERT INTO `antiviral` (`id`, `medName`, `medCode`, `medQ`, `medDesc`, `medTake`, `medDosage`, `medPrice`) VALUES
(1, 'calmex', 'cx344', 45, 'helps sore throat ', 'morning', 2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `cancermedicine`
--

CREATE TABLE `cancermedicine` (
  `id` int(11) NOT NULL,
  `medName` varchar(40) NOT NULL,
  `medCode` varchar(40) NOT NULL,
  `medQ` int(40) NOT NULL,
  `medDesc` varchar(40) NOT NULL,
  `medTake` varchar(40) NOT NULL,
  `medDosage` int(40) NOT NULL,
  `medPrice` int(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cancermedicine`
--

INSERT INTO `cancermedicine` (`id`, `medName`, `medCode`, `medQ`, `medDesc`, `medTake`, `medDosage`, `medPrice`) VALUES
(1, 'Abiraterone Acetate', 'aa453', 23, 'prevents cell transformation', 'morning', 4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `customerorder`
--

CREATE TABLE `customerorder` (
  `id` int(11) NOT NULL,
  `medicineName` varchar(40) NOT NULL,
  `MedicineCode` varchar(40) NOT NULL,
  `MedicineQuantity` int(40) NOT NULL,
  `priceEach` int(40) NOT NULL,
  `customerLabel` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `medicine`
--

CREATE TABLE `medicine` (
  `id` int(11) NOT NULL,
  `medName` varchar(255) NOT NULL,
  `medCode` varchar(255) NOT NULL,
  `medQ` int(11) NOT NULL,
  `medDesc` varchar(255) NOT NULL,
  `medTake` varchar(255) NOT NULL,
  `medDosage` int(11) NOT NULL,
  `medPrice` int(11) NOT NULL,
  `medType` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `medicine`
--

INSERT INTO `medicine` (`id`, `medName`, `medCode`, `medQ`, `medDesc`, `medTake`, `medDosage`, `medPrice`, `medType`) VALUES
(3, 'Pyroxine', 'pyrox24', 34, 'fights bacteria', 'morning', 2, 3, 'antibacterial'),
(4, 'azethromycin', 'azth445', 34, 'helps with covid-19', 'night', 2, 3, 'antiviral');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(11) NOT NULL,
  `firstName` varchar(40) NOT NULL,
  `lastName` varchar(40) NOT NULL,
  `employee_id` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `passkey` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `firstName`, `lastName`, `employee_id`, `username`, `passkey`) VALUES
(1, 'Diyako', 'Kaso', 'QU180095', 'Diyako', 'Diyako123'),
(2, 'Mzhda', 'Abdulsamad', 'QU180054', 'Mzhda', 'Mzhda54'),
(3, 'Bawan', 'Jabbar', 'QU180053', 'Bawan', 'Bawan765'),
(4, 'Muhammed', 'Dara', 'QU180052', 'Muhammed', 'MoDara234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `medicine`
--
ALTER TABLE `medicine`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `medicine`
--
ALTER TABLE `medicine`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
