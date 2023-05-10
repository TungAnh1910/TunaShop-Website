<?php 
	//load file model
	include "models/HotProductsModel.php";
	class HotProductsController extends Controller{
		//ke thua class HomeModel
		use HotProductsModel;
		public function index(){
			$this->loadView("HotProductsView.php");
		}
	}
 ?>
