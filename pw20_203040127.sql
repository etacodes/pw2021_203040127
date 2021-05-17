-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 12:46 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw20_203040127`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `Judul` varchar(50) NOT NULL,
  `Pengarang` varchar(50) NOT NULL,
  `Terbit` varchar(50) NOT NULL,
  `Dimensi` varchar(50) NOT NULL,
  `ISBN` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `img`, `Judul`, `Pengarang`, `Terbit`, `Dimensi`, `ISBN`) VALUES
(1, '1.png', 'Awaken The Giant within', 'Anthony Robbins', '1992', '654 halaman', '-'),
(2, '2.png', 'Think and Grow Rich', 'Napoleon Hill', '1937', '430 Halaman', '-'),
(3, '3.png', 'The 7 Habit of Highly Effective people', 'Stevem R.Covey', '1898', '-', '-'),
(4, '4.png', 'The Magic of Thinking Big', 'David J.Schawartz', '-', '-', '-'),
(5, '5.png', 'How To Win Friends and Influence', 'Dale Carnegie', '-', '-', '-'),
(6, '6.png', 'The Power of Positive Thinking', 'Norman Vincent Peale', '-', '-', '-'),
(7, '7.png', 'The Science of Getting Rich', 'Wallace D.Wattles', '-', '-', '-'),
(8, '8.png', 'As A Man Thinketh', 'James Allen', '1903', '-', '-'),
(9, '9.png', 'Outliers The Story of Success', 'Malcolm Gladwell', '2008', '-', '-'),
(10, '10.png', 'Rich Dad Poor Dad', 'Robert Kiyosaki', '-', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `img`, `nrp`, `nama`, `email`, `jurusan`) VALUES
(11, 'adi.jpg', '203040158', 'Adinata Kusuma Wardani', 'adinata206082@gmail.com', 'Teknik Informatika'),
(12, 'riko.jpeg', '203040127', 'Ericko Timur Apandi', 'erickotimur2002@gmail.com', 'Teknik Informatika'),
(13, 'uyuy.jpeg', '203040122', 'Andi Rahman Hakim', 'Acilliitle166@gmail.com', 'Teknik Informatika'),
(14, 'opik.jpg', '203040142', 'Muhamad Taufik Mulyadi', 'Muhamadtaufikm10@gmail.com', 'Teknik Informatika'),
(15, 'galih.jpeg', '203040174', 'Linggih Kusuma Dilagga', 'Galihk250@gmail.com', 'Teknik Informatika');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
