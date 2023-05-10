<?php 
	include "models/OrdersModel.php";
	class ManagerOrdersController extends Controller{
		use OrdersModel;
		public function index(){
			//quy dinh so ban ghi tren mot trang
			$recordPerPage = 20;
			//tinh so trang
			$numPage = ceil($this->modelTotalRecord()/$recordPerPage);
			//lay du lieu tu model
			$data = $this->modelRead($recordPerPage);
			//goi view, truyen du lieu ra view
			$this->loadView("ManagerOrdersView.php",["data"=>$data,"numPage"=>$numPage]);
		}
		public function detail(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$data = $this->modelOrdersDetail($id);
			//goi view, truyen du lieu ra view
			$this->loadView("ManagerOrdersDetailView.php",["data"=>$data,"id"=>$id]);
		}
		//xac nhan da giao hang
		public function delivery(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->modelDelivery($id);
			header("location:index.php?controller=managerorders");
		}
		public function cancel(){
			$id = isset($_GET["id"]) ? $_GET["id"] : 0;
			$this->modelCancel($id);
			header("location:index.php?controller=orders");
		}
		public function delete(){
			$id = isset($_GET["id"]) && $_GET["id"] > 0 ? $_GET["id"] : 0;
			//goi ham modelDelete
			$this->modelDelete();
			//quay tro lai trang categories
			header("location:index.php?controller=managerorders");
		}
	}
 ?>