-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: 25. Apr, 2019 21:26 PM
-- Tjener-versjon: 10.1.34-MariaDB
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
-- Database: `Wayfare`
--

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Avtaler`
--

CREATE TABLE `Avtaler` (
  `Epost1` int(11) NOT NULL,
  `Epost2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `kjoreliste`
--

CREATE TABLE `kjoreliste` (
  `ID` int(11) NOT NULL,
  `Fornavn` varchar(255) NOT NULL,
  `Etternavn` varchar(255) NOT NULL,
  `Start` varchar(255) NOT NULL,
  `Slutt` varchar(255) NOT NULL,
  `Dato` date NOT NULL,
  `Pris` int(11) NOT NULL,
  `Klokkeslett` time DEFAULT NULL,
  `Beskrivelse` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `kjoreliste`
--

INSERT INTO `kjoreliste` (`ID`, `Fornavn`, `Etternavn`, `Start`, `Slutt`, `Dato`, `Pris`, `Klokkeslett`, `Beskrivelse`) VALUES
(1, 'Lars', 'Monsen', 'Notodden', 'Gvarv', '2019-02-15', 50, NULL, NULL),
(2, 'Johannes', '', 'Gvarv', 'Skien', '2019-02-05', 190, '00:00:00', 'Skal frakte hest og vogn'),
(3, 'Abraham', '', 'Lunde', 'Porsgrunn', '2019-02-05', 310, NULL, NULL),
(4, 'Anette', '', 'Skien', 'Lunde', '2019-02-05', 140, NULL, NULL),
(5, 'Abraham', '', 'Porsgrunn', 'Notodden', '2019-02-05', 355, NULL, NULL),
(6, 'Lars', '', 'Brevik', 'Skien', '2019-02-05', 255, NULL, NULL),
(7, 'Espen', '', 'Kragerø', 'Rjukan', '2019-02-05', 500, NULL, NULL),
(8, 'Jonas', '', 'Notodden', 'Stathelle', '2019-02-05', 450, NULL, NULL),
(9, 'Anders', '', 'Rjukan', 'Lunde', '2019-02-05', 250, NULL, NULL),
(10, 'Elin', '', 'Stathelle', 'Gvarv', '2019-02-05', 175, NULL, NULL),
(11, 'Hanna', '', 'Gvarv', 'Skien', '2019-02-05', 100, NULL, NULL),
(12, 'Silje', '', 'Lunde', 'Notodden', '2019-02-05', 50, NULL, NULL),
(13, 'Daglig', '', 'Oslo', 'BÃ¦rum', '0000-00-00', 142, NULL, NULL),
(14, 'Peder', '', 'oslo', 'Bergen', '0000-00-00', 1000, NULL, NULL),
(15, 'Peder', '', 'oslo', 'Bergen', '0000-00-00', 1000, NULL, NULL),
(16, 'test', '', 'test', 'test', '0000-00-00', 0, NULL, NULL),
(17, 'test', '', 'test', 'test', '0000-00-00', 0, NULL, NULL),
(18, 'test', '', 'test', 'test', '0000-00-00', 0, NULL, NULL),
(19, 'test', '', 'test', 'test', '0000-00-00', 0, NULL, NULL),
(20, '', '', '', '', '0000-00-00', 0, NULL, NULL),
(21, '', '', '', '', '0000-00-00', 0, NULL, NULL),
(22, '', '', '', '', '0000-00-00', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `Meldinger`
--

CREATE TABLE `Meldinger` (
  `test` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellstruktur for tabell `users`
--

CREATE TABLE `users` (
  `user_first` varchar(150) DEFAULT NULL,
  `user_email` varchar(256) NOT NULL,
  `user_tlf` int(11) DEFAULT NULL,
  `user_brukertype` varchar(20) DEFAULT NULL,
  `user_passord` varchar(256) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dataark for tabell `users`
--

INSERT INTO `users` (`user_first`, `user_email`, `user_tlf`, `user_brukertype`, `user_passord`) VALUES
('Test ', 'haavardsellingsen@gmail.com', 99336708, 'Passasjer   ', '$2y$10$OU.55AnsfaJGgje9LmRGKuph.3PAnvgs4RQYJxjzHCR5tyTBYUm2u'),
('Test', 'test@test.com', 321321321, 'Passasjer', '$2y$10$pzffOFGS3Zl8W3X5zxKFteEecjaGDxz9jYSJEp7fYW9icQYmrnbWi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kjoreliste`
--
ALTER TABLE `kjoreliste`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kjoreliste`
--
ALTER TABLE `kjoreliste`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
