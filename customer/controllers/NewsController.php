<?php 
	//include file model vao day
	include "models/NewsModel.php";
	class NewsController extends Controller{
		//ke thua class UserModel
		use NewsModel;
		public function index(){
			//Quy dinh so ban ghi tren mot trang
			$recordPerPage = 6;
			//tinh so trang
			//ham ceil(so) se lay gia tri lam tron ten cua so do VD: ceil(3.1)=4
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("NewsView.php",["data"=>$data, "numPage"=>$numPage]);
		}
		public function detail(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//lay mot ban ghi
			$record = $this->modelGetRecord();
			//goi view
			$this->loadView("NewsDetailView.php",["record"=>$record]);
		}
	}
 ?>