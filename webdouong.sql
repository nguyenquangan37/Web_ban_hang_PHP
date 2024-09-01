SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


--
-- Cấu trúc bảng cho bảng `danhmuc`
--

CREATE TABLE `danhmuc` (
  `id_danhmuc` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `anhdaidien` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `danhmuc`
--

INSERT INTO `danhmuc` (`id_danhmuc`, `ten`, `mota`, `anhdaidien`) VALUES
(1, 'Nước ngọt', 'Các loại sản phẩm nước ngọt', 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_103x103/https://cdn.tgdd.vn/Products/Images/2443/bhx/nuoc-ngot-202210311315510981.png'),
(2, 'Trà,cà phê', 'Các loại trà,ca phê hoà tan,cà phê lon,cà phê pha phin', 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_103x103/https://cdn.tgdd.vn/Products/Images/2524/bhx/ca-phe-hoa-tan-202212051448395456.png'),
(3, 'Nước trái cây', 'Các loại nước ép được chiết xuất từ trái cây', 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_103x103/https://cdn.tgdd.vn/Products/Images/3265/bhx/nuoc-ep-trai-cay-202212051444585466.png'),
(4, 'Nước suối', 'Nước tinh khiết đóng chai', 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_103x103/https://cdn.tgdd.vn/Products/Images/2563/bhx/nuoc-suoi-202210311319484504.png');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hoadon`
--

CREATE TABLE `hoadon` (
  `id_hoadon` int(10) NOT NULL,
  `listidsanpham` varchar(255) NOT NULL,
  `listsoluongsanpham` varchar(500) NOT NULL,
  `tongtien` varchar(255) NOT NULL,
  `idthanhvien` int(10) NOT NULL,
  `ngaygiaohang` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `tinhtrang` tinyint(1) NOT NULL DEFAULT 0,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `diachi` text NOT NULL,
  `listmausac` varchar(255) NOT NULL,
  `phuongthuc` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `hoadon`
--

INSERT INTO `hoadon` (`id_hoadon`, `listidsanpham`, `listsoluongsanpham`, `tongtien`, `idthanhvien`, `ngaygiaohang`, `tinhtrang`, `hoten`, `email`, `sodienthoai`, `diachi`, `phuongthuc`) VALUES
(3, '8|4', '2|1', '100', 1, '2023-11-20 17:00:00', 0, 'Nguyễn Quang An', 'an@gmail.com', '1', 'Hà nội', 0);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `id_sanpham` int(10) NOT NULL,
  `ten` varchar(255) NOT NULL,
  `gia` varchar(255) NOT NULL,
  `mota` text NOT NULL,
  `anhdaidien` varchar(255) NOT NULL,
  `soluong` varchar(255) NOT NULL,
  `iddanhmuc` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`id_sanpham`, `ten`, `gia`, `mota`, `anhdaidien`, `soluong`, `iddanhmuc`) VALUES
(1, '6 lon nước ngọt Coca cola', '47', 'Là loại nước ngọt được nhiều người yêu thích với hương vị thơm ngon, sảng khoái. 6 lon nước ngọt Coca Cola 320ml chính hãng nước ngọt Coca Cola với lượng gas lớn sẽ giúp bạn xua tan mọi cảm giác mệt mỏi, căng thẳng, đem lại cảm giác thoải mái sau khi hoạt động ngoài trời.', 'https://cdn.tgdd.vn/Products/Images/2443/125398/bhx/6-lon-nuoc-ngot-coca-cola-320ml-202303181532309738.jpg', '10', 1),
(2, '6 lon nước ngọt pepsi', '46', 'Từ thương hiệu nước ngọt có gas nổi tiếng toàn cầu - nước ngọt Pepsi - với mùi vị thơm ngon với hỗn hợp hương tự nhiên cùng chất tạo ngọt tổng hợp, giúp xua tan cơn khát và cảm giác mệt mỏi.  6 lon nước ngọt Pepsi Cola 320ml bổ sung năng lượng làm việc mỗi ngày\r\n', 'https://cdn.tgdd.vn/Products/Images/2443/91048/bhx/6-lon-nuoc-ngot-pepsi-cola-320ml-202303151109096736.jpg', '10', 1),
(3, '6 lon nước ngọt mirinda cam', '44', 'Sản phẩm nước ngọt giải khát từ thương hiệu nước ngọt Mirinda nổi tiếng được nhiều người ưa chuộng. 6 lon nước ngọt Mirinda cam lon 320ml với hương vị cam đặc trưng, không chỉ giải khát, mà còn bổ sung thêm vitamin C giúp lấy lại năng lượng cho hoạt động hàng ngày\r\n', 'https://img.tgdd.vn/imgt/f_webp,fit_outside,quality_100,s_288x288/https://cdn.tgdd.vn/Products/Images/2443/195222/bhx/6-lon-nuoc-ngot-mirinda-vi-cam-320ml-202212130058597491_300x300.jpg', '50', 1),
(4, 'Hộp 5 gói nước cốt cà phê đen NesCafé 75ml', '50', 'Sản phẩm được mô phỏng kỹ thuật pha phin bao gồm nén, ủ và chiết giữ lại hương vị cà phê đậm đà truyền thống. Hộp 5 gói nước cốt cà phê đen NesCafé 75ml chính hãng cà phê Nescafé tiện lợi, chỉ cần thêm đá dùng ngay, chất lượng như cà phê phin, nhanh chóng như cà phê hòa tan\r\n', 'https://cdn.tgdd.vn/Products/Images/2524/315640/bhx/hop-5-goi-nuoc-cot-ca-phe-den-nescafe-75ml-202310071643274769.jpg', '10', 2),
(5, 'Hộp 5 gói nước cốt cà phê sữa NesCafé 75ml', '50', 'Chất cà phê phin mà lại nhanh chóng như cà phê hòa tan chính là nước cốt cà phê được chiết xuất từ bột cà phê rang xay, mô phỏng kỹ thuật ủ cà phê phin, giữ lại nước cốt đầu tinh túy. Hộp 5 gói nước cốt cà phê sữa NesCafé 75ml chính hãng cà phê Nescafé cho bạn nguồn năng lượng sảng khoái', 'https://cdn.tgdd.vn/Products/Images/2524/315645/bhx/hop-5-goi-nuoc-cot-ca-phe-sua-nescafe-75ml-202310071649230451.jpg', '20', 2),
(6, 'Trà Cozy hương đào hộp 50g (25 gói x 2g)', '30', 'Được sản xuất từ búp trà tươi chọn lọc, được hái và chế biến theo quy trình kỹ thuật nghiêm ngặt hòa quyện cùng hương đào đầy hấp dẫn cho hương thơm thanh khiết giúp tinh thần tỉnh táo, thư giãn, thanh nhiệt. Trà Cozy hương đào 25 túi x 2g chính hãng trà Cozy an toàn, chất lượng cao', 'https://cdn.tgdd.vn/Products/Images/2385/83473/bhx/tra-cozy-huong-dao-hop-50g-25-goi-x-2g-202303141613448012.jpg', '10', 2),
(7, 'Nước cam ép Twister 1 lít', '17', 'Chiết xuất từ những tép cam tươi nguyên chất tươi ngon và bổ dưỡng kết hợp công nghệ sản xuất hiện đại, mang lại thức uống có hương vị thơm ngon, tốt cho sức khỏe, giúp xua tan mọi cảm giác mệt mỏi, căng thẳng ngay tức thì, đem lại cảm giác thoải mái nhất sau mỗi lần sử dụng.', 'https://cdn.tgdd.vn/Products/Images/3265/219795/bhx/nuoc-cam-ep-twister-1-lit-202305290904175644.jpg', '10', 3),
(8, 'Nước táo tự nhiên TH True Juice 350ml', '19', 'Dạng nước ép trái cây từ tương hiệu TH True Juice an toàn, chất lượng. Nước táo tự nhiên TH True Juice chai 350ml với 99,96% nước táo ép cô đặc tăng cường các hoạt chất chống oxy hóa và khả năng miễn dịch của cơ thể. Hương vị đặc trưng thơm ngon, mang giá trị dinh dưỡng cao tốt cho sức khỏe.', 'https://cdn.tgdd.vn/Products/Images/3265/259881/bhx/nuoc-tao-tu-nhien-th-true-juice-350ml-202111271126218789.jpg', '10', 3),
(9, 'Nước tinh khiết Aquafina 355ml', '5', 'Nước tinh khiết của thương hiệu nước suối Aquafina được lấy từ nguồn nước ngầm đảm bảo  trải qua quy trình khử trùng, lọc sạch các tạp chất. Nước tinh khiết Aquafina 355ml đã đạt tới trình độ nước tinh khiết có tác dụng dịu cơn khát, khi uống sẽ có cảm giác hơi ngọt ở miệng, rất dễ uống.', 'https://cdn.tgdd.vn/Products/Images/2563/76508/bhx/nuoc-tinh-khiet-aquafina-355ml-202309121110214876.jpg', '10', 4);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `thanhvien`
--

CREATE TABLE `thanhvien` (
  `id_thanhvien` int(10) NOT NULL,
  `tendangnhap` varchar(255) NOT NULL,
  `matkhau` varchar(255) NOT NULL,
  `hoten` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `sodienthoai` varchar(15) NOT NULL,
  `diachi` text NOT NULL,
  `level` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `thanhvien`
--

INSERT INTO `thanhvien` (`id_thanhvien`, `tendangnhap`, `matkhau`, `hoten`, `email`, `sodienthoai`, `diachi`, `level`) VALUES
(1, 'an', '123456', 'Nguyễn Quang An', 'an@gmail.com', '0022222', 'Hà nội', 1),
(2, 'tuananh', '123456', 'Nguyễn Tuấn Anh', 'ntak.ictu@gmail.com', '0987196812', 'Thái Bình', 0),
(3, 'nguoidung1', 'matkhau1', 'trần nguyên', 'tntchuoixanh@gmail.com', '114', 'đại từ - thái nguyên', 0),
(4, '1', '', '', '', '', '', 0),
(5, '15', '', '', '', '', '', 0),
(8, 'an1', '123456', 'Quang an', 'qqdasda@gmail.com', '031233456', 'Hà nội', 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  ADD PRIMARY KEY (`id_danhmuc`);

--
-- Chỉ mục cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  ADD PRIMARY KEY (`id_hoadon`);

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id_sanpham`);

--
-- Chỉ mục cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  ADD PRIMARY KEY (`id_thanhvien`),
  ADD UNIQUE KEY `tendangnhap` (`tendangnhap`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `danhmuc`
--
ALTER TABLE `danhmuc`
  MODIFY `id_danhmuc` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `hoadon`
--
ALTER TABLE `hoadon`
  MODIFY `id_hoadon` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id_sanpham` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `thanhvien`
--
ALTER TABLE `thanhvien`
  MODIFY `id_thanhvien` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
