-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 10, 2019 lúc 09:16 AM
-- Phiên bản máy phục vụ: 10.1.35-MariaDB
-- Phiên bản PHP: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `ows-contactdb`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `contacts`
--

CREATE TABLE `contacts` (
  `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `phone1` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phone2` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `fb` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `company` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `contacts`
--

INSERT INTO `contacts` (`name`, `phone1`, `phone2`, `email`, `fb`, `company`, `id`) VALUES
('Nguyễn Văn Hoàng', '0337892581', '0337898580', 'hoangnv@gmail.com', 'https://www.facebook.com/hoangnv', 'BK-soft', 1),
('Lâm Minh Nhật Hùng', '0994851257', '0993654785', 'nhathung@gmail.com', 'https://www.facebook.com/nhathung', 'BK-soft', 2),
('Trần Khánh Vy', '0337685521', '0337685856', 'khanhvy@gmail.com', 'https://www.facebook.com/khanhvy', 'DEHA-soft', 3),
('Lâm Kim Lệ Hằng', '0995682534', '0995685628', 'kimhang@gmail.com', 'https://www.facebook.com/kimhang', 'DEHA-soft', 4),
('Mạc Văn Khoa', '03376811111', '0337682222', 'mackhoa@gmail.com', 'https://www.facebook.com/mackhoa', 'DEHA-soft', 6),
('Nguyễn Đình Vũ', '0978256321', '0985521456', 'dinhvu@gmail.com', 'https://www.facebook.com/vudinh', 'BKACAD-soft', 66);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
