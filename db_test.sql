-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 20, 2021 at 02:05 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 5.6.39

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tree`
--

CREATE TABLE `tbl_tree` (
  `id` int(3) NOT NULL,
  `nama` varchar(200) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `id_parent` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tree`
--

INSERT INTO `tbl_tree` (`id`, `nama`, `jenis_kelamin`, `id_parent`) VALUES
(1, 'BUDI', 'LAKI-LAKI', 0),
(2, 'DEDI', 'LAKI-LAKI', 1),
(3, 'FERI', 'LAKI-LAKI', 2),
(4, 'DODI', 'LAKI-LAKI', 1),
(5, 'DEDE', 'LAKI-LAKI', 1),
(6, 'DEWI', 'WANITA', 1),
(8, 'GUGUS', 'LAKI-LAKI', 4),
(9, 'GANDI', 'LAKI-LAKI', 4),
(10, 'HANI', 'WANITA', 5),
(11, 'HANA', 'WANITA', 5),
(12, 'FARAH', 'WANITA', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_tree`
--
ALTER TABLE `tbl_tree`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_tree`
--
ALTER TABLE `tbl_tree`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
