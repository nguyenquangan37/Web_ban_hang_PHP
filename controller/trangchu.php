<?php 
class Controller
{
	protected $model;
	public function __construct(){
		require_once('./model/model.php');
		$this->model = new Model();
	}

	public function index(){
		$listdanhmuc = $this->model->getsDanhMuc();
		$listsanpham = $this->model->getsSanPham();
		$listNuocngot = $this->model->getsNuocngot();
		$listTra = $this->model->getsTra();
		require_once('./view/trangchu.php');
	}

	public function user(){
		$listdanhmuc = $this->model->getsDanhMuc();
		$listsanpham = $this->model->getsSanPham();
		require_once('./view/user.php');
	}
}

 ?>