-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2019 at 08:22 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.1.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `benyamin`
--

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE `galery` (
  `id` int(11) NOT NULL,
  `image` text NOT NULL,
  `alt_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`id`, `image`, `alt_text`) VALUES
(5, '83048IMG20191021133452.jpg', 'Tampak Atas Samping 1'),
(6, '8987041IMG20191021133522.jpg', 'Tampak Atas Samping 2'),
(7, '7227396IMG20191021133538.jpg', 'Tampak Atas Depan 1'),
(8, '2858603IMG20191021133544.jpg', 'Tampak Atas Depan 2'),
(9, '3380871IMG20191021133549.jpg', 'Tampak Atas Depan 3'),
(10, '9751054IMG20191021133602.jpg', 'Tampak Atas Samping 3'),
(11, '6344063IMG20191021133642.jpg', 'Tampak Atas Samping 3'),
(12, '1507906IMG20191021133745.jpg', 'Tampak Bawah Depan 1'),
(13, '7872203IMG20191021133749.jpg', 'Tampak Bawah Depan 2'),
(14, '5746926IMG20191021133803.jpg', 'Tampak Depan Depan 3'),
(15, '6347901IMG20191021133845.jpg', 'Tampak Jauh 1');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `paket_id` int(11) NOT NULL,
  `image` text NOT NULL,
  `alt_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `paket_id`, `image`, `alt_text`) VALUES
(1, 2, '3043924lulus.png', 'baru'),
(3, 1, '2771806logopmdk.jpg', 'paket123223'),
(4, 5, '550534IMG20191021132637.jpg', 'Family Room 1'),
(5, 5, '671417IMG20191021132657.jpg', 'Family Room 2'),
(6, 5, '4766122IMG20191021132731.jpg', 'Family Room 3'),
(7, 6, '9864106IMG20191021132905.jpg', 'Suite Room 1'),
(8, 6, '7849405IMG20191021132937.jpg', 'Suite Room 2'),
(9, 6, '6868647IMG20191021132731.jpg', 'Suite Room 3'),
(10, 7, '7490216IMG20191021133319.jpg', 'Ekonomi Room 1'),
(11, 7, '7976001IMG20191021133338.jpg', 'Ekonomi Room 2'),
(12, 7, '4861247IMG20191021133413.jpg', 'Ekonomi Room 3'),
(13, 8, '8207167IMG20191021133026.jpg', 'Single Room 1'),
(14, 8, '922466IMG20191021133100.jpg', 'Single Room 2'),
(15, 8, '1724552IMG20191021133124.jpg', 'Single Room 3');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `fasilities` text NOT NULL,
  `price` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `name`, `fasilities`, `price`) VALUES
(5, 'Family Room', 'AC, TV, WIFI, Lemari, Kuota 4 Orang', 325000),
(6, 'Suite Room', 'AC, TV, WIFI, Lemari, Kuota 2 Orang', 200000),
(7, 'Ekonomi Room', 'Kipas Angin, TV, WIFI, Kuota 2 Orang', 150000),
(8, 'Single Room', 'Kipas Angin, TV, WIFI, Kuota 1 Orang', 100000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'rezika', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galery`
--
ALTER TABLE `galery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galery`
--
ALTER TABLE `galery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
