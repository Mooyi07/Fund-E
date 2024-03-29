-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2024 at 04:05 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/* Create the database */
CREATE DATABASE IF NOT EXISTS fundee;

/*Switch to the fundee database */
USE fundee;
/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fundee`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--
DROP TABLE IF EXISTS `transaction`;
DROP TABLE IF EXISTS `type`;
DROP TABLE IF EXISTS user;
DROP TABLE IF EXISTS wallet;


CREATE TABLE `transaction` (
  `Wallet_id` int(6) NOT NULL,
  `Type_id` int(1) NOT NULL,
  `Amount` int(14) NOT NULL,
  `Date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `Type_id` int(1) NOT NULL,
  `Name` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(6) NOT NULL,
  `Username` varchar(12) NOT NULL,
  `Password` varchar(8) NOT NULL,
  `Lastname` varchar(12) NOT NULL,
  `Firstname` varchar(16) NOT NULL,
  `City` varchar(16) NOT NULL,
  `Country` varchar(12) NOT NULL,
  `Email` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wallet`
--

CREATE TABLE `wallet` (
  `User_id` int(6) NOT NULL,
  `Wallet_id` int(6) NOT NULL,
  `Balance` float NOT NULL,
  `Creation_Date` datetime(6) NOT NULL,
  `Last_Updated` datetime(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
