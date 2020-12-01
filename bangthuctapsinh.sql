-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th6 16, 2020 lúc 10:46 PM
-- Phiên bản máy phục vụ: 5.7.26
-- Phiên bản PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `bhsoft_bangthuctapsinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thuctapsinh`
--

DROP TABLE IF EXISTS `thuctapsinh`;
CREATE TABLE IF NOT EXISTS `thuctapsinh` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `avatar` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ten` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ngaysinh` date NOT NULL,
  `gioitinh` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `ngayvao` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `thoigiancomat` text COLLATE utf8_unicode_ci NOT NULL,
  `camket` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `cmnn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `phuongtien` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `bienso` text COLLATE utf8_unicode_ci NOT NULL,
  `reviewlan1` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `reviewlan2` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `danhgia` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `thuctapsinh`
--

INSERT INTO `thuctapsinh` (`id`, `avatar`, `ten`, `ngaysinh`, `gioitinh`, `email`, `diachi`, `ngayvao`, `thoigiancomat`, `camket`, `cmnn`, `phuongtien`, `bienso`, `reviewlan1`, `reviewlan2`, `danhgia`) VALUES
(1, 'uploads/quanvu.jpg', 'Quan Vũ', '2009-08-26', 'nam', 'cuchuoibothay@gmail.com', 'hà nôi', '2003-04-06', 'Quan Vũ', 'khongdongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Quan Vũ'),
(2, 'uploads/lubo.jpg', 'Lữ Bố', '1890-05-19', 'nam', 'dotung@gmail.com', 'hà nôi', '2019-04-27', 'Lữ Bố\r\n', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Lữ Bố\r\n'),
(3, 'uploads/dienvi.jpg', 'Điển Vi', '2014-10-26', 'nam', 'cuchuoibothay@gmail.com', 'hà nôi', '2010-04-27', 'Điển Vi', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Điển Vi'),
(4, 'uploads/dieuthuyen.jpeg', 'Điêu thuyền', '2014-08-26', 'nu', 'cuchuoibothay@gmail.com', 'hà nôi', '2010-04-27', 'Điêu thuyền', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Điêu thuyền'),
(5, 'uploads/chanlac.jpg', 'Chân Lạc (Chân Cơ)', '2014-09-26', 'nu', 'phubui2702@gmail.com', 'hà nôi', '2010-04-27', 'Chân Lạc (Chân Cơ)', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Chân Lạc (Chân Cơ)'),
(6, 'uploads/tieukieu.jpg', 'Tiểu Kiều', '2014-08-26', 'nu', 'cuchuoibothay@gmail.com', 'hà nôi', '2010-04-27', 'Tiểu Kiều', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Tiểu Kiều'),
(7, 'uploads/giacatluong.jpg', 'Gia Cát Lượng', '2014-08-26', 'nu', 'cuchuoibothay@gmail.com', 'hà nôi', '2010-04-27', 'Gia Cát Lượng', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Gia Cát Lượng'),
(8, 'uploads/taothao.jpg', 'Tào Tháo', '2014-08-26', 'nu', 'cuchuoibothay@gmail.com', 'hà nôi', '2010-04-27', 'Tào Tháo', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Tào Tháo'),
(14, 'uploads/duongngochoan.jpg', 'Dương Ngọc Hoàn', '2014-10-29', 'nu', 'dotung@gmail.com', 'Đã nẵng', '2014-09-27', 'Dương Ngọc Hoàn', 'khongdongy', '1234567890', 'Tàu hỏa', '0123456789', '2015-10-29', '2013-08-23', 'Dương Ngọc Hoàn'),
(10, 'uploads/truongphi.jpg', 'Trương Phi', '2014-08-26', 'nam', 'cuchuoibothay@gmail.com', 'hà nôi', '2010-04-27', 'Trương Phi', 'dongy', '000005555', 'xe may', 'hd-198', '2016-10-28', '2011-07-29', 'Trương Phi'),
(12, 'uploads/taythi.jpg', 'Tây Thi', '2014-09-24', 'nu', 'nguyenvanhungcd0007@gmail.com', 'Sài gòn', '2015-07-26', 'Tây Thi', 'dongy', '000005555', 'Ô tô', 'hd-198', '2017-09-26', '2017-11-29', 'Tây Thi'),
(13, 'uploads/vuongchieuquan.jpg', ' Vương Chiêu Quân', '2014-09-24', 'nu', 'nguyenvanhungcd0007@gmail.com', 'Sài gòn', '2015-07-26', ' Vương Chiêu Quân', 'dongy', '000005555', 'Ô tô', 'hd-198', '2017-09-26', '2017-11-29', ' Vương Chiêu Quân'),
(15, 'uploads/tumay.jpg', 'Tư Mã Ý', '2015-06-23', 'nu', 'admin@gmail.com', 'Đã nẵng', '2012-10-30', 'Tư Mã Ý', 'khongdongy', '4353454', 'Máy bay', '0123456789', '2012-07-24', '2017-05-26', 'Tư Mã Ý'),
(16, 'uploads/masieu.jpg', 'Mã Siêu', '2018-09-27', 'nu', 'masieu@gmail.com', 'Vũng tàu', '2018-09-27', 'Mã Siêu', 'dongy', '0987654321', 'căng hải', '0987654321', '2016-05-24', '2011-06-23', 'Mã Siêu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
