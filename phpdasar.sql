-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 14, 2024 at 02:36 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdasar`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `nrp` char(9) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `gambar` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `nrp`, `email`, `jurusan`, `gambar`) VALUES
(1, 'Fadli Akhar', '18339', 'fadliakhar29@gmail.com', 'Teknik Nuklir', 'fotoA.png'),
(2, 'Agus', '11111', 'agus@gmail.com', 'Fisika', 'fotoB.jpg'),
(3, 'Gilang', '22222', 'gilang@gmail.com', 'Arsitektur', 'fotoA.png'),
(4, 'Dafi', '33333', 'dafi@gmail.com', 'Psikologi', 'fotoB.jpg'),
(26, 'Aku Fian', '96969', 'fian@gmail.com', 'Teknik Informatika', '675905c4dbf02.png'),
(27, 'Starboy', '67890', 'starboy@gmail.com', 'Ekonomi', '675a579c77281.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`) VALUES
(1, 'fadli', '$2y$10$cS2nmLx4OAkwb2ZiMRJaHe4rM6cm0KzhA5KgaGmRbjB.e3GZ4Ne1e'),
(2, 'fadli', '$2y$10$WgtWl1QAYsl7UwmjmjE3cOkOXOsTuaEuSsOyTEOm3Wp6nT3rxtQ7C'),
(3, 'admin', '$2y$10$e6.Deqp2eCClNJmerCPA2OVMgnlmVt/gQvPUqAYlUfI9DTDkZC7t.'),
(4, 'akhar', '$2y$10$HZqXCMzQ3w9.4c3.qq8Pc.hVskub.OalRz0c8x5bSqzqOS7/m1rmq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
