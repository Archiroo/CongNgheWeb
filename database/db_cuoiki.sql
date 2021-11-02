-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2021 at 07:02 PM
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
-- Database: `db_cuoiki`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_homework`
--

CREATE TABLE `tb_homework` (
  `id_homework` int(11) NOT NULL,
  `id_subject` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_homework` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excercise` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT current_timestamp(),
  `end_date` datetime DEFAULT NULL,
  `home_level` tinyint(4) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_homework`
--

INSERT INTO `tb_homework` (`id_homework`, `id_subject`, `name_homework`, `excercise`, `start_date`, `end_date`, `home_level`) VALUES
(1, 'CSE_482', 'Tính sự bế tắc', 'baitap1.pdf', '2021-11-01 21:02:24', '2021-11-02 21:00:00', 0),
(2, 'CSE_485', 'Thiết kế website sử dụng boostrap 5', 'baitap3.pdf', '2021-11-01 21:02:24', '2021-11-05 22:00:00', 0),
(3, 'CSE_485', 'Thiết kế website bán hàng', 'baitap3.pdf', '2021-11-01 21:03:28', '2021-11-05 23:59:59', 1),
(4, 'CSE_485', 'Thiết kế website quản lý', 'baitap3.pdf', '2021-11-01 21:04:33', '2021-11-05 00:00:00', 1),
(5, 'CSE_486', 'Bài tập thủ tục', 'baitap2.pdf', '2021-11-01 21:05:30', '2021-11-03 21:00:00', 1),
(7, 'CSE_482', 'Tính độ trễ trung bình', 'baitap2.pdf', '2021-11-02 00:45:27', '2021-11-04 12:00:00', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_mark`
--

CREATE TABLE `tb_mark` (
  `id_homework` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  `number_student` int(11) DEFAULT 0,
  `submit_homework` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `finish_date` datetime DEFAULT current_timestamp(),
  `mark` float DEFAULT 0,
  `status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_mark`
--

INSERT INTO `tb_mark` (`id_homework`, `id_student`, `number_student`, `submit_homework`, `finish_date`, `mark`, `status`) VALUES
(1, 2, 0, 'baitap1.zip', '2021-11-01 21:16:21', 9, 1),
(5, 3, 0, 'baitap3.zip', '2021-11-01 21:17:24', 9, 1),
(2, 2, 1, 'baitap2.zip', '2021-11-01 21:18:29', 0, 0),
(3, 3, 1, 'baitap4.zip', '2021-11-01 21:18:29', 0, 0),
(3, 5, 0, 'baitap4.zip', '2021-11-02 16:22:53', 0, 0),
(1, 5, 0, 'baitaip1.zip', '2021-11-02 20:11:06', 7, 1),
(1, 3, 0, 'baitap2.zip', '2021-11-02 20:11:06', 10, 1),
(7, 2, 0, 'baitaip1.zip', '2021-11-02 20:13:16', 9, 1),
(7, 3, 0, 'baitap3.zip', '2021-11-02 20:13:16', 0, 0),
(7, 5, 0, 'baitap2.zip', '2021-11-02 20:21:05', 0, 0),
(2, 4, 0, 'baitap2.zip', '2021-11-02 20:25:24', 0, 0),
(2, 5, 0, 'baitap1.zip', '2021-11-02 20:27:32', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tb_register`
--

CREATE TABLE `tb_register` (
  `id_student` int(11) DEFAULT NULL,
  `id_subject` char(10) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_register`
--

INSERT INTO `tb_register` (`id_student`, `id_subject`) VALUES
(2, 'CSE_485'),
(2, 'CSE_482'),
(3, 'CSE_486'),
(5, 'CSE_114'),
(4, 'CSE_485'),
(5, 'CSE_482'),
(3, 'CSE_482'),
(5, 'CSE_485'),
(6, 'CSE_114'),
(3, 'CSE_114'),
(6, 'CSE_485');

-- --------------------------------------------------------

--
-- Table structure for table `tb_student`
--

CREATE TABLE `tb_student` (
  `id_student` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name_student` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `image_student` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_student`
--

INSERT INTO `tb_student` (`id_student`, `user_id`, `name_student`, `gender`, `image_student`, `phone`) VALUES
(1, 1, 'Nguyễn Minh Đức', 1, 'user_1.jpg', '096 1111111'),
(2, 2, 'Nguyễn Văn Tân', 1, 'student_1.jpg', '096 2222222'),
(3, 9, 'Nguyễn Thúy Nga', 0, 'student_6.jpg', '096 3333333'),
(4, 3, 'Hồ Hồng Quân', 1, 'student_4.jpg', '086 44444444'),
(5, 10, 'Nguyễn Thanh Mai', 0, 'student_6.jpg', '096 5555555'),
(6, 6, 'Vương Khá Ok', 1, 'student_5.jpg', '096 666666');

-- --------------------------------------------------------

--
-- Table structure for table `tb_subject`
--

CREATE TABLE `tb_subject` (
  `id_subject` char(30) COLLATE utf8_unicode_ci NOT NULL,
  `name_subject` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_subject` char(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_subject`
--

INSERT INTO `tb_subject` (`id_subject`, `name_subject`, `description`, `img_subject`) VALUES
('CSE_114', 'Tin học đại cương', 'Nhập môn lập trình', 'subject_5.jpg'),
('CSE_482', 'Hệ điều hành', 'Chi tiết máy tính', 'subject_4.jpg'),
('CSE_485', 'Công nghệ web', 'Lập trình backend website', 'subject_1.jpg'),
('CSE_486', 'Hệ quản trị csdl', 'Database, trigger, view', 'subject_2.jpg'),
('CSE_492', 'Trí tuệ nhân tạo', 'Phương pháp duyệt cây tìm kiếm', 'subject_3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_team`
--

CREATE TABLE `tb_team` (
  `id_team` int(11) NOT NULL,
  `id_subject` char(30) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  `name_project` varchar(255) DEFAULT NULL,
  `name_student1` varchar(255) DEFAULT NULL,
  `name_student2` varchar(255) DEFAULT NULL,
  `name_student3` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_team`
--

INSERT INTO `tb_team` (`id_team`, `id_subject`, `id_student`, `name_project`, `name_student1`, `name_student2`, `name_student3`) VALUES
(1, 'CSE_485', 2, 'Website bán giày', 'Trịnh Hoàng Long', 'Nguyễn Minh Đức', 'Hà Việt Dũng');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_pass` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regisdate` datetime DEFAULT current_timestamp(),
  `user_level` tinyint(4) DEFAULT 0,
  `user_status` tinyint(4) DEFAULT 0,
  `code` char(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_pass`, `user_email`, `regisdate`, `user_level`, `user_status`, `code`) VALUES
(1, 'admin', '12345', 'admin@gmail.com', '2021-11-01 20:44:52', 1, 1, NULL),
(2, 'nvantan', '12345', 'nvantan@gmail.com', '2021-11-01 20:44:52', 0, 1, NULL),
(3, 'hhquan', '12345', 'hhquan@gmail.com', '2021-11-01 20:45:43', 0, 1, NULL),
(4, 'nmvuong', '12345', 'nmvuong@gmail.com', '2021-11-01 20:45:43', 0, 1, NULL),
(5, 'thlong', '12345', 'thlong@mgail.com', '2021-11-01 20:46:06', 0, 0, NULL),
(6, 'thhang', '12345', 'nthang@gmail.com', '2021-11-01 20:47:09', 0, 1, NULL),
(7, 'tbloan', '12345', 'tbloan@gmail.com', '2021-11-01 20:47:44', 0, 0, NULL),
(8, 'ntthuy', '12345', 'ntthuy@gmail.com', '2021-11-01 20:47:44', 0, 0, NULL),
(9, 'ntnga', '12345', 'ntnga@gmail.com', '2021-11-01 20:48:40', 0, 1, NULL),
(10, 'ntmai', '12345', 'ntmai@gmail.com', '2021-11-01 20:48:40', 1, 1, NULL),
(11, 'tqcong', '12345', 'tqcong@gmail.com', '2021-11-01 22:47:35', 0, 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_homework`
--
ALTER TABLE `tb_homework`
  ADD PRIMARY KEY (`id_homework`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `tb_mark`
--
ALTER TABLE `tb_mark`
  ADD KEY `id_homework` (`id_homework`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD KEY `id_student` (`id_student`),
  ADD KEY `id_subject` (`id_subject`);

--
-- Indexes for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Indexes for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD PRIMARY KEY (`id_team`),
  ADD KEY `id_student` (`id_student`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_homework`
--
ALTER TABLE `tb_homework`
  MODIFY `id_homework` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_team`
--
ALTER TABLE `tb_team`
  MODIFY `id_team` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_homework`
--
ALTER TABLE `tb_homework`
  ADD CONSTRAINT `tb_homework_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `tb_subject` (`id_subject`);

--
-- Constraints for table `tb_mark`
--
ALTER TABLE `tb_mark`
  ADD CONSTRAINT `tb_mark_ibfk_1` FOREIGN KEY (`id_homework`) REFERENCES `tb_homework` (`id_homework`),
  ADD CONSTRAINT `tb_mark_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `tb_student` (`id_student`);

--
-- Constraints for table `tb_register`
--
ALTER TABLE `tb_register`
  ADD CONSTRAINT `tb_register_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `tb_student` (`id_student`),
  ADD CONSTRAINT `tb_register_ibfk_2` FOREIGN KEY (`id_subject`) REFERENCES `tb_subject` (`id_subject`);

--
-- Constraints for table `tb_student`
--
ALTER TABLE `tb_student`
  ADD CONSTRAINT `tb_student_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);

--
-- Constraints for table `tb_team`
--
ALTER TABLE `tb_team`
  ADD CONSTRAINT `tb_team_ibfk_1` FOREIGN KEY (`id_student`) REFERENCES `tb_student` (`id_student`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
