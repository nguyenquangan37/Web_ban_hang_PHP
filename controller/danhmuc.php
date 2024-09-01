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
		$danhmuc = $this->model->getDanhMuc($_GET['id']);
		if(is_null($danhmuc)){
			require_once('./view/error.php');
		} else {
			$listsanpham = $this->model->getsSanPhamByID($_GET['id']);
			if(is_null($listsanpham)){
				$dulieutrong = true;
			}
			require_once('./view/danhmuc.php');
		}
		
	}

	public function error(){
		require_once('./view/error.php');
	}
}

 ?>