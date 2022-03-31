-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2022 at 03:24 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbcrtlstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbCategory`
--

CREATE TABLE `tbCategory` (
  `idCategory` int(11) NOT NULL,
  `category__name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbCategory`
--

INSERT INTO `tbCategory` (`idCategory`, `category__name`) VALUES
(1, 'SmartPhone'),
(2, 'Laptop'),
(3, 'Monitor'),
(4, 'Peripherals');

-- --------------------------------------------------------

--
-- Table structure for table `tbClient`
--

CREATE TABLE `tbClient` (
  `idClient` int(11) NOT NULL,
  `client__name` varchar(100) NOT NULL,
  `client__email` varchar(100) NOT NULL,
  `client__password` varchar(50) NOT NULL,
  `client__phone` varchar(50) NOT NULL,
  `client__cpf` varchar(50) NOT NULL,
  `client__birthdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbProduct`
--

CREATE TABLE `tbProduct` (
  `idProduct` int(11) NOT NULL,
  `product__name` varchar(100) NOT NULL,
  `product__brand` varchar(100) NOT NULL,
  `product__price` double NOT NULL,
  `product__image` varchar(200) NOT NULL,
  `product__desc` varchar(200) NOT NULL,
  `idCategory` int(11) NOT NULL,
  `product__available` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbProduct`
--

INSERT INTO `tbProduct` (`idProduct`, `product__name`, `product__brand`, `product__price`, `product__image`, `product__desc`, `idCategory`, `product__available`) VALUES
(1, 'Iphone 13', 'Apple', 6000, '../img/imageIphone', 'Apple Iphone 13 (256gb), Tela de 6,1', 1, 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbCategory`
--
ALTER TABLE `tbCategory`
  ADD PRIMARY KEY (`idCategory`);

--
-- Indexes for table `tbClient`
--
ALTER TABLE `tbClient`
  ADD PRIMARY KEY (`idClient`);

--
-- Indexes for table `tbProduct`
--
ALTER TABLE `tbProduct`
  ADD PRIMARY KEY (`idProduct`),
  ADD KEY `idCategory` (`idCategory`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbCategory`
--
ALTER TABLE `tbCategory`
  MODIFY `idCategory` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbClient`
--
ALTER TABLE `tbClient`
  MODIFY `idClient` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbProduct`
--
ALTER TABLE `tbProduct`
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbProduct`
--
ALTER TABLE `tbProduct`
  ADD CONSTRAINT `tbProduct_ibfk_1` FOREIGN KEY (`idCategory`) REFERENCES `tbCategory` (`idCategory`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
