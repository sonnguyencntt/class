-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2020 at 10:48 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `classroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `id_assign` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `time_deadline` date NOT NULL DEFAULT current_timestamp(),
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`id_assign`, `id_group`, `title`, `content`, `time_deadline`, `file`) VALUES
(1, 1, 'dfsdf', 'sdf', '2020-11-18', 'dfsdf'),
(2, 3, 'ádfsadf', 'ádfsdf', '2020-11-18', 'dfsd'),
(3, 0, '$title', '', '2020-11-18', 'sad'),
(4, 4, 'asd', '', '0000-00-00', './../../upload/JSON.png'),
(5, 4, 'sda', '', '0000-00-00', './../../upload/JSON.png'),
(6, 4, 'sda', '', '0000-00-00', './../../upload/JSON.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id_cmt` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_assign` int(11) NOT NULL,
  `comment` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id_cmt`, `id_login`, `id_group`, `id_assign`, `comment`) VALUES
(1, 1, 2, 2, 'sdfsdf'),
(2, 0, 2, 2, 'asdasd'),
(3, 0, 2, 2, 'asdasd'),
(4, 0, 2, 2, 'asd'),
(5, 0, 2, 2, 'asd'),
(6, 1, 3, 2, 'asd'),
(7, 1, 3, 2, 'asd'),
(8, 1, 3, 2, 'asda'),
(9, 1, 4, 2, 'asdas'),
(10, 1, 3, 2, 'asd'),
(11, 1, 1, 2, 'fsd'),
(12, 1, 1, 2, 'ad');

-- --------------------------------------------------------

--
-- Table structure for table `detail`
--

CREATE TABLE `detail` (
  `id_detail` int(11) NOT NULL,
  `id_group` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `id_assignment` int(11) NOT NULL,
  `content` text NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail`
--

INSERT INTO `detail` (`id_detail`, `id_group`, `id_login`, `id_assignment`, `content`, `file`) VALUES
(1, 3, 2, 2, 'dsf', '../../homework/Untitled.png'),
(2, 1, 2, 2, 'adasda ', '../../homework/gAME.docx'),
(3, 0, 2, 0, '', '../../homework/PART4.1.docx'),
(4, 0, 2, 0, '', '../../homework/PART4.1.docx'),
(5, 0, 2, 0, 'asd', '../../homework/PART4.1.docx'),
(6, 0, 2, 0, '', '../../homework/');

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `id_group` int(11) NOT NULL,
  `id_login` int(11) NOT NULL,
  `subject` text NOT NULL,
  `room` text NOT NULL,
  `code_group` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id_group`, `id_login`, `subject`, `room`, `code_group`) VALUES
(1, 0, '$subject', '$room', '$code_group'),
(3, 1, 'sdgk', 'dfgfdg', '3sdf'),
(4, 1, 'sadasd', 'asdasd', 'sdads'),
(7, 1, '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

CREATE TABLE `list` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_group` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`id`, `id_user`, `id_group`) VALUES
(1, 1, 3),
(2, 1, 3),
(3, 1, 3),
(4, 1, 3),
(5, 1, 2),
(6, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_login` int(11) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_login`, `name`, `password`, `email`) VALUES
(1, 'phuc', '123', 'phuc@gmail.com'),
(2, 'sơn', '123', 'son@gmail.com'),
(3, 'phuc1', '123', 'phuc2'),
(4, 'phuc1', '123', 'phuc2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD PRIMARY KEY (`id_assign`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id_cmt`);

--
-- Indexes for table `detail`
--
ALTER TABLE `detail`
  ADD PRIMARY KEY (`id_detail`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`id_group`);

--
-- Indexes for table `list`
--
ALTER TABLE `list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assignment`
--
ALTER TABLE `assignment`
  MODIFY `id_assign` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id_cmt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `detail`
--
ALTER TABLE `detail`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `id_group` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `list`
--
ALTER TABLE `list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
