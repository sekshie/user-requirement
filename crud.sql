-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 09:36 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.5.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `tripinfo`
--

CREATE TABLE `tripinfo` (
  `tripid` int(100) NOT NULL,
  `roadtrip` varchar(100) NOT NULL,
  `departure` date NOT NULL,
  `arrival` date NOT NULL,
  `destination` varchar(50) NOT NULL,
  `price` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tripinfo`
--

INSERT INTO `tripinfo` (`tripid`, `roadtrip`, `departure`, `arrival`, `destination`, `price`) VALUES
(0, 'Singles Roadtrips', '2019-02-09', '2019-02-21', 'Siargao', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `contact` varchar(30) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `address` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `tripname` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_id`, `user_name`, `email_address`, `contact`, `gender`, `address`, `birthday`, `tripname`) VALUES
(31, 'Shielaaa', 'smacospag@gmail.com', '09095744349', 'Female', 'Rosario', '1999-04-09', 'Random Roadtrips'),
(32, 'Shillsssss', 'shills@gmail.com', '09215672828', 'Male', 'Eastwood', '1998-09-15', 'Retro Roadtrips'),
(34, 'Shiela Mae', 'shielamae@gmail.com', '09072252036', 'Female', 'Makati', '1999-04-09', 'Singles Roadtrips'),
(35, 'Sir Jeff', 'jeff@experience.ph', '09072252036', 'Male', 'Antipolo', '1989-02-09', 'Random RoadTrips'),
(41, 'Shielaaaaaaaaaaaaaaaaa', 'smacospag@gmail.com', '09451191633', 'Female', 'Rosario', '2019-02-09', 'Special Roadtrips'),
(37, 'Crystal gale', 'gale@gmail.com', '09072252036', 'Female', 'IloIlo', '1999-04-09', 'Random Outings');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `mail` text NOT NULL,
  `password` text NOT NULL,
  `trip` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `mail`, `password`, `trip`) VALUES
(8, 'Shiela', 'Macospag', 'tlymrsg@gmail.com', 'cf1a22da5db967fb3a46c687dbd08755', ''),
(10, 'Crystal ', 'Gale', 'crystalgale@gmail.com', '7bae1e82030612c6fe455161fca15d67', ''),
(11, 'Gian', 'Gallegos', 'gian@gmail.com', '7066baef022a1cd33fd6ff96befaef50', ''),
(12, 'Jeffrey Patrick', 'Lui', 'jeffrey@gmail.com', 'dc2af307c55523ce42701dbe43880d35', ''),
(19, 'Telay', 'Marasigan', 'smacospag@gmail.com', 'cf1a22da5db967fb3a46c687dbd08755', ''),
(21, 'Shiela', 'shie', 'shiela@gmail.com', 'cf1a22da5db967fb3a46c687dbd08755', ''),
(22, 'RavenMae', 'Tagudin', 'nevar@gmail.com', '5e718c36b8a3e65b05659736a034c48e', '');

-- --------------------------------------------------------

--
-- Table structure for table `usertrips`
--

CREATE TABLE `usertrips` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `tripid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userinfo`
--
ALTER TABLE `userinfo`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertrips`
--
ALTER TABLE `usertrips`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `userinfo`
--
ALTER TABLE `userinfo`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
