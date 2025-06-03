-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2025 at 07:38 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db1_gym`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `email` varchar(250) DEFAULT NULL,
  `password` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `admin_users`
--

DROP TABLE IF EXISTS `admin_users`;
CREATE TABLE IF NOT EXISTS `admin_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `admin_users`
--

INSERT INTO `admin_users` (`id`, `username`, `password`) VALUES
(1, 'suraj', '0099');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

DROP TABLE IF EXISTS `attendance`;
CREATE TABLE IF NOT EXISTS `attendance` (
  `attendance_id` int NOT NULL AUTO_INCREMENT,
  `attendance_status` varchar(250) DEFAULT NULL,
  `attendance_date` varchar(250) DEFAULT NULL,
  `member_id` int DEFAULT NULL,
  PRIMARY KEY (`attendance_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`attendance_id`, `attendance_status`, `attendance_date`, `member_id`) VALUES
(20, '1', '2025-05-27', 4),
(19, '1', '2025-05-26', 4),
(18, '1', '2025-05-24', 4),
(17, '1', '2025-05-24', 5),
(16, '0', '2025-05-21', 4),
(15, '0', '2025-05-21', 4),
(14, '1', '2025-05-21', 4),
(13, '1', '2025-05-21', 2);

-- --------------------------------------------------------

--
-- Table structure for table `attendance_users`
--

DROP TABLE IF EXISTS `attendance_users`;
CREATE TABLE IF NOT EXISTS `attendance_users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`, `description`) VALUES
(1, 'Lower', ''),
(2, 'General', ''),
(3, 'V.I.P', '');

-- --------------------------------------------------------

--
-- Table structure for table `fee_plans`
--

DROP TABLE IF EXISTS `fee_plans`;
CREATE TABLE IF NOT EXISTS `fee_plans` (
  `id` int NOT NULL AUTO_INCREMENT,
  `full_name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `duration_months` int DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `member_id` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `fee_plans`
--

INSERT INTO `fee_plans` (`id`, `full_name`, `duration_months`, `amount`, `description`, `created_at`, `member_id`) VALUES
(1, 'jhdjhwdg', 2, 615, 'mnbdjhwfdw', NULL, NULL),
(2, 'asdsjfbws', 2, 4242, 'khwiuwhfkjw', NULL, NULL),
(3, 'weight gain ', 2, 651436, 'hkwhdkwhdw', NULL, NULL),
(4, 'jhbfjhwfw', 3, 76156, 'jhuiwhew', NULL, NULL),
(5, 'jhyfffh', 3, 54354, 'fytftyfj', NULL, NULL),
(6, 'ahjdgjhad', 5, 264872, 'nfjbfjhefef', NULL, NULL),
(7, NULL, 2, 1, 'cscsc', NULL, 5),
(8, NULL, 2, 0, 'wdewdwe', NULL, 3),
(9, NULL, 3, 1, 'jhduywgdjhwb', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

DROP TABLE IF EXISTS `group`;
CREATE TABLE IF NOT EXISTS `group` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `group`
--

INSERT INTO `group` (`id`, `name`, `description`) VALUES
(2, 'Weight Gain Department', ''),
(3, 'Cardio Group', ''),
(4, 'Six Packs abs', ''),
(5, 'Fitness Department', '');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

DROP TABLE IF EXISTS `member`;
CREATE TABLE IF NOT EXISTS `member` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(250) DEFAULT NULL,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `date` date NOT NULL,
  `m_group` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `weight` varchar(250) DEFAULT NULL,
  `height` varchar(250) DEFAULT NULL,
  `chest` varchar(250) DEFAULT NULL,
  `waist` varchar(250) DEFAULT NULL,
  `thigh` varchar(250) DEFAULT NULL,
  `arms` varchar(250) DEFAULT NULL,
  `fat` varchar(250) DEFAULT NULL,
  `s_member` varchar(250) DEFAULT NULL,
  `m_ship` varchar(250) DEFAULT NULL,
  `date1` date NOT NULL,
  `date2` date DEFAULT NULL,
  `attendance` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `photo`, `f_name`, `l_name`, `gender`, `date`, `m_group`, `address`, `city`, `state`, `phone`, `email`, `weight`, `height`, `chest`, `waist`, `thigh`, `arms`, `fat`, `s_member`, `m_ship`, `date1`, `date2`, `attendance`) VALUES
(1, 'img/6831763332fd3destination-05.png', 'Dr ', 'Mannan', 'male', '0000-00-00', '', '', '', '', '9965327533', 'Mann@gmail.com', '', '', '', '', '', '', '', '', '', '2022-07-20', '2022-08-10', NULL),
(2, 'img/6834237ea7b4edestination-01.png', 'Elon', 'Musk', 'male', '0000-00-00', '4', '', '', '', '8738632424', 'Elon@gmail.com', '', '', '', '', '', '', '', '', '', '2022-07-20', '2023-09-18', NULL),
(3, 'img/6831771a5c7dfhajj3.png', 'Groot', 'Wood', 'male', '0000-00-00', '', '', '', '', 'Groot@gmail.com', 'groot@gmail.com', '', '', '', '', '', '', '', '', '', '2024-07-22', '2024-08-21', NULL),
(4, 'img/683423fa5ca51destination-03.png', 'Amir', 'Khan', 'male', '0000-00-00', '2', '', '', '', '9965327533', 'amir@gmail.com', '', '', '', '', '', '', '', '', '', '2025-05-14', '2025-12-24', NULL),
(5, 'img/68319e2eee810deal2.png', 'Udit', 'Awasthi', 'male', '0000-00-00', '3', '', '', '', '7346874232', 'Udit@gmail.com', '', '', '', '', '', '', '', '', '', '2025-05-13', '2025-05-21', NULL),
(6, 'img/6834234f2a6e3hajj2.png', 'Sanjeev', 'Kumar', 'male', '0000-00-00', '5', '', '', '', '8738632424', 'sanjeev@gmail.com', '', '', '', '', '', '', '', '', '', '2025-05-30', '2025-06-08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `membership`
--

DROP TABLE IF EXISTS `membership`;
CREATE TABLE IF NOT EXISTS `membership` (
  `id` int NOT NULL AUTO_INCREMENT,
  `m_name` varchar(250) DEFAULT NULL,
  `m_category` varchar(250) DEFAULT NULL,
  `m_period` varchar(250) DEFAULT NULL,
  `m_amount` varchar(250) DEFAULT NULL,
  `m_description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `membership`
--

INSERT INTO `membership` (`id`, `m_name`, `m_category`, `m_period`, `m_amount`, `m_description`) VALUES
(1, 'Thigh', ' 1', '21', '1000', ''),
(2, 'Weight Gaining', ' 3', '90', '20000', ''),
(3, 'Six abs', ' 2', '60', '10000', ''),
(4, 'Cardio', ' 3', '30', '15000', ''),
(5, NULL, NULL, NULL, NULL, NULL),
(6, NULL, NULL, NULL, NULL, NULL),
(7, NULL, NULL, NULL, NULL, NULL),
(8, NULL, NULL, NULL, NULL, NULL),
(9, NULL, NULL, NULL, NULL, NULL),
(10, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `memberss`
--

DROP TABLE IF EXISTS `memberss`;
CREATE TABLE IF NOT EXISTS `memberss` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `service` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `memberss`
--

INSERT INTO `memberss` (`id`, `name`, `service`) VALUES
(1, '4', '2'),
(2, '3', '2'),
(3, '5', '1'),
(4, '6', '2'),
(5, '1', '1'),
(6, '3', '2'),
(7, '3', '3'),
(8, '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `member_fees`
--

DROP TABLE IF EXISTS `member_fees`;
CREATE TABLE IF NOT EXISTS `member_fees` (
  `id` int NOT NULL AUTO_INCREMENT,
  `member_id` int DEFAULT NULL,
  `fee_plan_id` int DEFAULT NULL,
  `payment_date` varchar(20) DEFAULT NULL,
  `amount_paid` decimal(10,2) DEFAULT NULL,
  `status` enum('paid','unpaid') DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `member_fees`
--

INSERT INTO `member_fees` (`id`, `member_id`, `fee_plan_id`, `payment_date`, `amount_paid`, `status`) VALUES
(1, 1, 1, '2025-05-15', 654.00, 'paid'),
(2, 1, 1, '2025-05-22', 654165.00, 'paid'),
(3, 1, 1, '2025-05-24', 0.00, 'paid'),
(4, 6, 6, '2025-05-24', 0.00, 'paid'),
(5, 6, 6, '2025-05-24', 0.00, 'paid'),
(6, 6, 6, '2025-05-24', 0.00, 'paid'),
(7, 1, 1, '2025-05-21', 0.00, 'paid'),
(8, 5, 4, '2025-05-28', 0.00, 'paid'),
(9, 5, 4, '2025-05-28', 0.00, 'paid'),
(10, 5, 4, '2025-05-28', 0.00, 'paid'),
(11, 5, 4, '2025-05-28', 0.00, 'paid'),
(12, 5, 4, '2025-05-28', 0.00, 'paid'),
(13, 3, 1, '2025-05-28', 0.00, 'paid'),
(14, 5, 1, '2025-05-28', 0.00, 'paid');

-- --------------------------------------------------------

--
-- Table structure for table `m_ship`
--

DROP TABLE IF EXISTS `m_ship`;
CREATE TABLE IF NOT EXISTS `m_ship` (
  `id` int NOT NULL AUTO_INCREMENT,
  `member_id` int DEFAULT NULL,
  `service_id` int DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `m_ship`
--

INSERT INTO `m_ship` (`id`, `member_id`, `service_id`, `start_date`, `end_date`) VALUES
(1, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `description`) VALUES
(1, 'Zaakir Khan', ''),
(2, 'Amaan Ansari', ''),
(3, 'Salman', ''),
(4, 'Anwar', '');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `description` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `price` decimal(10,2) DEFAULT NULL,
  `created_at` timestamp(6) NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `price`, `created_at`) VALUES
(1, 'Meal', 'Healthy Food', 2000.00, '0000-00-00 00:00:00.000000'),
(2, 'Spa Facilities', 'hwuidhw', 1000.00, '2025-05-25 18:30:00.000000'),
(3, 'Dance', 'uywgduywgd', 3000.00, '0000-00-00 00:00:00.000000');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
CREATE TABLE IF NOT EXISTS `settings` (
  `gym_id` int NOT NULL AUTO_INCREMENT,
  `gym_name` varchar(250) DEFAULT NULL,
  `gym_logo` varchar(250) DEFAULT NULL,
  `gym_currency` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`gym_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`gym_id`, `gym_name`, `gym_logo`, `gym_currency`) VALUES
(1, 'Ali Health Club', 'img/gym-logo/1748080648_events2.png', 'Rs.');

-- --------------------------------------------------------

--
-- Table structure for table `specialization`
--

DROP TABLE IF EXISTS `specialization`;
CREATE TABLE IF NOT EXISTS `specialization` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(250) DEFAULT NULL,
  `description` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `specialization`
--

INSERT INTO `specialization` (`id`, `name`, `description`) VALUES
(1, 'Weight Gainer', ''),
(2, 'Fitness', ''),
(3, 'Six abs', ''),
(4, 'Cardiologist', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff_attendance`
--

DROP TABLE IF EXISTS `staff_attendance`;
CREATE TABLE IF NOT EXISTS `staff_attendance` (
  `id` int NOT NULL AUTO_INCREMENT,
  `att_status` varchar(250) NOT NULL,
  `att_date` varchar(20) NOT NULL,
  `att_id` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_attendance`
--

INSERT INTO `staff_attendance` (`id`, `att_status`, `att_date`, `att_id`) VALUES
(1, '1', '0000-00-00', 0),
(2, '1', '0000-00-00', 0),
(3, '1', '0000-00-00', 0),
(4, '1', '0000-00-00', 0),
(5, '1', '0000-00-00', 0),
(6, '1', '0000-00-00', 0),
(7, '1', '0000-00-00', 0),
(8, '1', '0000-00-00', 0),
(9, '0', '0000-00-00', 1),
(10, '0', '0000-00-00', 1),
(11, '1', '0000-00-00', 1),
(12, '0', '2025-05-20', 1),
(13, '0', '2025-05-21', 1),
(14, '1', '2025-05-23', 1),
(15, '1', '2025-05-24', 1),
(16, '1', '2025-05-24', 2),
(17, '', '2025-05-24', 2),
(18, '0', '2025-05-24', 4),
(19, '1', '2025-05-26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `staff_member`
--

DROP TABLE IF EXISTS `staff_member`;
CREATE TABLE IF NOT EXISTS `staff_member` (
  `id` int NOT NULL AUTO_INCREMENT,
  `photo` varchar(250) DEFAULT NULL,
  `f_name` varchar(250) DEFAULT NULL,
  `l_name` varchar(250) DEFAULT NULL,
  `gender` varchar(250) DEFAULT NULL,
  `date` varchar(250) DEFAULT NULL,
  `a_role` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `city` varchar(250) DEFAULT NULL,
  `state` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `status` varchar(250) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `staff_member`
--

INSERT INTO `staff_member` (`id`, `photo`, `f_name`, `l_name`, `gender`, `date`, `a_role`, `address`, `city`, `state`, `phone`, `email`, `status`) VALUES
(1, 'img/6831749dbf745home-05.png', 'Adil ', 'Nasir', 'male', '1994-10-24', 'Zakir Khan', 'Sanjay Nagar', 'Lucknow', 'Uttar Pradesh', '8738632424', 'Adil@gmail.com', NULL),
(2, 'img/683174f685954hotel.png', 'Fareed ', 'Malik', 'male', '', 'Amaan Ansari', '', '', '', '9965327533', 'Z@gmail.com', NULL),
(3, 'img/68317533af074events1.png', 'Anwar', 'Husain', 'male', '', 'Salman', '', '', '', '7346874232', 'Anwar@gmail.com', NULL),
(4, 'img/6831756f478c4trending13.png', 'Amaan ', 'Ansari', 'male', '', 'Salman', '', '', '', '8738632424', 'Amaan@gmail.com', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
