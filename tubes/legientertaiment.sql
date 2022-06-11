-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 11:31 PM
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
-- Database: `legientertaiment`
--

-- --------------------------------------------------------

--
-- Table structure for table `nct`
--

CREATE TABLE `nct` (
  `id` int(11) NOT NULL,
  `nama_artis` varchar(225) NOT NULL,
  `nama_lagu` varchar(225) NOT NULL,
  `album` varchar(225) NOT NULL,
  `durasi` time NOT NULL,
  `tanggal_liris` date NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `nct`
--

INSERT INTO `nct` (`id`, `nama_artis`, `nama_lagu`, `album`, `durasi`, `tanggal_liris`, `gambar`) VALUES
(2, 'Jeong Jaehyun', 'Make a Wish', 'Resonance', '03:26:00', '2020-02-01', '62a30df8f21bc.jpg'),
(3, 'Lee Jeno', 'Misfit', 'Resonance', '12:48:00', '2021-02-01', 'resonance.jpg'),
(5, 'Lee Taeyong', 'Black on Black', 'Emphaty', '13:30:00', '2018-02-01', '62a30e0d79eca.jpg'),
(8, 'Park Jisung', 'Birthday Party', 'Universe', '15:36:00', '2021-09-08', '62a30e216b2cd.png'),
(9, 'Lee Haechan', 'Beautiful', 'Universe', '15:38:00', '2018-08-07', '62a30e32264ba.png'),
(10, 'Mark Lee', 'Saturday Drip', 'Glitch Mode', '15:47:00', '2022-05-05', '62a30fbd407fa.jpg'),
(11, 'Na Jaemin', 'Never Goodbye', 'Glitch Mode', '18:30:00', '2022-05-05', '62a30ffd7b124.jpg'),
(12, 'Lucas', 'Boss', 'Emphaty', '16:31:00', '2018-05-06', '62a30f2136c56.jpg'),
(13, 'Ten', 'Love Talk', 'Take Over The Moon', '16:39:00', '2018-09-08', '62a310dd51a66.png'),
(14, 'Xiaojun', 'Moonwalk', 'Take Over The Moon', '16:40:00', '2019-09-08', '62a31142c4677.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nct`
--
ALTER TABLE `nct`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nct`
--
ALTER TABLE `nct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
