-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 30, 2023 at 08:25 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bimcap_eep`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_table`
--

CREATE TABLE `admin_table` (
  `admin_id` int(11) NOT NULL,
  `admin_username` varchar(200) NOT NULL,
  `admin_password` varchar(200) NOT NULL,
  `admin_date` varchar(200) NOT NULL,
  `admin_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_table`
--

INSERT INTO `admin_table` (`admin_id`, `admin_username`, `admin_password`, `admin_date`, `admin_status`) VALUES
(1, 'admin', 'admin', '24/1/2023', 1);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `department_id` int(11) NOT NULL,
  `department_name` varchar(200) NOT NULL,
  `department_date` varchar(200) NOT NULL,
  `department_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`department_id`, `department_name`, `department_date`, `department_status`) VALUES
(1, 'IT', '25-01-2023 12:50:03', 1),
(2, 'Account Management ', '25-01-2023 14:07:11', 1),
(3, 'BIM Management', '30-01-2023 06:17:19', 1);

-- --------------------------------------------------------

--
-- Table structure for table `designation`
--

CREATE TABLE `designation` (
  `designation_id` int(11) NOT NULL,
  `designation_name` varchar(200) NOT NULL,
  `f_department_id` int(11) NOT NULL,
  `designation_date` varchar(200) NOT NULL,
  `designation_status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `designation`
--

INSERT INTO `designation` (`designation_id`, `designation_name`, `f_department_id`, `designation_date`, `designation_status`) VALUES
(1, 'Accounting ', 2, '25-01-2023 13:25:11', 1),
(2, 'Front End Developer', 1, '25-01-2023 14:19:22', 1),
(3, 'BIM managers', 3, '30-01-2023 06:20:15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_performance`
--

CREATE TABLE `employee_performance` (
  `emp_performance_id` int(11) NOT NULL,
  `employee_id` int(11) NOT NULL,
  `emp_performance_select_date` varchar(200) NOT NULL,
  `communication_assessment` int(11) NOT NULL,
  `communication_comments` text NOT NULL,
  `performance_assessment` int(11) NOT NULL,
  `performance_comments` text NOT NULL,
  `quality_assessment` int(11) NOT NULL,
  `quality_comments` text NOT NULL,
  `performance_post_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `employee_table`
--

CREATE TABLE `employee_table` (
  `employee_id` int(11) NOT NULL,
  `employee_first_name` varchar(200) NOT NULL,
  `employee_last_name` varchar(200) NOT NULL,
  `employee_email` varchar(200) NOT NULL,
  `employee_number` varchar(200) NOT NULL,
  `employee_address` varchar(200) NOT NULL,
  `employee_city` varchar(200) NOT NULL,
  `employee_country` varchar(200) NOT NULL,
  `employee_department` varchar(200) NOT NULL,
  `employee_designation` varchar(200) NOT NULL,
  `employee_image` varchar(200) NOT NULL,
  `employee_doj` varchar(200) NOT NULL,
  `employee_dot` varchar(200) NOT NULL,
  `employee_status` int(11) NOT NULL,
  `emp_post_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee_table`
--

INSERT INTO `employee_table` (`employee_id`, `employee_first_name`, `employee_last_name`, `employee_email`, `employee_number`, `employee_address`, `employee_city`, `employee_country`, `employee_department`, `employee_designation`, `employee_image`, `employee_doj`, `employee_dot`, `employee_status`, `emp_post_date`) VALUES
(1, 'nadeem', 'qureshi', 'nadeem@bimcap.com', '8817777405', 'Luchki para durg 491001', 'durg', 'India', 'en', 'usd', 'upload/2023/jan/25/download.png', '2023-01-16', '2023-01-31', 1, '25-01-2023 08:01:19'),
(2, 'abdul', 'qureshi', 'abdul@bimcap.com', '8817777405', 'Luchki para durg 491001', 'durg', 'France', 'en', 'euro', 'upload/2023/jan/25/download (1).png', '2023-01-25', '', 2, '25-01-2023 08:34:13'),
(3, 'Abdul', 'Kadeer', 'abdul@gmail.com', '8818888504', 'Takiya Para Durg', 'Durg', 'India', '1', '2', 'upload/2023/jan/27/photo_2022-07-16_21-05-30.jpg', '2023-01-27', '', 1, '27-01-2023 05:42:27'),
(4, 'Julia ', 'Roy ', 'roy@gmail.com', '5566326985', 'xyz', 'abc', 'Germany', '1', 'Front End Developer', 'upload/2023/jan/27/newsimg_595a10d3d03f92bf3c09c95acac8bf9e.jpg', '2023-01-27', '', 2, '27-01-2023 05:57:48'),
(5, 'ABC', 'ACC', 'acc@gmail.com', '1234567893', 'fghj', 'jjj', 'Korea', 'Account Management ', 'Accounting ', 'upload/2023/jan/27/human-resources.png', '2023-01-27', '', 2, '27-01-2023 06:11:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_table`
--
ALTER TABLE `admin_table`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`department_id`);

--
-- Indexes for table `designation`
--
ALTER TABLE `designation`
  ADD PRIMARY KEY (`designation_id`);

--
-- Indexes for table `employee_performance`
--
ALTER TABLE `employee_performance`
  ADD PRIMARY KEY (`emp_performance_id`);

--
-- Indexes for table `employee_table`
--
ALTER TABLE `employee_table`
  ADD PRIMARY KEY (`employee_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_table`
--
ALTER TABLE `admin_table`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `department_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `designation`
--
ALTER TABLE `designation`
  MODIFY `designation_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee_performance`
--
ALTER TABLE `employee_performance`
  MODIFY `emp_performance_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `employee_table`
--
ALTER TABLE `employee_table`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
