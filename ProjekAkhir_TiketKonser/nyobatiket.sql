-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 05:14 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyobatiket`
--

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

CREATE TABLE `contactus` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `perihal` varchar(30) NOT NULL,
  `pesan` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `nama`, `email`, `perihal`, `pesan`) VALUES
(3, 'aiyam', 'devita3@gmail.com', 'Pertanyaan seputar event', 'WEB SCAMMMMMMMM ALAYYYY'),
(5, 'tiago', 'shey03@gmail.com', 'Saran', 'Mending lu mangkal ojek aja dah'),
(6, 'tiago', 'shey03@gmail.com', 'Saran', 'Mending lu mangkal ojek aja dah'),
(7, 'tiago', 'shey03@gmail.com', 'Saran', 'Mending lu mangkal ojek aja dah'),
(8, 'tiago', 'shey03@gmail.com', 'Saran', 'Mending lu mangkal ojek aja dah'),
(9, 'tiago', 'shey03@gmail.com', 'Saran', 'Mending lu mangkal ojek aja dah'),
(10, 'tiago', 'shey03@gmail.com', 'Saran', 'Mending lu mangkal ojek aja dah'),
(11, 'Tiago Milos', 'shey03@gmail.com', 'Saran', 'Mending lu mangkal ojek aja dah');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'damai', 'may', 'may', 'admin'),
(2, 'ding', 'user', 'user', 'user'),
(3, 'admin', 'admin', 'admin', 'admin'),
(4, 'gading', 'ding', 'ding123', 'user'),
(5, 'sakti', 'ai', 'ai', 'superadmin'),
(7, 'Jagad Damai', 'mai', 'mai', 'admin'),
(8, 'Jagad Damai', 'dam', 'dam123', 'admin'),
(9, 'devi', 'devi', 'devi', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tambahevent`
--

CREATE TABLE `tambahevent` (
  `id` int(11) NOT NULL,
  `tanggal` varchar(10) NOT NULL,
  `judul` varchar(40) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  `gambar` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tambahevent`
--

INSERT INTO `tambahevent` (`id`, `tanggal`, `judul`, `tempat`, `harga`, `gambar`) VALUES
(14, '17 des', 'walawe konser', 'gejayan', 70000, 'coldplay.jpeg'),
(26, '32 jan', 'maymunah konser', 'Seturan asdasa ajsodajsdmaw fa', 3455162, 'w2e.jpeg'),
(27, '1 feb', 'paceeee konser', 'gejayan', 592, 'cas.jpg'),
(28, '31 feb', 'ROC World Tour Concert', 'Senayan City', 234000, 'roc.jpg'),
(29, '12 apr', 'Ariana Grande', 'Stadion Mandala Krida, Jogja', 400000, 'ariana_grande.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `idtiket` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `namakonser` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tiket`
--

INSERT INTO `tiket` (`idtiket`, `nama`, `email`, `namakonser`, `alamat`, `jumlah`, `total`) VALUES
(2, 'aiyam', 'aiyam@gmail.com', 'Wave To Earth Concert', 'muna', 0, 0),
(5, 'devi', 'devita3@gmail.com', 'Nicole World Tour 2023', 'bantul', 0, 0),
(6, 'shey', 'shey03@gmail.com', 'Giveon Full Heartbreak', 'sch nggih', 0, 0),
(7, 'rentol', 'aiyam2@gmail.com', 'Pilih Konser', '3', 0, 0),
(8, 'Tiago Milos', 'aiyam2@gmail.com', 'Pilih Konser', 'sch nggih', 3, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contactus`
--
ALTER TABLE `contactus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tambahevent`
--
ALTER TABLE `tambahevent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`idtiket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contactus`
--
ALTER TABLE `contactus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tambahevent`
--
ALTER TABLE `tambahevent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `idtiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
