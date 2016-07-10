-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2016 at 03:25 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bulitfactory_php`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `password` varchar(32) NOT NULL,
  `avatar` blob NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`, `created_at`) VALUES
(1, 'Liliya', 'lilia_pandova@abv.bg', '12345', '', '2016-06-03 18:03:14'),
(3, 'Liliya', 'lir_66@abv.bg', 'qwerty', '', '2016-06-03 18:08:17'),
(4, 'Liliya', 'lika_66@abv.bg', '827ccb0eea8a706c4c34a16891f84e7b', '', '2016-06-03 18:15:49'),
(5, 'Liliya', 'lilia_pandova@abv.bg11', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', '2016-06-03 18:22:51'),
(7, 'Liliya', 'lika_66@abv.bg121', '040b7cf4a55014e185813e0644502ea9', '', '2016-06-03 18:29:14'),
(8, 'Liliya', 'lilia_pandova@abv.bg435', '827ccb0eea8a706c4c34a16891f84e7b', '', '2016-06-03 18:34:01'),
(9, 'Liliya', 'lika_66@abv.bg125', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', '2016-06-12 04:56:23'),
(10, 'Liliya', 'lika_661@abv.bg', 'd8578edf8458ce06fbc5bb76a58c5ca4', '', '2016-07-10 09:51:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
