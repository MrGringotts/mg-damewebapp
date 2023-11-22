-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2022 at 03:30 PM
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
-- Database: `dame`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `date` date DEFAULT current_timestamp(),
  `name` varchar(255) NOT NULL,
  `prev_school` varchar(255) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `test_date` text NOT NULL,
  `school_year` text NOT NULL,
  `semester` text NOT NULL,
  `school_ability_score` varchar(100) NOT NULL,
  `apt_verbal_score` varchar(100) NOT NULL,
  `apt_numerical_score` varchar(100) NOT NULL,
  `school_ability_percentile` varchar(100) NOT NULL,
  `apt_verbal_percentile` varchar(100) NOT NULL,
  `apt_numerical_percentile` varchar(100) NOT NULL,
  `school_ability_sn` text NOT NULL,
  `apt_verbal_sn` text NOT NULL,
  `apt_numerical_sn` text NOT NULL,
  `total_score` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `date`, `name`, `prev_school`, `gender`, `test_date`, `school_year`, `semester`, `school_ability_score`, `apt_verbal_score`, `apt_numerical_score`, `school_ability_percentile`, `apt_verbal_percentile`, `apt_numerical_percentile`, `school_ability_sn`, `apt_verbal_sn`, `apt_numerical_sn`, `total_score`) VALUES
(1, NULL, 'lowelinpascual', 'Notre Dame of Dadiangas University ', 'Male', '', '2023', '2', '70', '28', '34', '96', '40', '80', '9', '4', '7', '132'),
(2, NULL, 'lowelinpascual2', 'Notre Dame of Dadiangas University ', 'Female', '', '2023-2024', '1', '69', '20', '38', '95', '25', '97', '8', '4', '9', '127'),
(10, '2022-03-20', 'karlin aguana', 'Notre Dame of Dadiangas University ', 'Male', '', '2022-2023', '1', '71', '35', '40', '97', '60', '99', '9', '5', '9', '146'),
(11, '2022-03-27', 'Ejan Navarette', 'Notre Dame University ', 'Male', '', '2022-2023', '2', '71', '35', '28', '97', '60', '60', '9', '5', '5', '134'),
(13, '2022-03-27', 'Mark bermudo', 'Notre Dame University ', 'MALE', '2022-06-15', '2022-2023', '1', '71', '23', '40', '97', '30', '99', '9', '4', '9', '134'),
(15, '2022-03-28', 'KARLIN', 'NOTRE DAME OF DADIANGAS UNIVERSITY ', 'FEMALE', '2022-03-08', '2022-2023', '2', '70', '23', '28', '96', '30', '60', '9', '4', '5', '121'),
(16, '2022-03-29', 'LEXUS ERESE', 'NOTRE DAME OF DADIANGAS UNIVERSITY ', 'MALE', '2022-01-26', '2022-2023', '1', '71', '35', '28', '97', '60', '60', '9', '5', '5', '134');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `created_date`) VALUES
(1, 'test', 'shin@gmail.com', '098f6bcd4621d373cade4e832627b4f6', '2022-03-17 17:15:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
