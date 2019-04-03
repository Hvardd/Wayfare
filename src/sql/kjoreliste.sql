-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2019 at 01:06 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wayfaredb`
--

-- --------------------------------------------------------

--
-- Table structure for table `kjoreliste`
--

CREATE TABLE `kjoreliste` (
  `ID` int(11) NOT NULL,
  `Fornavn` varchar(255) NOT NULL,
  `Etternavn` varchar(255) NOT NULL,
  `Start` varchar(255) NOT NULL,
  `Slutt` varchar(255) NOT NULL,
  `Dato` date NOT NULL,
  `Pris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kjoreliste`
--

INSERT INTO `kjoreliste` (`ID`, `Fornavn`, `Etternavn`, `Start`, `Slutt`, `Dato`, `Pris`) VALUES
(1, 'Lars', 'Monsen', 'Notodden', 'Gvarv', '2019-02-15', 50),
(2, 'Johannes', '', 'Gvarv', 'Skien', '2019-02-05', 190),
(3, 'Abraham', '', 'Lunde', 'Porsgrunn', '2019-02-05', 310),
(4, 'Anette', '', 'Skien', 'Lunde', '2019-02-05', 140),
(5, 'Abraham', '', 'Porsgrunn', 'Notodden', '2019-02-05', 355),
(6, 'Lars', '', 'Brevik', 'Skien', '2019-02-05', 255),
(7, 'Espen', '', 'Kragerø', 'Rjukan', '2019-02-05', 500),
(8, 'Jonas', '', 'Notodden', 'Stathelle', '2019-02-05', 450),
(9, 'Anders', '', 'Rjukan', 'Lunde', '2019-02-05', 250),
(10, 'Elin', '', 'Stathelle', 'Gvarv', '2019-02-05', 175),
(11, 'Hanna', '', 'Gvarv', 'Skien', '2019-02-05', 100),
(12, 'Silje', '', 'Lunde', 'Notodden', '2019-02-05', 50),
(13, 'Daglig', '', 'Oslo', 'BÃ¦rum', '0000-00-00', 142);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kjoreliste`
--
ALTER TABLE `kjoreliste`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kjoreliste`
--
ALTER TABLE `kjoreliste`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
