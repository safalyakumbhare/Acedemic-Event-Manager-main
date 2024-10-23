-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 06:16 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testing`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `name` varchar(30) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `datefrom` date DEFAULT NULL,
  `dateto` date DEFAULT NULL,
  `place` text DEFAULT NULL,
  `time` time DEFAULT NULL,
  `orgby` varchar(30) DEFAULT NULL,
  `approval` varchar(50) DEFAULT NULL,
  `participation_date` date NOT NULL,
  `end-time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`name`, `description`, `datefrom`, `dateto`, `place`, `time`, `orgby`, `approval`, `participation_date`, `end-time`) VALUES
('code a thon', 'Coding competition', '2024-08-19', '2024-08-20', 'Poly Building', '11:00:00', 'Commerce and Management', 'Approved by Principal', '0000-00-00', '00:00:00'),
('Ganesh utsav', '10 day Ganesh Chaturthi Festival in campus', '2024-09-07', '2024-09-17', 'Academic Building', '11:00:00', 'Ghriet', 'Approved by Principal', '0000-00-00', '00:00:00'),
('Ganesh Idol Making Competition', 'Inter-Department Ganesh Idol Making Competition', '2024-09-04', '2024-09-05', 'Poly Building', '10:30:00', 'Commerce and Management', 'Approved by Principal', '0000-00-00', '00:00:00'),
('FIESTA 2024', 'Freshers Party of BCA Department', '2024-09-09', '2024-09-09', 'Solitare Banqueet , Hingna T-P', '10:15:00', 'Science and Technology', 'Approved by Principal', '0000-00-00', '00:00:00'),
('Sangeet Competition', 'Inter-Department Sangeet Competition in the special occasion of Ganesh Utsav 2024 in Campus.', '2024-09-11', '2024-09-11', 'Poly Building , Auditorium 2nd', '23:00:00', 'Commerce and Management', 'Approved by Principal', '2024-09-10', '00:00:00'),
('Code a Thon 2.0', 'Inter-Department coding competition for the passionate coder to showcase there coding skills. ', '2024-09-20', '2024-09-21', 'Poly Building , 3rd Floor Comm', '10:30:00', 'Commerce and Management', 'Approved by Principal', '2024-09-17', '11:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `budget`
--

CREATE TABLE `budget` (
  `eventname` varchar(30) DEFAULT NULL,
  `particular` varchar(30) DEFAULT NULL,
  `amount` decimal(10,0) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `budget`
--

INSERT INTO `budget` (`eventname`, `particular`, `amount`, `qty`, `total`) VALUES
('code a thon', 'computers', 15000, 20, 300000),
('code a thon', 'refreshments', 200, 30, 6000),
('Ganesh utsav', 'Decoration', 20000, 1, 20000),
('Ganesh utsav', 'Dhol Team', 8000, 1, 8000),
('Ganesh utsav', 'arti material', 5000, 1, 5000),
('Ganesh utsav', 'Main murti', 6000, 1, 6000),
('Ganesh utsav', 'small murti', 800, 1, 800),
('FIESTA 2024', 'Solitare Hall Booking , Refres', 800, 80, 64000),
('Ganesh Idol Making Competition', 'Materials for Idol Making', 500, 50, 25000),
('Ganesh Idol Making Competition', 'Cash Prize for 1st Winner', 1000, 1, 1000),
('Ganesh Idol Making Competition', 'Cash Prize for 2nd Winner', 500, 1, 500),
('Ganesh Idol Making Competition', 'Cash Prize for 3rd Winner', 300, 1, 300),
('Ganesh Idol Making Competition', 'Miscellaneous', 1000, 1, 1000),
('Sangeet Competition', 'Extra Mics', 3000, 2, 6000),
('Sangeet Competition', 'decoration ', 1000, 1, 1000),
('Sangeet Competition', 'Gifts', 500, 3, 1500),
('Code a Thon 2.0', '1st cash prizes ', 1000, 1, 1000),
('Code a Thon 2.0', '2nd cash prize', 500, 1, 500),
('Code a Thon 2.0', '3rd cash prize', 300, 1, 300),
('Code a Thon 2.0', 'Decoration', 500, 1, 500),
('Code a Thon 2.0', 'Welcome gifts for guest', 350, 3, 1050);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `desig` varchar(10) DEFAULT NULL,
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`desig`, `name`, `email`, `dept`, `username`, `password`) VALUES
('Principal', 'Safalya Kumbhare', 'safalyakumbhare@gmail.com', 'Ghriet', 'admin', 'admin111'),
('Hod', 'Pravin Paradkar', 'pravindparadkar2003@gmail.com', 'Commerce and Management', 'pravin', 'pravin11'),
('Faculty', 'Dhanajay Kawale', 'dhankawale2003@gmail.com', 'Commerce and Management', 'dhananjay', 'dhan'),
('Hod', 'Sandhya', 'sandhya@gmail.com', 'Science and Technology', 'sandhya', 'sandhya11');

-- --------------------------------------------------------

--
-- Table structure for table `participants`
--

CREATE TABLE `participants` (
  `eventname` varchar(30) DEFAULT NULL,
  `studname` varchar(30) DEFAULT NULL,
  `studrollno` varchar(10) DEFAULT NULL,
  `studdept` varchar(30) DEFAULT NULL,
  `studbranch` varchar(30) DEFAULT NULL,
  `studyear` varchar(5) DEFAULT NULL,
  `studemail` varchar(30) DEFAULT NULL,
  `studphone` varchar(10) DEFAULT NULL,
  `participate` varchar(20) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participants`
--

INSERT INTO `participants` (`eventname`, `studname`, `studrollno`, `studdept`, `studbranch`, `studyear`, `studemail`, `studphone`, `participate`, `date`) VALUES
('FIESTA 2024', 'Disha', '35', 'Science and Technology', 'BCA', '3rd', 'disha@gmail.com', '9876543295', 'participated', '2024-09-08'),
('Sangeet Competition', 'Disha', '35', 'Science and Technology', 'BCA', '3rd', 'disha@gmail.com', '9876543295', 'participated', '2024-09-10'),
('Sangeet Competition', 'Nisha Khole', '38', 'Commerce and Management', 'BCCA', '1st', 'nishak@gmail.com', '9830342949', 'participated', '2024-09-10'),
('Code a Thon 2.0', 'Disha', '35', 'Science and Technology', 'BCA', '3rd', 'disha@gmail.com', '9876543295', 'participated', '2024-09-21'),
('Code a Thon 2.0', 'Ramesh ', '36', 'Science and Technology', 'Electrical Engineering', '1st', 'ram@gmail.com', '9103071851', 'participated', '2024-09-21'),
('Sangeet Competition', 'Ramesh ', '36', 'Science and Technology', 'Electrical Engineering', '1st', 'ram@gmail.com', '9103071851', 'participated', '2024-09-11'),
('Sangeet Competition', 'Rohan Desai', '53', 'Science and Technology', 'B-Tech', '3rd', 'rohan@gmail.com', '9632144560', 'participated', '2024-09-11'),
('Ganesh Idol Making Competition', 'Rohan Desai', '53', 'Science and Technology', 'B-Tech', '3rd', 'rohan@gmail.com', '9632144560', 'participated', '2024-09-04'),
('Ganesh Idol Making Competition', 'Rahul Desai', '49', 'Science and Technology', 'BCA', '2nd', 'rahul@gmail.com', '8050234753', 'participated', '2024-09-04'),
('Ganesh Idol Making Competition', 'Nisha Khole', '38', 'Commerce and Management', 'BCCA', '1st', 'nishak@gmail.com', '9830342949', 'participated', '2024-09-04');

-- --------------------------------------------------------

--
-- Table structure for table `requirement`
--

CREATE TABLE `requirement` (
  `eventname` varchar(30) DEFAULT NULL,
  `ground` varchar(3) DEFAULT NULL,
  `sport` varchar(3) DEFAULT NULL,
  `auditorium` varchar(3) DEFAULT NULL,
  `sound` varchar(3) DEFAULT NULL,
  `photo` varchar(3) DEFAULT NULL,
  `video` varchar(3) DEFAULT NULL,
  `from` date DEFAULT NULL,
  `to` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requirement`
--

INSERT INTO `requirement` (`eventname`, `ground`, `sport`, `auditorium`, `sound`, `photo`, `video`, `from`, `to`) VALUES
('code a thon', 'NO', 'NO', 'YES', 'NO', 'NO', 'NO', '2024-08-19', '2024-08-20'),
('Ganesh utsav', 'NO', 'NO', 'NO', 'YES', 'YES', 'YES', '2024-09-07', '2024-09-17'),
('FIESTA 2024', 'NO', 'NO', 'NO', 'NO', 'YES', 'YES', '2024-09-09', '2024-09-09'),
('Ganesh Idol Making Competition', 'NO', 'NO', 'YES', 'YES', 'YES', 'YES', '2024-09-04', '2024-09-05'),
('Sangeet Competition', 'NO', 'NO', 'YES', 'YES', 'YES', 'YES', '2024-09-11', '2024-09-11'),
('Code a Thon 2.0', 'NO', 'NO', 'NO', 'NO', 'YES', 'NO', '2024-09-20', '2024-09-21');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `name` varchar(30) DEFAULT NULL,
  `email` varchar(30) DEFAULT NULL,
  `phone` varchar(10) DEFAULT NULL,
  `dept` varchar(30) DEFAULT NULL,
  `branch` varchar(30) DEFAULT NULL,
  `year` varchar(5) DEFAULT NULL,
  `rollno` varchar(10) DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  `approval` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `phone`, `dept`, `branch`, `year`, `rollno`, `password`, `approval`) VALUES
('Bhuvan', 'bhuvan@gmail.com', '9108376283', 'Commerce and Management', 'BCCA', '3rd', '09', 'bhuvan', 'Rejected'),
('Disha', 'disha@gmail.com', '9876543295', 'Science and Technology', 'BCA', '3rd', '35', 'disha', 'Approved'),
('Safalya Kumbhare', 'safalyakumbhare@gmail.com', '9812340816', 'Commerce and Management', 'BCCA', '3rd', '71', 'safalya', 'Rejected'),
('Ramesh ', 'ram@gmail.com', '9103071851', 'Science and Technology', 'Electrical Engineering', '1st', '36', 'ram', 'Approved'),
('Rohan Desai', 'rohan@gmail.com', '9632144560', 'Science and Technology', 'B-Tech', '3rd', '53', 'rohan123', 'Approved'),
('Rahul Desai', 'rahul@gmail.com', '8050234753', 'Science and Technology', 'BCA', '2nd', '49', 'rahul', 'Approved'),
('Nisha Khole', 'nishak@gmail.com', '9830342949', 'Commerce and Management', 'BCCA', '1st', '38', 'new', 'Approved');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
