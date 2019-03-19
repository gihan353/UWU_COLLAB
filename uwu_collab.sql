-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 19, 2019 at 06:31 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uwu_collab`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(100) DEFAULT NULL,
  `admin_username` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_username`) VALUES
(1, 'Admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `attendence`
--

CREATE TABLE `attendence` (
  `workshop_id` varchar(100) NOT NULL,
  `date` date DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `st_id` varchar(100) DEFAULT NULL,
  `event_id` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(100) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `date`, `name`, `comment`) VALUES
(1, '2018-12-19', 'sanduni', 'ggfgg'),
(2, '2018-12-21', 'gfgh', 'gfghf'),
(3, '2018-12-19', 'dffhdsjhj', 'hkj'),
(4, '0000-00-00', 'hj,', 'lhnb'),
(5, '2019-02-11', 'lahiru', 'mcvvcvm');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `body`, `created_at`, `updated_at`) VALUES
(43, 1, 1, 'how we fix the tire patch without help of the garaj\n', '2018-11-19 03:21:56', '2018-11-19 03:21:56'),
(49, 1, 1, 'how to fix light problems in ct100\n', '2018-12-07 03:30:40', '2018-12-07 03:30:40'),
(50, 1, 1, 'hello i have a problem on my toyota car', '2018-12-07 04:16:09', '2018-12-07 04:16:09'),
(51, 1, 1, 'hai\n', '2019-02-06 02:00:41', '2019-02-06 02:00:41'),
(112, 1, 1, 'gihan', '2019-02-19 10:54:19', '2019-02-19 10:54:19'),
(113, 1, 1, 'comment plz\n', '2019-02-19 10:57:05', '2019-02-19 10:57:05'),
(114, 1, 1, 'Can anyone tell how to solve this problem?', '2019-02-19 11:02:40', '2019-02-19 11:02:40'),
(116, 1, 1, 'If you have any problems comment\n', '2019-02-19 12:00:59', '2019-02-19 12:00:59'),
(117, 1, 1, 'problem', '2019-02-19 15:09:57', '2019-02-19 15:09:57');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `company_id` int(100) NOT NULL,
  `company_name` varchar(100) DEFAULT NULL,
  `company_type` varchar(100) DEFAULT NULL,
  `company_username` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`company_id`, `company_name`, `company_type`, `company_username`, `email`) VALUES
(15, 'pwc', 'Management', 'pwc', 'pwc@gmail.com'),
(11, 'Virtusa', 'IT', 'Virtu', 'virtusa@gmail.com'),
(12, 'pearson', 'IT', 'pearson', 'pearson@gmail.com'),
(13, 'Telecom', 'Management', 'telecom', 'telecom@gmail.com'),
(14, 'Bevi Labs', 'IT', 'bevi', 'bevi@gmail.com'),
(16, 'LOLC', 'Management', 'lolc', 'lolc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `companymsg`
--

CREATE TABLE `companymsg` (
  `Sender` varchar(100) DEFAULT NULL,
  `Receiver` varchar(100) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Msg` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `companymsg`
--

INSERT INTO `companymsg` (`Sender`, `Receiver`, `Subject`, `Msg`) VALUES
('vfsdvsfv', '3res', 'yhtr5', 'qrrwer\r\n                        '),
('b v b', 'efdx', 'efd', 'ewqrre\r\n                        ');

-- --------------------------------------------------------

--
-- Table structure for table `company_cv`
--

CREATE TABLE `company_cv` (
  `company_id` varchar(100) NOT NULL,
  `cv_id` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(11) NOT NULL,
  `path` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `path`) VALUES
(1, '32c407baf0c615c2fa2a474c9ad6a49b.pdf'),
(2, '4dbad3a7412184a34af4a534670223f3.pdf'),
(3, '396a47bdc8d95f5eb392960886ec8156.pdf'),
(4, '66aa06fe10ec38a8833be34c79f9597b.pdf'),
(5, 'e5f73329b3712b31ccc4832bc8417cf1.jpg'),
(6, '68c18fd84b1dfc7115ff908feabdc5bf.pdf'),
(7, 'f94fd7d1562a1b074331ac5495e69660.pdf'),
(8, 'ab4e155d68fcca49722caf1400bc720a.pdf'),
(9, '3be17c75c06da9658635651385576da6.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `event_id` int(11) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `event_name` varchar(100) DEFAULT NULL,
  `event_type` varchar(100) DEFAULT NULL,
  `co_id` varchar(100) DEFAULT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`event_id`, `location`, `date`, `event_name`, `event_type`, `co_id`, `description`) VALUES
(2, 'E1 ', '2018-11-25', 'IEEEXtreme 12.0', 'Hackathon', '2', 'IEEEXtreme 12.0- international Hackathon has been held at the university. The competition held virtu'),
(3, 'MLT ', '2018-12-24', 'SHECODEress<V 2.0>', 'Inter university girls hackathon', '2', 'Inter university Girls Hackathon organized by IEEE women in Engineering Affinity group of Uva wellas'),
(4, 'select ', '2018-12-25', 'CST LAN Challenge', 'Game ', '2', 'Join with us and have a fun\r\n'),
(5, 'MCL', '2018-12-08', 'Computer', 'social', '2', '\r\nincluding the student union of sicence and technology'),
(6, 'E3 ', '2018-12-09', 'ACES Coders v4.0', 'hackathon', '2', '\r\norganized by association of computer engineering student, department of computer science, faculty '),
(7, 'select ', '2018-12-13', 'Summwr Code', 'Hackathon', '2', '\r\n1192 students accepted from 70 countries'),
(8, 'MLT ', '2018-12-14', 'workshop_pearson', 'workshop', '2', 'through this event you can improve your java  script knowledge.'),
(9, 'MLT ', '2018-11-12', 'Computr Software Troubleshooting camp', 'social services', '2', 'including the student union of science and technology \r\n'),
(10, 'select ', '2018-11-21', 'ACES Coders v4.0', 'hackathon', '', '\r\norganized by association of computer engineering student, department of computer science, faculty '),
(11, 'E3 ', '2018-11-13', 'workshop_pearson', 'worksop', '2', 'all students are welcome to improve your knowledge\r\n'),
(13, 'E1', '2019-02-28', 'Java', 'hackathon', '01', '\r\nsfxls');

-- --------------------------------------------------------

--
-- Table structure for table `event_coordinator`
--

CREATE TABLE `event_coordinator` (
  `co_id` int(11) NOT NULL,
  `co_name` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `co_username` varchar(100) DEFAULT NULL,
  `co_password` varchar(100) NOT NULL,
  `admin_id` varchar(100) DEFAULT NULL,
  `registered_date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_coordinator`
--

INSERT INTO `event_coordinator` (`co_id`, `co_name`, `email`, `co_username`, `co_password`, `admin_id`, `registered_date`) VALUES
(5, 'Gihan ', '', 'GC345', '789', NULL, '2018-12-06'),
(4, 'Sanduni ', '', 'MSC123', 'schadi666', NULL, '2018-12-06'),
(6, 'Rajika ', '', 'RK890', '567y', NULL, '2018-12-06'),
(7, 'Anjalee ', '', 'Anji', 'Anji567', NULL, '2018-12-06'),
(10, 'Sachithre Weerathunge ', 'sachithre@gmail.com', 'sachithre', 'sachithre', NULL, '2018-12-06'),
(11, 'Lahiru ', 'lahiru@gmail.com', 'Lahiru', 'lahiru', NULL, '2018-12-06'),
(12, 'saduni123 ', 'sachintha2550@gmail.com', 'saduni56', '890', NULL, '2019-02-19'),
(13, 'gihan123 ', 'gihan@gmail.com', 'gihan789', 'gihan789', NULL, '2019-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `job_id` int(100) NOT NULL,
  `position` varchar(100) DEFAULT NULL,
  `job_details` varchar(1000) NOT NULL,
  `date` date DEFAULT NULL,
  `company_id` int(11) NOT NULL,
  `Selected` int(10) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`job_id`, `position`, `job_details`, `date`, `company_id`, `Selected`) VALUES
(1, 'Software Engineer', '', '2018-11-16', 5, NULL),
(3, 'Software Engineer', '', '2018-11-01', 4, NULL),
(8, 'Software Engineer', '', '2018-11-08', 3, NULL),
(7, 'Quality Assuarance', '', '2018-09-08', 0, NULL),
(17, 'Software Engineer', 'Vacancy for Junior software engineer', '2018-12-06', 11, NULL),
(10, 'Software Engineer', 'hejnsrm erhtg sethsjt', '2018-11-18', 4, NULL),
(11, 'business Analysis', 'gijfsdhdxgxvxvsd', '2018-11-18', 4, NULL),
(12, 'system admin', 'fgsfgdsgdsgsdgdg', '2018-11-18', 4, NULL),
(13, 'user admin', 'bsfhdshshsd', '2018-11-18', 4, NULL),
(14, 'Project Manager', 'leading a company using its employees', '2018-11-18', 4, NULL),
(15, 'system Designer', 'dgdgdgxxdgdfbvnvncxgsg', '2018-11-20', 6, NULL),
(16, 'trainee', 'Project manager', '2018-12-06', 4, NULL),
(18, 'Quality Assurance engineer', 'Internship for Undergraduate', '2018-12-06', 11, NULL),
(19, 'System Admin', 'Vacancy For system admin', '2018-12-06', 14, NULL),
(20, 'Developer', 'Junior developer for Robotics', '2018-12-06', 14, NULL),
(22, 'Software Engineer', 'njhhdhjhghghgdhhjk', '2018-12-07', 11, NULL),
(24, 'marketing assistant', 'junior marketing assistant', '2019-02-17', 11, NULL),
(25, 'Trainee', 'need some one who excellent in prgramming ', '2019-02-18', 15, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `job_company`
--

CREATE TABLE `job_company` (
  `job_id` varchar(100) NOT NULL,
  `company_id` varchar(100) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `body`, `created_at`, `updated_at`) VALUES
(1, 'UWU COLLAB Discussions Forum', '', 'Comment Your problems,ideas      in here', '2019-02-19 11:53:38', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `project_id` int(11) NOT NULL,
  `authors` varchar(100) DEFAULT NULL,
  `project_title` varchar(100) DEFAULT NULL,
  `project_type` varchar(100) NOT NULL,
  `Language` varchar(100) NOT NULL,
  `Degree` varchar(100) NOT NULL,
  `Reg_No` varchar(100) NOT NULL,
  `supervisor_Name` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `projectrequest`
--

CREATE TABLE `projectrequest` (
  `CompanyName` varchar(100) DEFAULT NULL,
  `CompanyType` varchar(100) DEFAULT NULL,
  `ProjectName` varchar(100) DEFAULT NULL,
  `ProjectType` varchar(100) DEFAULT NULL,
  `Technology` varchar(100) DEFAULT NULL,
  `StartDate` date NOT NULL,
  `CompletionDate` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projectrequest`
--

INSERT INTO `projectrequest` (`CompanyName`, `CompanyType`, `ProjectName`, `ProjectType`, `Technology`, `StartDate`, `CompletionDate`) VALUES
('virtuza', 'IT', 'dcd', 'Mini Project', 'JSP', '2019-05-04', '2019-08-09'),
('fgsbf ', 'Management', 'etg', 'Mini Project', 'ASP', '2019-05-04', '2019-08-09'),
('fbfx', 'Management', '4wtrge', 'Research Project', 'C#', '2019-05-04', '2019-08-09'),
('vrtuza', 'Management', 'sfsfggfghnf', 'Research Project', 'JSP', '2019-05-04', '2019-08-09'),
('virtu', 'IT', 'robotic', 'Mini Project', 'PHP', '2014-12-16', '2019-02-11');

-- --------------------------------------------------------

--
-- Table structure for table `project_report`
--

CREATE TABLE `project_report` (
  `projectid` int(11) NOT NULL,
  `path` varchar(100) NOT NULL,
  `studentname` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project_report`
--

INSERT INTO `project_report` (`projectid`, `path`, `studentname`) VALUES
(2, 'Engineering%20Project%20Report.pdf', 'Gihan Chathuranga'),
(1, 'Science%20Fair%20Project%20Report.pdf', 'Gihan Chathuranga');

-- --------------------------------------------------------

--
-- Table structure for table `replies`
--

CREATE TABLE `replies` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `body` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `replies`
--

INSERT INTO `replies` (`id`, `user_id`, `comment_id`, `body`, `created_at`, `updated_at`) VALUES
(6, 1, 43, 'its essay.you want a supper patch and try it', '2018-11-19 03:22:31', '2018-11-19 03:22:31'),
(14, 1, 49, 'esay to fix that', '2018-12-07 03:30:56', '2018-12-07 03:30:56'),
(15, 1, 51, 'hai\n', '2019-02-06 02:00:52', '2019-02-06 02:00:52'),
(16, 1, 52, 'xdbfc ', '2019-02-19 09:13:55', '2019-02-19 09:13:55'),
(17, 1, 112, 'hiii', '2019-02-19 10:55:06', '2019-02-19 10:55:06'),
(31, 1, 113, 'ok', '2019-02-19 10:57:30', '2019-02-19 10:57:30'),
(42, 1, 114, 'Ok i will tell', '2019-02-19 11:03:02', '2019-02-19 11:03:02'),
(43, 1, 116, 'i have some problems', '2019-02-19 12:01:24', '2019-02-19 12:01:24'),
(44, 1, 117, 'hi', '2019-02-19 15:10:16', '2019-02-19 15:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `st_id` int(100) NOT NULL,
  `st_name` varchar(100) DEFAULT NULL,
  `gender` varchar(100) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `faculty` varchar(100) DEFAULT NULL,
  `department` varchar(100) DEFAULT NULL,
  `degree` varchar(100) DEFAULT NULL,
  `ac_year` varchar(100) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `tel_no` varchar(100) DEFAULT NULL,
  `user_name` varchar(100) DEFAULT NULL,
  `admin_id` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`st_id`, `st_name`, `gender`, `DOB`, `faculty`, `department`, `degree`, `ac_year`, `address`, `email`, `tel_no`, `user_name`, `admin_id`) VALUES
(34, 'Lahiru siriwardhana', 'Male', '1994-02-22', 'Export Agriculture', 'Export Agriculture', 'EAG', '2017/2018', 'matara123', 'lahiru@gmail.com', '07172746356', 'siriwardhana', 'UWU/EAG/17/018'),
(32, 'Gihan Chathuranga', 'Male', '1995-11-29', 'Science & Technology', 'Computer Science & Technology', 'IIT', '2014/2015', 'opanayake', 'gihan353@gmail.com', '0717274611', 'gihan353', 'UWU/IIT/15/029'),
(33, 'Yasiru Lakshitha', 'Male', '1996-01-21', 'Science & Technology', 'Computer Science & Technology', 'CST', '2016/2017', 'Kadawatha', 'yasiru@gmail.com', '0717274633', 'yasiru', 'UWU/CST/16/004');

-- --------------------------------------------------------

--
-- Table structure for table `studentproject`
--

CREATE TABLE `studentproject` (
  `Student_Id` int(100) NOT NULL,
  `Student_name` varchar(100) DEFAULT NULL,
  `Degree` varchar(100) DEFAULT NULL,
  `year` varchar(100) DEFAULT NULL,
  `Email` varchar(100) DEFAULT NULL,
  `project_type` varchar(100) DEFAULT NULL,
  `interest_area` varchar(100) DEFAULT NULL,
  `Java` varchar(11) DEFAULT NULL,
  `PHP` varchar(11) DEFAULT NULL,
  `JSP` varchar(11) DEFAULT NULL,
  `ASP` varchar(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentproject`
--

INSERT INTO `studentproject` (`Student_Id`, `Student_name`, `Degree`, `year`, `Email`, `project_type`, `interest_area`, `Java`, `PHP`, `JSP`, `ASP`) VALUES
(32, 'Gihan Chathuranga', 'IIT', '2014/2015', 'gihan353@gmail.com', 'Mini Project', 'Web Application', '0%-25%', '25%-50%', '0%-25%', '75%-100%'),
(29, 'Gihan Chathuranga', 'IIT', '2014/2015', 'gihan353@gmail.com', 'Mini Project', 'Web Application', '50%-75%', '25%-50%', '50%-75%', '0%-25%'),
(32, 'Gihan Chathuranga', 'IIT', '2014/2015', 'gihan353@gmail.com', 'Mini Project', 'Mobile Application', '25%-50%', '25%-50%', '50%-75%', '25%-50%'),
(32, 'Gihan Chathuranga', 'IIT', '2014/2015', 'gihan353@gmail.com', 'Mini Project', 'Network', 'High', 'High', 'Medium', 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `student_job`
--

CREATE TABLE `student_job` (
  `st_id` varchar(100) DEFAULT NULL,
  `job_id` varchar(100) DEFAULT NULL,
  `path` varchar(100) NOT NULL,
  `sj_date` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_job`
--

INSERT INTO `student_job` (`st_id`, `job_id`, `path`, `sj_date`) VALUES
('32', '22', 'ffed29a7de8c85331098b4793c399cea.pdf', '2018-12-07'),
('32', '17', '0b30bc954482e9f8fac658e52e592625.pdf', '2018-12-07'),
('32', '17', '283f12433212103edccf7afeeae951af.pdf', '2018-12-07'),
('32', '17', '8afbb1c114638e3724dd9d20715e5370.pdf', '2018-12-07'),
('32', '17', 'cbfa6167ab652086dc422e12e1eb293e.pdf', '2018-12-07'),
('32', '17', '1b4252fa4906ce83923651b8073e05f1.pdf', '2018-12-06'),
('32', '17', 'c1561c550cc6ad73a56a21b8dd7cda1b.pdf', '2019-02-19'),
('32', '18', 'cbc67bae08f8784e5ed38f07188592cb.pdf', '2019-02-19'),
('32', '18', 'e3f36848656798cd8bd31c5394490a7b.pdf', '2019-02-19');

-- --------------------------------------------------------

--
-- Table structure for table `stumessage`
--

CREATE TABLE `stumessage` (
  `Sender` varchar(100) DEFAULT NULL,
  `Receiver` varchar(100) DEFAULT NULL,
  `Subject` varchar(50) DEFAULT NULL,
  `Msg` varchar(100) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stumessage`
--

INSERT INTO `stumessage` (`Sender`, `Receiver`, `Subject`, `Msg`) VALUES
('yttuytut', ',hjmnb hv', 'sadfsz', 'xvbvcbcvbcvnb\r\n                        '),
('wrgf', 'sdvc ', 'vfcb', '\r\n            I accept            ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(10) NOT NULL,
  `activated` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`, `type`, `activated`) VALUES
('admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin', 1),
('bevi', 'bevi', 'company', 1),
('bevyLabs', '59cd42e566b458fe3418a5bee707019a4f0dafa0', 'company', 1),
('dilan123', '', 'student', 0),
('dilan1234', '7b9afce188d058f3ba7991c14acc4614c1e93df4', 'student', 1),
('gihan353', '22114614DDF230CCC9041B50E0F4A0EB59CD25BA', 'student', 1),
('gihan789', '6c107122bb0fb8be2b74a0ddac6245cfca31f77d', 'event_co', 1),
('Lahiru', '69DA57E37688862D78E5C6A1918F71240309B291', 'event_co', 1),
('lolc', '6d77a5d6df74b523d2db5f588e8f4055f33e1b12', 'company', 1),
('madusanka', 'abc', 'student', 1),
('madusanka123', '7C3607B8E61BCF1944E9E8503A660F21F4B6F3F1', 'student', 0),
('madusanka1234', 'abc', 'student', 0),
('pearson', '123', 'company', 0),
('saduni56', '890', 'event_co', 0),
('siriwardhana', '123', 'student', 0),
('telecom', 'telecom', 'company', 0),
('vibba123', 'f7d723750ed2500ccc6b82f9910bcb3b0dd6d289', 'student', 1),
('Virtu', '7C3607B8E61BCF1944E9E8503A660F21F4B6F3F1', 'company', 1),
('yasiru', 'yasiru', 'student', 0);

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE `workshop` (
  `wrk_id` int(11) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `event_type` varchar(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `workshop`
--

INSERT INTO `workshop` (`wrk_id`, `event_name`, `location`, `date`, `event_type`) VALUES
(1, 'gc', 'ch', '2019-02-22', ''),
(2, 'java ', 'E1', '2019-02-23', 'workshop'),
(3, 'java ', 'E1', '2019-02-23', 'workshop'),
(4, 'dd', 'ds', '2019-02-07', 'ds'),
(5, 'Java ', 'E1', '2019-02-28', 'hackathon'),
(6, 'Java ', 'E1', '2019-02-28', 'hackathon'),
(7, 'Java ', 'E1', '2019-02-28', 'hackathon');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `attendence`
--
ALTER TABLE `attendence`
  ADD PRIMARY KEY (`workshop_id`),
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`company_id`);

--
-- Indexes for table `company_cv`
--
ALTER TABLE `company_cv`
  ADD PRIMARY KEY (`company_id`),
  ADD KEY `cv_id` (`cv_id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`event_id`),
  ADD KEY `co_id` (`co_id`);

--
-- Indexes for table `event_coordinator`
--
ALTER TABLE `event_coordinator`
  ADD PRIMARY KEY (`co_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `job_company`
--
ALTER TABLE `job_company`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_id` (`company_id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`slug`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`project_id`);

--
-- Indexes for table `project_report`
--
ALTER TABLE `project_report`
  ADD PRIMARY KEY (`projectid`);

--
-- Indexes for table `replies`
--
ALTER TABLE `replies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`st_id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `student_job`
--
ALTER TABLE `student_job`
  ADD KEY `job_id` (`job_id`),
  ADD KEY `st_id` (`st_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `workshop`
--
ALTER TABLE `workshop`
  ADD PRIMARY KEY (`wrk_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `company_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `event_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `event_coordinator`
--
ALTER TABLE `event_coordinator`
  MODIFY `co_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `project_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_report`
--
ALTER TABLE `project_report`
  MODIFY `projectid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `replies`
--
ALTER TABLE `replies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `st_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `workshop`
--
ALTER TABLE `workshop`
  MODIFY `wrk_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
