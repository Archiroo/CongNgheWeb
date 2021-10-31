-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 31, 2021 lúc 07:13 PM
-- Phiên bản máy phục vụ: 10.4.21-MariaDB
-- Phiên bản PHP: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `db_congheweb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_class`
--

CREATE TABLE `tb_class` (
  `id_class` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_class` char(100) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_class`
--

INSERT INTO `tb_class` (`id_class`, `name_class`) VALUES
('58KTPM', '58 Kĩ thuật phần mềm'),
('61CNTT', '61 Công nghệ thông tin'),
('61HTTT', '61 Hệ thống thông tin'),
('61KT', '61 Kế toán'),
('61PM1', '61 Công nghệ phần mềm 1'),
('61PM2', '61 Công nghệ phần mềm');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_homework`
--

CREATE TABLE `tb_homework` (
  `id_homework` int(11) NOT NULL,
  `id_subject` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `id_class` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name_homework` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `excercise` char(100) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime DEFAULT current_timestamp(),
  `end_date` datetime DEFAULT NULL,
  `home_level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_homework`
--

INSERT INTO `tb_homework` (`id_homework`, `id_subject`, `id_class`, `name_homework`, `excercise`, `start_date`, `end_date`, `home_level`) VALUES
(1, 'CSE_485', '61PM1', 'Thiết kế website dùng boostrap', '', '2021-10-29 22:30:00', '2021-10-31 22:30:00', 0),
(2, 'CSE_486', '61HTTT', 'Bài tập trigger', '', '2021-10-29 22:30:00', '2021-10-30 22:30:27', 0),
(3, 'CSE_492', '61CNTT', 'Vẽ cây theo phương pháp leo đồi', '', '2021-11-01 22:30:00', '2021-11-03 22:30:00', 0),
(4, 'CSE_485', '61PM2', 'Thiết kế website du lịch', '', '2021-10-29 22:30:00', '2021-11-03 22:30:30', 0),
(5, 'CSE_486', '61PM1', 'Bài tập về thủ tục', '', '2021-11-01 00:54:07', '2021-11-03 12:00:00', 0),
(6, 'CSE_486', '61CNTT', 'Vẽ cây tìm kiếm', '', '2021-11-01 01:11:00', '2021-11-02 22:00:00', 0),
(7, 'CSE_114', '61HTTT', 'Phòng cháy chữa cháy', 'baitap2.pdf', '2021-11-01 01:12:28', '2021-11-05 22:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_mark`
--

CREATE TABLE `tb_mark` (
  `id_homework` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  `excercise` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `finish_date` datetime DEFAULT current_timestamp(),
  `team` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mark` float DEFAULT 0,
  `mark_status` tinyint(4) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_mark`
--

INSERT INTO `tb_mark` (`id_homework`, `id_student`, `excercise`, `finish_date`, `team`, `mark`, `mark_status`) VALUES
(1, 1, 'bai_1.docx', '2021-10-30 09:00:00', 'user_1.jpg', 0, 0),
(2, 2, 'bai_2.pdf', '2021-10-29 00:00:00', 'student_1.jpg', 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_student`
--

CREATE TABLE `tb_student` (
  `id_student` int(11) NOT NULL,
  `id_class` char(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name_student` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` bit(1) DEFAULT NULL,
  `image_student` char(30) COLLATE utf8_unicode_ci DEFAULT 'user_default.jpg',
  `phone` char(15) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_student`
--

INSERT INTO `tb_student` (`id_student`, `id_class`, `user_id`, `name_student`, `gender`, `image_student`, `phone`) VALUES
(1, '61PM1', 2, 'Hồ Hồng Quân', b'1', 'student_1.jpg', '096 2222222'),
(2, '61HTTT', 4, 'Nguyễn Minh Vương', b'1', 'student_3.jpg', '096 3333333'),
(6, '61KT', 17, 'Nguyễn Thu Hằng', b'0', 'student_6.jpg', '096 5269082'),
(57, '61KT', 16, 'Nguyễn Thị Hương Lan', b'0', 'student_6.jpg', '096 2538322');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_subject`
--

CREATE TABLE `tb_subject` (
  `id_subject` char(10) COLLATE utf8_unicode_ci NOT NULL,
  `name_subject` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desription` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_subject` char(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_subject`
--

INSERT INTO `tb_subject` (`id_subject`, `name_subject`, `desription`, `img_subject`) VALUES
('CSE_114', 'Tin học đại cương', 'Nhập môn lập trình', 'subject_5.jpg'),
('CSE_482', 'Hệ điều hành', 'Thông tin máy tính', 'subject_4.jpg'),
('CSE_485', 'Công nghệ web', 'Thiết kế website', 'subject_1.jpg'),
('CSE_486', 'Hệ quản trị cơ sở dữ liệu', 'Thiết kế database, view, proc', 'subject_2.jpg'),
('CSE_492', 'Trí tuệ nhân tạo', 'Học máy, không gian trạng thái', 'subject_3.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_pass` char(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regisdate` datetime DEFAULT current_timestamp(),
  `user_level` tinyint(4) DEFAULT NULL,
  `user_status` tinyint(4) DEFAULT 0,
  `code` char(100) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_pass`, `user_email`, `regisdate`, `user_level`, `user_status`, `code`) VALUES
(1, 'admin', '12345', 'admin@gmail.com', '2021-10-29 22:27:00', 1, 1, ''),
(2, 'hhquan', '12345', 'hhongquan@gmail.com', '2021-10-29 22:28:00', 0, 1, ''),
(3, 'nvtan', '12345', 'nvantan@gmail.com', '2021-10-29 22:29:00', 0, 1, ''),
(4, 'nmvuong', '12345', 'nmvuong@gmail.com', '2021-10-29 22:29:00', 0, 1, ''),
(5, 'thlong', '12345', 'thlong@mgail.com', '2021-10-29 22:31:00', 0, 1, ''),
(16, 'nthlan', '123', 'nthlan@gmail.com', '2021-10-31 10:21:02', 0, 1, ''),
(17, 'tbloan', '12345', 'tbloan@gmail.com', '2021-10-31 10:22:44', 0, 1, '');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Chỉ mục cho bảng `tb_homework`
--
ALTER TABLE `tb_homework`
  ADD PRIMARY KEY (`id_homework`),
  ADD KEY `id_subject` (`id_subject`),
  ADD KEY `id_class` (`id_class`);

--
-- Chỉ mục cho bảng `tb_mark`
--
ALTER TABLE `tb_mark`
  ADD KEY `id_homework` (`id_homework`),
  ADD KEY `id_student` (`id_student`);

--
-- Chỉ mục cho bảng `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_class` (`id_class`),
  ADD KEY `user_id` (`user_id`);

--
-- Chỉ mục cho bảng `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`id_subject`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_homework`
--
ALTER TABLE `tb_homework`
  MODIFY `id_homework` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_homework`
--
ALTER TABLE `tb_homework`
  ADD CONSTRAINT `tb_homework_ibfk_1` FOREIGN KEY (`id_subject`) REFERENCES `tb_subject` (`id_subject`),
  ADD CONSTRAINT `tb_homework_ibfk_2` FOREIGN KEY (`id_class`) REFERENCES `tb_class` (`id_class`);

--
-- Các ràng buộc cho bảng `tb_mark`
--
ALTER TABLE `tb_mark`
  ADD CONSTRAINT `tb_mark_ibfk_1` FOREIGN KEY (`id_homework`) REFERENCES `tb_homework` (`id_homework`),
  ADD CONSTRAINT `tb_mark_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `tb_student` (`id_student`);

--
-- Các ràng buộc cho bảng `tb_student`
--
ALTER TABLE `tb_student`
  ADD CONSTRAINT `tb_student_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `tb_class` (`id_class`),
  ADD CONSTRAINT `tb_student_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `tb_user` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
