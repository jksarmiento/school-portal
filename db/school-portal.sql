-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 14, 2022 at 09:09 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school-portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblay`
--

CREATE TABLE `tblay` (
  `ID` int(11) NOT NULL,
  `Start_year` year(4) NOT NULL,
  `End_year` year(4) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblay`
--

INSERT INTO `tblay` (`ID`, `Start_year`, `End_year`, `Date_created`) VALUES
(1, 2022, 2023, '2022-08-06 13:57:18'),
(2, 2021, 2022, '2022-08-06 13:57:57'),
(3, 2020, 2021, '2022-08-06 13:58:00'),
(4, 2023, 2024, '2022-08-06 14:04:50'),
(5, 2019, 2020, '2022-08-06 14:25:21');

-- --------------------------------------------------------

--
-- Table structure for table `tblayterm`
--

CREATE TABLE `tblayterm` (
  `ID` int(11) NOT NULL,
  `AYID` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblayterm`
--

INSERT INTO `tblayterm` (`ID`, `AYID`, `Term`, `Date_created`) VALUES
(1, 3, 1, '2022-08-06 14:08:43'),
(2, 3, 2, '2022-08-06 14:08:51'),
(3, 3, 3, '2022-08-06 14:08:55'),
(4, 2, 1, '2022-08-06 14:28:51'),
(5, 2, 2, '2022-08-06 14:28:54'),
(6, 2, 3, '2022-08-06 14:28:56'),
(7, 5, 1, '2022-08-08 15:35:45'),
(8, 5, 2, '2022-08-08 15:36:06'),
(9, 5, 3, '2022-08-08 15:36:09');

-- --------------------------------------------------------

--
-- Table structure for table `tblcollege`
--

CREATE TABLE `tblcollege` (
  `ID` int(11) NOT NULL,
  `College` varchar(50) NOT NULL,
  `SchoolID` int(11) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcollege`
--

INSERT INTO `tblcollege` (`ID`, `College`, `SchoolID`, `Date_created`) VALUES
(1, 'College of Engineering and Technology', 1, '2022-08-06 09:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `tblcourse`
--

CREATE TABLE `tblcourse` (
  `ID` int(11) NOT NULL,
  `Course_code` varchar(10) NOT NULL,
  `Course_name` varchar(50) NOT NULL,
  `DeptID` int(11) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcourse`
--

INSERT INTO `tblcourse` (`ID`, `Course_code`, `Course_name`, `DeptID`, `Date_created`) VALUES
(1, 'BSCS', 'Computer Science', 1, '2022-08-06 09:05:41'),
(2, 'BSIT', 'Information Technology', 2, '2022-08-08 14:36:43');

-- --------------------------------------------------------

--
-- Table structure for table `tblcurriculum`
--

CREATE TABLE `tblcurriculum` (
  `ID` int(11) NOT NULL,
  `Curriculum_name` varchar(50) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `AYID` int(11) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcurriculum`
--

INSERT INTO `tblcurriculum` (`ID`, `Curriculum_name`, `CourseID`, `AYID`, `Date_created`) VALUES
(5, 'BSIT20192020', 2, 5, '2022-08-08 14:38:12'),
(6, 'BSCS20192020', 1, 5, '2022-08-08 14:55:12');

-- --------------------------------------------------------

--
-- Table structure for table `tblcurrsubj`
--

CREATE TABLE `tblcurrsubj` (
  `ID` int(11) NOT NULL,
  `CurriculumID` int(11) NOT NULL,
  `Year_level` int(11) NOT NULL,
  `Term` int(11) NOT NULL,
  `SubjectID` int(11) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblcurrsubj`
--

INSERT INTO `tblcurrsubj` (`ID`, `CurriculumID`, `Year_level`, `Term`, `SubjectID`, `Date_created`) VALUES
(1, 6, 1, 1, 1, '2022-08-08 15:06:05'),
(2, 6, 1, 1, 2, '2022-08-08 15:06:11'),
(3, 6, 1, 2, 3, '2022-08-08 15:06:15'),
(4, 6, 1, 2, 4, '2022-08-08 15:06:20');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartment`
--

CREATE TABLE `tbldepartment` (
  `ID` int(11) NOT NULL,
  `Department` varchar(50) NOT NULL,
  `CollegeID` int(11) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbldepartment`
--

INSERT INTO `tbldepartment` (`ID`, `Department`, `CollegeID`, `Date_created`) VALUES
(1, 'Computer Science Department', 1, '2022-08-06 09:05:14'),
(2, 'Information Technology Department', 1, '2022-08-08 14:36:28');

-- --------------------------------------------------------

--
-- Table structure for table `tblschool`
--

CREATE TABLE `tblschool` (
  `ID` int(11) NOT NULL,
  `School` varchar(50) NOT NULL,
  `Level` varchar(50) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblschool`
--

INSERT INTO `tblschool` (`ID`, `School`, `Level`, `Date_created`) VALUES
(1, 'University of St. La Salle', 'College', '2022-08-06 09:04:03');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudcurr`
--

CREATE TABLE `tblstudcurr` (
  `ID` int(11) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `CurriculumID` int(11) NOT NULL,
  `Active` tinyint(1) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudcurr`
--

INSERT INTO `tblstudcurr` (`ID`, `StudentID`, `CurriculumID`, `Active`, `Date_created`) VALUES
(1, 1, 6, 0, '2022-08-08 16:16:35'),
(4, 1, 5, 1, '2022-08-11 11:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblstudeducstatus`
--

CREATE TABLE `tblstudeducstatus` (
  `ID` int(11) NOT NULL,
  `SchoolID` int(11) NOT NULL,
  `Start_year` year(4) NOT NULL,
  `End_year` year(4) NOT NULL,
  `StudentID` int(11) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tblstudents`
--

CREATE TABLE `tblstudents` (
  `ID` int(11) NOT NULL,
  `SchoolID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Mname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `Birthday` datetime NOT NULL,
  `Address` varchar(250) NOT NULL,
  `City` varchar(50) NOT NULL,
  `Province` varchar(50) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblstudents`
--

INSERT INTO `tblstudents` (`ID`, `SchoolID`, `Fname`, `Mname`, `Lname`, `Birthday`, `Address`, `City`, `Province`, `Date_created`) VALUES
(1, 1, 'Jarl Keenen', 'Abata', 'Sarmiento', '2001-02-01 00:00:00', 'Blk.10, Lot 7, Pyrgos Rd., Santorini Subd., Brgy. Mandalagan', 'Bacolod City', 'Negros Occidental', '2022-08-08 16:05:27');

-- --------------------------------------------------------

--
-- Table structure for table `tblsubject`
--

CREATE TABLE `tblsubject` (
  `ID` int(11) NOT NULL,
  `CourseID` int(11) NOT NULL,
  `Subject_code` varchar(20) NOT NULL,
  `Subject_name` varchar(50) NOT NULL,
  `Units` float NOT NULL,
  `Description` varchar(250) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblsubject`
--

INSERT INTO `tblsubject` (`ID`, `CourseID`, `Subject_code`, `Subject_name`, `Units`, `Description`, `Date_created`) VALUES
(1, 1, 'CC101', 'Computer Science Fundamentals', 3, 'xx', '2022-08-06 09:06:13'),
(2, 1, 'CC102', 'Computer Programming 1', 3, 'xx', '2022-08-06 09:07:22'),
(3, 1, 'CC103', 'Computer Programming 2', 3, 'xx', '2022-08-06 11:11:50'),
(4, 1, 'CSP201', '2D Game Art', 3, 'xx', '2022-08-06 11:12:11');

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `ID` int(11) NOT NULL,
  `Fname` varchar(50) NOT NULL,
  `Lname` varchar(50) NOT NULL,
  `User_type` varchar(50) NOT NULL,
  `Username` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Auth_token` varchar(100) NOT NULL,
  `Locker` varchar(100) NOT NULL,
  `Date_created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`ID`, `Fname`, `Lname`, `User_type`, `Username`, `Password`, `Auth_token`, `Locker`, `Date_created`) VALUES
(1, 'Jarl Keenen', 'Sarmiento', 'student', 'jarlkeenen', 'df09d9f711290e55e02675b8c931f5fbfe8d7702', 'cf8f451efe11ffc7e8a614579723e9126c8a0138:eee1be1cfd3df7edd926d03876e2c5cf64af2242:9f67ca5a5de2808dae', 'y>lK/SK6NFzD(C6I6^THB1$1GInsoUan2!nzzr<S$fzS<KIU@d', '2022-08-11 13:48:29'),
(2, 'Jezzon Kyle', 'Telebanco', 'admin', 'jzk', '93c9bc2bc5234595443e0a72e95db654b36d8d0b', '243f00a087e55185b273d589207f4ff560651e7b:fca172f51228d4fe3153673ca112a741b6b26eec:22c92224570d6578e1', 't9V.<2eW$Jv6BX^UbNs0ORmdV?IPem@)R$wcW2UwiKKeU1#7T\\', '2022-08-11 13:54:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblay`
--
ALTER TABLE `tblay`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblayterm`
--
ALTER TABLE `tblayterm`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcollege`
--
ALTER TABLE `tblcollege`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcourse`
--
ALTER TABLE `tblcourse`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcurriculum`
--
ALTER TABLE `tblcurriculum`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblcurrsubj`
--
ALTER TABLE `tblcurrsubj`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblschool`
--
ALTER TABLE `tblschool`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudcurr`
--
ALTER TABLE `tblstudcurr`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudeducstatus`
--
ALTER TABLE `tblstudeducstatus`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblstudents`
--
ALTER TABLE `tblstudents`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblsubject`
--
ALTER TABLE `tblsubject`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblay`
--
ALTER TABLE `tblay`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tblayterm`
--
ALTER TABLE `tblayterm`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblcollege`
--
ALTER TABLE `tblcollege`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblcourse`
--
ALTER TABLE `tblcourse`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblcurriculum`
--
ALTER TABLE `tblcurriculum`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblcurrsubj`
--
ALTER TABLE `tblcurrsubj`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbldepartment`
--
ALTER TABLE `tbldepartment`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblschool`
--
ALTER TABLE `tblschool`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblstudcurr`
--
ALTER TABLE `tblstudcurr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblstudeducstatus`
--
ALTER TABLE `tblstudeducstatus`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblstudents`
--
ALTER TABLE `tblstudents`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblsubject`
--
ALTER TABLE `tblsubject`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
