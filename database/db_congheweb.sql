-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2021 lúc 01:03 PM
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
  `id_class` int(11) NOT NULL,
  `name_class` varchar(20) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_class`
--

INSERT INTO `tb_class` (`id_class`, `name_class`) VALUES
(1, '61PM1'),
(2, '61PM2'),
(3, '61HTTT'),
(4, '61CNTT');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_homwork`
--

CREATE TABLE `tb_homwork` (
  `id_home` int(11) NOT NULL,
  `id_sub` int(11) NOT NULL,
  `id_class` int(11) NOT NULL,
  `home_name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `start_date` datetime DEFAULT NULL,
  `end_date` datetime DEFAULT NULL,
  `home_level` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_homwork`
--

INSERT INTO `tb_homwork` (`id_home`, `id_sub`, `id_class`, `home_name`, `start_date`, `end_date`, `home_level`) VALUES
(1, 1, 1, 'Thiết kế giao diện sử dụng boostrap 5\r\n', '2021-10-29 13:00:00', '2021-11-03 14:07:14', 1),
(2, 1, 3, 'Tạo website bán hàng', '2021-10-29 09:14:30', '2021-11-02 14:14:30', 1),
(3, 3, 4, 'Bài tập view, trigger', '2021-10-30 14:14:30', '2021-10-31 14:14:30', 0),
(4, 2, 2, 'Vẽ không gian trạng thái', '2021-10-28 14:00:00', '2021-10-29 14:00:00', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_mark`
--

CREATE TABLE `tb_mark` (
  `id_home` int(11) DEFAULT NULL,
  `id_student` int(11) DEFAULT NULL,
  `baitap` int(11) NOT NULL,
  `finish_date` datetime DEFAULT NULL,
  `team` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mark` float DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_mark`
--

INSERT INTO `tb_mark` (`id_home`, `id_student`, `baitap`, `finish_date`, `team`, `mark`, `status`) VALUES
(1, 1, 0, '2021-10-28 15:00:07', 'user_1.jpg', 9, 1),
(1, 2, 0, '2021-10-28 15:00:07', 'user_2.jpg', 8.5, 1),
(4, 3, 0, '2021-10-29 10:02:25', 'user1.jpg', 7, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_student`
--

CREATE TABLE `tb_student` (
  `id_student` int(11) NOT NULL,
  `id_class` int(11) DEFAULT NULL,
  `name_student` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` tinyint(4) DEFAULT NULL,
  `image_student` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email_student` char(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` char(15) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_student`
--

INSERT INTO `tb_student` (`id_student`, `id_class`, `name_student`, `gender`, `image_student`, `email_student`, `phone`) VALUES
(1, 1, 'Nguyễn Văn Tân', 1, 'user_default.jpg', 'nvantan@gmail.com', ''),
(2, 2, 'Hồ Hồng Quân', 1, 'user_default.jpg', 'hhongquan@gmail.com', ''),
(3, 3, 'Nguyễn Minh Vương', 1, 'user_default.jpg', 'nmvuong@gmail.com', '');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_subject`
--

CREATE TABLE `tb_subject` (
  `id_sub` int(11) NOT NULL,
  `name_sub` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `desription` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `img_sub` char(30) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_subject`
--

INSERT INTO `tb_subject` (`id_sub`, `name_sub`, `desription`, `img_sub`) VALUES
(1, 'Công nghệ web', 'Thiết kế giao diện website', 'cnweb.jpg'),
(2, 'Trí tuệ nhân tạo', 'Các phương pháp tìm kiếm', 'ai.jpg'),
(3, 'Hệ quản trị cơ sở dữ liệu', 'Database, view, trigger', 'hqtcsdl.jpg'),
(4, 'Hệ điều hành', NULL, 'hdh.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tb_user`
--

CREATE TABLE `tb_user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_email` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_pass` char(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regisdate` datetime DEFAULT NULL,
  `user_level` tinyint(4) DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `user_code` tinyint(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tb_user`
--

INSERT INTO `tb_user` (`user_id`, `user_name`, `user_email`, `user_pass`, `regisdate`, `user_level`, `status`, `user_code`) VALUES
(1, 'admin', 'admin@gmail.com', '12345', '2021-10-29 06:18:15', 1, 1, NULL),
(2, 'archiro', 'archiro@gmail.com', '12345', '2021-10-29 06:19:44', 1, 1, NULL),
(3, 'nvtan', 'nvantan@gmail.com', '12345', '2021-10-29 06:19:44', 0, 1, NULL),
(4, 'hhquan', 'hhquan@gmail.com', '12345', '2021-10-29 06:20:31', 0, 0, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tb_class`
--
ALTER TABLE `tb_class`
  ADD PRIMARY KEY (`id_class`);

--
-- Chỉ mục cho bảng `tb_homwork`
--
ALTER TABLE `tb_homwork`
  ADD PRIMARY KEY (`id_home`),
  ADD KEY `id_class` (`id_class`),
  ADD KEY `id_sub` (`id_sub`);

--
-- Chỉ mục cho bảng `tb_mark`
--
ALTER TABLE `tb_mark`
  ADD KEY `id_home` (`id_home`),
  ADD KEY `id_student` (`id_student`);

--
-- Chỉ mục cho bảng `tb_student`
--
ALTER TABLE `tb_student`
  ADD PRIMARY KEY (`id_student`),
  ADD KEY `id_class` (`id_class`);

--
-- Chỉ mục cho bảng `tb_subject`
--
ALTER TABLE `tb_subject`
  ADD PRIMARY KEY (`id_sub`);

--
-- Chỉ mục cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tb_class`
--
ALTER TABLE `tb_class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_homwork`
--
ALTER TABLE `tb_homwork`
  MODIFY `id_home` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_student`
--
ALTER TABLE `tb_student`
  MODIFY `id_student` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `tb_subject`
--
ALTER TABLE `tb_subject`
  MODIFY `id_sub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `tb_homwork`
--
ALTER TABLE `tb_homwork`
  ADD CONSTRAINT `tb_homwork_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `tb_class` (`id_class`),
  ADD CONSTRAINT `tb_homwork_ibfk_2` FOREIGN KEY (`id_sub`) REFERENCES `tb_subject` (`id_sub`);

--
-- Các ràng buộc cho bảng `tb_mark`
--
ALTER TABLE `tb_mark`
  ADD CONSTRAINT `tb_mark_ibfk_1` FOREIGN KEY (`id_home`) REFERENCES `tb_homwork` (`id_home`),
  ADD CONSTRAINT `tb_mark_ibfk_2` FOREIGN KEY (`id_student`) REFERENCES `tb_student` (`id_student`);

--
-- Các ràng buộc cho bảng `tb_student`
--
ALTER TABLE `tb_student`
  ADD CONSTRAINT `tb_student_ibfk_1` FOREIGN KEY (`id_class`) REFERENCES `tb_class` (`id_class`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
