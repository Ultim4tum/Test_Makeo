-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 26, 2023 at 06:10 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_makeo`
--

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `Nom_prenom` varchar(100) NOT NULL,
  `Mail` varchar(100) NOT NULL,
  `Msg` text NOT NULL,
  `Id_User` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`Nom_prenom`, `Mail`, `Msg`, `Id_User`) VALUES
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 26),
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 27),
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 28),
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 29),
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 30),
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 31),
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 32),
('Enzo Lpn', 'TEST@mail.com', 'salut les potes', 33),
('Makeo', 'TEST@mail.com', 'j\'aime coder', 34);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`Id_User`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `Id_User` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
