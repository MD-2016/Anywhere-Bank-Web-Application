-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 06, 2016 at 09:27 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `anywherebankdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `EmailAddress` varchar(50) NOT NULL,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Password` varchar(128) NOT NULL,
  `DateOfBirth` date NOT NULL,
  `ContactPreference` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`EmailAddress`, `Fname`, `Lname`, `PhoneNo`, `Password`, `DateOfBirth`, `ContactPreference`) VALUES
('bob.smith@gmail.com', 'bob', 'smith', '740-614-5589', 'dfd827989c72e5d10ac682cdcb16b32e20c962e5f515c261a7de6489fa44bb8c2c30afdc48ce1fecc9a456086dd751419367067f9225af3b6d1403cbead7b4ef', '1990-01-01', 'Email');

-- --------------------------------------------------------

--
-- Table structure for table `customer_bank_account`
--

CREATE TABLE `customer_bank_account` (
  `EmailAddress` varchar(50) NOT NULL,
  `AccountNumber` int(16) NOT NULL,
  `AccountName` varchar(100) NOT NULL,
  `Balance` decimal(15,2) NOT NULL,
  `AvailableBalance` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer_credit_card`
--

CREATE TABLE `customer_credit_card` (
  `EmailAddress` varchar(50) NOT NULL,
  `CardNumber` int(16) NOT NULL,
  `CardName` varchar(100) NOT NULL,
  `Balance` decimal(15,2) NOT NULL,
  `AvailableCredit` decimal(15,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `web_user_inquiry`
--

CREATE TABLE `web_user_inquiry` (
  `UserID` int(11) UNSIGNED NOT NULL,
  `EmailAddress` varchar(50) NOT NULL,
  `Time_Stamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `Fname` varchar(25) NOT NULL,
  `Lname` varchar(25) NOT NULL,
  `PhoneNo` varchar(15) NOT NULL,
  `Message` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`EmailAddress`);

--
-- Indexes for table `customer_bank_account`
--
ALTER TABLE `customer_bank_account`
  ADD PRIMARY KEY (`EmailAddress`,`AccountNumber`);

--
-- Indexes for table `customer_credit_card`
--
ALTER TABLE `customer_credit_card`
  ADD PRIMARY KEY (`EmailAddress`,`CardNumber`);

--
-- Indexes for table `web_user_inquiry`
--
ALTER TABLE `web_user_inquiry`
  ADD PRIMARY KEY (`EmailAddress`,`Time_Stamp`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer_bank_account`
--
ALTER TABLE `customer_bank_account`
  ADD CONSTRAINT `customer_bank_account_ibfk_1` FOREIGN KEY (`EmailAddress`) REFERENCES `customer` (`EmailAddress`);

--
-- Constraints for table `customer_credit_card`
--
ALTER TABLE `customer_credit_card`
  ADD CONSTRAINT `customer_credit_card_ibfk_1` FOREIGN KEY (`EmailAddress`) REFERENCES `customer` (`EmailAddress`);

--
-- Constraints for table `web_user_inquiry`
--
ALTER TABLE `web_user_inquiry`
  ADD CONSTRAINT `web_user_inquiry_ibfk_1` FOREIGN KEY (`EmailAddress`) REFERENCES `customer` (`EmailAddress`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
