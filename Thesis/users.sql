-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2019 at 02:03 PM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(50) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phonenumber` int(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `phonenumber`, `password`) VALUES
(1, 'Berti', 'Shkoza', 'bertishkoza@gmail.com', 695452632, 'berti123'),
(2, 'Berti', 'Shkoza', 'bertishkoza@gmail.com', 695452632, '070aaba5ccb47dfca63d1750865e4ba264c47bb9'),
(3, 'Mondi', 'Shtupa', 'mondishtupa@yahoo.com', 692044552, '02c59ee52eb8f0b8ac631e9edc5d8be787088073'),
(4, 'Mondi', 'Shtupa', 'mondishtupa@yahoo.com', 692044552, '02c59ee52eb8f0b8ac631e9edc5d8be787088073'),
(5, 'alma', 'jakupi', 'almajakupi@gmail.com', 694574652, '5365f67aa8238326cbcc0aec46452b6a6e5ffbb6'),
(6, 'ersa', 'lika', 'ersalika@gmail.com', 69784512, '473e22964b52b95754319413adce8947a2335a5d'),
(7, 'aitena', 'lame', 'aitenalame@gmail.com', 67854592, '22b766ff1a408ff64959df71ea634a02e913ff93'),
(8, 'keli', 'korg', 'kelikorg@gmail.com', 67854512, 'e9cce8ff2e6a8579dbcee3959ae06695ea4517d0'),
(9, 'rei', 'bami', 'reibami@gmail.com', 695214652, '0decd26acb43b0153a619d8594e3aa2d7d290707'),
(10, 'monika', 'mihal', 'monikamihal@gmail.com', 695874562, '6e5648ace6c30c97b75b03ccc2380278c23a55c2'),
(11, 'manjola', 'keci', 'manjolakeci@yahoo.com', 681202001, 'af5e32f35954ca10fb6696ff91ae25bcc1bfa880'),
(12, 'koli', 'malo', 'kolimalo@yahoo.com', 685495632, 'a2658b4b5706b5e82250ce46a622434ca6c1f2da'),
(13, 'esi', 'kili', 'esikili@gmail.com', 698545147, '9b7d99adccd0e2347f3f6d26f2c7ddd85cc2a957'),
(14, 'esi', 'kili', 'esikili@gmail.com', 698545147, '9b7d99adccd0e2347f3f6d26f2c7ddd85cc2a957'),
(15, 'mondi', 'kici', 'mondikici@gmail.com', 673265987, '02c59ee52eb8f0b8ac631e9edc5d8be787088073'),
(16, 'test', 'tester', 'test@test.com', 695874521, 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3'),
(17, 'anda', 'hysa', 'andahysa@gmail.com', 698574563, '737966d418b3963d0150e1c0fcb0ba58f0a30565'),
(18, 'esma', 'salahmuhamedsalehabdou', 'esmasalah@gmail.com', 66660666, '4ef5fa8985687453160b065d16cb6a59d53d64ce'),
(19, 'test', 'tester', 'test@test.com', 695874521, '40bd001563085fc35165329ea1ff5c5ecbdbbeef');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
