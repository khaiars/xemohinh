-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th6 21, 2020 lúc 06:13 AM
-- Phiên bản máy phục vụ: 10.4.11-MariaDB
-- Phiên bản PHP: 7.2.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `xemohinh`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `danhmucsp`
--

CREATE TABLE `danhmucsp` (
  `idcl` int(12) NOT NULL,
  `tencl` varchar(100) NOT NULL,
  `thutu` int(4) NOT NULL DEFAULT 1,
  `anhien` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmucsp`
--

INSERT INTO `danhmucsp` (`idcl`, `tencl`, `thutu`, `anhien`) VALUES
(1, 'Mô hình moto 1:18', 2, 1),
(14, 'MÔ HÌNH Ô TÔ TỈ LỆ 1:24', 3, 1),
(15, 'Mô Hình Ô Tô Tỉ lệ 1:18', 16, 1),
(17, 'MÔ HÌNH MÔ TÔ 1:12', 4, 1),
(18, 'MÔ HÌNH MÔ TÔ 1:10', 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhang`
--

CREATE TABLE `donhang` (
  `idDH` int(4) NOT NULL,
  `idUser` int(4) NOT NULL DEFAULT 0,
  `ThoiDiemDatHang` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `TenNguoiNhan` varchar(100) NOT NULL DEFAULT '',
  `DTNguoiNhan` varchar(100) DEFAULT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `TongTien` int(11) NOT NULL,
  `idPTTT` varchar(20) NOT NULL,
  `idPTGH` varchar(20) NOT NULL,
  `Tax` int(11) NOT NULL,
  `Shipping` int(11) NOT NULL,
  `DaXuLy` tinyint(1) NOT NULL DEFAULT 0,
  `GhiChu` varchar(255) NOT NULL DEFAULT '',
  `DaTraTien` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhang`
--

INSERT INTO `donhang` (`idDH`, `idUser`, `ThoiDiemDatHang`, `TenNguoiNhan`, `DTNguoiNhan`, `DiaChi`, `TongTien`, `idPTTT`, `idPTGH`, `Tax`, `Shipping`, `DaXuLy`, `GhiChu`, `DaTraTien`) VALUES
(1, 2, '2020-04-15 08:30:39', 'aaa', '0123145235', 'aaaa', 100, 'b', 'b', 1, 1, 1, 'aaaaaaa', 1),
(82, 0, '2020-05-26 19:38:50', '1', '1', '1', 0, 'payment', 'chuyenphatnhanh', 0, 0, 0, '', 0),
(83, 0, '2020-05-26 19:41:17', '2', '2', '2', 0, 'chuyenkhoan', 'giaotannha', 0, 0, 0, '', 0),
(84, 0, '2020-06-04 15:15:17', '4', '4', '4', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(85, 0, '2020-06-04 15:20:09', '5', '5', '5', 0, 'payment', 'chuyenphatnhanh', 0, 0, 0, '', 0),
(86, 0, '2020-06-04 15:40:13', '6', '6', '6', 0, 'payment', 'chuyenphatnhanh', 0, 0, 0, '', 0),
(87, 0, '2020-06-04 15:41:02', '7', '7', '7', 0, 'payment', 'chuyenphatnhanh', 0, 0, 0, '', 0),
(88, 0, '2020-06-04 15:46:21', '8', '8', '8', 0, 'payment', 'giaotannha', 0, 0, 0, '', 0),
(89, 0, '2020-06-04 15:46:59', '9', '9', '9', 0, 'payment', 'chuyenphatnhanh', 0, 0, 0, '', 0),
(90, 0, '2020-06-04 16:19:54', '12', '12', '12', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(91, 0, '2020-06-09 11:10:11', '1', '1', '1', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(92, 0, '2020-06-09 12:04:53', 'a', 'a', 'a', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(93, 0, '2020-06-09 12:05:24', 'q', 'q', 'q', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(94, 0, '2020-06-09 12:06:07', 'q', 'q', 'q', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(95, 0, '2020-06-09 12:10:22', 'c', 'c', 'c', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(96, 0, '2020-06-18 16:59:27', '2', '2', '2', 0, 'payment', 'chuyenphatnhanh', 0, 0, 0, '', 0),
(97, 0, '2020-06-20 17:06:08', 'q', 'q', 'q', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0),
(98, 0, '2020-06-20 17:12:39', 'e', 'e', 'e', 0, 'payment', 'chuyenphatnhanh', 0, 0, 0, '', 0),
(99, 0, '2020-06-20 17:18:59', 'c', 'c', 'c', 0, 'payment', 'hoatoc', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `donhangchitiet`
--

CREATE TABLE `donhangchitiet` (
  `idChiTiet` int(4) NOT NULL,
  `idDH` int(4) NOT NULL DEFAULT 0,
  `idSP` int(4) NOT NULL DEFAULT 0,
  `TenSP` varchar(255) NOT NULL,
  `SoLuong` int(4) NOT NULL DEFAULT 0,
  `Gia` int(4) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `donhangchitiet`
--

INSERT INTO `donhangchitiet` (`idChiTiet`, `idDH`, `idSP`, `TenSP`, `SoLuong`, `Gia`) VALUES
(3, 89, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 2, 3600000),
(2, 88, 7, 'MÔ HÌNH XE MERCEDES-AMG GT3 PLAIN COLOR VERSION ', 1, 3600000),
(4, 90, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, 3600000),
(5, 90, 3, 'MÔ HÌNH LAMBORGHINI CENTENARIO LP770-4 BLACK 1:18 ', 1, 1000000),
(6, 91, 49, 'MÔ HÌNH XE KAWASAKI H2R', 2, 1000000),
(7, 92, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, 3600000),
(8, 93, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, 3600000),
(9, 94, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, 3600000),
(10, 95, 48, 'MÔ HÌNH YAMAHA SR400 YELLOW', 3, 750000),
(11, 96, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, 3600000),
(12, 97, 49, 'MÔ HÌNH XE KAWASAKI H2R', 1, 1000000),
(13, 97, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 2, 3600000),
(14, 97, 3, 'MÔ HÌNH LAMBORGHINI CENTENARIO LP770-4 BLACK 1:18 ', 1, 1000000),
(15, 98, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, 3600000),
(16, 99, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, 3600000);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `idCL` int(12) NOT NULL,
  `idSP` int(12) NOT NULL,
  `TenSP` varchar(100) NOT NULL,
  `AnHien` tinyint(1) NOT NULL,
  `Mota` varchar(255) NOT NULL,
  `NgayCapNhat` date NOT NULL,
  `Gia` int(11) NOT NULL,
  `GiaKM` int(11) NOT NULL,
  `urlHinh` varchar(255) NOT NULL,
  `SoLuongTonKho` int(4) NOT NULL,
  `SoLanMua` int(4) NOT NULL,
  `Hot` tinyint(1) NOT NULL,
  `SoLanXem` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`idCL`, `idSP`, `TenSP`, `AnHien`, `Mota`, `NgayCapNhat`, `Gia`, `GiaKM`, `urlHinh`, `SoLuongTonKho`, `SoLanMua`, `Hot`, `SoLanXem`) VALUES
(15, 1, 'MÔ HÌNH BUGATTI CHIRON BLACK 1:18 BBURAGO', 0, '', '2019-06-18', 950000, 30000, 'mo-hinh-bugatti-chiron-black-1-18-burago.jpg', 10, 0, 1, 23),
(10, 2, 'MÔ HÌNH XE MERCEDES-AMG GT3 PLAIN COLOR VERSION ', 1, '', '2019-06-17', 3600000, 50000, 'product_s4592.jpg', 3, 0, 1, 46),
(1, 3, 'MÔ HÌNH LAMBORGHINI CENTENARIO LP770-4 BLACK 1:18 ', 1, '', '2019-06-16', 1000000, 20000, 'product_s3202.jpg', 4, 2, 1, 8),
(17, 4, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, '', '2019-06-18', 900000, 10000, 'product_s3202.jpg', 0, 1, 1, 5),
(17, 5, 'MÔ HÌNH XE LAND ROVER RANGE ROVER WHITE 1:18 GTAUTOS', 1, '', '2019-06-04', 3600000, 15000, 'product_s1298.jpg', 3, 15, 1, 35),
(1, 6, 'MÔ HÌNH XE MERCEDES-AMG GT3 PLAIN COLOR VERSION ', 1, 'aaaaaaaaaaaaaa', '2019-06-19', 3600000, 0, 'product_s3202.jpg', 15, 1, 1, 1),
(1, 7, 'MÔ HÌNH XE MERCEDES-AMG GT3 PLAIN COLOR VERSION ', 1, 'aaaaaaaaaaaaaa', '2019-06-19', 3600000, 0, 'product_s3202.jpg', 15, 1, 1, 1),
(1, 46, 'MÔ HÌNH XE DUCATI STREETFIGHTER', 1, 'aaaaaaaaaaaaa', '0000-00-00', 25000, 0, 'product_s4946.jpg', 12, 0, 0, 0),
(17, 47, 'MÔ HÌNH HONDA SH 125', 1, 'cccccccccc', '0000-00-00', 1500000, 0, 'aaa.jpg', 3, 0, 0, 0),
(17, 48, 'MÔ HÌNH YAMAHA SR400 YELLOW', 1, 'CHI TIẾT SẢN PHẨM:', '0000-00-00', 750000, 0, 'product_s4854.jpg', 3, 100, 0, 0),
(17, 49, 'MÔ HÌNH XE KAWASAKI H2R', 1, 'Tổng quan: Xe mô hình tĩnh được phân thành nhiều loại dựa theo một số tiêu chí như tỉ lệ, nhãn hiệu xe, hãng sản xuất, dòng xe , rất sắc sảo và chi tiết phản ánh một cách rất thật do tất', '0000-00-00', 1000000, 0, 'product_s3738_31778.jpg', 12, 20, 0, 0),
(17, 50, 'MÔ HÌNH XE KAWASAKI ZX-6R RED', 1, 'ccccccccccccc', '0000-00-00', 124234, 0, 'product_s3317.jpg', 3, 0, 0, 0),
(17, 51, 'MÔ HÌNH SUZUKI GSX R600 YELLOW', 1, '1111111', '0000-00-00', 1110000, 0, 'mo-hinh-xe-gsx-r600-yellow-1-12-maisto.jpg', 12, 0, 0, 0),
(17, 52, 'MÔ HÌNH DUCATI HYPERMOTARD', 1, 'Tổng quan: Xe mô hình tĩnh được phân thành nhiều loại dựa theo một số tiêu chí như tỉ lệ, nhãn hiệu xe, hãng sản xuất, dòng xe , rất sắc sảo và chi tiết phản ánh một cách rất thật do tất cả đều được mua bản quyền từ hãng sản xuất xe th', '0000-00-00', 1110000, 0, 'product_s104.jpg', 12, 0, 0, 0),
(17, 53, 'MAISTO DUCATI MULTISTRADA', 1, 'Tỉ lệ: 1/12 (Nhỏ hơn kích thước thật 12 lần)', '0000-00-00', 124234, 0, 'Annotation 2020-06-09 102537.png', 12, 0, 0, 0),
(18, 54, 'MÔ HÌNH BMW S1000RR', 1, 'ttttttttttt', '0000-00-00', 124234, 0, 'Annotation 2020-06-09 102701.png', 12, 0, 0, 0),
(17, 55, 'MÔ HÌNH KAWASAKI ZX-14R', 1, '222', '0000-00-00', 124234, 0, 'Annotation 2020-06-09 102811.png', 12, 0, 0, 0),
(17, 56, 'MAISTO KAWASAKI NINJA ZX-10R', 1, '222', '0000-00-00', 124234, 0, 'product_s4946.jpg', 12, 0, 0, 0),
(17, 57, 'MÔ HÌNH XE DUCATI 1199 PANIGALE', 1, '3333333', '0000-00-00', 750000, 0, 'Annotation 2020-06-09 102537.png', 12, 0, 0, 0),
(14, 58, 'MÔ HÌNH XE JEEP WILLYS MUI TRẦN GREY', 1, '222', '0000-00-00', 124234, 0, 'product_s5625.jpg', 12, 0, 0, 0),
(17, 59, '', 1, '222', '2020-06-20', 12, 0, '6ccdd7802c051f4398e7c23365320861.jpg', 12, 0, 0, 0),
(1, 60, 'MÔ HÌNH BUGATTI CHIRON BLACK 1:18 BBURAGO', 1, '13 Nguyên Tắc Nghĩ Giàu Làm Giàu là cuốn sách “chỉ dẫn” duy nhất chỉ ra những nguồn lực bạn phải có để thành công. Cuốn sách sẽ giúp bạn trở nên giàu có, làm giàu thêm cho cuộc sống của bạn trên tất cả các phương diện của cuộc sống chứ không chỉ về tài ch', '2020-06-20', 124234, 0, 'f260011660001af960c42d7d2f1c5dc1.jpg', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `idUser` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `HoTen` varchar(100) NOT NULL DEFAULT '',
  `Password` varchar(50) NOT NULL,
  `DiaChi` varchar(255) NOT NULL,
  `DienThoai` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `idGroup` int(11) NOT NULL DEFAULT 0,
  `GioiTinh` varchar(10) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`idUser`, `username`, `HoTen`, `Password`, `DiaChi`, `DienThoai`, `Email`, `idGroup`, `GioiTinh`, `active`) VALUES
(21, '', 'Gia Hu', 'c4ca4238a0b923820dcc509a6f75849b', '123 meo meo chấm cơm', '0912345678', 'giahu@localhost.com', 0, '0', 1),
(20, 'ti', 'Nguyễn Văn Tí', 'c4ca4238a0b923820dcc509a6f75849b', '456, abc chấm  cơm chấm vê en', '089874563', 'ti@localhost.com', 1, '0', 0),
(22, '', 'Nguyễn Văn Tèo', 'c4ca4238a0b923820dcc509a6f75849b', '789 gia hu chấm vê en', '32648372', 'teo@localhost.com', 1, '0', 0),
(27, 'bbbb', 'bbbb', 'eeeee', 'aa', '0354448383', 'linhsonbt@gmail.com', 0, '0', 0),
(26, 'aaaaaa', 'tttt', 'qqqq', '165/3a vườn lài', '0354448383', 'dxdg646@outlook.com', 0, '0', 0),
(28, 'ee', 'eê', 'bbbb', 'aa', '0354448383', 'dxdg62@outlook.com', 0, '0', 0),
(29, 'aaaaaa', 'ccc', 'ccc', '165/3a vườn lài', '0354448383', 'phannkhai98@gmail.com', 0, '', 0),
(31, 'aaaaaa', 'bbbbbb', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', 'bbbbbbbbb@gmail.com', 0, '', 0),
(32, '1', '1', 'c4ca4238a0b923820dcc509a6f75849b', '1', '1', '13124469@st.hcmuaf.edu.vn', 0, '', 0),
(33, '3', 'Khải', '3', '3', '3', '3', 1, '', 0),
(34, '3', '3', 'a87ff679a2f3e71d9181a67b7542122c', '3', '3', '3@gmail.com', 0, '', 0),
(35, '2', '2', '2', '165/3a vườn lài', '0354448383', '2222222@gmal.com', 0, '', 0),
(36, 'e', 'e', 'e1671797c52e15f763380b45e841ec32', '165/3a vườn lài', '0354448383', 'e@gmail.com', 0, '', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  ADD PRIMARY KEY (`idcl`);

--
-- Chỉ mục cho bảng `donhang`
--
ALTER TABLE `donhang`
  ADD PRIMARY KEY (`idDH`);

--
-- Chỉ mục cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  ADD PRIMARY KEY (`idChiTiet`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`idSP`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmucsp`
--
ALTER TABLE `danhmucsp`
  MODIFY `idcl` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT cho bảng `donhang`
--
ALTER TABLE `donhang`
  MODIFY `idDH` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=100;

--
-- AUTO_INCREMENT cho bảng `donhangchitiet`
--
ALTER TABLE `donhangchitiet`
  MODIFY `idChiTiet` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `idSP` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `idUser` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
