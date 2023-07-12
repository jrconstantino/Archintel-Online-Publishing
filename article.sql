-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 12, 2023 at 06:35 PM
-- Server version: 10.6.14-MariaDB-cll-lve
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u955852768_archintel`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `a_id` int(5) NOT NULL,
  `image` text NOT NULL,
  `title` text NOT NULL,
  `date` text NOT NULL,
  `content` mediumtext NOT NULL,
  `published_by` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `article`
--

INSERT INTO `article` (`a_id`, `image`, `title`, `date`, `content`, `published_by`) VALUES
(10, '1.jpg', 'Zero Trust & Shifting From Compliance-Based Cybersecurity', '07-11-2023', 'In a new video interview with Executive Mosaic, Aaron Weis, managing director of technology at Google Public Sector, shared the technologies he thinks could be vital in advancing #modernization initiatives across the government landscape.\r\n#KnowWhatYouNeedToKnow here: https://lnkd.in/gTs296_W\r\n\r\nIn a new video interview with Executive Mosaic, Aaron Weis, managing director of technology at Google Public Sector, shared the technologies he thinks could be vital in advancing #modernization initiatives across the government landscape.\r\n#KnowWhatYouNeedToKnow here: https://lnkd.in/gTs296_W', 'Justin Constantino'),
(11, '2.jpg', 'How the DOD Is Countering Chinese Disruption in the Space Domain, According to Top Officials', '07-11-2023', 'Ben McNeal, director of U.S. Air Force and Space Force strategy and sales at Red Hat, shared that one of the top priorities the U.S. must have for shortening the kill chain is doubling down on #quantum development.\r\n#KnowWhatYouNeedToKnow here: https://lnkd.in/gBiKNnsa', 'Justin Constantino'),
(12, '3.jpg', 'Rear Adm. Fred Pyle Highlights Ongoing Navy Surface Warfare Initiatives', '07-11-2023', '“From a Navy leadership standpoint – both uniform and civilian – we are battle minded. We are warfighting-focused, and we have a sense of urgency,” Rear Adm. Fred Pyle, director of the US Navy’s Surface Warfare Division, N96, said during his keynote address at the Potomac Officers Club’s 2023 Navy Summit.\r\n#KnowWhatYouNeedToKnow here: https://lnkd.in/g5ZaK-kJ', 'Justin Constantino'),
(13, '4.jpg', 'CONSTRUCTION AND DESIGN - ARCHINTEL', '07-12-2023', 'Our custom algorithms capture the most value for your time and investment by surfacing stories in your industry with the highest #media potential. Our new data sources are yielding richer and more engaging content than ever before.\r\n#KnowWhatYouNeedToKnow here: https://lnkd.in/g4WspZNe\r\n', 'Justin Constantino'),
(28, '5.jpg', 'CRDF Global’s Tina Dolph on Fortifying Global Security & Preparedness', '07-13-2023', 'Tina Dolph, president and COO for CRDF Global, spoke with Executive Mosaic about how her organization is working to harness key insights to enhance global #security and create a more safe and sustainable future.\r\n#KnowWhatYouNeedToKnow here: https://lnkd.in/gEtm5PJ3', 'Archintel Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`a_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `a_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
