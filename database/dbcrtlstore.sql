-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 31, 2022 at 04:15 PM
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
(1, 'Iphone 13', 'Apple', 6000, '../img/imageIphone13', 'Apple Iphone 13 (256gb), Tela de 6,1', 1, 10),
(2, 'Samsung s20', 'Samsung', 2600, '../img/Smartphone/imageSamsungS20', 'Samsung s20 (128gb, 8gb de RAM, Tela de 6,2)', 1, 15),
(3, 'Motorola G10', 'Motorola', 1200, '../img/Smartphone/imageMotorolaG10', 'Motorola g10 (64gb, 4gb de RAM, Tela de 6,5)', 1, 5),
(4, 'Xiaomi Redmi 8', 'Xiaomi', 1100, '../img/Smartphone/imageXiaomiRedmi8', 'Xiaomi Redmi 8 (64gb, 4gb de RAM, Tela de 6,2)', 1, 15),
(5, 'Acer Aspire 5', 'Acer', 3000, '../img/Laptop/imageAcerAspire5', 'Acer Aspire 5 (Core i3 11ª, 8gb RAM, 256gb SSD)', 2, 4),
(6, 'Lenovo Ideapad s145', 'Lenovo', 3600, '../img/Laptop/imageLenovoIdeapad', 'Lenovo Ideapad s145 (Ryzen 5, 12gb RAM, 1TB HD)', 2, 8),
(7, 'Macbook Air', 'Apple', 8500, '../img/Laptop/imageMacbookAir', 'Apple MacbookAir (Processador M1, 8gb RAM, 256gb SSD)', 2, 3),
(8, 'AlienWare m15', 'Alienware', 13000, '../img/Laptop/imageAlienwareM15', 'Alienware m15 (Core i7 11ª, 16gb RAM, RTX 3060, 512gb SSD)', 2, 1),
(9, 'Samsung Odyssey g15', 'Samsung', 5000, '../img/Monitor/imageSamsungOdyssey', 'Samsung Odssey G15 (34 VA, Curvo, Wide, 165 Hz, 2K QHD, 1ms, FreeSync)', 3, 2),
(10, 'Dell P2222H', 'Dell', 1500, '../img/Monitor/imageDellP', 'Dell P2222H (21.5 LCD, 60hz, Full HD)', 3, 2),
(11, 'LG LED 20mk', 'LG', 700, '../img/Monitor/imageLGLed', 'LG LED MK20 (19.5 LCD, 60hz, HD)', 3, 2);

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
  MODIFY `idProduct` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
