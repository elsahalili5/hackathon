-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 26, 2023 at 01:15 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hackathon-project-db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cause`
--

CREATE TABLE `cause` (
  `id` int(30) NOT NULL,
  `name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cause`
--

INSERT INTO `cause` (`id`, `name`) VALUES
(17, 'Ocean'),
(18, 'Mountain'),
(19, 'Rivers'),
(20, 'lakes');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submission_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `name`, `email`, `message`, `submission_time`) VALUES
(1, 'Elsa', 'elsahalilii5@gmail.com', 'hello', '2023-11-26 09:22:50'),
(2, 'elsa', 'elsahalilii5@gmail.com', 'hello', '2023-11-26 09:31:58'),
(3, 'elsa', 'elsahalilii5@gmail.com', 'hello', '2023-11-26 10:02:02'),
(4, 'test', 'elsahalilii1@gmail.com', 'hello', '2023-11-26 11:49:31'),
(5, 'test', 'anjesagashi6@gmail.com', 'kuhjh', '2023-11-26 11:50:26');

-- --------------------------------------------------------

--
-- Table structure for table `donations`
--

CREATE TABLE `donations` (
  `id` int(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `cause` varchar(50) NOT NULL,
  `donation_reason` text NOT NULL,
  `amount` text NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `card_number` varchar(100) NOT NULL,
  `exp_date` varchar(100) NOT NULL,
  `cvc_code` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `donations`
--

INSERT INTO `donations` (`id`, `first_name`, `last_name`, `email`, `cause`, `donation_reason`, `amount`, `frequency`, `card_number`, `exp_date`, `cvc_code`) VALUES
(2, 'anjesa', 'gashi', 'anjesagashi6@gmail.com', '19', 'wefwef', '234', 'Fortnightly', '324', '234', '234234'),
(3, 'Elsa', 'Halili', 'elsahalilii5@gmail.com', '18', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '44', 'Fortnightly', '324234', '32423', '234'),
(4, 'John', 'Doe', 'john@test.com', '19', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '1000', 'Fortnightly', '324', '324234', '23432'),
(5, 'John', 'Doe', 'john@test.com', '18', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make', '999', 'weekly', '245', '234', '2342'),
(6, 'genita', 'halili', 'genitahaliili5@gmail.com', '18', 'lkdfjnskdnfksmndf,', '234', 'weekly', '89709879879', '09', '2432'),
(7, 'anjesa', 'test', 'john@test.com', '18', 'hdfjsdhfgmsndf', '234', 'weekly', '53453', '01', '21232'),
(8, 'John', 'Doe', 'john@test.com', '17', 'fhjskjdhf', '234', 'weekly', '24234', '11', '1213'),
(9, 'elsa', 'halili', 'elsahalilii5@gmail.com', '17', 'jfhsjkfh', '4143', 'once', '34235235', '11', '1112');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `email`, `password`, `user_type`) VALUES
(11, 'elsa', 'halili', 'elsahalilii5@gmail.com', '123123', 'admin'),
(16, 'anjesa', 'gashi', 'anjesagashi6@gmail.com', '123123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cause`
--
ALTER TABLE `cause`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donations`
--
ALTER TABLE `donations`
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
-- AUTO_INCREMENT for table `cause`
--
ALTER TABLE `cause`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `donations`
--
ALTER TABLE `donations`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
