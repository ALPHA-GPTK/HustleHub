-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2021 at 08:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `freelance_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `freelance_gig`
--

CREATE TABLE `freelance_gig` (
  `gigs_id` int(11) NOT NULL,
  `gigs_service` varchar(50) NOT NULL,
  `gigs_description` text NOT NULL,
  `gigs_banner` varchar(100) NOT NULL,
  `gigs_price` int(50) NOT NULL,
  `gigs_rating` int(5) DEFAULT NULL,
  `gigs_creation` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `user_id` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelance_gig`
--

INSERT INTO `freelance_gig` (`gigs_id`, `gigs_service`, `gigs_description`, `gigs_banner`, `gigs_price`, `gigs_rating`, `gigs_creation`, `user_id`) VALUES
(1, 'carpentry', 'Lorem ipsum dolor sit time', './assets/img/pexels-picography-4776.jpg', 75, NULL, '2021-04-05 06:20:31', 1),
(2, 'graphic design', 'consectetur adipiscing elit', './assets/img/pexels-thomas-vanhaecht-92129.jpg', 54, NULL, '2021-04-04 17:01:43', 1),
(3, 'full-stack development', 'Morbi nisl sapien', './assets/img/pexels-david-bartus-963278.jpg', 86, NULL, '2021-04-05 06:05:02', 1),
(4, 'video editing', 'lacinia eget sodales in', './assets/img/pexels-fiona-art-3631430.jpg', 90, NULL, '2021-04-04 17:02:22', 1),
(5, 'motion design', 'hendrerit vel dui', './assets/img/pexels-fwstudio-122458.jpg', 30, NULL, '2021-04-05 06:05:29', 1),
(6, 'graphic design', 'Mauris facilisis diam', './assets/img/pexels-jakub-novacek-924824.jpg', 90, NULL, '2021-04-04 17:07:51', 2),
(7, 'illustration', 'nec nibh ultrices', './assets/img/pexels-magda-ehlers-1279813.jpg', 98, NULL, '2021-04-04 17:08:11', 2),
(8, 'motion design', 'non convallis arcu vestibulum', './assets/img/pexels-min-an-962312.jpg', 78, NULL, '2021-04-05 06:05:07', 2),
(9, 'copywriting', 'Proin id purus eu est consectetur', './assets/img/pexels-pixabay-158826.jpg', 67, NULL, '2021-04-04 17:10:11', 2),
(10, 'video editing', 'ullamcorper porta vel justo', './assets/img/pexels-toa-heftiba-şinca-1194420.jpg', 85, NULL, '2021-04-04 17:10:49', 2),
(11, 'data entry', 'Pellentesque id dolor', './assets/img/pexels-pixabay-163811.jpg', 89, NULL, '2021-04-04 17:14:31', 3),
(12, 'search engine optimization', 'quis leo imperdiet', './assets/img/pexels-pixabay-207300.jpg', 83, NULL, '2021-04-04 17:15:07', 3),
(13, 'full-stack development', 'Proin gravida risus', './assets/img/pexels-pixabay-210158.jpg', 95, NULL, '2021-04-05 06:04:59', 3),
(14, 'copywriting', 'a tempor maximus', './assets/img/pexels-pixabay-247676.jpg', 45, NULL, '2021-04-04 17:16:27', 3),
(15, 'computer repair', 'Proin semper accumsan', './assets/img/pexels-sevenstorm-juhaszimrus-891030.jpg', 54, NULL, '2021-04-04 17:16:55', 3),
(16, 'copywriting', 'ipsum quis ultrices', './assets/img/pexels-steve-johnson-1704119.jpg', 78, NULL, '2021-04-04 17:19:11', 4),
(17, 'graphic design', 'Vivamus consectetur', './assets/img/pexels-w-w-889839.jpg', 69, NULL, '2021-04-05 06:05:09', 4),
(18, 'full-stack development', 'lacinia augue', './assets/img/pexels-zaksheuskaya-1568607.jpg', 89, NULL, '2021-04-05 06:05:46', 4),
(19, 'illustration', 'Cras ut sagittis velit', './assets/img/pexels-zaksheuskaya-1616403.jpg', 83, NULL, '2021-04-04 17:20:27', 4),
(20, 'data entry', 'Fusce iaculis facilisis', './assets/img/pexels-pixabay-459799.jpg', 96, NULL, '2021-04-04 17:22:00', 4);

-- --------------------------------------------------------

--
-- Table structure for table `freelance_info`
--

CREATE TABLE `freelance_info` (
  `freelance_id` int(11) NOT NULL,
  `freelance_fName` varchar(30) NOT NULL,
  `freelance_lName` varchar(30) NOT NULL,
  `freelance_username` varchar(30) NOT NULL,
  `freelance_email` varchar(50) NOT NULL,
  `freelance_password` varchar(100) NOT NULL,
  `freelance_passwordcode` varchar(100) DEFAULT NULL,
  `freelance_about` longtext DEFAULT NULL,
  `freelance_path` varchar(100) DEFAULT NULL,
  `freelance_email_validation` int(2) NOT NULL DEFAULT 0,
  `freelance_email_code` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelance_info`
--

INSERT INTO `freelance_info` (`freelance_id`, `freelance_fName`, `freelance_lName`, `freelance_username`, `freelance_email`, `freelance_password`, `freelance_passwordcode`, `freelance_about`, `freelance_path`, `freelance_email_validation`, `freelance_email_code`) VALUES
(1, 'John Christian', 'Garon', 'CWG.Ga', 'johnchristianmgaron@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, './assets/img/garon-pic.jpg', 1, '22312ffdefd4d830173b159ea62b31a592e498e4'),
(2, 'Katherine Therese Marie', 'Mariñas', 'Kathorsi', 'katherinemrns@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, './assets/img/marinas-pic.jpg', 1, 'cd49d83209a8355ecaed1c71e8e331f740930306'),
(3, 'Prince Carl', 'Velasco', 'Prynstag', 'princevelasco16@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, './assets/img/velasco-pic.jpg', 1, '2d74389ca4f1b596876b4e109143d70e4466657e'),
(4, 'Tricia Dorine', 'Relox', '3cia', 'trcrlx@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', NULL, NULL, './assets/img/relox-pic.jpg', 1, '65b0647683c6f91a7ffd5c5e2f7c98ad0e67cba7');

-- --------------------------------------------------------

--
-- Table structure for table `freelance_service`
--

CREATE TABLE `freelance_service` (
  `service_id` int(11) NOT NULL,
  `service_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `freelance_service`
--

INSERT INTO `freelance_service` (`service_id`, `service_name`) VALUES
(11, 'Carpentry'),
(1, 'Computer Repair'),
(6, 'Copywriting'),
(8, 'Data Entry'),
(2, 'Full-stack Development'),
(3, 'Graphic Design'),
(7, 'Illustration'),
(5, 'Motion Design'),
(9, 'Search Engine Optimization'),
(4, 'Video Editing'),
(10, 'Wood Working');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `freelance_gig`
--
ALTER TABLE `freelance_gig`
  ADD PRIMARY KEY (`gigs_id`);

--
-- Indexes for table `freelance_info`
--
ALTER TABLE `freelance_info`
  ADD PRIMARY KEY (`freelance_id`);

--
-- Indexes for table `freelance_service`
--
ALTER TABLE `freelance_service`
  ADD PRIMARY KEY (`service_id`),
  ADD UNIQUE KEY `service_name` (`service_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `freelance_gig`
--
ALTER TABLE `freelance_gig`
  MODIFY `gigs_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `freelance_info`
--
ALTER TABLE `freelance_info`
  MODIFY `freelance_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `freelance_service`
--
ALTER TABLE `freelance_service`
  MODIFY `service_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
