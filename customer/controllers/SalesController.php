<?php 
	//load file model
	include "models/SalesModel.php";
	class SalesController extends Controller{
		//ke thua class HomeModel
		use SalesModel;
		public function index(){
			$recordPerPage = 30;
			$this->loadView("SalesView.php");
		}
	}
 ?>