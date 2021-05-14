-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2021 at 10:13 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gym-management`
--

-- --------------------------------------------------------

--
-- Table structure for table `logintb`
--

CREATE TABLE `logintb` (
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logintb`
--

INSERT INTO `logintb` (`username`, `password`) VALUES
('admin', '162753');

-- --------------------------------------------------------

--
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `member_id` int(10) NOT NULL,
  `member_name` varchar(30) NOT NULL,
  `action` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`member_id`, `member_name`, `action`, `date`) VALUES
(101, 'Mahesh', 'Inserted', '2021-01-28'),
(102, 'Park', 'Inserted', '2021-01-28'),
(103, 'Samsmith', 'Inserted', '2021-01-28'),
(104, 'Raam', 'Inserted', '2021-01-28'),
(105, 'Ariana', 'Inserted', '2021-01-28'),
(106, 'Shana', 'Inserted', '2021-01-28');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `contact` varchar(20) NOT NULL,
  `member_id` int(60) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `trainer_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`fname`, `lname`, `contact`, `member_id`, `Gender`, `trainer_id`) VALUES
('Mahesh', 'Dsouza', '9875412349', 101, 'Male', '997'),
('Park', 'Jimin', '9545121447', 102, 'Male', '999'),
('Samsmith', 'Dsouza', '7541236876', 103, 'Male', '997'),
('Raam', 'Dsouza', '7987451245', 104, 'Male', '995'),
('Ariana', 'Grande', '9875454557', 105, 'Female', '996'),
('Shana', 'Khan', '8452193421', 106, 'Female', '998');

--
-- Triggers `member`
--
DELIMITER $$
CREATE TRIGGER `insertLog` AFTER INSERT ON `member` FOR EACH ROW INSERT INTO logs VALUES(NEW.member_id,NEW.fname,'Inserted',NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` varchar(40) NOT NULL,
  `package_name` varchar(40) NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `package_name`, `amount`) VALUES
('01', 'Weight Gain', 1000),
('02', 'Weight Loss', 1000),
('03', 'Cardio ', 1500),
('04', 'Arms & legs', 2000),
('05', 'Full Body', 2500);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `Payment_id` int(10) NOT NULL,
  `Amount` int(20) NOT NULL,
  `payment_type` varchar(20) NOT NULL,
  `member_id` int(60) NOT NULL,
  `Date` date NOT NULL,
  `exdate` date NOT NULL,
  `package_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`Payment_id`, `Amount`, `payment_type`, `member_id`, `Date`, `exdate`, `package_id`) VALUES
(1000, 1000, 'card', 101, '2020-12-25', '2021-01-25', '01'),
(1001, 1000, 'card', 102, '2020-12-01', '2021-01-01', '02'),
(1002, 1500, 'cash', 103, '2021-01-15', '2021-02-15', '03'),
(1003, 2000, 'cash', 104, '2020-11-13', '2020-12-13', '04'),
(1005, 1500, 'card', 105, '2020-12-25', '2021-01-25', '02');

-- --------------------------------------------------------

--
-- Table structure for table `trainer`
--

CREATE TABLE `trainer` (
  `Trainer_id` varchar(20) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Gender` varchar(20) DEFAULT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trainer`
--

INSERT INTO `trainer` (`Trainer_id`, `Name`, `Gender`, `Email`) VALUES
('995', 'Ram', 'Male', 'ram1@gmail.com'),
('996', 'Ayisha', 'Female', 'ayisha@gmai.com'),
('997', 'Param', 'Male', 'param@gamil.com'),
('998', 'Monicaa', 'Female', 'moni@gamil.com'),
('999', 'Sam', 'Male', 'sam@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`member_id`),
  ADD KEY `FKW` (`trainer_id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`Payment_id`),
  ADD KEY `FKZ` (`member_id`),
  ADD KEY `paypacks` (`package_id`);

--
-- Indexes for table `trainer`
--
ALTER TABLE `trainer`
  ADD PRIMARY KEY (`Trainer_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `member`
--
ALTER TABLE `member`

  
  ADD CONSTRAINT `FKW` FOREIGN KEY (`trainer_id`) REFERENCES `trainer` (`Trainer_id`) ON UPDATE CASCADE,
  

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  
  ADD CONSTRAINT `FKZ` FOREIGN KEY (`member_id`) REFERENCES `member` (`member_id`) ON DELETE CASCADE ON UPDATE CASCADE,

  ADD CONSTRAINT `paypacks` FOREIGN KEY (`package_id`) REFERENCES `package` (`Package_id`) ON DELETE CASCADE ON UPDATE CASCADE,

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
