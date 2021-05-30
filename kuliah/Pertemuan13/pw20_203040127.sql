-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 18, 2021 at 06:49 PM
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
  `gambar` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nrp` varchar(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `gambar`, `nama`, `nrp`, `email`, `jurusan`) VALUES
(14, 'opik.jpg', 'Muhamad Taufik Mulyadi', '203040142', 'Muhamadtaufikm10@gmail.com', 'Teknik Informatika'),
(15, 'galih.jpeg', 'Linggih Kusuma Dilagga', '203040174', 'Galihk250@gmail.com', 'Teknik Informatika'),
(17, 'adi.jpg', 'Adinata Kusuma Wardani', '203040158', 'adinata206082@gmail.com', 'Teknik Informatika'),
(18, 'uyuy.jpeg', 'Andi Rahman Hakim', '203040122', 'Acilliitle166@gmail.com', 'Teknik Informatika'),
(26, 'riko.jpeg', 'Ericko Timur Apandi', '203040127', 'erickotimur2002@gmail.com', 'Teknik Informatika');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345'),
(2, 'Ericko', '54321'),
(3, 'nana', '$2y$10$/GLuMyNXvh8nydt/xrKHYeRFzdO10SufswWQfM3bimqiY58JrPHeS'),
(4, 'nasi', '$2y$10$Sn0nrXsLJn549JNNymrppOr/Zg4NkQdf94EWO/H1QwCHEu3.X2UhW');

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
-- Indexes for table `user`
--
ALTER TABLE `user`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
