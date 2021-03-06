-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 05, 2021 at 05:43 PM
-- Server version: 10.3.27-MariaDB-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fmakcpcu_invlabz`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_aboutus`
--

CREATE TABLE `about_aboutus` (
  `id` int(50) NOT NULL,
  `vision` longtext NOT NULL,
  `mission` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `about_aboutus`
--

INSERT INTO `about_aboutus` (`id`, `vision`, `mission`) VALUES
(1, 'Not just learn for today or tomorrow; learn for the future.', 'Curating learning content for new-age immersive & practical oriented learning.');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

CREATE TABLE `admin_users` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin@123#', '2021-03-03 13:06:38');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

CREATE TABLE `blog` (
  `id` int(50) NOT NULL,
  `title` text NOT NULL,
  `author` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `title`, `author`, `content`, `image`, `date`) VALUES
(17, 'What is Lorem Ipsum ?<br>&nbsp;', 'Agumentik', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s when an unknown printer took a galley of type and scrambled it to make a type specimen book it has....', 'images/resize_1.jpg', '2021-02-20 08:23:15'),
(18, 'Who created Lorem Ipsum?', 'Richard McClintock', 'Richard McClintock, a Latin scholar from Hampden-Sydney College, is credited with discovering the source behind the ubiquitous filler text. In seeing a sample of lorem ipsum, his interest was piqued by consectetur—a genuine, albeit rare, Latin word.', 'images/resize_9.jpg', '2021-02-20 08:22:11'),
(19, 'Test', 'Patan Amrulla Khan', 'Hello this a test blog', 'images/resize_desk.jpg', '2021-03-05 03:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `wnumber` varchar(255) NOT NULL,
  `fb` varchar(255) NOT NULL,
  `insta` varchar(255) NOT NULL,
  `twitter` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `address`, `pnumber`, `wnumber`, `fb`, `insta`, `twitter`, `link`, `email`) VALUES
(1, 'Plot 24B, Khalighat Colony, Vuda Colony Phase 1 back side, Vizianagaram, AP, India - 535003', '9063233996', '9063233996', 'fb.com', 'insta.com', 'twitter.com', 'linkedin.com', 'info@invlabz.com');

-- --------------------------------------------------------

--
-- Table structure for table `plan`
--

CREATE TABLE `plan` (
  `id` int(50) NOT NULL,
  `plan_name` varchar(50) NOT NULL,
  `selling_price` varchar(50) NOT NULL,
  `discounted_price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `plan`
--

INSERT INTO `plan` (`id`, `plan_name`, `selling_price`, `discounted_price`) VALUES
(2, 'basic', 'FREE', 'FREE'),
(3, 'individual', '1000', '500'),
(4, 'combo', '600', '300');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `designation` varchar(100) NOT NULL,
  `fb` varchar(100) NOT NULL,
  `twitter` varchar(100) NOT NULL,
  `linked` varchar(100) NOT NULL,
  `insta` varchar(100) NOT NULL,
  `photo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`, `designation`, `fb`, `twitter`, `linked`, `insta`, `photo`) VALUES
(2, 'Patan Amrulla Khan', 'Founder & CTO', 'https://www.facebook.com/pages/Bhumido-Technologies/1389110641317008', 'https://twitter.com/login?lang=en', 'https://www.linkedin.com/1', 'https://www.instagram.com/accounts/login/', 'khan.jpg'),
(5, 'K.V.V. Gangadhar Reddy', 'Co Founder & CMO', 'https://www.facebook.com/pages/Bhumido-Technologies/1389110641317008', 'https://twitter.com/login?lang=en', 'https://www.linkedin.com/', 'https://www.instagram.com/accounts/login/', 'reddy.jpg'),
(6, 'Bade Sravani Kumari', 'Creative Head & Marketing', 'https://www.facebook.com/pages/Bhumido-Technologies/1389110641317008', 'https://twitter.com/login?lang=en', 'https://www.linkedin.com/', 'https://www.instagram.com/accounts/login/', 'sravani.jpg'),
(7, 'Bade Srinivas', 'Well Wisher and Advisor', 'https://www.facebook.com/pages/Bhumido-Technologie...', 'https://www.facebook.com/pages/Bhumido-Technologie...', 'https://www.facebook.com/pages/Bhumido-Technologie...', 'https://www.facebook.com/pages/Bhumido-Technologie...', 'srinivas.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pphone` varchar(255) NOT NULL,
  `college` text NOT NULL,
  `plan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `email`, `pwd`, `phone`, `pname`, `pphone`, `college`, `plan`) VALUES
(1, 'Agumentik', 'agumentik@gmail.com', '123', '8340489809', 'Agumentik Group', '8340489803', 'other', 'basic'),
(2, 'gfg', 'gfgf@gmail.com', '123', '1235467896', 'gfgf', '1234567890', 'DPSKLNKNP, KNP', 'basic'),
(3, 'saumya rathor', 'saumyarathaur1996@gmail.com', 'admin@123', '8105815980', 'kailash', '8105815980', 'lakshya, mumbai ', 'indivdual'),
(4, 'karthik', 'karthikfixx@gmail.com', '8883013695', '08431734840', 'perumal', '8431734840', 'Abv collage, Jangaon ', 'indivdual'),
(5, 'saumya rathor', 'test@gmail.com', 'saumya@123', '9886958347', 'pappu', '56565656565', ' SFR COLLEGE, Sivakasi', 'indivdual'),
(6, 'karthik', 'karthikfixx@gmail.com12', 'test', '08431734840', 'test', '777777', 'RV PU College, Bangalore', ''),
(7, 'karthik', 'karthikfixx@gmail.com15', 'test', '08431734840', 'test', '777777', 'RV PU College, Bangalore', ''),
(8, 'karthik', 'karthikp196@gmail.com12', 'test', '09524279638', 'test', '7878976544', ' Gjc, tallarevu, Kakinada', ''),
(9, 'dcs', 'cds@dcdc.frv', '123456', '9999999999', 'hjhjh', '565656565', 'RV PU College, Bangalore', ''),
(10, 'John', 'test123@gmail.com', 'test', '123', 'test', '123456', 'Subodh public school, Jaipur', ''),
(11, 'Tamil selvan', 'karthikp196@gmail.com45', 'test', '08431734840', 'test', '78784878', 'Future Campus School , Kolkata', ''),
(12, 'priya', 'priya@gmail.com', '123456', '123456', 'test', '9999999999', 'ITL PUBLIC SCHOOL, DELHI', ''),
(13, 'ram', 'ram@example.com', 'test', '6546545645', 'testk g', '64564654', ' Ssp, Tirupathi', 'individual'),
(14, 'Tamil selvan', 'karthikp196@gmail.com4545', 'test', '08431734840', 'jay', '4545454545', ' SFR COLLEGE, Sivakasi', 'combo'),
(15, 'karthik', 'test1234@gmail.com', 'test', '8431734840', 'test', '65465456', ' SFR COLLEGE, Sivakasi', 'basic'),
(16, 'soni', 'fdfd@ghgh.vvg', '123456', '98989898989', 'ghgjhh', '6565656565', 'DPSKLNKNP, KNP', 'individual'),
(17, 'dde1', 'dcd@dcdc.dcd', '454545', '4545454545', 'dd', '4545454545', 'H L V N, Kannauj', 'basic');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_aboutus`
--
ALTER TABLE `about_aboutus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_users`
--
ALTER TABLE `admin_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan`
--
ALTER TABLE `plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
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
-- AUTO_INCREMENT for table `about_aboutus`
--
ALTER TABLE `about_aboutus`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admin_users`
--
ALTER TABLE `admin_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blog`
--
ALTER TABLE `blog`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `plan`
--
ALTER TABLE `plan`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
