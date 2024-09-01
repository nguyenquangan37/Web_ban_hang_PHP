<?php 
class Model
{
	protected $host,$db,$user,$pass,$conn;
	public function __construct(){
		$this->host = 'localhost';
		$this->db = 'webdouong';
		$this->user = 'root';
		$this->pass = '';
		$this->conn = new mysqli($this->host,$this->user,$this->pass,$this->db);
		if($this->conn->connect_error){
			die($this->conn->connect_error);
		}
		$this->conn->set_charset("utf8");
	}

	public function getsDanhMuc(){
		$sql = "SELECT * FROM danhmuc";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}	
	}

	public function getsSanPham($limit=4){
		$sql = "SELECT * FROM sanpham ORDER BY RAND() LIMIT $limit";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsSanPhamByID($id,$limit=4){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id ORDER BY id_sanpham DESC LIMIT $limit";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsNuocngot(){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=1 ORDER BY id_sanpham DESC LIMIT 4";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsTra(){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=2 ORDER BY id_sanpham DESC LIMIT 4";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getsHoaDon($limit=5){
		$sql = "SELECT * FROM hoadon LIMIT $limit";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result;
		} else {
			return null;
		}
	}

	public function getSanPham($id){
		$sql = "SELECT * FROM sanpham WHERE id_sanpham=$id";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->fetch_assoc();
		} else {
			return null;
		}
	}

	public function getDanhMuc($id){
		$sql = "SELECT * FROM danhmuc WHERE id_danhmuc=$id";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->fetch_assoc();
		} else {
			return null;
		}
	}

	public function getThanhVien($tendangnhap,$matkhau){
		$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap' AND matkhau='$matkhau'";	
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result->num_rows > 0)
			return $result->fetch_assoc();
		return false;
	}

	public function getThanhVienByID($id){
		$sql = "SELECT * FROM thanhvien WHERE id_thanhvien=$id";	
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result->num_rows > 0)
			return $result->fetch_assoc();
		return false;
	}

	public function checkThanhVien($tendangnhap,$matkhau){
		$sql = "SELECT * FROM thanhvien WHERE tendangnhap='$tendangnhap' AND matkhau='$matkhau'";	
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result->num_rows > 0)
			return true;
		return false;
	}

	public function addThanhVien($thongtin){
		$sql = "INSERT INTO thanhvien (tendangnhap,matkhau,hoten,email,sodienthoai,diachi) VALUES ('".$thongtin['tendangnhap']."','".$thongtin['matkhau']."','".$thongtin['hoten']."','".$thongtin['email']."','".$thongtin['sodienthoai']."','".$thongtin['diachi']."')";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		//var_dump($r);exit;
		if($result) return true;
		return false;
	}

	public function addDanhMuc($thongtin){
		$sql = "INSERT INTO danhmuc (ten,mota,anhdaidien) VALUES ('".$thongtin['ten']."','".$thongtin['mota']."','".$thongtin['anhdaidien']."')";
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function addSanPham($thongtin){
		$sql = "INSERT INTO sanpham (ten,gia,mota,anhdaidien,soluong,iddanhmuc) VALUES ('".$thongtin['ten']."','".$thongtin['gia']."','".$thongtin['mota']."','".$thongtin['anhdaidien']."','".$thongtin['soluong']."','".$thongtin['danhmuc']."')";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function addHoaDon($thongtin){
		$sql = "INSERT INTO hoadon (listidsanpham,listsoluongsanpham,tongtien,idthanhvien,ngaygiaohang,hoten,email,sodienthoai,diachi,phuongthuc) VALUES ('".$thongtin['listidsanpham']."','".$thongtin['listsoluongsanpham']."','".$thongtin['tongtien']."','".$thongtin['idthanhvien']."','".$thongtin['ngaygiaohang']."','".$thongtin['hoten']."','".$thongtin['email']."','".$thongtin['sodienthoai']."','".$thongtin['diachi']."','".$thongtin['phuongthuc']."')";
		//var_dump($sql);
		$result = $this->conn->query($sql);
		if($result) return true;
		return false;
	}

	public function countSanPham($id_danhmuc){
		$sql = "SELECT * FROM sanpham WHERE iddanhmuc=$id_danhmuc";
		$result = $this->conn->query($sql);
		if($result->num_rows > 0){
			return $result->num_rows;
		} else {
			return 0;
		}
	}

	public function editDanhMuc($thongtin,$id){
		$sql = "UPDATE danhmuc SET 
		ten='".$thongtin['ten']."',mota='".$thongtin['mota']."',
		anhdaidien='".$thongtin['anhdaidien']."' WHERE id_danhmuc=".$id;
		//var_dump($sql);			
		$r = $this->conn->query($sql);
		//var_dump($r);exit;
		if($r) return true;
		return false;
	}

	public function deleteDanhMuc($id) {
        $sql = "DELETE FROM danhmuc WHERE id_danhmuc = $id";
        if ($this->conn->query($sql) === TRUE) {
            return true; // Xoá thành công
        } else {
            return false; // Xoá thất bại
        }
    }
	public function deleteSanpham($id) {
        $sql = "DELETE FROM sanpham WHERE id_sanpham = $id";
        if ($this->conn->query($sql) === TRUE) {
            return true; // Xoá thành công
        } else {
            return false; // Xoá thất bại
        }
    }
	public function editSanPham($thongtin,$id){
		$sql = "UPDATE sanpham SET 
		ten='".$thongtin['ten']."',mota='".$thongtin['mota']."',
		gia='".$thongtin['gia']."',
		anhdaidien='".$thongtin['anhdaidien']."',
		soluong='".$thongtin['soluong']."',
		iddanhmuc='".$thongtin['danhmuc']."' WHERE id_sanpham=".$id;
		//var_dump($sql);			
		$r = $this->conn->query($sql);
		//var_dump($r);exit;
		if($r) return true;
		return false;
	}
}

 ?>

