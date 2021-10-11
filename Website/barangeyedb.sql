-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 11, 2021 at 04:17 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `barangeyedb`
--
CREATE DATABASE IF NOT EXISTS `barangeyedb` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `barangeyedb`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

DROP TABLE IF EXISTS `account`;
CREATE TABLE `account` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `resident_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`id`, `username`, `email`, `password`, `user_type`, `resident_id`) VALUES
(1, 'catherine-admin', '', 'admin123', 'admin', 1),
(2, 'iamleooon', '', 'leon123', 'user', 2),
(3, 'alivia_me', '', 'alivia123', 'user', 3),
(4, 'naveah08', '', 'naveah123', 'user', 4),
(5, 'henrii77', '', 'henri123', 'user', 5),
(6, 'jadon-admin', '', 'jadon123', 'admin', 6),
(7, 'lindsyy_uu', '', 'lindsy123', 'user', 7),
(8, 'roanna', '', 'roanna123', 'user', 8),
(9, 'lan_admin', '', 'nolan123', 'admin', 9),
(10, 'maddy_ii', '', 'maddy123', 'user', 10),
(11, 'steph', '', 'stephen123', 'user', 11),
(12, 'jam_ri', '', 'jamari123', 'user', 12),
(13, 'llana_90', '', 'illana123', 'user', 13),
(14, 'letty011', '', 'loretta123', 'user', 14),
(15, 'talliiaaa00', '', 'talia123', 'user', 15),
(16, 'myra', '', 'myra123', 'user', 16),
(17, 'austy_21', '', 'austine123', 'user', 17),
(18, 'cynthia', '', 'cynthia123', 'user', 18),
(19, 'Frediiii17', '', 'freddie123', 'user', 19),
(20, 'zulieka01', '', 'zulieka123', 'user', 20),
(21, 'temp01', '', 'tmppass123', 'user', 21),
(22, 'temp02', '', 'tmppassword123', 'user', 22),
(23, 'lena30', '', 'lena123', 'user', 23),
(24, 'james-admin', '', 'james123', 'admin', 24),
(25, 'rach-admin', '', 'rachel123', 'user', 25),
(26, 'luvina_05', '', 'luvina123', 'user', 26),
(27, 'zapopa', '', 'zapopa123', 'user', 27),
(28, 'sadiie22', '', 'saddie123', 'user', 28),
(29, '', '', '', '', 29),
(30, '', '', '', '', 30);

-- --------------------------------------------------------

--
-- Table structure for table `certificate`
--

DROP TABLE IF EXISTS `certificate`;
CREATE TABLE `certificate` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_of_year` int(10) UNSIGNED NOT NULL,
  `category` varchar(50) NOT NULL,
  `message` varchar(200) NOT NULL,
  `reply` varchar(200) NOT NULL,
  `status` varchar(55) NOT NULL,
  `date_release` date NOT NULL,
  `date_claimed` date NOT NULL,
  `account_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `certificate`
--

INSERT INTO `certificate` (`id`, `no_of_year`, `category`, `message`, `reply`, `status`, `date_release`, `date_claimed`, `account_id`) VALUES
(1, 10, 'Cedula', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue sapien, iaculis vel placerat at, tristique vitae eros. Sed sagittis velit euismod metus dapibus placerat. Donec viverra elementum ant', 'Cras interdum vulputate ipsum, quis placerat turpis tempor eget. Proin orci sem, tincidunt non euismod ac, lacinia ut ante. Integer quis interdum ligula. Morbi quis ligula nisl. Praesent urna nisi, co', 'On-Going', '2021-10-08', '2021-10-09', NULL),
(2, 12, 'Barangay ID', 'Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus nisl lacus, vestibulum id pellentesque sed, porttitor a metus. Duis rutrum viverra augue id laoreet. C', 'Proin nec est et est maximus tempus vitae eget sapien. Etiam orci lorem, pharetra at quam in, laoreet dapibus urna. Integer magna arcu, porttitor sit amet tempor ut, bibendum id lacus. Maecenas et lac', 'Approved', '2021-10-22', '2021-10-09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

DROP TABLE IF EXISTS `complain`;
CREATE TABLE `complain` (
  `id` int(10) UNSIGNED NOT NULL,
  `case_no` int(11) NOT NULL,
  `complainant` varchar(50) NOT NULL,
  `c_address` varchar(100) NOT NULL,
  `respondent` varchar(50) NOT NULL,
  `r_address` varchar(100) NOT NULL,
  `complain` text NOT NULL,
  `status` varchar(50) NOT NULL,
  `date_time` datetime NOT NULL,
  `account_id` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `case_no`, `complainant`, `c_address`, `respondent`, `r_address`, `complain`, `status`, `date_time`, `account_id`) VALUES
(1, 0, 'Nevaeh Castro', '74 Insurance St.', 'Luvina Mangsinco', '37 G.B. Santos St', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed augue sapien, iaculis vel placerat at, tristique vitae eros. Sed sagittis velit euismod metus dapibus placerat. Donec viverra elementum ante nec mollis. Nunc tincidunt at diam vel sollicitudin. Aliquam ut vehicula tellus, eget vulputate diam. ', 'Solved', '2021-10-09 15:39:07', 4),
(2, 1234, 'Sadie Uysiuseng', '286 Del Monte', 'Jamari Ongpin', '1180 Jorenz St.', 'Suspendisse sed justo a neque fermentum molestie non id erat. Morbi dapibus a urna ac cursus. Phasellus pulvinar dui in ex lacinia, at interdum sem scelerisque. Aliquam et lectus quis ex maximus rutrum.', 'On-Going', '2021-10-09 15:42:32', 28),
(3, 123123, 'Cynthia Talon', '88 Malaya St.', 'Freddie Chio', '28/F Sedco', 'In metus metus, condimentum a nulla in, malesuada mollis elit. Quisque a sollicitudin eros. Donec dapibus aliquet eros a dignissim. Fusce hendrerit eu ipsum nec tincidunt. ', 'Solved', '2021-10-10 21:26:06', 18);

-- --------------------------------------------------------

--
-- Table structure for table `covid_report`
--

DROP TABLE IF EXISTS `covid_report`;
CREATE TABLE `covid_report` (
  `id` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `quarantine_status` varchar(100) NOT NULL,
  `active_case` int(11) NOT NULL,
  `recovered_case` int(11) NOT NULL,
  `deceased_case` int(11) NOT NULL,
  `total_case` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `covid_report`
--

INSERT INTO `covid_report` (`id`, `start_date`, `end_date`, `quarantine_status`, `active_case`, `recovered_case`, `deceased_case`, `total_case`) VALUES
(2, '2021-09-08', '2021-09-21', 'General Community Quarantine', 340, 600, 11, 951);

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

DROP TABLE IF EXISTS `image`;
CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `profile_img` varchar(10000) NOT NULL,
  `resident_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`id`, `profile_img`, `resident_id`) VALUES
(1, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 1),
(2, 'http://bagocity.gov.ph/wp-content/uploads/2018/09/sagasa-sk.jpg', 2),
(3, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 3),
(4, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 4),
(5, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 5),
(6, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 6),
(7, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 7),
(8, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 8),
(9, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 9),
(10, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 10),
(11, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 11),
(12, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 12),
(13, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 13),
(14, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 14),
(15, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 15),
(16, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 16),
(17, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 17),
(18, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 18),
(19, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 19),
(20, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 20),
(21, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 21),
(22, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 22),
(23, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 23),
(24, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 24),
(25, 'http://dreamvilla.life/wp-content/uploads/2017/07/dummy-profile-pic.png', 25),
(26, '', 26),
(27, '', 27),
(28, '', 28),
(29, '', 29),
(30, '', 30);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `category` varchar(100) NOT NULL,
  `date_time` datetime NOT NULL,
  `subject` varchar(100) NOT NULL,
  `content` varchar(1000) NOT NULL,
  `likes` int(11) NOT NULL,
  `comments` int(11) NOT NULL,
  `post_img` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `category`, `date_time`, `subject`, `content`, `likes`, `comments`, `post_img`) VALUES
(3, 'Announcement', '2021-10-03 08:45:38', 'PhilSys registration', 'The Philippine Statistics Authority thru its PhilSys registration centers are now catering children from 5 to 14 years olds provided that they are accompanied by their parents.\r\n', 102, 29, 'https://scontent.fmnl30-1.fna.fbcdn.net/v/t1.6435-9/233090866_4227666933953373_161611622837959326_n.jpg?_nc_cat=105&ccb=1-5&_nc_sid=8bfeb9&_nc_ohc=DVnhcsb0U68AX-nVH2O&_nc_ht=scontent.fmnl30-1.fna&oh=c62c9420eb4c493eb73aa0384d7b754b&oe=617DC2FE'),
(4, 'COVID-19 Notice', '2021-10-03 08:45:38', 'Vaccine Schedule', 'Maayong Hapon sa Tanan.\nAmon lang KLARUHON nga ang naka schedule sa vaccine bwas nga adlaw amo lang ang GINTAWGAN KAG NAG SUGOT NGA MAGPABAKUNA. Damo pa ang nag submit sang forms nga naka linya para sa bakuna. Aton hulaton ang tawag para sa inyo schedule. Ang sa mga wala ID Indi mag problema kay may ara taga Barangay pareho sang aton mga BHW ang maga assist kag magapamatuod kag mag kilala nga ikaw gid Ina nga persona sa listahan.\n</br>\nMadamo gid nga salamat.', 20, 2, ''),
(10, 'Announcement', '2021-10-04 13:29:52', 'BACIWAD Water Advisory', 'Afftected Area: Brgy. Ma-ao\n<br>\nTemporary Water Interruption this coming FRIDAY (April 16, 2021)\nfrom 8:00am to 10:00pm due to maintenance schedule to improve the quality of our service.\n<br>\nWe advice to please stock/save water to avoid inconvenience\n<br>\nThank You', 0, 0, 'https://scontent.fmnl30-2.fna.fbcdn.net/v/t1.6435-9/173409117_294652838943492_3014146616574717096_n.jpg?_nc_cat=104&ccb=1-5&_nc_sid=730e14&_nc_ohc=DZJtizPvyrAAX-KDlWI&_nc_ht=scontent.fmnl30-2.fna&oh=cad45883eed3379d35decd9079bfb7f8&oe=6180C34D');

-- --------------------------------------------------------

--
-- Table structure for table `resident`
--

DROP TABLE IF EXISTS `resident`;
CREATE TABLE `resident` (
  `id` int(11) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `middle_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `bdate` date NOT NULL,
  `address` varchar(200) NOT NULL,
  `contact_no` varchar(50) NOT NULL,
  `marital_status` varchar(100) NOT NULL,
  `voter_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `resident`
--

INSERT INTO `resident` (`id`, `first_name`, `middle_name`, `last_name`, `gender`, `age`, `bdate`, `address`, `contact_no`, `marital_status`, `voter_status`) VALUES
(1, 'Catherine', 'Justine', 'Zuñiga', 'Female', 21, '2000-08-21', '671 Llano Rd.', '09984368854', 'Single', 'Registered'),
(2, 'Leon', 'Datu', 'Arabejo', 'Male', 29, '1992-01-27', '1182 G. Masangkay St.', '0948756135287', 'Married', 'Registered'),
(3, 'Alivia', 'Talaugon', 'Borja', 'Select', 31, '1990-06-14', 'Gov. Camins Rd.', '09177081520', 'Select', 'Select'),
(4, 'Nevaeh', 'Pinagbuklod', 'Castro', 'Female', 40, '1980-11-10', '74 Insurance St.', '09920853727', 'Widowed', 'Not Registered'),
(5, 'Henriqua', 'Kumulitog', 'Arabejo', 'Male', 25, '1996-04-11', '29 Blk. Ruei', '09154768521', 'Single', 'Registered'),
(6, 'Jadon', 'Maruhom', 'Monteloyola', 'Male', 46, '1975-08-14', '95 Morato', '09784632854', 'Divorced', 'Registered'),
(7, 'Lindsay', 'Talong', 'Castro', 'Female', 45, '1976-05-09', 'Bulaluan St.', '09613528741', 'Widowed', 'Registered'),
(8, 'Roana', 'Simangan', 'Velasco', 'Female', 71, '1950-06-18', '319 Munting St.', '0984652876', 'Married', 'Not Registered'),
(9, 'Nathanial', 'Nolan', 'Arabejo', 'Male', 22, '1999-02-14', '12 Sampaguita St.', '09548263758', 'Single', 'Registered'),
(10, 'Madalyn', 'Cawayan', 'Atega', 'Female', 81, '1940-06-22', '24 Mahaw St.', '0975841358742', 'Widowed', 'Registered'),
(11, 'Stephen', ' Siongco', 'Daquan', 'Male', 33, '1988-02-14', '14 Kamias St', '09852147652', 'Married', 'Registered'),
(12, 'Jamari', 'Romano', 'Ongpin', 'Male', 39, '1982-09-19', '1180 Jorenz St.', '09852167438', 'Married', 'Not Registered'),
(13, 'Zurine', 'Martins', 'Yllana', 'Female', 36, '1985-04-11', '182 Balusbus St.', '09625871634', 'Married', 'Registered'),
(14, 'Loretta', 'Sumague', 'Talion', 'Female', 20, '2001-01-07', '40 Pili St.', '09854137859', 'Single', 'Not Registered'),
(15, 'Talia', 'Dacudag', 'Odanda', 'Female', 18, '2003-01-29', '32-D Malvar St', '09472186254', 'Single', 'Not Registered'),
(16, 'Myra', 'Aniban', 'Castro', 'Female', 19, '2002-08-18', '18 Mabini St.', '09216748235', 'Single', 'Not Registered'),
(17, 'Austyn', 'Kaiden', 'Lawsin', 'Male', 21, '1999-12-06', 'Unit 2 C', '09115742663', 'Single', 'Not Registered'),
(18, 'Cynthia', 'Castro', 'Talon', 'Female', 39, '1982-05-05', '88 Malaya St.', '09325164784', 'Divorced', 'Registered'),
(19, 'Freddie', 'Ide', 'Chio', 'Male', 25, '1996-08-25', '28/F Sedco', '09625311487', 'Single', 'Not Registered'),
(20, 'Zuleika', 'Castro', 'Ahkiong', 'Male', 55, '1965-11-07', '16/F Central', '09841337258', 'Married', 'Registered'),
(21, 'Rebeca', 'Xochitl', 'Leones', 'Female', 18, '2003-01-01', '819 D Banawe', '09811476550', 'Single', 'Not Registered'),
(22, 'Josefa', 'Katigbak', 'Paloma', 'Female', 86, '1934-12-01', '1023a Palm St.', '09941520097', 'Widowed', 'Not Registered'),
(23, 'Lena', 'Vionaika', 'Limjap', 'Female', 50, '1970-11-06', '9 F Cabahug St.', '09915540622', 'Married', 'Registered'),
(24, 'James', 'Kiong', 'Torres', 'Male', 26, '1995-06-12', '11 Mabolo St', '09980021677', 'Single', 'Registered'),
(25, 'Rachael', 'Andrews', 'Dominica', 'Female', 24, '1997-03-11', '4921 A. Arnaiz St', '09326664875', 'Single', 'Registered'),
(26, 'Luvina', 'Reyes', 'Mangsinco', 'Female', 32, '1989-02-14', '37 G.B. Santos St', '09662541775', 'Married', 'Registered'),
(27, 'Zapopa', 'Gallano', 'Salazar', 'Female', 36, '1985-07-09', '320 A. Mabini St.', '09781154264', 'Divorced', 'Registered'),
(28, 'Sadie', 'Reyes', 'Uysiuseng', 'Female', 31, '1990-01-16', '286 Del Monte', '09815472265', 'Divorced', 'Registered'),
(29, 'Julianna', 'Conchetta', 'Sarte', 'Female', 76, '1945-05-24', 'Bo. Ugong', '09121188425', 'Widowed', 'Not Registered'),
(30, 'Madena', 'Maitim', 'Romblon', 'Female', 91, '1930-06-24', '11 Malaya St.', '0912345685210', 'Widowed', 'Not Registered');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`id`),
  ADD KEY `account_resident_id_FK` (`resident_id`);

--
-- Indexes for table `certificate`
--
ALTER TABLE `certificate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `certificate_account_FK` (`account_id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`),
  ADD KEY `complain_account_FK` (`account_id`);

--
-- Indexes for table `covid_report`
--
ALTER TABLE `covid_report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `image_resident_id_FK` (`resident_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resident`
--
ALTER TABLE `resident`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `certificate`
--
ALTER TABLE `certificate`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `covid_report`
--
ALTER TABLE `covid_report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `resident`
--
ALTER TABLE `resident`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `account_resident_id_FK` FOREIGN KEY (`resident_id`) REFERENCES `resident` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `certificate`
--
ALTER TABLE `certificate`
  ADD CONSTRAINT `certificate_account_FK` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `complain`
--
ALTER TABLE `complain`
  ADD CONSTRAINT `complain_account_FK` FOREIGN KEY (`account_id`) REFERENCES `account` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `image_resident_id_FK` FOREIGN KEY (`resident_id`) REFERENCES `resident` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
