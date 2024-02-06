-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 03, 2024 at 11:53 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `rezervimet`
--

CREATE TABLE `rezervimet` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(45) NOT NULL,
  `Phone` int(25) NOT NULL,
  `Tavolina` varchar(25) NOT NULL,
  `Koha` datetime NOT NULL,
  `InsertedTime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rezervimet`
--

INSERT INTO `rezervimet` (`ID`, `Emri`, `Phone`, `Tavolina`, `Koha`, `InsertedTime`) VALUES
(8, 'Blend Muharremi', 43557139, 'table1', '2024-02-12 00:12:00', '2024-02-03 23:31:20'),
(9, 'Ardit Syla', 45555897, 'table3', '2024-02-15 12:50:00', '2024-02-03 23:31:54'),
(10, 'User1', 49856987, 'table2', '2024-03-10 11:10:00', '2024-02-03 23:32:53');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(11) NOT NULL,
  `Emri` varchar(45) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Roli` varchar(45) NOT NULL DEFAULT 'Klient',
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `Emri`, `Email`, `Roli`, `Username`, `Password`) VALUES
(1, 'admin', 'blendi123muharremi@gmail.com', 'Administrator', 'admin', 'admin'),
(2, 'Blend', 'blendi@gmail.com', 'Perdorues', 'blendi', '1234'),
(4, 'Ardit', 'ardisyla@hotmail.com', 'Perdorues', 'Arditi', '1234'),
(8, 'user', 'user123@hotmail.com', 'Klient', 'user', '1234'),
(33, 'art', 'ag67322@sdfs.com', 'Klient', 'art', '123'),
(34, 'art', 'ag6722322@sdfs.com', 'Klient', 'arty', '123'),
(35, 'asd', 'fds@dsf.com', 'Klient', 'ggg', '123'),
(36, 'UserUser', 'user@gmail.com', 'Klient', 'useruser', '123');

-- --------------------------------------------------------

--
-- Table structure for table `ushqimet`
--

CREATE TABLE `ushqimet` (
  `ID` int(11) NOT NULL,
  `Kategoria` varchar(45) NOT NULL,
  `Lloji` varchar(45) NOT NULL,
  `Cmimi` int(11) NOT NULL,
  `Perberesit` varchar(45) NOT NULL,
  `Img` varchar(255) NOT NULL,
  `EditedBy` varchar(45) NOT NULL,
  `InsertedBy` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ushqimet`
--

INSERT INTO `ushqimet` (`ID`, `Kategoria`, `Lloji`, `Cmimi`, `Perberesit`, `Img`, `EditedBy`, `InsertedBy`) VALUES
(53, 'Hamburger', 'Double-burger', 4, 'Beef meat', 'ushqimetimg/hamburger4.jpg', '', 'admin'),
(54, 'Pasta', 'Arabiata', 3, 'Sos arabiata', 'ushqimetimg/pastaarabiata.jpg', '', 'admin'),
(55, 'Pica', 'Proschuto', 3, 'Proshute, djathe, ullinj', 'ushqimetimg/proschuto.webp', '', 'admin'),
(56, 'Pica', 'Pepperoni', 3, 'Suxhuk, djathe, ullinj', 'ushqimetimg/pepperoni.webp', '', 'admin'),
(57, 'Pica', 'Tuna', 4, 'Tuna, mozzarella, origano', 'ushqimetimg/tuna.webp', '', 'admin'),
(59, 'Pica', 'Margarita', 3, 'Mozzarella, ullinj, origano', 'ushqimetimg/margarita.webp', '', 'admin'),
(60, 'Hamburger', 'Chicken-burger', 2, 'Mish pule, domate, tranguj', 'ushqimetimg/hamburger5.jpg', '', 'Ardit'),
(61, 'Hamburger', 'Beef-burger', 2, 'Mish viqi, domate, tranguj', 'ushqimetimg/hamburger3.jpg', '', 'Ardit'),
(62, 'Pasta', 'Boloneze', 3, 'Sos bolonez', 'ushqimetimg/pastaboloneze.jpg', '', 'Ardit'),
(63, 'Pasta', 'Ravioli', 4, 'Ravioli', 'ushqimetimg/ravioli.jpg', '', 'Ardit'),
(64, 'Steak', 'File pule', 3, 'Mish pule, pomfrit', 'ushqimetimg/filepule.webp', '', 'Blend'),
(65, 'Steak', 'Ramstek', 6, 'Mish viqi', 'ushqimetimg/ramstek-viqi.jpg', '', 'Blend'),
(66, 'Steak', 'Biftek', 9, 'Mish viqi', 'ushqimetimg/biftek.jpg', '', 'Blend'),
(67, 'Samun', 'Proschuto', 3, 'Proshute, mozzarella', 'ushqimetimg/samun3.webp', '', 'Blend'),
(68, 'Samun', 'Mix', 3, 'Proshute, suxhuk, mozzarella', 'ushqimetimg/SAMUN.jpg', '', 'admin'),
(71, 'Samun', 'Doner', 3, 'Mish pule', 'ushqimetimg/samun2.webp', '', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rezervimet`
--
ALTER TABLE `rezervimet`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `Email` (`Email`,`Username`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email_2` (`Email`);

--
-- Indexes for table `ushqimet`
--
ALTER TABLE `ushqimet`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`),
  ADD KEY `ID_2` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rezervimet`
--
ALTER TABLE `rezervimet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `ushqimet`
--
ALTER TABLE `ushqimet`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
