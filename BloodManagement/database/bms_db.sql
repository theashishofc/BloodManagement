-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2023 at 04:11 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood`
--

CREATE TABLE `blood` (
  `blood_id` int(11) NOT NULL,
  `blood_group` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood`
--

INSERT INTO `blood` (`blood_id`, `blood_group`) VALUES
(1, 'B+'),
(2, 'B-'),
(3, 'A+'),
(4, 'O+'),
(5, 'O-'),
(6, 'A-'),
(7, 'AB+'),
(8, 'AB-');

-- --------------------------------------------------------

--
-- Table structure for table `blood_component`
--

CREATE TABLE `blood_component` (
  `component_id` int(10) NOT NULL,
  `component_type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_component`
--

INSERT INTO `blood_component` (`component_id`, `component_type`) VALUES
(1, 'Whole Blood'),
(2, 'Single Donor Platelet'),
(3, 'Single Donor Plasma'),
(4, 'Platelet Rich Plasma'),
(5, 'Platelet Poor Plasma'),
(6, 'Plasma');

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(10) NOT NULL,
  `province_id` int(10) NOT NULL,
  `district_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `province_id`, `district_name`) VALUES
(1, 1, 'Bhojpur District'),
(2, 1, 'Dhankuta District'),
(3, 1, 'Ilam District'),
(4, 1, 'Jhapa District'),
(5, 1, 'Khotang District'),
(6, 1, 'Morang District'),
(7, 1, 'Okhaldhunga District'),
(8, 1, 'Panchthar District'),
(9, 1, 'Sankhuwasabha District'),
(10, 1, 'Solukhumbu District'),
(11, 1, 'Sunsari District'),
(12, 1, 'Taplejung District'),
(13, 1, 'Tehrathum District'),
(14, 1, 'Udayapur District'),
(15, 2, 'Siraha District'),
(16, 2, 'Sarlahi District'),
(17, 2, 'Saptari District'),
(18, 2, 'Rautahat District'),
(19, 2, 'Parsa District'),
(20, 2, 'Mahottari District'),
(21, 2, 'Dhanusha District'),
(22, 2, 'Bara District'),
(23, 3, 'Sindhuli'),
(24, 3, 'Ramechhap'),
(25, 3, 'Dolakha'),
(26, 3, 'Bhaktapur'),
(27, 3, 'Dhading'),
(28, 3, 'Kathmandu'),
(29, 3, 'Kavrepalanchok'),
(30, 3, 'Lalitpur'),
(31, 3, 'Nuwakot'),
(32, 3, 'Rasuwa'),
(33, 3, 'Sindhupalchok'),
(34, 3, 'Chitwan'),
(35, 3, 'Makwanpur'),
(36, 4, 'Baglung District'),
(37, 4, 'Gorkha District'),
(38, 4, 'Kaski District'),
(39, 4, 'Lamjung District'),
(40, 4, 'Manang District'),
(41, 4, 'Mustang District'),
(42, 4, 'Myagdi District'),
(43, 4, 'Nawalpur District'),
(44, 4, 'Parbat District'),
(45, 4, 'Syangja District'),
(46, 4, 'Tanahun District'),
(47, 5, 'Arghakhanchi'),
(48, 5, 'Banke'),
(49, 5, 'Bardiya'),
(50, 5, 'Dang'),
(51, 5, 'Gulmi'),
(52, 5, 'Kapilvastu'),
(53, 5, 'Parasi'),
(54, 5, 'Palpa'),
(55, 5, 'Pyuthan'),
(56, 5, 'Rolpa'),
(57, 5, 'Rukum'),
(58, 5, 'Rupandehi'),
(59, 6, 'Western Rukum District'),
(60, 6, 'Salyan District'),
(61, 6, 'Dolpa District'),
(62, 6, 'Humla District'),
(63, 6, 'Jumla District'),
(64, 6, 'Kalikot District'),
(65, 6, 'Mugu District'),
(66, 6, 'Surkhet District'),
(67, 6, 'Dailekh District'),
(68, 6, 'Jajarkot District'),
(69, 7, 'Achham District'),
(70, 7, 'Baitadi District'),
(71, 7, 'Bajhang District'),
(72, 7, 'Bajura District'),
(73, 7, 'Dadeldhura District'),
(74, 7, 'Darchula District'),
(75, 7, 'Doti District'),
(76, 7, 'Kailali District'),
(77, 7, 'Kanchanpur District');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(10) NOT NULL,
  `province_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `province_name`) VALUES
(1, 'Province No. 1'),
(2, 'Madhesh Province'),
(3, 'Bagmati Province'),
(4, 'Gandaki Province'),
(5, 'Lumbini Province'),
(6, 'Karnali Province'),
(7, 'Sudurpashchim Province');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood`
--
ALTER TABLE `blood`
  ADD PRIMARY KEY (`blood_id`);

--
-- Indexes for table `blood_component`
--
ALTER TABLE `blood_component`
  ADD PRIMARY KEY (`component_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood`
--
ALTER TABLE `blood`
  MODIFY `blood_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
