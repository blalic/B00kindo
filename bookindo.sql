-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2021 at 11:31 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookindo`
--

-- --------------------------------------------------------

--
-- Table structure for table `grupe`
--

CREATE TABLE `grupe` (
  `id_grupe` int(11) NOT NULL,
  `naziv_grupe` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grupe`
--

INSERT INTO `grupe` (`id_grupe`, `naziv_grupe`) VALUES
(1, 'klasika'),
(2, 'istorijski'),
(3, 'drama'),
(4, 'triler'),
(5, 'komedija'),
(6, 'domaci');

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE `korpa` (
  `id` int(11) NOT NULL,
  `datum` datetime NOT NULL,
  `ukupno` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korpa`
--

INSERT INTO `korpa` (`id`, `datum`, `ukupno`) VALUES
(1, '2021-03-13 11:04:53', '3050.00'),
(2, '2021-03-13 11:06:50', '3050.00'),
(3, '2021-03-13 11:07:22', '1850.00'),
(4, '2021-03-13 11:11:25', '1150.00'),
(5, '2021-03-13 11:37:30', '2800.00'),
(6, '2021-03-13 11:40:29', '3450.00'),
(7, '2021-03-13 15:53:27', '1250.00'),
(8, '2021-03-13 20:16:34', '4350.00'),
(9, '2021-03-15 11:08:09', '4000.00');

-- --------------------------------------------------------

--
-- Table structure for table `proizvodi`
--

CREATE TABLE `proizvodi` (
  `id` int(11) NOT NULL,
  `naziv_knjige` varchar(40) NOT NULL,
  `ime_autora` varchar(50) NOT NULL,
  `godina_izdanja` year(4) NOT NULL,
  `grupa` int(11) NOT NULL,
  `slika` text NOT NULL,
  `cena` decimal(11,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `proizvodi`
--

INSERT INTO `proizvodi` (`id`, `naziv_knjige`, `ime_autora`, `godina_izdanja`, `grupa`, `slika`, `cena`) VALUES
(1, 'Zlocin i kazna', 'Fjodor Dostojevski', 2002, 1, 'zlocin_i_kazna.jpg', '800.00'),
(2, 'Rat i mir', 'Lav Tolstoj', 2004, 1, 'rat_i_mir.jpg', '1200.00'),
(3, 'Ime ruze', 'Umberto Eko', 2003, 1, 'ime_ruze.jpg', '650.00'),
(4, 'Dorotej', 'Dobrilo Nenadic', 2005, 6, 'dorotej.jpg', '550.00'),
(6, 'Top je bio vreo', 'Vladimir Kecmanovic', 2008, 6, 'top_je_bio_vreo.jpg', '750.00'),
(7, 'Fajront u Sarajevu', 'Dr Nele Karajlic', 2008, 6, 'fajront_u_sarajevu.jpg', '700.00'),
(8, 'Ajvanho', 'Valter Skot', 1998, 2, 'ajvanho.jpg', '550.00'),
(9, 'Tvrdica', 'Molijer', 1988, 3, 'tvrdica.jpg', '450.00'),
(10, 'Rambo - prva krv', 'Dejvid Morel', 2001, 4, 'rambo.jpg', '550.00'),
(12, 'Veciti mladozenja', 'Jakov Ignjatovic', 2007, 6, 'veciti_mladozenja.jpeg', '500.00'),
(13, 'Narodni poslanik', 'Branislav Nusic', 2003, 5, 'narodni_poslanik.jpg', '350.00'),
(15, 'Magarece godine', 'Branko Copic', 1998, 5, 'magarece_godine.jpg', '350.00'),
(16, 'Braca Karamazovi', 'Fjodor Dostojevski', 2008, 1, 'karamazovi.jpg', '1200.00');

-- --------------------------------------------------------

--
-- Table structure for table `stavke_korpe`
--

CREATE TABLE `stavke_korpe` (
  `id` int(11) NOT NULL,
  `proizvod_id` int(11) NOT NULL,
  `korpa_id` int(11) NOT NULL,
  `cena` decimal(11,2) NOT NULL,
  `kolicina` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stavke_korpe`
--

INSERT INTO `stavke_korpe` (`id`, `proizvod_id`, `korpa_id`, `cena`, `kolicina`) VALUES
(1, 9, 5, '450.00', 2),
(2, 7, 5, '700.00', 1),
(3, 2, 5, '1200.00', 1),
(4, 2, 6, '1200.00', 2),
(5, 7, 6, '700.00', 1),
(6, 15, 6, '350.00', 1),
(7, 7, 7, '700.00', 1),
(8, 10, 7, '550.00', 1),
(9, 3, 8, '650.00', 2),
(10, 7, 8, '700.00', 2),
(11, 10, 8, '550.00', 3),
(12, 1, 9, '800.00', 2),
(13, 2, 9, '1200.00', 2);

-- --------------------------------------------------------

--
-- Table structure for table `useri`
--

CREATE TABLE `useri` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `useri`
--

INSERT INTO `useri` (`id`, `username`, `password`) VALUES
(1, 'Pero', 'perhan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `grupe`
--
ALTER TABLE `grupe`
  ADD PRIMARY KEY (`id_grupe`);

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `grupa` (`grupa`);

--
-- Indexes for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD PRIMARY KEY (`id`),
  ADD KEY `korpa_id` (`korpa_id`),
  ADD KEY `proizvod_id` (`proizvod_id`);

--
-- Indexes for table `useri`
--
ALTER TABLE `useri`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `grupe`
--
ALTER TABLE `grupe`
  MODIFY `id_grupe` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `proizvodi`
--
ALTER TABLE `proizvodi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `useri`
--
ALTER TABLE `useri`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `proizvodi`
--
ALTER TABLE `proizvodi`
  ADD CONSTRAINT `proizvodi_ibfk_1` FOREIGN KEY (`grupa`) REFERENCES `grupe` (`id_grupe`) ON UPDATE CASCADE;

--
-- Constraints for table `stavke_korpe`
--
ALTER TABLE `stavke_korpe`
  ADD CONSTRAINT `stavke_korpe_ibfk_1` FOREIGN KEY (`korpa_id`) REFERENCES `korpa` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `stavke_korpe_ibfk_2` FOREIGN KEY (`proizvod_id`) REFERENCES `proizvodi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
