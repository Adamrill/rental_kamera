-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 24, 2022 at 03:12 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sewa_kamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_customer` int(5) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_hp` varchar(15) NOT NULL,
  `alamat` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_customer`, `nama`, `no_hp`, `alamat`) VALUES
(1, 'udin setiawan', '082636525167', 'desa karangku rt01/02'),
(2, 'anton pradika', '088787896254', 'desa antabrantah'),
(3, 'ani setiani', '087687656774', 'desa kuncup rt01/04'),
(4, 'andi purnomo', '085454323342', 'desa termos'),
(5, 'andi putra', '081276376324', 'desa sungkem'),
(6, 'andra saputra', '08192837829', 'desa tonjangin'),
(11, 'naon siandi', '0819283781', 'Desa gumbarjaya'),
(20, 'adam', '089765987623', 'Desa Suka Koding'),
(22, 'destra', '0898172716276', 'bojongsari'),
(24, 'Bagas', '089775765697', 'Desa Bojongsari\r\n'),
(25, 'fadhil', '08192873819', 'desa suka makan');

-- --------------------------------------------------------

--
-- Table structure for table `kamera`
--

CREATE TABLE `kamera` (
  `id_kamera` int(5) NOT NULL,
  `merk` varchar(30) NOT NULL,
  `stok` int(8) NOT NULL,
  `harga` int(15) NOT NULL,
  `gambar` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kamera`
--

INSERT INTO `kamera` (`id_kamera`, `merk`, `stok`, `harga`, `gambar`) VALUES
(1, 'canon1300d', 3, 350000, 'canon1300d.png'),
(2, 'canon450d', 4, 200000, 'canon450d.png'),
(3, 'canon550d', 7, 300000, 'canon550d.png'),
(4, 'canon5d', 5, 250000, 'canon5d.png'),
(5, 'canon60d', 3, 140000, 'canon60d.png'),
(6, 'canon700d', 5, 255000, 'canon700d.png'),
(7, 'canon70d', 7, 155000, 'canon70d.png'),
(8, 'canon7d', 6, 175000, 'canon7d.png');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `username`, `email`, `password`) VALUES
(1, 'adam', 'adam321@gmail.com', '1d7c2923c1684726dc23d2901c4d8157'),
(2, 'fadhil', 'fadhil2gmail.com', '8073f7db9ce9690ce12c9690769bc00b'),
(3, 'destra', 'destra4343@gmail.com', '1a28268261e90bdc33c9bf3665c43755'),
(4, 'alaika', 'alaika321@gmail.com', '511cee1af0fe4cd5d02e62feeb9cb0b7'),
(8, 'test', 'test12@gmail.com', '25d55ad283aa400af464c76d713c07ad'),
(9, 'user', 'test12@gmail.com', 'ee11cbb19052e40b07aac0ca060c23ee'),
(10, 'admin', 'admin123@gmail.com', '21232f297a57a5a743894a0e4a801fc3'),
(13, 'bayu', 'bayu123@gmail.com', '069f0ce6869d57a1c48906578f2a141f'),
(14, 'wisnu', 'wisnu123@gmail.com', '67340a8acc49d521d7fdd25db913bf9d'),
(15, 'hhh', 'hhh@gmail.com', 'fae0b27c451c728867a567e8c1bb4e53'),
(16, 'udin', 'udin@gmail.com', '6bec9c852847242e384a4d5ac0962ba0'),
(17, 'fff', 'fff@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(18, 'alaika', 'alaika@gmail.com', '8e046846a1e9bda2cfd316ca1d1a5b72'),
(19, 'destra', 'destra3212@gmai.com', '2dc34addc96265664c569dee51149048'),
(20, 'Bagas', 'bagas123@gmail.com', 'caf1a3dfb505ffed0d024130f58c5cfa');

-- --------------------------------------------------------

--
-- Table structure for table `sewa`
--

CREATE TABLE `sewa` (
  `id_sewa` int(5) NOT NULL,
  `id_customer` int(5) NOT NULL,
  `id_kamera` int(5) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `total_sewa` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sewa`
--

INSERT INTO `sewa` (`id_sewa`, `id_customer`, `id_kamera`, `tgl_pinjam`, `tgl_kembali`, `total_sewa`) VALUES
(2, 2, 3, '2022-08-31', '2022-09-03', 1200000),
(4, 2, 3, '2022-09-02', '2022-09-03', 600000),
(5, 2, 3, '2022-09-02', '2022-09-03', 600000),
(7, 4, 6, '2022-09-01', '2022-09-04', 1020000),
(14, 1, 3, '2022-09-03', '2022-09-04', 600000),
(15, 1, 3, '2022-09-03', '2022-09-04', 600000),
(25, 5, 6, '2022-09-02', '2022-09-04', 765000),
(26, 22, 3, '2022-09-12', '2022-09-14', 900000),
(27, 24, 1, '2022-09-20', '2022-09-21', 700000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_customer`);

--
-- Indexes for table `kamera`
--
ALTER TABLE `kamera`
  ADD PRIMARY KEY (`id_kamera`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indexes for table `sewa`
--
ALTER TABLE `sewa`
  ADD PRIMARY KEY (`id_sewa`),
  ADD KEY `id_customer` (`id_customer`),
  ADD KEY `id_kamera` (`id_kamera`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_customer` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `kamera`
--
ALTER TABLE `kamera`
  MODIFY `id_kamera` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `sewa`
--
ALTER TABLE `sewa`
  MODIFY `id_sewa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sewa`
--
ALTER TABLE `sewa`
  ADD CONSTRAINT `sewa_ibfk_1` FOREIGN KEY (`id_customer`) REFERENCES `customer` (`id_customer`),
  ADD CONSTRAINT `sewa_ibfk_2` FOREIGN KEY (`id_kamera`) REFERENCES `kamera` (`id_kamera`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
