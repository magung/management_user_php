-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 20, 2020 at 03:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `hak_akses` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `kedaluwarsa` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_lengkap`, `user`, `password`, `hak_akses`, `status`, `kedaluwarsa`) VALUES
(1, 'aaa', 'aaa', '47bce5c74f589f4867dbd57e9ca9f808', '12345', 'aktif', '2020-03-31'),
(2, 'bbb', 'bbb', '08f8e0260c64418510cefb2b06eee5cd', '123', 'aktif', '2020-03-31'),
(3, 'ccc', 'ccc', '9df62e693988eb4e1e1444ece0578579', '4567', 'aktif', '2020-03-31'),
(4, 'ddd', 'ddd', '77963b7a931377ad4ab5ad6a9cd718aa', '789', 'aktif', '2020-03-11'),
(5, 'eee', 'eee', 'd2f2297d6e829cd3493aa7de4416a18f', '2347', 'aktif', '2020-03-31'),
(6, 'fff', 'fff', '343d9040a671c45832ee5381860e2996', '358', 'aktif', '2020-03-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
