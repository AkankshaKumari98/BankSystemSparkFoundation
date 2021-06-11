-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 11, 2021 at 03:30 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dataweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `customerid` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `accountnumber` int(25) NOT NULL,
  `currentbalance` int(20) NOT NULL,
  `emailid` varchar(40) NOT NULL,
  `dateofbirth` varchar(30) NOT NULL,
  `mobilenumber` int(20) NOT NULL,
  `gender` varchar(25) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customerid`, `name`, `accountnumber`, `currentbalance`, `emailid`, `dateofbirth`, `mobilenumber`, `gender`) VALUES
(1, 'Neha Kumari', 876784562, 500, 'nehakumari0808@gmail.com', '08-06-1998', 764379653, 'Male'),
(2, 'Ronit Kumar', 87678456, 4000, 'surbhi0806@gmail.com', '05-03-1998', 764345653, 'Male'),
(3, 'Mohan Lohani', 764686432, 4400, 'neha123@gmail.com', '06-03-2006', 984567432, 'Male'),
(4, 'Disha Patani', 653475432, 2300, 'akku876@gmail.com', '04-07-1999', 700776743, 'Female'),
(5, 'Disha kumari', 653476432, 1600, 'disha876@gmail.com', '04-07-1989', 707676743, 'Female'),
(6, 'Puja Pandey', 876784567, 5000, 'kumarineha123@gmail.com', '06-04-1996', 764377653, 'Female'),
(7, 'Akanksha Kumari', 876787562, 8000, 'akanksha123@gmail.com', '08-06-1997', 700886743, 'Female'),
(8, 'Annu Kumari', 876783623, 10000, 'annukumari09@gmail.com', '08-02-1998', 983762374, 'Female'),
(9, 'Astha Pandey', 876743562, 8000, 'asthapandey0808@gmail.com', '09-02-1997', 984534432, 'Female'),
(10, 'Ayuu Kumar', 876784237, 5000, 'ayyukumar0808@gmail.com', '05-03-1998', 764387653, 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `transaction_history`
--

CREATE TABLE `transaction_history` (
  `id` int(11) NOT NULL,
  `from_account` varchar(30) NOT NULL,
  `to_account` varchar(30) NOT NULL,
  `transfer_amount` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction_history`
--

INSERT INTO `transaction_history` (`id`, `from_account`, `to_account`, `transfer_amount`, `date`) VALUES
(1, '764686432', '876784562', '200', '2021-06-07'),
(2, '876784562', '653475432', '200', '2021-06-07'),
(3, '876784562', '653475432', '200', '2021-06-07'),
(4, '653476432', '764686432', '500', '2021-06-07'),
(5, '653476432', '653475432', '400', '2021-06-07'),
(6, '653475432', '876784562', '500', '2021-06-07'),
(7, '653475432', '876784562', '500', '2021-06-07'),
(8, '876784562', '764686432', '500', '2021-06-07'),
(9, '876784562', '764686432', '500', '2021-06-07'),
(10, '764686432', '876784562', '800', '2021-06-08'),
(11, '876784562', '764686432', '500', '2021-06-09'),
(12, '876784562', '764686432', '500', '2021-06-09'),
(13, '764686432', '876784562', '400', '2021-06-09'),
(14, '876784562', '764686432', '500', '2021-06-10'),
(15, '876784562', '764686432', '500', '2021-06-10'),
(16, '764686432', '764686432', '200', '2021-06-10'),
(17, '876784562', '87678456', '500', '2021-06-10'),
(18, '876784562', '87678456', '500', '2021-06-10'),
(19, '876784562', '87678456', '500', '2021-06-10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction_history`
--
ALTER TABLE `transaction_history`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction_history`
--
ALTER TABLE `transaction_history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
